<?php namespace melt;

 class PagesController extends AppController {

    public $menu = array();
    
    
    public function beforeRender($action_name, $arguments) {
        $this->menu[_("Home")] = "/,^/$|/$|/$";
        $this->menu[_("About")] = "/about,^/about$";
        $this->menu[_("Contact")] = "/contact,^/contact$";
        $this->menu = core\generate_ul_navigation($this->menu, "current");
    }
    
    function index() {}

    function about() {}
    
    function contact() {
        $this->contact_form = new ContactFormModel();
    }

}

?>
