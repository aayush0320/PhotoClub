<?php
	require('include/head.html');
	require('include/headerHome.html');
?>
<div id="content-block">
<div class="container-fluid custom-container">
<div class="row">
<div class="col-md-2 left-feild">
<form action="#" class="input-search">
<input type="text" required placeholder="Enter keyword">
<i class="fa fa-search"></i>
<input type="submit" value="">
</form>
</div>
<div class="col-md-10 ">
<div class="for-be-dropdowns">
<div class="be-drop-down">
<i class="icon-projects"></i>
<span class="be-dropdown-content"> Projects </span>
<ul class="drop-down-list">
<li class="filter" data-filter=".category-1"><a data-type="category-1">Projects</a></li>
<li class="filter" data-filter=".category-2"><a data-type="category-2">Work in Progress</a></li>
<li class="filter" data-filter=".category-3"><a data-type="category-3">People</a></li>
</ul>
</div>
<div class="be-drop-down">
<i class="icon-creative"></i>
<span class="be-dropdown-content">All Creative Filds
</span>
<ul class="drop-down-list">
<li class="filter" data-filter=".category-4"><a>Item - 1</a></li>
<li class="filter" data-filter=".category-5"><a>Item - 2</a></li>
<li class="filter" data-filter=".category-1"><a>Item - 3</a></li>
</ul>
</div>
<div class="be-drop-down">
<i class="icon-features"></i>
<span class="be-dropdown-content">Features
</span>
<ul class="drop-down-list">
<li class="filter" data-filter=".category-2"><a>Featured</a></li>
<li class="filter" data-filter=".category-3"><a>Most Appreciated</a></li>
<li class="filter" data-filter=".category-4"><a>Most Viewed</a></li>
<li class="filter" data-filter=".category-5"><a>Most Discussed</a></li>
<li class="filter" data-filter=".category-1"><a>Most Recent</a></li>
</ul>
</div>
<div class="be-drop-down">
<i class="icon-worldwide"></i>
<span class="be-dropdown-content">Worldwide
</span>
<ul class="drop-down-list">
<li class="filter" data-filter=".category-2"><a>Item - 1</a></li>
<li class="filter" data-filter=".category-3"><a>Item - 2</a></li>
<li class="filter" data-filter=".category-4"><a>Item - 3</a></li>
<li class="filter" data-filter=".category-5"><a>Item - 4</a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="s_keywords">
<div class="container-fluid custom-container">
<a class="btn color-1 size-3 hover-10"><i class="fa fa-trash-o"></i>clear all filters</a>
<a class="btn color-6 size-3 hover-10">Fine Arts Photography  <i class="fa keyword fa-times"></i></a>
<a class="btn color-6 size-3 hover-10">Into the Wild  <i class="fa keyword fa-times"></i></a>
<a class="btn color-6 size-3 hover-10">Nature & Landscapes <i class="fa keyword fa-times"></i></a>
<a class="btn color-6 size-3 hover-10">Unseen World of Streets Winners <i class="fa keyword fa-times"></i></a>
</div>
</div>
<div class="container-fluid custom-container">
<div class="row">
<div class="col-md-2 left-feild">
<div class="be-vidget">
<h3 class="letf-menu-article">
Popular Categories
</h3>
<div class="creative_filds_block">
<div class="ul">
<a data-filter=".category-1" class="filter">Fine Arts Photography </a>
<a data-filter=".category-2" class="filter">Into the Wild </a>
<a data-filter=".category-3" class="filter">Nature & Landscapes</a>
<a data-filter=".category-4" class="filter">Unseen World of Streets Winners </a>

