<h1> Edit Patients </h1>


<form action="{{route('patient.update',$edit->id )}}" method="post" style="margin: 50px 50px">

    @method('PUT')
    @csrf

    <input type="text" name="patient_name" value="{{$edit->patient_name}}" ><br><br>

    <input type="text" name="patient_age" value="{{$edit->patient_age}}"><br><br>

    <input type="text" name="patient_status" value="{{$edit->patient_status}}"><br><br>

    <button type="submit"> Edit patient </button>

</form>