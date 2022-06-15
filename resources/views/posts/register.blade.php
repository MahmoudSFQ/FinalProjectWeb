
<!DOCTYPE html>
<html dir="ltr">

<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>موقع</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!--[if lt IE 9]>
         <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
         <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
       <![endif]-->
       <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css"rel="stylesheet" >

</head>

 
<body>
    <div  style="width: 900px"class="container max-w-full mx-auto pt-4 ">
 <form method="POST" action="register">
    @csrf 
    <h3  class="text-4xl font-bold mb-4">Register Page</h3>
    <div>
<label class="font-bold text-gary-800" for="name">Name</label>
 <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" type="text" name="name">
</div>
<div>
<label class="font-bold text-gary-800" for="email">email</label>
 <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" type="email" name="email">
</div>
<div>
<label class="font-bold text-gary-800" for="password">password</label>
 <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" type="password" name="password">
</div>
<div>
 <button class=" bg-blue-500 mt-5 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow" type="submit">sign up</button>
</div>
 </form>

 </div>
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/may.js"> </script>
  <!-- end mkan html -->
</body>

</html>