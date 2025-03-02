<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
  <meta charset="UTF-8"/>
  <title>Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta http-equiv="cache-control" content="no-cache">
  <meta http-equiv="expires" content="0">
  <link href="view/stylesheet/bootstrap.css" rel="stylesheet" media="screen"/>
  <link href="view/stylesheet/fonts/fontawesome/css/all.min.css" rel="stylesheet" type="text/css"/>
  <link href="view/stylesheet/stylesheet.css" rel="stylesheet" type="text/css"/>
  <script src="view/javascript/jquery/jquery-3.7.1.min.js" type="text/javascript"></script>
  <script type="text/javascript" src="view/javascript/common.js"></script>
      </head>
<body>
<div id="alert"></div>
<div id="container">
  <header id="header" class="navbar navbar-expand navbar-light bg-light">
    <div class="container-fluid">
      <a href="http://opencart4x.test/backend/index.php?route=common/dashboard&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4" class="navbar-brand d-none d-lg-block"><img src="view/image/logo.png" alt="OpenCart" title="OpenCart"/></a>
              <button type="button" id="button-menu" class="btn btn-link d-inline-block d-lg-none"><i class="fa-solid fa-bars"></i></button>
        <ul class="nav navbar-nav">
          <li id="nav-notification" class="nav-item dropdown">
            <a href="#" data-bs-toggle="dropdown" class="nav-link dropdown-toggle"><i class="fa-regular fa-bell"></i></a>
            <div class="dropdown-menu dropdown-menu-end">
                              <span class="dropdown-item text-center">No results!</span>
                          </div>
          </li>
          <li id="nav-language" class="nav-item dropdown">      <a href="en-gb" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><img src="http://opencart4x.test/catalog/language/en-gb/en-gb.png" alt="English" title="English"/></a>
  <ul class="dropdown-menu">
      <li><a href="en-gb" class="dropdown-item"><img src="http://opencart4x.test/catalog/language/en-gb/en-gb.png" alt="English" title="English"/> English</a></li>
  </ul>
<input type="hidden" name="redirect" value="http://opencart4x.test/backend/index.php?route=common/dashboard&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4" id="input-redirect"/></li>
          <li id="nav-profile" class="nav-item dropdown">
            <a href="#" data-bs-toggle="dropdown" class="nav-link dropdown-toggle"><img src="http://opencart4x.test/image/cache/profile-45x45.png" alt="John Doe" title="John Doe" class="rounded-circle"/><span class="d-none d-md-inline d-lg-inline">&nbsp;&nbsp;&nbsp;John Doe <i class="fa-solid fa-caret-down fa-fw"></i></span></a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a href="http://opencart4x.test/backend/index.php?route=user/profile&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4" class="dropdown-item"><i class="fa-solid fa-user-circle fa-fw"></i> Your Profile</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><h6 class="dropdown-header">Stores</h6></li>
                              <a href="http://opencart4x.test/" target="_blank" class="dropdown-item">Your Store</a>
                            <li><hr class="dropdown-divider"></li>
              <li><h6 class="dropdown-header">Help</h6></li>
              <li><a href="https://www.opencart.com" target="_blank" class="dropdown-item"><i class="fa-brands fa-opencart fa-fw"></i> OpenCart Homepage</a></li>
              <li><a href="https://docs.opencart.com" target="_blank" class="dropdown-item"><i class="fa-solid fa-file fa-fw"></i> Documentation</a></li>
              <li><a href="https://forum.opencart.com" target="_blank" class="dropdown-item"><i class="fa-solid fa-comments fa-fw"></i> Support Forum</a></li>
            </ul>
          </li>
          <li id="nav-logout" class="nav-item"><a href="http://opencart4x.test/backend/index.php?route=common/logout&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4" class="nav-link"><i class="fa-solid fa-sign-out"></i> <span class="d-none d-md-inline">Logout</span></a></li>
        </ul>
          </div>
  </header>
