<h1> Create new Patients </h1>


<form action="{{route('patient.store')}}" method="post" style="margin: 50px 50px">

    @csrf

    <input type="text" name="patient_name" id="" placeholder="patient_name"><br><br>

    <input type="text" name="patient_age" id="" placeholder="patient_age"><br><br>

    <input type="text" name="patient_status" id="" placeholder="patient_status"><br><br>

    <button type="submit">Create new patient </button>

</form>