<?php
/**
 * Publications Controller
 *
 */
//App::import('Sanitize');

class PublicationsController extends AppController {
          
/**
 * Helpers
 *
 * @var array
 */ 
    var $helpers = array('Session','Js','Ajax','Form','FormKeeper.FormKeeper','FlashHelper','Popup.Popup' => array('Jquery'));
/**
 * Components
 *
 * @var array
 */
	public $components = array('RequestHandler');

/**
 * index method
 *
 * @return void
*/
		
        public function beforeFilter(){
                if($this->RequestHandler->isAjax()){
                  $this->layout = "ajax";
                }
                // Pagination options
                $this->set('paginationOptions', array(1, 5, 10, 25, 50, 100));
                $this->set('paginationLimit', $this->_paginationLimit());
                }
              
        protected function _setPaginate($options = array()) {
                $defaults = array(
                'limit' => $this->_paginationLimit()
                );

                $this->paginate = array_merge($defaults, $options);
                }
                
        protected function _paginationLimit() {
                if (isset($this->params['named']['Paginate'])) {
                $this->Session->write('Pagination.limit', $this->params['named']['Paginate']);
                }
                // On two lines for blog readability.
                return ($this->Session->check('Pagination.limit') ? $this->Session->read('Pagination.limit') :
                Configure::read('SiteSettings.default_pagination_limit'));
                }

	public function frontview() {
		$this->Publication->recursive = 0;
		$this->set('publications', $this->paginate());
		$publisher = $this->Publication->find();
		$this->set(compact('publisher', $publisher));
                $publication = $this->Publication->find();
		$this->set('publication', $publication);
	}

	public function index() {
                $this->loadModel('Publication');
		$this->Publication->recursive = 0;
		$this->set('publications', $this->paginate());
		$publisher = $this->Publication->find();
		$this->set(compact('publisher', $publisher));
	}
        
        public function popularpubs()
        {
            $this->paginate = array(
                'Publication'    => array(
                    'limit'    => 20,
                    'order'    => array(
                        'Publication.visitorsip'    => 'desc')
                )
            );

            $this->set('publications', $this->paginate());
		
        }
        
        public function lastpubs()
        {
            $this->paginate = array(
                'Publication'    => array(
                    'limit'    => 20,
                    'order'    => array(
                        'Publication.created'    => 'desc')
                )
            );

            $this->set('publications', $this->paginate());

        }
	public function alls() 
        {
                $this->paginate = array(
                'contain' => array('Publication')
                );
                $this->set('publications', $this->paginate());
        }
        
	public function elpopularPubs() 
        {
            $publications = $this->paginate();
        if (isset($this->params['requested'])) {
            return $publications;
        } else {
            $this->set('publications', $publications);
        }
	//return $this->Publication->find('elpopularPubs', array('order' => 'Publication.visitorsip DESC', 'limit' => 20));
        }
        
	public function elpopularPubs1() 
        {
            $publications = $this->paginate();
        if (isset($this->params['requested'])) {
            return $publications;
        } else {
            $this->set('publications', $publications);
        }
	//return $this->Publication->find('elpopularPubs1', array('order' => 'Publication.visitorsip DESC', 'limit' => 10));
        }
	public function ellastPubs() 
        {
            $publications = $this->paginate();
        if (isset($this->params['requested'])) {
            return $publications;
        } else {
            $this->set('publications', $publications);
        }
	//return $this->Publication->find('ellastPubs', array('order' => 'Publication.created DESC', 'limit' => 20));
        }
        
        /*
         * Types
         */
        
        public function tartessays()
        {
           $conditions['`Publication`.`type`'] = '1'; 
            $this->paginate = array(
                'Publication'    => array(
                    'limit'    => 20,
                    'conditions'=>$conditions,
                    'order'    => array(
                        'Publication.created'    => 'desc')
                )
            );

            $this->set('publications', $this->paginate());
        }
        
