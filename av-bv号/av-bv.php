<!DOCTYPE html>
<html lang="zh-cmn-Hans">

<head>
    <meta charset="utf-8">
    <meta name="Author" content="Noah">
    <meta name="Keywords" content="Url">
    <meta name="Description" content="短网址转换">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://cdn.bootcss.com/jquery/3.4.1/jquery.min.js"></script>
    <link rel="favicon" href="favicon.ico">
    <title>AV<-->BV</title>

    <script type="text/javascript">
    function copyUrl2()
    {
    var Url2=document.getElementById("copy1");
    Url2.select(); // 选择对象
    document.execCommand("Copy"); // 执行浏览器复制命令
    alert("已复制好，可贴粘。");
    }
    </script>

    <style type="text/css">
      @font-face {
        font-family: "iconfont";
        src: url('//at.alicdn.com/t/font_1706200_3sgw4esvyq9.eot?t=1584846914425');
        /* IE9 */
        src: url('//at.alicdn.com/t/font_1706200_3sgw4esvyq9.eot?t=1584846914425#iefix') format('embedded-opentype'),
          /* IE6-IE8 */
          url('data:application/x-font-woff2;charset=utf-8;base64,d09GMgABAAAAAAPcAAsAAAAACEAAAAOQAAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAHEIGVgCDMgqDVIMaATYCJAMUCwwABCAFhG0HUhswBxEVnPHIfiZkcgn7O+8oo66bEbK2OpSJxjfBA+X1vslMtll8iBW0KuzdSry1J/JGpwASAA0EaO7O95urXT4WOkKV5Nojj7b4hwrpy2SO/v97p78xLfvYuvYslzWHLex8DDAOpEDHnGQljg3TC+cUPEjbIQAHqRRD1GvQzI2BgvQTgBjYr083jJQNVcMRGEZbyVSVKhajY2hztCvAIv178YYywgANXUJ2atW7fk9qmZi1ZMCSjnILC8fbDUAHJFAMUCCGl/oGIm2uGBKHP1RRC3BgoKGZmLxVUbOWZcWqHRkc9A8PBBKFBsIGKXUBUAvlFZhwBAGmhiDBLIqgwKyVRwPuKwAOWAjCWUxL9mpIWOWKcikVmuwiF0+49sx9/bnn5gvfDdO/at6eQHTP5dHLd8Z6V67btSPG061Q523w0S5OzYETx4QbT9zXbnmuP/bdvOsL9lwR2D031utePndvMM7nXRncNy/G4xvlEveE69fc4Tdu+AbcnOdxa4E98/bFyZV75+5WxGRRnfY0cEulpaqbVCzNtxTEU1P1m2J4tFGwJ7VcytpevcrWOXd44oCjAyZu3DXRvQxryi09PV2/BcVQIlRxZPWvAFhMXkb1qQ3bHPFvOVXxWI1TjTLPFjtT5smFsAtxVqK82CcvekwcsbMOHDh4wOBxYw4eZI+NVR+A6Vmx4bGz1ZI0XFw1r0mlXm20lW5RpWd+s0u/ijYZwarmHJsZVi+tXKjMlU2rm186Hlk6tFxaPfwAWLPk3380K2u4Qm6xtmaprTL4b/dj0Nu/F+qwat8MpwLgzvpfdbSsPbbVBj9Ijy//kxa1tAb7qAqUxK4rT8490qpVpxGATiESBDT4aTX/LxTJg3H0MbPIZMAgJgaNIqSAxCCbpGjFQMdJObBhUBMcFKXhbCdRDEcilB0oZAYAQTiHQCOU4yAJ5ypJ0e6DTizvwEa4kODAK6KWdJIrLP1uHgWtYqDuj3zPi2FOvTHlb7BpaiWp1NwvSPRJKrMiW3zFAhljRPy2laohIzzTC9gN08S0Cgf0mjnV9ZLnpuxDWc/z5oZHQasYqPsj3/NiZGO9yX3/DTZNrdQQ+qJfkOjbpzIrWpBedUsrwrXcEr9tpWrICM/0AjyYaI5pLe8U0GvmemTWS47qmba6bH7D/IybAAdkZV1oQgoldGHjYViCYPl3WKxb86g+On/sE/+kc/CLtS1vNg==') format('woff2'),
          url('//at.alicdn.com/t/font_1706200_3sgw4esvyq9.woff?t=1584846914425') format('woff'),
          url('//at.alicdn.com/t/font_1706200_3sgw4esvyq9.ttf?t=1584846914425') format('truetype'),
          /* chrome, firefox, opera, Safari, Android, iOS 4.2+ */
          url('//at.alicdn.com/t/font_1706200_3sgw4esvyq9.svg?t=1584846914425#iconfont') format('svg');
        /* iOS 4.1- */
      }

      .iconfont {
        font-family: "iconfont" !important;
        font-size: 16px;
        font-style: normal;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
      }

      .icon-querenzhengque:before {
        content: "\e600";
      }

      .icon-tishi:before {
        content: "\e640";
      }

      .icon-cuowu:before {
        content: "\e602";
      }

      .icon-jinggao:before {
        content: "\e62b";
      }

      * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        font-weight: 300;
      }

      body {
        font-family: "Source Sans Pro", sans-serif;
        color: white;
        font-weight: 300;
      }

      body ::-webkit-input-placeholder {
        /* WebKit browsers */

        font-family: "Source Sans Pro", sans-serif;
        color: white;
        font-weight: 300;
      }

      body :-moz-placeholder {
        /* Mozilla Firefox 4 to 18 */

        font-family: "Source Sans Pro", sans-serif;
        color: white;
        opacity: 1;
        font-weight: 300;
      }

      body ::-moz-placeholder {
        /* Mozilla Firefox 19+ */

        font-family: "Source Sans Pro", sans-serif;
        color: white;
        opacity: 1;
        font-weight: 300;
      }

      body :-ms-input-placeholder {
        /* Internet Explorer 10+ */

        font-family: "Source Sans Pro", sans-serif;
        color: white;
        font-weight: 300;
      }

      .wrapper {
        background: #0396FF;
        background: -webkit-linear-gradient(top left, #0396FF 0%, #ABDCFF 100%);
        background: -moz-linear-gradient(top left, #0396FF 0%, #ABDCFF 100%);
        background: -o-linear-gradient(top left, #0396FF 0%, #ABDCFF 100%);
        background: linear-gradient(to bottom right, #0396FF 0%, #ABDCFF 100%);
        position: absolute;
        /* top: 50%; */
        left: 0;
        width: 100%;
        height: 100%;
        /* margin-top: -200px; */
        overflow: hidden;
      }

      .bg-container {
        position: absolute;
        top: 50%;
        left: 0;
        width: 100%;
        height: 400px;
        margin-top: -200px;
        overflow: hidden;
      }

      .wrapper.form-success .container h1 {
        transform: translatey(85px);
      }

      .container {
        max-width: 600px;
        margin: 0 auto;
        padding: 80px 0;
        height: 400px;
        text-align: center;
      }

      .container h1 {
        font-size: 40px;
        transition-duration: 1s;
        transition-timing-function: ease-in-put;
        font-weight: 200;
      }

      form {
        padding: 20px 0;
        position: relative;
        z-index: 2;
      }

      form input {
        display: block;
        appearance: none;
        outline: 0;
        border: 1px solid rgba(255, 255, 255, 0.4);
        background-color: rgba(255, 255, 255, 0.2);
        width: 250px;
        border-radius: 3px;
        padding: 10px 15px;
        margin: 0 auto 10px auto;
        display: block;
        text-align: center;
        font-size: 18px;
        color: white;
        transition-duration: 0.25s;
        font-weight: 300;
      }

      form input:hover {
        background-color: rgba(255, 255, 255, 0.4);
      }

      form input:focus {
        background-color: white;
        width: 300px;
        color: #ABDCFF;
      }

      form button {
        appearance: none;
        outline: 0;
        background-color: white;
        border: 0;
        padding: 10px 15px;
        color: #ABDCFF;
        border-radius: 3px;
        width: 250px;
        cursor: pointer;
        font-size: 18px;
        transition-duration: 0.25s;
      }

      form button:hover {
        background-color: #f5f7f9;
      }

      .bg-bubbles {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 1;
      }

      .bg-bubbles li {
        position: absolute;
        list-style: none;
        display: block;
        width: 40px;
        height: 40px;
        background-color: rgba(255, 255, 255, 0.15);
        bottom: -160px;
        -webkit-animation: square 25s infinite;
        animation: square 25s infinite;
        -webkit-transition-timing-function: linear;
        transition-timing-function: linear;
      }

      .bg-bubbles li:nth-child(1) {
        left: 10%;
      }

      .bg-bubbles li:nth-child(2) {
        left: 20%;
        width: 80px;
        height: 80px;
        animation-delay: 2s;
        animation-duration: 17s;
      }

      .bg-bubbles li:nth-child(3) {
        left: 25%;
        animation-delay: 4s;
      }

      .bg-bubbles li:nth-child(4) {
        left: 40%;
        width: 60px;
        height: 60px;
        animation-duration: 22s;
        background-color: rgba(255, 255, 255, 0.25);
      }

      .bg-bubbles li:nth-child(5) {
        left: 70%;
      }

      .bg-bubbles li:nth-child(6) {
        left: 80%;
        width: 120px;
        height: 120px;
        animation-delay: 3s;
        background-color: rgba(255, 255, 255, 0.2);
      }

      .bg-bubbles li:nth-child(7) {
        left: 32%;
        width: 160px;
        height: 160px;
        animation-delay: 7s;
      }

      .bg-bubbles li:nth-child(8) {
        left: 55%;
        width: 20px;
        height: 20px;
        animation-delay: 15s;
        animation-duration: 40s;
      }

      .bg-bubbles li:nth-child(9) {
        left: 25%;
        width: 10px;
        height: 10px;
        animation-delay: 2s;
        animation-duration: 40s;
        background-color: rgba(255, 255, 255, 0.3);
      }

      .bg-bubbles li:nth-child(10) {
        left: 90%;
        width: 160px;
        height: 160px;
        animation-delay: 11s;
      }

      @-webkit-keyframes square {
        0% {
          transform: translatey(0);
        }

        100% {
          transform: translatey(-700px) rotate(600deg);
        }

      }

      @keyframes square {
        0% {
          transform: translatey(0);
        }

        100% {
          transform: translatey(-700px) rotate(600deg);
        }

      }

      @media (max-width:500px) {
        .container h1 {
          font-size: 60px;
        }

        form input,
        form button {
          width: 500px;


        }
      }
    </style>
</head>

<body>
        <div id="all">
        <div class="wrapper">
            <div class="bg-container">
                <div class="container">
                    <h1 style="margin: 0;" id="bar">Welcome</h1>
                    
<form>
原来的 AV/BV 号 <input type="text" name="AV/BV"value=<?php echo $_POST["av_bv"]; ?>>
<?php
  $table = "fZodR9XQDSUm21yCkr6zBqiveYah8bt4xsWpHnJE7jL5VG3guMTKNPAwcF";
  $tr = array();

  for ( $i=0 ; $i<58 ; $i++ )
  {
      // echo "$i</br>";
      $tr[$table[$i]] = $i;
  }
  $s = array(11,10,3,8,4,6);
  $xor = 177451812;
  $add = 8728348608;

  function dec($x) 
    {
        global $add , $xor , $tr , $s ;
        $r = 0;
        for ( $i=0 ; $i<6 ; $i++ )
        {
            $r += $tr[$x[$s[$i]]]*58**$i;
        }
        return ($r-$add) ^ $xor;
    }

    function enc($x)
    {
        global $add , $xor , $s ,$table ;
        $x = ($x ^ $xor) + $add;
        $r = "BV1  4 1 7  ";
        for ( $i=0 ; $i<6 ; $i++ )
        {
            // $z = $x/(58**$i);
            // $z = (int)$z;
            $r[$s[$i]] = $table[((int)($x/(58**$i)))%58];
        } 
        return $r;
    }

  if ( $_POST["av_bv"][0] == "B" )  
  {
    $result_av_bv = "av".dec($_POST["av_bv"]);
    // echo $result_av_bv;
  }

  else
  {
    $result_av_bv = enc($_POST["av_bv"]);
    // echo $result_av_bv;
  }

?> 
转换得到的 AV/BV 号 <input type="text" id="copy1" name="result_av_bv" value=<?php echo $result_av_bv; ?>>
<input type="button" onClick="copyUrl2()" value="点击复制" />
</form>

                
<footer>                              
<p>AV<-->BV 转换工具！
    <a href="./av-bv.html">返回</a>
<a href="http://orzchen.top">Orz-CHEN</a>
</p>
</footer> 

                   
                </div>
            </div>

 

</body>