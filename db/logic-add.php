<?php
        require_once('dbHelper.php');
        $id1=$bienso=$tenVP=$tienVP=$vitri=$loiVP=$ngayVP=$trangthaiVP="";

          if(!empty($_POST)){
              if(isset($_POST['id'])){
                  $id1=$_POST['id'];
              }
              if(isset($_POST['bienso'])){
                  $bienso=$_POST['bienso']; 
              }
              if(isset($_POST['tenVP'])){
                  $tenVP=$_POST['tenVP'];
              }
              if(isset($_POST['loiVP'])){
                  $loiVP=$_POST['loiVP'];
              }
              if(isset($_POST['vitri'])){
                  $vitri=$_POST['vitri'];
              }
              if(isset($_POST['ngayVP'])){
                  $ngayVP=$_POST['ngayVP'];
              }
              if(isset($_POST['tienVP'])){
                  $tienVP=$_POST['tienVP'];
              }
              if(isset($_POST['trangthaiVP'])){
                  $trangthaiVP=$_POST['trangthaiVP'];
              }
              if( $bienso== "" ||$vitri=="" || $tienVP=="" || $tenVP=="" || $loiVP=="" || $trangthaiVP=="" ||$ngayVP==""){
                  echo '<h2 style="color :red">Nhap day du thong tin!!!</h2>';
              }    
              if($id1 != ''){
                  $sql = "update tbl_car set bienSoXe ='$bienso', tenPhuongTien='$tenVP',loiViPham='$loiVP',viTri='$vitri',ngayViPham='$ngayVP', tienNopPhat='$tienVP',trangthai='$trangthaiVP' where id=".$id1;
                  execute($sql);
                  echo '<h3 style="color: red; text-align: center;">Cập nhật thành công!!!</h3>';
                  header('Location: admin.php');
                } 
              else{
                      $sql = 'insert into tbl_car (bienSoXe ,tenPhuongTien, loiViPham,viTri,ngayViPham ,tienNopPhat, trangthai)  value ("'.$bienso.'" ,
                      "'.$tenVP.'" ,"'.$loiVP.'" ,"'.$vitri.'","'.$ngayVP.'","'.$tienVP.'" , "'.$trangthaiVP.'")';
                      execute($sql);
                    echo '<h3 style="color :red; text-align: center;">Lưu thành công!!!</h3>';
                    header('Location: admin.php');
              }
          }
