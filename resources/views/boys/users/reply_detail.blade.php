@extends('layouts.boymain')

@section('content')
<div class="row col">
    <h4>ລາຍລະອຽດເອກະສານ</h4>
</div>

<div class="row">
    
    <div class="col-5">
        <table class="table">
            <tbody>
                <tr>
                    <th class="text-center border border-secondary" colspan="2">ຂໍ້ມູນເອກະສານ</th>
                </tr>
                <tr>
                    <th scope="col">Number Report</th>
                    <td>{{ $report->report_number }}</td>
                </tr>
                <tr>
                    <th scope="col">Title</th>
                    <td>{{ $report->title}}</td>
                </tr>
                <tr>
                    <th scope="col">Sign Date</th>
                    <td>{{ $report->sign_date }}</td>
                </tr>
                <tr>
                    <th scope="col">Type</th>
                    <td>{{ $report->type }}</td>
                </tr>
            </tbody>
        </table>
    </div>

    
    <div class="col-7">
        <table class="table">
            <thead>
                <tr>
                    <th class="text-center border border-secondary" colspan="3">ເອກະສານຄັດຕິດ</th>
                </tr>
                <tr>
                    <th scope="col">File name</th>
                    <th scope="col">Type</th>
                    <th scope="col">Download</th>
                   
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $sign_file->name }}</td>
                    <td>Sign file</td>
                    <td><a href="/download-{{ $sign_file->id }}">Download</a></td>
                </tr>
                @foreach($attach_files as $attach_file)
                <tr>
                    <td>{{ $attach_file->name }}</td>
                    <td>Attach file</td>
                    <td><a href="/download-{{ $attach_file->id }}">Download</a></td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>

    <div class="col-12">
    <table class="table">
        <tr>
            <th class="text-center border border-secondary" colspan="12"><button><a href="/reply-report">ຕອບກັບ</a></button></th>
        </tr>
    </table>
    </div>
</div>

<div class="w-100"></div>


{{-- <div class="row col">
    <table class="table">
        <thead>
            <tr>
                <th class="text-center border border-secondary" colspan="5">Bank List</th>
            </tr>
            <tr>
                <th scope="col">Bank name</th>
                <th scope="col">Group name</th>
                <th scope="col">Send day</th>
                <th scope="col">Status</th>
           
            </tr>
        </thead>
        <tbody>
            @foreach($bank_lists as $bank_list)
            <tr>
                <td>{{ $bank_list['reporter_name'] }}</td>
                <td>{{ $bank_list['reporter_type_title'] }}</td>
                <td>{{ $bank_list['send_day'] }}</td>
                <td>{{ $bank_list['status'] }}</td>
                
                
            </tr>
            @endforeach
        </tbody>
    </table>
</div> --}}
@endsection