</div>
</div>
</div>
<div class="be-vidget">
<h3 class="letf-menu-article">
Popular Tags
</h3>
<div class="tags_block clearfix">
<ul>
<li><a data-filter=".category-6" class="filter">photoshop</a></li>
<li><a data-filter=".category-1" class="filter">graphic</a></li>
<li><a data-filter=".category-2" class="filter">art</a></li>
<li><a data-filter=".category-3" class="filter">website</a></li>
<li><a data-filter=".category-4" class="filter">logo</a></li>
<li><a data-filter=".category-5" class="filter">identity</a></li>
<li><a data-filter=".category-6" class="filter">logo design</a></li>
<li><a data-filter=".category-1" class="filter">interactive</a></li>
<li><a data-filter=".category-2" class="filter">blue</a></li>
<li><a data-filter=".category-3" class="filter">branding</a></li>
</ul>
</div>
</div>
<div class="be-vidget">
<h3 class="letf-menu-article">
Filter By
</h3>
<div class="filter-block">
<ul>
<li><a><i class="fa fa-graduation-cap"></i>Schools</a>
<div class="be-popup">
<h3 class="letf-menu-article">
Enter School
</h3>
<form action="#" class="input-search">
<input class="filters-input" type="text" required placeholder="Start typing to see list">
</form>
<i class="fa fa-times"></i>
</div>
</li>
<li><a><i class="fa fa-wrench"></i>Tools Used</a>
<div class="be-popup">
<h3 class="letf-menu-article">
Tools
</h3>
<form action="#" class="input-search">
<input class="filters-input" type="text" required placeholder="Start typing to see list">
</form>
<i class="fa fa-times"></i>
</div>
</li>
<li><a><i class="fa fa-paint-brush"></i>Color</a>
<div class="be-popup be-color-picker">
<h3 class="letf-menu-article">
Choose color
</h3>
<div class="for-colors">
<ul class="colors  cfix">
<li data-filter=".category-1" class="color filter color-0-0"></li>
<li data-filter=".category-2" class="color filter color-0-1"></li>
<li data-filter=".category-3" class="color filter color-0-2"></li>
<li data-filter=".category-4" class="color filter color-0-3"></li>
<li data-filter=".category-5" class="color filter color-0-4"></li>
<li data-filter=".category-1" class="color filter color-0-5"></li>
<li data-filter=".category-2" class="color filter color-0-6"></li>
<li data-filter=".category-3" class="color filter color-0-7"></li>
<li data-filter=".category-4" class="color filter color-0-8"></li>
<li data-filter=".category-5" class="color filter color-0-9"></li>
<li data-filter=".category-1" class="color filter color-0-10"></li>
<li data-filter=".category-5" class="color filter color-0-11"></li>
<li data-filter=".category-1" class="color filter color-1-0"></li>
<li data-filter=".category-2" class="color filter color-1-1"></li>
<li data-filter=".category-1" class="color filter color-1-2"></li>
<li data-filter=".category-1" class="color filter color-1-3"></li>
<li data-filter=".category-1" class="color filter color-1-4"></li>
<li data-filter=".category-4" class="color filter color-1-5"></li>
<li data-filter=".category-1" class="color filter color-1-6"></li>
<li data-filter=".category-1" class="color filter color-1-7"></li>
<li data-filter=".category-6" class="color filter color-1-8"></li>
<li data-filter=".category-1" class="color filter color-1-9"></li>
<li data-filter=".category-1" class="color filter color-1-10"></li>
<li data-filter=".category-1" class="color filter color-1-11"></li>
<li data-filter=".category-1" class="color filter color-2-0"></li>
<li data-filter=".category-1" class="color filter color-2-1"></li>
<li data-filter=".category-1" class="color filter color-2-2"></li>
<li data-filter=".category-1" class="color filter color-2-3"></li>
<li data-filter=".category-1" class="color filter color-2-4"></li>
<li data-filter=".category-1" class="color filter color-2-5"></li>
<li data-filter=".category-1" class="color filter color-2-6"></li>
<li data-filter=".category-1" class="color filter color-2-7"></li>
<li data-filter=".category-1" class="color filter color-2-8"></li>
<li data-filter=".category-1" class="color filter color-2-9"></li>
<li data-filter=".category-1" class="color filter color-2-10"></li>
<li data-filter=".category-1" class="color filter color-2-11"></li>
<li data-filter=".category-1" class="color filter color-3-0"></li>
<li data-filter=".category-1" class="color filter color-3-1"></li>
<li data-filter=".category-1" class="color filter color-3-2"></li>
<li data-filter=".category-1" class="color filter color-3-3"></li>
<li data-filter=".category-1" class="color filter color-3-4"></li>
<li data-filter=".category-1" class="color filter color-3-5"></li>
<li data-filter=".category-1" class="color filter color-3-6"></li>
<li data-filter=".category-1" class="color filter color-3-7"></li>
<li data-filter=".category-1" class="color filter color-3-8"></li>
<li data-filter=".category-1" class="color filter color-3-9"></li>
<li data-filter=".category-1" class="color filter color-3-10"></li>
<li data-filter=".category-1" class="color filter color-3-11"></li>
<li data-filter=".category-1" class="color filter color-4-0"></li>
<li data-filter=".category-1" class="color filter color-4-1"></li>
<li data-filter=".category-1" class="color filter color-4-2"></li>
<li data-filter=".category-1" class="color filter color-4-3"></li>
<li data-filter=".category-1" class="color filter color-4-4"></li>
<li data-filter=".category-1" class="color filter color-4-5"></li>
<li data-filter=".category-1" class="color filter color-4-6"></li>
<li data-filter=".category-1" class="color filter color-4-7"></li>
<li data-filter=".category-1" class="color filter color-4-8"></li>
<li data-filter=".category-1" class="color filter color-4-9"></li>
<li data-filter=".category-1" class="color filter color-4-10"></li>
<li data-filter=".category-1" class="color filter color-4-11"></li>
<li data-filter=".category-1" class="color filter color-5-0"></li>
<li data-filter=".category-1" class="color filter color-5-1"></li>
<li data-filter=".category-1" class="color filter color-5-2"></li>
<li data-filter=".category-1" class="color filter color-5-3"></li>
<li data-filter=".category-1" class="color filter color-5-4"></li>
<li data-filter=".category-1" class="color filter color-5-5"></li>
<li data-filter=".category-1" class="color filter color-5-6"></li>
<li data-filter=".category-1" class="color filter color-5-7"></li>
<li data-filter=".category-1" class="color filter color-5-8"></li>
<li data-filter=".category-1" class="color filter color-5-9"></li>
<li data-filter=".category-1" class="color filter color-5-10"></li>
<li data-filter=".category-1" class="color filter color-5-11"></li>
<li data-filter=".category-1" class="color filter color-6-0"></li>
<li data-filter=".category-1" class="color filter color-6-1"></li>
<li data-filter=".category-6" class="color filter color-6-2"></li>
<li data-filter=".category-1" class="color filter color-6-3"></li>
<li data-filter=".category-1" class="color filter color-6-4"></li>
<li data-filter=".category-1" class="color filter color-6-5"></li>
<li data-filter=".category-1" class="color filter color-6-6"></li>
<li data-filter=".category-1" class="color filter color-6-7"></li>
<li data-filter=".category-1" class="color filter color-6-8"></li>
<li data-filter=".category-1" class="color filter color-6-9"></li>
<li data-filter=".category-1" class="color filter color-6-10"></li>
<li data-filter=".category-1" class="color filter color-6-11"></li>
<li data-filter=".category-1" class="color filter color-7-0"></li>
<li data-filter=".category-1" class="color filter color-7-1"></li>
<li data-filter=".category-1" class="color filter color-7-2"></li>
<li data-filter=".category-1" class="color filter color-7-3"></li>
<li data-filter=".category-1" class="color filter color-7-4"></li>
<li data-filter=".category-1" class="color filter color-7-5"></li>
<li data-filter=".category-1" class="color filter color-7-6"></li>
<li data-filter=".category-1" class="color filter color-7-7"></li>
<li data-filter=".category-1" class="color filter color-7-8"></li>
<li data-filter=".category-1" class="color filter color-7-9"></li>
<li data-filter=".category-1" class="color filter color-7-10"></li>
<li data-filter=".category-1" class="color filter color-7-11"></li>
<li data-filter=".category-1" class="color filter color-8-0"></li>
<li data-filter=".category-1" class="color filter color-8-1"></li>
<li data-filter=".category-1" class="color filter color-8-2"></li>
<li data-filter=".category-1" class="color filter color-8-3"></li>
<li data-filter=".category-1" class="color filter color-8-4"></li>
<li data-filter=".category-1" class="color filter color-8-5"></li>
<li data-filter=".category-1" class="color filter color-8-6"></li>
<li data-filter=".category-6" class="color filter color-8-7"></li>
<li data-filter=".category-1" class="color filter color-8-8"></li>
<li data-filter=".category-1" class="color filter color-8-9"></li>
<li data-filter=".category-1" class="color filter color-8-10"></li>
<li data-filter=".category-1" class="color filter color-8-11"></li>
<li data-filter=".category-1" class="color filter color-9-0"></li>
<li data-filter=".category-1" class="color filter color-9-1"></li>
<li data-filter=".category-1" class="color filter color-9-2"></li>
<li data-filter=".category-1" class="color filter color-9-3"></li>
<li data-filter=".category-6" class="color filter color-9-4"></li>
<li data-filter=".category-1" class="color filter color-9-5"></li>
<li data-filter=".category-1" class="color filter color-9-6"></li>
<li data-filter=".category-1" class="color filter color-9-7"></li>
<li data-filter=".category-1" class="color filter color-9-8"></li>
<li data-filter=".category-1" class="color filter color-9-9"></li>
<li data-filter=".category-1" class="color filter color-9-10"></li>
<li data-filter=".category-1" class="color filter color-9-11"></li>
</ul>
</div>
<i class="fa fa-times"></i>
</div>
</li>
<li><a><i class="fa fa-camera-retro"></i>Visit Gallery</a>
<div class="be-popup">
<h3 class="letf-menu-article">
Gallery
</h3>
<form action="#" class="input-search">
<input class="filters-input" type="text" required placeholder="Start typing to see list">
</form>
<i class="fa fa-times"></i>
</div>
</li>
</ul>
</div>
</div>
</div>
<div class="col-md-10">
<div id="container-mix" class="row _post-container_">

