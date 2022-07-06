<?php $this->extend('layout/templates'); ?>
   
<?php $this->section('content'); ?> 

    <!-- contact start -->
    <main class="page landing-page">
         <section class="clean-block clean-form dark" id="content">
            <div class="container">
                <div class="block-heading">
                    <div id="contact">
                    <h2 id="purple">Contact Us</h2>
                    <p>Media Information Center</p>
                    <p>Jl. Margonda Raya 100, Depok</p>
                    <p>West Java, INDONESIA - 16424</p>
                    <p>+62 - 21 - 78881112 ext. 234</p>
                    <p>email : mediacenter [@] gunadarma.ac.id</p>
                    </div>
                </div>
                <form action="/admin/save_contact" method="post">
                    <?php csrf_field(); ?>
                    <div class="mb-3">
                        <label class="form-label" for="name">Name</label>
                        <input class="form-control" type="text" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="subject">Subject</label>
                        <input class="form-control" type="text" id="subject" name="subject" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="email">Email</label>
                        <input class="form-control" type="email" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="message">Message</label>
                        <textarea class="form-control" id="message" name="message" required></textarea>
                    </div>
                    <div class="mb-3">
                        <button class="btn" id="background" type="submit">Send</button>
                    </div>
                </form>
            </div>
        </section>
    </main>
    <!-- contact end -->

<?php $this->endSection(); ?>