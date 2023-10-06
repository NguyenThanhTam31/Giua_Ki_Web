<?php

require_once APP_ROOT.'/app/models/Sach.php';
class SachService{
    public function getAllSach(){
        // Bước 1: Kết nối DataBase
        try{
            // dbname=MVC_KTD là không có khoảng trắng
            $conn = new PDO('mysql:host=localhost; dbname=QuanLyThuVien', 'root','');

            //Bước 2: Truy vấn dữ liệu
            $sql = "SELECT * FROM Sach ORDER BY id";
            $stmt = $conn->query($sql);

            //Bước 3: Xử lý kết quả trả về
            $sachs = [];
            while($row = $stmt->fetch()){
                $sach = new Sach($row['id'], $row['tenSach'], $row['namXuatBan'], $row['TenTacGia']);
                $sachs[] = $sach;
            }
            return $sachs;

        }catch(PDOException $e){
            // $conn = null;
            // echo $e->getMessage();
            return $sachs = [];
        }
    }

}