<div class="category-1 mix custom-column-5">
<div class="be-post">
<a href="#" class="be-img-block">
<img src="gallery/FineArtsPhotographyWinners/min/AnkitSharma.jpg" alt="omg">
</a>
<div class="author-post">
<img src="img/a1.png" alt="" class="ava-author">
<span>by <a href="#">Ankit Sharma</a></span>
</div>
<div class="info-block">
<span><i class="fa fa-thumbs-o-up"></i> 360</span>
<span><i class="fa fa-eye"></i> 789</span>
<span><i class="fa fa-comment-o"></i> 20</span>
</div>
</div>
</div>

<div class="category-1 mix custom-column-5">
<div class="be-post">
<a href="#" class="be-img-block">
<img src="gallery/FineArtsPhotographyWinners/min/BhaumikPanchal.jpg" alt="omg">
</a>

<div class="author-post">
<img src="img/a2.png" alt="" class="ava-author">
<span>by <a href="#">Bhaumik Panchal</a></span>
</div>
<div class="info-block">
<span><i class="fa fa-thumbs-o-up"></i> 360</span>
<span><i class="fa fa-eye"></i> 789</span>
<span><i class="fa fa-comment-o"></i> 20</span>
</div>
</div>
</div>

<div class="category-1 mix custom-column-5">
<div class="be-post">
<a href="#" class="be-img-block">
<img src="gallery/FineArtsPhotographyWinners/min/DarshanPrajapati.jpg" alt="omg">
</a>

<div class="author-post">
<img src="img/a4.png" alt="" class="ava-author">
<span>by <a href="#">Darshan Prajapati</a></span>
</div>
<div class="info-block">
<span><i class="fa fa-thumbs-o-up"></i> 360</span>
<span><i class="fa fa-eye"></i> 789</span>
<span><i class="fa fa-comment-o"></i> 20</span>
</div>
</div>
</div>

<div class="category-1 mix custom-column-5">
<div class="be-post">
<a href="#" class="be-img-block">
<img src="gallery/FineArtsPhotographyWinners/min/HarshChoksi.jpg" alt="omg">
</a>

<div class="author-post">
<img src="img/a5.png" alt="" class="ava-author">
<span>by <a href="#">Harsh Choksi</a></span>
</div>
<div class="info-block">
<span><i class="fa fa-thumbs-o-up"></i> 360</span>
<span><i class="fa fa-eye"></i> 789</span>
<span><i class="fa fa-comment-o"></i> 20</span>
</div>
</div>
</div>

<div class="category-1 mix custom-column-5">
<div class="be-post">
<a href="#" class="be-img-block">
<img src="gallery/FineArtsPhotographyWinners/min/HarshiChoksi1.jpg" alt="omg">
</a>

<div class="author-post">
<img src="img/a6.png" alt="" class="ava-author">
<span>by <a href="#">Harshi Choksi</a></span>
</div>
<div class="info-block">
<span><i class="fa fa-thumbs-o-up"></i> 360</span>
<span><i class="fa fa-eye"></i> 789</span>
<span><i class="fa fa-comment-o"></i> 20</span>
</div>
</div>
</div>

<div class="category-1 mix custom-column-5">
<div class="be-post">
<a href="#" class="be-img-block">
<img src="gallery/FineArtsPhotographyWinners/min/HemendraGajjar1.jpg" alt="omg">
</a>

<div class="author-post">
<img src="img/a6.png" alt="" class="ava-author">
<span>by <a href="#">Hemendra Gajjar</a></span>
</div>
<div class="info-block">
<span><i class="fa fa-thumbs-o-up"></i> 360</span>
<span><i class="fa fa-eye"></i> 789</span>
<span><i class="fa fa-comment-o"></i> 20</span>
</div>
</div>
</div>

<div class="category-1 mix custom-column-5">
<div class="be-post">
<a href="#" class="be-img-block">
<img src="gallery/FineArtsPhotographyWinners/min/HemendraGajjar.jpg" alt="omg">
</a>

<div class="author-post">
<img src="img/a6.png" alt="" class="ava-author">
<span>by <a href="#">Hemendra Gajjar</a></span>
</div>
<div class="info-block">
<span><i class="fa fa-thumbs-o-up"></i> 360</span>
<span><i class="fa fa-eye"></i> 789</span>
<span><i class="fa fa-comment-o"></i> 20</span>
</div>
</div>
</div>

<div class="category-1 mix custom-column-5">
<div class="be-post">
<a href="#" class="be-img-block">
<img src="gallery/FineArtsPhotographyWinners/min/PurnenduNath.jpg" alt="omg">
</a>

<div class="author-post">
<img src="img/a6.png" alt="" class="ava-author">
<span>by <a href="#">Purnendu Nath</a></span>
</div>
<div class="info-block">
<span><i class="fa fa-thumbs-o-up"></i> 360</span>
<span><i class="fa fa-eye"></i> 789</span>
<span><i class="fa fa-comment-o"></i> 20</span>
</div>
</div>
</div>

