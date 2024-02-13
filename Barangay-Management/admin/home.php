<?php //include 'sessionLimit.php' ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <style type="text/css">
        .homeContainer{
            max-height: 75vh !important;
            min-height: 75vh !important;
        }
        .homeContainer .homeLeft,
        .homeContainer .homeRight{
            max-height: 100%;
        }
        .homeContainer .homeLeft{
            min-width: 60% !important;
        }
        .homeContainer .homeRight{
            min-width: 39% !important;
        }
        .homeLeft .Mission,
        .homeLeft .Vision{
            height: 49%;
            position: relative;
            padding-top: 25px;
        }
        .homeRight .Objectives{
            height: 90%;
            padding-top: 25px;
        }
        .homeRight .Objectives p,
        .homeLeft .Mission p,
        .homeLeft .Vision p{
            max-height: 100%;
            min-height: 100%;
            text-indent: 30px;
        }
        .homeRight .Objectives h5,
        .homeLeft .Mission h5,
        .homeLeft .Vision h5{
            top: -10px;
            left: 8px;
            background-color: white;
            position: absolute;
        }
        
        @media (max-width: 767px){
            .homeContainer{
                height: 100vh;
            }
            .homeContainer .homeLeft{
                height: 54% !important;
            }
            .homeContainer .homeRight{
                height: 43% !important;
            }
            .homeRight .Objectives{
                height: 80%;
                padding-top: 25px;
            }
        }
    </style>
    <?php include 'header.php'; ?>
</head>
<body>
    <?php include 'sidebar.php'; ?>

    <main class="content px-4 pb-3 pt-4">
        <h4 class="text-white">Home</h4>
        <hr class="text-white">
        <section class="homeContainer d-flex flex-column flex-md-row justify-content-md-center gap-3">
            
        </section>
        <div class="modal" id="homeModal" tabindex="-1">
          <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content rounded-1">
              <form class="homeForm">
                <div class="modal-header py-2">
                    <h4 class="modal-title">Edit</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body py-3">
                    <input type="hidden" name="id" id="id" value="1" >
                    <input type="text" name="performed" value="<?php echo $admin?>" hidden>
                    <input type="text" name="activity" value="<?php echo $admin?> Update the Mission, Vision and Objectives " hidden>
                    <div>
                      <label class="form-label">Mission:</label>
                      <input type="text" name="mission" id="mission" class="form-control">
                    </div>
                    <div>
                      <label class="form-label">Vision:</label>
                      <input type="text" name="vision" id="vision" class="form-control">
                    </div>
                    <div>
                      <label class="form-label">Objectives:</label>
                      <input type="text" name="objectives" id="objectives" class="form-control">
                    </div>
                </div>
                <div class="modal-footer py-2 d-flex justify-content-end">
                  <button type="button" class="btn btn-secondary btn-sm fw-bold" data-bs-dismiss="modal">Close</button>
                  <input type="submit" name="save" value="Save changes" class="btn btn-sm btn-success fw-bold">
                </div>
              </form>
            </div>
          </div>
        </div>
    </main>
    
</body>
    <?php include 'footer.php' ;?>
</html>

