            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2020 &copy; I-PA</p>
                    </div>
                    <div class="float-end">
                        
                    </div>
                </div>
            </footer>
        </div>
    </div>


    


    <script src="<?=base_url("assets/template1/jquery.js")?>"></script>
    <script src="<?=base_url("assets/template1/jqueryDataTables.min.js")?>"></script>
    <script src="<?=base_url("assets/template1/dataTables.bootstrap5.min.js")?>"></script>

    <script src="<?=base_url("assets/template1/mazer-dist/vendors/perfect-scrollbar/perfect-scrollbar.min.js")?>"></script>
    <script src="<?=base_url("assets/template1/mazer-dist/js/bootstrap.bundle.min.js")?>"></script>

    <!-- <script src="<?=base_url("assets/template1/mazer-dist/vendors/apexcharts/apexcharts.js")?>"></script> -->
    <script src="<?=base_url("assets/template1/mazer-dist/js/pages/dashboard.js")?>"></script>

    <script src="<?=base_url("assets/template1/mazer-dist/js/main.js")?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    

    <script>
        $(document).ready(function() {
            $('.data-table').DataTable();
        } );
    	$("select").select2({
            theme: "bootstrap-5",
        });
    </script>
</body>

</html>