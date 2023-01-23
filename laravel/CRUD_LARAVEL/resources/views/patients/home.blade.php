

<table>


    <th> ID </th>
    <th> Patient Name</th>
    <th> Patient Age</th>
    <th> Patient Status</th>
    <th> Action</th>


        @foreach ($show as $item)
        <tr>

        <td>{{$item->id}}</td>
        <td>{{$item->patient_name}}</td>
        <td>{{$item->patient_age}}</td>
        <td>{{$item->patient_status}}</td>
        <td>
            <a href="{{route('patient.edit', $item->id)}}">Edit</a>
            <a href="">Delete</a>
        </td>
    </tr>
            
        @endforeach
</table>