<?
$subject_val = "[OMPI devel] Question about priority";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 22 11:26:58 2008" -->
<!-- isoreceived="20080522152658" -->
<!-- sent="Thu, 22 May 2008 11:30:01 -0400" -->
<!-- isosent="20080522153001" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="Rolf.Vandevaart_at_[hidden]" -->
<!-- subject="[OMPI devel] Question about priority" -->
<!-- id="48359179.80608_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> [OMPI devel] Question about priority<br>
<strong>From:</strong> Rolf vandeVaart (<em>Rolf.Vandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-22 11:30:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3991.php">Pavel Shamis (Pasha): "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Previous message:</strong> <a href="3989.php">Brian W. Barrett: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4010.php">Jeff Squyres: "Re: [OMPI devel] Question about priority"</a>
<li><strong>Reply:</strong> <a href="4010.php">Jeff Squyres: "Re: [OMPI devel] Question about priority"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I know there was some recent discussion about priority of components, 
<br>
but I wanted to double check.  I am trying to understand what priority = 
<br>
0 means.
<br>
<p>My assumption is the following:
<br>
priority &gt;= 0 means the component is selectable
<br>
priority &lt; 0 means the component is not selectable
<br>
<p>I ask this because in some of the collective code it looks like a 
<br>
priority = 0 means not selectable.  Not a big deal, but I am trying to 
<br>
fix a memory leak and I need to get this piece right.  And I assume that 
<br>
priority &lt; 0 will give one the same behavior as ^component but the code 
<br>
paths within Open MPI would be different.
<br>
<p>Rolf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3991.php">Pavel Shamis (Pasha): "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Previous message:</strong> <a href="3989.php">Brian W. Barrett: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4010.php">Jeff Squyres: "Re: [OMPI devel] Question about priority"</a>
<li><strong>Reply:</strong> <a href="4010.php">Jeff Squyres: "Re: [OMPI devel] Question about priority"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
