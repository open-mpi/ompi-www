<?
$subject_val = "Re: [OMPI users] TCP Latency";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 28 15:00:13 2008" -->
<!-- isoreceived="20080728190013" -->
<!-- sent="Mon, 28 Jul 2008 14:59:51 -0400" -->
<!-- isosent="20080728185951" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] TCP Latency" -->
<!-- id="10B7D575-428D-4982-912E-7B90C5FB291E_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="488E15C6.3070905_at_zih.tu-dresden.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] TCP Latency<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-28 14:59:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6160.php">Jeff Squyres: "Re: [OMPI users] how to make a process start and then join a MPI group"</a>
<li><strong>Previous message:</strong> <a href="6158.php">Andy Georgi: "[OMPI users] TCP Latency"</a>
<li><strong>In reply to:</strong> <a href="6158.php">Andy Georgi: "[OMPI users] TCP Latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6177.php">Andy Georgi: "Re: [OMPI users] TCP Latency"</a>
<li><strong>Reply:</strong> <a href="6177.php">Andy Georgi: "Re: [OMPI users] TCP Latency"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 28, 2008, at 2:53 PM, Andy Georgi wrote:
<br>
<p><span class="quotelev1">&gt; we use Chelsio S320E-CXA adapters (<a href="http://www.chelsio.com/assetlibrary/products/S320E%20Product%20Brief%20080424.pdf">http://www.chelsio.com/assetlibrary/products/S320E%20Product%20Brief%20080424.pdf</a> 
</span><br>
<span class="quotelev1">&gt; ) in one of our clusters. After tuning the kernel i measured the  
</span><br>
<span class="quotelev1">&gt; ping pong latency via NetPIPE and got ~12us which is pretty good for  
</span><br>
<span class="quotelev1">&gt; TCP i think. So i wrote a simple ping-pong-kernel and was really  
</span><br>
<span class="quotelev1">&gt; terrified about the ~45us i got with OpenMPI 1.2.6. Are there any  
</span><br>
<span class="quotelev1">&gt; hints how we can reduce the MPI latency? To increase the bandwidth  
</span><br>
<span class="quotelev1">&gt; we already set the buffer sizes but we couldn't find a parameter  
</span><br>
<span class="quotelev1">&gt; which can be relevant for the latency. Every hint is welcome.
</span><br>
<p>The upcoming Open MPI v1.3 series will support iWARP, which gives much  
<br>
better latency than that.  I don't know all the Chelsio models  
<br>
offhand; are those iWARP-capable cards?
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
<li><strong>Next message:</strong> <a href="6160.php">Jeff Squyres: "Re: [OMPI users] how to make a process start and then join a MPI group"</a>
<li><strong>Previous message:</strong> <a href="6158.php">Andy Georgi: "[OMPI users] TCP Latency"</a>
<li><strong>In reply to:</strong> <a href="6158.php">Andy Georgi: "[OMPI users] TCP Latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6177.php">Andy Georgi: "Re: [OMPI users] TCP Latency"</a>
<li><strong>Reply:</strong> <a href="6177.php">Andy Georgi: "Re: [OMPI users] TCP Latency"</a>
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
