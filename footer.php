        </div>
        <footer class="text-center small py-3">
            copyright &copy; <?= date('Y') ?> | Belajar IT
        </footer>
    </div>
</div>
<script src="<?=asset('theme/assets/js/bootstrap.bundle.min.js')?>" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="<?=asset('theme/assets/js/jquery.3.2.1.min.js')?>"></script>
<!-- Datatables -->
<script src="<?=asset('theme/assets/js/datatables/datatables.min.js')?>"></script>
<script src="<?=asset('theme/assets/js/datatables/datatables.bootstrap5.min.js')?>"></script>
<script src="<?=asset('theme/assets/js/datatables-pagingtype/full_numbers_no_ellipses.js')?>"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
<script>
    try {
        ClassicEditor
                .create( document.querySelector( '.ckeditor' ) )
                .catch( error => {
                    console.error( error );
                } );
    } catch (error) {
        
    }

$('.datatable').DataTable();
</script>
<?php foot_script() ?>
</body>
</html>