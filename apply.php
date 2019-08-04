<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
<title>apply experss visa</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style media="screen">
.nav-item{
  float: ;
    border-width: 8px;
    border-radius:3em;
    border: 2px solid black;
    background-position: center;



}
.navbar{
  background-color: #007bff;
  border: 5px;
  border-radius: 3em

}
nav{
background-color: #007bff;
position: absolute;
top: 20px;
right:0;

height: 120x;
}

body{

  font-family: Segoe UI Semibold;


}
.bginfo{}
</style>
</head>
<body>

<nav id="navbar_shower"class="navbar navbar-expand-lg   navbar-light">
  <a class="navbar-brand " href=""><img src="img/logo.png "style=" height:70px ;width: 200px;border-radius: 3em; font-family:Stencil;" ></a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo01" style="text-align:center">
  <ul class=" navbar-nav mr-auto mt-2 mt-lg-0 " style="text-align:center">

        <li class="nav-item">
          <a class="nav-link" href="apply.php">تقديم طلب </a>

        <li class="nav-item" >
          <a class="nav-link" href="#information">حولنا</a>

        <li class="nav-item" >
          <a class="nav-link" href="#thankfulpp">تقييم العملاء</a>

        <li class="nav-item" >
          <a class="nav-link" href="#contact">تواصل</a>

</div>


</nav>

<center>
  <br><br><br>
  <div class="container" >
  <img src="img/logo.png" alt="background" style="width:100%;padding-top: 150px;">
  </div>

  <br><br><br><br><br><br><br>
<div class="container">
<h2 style="color:white; font-size:60px;">خدمات فيزة اكسبرس </h2>
<br><br><br><br><br><br>
<h3 style="color:#007bff; font-size:44px;"> تقديم طلب </h3>
<h5 style=" font-size:33px;">قم بإختيار الفيزة الذي تريد تقديمها </h5>
<!-- Button to Open the Modal -->

<div class="row">

  <div class="col-lg-4" style="padding-top: 50px;">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal1" style="height:180px;width:300px;font-size: 33px;">
      فيزة عمل
    </button>
  </div>

  <div class="col-lg-4" style="padding-top: 50px;">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal2" style="height:180px;width:300px;font-size: 33px;">
      فيزة سياحة
    </button>
  </div>

  <div class="col-lg-4" style="padding-top: 50px;">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal3" style="height:180px;width:300px;font-size: 33px;">
    فيزة زيارة
    </button>
  </div>

  <div class="col-lg-6" style="padding-top: 50px;">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal4" style="height:180px;width:300px;font-size: 33px;">
      فيزة عائلية
    </button>
  </div>

  <div class="col-lg-6" style="padding-top: 50px;">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal5" style="height:180px;width:300px;font-size: 33px;">
       فيزة دراسية
    </button>
  </div>


</div>










<!-- The Modal -->
<div class="modal fade" id="myModal1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <form class="" action="reply.php" method="post" enctype="multipart/form-data">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"> فيزة عمل</h4>
        <button type="button" class="close" data-dismiss="modal">×</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">


          <table>
              <tr>
                <td>الاسم:</td>
                <td>  <input type="text" name="Name" class="form-control"></td>
              </tr>

              <tr>
                <td>الايميل:</td>
                <td>  <input type="email" name="email" class="form-control"></td>
              </tr>

              <tr>
                <td><b>المتطلبات فيزة العمل </b></td>
              </tr>

              <tr>
                <td> صورة شخصية3.3×4.8</td>
              </tr>

              <tr>
                <td>صورة الجواز الصفحة الرئيسية</td>
              </tr>

              <tr>
                <td>شهادة خبرة </td>
              </tr>


              <tr>
                <td>رخصة الشركة</td>
              </tr>

              <tr>
                <td>الدعوة الحكومية </td>
              </tr>

              <tr>
                <td>ارفاق جميع المطلبات ملف pdf وارسالها </td>
                <td><input type="file" name="photo" class="form-control"></td>
              </tr>



              <tr>
                <td> معلومات اضافية</td>
                <td><textarea class="form-control"></textarea></td>
              </tr>
          </table>


      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" >ارسل</button>
      </div>
</form>
    </div>
  </div>
</div>

