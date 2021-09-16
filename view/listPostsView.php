<?php
$title = 'MyApp';
// if (isset($_POST['username']) && !empty($_POST['username'])) {
//     echo $_POST['username'];
// }
ob_start();
?>

<section>
    <div class="fond text-white py-20">
        <div class="container mx-auto flex flex-col md:flex-row my-6 md:my-24">
            <div class="flex flex-col w-full lg:w-1/3 p-8">
                <p class="ml-6 text-yellow-300 text-lg uppercase tracking-loose">L'été n'est pas FINI !</p>
                <p class="text-3xl md:text-5xl my-4 leading-relaxed md:leading-snug">Choisisez votre destination de rêves</p>
                <p class="text-sm md:text-base leading-snug text-gray-50 text-opacity-100">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur porro incidunt excepturi quos quo voluptates nisi eum quia sequi voluptatem esse iusto aliquid nobis, dolore, minus ipsam non. Possimus, quis.
                </p>
            </div>
            <div class="flex flex-col w-full lg:w-2/3 justify-center">
                <div class="container w-full px-4">
                    <div class="flex flex-wrap justify-center">
                        <div class="w-full lg:w-6/12 px-4">
                            <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-white">
                                <div class="flex-auto p-5 lg:p-10">
                                    <h4 class="text-2xl mb-4 text-black font-semibold">Je cherche des disponibilitées</h4>
                                    <form id="feedbackForm" action="" method="">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="email">Email</label><input type="email" name="email" id="email" class="border-0 px-3 py-3 rounded text-sm shadow w-full
                    bg-gray-300 placeholder-black text-gray-800 outline-none focus:bg-gray-400" placeholder=" " style="transition: all 0.15s ease 0s;" required />
                                        </div>
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="message">Message</label><textarea maxlength="300" name="feedback" id="feedback" rows="4" cols="80" class="border-0 px-3 py-3 bg-gray-300 placeholder-black text-gray-800 rounded text-sm shadow focus:outline-none w-full" placeholder="" required></textarea>
                                        </div>
                                        <div class="text-center mt-6">
                                            <button id="feedbackBtn" class="bg-yellow-300 text-black text-center mx-auto active:bg-yellow-400 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1" type="submit" style="transition: all 0.15s ease 0s;">Submit
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<hr>
<div class="container">
    <div class="row">
        <?php foreach ($posts as $data) : ?>
            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title"><?= htmlspecialchars($data['titre']); ?></h5>
                        <h6 class="card-subtitle text-muted">TAGS</h6>
                    </div>
                    <!-- "<img src='../uploads/" . $data'picture_ads' . "'>" ?> -->
                    <a href="<?= $data['image'] ?>"><img src="<?= $data['image'] ?>" alt="pas cher" style="width:100%;height:auto;"></a>
                    <div class="card-body">
                        <p class="card-text"><?= nl2br(htmlspecialchars($data['contenu'])); ?></p>
                    </div>
                    <div class="card-body">
                        <em><a href="/post/<?= $data['id'] ?>">Voir la suite</a></em>
                    </div>
                    <div class="card-footer text-muted">
                        Publié le <?= $data['created_at'] ?>
                    </div>
                    <div class="card-footer text-muted">
                        <!-- Je récupere ma valeur dans la BDD -->
                        Publié par <?php echo $data['username']; ?>

                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>