<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun 21 13:15:15 2007" -->
<!-- isoreceived="20070621171515" -->
<!-- sent="Thu, 21 Jun 2007 18:09:27 +0100" -->
<!-- isosent="20070621170927" -->
<!-- name="Chris Reeves" -->
<!-- email="chris.reeves_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Processes stuck in MPI_BARRIER" -->
<!-- id="20070621170927.GI14843_at_defiant" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="7174CB8D-10A7-4473-83B6-752BA4849C47_at_cs.utk.edu" -->
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
<strong>From:</strong> Chris Reeves (<em>chris.reeves_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-21 13:09:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3533.php">Brian Granger: "Re: [OMPI users] mpi python recommendation"</a>
<li><strong>Previous message:</strong> <a href="3531.php">Chris Reeves: "Re: [OMPI users] Processes stuck in MPI_BARRIER"</a>
<li><strong>In reply to:</strong> <a href="3505.php">George Bosilca: "Re: [OMPI users] Processes stuck in MPI_BARRIER"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3511.php">Marcin Skoczylas: "Re: [OMPI users] Processes stuck in MPI_BARRIER"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Jun 19, 2007 at 11:28:33AM -0700, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The deadlock happens with or without your patch ? If it's with your  
</span><br>
<span class="quotelev1">&gt; patch, the problem might come from the fact that you start 2  
</span><br>
<span class="quotelev1">&gt; processes on each node and you will share the port range (because of  
</span><br>
<span class="quotelev1">&gt; your patch).
</span><br>
<p>If process 1 is using a port then process 2 should try the next port in the
<br>
range until it finds an available one (or runs out of ports). There are 1000
<br>
ports to choose from, so it should be able to find a free one.
<br>
<p><span class="quotelev1">&gt; Please re-run either with 2 processes by node but without your patch  
</span><br>
<span class="quotelev1">&gt; or with only one process by node with your patch.
</span><br>
<p>The job won't run without my patch due to the restrictive firewall on the
<br>
individual machines. I ran tests with only a single process per node and
<br>
encountered the same problem, so the problem doesn't appear to be due to
<br>
processes arguing over ports.
<br>
<p>Cheers,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Chris
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3533.php">Brian Granger: "Re: [OMPI users] mpi python recommendation"</a>
<li><strong>Previous message:</strong> <a href="3531.php">Chris Reeves: "Re: [OMPI users] Processes stuck in MPI_BARRIER"</a>
<li><strong>In reply to:</strong> <a href="3505.php">George Bosilca: "Re: [OMPI users] Processes stuck in MPI_BARRIER"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3511.php">Marcin Skoczylas: "Re: [OMPI users] Processes stuck in MPI_BARRIER"</a>
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
