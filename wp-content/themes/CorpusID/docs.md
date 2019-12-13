# Membuat Website Dengan Wordpress

## A.	Setting Website

1.	Buat tampilan front-end project.
2.	Download wordpress terbaru `https://id.wordpress.org/download/` .
3.	Extract wordpress.zip pada folder `htdocs`.
4.	Ubah nama folder wordpress dengan nama project.
5.	Aktifkan xampp/wampp, lalu masuk ke `http://localhost/phpmyadmin/` pada browser.
6.	Buat database untuk project.
7.	Buka project pada browser, ex: `http://localhost/jetcommerceold/` .
8.	Akan tampil konfigurasi wordpress, isi konfigurasi sesuai dengan setting `phpmyadmin`.
9.	Setelah itu run the installation, akan tampil jendela informasi. Untuk bagian Search Engine Visibility tidak di checklist. Lalu klik Install Wordpress.
10.	Copy folder front-end project yang sudah dibuat kedalam folder `htdocs` `>` `folder project` `>` `wp-content` `>` `themes`.
11.	Buat file `index.php`, biarkan kosong tanpa ada source code.
12.	Buat file `style.css`, biarkan kosong tanpa ada source code.
13.	Buat file `header.php`, isi file `header.php` dengan `header` dan `navbar` yang terdapat pada tampilan `index.html` front-end. 
Tambahkan source code `<?php bloginfo('stylesheet_directory');?>/` pada setiap link `css`, `javascript`, dan image. 
Dan tambahkan source code `<?php wp_head(); ?>` diatas code `</head>`.
14.	Buat file footer.php, isi file footer.php dengan footer dan script link yang terdapat pada tampilan index.html front-end. 
Tambahkan source code `<?php bloginfo('stylesheet_directory');?>/` pada setiap link css, javascript, dan image. 
Dan tambahkan source code `<?php wp_footer(); ?>` diatas code `</body>`.
15.	Buat file `functions.php`, isi file `function.php` dengan file `function.php` yang sudah pernah dibuat pada project sebelumnya.
16.	Buat file `front-page.php`, isi file function seperti berikut :

```php
<?php get_header(''); ?>
<?php while ( have_posts() ) : the_post(); ?>

<?php endwhile; ?>
<?php get_footer(); ?>
```

17.	Setelah seluruh file sudah dibuat, buka `http://localhost/jetcommerceold/admin` pada browser. 
Login `wp-admin`, lalu klik menu `Appearance`. Aktifkan tema project yang sudah dibuat.
18.	Kembali ke text editor, pada file front-page.php isi konten dengan isi source code file `index.html` pada project front-end. 
Tambahkan source code `<?php bloginfo('stylesheet_directory');?>/` pada setiap link css, javascript, dan image.
19.	Kembali ke wp admin, pada menu Pages buatlah halaman baru dengan nama `Home`. 
20.	Setelah itu pada menu settings klik Reading. Pilih `A static page (select below)`, pada combobox Homepage pilih halaman `Home`. 
Lalu klik Save Changes.
21.	Kembali ke text editor, untuk menambah halaman baru buat file php pada folder `htdocs > folder project > wp-content > themes > folder project`. 
Untuk penamaan file php, harus diawali kata `page-(namahalaman).php`. Setelah itu kembali lagi ke `wp-admin`, 
pada menu Pages buatlah halaman baru dengan nama seperti yang sudah dibuat pada folder project, tetapi tidak menggunakan `page-` dan ektensi `.php`. setelah itu klik publish.

### B. Setting Advanced Custom Field

22.	Buka wp admin, lalu klik menu Plugins.
23.	Aktifkan plugin Akismet Anti-Spam jika plugin tersebut deactive.
24.	Lalu klik `Add New >` klik `Upload Plugin >` Browse file zip ACF (`Advanced Custom Field`) > klik `Install Now`. Lalu aktifkan plugin ACF.
25.	Jika ACF sudah terinstall, klik menu Custom Fields lalu klik Add new. 
26.	Akan tampil halaman Edit Field Group ACF. 
27.	Isi judul ACF, samakan judul dengan nama halaman yang akan digunakan pada menu Pages.
28.	Pada bagian `Location > Rules > Show this field group if`, combobox pertama pilih `Page` untuk ACF halaman, combobox kedua tetap pilih `is equal to`, dan combobox ketiga pilih halaman yang akan digunakan ACF.
29.	Setelah selesai setting Location, pada bagian dibawah Title ACF terdapat 4 field yang digunakan untuk mengkategorikan field ACF yang akan dibuat. Field Order digunakan untuk urutan field ACF. Field Label digunakan untuk penamaan dalam menu Pages wp admin. Field Name digunakan untuk penamaan dalam source code atau sebagai variable penampung data dalam source code. Field Type digunakan untuk jenis field yang akan digunakan.

