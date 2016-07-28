<?
$subject_val = "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 10 15:04:50 2008" -->
<!-- isoreceived="20080310190450" -->
<!-- sent="Mon, 10 Mar 2008 14:04:46 -0500" -->
<!-- isosent="20080310190446" -->
<!-- name="Jon Mason" -->
<!-- email="jon_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW" -->
<!-- id="20080310190445.GA28088_at_opengridcomputing.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="01C2C1B3-8AAE-4B33-890B-4E307001D4BC_at_cisco.com" -->
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
<strong>From:</strong> Jon Mason (<em>jon_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-10 15:04:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3427.php">Gleb Natapov: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<li><strong>Previous message:</strong> <a href="3425.php">Steve Wise: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<li><strong>In reply to:</strong> <a href="3417.php">Jeff Squyres: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3428.php">Jeff Squyres: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<li><strong>Reply:</strong> <a href="3428.php">Jeff Squyres: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Mar 10, 2008 at 10:03:27AM -0500, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Mar 10, 2008, at 9:50 AM, Steve Wise wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; (just thinking out loud here): The OMPi code could be designed to  
</span><br>
<span class="quotelev2">&gt; &gt; _not_
</span><br>
<span class="quotelev2">&gt; &gt; assume recv's are posted until the CPC indicates they are ready. IE  
</span><br>
<span class="quotelev2">&gt; &gt; sort
</span><br>
<span class="quotelev2">&gt; &gt; of asynchronous behavior.   When the recvs are ready, the CPC could
</span><br>
<span class="quotelev2">&gt; &gt; up-call the btl and then the credits could be updated.  This sounds
</span><br>
<span class="quotelev2">&gt; &gt; painful though :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That's the way it works, but only for the initial credits.  The CPC is  
</span><br>
<span class="quotelev1">&gt; not involved beyond that.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So it's likely that you'll still have this problem after initial  
</span><br>
<span class="quotelev1">&gt; wireup for OMPI PP QP's (except as I noted below, if we only allow  
</span><br>
<span class="quotelev1">&gt; that chelsio rnic to only have one PP QP and it has to be qp 0).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On the single-QP angle, Can I just run OMPI with only specifying 1 QP?
</span><br>
<span class="quotelev2">&gt; &gt; Or will that require coding changes?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No coding changes required; just change the value of  
</span><br>
<span class="quotelev1">&gt; mca_btl_openib_receive_queues.
</span><br>
<p>Specifying only 1 PP QP via command line seems to be working.  It now
<br>
passes a tests that failed 100% of the time with the credit issue on my
<br>
2 node cluster.  Futher tests on a larger setup are still pending, but
<br>
this looks like a good workaround.
<br>
<p>I think adding an additional field to the mca-btl-openib-hca-params.ini
<br>
file to have the 1 PP QP by default would be a good long(er) term
<br>
solution to this.  This way those adapters that have this deficiency can
<br>
specify it and should work &quot;out of the box&quot;.
<br>
<p>Thoughts?
<br>
<p>Thanks,
<br>
Jon
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3427.php">Gleb Natapov: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<li><strong>Previous message:</strong> <a href="3425.php">Steve Wise: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<li><strong>In reply to:</strong> <a href="3417.php">Jeff Squyres: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3428.php">Jeff Squyres: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<li><strong>Reply:</strong> <a href="3428.php">Jeff Squyres: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
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
