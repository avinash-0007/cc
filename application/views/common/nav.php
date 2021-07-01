      <header>
            <nav class="content-wrapper">
                <div class="float-left">
                    <p class="site-title"><a href="<?php echo base_url(); ?>" title="Corona Virus Live Update"><img alt="Corona Virus Live Update " src="<?php echo base_url();?>extra/images/coronalogo.png" /></a> </p>
                </div>
                <div class="float-right">
				
				<ul id="menu" itemscope="" itemtype="http://www.schema.org/SiteNavigationElement">
<li><a href="<?php echo base_url(); ?>" itemprop="url"><span itemprop="name">Home</span></a></li>
<li><a href="<?php echo base_url(); ?>world" itemprop="url"><span itemprop="name">Coronavirus Cases</span></a></li>


	<?php if(count($states)){
		$i=1;
	while(4>$i){
		$statelink=str_replace(' ','-',strtolower($states[$i]['state']));
	?>
	<li><a href="<?php echo base_url();?>coronavirus/<?php echo $statelink; ?>" itemprop="url"><span itemprop="name"><?php echo $states[$i]['state']; ?></span></a></li>
	<?php $i++;}}?>

<li><a href="<?php echo base_url();?>contact-us" itemprop="url"><span itemprop="name">Contact</span></a></li>
</ul>
                   
                </div>
                <div class="clear"></div>
            </nav>
        </header>