<?
$subject_val = "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 11 08:39:28 2008" -->
<!-- isoreceived="20080311123928" -->
<!-- sent="Tue, 11 Mar 2008 07:39:16 -0500" -->
<!-- isosent="20080311123916" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW" -->
<!-- id="69FCABEA-A600-4FDF-AC58-57D3BEBDA4B2_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080310190445.GA28088_at_opengridcomputing.com" -->
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
<strong>Date:</strong> 2008-03-11 08:39:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3429.php">Andrew Friedley: "[OMPI devel] Missing symbol with DR PML"</a>
<li><strong>Previous message:</strong> <a href="3427.php">Gleb Natapov: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<li><strong>In reply to:</strong> <a href="3426.php">Jon Mason: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3423.php">Gleb Natapov: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 10, 2008, at 2:04 PM, Jon Mason wrote:
<br>
<p><span class="quotelev1">&gt; Specifying only 1 PP QP via command line seems to be working.  It now
</span><br>
<span class="quotelev1">&gt; passes a tests that failed 100% of the time with the credit issue on  
</span><br>
<span class="quotelev1">&gt; my
</span><br>
<span class="quotelev1">&gt; 2 node cluster.  Futher tests on a larger setup are still pending, but
</span><br>
<span class="quotelev1">&gt; this looks like a good workaround.
</span><br>
<p>Good!
<br>
<p><span class="quotelev1">&gt; I think adding an additional field to the mca-btl-openib-hca- 
</span><br>
<span class="quotelev1">&gt; params.ini
</span><br>
<span class="quotelev1">&gt; file to have the 1 PP QP by default would be a good long(er) term
</span><br>
<span class="quotelev1">&gt; solution to this.  This way those adapters that have this deficiency  
</span><br>
<span class="quotelev1">&gt; can
</span><br>
<span class="quotelev1">&gt; specify it and should work &quot;out of the box&quot;.
</span><br>
<p><p>Perfect; extending the ini file to understand &quot;receive_queues&quot; (in the  
<br>
same way that the other fields are understood) would seem like a good  
<br>
solution.
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
<li><strong>Next message:</strong> <a href="3429.php">Andrew Friedley: "[OMPI devel] Missing symbol with DR PML"</a>
<li><strong>Previous message:</strong> <a href="3427.php">Gleb Natapov: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<li><strong>In reply to:</strong> <a href="3426.php">Jon Mason: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3423.php">Gleb Natapov: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
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
