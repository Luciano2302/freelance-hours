<div>
 <input wire:model.live="search" type="text">


 <br>

 @foreach ($users as $user)
 <li>{{ $user->name }}</li>
 @endforeach

</div>