<nav id="column-left">
	<div id="navigation"><span class="fa-solid fa-bars"></span> Navigation</div>
	<ul id="menu">
							<li id="menu-dashboard">
									<a href="http://opencart4x.test/backend/index.php?route=common/dashboard&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4"><i class="fas fa-home"></i> Dashboard</a>
											</li>
								<li id="menu-catalog">
									<a href="#collapse-1" data-bs-toggle="collapse" class="parent collapsed"><i class="fa-solid fa-tag"></i> Catalog</a>
													<ul id="collapse-1" class="collapse">
																			<li>									<a href="http://opencart4x.test/backend/index.php?route=catalog/category&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4">Categories</a>
																							</li>
																				<li>									<a href="http://opencart4x.test/backend/index.php?route=catalog/product&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4">Products</a>
																							</li>
																				<li>									<a href="http://opencart4x.test/backend/index.php?route=catalog/subscription_plan&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4">Subscription Plans</a>
																							</li>
																				<li>									<a href="#collapse-1-3" data-bs-toggle="collapse" class="parent collapsed">Filters</a>
																									<ul id="collapse-1-3" class="collapse">
																															<li>													<a href="http://opencart4x.test/backend/index.php?route=catalog/filter&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4">Filters</a>
																								</li>
																																<li>													<a href="http://opencart4x.test/backend/index.php?route=catalog/filter_group&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4">Filter Groups</a>
																								</li>
																														</ul>
															</li>
																				<li>									<a href="#collapse-1-4" data-bs-toggle="collapse" class="parent collapsed">Attributes</a>
																									<ul id="collapse-1-4" class="collapse">
																															<li>													<a href="http://opencart4x.test/backend/index.php?route=catalog/attribute&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4">Attributes</a>
																								</li>
																																<li>													<a href="http://opencart4x.test/backend/index.php?route=catalog/attribute_group&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4">Attribute Groups</a>
																								</li>
																														</ul>
															</li>
																				<li>									<a href="http://opencart4x.test/backend/index.php?route=catalog/option&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4">Options</a>
																							</li>
																				<li>									<a href="http://opencart4x.test/backend/index.php?route=catalog/manufacturer&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4">Manufacturers</a>
																							</li>
																				<li>									<a href="http://opencart4x.test/backend/index.php?route=catalog/download&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4">Downloads</a>
																							</li>
																				<li>									<a href="http://opencart4x.test/backend/index.php?route=catalog/review&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4">Reviews</a>
																							</li>
																				<li>									<a href="http://opencart4x.test/backend/index.php?route=catalog/information&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4">Information</a>
																							</li>
																		</ul>
							</li>
								<li id="menu-cms">
									<a href="#collapse-2" data-bs-toggle="collapse" class="parent collapsed"><i class="fa-regular fa-newspaper"></i> CMS</a>
													<ul id="collapse-2" class="collapse">
																			<li>									<a href="http://opencart4x.test/backend/index.php?route=cms/topic&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4">Topics</a>
																							</li>
																				<li>									<a href="http://opencart4x.test/backend/index.php?route=cms/article&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4">Articles</a>
																							</li>
																				<li>									<a href="http://opencart4x.test/backend/index.php?route=cms/comment&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4">Comments</a>
																							</li>
																				<li>									<a href="http://opencart4x.test/backend/index.php?route=cms/antispam&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4">Anti-Spam</a>
																							</li>
																		</ul>
							</li>
								<li id="menu-extension">
									<a href="#collapse-3" data-bs-toggle="collapse" class="parent collapsed"><i class="fas fa-puzzle-piece"></i> Extensions</a>
													<ul id="collapse-3" class="collapse">
																			<li>									<a href="http://opencart4x.test/backend/index.php?route=marketplace/marketplace&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4">Marketplace</a>
																							</li>
																				<li>									<a href="http://opencart4x.test/backend/index.php?route=marketplace/installer&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4">Installer</a>
																							</li>
																				<li>									<a href="http://opencart4x.test/backend/index.php?route=marketplace/extension&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4">Extensions</a>
																							</li>
																				<li>									<a href="http://opencart4x.test/backend/index.php?route=marketplace/modification&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4">Modification</a>
																							</li>
																				<li>									<a href="http://opencart4x.test/backend/index.php?route=marketplace/startup&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4">Startup</a>
																							</li>
																				<li>									<a href="http://opencart4x.test/backend/index.php?route=marketplace/event&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4">Events</a>
																							</li>
																				<li>									<a href="http://opencart4x.test/backend/index.php?route=marketplace/cron&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4">Cron Jobs</a>
																							</li>
																		</ul>
							</li>
								<li id="menu-design">
									<a href="#collapse-4" data-bs-toggle="collapse" class="parent collapsed"><i class="fas fa-desktop"></i> Design</a>
													<ul id="collapse-4" class="collapse">
																			<li>									<a href="http://opencart4x.test/backend/index.php?route=design/layout&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4">Layouts</a>
																							</li>
																				<li>									<a href="http://opencart4x.test/backend/index.php?route=design/theme&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4">Theme Editor</a>
																							</li>
																				<li>									<a href="http://opencart4x.test/backend/index.php?route=design/translation&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4">Language Editor</a>
																							</li>
																				<li>									<a href="http://opencart4x.test/backend/index.php?route=design/banner&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4">Banners</a>
																							</li>
																				<li>									<a href="http://opencart4x.test/backend/index.php?route=design/seo_url&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4">SEO URL</a>
																							</li>
																		</ul>
							</li>
								<li id="menu-sale">
									<a href="#collapse-5" data-bs-toggle="collapse" class="parent collapsed"><i class="fas fa-shopping-cart"></i> Sales</a>
													<ul id="collapse-5" class="collapse">
																			<li>									<a href="http://opencart4x.test/backend/index.php?route=sale/order&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4">Orders</a>
																							</li>
																				<li>									<a href="http://opencart4x.test/backend/index.php?route=sale/subscription&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4">Subscriptions</a>
																							</li>
																				<li>									<a href="http://opencart4x.test/backend/index.php?route=sale/returns&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4">Returns</a>
																							</li>
																		</ul>
							</li>
								<li id="menu-customer">
									<a href="#collapse-6" data-bs-toggle="collapse" class="parent collapsed"><i class="fas fa-user"></i> Customers</a>
													<ul id="collapse-6" class="collapse">
																			<li>									<a href="http://opencart4x.test/backend/index.php?route=customer/customer&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4">Customers</a>
																							</li>
																				<li>									<a href="http://opencart4x.test/backend/index.php?route=customer/customer_group&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4">Customer Groups</a>
																							</li>
																				<li>									<a href="http://opencart4x.test/backend/index.php?route=customer/customer_approval&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4">Customer Approvals</a>
																							</li>
																				<li>									<a href="http://opencart4x.test/backend/index.php?route=customer/gdpr&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4">GDPR</a>
																							</li>
																				<li>									<a href="http://opencart4x.test/backend/index.php?route=customer/custom_field&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4">Custom Fields</a>
																							</li>
																		</ul>
							</li>
								<li id="menu-marketing">
									<a href="#collapse-7" data-bs-toggle="collapse" class="parent collapsed"><i class="fas fa-share-alt"></i> Marketing</a>
													<ul id="collapse-7" class="collapse">
																			<li>									<a href="http://opencart4x.test/backend/index.php?route=marketing/affiliate&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4">Affiliate</a>
																							</li>
																				<li>									<a href="http://opencart4x.test/backend/index.php?route=marketing/marketing&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4">Marketing</a>
																							</li>
																				<li>									<a href="http://opencart4x.test/backend/index.php?route=marketing/coupon&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4">Coupons</a>
																							</li>
																				<li>									<a href="http://opencart4x.test/backend/index.php?route=marketing/contact&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4">Mail</a>
																							</li>
																		</ul>
							</li>
								<li id="menu-system">
									<a href="#collapse-8" data-bs-toggle="collapse" class="parent collapsed"><i class="fas fa-cog"></i> System</a>
													<ul id="collapse-8" class="collapse">
																			<li>									<a href="http://opencart4x.test/backend/index.php?route=setting/store&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4">Settings</a>
																							</li>
																				<li>									<a href="#collapse-8-1" data-bs-toggle="collapse" class="parent collapsed">Users</a>
																									<ul id="collapse-8-1" class="collapse">
																															<li>													<a href="http://opencart4x.test/backend/index.php?route=user/user&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4">Users</a>
																								</li>
																																<li>													<a href="http://opencart4x.test/backend/index.php?route=user/user_permission&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4">User Groups</a>
																								</li>
																																<li>													<a href="http://opencart4x.test/backend/index.php?route=user/api&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4">API</a>
																								</li>
																														</ul>
															</li>
																				<li>									<a href="#collapse-8-2" data-bs-toggle="collapse" class="parent collapsed">Localisation</a>
																									<ul id="collapse-8-2" class="collapse">
																															<li>													<a href="http://opencart4x.test/backend/index.php?route=localisation/location&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4">Store Location</a>
																								</li>
																																<li>													<a href="http://opencart4x.test/backend/index.php?route=localisation/language&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4">Languages</a>
																								</li>
																																<li>													<a href="http://opencart4x.test/backend/index.php?route=localisation/currency&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4">Currencies</a>
																								</li>
																																<li>													<a href="http://opencart4x.test/backend/index.php?route=localisation/stock_status&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4">Stock Statuses</a>
																								</li>
																																<li>													<a href="http://opencart4x.test/backend/index.php?route=localisation/order_status&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4">Order Statuses</a>
																								</li>
																																<li>													<a href="http://opencart4x.test/backend/index.php?route=localisation/subscription_status&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4">Subscription Statuses</a>
																								</li>
																																<li>													<a href="#collapse-8-2-6" data-bs-toggle="collapse" class="parent collapsed">Returns</a>
																																					<ul id="collapse-8-2-6" class="collapse">
																													<li><a href="http://opencart4x.test/backend/index.php?route=localisation/return_status&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4">Return Statuses</a></li>
																													<li><a href="http://opencart4x.test/backend/index.php?route=localisation/return_action&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4">Return Actions</a></li>
																													<li><a href="http://opencart4x.test/backend/index.php?route=localisation/return_reason&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4">Return Reasons</a></li>
																											</ul>
												</li>
																																<li>													<a href="http://opencart4x.test/backend/index.php?route=localisation/country&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4">Countries</a>
																								</li>
																																<li>													<a href="http://opencart4x.test/backend/index.php?route=localisation/zone&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4">Zones</a>
																								</li>
																																<li>													<a href="http://opencart4x.test/backend/index.php?route=localisation/geo_zone&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4">Geo Zones</a>
																								</li>
																																<li>													<a href="#collapse-8-2-10" data-bs-toggle="collapse" class="parent collapsed">Taxes</a>
																																					<ul id="collapse-8-2-10" class="collapse">
																													<li><a href="http://opencart4x.test/backend/index.php?route=localisation/tax_class&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4">Tax Classes</a></li>
																													<li><a href="http://opencart4x.test/backend/index.php?route=localisation/tax_rate&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4">Tax Rates</a></li>
																											</ul>
												</li>
																																<li>													<a href="http://opencart4x.test/backend/index.php?route=localisation/length_class&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4">Length Classes</a>
																								</li>
																																<li>													<a href="http://opencart4x.test/backend/index.php?route=localisation/weight_class&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4">Weight Classes</a>
																								</li>
																																<li>													<a href="http://opencart4x.test/backend/index.php?route=localisation/address_format&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4">Address Format</a>
																								</li>
																														</ul>
															</li>
																				<li>									<a href="#collapse-8-3" data-bs-toggle="collapse" class="parent collapsed">Maintenance</a>
																									<ul id="collapse-8-3" class="collapse">
																															<li>													<a href="http://opencart4x.test/backend/index.php?route=tool/upgrade&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4">Upgrade</a>
																								</li>
																																<li>													<a href="http://opencart4x.test/backend/index.php?route=tool/backup&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4">Backup / Restore</a>
																								</li>
																																<li>													<a href="http://opencart4x.test/backend/index.php?route=tool/upload&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4">Uploads</a>
																								</li>
																																<li>													<a href="http://opencart4x.test/backend/index.php?route=tool/log&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4">Error Logs</a>
																								</li>
																														</ul>
															</li>
																		</ul>
							</li>
								<li id="menu-report">
									<a href="#collapse-9" data-bs-toggle="collapse" class="parent collapsed"><i class="fas fa-chart-bar"></i> Reports</a>
													<ul id="collapse-9" class="collapse">
																			<li>									<a href="http://opencart4x.test/backend/index.php?route=report/report&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4">Reports</a>
																							</li>
																				<li>									<a href="http://opencart4x.test/backend/index.php?route=report/online&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4">Who's Online</a>
																							</li>
																				<li>									<a href="http://opencart4x.test/backend/index.php?route=report/statistics&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4">Statistics</a>
																							</li>
																		</ul>
							</li>
						</ul>
			<div id="stats">
			<ul>
				<li>
					<div>Orders Completed <span class="float-end">0%</span></div>
					<div class="progress">
						<div class="progress-bar bg-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"><span class="sr-only">0%</span></div>
					</div>
				</li>
				<li>
					<div>Orders Processing <span class="float-end">0%</span></div>
					<div class="progress">
						<div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"><span class="sr-only">0%</span></div>
					</div>
				</li>
				<li>
					<div>Other Statuses <span class="float-end">0%</span></div>
					<div class="progress">
						<div class="progress-bar bg-danger" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"><span class="sr-only">0%</span></div>
					</div>
				</li>
			</ul>
		</div>
	</nav>

