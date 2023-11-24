<?= $this->extend('templates/homepage'); ?>

<?= $this->section('page-content'); ?>

<!-- Your HTML content goes here -->
<div class="container">
    <div class="main-offer ">
        <div class="main-textoffer">
            <div class="main-textoffer1">
                <div class="main-authorofaugust">
                    <span class="main-text029">
                        <span>Author of august</span>
                    </span>
                </div>
                <span class="main-text031 H1">
                    <span>Eric-Emanuel Schmitt</span>
                </span>
                <span class="main-text033 bodytext">
                    <span>
                        Eric-Emmanuel Schmitt has been awarded more than 20 literary
                        prizes and distinctions, and in 2001 he received the title
                        of Chevalier des Arts et des Lettres. His books have been
                        translated into over 40 languages.
                    </span>
                </span>
                <button class="main-ghoustbutton" onclick="window.location.href='/login'">
                    <span class="main-text035"><span>View his boooks</span></span>
                </button>
            </div>
            <div class="main-scoll">
                <img src="/img/line61111-8a25.svg" alt="Line61111" class="main-line6" />
                <img src="/img/line71112-3qgw.svg" alt="Line71112" class="main-line7" />
                <img src="/img/line81112-mpev.svg" alt="Line81112" class="main-line8" />
                <img src="/img/line91112-63w.svg" alt="Line91112" class="main-line9" />
            </div>
        </div>
        <div class="main-image">
            <div class="main-book">
                <img src="/img/schmittnocognia3d500pcx11112-r3d-400w.png" alt="SchmittNocognia3D500pcx11112"
                    class="main-schmitt-nocognia3d500pcx1" />
            </div>
            <span class="main-text037 bodytext">
                <span>*within the stock limit</span>
            </span>
        </div>
        <span class="main-text039">
            <span>Autographed books + 30% discount</span>
        </span>
    </div>
</div>

</div>
<?= $this->include('dashboard/map'); ?>


<?= $this->endSection(); ?>