@props(['js' => '',
'container' =>'',
'exportRoot'=>'',
'composition'=>'',
])
 <div> JS	{{$js}} </div>
 <div> container	{{$container}} </div>
 <div> exportRoot	{{$exportRoot}} </div>
 <div> composition	{{$composition}} </div>
 <div {{ $attributes->merge(['style' => '', '','']) }}> style	 </div>


 