<div id="content">
  <div class="page-header">
    <div class="container-fluid">
              <div class="float-end">
          <button type="button" id="button-setting" data-bs-toggle="tooltip" title="Developer Setting" class="btn btn-info"><i class="fa-solid fa-cog"></i></button>
        </div>
            <h1>Dashboard</h1>
      <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="http://opencart4x.test/backend/index.php?route=common/dashboard&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4">Home</a></li>
                  <li class="breadcrumb-item"><a href="http://opencart4x.test/backend/index.php?route=common/dashboard&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4">Dashboard</a></li>
              </ol>
    </div>
  </div>
  <div class="container-fluid">
          <div class="row">
                                                                                                                              <div class="col-lg-3 col-md-3 col-sm-6 mb-3"><div class="tile tile-primary">
  <div class="tile-heading">Total Orders <span class="float-end">
          0%</span></div>
  <div class="tile-body"><i class="fa-solid fa-shopping-cart"></i>
    <h2 class="float-end">0</h2>
  </div>
  <div class="tile-footer"><a href="http://opencart4x.test/backend/index.php?route=sale/order&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4">View more...</a></div>
</div>
</div>
                                                                                                                              <div class="col-lg-3 col-md-3 col-sm-6 mb-3"><div class="tile tile-primary">
  <div class="tile-heading">Total Sales <span class="float-end">
        0%</span>
  </div>
  <div class="tile-body"><i class="fa-solid fa-credit-card"></i>
    <h2 class="float-end">0</h2>
  </div>
  <div class="tile-footer"><a href="http://opencart4x.test/backend/index.php?route=sale/order&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4">View more...</a></div>
