<?php
include_once ("./include/config.php");
include_once ("./include/functions.php");

if(!isset($_SESSION['user']) ){
    header("location:http://localhost/project-forms/login.php");
}
else
    {
    $id = $_SESSION['user'];
    $query = "SELECT * FROM forms WHERE user_id =$id"; //11
    $execute = $mysql->query($query);
    if ($execute->num_rows === 1) {
        header("location: http://localhost/project-forms/edit.php");
    }
}
?>


<html>
<head>
    <title> index </title>

    <link rel="stylesheet" href="theme/css/style.css">
    <link rel="stylesheet" href="theme/css/bootstrab">
    <link rel="stylesheet" href="theme/css/bootstrab/bootstrap.css">
    <link rel="stylesheet" href="theme/js/bootstrap.js">
</head>
<body class="" style="">
<section class="position-sticky sticky-top" style="top:0;z-index: 1071; min-height: 2rem">
    <ul class="nav nav-tabs  justify-content-between pl-5 pr-5" style="background: #37009a">
        <li class="nav-item dropdown" >
            <a class="nav-link dropdown-toggle active" data-toggle="dropdown" role="button" style="color: red" aria-haspopup="true" aria-expanded="false">Option</a>
            <div class="dropdown-menu text-right" >
                <a class="dropdown-item" href="#section1">من نحن </a>
                <a class="dropdown-item" href="#section2">المشاركات الداخلية </a>
                <a class="dropdown-item" href="#section3">المشاركة العملية </a>
                <a class="dropdown-item" href="#section4">المشاركة في الأنشطة والفعاليات </a>
                <a class="dropdown-item" href="#section5">المهارات الشخصية </a>
                <div class="dropdown-divider" >Section3 </div>
                <a class="dropdown-item" href="handle/logout.php">logout</a>

            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="profile.php" style="color: white">profile</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="index.php" style="color: white"> CV</a>
        </li>
        <li> <div class="nav-link  p-2" style="color:white;">  <?php echo getUserName($_SESSION['user']) ?> أهلأ بك يا صاحب الهمة</div></li>
        <li style="place-self: center"> <div class=""><a href="profile.php"><?php echo getUserName($_SESSION['user']) ?></a></li>
        <li><img src="image/logo.png" alt="" style="width: 4rem;height: 3rem"></li>
    </ul>
</section>
<section class="nav nav-tabs navbar-nav an-nav container" style="margin-bottom: 7rem;height: 16rem;background-image: url('image/img3.jpg')">

</section>
<section class="navbar an-nav text-center " style="margin-top: -6rem">
</section>