<div class="category-1 mix custom-column-5">
<div class="be-post">
<a href="#" class="be-img-block">
<img src="gallery/FineArtsPhotographyWinners/min/SajidShaikh1.jpg" alt="omg">
</a>

<div class="author-post">
<img src="img/a6.png" alt="" class="ava-author">
<span>by <a href="#">Sajid Shaikh</a></span>
</div>
<div class="info-block">
<span><i class="fa fa-thumbs-o-up"></i> 360</span>
<span><i class="fa fa-eye"></i> 789</span>
<span><i class="fa fa-comment-o"></i> 20</span>
</div>
</div>
</div>

<div class="category-1 mix custom-column-5">
<div class="be-post">
<a href="#" class="be-img-block">
<img src="gallery/FineArtsPhotographyWinners/min/SajidShaikh.jpg" alt="omg">
</a>

<div class="author-post">
<img src="img/a6.png" alt="" class="ava-author">
<span>by <a href="#">Sajid Shaikh</a></span>
</div>
<div class="info-block">
<span><i class="fa fa-thumbs-o-up"></i> 360</span>
<span><i class="fa fa-eye"></i> 789</span>
<span><i class="fa fa-comment-o"></i> 20</span>
</div>
</div>
</div>

<div class="category-1 mix custom-column-5">
<div class="be-post">
<a href="#" class="be-img-block">
<img src="gallery/FineArtsPhotographyWinners/min/SeemaAbhale.jpg" alt="omg">
</a>

<div class="author-post">
<img src="img/a6.png" alt="" class="ava-author">
<span>by <a href="#">Seema Abhale</a></span>
</div>
<div class="info-block">
<span><i class="fa fa-thumbs-o-up"></i> 360</span>
<span><i class="fa fa-eye"></i> 789</span>
<span><i class="fa fa-comment-o"></i> 20</span>
</div>
</div>
</div>

<div class="category-1 mix custom-column-5">
<div class="be-post">
<a href="#" class="be-img-block">
<img src="gallery/FineArtsPhotographyWinners/min/VineetPanchal.jpg" alt="omg">
</a>

<div class="author-post">
<img src="img/a6.png" alt="" class="ava-author">
<span>by <a href="#">Vineet Panchal</a></span>
</div>
<div class="info-block">
<span><i class="fa fa-thumbs-o-up"></i> 360</span>
<span><i class="fa fa-eye"></i> 789</span>
<span><i class="fa fa-comment-o"></i> 20</span>
</div>
</div>
</div>

<div class="category-1 mix custom-column-5">
<div class="be-post">
<a href="#" class="be-img-block">
<img src="gallery/FineArtsPhotographyWinners/min/ChaitaliPandya.jpg" alt="omg">
</a>

<div class="author-post">
<img src="img/a3.png" alt="" class="ava-author">
<span>by <a href="#">Chaitali Pandya</a></span>
</div>
<div class="info-block">
<span><i class="fa fa-thumbs-o-up"></i> 360</span>
<span><i class="fa fa-eye"></i> 789</span>
<span><i class="fa fa-comment-o"></i> 20</span>
</div>
</div>
</div>

<div class="category-1 mix custom-column-5">
<div class="be-post">
<a href="#" class="be-img-block">
<img src="gallery/FineArtsPhotographyWinners/min/ArchanaGokhale.jpg" alt="omg">
</a>


<div class="author-post">
<img src="img/a1.png" alt="" class="ava-author" >
<span>by <a href="#"> Archana Gokhale</a></span>
</div>
<div class="info-block">
<span><i class="fa fa-thumbs-o-up"></i> 360</span>
<span><i class="fa fa-eye"></i> 789</span>
<span><i class="fa fa-comment-o"></i> 20</span>
</div>
</div>
</div>

<div class="category-1 mix custom-column-5">
<div class="be-post">
<a href="#" class="be-img-block">
<img src="gallery/FineArtsPhotographyWinners/min/KaustubhGokhale.jpg" alt="omg">
</a>

<div class="author-post">
<img src="img/a6.png" alt="" class="ava-author">
<span>by <a href="#">Kaustubh Gokhale</a></span>
</div>
<div class="info-block">
<span><i class="fa fa-thumbs-o-up"></i> 360</span>
<span><i class="fa fa-eye"></i> 789</span>
<span><i class="fa fa-comment-o"></i> 20</span>
</div>
</div>
</div>

<div class="category-2 mix custom-column-5">
<div class="be-post">
<a href="#" class="be-img-block">
<img src="gallery/IntotheWild/min/AnkitSharma.jpg" alt="omg">
</a>

<div class="author-post">
<img src="img/a6.png" alt="" class="ava-author">
<span>by <a href="#">Ankit Sharma</a></span>
</div>
<div class="info-block">
<span><i class="fa fa-thumbs-o-up"></i> 360</span>
<span><i class="fa fa-eye"></i> 789</span>
<span><i class="fa fa-comment-o"></i> 20</span>
</div>
</div>
</div>

<div class="category-2 mix custom-column-5">
<div class="be-post">
<a href="#" class="be-img-block">
<img src="gallery/IntotheWild/min/ArchanaGokhale.jpg" alt="omg">
</a>

<div class="author-post">
<img src="img/a6.png" alt="" class="ava-author">
<span>by <a href="#">Archana Gokhale</a></span>
</div>
<div class="info-block">
<span><i class="fa fa-thumbs-o-up"></i> 360</span>
<span><i class="fa fa-eye"></i> 789</span>
<span><i class="fa fa-comment-o"></i> 20</span>
</div>
</div>
</div>

<div class="category-2 mix custom-column-5">
<div class="be-post">
<a href="#" class="be-img-block">
<img src="gallery/IntotheWild/min/HarshChoksi.jpg" alt="omg">
</a>

<div class="author-post">
<img src="img/a6.png" alt="" class="ava-author">
<span>by <a href="#">Harsh Choksi</a></span>
</div>
<div class="info-block">
<span><i class="fa fa-thumbs-o-up"></i> 360</span>
<span><i class="fa fa-eye"></i> 789</span>
<span><i class="fa fa-comment-o"></i> 20</span>
</div>
</div>
</div>

<div class="category-2 mix custom-column-5">
<div class="be-post">
<a href="#" class="be-img-block">
<img src="gallery/IntotheWild/min/JigsParmar.jpg" alt="omg">
</a>