        public function tbooks()
        {  
            $conditions['`Publication`.`type`'] = '2'; 
            $this->paginate = array(
                'Publication'    => array(
                    'limit'    => 20,
                    'conditions'=>$conditions,
                    'order'    => array(
                        'Publication.created'    => 'desc')
                )
            );

            $this->set('publications', $this->paginate());

        }
           
        public function tcatalogs()
        {  
            $conditions['`Publication`.`type`'] = '3'; 
           $this->paginate = array(
                'Publication'    => array(
                    'limit'    => 20,
                    'conditions'=>$conditions,
                    'order'    => array(
                        'Publication.created'    => 'desc')
                )
            );

            $this->set('publications', $this->paginate());

        }
        
        public function tjournals()
        {
            $conditions['`Publication`.`type`'] = '4'; 
           $this->paginate = array(
                'Publication'    => array(
                    'limit'    => 20,
                    'conditions'=>$conditions,
                    'order'    => array(
                        'Publication.created'    => 'desc')
                )
            );

            $this->set('publications', $this->paginate());

        }
        public function tmagzs()
        {
            $conditions['`Publication`.`type`'] = '5'; 
           $this->paginate = array(
                'Publication'    => array(
                    'limit'    => 20,
                    'conditions'=>$conditions,
                    'order'    => array(
                        'Publication.created'    => 'desc')
                )
            );

            $this->set('publications', $this->paginate());

        }
        
        public function tmanresorces()
        {
            $conditions['`Publication`.`type`'] = '6'; 
            $this->paginate = array(
                'Publication'    => array(
                    'limit'    => 20,
                    'conditions'=>$conditions,
                    'order'    => array(
                        'Publication.created'    => 'desc')
                )
            );

            $this->set('publications', $this->paginate());

        }
        public function tnews()
        {
            $conditions['`Publication`.`type`'] = '7'; 
           $this->paginate = array(
                'Publication'    => array(
                    'limit'    => 20,
                    'conditions'=>$conditions,
                    'order'    => array(
                        'Publication.created'    => 'desc')
                )
            );

            $this->set('publications', $this->paginate());

        }
        
        public function tpapers()
        {
            $conditions['`Publication`.`type`'] = '8'; 
           $this->paginate = array(
                'Publication'    => array(
                    'limit'    => 20,
                    'conditions'=>$conditions,
                    'order'    => array(
                        'Publication.created'    => 'desc')
                )
            );

            $this->set('publications', $this->paginate());

        }
        public function tphotalbums()
        {
            $conditions['`Publication`.`type`'] = '9'; 
           $this->paginate = array(
                'Publication'    => array(
                    'limit'    => 20,
                    'conditions'=>$conditions,
                    'order'    => array(
                        'Publication.created'    => 'desc')
                )
            );

            $this->set('publications', $this->paginate());

        }
        
        public function tportfolios()
        {
            $conditions['`Publication`.`type`'] = '10'; 
           $this->paginate = array(
                'Publication'    => array(
                    'limit'    => 20,
                    'conditions'=>$conditions,
                    'order'    => array(
                        'Publication.created'    => 'desc')
                )
            );

            $this->set('publications', $this->paginate());

        }
        public function tpresents()
        {
            $conditions['`Publication`.`type`'] = '11'; 
           $this->paginate = array(
                'Publication'    => array(
                    'limit'    => 20,
                    'conditions'=>$conditions,
                    'order'    => array(
                        'Publication.created'    => 'desc')
                )
            );

            $this->set('publications', $this->paginate());

        }
        
        public function treports()
        {
            $conditions['`Publication`.`type`'] = '12'; 
           $this->paginate = array(
                'Publication'    => array(
                    'limit'    => 20,
                    'conditions'=>$conditions,
                    'order'    => array(
                        'Publication.created'    => 'desc')
                )
            );
            $this->set('publications', $this->paginate());

        }
        public function tothers()
        {
            $conditions['`Publication`.`type`'] = '13'; 
           $this->paginate = array(
                'Publication'    => array(
                    'limit'    => 20,
                    'conditions'=>$conditions,
                    'order'    => array(
                        'Publication.created'    => 'desc')
                )
            );

            $this->set('publications', $this->paginate());

        }
         /*
         * Categories
         */
        