<div class="modal fade" id="myModal2">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <form class="" action="reply.php" method="post" enctype="multipart/form-data">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">   فيزة سياحة</h4>
        <button type="button" class="close" data-dismiss="modal">×</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">


          <table>
              <tr>
                <td>الاسم:</td>
                <td>  <input type="text" name="Name" class="form-control"></td>
              </tr>

              <tr>
                <td>الايميل:</td>
                <td>  <input type="email" name="email" class="form-control"></td>
              </tr>

              <tr>
                <td><b> متطلبات فيزة السياحة</b></td>
              </tr>


              <tr>
                <td> صورة شخصية3.3×4.8</td>
              </tr>

              <tr>
                <td>صورة الجواز الصفحة الرئيسية</td>
              </tr>


              <tr>
                <td>حساب بنكي</td>
              </tr>

              <tr>
                <td>ارفاق جميع المطلبات ملف pdf وارسالها </td>
                <td><input type="file" name="photo" class="form-control"></td>
              </tr>

              <tr>
                <td> معلومات اضافية</td>
                <td><textarea class="form-control"></textarea></td>
              </tr>
          </table>


      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" >ارسل</button>
      </div>
      </form>

    </div>
  </div>
</div>

<div class="modal fade" id="myModal3">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <form class="" action="reply.php" method="post" enctype="multipart/form-data">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">الفيزا التجارية</h4>
        <button type="button" class="close" data-dismiss="modal">×</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">


          <table>
              <tr>
                <td>الاسم:</td>
                <td>  <input type="text" name="Name" class="form-control"></td>
              </tr>

              <tr>
                <td>الايميل:</td>
                <td>  <input type="email" name="email" class="form-control"></td>
              </tr>

              <tr>
                <td><b> متطلبات الفيزا التجارية</b></td>
              </tr>

              <tr>
                <td> صورة شخصية3.3×4.8</td>
              </tr>

              <tr>
                <td>صورة الجواز الصفحة الرئيسية</td>
              </tr>

              <tr>
                <td>الدعوة التجارية</td>
              </tr>

              <tr>
                <td>ارفاق جميع المطلبات ملف pdf وارسالها </td>
                <td><input type="file" name="photo" class="form-control"></td>
              </tr>

              <tr>
                <td> معلومات اضافية</td>
                <td><textarea class="form-control"></textarea></td>
              </tr>

          </table>


      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" >ارسل</button>
      </div>
      </form>

    </div>
  </div>
</div>

<div class="modal fade" id="myModal4">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <form class="" action="reply.php" method="post" enctype="multipart/form-data">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">   فيزة عائلية</h4>
        <button type="button" class="close" data-dismiss="modal">×</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">


          <table>
              <tr>
                <td>الاسم:</td>
                <td>  <input type="text" name="Name" class="form-control"></td>
              </tr>

              <tr>
                <td>الايميل:</td>
                <td>  <input type="email" name="email" class="form-control"></td>
              </tr>

              <tr>
                <td><b>متطلبات الفيزا العائلية</b></td>
              </tr>

              <tr>
                <td> صورة شخصية3.3×4.8</td>
              </tr>

              <tr>
                <td>صورة الجواز الصفحة الرئيسية</td>
              </tr>

              <tr>
                <td>دعوة خطية</td>
              </tr>

              <tr>
                <td>عقد الزواج</td>
              </tr>

              <tr>
                <td>شهادات الميلاد للأولاد</td>
              </tr>


              <tr>
                <td>اثبات صلة القرابة</td>
              </tr>

              <tr>
                <td>ارفاق جميع المطلبات ملف pdf وارسالها </td>
                <td><input type="file" name="photo" class="form-control"></td>
              </tr>


              <tr>
                <td> معلومات اضافية</td>
                <td><textarea class="form-control"></textarea></td>
              </tr>
          </table>


      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" >ارسل</button>
      </div>
      </form>

    </div>
  </div>
</div>

</div>

