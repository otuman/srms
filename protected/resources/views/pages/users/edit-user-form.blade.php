
  <!-- This is the register new user form -->

          <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
           <label for="first_name">First Name:</label>
           <input type="text" class="form-control" name="first_name" id="first_name" value="{{ $user->first_name }}" required autofocus>
            @if ($errors->has('first_name'))
                <span class="help-block">
                    <strong>{{ $errors->first('first_name') }}</strong>
                </span>
            @endif
         </div>
         <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
           <label for="last_name">Last Name:</label>
           <input type="text" class="form-control" name="last_name" id="last_name" value="{{ $user->last_name }}" required autofocus>
            @if ($errors->has('last_name'))
                <span class="help-block">
                    <strong>{{ $errors->first('last_name') }}</strong>
                </span>
            @endif
         </div>
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
         <label for="email">E-Mail Address</label>
             <input id="email" type="email" class="form-control" name="email" value="{{ $user->email }}" required>
             @if ($errors->has('email'))
                 <span class="help-block">
                     <strong>{{ $errors->first('email') }}</strong>
                 </span>
             @endif
       </div>
      <button type="submit" class="btn btn-default">Save Changes</button>
