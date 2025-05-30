<?php

include 'config.php';

// Fetch data from the database

$query = "SELECT * FROM db_table";
$result = mysqli_query($connection, $query);
if (!$result) {
    die("Query failed: " . mysqli_error($connection));
}
?>


<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Father's Name</th>
            <th>Mother's Name</th>
            <th>Age</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Image</th>
        </tr>
        <tbody>
            <?php while ($data = mysqli_fetch_assoc($result)) : ?>
                <tr>
                    <td><?= htmlspecialchars($data['name']) ?></td>
                    <td><?= htmlspecialchars($data['father_name']) ?></td>
                    <td><?= htmlspecialchars($data['mother_name']) ?></td>
                    <td><?= htmlspecialchars($data['age']) ?></td>
                    <td><?= htmlspecialchars($data['address']) ?></td>
                    <td><?= htmlspecialchars($data['phone_number']) ?></td>
                    <td><?= htmlspecialchars($data['email']) ?></td>
                    <td><img src="<?= htmlspecialchars($data['image']) ?>" alt="Image" width="50"></td>
                </tr>
            <?php endwhile; ?>
  
        </tbody>
    </thead>
</table>