        public function centertleisures()
        {
            $conditions['`Publication`.`type`'] = '1'; 
        $this->paginate = array(
                'Publication'    => array(
                    'limit'    => 20,
                    'conditions'=>$conditions,
                    'order'    => array(
                        'Publication.created'    => 'desc')
                )
            );

            $this->set('publications', $this->paginate());

        }
        public function cbusinessfinances()
        {  
            $conditions['`Publication`.`type`'] = '2'; 
           $this->paginate = array(
                'Publication'    => array(
                    'limit'    => 20,
                    'conditions'=>$conditions,
                    'order'    => array(
                        'Publication.created'    => 'desc')
                )
            );

            $this->set('publications', $this->paginate());

        }
           
        public function chobbies()
        {  
            $conditions['`Publication`.`type`'] = '3'; 
            $this->paginate = array(
                'Publication'    => array(
                    'limit'    => 20,
                    'conditions'=>$conditions,
                    'order'    => array(
                        'Publication.created'    => 'desc')
                )
            );

            $this->set('publications', $this->paginate());

        }
        
        public function claworders()
        {
            $conditions['`Publication`.`type`'] = '4'; 
           $this->paginate = array(
                'Publication'    => array(
                    'limit'    => 20,
                    'conditions'=>$conditions,
                    'order'    => array(
                        'Publication.created'    => 'desc')
                )
            );

            $this->set('publications', $this->paginate());

        }
        public function cfictions()
        {
            $conditions['`Publication`.`type`'] = '5'; 
           $this->paginate = array(
                'Publication'    => array(
                    'limit'    => 20,
                    'conditions'=>$conditions,
                    'order'    => array(
                        'Publication.created'    => 'desc')
                )
            );

            $this->set('publications', $this->paginate());

        }
        
        public function chistories()
        {
            $conditions['`Publication`.`type`'] = '6'; 
          $this->paginate = array(
                'Publication'    => array(
                    'limit'    => 20,
                    'conditions'=>$conditions,
                    'order'    => array(
                        'Publication.created'    => 'desc')
                )
            );

            $this->set('publications', $this->paginate());

         }
        public function cselves()
        {
            $conditions['`Publication`.`type`'] = '7'; 
           $this->paginate = array(
                'Publication'    => array(
                    'limit'    => 20,
                    'conditions'=>$conditions,
                    'order'    => array(
                        'Publication.created'    => 'desc')
                )
            );

            $this->set('publications', $this->paginate());

        }
        
        public function cspecialinterests()
        {
            $conditions['`Publication`.`type`'] = '8'; 
           $this->paginate = array(
                'Publication'    => array(
                    'limit'    => 20,
                    'conditions'=>$conditions,
                    'order'    => array(
                        'Publication.created'    => 'desc')
                )
            );

            $this->set('publications', $this->paginate());

        }
        public function chealthlivings()
        {
            $conditions['`Publication`.`type`'] = '9'; 
            $this->paginate = array(
                'Publication'    => array(
                    'limit'    => 20,
                    'conditions'=>$conditions,
                    'order'    => array(
                        'Publication.created'    => 'desc')
                )
            );

            $this->set('publications', $this->paginate());

        }
        
