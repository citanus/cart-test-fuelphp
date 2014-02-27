# Cart test in FuelPHP

* Version: 0.0.1

## Description

Test site created for prove possibilities of author in programming in "FuelPHP framework" with using git, php5.3, oop principles and others.

## Project targets are:

	* create basic class structure for cart(abstract) and cart item
	* implement cart storage driver classes for session and cookie
	* create basic page for testing cart driver classes. Expected functions:
		* display cart items
		* add/remove/clear items from cart
		* show total price, total vat price
	* use simple auth from FuelPHP core.
	* define db tables and sample data using oil and its migrations.
	* implement cart and others in Eshop module as "standalone working set".

## Dependencies

Tested unde Zend Server 6.3 CE with php5.3 as apache module. Requires php 5.3 and enabled htaccess file.

## Install instructions

Clone this repository:


	git clone https://github.com/citanus/cart-test-fuelphp.git cart-test-fuelphp

Enter newly created directory and load git submodules and update composer:

	cd cart-test-fuelphp
	git submodule init
	git submodule update
	php composer.phar update

Tested with ZendServer 6.3 CE with 5.3 as apache module. Requires php 5.3 and enabled htaccess file.


## Comments & todo

	* Tested with ZendServer 6.3 CE with 5.3 as apache module. Requires php 5.3 and enabled htaccess file.
	* @todo figure out why delete not working for both cookie and session cart driver
	* figure out how protect modules against unauthorized access using some built-in mechanism
    * figure out how auto include modules namespaces when using required paths(path appmodules.DS.eshop/classes/cart/cart_driver should bew found as Eshop\Cart_Driver)
	* figure out how create links in modules without repeating module name in every call.
	* figure out why FuelPHP didn't delete session key on Session::delete and same for cookie
	* Challenge 1
	* Challenge 2




##Author

* J.Vitek (citanus [dead fish] gmail com)