<div class="author-post">
<img src="img/a6.png" alt="" class="ava-author">
<span>by <a href="#">Jigs Parmar</a></span>
</div>
<div class="info-block">
<span><i class="fa fa-thumbs-o-up"></i> 360</span>
<span><i class="fa fa-eye"></i> 789</span>
<span><i class="fa fa-comment-o"></i> 20</span>
</div>
</div>
</div>

<div class="category-2 mix custom-column-5">
<div class="be-post">
<a href="#" class="be-img-block">
<img src="gallery/IntotheWild/min/KajalShah.jpg" alt="omg">
</a>

<div class="author-post">
<img src="img/a6.png" alt="" class="ava-author">
<span>by <a href="#">Kajal Shah </a></span>
</div>
<div class="info-block">
<span><i class="fa fa-thumbs-o-up"></i> 360</span>
<span><i class="fa fa-eye"></i> 789</span>
<span><i class="fa fa-comment-o"></i> 20</span>
</div>
</div>
</div>

<div class="category-2 mix custom-column-5">
<div class="be-post">
<a href="#" class="be-img-block">
<img src="gallery/IntotheWild/min/KaustubhGokhale.jpg" alt="omg">
</a>

<div class="author-post">
<img src="img/a6.png" alt="" class="ava-author">
<span>by <a href="#">Kaustubh Gokhale</a></span>
</div>
<div class="info-block">
<span><i class="fa fa-thumbs-o-up"></i> 360</span>
<span><i class="fa fa-eye"></i> 789</span>
<span><i class="fa fa-comment-o"></i> 20</span>
</div>
</div>
</div>

<div class="category-2 mix custom-column-5">
<div class="be-post">
<a href="#" class="be-img-block">
<img src="gallery/IntotheWild/min/MeeraTrivedi.jpg" alt="omg">
</a>

<div class="author-post">
<img src="img/a6.png" alt="" class="ava-author">
<span>by <a href="#">Meera Trivedi</a></span>
</div>
<div class="info-block">
<span><i class="fa fa-thumbs-o-up"></i> 360</span>
<span><i class="fa fa-eye"></i> 789</span>
<span><i class="fa fa-comment-o"></i> 20</span>
</div>
</div>
</div>

<div class="category-2 mix custom-column-5">
<div class="be-post">
<a href="#" class="be-img-block">
<img src="gallery/IntotheWild/min/NikhilDeshmukh.jpg" alt="omg">
</a>

<div class="author-post">
<img src="img/a6.png" alt="" class="ava-author">
<span>by <a href="#">Nikhil Deshmukh</a></span>
</div>
<div class="info-block">
<span><i class="fa fa-thumbs-o-up"></i> 360</span>
<span><i class="fa fa-eye"></i> 789</span>
<span><i class="fa fa-comment-o"></i> 20</span>
</div>
</div>
</div>

<div class="category-2 mix custom-column-5">
<div class="be-post">
<a href="#" class="be-img-block">
<img src="gallery/IntotheWild/min/NiravGandhi1.jpg" alt="omg">
</a>

<div class="author-post">
<img src="img/a6.png" alt="" class="ava-author">
<span>by <a href="#">Nirav Gandhi</a></span>
</div>
<div class="info-block">
<span><i class="fa fa-thumbs-o-up"></i> 360</span>
<span><i class="fa fa-eye"></i> 789</span>
<span><i class="fa fa-comment-o"></i> 20</span>
</div>
</div>
</div>

<div class="category-2 mix custom-column-5">
<div class="be-post">
<a href="#" class="be-img-block">
<img src="gallery/IntotheWild/min/NiravGandhi2.jpg" alt="omg">
</a>

<div class="author-post">
<img src="img/a6.png" alt="" class="ava-author">
<span>by <a href="#">Nirav Gandhi</a></span>
</div>
<div class="info-block">
<span><i class="fa fa-thumbs-o-up"></i> 360</span>
<span><i class="fa fa-eye"></i> 789</span>
<span><i class="fa fa-comment-o"></i> 20</span>
</div>
</div>
</div>

<div class="category-2 mix custom-column-5">
<div class="be-post">
<a href="#" class="be-img-block">
<img src="gallery/IntotheWild/min/RajanShah.jpg" alt="omg">
</a>

<div class="author-post">
<img src="img/a6.png" alt="" class="ava-author">
<span>by <a href="#">Rajan Shah</a></span>
</div>
<div class="info-block">
<span><i class="fa fa-thumbs-o-up"></i> 360</span>
<span><i class="fa fa-eye"></i> 789</span>
<span><i class="fa fa-comment-o"></i> 20</span>
</div>
</div>
</div>

<div class="category-2 mix custom-column-5">
<div class="be-post">
<a href="#" class="be-img-block">
<img src="gallery/IntotheWild/min/RoniRaval.jpg" alt="omg">
</a>

<div class="author-post">
<img src="img/a6.png" alt="" class="ava-author">
<span>by <a href="#">Roni Raval</a></span>
</div>
<div class="info-block">
<span><i class="fa fa-thumbs-o-up"></i> 360</span>
<span><i class="fa fa-eye"></i> 789</span>
<span><i class="fa fa-comment-o"></i> 20</span>
</div>
</div>
</div>

<div class="category-2 mix custom-column-5">
<div class="be-post">
<a href="#" class="be-img-block">
<img src="gallery/IntotheWild/min/SajidShaikh.jpg" alt="omg">
</a>

<div class="author-post">
<img src="img/a6.png" alt="" class="ava-author">
<span>by <a href="#">Sajid Shaikh</a></span>
</div>
<div class="info-block">
<span><i class="fa fa-thumbs-o-up"></i> 360</span>
<span><i class="fa fa-eye"></i> 789</span>
<span><i class="fa fa-comment-o"></i> 20</span>
</div>
</div>
</div>

<div class="category-2 mix custom-column-5">
<div class="be-post">
<a href="#" class="be-img-block">
<img src="gallery/IntotheWild/min/SmitVK.jpg" alt="omg">
</a>

<div class="author-post">
<img src="img/a6.png" alt="" class="ava-author">
<span>by <a href="#">Smit VK</a></span>
</div>
<div class="info-block">
<span><i class="fa fa-thumbs-o-up"></i> 360</span>
<span><i class="fa fa-eye"></i> 789</span>
<span><i class="fa fa-comment-o"></i> 20</span>
</div>
</div>
</div>

