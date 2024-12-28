<!-- M.S.Umair Salih  	IT23274716  -->

<?php
    
    $connection = mysqli_connect("localhost", "root", "", "dbcrud");

   
    if (!$connection) {
        die("Connection failed: ". mysqli_connect_error());
    }

   
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $phone = $_POST["phone"];
        $description = $_POST["description"];

      
        $query = "INSERT INTO inquiry (name, phone_number, description) VALUES ('$name', '$phone', '$description')";
        $result = mysqli_query($connection, $query);

        if ($result) {
            header("Location: INQUARY.php");
        } else {
            echo "Error: ". mysqli_error($connection);
        }
    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/help_page.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,404;1,404&display=swap" rel="stylesheet">
</head>
<body>
<?php
  include './header.php';
  ?>
    <h1 class="faq-title"></h1>
    <div class="container">
        <div class="inquiry-image">
        <img src="./Image/helppage.png" alt="Inquiry Image">
        </div>
        <div class="inquiry-box">
            <h2>Report an Issue or Ask a Question</h2>
            <form id="inquiry-form" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name"><br><br>
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone"><br><br>
                <label for="description">Describe your issue or question:</label>
                <textarea id="description" name="description"></textarea><br><br>
                <input class="submit-btn" type="submit" value="Submit">
            </form>
        </div>
    </div>
<hr>

<h2 class="faq-title">Frequently Asked Questions</h2>
    <div class="box">
        <div class="question">What services does a digital advertising agency offer?</div>
        <div class="answer">
            <br><br>This question addresses the range of services a digital advertising agency provides, such as search engine marketing (SEM), social media advertising, display advertising, content marketing, email marketing, and more.</div>
    </div>


    <div class="box">
        <div class="question">How does a digital advertising agency measure the success of a campaign?</div>
        <div class="answer">
            <br><br>This query delves into the metrics and key performance indicators (KPIs) used by digital advertising agencies to evaluate the effectiveness of their campaigns, including metrics like click-through rates (CTR), conversion rates, return on ad spend (ROAS), and engagement metrics.</div>
    </div>

    <div class="box">
        <div class="question">What sets a digital advertising agency apart from traditional advertising agencies?</div>
        <div class="answer">
            <br><br>This question explores the differences between digital and traditional advertising agencies, highlighting the unique strategies, tools, and platforms utilized in digital advertising, such as targeted audience segmentation, real-time analytics, and optimization techniques.</div>
    </div>

    <div class="box">
        <div class="question">How much does it cost to hire a digital advertising agency?</div>
        <div class="answer">
            <br><br>This inquiry addresses the budget considerations associated with hiring a digital advertising agency, including factors like campaign objectives, ad spend, agency fees, and additional costs for creative production, technology platforms, and ongoing management.</div>
    </div>

    <div class="box">
        <div class="question">How can a digital advertising agency help my business grow?</div>
        <div class="answer">
            <br><br>This question focuses on the potential benefits and outcomes of partnering with a digital advertising agency, such as increasing brand awareness, driving website traffic, generating leads or sales, improving customer engagement, and ultimately achieving a positive return on investment (ROI).</div>
    </div>

   

  
    <script src="./js/help_page.js"></script>
    


   

    <?php
  include './footer.php';
  ?>

</body>
</html>