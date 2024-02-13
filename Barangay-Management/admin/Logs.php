<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Logs</title>
    <style type="text/css">
        input[type=text]#searchInput:focus {
            box-shadow: inset 0 0 0 ;
            border-radius: unset;
        }
        #Date{
            min-width: 140px;
        }
    </style>
    <?php include 'header.php'; ?>
</head>
<body>
    <?php include 'sidebar.php'; ?>

    <main class="content px-4 pb-3 pt-4">
        <h4 class="text-white">Logs</h4>
        <hr class="text-white">
        <section class="d-flex flex-column row-gap-3 bg-white shadow-sm p-4 rounded">
            <div class="searchContainer d-flex align-items-center border border-1 px-2 rounded-pill">
                <i class="searchIcon fa-solid fa-magnifying-glass px-1"></i>
                <input type="text" name="search" id="searchInput" placeholder="Search by Date and Time" class="form-control border-0">
            </div>
            <table id="userTable" border="1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Log Number</th>
                        <th>Activity</th>
                        <th>Time</th>
                        <th id="Date">Date</th>
                        <th>Performed by</th>
                        
                    </tr>
                </thead>
                <tbody id="tableBody" >
                    
                </tbody>
            </table>
        </section>
    </main>

    <?php include 'footer.php'; ?>
    
    <script type="text/javascript">
        $(document).ready(function(){
            $("#searchInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $.ajax({
                    url: "../controller/logsController.php",
                    type: "POST",
                    data: {search: value},
                    success: function(data) {
                        $("#tableBody").html(data);
                        if (value !== "")  {
                            $('.searchIcon').removeClass('fa-magnifying-glass').addClass('fa-arrow-left-long text-success');
                        }else{
                            $('.searchIcon').addClass('fa-magnifying-glass').removeClass('fa-arrow-left-long text-success');

                        }
                        
                    }
                });
            });

            function table(){
                $.ajax({
                    url: "../controller/logsController.php",
                    type: "POST",
                    success: function(data) {
                        $("#tableBody").html(data);
                    }
                });
            }
            table()

        });
    </script>
</body>
</html>
