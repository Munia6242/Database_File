<?php
include 'config.php';

?>
 
 
 
 
 <div class="form-container">
    <h2>Edit Student Information</h2>
    <form method="POST">
        <label>Name:</label>
        <input type="text" name="name" value="<?= $data['name'] ?>" required>

        <label>Father Name:</label>
        <input type="text" name="father_name" value="<?= $data['father_name'] ?>" required>

        <label>Mother Name:</label>
        <input type="text" name="mother_name" value="<?= $data['mother_name'] ?>" required>

        <label>Age:</label>
        <input type="text" name="age" value="<?= $data['age'] ?>" required>

        <label>Address:</label>
        <input type="text" name="address" value="<?= $data['address'] ?>" required>

        <label>Phone Number:</label>
        <input type="text" name="phone_number" value="<?= $data['phone_number'] ?>" required>

        <label>Email:</label>
        <input type="text" name="email" value="<?= $data['email'] ?>" required>

        <label>Image:</label>
        <input type="file" name="image" accept="image/*">
        <input type="hidden" name="id" value="<?= $data['id'] ?>">
        <input type="hidden" name="old_image" value="<?= $data['image'] ?>">

        
        <button type="submit" name="submit">Update</button>
    </form>
</div>