<?
$subject_val = "Re: [OMPI devel] 1.10.0 issue";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  3 18:44:18 2015" -->
<!-- isoreceived="20150903224418" -->
<!-- sent="Thu, 3 Sep 2015 22:44:10 +0000" -->
<!-- isosent="20150903224410" -->
<!-- name="Friedley, Andrew" -->
<!-- email="andrew.friedley_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.10.0 issue" -->
<!-- id="0429C22EBDB44040B478F8F77EF14518DD2C51_at_ORSMSX114.amr.corp.intel.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="7240D54E-14C1-4534-91C2-F7320B2205D1_at_open-mpi.org" -->
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
<strong>From:</strong> Friedley, Andrew (<em>andrew.friedley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-03 18:44:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17954.php">Paul Hargrove: "Re: [OMPI devel] RFC: Remove --without-hwloc configure option"</a>
<li><strong>Previous message:</strong> <a href="17952.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: Remove --without-hwloc configure option"</a>
<li><strong>In reply to:</strong> <a href="17919.php">Ralph Castain: "[OMPI devel] 1.10.0 issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17956.php">Ralph Castain: "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>Reply:</strong> <a href="17956.php">Ralph Castain: "Re: [OMPI devel] 1.10.0 issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph &amp; crew,
<br>

<br>
I'm representing the Intel PSM team to Open MPI.  They're aware of the problem and have seen the comments on both this thread and in OFI, and are working on solving the issue within PSM2.  Current estimate is that it will take 3-4 weeks.
<br>

<br>
If it comes to removing the PSM2 MTL from 1.10, would it instead be possible to disable it from being configured/built by default, unless specifically requested using --with-psm2?
<br>

<br>
Andrew
<br>

<br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Ralph
</span><br>
<span class="quotelev1">&gt; Castain
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, September 2, 2015 6:22 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI devel] 1.10.0 issue
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi folks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I regret to say that 1.10.0 is hitting an issue with at least one upstream distro.
</span><br>
<span class="quotelev1">&gt; Apparently, there is a symbol conflict between the PSM and PSM2 libraries
</span><br>
<span class="quotelev1">&gt; that precludes building both of those MTLs at the same time. This is leading
</span><br>
<span class="quotelev1">&gt; the distro to push for release of two OMPI 1.10.0 builds - one with PSM and
</span><br>
<span class="quotelev1">&gt; the other with PSM2.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; IMO, this is a very undesirable situation. I agree with the distro that delaying
</span><br>
<span class="quotelev1">&gt; release for some significant time as this would impact everyone else&#226;&#128;&#153;s users.
</span><br>
<span class="quotelev1">&gt; Therefore, assuming that the PSM team is unable to quickly resolve the
</span><br>
<span class="quotelev1">&gt; problem in their libraries, my inclination is to release an immediate 1.10.1
</span><br>
<span class="quotelev1">&gt; with the PSM2 MTL removed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I&#226;&#128;&#153;m soliciting input - any opinions?
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-">http://www.open-</a>
</span><br>
<span class="quotelev1">&gt; mpi.org/community/lists/devel/2015/09/17919.php
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17954.php">Paul Hargrove: "Re: [OMPI devel] RFC: Remove --without-hwloc configure option"</a>
<li><strong>Previous message:</strong> <a href="17952.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: Remove --without-hwloc configure option"</a>
<li><strong>In reply to:</strong> <a href="17919.php">Ralph Castain: "[OMPI devel] 1.10.0 issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17956.php">Ralph Castain: "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>Reply:</strong> <a href="17956.php">Ralph Castain: "Re: [OMPI devel] 1.10.0 issue"</a>
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
