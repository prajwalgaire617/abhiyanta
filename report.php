
<?php

$conn = mysqli_connect('localhost', 'root', '', 'abhiyanta');

session_start();
    if (!isset($_SESSION['user_id'])) {
        header("location:login.php");
     }


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/report.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
  <link rel="stylesheet" href="./css/style/navbar.css">
  <link rel="stylesheet" href="./css/style/crousel.css">
  <link rel="stylesheet" href="./css/style/banner.css">
  <link rel="stylesheet" href="./css/style/footer.css">
  <link rel="stylesheet" href="./css/style/rights.css">
  <script src="https://kit.fontawesome.com/7ae05d4d44.js" crossorigin="anonymous"></script>
</head>

<body>
  <nav class="navbar navbar-large navbar-expand-md bg-light">
    <div class="container">
      
      <a class="navbar-brand" href="index.php">Abhiyanta</a>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 navigation-links">


          <li class="nav-item">
            <a class="nav-link text-white" href="index.php">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-white" href="community.php">Community</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="report.php">Report</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="jobs.php">Find Job</a>
          </li>
        </ul>

       

      </div>
      
      <div class="dropdown">
        <img src="/images/default.jpg" width="50px" class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">

        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="./server/logout.php">Log out</a></li>
        </ul>
      </div>


    </div>
  </nav>
  <!-- banner -->

  <div class="flexcontainer">
    <nav class="navbar navbar-small bg-black">
      <ul class="navbar-nav">
          <li class="nav-item">
           
            <a href="index.php" class="nav-link" id="0"><i class="fa-solid fa-house"></i></a>
          <a href="community.php" class="nav-link" id="1"><i class="fa-solid fa-user-group"></i></a>
          <a href="report.php" class="nav-link" id="2"><i class="fa-solid fa-bullhorn"></i></a>
          <a href="jobs.php" class="nav-link" id="3"><i class="fa-solid fa-briefcase"></i></a>


        </li>

      </ul>
    </nav>
  </div>
    <h1 class="text-center">Report Your Case here.</h1>
    <div id="container">
        <form class="form-control" action="./server/report_server.php" method="POST" enctype="multipart/form-data">
            <label for="victim_name">Victim Name: </label>
            <input type="text" class="form-control" id="victim_name" placeholder="Enter victim name" name="victim_name">
            <label for="victim_age">Victim Age: </label>
            <input type="number" class="form-control" id="victim_age" placeholder="Enter victim age" name="victim_age">

            <label for="exampleFormControlInput1" class="form-label">Date</label>
            <input type="date" class="form-control" id="exampleFormControlInput1" name="date_report" >

            <label for="Editor">Describe your case:</label>
            <textarea id="editor" name="report_editor">
                </textarea>
            <button class="btn btn-primary my-3" type="submit" name="submit_report">Submit Case</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/35.0.1/super-build/ckeditor.js"></script>

    <script>

CKEDITOR.ClassicEditor.create(document.getElementById("editor"), {
    //   tools that should display our editor 

        toolbar: {
            items: [
                'findAndReplace', 'selectAll', '|',
                'heading', '|',
                'bold', 'italic', 'underline', '|',
                'bulletedList', 'numberedList', '|',
                'undo', 'redo',
                'alignment', '|',
                'link', 'insertImage','|',
            ],
            shouldNotGroupWhenFull: true
        },
        list: {
            properties: {
                styles: true,
                startIndex: true,
                reversed: true
            }
        },

        // things that should be included inside heading dropdown

        heading: {
            options: [
                { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
                { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
                { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
                { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
                { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
            ]
        },
        placeholder: 'Describe Your Case.........',
        fontFamily: {
            options: [
                'default',
                'Arial, Helvetica, sans-serif',
                'Courier New, Courier, monospace',
                'Georgia, serif',
                'Lucida Sans Unicode, Lucida Grande, sans-serif',
                'Tahoma, Geneva, sans-serif',
                'Times New Roman, Times, serif',
                'Trebuchet MS, Helvetica, sans-serif',
                'Verdana, Geneva, sans-serif'
            ],
            supportAllValues: true
        },
       
        fontSize: {
            options: [ 10, 12, 14, 'default', 18, 20, 22 ],
            supportAllValues: true
        },
        
        // htmlSupport: {
        //     allow: [
        //         {
        //             name: /.*/,
        //             attributes: true,
        //             classes: true,
        //             styles: true
        //         }
        //     ]
        // },
       
        // htmlEmbed: {
        //     showPreviews: true
        // },
       

        // decorate the link that we use inside our editor 

        link: {
            decorators: {
                addTargetToExternalLinks: true,
                defaultProtocol: 'https://',
                toggleDownloadable: {
                    mode: 'manual',
                    label: 'Downloadable',
                    attributes: {
                        download: 'file'
                    }
                }
            }
        },
    
        // plugins that are not useful to use are removed here 

        removePlugins: [
            'CKBox',
            'CKFinder',
            'EasyImage',
            'RealTimeCollaborativeComments',
            'RealTimeCollaborativeTrackChanges',
            'RealTimeCollaborativeRevisionHistory',
            'PresenceList',
            'Comments',
            'TrackChanges',
            'TrackChangesData',
            'RevisionHistory',
            'Pagination',
            'WProofreader',
            'MathType'
        ]
    });
    </script>
</body>

</html>