<div class="modal fade" id="myModal5">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <form class="" action="reply.php" method="post" enctype="multipart/form-data">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"> الفيزا الدراسية </h4>
        <button type="button" class="close" data-dismiss="modal">×</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">


          <table>
              <tr>
                <td>الاسم:</td>
                <td>  <input type="text" name="Name" class="form-control"></td>
              </tr>

              <tr>
                <td>الايميل:</td>
                <td>  <input type="email" name="email" class="form-control"></td>
              </tr>

              <tr>
                <td><b>متطلبات الفيزا الدراسية</b></td>
              </tr>


              <tr>
                <td> صورة شخصية3.3×4.8</td>
              </tr>

              <tr>
                <td>صورة الجواز الصفحة الرئيسية</td>
              </tr>

              <tr>
                <td>فحص طبي: </td>
              </tr>

              <tr>
                <td>:حساب بنكي</td>
              </tr>

              <tr>
                <td>القبول الجامعي </td>
              </tr>

              <tr>
                <td>ارفاق جميع المطلبات ملف pdf وارسالها </td>
                <td><input type="file" name="photo" class="form-control"></td>
              </tr>

              <tr>
                <td> معلومات اضافية</td>
                <td><textarea class="form-control"></textarea></td>
              </tr>
          </table>


      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" >ارسل</button>
      </div>
      </form>

    </div>
  </div>
</div>
</center>

<br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br>
<center>
<div id="information"  >
<h2 style="color:#007bff; font-size:44px;">حول</h2>
<br><br><br><br><br>
<h3 style="color:#007bff; font-size:44px;">عن فيزا اكسبرس</h3></center>
<div class="container" style="border: 2px solid black;">



  <div class="row">
    <div class="col-lg-12 " style="background-color: #007bff; color:white; height:100%;padding-top:100px;">
      <h3 style="text-align:center;">1- خلفية إنشاء فيزا اكسبرس</h3>
      <ul style="list-style-type:square;text-align:right;padding-top:80px;">
        <li>أدى الانفتاح السريع للصين في السنوات الأخيرة ، وسط عملية العولمة المستمرة ، إلى زيادة ملحوظة في
      التبادلات بين الناس مع الدول الأخرى ، مما خلق طلبًا كبيرًا على التأشيرات الصينية.</li>
        <li>تعمل السفارات والقنصليات الصينية العامة جاهدة لتحسين جودة خدمات التأشيرة الخاصة بهم ؛ ومع ذلك ،
      مع وجود عدد محدود من الموظفين والمساحة المتاحة ، أصبح الكثير منهم غارقين في العدد المتزايد من
      طلبات التأشيرة.</li>
        <li>لذلك قمنا بعمل هذه الخدمات لتسهل عمل السفارة وتسريع انجاز الطلبات ، مركز تقديم طلبات التأشيرة الذي
      يقدم مجموعة أكبر من الخدمات الأكثر فعالية لمقدمي طلبات التأشيرة ؛ السفارات والقنصليات الصينية العامة
      التي تتعامل مع كمية كبيرة من طلبات التأشيرة في بعض الدول الرئيسية قررنا اتباع هذا الاتجاه.</li>
