﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Boombeene User Dashboard</title>
        <!-- BOOTSTRAP STYLES-->
        <link href="<?php echo $this->config->item("base_url"); ?>css/bootstrap.css" rel="stylesheet" />
        <!-- FONTAWESOME STYLES-->
        <link href="<?php echo $this->config->item("base_url"); ?>css/font-awesome.css" rel="stylesheet" />
        <!-- MORRIS CHART STYLES-->
        <link href="<?php echo $this->config->item("base_url"); ?>js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
        <link href="<?php echo $this->config->item("base_url"); ?>css/custom.css" rel="stylesheet" />
        <!-- GOOGLE FONTS-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    </head>
    <body>
        <div id="wrapper">
            <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo $this->config->item("base_url"); ?>my_account/new_order">Boombeene</a> 
                </div>
                <div style="color: white;
                     padding: 15px 50px 5px 50px;
                     float: right;
                     font-size: 16px;"> Last access : 12 May 2017 &nbsp; <a href="<?php echo $this->config->item("base_url"); ?>login" class="btn btn-danger square-btn-adjust">Logout</a> </div>
            </nav>   
            <!-- /. NAV TOP  -->
            <nav class="navbar-default navbar-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="main-menu">
                        <li class="text-center">
                            <img src="<?php echo $this->config->item("base_url"); ?>images/find_user.png" class="user-image img-responsive"/>
                        </li>


                        <li>
                            <a class="active-menu"  href="<?php echo $this->config->item("base_url"); ?>admin"><i class="fa fa-table fa-3x"></i> My Orders</a>
                        </li>
                        <li>
                            <a  href="ui.html"><i class="fa fa-tasks fa-3x"></i> New Order</a>
                        </li>
                        <li>
                            <a  href="tab-panel.html"><i class="fa fa-money fa-3x"></i> Add Credit</a>
                        </li>
                        <li  >
                            <a   href="chart.html"><i class="fa fa-dollar fa-3x"></i> Transactions</a>
                        </li>	
                        <li  >
                            <a  href="table.html"><i class="fa fa-shopping-cart fa-3x"></i> Market</a>
                        </li>
                       

<!--                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-3x"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Second Level Link</a>
                                </li>
                                <li>
                                    <a href="#">Second Level Link</a>
                                </li>
                                <li>
                                    <a href="#">Second Level Link<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Third Level Link</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Link</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Link</a>
                                        </li>

                                    </ul>

                                </li>
                            </ul>
                        </li>  -->
<!--                        <li  >
                            <a  href="blank.html"><i class="fa fa-square-o fa-3x"></i> Blank Page</a>
                        </li>	-->
                    </ul>

                </div>

            </nav>  