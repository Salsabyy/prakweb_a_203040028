 <?php 

 class Home  extends controller {
    public function index ()
    {
        $data['judul'] = 'Home';
        $thisthis->view('templates/header', $data);
        $this->view('home/index';
        $this->view('templates/footer');
    }
 }