<div class="category-2 mix custom-column-5">
<div class="be-post">
<a href="#" class="be-img-block">
<img src="gallery/IntotheWild/min/UrviServaia.jpg" alt="omg">
</a>

<div class="author-post">
<img src="img/a6.png" alt="" class="ava-author">
<span>by <a href="#">Urvi Servaia</a></span>
</div>
<div class="info-block">
<span><i class="fa fa-thumbs-o-up"></i> 360</span>
<span><i class="fa fa-eye"></i> 789</span>
<span><i class="fa fa-comment-o"></i> 20</span>
</div>
</div>
</div>

<div class="category-3 mix custom-column-5">
<div class="be-post">
<a href="#" class="be-img-block">
<img src="gallery/NatureAndLandscapes/min/Abbas1.jpg" alt="omg">
</a>

<div class="author-post">
<img src="img/a6.png" alt="" class="ava-author">
<span>by <a href="#">Abbas</a></span>
</div>
<div class="info-block">
<span><i class="fa fa-thumbs-o-up"></i> 360</span>
<span><i class="fa fa-eye"></i> 789</span>
<span><i class="fa fa-comment-o"></i> 20</span>
</div>
</div>
</div>

<div class="category-3 mix custom-column-5">
<div class="be-post">
<a href="#" class="be-img-block">
<img src="gallery/NatureAndLandscapes/min/Abbas2.jpg" alt="omg">
</a>

<div class="author-post">
<img src="img/a6.png" alt="" class="ava-author">
<span>by <a href="#">Abbas</a></span>
</div>
<div class="info-block">
<span><i class="fa fa-thumbs-o-up"></i> 360</span>
<span><i class="fa fa-eye"></i> 789</span>
<span><i class="fa fa-comment-o"></i> 20</span>
</div>
</div>
</div>

<div class="category-3 mix custom-column-5">
<div class="be-post">
<a href="#" class="be-img-block">
<img src="gallery/NatureAndLandscapes/min/Abbas3.jpg" alt="omg">
</a>

<div class="author-post">
<img src="img/a6.png" alt="" class="ava-author">
<span>by <a href="#">Abbas</a></span>
</div>
<div class="info-block">
<span><i class="fa fa-thumbs-o-up"></i> 360</span>
<span><i class="fa fa-eye"></i> 789</span>
<span><i class="fa fa-comment-o"></i> 20</span>
</div>
</div>
</div>

<div class="category-3 mix custom-column-5">
<div class="be-post">
<a href="#" class="be-img-block">
<img src="gallery/NatureAndLandscapes/min/Bhowmik.jpg" alt="omg">
</a>

<div class="author-post">
<img src="img/a6.png" alt="" class="ava-author">
<span>by <a href="#">Bhowmik</a></span>
</div>
<div class="info-block">
<span><i class="fa fa-thumbs-o-up"></i> 360</span>
<span><i class="fa fa-eye"></i> 789</span>
<span><i class="fa fa-comment-o"></i> 20</span>
</div>
</div>
</div>

<div class="category-3 mix custom-column-5">
<div class="be-post">
<a href="#" class="be-img-block">
<img src="gallery/NatureAndLandscapes/min/HarshChoksi2.jpg" alt="omg">
</a>

<div class="author-post">
<img src="img/a6.png" alt="" class="ava-author">
<span>by <a href="#">Harsh Choksi</a></span>
</div>
<div class="info-block">
<span><i class="fa fa-thumbs-o-up"></i> 360</span>
<span><i class="fa fa-eye"></i> 789</span>
<span><i class="fa fa-comment-o"></i> 20</span>
</div>
</div>
</div>

<div class="category-3 mix custom-column-5">
<div class="be-post">
<a href="#" class="be-img-block">
<img src="gallery/NatureAndLandscapes/min/HarshChoksi3.jpg" alt="omg">
</a>

<div class="author-post">
<img src="img/a6.png" alt="" class="ava-author">
<span>by <a href="#">Harsh Choksi</a></span>
</div>
<div class="info-block">
<span><i class="fa fa-thumbs-o-up"></i> 360</span>
<span><i class="fa fa-eye"></i> 789</span>
<span><i class="fa fa-comment-o"></i> 20</span>
</div>
</div>
</div>

<div class="category-3 mix custom-column-5">
<div class="be-post">
<a href="#" class="be-img-block">
<img src="gallery/NatureAndLandscapes/min/Harshchoksi.jpg" alt="omg">
</a>

<div class="author-post">
<img src="img/a6.png" alt="" class="ava-author">
<span>by <a href="#">Harsh choksi</a></span>
</div>
<div class="info-block">
<span><i class="fa fa-thumbs-o-up"></i> 360</span>
<span><i class="fa fa-eye"></i> 789</span>
<span><i class="fa fa-comment-o"></i> 20</span>
</div>
</div>
</div>

<div class="category-3 mix custom-column-5">
<div class="be-post">
<a href="#" class="be-img-block">
<img src="gallery/NatureAndLandscapes/min/HemendraGajjar1.jpg" alt="omg">
</a>

<div class="author-post">
<img src="img/a6.png" alt="" class="ava-author">
<span>by <a href="#">Hemendra Gajjar</a></span>
</div>
<div class="info-block">
<span><i class="fa fa-thumbs-o-up"></i> 360</span>
<span><i class="fa fa-eye"></i> 789</span>
<span><i class="fa fa-comment-o"></i> 20</span>
</div>
</div>
</div>

<div class="category-3 mix custom-column-5">
<div class="be-post">
<a href="#" class="be-img-block">
<img src="gallery/NatureAndLandscapes/min/ParthHingu.jpg" alt="omg">
</a>

<div class="author-post">
<img src="img/a6.png" alt="" class="ava-author">
<span>by <a href="#">Parth Hingu</a></span>
</div>
<div class="info-block">
<span><i class="fa fa-thumbs-o-up"></i> 360</span>
<span><i class="fa fa-eye"></i> 789</span>
<span><i class="fa fa-comment-o"></i> 20</span>
</div>
</div>
</div>

<div class="category-3 mix custom-column-5">
<div class="be-post">
<a href="#" class="be-img-block">
<img src="gallery/NatureAndLandscapes/min/Sajid1.jpg" alt="omg">
</a>

