<span>
    @for($i = 0; $i < 5; $i++)
    <i class="fa fa-star {{$i < $rate ? 'text-orange-500' : ''}}"></i>
    @endfor
    ({{  $rate }}/5)
</span>