        public function cgeneralinterests()
        {
            $conditions['`Publication`.`type`'] = '10'; 
           $this->paginate = array(
                'Publication'    => array(
                    'limit'    => 20,
                    'conditions'=>$conditions,
                    'order'    => array(
                        'Publication.created'    => 'desc')
                )
            );

            $this->set('publications', $this->paginate());

        }
        public function ceducationals()
        {
            $conditions['`Publication`.`type`'] = '11'; 
           $this->paginate = array(
                'Publication'    => array(
                    'limit'    => 20,
                    'conditions'=>$conditions,
                    'order'    => array(
                        'Publication.created'    => 'desc')
                )
            );

            $this->set('publications', $this->paginate());

        }
        
        
        function viewall() {
            
	}
        /*
        function search() {
            if (!empty ($this->data['Search']['name'])) {
		// the page we will redirect to
		$url['action'] = 'showsearch';
		
		// build a URL will all the search elements in it
		// the resulting URL will be 
		// example.com/cake/publications/index/Search.keywords:mykeyword/Search.tag_id:3
		foreach ($this->data as $k=>$v){ 
			foreach ($v as $kk=>$vv){ 
				$url[$k.'.'.$kk]=$vv; 
			} 
		}

		// redirect the user to the url
		$this->redirect($url, null, true);
                } else {
			$this->Session->setFlash(__('Please enter shearch keywords to procced.', true));
				$this->redirect(array('action' => 'index'));
			}
	}
        function showsearch() {
            if(isset($this->data['Search']['name'])) {
                    $this->data['Search']['name'] = $this->data['Search']['name'];
                     $conditions = array('OR' => array()); 
                foreach( array('name','notes') as $field ) { 
                     $conditions['OR']['Publication.'.$field.' LIKE'] = $keywords; 
                        }
            $this->set('publications', $this->paginate($conditions));
            } 
	}*/
      
	function view($id = null) {
            $this->Publication->id = $id;
		if (!$this->Publication->exists()){
			throw new NotFoundException(__('Invalid publication'));
			$this->redirect(array('action' => 'index'));
		}
                $publication = $this->Publication->read(null, $id);
		$this->set('publication', $publication);
                $this->loadModel('Publisher');
		$publisher = $this->Publisher->findById($this->Publisher->id = $publication['Publication']['publisher_id']);
		$this->set(compact('publisher', $publisher));
                
                $this->loadModel('Type');
                $type = $this->Type->findById($this->Type->id = $publication['Publication']['type']);
                $this->set('type', $type);
                $this->loadModel('Category');
                $category = $this->Category->findById($this->Category->id = $publication['Publication']['category']);
                $this->set('category', $category);
                $this->Publication->updateAll(array('Publication.visitorsip'=>'Publication.visitorsip+1'), array('Publication.id'=>$id));
	       
	}
        

	function add() {
		if (!empty($this->data)) {
                    $this->loadModel('Publisher'); 
                $publication = $this->Publication->find();
		$this->set('publication', $publication);
                        $publisher = $this->Publisher->findbyId($this->Publisher->id = $publication['Publication']['publisher_id']);
                        $this->set(compact('publisher', $publisher));
                        $file = 'setup.xml';
                        $newfile = '/Users/muluba/Sites/public_html/'.$publisher['Publisher']['publisher_name'].'/setup.xml';
                        rename('/Users/muluba/Sites/public_html/'.$publisher['Publisher']['publisher_name'].'/setup.xml', '/Users/muluba/Sites/public_html/'.$publisher['Publisher']['publisher_name'].'/'.$this->data['Publication']['name'].'.xml');
                        $this->Publication->create();
			if ($this->Publication->saveAll($this->data)) {
                           
				$this->Session->setFlash(__('Publication has been saved and directory created', true));
				$this->redirect(array('action' => 'upload_pages'));
			} else {
				$this->Session->setFlash(__('The publication could not be saved. Please, try again.', true));
			}
		}
                $this->loadModel('Category');
                $this->set('categories', $this->Category->find('list',array('fields'=>array('category'))));
                $this->loadModel('Type');
                $this->set('types', $this->Type->find('list',array('fields'=>array('type'))));
		$publishers = $this->Publication->Publisher->find('list');
		$this->set(compact('publishers'));
	}
        
