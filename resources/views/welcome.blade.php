<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Index</title>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.debug.js"></script>

        
        <script type="text/javascript">
            var testDivElement = document.getElementById('someHtml');

            function savePDF() {
                var imgData;
                
                html2canvas($("#someHtml"), {
                    useCORS: true,
                    onrendered: function (canvas) {
                        
                        imgData = canvas.toDataURL(
                           'image/png');
                        var doc = new jsPDF({
                            orientation: 'landscape',
                            unit: 'px',
                            format: [canvas.width, canvas.height]
                        });
                        doc.addImage(imgData, 'PNG', 10, 20, canvas.width, canvas.height);
                        doc.save('sample-file.pdf');
                    }
                });
            }


        </script>
    <style>
        body{
          
            background-image: url('./assets/img/background.png');
            background-size: contain ;
            background-repeat: no-repeat;
            background-position: center center;
            border: 25px solid #0349ae;
            box-shadow: inset 0 0 0 2000px rgba(255, 255, 255, 0.945);
        }
        .middle-content span{
            color: #e59a6c;
        }
        .middle-content h1{
            display: table; /* keep the background color wrapped tight */
            margin: 2px auto 2px auto; /* keep the table centered */
            margin-top: 20px;
            background-color: #0349ae;
            font-weight: bold;
            color: white;
            font-size: 45px;
        }
        .middle-content p{
            font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            color: #36658f;
            font-style: italic;
            font-size: 28px;
        }
        .right-logo{
            margin-left: 25px;
            margin-top: 10px;

        }
        .certificate-off h3{
            color: #213070!important;
            font-size: 28px;
            font-family: 'Times New Roman', Times, serif;
            font-weight: 600;
            margin-top: 30px;
        }
        .certificate-off h4{
            color: #161d44;
            font-size: 28px;
            line-height: 1rem;
            
        }
        .certificate-off p{
             padding-top: 20px;
            color: #030303;
            font-size: 30px;
            font-family: 'Times New Roman', Times, serif;
        }
        .certificate-off h5{
         margin-top: 20px;
         color: #1f1953;
         font-size: 20px; 
     }
     .certificate-off h5 span{
        font-weight: bold;
         margin-top: 20px;
         color: #1f1953;
         font-size: 20px; 
         line-height: 2rem;
     }
     .left-sign{
        border-bottom: 3px solid #e59a6c;
     }
     .middle-sign{
        border-bottom: 3px solid #e59a6c;
     }
     .right-sign{
        border-bottom: 3px solid #e59a6c;
     }
     a{
        color: blue;
     }
     .certificate-id p{
        color: #0349ae;
        font-weight: 600;
        padding-top: 50px;
     }
   
     
    </style>
</head>
<body id="someHtml">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 col-md-2 col-12">
                <div class="left-logo ml-4">
                    <img src="./assets/img/IITR.png" class="img-fluid" width="140px" height="140px">
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-12">
                <div class="middle-content text-center">
                    <h1>i<span>HUB</span> Divya<span>Sampark</span></h1>
               <p>A joint initiative of Government of India, Department of Science & Technology and IIT Roorkee</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-12">
                <div class="right-logo ml-4">
                    <img src="./assets/img/DST.webp" class="img-fluid" width="200px" height="210px">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="certificate-off text-center">
                <h3>CERTIFICATE OF COMPLETION</h3>
                <h4>This is to certify that</h4>
                <p>Atul Kumar Srivastava</p>
                <h5>has successfully completed The Executive Certificate Program in<br>
                    <span>Artificial Intelligence Strategy for Leaders</span><br>conducted by the  <span>iHUB DivyaSampark at Indian Institute of Technology Roorkee <br>
                        in collaboration with ET Masterclass from 18 June 2022.</span> </h5>
                    
            </div>
        </div>

    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <div class="left-sign text-center">
                  <img src="./assets/img/misbah.png" class="img-fluid">
                 
                </div><br>
                <div class="name text-center">
                    <h5>Fazal Misbah<br>Economic Times
                    </h5>
                    <img src="./assets/img/master.png" class="img-fluid" width="165" height="165">
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="middle-sign text-center">
                    <img src="./assets/img/bala.png" class="img-fluid" width="104px" height="100px">
                </div><br>
                <div class="name text-center">
                    <h5>Prof. R. Balasubramanian<br>                             
                        Professor<br>
              IIT Roorkee
                    </h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="right-sign text-center">
                    <img src="./assets/img/manish.png" class="img-fluid" width="100px" height="100px">
                </div><br>
                <div class="name text-center">
                    <h5>Manish Anand<br>
                        Chief Executive Officer<br>
                        iHUB DivyaSampark
                    </h5>
                   
                </div>
               
            </div>
        </div>
    </div><br>
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="date">
                    <h6>Date of Issue- 16 Aug 2022<br>
                This certificate can be verified at https://tih.iitr.ac.in </h6>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="certificate-id">
                    <p>Certificate ID: TIHASAI004</p>
                </div>
               
            </div>
        </div>
    </div>
    <button type="button" onclick="savePDF()" class="btn btn-primary">Downlaod</button>
</body>
</html>