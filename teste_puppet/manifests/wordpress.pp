exec { 'apt-get_update':
command => '/usr/bin/apt-get update',
}

package {['apache2']:
ensure  => installed,
require => Exec['apt-get_update'],
}
