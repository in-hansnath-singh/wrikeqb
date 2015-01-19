<?php
defined('SYSPATH') or die('No direct script access.');

class Controller_application extends Controller_Template {

    public function before() {
        parent::before();
        View::set_global('site_name', 'Hansnath Beta');
        $this->template->content = '';
        $this->template->styles = array();
        $this->template->scripts = array();
        $this->template->styles = array('reset', 'common');
    }

}
