<!DOVTYPE html>
<html>
    <head>

<link href="https://fonts.googleapis.com/css?family=Amiri|Cairo" rel="stylesheet">
         <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
            <?php include_once("incloud/navbar.tpl"); // this will include navbar.tpl
 ?>
            <section class="upload">
                <div class="upload-rgba">
                    <h2 class="text-center">رفع شهادة الملكيه وشهادة التامين</h2>
                    <form>
                       <div class="container">
                        <div class="row">
                            <div class="col-md-5">
                                <span>قم برفع شهادة الملكيه للمركبه</span>
                                <input type="file">
                            </div>
                            <div class="col-md-2"></div>
                            <div class="col-md-5">
                                <span>قم برفع شهادة التامين للمركبه</span>
                                <br>
                                <input type="file">
                            </div>
                        </div>
                           <div class="discrption">
                               <p class="text-center">اذا كنت لا تمتلك شهادة التامين قم بزيارة موقع المرور </p>
                               <div class="row">
                                <div class="col-5"></div>
                                <div class="col-5"><a href="https://www.deltains.org">المرور</a></div>
                               </div>
                           </div>
                           <a href="pay.php" class="submit1 form-control btn btn-secondary">متابعه</a>
                        </div>
                    </form>
                </div>
            </section>


                <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>