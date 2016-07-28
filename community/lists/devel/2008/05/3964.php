<?
$subject_val = "Re: [OMPI devel] RFC: Linuxes shipping libibverbs";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 21 12:22:11 2008" -->
<!-- isoreceived="20080521162211" -->
<!-- sent="Wed, 21 May 2008 12:21:51 -0400" -->
<!-- isosent="20080521162151" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Linuxes shipping libibverbs" -->
<!-- id="48344C1F.20207_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2E9498C1-DD72-4519-BFCB-67774BD09F93_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Linuxes shipping libibverbs<br>
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-21 12:21:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3965.php">Pavel Shamis (Pasha): "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Previous message:</strong> <a href="3963.php">Brian W. Barrett: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>In reply to:</strong> <a href="3956.php">Jeff Squyres: "[OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3973.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Reply:</strong> <a href="3973.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So are you proposing to set btl_base_warn_component_unused to 0 or 
<br>
something more BTL specific?
<br>
<p>--td
<br>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; What: Change default in openib BTL to not complain if no OpenFabrics  
</span><br>
<span class="quotelev1">&gt; devices are found
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Why: Many linuxes are shipping libibverbs these days, but most users  
</span><br>
<span class="quotelev1">&gt; still don't have OpenFabrics hardware
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Where: btl_openib_component.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When: For v1.3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Timeout: Teleconf, 27 May 2008
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Short version
</span><br>
<span class="quotelev1">&gt; =============
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Many major linuxes are shipping libibverbs by default these days.   
</span><br>
<span class="quotelev1">&gt; OMPI will therefore build the openib BTL by default, but then  
</span><br>
<span class="quotelev1">&gt; complains at run time when there's no OpenFabrics hardware.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We should change the default in v1.3 to not complain if there is no  
</span><br>
<span class="quotelev1">&gt; OpenFabrics devices found (perhaps have an MCA param to enable the  
</span><br>
<span class="quotelev1">&gt; warning if desired).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Longer version
</span><br>
<span class="quotelev1">&gt; ==============
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I just got a request from the Debian Open MPI package maintainers to  
</span><br>
<span class="quotelev1">&gt; include the following in the default openmpi-mca-params.conf for the  
</span><br>
<span class="quotelev1">&gt; OMPI v1.2 package:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # Disable the use of InfiniBand
</span><br>
<span class="quotelev1">&gt; #   btl = ^openib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Having this in the openmpi-mca-params.conf gives Debian an easy  
</span><br>
<span class="quotelev1">&gt; documentation path for users to shut up these warnings when they build  
</span><br>
<span class="quotelev1">&gt; on machines with libibverbs present but no OpenFabrics hardware.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think that this is fine for the v1.2 series (and will file a CMR for  
</span><br>
<span class="quotelev1">&gt; it).  But for v1.3, I think we should change the default.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The vast majority of users will not have OpenFabrics devices, and we  
</span><br>
<span class="quotelev1">&gt; should therefore not complain if we can't find any at run-time.  We  
</span><br>
<span class="quotelev1">&gt; can/should still complain if we find OpenFabrics devices but no active  
</span><br>
<span class="quotelev1">&gt; ports (i.e., don't change this behavior).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But for optimizing the common case: I think we should (by default) not  
</span><br>
<span class="quotelev1">&gt; print a warning if no OpenFabrics devices are found.  We can also  
</span><br>
<span class="quotelev1">&gt; [easily] have an MCA parameter that *will* display a warning if no  
</span><br>
<span class="quotelev1">&gt; OpenFabrics devices are found.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3965.php">Pavel Shamis (Pasha): "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Previous message:</strong> <a href="3963.php">Brian W. Barrett: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>In reply to:</strong> <a href="3956.php">Jeff Squyres: "[OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3973.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Reply:</strong> <a href="3973.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
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
