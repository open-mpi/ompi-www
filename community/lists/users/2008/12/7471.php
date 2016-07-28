<?
$subject_val = "Re: [OMPI users] How to force eager behavior during Isend?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  8 17:48:15 2008" -->
<!-- isoreceived="20081208224815" -->
<!-- sent="Mon,  8 Dec 2008 17:48:11 -0500 (EST)" -->
<!-- isosent="20081208224811" -->
<!-- name="Barry Rountree" -->
<!-- email="rountree_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to force eager behavior during Isend?" -->
<!-- id="20081208174811.CFA02427_at_punts5.cc.uga.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] How to force eager behavior during Isend?" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to force eager behavior during Isend?<br>
<strong>From:</strong> Barry Rountree (<em>rountree_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-08 17:48:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7472.php">Yasmine Yacoub: "[OMPI users] mca parameter"</a>
<li><strong>Previous message:</strong> <a href="7470.php">Heitor Florido: "Re: [OMPI users] undefined symbol: MPI_Send"</a>
<li><strong>Maybe in reply to:</strong> <a href="7448.php">Barry Rountree: "[OMPI users] How to force eager behavior during Isend?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Monday 08 December 2008 02:44:42 pm George Bosilca wrote:
<br>
<span class="quotelev1">&gt; Barry,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you set the eager size large enough, the isend will not return
</span><br>
<span class="quotelev1">&gt; until the data is pushed into the network layer.
</span><br>
<p>That's exactly what I want it to do -- good.  I've set the eagerness to 2MB, 
<br>
but for messages 64k and up, Isend returns immediately and a significant 
<br>
amount of time is spent in Wait.  For messages less than 64k, the reverse is 
<br>
true:  a significant amount of time spent in Isend, and the Wait returns 
<br>
immediately.
<br>
<p><span class="quotelev1">&gt; However, this doesn't 
</span><br>
<span class="quotelev1">&gt; guarantee that the data is delivered to the peer, but only that it was
</span><br>
<span class="quotelev1">&gt; queued in the network (in the TCP case it is copied somewhere in the
</span><br>
<span class="quotelev1">&gt; kernel buffers). 
</span><br>
<p>Right.
<br>
<p><span class="quotelev1">&gt; The kernel will deliver that data doing a best 
</span><br>
<span class="quotelev1">&gt; effort, but there is no guarantee on that. As the kernel buffer has a
</span><br>
<span class="quotelev1">&gt; limited size (no more than 128k) the expected graphical behavior for
</span><br>
<span class="quotelev1">&gt; the isend operation over TCP should look like stairs, slightly going
</span><br>
<span class="quotelev1">&gt; up because of the memcpy, and a large jump for every syscall required
</span><br>
<span class="quotelev1">&gt; to do the operation.
</span><br>
<p>That's fine.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now for the irecv the story is a lot more complex. The irecv only
</span><br>
<span class="quotelev1">&gt; realize the matching, and if the data is not yet completely available
</span><br>
<span class="quotelev1">&gt; (let's say only a small fragment was received at the moment of the
</span><br>
<span class="quotelev1">&gt; irecv), the irecv will return (there is no eager notion there). The
</span><br>
<span class="quotelev1">&gt; remaining of the data will became available only after the
</span><br>
<span class="quotelev1">&gt; corresponding MPI_Wait.
</span><br>
<p>What I'm trying to avoid -- and it may be a bad idea -- is having to decide 
<br>
how much time in a given Wait is spent blocking or working.  This becomes 
<br>
simpler if I know that, for example, no work was done in the Isend or Irecv 
<br>
call.  If all the work was done in those calls, that's fine too (although 
<br>
turning an Irecv into a blocking receive would probably break UMT2K and a few 
<br>
other things).  But if some of the time, some of the work is done in the 
<br>
Isend/Irecv, I've got a more complex model.  I'll have to deal with this 
<br>
eventually, but I'd rather put it off if I could.
<br>
<p>I was thinking that by manipulating the eagerness level (and increasing the 
<br>
buffer sizes), I force this behavior.  (I just tried setting the TCP and SELF 
<br>
eagerness levels to 0, then 1.  Still no change in behavior.)
<br>
<p>PERUSE looks like it might be useful, and I'll continue looking into it.
<br>
<p>Thanks,
<br>
<p>Barry
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7472.php">Yasmine Yacoub: "[OMPI users] mca parameter"</a>
<li><strong>Previous message:</strong> <a href="7470.php">Heitor Florido: "Re: [OMPI users] undefined symbol: MPI_Send"</a>
<li><strong>Maybe in reply to:</strong> <a href="7448.php">Barry Rountree: "[OMPI users] How to force eager behavior during Isend?"</a>
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
