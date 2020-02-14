<?php
include_once ("./include/config.php");
include_once ("./include/functions.php");
header('Content-Type: text/html; charset=utf-8');

if(!isset($_SESSION['user']) ){
    header("location:http://localhost/hemma-1/login.php");
     die;
}
$user=$_SESSION['user'];

$query = "SELECT * FROM forms WHERE user_id=$user";
$execute = $mysql->query($query);
$forms = $execute->fetch_array();




?>


<html>
<head>
    <title> update </title>
    <link rel="stylesheet" href="theme/css/style.css">
    <link rel="stylesheet" href="theme/css/bootstrab">
    <link rel="stylesheet" href="theme/css/bootstrab/bootstrap.css">
    <link rel="stylesheet" href="theme/js/bootstrap.js">
</head>
<body class="" style="">
<section class="position-sticky  sticky-top" style="top:0;z-index:1071; min-height:2rem">
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
        <li> <div class="nav-link  p-2" style="color:white;"> <a href=""> <?php echo getUserName($_SESSION['user']) ?> </a> أهلأ بك يا صاحب الهمة</div></li>
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
                    <form action="handle/edit.php" method="post" class="col-lg-12 d-flex flex-column form-control">
                        <img class="row" src="theme/css/..image/img/رب%20همة.jpg" alt="" style="height: 15rem">
                    <div class="row mt-5">
                        <div class="col-lg-8">
                        </div>
                        <div id="section1" class="mb-5 dev font-italic" style="width: 30rem">

                            <div style="" class="qustion">
أسئلة صعبة
                            </div>
                            <input type="url" class="form-control form-control-lg" value="<?php echo $forms['fcemail'] ?>" placeholder="email facebook" name="facemail" style="">
                            <input type="text" class="form-control form-control-lg" value="<?php echo $forms['sectHours'] ?>" placeholder="عدد ساعات التخصص" name="sechours">
                            <input type="text" class="form-control form-control-lg" value="<?php echo $forms['completHours'] ?>" placeholder="عدد الساعات المقطوعة " name="completHours">
                            <input type="text" class="form-control form-control-lg" value="<?php echo $forms['average'] ?>" placeholder="المعدل التراكمي" name="average">

                        </div>
                        <br>
                        <br>
                        <div id="section2" class="font-italic text-right btn-info  w-25 col-lg-3 p-2" style="border-radius: 40px 0px 20px 0px; background-color: rgb(103, 58, 183)">
                            قسم 2 من 5
                        </div>
                    </div>

                    <div class="row">
                        <div class="r text-right">
                            <h3>المشاركات الداخلية </h3>
                        </div>
                    </div>

                           <h5>هل حضرت المستوى التمهيدي؟ السؤال خاص بدفعة 018 وما بعد</h5>
                        <lable>  <input type="radio" name="m1" <?php echo $forms['m1']=="yes"?"checked": "" ?> id="" value="yes"> نعم   </lable>
                        <label>  <input type="radio" name="m1" <?php echo $forms['m1']=="no"?"checked": "" ?> id="" value=no"> لا <br> </label>


                        <hr style="width: 40rem ; height: 1rem">
                        <h5>  هل حضرت المستوى التأسيسي للكتلة
                        </h5>
                         <lable>   <input type="radio" name="m2" <?php echo $forms['m2']=="YES-1"?"checked": "" ?> value="YES-1" >نعم - مرة واحدة <br></lable>
                          <lable>  <input type="radio" name="m2" <?php echo $forms['m2']=="YES-2"?"checked": "" ?>  value="YES-2">نعم - مرتين <br></lable>
                          <lable>  <input type="radio" name="m2" <?php echo $forms['m2']=="YES-3"?"checked": "" ?>  value="YES-3" >نعم - ثلاثة مرات <br></lable>
                          <lable>  <input type="radio" name="m2" <?php echo $forms['m2']=="NO"?"checked": "" ?>  value="NO">لا <br></lable>

                            <hr style="width: 40rem ; height: 1rem">
