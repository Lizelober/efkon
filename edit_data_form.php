<div class="form-group">
    <label>Enter Name</label>
    <input type="text" name="name" id="name" class="form-control" />
</div>
<div class="form-group">
    <label>Enter Surname</label>
    <textarea name="surname" id="surname" class="form-control"></textarea>
</div>
<div class="form-group">
    <label>Enter Gender</label>
    <select name="gender" id="gender" class="form-control">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Other">Other</option>
    </select>
</div>
<div class="form-group">
    <label>Enter Email</label>
    <input type="email" name="email" id="email" class="form-control" />
</div>
<div class="form-group">
    <label>Enter Contact Number</label>
    <input type="text" name="contact_number" id="contact_number" class="form-control" />
</div>

<script>
    $(document).ready(function() {

        var name = localStorage.getItem('name');
        var surname = localStorage.getItem('surname');
        var gender = localStorage.getItem('gender');
        var email = localStorage.getItem('email');
        var contact_number = localStorage.getItem('contact_number');

        $('#name').val(name);
        $('#surname').val(surname);
        $('#gender').val(gender);
        $('#email').val(email);
        $('#contact_number').val(contact_number);

    });
</script>