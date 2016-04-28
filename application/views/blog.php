<body>
	<div id="wrapper">
		<!-- start header -->
		<section id="inner-headline">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<ul class="breadcrumb">
							<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
							<li class="active">Blog</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
	
   <!--  <table>
     <tr>
      <td><strong>Blog Title</strong></td>
      <td><strong>Image</strong></td>
      <td><strong>Content</strong></td>
      <td><strong>Date</strong></td>
    </tr>
     <?php foreach($blogs as $post){?>
     <tr>
         <td><?php echo $post->blog_title;?></td>
         <td><img src="<?php echo base_url().'assets/img/'.$post->image;?>"></td>
         <td><?php echo $post->content;?></td>
         <td><?php echo $post->date;?></td>
      </tr>    
     <?php }?>  
   </table> -->

<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<article> <?php foreach($blogs as $post){?>
						<div class="post-image">
							<div class="post-heading">
								<h3><?php echo $post->blog_title;?></h3>
							</div>
							<img src="<?php echo base_url().'assets/img/'.$post->image;?>">
						</div>
						<p>
							<?php echo $post->content;?>
						</p>
						<div class="bottom-article">
							<ul class="meta-post">
								<li><i class="icon-calendar">Posted date:</i> <?php echo $post->date;?></li>
							</ul>
						
						</div>
				</article>

     <?php }?>  
				
			</div>
		</div>
	</div>
	</section>  