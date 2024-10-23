<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paraphrasing Tool | TopWebTools</title>
    <meta name="description" content="Utilize our Paraphrasing Tool to efficiently and precisely transform and reword text.">
    <base href="https://topwebtools.online/">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/responsive.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/favicon/site.webmanifest">
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "WebPage",
            "name": "Paraphrasing Tool",
            "url": "https://topwebtools.online/tools/paraphrasing-tool.php",
            "description": "Utilize our Paraphrasing Tool to efficiently and precisely transform and reword text.",
        }
    </script>
</head>

<body>
    <?php include 'header.php'; ?>

    <div class="paraphrase-wrapper">
        <div class="paraphrase-heading">
            <h1>Paraphrasing Tool</h1>
        </div>
        <div class="paraphrase-input">
            <textarea required id="textInput" placeholder="Enter the text to paraphrase"></textarea>
        </div>
        <div class="paraphrase-button">
            <button onclick="paraphraseText()">Paraphrase</button>
        </div>
        <div class="paraphrase-results" id="results"></div>

        <div class="review-section">
            <h2>Review</h2>
            <p>Our Paraphrasing Tool makes rephrasing text quick and simple. With its intuitive interface and effective synonym replacement, it’s ideal for students, writers, and anyone in need of unique content.</p>
        </div>

        <div class="how-to-use">
            <h2>How to Use</h2>
            <p>1. Enter Text: Type or paste the text you want to paraphrase into the textarea above.</p>
            <p>2. Click "Paraphrase": Press the button to generate a rephrased version of your text.</p>
            <p>3. View Results: The paraphrased text will appear below the button, ready for you to use.</p>
        </div>
    </div>

    <?php include 'footer.php'; ?>

    <script src="assets/main.js"></script>

</body>

</html>