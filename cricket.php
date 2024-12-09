
<html>
<head>
    <title>Indian Cricket Players</title>
    <style>
        body {
            text-align: center;
            background-color: #aab7b8;
            color: #FFFFFF;
            font-family: Arial, sans-serif;
        }
        table {
            width: 60%;
            margin: auto;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #FFFFFF;
            color: #000000;
        }
        th, td {
            border: 2px solid #DDDDDD;
            padding: 10px;
        }
        th {
            background-color: #4CAF50;
            color: #FFFFFF;
        }
        tr:nth-child(even) {
            background-color: #E0E0E0;
        }
        tr:nth-child(odd) {
            background-color: #F2F2F2;
        }
    </style>
</head>
<body>
    <h1>Indian Cricket Players</h1>
    <table>
        <tr>
            <th>Player Name</th>
        </tr>
        <?php
        $players = ["Shubman Gill", "Harmanpreet Kaur", "Rohit Sharma", "Virat Kohli", "Smriti Mandhana", "Hardik Pandya", "Suryakumar Yadav", "KL Rahul", "Ravindra Jadeja", "Jasprit Bumrah"];
        foreach ($players as $player) {
            echo "<tr><td>$player</td></tr>";
        }
        ?>
    </table>
</body>
</html>
