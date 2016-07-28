<?
$subject_val = "Re: [OMPI devel] RFC: Linuxes shipping libibverbs";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 21 11:14:28 2008" -->
<!-- isoreceived="20080521151428" -->
<!-- sent="Wed, 21 May 2008 11:14:17 -0400 (EDT)" -->
<!-- isosent="20080521151417" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Linuxes shipping libibverbs" -->
<!-- id="Pine.LNX.4.64.0805211106510.10912_at_marvin.we-be-smart.org" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-21 11:14:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3958.php">Jeff Squyres: "[OMPI devel] Intel ifort / Libtool 2.x problem"</a>
<li><strong>Previous message:</strong> <a href="3956.php">Jeff Squyres: "[OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>In reply to:</strong> <a href="3956.php">Jeff Squyres: "[OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3959.php">Pavel Shamis (Pasha): "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Reply:</strong> <a href="3959.php">Pavel Shamis (Pasha): "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Reply:</strong> <a href="3962.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think having a parameter to turn off the warning is a great idea.  So 
<br>
great in fact, that it already exists in the trunk and v1.2 :)!  Setting 
<br>
the default value for the btl_base_warn_component_unused flag from 0 to 1 
<br>
will have the desired effect.
<br>
<p>I'm not sure I agree with setting the default to 0, however.  The warning 
<br>
has proven extremely useful for diagnosing that IB (or less often GM or 
<br>
MX) isn't properly configured on a compute node due to some random error. 
<br>
It's trivially easy for any packaging group to have the line
<br>
<p>&nbsp;&nbsp;&nbsp;btl_base_warn_component_unused = 0
<br>
<p>added to $prefix/etc/openmpi-mca-params.conf during the install phase of 
<br>
the package build (indeed, our simple build scripts at LANL used to do 
<br>
this on a regular bases due to our need to tweek the OOB to keep IPoIB 
<br>
happier at scale).
<br>
<p>I think keeping the Debian guys happy is a good thing.  Giving them an 
<br>
easy way to turn off silly warnings is a good thing.  Removing a known 
<br>
useful warning to help them doesn't seem like a good thing.
<br>
<p><p>Brian
<br>
<p><p>On Wed, 21 May 2008, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; What: Change default in openib BTL to not complain if no OpenFabrics
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
<li><strong>Next message:</strong> <a href="3958.php">Jeff Squyres: "[OMPI devel] Intel ifort / Libtool 2.x problem"</a>
<li><strong>Previous message:</strong> <a href="3956.php">Jeff Squyres: "[OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>In reply to:</strong> <a href="3956.php">Jeff Squyres: "[OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3959.php">Pavel Shamis (Pasha): "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Reply:</strong> <a href="3959.php">Pavel Shamis (Pasha): "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Reply:</strong> <a href="3962.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
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
