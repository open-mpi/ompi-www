<?
$subject_val = "Re: [OMPI users] tg3 module";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  4 13:42:47 2008" -->
<!-- isoreceived="20080604174247" -->
<!-- sent="Wed, 04 Jun 2008 13:42:29 -0400" -->
<!-- isosent="20080604174229" -->
<!-- name="Patrick Geoffray" -->
<!-- email="patrick_at_[hidden]" -->
<!-- subject="Re: [OMPI users] tg3 module" -->
<!-- id="4846D405.7060804_at_myri.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4846B455.6000708_at_aomail.uab.es" -->
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
<strong>Subject:</strong> Re: [OMPI users] tg3 module<br>
<strong>From:</strong> Patrick Geoffray (<em>patrick_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-04 13:42:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5805.php">Jeff Squyres: "Re: [OMPI users] Open MPI instructional videos"</a>
<li><strong>Previous message:</strong> <a href="5803.php">Jeff Squyres: "Re: [OMPI users] Infinite loop when tcp free list max reached"</a>
<li><strong>In reply to:</strong> <a href="5799.php">Leonardo Fialho: "[OMPI users] tg3 module"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Leonardo,
<br>
<p>Leonardo Fialho wrote:
<br>
<span class="quotelev1">&gt; NETDEV WATCHDOG: eth0: transmit timed out
</span><br>
<span class="quotelev1">&gt; tg3: eth0: transmit timed out, resetting
</span><br>
<span class="quotelev1">&gt; tg3: tg3_stop_block timed out, ofs=2c00 enable_bit=2
</span><br>
<span class="quotelev1">&gt; tg3: tg3_stop_block timed out, ofs=4800 enable_bit=2
</span><br>
<span class="quotelev1">&gt; tg3: eth0: Link is down.
</span><br>
<span class="quotelev1">&gt; tg3: eth0: Link is up at 1000 Mbps, full duplex.
</span><br>
<p>The tg3 driver times out because the transmit is stuck. It can be an 
<br>
interrupt problem or bad hardware flow-control on the switch. Since it 
<br>
works after the driver resets the link, it looks like either the switch 
<br>
flow control is busted (try to turn it off or try between 2 nodes in 
<br>
back-to-back) or one other node stops consuming.
<br>
<p>Open-MPI may generate enough contention to trigger the problem but I 
<br>
don't think it is directly related to Open-MPI.
<br>
<p>Patrick
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5805.php">Jeff Squyres: "Re: [OMPI users] Open MPI instructional videos"</a>
<li><strong>Previous message:</strong> <a href="5803.php">Jeff Squyres: "Re: [OMPI users] Infinite loop when tcp free list max reached"</a>
<li><strong>In reply to:</strong> <a href="5799.php">Leonardo Fialho: "[OMPI users] tg3 module"</a>
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
