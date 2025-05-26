<div class="form-container">
    <h2>Edit Student Information</h2>
    <form method="POST">
        <label>Name:</label>
        <input type="text" name="name" value="<?= $data['name'] ?>" required>

        <label>Father Name:</label>
        <input type="text" name="father_name" value="<?= $data['father_name'] ?>" required>

        <label>Mother Name:</label>
        <input type="text" name="mother_name" value="<?= $data['mother_name'] ?>" required>

        <label>Home Address:</label>
        <input type="text" name="address" value="<?= $data['address'] ?>" required>

        <label>Educational Status:</label>
        <input type="text" name="educational_status" value="<?= $data['educational_status'] ?>" required>

        <label>Phone Number:</label>
        <input type="text" name="phone_number" value="<?= $data['phone_number'] ?>" required>

        <label>University Name:</label>
        <input type="text" name="university_name" value="<?= $data['university_name'] ?>" required>

        <label>Preferable Subject:</label>
        <input type="text" name="preferable_subject" value="<?= $data['preferable_subject'] ?>" required>

        <label>Passing Year:</label>
        <input type="text" name="passing_year" value="<?= $data['passing_year'] ?>" required>

        <button type="submit" name="submit">Update</button>
    </form>
</div>