<?
$subject_val = "Re: [OMPI devel] IBCM error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 14 17:19:39 2008" -->
<!-- isoreceived="20080714211939" -->
<!-- sent="Mon, 14 Jul 2008 14:18:39 -0700" -->
<!-- isosent="20080714211839" -->
<!-- name="Sean Hefty" -->
<!-- email="sean.hefty_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IBCM error" -->
<!-- id="000601c8e5f7$2f2e5eb0$9d37170a_at_amr.corp.intel.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F9E0C09E-34A1-47EC-8161-EAB9956AEEDA_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] IBCM error<br>
<strong>From:</strong> Sean Hefty (<em>sean.hefty_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-14 17:18:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4347.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<li><strong>Previous message:</strong> <a href="4345.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<li><strong>In reply to:</strong> <a href="4345.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4347.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<li><strong>Reply:</strong> <a href="4347.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;The service ID that it uses is its PID and the mask is always 0.
</span><br>
<span class="quotelev1">&gt;There will only be one call to ib_cm_listen() per device per MPI
</span><br>
<span class="quotelev1">&gt;process.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Open MPI certainly could be buggy with IBCM, of course -- but it's
</span><br>
<span class="quotelev1">&gt;fishy that the same exact &quot;mpirun ...&quot; command line works one time and
</span><br>
<span class="quotelev1">&gt;fails the next (it's kinda random when the problem occurs).
</span><br>
<p>I just want to make sure that service ID collision isn't the issue.  (It may be
<br>
unlikely, but it could happen.)  Using the PID is random, and could cause
<br>
conflicts with other services, depending on the value that's used.  I know SDP
<br>
reserve ranges of service ID values.
<br>
<p>Is the service ID specified in host or network order?  Do you know the range of
<br>
PIDs?  I can see if any well known apps might collide.
<br>
<p>- Sean
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4347.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<li><strong>Previous message:</strong> <a href="4345.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<li><strong>In reply to:</strong> <a href="4345.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4347.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<li><strong>Reply:</strong> <a href="4347.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
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
