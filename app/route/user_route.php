<?php
use App\Model\UserModel;
//use Slim\Views\PhpRenderer;

/*use Assetic\Asset\AssetCollection;
use Assetic\Asset\FileAsset;
use Assetic\Asset\GlobAsset;*/



//$app->group('/user/', function () {

//$container['renderer'] = new PhpRenderer();

//  View for index of module
    $app->get('/user/[{}]', function ($req, $res, $args) {
        //return $res->getBody()->write('Hola mi gente');
    //});
      return $this->view->render($res, 'user/index.php',  $args  );
    })->setName('indexUsers');


//  View for all Users
    $app->get('/user/getAll', function ($req, $res, $args) {

      $this->logger->addInfo("Mostrando la lista de Usuarios");

      $um = new UserModel();

      $respuesta=json_encode( $um->GetAll() );
      $respuesta=json_decode( $respuesta ,true);
      //$respuesta=var_export( $um->GetAll() );
      //print_r($_SERVER);

      //$response = $this->renderer->render($res, "user/listaPeliculas.php", ['datosPeliculas' => $respuesta['result']]);

        /* return $res
            ->withHeader('Content-type', 'application/json')
            ->getBody()
            ->write( $respuesta );*/
      $args['users']=$respuesta['result'];
      //$args['baseURL']= '/app/';

      // Register the Asset Manager
    /*  $js = new AssetCollection(array(
          new GlobAsset('app/templates/user/material-theme/assets/*'),
          new FileAsset('app/templates/user/styles.css'),
      ));*/
      // the code is merged when the asset is dumped
    //  echo 'Hola ->'.$js->dump();

    //print_r($this->view);

      return $this->view->render($res, 'user/listUsers.php',  $args  );
    })->setName('allUsers');

// Obtain a User by id
    $app->get('/user/{id}', function ($req, $res, $args) {
        //$args['id'];
        $um = new UserModel();
        $respuesta=json_encode( $um->Get($args['id']) );
        return $res
           ->withHeader('Content-type', 'application/json')
           ->getBody()
           ->write( $respuesta );
    })->setName('userProfile');

//Saving (insert or update) a User
    $app->post('/user/save', function ($req, $res) {
        $um = new UserModel();

        return $res
           ->withHeader('Content-type', 'application/json')
           ->getBody()
           ->write(
            json_encode(
                $um->InsertOrUpdate(
                    $req->getParsedBody()
                )
            )
        );
    });

//Deleting User by id (not operative)
    /*$app->post('delete/{id}', function ($req, $res, $args) {
        $um = new UserModel();

        return $res
           ->withHeader('Content-type', 'application/json')
           ->getBody()
           ->write(
            json_encode(
                $um->Delete($args['id'])
            )
        );
    });*/

//});
