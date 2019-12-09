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
                        <h3 class="text-center">خطاب اصل الرقم </h3>
                        <label>نيابة مرور </label>
                        <select>
                            <option>الزقازيق</option>
                             <option>فاقوس</option>
                             <option>العاشر من رمضان</option>
                             <option>بلبيس</option>
                             <option>الشيخ زايد</option>
                             <option>القاهرة</option>
                             <option>الجيزه</option>
                             <option> القليوبية</option>
                        </select>
                        <h5 class="text-center">السيد الاستاذ / مدير نيابة المرور</h5>
                        <hr class="frist-line">
                        <h6 class="text-center">بعد التحيه </h6>
                        <p class="text-center">نحيط سيادتكم علما بان المركبة المراد الاستعلام عنها اصل الرقم الخاص بها والتى تحمل </p>
                        <div class="row">

                            <div class="col">
                                <input class="form-control" type="text" placeholder="رقم الوحات الحالية">
                               
                                <input class="form-control" type="text" placeholder=" الرقم القومى للمالك الحالى">
                             
                                <input class="form-control" type="text" placeholder="رقم الموتور">
                                
                                <input class="form-control" type="text" placeholder="المحافظة">
                            </div>

                              <div class="col">
                                <input class="form-control" class="form-control" type="text" placeholder="باسم">
                               
                                <input class="form-control" type="text" placeholder="رقم الشاسية">
                                
                                <input class="form-control" type="text" placeholder="نوع الترخيص">
                              
                                <input class="form-control" type="text" placeholder="وحدة المرور">
                            </div>


                        </div>
                                <br>
                            <h5 class="text-center">البيانات الخاصة بالمالك السابق </h5>
                                <br>
                        <div class="row">

                              <div class="col">
                                  <div class="row">
                                      <div class="col-3">
                                          <h5 class="dd">ر.ق/للمالك السابق</h5>
                                          <br>
                                            <h5>تاريخ الامتلاك </h5>
                                          <br>
                                            <h5> التوكيل الاول </h5>
                                          <br>
                                          <h5> تاريخ النقل </h5>
                                      </div>
                                      <div class="col-9">
                                          <input type="text" class="form-control">
                                         
                                          <input type="date" class="form-control">
                                          
                                          <input type="date" class="form-control">
                                          
                                          <input type="date" class="form-control">
                                      </div>
                                  </div>
                            </div>

                              <div class="col">
                                  <div class="row">
                                      <div class="col-3">
                                          <h5 class="dd">ت/اخر توكيل للمالك الحالى</h5>
                                            <h5 class="dd">ت/صدور ورقم الوحات</h5>
                                          <br>
                                          <h5>التوكيل الثانى</h5>
                                      </div>
                                      <div class="col-9">
                                          <input type="date" class="form-control">
                                       
                                          <input type="date" class="form-control">
                                          
                                          <input type="date" class="form-control">
                                         
                                          <button type="submit1" class="form-control submit">طباعه</button>
                                      </div>
                                  </div>
                            </div>


                        </div>
                        <a href="carData1.php" class="submit1 form-control btn btn-secondary">متابعه</a>
                    </div>
                </form>
            </div>
        </section>
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>