<?= $this->Html->css('Forum.forum-style.css?'.rand(1, 1000000)) ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.5.3/tinymce.min.js"></script>
<div class="container">
    <div class="mt10">
        <div class="row mt20">
            <div class="col-md-12">
                <form action="" method="post">
                    <?= @$this->Session->flash(); ?>
                    <input name="data[_Token][key]" value="<?= $csrfToken ?>" type="hidden" />
                    <div class="form-group mt20">
                        <input type="text" name="recipient" class="form-control" placeholder="Destintaire (séparé ar une virgule)" />
                    </div>
                    <div class="form-group mt20">
                        <input type="text" name="title" class="form-control" placeholder="Sujet" />
                    </div>
                    <div class="form-group mt20">
                        <script type="text/javascript">
                            tinymce.init({
                                external_plugins: {
                                    "emoticons": "/forum/js/plugins/emoticons/plugin.min.js"
                                },
                                selector: "textarea",
                                height : 200,
                                width : '100%',
                                menubar: false,
                                plugins: "textcolor table code image link contextmenu emoticons",
                                toolbar: "fontselect fontsizeselect | styleselect | insert | bold italic underline strikethrough | forecolor backcolort | alignleft aligncenter alignright alignjustifyt | cut copy paste | bullist numlist outdent | emoticons indent blockquote code table"
                            });
                        </script>
                        <textarea id="editor" name="content" cols="30" rows="7"></textarea>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn-theme">Envoyer on message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>