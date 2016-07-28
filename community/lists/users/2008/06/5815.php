<?
$subject_val = "[OMPI users] libibverbs";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  4 16:30:05 2008" -->
<!-- isoreceived="20080604203005" -->
<!-- sent="Wed, 4 Jun 2008 16:28:59 -0400" -->
<!-- isosent="20080604202859" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="[OMPI users] libibverbs" -->
<!-- id="3E3BE568-35A6-45E9-A37E-5CA520CC5A2A_at_umich.edu" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] libibverbs<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-04 16:28:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5816.php">Jeff Squyres: "Re: [OMPI users] OpenMPI scaling &gt; 512 cores"</a>
<li><strong>Previous message:</strong> <a href="5814.php">&#197;ke Sandgren: "Re: [OMPI users] OpenMPI scaling &gt; 512 cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5828.php">Jeff Squyres: "Re: [OMPI users] libibverbs"</a>
<li><strong>Reply:</strong> <a href="5828.php">Jeff Squyres: "Re: [OMPI users] libibverbs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We have two installs of openmpi-1.2.3
<br>
One with the pgi compilers the other with gcc/Nagf90
<br>
<p>One the pgi compilers does not link against libibverbs, but ompi_info  
<br>
shows the openib btl and we see traffic on the fabric.
<br>
<p>The other built with Nagware links against libibverbs.  It also shoes  
<br>
in ompi_info the openib btl.
<br>
<p>What would cause this?  It just pointed out that our login nodes  
<br>
(most of our cluster does not have IB) don't have libibverbs making  
<br>
code not link.  Any insight from an OFED master would be great.
<br>
<p><p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5816.php">Jeff Squyres: "Re: [OMPI users] OpenMPI scaling &gt; 512 cores"</a>
<li><strong>Previous message:</strong> <a href="5814.php">&#197;ke Sandgren: "Re: [OMPI users] OpenMPI scaling &gt; 512 cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5828.php">Jeff Squyres: "Re: [OMPI users] libibverbs"</a>
<li><strong>Reply:</strong> <a href="5828.php">Jeff Squyres: "Re: [OMPI users] libibverbs"</a>
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
