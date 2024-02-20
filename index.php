<?php
    // post method

    // echo "<pre>";
    //  print_r($_POST);
    // echo "</pre>";
        $fname = '';
        $password = '';
        $gender = '';
        $city = '';
        $educationStr = '';
        $male_checked = '';
        $female_checked = '';
        $education = array();
     if(isset($_POST['fname'])){
         $fname       = $_POST['fname'];
         $password    = $_POST['password'];
         if(isset($_POST['gender']))
            {   
                $gender = $_POST['gender']; 
                if($gender == 'male'){ 
                    $male_checked = "checked = 'checked' ";
                }
                if($gender == 'female'){
                    $female_checked = "checked = 'checked' ";
                }
            }
        // else
        //     {   
        //         $gender = ""; 
        //     }
         $city        = $_POST['city'];
         if(isset($_POST['education']))
            {   
                $education = $_POST['education']; 
                echo "<pre>";
                    print_r($education);
                echo "</pre>";
                // Error handling 
                $educationStr = implode(" , " , $education);
            }
        //       else
        //     {  
        //          $educationStr = ""; 
        //     }
        
        
        echo "full name : " . $fname . "<br />";
        echo "password : " . $password . "<br />";
        echo "gender : ". $gender . "<br />";
        echo "city : " . $city . "<br />";
        echo "Education : " . $educationStr . "<br />";

    }
    // get method
    // get method me security issues hae
    // if(isset($_GET['fname'])){
    //     $fname = $_GET['fname'];
    //     echo $fname ;
    // }
?>
<!-- post method ke sath data bulk men bheja jaa sakta hae  -->
<!-- action form ka ik  attribute huta hae  -->
<!-- method form men du huty ik  get ik post  -->
<!-- deafult form ka method get huta hae  -->
<form action="" method="post">
    Full Name  <input type="text"  name='fname' value='<?php echo $fname; ?>'/>
    <br/><br/>
    Password : <input type="password" name="password"   />
    <br/><br/>
    Gender : 
    Male<input type="radio" name="gender" value="male"  value="male" <?php echo $male_checked; ?> />
    Female<input type="radio" name="gender" value="female" value="femle"<?php echo $female_checked; ?>/>
    <br/><br/>
    City: 
    <?php
        $city_names = array("badin" , "talhar" , "hydrabad" ,"pangrio" , "karachi");
    ?>
    <select name="city">
        <option>Enter Your City</option>
    <?php
        foreach($city_names as $cities){
           if($city == $cities) 
                echo "<option selected> .$cities. </option>";    
            else
                echo "<option> .$cities. </option>";    

        }
    ?>    
        
    </select>
    <br/><br/>

    Education :  
    <?php 
            $educationArr = array('B.A','B.ac','B.Com','B.B.A');
            foreach($educationArr as $education_list){
                if(in_array($education_list, $education)){
                   echo "$education_list <input type='checkbox' name='education[]' value='$education_list' checked='checked'/>";
                   
                }
                else{
                    echo "$education_list <input type='checkbox' name='education[]' value='$education_list' />";

                }
            }
    ?>
    
    <br/><br/>
    <input type="submit" />
</form> 

<!-- get method -->
<!-- limitd data tranfer huta hae -->
<!-- data transfer thorugh the url  huta hae  -->
<!-- <form action="" method="get">
    First Name :-> <input type="text"  name='fname'/>
    <input type="submit" />
</form> -->