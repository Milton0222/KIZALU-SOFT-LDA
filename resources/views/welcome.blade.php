<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{config('app.name','KIZALU SOFT-LDA')}}</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="bg-slate-600 flex-row gap-4 grid-flow-row text-red-600 text-9xl ">
        KIZALU SOFT,LDA
       
    <div class=" rounded-full bg-red-600 h-10 w-10 row-auto ">  </div>
    <div class="rounded-full bg-green-600 h-10 w-10 "></div>
    <div class="rounded-full bg-yellow-600 h-10 w-10"></div>

    
    </div>
   <a href="{{route('login')}}" target="_blank" rel="noopener noreferrer">
   <button class="bg-blue-500 text-white py-2 px-4 rounded-md ">Login</button>
   </a> 
    
</body>
</html>