</div>
</div>
                                                                                                                              <div class="col-lg-3 col-md-3 col-sm-6 mb-3"><div class="tile tile-primary">
  <div class="tile-heading">Total Customers <span class="float-end">
          0%</span></div>
  <div class="tile-body"><i class="fa-solid fa-user"></i>
    <h2 class="float-end">0</h2>
  </div>
  <div class="tile-footer"><a href="http://opencart4x.test/backend/index.php?route=customer/customer&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4">View more...</a></div>
</div>
</div>
                                                                                                                              <div class="col-lg-3 col-md-3 col-sm-6 mb-3"><div class="tile tile-primary">
  <div class="tile-heading">People Online</div>
  <div class="tile-body"><i class="fa-solid fa-users"></i>
    <h2 class="float-end">0</h2>
  </div>
  <div class="tile-footer"><a href="http://opencart4x.test/backend/index.php?route=report/online&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4">View more...</a></div>
</div>
</div>
              </div>
          <div class="row">
                                                                                                                                      <div class="col-lg-6 col-md-12 col-sm-12 mb-3"><div class="card mb-3">
  <div class="card-header"><i class="fa-solid fa-globe"></i> World Map</div>
  <div class="card-body">
    <div id="vmap" style="width: 100%; height: 260px;"></div>
  </div>
