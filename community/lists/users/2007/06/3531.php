<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun 21 13:12:58 2007" -->
<!-- isoreceived="20070621171258" -->
<!-- sent="Thu, 21 Jun 2007 18:12:52 +0100" -->
<!-- isosent="20070621171252" -->
<!-- name="Chris Reeves" -->
<!-- email="chris.reeves_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Processes stuck in MPI_BARRIER" -->
<!-- id="20070621171252.GJ14843_at_defiant" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BA339C00-908A-45F5-AFC7-F9B844D5F1B4_at_cisco.com" -->
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
<strong>Date:</strong> 2007-06-21 13:12:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3532.php">Chris Reeves: "Re: [OMPI users] Processes stuck in MPI_BARRIER"</a>
<li><strong>Previous message:</strong> <a href="3530.php">Chris Reeves: "Re: [OMPI users] Processes stuck in MPI_BARRIER"</a>
<li><strong>In reply to:</strong> <a href="3507.php">Jeff Squyres: "Re: [OMPI users] Processes stuck in MPI_BARRIER"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3510.php">Gleb Natapov: "Re: [OMPI users] Processes stuck in MPI_BARRIER"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Jun 19, 2007 at 03:40:36PM -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Jun 19, 2007, at 2:24 PM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 1. I don't believe the OS to release the binding when we close the  
</span><br>
<span class="quotelev2">&gt; &gt; socket. As an example on Linux the kernel sockets are release at a  
</span><br>
<span class="quotelev2">&gt; &gt; later moment. That means the socket might be still in use for the  
</span><br>
<span class="quotelev2">&gt; &gt; next run.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So...?  If you define a large enough range, it's not a big enough  
</span><br>
<span class="quotelev1">&gt; deal -- if you use port N for one run, if you start another run right  
</span><br>
<span class="quotelev1">&gt; after the first one finishes, you'll use port N+1.
</span><br>
<p>This is indeed the assumption I am working under.
<br>
<p><span class="quotelev1">&gt; That being said, I am equally dubious about restricting to specific  
</span><br>
<span class="quotelev1">&gt; port ranges, but for different reasons:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. If you're trying to go through firewalls, this isn't enough.   
</span><br>
<span class="quotelev1">&gt; You'll also need &quot;external&quot; IP addresses for each internal IP  
</span><br>
<span class="quotelev1">&gt; address.  This alone is such a hassle that it really makes the  
</span><br>
<span class="quotelev1">&gt; concept not worth it (and no competent network/firewall admin would  
</span><br>
<span class="quotelev1">&gt; agree to do it ;-) ).  Instead, you'd want a *single* punch-through  
</span><br>
<span class="quotelev1">&gt; in the firewall to communicate between processes in front of and  
</span><br>
<span class="quotelev1">&gt; behind the firewall, and then have some MPI-level routing to  
</span><br>
<span class="quotelev1">&gt; multiplex all relevant MPI communication through that single pinhole.
</span><br>
<p>Very true. As I intimated in my previous reply, these are per-machine
<br>
firewalls.
<br>
<p><span class="quotelev1">&gt; 2. If your range is small enough and you execute lots and lots of  
</span><br>
<span class="quotelev1">&gt; short jobs on the same nodes, you could run out of available ports in  
</span><br>
<span class="quotelev1">&gt; the range while the kernel is shutting down the sockets from the  
</span><br>
<span class="quotelev1">&gt; previous runs.
</span><br>
<p>The job in question here takes many hours/days to run, and nProc &lt;&lt; nPorts, so
<br>
this shouldn't be an issue.
<br>
<p><span class="quotelev1">&gt; This is why I asked about the network topology in my previous mail.
</span><br>
<p>OK, now time to report the results of my recent set of tests...
<br>
<p>&nbsp;Machines in cluster        Processes per node      Stuck in MPI_Barrier?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;01 - 10                       2                       yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;01 - 10                       1                       yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;01 - 03                       1                        no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;01 - 10                       1                       yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;01 - 09                       1                        no
<br>
&nbsp;&nbsp;01 - 04, 06 - 10                  1                       yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;01 - 09                       2                        no
<br>
<p>Using 10 machines invariably causes the job to get stuck in MPI_Barrier.
<br>
Reducing the number of machines to 9 causes the job to continue. Number of
<br>
machines is ruled out as a factor by changing which 9 machines are used. It
<br>
appears that including machine 10 in the cluster is what causes the job to get
<br>
stuck. Machine 10 is the machine that is in a different location in the
<br>
building. Cutting this machine out and increasing the number of processes also
<br>
seems to work.
<br>
<p>Machine 10 is the key...
<br>
<p>The fact that I can work around this problem means that finding the solution
<br>
is not quite so pressing for me now, however I'm still curious as to what the
<br>
underlying problem is. I've spoken to the network admin and he confirms my
<br>
understanding of the network layout. My next test should be to move a second
<br>
machine to the alternative location and see if this affects the results
<br>
(perhaps there something special about the setup of machine 10?). This will
<br>
have to wait until these jobs complete.
<br>
<p>If you OpenMPI folks are still interested in helping me trace the problem then
<br>
I will gladly accept your help. If not, then I'll make do and fade into the
<br>
background until I need to call upon your wisdom again! :-p
<br>
<p>Thanks for all your help,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Chris
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3532.php">Chris Reeves: "Re: [OMPI users] Processes stuck in MPI_BARRIER"</a>
<li><strong>Previous message:</strong> <a href="3530.php">Chris Reeves: "Re: [OMPI users] Processes stuck in MPI_BARRIER"</a>
<li><strong>In reply to:</strong> <a href="3507.php">Jeff Squyres: "Re: [OMPI users] Processes stuck in MPI_BARRIER"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3510.php">Gleb Natapov: "Re: [OMPI users] Processes stuck in MPI_BARRIER"</a>
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
