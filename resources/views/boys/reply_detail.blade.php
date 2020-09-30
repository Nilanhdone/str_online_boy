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
                    <td>{{ $reply->report_number }}</td>
                </tr>
                <tr>
                    <th scope="col">Title</th>
                    <td>{{ $reply->title}}</td>
                </tr>
                <tr>
                    <th scope="col">Sign Date</th>
                    <td>{{ $reply->sign_date }}</td>
                </tr>
                <tr>
                    <th scope="col">Type</th>
                    <td>{{ $reply->type }}</td>
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
                    <td><a href="/replydownload-{{ $sign_file->id }}">Download</a></td>
                </tr>
                @foreach($attach_files as $attach_file)
                <tr>
                    <td>{{ $attach_file->name }}</td>
                    <td>Attach file</td>
                    <td><a href="/replydownload-{{ $attach_file->id }}">Download</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div class="w-100"></div>


<div class="row col">
    <table class="table">
        <thead>
            <tr>
                <th class="text-center border border-secondary" colspan="6">Bank List</th>
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
</div>
@endsection