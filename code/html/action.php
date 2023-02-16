<?php
include 'config.php';
$output='';
if(isset($_POST['query'])){
    $search=$_POST['query'];
    $stmt=$conn->prepare("SELECT * FROM bloodbanks WHERE fname LIKE
    CONCAT('%', ?, '%') OR bstate LIKE CONCAT('%', ?, '%')") ;
    $stmt->bind_param("ss",$search,$search);
}
else{
    $stmt=$conn->prepare("SELECT * FROM bloodbanks");
}
$stmt->execute();
$result-$stmt->get_result();
if($result->num_rows>0){
    $output="<thead>
              <tr>
                <th>Name</th>
                <th>State</th>
                <th>City</th>
                <th>Phone No.</th>
                <th>Email ID</th>
                <th>Category</th>
               </tr>
             </thead>
         <tbody>";

         while($row=$result->fetch_assoc()){
            $output .="
            <tr>
              <td>".$row['fname']."</td>
              <td>".$row['bstate']."</td>
              <td>".$row['city']."</td>
              <td>".$row['phone_no']."</td>
              <td>".$row['email_id']."</td>
              <td>".$row['category']."</td>
            </tr>";
            }
            $output .= "</tbody>";
            echo $output;
          }
          else{
            echo "<h3>No Records Found!</h3>";
            }
?>