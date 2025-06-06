 <?php
    // Projetos 
    $projetos = [
        [
            "titulo" => "Visão Computacional aplicado a agricultura.",
            "finalizado" => true,
            "ano" => 2025,
            "desc" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptate corporis enim labore eum quaerat nulla voluptas earum, error excepturi accusamus impedit dignissimos totam dolorum neque architecto qui amet obcaecati ea.",
            "stack" => ["Python", "OpenCV", "Colab"],
            "img" => ""
        ],
        [
            "titulo" => "Pr3VIA: Startup de impulso em Visão Computacional.",
            "finalizado" => false,
            "ano" => 2024,
            "desc" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptate corporis enim labore eum quaerat nulla voluptas earum, error excepturi accusamus impedit dignissimos totam dolorum neque architecto qui amet obcaecati ea.",
            "stack" => ["React", "Flask", "Python", "PowerBI"],
            "img" => ""
        ],
        [
            "titulo" => "Eletromagnetismo aplicado a área da saúde.",
            "finalizado" => true,
            "ano" => 2023,
            "desc" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptate corporis enim labore eum quaerat nulla voluptas earum, error excepturi accusamus impedit dignissimos totam dolorum neque architecto qui amet obcaecati ea.",
            "stack" => ["JS", "Python", "SQL", "NodeJS"],
            "img" => ""
        ],
        [
            "titulo" => "Atividade inteligente com IA.",
            "finalizado" => false,
            "ano" => 2022,
            "desc" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptate corporis enim labore eum quaerat nulla voluptas earum, error excepturi accusamus impedit dignissimos totam dolorum neque architecto qui amet obcaecati ea.",
            "stack" => ["Python", "OpenCV", "Colab", "Google Sheets"],
            "img" => ""
        ]
    ];
    ?>

 <!-- Projetos -->
 <section class="space-y-3 py-6">
     <!-- Aqui vai ter uma lista de projetos -->
     <h2 class="text-2xl font-bold">Projetos Desenvolvidos</h2>
     <?php foreach ($projetos as $projeto) :; ?>
         <div class="bg-[#2d182a] rounded-lg p-3 flex items-center">
             <div class="w-1/5 flex items-center justify-middle">
                 <img src="<?= $projeto['img'] ?>" class="h-10">
             </div>
             <div class="w-4/5 space-y-3 space-x-3">
                 <div class="flex flex-col sm:flex-row sm:justify-between gap-y-2">
                     <h3 class="font-semibold text-xl">
                         📋<?= $projeto['titulo'] ?>
                     </h3>
                     <div class="flex flex-wrap gap-2">
                        <?php 
                            $cores =  ['fuchsia','lime','sky','violet','teal','amber'];
                            foreach ($projeto['stack'] as $posicao => $tecnologia) : ?>
                         <span class="bg-<?=$cores[$posicao]?>-500  text-<?=$cores[$posicao]?>-900 rounded-md px-2 py-1 font-semibold">
                            <?=$tecnologia?>
                         </span>
                        <?php endforeach; ?>
                     </div>
                 </div>
                 <p class="text-justify">
                    <?=$projeto['desc']?>
                 </p>
                 <span class="text-xs text-gray-500 italic">
                    <?php echo $projeto['finalizado'] ? '✅ Finalizado.': '❌ Não Finalizado.' ;?>
                </span>
             </div>
         </div>
     <?php endforeach; ?>
 </section>