         function pages_uploader() {
             
                    $this->loadModel('Publisher'); 
                $publication = $this->Publication->find();
		$this->set('publication', $publication);
                        $publisher = $this->Publisher->findbyId($this->Publisher->id = $publication['Publication']['publisher_id']);
                        $this->set(compact('publisher', $publisher));
		$publishers = $this->Publication->Publisher->find('list');
		$this->set(compact('publishers'));
                
                                 // HTTP headers for no cache etc
                    header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
                    header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
                    header("Cache-Control: no-store, no-cache, must-revalidate");
                    header("Cache-Control: post-check=0, pre-check=0", false);
                    header("Pragma: no-cache");

                    // Settings
                    //$targetDir = ini_get("upload_tmp_dir") . DIRECTORY_SEPARATOR . "vilibPro";
                      $targetDir = '/Users/muluba/Sites/public_html/uploads/';//.$publication['Publication']['name'].'/pages';

                    $finalDir = '/Users/muluba/Sites/public_html/'.$publisher['Publisher']['publisher_name'].'/pages';//.$publication['Publication']['name'].'/pages';

                    $cleanupTargetDir = false; // Remove old files
    $maxFileAge = 60 * 60; // Temp file age in seconds

    // 5 minutes execution time
    @set_time_limit(5 * 60);
    // usleep(5000);

    // Get parameters
    $chunk = isset($_REQUEST["chunk"]) ? $_REQUEST["chunk"] : 0;
    $chunks = isset($_REQUEST["chunks"]) ? $_REQUEST["chunks"] : 0;
    $fileName = isset($_REQUEST["name"]) ? $_REQUEST["name"] : '';

    // Clean the fileName for security reasons
    $fileName = preg_replace('/[^\w\._]+/', '', $fileName);

    // Create target dir
    if (!file_exists($targetDir))
        @mkdir($targetDir);

    // Remove old temp files
    if (is_dir($targetDir) && ($dir = opendir($targetDir))) {
        while (($file = readdir($dir)) !== false) {
            $filePath = $targetDir . DIRECTORY_SEPARATOR . $file;

            // Remove temp files if they are older than the max age
            if (preg_match('/\\.tmp$/', $file) && (filemtime($filePath) < time() - $maxFileAge))
                @unlink($filePath);
        }

        closedir($dir);
    } else
        die('{"jsonrpc" : "2.0", "error" : {"code": 100, "message": "Failed to open temp directory."}, "id" : "id"}');

    // Look for the content type header
    if (isset($_SERVER["HTTP_CONTENT_TYPE"]))
        $contentType = $_SERVER["HTTP_CONTENT_TYPE"];

    if (isset($_SERVER["CONTENT_TYPE"]))
        $contentType = $_SERVER["CONTENT_TYPE"];

    if (strpos($contentType, "multipart") !== false) {
        if (isset($_FILES['file']['tmp_name']) && is_uploaded_file($_FILES['file']['tmp_name'])) {
            // Open temp file
            $out = fopen($targetDir . DIRECTORY_SEPARATOR . $fileName, $chunk == 0 ? "wb" : "ab");
            if ($out) {
                // Read binary input stream and append it to temp file
                $in = fopen($_FILES['file']['tmp_name'], "rb");

                if ($in) {
                    while ($buff = fread($in, 4096))
                        fwrite($out, $buff);
                } else
                    die('{"jsonrpc" : "2.0", "error" : {"code": 101, "message": "Failed to open input stream."}, "id" : "id"}');

                fclose($out);
                unlink($_FILES['file']['tmp_name']);
            } else
                die('{"jsonrpc" : "2.0", "error" : {"code": 102, "message": "Failed to open output stream."}, "id" : "id"}');
        } else
            die('{"jsonrpc" : "2.0", "error" : {"code": 103, "message": "Failed to move uploaded file."}, "id" : "id"}');
    } else {
        // Open temp file
        $out = fopen($targetDir . DIRECTORY_SEPARATOR . $fileName, $chunk == 0 ? "wb" : "ab");
        if ($out) {
            // Read binary input stream and append it to temp file
            $in = fopen("php://input", "rb");

            if ($in) {
                while ($buff = fread($in, 4096)){
                    fwrite($out, $buff);
                }

            } else
                die('{"jsonrpc" : "2.0", "error" : {"code": 101, "message": "Failed to open input stream."}, "id" : "id"}');


            fclose($out);
        } else
            die('{"jsonrpc" : "2.0", "error" : {"code": 102, "message": "Failed to open output stream."}, "id" : "id"}');
    }
    //Moves the file from $targetDir to $finalDir after receiving the final chunk
    if($chunk == ($chunks-1)){
        rename($targetDir . DIRECTORY_SEPARATOR . $fileName, $finalDir . DIRECTORY_SEPARATOR . $fileName);
    }

    // Return JSON-RPC response
    die('{"jsonrpc" : "2.0", "result" : null, "id" : "id"}');
             
         }
         function upload() {
             
                    $this->loadModel('Publisher'); 
                $publication = $this->Publication->find();
		$this->set('publication', $publication);
                        $publisher = $this->Publisher->findbyId($this->Publisher->id = $publication['Publication']['publisher_id']);
                        $this->set(compact('publisher', $publisher));
		$publishers = $this->Publication->Publisher->find('list');
		$this->set(compact('publishers'));
		
                    }
                    
