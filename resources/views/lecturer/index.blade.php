@extends('layouts.mylayout')

@section('content')

                <br>
                <table class="table table-hover table-sm mt-4">
                    <thead>
                        <tr>
                            <th>Bil</th>
                            <th>User ID</th>
                            <th>Lecturer Name</th>                     
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($lecturers as $lecturer)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $lecturer->user_id  }}</td>
                                <td>{{ $lecturer->fullname }}</td>
                                <td>
                                   
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
@endsection
