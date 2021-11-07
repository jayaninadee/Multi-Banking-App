<?php
/**
 * Created by IntelliJ IDEA.
 * User: Jayani
 * Date: 07/11/2021
 * Time: 14:05
 */
?>
@section('bankDetails')
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">

      <form action="{{ url('bankDetails') }}" method="post">
        {!! csrf_field() !!}
        <label>Bank Name </label></br>
        <input type="text" name="bankName" id="name" class="form-control"></br>
        <label>Branch</label></br>
        <input type="text" name="branch" id="address" class="form-control"></br>
        <label>Branch Code</label></br>
        <input type="text" name="branchCode" id="mobile" class="form-control"></br>
        <label> Account Number</label></br>
        <input type="number" name="accountN" id="mobile" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>

  </div>
</div>
@stop