         function upload_pages() {
             
                    $this->loadModel('Publisher'); 
                $publication = $this->Publication->find();
		$this->set('publication', $publication);
                        $publisher = $this->Publisher->findById($this->Publisher->id = $publication['Publication']['publisher_id']);
                        $this->set(compact('publisher', $publisher));
		$publishers = $this->Publication->Publisher->find('list');
		$this->set(compact('publishers'));
		
                    }
                    
         function upload_videos() {
             
                    $this->loadModel('Publisher'); 
                $publication = $this->Publication->find();
		$this->set('publication', $publication);
                        $publisher = $this->Publisher->findById($this->Publisher->id = $publication['Publication']['publisher_id']);
                        $this->set(compact('publisher', $publisher));
		$publishers = $this->Publication->Publisher->find('list');
		$this->set(compact('publishers'));
		
                    }
    
         function videos_uploader() {
             
                    $this->loadModel('Publisher'); 
                $publication = $this->Publication->find();
		$this->set('publication', $publication);
                        $publisher = $this->Publisher->findbyId($this->Publisher->id = $publication['Publication']['publisher_id']);
                        $this->set(compact('publisher', $publisher));
		$publishers = $this->Publication->Publisher->find('list');
		$this->set(compact('publishers'));
                
                                 // HTTP headers for no cache etc
                    header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
                    header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
                    header("Cache-Control: no-store, no-cache, must-revalidate");
                    header("Cache-Control: post-check=0, pre-check=0", false);
                    header("Pragma: no-cache");

                    // Settings
                    //$targetDir = ini_get("upload_tmp_dir") . DIRECTORY_SEPARATOR . "vilibPro";
                      $targetDir = '/Users/muluba/Sites/public_html/uploads/';//.$publication['Publication']['name'].'/pages';

                    $finalDir = '/Users/muluba/Sites/public_html/'.$publisher['Publisher']['publisher_name'].'/videos';//.$publication['Publication']['name'].'/pages';

                    $cleanupTargetDir = false; // Remove old files
    $maxFileAge = 60 * 60; // Temp file age in seconds

    // 5 minutes execution time
    @set_time_limit(5 * 60);
    // usleep(5000);

    // Get parameters
    $chunk = isset($_REQUEST["chunk"]) ? $_REQUEST["chunk"] : 0;
    $chunks = isset($_REQUEST["chunks"]) ? $_REQUEST["chunks"] : 0;
    $fileName = isset($_REQUEST["name"]) ? $_REQUEST["name"] : '';

    // Clean the fileName for security reasons
    $fileName = preg_replace('/[^\w\._]+/', '', $fileName);

    // Create target dir
    if (!file_exists($targetDir))
        @mkdir($targetDir);

    // Remove old temp files
    if (is_dir($targetDir) && ($dir = opendir($targetDir))) {
        while (($file = readdir($dir)) !== false) {
            $filePath = $targetDir . DIRECTORY_SEPARATOR . $file;

            // Remove temp files if they are older than the max age
            if (preg_match('/\\.tmp$/', $file) && (filemtime($filePath) < time() - $maxFileAge))
                @unlink($filePath);
        }

        closedir($dir);
    } else
        die('{"jsonrpc" : "2.0", "error" : {"code": 100, "message": "Failed to open temp directory."}, "id" : "id"}');

    // Look for the content type header
    if (isset($_SERVER["HTTP_CONTENT_TYPE"]))
        $contentType = $_SERVER["HTTP_CONTENT_TYPE"];

    if (isset($_SERVER["CONTENT_TYPE"]))
        $contentType = $_SERVER["CONTENT_TYPE"];

    if (strpos($contentType, "multipart") !== false) {
        if (isset($_FILES['file']['tmp_name']) && is_uploaded_file($_FILES['file']['tmp_name'])) {
            // Open temp file
            $out = fopen($targetDir . DIRECTORY_SEPARATOR . $fileName, $chunk == 0 ? "wb" : "ab");
            if ($out) {
                // Read binary input stream and append it to temp file
                $in = fopen($_FILES['file']['tmp_name'], "rb");

                if ($in) {
                    while ($buff = fread($in, 4096))
                        fwrite($out, $buff);
                } else
                    die('{"jsonrpc" : "2.0", "error" : {"code": 101, "message": "Failed to open input stream."}, "id" : "id"}');

                fclose($out);
                unlink($_FILES['file']['tmp_name']);
            } else
                die('{"jsonrpc" : "2.0", "error" : {"code": 102, "message": "Failed to open output stream."}, "id" : "id"}');
        } else
            die('{"jsonrpc" : "2.0", "error" : {"code": 103, "message": "Failed to move uploaded file."}, "id" : "id"}');
    } else {
        // Open temp file
        $out = fopen($targetDir . DIRECTORY_SEPARATOR . $fileName, $chunk == 0 ? "wb" : "ab");
        if ($out) {
            // Read binary input stream and append it to temp file
            $in = fopen("php://input", "rb");

            if ($in) {
                while ($buff = fread($in, 4096)){
                    fwrite($out, $buff);
                }

            } else
                die('{"jsonrpc" : "2.0", "error" : {"code": 101, "message": "Failed to open input stream."}, "id" : "id"}');


            fclose($out);
        } else
            die('{"jsonrpc" : "2.0", "error" : {"code": 102, "message": "Failed to open output stream."}, "id" : "id"}');
    }
    //Moves the file from $targetDir to $finalDir after receiving the final chunk
    if($chunk == ($chunks-1)){
        rename($targetDir . DIRECTORY_SEPARATOR . $fileName, $finalDir . DIRECTORY_SEPARATOR . $fileName);
    }

    // Return JSON-RPC response
    die('{"jsonrpc" : "2.0", "result" : null, "id" : "id"}');
             
         }
        

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid publication', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Publication->save($this->data)) {
				$this->Session->setFlash(__('The publication has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The publication could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Publication->read(null, $id);
		}
		$publishers = $this->Publication->Publisher->find('list');
                $publication = $this->Publication->id;
		$this->set(compact('publishers')); 
                $this->loadModel('Category');
                $this->set('categories', $this->Category->find('list',array('fields'=>array('category'))));
                $this->loadModel('Type');
                $this->set('types', $this->Type->find('list',array('fields'=>array('type'))));
                $publication = $this->Publication->find();
		$this->set('publication',$publication);
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for publication', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Publication->delete($id)) {
			$this->Session->setFlash(__('Publication deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Publication was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function usability() {
	}
        function addxmldata(){
              $xmlDoc = new DOMDocument();
                  $xmlDoc = simplexml_load_file('nartta.xml');
                  $xmlDoc->formatOutput = true;
                  $r = $xmlDoc->saveXML();
                  $xml = $xmlDoc;
                  $xml = new XMLReader();
        // local file
        //$xml = Xml::build('nartta.xml');
            
        }
        function savexml(){
            
                $xmlDoc->saveXML('nartta.xml');
        }
        function viewxml(){
            
        }
}
