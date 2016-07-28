<?
$subject_val = "Re: [OMPI users] MPI_Init seems to hang, but works after a, minute or two";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 28 08:40:03 2014" -->
<!-- isoreceived="20141028124003" -->
<!-- sent="Tue, 28 Oct 2014 12:40:01 +0000" -->
<!-- isosent="20141028124001" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Init seems to hang, but works after a, minute or two" -->
<!-- id="AF876551-9746-45F7-A214-03322AAFB650_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="544E8020.2000208_at_googlemail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Init seems to hang, but works after a, minute or two<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-28 08:40:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25627.php">maxinator333: "Re: [OMPI users] MPI_Init seems to hang, but works after a, minute or two"</a>
<li><strong>Previous message:</strong> <a href="25625.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI 1.8.3 configure fails, Mac OS X 10.9.5, Intel Compilers"</a>
<li><strong>In reply to:</strong> <a href="25615.php">maxinator333: "Re: [OMPI users] MPI_Init seems to hang, but works after a, minute or two"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25627.php">maxinator333: "Re: [OMPI users] MPI_Init seems to hang, but works after a, minute or two"</a>
<li><strong>Reply:</strong> <a href="25627.php">maxinator333: "Re: [OMPI users] MPI_Init seems to hang, but works after a, minute or two"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 27, 2014, at 1:25 PM, maxinator333 &lt;maxinator333_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Deactivating my WLAN did indeed the trick!
</span><br>
<span class="quotelev1">&gt; It also seems to not work, if a LAN-cable is plugged in. No difference if I am correctly connected (to the internet/gateway) or not (wrong IP, e.g. static given IP instead of mandatory DHCP)
</span><br>
<span class="quotelev1">&gt; Again: deactivating the relevant LAN helps
</span><br>
<span class="quotelev1">&gt; It seems, that in contrast to LAN, for WLAN it makes a difference, if I'm connected to some network or not. If not connected, it seems to work, without deactivating the whole hardware.
</span><br>
<p>If you're only running on a single machine, you can deactivate the network transports in Open MPI and only used the shared memory transport.  That should allow you to run without deactivating any hardware.  E.g.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mpirun --mca btl sm,self ...
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25627.php">maxinator333: "Re: [OMPI users] MPI_Init seems to hang, but works after a, minute or two"</a>
<li><strong>Previous message:</strong> <a href="25625.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI 1.8.3 configure fails, Mac OS X 10.9.5, Intel Compilers"</a>
<li><strong>In reply to:</strong> <a href="25615.php">maxinator333: "Re: [OMPI users] MPI_Init seems to hang, but works after a, minute or two"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25627.php">maxinator333: "Re: [OMPI users] MPI_Init seems to hang, but works after a, minute or two"</a>
<li><strong>Reply:</strong> <a href="25627.php">maxinator333: "Re: [OMPI users] MPI_Init seems to hang, but works after a, minute or two"</a>
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
