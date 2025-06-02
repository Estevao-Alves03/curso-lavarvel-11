<x-alert/>
@csrf()
<input type="text" name="name" placeholder="Name" value="{{ $user->name ?? old('name')}}">
<input type="email" name="email" palceholder="Email" value="{{$user->email ?? old('email')}}">
<input type="password" name="password" placeholder="Password">
<button type="submit">enviar</button>