<div class="container">
    <div class="row">
        <div class="col-lg-3 nav-tabs position-sticky">

            <section class="accordion text-center container" id="accordionExample">
                <h1 class="text-left  p-2" style="background-image:url('image/img1.jpg') ;color: white;height: 19rem;color:black;font-size: 4rem" >CV هماوي </h1>

                <!--    <h1 class="text-left  p-2" style="background-color: rgb(103, 58, 183);color: white" >CV هماوي </h1>-->
                <div class="card">
                    <div class="card-header" id="headingOne" >
                        <h2 class="mb-0">
                            <button class="btn btn-block btn-danger" style="background-color: rgb(103, 58, 183);" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                رسالتنا
                            </button>
                        </h2>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            بناء جيل واعي ومنتم لوطنه وامته , ذو خطاب متزن ومنظومة اخلاقية وقيمية , يمتلك الادوات اللارزمة لفهم واقعه والتأثير به
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo" >
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                الرؤية                 </button>
                        </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            ريادة العمل الشبابي والطلابي في الأردن والوطن العربي , وتقديم نموذج ناجح في العمل الطلابي والنقابي .

                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                مهمتنا                </button>
                        </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            بناء تجمع شبابي قوي بأدائه وأدواته , مؤسسي بمنهجيته وآلياته, واضح وواعقي ومتزن بخطابه قادر على تمثيل الشباب في قضاياهم.
                            يعمل استنادا لمنطلقاته ,لتحقيق اهدافه ورسالته
                            يؤسس لفكر وقوية وطنية جامعة ومنظومة أخلاقية , منطلقا من مبادىْ الدين الاسلامي الحنيف, وقيم الحضارة العربية الإسلامية .         </div>
                    </div>
                </div>
            </section>

        </div>
        <div class="col-lg-6">

            <section class="intro row justify-content-between " >
                <!--    <section class="col-lg-12 card-one mt-3 card " >-->
                <div class="container" >
                    <div class="row mt-5">
                        <div class="col-lg-8">
                        </div>

                        <div id="section1" class="font-italic text-right btn-info  w-25 col-lg-3 p-2" style="border-radius: 40px 0px 20px 0px;background-color: rgb(103, 58, 183);">
                            قسم 1 من 5
                        </div>
                    </div>
                    <div class="row">
                        <div class="r">
                            <h3 class="text-center">CV هماوي</h3>
                        </div>

                        <div class="col-lg-12 ">
                            <p class="text-right font-weight-light " style="font-size: 1.5rem">
                                كادرنا العظيم، كما وعدناكم بدائرة الموارد البشرية في الكتلة أن يكون اختيار المسؤلين بناءا على الأحقية و الكفاءة
                                ولكي نستطيع إيجاد نظام تقييم عادل لتكريم الأفراد الأكثر تفاعلا..
                                يرجى تعبئة هذا الفورم بدقة لكي يكون سيرة ذاتية لك في الكتلة ليتم على أساسه تطبيق ما سبق
                                **يرجى العلم أن الفورم يتطلب استخدام بريد إلكتروني، وذلك لكي يكون باب التعديل على الإجابات مفتوحا لكم مستقبلا'
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <section  style="text-align:right" dir="ltr" class="first">
                <div class="container">
                    <form action="handle/index.php" method="post" class="col-lg-12 d-flex flex-column " >
                        <img class="row" src="theme/css/..image/img/رب%20همة.jpg" alt="" style="height: 15rem">
                        <div class="row mt-5">
                            <div class="col-lg-8">
                            </div>
                            <div id="section1" class="mb-5 dev font-italic" style="width: 30rem">
                                <div style="" class="qustion">
                                    أسئلة صعبة
                                </div>
                                <input type="url" class="form-control form-control-lg" value="" placeholder="email facebook" name="facemail" style="">
                                <input type="text" class="form-control form-control-lg" value="" placeholder="عدد ساعات التخصص" name="sechours">
                                <input type="text" class="form-control form-control-lg" value="" placeholder="عدد الساعات المقطوعة " name="completHours">
                                <input type="text" class="form-control form-control-lg" value="" placeholder="المعدل التراكمي" name="average">

                            </div>
                            <br>
                            <br>
                            <div id="section2" class="font-italic text-right btn-info  w-25 col-lg-3 p-2" style="margin-left: auto;border-radius: 40px 0px 20px 0px; background-color: rgb(103, 58, 183)">
                                قسم 2 من 5
                            </div>
                        </div>

                        <div class="row " style="align-self: center">
                            <div class="r text-right">
                                <h3>المشاركات الداخلية </h3>
                            </div>
                        </div>

                        <h5>هل حضرت المستوى التمهيدي؟ السؤال خاص بدفعة 018 وما بعد</h5>
                        <input type="radio" name="m1"  id="" value="yes"> yes <br>
                        <input type="radio" name="m1"  id="" value=yes"> no <br>



                        <hr style="width: 40rem ; height: 1rem">
                        <h5>  هل حضرت المستوى التأسيسي للكتلة
                        </h5>
                        <input type="radio" name="m2"  value="YES-1" >نعم - مرة واحدة <br>
                        <input type="radio" name="m2"   value="YES-2">نعم - مرتين <br>
                        <input type="radio" name="m2"   value="YES-3" >نعم - ثلاثة مرات <br>
                        <input type="radio" name="m2"   value="NO">لا <br>

                        <hr style="width: 40rem ; height: 1rem">
                        <h5>هل حضرت المستوى المتقدم للكتلة
                        </h5>
                        <input type="radio" name="m3"   value="NO"> لا<br>
                        <input type="radio" name="m3"   value="YES-1">نعم - مرة واحدة<br>
                        <input type="radio" name="m3"   value="YES-2">نعم - مرتين<br>
                        <hr style="width: 40rem ; height: 1rem">


                        <h5>اذكر مشاركاتك في البرنامج الاختياري الخاص بدائرة الموارد البشرية
                        </h5>

                        <br>
                        <input type="checkbox" name="pro[]"  value="المناظرات" >  دورة المناظرات <br>
                        <input type="checkbox" name="pro[]"  value="مناظرة العمل الطلابي"  >  مناظرة العمل الطلابي<br>
                        <input type="checkbox" name="pro[]"  value="الحواريات" >   الحواريات  <br>
                        <input type="checkbox" name="pro[]"  value="دورة مسؤولي الموارد"> دورة مسؤولي الموارد البشرية<br>
                        <input type="checkbox" name="pro[]"  value="دورة مسؤولي السنافر"> دورة مسؤولي السنافر<br>
                        <input type="checkbox" name="pro[]"  value="حوارية مؤسسة الاتحاد">  حوارية مؤسسة الاتحاد(اسبوع العمل الطلابي) <br>
                        <input type="checkbox" name="pro[]"  value=" محاضرة العمل الطلابي"> محاضرة العمل الطلابي (اسبوع العمل الطلابي) <br>
                        <input type="checkbox" name="pro[]"  value="تزكية النفس (النفس مع النفس)">  تزكية النفس (النفس مع النفس) <br>
                        <input type="checkbox" name="pro[]"  value="أساليب الدعوة">  أساليب الدعوة <br>
                        <input type="checkbox" name="pro[]"  value=" البحث العلمي ">  البحث العلمي <br>
                        <input type="checkbox" name="pro[]"  value="التواصل الفعال و اختلاف الشخصيات" >  التواصل الفعال و اختلاف الشخصيات <br>
                        <input type="checkbox" name="pro[]"  value="المغالطات المنطقية" > المغالطات المنطقية <br>
                        <input type="checkbox" name="pro[]"  value=" نظيم وقت وترتيب أولويات " >تنظيم وقت وترتيب أولويات  <br>
                        <input type="checkbox" name="pro[]"  value="إدارة فريق العمل والاجتماعات" > إدارة فريق العمل والاجتماعات  <br>
                        <input type="checkbox" name="pro[]"  value="استبيان 2019"  > تعبئة استبيان 2019<br>

                        <img class="row m-5" src="theme/css/..image/img/التطوع%20عبادة%20وانتماء.jpg" alt="" style="height: 22rem">
                        <div class="row mt-5">
                            <div class="col-lg-8">
                            </div>
                            <div id="section3" class="font-italic text-right btn-info  w-25 col-lg-3 p-2" style="border-radius: 40px 0px 20px 0px; background-color: rgb(103, 58, 183)">
                                قسم 3 من 5
                            </div>
                        </div>
                        <div class="row " style="margin-left: auto">
                            <div class="r text-right" style="">
                                <h3>المشاركة العملية </h3>

                                <h6>مشاركات الفرد على مستوى الكلية و القطاع و المركزي</h6>
                            </div>
                        </div>
                        <div class="form-group">
                            <label >ما اسم الفريق أو اللجنة التي تعمل بها على مستوى الكلية</label>
                            <input type="text"  name="team" class="form-control"  placeholder="" value="">
                        </div>
                        <hr style="width: 40rem ; height: 1rem">

                        <h5>ما هو مسماك الوظيفي فيها؟
                        </h5>
                        <input type="radio" name="jop"  value="لا اعمل بالكلية حالي"> لا اعمل بالكلية حاليا<br>
                        <input type="radio" name="jop"  value="أحد أفراد الفريق العام">أحد أفراد الفريق العام<br>
                        <input type="radio" name="jop"  value="مسؤول كلية">مسؤول كلية<br>
                        <input type="radio" name="jop"  value="مسؤول اللجنة أو الفريق">مسؤول اللجنة أو الفريق<br>
                        <input type="radio" name="jop"  value="المسؤول الاعلامي">المسؤول الاعلامي<br>
                        <input type="radio" name="jop"  value="احد اعضاء الفريق الإعلامي">احد اعضاء الفريق الإعلامي<br>
                        <input type="radio" name="jop"  value="المسؤول التربوي">المسؤول التربوي<br>
                        <input type="radio" name="jop"  value="احد اعضاء الفريق التربوي">احد اعضاء الفريق التربوي<br>
                        <input type="radio" name="jop"  value="مسؤول الموارد - التدريب و التطوير">مسؤول الموارد - التدريب و التطوير<br>
                        <input type="radio" name="jop"  value="احد اعضاء فريق الموارد - التدريب">احد اعضاء فريق الموارد - التدريب<br>
                        <input type="radio" name="jop"  value="مسؤول الأنشطة">مسؤول الأنشطة<br>
                        <input type="radio" name="jop"  value="احد اعضاء فريق الانشطة">احد اعضاء فريق الانشطة<br>
                       غير ذلك  <input type="text" name="jop" >



                        <!--                        <head>-->
                        <!--                            <title>Untitled Document</title>-->
                        <!--                        </head>-->
                        <!---->
                        <!--                        <body>-->
                        <!--                        <form action = "" name="frmSubmit" method="post">-->
                        <!--                            <input type="checkbox" name="txtCheck" --><?// if(isset($_POST['txtCheck'])) echo "checked='checked'";?><!-- value=""  /><br />-->
                        <!--                            <label>Name</label><br />-->
                        <!--                            <input type="text" name="txtName" id="NameTextBox" value="--><?php //echo $_POST['txtName']; ?><!--" />-->
                        <!--                            <br />-->
                        <!--                            <label>E Mail</label><br />-->
                        <!--                            <input type="text" name="txtEmail" id="EmailTextBox" value="--><?php // echo $_POST['txtEmail'];?><!--" />-->
                        <!--                            <input name="BtnSubmit" type="submit" onclick="MM_validateForm('NameTextBox','','R','EmailTextBox','','R');return document.MM_returnValue" value="Send" />-->
                        <!--                        </form>-->
                        <!--                        </body>-->
                        <!--                        </html>-->



                        <hr style="width: 40rem ; height: 1rem">

                        <h5>هل كنت في ما مضى أو في الوقت الحالي عضو اتحاد؟</h5>
                        <input type="radio" name="vice"  value="yes"> نعم<br>
                        <input type="radio" name="vice"  value="no"> لا<br>
                        <hr style="width: 40rem ; height: 1rem">

                        <h5>العمل على مستوى القطاعات</h5>
                        <input type="radio" name="sector"  value=" لا اعمل على مستوى القطاع حاليا"> لا اعمل على مستوى القطاع حاليا<br>
                        <input type="radio" name="sector"   value="مسؤول قطاع"> مسؤول قطاع<br>
                        <input type="radio" name="sector"   value="أمين سر القطاع"> أمين سر القطاع<br>
                        <input type="radio" name="sector"   value="مسؤل اعلامي للقطاع"> مسؤل اعلامي للقطاع<br>
                        <input type="radio" name="sector"   value="مسؤول أنشطة للقطاع"> مسؤول أنشطة للقطاع<br>
                        <input type="radio" name="sector"   value="مسؤول موارد للقطاع"> مسؤول موارد للقطاع<br>
                        <input type="radio" name="sector"   value="مسؤول تربوي للقطاع"> مسؤول تربوي للقطاع<br>
                        <input type="radio" name="sector"   value="غير ذلك ">غير ذلك<br>
                        <hr style="width: 40rem ; height: 1rem">

                        <h5>ما هو عملك الحالي على المستوى المركزي </h5>
                        <input type="radio" name="central"  value="لا اعمل على المستوى المركزي حاليا"> لا اعمل على المستوى المركزي حاليا<br>
                        <input type="radio" name="central"  value="عضو مجلس أمناء"> عضو مجلس أمناء<br>
                        <input type="radio" name="central"  value="مسؤول الكتلة"> مسؤول كتلة<br>
                        <input type="radio" name="central"  value="نائب مسؤول كتلة"> نائب مسؤول كتلة <br>
                        <input type="radio" name="central"  value="أمين السر">أمين السر<br>
                        <input type="radio" name="central"  value="مسؤول دائرة الموارد البشرية"> مسؤول دائرة الموارد البشرية<br>
                        <input type="radio" name="central"  value="احد اعضاء دائرة الموارد البشرية">احد اعضاء دائرة الموارد البشرية <br>
                        <input type="radio" name="central"  value="مسؤول دائرة المشاريع و الأنشطة">مسؤول دائرة المشاريع و الأنشطة<br>
                        <input type="radio" name="central"  value="احد اعضاء دائرة المشاريع و الأنشطة">احد اعضاء دائرة المشاريع و الانشطة<br>
                        <input type="radio" name="central"  value="مسؤول الدائرة الإعلامية"> مسؤول الدائرة الاعلامية<br>
                        <input type="radio" name="central"  value="احد اعضاء الدائرة الاعلامية"> احد اعضاء الدائرة الاعلامية<br>
                        <input type="radio" name="central"  value="مسؤول دائرة الاتحاد"> مسؤول دائرة الاتحاد<br>
                        <input type="radio" name="central"  value="احد اعضاء دائرة الاتحاد"> احد اعضاء دائرة الاتحاد<br>
                         <input type="radio" name="central"  value="غير ذلك"> غير ذلك <br>
                        <hr style="width: 40rem ; height: 1rem">

                        <div class="row mt-5">
                            <div class="col-lg-8">
                            </div>
                            <div id="section4" class="font-italic text-right btn-info  w-25 col-lg-3 p-2" style="border-radius: 40px 0px 20px 0px; background-color: rgb(103, 58, 183)">
                                قسم 4 من 5
                            </div>
                        </div>
                        <div class="row">
                            <div class="r text-right">
                                <h3>المشاركة في الأنشطة و الفعاليات  </h3>
                                <h6>المشاركات الفاعلة للفرد بالأنشطة، و حضوره و دعمه النشاطات الأخرى</h6>
                            </div>
                        </div>
                        <hr style="width: 40rem ; height: 1rem">
                        <h5>أسماء المشاريع و الانشطة و الفعاليات التي شاركت في تنظيمها على مستوى الكلية و القطاع و الكتلة( أنشطة تابعة للهمة) </h5>

                        <textarea rows="10" cols="30" name="activ-hem">
                        </textarea>
                        <hr style="width: 40rem ; height: 1rem">

                        <h5>أسماء المشاريع و الانشطة و الفعاليات التي قمت بالمساعدة في تنظيمها تحت مسمى الاتحاد </h5>
                        <textarea rows="3" cols="50" name="activ-et" >

                        </textarea>
                        <hr style="width: 40rem ; height: 1rem">

                        <h5>اذكر أهم الأنشطة و الفعاليات التي قمت بحضورها على مستوى كليتك و  الكليات الأخرى و الكتلة و الاتحاد  </h5>
                        <textarea rows="3" cols="50" name="activ-sec">

                        </textarea>
                        <hr style="width: 40rem ; height: 1rem">


                        <img class="row" src="theme/css/..image/img/شدو%20الهمة.jpg" alt="">
                        <div class="row mt-5">
                            <div class="col-lg-8">
                            </div>
                            <div id="section5" class="font-italic text-right btn-info  w-25 col-lg-3 p-2" style="border-radius: 40px 0px 20px 0px; background-color: rgb(103, 58, 183)">
                                قسم 5 من 5
                            </div>
                        </div>
                        <section class="row">
                            <div class="r text-right">
                                <h3>المهارات الشخصية </h3>
                                <h6>في هذا القسم، يرجى التزام الصدق و الأمانة
                                    واختيار العدد الحقيقي لمهاراتك و مميزات الشخصية
                                    **يمكنك اختيار أكثر من خيار واحد</h6>
                            </div>
                        </section>
                        <hr style="width: 40rem ; height: 1rem">
                        <h5>ما هي أهم المهارات  التي تمتلكها
                        </h5>
                        <input type="checkbox" name="skill[]"   value="كتابة المحتوى الاعلامي"> كتابة المحتوى الاعلامي<br>
                        <input type="checkbox" name="skill[]"   value="التصميم"> التصميم<br>
                        <input type="checkbox" name="skill[]"   value="المونتاج">المونتاج <br>
                        <input type="checkbox" name="skill[]"   value="التصوير">التصوير <br>
                        <input type="checkbox" name="skill[]"   value="الرسم">الرسم <br>
                        <input type="checkbox" name="skill[]"   value="تخطيط فعاليات و أنشطة">تخطيط فعاليات و أنشطة <br>
                        <input type="checkbox" name="skill[]"   value="تقديم فعاليات"> تقديم فعاليات<br>
                        <input type="checkbox" name="skill[]"   value="مسؤولية النظام بالأنشطة والفعاليات الكبيرة ">مسؤولية النظام بالأنشطة والفعاليات الكبيرة <br>
                        <input type="checkbox" name="skill[]"   value="خبير ضيافة"> خبير ضيافة<br>
                        <input type="checkbox" name="skill[]"   value="خبير ديكور و تزيين">خبير ديكور و تزيين <br>
                        <input type="checkbox" name="skill[]"   value="مهارات إقناع و تحدث"> مهارات إقناع و تحدث<br>
                        <input type="checkbox" name="skill[]"   value="القدرة على المناظرة المحترفة"> القدرة على المناظرة المحترفة<br>
                        <input type="checkbox" name="skill[]"   value="مهارة قيادة الفريق"> مهارة قيادة الفريق<br>
                        <input type="checkbox" name="skill[]"   value="مهارات إدارية">مهارات إدارية <br>
                        <input type="checkbox" name="skill[]"   value="عزف ">عزف <br>
                        <input type="checkbox" name="skill[]"   value=" كتابة سيناريوهات"> كتابة سيناريوهات <br>
                        <input type="checkbox" name="skill[]"   value=" نشيد"> نشيد <br>

                        <input type="checkbox" name="skill[]"   value="استخدام Microsoft word"> استخدام Microsoft word<br>
                        <input type="checkbox" name="skill[]"   value="استخدام Microsoft excel">استخدام Microsoft excel <br>
                        <input type="checkbox" name="skill[]"   value="استخدام Microsoft powerpoint ">استخدام Microsoft powerpoint <br>
                        <hr style="width: 40rem ; height: 1rem">
                        <h5>جوانب إبداعية و مميزات تمتلكها
                        </h5>
                        <input type="checkbox" name="adv[]"  value="مخزون ثقافي واسع">مخزون ثقافي واسع<br>
                        <input type="checkbox" name="adv[]"  value="معرفة أكاديمية بالتخصص">معرفة أكاديمية بالتخصص<br>
                        <input type="checkbox" name="adv[]"   value="العمل الجماعي">العمل الجماعي<br>
                        <input type="checkbox" name="adv[]"  value="تنظيم الوقت">تنظيم الوقت<br>
                        <input type="checkbox" name="adv[]"   value="معرفة سياسية">معرفة سياسية<br>
                        <input type="checkbox" name="adv[]"   value="معرفة واسعة بالقضية الفلسطينية">معرفة واسعة بالقضية الفلسطينية<br>
                        <input type="checkbox" name="adv[]"   value="قراءة كتب">قراءة كتب<br>
                        <input type="checkbox" name="adv[]"  value="تلاوة القرآن">تلاوة القرآن<br>
                        <input type="checkbox" name="adv[]"  value="صوت جميل">صوت جميل<br>
                        <input type="checkbox" name="adv[]"  value="التمثيل المسرحي">التمثيل المسرحي<br>
                        <input type="checkbox" name="adv[]"  value="التمثيل بالفيديوهات">التمثيل بالفيديوهات<br>
                        <input type="checkbox" name="adv[]"  value="علاقات عامة و رعايات">علاقات عامة و رعايات<br>
                        <input type="checkbox" name="adv[]"   value="الترجمة من اللغة الانجليزية">الترجمة من اللغة الانجليزية<br>
                        <input type="checkbox" name="adv[]"  value="معرفة دينية واسعة">معرفة دينية واسعة<br>
                        <input type="checkbox" name="adv[]"  value="التحدث بالفصحى بطلاقة">التحدث بالفصحى بطلاقة<br>
                        <input type="checkbox" name="adv[]"  value="تحليل أنماط الشخصيات">تحليل أنماط الشخصيات<br>
                        <input type="checkbox" name="adv[]"  value="متمكن في علوم النفس و التحليل النفسي">متمكن في علوم النفس و التحليل النفسي<br>
                        <input type="checkbox" name="adv[]"  value="معرفة تحليلية و فلسفة عميقة">معرفة تحليلية و فلسفية عميقة<br>
                        <input type="checkbox" name="adv[]"  value="البرمجة وإنشاء التطبيقات و المواقع">البرمجة وإنشاء التطبيقات و المواقع<br>
                        <input type="checkbox" name="adv[]"  value="شخصية اجتماعية و محبوبة">شخصية اجتماعية و محبوبة<br>
                        <hr style="width: 40rem ; height: 1rem">

                        <h5>مهارات و جوانب تتمنى من دائرة الموارد البشرية العمل على تطويرها لك</h5>
                        <textarea rows="3" cols="50" name="Human-Resources">

                        </textarea> <hr style="width: 40rem ; height: .2rem;background: red">


                        <h5>عن نفسك </h5>
                        <textarea rows="3" cols="50" name="yourself">
                        </textarea>
                        <h5>أبرز السلبيات التي تود تطويرها في شخصيتك </h5>
                        <textarea rows="3" cols="50" name="dis">
                        </textarea>
                        <h5>أبرز الايجابيات وعوامل القوة بشخصيتك </h5>
                        <textarea rows="3" cols="50" name="advyourself">
                        </textarea>
                        <h5>ملاحظات عامة</h5>
                        <textarea rows="3" cols="50" name="notes">
                        </textarea>
                        <input type="submit" value="submit" class="btn btn-info m-3" name="submit">
                    </form>
                </div>
            </section>
        </div>
        <div class="col-lg-3 col-sm-12">
            <img src="image/sh.jpg" alt="" style="width: 20rem">
        </div>
    </div>
</div>

</body>
</html>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>