# Cart test in FuelPHP

* Version: 0.0.1

## Description

Test site created for prove possibilities of author in programming in "FuelPHP framework" with using git, php5.3, oop principles and others.

## Project targets are:

	* create basic class structure for cart(abstract) and cart item
	* implement cart storage driver classes for session and cookie
	* create basic page for testing cart driver classes. Expected functions:
		* chose cart driver and display cart items
		* add/remove/clear items from cart
		* show total price, total vat price
	* use simple auth from FuelPHP core.
	* define db tables and sample data using oil and its migrations.
	* implement cart and others in Eshop module as "standalone working set".

## Dependencies

Tested unde Zend Server 6.3 CE with php5.3 as apache module. Requires php 5.3 and enabled htaccess file.

## Install instructions

Clone this repository

	git clone http://git.localhost/cart-test-fuelphp.git cart-test-fuelphp

Enter newly created directory and run update script

	cd cart-test-fuelphp
	./update.sh

Tested with ZendServer 6.3 CE with 5.3 as apache module. Requires php 5.3 and enabled htaccess file.

##Author

* J.Vitek (citanus [dead fish] gmail com)


