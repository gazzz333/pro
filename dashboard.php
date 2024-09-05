<?php include "header2.php"; ?> 
<?php
?>
<br>
</br>
    <h2 style="text-align:center; padding-top:20px">Администратор</h2>
   
    <h2 style="text-align:center; padding-top:20px">Панель администратора</h2>
    <h3 style="text-align:center; padding-top:20px">Клиенты</h3>
            
					


<h4 style="text-align:center; padding-top:50px">
<?php require_once 'connect.php';?>
<?php
$result = mysqli_query($link,"SELECT * FROM `person` ");  

while ($person = mysqli_fetch_assoc($result))
{
    echo $person['FIO'];
    echo "-";
    echo $person['telefon'];
    echo "<br>";
}
?>

					
                </div>
            </div>
        </div>
    </div>
</h4>

<?php include "footer.php";?>