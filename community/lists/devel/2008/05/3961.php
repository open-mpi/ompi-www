<?
$subject_val = "Re: [OMPI devel] RFC: Linuxes shipping libibverbs";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 21 11:34:41 2008" -->
<!-- isoreceived="20080521153441" -->
<!-- sent="Wed, 21 May 2008 11:34:34 -0400 (EDT)" -->
<!-- isosent="20080521153434" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Linuxes shipping libibverbs" -->
<!-- id="Pine.LNX.4.64.0805211133340.10912_at_marvin.we-be-smart.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4834408E.3010900_at_dev.mellanox.co.il" -->
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
<strong>Date:</strong> 2008-05-21 11:34:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3962.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Previous message:</strong> <a href="3960.php">Richard Graham: "Re: [OMPI devel] Trunk check-in policy until the branch for 1.3"</a>
<li><strong>In reply to:</strong> <a href="3959.php">Pavel Shamis (Pasha): "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3962.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
And there's a typo in my first paragraph.  The flag currently defaults to 
<br>
1 (print the warning).  It should be switched to 0 to turn off the 
<br>
warning.  Sorry for any confusion I might have caused -- I blame the lack 
<br>
of caffeine in the morning.
<br>
<p>Brian
<br>
<p>On Wed, 21 May 2008, Pavel Shamis (Pasha) wrote:
<br>
<p><span class="quotelev1">&gt; I'm agree with Brian. We may add to the warning message detailed
</span><br>
<span class="quotelev1">&gt; description how to disable it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Pasha
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian W. Barrett wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I think having a parameter to turn off the warning is a great idea.  So
</span><br>
<span class="quotelev2">&gt;&gt; great in fact, that it already exists in the trunk and v1.2 :)!  Setting
</span><br>
<span class="quotelev2">&gt;&gt; the default value for the btl_base_warn_component_unused flag from 0 to 1
</span><br>
<span class="quotelev2">&gt;&gt; will have the desired effect.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm not sure I agree with setting the default to 0, however.  The warning
</span><br>
<span class="quotelev2">&gt;&gt; has proven extremely useful for diagnosing that IB (or less often GM or
</span><br>
<span class="quotelev2">&gt;&gt; MX) isn't properly configured on a compute node due to some random error.
</span><br>
<span class="quotelev2">&gt;&gt; It's trivially easy for any packaging group to have the line
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    btl_base_warn_component_unused = 0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; added to $prefix/etc/openmpi-mca-params.conf during the install phase of
</span><br>
<span class="quotelev2">&gt;&gt; the package build (indeed, our simple build scripts at LANL used to do
</span><br>
<span class="quotelev2">&gt;&gt; this on a regular bases due to our need to tweek the OOB to keep IPoIB
</span><br>
<span class="quotelev2">&gt;&gt; happier at scale).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think keeping the Debian guys happy is a good thing.  Giving them an
</span><br>
<span class="quotelev2">&gt;&gt; easy way to turn off silly warnings is a good thing.  Removing a known
</span><br>
<span class="quotelev2">&gt;&gt; useful warning to help them doesn't seem like a good thing.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, 21 May 2008, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What: Change default in openib BTL to not complain if no OpenFabrics
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devices are found
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Why: Many linuxes are shipping libibverbs these days, but most users
</span><br>
<span class="quotelev3">&gt;&gt;&gt; still don't have OpenFabrics hardware
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Where: btl_openib_component.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When: For v1.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Timeout: Teleconf, 27 May 2008
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Short version
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =============
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Many major linuxes are shipping libibverbs by default these days.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI will therefore build the openib BTL by default, but then
</span><br>
<span class="quotelev3">&gt;&gt;&gt; complains at run time when there's no OpenFabrics hardware.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We should change the default in v1.3 to not complain if there is no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenFabrics devices found (perhaps have an MCA param to enable the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; warning if desired).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Longer version
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==============
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I just got a request from the Debian Open MPI package maintainers to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; include the following in the default openmpi-mca-params.conf for the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI v1.2 package:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # Disable the use of InfiniBand
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #   btl = ^openib
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Having this in the openmpi-mca-params.conf gives Debian an easy
</span><br>
<span class="quotelev3">&gt;&gt;&gt; documentation path for users to shut up these warnings when they build
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on machines with libibverbs present but no OpenFabrics hardware.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think that this is fine for the v1.2 series (and will file a CMR for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it).  But for v1.3, I think we should change the default.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The vast majority of users will not have OpenFabrics devices, and we
</span><br>
<span class="quotelev3">&gt;&gt;&gt; should therefore not complain if we can't find any at run-time.  We
</span><br>
<span class="quotelev3">&gt;&gt;&gt; can/should still complain if we find OpenFabrics devices but no active
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ports (i.e., don't change this behavior).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But for optimizing the common case: I think we should (by default) not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; print a warning if no OpenFabrics devices are found.  We can also
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [easily] have an MCA parameter that *will* display a warning if no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenFabrics devices are found.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3962.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Previous message:</strong> <a href="3960.php">Richard Graham: "Re: [OMPI devel] Trunk check-in policy until the branch for 1.3"</a>
<li><strong>In reply to:</strong> <a href="3959.php">Pavel Shamis (Pasha): "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3962.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
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
