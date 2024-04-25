<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Summary</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Academic Conference Feedback Summary</h2>
    <table>
        <tr>
            <th>Feedback </th>
            <th>Academic Conference Feedback Summary</th>
        </tr>
        <?php
        // Database connection parameters
        $db_username = 'root';
        $db_password = '';
        $db_database = 'fdgr5';
        $db_host = 'localhost';

        // Establish connection to the database
        $connection = mysqli_connect($db_host, $db_username, $db_password, $db_database);

        // Check if the connection was successful
        if (!$connection) {
            echo "<tr><td colspan='2'>Failed to connect to MySQL: " . mysqli_connect_error() . "</td></tr>";
        } else {
            // Feedback parameters
            $parameters = ['likedMost', 'improvement', 'recommendation', 'overallExperience', 'anonymityRating'];

            // Iterate through each feedback parameter
            foreach ($parameters as $parameter) {
                // Query to fetch responses for the current parameter
                $sql = "SELECT $parameter FROM feedback1";

                // Execute the query
                $result = mysqli_query($connection, $sql);

                // Check if the query was successful
                if ($result) {
                    // Initialize an array to store responses
                    $responses = [];

                    // Fetch responses and add them to the array
                    while ($row = mysqli_fetch_assoc($result)) {
                        $responses[] = $row[$parameter];
                    }

                    // Display responses for the current parameter
                    echo "<tr><td>$parameter</td><td>";
                    echo implode(', ', $responses); // Display responses separated by comma
                    echo "</td></tr>";
                } else {
                    // Display error message if the query failed
                    echo "<tr><td>$parameter</td><td>Error: " . mysqli_error($connection) . "</td></tr>";
                }
            }

            // Close the database connection
            mysqli_close($connection);
        }
        ?>
    </table>
</body>
</html>



