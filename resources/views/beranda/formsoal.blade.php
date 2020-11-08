<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Invesmart</title>
  <link rel="stylesheet" href="{{url('css/form.css')}}">

</head>

<body>

  <div class="header">
    <div class="center">
      <div id="logo">
      </div>
      <div class="clear"></div>
    </div>
  </div>

  <div id="banner">
    <div class="center">
      <img class="img1" src="{{url('img/utama/pertanyaan/corak.png')}}" alt="corak">
      <h3>ini goal gue</h3>
      <div class="container" style="margin-top: -8%;">
        <form action="/action_page.php">
          <div>
            <h4 style="margin-bottom: 0.5%;">pengen punya gadget :</h4>
            <input type="text" id="1" name="1">
          </div>
          <div>
            <h4 style="margin-bottom: 0.5%">pengen traveling ke :</h4>
            <input type="text" id="2" name="2">
          </div>
          <div>
            <h4 style="margin-bottom: 0.5%">pengen pensiun di usia :</h4>
            <input type="text" id="3" name="3">
          </div>
          <div>
            <h4 style="margin-bottom: 0.5%">pengen punya penghasilan setiap bulannya sebesar :</h4>
            <input type="text" id="4" name="4">
          </div>
          <h3 style="margin-top: -3%">Kalo lo ?</h3>
          <div>
            {{-- <input type="submit" value="Submit >"> --}}
          </div>
        </form>
      </div>
      <img class="img3" src="{{url('img/utama/pertanyaan/profilresiko.png')}}" style="margin-left: 15%; margin-top: 10%;" alt="infestnow">
      <p style="margin-top: -26%">Pengen wujudin itu semua kamu harus berinvestasi yang baik dan benar sesuai dengan profil resiko kamu.</p>
      <p style="margin-top: -25%; font-weight: 900">Udah tau belum profil resiko kamu?</p>
      <p style="margin-top: -20%; margin-bottom: 20px; color: #ED1E79">ikutan <b>quiz.invernow.id</b> <br> dan dapatkan Hadiah Investasi reksadana</p>
    </div>
    <a href="/yolo/info" class="btn-primary">Next ></a><br><br>
  </div>
</body>

</html>