<?
$subject_val = "Re: [OMPI users] simplest way to check message queues";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  1 18:37:53 2010" -->
<!-- isoreceived="20100901223753" -->
<!-- sent="Thu, 2 Sep 2010 08:32:38 +1000" -->
<!-- isosent="20100901223238" -->
<!-- name="Jaison Mulerikkal" -->
<!-- email="jmulerik_at_[hidden]" -->
<!-- subject="Re: [OMPI users] simplest way to check message queues" -->
<!-- id="20714_1283380673_o81MbmDO004616_10341AB6-2FB0-47DC-9D8D-F915132BF561_at_cs.anu.edu.au" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="022B2694-7A97-4241-9CE1-D757528CC370_at_pittman.co.uk" -->
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
<strong>From:</strong> Jaison Mulerikkal (<em>jmulerik_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-01 18:32:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14157.php">lyb: "[OMPI users] MPI_Comm_accept and MPI_Comm_connect both use 100% one cpu core. Is it a bug?"</a>
<li><strong>Previous message:</strong> <a href="14155.php">Ashley Pittman: "Re: [OMPI users] simplest way to check message queues"</a>
<li><strong>In reply to:</strong> <a href="14153.php">Ashley Pittman: "Re: [OMPI users] simplest way to check message queues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14164.php">Ashley Pittman: "Re: [OMPI users] simplest way to check message queues"</a>
<li><strong>Reply:</strong> <a href="14164.php">Ashley Pittman: "Re: [OMPI users] simplest way to check message queues"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am getting interested in this thread.
<br>
<p>I'm looking for some solutions, where I can redirect a task/message (MPI_send) to a particular process (say rank 1), which is in a queue (at rank 1) to another process (say rank 2), if the queue is longer at rank 1. 
<br>
<p>How can I do it?
<br>
<p>First of all, I need to know the queue length at a particular process (rank 1) at a particular instant. how can I use padb to get that info?
<br>
<p>Then on the basis of that info 'send'  some (queued up) messages (from rank 1) to some other process (say rank 2) which are relatively free. Is that possible?
<br>
<p>Jaison Mulerikkal
<br>
jmulerik_at_[hidden]
<br>
<p><p><p>On 02/09/2010, at 7:32 AM, Ashley Pittman wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 1 Sep 2010, at 21:13, Brock Palen wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have a code for a user (namd if anyone cares)  that on a specific case will lock up,  a quick ltrace shows the processes doing Iprobes over and over, so this makes me think that a process someplace is blocking on communication.  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What is the best way to look at message queues? To see what process is stuck and to drill into.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The only three programs I know which can do this are TotalView, DDT and Padb.  Totalview and DDT are graphical parallel debuggers and are commercial projects, Padb is a command-line tool and is open-source
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ashley (padb developer)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ashley Pittman, Bath, UK.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Padb - A parallel job inspection tool for cluster computing
</span><br>
<span class="quotelev1">&gt; <a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14157.php">lyb: "[OMPI users] MPI_Comm_accept and MPI_Comm_connect both use 100% one cpu core. Is it a bug?"</a>
<li><strong>Previous message:</strong> <a href="14155.php">Ashley Pittman: "Re: [OMPI users] simplest way to check message queues"</a>
<li><strong>In reply to:</strong> <a href="14153.php">Ashley Pittman: "Re: [OMPI users] simplest way to check message queues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14164.php">Ashley Pittman: "Re: [OMPI users] simplest way to check message queues"</a>
<li><strong>Reply:</strong> <a href="14164.php">Ashley Pittman: "Re: [OMPI users] simplest way to check message queues"</a>
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
