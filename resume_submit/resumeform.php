<html>
<head>
<link rel='stylesheet' href='simple-job-board-public.css' type='text/css' media='all' />
<link rel='stylesheet' href='grid.css' type='text/css' media='all' />
<link rel='stylesheet' href='custom.css' type='text/css' media='all' />

  	<script language="javascript" type="text/javascript">
	//<--
	function startUpload(){
	var fullPath = document.getElementById('file').value;
	if (fullPath) {
	    var startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
	    var filename = fullPath.substring(startIndex);
	    if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
	        filename = filename.substring(1);
	    }
	}
	var extIndex = filename.indexOf('.');
	var extension = filename.substring(extIndex);
//	alert(extension);
	var vhphoto = document.getElementById('vhphoto').value;
	var extexist = vhphoto.indexOf(extension);
//	alert(extexist );
	if(extexist<0) {
	      document.getElementById('filename').value += extension;
//		  alert(document.getElementById('filename').value)
	}
	      return true;
	}
	//-->
	</script> 

</head>
<body class="jobpost-template-default single single-jobpost postid-216  color-custom style-default layout-full-width mobile-tb-left hide-love header-classic sticky-header sticky-white ab-hide subheader-title-left menu-line-below menuo-right betheme sjb">

<div class="container sjb-container" id="container"><div id="content" class="sjb-content" role="main">


<header>
    <div class="row">            
        
<!-- Start Header
================================================== -->

<div class="row">
    <div class="job-detail">        
        <h3><span class="job-title" style="color: #d84946;    margin: 0;
    padding: 0;
    border: 0;
    font-size: 100%;
    font: inherit;
    vertical-align: baseline;">CSC 575 Project Submit Resume</span></h3>            
    </div>
</div>


    </div>
</header>


<!-- Start Content Wrapper
================================================== -->  
<div class="sjb-page">
    <div class="sjb-detail">
        <div class="list-data">
		
			<form class="jobpost-form" id="sjb-application-form" name="c-assignments-form" enctype="multipart/form-data" action="resumesubmit.php" method="post" onsubmit="startUpload();">
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label for="jobapp_first_name">First Name<span class="required">*</span></label>
							<input type="text" name="jobapp_first_name" class="form-control sjb-required" id="jobapp_first_name" required="required">
						</div>
						<div class="form-group">
							<label for="jobapp_middle_name">Middle Name</label>
							<input type="text" name="jobapp_middle_name" class="form-control sjb-not-required" id="jobapp_middle_name">
						</div>
						<div class="form-group">
							<label for="jobapp_last_name">Last Name<span class="required">*</span></label>
							<input type="text" name="jobapp_last_name" class="form-control sjb-required" id="jobapp_last_name" required="required">
						</div>
						<div class="form-group">
							<label for="jobapp_email">Email<span class="required">*</span></label>
							<input type="text" name="jobapp_email" class="form-control sjb-required" id="jobapp_email" required="required">
						</div>
						<div class="form-group">
							<label for="jobapp_phone_number">Phone number</label>
							<input type="text" name="jobapp_phone_number" class="form-control" id="jobapp_phone_number">
						</div>
                                                <div class="form-group">
							<label for="jobapp_skill">What are your unique skills (Python, Java, etc.)</label>
							<input type="text" name="jobapp_skill" class="form-control" id="jobapp_skill">
						</div>
                                                <div class="form-group">
							<label for="jobapp_jd">Give us a few examples of an ideal job description that would match you(Paste the text)</label>
							<textarea type="text" name="jobapp_jd" class="form-control" id="jobapp_jd"> </textarea>
							<label for="jobapp_jd">(OR paste the links)</label>
							<textarea type="text" name="jobapp_jd_links" class="form-control" id="jobapp_jd_links"> </textarea>
						</div>
                                                
                                                
						<div class="form-group">
							<label for="applicant_resume">Attach Resume
								<span class="sjb-required required">*</span></label>

							<!--div class="file"><span>No file chosen</span>
								<div>Browse</div>
                                                                
								<input type="file" name="applicant_resume" id="applicant_resume" value="736dd0cfc9e1a650040b17fdc417c71e" class="sjb-attachment form-control " required="required" size="50" style="opacity: 0;">
							</div><span class="sjb-invalid-attachment validity-note" id="file-error-message"></span></div-->
                                                        <!--div> <input id="applicant_resume" name="applicant_resume" type="text" value="736dd0cfc9e1a650040b17fdc417c71e" > </div-->
						
						<div class="form-group">
							<label for="applicant_resume">Would you like to submit resume to recruitement firm?</label>
                                                        <label><span class="sjb-required required">*</span></label><br>
							<input type="radio" name="recruit" value="1" checked="checked"> Yes<br>
							<input type="radio" name="recruit" value="0"> No<br>
						</div>
						
						<div> <input type="hidden" id="vhphoto" name="vhphoto" type="text" value="736dd0cfc9e1a650040b17fdc417c71e" > </div>
						<div id="">
							<label>Select File</label><br/>
							<input type="file" name="file" id="file" class="sjb-attachment form-control valid" required />
							<input type="hidden" id="filename" name="filename" type="text" value="736dd0cfc9e1a650040b17fdc417c71e">
							<!--input type="submit" value="Upload" class="submit" /-->
						</div>
						
						
						<div class="form-group" id="sjb-form-padding-button">
							<button class="btn btn-primary app-submit">Submit</button>
							<!--input type="submit" id=""/-->
						</div>
					</div>    
				</div>
			</form>

		</div>
	</div>
</div>
</body>
</html>