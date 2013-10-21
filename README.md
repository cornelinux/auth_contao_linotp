auth_contao_linotp
==================

OTP authentication module for Contao to authenticate against LinOTP

Installation
============

You should install the module via the Contao Extension Manager. 

In the extension manager search for "linotpAuth".

Configuration
=============

You need at least to configure the LinOTP URL, which defines where your LinOTP server is located.

Usage
=====

The Authentication in Contao works a bit different. The linotpAuth module is only called if the username 
of the user is not correct.
Thus, if you want to force the user to authenticate with two factors, you need to set the user password 
to a complicated unknown password, so that the password the user enters will never match and authentication
will always be performed by the LinOTP module.
