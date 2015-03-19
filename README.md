Erazr
===============

Version: **1.0.0**


### Installation

```bash
    git clone https://github.com/jock91/erazr.git
```

##### Bundles
Installer composer https://getcomposer.org/download/
```bash
    php composer.phar update
```
Déclarer les bundles dans app/appKernel.php
```php
    public function registerBundles()
    {
        $bundles = array(
            // ...
            new Erazr\Bundle\SiteBundle\ErazrSiteBundle(),
            new FOS\UserBundle\FOSUserBundle(),
            new Erazr\Bundle\UserBundle\ErazrUserBundle(),
            new HWI\Bundle\OAuthBundle\HWIOAuthBundle(),
            new Erazr\Bundle\ChatBundle\ErazrChatBundle(),
            new P2\Bundle\RatchetBundle\P2RatchetBundle(),
            new Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle(),
            // ...
        );
    }
```
##### Asset installation
```bash
    php app/console assets:install
```

##### API facebook
Ajouter votre facebook ID et Client secret
```yaml
    # app/config/parameters.yml
    parameters:
        facebook_client_id:     # Client Id
        facebook_client_secret: # Client secret
```

### Déploiement de la base de donnée

```bash
    php app/console doctrine:database:create
    php app/console doctrine:schema:update 
```
##### fixtures
```bash
    php app/console doctrine:fixtures:load
```

#### À vous de jouer ! 

Commencez par créer un compte dans la partie inscription ou via la connexion facebook.

Vous pouvez désormer ajouter des posts/commentaires/ami(e)s/likes


