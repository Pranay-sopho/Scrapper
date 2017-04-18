<div class="url-form">
    <form id="ip">
        <input class="col-lg-3 col-lg-offset-3" type="text" name="url" placeholder="Enter Url..." id="url" required/>
        <img id="loader" class="col-lg-2" src="loader.gif" alt="Scrapping Data ...">
        <a id="result" href="display.php">Show data</a>
    </form>
    <div class="container">
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
            
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Error!!!</h4>
                    </div>
                    <div class="modal-body">
                        <p>Enter Valid Url</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
              
            </div>
        </div>
    </div>
</div>