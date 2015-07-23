<?php

define('EMULATEUSER_DIR', 'emulate-user');

Object::add_extension('ContentController', 'EmulateUser_ContentControllerExtension');
Object::add_extension('Member', 'EmulateUser_MemberExtension');