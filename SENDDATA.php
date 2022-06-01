<?php
    // Connect to database
    INCLUDE("CONNECT.php");
    $red1=$yellow1=$green1=$red2=$yellow2=$green2=$red3=$yellow3=$green3=0;
    $status1=$status20=$status3=0;
    $mode1=$mode2=$mode3=0;

    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        // Doc input tu cac o text
        if($_POST["r1"]=="Timeset")
        {
            $red1=0;
        }
        else
        {  
            $red1=$_POST["r1"];
            $status1=1;
        }

        if($_POST["y1"]=="Timeset")
        {
            $yellow1=0;
        }
        else
        {  
            $yellow1=$_POST["y1"];
            $status1=2;
        }

        if($_POST["g1"]=="Timeset")
        {
            $green1=0;
        }
        else
        {  
            $green1=$_POST["g1"];
            $status1=3;
        }


        if($_POST["r2"]=="Timeset")
        {
            $red2=0;
        }
        else
        {  
            $red2=$_POST["r2"];
            $status2=1;
        }

        if($_POST["y2"]=="Timeset")
        {
            $yellow2=0;
        }
        else
        {  
            $yellow2=$_POST["y2"];
            $status2=2;
        }

        if($_POST["g2"]=="Timeset")
        {
            $green2=0;
        }
        else
        {  
            $green2=$_POST["g2"];
            $status2=3;
        }


        if($_POST["r3"]=="Timeset")
        {
            $red3=0;
        }
        else
        {  
            $red3=$_POST["r3"];
            $status3=1;
        }

        if($_POST["y3"]=="Timeset")
        {
            $yellow3=0;
        }
        else
        {  
            $yellow3=$_POST["y3"];
            $status3=2;
        }

        if($_POST["g3"]=="Timeset")
        {
            $green3=0;
        }
        else
        {  
            $green3=$_POST["g3"];
            $status3=3;
        }
        
        //// MANUAL
        if($_POST["BTR1"]=="ON1")
        {
            $status1=1;
            $mode1=1;
        }

        if($_POST["BTY1"]=="ON2")
        {
            $status1=2;
            $mode1=1;
        }

        if($_POST["BTG1"]=="ON3")
        {
            $status1=3;
            $mode1=1;
        }
        
        if($_POST["BTR2"]=="ON4")
        {
            $status2=1;
            $mode2=1;
        }   

        if($_POST["BTY2"]=="ON5")
        {
            $status2=2;
            $mode2=1;
        }

        if($_POST["BTG2"]=="ON6")
        {
            $status2=3;
            $mode2=1;
        }

        if($_POST["BTR3"]=="ON7")
        {
            $status3=1;
            $mode3=1;
        }

        if($_POST["BTY3"]=="ON8")
        {
            $status3=2;
            $mode3=1;
        }

        if($_POST["BTG3"]=="ON9")
        {
            $status3=3;
            $mode3=1;
        }
      
       // $yellow1=$_POST["y1"];
        //$green1=$_POST["g1"];

        /*$red2=$_POST["r2"];
        $yellow2=$_POST["y2"];
        $green2=$_POST["g2"];

        $red3=$_POST["r3"];
        $yellow3=$_POST["y3"];
        $green3=$_POST["g3"];*/

        // Update table
        $sql="update TIME set REDF=$red1, YELLOWF=$yellow1, GREENF=$green1, STATUSF=$status1 ,REDS=$red2, YELLOWS=$yellow2, GREENS=$green2, STATUSS=$status2,REDT=$red3, YELLOWT=$yellow3, GREENT=$green3, STATUST=$status3, MODE1=$mode1, MODE2=$mode2, MODE3=$mode3";
        mysqli_query($conn,$sql);
    }
    mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> CONTROL TRAFFIC LIGHTS  </title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="STYLE.css">

        <style>
            body
            {
                font:14px sans-serif;
                /*background-image: url('Background1.jpg');*/
                background-color:#B2E0F0;
            }
            
            .margin-2px {
                margin: 0 3px !important;
                color:#2d0e05;
            }

            .wrapper
            {
                float:left;
                width: 30%;
                padding: 20px;
                margin: 5px;
                height: 300px;
                color: #192e36 ;
            }
            .box
            {
                margin:auto;
                width: 50%;
                height: 50%;
                
            }
            .table_size
            {
                margin:auto;
                width: 70%;
            }
            center
            {
                font: 20px;
            }

            .apply
            {
                margin-left: 700px;
                margin-top: 350px;
            }
            .btn
            {
                font-weight: 1000;
                width: 150px;
                height:75px;
                font-size: 25px;
            }
            img   
            {
                width: 250px;
                height: 300x;
                margin-left:100px;
                margin-top:-25px;
            }
            


        </style>
    </head>

    <body>
        <h1 style="justify-content: center; display: flex; margin-top: 50px;"> IOT SYSTEM  </h1>
        <h1 style="justify-content: center; display: flex;">CONTROL TRAFFIC LIGHTS BY WEBSEVER</h1>
        
        <div class="row" style="display: flex; justify-content: center; margin-top: 100px; margin-left: 100px;"> 
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"  method="POST">
                <div class="wrapper border -2 rounded border-primary" >
                    <center> FIRST CROSSROADS</center>
                    <br>
                    <div style="display: flex; justify-content: center;" >
                        <div>
                            <div class="box border border-info margin-2px" style="background-color: rgb(255,0,0); width: 100px; height: 100px; border-radius: 50%;"></div>
                            <input type="text" style="width:100%; bottom: 0; width: 100px; margin-top: 8px; " value="Timeset" name="r1">
                            <label class="switch switch-yes-no">
                                <input class="switch-input" type="checkbox" value="ON1" name="BTR1"/>
                                <span class="switch-label" data-on="ON" data-off="OFF"></span> 
                                <span class="switch-handle"></span> 
                            </label>
                        </div>
                        <div>
                            <div class="box border border-info margin-2px" style="background-color: rgb(237, 253, 5); width: 100px; height: 100px; border-radius: 50%" ></div>
                            <input type="text" style="width:100%; bottom: 0; width: 100px; margin-top: 8px;" value="Timeset" name="y1">
                            <label class="switch switch-yes-no">
                                <input class="switch-input" type="checkbox" value="ON2" name="BTY1"/>
                                <span class="switch-label" data-on="ON" data-off="OFF"></span> 
                                <span class="switch-handle"></span> 
                            </label>
                        </div>
                        <div>
        
                            <div class="box border border-info margin-2px" style="background-color: rgb(9, 255, 0); width: 100px; height: 100px; border-radius: 50%"></div>
                            <input type="text" style="width:100%; bottom: 0; width: 100px; margin-top: 8px;" value="Timeset" name="g1"> 
                            <label class="switch switch-yes-no">
                                <input class="switch-input" type="checkbox" value="ON3" name="BTG1"/>
                                <span class="switch-label" data-on="ON" data-off="OFF"></span> 
                                <span class="switch-handle"></span> 
                            </label>
                        </div>
                    </div>
                    <br>
                    <div style="width: 100%; display: flex;">
                        <label class="switch" style="margin-left: 370px;  ">
                            <input class="switch-input" type="checkbox"  />
                            <span class="switch-label" data-on="MANUAL" data-off="AUTO"></span> 
                            <span class="switch-handle"></span> 
                        </label>
                    </div>
        
                </div>
        
                <div class="wrapper border -2 rounded border-primary" >
                    <center> SECOND CROSSROADS</center>
                    <br>
                    <div style="display: flex; justify-content: center;">
                        <div>
        
                            <div class="box border border-info margin-2px" style="background-color: rgb(255,0,0); width: 100px; height: 100px; border-radius: 50%"></div>
                            <input type="text" style="width:100%; bottom: 0; width: 100px; margin-top: 8px;" value="Timeset" name="r2">
                            <label class="switch switch-yes-no">
                                <input class="switch-input" type="checkbox" value="ON4" name="BTR2" />
                                <span class="switch-label" data-on="ON" data-off="OFF"></span> 
                                <span class="switch-handle"></span> 
                            </label>
                        </div>
                        <div>
        
                            <div class="box border border-info margin-2px" style="background-color: rgb(237, 253, 5); width: 100px; height: 100px; border-radius: 50%"></div>
                            <input type="text" style="width:100%; bottom: 0; width: 100px; margin-top: 8px;" value="Timeset" name="y2">
                            <label class="switch switch-yes-no">
                                <input class="switch-input" type="checkbox" value="ON5" name="BTY2"/>
                                <span class="switch-label" data-on="ON" data-off="OFF"></span> 
                                <span class="switch-handle"></span> 
                            </label>
                        </div>
                        <div>
        
                            <div class="box border border-info margin-2px" style="background-color: rgb(9, 255, 0); width: 100px; height: 100px; border-radius: 50%"></div>
                            <input type="text" style="width:100%; bottom: 0; width: 100px; margin-top: 8px;" value="Timeset" name="g2"> 
                            <label class="switch switch-yes-no">
                                <input class="switch-input" type="checkbox" value="ON6" name="BTG2" />
                                <span class="switch-label" data-on="ON" data-off="OFF"></span> 
                                <span class="switch-handle"></span> 
                            </label>
                        </div>
                    </div>
        
                    <br>
                    

                    
                    <div style="width: 100%; display: flex;">
                        <label class="switch" style="margin-left: 370px;  ">
                            <input class="switch-input" type="checkbox"  />
                            <span class="switch-label" data-on="MANUAL" data-off="AUTO"></span> 
                            <span class="switch-handle"></span> 
                        </label>
                    </div>
                </div>
        
        
                <div class="wrapper border -2 rounded border-primary" >
                    <center> THIRD CROSSROADS</center>
                    <br>
                    <div style="display: flex; justify-content: center;">
                        <div>
        
                            <div class="box border border-info margin-2px" style="background-color: rgb(255,0,0); width: 100px; height: 100px; border-radius: 50%"></div>
                            <input type="text" style="width:100%; bottom: 0; width: 100px; margin-top: 8px;" value="Timeset" name="r3">
                            <label class="switch switch-yes-no">
                                <input class="switch-input" type="checkbox" value="ON7" name="BTR3"/>
                                <span class="switch-label" data-on="ON" data-off="OFF"></span> 
                                <span class="switch-handle"></span> 
                            </label>
                        </div>
                        <div>
        
                            <div class="box border border-info margin-2px" style="background-color: rgb(237, 253, 5); width: 100px; height: 100px; border-radius: 50%"></div>
                            <input type="text" style="width:100%; bottom: 0; width: 100px; margin-top: 8px;" value="Timeset" name="y3">
                            <label class="switch switch-yes-no">
                                <input class="switch-input" type="checkbox" value="ON8" name="BTY3"/>
                                <span class="switch-label" data-on="ON" data-off="OFF"></span> 
                                <span class="switch-handle"></span> 
                            </label>
                        </div>
                        <div>
        
                            <div class="box border border-info margin-2px" style="background-color: rgb(9, 255, 0); width: 100px; height: 100px; border-radius: 50%"></div>
                            <input type="text" style="width:100%; bottom: 0; width: 100px; margin-top: 8px;" value="Timeset", name="g3"> 
                            <label class="switch switch-yes-no">
                                <input class="switch-input" type="checkbox" value="ON9" name="BTG3" />
                                <span class="switch-label" data-on="ON" data-off="OFF"></span> 
                                <span class="switch-handle"></span> 
                            </label>
                        </div>
                    </div>
        
                    <br>
                    
                    <div style="width: 100%; display: flex;">
                        <label class="switch" style="margin-left: 370px;  ">
                            <input class="switch-input" type="checkbox"  />
                            <span class="switch-label" data-on="MANUAL" data-off="AUTO"></span> 
                            <span class="switch-handle"></span> 
                        </label>
                    </div>
                </div>
                <div class=apply>
                    <input type="submit" class="btn btn-primary" value="APPLY" >
                    <a href="WEB2.html"> </a>
                </div>

                <div class=img1>
                    <img src="Traffic_lights.png">
                </div>
                <div class=img2 style="margin-left:1100px; margin-top:-290px;">
                    <img src="Traffic_lights.png">
                </div>
            </form>
        </div>
    </body>
</html>