</div>
<link type="text/css" href="view/javascript/jquery/jqvmap/jqvmap.css" rel="stylesheet" media="screen"/>
<script type="text/javascript" src="view/javascript/jquery/jqvmap/jquery.vmap.js"></script>
<script type="text/javascript" src="view/javascript/jquery/jqvmap/maps/jquery.vmap.world.js"></script>
<script type="text/javascript"><!--
$(document).ready(function() {
    $.ajax({
        url: 'index.php?route=extension/opencart/dashboard/map.map&user_token=3d4e47ac8ed96d232ac26566905a44e4',
        dataType: 'json',
        success: function(json) {
            data = [];

            for (i in json) {
                data[i] = json[i]['total'];
            }

            $('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: '#FFFFFF',
                borderColor: '#FFFFFF',
                color: '#9FD5F1',
                hoverOpacity: 0.7,
                selectedColor: '#666666',
                enableZoom: true,
                showTooltip: true,
                values: data,
                normalizeFunction: 'polynomial',
                onLabelShow: function(event, label, code) {
                    if (json[code]) {
                        label.html('<strong>' + label.text() + '</strong><br />' + 'Orders ' + json[code]['total'] + '<br />' + 'Sales ' + json[code]['amount']);
                    }
                }
            });
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
        }
    });
});
//--></script>
</div>
                                                                                                                                      <div class="col-lg-6 col-md-12 col-sm-12 mb-3"><div class="card mb-3">
  <div class="card-header">
    <div class="float-end"><a href="#" class="dropdown-toggle" data-bs-toggle="dropdown"><i class="fa-regular fa-calendar"></i> <i class="fa-solid fa-caret-down"></i></a>
      <div id="range" class="dropdown-menu dropdown-menu-right">
        <a href="day" class="dropdown-item">Today</a> <a href="week" class="dropdown-item">Week</a> <a href="month" class="dropdown-item active">Month</a> <a href="year" class="dropdown-item">Year</a>
      </div>
    </div>
    <i class="fa-solid fa-chart-bar"></i> Sales Analytics
  </div>
  <div class="card-body">
    <div id="chart-sale" style="width: 100%; height: 260px;"></div>
  </div>
