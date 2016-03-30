<?php
$LANG['plugin_mreporting']['Helpdeskplus'] = array(
   'title'         => 'Helpdesk Avancé',

   // MISC LOCALES
   'backlogs'      => "Backlogs",
   'opened'        => "Ouverts",
   'period'        => "Période",
   'backlogstatus' => "Statuts à afficher",
   'slaobserved'   => "SLA respecté(s)",
   'slanotobserved'=> "SLA non respecté(s)",
   'observed'      => "respecté",
   'notobserved'   => "non respecté",

   // SELECTOR
   'selector'      => array(
      'slas'       => "SLAS",
      'categories' => "Catégories",
   ),

   'reportGlineBacklogs' => array(
      'title'    => "Backlog",
      'desc'     => "Ce rapport affiche le nombre de ticket groupé par la période selectionnée (jour, semaine, ...).<br>".
                    "Il ajoute par ailleurs une nouvelle ligne nommée \"Backlogs\" permettant de visualiser <i>l'en cours</i> des tickets à une date donnée",
      'category' => "Général",
   ),

   'reportVstackbarLifetime' => array(
      'title'    => "Ancienneté des tickets",
      'desc'     => "Ce rapport affiche des barres indiquant le nombre de tickets pour la période selectionnée (jour, semaine, ...).<br>".
                    "Les tickets sont affichés dans leurs statuts courants. Par exemple, les blocs 'Nouveau' affiche les tickets dans un statut nouveau à la date d'aujourd'hui.",
      'category' => "Général",
   ),

   'reportVstackbarTicketsgroups' => array(
      'title'    => "Quantitatif par groupes",
      'desc'     => "Ce rapport affiche le nombre de tickets ouverts entre les dates selectionnées par leur groupe d'attribution",
      'category' => "Général",
   ),

   'reportVstackbarTicketstech' => array(
      'title'    => "Quantitatif par technicien",
      'desc'     => "Ce rapport affiche le nombre de tickets ouverts entre les dates selectionnées groupés par techniciens.<br>".
                    "<b>Vous devez selectionner au préalable un groupe de technicien pour afficher les données.</b>",
      'category' => "Général",
   ),

   'reportVstackbarWorkflow' => array(
      'title'    => "Orientation des files",
      'desc'     => "Nombre de tickets pour chaque groupe d'arrivée en fonction d'un groupe de départ.<br />".
                    "- Sélectionnez un groupe demandeur pour afficher le nombre de ticket pour les groupes attribués.<br />".
                    "- Sélectionnez un groupe chargé du ticket pour afficher le nombre de ticket pour les groupes demandeurs.<br />".
                    "<b>Vous ne pouvez sélectionner qu'un critère à la fois !</b>",
      'category' => "Général",
   ),

   'reportHbarTopcategory' => array(
      'title'    => "TOP catégories",
      'desc'     => "Nombre croissant de ticket affiché par catégorie. <br>".
                    "Il est possible limiter le nombre de catégories affichées !",
      'category' => "Général",
   ),

   'reportHbarTopapplicant' => array(
      'title'    => "TOP groupes demandeurs",
      'desc'     => "Nombre croissant de ticket affiché par groupe demandeur. <br>".
                    "Il est possible limiter le nombre de groupes affichés !",
      'category' => "Général",
   ),

   'reportVstackbarGroupChange' => array(
      'title'    => "Nombre de changement de groupe",
      'desc'     => "Le graphique suivant affiche les nombres de tickets classé par nombre de changements.<br>".
                    "En ordonnée est affiché le nombre de ticket.<br>".
                    "En abscisse, le nombre de changements.",
      'category' => "Général",
   ),


   // SLA REPORTS
   'reportVstackbarNbTicketBySla' => array(
      'title'    => "Nombre de tickets par SLA",
      'desc'     => "Barres empilées",
      'category' => "Par SLA",
   ),

   'reportGlineNbTicketBySla' => array(
      'title'    => "Evolution du nombre de tickets par SLA",
      'desc'     => "Lignes",
      'category' => "Par SLA",
   ),

   'reportHgbarRespectedSlasByTopCategory' => array(
      'title'    => "Nombre de tickets par SLA ordonnés par catégories",
      'desc'     => "Barres groupées",
      'category' => "Par SLA",
   ),

   'reportHgbarRespectedSlasByTechnician' => array(
      'title'    => "Nombre de tickets par SLA ordonnées par techniciens",
      'desc'     => "Barres groupées",
      'category' => "Par SLA",
   ),

   'reportVstackbarRespectedSlasByGroup' => array(
      'title'    => "Nombre de tickets par SLA ordonnés par groupes",
      'desc'     => "Barres groupées",
      'category' => "Par SLA",
   ),
);