# ###########
# COMMANDS
# V 1.0.0.3
# Andres Castillo
# ###########

# COMMANDS
.\_commands\call.bat "commands:pullpush"
.\_commands\call.bat "commands:pull"

# ###########
# WORDPRESS
# ###########
.\_commands\call.bat "wordpress:pullpush:full"
.\_commands\call.bat "wordpress:pullpush:project:blog" "mensaje commit"
.\_commands\call.bat "install:wordpress"

# ###########
# OM
# ###########

# LOCAL

.\_commands\call.bat "local:pullpush:wordpress:blog" "mensaje commit"

# SERVER
.\_commands\call.bat "server-om:pullpush:front:front"
.\_commands\call.bat "server-om:pullpush:front-staging:front"
.\_commands\call.bat "server-om:pullpush:frontstage:front"
.\_commands\call.bat "server-om:pullpush:back:api"
.\_commands\call.bat "server-om:autoload:back:api"

# ###########
# LARAVEL PROYECTO EXTERNO
# ###########

# LOCAL
.\_commands\call.bat "local:pull:back:api:core"
.\_commands\call.bat "local:pull:back:api:modules"
.\_commands\call.bat "local:pullpush:back:api:core"
.\_commands\call.bat "local:pullpush:back:api:modules"

# SERVER
.\_commands\call.bat "server:pullpush:back:api"
.\_commands\call.bat "server:pullpush:core:api"
.\_commands\call.bat "server:pullpush:render:front"
.\_commands\call.bat "server:autoload:back:api"

# ###########
# VUE
# ###########

.\_commands\call.bat "local:pull:front:front:modules"
.\_commands\call.bat "local:pull:front:front:core"
.\_commands\call.bat "local:pullpush:front:front:core"
.\_commands\call.bat "local:pullpush:front:front:modules"


# ###########
# VUE
# ###########


# ###########
# ANGULAR
# ###########
.\_commands\call.bat "server-angular:pullpush:full:grm-font-web-citas"


# ###########
# BACKEND VERSION 2
# ###########
.\_commands\call.bat "server-v2:pullpush:sysprofiles:CsGirlsModels"
.\_commands\call.bat "server-v2:autoload:sysprofiles"


# ###########
# LARAVEL PROYECTO EXTERNO FULL
# Pensado para el server de preproduccion
# ###########
.\_commands\call.bat "laravel-ext:pullpush:back"
.\_commands\call.bat "laravel-ext:autoload:back"
.\_commands\call.bat "laravel-ext:allcache:back"
.\_commands\call.bat "laravel-ext:install:back"
.\_commands\call.bat "laravel-ext:removevendor:back"
.\_commands\call.bat "laravel-ext:stash:back"
.\_commands\call.bat "laravel-ext:permisions:back"
.\_commands\call.bat "laravel-ext:optimize-clear:back"
.\_commands\call.bat "laravel-ext:pullpush-third-back:api"
.\_commands\call.bat "laravel-ext:pullcore-third-back:api"
.\_commands\call.bat "laravel-ext:pullcore:api"


# ###########
# VUE EXTERNO
# Pensado para el server de preproduccion
# ###########
.\_commands\call.bat "vue-ext:pullcore-third-front:front"
.\_commands\call.bat "vue-ext:pullpush-third-front:front"
.\_commands\call.bat "vue-ext:publish-third-front:front"

# ###########
# MASTER PROJECT
# Se usa en sitios de wordpress o proyectos de un solo .git
# ###########
.\_commands\call.bat "master-project:pullpush"


# ###########
# DEPLOY
# Envia los cambios al servidor de produccion. Debe estar configurado un FTP
# para esta actividad
# ###########
.\_commands\call.bat "deploy:prod"


# ###########
# INSTALL
# Instala un aplicativo que este registrado en el config
# ###########
.\_commands\call.bat "install:api"
.\_commands\call.bat "install:wordpress"

# -----------------------------------------------------------------


# ##################################################################
# COMMANS V2
# ##################################################################
.\_commands\call.bat "[command] [project]"
.\_commands\call.bat "pullpush root"
.\_commands\call.bat "install root"
.\_commands\call.bat "deploy root"
.\_commands\call.bat "composer-autoload root"
.\_commands\call.bat "publish root"
.\_commands\call.bat "stash root"

# ###########
# TYPES
# ###########

"root":{"type":"normal"} ; Proyecto libre
"root":{"type":"wordpress"} ; Proyecto Wordpress
"root":{"type":"laravel"} ; Proyecto laravel
"root":{"type":"vue"} ; Proyecto vue