<div class="author-post">
<img src="img/a6.png" alt="" class="ava-author">
<span>by <a href="#">Sajid</a></span>
</div>
<div class="info-block">
<span><i class="fa fa-thumbs-o-up"></i> 360</span>
<span><i class="fa fa-eye"></i> 789</span>
<span><i class="fa fa-comment-o"></i> 20</span>
</div>
</div>
</div>

<div class="category-3 mix custom-column-5">
<div class="be-post">
<a href="#" class="be-img-block">
<img src="gallery/NatureAndLandscapes/min/Sajid3.jpg" alt="omg">
</a>

<div class="author-post">
<img src="img/a6.png" alt="" class="ava-author">
<span>by <a href="#">Sajid</a></span>
</div>
<div class="info-block">
<span><i class="fa fa-thumbs-o-up"></i> 360</span>
<span><i class="fa fa-eye"></i> 789</span>
<span><i class="fa fa-comment-o"></i> 20</span>
</div>
</div>
</div>

<div class="category-3 mix custom-column-5">
<div class="be-post">
<a href="#" class="be-img-block">
<img src="gallery/NatureAndLandscapes/min/Seema1.jpg" alt="omg">
</a>

<div class="author-post">
<img src="img/a6.png" alt="" class="ava-author">
<span>by <a href="#">Seema</a></span>
</div>
<div class="info-block">
<span><i class="fa fa-thumbs-o-up"></i> 360</span>
<span><i class="fa fa-eye"></i> 789</span>
<span><i class="fa fa-comment-o"></i> 20</span>
</div>
</div>
</div>

<div class="category-3 mix custom-column-5">
<div class="be-post">
<a href="#" class="be-img-block">
<img src="gallery/NatureAndLandscapes/min/seema3.jpg" alt="omg">
</a>

<div class="author-post">
<img src="img/a6.png" alt="" class="ava-author">
<span>by <a href="#">seema</a></span>
</div>
<div class="info-block">
<span><i class="fa fa-thumbs-o-up"></i> 360</span>
<span><i class="fa fa-eye"></i> 789</span>
<span><i class="fa fa-comment-o"></i> 20</span>
</div>
</div>
</div>

<div class="category-3 mix custom-column-5">
<div class="be-post">
<a href="#" class="be-img-block">
<img src="gallery/NatureAndLandscapes/min/uditnature.jpg" alt="omg">
</a>

<div class="author-post">
<img src="img/a6.png" alt="" class="ava-author">
<span>by <a href="#">udit</a></span>
</div>
<div class="info-block">
<span><i class="fa fa-thumbs-o-up"></i> 360</span>
<span><i class="fa fa-eye"></i> 789</span>
<span><i class="fa fa-comment-o"></i> 20</span>
</div>
</div>
</div>

<div class="category-3 mix custom-column-5">
<div class="be-post">
<a href="#" class="be-img-block">
<img src="gallery/NatureAndLandscapes/min/Sajid2.jpg" alt="omg">
</a>

<div class="author-post">
<img src="img/a6.png" alt="" class="ava-author">
<span>by <a href="#">Sajid</a></span>
</div>
<div class="info-block">
<span><i class="fa fa-thumbs-o-up"></i> 360</span>
<span><i class="fa fa-eye"></i> 789</span>
<span><i class="fa fa-comment-o"></i> 20</span>
</div>
</div>
</div>

<div class="category-4 mix custom-column-5">
<div class="be-post">
<a href="#" class="be-img-block">
<img src="gallery/UnseenWorldofStreetsWinners/min/AbbasBaig1.jpg" alt="omg">
</a>

<div class="author-post">
<img src="img/a6.png" alt="" class="ava-author">
<span>by <a href="#">Abbas Baig</a></span>
</div>
<div class="info-block">
<span><i class="fa fa-thumbs-o-up"></i> 360</span>
<span><i class="fa fa-eye"></i> 789</span>
<span><i class="fa fa-comment-o"></i> 20</span>
</div>
</div>
</div>

<div class="category-4 mix custom-column-5">
<div class="be-post">
<a href="#" class="be-img-block">
<img src="gallery/UnseenWorldofStreetsWinners/min/AbbasBaig2.jpg" alt="omg">
</a>

<div class="author-post">
<img src="img/a6.png" alt="" class="ava-author">
<span>by <a href="#">Abbas Baig</a></span>
</div>
<div class="info-block">
<span><i class="fa fa-thumbs-o-up"></i> 360</span>
<span><i class="fa fa-eye"></i> 789</span>
<span><i class="fa fa-comment-o"></i> 20</span>
</div>
</div>
</div>

<div class="category-4 mix custom-column-5">
<div class="be-post">
<a href="#" class="be-img-block">
<img src="gallery/UnseenWorldofStreetsWinners/min/DarshanPrajapati3.jpg" alt="omg">
</a>

<div class="author-post">
<img src="img/a6.png" alt="" class="ava-author">
<span>by <a href="#">Darshan Prajapati</a></span>
</div>
<div class="info-block">
<span><i class="fa fa-thumbs-o-up"></i> 360</span>
<span><i class="fa fa-eye"></i> 789</span>
<span><i class="fa fa-comment-o"></i> 20</span>
</div>
</div>
</div>

<div class="category-4 mix custom-column-5">
<div class="be-post">
<a href="#" class="be-img-block">
<img src="gallery/UnseenWorldofStreetsWinners/min/HemendraGajjar.jpg" alt="omg">
</a>

<div class="author-post">
<img src="img/a6.png" alt="" class="ava-author">
<span>by <a href="#">Hemendra Gajjar</a></span>
</div>
<div class="info-block">
<span><i class="fa fa-thumbs-o-up"></i> 360</span>
<span><i class="fa fa-eye"></i> 789</span>
<span><i class="fa fa-comment-o"></i> 20</span>
</div>
</div>
</div>

<div class="category-4 mix custom-column-5">
<div class="be-post">
<a href="#" class="be-img-block">
<img src="gallery/UnseenWorldofStreetsWinners/min/JaiminRana.jpg" alt="omg">
</a>

<div class="author-post">
<img src="img/a6.png" alt="" class="ava-author">
<span>by <a href="#">Jaimin Rana</a></span>
</div>
<div class="info-block">
<span><i class="fa fa-thumbs-o-up"></i> 360</span>
<span><i class="fa fa-eye"></i> 789</span>
<span><i class="fa fa-comment-o"></i> 20</span>
</div>
</div>
</div>

