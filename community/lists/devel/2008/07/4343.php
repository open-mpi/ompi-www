<?
$subject_val = "Re: [OMPI devel] IBCM error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 14 13:17:40 2008" -->
<!-- isoreceived="20080714171740" -->
<!-- sent="Mon, 14 Jul 2008 10:17:35 -0700" -->
<!-- isosent="20080714171735" -->
<!-- name="Sean Hefty" -->
<!-- email="sean.hefty_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IBCM error" -->
<!-- id="000201c8e5d5$826793c0$9d37170a_at_amr.corp.intel.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E57A4CF2-6159-4C74-9517-7D4542845BC7_at_cisco.com" -->
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
<strong>Date:</strong> 2008-07-14 13:17:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4344.php">Ralph H. Castain: "Re: [OMPI devel] IBCM error"</a>
<li><strong>Previous message:</strong> <a href="4342.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<li><strong>In reply to:</strong> <a href="4328.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4345.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<li><strong>Reply:</strong> <a href="4345.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;I talked to Sean Hefty about it, but we never figured out a definitive
</span><br>
<span class="quotelev1">&gt;cause or solution.  My best guess is that there is something wonky
</span><br>
<span class="quotelev1">&gt;about multiple processes simultaneously interacting with the IBCM
</span><br>
<span class="quotelev1">&gt;kernel driver from userspace; but I don't know jack about kernel
</span><br>
<span class="quotelev1">&gt;stuff, so that's a total SWAG.
</span><br>
<p>The only reason I can think of why ib_cm_listen() fails is if there's a conflict
<br>
with the service_id and/or service_mask from multiple threads.  What does OMPI
<br>
pass in for these parameters?
<br>
<p>- Sean
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4344.php">Ralph H. Castain: "Re: [OMPI devel] IBCM error"</a>
<li><strong>Previous message:</strong> <a href="4342.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<li><strong>In reply to:</strong> <a href="4328.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4345.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<li><strong>Reply:</strong> <a href="4345.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
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
