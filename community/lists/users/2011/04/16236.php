<?
$subject_val = "Re: [OMPI users] MPI one-sided passive synchronization.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 13 18:16:50 2011" -->
<!-- isoreceived="20110413221650" -->
<!-- sent="Wed, 13 Apr 2011 17:16:46 -0500" -->
<!-- isosent="20110413221646" -->
<!-- name="James Dinan" -->
<!-- email="dinan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI one-sided passive synchronization." -->
<!-- id="4DA620CE.2020609_at_mcs.anl.gov" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="BANLkTikniwm5uLLO6NB_YR0FaKid7wr=oQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI one-sided passive synchronization.<br>
<strong>From:</strong> James Dinan (<em>dinan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-13 18:16:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16237.php">Jack Bryan: "Re: [OMPI users] OMPI monitor each process behavior"</a>
<li><strong>Previous message:</strong> <a href="16235.php">Abhishek Kulkarni: "Re: [OMPI users] MPI one-sided passive synchronization."</a>
<li><strong>In reply to:</strong> <a href="16235.php">Abhishek Kulkarni: "Re: [OMPI users] MPI one-sided passive synchronization."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sudheer,
<br>
<p>Locks in MPI don't mean mutexes, they mark the beginning and end of a 
<br>
passive mode communication epoch.  All MPI operations within an epoch 
<br>
logically occur concurrently and must be non-conflicting.  So, what 
<br>
you're written below is incorrect: the get is not guaranteed to complete 
<br>
until the call to unlock.  Because of this, it conflicts with the 
<br>
ensuing call to MPI_Accumulate, which is an error.
<br>
<p>I don't share your pessimism about MPI-2 RMA asynchronous progress.  As 
<br>
Brian hinted, the standard says you should get progress without making 
<br>
MPI calls.  I think you might be getting tripped up by the poorly named 
<br>
MPI_Lock/Unlock calls.  These aren't like mutexes and can't be used to 
<br>
ensure exclusive data access for read-modify-write operations (like in 
<br>
your example).  In order to do that, you need an actual mutex, which can 
<br>
be implemented on top of MPI-2 RMA (I can provide reference if you need 
<br>
it, I'm sure the code is available somewhere in MPI tests/examples too).
<br>
<p>Best,
<br>
&nbsp;&nbsp;~Jim.
<br>
<p>On 04/13/2011 03:11 PM, Abhishek Kulkarni wrote:
<br>
<span class="quotelev1">&gt; But given the existing behavior, all bets are off and it renders passive
</span><br>
<span class="quotelev1">&gt; synchronization
</span><br>
<span class="quotelev1">&gt; (MPI_Win_unlock) mostly similar to active synchronization (MPI_Win_fence).
</span><br>
<span class="quotelev1">&gt; In trying to emulate a distributed shared memory model, I was hoping to
</span><br>
<span class="quotelev1">&gt; do things
</span><br>
<span class="quotelev1">&gt; like:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Win_lock(MPI_LOCK_EXCLUSIVE, 0, 0, win);
</span><br>
<span class="quotelev1">&gt; MPI_Get(&amp;out, 1, MPI_INT, 0, 0, 1, MPI_INT, win);
</span><br>
<span class="quotelev1">&gt; if (out % 2 == 0)
</span><br>
<span class="quotelev1">&gt;       out++;
</span><br>
<span class="quotelev1">&gt; MPI_Accumulate(&amp;out, 1, MPI_INT, 0, 0, 1, MPI_INT, MPI_REPLACE, win);
</span><br>
<span class="quotelev1">&gt; MPI_Win_unlock(0, win);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but it is impossible to implement such atomic sections given no semantic
</span><br>
<span class="quotelev1">&gt; guarantees
</span><br>
<span class="quotelev1">&gt; on ordering of the RMA calls.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16237.php">Jack Bryan: "Re: [OMPI users] OMPI monitor each process behavior"</a>
<li><strong>Previous message:</strong> <a href="16235.php">Abhishek Kulkarni: "Re: [OMPI users] MPI one-sided passive synchronization."</a>
<li><strong>In reply to:</strong> <a href="16235.php">Abhishek Kulkarni: "Re: [OMPI users] MPI one-sided passive synchronization."</a>
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
