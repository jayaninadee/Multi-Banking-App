<?php
/**
 * Created by IntelliJ IDEA.
 * User: Jayani
 * Date: 07/11/2021
 * Time: 13:59
 */
?>


    @section('content')
    <div class="card">
        <div class="card-header">Bank Details</div>
        <div class="card-body">

            <div class="card-body">
                <h5 class="card-title">Bank Name : {{ $bankDetails->bankName }}</h5>
                <p class="card-text">Branch : {{ $bankDetails->branch }}</p>
                <p class="card-text">Branch Code : {{ $bankDetails->branchCode }}</p>
                <p class="card-text">Account Number : {{ $bankDetails->accountN }}</p>
            </div>

            </hr>

        </div>
    </div>

