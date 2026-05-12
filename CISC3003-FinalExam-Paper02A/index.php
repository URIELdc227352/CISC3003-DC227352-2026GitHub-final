<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scenario A - Registration Form</title>
    <!-- 使用教授文档中推荐的 Water.css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
    <h1>User Registration</h1>
    
    <!-- A.01: 使用最佳实践创建 HTML 表单 -->
    <form action="php/process.php" method="POST">
        
        <!-- A.02: 简单的文本输入 (Text Input) -->
        <label for="fullname">Full Name:</label>
        <input type="text" id="fullname" name="fullname" required>

        <label for="email">Email Address:</label>
        <input type="email" id="email" name="email" required>

        <!-- A.03: 多行文本输入 (Textarea) -->
        <label for="bio">Short Bio:</label>
        <textarea id="bio" name="bio" rows="4" required></textarea>

        <!-- A.04: 下拉列表 (Select) -->
        <label for="country">Country:</label>
        <select id="country" name="country">
            <option value="Macau">Macau</option>
            <option value="China">Mainland China</option>
            <option value="Other">Other</option>
        </select>

        <!-- A.04: 单选按钮 (Radio Buttons) -->
        <fieldset>
            <legend>Gender:</legend>
            <label><input type="radio" name="gender" value="Male" required> Male</label>
            <label><input type="radio" name="gender" value="Female" required> Female</label>
        </fieldset>

        <!-- A.04: 复选框 (Checkboxes) -->
        <label>
            <input type="checkbox" name="subscribe" value="1">
            Subscribe to newsletter
        </label>

        <button type="submit">Submit Registration</button>
    </form>

    <!-- 🚨 极其重要：防止零分的 Footer！请务必替换你的学号 -->
    <footer>
        <hr>
        CISC3003 Web Programming: Uriel-WuLi-DC227352-2026
    </footer>
</body>
</html>