</div>
<script type="text/javascript" src="view/javascript/jquery/flot/jquery.flot.js"></script>
<script type="text/javascript" src="view/javascript/jquery/flot/jquery.flot.resize.min.js"></script>
<script type="text/javascript"><!--
$('#range a').on('click', function(e) {
    e.preventDefault();

    $(this).parent().find('a').removeClass('active');

    $(this).addClass('active');

    $.ajax({
        type: 'get',
        url: 'index.php?route=extension/opencart/dashboard/chart.chart&user_token=3d4e47ac8ed96d232ac26566905a44e4&range=' + $(this).attr('href'),
        dataType: 'json',
        success: function(json) {
            if (typeof json['order'] == 'undefined') {
                return false;
            }

            var option = {
                shadowSize: 0,
                colors: ['#9FD5F1', '#1065D2'],
                bars: {
                    show: true,
                    fill: true,
                    lineWidth: 1
                },
                grid: {
                    backgroundColor: '#FFFFFF',
                    hoverable: true
                },
                points: {
                    show: false
                },
                xaxis: {
                    show: true,
                    ticks: json['xaxis']
                }
            }

            $.plot('#chart-sale', [json['order'], json['customer']], option);

            $('#chart-sale').bind('plothover', function(event, pos, item) {
                $('.tooltip').remove();

                if (item) {
                    $('<div id="tooltip" class="tooltip top show"><div class="tooltip-arrow"></div><div class="tooltip-inner">' + item.datapoint[1].toFixed(2) + '</div></div>').prependTo('body');

                    $('#tooltip').css({
                        position: 'absolute',
                        left: item.pageX - ($('#tooltip').outerWidth() / 2),
                        top: item.pageY - $('#tooltip').outerHeight(),
                        pointer: 'cursor'
                    }).fadeIn('slow');

                    $('#chart-sale').css('cursor', 'pointer');
                } else {
                    $('#chart-sale').css('cursor', 'auto');
                }
            });
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
        }
    });
});

