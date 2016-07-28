<?
$subject_val = "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 10 11:03:35 2008" -->
<!-- isoreceived="20080310150335" -->
<!-- sent="Mon, 10 Mar 2008 10:03:27 -0500" -->
<!-- isosent="20080310150327" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW" -->
<!-- id="01C2C1B3-8AAE-4B33-890B-4E307001D4BC_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="47D54AA5.4000404_at_opengridcomputing.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-10 11:03:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3418.php">Jeff Squyres: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<li><strong>Previous message:</strong> <a href="3416.php">Steve Wise: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<li><strong>In reply to:</strong> <a href="3415.php">Steve Wise: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3426.php">Jon Mason: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<li><strong>Reply:</strong> <a href="3426.php">Jon Mason: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 10, 2008, at 9:50 AM, Steve Wise wrote:
<br>
<p><span class="quotelev1">&gt; (just thinking out loud here): The OMPi code could be designed to  
</span><br>
<span class="quotelev1">&gt; _not_
</span><br>
<span class="quotelev1">&gt; assume recv's are posted until the CPC indicates they are ready. IE  
</span><br>
<span class="quotelev1">&gt; sort
</span><br>
<span class="quotelev1">&gt; of asynchronous behavior.   When the recvs are ready, the CPC could
</span><br>
<span class="quotelev1">&gt; up-call the btl and then the credits could be updated.  This sounds
</span><br>
<span class="quotelev1">&gt; painful though :)
</span><br>
<p>That's the way it works, but only for the initial credits.  The CPC is  
<br>
not involved beyond that.
<br>
<p>So it's likely that you'll still have this problem after initial  
<br>
wireup for OMPI PP QP's (except as I noted below, if we only allow  
<br>
that chelsio rnic to only have one PP QP and it has to be qp 0).
<br>
<p><span class="quotelev1">&gt; On the single-QP angle, Can I just run OMPI with only specifying 1 QP?
</span><br>
<span class="quotelev1">&gt; Or will that require coding changes?
</span><br>
<p><p>No coding changes required; just change the value of  
<br>
mca_btl_openib_receive_queues.
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
<li><strong>Next message:</strong> <a href="3418.php">Jeff Squyres: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<li><strong>Previous message:</strong> <a href="3416.php">Steve Wise: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<li><strong>In reply to:</strong> <a href="3415.php">Steve Wise: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3426.php">Jon Mason: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<li><strong>Reply:</strong> <a href="3426.php">Jon Mason: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
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
