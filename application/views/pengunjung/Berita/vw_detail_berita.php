<head>
    <style>
        .zoom-effect:hover {
            -webkit-transform: scale(1.8);
            transform: scale(1.8);
        }
    </style>
</head>
<section id="portofolio">
    <div class="container">
        <?php
        foreach ($berita as $brt) :
        ?>
            <div class="col-sm-4">
                <div class="zoom-effect">
                    <img class="img-responsive mx-auto d-block" src="<?= base_url('assets/img/berita/') . $brt['brt_gambar'] ?>">
                </div>
            </div>
            <div class="col-sm-12 wow fadeInRight">
                <h3 class="column-title"><?= $brt['brt_judul']; ?></h3>
                <span><?= $brt['brt_tgl']; ?></span>
                <p><?= $brt['brt_isi'] ?></p>
            </div>
        <?php
        endforeach;
        ?>
    </div>
    <div class="text-center">
        <a class="btn btn-primary" href="<?= base_url('Berita') ?>">Kembali</a>
    </div>
</section>