<div class="category-4 mix custom-column-5">
<div class="be-post">
<a href="#" class="be-img-block">
<img src="gallery/UnseenWorldofStreetsWinners/min/KashyapShahstreet.jpg" alt="omg">
</a>

<div class="author-post">
<img src="img/a6.png" alt="" class="ava-author">
<span>by <a href="#">Kashyap Shah</a></span>
</div>
<div class="info-block">
<span><i class="fa fa-thumbs-o-up"></i> 360</span>
<span><i class="fa fa-eye"></i> 789</span>
<span><i class="fa fa-comment-o"></i> 20</span>
</div>
</div>
</div>

<div class="category-4 mix custom-column-5">
<div class="be-post">
<a href="#" class="be-img-block">
<img src="gallery/UnseenWorldofStreetsWinners/min/KunalShah2.jpg" alt="omg">
</a>

<div class="author-post">
<img src="img/a6.png" alt="" class="ava-author">
<span>by <a href="#">Kunal Shah</a></span>
</div>
<div class="info-block">
<span><i class="fa fa-thumbs-o-up"></i> 360</span>
<span><i class="fa fa-eye"></i> 789</span>
<span><i class="fa fa-comment-o"></i> 20</span>
</div>
</div>
</div>

<div class="category-4 mix custom-column-5">
<div class="be-post">
<a href="#" class="be-img-block">
<img src="gallery/UnseenWorldofStreetsWinners/min/Mausam1.jpg" alt="omg">
</a>

<div class="author-post">
<img src="img/a6.png" alt="" class="ava-author">
<span>by <a href="#">Mausam</a></span>
</div>
<div class="info-block">
<span><i class="fa fa-thumbs-o-up"></i> 360</span>
<span><i class="fa fa-eye"></i> 789</span>
<span><i class="fa fa-comment-o"></i> 20</span>
</div>
</div>
</div>

<div class="category-4 mix custom-column-5">
<div class="be-post">
<a href="#" class="be-img-block">
<img src="gallery/UnseenWorldofStreetsWinners/min/Nisarg.jpg" alt="omg">
</a>

<div class="author-post">
<img src="img/a6.png" alt="" class="ava-author">
<span>by <a href="#">Nisarg</a></span>
</div>
<div class="info-block">
<span><i class="fa fa-thumbs-o-up"></i> 360</span>
<span><i class="fa fa-eye"></i> 789</span>
<span><i class="fa fa-comment-o"></i> 20</span>
</div>
</div>
</div>

<div class="category-4 mix custom-column-5">
<div class="be-post">
<a href="#" class="be-img-block">
<img src="gallery/UnseenWorldofStreetsWinners/min/RajanShah2.jpg" alt="omg">
</a>

<div class="author-post">
<img src="img/a6.png" alt="" class="ava-author">
<span>by <a href="#">Rajan Shah</a></span>
</div>
<div class="info-block">
<span><i class="fa fa-thumbs-o-up"></i> 360</span>
<span><i class="fa fa-eye"></i> 789</span>
<span><i class="fa fa-comment-o"></i> 20</span>
</div>
</div>
</div>

<div class="category-4 mix custom-column-5">
<div class="be-post">
<a href="#" class="be-img-block">
<img src="gallery/UnseenWorldofStreetsWinners/min/SajidShaikh1.jpg" alt="omg">
</a>

<div class="author-post">
<img src="img/a6.png" alt="" class="ava-author">
<span>by <a href="#">Sajid Shaikh</a></span>
</div>
<div class="info-block">
<span><i class="fa fa-thumbs-o-up"></i> 360</span>
<span><i class="fa fa-eye"></i> 789</span>
<span><i class="fa fa-comment-o"></i> 20</span>
</div>
</div>
</div>

<div class="category-4 mix custom-column-5">
<div class="be-post">
<a href="#" class="be-img-block">
<img src="gallery/UnseenWorldofStreetsWinners/min/SajidShaikh2.jpg" alt="omg">
</a>

<div class="author-post">
<img src="img/a6.png" alt="" class="ava-author">
<span>by <a href="#">Sajid Shaikh</a></span>
</div>
<div class="info-block">
<span><i class="fa fa-thumbs-o-up"></i> 360</span>
<span><i class="fa fa-eye"></i> 789</span>
<span><i class="fa fa-comment-o"></i> 20</span>
</div>
</div>
</div>

<div class="category-4 mix custom-column-5">
<div class="be-post">
<a href="#" class="be-img-block">
<img src="gallery/UnseenWorldofStreetsWinners/min/shivangshah.jpg" alt="omg">
</a>

<div class="author-post">
<img src="img/a6.png" alt="" class="ava-author">
<span>by <a href="#">shivang shah</a></span>
</div>
<div class="info-block">
<span><i class="fa fa-thumbs-o-up"></i> 360</span>
<span><i class="fa fa-eye"></i> 789</span>
<span><i class="fa fa-comment-o"></i> 20</span>
</div>
</div>
</div>

<div class="category-4 mix custom-column-5">
<div class="be-post">
<a href="#" class="be-img-block">
<img src="gallery/UnseenWorldofStreetsWinners/min/shivangshah2.jpg" alt="omg">
</a>

<div class="author-post">
<img src="img/a6.png" alt="" class="ava-author">
<span>by <a href="#">shivang shah</a></span>
</div>
<div class="info-block">
<span><i class="fa fa-thumbs-o-up"></i> 360</span>
<span><i class="fa fa-eye"></i> 789</span>
<span><i class="fa fa-comment-o"></i> 20</span>
</div>
</div>
</div>

<div class="category-4 mix custom-column-5">
<div class="be-post">
<a href="#" class="be-img-block">
<img src="gallery/UnseenWorldofStreetsWinners/min/Vishalti.jpg" alt="omg">
</a>

<div class="author-post">
<img src="img/a6.png" alt="" class="ava-author">
<span>by <a href="#">Vishal</a></span>
</div>
<div class="info-block">
<span><i class="fa fa-thumbs-o-up"></i> 360</span>
<span><i class="fa fa-eye"></i> 789</span>
<span><i class="fa fa-comment-o"></i> 20</span>
</div>
</div>
</div>






</div>
</div>
</div>
</div>
</div>
<?php
	require('include/footerHome.html');
?>
