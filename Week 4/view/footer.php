<footer class="footer">
    <?php
    if ($number) {
        echo '<a href="index.php">Click here to pick a new number</a>';
    } else {
        echo "🚀🚀🚀🚀🚀🚀";
    }

    if (!empty($_SESSION['history'])) {
        echo "<h3>Previous Numbers:</h3><ul>";
        foreach (array_reverse($_SESSION['history']) as $num) {
            echo "<li><a href='index.php?num={$num}'>{$num}</a></li>";
        }
        echo "</ul>";
    }
    ?>
</footer>