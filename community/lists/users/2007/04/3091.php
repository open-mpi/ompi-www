<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Apr 19 08:15:37 2007" -->
<!-- isoreceived="20070419121537" -->
<!-- sent="Thu, 19 Apr 2007 13:15:40 +0100" -->
<!-- isosent="20070419121540" -->
<!-- name="stephen mulcahy" -->
<!-- email="smulcahy_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to force OpenMPI to use specific interconnect" -->
<!-- id="46275D6C.7020009_at_aplpi.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="45D0922E-1895-4169-9BE3-B25FA79B36EA_at_cisco.com" -->
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
<strong>From:</strong> stephen mulcahy (<em>smulcahy_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-19 08:15:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3092.php">Jeff Squyres: "Re: [OMPI users] How to force OpenMPI to use specific interconnect"</a>
<li><strong>Previous message:</strong> <a href="3090.php">Michael Gauckler (mailing lists): "Re: [OMPI users] Datatype construction, serious limitation (was: Signal: Segmentation fault (11) Problem)"</a>
<li><strong>In reply to:</strong> <a href="3086.php">Jeff Squyres: "Re: [OMPI users] How to force OpenMPI to use specific interconnect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3092.php">Jeff Squyres: "Re: [OMPI users] How to force OpenMPI to use specific interconnect"</a>
<li><strong>Reply:</strong> <a href="3092.php">Jeff Squyres: "Re: [OMPI users] How to force OpenMPI to use specific interconnect"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; That's truly odd -- I can't imagine why you wouldn't get the TCP  
</span><br>
<span class="quotelev1">&gt; transport with the above command line.  But the latencies, as you  
</span><br>
<span class="quotelev1">&gt; mentioned, are far too low for TCP.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To be absolutely certain that you're not getting the IB transport, go  
</span><br>
<span class="quotelev1">&gt; to the $prefix/lib/openmpi directory and make a bogus subdirectory  
</span><br>
<span class="quotelev1">&gt; (e.g., &quot;mkdir foo&quot;).  Then move the *openib* and *mvapi* components  
</span><br>
<span class="quotelev1">&gt; into that subdirectory (you'll likely only have either &quot;openib&quot; *or*  
</span><br>
<span class="quotelev1">&gt; &quot;mvapi&quot; -- not both).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Then try running again.
</span><br>
<p>What is stranger still is that I can't find any *openib* or *mvapi* 
<br>
components in that subdirectory so I'm left wondering what exactly it's 
<br>
using to communicate. I don't think it's using shared memory because 
<br>
I've run a shared memory test aswell and the latencies are lower with that.
<br>
<p>Perhaps it's interacting with something else installed somewhere on the 
<br>
system?
<br>
<p>-stephen
<br>
<pre>
-- 
Stephen Mulcahy, Applepie Solutions Ltd., Innovation in Business Center,
GMIT, Dublin Rd, Galway, Ireland.  +353.91.751262  <a href="http://www.aplpi.com">http://www.aplpi.com</a>
Registered in Ireland, no. 289353 (5 Woodlands Avenue, Renmore, Galway)
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3092.php">Jeff Squyres: "Re: [OMPI users] How to force OpenMPI to use specific interconnect"</a>
<li><strong>Previous message:</strong> <a href="3090.php">Michael Gauckler (mailing lists): "Re: [OMPI users] Datatype construction, serious limitation (was: Signal: Segmentation fault (11) Problem)"</a>
<li><strong>In reply to:</strong> <a href="3086.php">Jeff Squyres: "Re: [OMPI users] How to force OpenMPI to use specific interconnect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3092.php">Jeff Squyres: "Re: [OMPI users] How to force OpenMPI to use specific interconnect"</a>
<li><strong>Reply:</strong> <a href="3092.php">Jeff Squyres: "Re: [OMPI users] How to force OpenMPI to use specific interconnect"</a>
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