30.	Isilah field-field yang dibutuhkan dengan klik + Add Field.
31.	Lalu pada bagian Hide On Screen, checklist bagian Content Editor.
32.	Jika semua sudah di set, klik Publish.
33.	Klik menu Pages > klik halaman yang sudah diberi ACF > isi setiap field > klik Update. 
34.	Untuk menampilkan data ACF dari wp admin, buka text editor lalu buka file halaman yang akan digunakan untuk menampilkan data ACF.
35.	Tentukan data yang nantinya akan diganti dengan data dari ACF wp admin.
 
36.	Hapus data yang akan diganti dengan data dari ACF, dan diganti dengan code `<?php the_field('namafield') ?>`
 
 
37.	Ubah semua data menjadi data dari ACF, agar dapat mempermudah saat pengisian konten website.

### C. Setting Custom Post Type UI

38.	Install CPT UI
39.	Pada menu CPT UI, add post type.
40.	Field Post Type Slug, Plural Label, Singular Label diisi huruf kecil semua, satu kata, dan sama semua katanya.
41.	Pada bagian Has Archive, pilih True.
42.	Pada bagian Supports, checklist title, editor, featured image, dan custom fields.
43.	Built-in Taxonomies, checklist Tag (wp core).
44.	Posting sesuatu didalam menu post type yang sudah dibuat.
45.	Untuk menampilkan CPT UI
 
46.	Untuk membuat single post type, buat file php dengan struktur `single-(namapage).php`.
 
### D.	Create Pagination Custom Post Type UI

1. Ke menu CPTUI, pilih menu "View post type", pilih post type yang diinginkan, lalu klik get code
2. Copy source code yang ada di kolom pertama, lalu paste di file functions.php
3. Tambahkan source code berikut untuk pagination
		
```php
add_action( 'pre_get_posts', function ( $q ) {
    if( !is_admin() && $q->is_main_query() && $q->is_post_type_archive( 'update' ) ) {
        $q->set( 'posts_per_page', 5 );
    }
});
 ```

4. Buat file header-archive.php. samakan source code nya dengan header sebelumnya. title diubah menjadi source code berikut
    `<title><?php wp_title('', true, 'right') ?> | <?php bloginfo('title');?></title>`
5. Buat file archive-(namaposttype).php dengan source get header seperti berikut.
    `<?php get_header('archive'); ?>`
6. Tambahkan source code berikut untuk pagination.

```php
<div class="col-lg-12">
    <?php
      $paged = get_query_var('paged') ? get_query_var('paged') : 1;
      $params = array('post_type' => 'update' , 'order' => 'DESC', 'post_status' => 'publish', 'posts_per_page' => 5, 'paged' => $paged);
      $news = new WP_Query($params);
        if($news->have_posts()){
        while ($news->have_posts()) : $news->the_post();
    ?>
        <div class="container-fluid news-item pt-lg-50 pb-lg-50 pl-lg-100 pr-lg-100 pl-mp-10 pr-mp-10">
            <div class="row">
                <div class="col-lg-4 text-center">
                    <div class="img-circle w-lg-250x h-lg-250x w-200x h-200x" style="background-image: url('<?php the_field('image') ?>');"></div>
                </div>
                <div class="col-lg-8 pr-lg-0 pl-15 pr-15">
                    <h4 class="font-montserratbold mb-lg-10 pt-lg-20 font-pink font-bold"><?php the_title() ?></h4>
                    <h5 class="font-montserratbold mb-lg-40 font-purple font-bold"><?php the_date(); ?></h5>
                    <?php echo wp_trim_words( get_field('description'), 50, ' ...' ); ?> <a class="font-pink" href="<?php echo get_permalink(); ?>"><i>read more</i></a></p>
                </div>
            </div>
        </div>
    <?php  endwhile;} ?>
</div>
<div class="col-md-12 page">
    <?php       
        echo paginate_links( array(
                        'current' => max( 1, get_query_var('paged') ),
                        'prev_next' => True,
                        'prev_text' => __( '<< Previous' ),
                        'next_text' => __( 'Next >>' )
        ));
    ?>
</div>

```


Repeater Example:

```php
<!-- repeater -->
    <?php if(have_rows('repeater_name')): ?>
        <?php while (have_rows('repeater_name')): the_row(); ?>
            <tr>
                <td>
                    <img class="img-fluid w-lg-90" src="<?php the_sub_field('field_name');?>"/>
                </td>
                <td>
                    <h5 class="font-white"><?php the_sub_field('field_name');?></h5>
                    <p class="font-white"><?php the_sub_field('field_name');?></p>
                </td>
            </tr>
        <?php endwhile; ?>
    <?php endif; ?>
```