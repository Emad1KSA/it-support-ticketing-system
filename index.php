<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT Support Portal</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f4f7f6;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        .container {
            background-color: #ffffff;
            width: 100%;
            max-width: 500px;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.08);
        }

        .header {
            text-align: center;
            margin-bottom: 25px;
        }

        .header h1 {
            color: #2c3e50;
            font-size: 24px;
            margin-bottom: 8px;
        }

        .header p {
            color: #7f8c8d;
            font-size: 14px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: 600;
            margin-bottom: 8px;
            color: #34495e;
            font-size: 14px;
        }

        .form-group input, 
        .form-group select, 
        .form-group textarea {
            width: 100%;
            padding: 12px 14px;
            border: 1px solid #dcdfe6;
            border-radius: 6px;
            font-size: 14px;
            color: #333;
            outline: none;
            transition: border-color 0.2s ease, box-shadow 0.2s ease;
        }

        .form-group input:focus, 
        .form-group select:focus, 
        .form-group textarea:focus {
            border-color: #3498db;
            box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.15);
        }

        .form-group textarea {
            resize: vertical;
            min-height: 100px;
        }

        .submit-btn {
            width: 100%;
            background-color: #3498db;
            color: #ffffff;
            border: none;
            padding: 12px;
            border-radius: 6px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.2s ease, transform 0.1s ease;
        }

        .submit-btn:hover {
            background-color: #2980b9;
        }

        .submit-btn:active {
            transform: scale(0.98);
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="header">
            <h1>IT Support</h1>
            <p>New Support Request</p>
        </div>

        <form action="submit.php" method="POST">
            <div class="form-group">
                <label for="employee_name">Name</label>
                <input type="text" id="employee_name" name="employee_name" placeholder="Enter your name" required>
            </div>

            <div class="form-group">
                <label for="issue_type">Problem</label>
                <select id="issue_type" name="issue_type" required>
                    <option value="" disabled selected>Select problem type</option>
                    <option value="Computer">Computer</option>
                    <option value="Network">Network</option>
                    <option value="Printer">Printer</option>
                    <option value="Other">Other</option>
                </select>
            </div>

            <div class="form-group">
                <label for="problem_description">Describe your problem</label>
                <textarea id="problem_description" name="problem_description" placeholder="Provide details about the issue..." required></textarea>
            </div>

            <button type="submit" class="submit-btn">Send Request</button>
        </form>
    </div>

</body>
</html>