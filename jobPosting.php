<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <link rel="stylesheet" href="./css/style/form.css">
    <title>Document</title>
</head>

<body>
        <form method="POST" action="./server/jobPosting_server.php" enctype="multipart/form-data">
        <h1>Post Job</h1>
        <div class="form-row">
            <div class="form-group">
                <label for="inputAddress">Name</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="Name" name="name">
            </div>
            <div class="form-group">
                <label for="inputAddress">Title</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="Job Title" name="title">
            </div>
            <div class="form-group">
                <label for="inputAddress">Address</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="Address" name="address">
            </div>
            <div class="form-group">
                <label for="inputAddress">Phone no.</label>
                <input type="number" class="form-control" id="inputAddress" placeholder="Phone number" name="number">
            </div>
            <div class="form-group">
                <label for="inputAddress">Salary</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="Salary" name="salary">
            </div>
            <div class="form-group">
                <label for="inputAddress">Description</label>
                <textarea class="form-control" id="editor"  name="content"></textarea>
            </div>
            <div class="form-group">
                <label>Select Job type</label>
                <select for="jobType job-type" name="jobtype">
                    <option value="Part Time">Part Time</option>
                    <option value="Full Time">Full Time</option>
                </select>
            </div>
        </div>
        <br>
        <button type="submit" class="btn btn-primary" name="jobsubmit">Post</button>
    </form>
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
                'link','|' 
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
        placeholder: 'Enter job detail salary number and your description',
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
