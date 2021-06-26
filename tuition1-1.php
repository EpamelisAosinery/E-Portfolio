<!DOCTYPE html>
<html lang="en">
      <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="css/mystyle.css">
            <title>Tuition Calculator</title>
            <style>
                  a {text-decoration: none;} 
            </style>
      </head>
      <body>
            <div class="container">
                  <h1>Tuition Calculator</h1><br>
                  <a href="index.php">Home  -> </a>
                  <a href="tuition.php">PHP Tuition Calculator</a>
                  <hr>
                  <form action="tuition2.php" method="post">
                        <h2>Welcome to Tuition Calculator</h2>
                        <p>The information and costs below are correct as of the Fall 2020 semester.</p><br>
                        <h2>Tuition Calculate</h2><br>
                        <h4>Residency
                        <br> <select name="residency">
                                    <option value="1">In District Student
                                    <option value="2">Out of District Student
                                    <option value="3">Out of State / International Student
                                    </select>
                        </h4>
                        <h4>Level 100 & 200 Credit Hours<br>	
                              <input type="number" name="lower" min="1" max="40" value="0"></h4>
                        <h4>Level 300 & 400 Credit Hours <br>
                              <input type="number" name="upper"min="1" max="40" value="0"></h4>
                        <h4>Would you like information on financial aid?
                              <br><select name="help">
                                    <option value="1">No</option>
                                    <option value="2">Yes</option>
                              </select>
                        </h4>
                        <h4><input type="submit" value="Submit"></h4>
                        <!-- <button onclick="calculate()">Calculate</button> -->
                  </form>
                  <br>
                  <br>
                  <h4 id="tuition_cost"></h4>
                  <table class="table1">
                        <thead>
                              <tr>
                                    <th><b>Fee</b></th>
                                    <th><b>Cost</b></th>
                              </tr>
                        </thead>
                        <tbody id="myTable">
                              <tr>
                                    <td>Registration Fee:</td>
                                    <td>$50.00</td>							
                              </tr>
                              <tr>
                                    <td>Infrastructure Fee:</td>
                                    <td>$60.00</td>
                              </tr>
                        </tbody>
                  </table>
                  <br>
                  <h4>For more information and better accuracy, click on the links below to be directed directly to the Henry Ford College website.</h4>
                  <a href="https://www.hfcc.edu/" target="_blank" style="color:blue"><u>Henry Ford College</u></a>
                  <br><a href="https://www.hfcc.edu/tuition-and-payment/calculator" target="_blank" style="color:blue"><u>Tuition Calculator</u></a>
                  <br><a href="https://www.hfcc.edu/tuition-and-payment" target="_blank" style="color:blue"><u>Current Tuition Information and Rates</u></a>
            </div>
      </body>
</html>