<?php
/**
 * Plugin Name: WooCommerce Mostrar Simbolo
 * Plugin URI: https://github.com/hostingpage/
 * Description: Agregar MXN en los precios, tambien USD, etc.
 * Author: WebMaster - Departamento
 * Author URI: https://www.hostingpage.com/
 * Version: 1.0
 *
 * Este programa es software gratuito: puedes redistribuirlo y / o modificar
 * bajo los términos de la Licencia Pública General GNU publicada por
 * a Free Software Foundation, ya sea la versión 3 de la Licencia, o
 * (a su elección) cualquier versión posterior.
 *
 * Este programa se distribuye con la esperanza de que sea útil,
 * pero SIN NINGUNA GARANTÍA; sin siquiera la garantía implícita de
 * COMERCIABILIDAD o APTITUD PARA UN PROPÓSITO PARTICULAR. Ver el
 * Licencia pública general GNU para obtener más detalles.
 *
 * Debería haber recibido una copia de la Licencia Pública General GNU
 * junto con este programa. De lo contrario, consulte <http://www.gnu.org/licenses/>.
 *
 */
function whpi_currency_symbol( $currency_symbol, $currency ) {

    switch( $currency ) {
        case 'USD':
            $currency_symbol = 'USD $';
            break;
        case 'MXN':
            $currency_symbol = 'MXN $';
            break;
	}

    return $currency_symbol;

}
add_filter('woocommerce_currency_symbol', 'whpi_currency_symbol', 30, 2);