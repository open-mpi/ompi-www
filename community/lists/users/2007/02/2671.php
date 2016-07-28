<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Feb 12 13:38:25 2007" -->
<!-- isoreceived="20070212183825" -->
<!-- sent="Mon, 12 Feb 2007 13:38:15 -0500" -->
<!-- isosent="20070212183815" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openMPI 1.1.4 - connect() failed with errno=111" -->
<!-- id="0D8A81B4-ECDC-4BD1-BD46-A1EE63C821CF_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="45D0C158.3030802_at_epfl.ch" -->
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
<strong>Date:</strong> 2007-02-12 13:38:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2672.php">Matteo Guglielmi: "Re: [OMPI users] openMPI 1.1.4 - connect() failed with errno=111"</a>
<li><strong>Previous message:</strong> <a href="2670.php">Matteo Guglielmi: "Re: [OMPI users] openMPI 1.1.4 - connect() failed with errno=111"</a>
<li><strong>In reply to:</strong> <a href="2670.php">Matteo Guglielmi: "Re: [OMPI users] openMPI 1.1.4 - connect() failed with errno=111"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2672.php">Matteo Guglielmi: "Re: [OMPI users] openMPI 1.1.4 - connect() failed with errno=111"</a>
<li><strong>Reply:</strong> <a href="2672.php">Matteo Guglielmi: "Re: [OMPI users] openMPI 1.1.4 - connect() failed with errno=111"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 12, 2007, at 2:34 PM, Matteo Guglielmi wrote:
<br>
<p><span class="quotelev1">&gt; Those nic &quot;eth1&quot; are not connected at all... all the machines use  
</span><br>
<span class="quotelev1">&gt; only the eth0
</span><br>
<span class="quotelev1">&gt; interface which have different IP for each PC.
</span><br>
<p>Gotcha.  But, FWIW, OMPI doesn't know that because they have valid IP  
<br>
addresses.  So it thinks they're on the same subnet (on the same  
<br>
host, actually), and therefore thinks that they should be routable.
<br>
<p><span class="quotelev1">&gt; Anyway you solved my problem suggesting me those FAQ entries!!!
</span><br>
<span class="quotelev1">&gt; --mca btl_tcp_if_exclude lo,eth1 that's the magic option which  
</span><br>
<span class="quotelev1">&gt; works for me!!!
</span><br>
<p>Excellent -- glad to help.
<br>
<p>Another solution might be to simply disable those NICs since they're  
<br>
not hooked up to anything; then OMPI should work without any options.
<br>
<p>Good luck!
<br>
<p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2672.php">Matteo Guglielmi: "Re: [OMPI users] openMPI 1.1.4 - connect() failed with errno=111"</a>
<li><strong>Previous message:</strong> <a href="2670.php">Matteo Guglielmi: "Re: [OMPI users] openMPI 1.1.4 - connect() failed with errno=111"</a>
<li><strong>In reply to:</strong> <a href="2670.php">Matteo Guglielmi: "Re: [OMPI users] openMPI 1.1.4 - connect() failed with errno=111"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2672.php">Matteo Guglielmi: "Re: [OMPI users] openMPI 1.1.4 - connect() failed with errno=111"</a>
<li><strong>Reply:</strong> <a href="2672.php">Matteo Guglielmi: "Re: [OMPI users] openMPI 1.1.4 - connect() failed with errno=111"</a>
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
