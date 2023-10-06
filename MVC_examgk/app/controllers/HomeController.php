<?php
require_once APP_ROOT.'/app/services/SachServices.php';
class HomeController{
    public function index(){
        // Gọi dữ liệu từ SachService
        $sachService = new SachService();
        $Sachs = $sachService->getAllSach();
        // Render dữ liệu lấy được ra HomePage
        include APP_ROOT.'/app/views/home/index.php';
    }
}