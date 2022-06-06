@props(['name' => '',
        'content' =>'',
        'width'=>'',
        'height'=>'',        
])
<banner>
    <div class="ml-10 mt-2">
        {{$name}}
    </div>
    {{$slot}}

</banner>
