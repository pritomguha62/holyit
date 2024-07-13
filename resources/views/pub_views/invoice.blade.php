<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            
        }
        .invoice {
            background-image: url("{{ asset('storage/uploads/site_elements/Holy_it_new_pad_with_signature.png') }}");
            background-size: cover;
            background-repeat: no-repeat;
            font-family: 'DejaVu Sans', sans-serif;
            max-width: 8.868in;
            min-height: 11.6979in;
            vertical-align: center;
            margin: auto;
            object-fit: cover;
        }
        .invoice_num_date{
            display: flex;
            margin: 0.5in 1in 0.5in 1in;
        }
        .invoice_body{
            margin: 0.5in 0.5in 0.5in 0.5in;
        }
        .invoice_body table tr td {
            max-width: 4.5in;
            white-space: normal;
            word-wrap: break-word;
            overflow-wrap: break-word;
        }
        .agreement_num{
            margin-top: 2.5in;
            max-width: 45%;
        }
        .invoice_date{
            margin: 2.5in 0 0 1in;
            max-width: 45%;
        }
        .invoice h2 {
            font-size: 24px;
            text-align: center;
        }
        .invoice p {
            font-size: 18px;
        }
        table{
            max-width: 6in;
            margin: auto;
        }
        .subject_row {
            width: 6in;
            white-space: normal;
            word-wrap: break-word;
            overflow-wrap: break-word;
            margin: auto;
        }
        .comment_row {
            width: 6in;
            white-space: normal;
            word-wrap: break-word;
            overflow-wrap: break-word;
            margin: auto;
        }
    </style>
</head>
<body>
    <div class="invoice">
        {{-- <h2>Invoice</h2> --}}

        <div class="invoice_num_date">
            <div class="agreement_num">
                <p>Agreement Number : 242500001</p>
            </div>
    
            <div class="invoice_date">
                <p>Date : {{ date('Y-M-d') }}</p>
            </div>
        </div>

        <div class="invoice_body">
            {{-- <p>Customer Name: {{ $invoice->customer_name }}</p> --}}
            <table style="width: 100%;">
                <tbody>
                    <tr>
                        <td>Project :</td>
                        <td>Hello</td>
                    </tr>
                    <tr>
                        <td>Client Name :</td>
                        <td>Hello</td>
                    </tr>
                    <tr>
                        <td>NID :</td>
                        <td>25000</td>
                    </tr>
                    <tr>
                        <td>Birth Certificate No :</td>
                        <td>2500000000</td>
                    </tr>
                    <tr>
                        <td>Driving Licence No :</td>
                        <td>25000</td>
                    </tr>
                    <tr>
                        <td>Total Amount :</td>
                        <td>25000</td>
                    </tr>
                    <tr>
                        <td>Address :</td>
                        <td>25000</td>
                    </tr>
                </tbody>
            </table>
            {{-- <p> </p> --}}
            {{-- <p>Invoice Number: 242500001</p> --}}
            {{-- <p>Invoice Number: {{ $invoice->invoice_number }}</p> --}}
            {{-- <p>Amount: 25000</p> --}}
            {{-- <p>Amount: {{ $invoice->amount }}</p> --}}
            {{-- <p>Invoice Date: {{ $invoice->invoice_date }}</p> --}}
            <div class="subject_row">
                <strong>
                    25000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000
                </strong>
            </div>
            <div class="comment_row">
                <strong>
                    25000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000
                </strong>
            </div>
        </div>
        
    </div>
</body>
</html>

