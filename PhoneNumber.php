<html>
<head>
    <title>Phone Number Authentication with Firebase Web</title>
</head>
<body>
<h1>Enter number to create account</h1>
<form>
    <input type="text" id="number" placeholder="+923********">
    <div id="recaptcha-container"></div>
    <button type="button" onclick="phoneAuth();">SendCode</button>
</form><br>
<h1>Enter Verification code</h1>
<form>
    <input type="text" id="verificationCode" placeholder="Enter verification code">
    <button type="button" onclick="codeverify();">Verify code</button>

</form>


<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/7.15.5/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/7.15.5/firebase-analytics.js"></script>

<script>
  // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyAT1lPzSehD70Lp1Er_kKHuNMio1J47LB4",
    authDomain: "lfos-in7.firebaseapp.com",
    databaseURL: "https://lfos-in7.firebaseio.com",
    projectId: "lfos-in7",
    storageBucket: "lfos-in7.appspot.com",
    messagingSenderId: "641592169437",
    appId: "1:641592169437:web:359ac161b2d8ccdd991c34",
    measurementId: "G-SW8E4WKELN"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();

</script>
<script src="NumberAuthentication.js" type="text/javascript"></script>
</body>
</html>