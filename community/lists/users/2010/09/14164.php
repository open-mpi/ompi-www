<?
$subject_val = "Re: [OMPI users] simplest way to check message queues";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  2 18:14:30 2010" -->
<!-- isoreceived="20100902221430" -->
<!-- sent="Thu, 2 Sep 2010 23:13:52 +0100" -->
<!-- isosent="20100902221352" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] simplest way to check message queues" -->
<!-- id="2E5DFDD5-58A6-4904-9F04-A0980D562A1B_at_pittman.co.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20714_1283380673_o81MbmDO004616_10341AB6-2FB0-47DC-9D8D-F915132BF561_at_cs.anu.edu.au" -->
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
<strong>Subject:</strong> Re: [OMPI users] simplest way to check message queues<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-02 18:13:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14165.php">David Singleton: "[OMPI users] spin-wait backoff"</a>
<li><strong>Previous message:</strong> <a href="14163.php">Ashley Pittman: "Re: [OMPI users] simplest way to check message queues"</a>
<li><strong>In reply to:</strong> <a href="14156.php">Jaison Mulerikkal: "Re: [OMPI users] simplest way to check message queues"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 1 Sep 2010, at 23:32, Jaison Mulerikkal wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am getting interested in this thread.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm looking for some solutions, where I can redirect a task/message (MPI_send) to a particular process (say rank 1), which is in a queue (at rank 1) to another process (say rank 2), if the queue is longer at rank 1. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How can I do it?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; First of all, I need to know the queue length at a particular process (rank 1) at a particular instant. how can I use padb to get that info?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Then on the basis of that info 'send'  some (queued up) messages (from rank 1) to some other process (say rank 2) which are relatively free. Is that possible?
</span><br>
<p><p>The tools being discussed are for querying the state of message queues within a parallel job from outside of that job and are not suitable for the type of introspection you are talking about.
<br>
<p>It sounds like you are looking for some kind of shared receive queue which multiple ranks can pull messages off, I can't think of anything in MPI that would allow this kind of functionality short of having a RTS/CTS protocol in the application layer.  The easiest might be to had a single rank receive all messages and keep them in a queue and then use MPI_Ssend() to forward messages to your &quot;consumer&quot; ranks.  Substitute ranks for threads in the above text as you feel is appropriate.
<br>
<p>Ashley,
<br>
<p><pre>
-- 
Ashley Pittman, Bath, UK.
Padb - A parallel job inspection tool for cluster computing
<a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14165.php">David Singleton: "[OMPI users] spin-wait backoff"</a>
<li><strong>Previous message:</strong> <a href="14163.php">Ashley Pittman: "Re: [OMPI users] simplest way to check message queues"</a>
<li><strong>In reply to:</strong> <a href="14156.php">Jaison Mulerikkal: "Re: [OMPI users] simplest way to check message queues"</a>
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
