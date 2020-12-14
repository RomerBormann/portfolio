<?php

use Pecee\Http\Request;
use Pecee\SimpleRouter\Exceptions\NotFoundHttpException;
use Pecee\SimpleRouter\SimpleRouter;

SimpleRouter::setDefaultNamespace( 'Website\Controllers' );

SimpleRouter::group( [ 'prefix' => site_url() ], function () {

	// START: Zet hier al eigen routes
	// Lees de docs, daar zie je hoe je routes kunt maken: https://github.com/skipperbent/simple-php-router#routes

	SimpleRouter::get( '/', 'WebsiteController@home' )->name( 'home' );
    SimpleRouter::get( '/home', 'WebsiteController@home' )->name( 'home' );

    SimpleRouter::post( '/', 'ContactController@handleContactForm' )->name( 'contact.handle' );

    SimpleRouter::get( '/work/spark', 'WebsiteController@workspark' )->name( 'work.spark' );
    SimpleRouter::get( '/work/portfolio', 'WebsiteController@workportfolio' )->name( 'work.portfolio' );
    SimpleRouter::get( '/work/netwerk', 'WebsiteController@worknetwerk' )->name( 'work.netwerk' );
    SimpleRouter::get( '/work/globalgoalsjam', 'WebsiteController@workgoals' )->name( 'work.goals' );
    SimpleRouter::get( '/work/loman-glasbewassing', 'WebsiteController@workloman' )->name( 'work.loman' );
    SimpleRouter::get( '/work/twittor', 'WebsiteController@worktwittor' )->name( 'work.twittor' );
    SimpleRouter::get( '/work/vrijpaleis', 'WebsiteController@workvrijpaleis' )->name( 'work.vrijpaleis' );

    // STOP: Tot hier al je eigen URL's zetten
	SimpleRouter::get( '/not-found', function () {
		http_response_code( 404 );

		return '404 Page not Found';
	} );

} );

// Dit zorgt er voor dat bij een niet bestaande route, de 404 pagina wordt getoond
SimpleRouter::error( function ( Request $request, \Exception $exception ) {
	if ( $exception instanceof NotFoundHttpException && $exception->getCode() === 404 ) {
		response()->redirect( site_url() . '/not-found' );
	}

} );