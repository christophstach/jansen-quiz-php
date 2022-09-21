<?php

$json = base64_decode($_GET["e"]);
$data = json_decode($json);

$categories = [
  (object) [
    "title" => "Spaartipps",
    "advices" => [
      (object) [
        "title" => "Benutze ein Haushaltstagebuch",
        "display" => $data->q3 === "33",
        "icon" =>
          "https://andreasjansen.com/wp-content/uploads/2022/09/IconFinanzauswertung1.png",
        "contentUrl" => "",
        "affiliateUrl" => "",
        "descriptions" => [
          (object) [
            "text" =>
              "Das Wissen über deine Einnahmen und Ausgaben gehört zu den Basics. Du solltest unbedingt ein Haushaltsbuch führen.",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon8.png",
          ],
          (object) [
            "text" =>
              "Lurch TV says:Die besten Tools und Apps zeige ich dir im Blogartikel. Dort findest du auch einige Vorlagen für Excel oder als PDF.",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon9.png",
          ],
        ],
      ],
      (object) [
        "title" => "Benutze ein Haushaltstagebuch",
        "display" => true,
        "icon" =>
          "https://andreasjansen.com/wp-content/uploads/2022/09/IconFinanzauswertung1.png",
        "contentUrl" => "",
        "affiliateUrl" => "",
        "descriptions" => [
          (object) [
            "text" =>
              "Das Wissen über deine Einnahmen und Ausgaben gehört zu den Basics. Du solltest unbedingt ein Haushaltsbuch führen.",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon8.png",
          ],
          (object) [
            "text" =>
              "Lurch TV says:Die besten Tools und Apps zeige ich dir im Blogartikel. Dort findest du auch einige Vorlagen für Excel oder als PDF.",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon9.png",
          ],
        ],
      ],
    ],
  ],
  (object) [
    "title" => "Absicherungstipps",
    "advices" => [
      (object) [
        "title" => "Benutze ein Haushaltstagebuch",
        "display" => true,
        "icon" =>
          "https://andreasjansen.com/wp-content/uploads/2022/09/IconFinanzauswertung1.png",
        "contentUrl" => "",
        "affiliateUrl" => "",
        "descriptions" => [
          (object) [
            "text" =>
              "Das Wissen über deine Einnahmen und Ausgaben gehört zu den Basics. Du solltest unbedingt ein Haushaltsbuch führen.",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon8.png",
          ],
          (object) [
            "text" =>
              "Lurch TV says:Die besten Tools und Apps zeige ich dir im Blogartikel. Dort findest du auch einige Vorlagen für Excel oder als PDF.",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon9.png",
          ],
        ],
      ],
      (object) [
        "title" => "Benutze ein Haushaltstagebuch",
        "display" => false,
        "icon" =>
          "https://andreasjansen.com/wp-content/uploads/2022/09/IconFinanzauswertung1.png",
        "contentUrl" => "",
        "affiliateUrl" => "",
        "descriptions" => [
          (object) [
            "text" =>
              "Das Wissen über deine Einnahmen und Ausgaben gehört zu den Basics. Du solltest unbedingt ein Haushaltsbuch führen.",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon8.png",
          ],
          (object) [
            "text" =>
              "Lurch TV says:Die besten Tools und Apps zeige ich dir im Blogartikel. Dort findest du auch einige Vorlagen für Excel oder als PDF.",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon9.png",
          ],
        ],
      ],
    ],
  ],
  (object) [
    "title" => "Investitionstipps",
    "advices" => [
      (object) [
        "title" => "Benutze ein Haushaltstagebuch",
        "display" => $data->q3 === "35",
        "icon" =>
          "https://andreasjansen.com/wp-content/uploads/2022/09/IconFinanzauswertung1.png",
        "contentUrl" => "",
        "affiliateUrl" => "",
        "descriptions" => [
          (object) [
            "text" =>
              "Das Wissen über deine Einnahmen und Ausgaben gehört zu den Basics. Du solltest unbedingt ein Haushaltsbuch führen.",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon8.png",
          ],
          (object) [
            "text" =>
              "Lurch TV says:Die besten Tools und Apps zeige ich dir im Blogartikel. Dort findest du auch einige Vorlagen für Excel oder als PDF.",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon9.png",
          ],
        ],
      ],
      (object) [
        "title" => "Benutze ein Haushaltstagebuch",
        "display" => false,
        "icon" =>
          "https://andreasjansen.com/wp-content/uploads/2022/09/IconFinanzauswertung1.png",
        "contentUrl" => "",
        "affiliateUrl" => "",
        "descriptions" => [
          (object) [
            "text" =>
              "Das Wissen über deine Einnahmen und Ausgaben gehört zu den Basics. Du solltest unbedingt ein Haushaltsbuch führen.",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon8.png",
          ],
          (object) [
            "text" =>
              "Lurch TV says:Die besten Tools und Apps zeige ich dir im Blogartikel. Dort findest du auch einige Vorlagen für Excel oder als PDF.",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon9.png",
          ],
        ],
      ],
    ],
  ],
];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <style>
      body, html {
        padding: 0;
        margin: 0;
      }

      .container {
        padding: 1rem;
        margin: 0 auto;
        margin-top: 5rem;
        width: 960px;
      }

      .categories {
        display: flex;
        flex-direction: column;
        gap: 1rem;
      }

      .category {
    
      }

      .category__headline {
        background: #25215c;
        color: #efc537;
        text-align: center;
        padding: 1rem;
        font-family: sans-serif;
        margin: 0;
      }

      .category__advices {
        display: flex;
        flex-direction: column;
        gap: 1rem;
      }

      .advice {
        margin-top: 1rem;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
      }

      .advice__header {
        background: #edefe9;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 0.5rem;
        gap: 1rem;
      }

      

      .advice__header__icon {

      }

      .advice__header__icon img {
        width: 50px;
      }

      .advice__header__title {
        font-family: sans-serif;
      }

      .advice__content {
        background: #f4f4f4;
        display: flex;
        padding-top: 1rem;
      }

      .advice__descriptions {
        padding: 0 1rem;
        display: flex;
        flex-direction: column;
        gap: 1rem;
      }

      .description {
        display: flex;
        gap: 1rem;
        align-items: center;

      }

      .description__icon {
        
      }


      .description__icon img {
        width: 25px;
      }

      .description__text {
        
      }


      .advice__links {
        flex: 1;
        display: flex;
        gap: 1rem;
        flex-direction: column;
        padding-right: 1rem;
        padding-bottom: 1rem;
      }

      .advice__links a {
        display: block;
        background: #efc537;
        color: #25215c;
        padding: 1rem 3rem;
        font-family: sans-serif;
        text-decoration: none;
        text-align: center;
        font-weight: bold;
        white-space: nowrap;
      }


      @media only screen and (max-width: 600px) {
        .advice__content {
          
          flex-direction: column;
          gap: 1rem;
        }

        .advice__links {
          
          padding-left: 1rem;
        }
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="categories">
        <?php foreach ($categories as &$category): ?>
          <div class="category">
            <h2 class="category__headline">
              <?= $category->title ?> für <?= $data->firstName ?>
            </h2>

            <div class="category__advices">
              <?php foreach (
                array_filter(
                  $category->advices,
                  fn($advice) => $advice->display
                )
                as $advice
              ): ?>
                <div class="advice">
                  <div class="advice__header">
                    <div class="advice__header__icon">
                      <img src="<?= $advice->icon ?>" />
                    </div>

                    <div class="advice__header__title">
                      <h3><?= $advice->title ?></h3>
                    </div>
                  </div>

                  <div class="advice__content">
                    <div class="advice__descriptions">
                      <?php foreach ($advice->descriptions as $description): ?>
                        <div class="description">
                          <div class="description__icon">
                            <img src="<?= $description->icon ?>" />
                          </div>

                          <div class="description__text">
                            <?= $description->text ?>
                          </div>
                        </div>
                      <?php endforeach; ?>
                    </div>

                    <div class="advice__links">
                      <a href="<?= $advice->contentUrl ?>">Weiter zum Blog</a>
                      <a href="<?= $advice->affiliateUrl ?>">Weiter zum Anbieter</a>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </body>
</html>