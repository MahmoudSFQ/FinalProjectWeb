<!DOCTYPE html>
<html land="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Article</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css"rel="stylesheet" >
    </head>
    <body>


    <div style="width: 900px"class="container max-w-full mx-auto pt-4 ">
    <form method="POST" action="posts/store">
    {{ csrf_field()}}
    @if(Auth::check())
    <a class="text-4xl font-bold mb-4 mr-96">Welcome {{Auth::user()->name}}</a>
   
    <a class=" bg-gray-500 tracking-wide text-white  px-6 py-2  inline-block mb-6 shadow-lg rounded hover:shadow" href="logout">logout</a>
    <br>
    <a href="/posts/create" class=" bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow" >Create post</a>
    <hr class="mt-10">
    <h1 class="text-4xl font-bold mb-4">Articles</h1>
    @else
    <h1 class="text-4xl font-bold  inline-block">Articles</h1>
    <a class=" ml-96 bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow" href="register">Register</a>
    <a class=" bg-green-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow" href="login">login</a>
    
    <br>
    
    @endif

    </form>
    
    

    @foreach ($posts as $post)
    <article class="mb-2">

    <h2 class="text-x1 mt-20 font-bold  text-blue-900 mb-5">{{$post->title}}</h2>
    @if(Auth::check())
    <form method="GET" action="/posts/{{$post->id}}">
        @csrf 
        @method('DELETE')
        <a href="/posts/{{$post->id}}/show" class=" bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">show</a>
    <a class=" bg-green-500 tracking-wide text-white px-6 py-2 inline mb-6 shadow-lg rounded hover:shadow" href="/posts/{{$post->id}}/edit">edit</a>

        <button class=" bg-red-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow" >Delete</button>
    </form>
    <hr class="mt-5">
    </article>
    @else
    <a href="/posts/{{$post->id}}/show" class=" bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">show</a>
    @endif
    @endforeach
    </div> 
    

    

    </body>

    </html>