$('#range a.active').trigger('click');
//--></script>
</div>
              </div>
          <div class="row">
                                                                                                                                      <div class="col-lg-4 col-md-12 col-sm-12 mb-3"><div class="card mb-3">
  <div class="card-header"><i class="fa-regular fa-calendar"></i> Recent Activity</div>
  <ul class="list-group list-group-flush">
          <li class="list-group-item text-center">No results!</li>
      </ul>
</div>
</div>
                                                                                                                                      <div class="col-lg-8 col-md-12 col-sm-12 mb-3"><div class="card mb-3">
  <div class="card-header"><i class="fa-solid fa-shopping-cart"></i> Latest Orders</div>
  <div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
          <td class="text-end">Order ID</td>
          <td>Customer</td>
          <td>Status</td>
          <td>Date Added</td>
          <td class="text-end">Total</td>
          <td class="text-end">Action</td>
        </tr>
      </thead>
      <tbody>
                  <tr>
            <td class="text-center" colspan="6">No results!</td>
          </tr>
              </tbody>
    </table>
  </div>
</div>
</div>
              </div>
      </div>
  <div id="security"></div>
<button type="button" id="button-refresh" class="btn btn-danger d-none"><i class="fa-solid fa-sync"></i></button>
<script type="text/javascript"><!--
$(document).ready(function() {
    $('#modal-security').modal('show');

    $('#accordion .accordion-header:first button').trigger('click');
});

$('#button-refresh').on('click', function() {
    var element = this;

    $.ajax({
        url: 'index.php?route=common/security.list&user_token=3d4e47ac8ed96d232ac26566905a44e4',
        dataType: 'html',
        beforeSend: function() {
            $(element).button('loading');
        },
        complete: function() {
            $(element).button('reset');
        },
        success: function(html) {
            $('#modal-security').modal('dispose');

            $('#security').html(html);

            $('#modal-security').modal('show');

            $('#accordion .accordion-header:first button').trigger('click');
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
        }
    });
});

