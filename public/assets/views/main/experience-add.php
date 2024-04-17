<html>
    <head>
        <title>Add Experience</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <link rel="stylesheet" href="./assets/styles/experience-add.css">
        <script type="text/javascript" src="./assets/js/experience-add.js"></script>
    </head>

    <body>
        <div class = "parent-container">
            <div class = "title-box">
                <h1>Add a Job</h1>
            </div>

            <div class="container">
                <form id = "form-id">
                    <div class = "title-form">
                        <label for="title" id="title-label">Title</label>
                        <label id="title-error"></label>
                        <input type="text" class="form-control" id="title"
                                placeholder="Enter Title"> 
                    </div>
                    <br>
                    <div class = "company-form">
                        <label for="company" id="company-label">Company</label>
                        <label id="company-error"></label>
                        <input type="text" class="form-control" id="company"
                                placeholder="Enter Company">
                    </div>
                    <br>
                    <div class = "years-form">
                        <label for="years" id="years-label">Years Worked</label>
                        <label id="years-error"></label>
                        <input type="number" class="form-control" id="years"
                                placeholder="Enter Number of Years Worked">
                    </div>
                    <br>
                    <div class = "description-form">
                        <label for="description" id="description-label">Description</label>
                        <label id="description-error"></label>
                        <input type="text" class="form-control" id="description"
                                placeholder="Enter Description">
                    </div>
                    <br>
                    <div class = "buttons">
                        <button type = "submit" class ="btn">Submit</button>
                    </div>
                </form>
            </div>
            
        </div>

    </body>
</html>