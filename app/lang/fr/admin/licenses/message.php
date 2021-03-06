<?php

return array(

    'does_not_exist' => 'Cette catégorie n\'existe pas.',
    'user_does_not_exist' => 'L\'utilisateur n\'existe pas.',
    'asset_does_not_exist' 	=> 'L\'actif que vous essayez d\'associer avec cette licence n\'existe pas.',
    'owner_doesnt_match_asset' => 'L\'actif que vous essayez d\'associer avec cette licence est détenu par une autre personne que celle sélectionnée dans la liste déroulante.',
    'assoc_users'	 => 'Cette catégorie est associée au moins à un modèle et ne peut être supprimée. Veuillez actualiser vos modèles pour ne plus référencer cette catégorie et réessayer.',


    'create' => array(
        'error'   => 'Cette catégorie n\'a pas été créée, veuillez réessayer.',
        'success' => 'Catégorie créée correctement.'
    ),

    'deletefile' => array(
        'error'   => 'Le fichier n\'a pas pu être supprimé. Merci de réessayer.',
        'success' => 'Le fichier a bien été supprimé.',
    ),

    'upload' => array(
        'error'   => 'Le(s) fichier(s) n\'a pas pu être uploadé. Merci de réessayer.',
        'success' => 'Le(s) fichier(s) a bien été uploadé.',
        'nofiles' => 'You did not select any files for upload, or the file you are trying to upload is too large',
        'invalidfiles' => 'Un ou plusieurs de vos fichiers sont trop lourds, ou sont d\'un type non autorisé. Les types de fichiers autorisés sont png, gif, jpg, doc, docx, pdf et txt.',
    ),

    'update' => array(
        'error'   => 'Cette catégorie n\'a pas été actualisée, veuillez réessayer.',
        'success' => 'Catégorie actualisée correctement.'
    ),

    'delete' => array(
        'confirm'   => 'Etes-vous sûr de vouloir supprimer cette catégorie?',
        'error'   => 'Il y a eu un problème en supprimant cette catégorie. Veuillez réessayer.',
        'success' => 'Cette catégorie a été supprimée correctement.'
    ),

    'checkout' => array(
        'error'   => 'Un problème a eu lieu pendant l\'association de la licence. Veuillez essayer à nouveau.',
        'success' => 'La licence a été associée avec succès'
    ),

    'checkin' => array(
        'error'   => 'Un problème a eu lieu pendant la dissociation de la licence. Veuillez essayer à nouveau.',
        'success' => 'La licence a été dissociée avec succès'
    ),

);
