<?php
class PublishersController extends AppController {

	var $name = 'Publishers';

        function index() {
		//$this->Publisher->recursive = 0;
		$this->set('publishers', $this->paginate());
                $this->loadModel('Publication');
	        return $this->Publication->find('all', array('order' => 'Publication.visitorsip DESC', 'limit' => 20));
                $this->loadModel('Country');
                $this->set('countries', $this->Country->find('list'));
                
	}

        public function plshers($limit=20) {
		/* We retrieve only the required fields, and configure the query. */
                $publishers = $this->Publisher>find('list', array('fields'=>array('Publisher.id', 'Publisher.publisher_name', 'Publisher.notes'),
                                                                   'recursive'=>0,
                                                                   'order'=>array('Publisher.publisher_name desc'),
                                                                   'limit'=>$limit));

                if(isset($this->params['requested']))
                {
                        return $publishers;
                }

                $this->set('plshers', $publishers);
                
	}
	function view($id = null) {
		$this->Publisher->id = $id;
		if (!$this->Publisher->exists()) {
			throw new NotFoundException(__('Invalid publisher'));
		}
		$this->set('publisher', $this->Publisher->read(null, $id));
                $this->loadModel('Publication');
                $publication = $this->Publication->find();
		$this->set(compact('publication', $publication));
                $this->loadModel('Country');
                $countries = $this->Publisher->find('list',array('fields'=>array('country_id')));//['Publisher']['country_id'];
                $this->set(compact('countries', $this->Country->find('list',array('fields'=>array('name')))));
		$users = $this->Publisher->User->find('list');
		$this->set(compact('users'));
                
	}

	function createsubdomain($id = null) {
              /*      
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Subdomain', true));
			$this->redirect(array('action' => 'view'));
		}
		if (!empty($this->data)) {
			if ($this->save($this->data)) {
				$this->Session->setFlash(__('Subdomain has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Subdomain could not be created. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Publisher->read(null, $id);
                        
			}
                $this->loadModel('Publisher');
                $publisher = $this->Publisher->findbyId($id);
                $this->set('publishers', $this->Publisher->find('list',array('fields'=>array('publisher_name'))));
                $this->set('publisher', $publisher);*/
        }

	function add() {
		if ($this->request->is('post')) {
                        $src = '/Users/muluba/Sites/public_html/publisher';
                        $dest = '/Users/muluba/Sites/public_html/'.$this->data['Publisher']['publisher_name'];
                        $output = shell_exec( " cp -R -a $src* $dest 2>&1 " );
                        echo $output;
                    $this->Publisher->create();
			if ($this->Publisher->saveAll($this->request->data)) {
				$this->Session->setFlash(__('Publisher has been saved', true));
				$this->redirect(array('action' => 'create_subdomain', $this->Publisher->id));
                        
			} else {
				$this->Session->setFlash(__('The publisher could not be saved. Please, try again.', true));
			}
		}
                
                $this->loadModel('Country');
                $this->set('countries', $this->Country->find('list',array('fields'=>array('name'))));
		$users = $this->Publisher->User->find('list');
		$this->set(compact('users'));
                
	}

	function edit($id = null) {
		$this->Publisher->id = $id;
		if (!$this->Publisher->exists()) {
			throw new NotFoundException(__('Invalid publisher'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Publisher->saveAll($this->data)) {
				$this->Session->setFlash(__('The publisher has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The publisher could not be saved. Please, try again.', true));
			}
		} else {
			$this->request->data = $this->Publisher->read(null, $id);
		}
                $this->loadModel('Publisher');
                $publisher = $this->Publisher->id;
		$this->set(compact('publisher', $publisher));
                $this->loadModel('Country');
                $countries = $this->Publisher->Country->find();
                $this->set('countries', $this->Publisher->Country->find('list',array('fields'=>array('name'))));
		$users = $this->Publisher->User->find('list');
		$this->set(compact('users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for publisher', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Publisher->delete($id)) {
			$this->Session->setFlash(__('Publisher deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Publisher was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>