<h5>هل حضرت المستوى المتقدم للكتلة
                        </h5>
                       <label> <input type="radio" name="m3" <?php echo $forms['m3']=="NO"?"checked": "" ?>  value="NO"> لا<br></label>
                       <label> <input type="radio" name="m3" <?php echo $forms['m3']=="YES-1"?"checked": "" ?>  value="YES-1">نعم - مرة واحدة<br></label>
                       <label> <input type="radio" name="m3" <?php echo $forms['m3']=="YES-2"?"checked": "" ?>  value="YES-2">نعم - مرتين<br></label>
                <hr style="width: 40rem ; height: 1rem">


                    <h5>اذكر مشاركاتك في البرنامج الاختياري الخاص بدائرة الموارد البشرية
                    </h5>
<?php
//                        $users= (fallcheckbox('Optional', $_SESSION['user']));
//                        foreach ($users as $user ){
//
//
//                        }
                        ?>
<!--<br>                       <label> <input type="checkbox" name="pro[]"  value="المناظرات" --><?php //echo (fallcheckbox(,'المناظرات')==1)?"checked":""?><!-- >  دورة المناظرات <br></label>-->





                       <label> <input type="checkbox" name="pro[]"  value="المناظرات" <?php echo (checkbox($forms['id'],'المناظرات')==1)?"checked":""?> >  دورة المناظرات <br></label>
                       <label> <input type="checkbox" name="pro[]"  value="مناظرة العمل الطلابي" <?php echo (checkbox($forms[0],'مناظرة العمل الطلابي')==1)?"checked":""?> >  مناظرة العمل الطلابي<br></label>
                      <label><input type="checkbox" name="pro[]"  value="الحواريات" <?php echo checkbox($forms['id'],'الحواريات')==1?"checked":""?> >   الحواريات  <br></label>
                      <label>  <input type="checkbox" name="pro[]"  value="دورة مسؤولي الموارد" <?php echo checkbox($forms['id'],'دورة مسؤولي الموارد')==1?"checked":""?> > دورة مسؤولي الموارد البشرية<br></label>
                      <label>  <input type="checkbox" name="pro[]"  value="دورة مسؤولي السنافر" <?php echo checkbox($forms['id'],'دورة مسؤولي السنافر')==1?"checked":""?> > دورة مسؤولي السنافر<br></label>
                      <label>  <input type="checkbox" name="pro[]"  value="حوارية مؤسسة الاتحاد" <?php echo (checkbox($forms['id'],'حوارية مؤسسة الاتحاد')==1)?"checked":""?> >  حوارية مؤسسة الاتحاد <br></label>
                      <label>  <input type="checkbox" name="pro[]"  value="تزكية النفس (النفس مع النفس)" <?php echo (checkbox($forms['id'],'تزكية النفس (النفس مع النفس)')==1)?"checked":""?> >  تزكية النفس (النفس مع النفس) <br></label>
                      <label>  <input type="checkbox" name="pro[]"  value="أساليب الدعوة" <?php echo (checkbox($forms['id'],'أساليب الدعوة')==1)?"checked":""?> >  أساليب الدعوة <br></label>
                      <label>  <input type="checkbox" name="pro[]"  value=" البحث العلمي " <?php echo (checkbox($forms['id'],' البحث العلمي ')==1)?"checked":""?> >  البحث العلمي <br></label>
                       <label> <input type="checkbox" name="pro[]"  value="التواصل الفعال و اختلاف الشخصيات" <?php echo (checkbox($forms['id'],'التواصل الفعال و اختلاف الشخصيات')==1)?"checked":""?> >  التواصل الفعال و اختلاف الشخصيات <br></label>
                       <label> <input type="checkbox" name="pro[]"  value="المغالطات المنطقية" <?php echo (checkbox($forms['id'],'المغالطات المنطقية')==1)?"checked":""?> > المغالطات المنطقية <br></label>
                       <label> <input type="checkbox" name="pro[]"  value="محاضرة العمل الطلابي" <?php echo (checkbox($forms['id'],'محاضرة العمل الطلابي')==1)?"checked":""?> > محاضرة العمل الطلابي <br></label>
                       <label> <input type="checkbox" name="pro[]"  value="إدارة فريق العمل و الاجتماعات" <?php echo (checkbox($forms['id'],'إدارة فريق العمل و الاجتماعات')==1)?"checked":""?> > إدارة فريق العمل و الاجتماعات  <br></label>
                       <label> <input type="checkbox" name="pro[]"  value="تنظيم الوقت وترتيب أولويات " <?php echo (checkbox($forms['id'],'تنظيم الوقت وترتيب أولويات ')==1)?"checked":""?> >تنظيم الوقت وترتيب أولويات  <br></label>
                       <label> <input type="checkbox" name="pro[]"  value="استبيان 2019" <?php echo checkbox($forms['id'],'استبيان 2019')==1?"checked":""?> > تعبئة استبيان 2019<br></label>

                        <img class="row m-5" src="theme/css/..image/img/التطوع%20عبادة%20وانتماء.jpg" alt="" style="height: 22rem">
     <div class="row mt-5">
         <div class="col-lg-8">
         </div>
         <div id="section3" class="font-italic text-right btn-info  w-25 col-lg-3 p-2" style="border-radius: 40px 0px 20px 0px; background-color: rgb(103, 58, 183)">
             قسم 3 من 5
         </div>
     </div>
     <div class="row">
         <div class="r text-right">
             <h3>المشاركة العملية </h3>
             <h6>مشاركات الفرد على مستوى الكلية و القطاع و المركزي</h6>
         </div>
     </div>
                        <div class="form-group">
                            <label >ما اسم الفريق أو اللجنة التي تعمل بها على مستوى الكلية</label>
                            <input type="text"  name="team" class="form-control"  placeholder="" value="<?php echo $forms['Nteam'] ?>">
                        </div>
                        <hr style="width: 40rem ; height: 1rem">

                        <h5>ما هو مسماك الوظيفي فيها؟
                        </h5>
                     <label>   <input type="radio" name="jop" <?php echo $forms['Joptitle']=="لا اعمل بالكلية حالي"?"checked": "" ?> value="لا اعمل بالكلية حالي"> لا اعمل بالكلية حاليا<br></label>
                      <label>  <input type="radio" name="jop" <?php echo $forms['Joptitle']=="أحد أفراد الفريق العام"?"checked": "" ?> value="أحد أفراد الفريق العام">أحد أفراد الفريق العام<br></label>
                      <label>  <input type="radio" name="jop" <?php echo $forms['Joptitle']=="مسؤول كلية"?"checked": "" ?> value="مسؤول كلية">مسؤول كلية<br></label>
                      <label>  <input type="radio" name="jop" <?php echo $forms['Joptitle']=="مسؤول اللجنة أو الفريق"?"checked": "" ?> value="مسؤول اللجنة أو الفريق">مسؤول اللجنة أو الفريق<br></label>
                      <label>  <input type="radio" name="jop" <?php echo $forms['Joptitle']=="المسؤول الاعلامي"?"checked": "" ?> value="المسؤول الاعلامي">المسؤول الاعلامي<br></label>
                      <label>  <input type="radio" name="jop" <?php echo $forms['Joptitle']=="احد اعضاء الفريق الإعلامي"?"checked": "" ?> value="احد اعضاء الفريق الإعلامي">احد اعضاء الفريق الإعلامي<br></label>
                      <label>  <input type="radio" name="jop" <?php echo $forms['Joptitle']=="المسؤول التربوي"?"checked": "" ?> value="المسؤول التربوي">المسؤول التربوي<br></label>
                      <label>  <input type="radio" name="jop" <?php echo $forms['Joptitle']=="احد اعضاء الفريق التربوي"?"checked": "" ?> value="احد اعضاء الفريق التربوي">احد اعضاء الفريق التربوي<br></label>
                      <label>  <input type="radio" name="jop" <?php echo $forms['Joptitle']=="مسؤول الموارد - التدريب و التطوير"?"checked": "" ?> value="مسؤول الموارد - التدريب و التطوير">مسؤول الموارد - التدريب و التطوير<br></label>
                      <label>  <input type="radio" name="jop" <?php echo $forms['Joptitle']=="احد اعضاء فريق الموارد - التدريب"?"checked": "" ?> value="احد اعضاء فريق الموارد - التدريب">احد اعضاء فريق الموارد - التدريب<br></label>
                      <label>  <input type="radio" name="jop" <?php echo $forms['Joptitle']=="مسؤول الأنشطة"?"checked":"" ?> value="مسؤول الأنشطة">مسؤول الأنشطة<br></label>
                       <label> <input type="radio" name="jop" <?php echo $forms['Joptitle']=="احد اعضاء فريق الانشطة"?"checked": "" ?>value="احد اعضاء فريق الانشطة">احد اعضاء فريق الانشطة<br></label>
                      <label>  <input type="radio" name="jop" <?php echo $forms['Joptitle']=="غير ذلك"?"checked": "" ?> value="غير ذلك">غير ذلك<br></label>


                        <hr style="width: 40rem ; height: 1rem">

                        <h5>هل كنت في ما مضى أو في الوقت الحالي عضو اتحاد؟</h5>
                       <label> <input type="radio" name="vice" <?php echo $forms['Vice']=="yes"?"checked": "" ?> value="yes"> نعم<br></label>
                       <label> <input type="radio" name="vice" <?php echo $forms['Vice']=="no"?"checked": "" ?> value="no"> لا<br></label>
                        <hr style="width: 40rem ; height: 1rem">

                        <h5>العمل على مستوى القطاعات</h5>
                       <label> <input type="radio" name="sector" <?php echo $forms['SectorWork']==" لا اعمل على مستوى القطاع حاليا"?"checked": "" ?> value=" لا اعمل على مستوى القطاع حاليا"> لا اعمل على مستوى القطاع حاليا<br></label>
                       <label> <input type="radio" name="sector" <?php echo $forms['SectorWork']=="مسؤول قطاع"?"checked": "" ?>  value="مسؤول قطاع"> مسؤول قطاع<br></label>
                       <label> <input type="radio" name="sector"  <?php echo $forms['SectorWork']=="أمين سر القطاع"?"checked": "" ?> value="أمين سر القطاع"> أمين سر القطاع<br></label>
                       <label> <input type="radio" name="sector"  <?php echo $forms['SectorWork']=="مسؤل اعلامي للقطاع"?"checked": "" ?> value="مسؤل اعلامي للقطاع"> مسؤل اعلامي للقطاع<br></label>
                       <label> <input type="radio" name="sector"  <?php echo $forms['SectorWork']=="مسؤول أنشطة للقطاع"?"checked": "" ?> value="مسؤول أنشطة للقطاع"> مسؤول أنشطة للقطاع<br></label>
                       <label> <input type="radio" name="sector" <?php echo $forms['SectorWork']=="مسؤول موارد للقطاع"?"checked": "" ?>  value="مسؤول موارد للقطاع"> مسؤول موارد للقطاع<br></label>
                       <label> <input type="radio" name="sector" <?php echo $forms['SectorWork']=="مسؤول تربوي للقطاع"?"checked": "" ?>  value="مسؤول تربوي للقطاع"> مسؤول تربوي للقطاع<br></label>
                       <label> <input type="radio" name="sector" <?php echo $forms['SectorWork']=="غير ذلك"?"checked": "" ?>  value="غير ذلك">غير ذلك<br></label>
                        <hr style="width: 40rem ; height: 1rem">

                        <h5>ما هو عملك الحالي على المستوى المركزي </h5>
                        <label> <input type="radio" name="central" <?php echo $forms['CentralLevel']=="لا اعمل على المستوى المركزي حاليا"?"checked":""?> value="لا اعمل على المستوى المركزي حاليا"> لا اعمل على المستوى المركزي حاليا<br></label>
                        <label> <input type="radio" name="central" <?php echo $forms['CentralLevel']=="عضو مجلس أمناء"?"checked": "" ?> value="عضو مجلس أمناء"> عضو مجلس أمناء<br></label>
                        <label> <input type="radio" name="central" <?php echo $forms['CentralLevel']=="مسؤول الكتلة"?"checked":""?> value="مسؤول الكتلة"> مسؤول كتلة<br></label>
                        <label> <input type="radio" name="central" <?php echo $forms['CentralLevel']=="نائب مسؤول كتلة"?"checked": "" ?> value="نائب مسؤول كتلة"> نائب مسؤول كتلة <br></label>
                        <label> <input type="radio" name="central" <?php echo $forms['CentralLevel']=="أمين السر"?"checked": "" ?> value="أمين السر">أمين السر<br></label>
                        <label> <input type="radio" name="central" <?php echo $forms['CentralLevel']=="مسؤول دائرة الموارد البشرية"?"checked": "" ?> value="مسؤول دائرة الموارد البشرية"> مسؤول دائرة الموارد البشرية<br></label>
                        <label> <input type="radio" name="central" <?php echo $forms['CentralLevel']=="احد اعضاء دائرة الموارد البشرية"?"checked": "" ?> value="احد اعضاء دائرة الموارد البشرية">احد اعضاء دائرة الموارد البشرية <br></label>
                         <label><input type="radio" name="central" <?php echo $forms['CentralLevel']=="مسؤول دائرة المشاريع و الأنشطة"?"checked": "" ?> value="مسؤول دائرة المشاريع و الأنشطة">مسؤول دائرة المشاريع و الأنشطة<br></label>
                         <label><input type="radio" name="central" <?php echo $forms['CentralLevel']=="احد اعضاء دائرة المشاريع و الأنشطة"?"checked": "" ?> value="احد اعضاء دائرة المشاريع و الأنشطة">احد اعضاء دائرة المشاريع و الانشطة<br></label>
                         <label><input type="radio" name="central" <?php echo $forms['CentralLevel']=="مسؤول الدائرة الإعلامية"?"checked": "" ?> value="مسؤول الدائرة الإعلامية"> مسؤول الدائرة الاعلامية<br></label>
                        <label> <input type="radio" name="central" <?php echo $forms['CentralLevel']=="احد اعضاء الدائرة الاعلامية"?"checked": "" ?> value="احد اعضاء الدائرة الاعلامية"> احد اعضاء الدائرة الاعلامية<br></label>
                        <label> <input type="radio" name="central" <?php echo $forms['CentralLevel']=="مسؤول دائرة الاتحاد"?"checked": "" ?> value="مسؤول دائرة الاتحاد"> مسؤول دائرة الاتحاد<br></label>
                        <label> <input type="radio" name="central" <?php echo $forms['CentralLevel']=="احد اعضاء دائرة الاتحاد"?"checked": "" ?> value="احد اعضاء دائرة الاتحاد"> احد اعضاء دائرة الاتحاد<br></label>
                        <label> <input type="radio" name="central" <?php echo $forms['CentralLevel']=="غير ذلك"?"checked": "" ?> value="غير ذلك">غير ذلك<br></label>
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

                        <textarea rows="10" style="padding-bottom: 5rem" cols="30" name="activ-hem">
                           <?php  echo $forms['ActivitiesHemmah']?>
                        </textarea>
                        <hr style="width: 40rem ; height: 1rem">

                        <h5>أسماء المشاريع و الانشطة و الفعاليات التي قمت بالمساعدة في تنظيمها تحت مسمى الاتحاد </h5>
                        <textarea  style="padding-bottom: 5rem" name="activ-et" >
                                                       <?php  echo $forms['ActivitiesVice']?>
                        </textarea>
                        <hr style="width: 40rem ; height: 1rem">

                        <h5>اذكر أهم الأنشطة و الفعاليات التي قمت بحضورها على مستوى كليتك و  الكليات الأخرى و الكتلة و الاتحاد  </h5>
                        <textarea rows="3" style="padding-bottom: 5rem" cols="50" name="activ-sec">
                                                       <?php  echo $forms['viewActivities']; ?>
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
                       <tabel> <input type="checkbox" name="skill[]" <?php echo (checkbox2($forms['id'],'كتابة المحتوى الاعلامي')==1)?"checked":""?> value="كتابة المحتوى الاعلامي"> كتابة المحتوى الاعلامي<br></tabel>
                      <tabel>  <input type="checkbox" name="skill[]" <?php echo (checkbox2($forms['id'],'التصميم')==1)?"checked":""?> value="التصميم"> التصميم<br></tabel>
                       <tabel>  <input type="checkbox" name="skill[]" <?php echo (checkbox2($forms['id'],'المونتاج')==1)?"checked":""?> value="المونتاج">المونتاج <br></tabel>
                       <tabel>  <input type="checkbox" name="skill[]" <?php echo (checkbox2($forms['id'],'التصوير')==1)?"checked":""?> value="التصوير">التصوير <br></tabel>
                       <tabel>  <input type="checkbox" name="skill[]" <?php echo (checkbox2($forms['id'],'الرسم')==1)?"checked":""?> value="الرسم">الرسم <br></tabel>
                       <tabel>  <input type="checkbox" name="skill[]" <?php echo (checkbox2($forms['id'],'تخطيط فعاليات و أنشطة')==1)?"checked":""?> value="تخطيط فعاليات و أنشطة">تخطيط فعاليات و أنشطة <br></tabel>
                       <tabel>  <input type="checkbox" name="skill[]" <?php echo (checkbox2($forms['id'],'تقديم فعاليات')==1)?"checked":""?> value="تقديم فعاليات"> تقديم فعاليات<br></tabel>
                      <tabel>   <input type="checkbox" name="skill[]" <?php echo (checkbox2($forms['id'],'مسؤولية النظام بالأنشطة والفعاليات الكبيرة')==1)?"checked":""?> value="مسؤولية النظام بالأنشطة والفعاليات الكبيرة ">مسؤولية النظام بالأنشطة والفعاليات الكبيرة <br></tabel>
                      <tabel>   <input type="checkbox" name="skill[]" <?php echo (checkbox2($forms['id'],'خبير ضيافة')==1)?"checked":""?> value="خبير ضيافة"> خبير ضيافة<br></tabel>
                      <tabel>   <input type="checkbox" name="skill[]" <?php echo (checkbox2($forms['id'],'خبير ديكور و تزيين')==1)?"checked":""?>  value="خبير ديكور و تزيين">خبير ديكور و تزيين <br></tabel>
                       <tabel>  <input type="checkbox" name="skill[]" <?php echo (checkbox2($forms['id'],'مهارات إقناع و تحدث')==1)?"checked":""?> value="مهارات إقناع و تحدث"> مهارات إقناع و تحدث<br></tabel>
                       <tabel>  <input type="checkbox" name="skill[]" <?php echo (checkbox2($forms['id'],'القدرة على المناظرة المحترفة')==1)?"checked":""?> value="القدرة على المناظرة المحترفة"> القدرة على المناظرة المحترفة<br></tabel>
                       <tabel>  <input type="checkbox" name="skill[]" <?php echo (checkbox2($forms['id'],'مهارة قيادة الفريق')==1)?"checked":""?> value="مهارة قيادة الفريق"> مهارة قيادة الفريق<br></tabel>
                      <tabel>   <input type="checkbox" name="skill[]" <?php echo (checkbox2($forms['id'],'مهارات إدارية')==1)?"checked":""?> value="مهارات إدارية">مهارات إدارية <br></tabel>
                      <tabel>   <input type="checkbox" name="skill[]" <?php echo (checkbox2($forms['id'],'استخدام Microsoft word')==1)?"checked":""?>  value="استخدام Microsoft word"> استخدام Microsoft word<br></tabel>
                       <tabel>  <input type="checkbox" name="skill[]" <?php echo (checkbox2($forms['id'],'استخدام Microsoft excel')==1)?"checked":""?> value="استخدام Microsoft excel">استخدام Microsoft excel <br></tabel>
                       <tabel>  <input type="checkbox" name="skill[]" <?php echo (checkbox2($forms['id'],'استخدام Microsoft powerpoint ')==1)?"checked":""?> value="استخدام Microsoft powerpoint ">استخدام Microsoft powerpoint <br></tabel>
                      <tabel>   <input type="checkbox" name="skill[]" <?php echo (checkbox2($forms['id'],'عزف')==1)?"checked":""?> value="عزف">عزف<br></tabel>
                      <tabel>   <input type="checkbox" name="skill[]" <?php echo (checkbox2($forms['id'],'نشيد')==1)?"checked":""?> value="نشيد">نشيد<br></tabel>
                       <tabel>  <input type="checkbox" name="skill[]" <?php echo (checkbox2($forms['id'],'كتابة سيناريوهات')==1)?"checked":""?> value="كتابة سيناريوهات">كتابة سيناريوهات <br></tabel>
                        <hr style="width: 40rem ; height: 1rem">
                        <h5>جوانب إبداعية و مميزات تمتلكها
                        </h5>
                       <tabel>  <input type="checkbox" name="adv[]" <?php echo (checkbox3($forms['id'],'مخزون ثقافي واسع')==1)?"checked":""?> value="مخزون ثقافي واسع">مخزون ثقافي واسع<br> </tabel>
                       <tabel>  <input type="checkbox" name="adv[]" <?php echo (checkbox3($forms['id'],'معرفة أكاديمية بالتخصص')==1)?"checked":""?> value="معرفة أكاديمية بالتخصص">معرفة أكاديمية بالتخصص<br></tabel>
                       <tabel>  <input type="checkbox" name="adv[]" <?php echo (checkbox3($forms['id'],'العمل الجماعي')==1)?"checked":""?> value="العمل الجماعي">العمل الجماعي<br></tabel>
                       <tabel>  <input type="checkbox" name="adv[]" <?php echo (checkbox3($forms['id'],'تنظيم الوقت')==1)?"checked":""?> value="تنظيم الوقت">تنظيم الوقت<br></tabel>
                        <tabel> <input type="checkbox" name="adv[]" <?php echo (checkbox3($forms['id'],'معرفة سياسية')==1)?"checked":""?> value="معرفة سياسية">معرفة سياسية<br></tabel>
                       <tabel>  <input type="checkbox" name="adv[]" <?php echo (checkbox3($forms['id'],'معرفة واسعة بالقضية الفلسطينية')==1)?"checked":""?> value="معرفة واسعة بالقضية الفلسطينية">معرفة واسعة بالقضية الفلسطينية<br></tabel>
                       <tabel>  <input type="checkbox" name="adv[]" <?php echo (checkbox3($forms['id'],'قراءة كتب')==1)?"checked":""?>  value="قراءة كتب">قراءة كتب<br></tabel>
                       <tabel>  <input type="checkbox" name="adv[]" <?php echo (checkbox3($forms['id'],'تلاوة القرآن')==1)?"checked":""?> value="تلاوة القرآن">تلاوة القرآن<br></tabel>
                       <tabel>  <input type="checkbox" name="adv[]" <?php echo (checkbox3($forms['id'],'صوت جميل')==1)?"checked":""?> value="صوت جميل">صوت جميل<br></tabel>
                        <tabel> <input type="checkbox" name="adv[]" <?php echo (checkbox3($forms['id'],'التمثيل المسرحي')==1)?"checked":""?> value="التمثيل المسرحي">التمثيل المسرحي<br></tabel>
                        <tabel> <input type="checkbox" name="adv[]" <?php echo (checkbox3($forms['id'],'التمثيل بالفيديوهات')==1)?"checked":""?> value="التمثيل بالفيديوهات">التمثيل بالفيديوهات<br></tabel>
                       <tabel>  <input type="checkbox" name="adv[]" <?php echo (checkbox3($forms['id'],'علاقات عامة و رعايات')==1)?"checked":""?> value="علاقات عامة و رعايات">علاقات عامة و رعايات<br></tabel>
                       <tabel>  <input type="checkbox" name="adv[]" <?php echo (checkbox3($forms['id'],'الترجمة من اللغة الانجليزية')==1)? "checked":""?>  value="الترجمة من اللغة الانجليزية">الترجمة من اللغة الانجليزية<br></tabel>
                       <tabel>  <input type="checkbox" name="adv[]" <?php echo (checkbox3($forms['id'],'معرفة دينية واسعة')==1)?"checked":""?> value="معرفة دينية واسعة">معرفة دينية واسعة<br></tabel>
                       <tabel>  <input type="checkbox" name="adv[]" <?php echo (checkbox3($forms['id'],'التحدث بالفصحى بطلاقة')==1)?"checked":""?> value="التحدث بالفصحى بطلاقة">التحدث بالفصحى بطلاقة<br></tabel>
                       <tabel>  <input type="checkbox" name="adv[]" <?php echo (checkbox3($forms['id'],'أنماط الشخصيات')==1)?"checked":""?> value="تحليل أنماط الشخصيات">تحليل أنماط الشخصيات<br></tabel>
                       <tabel>  <input type="checkbox" name="adv[]" <?php echo (checkbox3($forms['id'],'متمكن في علوم النفس و التحليل النفسي')==1)?"checked":""?> value="متمكن في علوم النفس و التحليل النفسي">متمكن في علوم النفس و التحليل النفسي<br></tabel>
                      <tabel>   <input type="checkbox" name="adv[]" <?php echo (checkbox3($forms['id'],' معرفة تحليلية وفلسفية عميقة ')==1)?"checked":""?> value="معرفة تحليلية و فلسفية عميقة  ">معرفة تحليلية و فلسفية عميقة<br></tabel>
                       <tabel>  <input type="checkbox" name="adv[]" <?php echo (checkbox3($forms['id'],'إنشاء التطبيقات و المواقع')==1)?"checked":""?> value="البرمجة وإنشاء التطبيقات و المواقع">البرمجة وإنشاء التطبيقات و المواقع<br></tabel>
                       <tabel>  <input type="checkbox" name="adv[]" <?php echo (checkbox3($forms['id'],'شخصية اجتماعية و محبوبة')==1)?"checked":""?> value="شخصية اجتماعية و محبوبة">شخصية اجتماعية و محبوبة<br></tabel>
                        <hr style="width: 40rem ; height: 1rem">

                        <h5>مهارات و جوانب تتمنى من دائرة الموارد البشرية العمل على تطويرها لك</h5>
                        <textarea rows="3" cols="50" style="padding-bottom: 5rem" name="Human-Resources">
                        <?php  echo $forms['Development']; ?>
                        </textarea> <hr style="width: 40rem ; height: .2rem;background: red">
                        <h5>ملاحظات عامة</h5>

                        <textarea rows="3" cols="50"  style="padding-bottom: 5rem" name="notes">
                        <?php  echo $forms['Notes'];  ?>
                        </textarea>

                        <h5>عن نفسك </h5>
                        <textarea rows="3" style="padding-bottom: 5rem" cols="50" name="yourself" >
                            <?php echo $forms['yourself'];  ?>
                        </textarea>

                        <h5>أبرز السلبيات التي تود تطويرها في شخصيتك </h5>
                        <textarea rows="3" cols="50" style="padding-bottom: 5rem;" name="dis">
                                          <?php echo $forms['dis'];  ?>
                        </textarea>

                        <h5>أبرز الايجابيات وعوامل القوة بشخصيتك </h5>
                        <textarea rows="3" cols="50" style="padding-bottom: 5rem" name="advyourself">
                                          <?php echo $forms['advyourself']; ?>
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