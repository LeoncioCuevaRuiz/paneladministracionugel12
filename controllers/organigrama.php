<?php
 
/*
 * Example PHP implementation used for the index.html example
 */
 
// DataTables PHP library
include( "../lib/DataTables.php" );
 
// Alias Editor classes so they are easy to use
use
    DataTables\Editor,
    DataTables\Editor\Field,
    DataTables\Editor\Format,
    DataTables\Editor\Mjoin,
    DataTables\Editor\Options,
    DataTables\Editor\Upload,
    DataTables\Editor\Validate,
    DataTables\Editor\ValidateOptions;
 
// Build our Editor instance and process the data coming from _POST
Editor::inst( $db, 'organigrama' )
    ->fields(
        Field::inst( 'titulo' )
            ->validator( Validate::notEmpty( ValidateOptions::inst()
                ->message( 'Ingrese el titulo de la noticia' ) 
            ) ),
        Field::inst( 'descripcion' )
            ->validator( Validate::notEmpty( ValidateOptions::inst()
                ->message( 'Ingrese la descripcion de la noticia' )  
            ) )
	)
	->join(
        Mjoin::inst( 'files' )
            ->link( 'organigrama.id', 'organigrama_files.organigrama_id' )
            ->link( 'files.id', 'organigrama_files.file_id' )
            ->fields(
                Field::inst( 'id' )
                    ->upload( Upload::inst( $_SERVER['DOCUMENT_ROOT'].'/UGEL12/PanelAdministracion/uploads/__ID__.__EXTN__' )
                        ->db( 'files', 'id', array(
                            'filename'    => Upload::DB_FILE_NAME,
                            'filesize'    => Upload::DB_FILE_SIZE,
                            'web_path'    => Upload::DB_WEB_PATH,
                            'system_path' => Upload::DB_SYSTEM_PATH
                        ) )
                        ->validator( Validate::fileSize( 5000000, 'Files must be smaller that 5M' ) )
                        ->validator( Validate::fileExtensions( array( 'png', 'jpg', 'jpeg', 'gif' ), "Please upload an image" ) )
                    )
            )
    )
    ->process( $_POST )
    ->json();