    <div class="soc-menu-icons">
      <a href="https://www.facebook.com/The-Press-House-215959480570/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
      <a href="https://twitter.com/thepresshousepr" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
      <a href="https://www.instagram.com/thepresshousepr/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
</div><div class="collapse navbar-collapse navbar-right navbar-main-collapse">
      <ul class="nav navbar-nav">
        <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
      
       <!--  <li> <a class="page-scroll" href="<?php echo get_site_url() ; ?>/">Home</a> </li> -->
         <li> <a class="page-scroll" href="<?php echo get_site_url() ; ?>/about">About</a> </li>
        <li> <a class="page-scroll" href="<?php echo get_site_url() . '/' . strtolower(get_option('clientstxt')); ?>"><?php echo get_option('clientstxt');?></a> </li>
        <li> <a class="page-scroll" href="<?php echo get_site_url() ; ?>/events">Events</a> </li>
        <li> <a class="page-scroll" href="<?php echo get_site_url() ; ?>/tour">Tour</a> </li>
        <li> <a class="page-scroll" href="<?php echo get_site_url() ; ?>/press-release">Releases</a> </li>
         <li> <a class="page-scroll" href="<?php echo get_site_url() ; ?>/services">Services</a> </li>
             <div class="soc-menu-icons-mobile">
      <a href="https://www.facebook.com/The-Press-House-215959480570/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
      <a href="https://twitter.com/thepresshousepr" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
      <a href="https://www.instagram.com/thepresshousepr/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
</div>
       </li><li>
       <form role="search" method="get" id="searchform" class="searchform navbar-form" action="<?php echo get_site_url() ; ?>"> 
<!-- <label class="screen-reader-text" for="s">Search for:</label>  -->
 <div class="input-group">
<input type="text" value="" name="s" id="s" placeholder="Search Artists" class="form-control search-custom-form"  /> 
<input type="hidden" name="post_type" value="artist" /> 
    <div class="input-group-btn">
                <button class="btn btn-default search-custom-button" type="submit"><i class="glyphicon glyphicon-search"></i></button>
            </div>
</div>
</form>


    
        </li>

      </ul>
    </div>
