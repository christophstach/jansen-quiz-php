<?php

$json = base64_decode($_GET["e"]);
$data = json_decode($json);

$categories = [
  (object) [
    "title" => "Spartipps",
    "advices" => [

        // 1 Haushaltsbuch

      (object) [
        "title" => "Benutze ein Haushaltsbuch",
        "display" => isset($data->q3) && ($data->q3 === "32" || $data->q3  === "33"),
        "icon" =>
          "https://andreasjansen.com/wp-content/uploads/2022/09/IconFinanzauswertung1.png",
        "descriptions" => [
          (object) [
            "text" =>
              "Das Wissen über deine Einnahmen und Ausgaben gehört zu den Basics. Du solltest unbedingt ein Haushaltsbuch führen.",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon9.png",
          ],
          (object) [
            "text" =>
              "Die besten Tools und Apps zeige ich dir im Blogartikel. Dort findest du auch einige Vorlagen für Excel oder als PDF.",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon8.png",
          ],
        ],
        "links" => [
            (object) [
              "url" => "https://andreasjansen.com/beste-haushaltsbuch-app-2020/",
              "text" => "Mehr Infos im Blog »",
            ],
            (object) [
              "url" => "https://shop.andreasjansen.com/products/haushaltsbuch-excel-paket",
              "text" => "Weiter zur Haushaltsbuch-Vorlage »",
            ],
          ],
      ],

      // 2 Strom

      (object) [
        "title" => "Wechsle deinen Stromanbieter automatisch",
        "display" => isset($data->q4) && !in_array("41", $data->q4),
        "icon" =>
          "https://andreasjansen.com/wp-content/uploads/2022/09/IconFinanzauswertung2.png",
        "descriptions" => [
          (object) [
            "text" =>
              "Du solltest jährlich deinen Strom- und deinen Gasanbieter wechseln. Das geht ohne Aufwand und zu 100% kostenfrei.",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon9.png",
          ],
          (object) [
            "text" =>
              "Den Testsieger des besten Stromanbieters findest du in meinem Blogartikel.",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon8.png",
          ],
        ],
        "links" => [
            (object) [
              "url" => "https://andreasjansen.com/strom-vergleich/",
              "text" => "Mehr Infos im Blog »",
            ],
            (object) [
              "url" => "https://andreasjansen.com/links/blog-strom-check24",
              "text" => "Jetzt Strom vergleichen »",
            ],
          ],
      ],

      // 3 Internet

      (object) [
        "title" => "Wechsle deinen Internetvertrag",
        "display" => isset($data->q4) && !in_array("42", $data->q4),
        "icon" =>
          "https://andreasjansen.com/wp-content/uploads/2022/09/IconFinanzauswertung3.png",
        "descriptions" => [
          (object) [
            "text" =>
              "Du solltest jährlich deinen Internetvertrag wechseln, damit du von besseren Preisen und vom Neukunden-Bonus profitierst.",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon9.png",
          ],
          (object) [
            "text" =>
              "Die besten Anbieter und Vergleichportale zeige ich dir im Blogartikel. ",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon8.png",
          ],
        ],
        "links" => [
            (object) [
              "url" => "https://andreasjansen.com/internet-vertrag-wechseln/",
              "text" => "Mehr Infos im Blog »",
            ],
            (object) [
              "url" => "https://andreasjansen.com/links/blog-dsl-check24",
              "text" => "Jetzt Internetvertrag vergleichen »",
            ],
          ],
      ],

      // 4 Nebenkosten prüfen

      (object) [
        "title" => "Nebenkosten prüfen und sparen",
        "display" => isset($data->q5) && ($data->q5 === "52" || $data->q5 === "53"),
        "icon" =>
          "https://andreasjansen.com/wp-content/uploads/2022/09/IconFinanzauswertung4.png",
        "descriptions" => [
          (object) [
            "text" =>
              "81% aller Nebenkosten sind falsch berechnet - deine auch? Mach den Test und erfahre, ob du sparen kannst.",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon9.png",
          ],
          (object) [
            "text" =>
              "Im Schnitt sparen Mieter und Hauseigentümer 221€ bei einer Überprüfung ihrer Nebenkosten. ",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon10.png",
          ],
        ],
        "links" => [
            (object) [
              "url" => "https://andreasjansen.com/nebenkosten-berechnen-online/",
              "text" => "Mehr Infos im Blog »",
            ],
            (object) [
              "url" => "https://andreasjansen.com/links/nebenkostenvergleich",
              "text" => "Jetzt Nebenkosten prüfen »",
            ],
          ],
      ],

      //

      // 5 Handyvertrag

      (object) [
        "title" => "Wechsle deinen Handyvertrag",
        "display" => isset($data->q4) && !in_array("43", $data->q4),
        "icon" =>
          "https://andreasjansen.com/wp-content/uploads/2022/09/IconFinanzauswertung5.png",
        "descriptions" => [
          (object) [
            "text" =>
              "Du solltest jährlich deinen Handyvertrag wechseln, damit du von besseren Preisen und vom Neukunden-Bonus profitierst.",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon9.png",
          ],
          (object) [
            "text" =>
              "Die besten Anbieter und Vergleichportale zeige ich dir im Blogartikel. ",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon8.png",
          ],
        ],
        "links" => [
            (object) [
              "url" => "https://andreasjansen.com/handyvertrag-wechseln/",
              "text" => "Mehr Infos im Blog »",
            ],
            (object) [
              "url" => "https://andreasjansen.com/links/blog-topdhandy",
              "text" => "Jetzt Handyvertrag vergleichen »",
            ],
          ],
      ],

      //

      // 6 Steuer

      (object) [
        "title" => "Eine Steuererklärung lohnt sich",
        "display" => isset($data->q6) && ($data->q6 === "61" || $data->q6 === "62" || $data->q6 === "63"),
        "icon" =>
          "https://andreasjansen.com/wp-content/uploads/2022/09/IconFinanzauswertung6.png",
        "descriptions" => [
          (object) [
            "text" =>
              "Du solltest jährlich deine Steuererklärung machen, da du durchschnittlich über 900€ erstattet bekommst.",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon9.png",
          ],
          (object) [
            "text" =>
              "Die besten Anbieter und Vergleichportale zeige ich dir im Blogartikel. ",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon8.png",
          ],
        ],
        "links" => [
            (object) [
              "url" => "https://andreasjansen.com/steuererklaerung-selber-machen/",
              "text" => "Mehr Infos im Blog »",
            ],
            (object) [
              "url" => "https://andreasjansen.com/links/blog-smartsteuer",
              "text" => "Jetzt Steuer-Tool ansehen »",
            ],
          ],
      ],

      //
      // 7 Krankenkasse

      (object) [
        "title" => "Wechsle deine Krankenkasse",
        "display" => isset($data->q13) && ($data->q13 === "132" || $data->q13 === "133"),
        "icon" =>
          "https://andreasjansen.com/wp-content/uploads/2022/09/IconFinanzauswertung7.png",
        "descriptions" => [
          (object) [
            "text" =>
              "Du zahlst zu hohe Beitragssätze bei deiner bestehenden Krankenkasse! Wechsel schnell!",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon9.png",
          ],
          (object) [
            "text" =>
              "Du bekommst mehr Service & zahlst weniger bei Alternativen. Wo das zeige ich dir im Artikel. Schaue dir die Testsieger an.",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon8.png",
          ],
        ],
        "links" => [
            (object) [
              "url" => "https://andreasjansen.com/krankenkasse-vergleich/",
              "text" => "Mehr Infos im Blog »",
            ],
          ],
      ],

      //

      // 8 ADAC

      (object) [
        "title" => "Prüfe eine ADAC Alternative",
        "display" => isset($data->q12) && ($data->q12 === "121"),
        "icon" =>
          "https://andreasjansen.com/wp-content/uploads/2022/09/IconFinanzauswertung8.png",
        "descriptions" => [
          (object) [
            "text" =>
              "Viele Deutsche sind beim ADAC versichert, wobei es andere günstigere Alternativen gibt z.B. den BAVC. ",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon9.png",
          ],
          (object) [
            "text" =>
              "In vielen Fällen reicht sogar ein Schutzbrief aus, der dir für wesentlich weniger Geld den gleichen Service bietet.",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon6.png",
          ],
        ],
        "links" => [
            (object) [
              "url" => "https://andreasjansen.com/adac-kuendigen/",
              "text" => "Mehr Infos im Blog »",
            ],
          ],
      ],

      //

      // 9 Reisen

      (object) [
        "title" => "Spare Geld beim Reisen",
        "display" => isset($data->q11) && ($data->q11 === "111" || $data->q11 === "112"),
        "icon" =>
          "https://andreasjansen.com/wp-content/uploads/2022/09/IconFinanzauswertung9.png",
        "descriptions" => [
          (object) [
            "text" =>
              "Wusstest du, dass deine Bank 2x Mal an dir verdiehnt, wenn du Geld im Ausland abhebst?",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon9.png",
          ],
          (object) [
            "text" =>
              "Du kannst dir die Abhebegebühren sowie die Wechselkursgebühren sparen, wenn du die richtige Karte hast.",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon10.png",
          ],
        ],
        "links" => [
            (object) [
              "url" => "https://andreasjansen.com/curve-kreditkarte-im-test/",
              "text" => "Mehr Infos im Blog »",
            ],
            (object) [
                "url" => "https://andreasjansen.com/curve-kreditkarte-im-test/",
                "text" => "Jetzt Reise-Kreditkarte bestellen »",
              ],
          ],
      ],

      //

      // 10 Cashback

      (object) [
        "title" => "Spare Geld mit Cashback-Systemen",
        "display" => isset($data->q2) && ($data->q2 === "22"),
        "icon" =>
          "https://andreasjansen.com/wp-content/uploads/2022/09/IconFinanzauswertung10.png",
        "descriptions" => [
          (object) [
            "text" =>
              "Mit cleveren Cashback-Programmen von Amazon oder Lidl kannst du automatisch Geld sparen.",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon9.png",
          ],
          (object) [
            "text" =>
              " Auch Vivid, eine Kreditkarte mit Cashback-Funktion, spart dir bei jedem Einkauf 0,1% - 25%. Das lohnt sich!",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon8.png",
          ],
        ],
        "links" => [
            (object) [
              "url" => "https://andreasjansen.com/cashback-programm/",
              "text" => "Mehr Infos im Blog »",
            ],
            (object) [
                "url" => "https://andreasjansen.com/links/blog-vivid",
                "text" => "Jetzt Cashback-Kreditkarte bestellen »",
              ],
          ],
      ],

      //

      // 11 Girokonto

      (object) [
        "title" => "Du zahlst zu viel für ein Girokonto",
        "display" => isset($data->q7) && ($data->q7 === "71" || $data->q7 === "73" || $data->q7 === "74"),
        "icon" =>
          "https://andreasjansen.com/wp-content/uploads/2022/09/IconFinanzauswertung11.png",
        "descriptions" => [
          (object) [
            "text" =>
              "Viele gute Banken bieten in Deutschland ein kostenloses Girokonto mit kostenloser Kreditkarte. Du sparst deine Gebühren! ",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon9.png",
          ],
          (object) [
            "text" =>
              "Die besten Anbieter und Testsieger zeige ich dir in meinem Blogartikel. ",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon8.png",
          ],
        ],
        "links" => [
            (object) [
              "url" => "https://andreasjansen.com/girokonto-vergleich/",
              "text" => "Mehr Infos im Blog »",
            ],
            (object) [
              "url" => "https://andreasjansen.com/links/blog-comdirect",
              "text" => "Weiter zum Girokonto-Testsieger »",
            ],
          ],
      ],

      //

      // 12 Schulden abbauen

      (object) [
        "title" => "Baue deine Schulden hiermit schnell ab",
        "display" => isset($data->q14) && ($data->q14 === "141"),
        "icon" =>
          "https://andreasjansen.com/wp-content/uploads/2022/09/IconFinanzauswertung12.png",
        "descriptions" => [
          (object) [
            "text" =>
              "Konsumschulden solltest du als erstes abbauen. Du kannst einfache Vorlagen nutzen, damit du dir einen Plan erstellst.",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon9.png",
          ],
          (object) [
            "text" =>
              "In meinem Blogartikel findest du Vorlagen zum Schuldenabbau sowie konkrete Tipps, wie du schneller schuldenfrei wirst.",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon6.png",
          ],
        ],
        "links" => [
            (object) [
              "url" => "https://andreasjansen.com/11-moeglichkeiten-deine-schulden-schneller-abbauen/",
              "text" => "Mehr Infos im Blog »",
            ],
            (object) [
              "url" => "ttps://shop.andreasjansen.com/products/schuldenabbau-vorlagen?_pos=1&_sid=d80826c0c&_ss=r",
              "text" => "Weiter zum Schuldenabbau-Set »",
            ],
          ],
      ],

      //

      // 13 Vertragsübersicht

      (object) [
        "title" => "Nutze eine Vertragsübersicht",
        "display" => isset($data->q8) && ($data->q8 === "82" || $data->q8 === "83"),
        "icon" =>
          "https://andreasjansen.com/wp-content/uploads/2022/09/10-1.png",
        "descriptions" => [
          (object) [
            "text" =>
              "Achte darauf, dass du deine Verträge regelmäßig wechselt und die Auslaufzeiten kennst. ",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon9.png",
          ],
          (object) [
            "text" =>
              "Eine praktische Vorlage zur Vertragsübersicht findest du in meinem Shop. So behältst du einen besseren Überblick!",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon7.png",
          ],
        ],
        "links" => [
            (object) [
              "url" => "https://shop.andreasjansen.com/products/vertragsubersicht-excel?_pos=1&_sid=11df08796&_ss=r",
              "text" => "Weiter zur Vertragsübersicht »",
            ],
          ],
      ],

      //

      // 14 Kreditkarten

      (object) [
        "title" => "Nutze kostenlose Kreditkarten",
        "display" => isset($data->q10) && ($data->q10 === "101" || $data->q10 === "102"),
        "icon" =>
          "https://andreasjansen.com/wp-content/uploads/2022/09/IconFinanzauswertung14.png",
        "descriptions" => [
          (object) [
            "text" =>
              "Gute Kreditkarten sind kostenlos und kosten keine jährliche Gebühr!",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon9.png",
          ],
          (object) [
            "text" =>
              "Bei einigen Kreditkarten bekommst du sogar für jeden Einkauf ein bisschen Geld zurückerstatt (Cashback-Prämie).",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon8.png",
          ],
        ],
        "links" => [
            (object) [
              "url" => "https://andreasjansen.com/kreditkarte-vergleich/",
              "text" => "Mehr Infos im Blog »",
            ],
            (object) [
              "url" => "https://andreasjansen.com/links/blog-vivid",
              "text" => "Jetzt zur Testsieger-Kreditkarte »",
            ],
          ],
      ],

      //

      // 15 Finanzapps

      (object) [
        "title" => "Finanz-Apps für eine bessere Übersicht",
        "display" => isset($data->q9) && ($data->q9 === "92"),
        "icon" =>
          "https://andreasjansen.com/wp-content/uploads/2022/09/IconFinanzauswertung15.png",
        "descriptions" => [
          (object) [
            "text" =>
              "Einige gute Finanz-Apps geben dir einen schnellen Überblick über deine monatlichen Einnahmen und Ausgaben.",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon9.png",
          ],
          (object) [
            "text" =>
              "Die beste App für einen schnellen Finanzüberblick findest du, wenn du auf den Button klickst.",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon8.png",
          ],
        ],
        "links" => [
            (object) [
              "url" => "https://andreasjansen.com/links/blog-finanzguru",
              "text" => "Weiter zur Finanz-App »",
            ],
          ],
      ],

      //

      // 16 Depotwechsel

      (object) [
        "title" => "Depotwechsel: Investiere günstiger",
        "display" => isset($data->q15) && ($data->q15 === "151"),
        "icon" =>
          "https://andreasjansen.com/wp-content/uploads/2022/09/IconFinanzauswertung16.png",
        "descriptions" => [
          (object) [
            "text" =>
              "Für dich könnte sich ein Depotwechsel lohnen. Denn neue Anbieter haben keine oder nur geringe Handelsgebühren.",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon9.png",
          ],
          (object) [
            "text" =>
              "Die besten Anbieter und Testsieger zeige ich dir in meinem großen Depot-Vergleich in meinem Artikel. ",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon8.png",
          ],
        ],
        "links" => [
            (object) [
              "url" => "https://andreasjansen.com/depot-vergleich/",
              "text" => "Mehr Infos im Blog »",
            ],
            (object) [
              "url" => "https://andreasjansen.com/links/blog-trade-republic",
              "text" => "Weiter zum Depot-Testsieger »",
            ],
          ],
      ],

      //

    ],
  ],

  (object) [
    "title" => "Absicherungstipps",
    "advices" => [

              // 51 Versicherungs-Check

      (object) [
        "title" => "Versicherungs-Check",
        "display" => true,
        "icon" =>
          "https://andreasjansen.com/wp-content/uploads/2022/09/IconFinanzauswertung51.png",
        "descriptions" => [
          (object) [
            "text" =>
              "Einen Überblick über deine Versicherung zu bekommen, hilft dir dich besser abzusichern.",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon9.png",
          ],
          (object) [
            "text" =>
              "Mit meiner kostenlosen Vorlage dem Versicherungs-Check, bekommst du schnell und sichere einen Überblick.",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon1.png",
          ],
        ],
        "links" => [
            (object) [
              "url" => "https://andreasjansen.com/welche-versicherungen-braucht-man/",
              "text" => "Mehr Infos im Blog »",
            ],
            (object) [
              "url" => "https://files.convertkitcdnn2.com/assets/documents/158450/2332009/Versicherungscheck.pdf",
              "text" => "Weiter zur gratis Vorlage »",
            ],
          ],
      ],

      //

        // 36 Testament erstellen

      (object) [
        "title" => "Testament erstellen",
        "display" => isset($data->q26) && ($data->q26 === "261" || $data->q26 === "262" || $data->q26 === "264"),
        "icon" =>
          "https://andreasjansen.com/wp-content/uploads/2022/09/IconFinanzauswertung36.png",
        "descriptions" => [
          (object) [
            "text" =>
              "Ein Online-Testament ist rechtssicher und kostenlos. Du bereitest dich und deine Familie auf den Notfall vor.",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon9.png",
          ],
          (object) [
            "text" =>
              "In nur 30 Minuten kannst du dein Testament ausfüllen. Wie das genau geht, kannst du im Blogartikel nachlesen.",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon4.png",
          ],
        ],
        "links" => [
            (object) [
              "url" => "https://andreasjansen.com/testament-verfassen/",
              "text" => "Mehr Infos im Blog »",
            ],
            (object) [
              "url" => "https://andreasjansen.com/links/afilio",
              "text" => "Weiter zum Testsieger »",
            ],
          ],
      ],

      //

      // 37 Hausrat

      (object) [
        "title" => "Absicherungslücke: Hausratversicherung",
        "display" => isset($data->q25) && !in_array("252", $data->q25),
        "icon" =>
          "https://andreasjansen.com/wp-content/uploads/2022/09/IconFinanzauswertung37.png",
        "descriptions" => [
          (object) [
            "text" =>
              "Der Verbraucherschutz empfiehlt die Hausrat, denn sie schützt dich gegen Einbruch, Blitzeinschläge, Brände und Ähnliches.",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon9.png",
          ],
          (object) [
            "text" =>
              "Die Versicherung kostet nur ein paar Euro im Monat und gehört zu den 3 wichtigsten. Testsieger findest du im Blogartikel.",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon8.png",
          ],
        ],
        "links" => [
            (object) [
              "url" => "https://andreasjansen.com/hausratversicherung/",
              "text" => "Mehr Infos im Blog »",
            ],
            (object) [
              "url" => "https://andreasjansen.com/links/blog-hausratverischerung-tarifcheck",
              "text" => "Weiter zum Anbietervergleich »",
            ],
          ],
      ],

      //

      // 38 Privathaftpflicht

      (object) [
        "title" => "Absicherungslücke: Privathaftpflicht",      
        "display" => isset($data->q25) && !in_array("253", $data->q25),
        "icon" =>
          "https://andreasjansen.com/wp-content/uploads/2022/09/IconFinanzauswertung38.png",
        "descriptions" => [
          (object) [
            "text" =>
              "Der Verbraucherschutz empfiehlt die Privathaftpflicht, denn sie schützt dich vor Personen-, Sach- und Vermögensschäden.",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon9.png",
          ],
          (object) [
            "text" =>
              "Die Versicherung kostet nur ein paar Euro im Monat und gehört zu den 3 wichtigsten. Testsieger findest du im Blogartikel.",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon8.png",
          ],
        ],
        "links" => [
            (object) [
              "url" => "https://andreasjansen.com/privathaftpflicht/",
              "text" => "Mehr Infos im Blog »",
            ],
            (object) [
              "url" => "https://andreasjansen.com/links/blog-berufsunfaehigkeitsversicherung-tarifcheck",
              "text" => "Weiter zum Anbietervergleich »",
            ],
          ],
      ],

      //

      // 39 BU

      (object) [
        "title" => "Absicherungslücke: Berufsunfähigkeit",
        "display" => isset($data->q25) && !in_array("254", $data->q25),
        "icon" =>
          "https://andreasjansen.com/wp-content/uploads/2022/09/IconFinanzauswertung39.png",
        "descriptions" => [
          (object) [
            "text" =>
              "Der Verbraucherschutz empfiehlt die Berufsunfähigkeits-versicherung, denn sie schützt dich bei Arbeitsunfähigkeit.",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon9.png",
          ],
          (object) [
            "text" =>
              "Die Versicherung ist sehr individuell und sollte im Detail besprochen werden. Im Blogartikel bekommst du mehr Infos.",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon8.png",
          ],
        ],
        "links" => [
            (object) [
              "url" => "https://andreasjansen.com/berufsunfaehigkeitsversicherung/",
              "text" => "Mehr Infos im Blog »",
            ],
            (object) [
              "url" => "https://andreasjansen.com/links/blog-berufsunfaehigkeitsversicherung-tarifcheck",
              "text" => "Weiter zum Anbietervergleich »",
            ],
          ],
      ],

      //

      // 40 Rentenlücke

      (object) [
        "title" => "Kennst du deine Rentenlücke?",
        "display" => isset($data->q2) && ($data->q2 === "24"),
        "icon" =>
          "https://andreasjansen.com/wp-content/uploads/2022/09/IconFinanzauswertung40.png",
        "descriptions" => [
          (object) [
            "text" =>
              "Du solltest die Höhe deiner Rentenlücke kennen. Dazu gibt es einfach Online-Rechner, die du nutzen kannst.",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon9.png",
          ],
          (object) [
            "text" =>
              "Mit dem besten Tool kannst du in weniger als 2 Minuten die Höhe deiner Rentenlücke berechnen.",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon5.png",
          ],
        ],
        "links" => [
            (object) [
              "url" => "https://www.ihre-rentenluecke.de/",
              "text" => "Mehr Infos im Blog »",
            ],
          ],
      ],

      //

      // 41 Patietenverfügung

      (object) [
        "title" => "Patientenverfügung erstellen",
        "display" => isset($data->q26) && ($data->q26 === "261" || $data->q26 === "262" || $data->q26 === "265"),
        "icon" =>
          "https://andreasjansen.com/wp-content/uploads/2022/09/IconFinanzauswertung41.png",
        "descriptions" => [
          (object) [
            "text" =>
              "Eine Online-Patientenverfügung ist rechtssicher und kostenlos. Du bereitest dich und deine Familie auf den Notfall vor.",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon9.png",
          ],
          (object) [
            "text" =>
              "In nur 15 Minuten kannst du deine Patientenverfügung ausfüllen. Wie das genau geht, kannst du im Blogartikel nachlesen.",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon4.png",
          ],
        ],
        "links" => [
            (object) [
              "url" => "https://andreasjansen.com/patientenverfuegung-erstellen/",
              "text" => "Mehr Infos im Blog »",
            ],
            (object) [
              "url" => "https://andreasjansen.com/links/afilio",
              "text" => "Weiter zum Anbieter »",
            ],
          ],
      ],

      //

      // 42 Notfallordner

      (object) [
        "title" => "Du solltest einen Notfallordner haben",
        "display" => isset($data->q24) && ($data->q24 === "242"),
        "icon" =>
          "https://andreasjansen.com/wp-content/uploads/2022/09/IconFinanzauswertung42.png",
        "descriptions" => [
          (object) [
            "text" =>
              "Der Notfall tritt schneller und häufiger ein als wir denken.  Ohne einen klaren Plan und die wichtigsten Infos entsteht Stress.",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon9.png",
          ],
          (object) [
            "text" =>
              "Mit meiner Vorlage kannst du schnell und einfach deinen eigenen Notfallordner für dich und deine Familie erstellen.",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon1.png",
          ],
        ],
        "links" => [
            (object) [
              "url" => "https://andreasjansen.com/notfallordner-anlegen/",
              "text" => "Mehr Infos im Blog »",
            ],
            (object) [
              "url" => "https://shop.andreasjansen.com/products/notfallordner",
              "text" => "Jetzt zum Notfallordner »",
            ],
          ],
      ],

      //

      // 43 Versicherungen App

      (object) [
        "title" => "Versicherungen geht auch anders",
        "display" => isset($data->q27) && ($data->q27 === "272" || $data->q27 === "273"),
        "icon" =>
          "https://andreasjansen.com/wp-content/uploads/2022/09/IconFinanzauswertung43.png",
        "descriptions" => [
          (object) [
            "text" =>
              "Wenn du keine Lust hast deine Versicherungen komplett alleine zu erledigen, dann kann eine Versicherungs-App gut sein.",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon9.png",
          ],
          (object) [
            "text" =>
              "Im Blogartikel erfährst du, welche Versicherungs-App ich empfehle, damit du Geld & Zeit bei deinen Versicherungen sparst.",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon6.png",
          ],
        ],
        "links" => [
            (object) [
              "url" => "https://andreasjansen.com/clark-erfahrungen-die-top-3-versicherungsmakler-im-vergleich/",
              "text" => "Mehr Infos im Blog »",
            ],
            (object) [
              "url" => "https://andreasjansen.com/links/blog-clark",
              "text" => "Weiter zur Versicherungs-App »",
            ],
          ],
      ],

      //

      // 44 Kfz Haftpflicht

      (object) [
        "title" => "KFZ-Haftpflicht vergleichen",
        "display" => isset($data->q12) && ($data->q12 === "121"),
        "icon" =>
          "https://andreasjansen.com/wp-content/uploads/2022/09/IconFinanzauswertung44.png",
        "descriptions" => [
          (object) [
            "text" =>
              "Die meisten KFZ-Haftpflichtversicherungen bieten die gleichen Konditionen, aber nicht die gleichen Preise.",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon9.png",
          ],
          (object) [
            "text" =>
              "Mit einem schnellen Vergleich kannst du deine aktuellen Konditionen überprüfen. ",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon8.png",
          ],
        ],
        "links" => [
            (object) [
              "url" => "https://andreasjansen.com/links/blog-kfz-versicherung-tarifcheck",
              "text" => "Jetzt zum Anbietervergleich »",
            ],
          ],
      ],

      //

    ],
  ],

  (object) [
    "title" => "Investitionstipps",
    "advices" => [

              // 18 Notgroschen

      (object) [
        "title" => "Du brauchst einen Notgroschen",
        "display" => isset($data->q17) && ($data->q17 === "172" || $data->q17 === "173"),
        "icon" =>
          "https://andreasjansen.com/wp-content/uploads/2022/09/IconFinanzauswertung18.png",
        "descriptions" => [
          (object) [
            "text" =>
              "Dein Notgroschen sollte zwischen 2-3 Monatsgehälter liegen, damit du unerwartete Ausgaben decken kannst.",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon9.png",
          ],
          (object) [
            "text" =>
              "Im meinem Blogartikel stelle ich dir ein paar clevere Wege vor, wie du die Höhe deines persönlichen Notgroschen berechnest. ",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon6.png",
          ],
        ],
        "links" => [
            (object) [
              "url" => "https://andreasjansen.com/notgroschen-wie-hoch/",
              "text" => "Mehr Infos im Blog »",
            ],
          ],
      ],

      //




       // 17 ETF Sparpläne

       (object) [
        "title" => "Investiere in ETF-Sparpläne",
        "display" => isset($data->q21) && in_array("2115", $data->q21),
        "icon" =>
          "https://andreasjansen.com/wp-content/uploads/2022/09/IconFinanzauswertung17.png",
        "descriptions" => [
          (object) [
            "text" =>
              "ETFs (Exchange Traded Funds) sind der beste und sichereste Weg für deinen Vermögensaufbau und deine Altersvorsorge.",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon9.png",
          ],
          (object) [
            "text" =>
              "Sogar die Verbraucherzentrale empfiehlt ein ETF-Portfolio zum Vermögensaufbau. Mehr über ETFs erfährst du im Artikel.",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon6.png",
          ],
        ],
        "links" => [
            (object) [
              "url" => "https://andreasjansen.com/was-sind-etfs/",
              "text" => "Mehr Infos im Blog »",
            ],
            (object) [
              "url" => "https://andreasjansen.com/links/blog-trade-republic",
              "text" => "Weiter zum Depot-Testsieger »",
            ],
          ],
      ],

      //

      // 19 Nachhaltigkeit

      (object) [
        "title" => "Hol dir ein grünes Konto",
        "display" => isset($data->q19) && ($data->q19 === "192" || $data->q19 === "193"),
        "icon" =>
          "https://andreasjansen.com/wp-content/uploads/2022/09/IconFinanzauswertung19.png",
        "descriptions" => [
          (object) [
            "text" =>
              "Für dich ist Nachhaltigkeit sehr wichtig und auch bei deinen Finanzen kannst du dafür etwas tun.",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon9.png",
          ],
          (object) [
            "text" =>
              "Ein grünes Konto kostet nur wenige Euro im Monat und ermöglicht dir soziale und nachhaltige Projekte zu unterstützen.",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon6.png",
          ],
        ],
        "links" => [
            (object) [
              "url" => "https://andreasjansen.com/ethische-banken/",
              "text" => "Mehr Infos im Blog »",
            ],
            (object) [
              "url" => "https://andreasjansen.com/links/blog-tomorrow",
              "text" => "Weiter zum Testsieger-Konto »",
            ],
          ],
      ],

      //

      // 20 Tagesgeld

      (object) [
        "title" => "Deine Basis: Das Tagesgeldkonto",
        "display" => isset($data->q21) && in_array("2111", $data->q21),
        "icon" =>
          "https://andreasjansen.com/wp-content/uploads/2022/09/IconFinanzauswertung20.png",
        "contentUrl" => "https://andreasjansen.com/tagesgeld-vergleich/",
        "affiliateUrl" => "https://andreasjansen.com/links/blog-weltsparen",
        "descriptions" => [
          (object) [
            "text" =>
              "Du solltest unbedingt ein Tagesgeldkonto besitzen. Du bekommst höhere Zinsen & hast einen Ort für den Notgroschen.",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon9.png",
          ],
          (object) [
            "text" =>
              "Den Testsieger des besten Tagesgeldkontos findest du im großen Tagesgeldvergleich (Blogartikel).",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon8.png",
          ],
        ],
        "links" => [
            (object) [
              "url" => "https://andreasjansen.com/tagesgeld-vergleich/",
              "text" => "Mehr Infos im Blog »",
            ],
            (object) [
              "url" => "https://andreasjansen.com/links/blog-weltsparen",
              "text" => "Weiter zum Tagesgeld-Testsieger »",
            ],
          ],
      ],

      //

      // 21 Festgeld

      (object) [
        "title" => "Festgeld bei europäischen Banken",
        "display" => isset($data->q21) && in_array("2112", $data->q21),
        "icon" =>
          "https://andreasjansen.com/wp-content/uploads/2022/09/IconFinanzauswertung21.png",
        "descriptions" => [
          (object) [
            "text" =>
              "Bei Banken innerhalb der EU bekommst du wesentlich mehr Zinsen als in Deutschland. ",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon9.png",
          ],
          (object) [
            "text" =>
              "Trotzdem bist du durch die europäische Einlagensicherung geschützt. Die besten Festgeldangebote bekommst du im Artikel.",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon3.png",
          ],
        ],
        "links" => [
            (object) [
              "url" => "https://andreasjansen.com/festgeld-vergleich/",
              "text" => "Mehr Infos im Blog »",
            ],
            (object) [
              "url" => "https://andreasjansen.com/links/blog-weltsparen",
              "text" => "Weiter zum Festgeld-Testsieger »",
            ],
          ],
      ],

      //

      // 53 Einzelaktien

      (object) [
        "title" => "Du suchst die besten Einzelaktien",
        "display" => isset($data->q20) && in_array("2015", $data->q20),
        "icon" =>
          "https://andreasjansen.com/wp-content/uploads/2022/09/IconFinanzauswertung53.png",
        "descriptions" => [
          (object) [
            "text" =>
              "Bei Sharewise oder Plattformen wie AlleAktien findest du Aktiencommunities, die dir bei der Aktienauswahl helfen.",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon9.png",
          ],
          (object) [
            "text" =>
              "In meinem Blogartikel stelle ich dir die Plattformen und meine Erfahrungen kurz vor.",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon6.png",
          ],
        ],
        "links" => [
            (object) [
              "url" => "https://andreasjansen.com/aktien-community-forum/",
              "text" => "Mehr Infos im Blog »",
            ],
            (object) [
              "url" => "https://andreasjansen.com/links/get-quin---aktiencommunity",
              "text" => "Weiter zur Aktiencommunity »",
            ],
          ],
      ],

      //

      // 22 Immobilien

      (object) [
        "title" => "Investitionen in Immobilien",
        "display" => isset($data->q21) && in_array("2113", $data->q21),
        "icon" =>
          "https://andreasjansen.com/wp-content/uploads/2022/09/IconFinanzauswertung22.png",
        "descriptions" => [
          (object) [
            "text" =>
              "Du kannst in Immobilien auch über REITS und Einzelaktien invesiteren, wodurch du dir ein Klumpenrisiko ersparst.",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon9.png",
          ],
          (object) [
            "text" =>
              "Wie das funktionert und welche Vor- und Nachteile Immobilien Investitionen haben. Das erfährst du im Blogartikel.",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon6.png",
          ],
        ],
        "links" => [
            (object) [
              "url" => "https://andreasjansen.com/immobilien/",
              "text" => "Mehr Infos im Blog »",
            ],
          ],
      ],

      //

      // 23 Optionshandel

      (object) [
        "title" => "Wissen über den Optionshandel",
        "display" => isset($data->q21) && in_array("2119", $data->q21),
        "icon" =>
          "https://andreasjansen.com/wp-content/uploads/2022/09/IconFinanzauswertung23.png",
        "descriptions" => [
          (object) [
            "text" =>
              "Du willst erfolgreicher mit dem Optionshandel sein oder dein bestehendes Wissen erweitern?",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon9.png",
          ],
          (object) [
            "text" =>
              "Im meinem Blogartikel stelle ich dir mein Wissen über den Optionshandel vor. ",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon6.png",
          ],
        ],
        "links" => [
            (object) [
              "url" => "https://andreasjansen.com/optionen-handeln/",
              "text" => "Mehr Infos im Blog »",
            ],
          ],
      ],

      //

      // 24 Passives Einkommen

      (object) [
        "title" => "Passives Einkommen aufbauen",
        "display" => isset($data->q20) && in_array("2017", $data->q20),
        "icon" =>
          "https://andreasjansen.com/wp-content/uploads/2022/09/IconFinanzauswertung24.png",
        "descriptions" => [
          (object) [
            "text" =>
              "Wenn du deine Finanzen im Griff hast und bereits investierst, solltest du dich mit Einkommenssteigerungen beschäftigen.",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon9.png",
          ],
          (object) [
            "text" =>
              "Im meinem Blogartikel stelle ich dir ein paar Wege vor, wie du passives Einkommen aufbauen kannst.",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon6.png",
          ],
        ],
        "links" => [
            (object) [
              "url" => "https://andreasjansen.com/31-ideen-passives-einkommen-zu-generieren/",
              "text" => "Mehr Infos im Blog »",
            ],
          ],
      ],

      //

      // 25 P2P Kredite

      (object) [
        "title" => "Investitionen in P2P-Kredite",
        "display" => isset($data->q21) && in_array("2116", $data->q21),
        "icon" =>
          "https://andreasjansen.com/wp-content/uploads/2022/09/IconFinanzauswertung25.png",
        "descriptions" => [
          (object) [
            "text" =>
              "P2P-Kredite bieten hohe Renditen von bis 15% und haben allerdings auch hohe Risiken.",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon9.png",
          ],
          (object) [
            "text" =>
              "Meine Erfahrungen über P2P-Portale und welche Portale ich aktuell nutze, findest du im Blogartikel.",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon6.png",
          ],
        ],
        "links" => [
            (object) [
              "url" => "https://andreasjansen.com/p2p-kredite/",
              "text" => "Mehr Infos im Blog »",
            ],
            (object) [
              "url" => "https://andreasjansen.com/links/blog-mintos",
              "text" => "Weiter zum P2P-Testsieger »",
            ],
          ],
      ],

      //

      // 26 Krypto

      (object) [
        "title" => "Kryptowährungen: Günstig Handeln",
        "display" => isset($data->q21) && in_array("2117", $data->q21),
        "icon" =>
          "https://andreasjansen.com/wp-content/uploads/2022/09/IconFinanzauswertung26.png",
        "descriptions" => [
          (object) [
            "text" =>
              "Kryptowährungen können einen risikoreichen Teil deines Vermögens bilden. Zum Start fokussiere dich auf 2 Währungen.",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon9.png",
          ],
          (object) [
            "text" =>
              "Im meinem Blogartikel stelle ich dir meine 2 besten Handelsplattformen vor und schenke dir noch 10€ zum Einstieg.",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon8.png",
          ],
        ],
        "links" => [
            (object) [
              "url" => "https://andreasjansen.com/kryptowaehrung-kaufen/",
              "text" => "Mehr Infos im Blog »",
            ],
            (object) [
              "url" => "https://andreasjansen.com/links/blog-bsdex",
              "text" => "Weiter zur Testsieger-Börse »",
            ],
          ],
      ],

      //

      // 27 Kinder depot

      (object) [
        "title" => "Die richtige Geldanlage für deine Kinder",
        "display" => isset($data->q2) && ($data->q2 === "221"),
        "icon" =>
          "https://andreasjansen.com/wp-content/uploads/2022/09/IconFinanzauswertung27.png",
        "descriptions" => [
          (object) [
            "text" =>
              "Wusstest du, dass du für deine Kinder ein kostenloses ETF-Depot eröffnen kannst?",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon9.png",
          ],
          (object) [
            "text" =>
              "Investierst du 25€ im Monat hat dein Kind mit 18 Jahren schon 12.088€ für seine Träume oder Ausbildung. Mehr Infos im Artikel.",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon10.png",
          ],
        ],
        "links" => [
            (object) [
              "url" => "https://andreasjansen.com/geld-anlegen-fuer-kinder/",
              "text" => "Mehr Infos im Blog »",
            ],
            (object) [
              "url" => "https://andreasjansen.com/links/blog-oskar",
              "text" => "Weiter zum Testsieger »",
            ],
          ],
      ],

      //

      // 28 Rohstoffe

      (object) [
        "title" => "Rohstoffe: Das sind die Experten",
        "display" => isset($data->q21) && in_array("2118", $data->q21),
        "icon" =>
          "https://andreasjansen.com/wp-content/uploads/2022/09/IconFinanzauswertung28.png",
        "descriptions" => [
          (object) [
            "text" =>
              "Ich investiere persönlich nicht viel in Rohstoffe, aber ich möchte dir 1-2 Experten empfehlen.",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon9.png",
          ],
          (object) [
            "text" =>
              "Im meinem Blogartikel stelle ich dir ein paar Wege vor, wie du besser in Rohstoffe investieren kannst und wer dir helfen kann.",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon6.png",
          ],
        ],
        "links" => [
            (object) [
              "url" => "https://andreasjansen.com/rohstoffe-handeln/",
              "text" => "Mehr Infos im Blog »",
            ],
          ],
      ],

      //

      // 29 Vermögensübersicht

      (object) [
        "title" => "Du brauchst eine Vermögensübersicht",
        "display" => isset($data->q16) && ($data->q16 === "162" || $data->q16 === "163"),
        "icon" =>
          "https://andreasjansen.com/wp-content/uploads/2022/09/IconFinanzauswertung29.png",
        "descriptions" => [
          (object) [
            "text" =>
              "Einen Überblick über dein aktuelles Vermögen zu haben ist genauso wichtig wie deine Einnahmen und Ausgaben zu kennen.",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon9.png",
          ],
          (object) [
            "text" =>
              "Mit meiner Vorlage bekommst du schnell einen Überblick über dein Vermögen (inkl. automatischen Diagrammen zur Übersicht).",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon7.png",
          ],
        ],
        "links" => [
            (object) [
              "url" => "https://shop.andreasjansen.com/products/vermogensubersicht?_pos=1&_psq=verm%C3%B6gen&_ss=e&_v=1.0",
              "text" => "Weiter zur Vermögensübersicht »",
            ],
          ],
      ],

      //

      // 30 Aktienjäger Aktienfinder

      (object) [
        "title" => "Aktienjäger aufgepasst!",
        "display" => isset($data->q20) && in_array("2015", $data->q20),
        "icon" =>
          "https://andreasjansen.com/wp-content/uploads/2022/09/IconFinanzauswertung30.png",
        "descriptions" => [
          (object) [
            "text" =>
              "Du suchst die besten Aktien oder spezielle Dividenden-Aktien, dann solltest du dieses Tool unbedingt kennen.",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon9.png",
          ],
          (object) [
            "text" =>
              "Klicke einfach kurz auf den Button und du erfährst, welches Tool dir beim Aktien jagen helfen könnte!",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon6.png",
          ],
        ],
        "links" => [
            (object) [
              "url" => "https://andreasjansen.com/links/aktienfinder",
              "text" => "Weiter zum Aktien-Tool »",
            ],
          ],
      ],

      //

      // 31 Krypto-Portfolio Fortgeschrittene

      (object) [
        "title" => "Krypto-Portfolio für Fortgeschrittene",
        "display" => isset($data->q20) && in_array("2019", $data->q20),
        "icon" =>
          "https://andreasjansen.com/wp-content/uploads/2022/09/IconFinanzauswertung31.png",
        "descriptions" => [
          (object) [
            "text" =>
              "Was sind NFTs? Wie funktioniert Staking? Wie kannst du dabei passives Einkommen verdienen?",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon9.png",
          ],
          (object) [
            "text" =>
              "In meinem Artikel zeige ich dir, was fortgeschrittene Kryptoinvestoren machen können.",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon8.png",
          ],
        ],
        "links" => [
            (object) [
              "url" => "https://andreasjansen.com/kryptowaehrungen-passives-einkommen/",
              "text" => "Mehr Infos im Blog »",
            ],
          ],
      ],

      //

      // 32 Vermögensaufbau ab 100.000 Euro

      (object) [
        "title" => "Vermögensaufbau ab 100.000€",
        "display" => isset($data->q20) && (in_array("2017", $data->q20) || in_array("2015", $data->q20)),

        "icon" =>
          "https://andreasjansen.com/wp-content/uploads/2022/09/IconFinanzauswertung32.png",
        "descriptions" => [
          (object) [
            "text" =>
              "Vermögensaufbau endet nicht mit ETFs. Meine Core-Satellite-Strategie stelle ich dir in meinem Blogartikel vor.",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon9.png",
          ],
          (object) [
            "text" =>
              "Du erfährst wie ich aktuell mit 30 mein Vermögen aufbaue und, wie du deine eigene Strategie erstellen kannst.",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon6.png",
          ],
        ],
        "links" => [
            (object) [
              "url" => "https://andreasjansen.com/vermoegensaufbau-mit-30/",
              "text" => "Mehr Infos im Blog »",
            ],
          ],
      ],

      //

      // 33 Vermögensaufbau 10.000 Euro anlegen

      (object) [
        "title" => "10.000€ anlegen: So geht´s",
        "display" => isset($data->q20) && (!in_array("2017", $data->q20) || !in_array("2015", $data->q20)),
        "icon" =>
          "https://andreasjansen.com/wp-content/uploads/2022/09/IconFinanzauswertung33.png",
        "descriptions" => [
          (object) [
            "text" =>
              "Fragst du dich, wie ich 10.000€ investieren würde? Dann bekommst du hier meine Aufteilung.",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon9.png",
          ],
          (object) [
            "text" =>
              "In meinem Blogartikel erfährst du meine Strategie, wie ich 10.000€ investieren würde und wie du es machen kannst.",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon6.png",
          ],
        ],
        "links" => [
            (object) [
              "url" => "https://andreasjansen.com/10000-euro-anlegen/",
              "text" => "Mehr Infos im Blog »",
            ],
          ],
      ],

      //

      // 34 Digitale Vermögensverwaltung

      (object) [
        "title" => "Digitale Vermögensverwaltung",
        "display" => isset($data->q23) && ($data->q23 === "232"),
        "icon" =>
          "https://andreasjansen.com/wp-content/uploads/2022/09/IconFinanzauswertung34.png",
        "descriptions" => [
          (object) [
            "text" =>
              "Wenn du keine Lust hast, alleine zu investieren, sondern machen zu lassen, dann schaue dir einmal Robo-Advisor an.",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon9.png",
          ],
          (object) [
            "text" =>
              "Du bekommst ein hoch diversifiziertes Portfolio und lässt Experten deinen Vermögensaufbau für geringe Kosten managen.",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon10.png",
          ],
        ],
        "links" => [
            (object) [
              "url" => "https://andreasjansen.com/robo-advisor-vergleich-testsieger/",
              "text" => "Mehr Infos im Blog »",
            ],
            (object) [
              "url" => "https://andreasjansen.com/links/blog-scaleable",
              "text" => "Weiter zum Testsieger »",
            ],
          ],
      ],

      //

      // 35 ETF-Portfolio optimieren Fortgeschrittene

      (object) [
        "title" => "Verbessere dein ETF-Portfolio",
        "display" => isset($data->q20) && in_array("2015", $data->q20),
        "icon" =>
          "https://andreasjansen.com/wp-content/uploads/2022/09/IconFinanzauswertung35.png",
        "descriptions" => [
          (object) [
            "text" =>
              "Du hast bereits ein ETF-Portfolio, aber kümmerst du dich auch aktiv immer mal wieder darum?",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon9.png",
          ],
          (object) [
            "text" =>
              "In meinem Blogartikel erfährst du, wodrauf du bei deinem bestehendem ETF-Portfolio achten solltest (Steuer, Rebalancing).",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon6.png",
          ],
        ],
        "links" => [
            (object) [
              "url" => "https://andreasjansen.com/etf-rebalancing/",
              "text" => "Mehr Infos im Blog »",
            ],
            (object) [
              "url" => "https://andreasjansen.com/links/blog-trade-republic",
              "text" => "Weiter zum Testsieger-Depot »",
            ],
          ],
      ],

      //

    ],
  ],

  (object) [
    "title" => "Finanzielle Bildung",
    "advices" => [

          // 52 Ziele und Werte

          (object) [
            "title" => "Deine Ziele & Werte",
            "display" => true,
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/IconFinanzauswertung52.png",
            "descriptions" => [
              (object) [
                "text" =>
                  "Vor jeder finanziellen Entscheidung, solltest du deine Ziele und Werte kennen und klar definieren.",
                "icon" =>
                  "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon9.png",
              ],
              (object) [
                "text" =>
                  "Bestimme in 5-10 Minuten deine Ziele & Werte mit der Hilfe meines Blogartikels und meiner für dich Vorlage.",
                "icon" =>
                  "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon4.png",
              ],
            ],
            "links" => [
                (object) [
                  "url" => "https://andreasjansen.com/smarte-zielsetzung/",
                  "text" => "Mehr Infos im Blog »",
                ],
                (object) [
                  "url" => "https://shop.andreasjansen.com/products/erfolgreiche-zielsetzung",
                  "text" => "Weiter zur Zielsetzungs-Vorlage »",
                ],
              ],
          ],
    
          //

      // 45 Online Kurs Finanzen im Griff

      (object) [
        "title" => "Starte Finanzen im Griff - Online-Kurs",
        "display" => isset($data->q2) && ($data->q2 === "22" || $data->q2 === "24"),
        "icon" =>
          "https://andreasjansen.com/wp-content/uploads/2022/09/IconFinanzauswertung45.png",
        "descriptions" => [
          (object) [
            "text" =>
              "Meine Empfehlung für dich ist mein Programm Finanzen im Griff zu starten. ",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon9.png",
          ],
          (object) [
            "text" =>
              "Nach dem Programm hast du einen besseren Überblick über deine Finanzen, mehr Geld gespart, dich abgesichert u.v.m..",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon8.png",
          ],
        ],
        "links" => [
            (object) [
              "url" => "https://andreasjansen.com/finanzen-im-griff/",
              "text" => "Weiter zum Online-Kurs »",
            ],
          ],
      ],

      //

      // 46 Online Kurs Vermögensaufbau mit ETFs

      (object) [
        "title" => "Erfolgreicher Vermögensaufbau mit ETFs - Online-Kurs",
        "display" => isset($data->q2) && ($data->q2 === "23" && $data->q2 !== "2017"),
        "icon" =>
          "https://andreasjansen.com/wp-content/uploads/2022/09/IconFinanzauswertung46.png",
        "descriptions" => [
          (object) [
            "text" =>
              "Meine Empfehlung für dich ist mein Programm Erfolgreicher Vermögensaufbau mit ETFs zu starten.",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon9.png",
          ],
          (object) [
            "text" =>
              "Nach dem Programm hast du dein eigenes ETF-Portfolio und deinen Vermögensaufbau automatisiert.",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon8.png",
          ],
        ],
        "links" => [
            (object) [
              "url" => "https://andreasjansen.com/online-kurs-vermoegensaufbau-angebot/",
              "text" => "Weiter zum Online-Kurs »",
            ],
          ],
      ],

      //

      // 47 Online Kurs Performer Portfolio

      (object) [
        "title" => "Starte das Programm Performer Portfolio",
        "display" => isset($data->q2) && ($data->q2 === "23" && $data->q20 === "2017"),
        "icon" =>
          "https://andreasjansen.com/wp-content/uploads/2022/09/IconFinanzauswertung47.png",
        "descriptions" => [
          (object) [
            "text" =>
              "Meine Empfehlung für dich ist mein Programm Performer Portfolio zu starten. ",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon9.png",
          ],
          (object) [
            "text" =>
              "Nach dem Programm hast du dein Portfolio besser diversifiziert und erfolgreicher aufgestellt.",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon8.png",
          ],
        ],
        "links" => [
            (object) [
              "url" => "https://andreasjansen.com/online-kurs-fortgeschrittener-vermoegensaufbau/",
              "text" => "Weiter zum Online-Kurs »",
            ],
          ],
      ],

      //

      // 48 Podcast Empfehlungen

      (object) [
        "title" => "Podcast-Empfehlungen für Dich",
        "display" => isset($data->q29) && in_array("297", $data->q29),
        "icon" =>
          "https://andreasjansen.com/wp-content/uploads/2022/09/IconFinanzauswertung48.png",
        "descriptions" => [
          (object) [
            "text" =>
              "Deine finanzielle Bildung kannst du gerne mit Podcasts aufbauen. Nur was sollte man hören? ",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon9.png",
          ],
          (object) [
            "text" =>
              "Einen kurze Liste meiner besten Finanz-Podcasts findest du im Blog. Willst du meine Top-Podcasts wissen?",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon2.png",
          ],
        ],
        "links" => [
            (object) [
              "url" => "https://andreasjansen.com/finanz-podcast/",
              "text" => "Mehr Infos im Blog »",
            ],
          ],
      ],

      //

      // 49 Finanzbuch

      (object) [
        "title" => "Finanzbuch-Empfehlungen für Dich",
        "display" => isset($data->q29) && in_array("296", $data->q29),
        "icon" =>
          "https://andreasjansen.com/wp-content/uploads/2022/09/IconFinanzauswertung49.png",
        "descriptions" => [
          (object) [
            "text" =>
              "Deine finanzielle Bildung kannst du gerne mit Büchern aufbauen. Nur was sollte man lesen?",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon9.png",
          ],
          (object) [
            "text" =>
              "Einen kurze Liste meiner besten Finanzbücher findest du im Blog. Willst du meine Top 12 Finanzbücher wissen?",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon2.png",
          ],
        ],
        "links" => [
            (object) [
              "url" => "https://andreasjansen.com/die-12-besten-finanzbuecher/",
              "text" => "Mehr Infos im Blog »",
            ],
          ],
      ],

      //

      // 50 Money Mindset

      (object) [
        "title" => "Money Mindset",
        "display" => isset($data->q28) && ($data->q28 === "282"),
        "icon" =>
          "https://andreasjansen.com/wp-content/uploads/2022/09/IconFinanzauswertung50.png",
        "descriptions" => [
          (object) [
            "text" =>
              "Alte Glaubenssätze hindern uns extrem daran erfolgreicher zu werden und mehr Geld zu haben.",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon9.png",
          ],
          (object) [
            "text" =>
              "Mit meiner Vorlage dem Money-Mindset-Tagebuch kannst du schnell alte Glaubenssätze auflösen und wirst erfolgreicher.",
            "icon" =>
              "https://andreasjansen.com/wp-content/uploads/2022/09/MiniIcon1.png",
          ],
        ],
        "links" => [
            (object) [
              "url" => "https://shop.andreasjansen.com/products/money-mindset-7-tage-tagebuch?_pos=1&_sid=6adbb8552&_ss=r",
              "text" => "Weiter zum Money-Mindset-Tagebuch »",
            ],
          ],
      ],

      //

    ],
  ],
];
?>
<style>
  body, html {
    padding: 0;
    margin: 0;
  }

  .container {
    padding: 1rem;
    margin: 0 auto;
    margin-top: 5rem;
    max-width:80%
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
    padding: 1rem;
    gap: 1rem;
  }

  .advice__descriptions {
    display: flex;
    flex-direction: column;
    gap: 1rem;
    flex: 1;
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
    display: flex;
    gap: 1rem;
    flex-direction: column;
  }

  .advice__links a {
    display: block;
    background: #efc537;
    color: #25215c;
    padding: 1rem 0;
    width: 20rem;
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

    .container {
      padding: 1rem;
      margin: 0 auto;
      margin-top: 5rem;
      max-width: 95%;
    }
		
		  .advice__links a {
    display: block;
    background: #efc537;
    color: #25215c;
    padding: 1rem 0;
    font-family: sans-serif;
    text-decoration: none;
    text-align: center;
    font-weight: bold;
    white-space: nowrap;
		width:100%;
  }
  }
</style>

<div class="container">
  <div class="categories">
    <?php foreach ($categories as &$category): ?>
      <div class="category">
        <h2 class="category__headline">
          <?php if (!empty($data->firstName)): ?>
            <?= $category->title ?> für <?= $data->firstName ?>
          <?php else: ?>
            <?= $category->title ?>
          <?php endif; ?>
        </h2>

        <div class="category__advices">
          <?php foreach (
            array_filter($category->advices, fn($advice) => $advice->display)
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
                  <?php foreach ($advice->links as $link): ?>
                    <a target="_blank" href="<?= $link->url ?>"><?= $link->text ?></a>
                  <?php endforeach; ?>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>
