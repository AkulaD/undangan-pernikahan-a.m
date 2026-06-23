<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Undangan Pernikahan</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="data/style.css">
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js" defer></script>
    <script src="data/script.js" defer></script>
</head>
<body>
    <div id="loader" class="vh-100 w-100 bg-white position-fixed top-0 start-0 d-flex justify-content-center align-items-center">
        <h1 class="font-dancing primary-text am-pulse" style="font-size: 6rem;">AM</h1>
    </div>

    <audio id="bg-music" loop>
        <source src="data/song.m4a" type="audio/mpeg">
    </audio>

    <button id="music-control" class="btn btn-custom rounded-circle position-fixed shadow d-none">
        <i id="music-icon" class="bi bi-music-note-beamed fs-5"></i>
    </button>

    <div class="container-fluid vh-100 p-0">
        <div id="welcome-screen" class="row g-0 h-100">
            <div class="d-none d-lg-flex col-lg-7 bg-image position-relative align-items-center">
                <div class="overlay position-absolute top-0 start-0 w-100 h-100"></div>
                <div class="content position-relative text-white p-5 w-100">
                    <div class="brand-logo dark mb-4">AM</div>
                    <p class="subtitle mb-2">THE WEDDING OF</p>
                    <h1 class="title mb-4">Adjie & Mutia</h1>
                    <p class="quote">"Di antara tanda-tanda (kebesaran)-Nya ialah bahwa Dia menciptakan pasangan-pasangan untukmu dari (jenis) dirimu sendiri agar kamu merasa tenteram kepadanya."</p>
                    <p class="quote-source">(QS. Ar-Rum: 21)</p>
                </div>
            </div>
            
            <div id="opening" class="col-lg-5 d-flex flex-column justify-content-center align-items-center p-5 position-relative">
                <div class="overlay position-absolute top-0 start-0 w-100 h-100" style="background: rgba(255, 255, 255, 0.5);"></div>
                <div class="content position-relative w-100 h-100 d-flex flex-column justify-content-center align-items-center">
                    <div class="text-center mt-5 mb-auto">
                        <p class="subtitle dark mb-2">THE WEDDING OF</p>
                        <h1 class="title dark">Adjie & Mutia</h1>
                        <p class="dark subtitle mb-3 fw-bold">04 Juli 2026</p>
                    </div>
                    <div class="action-area text-center mt-auto">
                        <div class="text-white mb-4">
                            <p style="color: #000;" class="mb-0">Kepada Yth</p>
                            <p style="color: #000;" class="mb-0">Bapak/Ibu/Saudara/i</p>
                            <p style="font-size: 1.4rem; font-weight: 600; color: #000; text-spacing-trim: normal;" class="subtitle"><?php echo isset($_GET['name']) ? htmlspecialchars($_GET['name']) : 'Tamu Undangan'; ?></p>
                        </div>
                        <button id="btn-buka" class="btn btn-custom rounded-pill px-4 py-2 d-inline-flex align-items-center gap-2">
                            <i class="bi bi-envelope-paper-fill"></i> Buka Undangan
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div id="main-content" class="row g-0 h-100 d-none">
            <div class="d-none d-lg-flex col-lg-7 bg-image position-fixed h-100 start-0 align-items-center justify-content-center text-center">
                <div class="overlay position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.7));"></div>
                <div class="content position-relative text-white p-5 w-100 d-flex flex-column align-items-center">
                    <div class="brand-logo mb-4" style="color: #ffffff; font-size: 2rem; border: 1px solid #fff; padding: 8px 16px; border-radius: 4px; letter-spacing: 2px;">AM</div>
                    <p class="mb-2 text-uppercase" style="letter-spacing: 4px; font-size: 0.9rem; opacity: 0.9;">The Wedding Of</p>
                    <h1 class="font-dancing mb-4" style="font-size: 5.5rem; text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">Adjie & Mutia</h1>
                    <div style="width: 60px; border-bottom: 2px solid #ffffff; margin-bottom: 1.5rem; opacity: 0.8;"></div>
                    <p class="mb-0 fw-bold" style="letter-spacing: 3px; font-size: 1.1rem;">04 Juli 2026</p>
                </div>
            </div>
            
            <div class="col-lg-5 offset-lg-7 scroll-container p-0">
                <section id="slide-1" class="slide-section bg-white p-5 d-flex flex-column position-relative text-center">
                    <div class="overlay position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0, 0, 0, 0.4);"></div>
                    
                    <div class="content position-relative z-1 w-100 d-flex flex-column flex-grow-1">
                        <div class="my-auto">
                            <p class="subtitle white mb-0">THE WEDDING OF</p>
                            <h2 class="title white mb-2" style="font-size: 3rem;">Adjie & Mutia</h2>
                            <p class="line-mid-dot subtitle white mb-4 fw-bold">04 Juli 2026</p>
                        </div>
                        
                        <div class="mt-auto">
                            <p class="mb-0 text-white px-lg-4" style="line-height: 1.8; font-size: 0.7rem;">
                                Di antara tanda-tanda (kebesaran)-Nya ialah bahwa Dia menciptakan pasangan-pasangan untukmu dari (jenis) dirimu sendiri agar kamu merasa tenteram kepadanya. Dia menjadikan di antaramu rasa cinta dan kasih sayang. Sesungguhnya pada yang demikian itu benar-benar terdapat tanda-tanda (kebesaran Allah) bagi kaum yang berpikir.
                            </p>
                            <p class="mt-3 mb-4 small text-white-50 fw-light" style="font-size: 0.7rem;">(QS. Ar-Rum: 21)</p>
                            <i class="bi bi-chevron-down text-white fs-3 am-bounce d-inline-block"></i>
                        </div>
                    </div>
                </section>

                <section id="slide-2" class="slide-section bg-light p-5 d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="my-auto">
                        <p class="subtitle dark mb-3">Assalamu'alaikum Warahmatullahi Wabarakatuh</p>
                        <p class="dark mb-4 px-lg-4" style="line-height: 1.8;">
                            Atas izin dan rahmat Allah SWT, kami bermaksud mengundang Bapak/Ibu/Saudara/i untuk hadir dan memberikan doa restu pada acara pernikahan kami.
                        </p>
                    </div>
                    <div class="mt-4">
                        <h2 class="title dark mb-0" style="font-size: 1.8rem;">Setiadjie Bhaskara S.Kom</h2>
                        <h2 class="title dark mb-0 text-center" style="font-size: 1.4rem;">&</h2>
                        <h2 class="title dark mb-3" style="font-size: 1.8rem;">Mutia Salsa Ramadhani</h2>
                    </div>
                    <div class="mt-auto">
                        <p class="subtitle dark mb-3" style="font-size: 0.5rem;">2020 - Pertama Bertemu, 2026 - Mengikat Janji</p>
                    </div>
                    <i class="bi bi-chevron-down primary-text fs-3 mt-5 am-bounce d-inline-block"></i>
                </section>

                <section id="slide-3" class="slide-section p-4 d-flex flex-column position-relative text-center align-items-center">
                    <div class="overlay position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0, 0, 0, 0.6);"></div>
                    
                    <div class="content-wrapper position-relative w-100 h-100 d-flex flex-column align-items-center pt-5 pb-5 hide-scrollbar" style="z-index: 2; overflow-y: auto; max-width: 600px; margin: 0 auto;">
                        
                        <h2 class="font-dancing text-white mb-4" style="font-size: 3rem;">Our Love Story</h2>
                        
                        <div class="text-white px-2" style="font-family: 'Inter', sans-serif; font-size: 0.85rem; line-height: 1.6;">
                            
                            <div class="mb-4">
                                <h6 class="fw-bold mb-1" style="letter-spacing: 2px;">PERTEMUAN</h6>
                                <span class="fst-italic d-block mb-2" style="color: #d1d1d1; font-size: 0.75rem;">Juli 2020</span>
                                <p>Allah mempertemukan kami saat menjalani pekerjaan di kantor yang sama. Berada dalam lingkungan yang sama membuat kami perlahan saling mengenal, berbagi cerita, dan menghabiskan waktu bersama sebagai sahabat. Dari kebersamaan itulah tumbuh rasa kagum, nyaman, dan kasih sayang yang menjadi awal dari kisah cinta kami.</p>
                            </div>

                            <div class="line-dot mb-4" style="opacity: 0.5;"></div>

                            <div class="mb-4">
                                <h6 class="fw-bold mb-1" style="letter-spacing: 2px;">KOMITMEN</h6>
                                <span class="fst-italic d-block mb-2" style="color: #d1d1d1; font-size: 0.75rem;">November 2025</span>
                                <p>Perjalanan kami tidak selalu berjalan mulus. Kami pernah memilih untuk berpisah dan menempuh jalan masing-masing. Namun, atas kehendak-Nya, takdir mempertemukan kami kembali pada titik yang sama. Dengan keyakinan yang semakin kuat, kami memutuskan untuk melangkah lebih serius dan memohon restu dari kedua orang tua serta keluarga tercinta.</p>
                            </div>

                            <div class="line-dot mb-4" style="opacity: 0.5;"></div>

                            <div class="mb-4">
                                <h6 class="fw-bold mb-1" style="letter-spacing: 2px;">LAMARAN</h6>
                                <span class="fst-italic d-block mb-2" style="color: #d1d1d1; font-size: 0.75rem;">Maret 2026</span>
                                <p>Atas izin Allah SWT, di hadapan keluarga dan orang-orang terkasih, terucap niat baik untuk melangkah menuju jenjang yang lebih sakral. Lamaran ini bukan hanya tentang sebuah cincin atau sebuah acara, melainkan tentang dua hati yang bersepakat untuk saling menjaga, memahami, mendukung, dan bertumbuh bersama dalam ikatan yang penuh cinta dan keberkahan.</p>
                            </div>

                            <div class="line-dot mb-4" style="opacity: 0.5;"></div>

                            <div class="mb-4">
                                <h6 class="fw-bold mb-1" style="letter-spacing: 2px;">AKAD & RESEPSI</h6>
                                <span class="fst-italic d-block mb-2" style="color: #d1d1d1; font-size: 0.75rem;">Juli 2026</span>
                                <p>Setelah melalui perjalanan yang penuh makna, kami menetapkan tanggal pernikahan yang Insya Allah akan dilaksanakan pada 4 Juli 2026. Hari tersebut akan menjadi awal dari perjalanan baru kami sebagai pasangan suami istri, menjalani kehidupan bersama dalam suka maupun duka, serta membangun keluarga yang sakinah, mawaddah, dan warahmah.</p>
                            </div>

                            <div class="line-dot mb-3" style="opacity: 0.5;"></div>
                            <p>Dengan penuh rasa syukur, kami memohon doa dan restu dari Orang Tua, Keluarga, Sahabat, serta seluruh Kerabat agar perjalanan rumah tangga yang akan kami jalani senantiasa diberikan keberkahan, kebahagiaan, dan lindungan dari Allah SWT</p>
                        </div>
                    </div>
                    
                    <i class="bi bi-chevron-down text-white fs-3 am-bounce position-absolute" style="bottom: 15px; z-index: 3;"></i>
                </section>

                <section id="slide-4" class="slide-section p-5 d-flex flex-column position-relative align-items-center justify-content-center text-center">
                    <div class="overlay position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0, 0, 0, 0.5);"></div>
                    
                    <div class="position-relative z-1 mb-4 mt-auto">
                        <h2 class="text-white mb-0" style="font-size: 3rem; letter-spacing: 2px;">Wedding</h2>
                        <h3 class="font-dancing text-white" style="font-size: 3.5rem; margin-top: -25px; transform: rotate(-5deg);">Event</h3>
                    </div>

                    <div class="gallery-wrapper position-relative z-1 mb-5 d-flex align-items-center justify-content-center">
                        <div class="gallery-item gallery-side">
                            <img src="data/img/2.png" alt="Foto Kiri">
                        </div>
                        
                        <div class="gallery-item gallery-center mx-2 mx-md-3">
                            <img src="data/img/1.jpg" alt="Foto Tengah">
                        </div>
                        
                        <div class="gallery-item gallery-side">
                            <img src="data/img/3.png" alt="Foto Kanan">
                        </div>
                    </div>

                    <div id="countdown" class="d-flex justify-content-center gap-3 gap-md-4 text-white position-relative z-1 mb-5">
                        <div class="countdown-item">
                            <h3 id="hari" class="mb-0" style="font-family: serif; font-size: 2.5rem;">00</h3>
                            <span class="small">Hari</span>
                        </div>
                        <div class="countdown-item">
                            <h3 id="jam" class="mb-0" style="font-family: serif; font-size: 2.5rem;">00</h3>
                            <span class="small">Jam</span>
                        </div>
                        <div class="countdown-item">
                            <h3 id="menit" class="mb-0" style="font-family: serif; font-size: 2.5rem;">00</h3>
                            <span class="small">Menit</span>
                        </div>
                        <div class="countdown-item">
                            <h3 id="detik" class="mb-0" style="font-family: serif; font-size: 2.5rem;">00</h3>
                            <span class="small">Detik</span>
                        </div>
                    </div>

                    <i class="bi bi-chevron-down text-white fs-3 mt-auto am-bounce d-inline-block position-relative z-1"></i>
                </section>

                <section id="slide-5" class="slide-section position-relative p-4 d-flex flex-column align-items-center justify-content-center text-center" style="background-color: #f8f9fa;">
                    <div class="w-100 pb-5 hide-scrollbar" style="max-width: 420px; overflow-y: auto; max-height: 100vh; padding: 20px 0;">
                        
                        <div class="card mb-4 mx-auto bg-white" style="border: 1px solid #2c2c2c; border-radius: 0; box-shadow: none;">
                            <div class="card-body" style="padding: 3rem 1.5rem;">
                                <h3 class="font-dancing mb-4 primary-text" style="font-size: 2.8rem;">Akad Nikah</h3>
                                <p class="mb-1 text-dark fw-bold text-uppercase" style="font-size: 1rem; letter-spacing: 2px;">Sabtu, 04 Juli 2026</p>
                                <p class="mb-4 text-dark" style="font-size: 1rem; letter-spacing: 1px;">09.00 WIB</p>
                                
                                <div class="mb-4">
                                    <p class="mb-1 text-dark fw-bold" style="font-size: 0.85rem;">Kediaman Mempelai Wanita</p>
                                    <p class="mb-0 text-muted" style="font-size: 0.75rem; line-height: 1.6;">Jalan Karyawan III Gang Kenanga IV, RT 02 / RW 09,<br>Karang Tengah, Kota Tangerang Selatan</p>
                                </div>
                                
                                <a href="https://maps.app.goo.gl/q3cjoymZaY48wwB99" target="_blank" class="btn btn-outline-dark rounded-0 px-4 py-2 mt-2 transition" style="font-size: 0.8rem; letter-spacing: 1px;">
                                    <i class="bi bi-geo-alt-fill me-2"></i> Lokasi Acara
                                </a>
                            </div>
                        </div>

                        <div class="card mb-5 mx-auto bg-white" style="border: 1px solid #2c2c2c; border-radius: 0; box-shadow: none;">
                            <div class="card-body" style="padding: 3rem 1.5rem;">
                                <h3 class="font-dancing mb-4 primary-text" style="font-size: 2.8rem;">Resepsi</h3>
                                <p class="mb-1 text-dark fw-bold text-uppercase" style="font-size: 1rem; letter-spacing: 2px;">Sabtu, 04 Juli 2026</p>
                                <p class="mb-4 text-dark" style="font-size: 1rem; letter-spacing: 1px;">11.00 WIB - Selesai</p>
                                
                                <div class="mb-4">
                                    <p class="mb-1 text-dark fw-bold" style="font-size: 0.85rem;">Kediaman Mempelai Wanita</p>
                                    <p class="mb-0 text-muted" style="font-size: 0.75rem; line-height: 1.6;">Jalan Karyawan III Gang Kenanga IV, RT 02 / RW 09,<br>Karang Tengah, Kota Tangerang Selatan</p>
                                </div>
                                
                                <a href="https://maps.app.goo.gl/q3cjoymZaY48wwB99" target="_blank" class="btn btn-outline-dark rounded-0 px-4 py-2 mt-2 transition" style="font-size: 0.8rem; letter-spacing: 1px;">
                                    <i class="bi bi-geo-alt-fill me-2"></i> Lokasi Acara
                                </a>
                            </div>
                        </div>

                        <div class="mt-5 pt-4" style="border-top: 1px solid #ddd;">
                            <h3 class="primary-text mb-3" style="letter-spacing: 4px; font-size: 1.1rem; text-transform: uppercase;">Kirim Hadiah</h3>
                            <p class="text-dark mb-4 px-2" style="font-size: 0.9rem; line-height: 1.6;">Doa restu Anda merupakan karunia terindah, namun jika ingin memberikan tanda kasih, Anda dapat mengirimkannya melalui tombol di bawah ini:</p>
                            
                            <button class="btn btn-custom rounded-pill px-4 py-2 shadow-sm" type="button" data-bs-toggle="collapse" data-bs-target="#giftCollapse" aria-expanded="false" aria-controls="giftCollapse">
                                <i class="bi bi-gift-fill me-2"></i> Kirim Hadiah
                            </button>

                            <div class="collapse mt-4" id="giftCollapse">
                                
                                <div class="card mb-3 text-start text-white mx-auto shadow" style="background-color: var(--primary-blue); border-radius: 15px; border: none; max-width: 320px;">
                                    <div class="card-body position-relative p-4">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span class="fst-italic fw-bold" style="letter-spacing: 2px;">PASPOR</span>
                                        <span class="fw-bold fs-5">BCA</span>
                                    </div>
                                    <p class="mb-1" style="font-size: 0.7rem; opacity: 0.7;">debit</p>
                                    <p class="font-monospace fs-5 mb-4" style="letter-spacing: 3px;">6044 1406 29</p>
                                    <p class="mb-0" style="font-size: 0.6rem; opacity: 0.7;">CARDHOLDER</p>
                                    <div class="d-flex justify-content-between align-items-end">
                                        <p class="mb-0 fw-bold" style="letter-spacing: 1px;">SETIADJIE BHASKARA</p>
                                        <div style="width: 20px; height: 20px; background-color: #d4af37; border-radius: 50%;"></div>
                                    </div>
                                    </div>
                                </div>
                                <button id="btn-copy-1" class="btn btn-light btn-sm rounded-pill border px-3 py-1 mb-4" onclick="copyText('6044140629', 'btn-copy-1')" style="font-size: 0.8rem;">
                                    <i class="bi bi-clipboard me-1"></i> Salin Nomor Rekening
                                </button>

                                <div class="card mb-3 text-start text-white mx-auto shadow" style="background-color: var(--primary-blue); border-radius: 15px; border: none; max-width: 320px;">
                                    <div class="card-body position-relative p-4">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span class="fst-italic fw-bold" style="letter-spacing: 2px;">PASPOR</span>
                                        <span class="fw-bold fs-5">BCA</span>
                                    </div>
                                    <p class="mb-1" style="font-size: 0.7rem; opacity: 0.7;">debit</p>
                                    <p class="font-monospace fs-5 mb-4" style="letter-spacing: 3px;">3452 838 971</p>
                                    <p class="mb-0" style="font-size: 0.6rem; opacity: 0.7;">CARDHOLDER</p>
                                    <div class="d-flex justify-content-between align-items-end">
                                        <p class="mb-0 fw-bold" style="letter-spacing: 1px;">MUTIA SALSA RAMADHANI</p>
                                        <div style="width: 20px; height: 20px; background-color: #d4af37; border-radius: 50%;"></div>
                                    </div>
                                    </div>
                                </div>
                                <button id="btn-copy-2" class="btn btn-light btn-sm rounded-pill border px-3 py-1 mb-4" onclick="copyText('3452838971', 'btn-copy-2')" style="font-size: 0.8rem;">
                                    <i class="bi bi-clipboard me-1"></i> Salin Nomor Rekening
                                </button>

                                <div class="card mt-2 mb-3 border-0 shadow-sm mx-auto" style="background-color: #ffffff; border-radius: 15px; max-width: 320px;">
                                    <div class="card-body p-4">
                                        <i class="bi bi-box2-heart fs-1 primary-text mb-2 d-block"></i>
                                        <h6 class="fw-bold mb-3" style="letter-spacing: 1px;">Kirim Kado Fisik</h6>
                                        <p class="text-muted mb-0" style="font-size: 0.85rem; line-height: 1.6;">Jalan Karyawan III Gang Nusa Indah I No. 7H, Karang Tengah, KOTA TANGERANG, KARANG TENGAH, BANTEN, ID, 15157</p>
                                    </div>
                                </div>
                                <button id="btn-copy-alamat" class="btn btn-light btn-sm rounded-pill border px-3 py-1 mb-4" onclick="copyText('Jalan Karyawan III Gang Nusa Indah I No. 7H, Karang Tengah, KOTA TANGERANG, KARANG TENGAH, BANTEN, ID, 15157', 'btn-copy-alamat')" style="font-size: 0.8rem;">
                                    <i class="bi bi-clipboard me-1"></i> Salin Alamat
                                </button>

                            </div>
                        </div>

                    </div>

                    <i class="bi bi-chevron-down text-white fs-3 mt-auto am-bounce d-inline-block position-relative z-1"></i>
                </section>

                <section id="slide-6" class="slide-section p-5 d-flex flex-column position-relative align-items-center justify-content-center text-center bg-white">
                    <div class="my-auto w-100" style="max-width: 500px;">
                        <p class="text-muted mb-2 px-2" style="font-size: 0.8rem; line-height: 1.8;">
                            Merupakan suatu kehormatan dan kebahagiaan bagi kami apabila Bapak/Ibu/Saudara/i berkenan hadir dan memberikan doa restu kepada kedua mempelai.
                        </p>
                        
                        <p class="fw-bold mb-5" style="color: #4a5568; letter-spacing: 1px; font-size: 0.7rem;">
                            WASSALAMU'ALAIKUM WARAHMATULLAHI WABARAKATUH
                        </p>
                        
                        <p class="text-muted mb-2" style="font-size: 0.85rem;">Kami yang berbahagia,</p>
                        <h2 class="font-dancing primary-text mb-2" style="font-size: 4rem;">Adjie & Mutia</h2>
                        <p class="text-muted mb-5" style="font-size: 0.8rem;">Beserta Keluarga Besar</p>
                    </div>

                    <div class="mt-auto pt-4 w-100 d-flex flex-column align-items-center">
                        <p class="text-muted fw-medium mb-3 line-footer" style="font-size: 0.55rem;">Terimakasih</p>
                        
                        <div class="d-flex gap-3 justify-content-center mb-4">
                            <a href="#" class="text-secondary fs-4"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="text-secondary fs-4"><i class="bi bi-linkedin"></i></a>
                            <a href="#" class="text-secondary fs-4"><i class="bi bi-github"></i></a>
                            <a href="#" class="text-secondary fs-4"><i class="bi bi-envelope-fill"></i></a>
                        </div>
                        
                        <p class="mb-2 text-muted fw-light" style="letter-spacing: 5px; font-size: 0.7rem; text-transform: lowercase;">
                            shaka-banuasta.my.id
                        </p>
                    </div>
                </section>      
            </div>
        </div>
    </div>
</body>
</html>