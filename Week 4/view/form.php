<main class="main-form">
    <h2 id="enterNumber">Enter a number</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET" class="main-entry__form">
        <input type="text" class="input-box" id="num" name="num" maxlength="2" required>
        <select name="operation" class="main-entry__select">
            <option value="multiply">Multiplication</option>
            <option value="add">Addition</option>
            <option value="subtract">Subtraction</option>
            <option value="divide">Division</option>
        </select>
        <button class="main-entry">GO!</button>
    </form>
</main>