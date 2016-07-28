<?
$subject_val = "Re: [OMPI users] Receiving an unknown number of messages";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 24 19:04:46 2009" -->
<!-- isoreceived="20090724230446" -->
<!-- sent="Fri, 24 Jul 2009 16:03:34 -0700" -->
<!-- isosent="20090724230334" -->
<!-- name="Shaun Jackman" -->
<!-- email="sjackman_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Receiving an unknown number of messages" -->
<!-- id="4A6A3DC6.9000306_at_bcgsc.ca" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4A6A3B5F.3040905_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Receiving an unknown number of messages<br>
<strong>From:</strong> Shaun Jackman (<em>sjackman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-24 19:03:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10092.php">Ralph Castain: "Re: [OMPI users] Backwards compatibility?"</a>
<li><strong>Previous message:</strong> <a href="10090.php">Shaun Jackman: "Re: [OMPI users] Receiving an unknown number of messages"</a>
<li><strong>In reply to:</strong> <a href="10089.php">Eugene Loh: "Re: [OMPI users] Receiving an unknown number of messages"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Eugene Loh wrote:
<br>
<span class="quotelev1">&gt; Shaun Jackman wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2 calls MPI_Test. No message is waiting, so 2 decides to send.
</span><br>
<span class="quotelev2">&gt;&gt; 2 sends to 0 and does not block (0 has one MPI_Irecv posted)
</span><br>
<span class="quotelev2">&gt;&gt; 3 calls MPI_Test. No message is waiting, so 3 decides to send.
</span><br>
<span class="quotelev2">&gt;&gt; 3 sends to 1 and does not block (1 has one MPI_Irecv posted)
</span><br>
<span class="quotelev2">&gt;&gt; 0 calls MPI_Test. No message is waiting, so 0 decides to send.
</span><br>
<span class="quotelev2">&gt;&gt; 0 receives the message from 2, consuming its MPI_Irecv
</span><br>
<span class="quotelev2">&gt;&gt; 1 calls MPI_Test. No message is waiting, so 1 decides to send.
</span><br>
<span class="quotelev2">&gt;&gt; 1 receives the message from 3, consuming its MPI_Irecv
</span><br>
<span class="quotelev2">&gt;&gt; 0 sends to 1 and blocks (1 has no more MPI_Irecv posted)
</span><br>
<span class="quotelev2">&gt;&gt; 1 sends to 0 and blocks (0 has no more MPI_Irecv posted)
</span><br>
<span class="quotelev2">&gt;&gt; and now processes 0 and 1 are deadlocked.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm in over my head here, but let me try.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Okay, so the problem is 0 sends to 1 and 1 sends to 0 so they both 
</span><br>
<span class="quotelev1">&gt; lock.  The usual way around this is for each process first to post an 
</span><br>
<span class="quotelev1">&gt; MPI_Irecv, but that might be consumed by some &quot;third party&quot; sends.  So, 
</span><br>
<span class="quotelev1">&gt; you lock.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Still, why can't you use non-blocking sends?  Use MPI_Isend.  As you 
</span><br>
<span class="quotelev1">&gt; wait for its completion, you can process in-coming messages.
</span><br>
<p>Hi Eugene,
<br>
<p>Using MPI_Isend may be the ultimate solution. If it wasn't necessary, 
<br>
I was hoping to avoid it. MPI_Isend has the added complexity of 
<br>
needing to store all the outgoing messages until the send completes. 
<br>
MPI_Ibsend allows MPI to handle that complexity for us, but requires 
<br>
preallocating a buffer for MPI_Buffer_attach.
<br>
<p>If there were some upper bound on the number of messages that we can 
<br>
expect to receive per iteration (say one per process), an alternative 
<br>
might be to post more than one MPI_Irecv. Or perhaps, posting one 
<br>
MPI_Irecv per process setting the `source' parameter would prevent the 
<br>
&quot;third-party&quot; situation.
<br>
<p>Cheers,
<br>
Shaun
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10092.php">Ralph Castain: "Re: [OMPI users] Backwards compatibility?"</a>
<li><strong>Previous message:</strong> <a href="10090.php">Shaun Jackman: "Re: [OMPI users] Receiving an unknown number of messages"</a>
<li><strong>In reply to:</strong> <a href="10089.php">Eugene Loh: "Re: [OMPI users] Receiving an unknown number of messages"</a>
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
