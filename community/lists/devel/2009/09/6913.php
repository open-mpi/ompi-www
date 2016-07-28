<?
$subject_val = "[OMPI devel] RFC: IPv6 support ***REMINDER***";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 29 11:52:14 2009" -->
<!-- isoreceived="20090929155214" -->
<!-- sent="Tue, 29 Sep 2009 09:52:05 -0600" -->
<!-- isosent="20090929155205" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: IPv6 support ***REMINDER***" -->
<!-- id="34A0726E-495A-4966-AA69-1FDBEADED7F2_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="235E0E3A-F91A-42F2-8FFA-C0FBAB0511B4_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: IPv6 support ***REMINDER***<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-29 11:52:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6914.php">Roman Cheplyaka: "Re: [OMPI devel] mca_pml_ob1_rdma_btls and leave_pinned logic"</a>
<li><strong>Previous message:</strong> <a href="6912.php">Jeff Squyres: "Re: [OMPI devel] OMPI 1.3.4 ETA ? (TLAs FTW)"</a>
<li><strong>In reply to:</strong> <a href="6844.php">Ralph Castain: "[OMPI devel] RFC: IPv6 support"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 16, 2009, at 9:53 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; WHAT: change the IPv6 configuration option to enable IPv6 if and  
</span><br>
<span class="quotelev1">&gt; only if specifically requested
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHY: IPv6 support is only marginally maintained, and is currently  
</span><br>
<span class="quotelev1">&gt; broken yet again. The current default setting is causing user  
</span><br>
<span class="quotelev1">&gt; systems to break if (a) their kernel has support for IPv6, but (b)  
</span><br>
<span class="quotelev1">&gt; the system administrator has not actually configured the interfaces  
</span><br>
<span class="quotelev1">&gt; to use IPv6.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; TIMEOUT: end of Sept
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SCOPE: OMPI trunk + 1.3.4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; DETAIL:
</span><br>
<span class="quotelev1">&gt; There appears to have been an unfortunate change in the way OMPI  
</span><br>
<span class="quotelev1">&gt; supports IPv6. Early on, we had collectively agreed to disable IPv6  
</span><br>
<span class="quotelev1">&gt; support unless specifically instructed to build it. This was decided  
</span><br>
<span class="quotelev1">&gt; because IPv6 support was shaky, at best, and used by only a small  
</span><br>
<span class="quotelev1">&gt; portion of the community. Given the lack of committed resources to  
</span><br>
<span class="quotelev1">&gt; maintain it, we felt at that time that enabling it by default would  
</span><br>
<span class="quotelev1">&gt; cause an inordinate amount of trouble.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Unfortunately, at some point someone changed this default behavior.  
</span><br>
<span class="quotelev1">&gt; We now enable IPv6 support by default if the system has the required  
</span><br>
<span class="quotelev1">&gt; header files. This test is inadequate as it in no way determines  
</span><br>
<span class="quotelev1">&gt; that the support is active. The current result of this test is to  
</span><br>
<span class="quotelev1">&gt; not only cause all the IPv6-related code to compile, but to actually  
</span><br>
<span class="quotelev1">&gt; require that every TCP interface provide an IPv6 socket.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This latter requirement causes OMPI to abort on any system where the  
</span><br>
<span class="quotelev1">&gt; header files exist, but the system admin has not configured every  
</span><br>
<span class="quotelev1">&gt; TCP interface to have an IPv6 address...a situation which is proving  
</span><br>
<span class="quotelev1">&gt; fairly common.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The proposed change will heal the current breakage, and can be  
</span><br>
<span class="quotelev1">&gt; reversed at some future time if adequate IPv6 maintenance commitment  
</span><br>
<span class="quotelev1">&gt; exists. In the meantime, it will allow me to quit the continual  
</span><br>
<span class="quotelev1">&gt; litany of telling users to manually --disable-ipv6, and allow OMPI  
</span><br>
<span class="quotelev1">&gt; to run out-of-the-box again.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6914.php">Roman Cheplyaka: "Re: [OMPI devel] mca_pml_ob1_rdma_btls and leave_pinned logic"</a>
<li><strong>Previous message:</strong> <a href="6912.php">Jeff Squyres: "Re: [OMPI devel] OMPI 1.3.4 ETA ? (TLAs FTW)"</a>
<li><strong>In reply to:</strong> <a href="6844.php">Ralph Castain: "[OMPI devel] RFC: IPv6 support"</a>
<!-- nextthread="start" -->
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
