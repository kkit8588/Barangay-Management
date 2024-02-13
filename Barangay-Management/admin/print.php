
    <style type="text/css">
    	@media print {
        body{
            -webkit-print-color-adjust: exact;
	        }
	    }
	    .tnr{
	    	font-family: 'Times New Roman', Times, serif !important;
	    }
	    .printDiv p{
    		font-family: 'Times New Roman', Times, serif !important;
    		margin: 0 ;
    	}
    	.line {
                border-bottom: 1px solid black;
            }
        .printDiv .headerDiv b{		
        	margin-left: -10px;
        	margin-bottom: -7px;
        }
        .containerDocsRec{
            height: 75vh !important;
        }
        .imgs{
            left: 0;
            top: -12px;
        }

	    

    </style>
            <div class="printDiv d-flex flex-column row-gap-3 mx-3">
            	<div class="headerDiv d-flex flex-column align-items-center position-relative">
            		<img src="../upload/logo.png" width="150" height="150" class="position-absolute imgs ">
            		<p>Republic of the Philippines</p>
            		<p>Province of Marinduque</p>
            		<p>Municipality of Santa Cruz </p>
            		<p class="fs-3 fw-bold fst-italic">Barangay Lusok</p>
            	</div>
            	<hr class="border-3">
            	<div class="w-100">
            		<p class="fs-4 fw-bold text-center">OFFICE OF THE BARANGAY CAPTAIN</p>
            		<p class="fs-2 my-3 fw-bold text-center">BARANGAY CLEARANCE</p>
            		<p class="fs-5 fw-bold mt-5 mb-2">TO WHOM IT MAY CONCERN:</p>
            		<div class="d-flex flex-column row-gap-3 ">
            			<?php 
            			include '../connect.php';
            			if (isset($_GET['value'])) {
            				$id = $_GET['value'];
            			
	            			$fetchData = $conn->query("SELECT * FROM ar_tbl WHERE id='$id'");
	            			$row = $fetchData->fetch_assoc();
	            		}
            			 ?>
	            		<div class="row">
		            		<div class="tnr mt-3 col-sm-auto" style="text-indent: 22px;">This is to certify that</div>
		            		<div class="tnr line mt-auto col-sm-5 text-center "><?php if (isset($_GET['value'])) {
		            			echo $row['Surname']." ".$row['FirstName']." ".$row['MiddleName'];
		            		} ?></div>
		            		<b class="tnr mt-auto fs-5 col-auto">,</b>
		            		<div class="tnr line mt-auto text-center ms-2 col-sm-1"><?php if (isset($_GET['value'])) { echo $row['Age']; }?></div>
		            		<div class="tnr mt-auto col-sm-2">years old,</div>
	            		</div>
	            		<div class="row d-flex row-gap-2">
		            		<div class="tnr line mt-auto text-center ms-3 col-sm-2"><?php if (isset($_GET['value'])) { echo $row['CivilStatus'];} ?></div>
		            		<div class="tnr col-sm-auto d-flex text-wrap">and a resident of Barangay Lusok , Santa Cruz , Marinduque, is known to</div>
		            		<div class="tnr col-sm-auto">be of good moral character and law-abiding citizen in the community.</div>
		            	</div>
		            	<div class="row">
		            		<div class="tnr mt-3 col-sm-auto" style="text-indent: 22px;">To certify further, that he/she has no derogatory and/or criminal records filed in this barangay.</div>
		            	</div>
		            	<div class="row d-flex mt-3 row-gap-2">
		            		<div class="tnr col-sm-auto d-flex" style="text-indent: 22px;"><span class="tnr fw-bold">ISSUED</span><div style="margin-left: -12px;">This</div></div>
		            		<?php 
		            		$currentDay = date('j');;
                			$currentMonth = date('F');
		            		 ?>
		            		
		            		<div class="tnr line text-center ms-2 col-sm-auto"><?php echo $currentDay ?></div>
		            		<div class="tnr col-sm-auto">day of</div>
		            		<div class="tnr line col-sm-3 text-center "><?php echo $currentMonth ?></div>
		            		<b class="tnr fs-5 col-sm-auto">,</b>
		            		<div class="tnr col-sm-auto" >2023 at Barangay Lusok,</div>
		            		<div class="tnr col-sm-auto" >Santa Cruz, Marinduque upon request of the interested party for whatever legal purposes</div>
		            		<div class="tnr col-sm-auto" >it may serve.</div>
		            	</div>
		            	<div class="tnr d-flex flex-column align-items-end me-5">
		            		<b class="tnr offset-sm-">JOEL B. LLORCA</b>
		            		<div class="tnr">Barangay Captain</div>
		            	</div>
		            	<div class="row d-flex">
		            		<div class="tnr col-sm-auto">O.R No.</div>
		            		<div class="tnr line col-sm-2"></div>
		            	</div>
		            	<div class="row d-flex">
		            		<div class="tnr col-sm-auto">Date Issued:</div>
		            		<div class="tnr line col-sm-2">
		            			<?php 
		            			$currentDate= date('F y, d'); 
		            			echo $currentDate;
		            			?>
		            		</div>
		            	</div>
		            	<div class="row d-flex">
		            		<div class="tnr col-sm-auto">Doc. Stamp:</div>
		            		<div class="tnr col-sm-2">Paid</div>
		            	</div>
		            	<a href='readytoprint.php?id=<?php echo $row['id'] ?>' target='_blank' class='btn btn-sm btn-success fw-bold ms-auto col-sm-2'><i class="fa-solid fa-print me-1"></i>Print</a>
	            	</div>
            	</div>

                
            </div>

