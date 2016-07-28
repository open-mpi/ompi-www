<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Apr 18 13:36:54 2007" -->
<!-- isoreceived="20070418173654" -->
<!-- sent="Wed, 18 Apr 2007 13:36:38 -0400" -->
<!-- isosent="20070418173638" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to force OpenMPI to use specific interconnect" -->
<!-- id="45D0922E-1895-4169-9BE3-B25FA79B36EA_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4626129A.4030008_at_aplpi.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-18 13:36:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3087.php">Jeff Squyres: "Re: [OMPI users] Mellanox IB Gold install"</a>
<li><strong>Previous message:</strong> <a href="3085.php">Simple Kaul: "[OMPI users] Mellanox IB Gold install"</a>
<li><strong>In reply to:</strong> <a href="3082.php">stephen mulcahy: "[OMPI users] How to force OpenMPI to use specific interconnect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3091.php">stephen mulcahy: "Re: [OMPI users] How to force OpenMPI to use specific interconnect"</a>
<li><strong>Reply:</strong> <a href="3091.php">stephen mulcahy: "Re: [OMPI users] How to force OpenMPI to use specific interconnect"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 18, 2007, at 8:44 AM, stephen mulcahy wrote:
<br>
<p><span class="quotelev1">&gt; ~/openmpi-1.2/bin/mpirun --mca btl_tcp_if_include eth0 --mca btl
</span><br>
<span class="quotelev1">&gt; tcp,self --bynode -np 2 --hostfile ~/openmpi.hosts.80
</span><br>
<span class="quotelev1">&gt; ~/IMB/IMB-MPI1-openmpi -npmin 2 pingpong
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Neither one resulted in a significantly different benchmark.
</span><br>
<p>That's truly odd -- I can't imagine why you wouldn't get the TCP  
<br>
transport with the above command line.  But the latencies, as you  
<br>
mentioned, are far too low for TCP.
<br>
<p>To be absolutely certain that you're not getting the IB transport, go  
<br>
to the $prefix/lib/openmpi directory and make a bogus subdirectory  
<br>
(e.g., &quot;mkdir foo&quot;).  Then move the *openib* and *mvapi* components  
<br>
into that subdirectory (you'll likely only have either &quot;openib&quot; *or*  
<br>
&quot;mvapi&quot; -- not both).
<br>
<p>Then try running again.
<br>
<p>What this does is move the plugins out of the directory where Open  
<br>
MPI will find them, so it will be forced to use TCP.  If this works,  
<br>
it would seem to indicate that there's a problem somehow that the  
<br>
remote nodes are ignoring the specification to use tcp,self, which  
<br>
would be surprising (but could be a bug).
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
<li><strong>Next message:</strong> <a href="3087.php">Jeff Squyres: "Re: [OMPI users] Mellanox IB Gold install"</a>
<li><strong>Previous message:</strong> <a href="3085.php">Simple Kaul: "[OMPI users] Mellanox IB Gold install"</a>
<li><strong>In reply to:</strong> <a href="3082.php">stephen mulcahy: "[OMPI users] How to force OpenMPI to use specific interconnect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3091.php">stephen mulcahy: "Re: [OMPI users] How to force OpenMPI to use specific interconnect"</a>
<li><strong>Reply:</strong> <a href="3091.php">stephen mulcahy: "Re: [OMPI users] How to force OpenMPI to use specific interconnect"</a>
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
