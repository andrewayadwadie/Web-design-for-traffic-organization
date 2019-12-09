<html>
    <head>
<link href="https://fonts.googleapis.com/css?family=Amiri|Cairo" rel="stylesheet">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
    <?php include_once("incloud/navbar.tpl"); // this will include navbar.tpl
 ?>
  
        <section class="new">
            <div class="rgba-new">
                <form>
                    <div class="container">
                        <h3 class="text-center">بيانات المركبه</h3>
                        <div class="row">

                            <div class="col-6">
                                <input class="form-control" type="text" placeholder="الماركه">
                               
                                <input class="form-control" type="text" placeholder="سنه الصنع">
                             
                                <input class="form-control" type="text" placeholder="اللون ">
                                
                                <input class="form-control" type="text" placeholder="عدد الركاب ">
                                
                                <input class="form-control" type="text" placeholder="السعه اللتريه ">
                            </div>

                              <div class="col-6">
                                <input class="form-control" class="form-control" type="text" placeholder="الطراز">
                               
                                <input class="form-control" type="text" placeholder="الشكل ">
                                
                                <input class="form-control" type="text" placeholder=" عدد الابواب">
                              
                                <input class="form-control" type="text" placeholder=" عدد السلندرات">

                                  <input class="form-control" type="text" placeholder="نوع الوقود">
                            </div>
                            <br>
                            <div class="col">
                                <input class="form-control" type="text" placeholder="راديو">
                            </div>
                        </div>
                                <br>
                            <h5 class="text-center">بيانات الترخيص </h5>
                                <br>
                        <div class="row">

                              <div class="col">
                                  <div class="row">
                                      <div class="col-3">
                                          <h5 class="dd">ت/انتهاء الترخيص الحالى</h5>
                                      </div>
                                      <div class="col-9">
                                          <input type="date" class="form-control">
                                      </div>
                                  </div>
                            </div>

                              <div class="col">

                                  <div class="row">
                                      <div class="col-3">
                                          <h5 class="dd"> اشتراطات خاصة</h5>
                                      </div>
                                      <div class="col-9">
                                          <select class="form-control">
                                              <option>1</option>
                                              <option>2</option>
                                              <option>3</option>
                                              <option>4</option>
                                              <option>5</option>
                                          </select>
                                      </div>
                                  </div>
                            </div>


                        </div>
                        <a class="submit1 form-control btn btn-secondary">طباعة</a>
                        <a href="datacar6.php" class="submit1 form-control btn btn-secondary">متابعه</a>
                    </div>
                </form>
            </div>
        </section>
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>