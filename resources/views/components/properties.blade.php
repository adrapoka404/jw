<div class="mx-16 drop-shadow-3xl shadow-black bg-white">
    <div class="w-full h-56"
        style="background-image: url({{$fondo}}); 
    background-repeat: no-repeat;
    background-size: contain;
    position: relative;">
        <div class="flex justify-end pt-2 pr-2">
            <div class="bg-gold-600 py-1 px-3 text-sm">{{$what}}</div>
        </div>
        <div class="flex justify-start items-end pt-40 pl-2">
            <div class=" font-nunito font-bold text-white"> {{$amount}}</div>
        </div>
    </div>
    <div class="mt-2 mx-3">
        <div class="font-bold font-nunito">
        {{$name}}    
        </div>
        <div class=" font-nunito font-regular ">
            <span class="border-r-8 border-r-gold-300">{{$where}} </span> {{$country}}
        </div>
        <div class="mt-16 mb-2 w-2/3 flex font-light">
            <div class="grid grid-rows-2 border-r-2 border-r-gold-300 px-3 ">
                <span class="w-full font-medium">{{$medidas}} I\</span>
                <small>m2</small>
            </div>
            <div class="grid grid-rows-2 px-3">
                <span class="w-full font-medium">{{$construccion}} |_|</span>
                <small class="text-xs">m2</small>
            </div>
        </div>
    </div>
    <div class=" bg-gold-300 h-6 w-full"></div>

</div>