<?php
include('include/db.php');
class usuario{
        public function getInfo()
        {
            $con = new data();
            $sql = $con->connect();
               $prepare = $sql->prepare('select * from userinfo');
               $prepare->execute();
              
               
               while($l = $prepare->fetch(PDO::FETCH_ASSOC))
               {
                    $linhas[] = $l;          
               }
               return  $linhas;
              
                         
        }
        
        public function getInfoByCpf($cpf)
        {
            
            $con = new data();
            $sql = $con->connect();
            $prepare = $sql->prepare('select * from userinfo where cpf = :cpf');
            $prepare->bindParam(':cpf', $cpf,PDO::PARAM_INT);
            $prepare->execute();
            
            
            $linha = $prepare->fetch(PDO::FETCH_ASSOC);
            
            return $linha;
        }
        
        
        public function updInfoByCpf($cpf,$mac)
        {
            $con = new data();
            $sql = $con->connect();
            echo "<br>".$mac;
            echo "<br>".$cpf;
            $prepare = $sql->prepare('update userinfo set mac = :mac where cpf = :cpf');
            
            $prepare = $sql->prepare('update userinfo set mac = :mac where cpf = :cpf');
            $prepare->bindParam(':cpf',$cpf,PDO::PARAM_EVT_FREE);
            $prepare->bindParam(':mac', $mac,PDO::PARAM_EVT_FREE);
            $sql->beginTransaction();
            $prepare->execute();

            
            
            if(count($prepare->rowCount()) > 0)
                {
                    $sql->commit();
                    
                    $prepare->closeCursor();
                } else 
                {
                    $sql->rollBack();
                    echo 'erro';
                    $prepare->closeCursor();
                }
                
                //header("Location: http://example.com/myOtherPage.php");
                //die();
            return header("Location: http://localhost/pbh2");
            
        }
    
    
        }
    

?>