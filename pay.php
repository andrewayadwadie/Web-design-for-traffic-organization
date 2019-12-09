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
        <section class="pay">
            <div class="pay-rgba">
                <form>
                    <div class="container">
                        <h3 class="text-center">برجاء اتمام عمليه الدفع اولا</h3>
                        <hr>
                        <div class="row">
                            <div class="col-6">
                                <input type="text" class="form-control" placeholder="المبلغ (ج.م)">
                            </div>
                            <div class="col-6">
                                <input type="text" class="form-control" placeholder="ادخل رقم الموبيل">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-6">
                                <div class="inputWithIcon">
                                    <input type="text" class="form-control" placeholder=" رقم الكارت ">
                                    <img src="images/payment_img_3.png">
                                </div>
                            </div>
                            <div class="col-6">
                                <input type="text" class="form-control" placeholder=" الاسم على الكارت (بالانجليزيه)  ">
                            </div>
                        </div>
                       <br>
                        <div class="row">
                            <div class="col-6">
                                <div class="inputWithIcon2">
                                    <input type="text" class="form-control" placeholder=" رقم الحماية CVV ">
                                    <i class="fa fa-unlock-alt"></i>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="row">
                                    <div class="col-md-2">تاريخ الانتهاء</div>
                                    <div class="col-md-10"><input type="date" class="form-control"></div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-6">
                                 <input type="checkbox">
                                    <span>اوافق على الشروط والاحكام</span>
                            </div>
                            <div class="col-6">
                                <button type="submit" class="form-control btn btn-primiry" >تسجيل</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>


        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/all.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>