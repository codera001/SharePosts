<?php class Pages extends Controller
{
    public function __construct()
    {
        // echo "Pages loaded";
        
    }
    public function index()
    {
     if(isLoggedIn()){
        redirect('posts');
     }
    $data =[
        'title' => 'Share Posts',
        'description' => 'Simple social network built with Mvc method ,PHP framework'

    ];
    $this->view('pages/index', $data);
    }
    public function about()
    {
        $data = [
            'title' => 'About us',
            'description' => 'App to share posts with other users'
        ];
        $this->view('pages/about', $data);

    }
  
    public function forgot()
    {
        $data = [
            'title' => 'login',
        ];
        $this->view('pages/forgot', $data);

    }
    public function contact()
    {
        $data = [
            'title' => 'login'
        ];
        $this->view('pages/contact', $data);

    }
}