$('#security').on('click', '#button-install', function() {
    var element = this;

    $.ajax({
        url: 'index.php?route=common/security.install&user_token=3d4e47ac8ed96d232ac26566905a44e4',
        dataType: 'json',
        beforeSend: function() {
            $(element).button('loading');
        },
        complete: function() {
            $(element).button('reset');
        },
        success: function(json) {
            console.log(json);

            $('.alert-dismissible').remove();

            if (json['error']) {
                $('#alert').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa-solid fa-circle-exclamation"></i> ' + json['error'] + ' <button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>');
            }

            if (json['success']) {
                $('#alert').prepend('<div class="alert alert-success alert-dismissible"><i class="fa-solid fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>');

                $('#button-refresh').trigger('click');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
        }
    });
});

$('#security').on('click', '#button-storage', function() {
    var element = this;

    $(element).button('loading');

    var next = 'index.php?route=common/security.storage&user_token=3d4e47ac8ed96d232ac26566905a44e4&name=' + encodeURIComponent($('#input-storage').val()) + '&path=' + encodeURIComponent($('#input-path').val());

    var storage = function() {
        return $.ajax({
            url: next,
            dataType: 'json',
            contentType: 'application/x-www-form-urlencoded',
            success: function(json) {
                console.log(json);

                $('.alert-dismissible').remove();

                if (json['error']) {
                    $('#alert').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa-solid fa-circle-exclamation"></i> ' + json['error'] + ' <button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>');

                    $(element).button('reset');
                }

                if (json['text']) {
                    $('#alert').prepend('<div class="alert alert-success alert-dismissible"><i class="fa-solid fa-check-circle-circle"></i> ' + json['text'] + ' <button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>');
                }

                if (json['success']) {
                    $('#alert').prepend('<div class="alert alert-success alert-dismissible"><i class="fa-solid fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>');

                    $(element).button('reset');

                    $('#button-refresh').trigger('click');
                }

                if (json['next']) {
                    next = json['next'];

                    chain.attach(storage);
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);

                $(element).button('reset');
            }
        });
    };

    chain.attach(storage);
});

$('#security').on('click', '#button-storage-delete', function() {
    var element = this;

    $.ajax({
        url: 'index.php?route=common/security.delete&user_token=3d4e47ac8ed96d232ac26566905a44e4&remove=storage',
        dataType: 'json',
        beforeSend: function() {
            $(element).button('loading');
        },
        complete: function() {
            $(element).button('reset');
        },
        success: function(json) {
            console.log(json);

            $('.alert-dismissible').remove();

            if (json['error']) {
                $('#alert').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa-solid fa-circle-exclamation"></i> ' + json['error'] + ' <button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>');
            }

            if (json['success']) {
                $('#alert').prepend('<div class="alert alert-success alert-dismissible"><i class="fa-solid fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>');

                $('#button-refresh').trigger('click');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
        }
    });
});

$('#security').on('click', '#button-admin', function() {
    var element = this;

    $(element).button('loading');

    var next = 'index.php?route=common/security.admin&user_token=3d4e47ac8ed96d232ac26566905a44e4&name=' + encodeURIComponent($('#input-admin').val());

    var admin = function() {
        return $.ajax({
            url: next,
            dataType: 'json',
            contentType: 'application/x-www-form-urlencoded',
            success: function(json) {
                console.log(json);

                $('.alert-dismissible').remove();

                if (json['redirect']) {
                    location = json['redirect'];
                }

                if (json['error']) {
                    $('#alert').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa-solid fa-circle-exclamation"></i> ' + json['error'] + ' <button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>');

                    $(element).button('reset');
                }

                if (json['text']) {
                    $('#alert').prepend('<div class="alert alert-success alert-dismissible"><i class="fa-solid fa-check-circle-circle"></i> ' + json['text'] + ' <button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>');
                }

                if (json['success']) {
                    $('#alert').prepend('<div class="alert alert-success alert-dismissible"><i class="fa-solid fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>');

                    $(element).button('reset');

                    $('#button-refresh').trigger('click');
                }

                if (json['next']) {
                    next = json['next'];

                    chain.attach(admin);
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);

                $(element).button('reset');
            }
        });
    };

    chain.attach(admin);
});

$('#security').on('click', '#button-admin-delete', function() {
    var element = this;

    $.ajax({
        url: 'index.php?route=common/security.delete&user_token=3d4e47ac8ed96d232ac26566905a44e4&remove=admin',
        dataType: 'json',
        beforeSend: function() {
            $(element).button('loading');
        },
        complete: function() {
            $(element).button('reset');
        },
        success: function(json) {
            console.log(json);

            $('.alert-dismissible').remove();

            if (json['error']) {
                $('#alert').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa-solid fa-circle-exclamation"></i> ' + json['error'] + ' <button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>');
            }

            if (json['success']) {
                $('#alert').prepend('<div class="alert alert-success alert-dismissible"><i class="fa-solid fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>');

                $('#button-refresh').trigger('click');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
        }
    });
});
//--></script>

</div>
<script type="text/javascript"><!--
$('#button-setting').on('click', function() {
    $.ajax({
        url: 'index.php?route=common/developer&user_token=3d4e47ac8ed96d232ac26566905a44e4',
        dataType: 'html',
        beforeSend: function() {
            $('#button-setting').button('loading');
        },
        complete: function() {
            $('#button-setting').button('reset');
        },
        success: function(html) {
            $('#modal-developer').remove();

            $('body').prepend(html);

            $('#modal-developer').modal('show');
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
        }
    });
});
//--></script>
<footer id="footer"><a href="https://www.opencart.com">OpenCart</a> &copy; 2009-2025 All Rights Reserved.<br/>Version 4.1.0.0</footer></div>
<script src="view/javascript/bootstrap/js/bootstrap.bundle.min.js" type="text/javascript"></script>
</body></html>
