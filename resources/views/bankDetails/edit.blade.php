<?php
/**
 * Created by IntelliJ IDEA.
 * User: Jayani
 * Date: 07/11/2021
 * Time: 14:00
 */
?>

@section('content')
<div class="card">
    <div class="card-header">Bank Details Page</div>
    <div class="card-body">

        <form action="{{ url('bankDetails/' .$bankDetails->id) }}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{$bankDetails->id}}" id="id" />
            <label> Bank Name</label></br>
            <input type="text" name="bankName" id="name" value="{{$bankDetails->bankName}}" class="form-control"></br>
            <label>Branch</label></br>
            <input type="text" name="branch" id="address" value="{{$bankDetails->branch}}" class="form-control"></br>
            <label>Branch Code</label></br>
            <input type="text" name="branchCode" id="mobile" value="{{$bankDetails->branchCode}}" class="form-control"></br>
            <label>Account Number</label></br>
            <input type="text" name="accountN" id="mobile" value="{{$bankDetails->accountN}}" class="form-control"></br>
            <input type="submit" value="Update" class="btn btn-success"></br>
        </form>

    </div>
</div>
@stop
