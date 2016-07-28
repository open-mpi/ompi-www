<?
$subject_val = "Re: [OMPI users] MPI_Init seems to hang, but works after a, minute or two";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 28 09:02:37 2014" -->
<!-- isoreceived="20141028130237" -->
<!-- sent="Tue, 28 Oct 2014 14:02:32 +0100" -->
<!-- isosent="20141028130232" -->
<!-- name="maxinator333" -->
<!-- email="maxinator333_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Init seems to hang, but works after a, minute or two" -->
<!-- id="544F93E8.7060403_at_googlemail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AF876551-9746-45F7-A214-03322AAFB650_at_cisco.com" -->
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
<strong>From:</strong> maxinator333 (<em>maxinator333_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-28 09:02:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25628.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_Init seems to hang, but works after a, minute or two"</a>
<li><strong>Previous message:</strong> <a href="25626.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_Init seems to hang, but works after a, minute or two"</a>
<li><strong>In reply to:</strong> <a href="25626.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_Init seems to hang, but works after a, minute or two"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25628.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_Init seems to hang, but works after a, minute or two"</a>
<li><strong>Reply:</strong> <a href="25628.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_Init seems to hang, but works after a, minute or two"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It doesn't seem to work. (switching off wlan still works)
<br>
mpicc mpiinit.c -o mpiinit.exe; time mpirun --mca btl sm,self -n 2 
<br>
./mpiinit.exe
<br>
<p>real    0m43.733s
<br>
user    0m0.888s
<br>
sys     0m0.824s
<br>
<p>Am 28.10.2014 13:40, schrieb Jeff Squyres (jsquyres):
<br>
<span class="quotelev1">&gt; On Oct 27, 2014, at 1:25 PM, maxinator333 &lt;maxinator333_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Deactivating my WLAN did indeed the trick!
</span><br>
<span class="quotelev2">&gt;&gt; It also seems to not work, if a LAN-cable is plugged in. No difference if I am correctly connected (to the internet/gateway) or not (wrong IP, e.g. static given IP instead of mandatory DHCP)
</span><br>
<span class="quotelev2">&gt;&gt; Again: deactivating the relevant LAN helps
</span><br>
<span class="quotelev2">&gt;&gt; It seems, that in contrast to LAN, for WLAN it makes a difference, if I'm connected to some network or not. If not connected, it seems to work, without deactivating the whole hardware.
</span><br>
<span class="quotelev1">&gt; If you're only running on a single machine, you can deactivate the network transports in Open MPI and only used the shared memory transport.  That should allow you to run without deactivating any hardware.  E.g.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      mpirun --mca btl sm,self ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25628.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_Init seems to hang, but works after a, minute or two"</a>
<li><strong>Previous message:</strong> <a href="25626.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_Init seems to hang, but works after a, minute or two"</a>
<li><strong>In reply to:</strong> <a href="25626.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_Init seems to hang, but works after a, minute or two"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25628.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_Init seems to hang, but works after a, minute or two"</a>
<li><strong>Reply:</strong> <a href="25628.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_Init seems to hang, but works after a, minute or two"</a>
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
