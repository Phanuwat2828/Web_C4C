<section>
    <h1>Students</h1>

    <form action="students" method="get">
        <input type="text" name="keyword" />
        <button type="submit">Search</button>
    </form>
    <?php
    if (isset($data['result'])) {
        while ($row = $data['result']->fetch_object()) {
    ?>
            <?= $row->student_id ?>
            <?= $row->first_name ?>
            <?= $row->last_name ?>
            <?= $row->phone_number ?>
            <?= $row->email ?>
            <br>
    <?php
        }
    }
    ?>
</section>

<script>
    function confirmSubmission() {
        return confirm("Are you sure you want to delete?");
    }
</script>
