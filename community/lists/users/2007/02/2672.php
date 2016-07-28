<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Feb 12 13:54:35 2007" -->
<!-- isoreceived="20070212185435" -->
<!-- sent="Mon, 12 Feb 2007 19:56:56 +0000" -->
<!-- isosent="20070212195656" -->
<!-- name="Matteo Guglielmi" -->
<!-- email="matteo.guglielmi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openMPI 1.1.4 - connect() failed with errno=111" -->
<!-- id="45D0C688.1020609_at_epfl.ch" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="0D8A81B4-ECDC-4BD1-BD46-A1EE63C821CF_at_cisco.com" -->
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
<strong>From:</strong> Matteo Guglielmi (<em>matteo.guglielmi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-12 14:56:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2673.php">Alex Tumanov: "Re: [OMPI users] NetPipe benchmark &amp; spanning multiple interconnects"</a>
<li><strong>Previous message:</strong> <a href="2671.php">Jeff Squyres: "Re: [OMPI users] openMPI 1.1.4 - connect() failed with errno=111"</a>
<li><strong>In reply to:</strong> <a href="2671.php">Jeff Squyres: "Re: [OMPI users] openMPI 1.1.4 - connect() failed with errno=111"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Feb 12, 2007, at 2:34 PM, Matteo Guglielmi wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Those nic &quot;eth1&quot; are not connected at all... all the machines use  
</span><br>
<span class="quotelev2">&gt;&gt; only the eth0
</span><br>
<span class="quotelev2">&gt;&gt; interface which have different IP for each PC.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gotcha.  But, FWIW, OMPI doesn't know that because they have valid IP  
</span><br>
<span class="quotelev1">&gt; addresses.  So it thinks they're on the same subnet (on the same  
</span><br>
<span class="quotelev1">&gt; host, actually), and therefore thinks that they should be routable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Anyway you solved my problem suggesting me those FAQ entries!!!
</span><br>
<span class="quotelev2">&gt;&gt; --mca btl_tcp_if_exclude lo,eth1 that's the magic option which  
</span><br>
<span class="quotelev2">&gt;&gt; works for me!!!
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Excellent -- glad to help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Another solution might be to simply disable those NICs since they're  
</span><br>
<span class="quotelev1">&gt; not hooked up to anything; then OMPI should work without any options.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
Yep that's even better!
<br>
<span class="quotelev1">&gt; Good luck!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
Thanks again,
<br>
<p>I was playing around with the firewall so far and couldn't get any solution
<br>
out of it... and now I know why... because the problem wasn't there!!!
<br>
<p>Oh my gosh... you helped me a lot!
<br>
<p>Cheers,
<br>
MG.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2673.php">Alex Tumanov: "Re: [OMPI users] NetPipe benchmark &amp; spanning multiple interconnects"</a>
<li><strong>Previous message:</strong> <a href="2671.php">Jeff Squyres: "Re: [OMPI users] openMPI 1.1.4 - connect() failed with errno=111"</a>
<li><strong>In reply to:</strong> <a href="2671.php">Jeff Squyres: "Re: [OMPI users] openMPI 1.1.4 - connect() failed with errno=111"</a>
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
