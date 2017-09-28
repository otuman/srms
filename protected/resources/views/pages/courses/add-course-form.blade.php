



<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
  <label for="name">First Name:</label>
  <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" required autofocus>
   @if ($errors->has('name'))
       <span class="help-block">
           <strong>{{ $errors->first('name') }}</strong>
       </span>
   @endif
</div>

<div class="form-group{{ $errors->has('user_type') ? ' has-error' : '' }}">
 <label for="user_type">Select User Type:</label>
 <select class="form-control" name="user_type" id="user_type" required>
   <option value="" ></option>
   <option value="student" >Student</option>
   <option value="employee" >Employee</option>
   <option value="admin" >Admin</option>
 </select>
 @if ($errors->has('user_type'))
      <span class="help-block">
          <strong>{{ $errors->first('user_type') }}</strong>
      </span>
  @endif
</div>
<button type="submit" class="btn btn-default">Submit</button>
