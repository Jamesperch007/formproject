<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bootstrap Table with Add and Delete Row Feature</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css" />

    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
    <style>
        body {
            color: #404E67;
            background: #F5F7FA;
            font-family: 'Open Sans', sans-serif;
        }

        .table-title {
            padding-bottom: 10px;
            margin: 0 0 10px;
        }

        .table-title h2 {
            margin: 6px 0 0;
            font-size: 22px;
        }


        table.table {
            table-layout: auto;
        }

        table.table tr th,
        table.table tr td {
            border-color: #e9e9e9;
        }

        table.table th i {
            font-size: 13px;
            margin: 0 5px;
            cursor: pointer;
        }

        table.table th:last-child {
            width: 100px;
        }

        table.table td a {
            cursor: pointer;
            display: inline-block;
            margin: 0 5px;
            min-width: 24px;
        }

        table.table td i {
            font-size: 19px;
        }

        table.table td a.add i {
            font-size: 24px;
            margin-right: -1px;
            position: relative;
            top: 3px;
        }

        table.table .form-control {
            height: 32px;
            line-height: 32px;
            box-shadow: none;
            border-radius: 2px;
        }

        table.table .form-control.error {
            border-color: #f50000;
        }

        .modal-dialog {
            max-width: 60%;
            /* Adjust the percentage as needed */
            width: 60%;
        }
    </style>
</head>

<body>
    <div class="" style="padding: 0 25px;">
        <table id="backend1" class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Student Info</th>
                    <th>Contact Info</th>
                    <th>Applied Country</th>
                    <th>Work Experience</th>
                    <th>Test Taken</th>
                    <th>Score</th>
                    <th>How You Know</th>
                    <th>Reference</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @if($formdetail)
                @foreach($formdetail as $key => $value)
                <tr>
                    <td>{{ ++$key }}</td>
                    <td>
                        Name: {{ $value->name }}<br>
                        Date Of Birth: {{ $value->dob }}<br>
                        Gender: {{ $value->gender }}<br>
                        Marital Status: {{$value->marital_status }}
                    </td>

                    <td>
                        Mobile: {{ $value->mobile_number }}<br>
                        Email: {{ $value->email }}<br>
                        Address: {{ $value->address }}
                    </td>
                    <td>{{ $value->applied_country }}</td>
                    <td>{{ $value->work_experience }}</td>
                    <td>{{ $value->test_taken }}</td>
                    <td>{{ $value->score }}</td>
                    <td>{{ $value->how_you_know }}</td>
                    <td>{{ $value->reference }}</td>
                    <td class="text-end">
                        <a href="{{ route('form.destroy', $value->id) }}" type="button" class="btn btn-danger">Delete</a>
                        <a href="{{ route('form.edit', $value->id) }}" type="button" class="btn btn-success">Edit</a>

                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#academicDetailsModal{{ $key }}">
                            View Academic Details
                        </button>
                        <div class="modal fade" id="academicDetailsModal{{ $key }}" tabindex="-1" role="dialog" aria-labelledby="academicDetailsModalLabel{{ $key }}" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="academicDetailsModalLabel{{ $key }}">Academic Details for {{ $value->name }}</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <table class="table table-bordered">
                                            @php
                                            $academic_details = json_decode($value->academic_details);
                                            @endphp
                                            <thead>
                                                <tr>
                                                    <th>Degree Obtained</th>
                                                    <th>Major</th>
                                                    <th>Institution</th>
                                                    <th>Score/GPA</th>
                                                    <th>Passed Year</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">SLC / SEE</th>
                                                    <td> </td>
                                                    @foreach ($academic_details->see as $key=> $see )
                                                    <td>{{$see}} </td>
                                                    @endforeach

                                                </tr>
                                                <tr>
                                                    <th scope="row">10+2/CTEVT/PCT</th>
                                                    @foreach ($academic_details->plus2 as $key=> $plus2 )
                                                    <td>{{$plus2}} </td>
                                                    @endforeach

                                                </tr>
                                                <tr>
                                                    <th scope="row">Bachelor</th>
                                                    @foreach ($academic_details->bachelors as $key=> $bachelors )
                                                    <td>{{$bachelors}} </td>
                                                    @endforeach
                                                </tr>
                                                <tr>
                                                    <th scope="row">Master</th>
                                                    @foreach ($academic_details->masters as $key=> $masters )
                                                    <td>{{$masters}} </td>
                                                    @endforeach
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
                @endif
            </tbody>
        </table>
    </div>
    <script>
        let table = new DataTable('#backend1', {});
        let prefers = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
        let html = document.querySelector('html');

        html.classList.add(prefers);
        html.setAttribute('data-bs-theme', prefers);
    </script>
    
</body>

</html>