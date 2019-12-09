<html>
    <head>
<link href="https://fonts.googleapis.com/css?family=Amiri|Cairo" rel="stylesheet">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
    <?php include_once("incloud/navbar.tpl"); // this will include navbar.tpl
 ?>
  
        <section class="new3">
            <div class="rgba-new">
                <form>
                    <div class="container">
                        <br>
                        <h5 class="text-center">بيانات طالب الترخيص</h5>
                        <br>
                        <div class="row">

                            <div class="col">
                                <input class="form-control" type="text" placeholder="الاسم">
                               
                                <input class="form-control" type="text" placeholder="العنوان ">
                             
                                <input class="form-control" type="text" placeholder=" الصفحه ">
                                
                            </div>

                              <div class="col">
                                <input class="form-control" class="form-control" type="text" placeholder="قسم الشرطه التابع لها">
                               
                                <input class="form-control" type="text" placeholder="رقم مستند اثبات الشخصيه ">
                                
                                <input class="form-control" type="text" placeholder=" جهة صدورة">
                              
                            </div>


                        </div> 
                                <br>
                        <a class="submit1 form-control btn btn-secondary">طباعة</a>
                        <a href="uploadFiles.php" class="submit1 form-control btn btn-secondary">متابعه</a>
                    </div>
                </form>
            </div>
        </section>
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>