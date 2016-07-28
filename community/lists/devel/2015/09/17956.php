<?
$subject_val = "Re: [OMPI devel] 1.10.0 issue";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  3 19:43:33 2015" -->
<!-- isoreceived="20150903234333" -->
<!-- sent="Thu, 3 Sep 2015 16:43:30 -0700" -->
<!-- isosent="20150903234330" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.10.0 issue" -->
<!-- id="22097F3E-2CF2-49D9-8FC2-7E6D8533D2E0_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="0429C22EBDB44040B478F8F77EF14518DD2C51_at_ORSMSX114.amr.corp.intel.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.10.0 issue<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-03 19:43:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17957.php">Ralph Castain: "Re: [OMPI devel] periodic hangs of hello_usempi.x on uh jenkins slave"</a>
<li><strong>Previous message:</strong> <a href="17955.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove --without-hwloc configure option"</a>
<li><strong>In reply to:</strong> <a href="17953.php">Friedley, Andrew: "Re: [OMPI devel] 1.10.0 issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17971.php">Friedley, Andrew: "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>Reply:</strong> <a href="17971.php">Friedley, Andrew: "Re: [OMPI devel] 1.10.0 issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, it actually is rather easy to do. I can check, but I think that should happen now (unless psm2 was set to auto-build if the lib was detected). Regardless, we can always have RH et al simply build with &#226;&#128;&#148;enable-mca-no-build=mtl-psm2 and that will solve the problem.
<br>
<p>Please keep us posted - and thanks!
<br>
Ralph
<br>
<p><span class="quotelev1">&gt; On Sep 3, 2015, at 3:44 PM, Friedley, Andrew &lt;andrew.friedley_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Ralph &amp; crew,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm representing the Intel PSM team to Open MPI.  They're aware of the problem and have seen the comments on both this thread and in OFI, and are working on solving the issue within PSM2.  Current estimate is that it will take 3-4 weeks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If it comes to removing the PSM2 MTL from 1.10, would it instead be possible to disable it from being configured/built by default, unless specifically requested using --with-psm2?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Andrew
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Ralph
</span><br>
<span class="quotelev2">&gt;&gt; Castain
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Wednesday, September 2, 2015 6:22 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Developers
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [OMPI devel] 1.10.0 issue
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi folks
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I regret to say that 1.10.0 is hitting an issue with at least one upstream distro.
</span><br>
<span class="quotelev2">&gt;&gt; Apparently, there is a symbol conflict between the PSM and PSM2 libraries
</span><br>
<span class="quotelev2">&gt;&gt; that precludes building both of those MTLs at the same time. This is leading
</span><br>
<span class="quotelev2">&gt;&gt; the distro to push for release of two OMPI 1.10.0 builds - one with PSM and
</span><br>
<span class="quotelev2">&gt;&gt; the other with PSM2.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; IMO, this is a very undesirable situation. I agree with the distro that delaying
</span><br>
<span class="quotelev2">&gt;&gt; release for some significant time as this would impact everyone else&#226;&#128;&#153;s users.
</span><br>
<span class="quotelev2">&gt;&gt; Therefore, assuming that the PSM team is unable to quickly resolve the
</span><br>
<span class="quotelev2">&gt;&gt; problem in their libraries, my inclination is to release an immediate 1.10.1
</span><br>
<span class="quotelev2">&gt;&gt; with the PSM2 MTL removed.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I&#226;&#128;&#153;m soliciting input - any opinions?
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open">http://www.open</a>-
</span><br>
<span class="quotelev2">&gt;&gt; mpi.org/community/lists/devel/2015/09/17919.php
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/09/17953.php">http://www.open-mpi.org/community/lists/devel/2015/09/17953.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17957.php">Ralph Castain: "Re: [OMPI devel] periodic hangs of hello_usempi.x on uh jenkins slave"</a>
<li><strong>Previous message:</strong> <a href="17955.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove --without-hwloc configure option"</a>
<li><strong>In reply to:</strong> <a href="17953.php">Friedley, Andrew: "Re: [OMPI devel] 1.10.0 issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17971.php">Friedley, Andrew: "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>Reply:</strong> <a href="17971.php">Friedley, Andrew: "Re: [OMPI devel] 1.10.0 issue"</a>
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
