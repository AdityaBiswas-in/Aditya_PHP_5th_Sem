<!DOCTYPE html>
<html>
<head>
    <title>Word Count in Paragraph</title>
</head>
<body>

    <h2>Count Occurrences of a Word</h2>

    <form method="POST">
        <label>Enter Paragraph:</label><br>
        <textarea name="paragraph" rows="5" cols="40" required></textarea><br><br>

        <label>Enter Word to Search:</label><br>
        <input type="text" name="word" required><br><br>

        <input type="submit" name="submit" value="Count Word">
    </form>
    <br>

<?php
if (isset($_POST['submit'])) {

    $paragraph = $_POST['paragraph'];
    $word = $_POST['word'];

    $count = substr_count(strtolower($paragraph), strtolower($word));

    echo "The word '<b>" . htmlspecialchars($word) . "</b>' appears <b>" . $count . "</b> time(s) in the paragraph.";
}
?>

</body>
</html>