</ul>
    </div>

    <div class="col-lg-12 " style="height:100%;color: #007bff;padding-top:100px;">
      <h3 style="text-align:center;">2- ما نقدمة</h3>
      <ul style="list-style-type:numbers;text-align:right;padding-top;40px;">
        <p>مركز فيزا اكسبرس )المشار إليه فيما يلي باسم " EXPRESS VISA SERVICE "( هو مكتب خدمات تجارية
مسجلة وفقًا للقوانين واللوائح المحلية ومعترف بها من قبل السفارة أو القنصلية العامة الصينية للتعامل مع
العمل الروتيني اليومي لمعالجة التأشيرة العادية التطبيقات. ومع ذلك ، فهي تعمل بشكل مستقل عن البعثات
الدبلوماسية وليست فرعًا أو جهازًا تابعًا لها. خدماتها الرئيسية هي:</p>
        <li> لاستقبال المتقدمين للحصول على تأشيرة وضمان مستندات طلبهم تفي بمتطلبات الحكومة الصينية (
للمعالجة السلسة في مختلف فئات التأشيرة.</li>
        <li> لتزويد المتقدمين بخدمات الأعمال الوسيطة ، بما في ذلك إدخال المعلومات الأساسية بالكمبيوتر ، ونقل (
جواز السفر والتأشيرة ووثائق الطلب الأخرى بين السفارة أو القنصلية العامة الصينية ومقدم الطلب.</li>
        <li> جمع رسوم التأشيرة ، سواء للخدمة العادية أو السريعة ، وفقًا لمتطلبات السفارة الصينية أو القنصلية (
العامة ، ومن أجل تسليم جواز السفر والتأشيرة لمقدم الطلب.</li>
        <li> تزويد الاشخاص بالمعلومات والاجابة على استفسارات العملاء وتقديم المساعدة من خلال موقع مركز (
التأشيرات ومكتب المعلومات والهاتف والبريد الإلكتروني.</li>
        <li> تزويد مقدم الطلب بالخدمات الضرورية الأخرى وفقًا لمتطلبات السفارة أو القنصلية العامة الصينية.</li>
    </div>
  </div>

</div>
</div>
<br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br>

<center>
<div id="thankfulpp" class="container">
  <br><br><br><br><br><br><br><br>


  <h2 style="color:#007bff; font-size:44px;">تقييم العملاء </h2>
  <br><br><br><br><br><br><br><br>
  <div class="row">
    <div class="col-lg-4">
      <img src="img/Balqees.jpg" alt="balqees" height="200" width="200" style=" border: 2px #007bff;  border-radius: 6em">
      <h5>بلقيس الحارثي</h5>
      <p style="color:#007bff;">أتمنى من الله عز وجل أن يعطيكم الصحة والعافية، شكراً لكم على ما قدمتموه لي من أحاسيس نابعة من قلوبكم ودام الله عزكم ودام عطائكم.</p>
    </div>

    <div class="col-lg-4">
      <img src="img/ahmed.jpg" alt="ahmed"  height="200" width="200" style=" border: 2px #007bff;  border-radius: 6em">
      <h5>أحمد الكامل</h5>
      <p style="color:#007bff;">شكر خاص لطاقم الشركه فيزة اكسبرس جميعاً لحسن الاستقبال والخدمة المميزة والحياة وكأنك لا تشعر بغربة</p>
    </div>

    <div class="col-lg-4">
      <img src="img/ihab.jpg" alt="ihab"  height="200" width="200" style=" border: 2px #007bff;  border-radius: 6em">
      <h5 >ايهاب العواضي</h5>
      <p style="color:#007bff;">كل كلمات الثناء تصمت خجلاً أمام ما تقدموه من جُهدٍ متميز وعملٍ دؤوب لأجل المصلحة العامة، فشكراً لكم جزيلاً، وكل كلمات الحب والوفاء لكم، وأتمنى لكم الاستمرار أكثر فأكثر لتحقيق جميع الأهداف والوصول لأعلى المراتب.</p>
    </div>

  </div>

</div>

<br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br>


<div class="container" >
  <div id="contact" class="container">
    <br><br><br><br><br><br><br><br>

    <h2 style="color:#007bff; font-size:44px;">تواصل</h2>
    <br><br><br><br><br><br><br><br>
    <div class="row">
      <div class="col-lg-4">
        <img src="img/whatsapp.png" alt="WHATS" height="100" width="100" style=" border: 2px #007bff; ">
        <h5>0096178837989</h5>
      </div>

      <div class="col-lg-4">
        <a href="https://www.facebook.com/Express-Visa-Service-111079506901276/"><img src="img/facebook.png" alt="FACEBOOK"  height="100" width="100" style=" border: 2px #007bff; ">
        </a>
        <h5>Express Visa Service</h5>
      </div>

      <div class="col-lg-4">
        <img src="img/wechat.png" alt="WECHAT"  height="100" width="100" style=" border: 2px #007bff;  ">
        <h5 >ويتشات chinavisaservices</h5>
      </div>

      <div class="col-lg-6" style="padding-top:40px;">
        <img src="img/email.png" alt="EMIAL"  height="100" width="100" style=" border: 2px #007bff; ">
        <h5 >express_visaservice@yahoo.com</h5>
      </div>

      <div class="col-lg-6" style="padding-top:40px;">
        <img src="img/download.png" alt="phone"  height="100" width="100" style=" border: 2px #007bff; ">
        <h5 >0096178837989</h5>
      </div>

    </div>

  </div>

</div>
<br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br>

</body>
</html>
