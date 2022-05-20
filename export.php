<?php require_once('connection.php');

$arr_users = array();


if(isset($_GET['but_search'])) {
    $created_at = $_GET['created_at'];
    $updated_at = $_GET['updated_at'];

   

    if(!empty($created_at) && !empty($updated_at)){

       $sql = "SELECT * FROM `leads_ads` WHERE date(`created_date`) between '$created_at' and '$updated_at' and (user IS NULL || user='') order by created_date DESC;";

        $result = mysqli_query($con, $sql);

        while($row = mysqli_fetch_assoc($result))
        {
            $arr_users [] = $row;
        }
    }
    
  }

  else
  {
        
        $sql = "SELECT  * FROM leads_ads WHERE date(`created_date`)=curdate()  and (user IS NULL || user='') order by created_date DESC";

        $result = mysqli_query($con, $sql);

        while($row = mysqli_fetch_assoc($result))
        {
            $arr_users [] = $row;
        }
        
  }



if(isset($_POST["export"])) 
{
    $export_arr_users = array();

    $created_at = $_POST['created_at'];
    $updated_at = $_POST['updated_at'];

    if(!empty($created_at) && !empty($updated_at)){
        $sql = "SELECT * FROM `leads_ads` WHERE date(`created_date`) between '$created_at' and '$updated_at'";
 
        $result = mysqli_query($con, $sql);
 
        while($row = mysqli_fetch_assoc($result))
        {
            $export_arr_users [] = $row;
        }
         
     }
     else{
        
        $sql = "SELECT  * FROM leads_ads WHERE date(`created_date`)=curdate() order by created_date DESC";
        $result = mysqli_query($con, $sql);

        while($row = mysqli_fetch_assoc($result))
        {
            $export_arr_users [] = $row;
        }
    }

    
        //Define the filename with current date
        $filename = "fb_lead-".date('d-m-Y').".xls";

        //Set header information to export data in excel format
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment; filename='.$filename);

        //Set variable to false for heading
        $heading = false;

        $column_header="";
       
        $column_header = array('full_name','email','company_name','phone_number','created_date','user');
         
        $column_value = "";


        //Add the MySQL table data to excel file
        if(!empty($export_arr_users)) 
        {
            foreach($export_arr_users as $item) 
            {
                $column_value = array($item['full_name'],$item['email'],$item['company_name'],$item['phone_number'],$item['created_date'],$item['user']);

                if(!$heading) 
                {

                    echo implode("\t", $column_header) . "\n";

                   //echo implode("\t", array_keys($item)) . "\n";
                    $heading = true;
                }
                //echo implode("\t", array_values($item)) . "\n";

                echo implode("\t", $column_value) . "\n";
            }
        }
        exit();
}

?>
