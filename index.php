
<?php

echo <<<_END
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
   <style>
       #rows{
           margin-bottom: 2rem;
       }
   </style>

</head>
<body style="background-color: rgb(231, 232, 240);">
    <div class="container heading" style="text-align: center; margin-top: 10%; margin-bottom: 10%;">
        <h1 style="font-size: 3rem;">AMENYE COLLAGE OF HEALTH AND ALLIED SCIENCES</h1>
        <img src="DODOMA.png" alt="" width="350rem">
    </div>
   <div class="container" style="background-color: white; padding: 5rem 2rem; margin-bottom: 5rem; border-radius: .8rem;">
    <div class="heading" style="text-align: center;"><h1>Student Registration Form</h1> <hr></div>

    <div class="form">
        <form method="post" action="success.php">
            <h5>Student names: </h5>
            <div class="form-row" id="rows">
                
              <div class="col">
                <input type="text" class="form-control" placeholder="First name" name="fname"  required="required">
              </div>
              <div class="col">
                <input type="text" class="form-control" placeholder="Middle name" name="mname"  required="required">
              </div>
              <div class="col">
                <input type="text" class="form-control" placeholder="Last name" name="lname" required="required">
              </div>
            </div>

            <div class="form-row" id="rows">
                <div class="col"><h5>Course name: </h5></div>
                <div class="col">
                    <select id="inputState" class="form-control" name="course" required="required">
                        <option selected>Choose...</option>
                        <option>Software</option>
                        <option>Software</option>
                        <option>Software</option>

                      </select>
                </div>
                <div class="col"></div>
            </div>

            <div class="form-row" id="rows">
                <div class="col"><h5>Gender: </h5></div>
                <div class="col"><input type="radio" name="gender" id="male" value="male"  required="required">Male</div>
                <div class="col"><input type="radio" name="gender" id="male" value="female"  required="required">Female</div>

            </div>

            <div class="form-row" id="rows">
                <div class="col"><h5>Age : </h5></div>
                <div class="col">
                    <select id="inputState" class="form-control" name="age"  required="required">
                        <option selected>Choose age...</option>
                        <option>16</option>
                        <option>17</option>
                        <option>19</option>
                        <option>20</option>
                        <option>21</option>
                        <option>22</option>
                        <option>23</option>
                        <option>24</option>
                        <option>25</option>
                        <option>26</option>
                        <option>27</option>
                        <option>28</option>
                        <option>29</option>

                      </select>
                </div>
                <div class="col"></div>
            </div>

            <div class="form-row" id="rows">
                <div class="col"><h5>Phone-number: </h5></div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="+255 xxx xxx xxx" name="pnumber" required="required">
                  </div>
                <div class="col"></div>

            </div>

            <div class="form-row" id="rows">
                <div class="col"><h5>Parent-number: </h5></div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="+255 xxx xxx xxx"  name="parent" required="required">
                  </div>
                <div class="col"></div>

            </div>

            <div class="form-row" id="rows">
                <div class="col"><h5>Marital status: </h5></div>
                <div class="col"><input type="radio" name="status" id="male" value="single" required="required">Single</div>
                <div class="col"><input type="radio" name="status" id="male" value="married"  required="required">Married</div>

            </div>

            <div class="custom-file" id="rows">
                <input type="file" class="custom-file-input" id="customFile"  required="required">
                <label class="custom-file-label" for="customFile">Upload a Certificate</label>
              </div>

              <div class="form-row" id="rows" style="text-align: center;">
                <div class="col"><input type="submit" value="Add" class="btn btn-success"  required="required"></div>
                <div class="col"><button type="button" class="btn btn-primary"  required="required">Save</button></div>
                <div class="col"><button type="button" class="btn btn-danger"  required="required">Exit</button></div>

            </div>

          </form>
    </div>


   </div>
   <footer>

   </footer>
</body>
</html>



_END

?>

