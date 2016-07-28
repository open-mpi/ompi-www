<?
$subject_val = "Re: [OMPI users] Receiving an unknown number of messages";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 24 18:53:05 2009" -->
<!-- isoreceived="20090724225305" -->
<!-- sent="Fri, 24 Jul 2009 15:53:19 -0700" -->
<!-- isosent="20090724225319" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Receiving an unknown number of messages" -->
<!-- id="4A6A3B5F.3040905_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A6A3717.2000004_at_bcgsc.ca" -->
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
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-24 18:53:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10090.php">Shaun Jackman: "Re: [OMPI users] Receiving an unknown number of messages"</a>
<li><strong>Previous message:</strong> <a href="10088.php">Shaun Jackman: "Re: [OMPI users] Receiving an unknown number of messages"</a>
<li><strong>In reply to:</strong> <a href="10088.php">Shaun Jackman: "Re: [OMPI users] Receiving an unknown number of messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10091.php">Shaun Jackman: "Re: [OMPI users] Receiving an unknown number of messages"</a>
<li><strong>Reply:</strong> <a href="10091.php">Shaun Jackman: "Re: [OMPI users] Receiving an unknown number of messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Shaun Jackman wrote:
<br>
<p><span class="quotelev1">&gt; 2 calls MPI_Test. No message is waiting, so 2 decides to send.
</span><br>
<span class="quotelev1">&gt; 2 sends to 0 and does not block (0 has one MPI_Irecv posted)
</span><br>
<span class="quotelev1">&gt; 3 calls MPI_Test. No message is waiting, so 3 decides to send.
</span><br>
<span class="quotelev1">&gt; 3 sends to 1 and does not block (1 has one MPI_Irecv posted)
</span><br>
<span class="quotelev1">&gt; 0 calls MPI_Test. No message is waiting, so 0 decides to send.
</span><br>
<span class="quotelev1">&gt; 0 receives the message from 2, consuming its MPI_Irecv
</span><br>
<span class="quotelev1">&gt; 1 calls MPI_Test. No message is waiting, so 1 decides to send.
</span><br>
<span class="quotelev1">&gt; 1 receives the message from 3, consuming its MPI_Irecv
</span><br>
<span class="quotelev1">&gt; 0 sends to 1 and blocks (1 has no more MPI_Irecv posted)
</span><br>
<span class="quotelev1">&gt; 1 sends to 0 and blocks (0 has no more MPI_Irecv posted)
</span><br>
<span class="quotelev1">&gt; and now processes 0 and 1 are deadlocked.
</span><br>
<p>I'm in over my head here, but let me try.
<br>
<p>Okay, so the problem is 0 sends to 1 and 1 sends to 0 so they both 
<br>
lock.  The usual way around this is for each process first to post an 
<br>
MPI_Irecv, but that might be consumed by some &quot;third party&quot; sends.  So, 
<br>
you lock.
<br>
<p>Still, why can't you use non-blocking sends?  Use MPI_Isend.  As you 
<br>
wait for its completion, you can process in-coming messages.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10090.php">Shaun Jackman: "Re: [OMPI users] Receiving an unknown number of messages"</a>
<li><strong>Previous message:</strong> <a href="10088.php">Shaun Jackman: "Re: [OMPI users] Receiving an unknown number of messages"</a>
<li><strong>In reply to:</strong> <a href="10088.php">Shaun Jackman: "Re: [OMPI users] Receiving an unknown number of messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10091.php">Shaun Jackman: "Re: [OMPI users] Receiving an unknown number of messages"</a>
<li><strong>Reply:</strong> <a href="10091.php">Shaun Jackman: "Re: [OMPI users] Receiving an unknown number of messages"</a>
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
