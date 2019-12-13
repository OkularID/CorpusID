Note Selasa, 22 Oktober 2019


**Mobile Version**
- Homepage
- About Page
- Team Page
- Investment
- Merger Acquisition
- Business
- Restructuring
- Transaction

- Financial Highlight
- Annual Report
- Factsheet
- Career 
- Career Detail
- Contact

* Header
* Footer
* career popup


<br>
- Halaman website corpus

- 1. Page Home


* 2.1. Page About Corpus 
* 2.2. Page Our Team
* 3.1. Page Investment Banking
* 3.2. Page Business Advisory
* 3.3. Page Transaction Support & Capital Market Advisory
* 3.4. Page Accounting Service
* 3.5. Page Merger Acquisition
* 3.6. Page Financial Restructing Advisory
    
    
    
- 4.1. Page Annual Report
- 4.2. Page Financial Highlight
- 4.2.1. Page Financial Highlight Detail
- 4.3. Page Factsheet
- 5. Page News & Event
- 5.1. Page News & Event Detail
- 6. Page Career
- 6.1. Page Career Form
- 7. Page Contact Us
    
    
- Menu website corpus
    # SOLUTION
        * Investment Banking
        * Business Advisory
        * Transaction Support & Capital Market Advisory
        * Accounting Service
        * Merger Acquisition
        * Financial Restructing Advisory
    # INSIGHTS
        * Annual Report
        * Financial Highlight
        * Factsheet
    # NEWSROOM
    # CAREER
    # ABOUT US
    # CONTACT US

- UPDATE
    * Header
    * Footer
    * Homepage
    * Financial Highlight
    * Financial Highlight Detail
    * News & Events
    * News & Events Detail
    * Factsheet
    1. Konsistensi penamaan halaman
        * ABOUT US 				= About Us
        * ACCOUNTING			= Accounting Service
        * ANNUAL				= Annual Report
        * BUSINESS 				= Business Advisory
        * CAREER 				= Career
        * CAREER_DETAIL			= ditrash dan penggantinya halaman career form
        * CONTACT 				= Contact Us
        * FACT 					= Factsheet
        * HIGHLIGHT 			= Financial Highlight
        * INVESTMENT 			= Investment Banking
        * MERGER 				= Merger Acquisition
        * NEWS 					= News & Event
        * RESTRUCTURING			= Financial Restructing Advisory
        * TEAM 					= Our Team
        * TRANSACTION 			= Transaction Support & Capital Market Advisory
    2. Perubahan style.css: 
```css
b{font-family: "OpenSans Bold";}
    menjadi
b{font-family: "Barlow Bold";}
```

3. Penambahan style.css:
		
```css
.zi-lg-1030{z-index: 1030;}
.h-lg-100{height: 100px !important;}
.home-header{overflow: hidden;height: 100vh;}
.home-updates .homenews-image{
    background-size: cover !important;
    background-repeat: no-repeat !important;
    background-position: center !important;
    width: 100%;
    height: 100%;
  }
  .home-updates .homenews-title{overflow: hidden;height: 55px;}
  .home-updates .homenews-brief{overflow: hidden;height: 210px;}
```
		
- 4. Perubahan style.css dibagian /* Motif */
- 5. Perubahan source code di file front-page dan app.js
- 6. Pembuatan halaman options dan ACF nya untuk media input navigasi dan footer, serta perubahan source code di file header.php dan footer.php
- 7. Penambahan field date pada halaman financial highlight (post type)
- 8. Penghapusan file archive-financial_highlight.php
- 9. Perubahan source code untuk menampilkan data pada halaman detail financial highlight
- 10. Penambahan CPTUI, single page, pagination dan ACF halaman newsroom (File baru: archive-newsroom.php; header-archive.php; single-newsroom.php;)
- 11. Penambahan CPTUI, download, dan ACF halaman factsheet


- Website Corpus
    * Billingual belum ada
    * Page home bagian our video bagaimana cara kerjanya
    * Page home bagian services gambar belum berubah saat di hover
    * Page financial highlight detail tampilan halaman belum sesuai design
    * Page news & event detail tampilan halaman belum sesuai design
    * Page search belum ada
    * Page career bagian tombol di cek lagi
    * Page career form belum ada
    * Page contact bagian form belum cf7, bagian tombol di cek lagi, maps belum slider
    * Cek setiap konten yang ada disetiap halaman, ada yang belum diisi konten nya dan belum ditampilkan datanya pada source code
