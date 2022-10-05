<?php

    #the if statement will execute if btn submit is click
    if(isset($_POST['submit'])) {
        $name =($_POST['name']);
        $email =($_POST['email']);
        $dob =($_POST['dob']);
        $gender =($_POST['gender']);
        $country =($_POST['country']);

        #reading into the csv file
            $file_open = fopen('userdata.csv', 'a');
            $user_data = array(
                'name' => $name,
                'email' => $email,
                'dob' => $dob,
                'gender' => $gender,
                'country' => $country
            );

            #creating a csv file
            fputcsv($file_open, $user_data);
            
            #closing the csv file
            fclose($file_open);

            #displaying the user_data in array format
            print_r($user_data);
    }
?>