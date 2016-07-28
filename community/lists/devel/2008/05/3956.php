<?
$subject_val = "[OMPI devel] RFC: Linuxes shipping libibverbs";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 21 10:03:09 2008" -->
<!-- isoreceived="20080521140309" -->
<!-- sent="Wed, 21 May 2008 10:02:51 -0400" -->
<!-- isosent="20080521140251" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: Linuxes shipping libibverbs" -->
<!-- id="2E9498C1-DD72-4519-BFCB-67774BD09F93_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: Linuxes shipping libibverbs<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-21 10:02:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3957.php">Brian W. Barrett: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Previous message:</strong> <a href="3955.php">Jeff Squyres: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3957.php">Brian W. Barrett: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Reply:</strong> <a href="3957.php">Brian W. Barrett: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Reply:</strong> <a href="3964.php">Terry Dontje: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What: Change default in openib BTL to not complain if no OpenFabrics  
<br>
devices are found
<br>
<p>Why: Many linuxes are shipping libibverbs these days, but most users  
<br>
still don't have OpenFabrics hardware
<br>
<p>Where: btl_openib_component.c
<br>
<p>When: For v1.3
<br>
<p>Timeout: Teleconf, 27 May 2008
<br>
<p>Short version
<br>
=============
<br>
<p>Many major linuxes are shipping libibverbs by default these days.   
<br>
OMPI will therefore build the openib BTL by default, but then  
<br>
complains at run time when there's no OpenFabrics hardware.
<br>
<p>We should change the default in v1.3 to not complain if there is no  
<br>
OpenFabrics devices found (perhaps have an MCA param to enable the  
<br>
warning if desired).
<br>
<p>Longer version
<br>
==============
<br>
<p>I just got a request from the Debian Open MPI package maintainers to  
<br>
include the following in the default openmpi-mca-params.conf for the  
<br>
OMPI v1.2 package:
<br>
<p># Disable the use of InfiniBand
<br>
#   btl = ^openib
<br>
<p>Having this in the openmpi-mca-params.conf gives Debian an easy  
<br>
documentation path for users to shut up these warnings when they build  
<br>
on machines with libibverbs present but no OpenFabrics hardware.
<br>
<p>I think that this is fine for the v1.2 series (and will file a CMR for  
<br>
it).  But for v1.3, I think we should change the default.
<br>
<p>The vast majority of users will not have OpenFabrics devices, and we  
<br>
should therefore not complain if we can't find any at run-time.  We  
<br>
can/should still complain if we find OpenFabrics devices but no active  
<br>
ports (i.e., don't change this behavior).
<br>
<p>But for optimizing the common case: I think we should (by default) not  
<br>
print a warning if no OpenFabrics devices are found.  We can also  
<br>
[easily] have an MCA parameter that *will* display a warning if no  
<br>
OpenFabrics devices are found.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3957.php">Brian W. Barrett: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Previous message:</strong> <a href="3955.php">Jeff Squyres: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3957.php">Brian W. Barrett: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Reply:</strong> <a href="3957.php">Brian W. Barrett: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Reply:</strong> <a href="3964.php">Terry Dontje: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
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
