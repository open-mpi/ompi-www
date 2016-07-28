<?
$subject_val = "Re: [OMPI users] sharing memory between processes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 28 12:41:55 2009" -->
<!-- isoreceived="20090428164155" -->
<!-- sent="Tue, 28 Apr 2009 09:41:27 -0700" -->
<!-- isosent="20090428164127" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] sharing memory between processes" -->
<!-- id="49F731B7.8000800_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="60110f460904280628k5e43dd3bk6fd888f99352a2cc_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] sharing memory between processes<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-28 12:41:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9127.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Previous message:</strong> <a href="9125.php">jody: "Re: [OMPI users] ORTE_ERROR_LOG: Timeout in file"</a>
<li><strong>In reply to:</strong> <a href="9118.php">Barnabas Debreczeni: "[OMPI users] sharing memory between processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9128.php">Barnabas Debreczeni: "Re: [OMPI users] sharing memory between processes"</a>
<li><strong>Reply:</strong> <a href="9128.php">Barnabas Debreczeni: "Re: [OMPI users] sharing memory between processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Barnabas Debreczeni wrote:
<br>
<p><span class="quotelev1">&gt;I am using PGAPack as a GA library, and it uses MPI to parallelize
</span><br>
<span class="quotelev1">&gt;optimization runs. This is how I got to Open MPI.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
Let me see if I understand the underlying premise.  You want to 
<br>
parallelize, but there are some large shared tables.  There are many 
<br>
different parallelization models.  E.g., there are certainly 
<br>
*shared-memory* parallel programming models such as OpenMP (which is 
<br>
totally different from Open MPI, despite the similar names).  But you 
<br>
are using MPI (which doesn't really do shared memory) since you're 
<br>
trying to leverage PGAPack, which is nice for handling genetic 
<br>
algorithms but basically forces you to use MPI.  (I suspect most GA 
<br>
algorithms map reasonably well to MPI.  Your interest in shared tables 
<br>
gives your situation a different twist.)
<br>
<p><span class="quotelev1">&gt;My problem is, I'd like to share that 2 GB table (computed once at the
</span><br>
<span class="quotelev1">&gt;beginning, and is read-only after) between processes so I don't have
</span><br>
<span class="quotelev1">&gt;to use up 16 gigs of memory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;How do you share data between processes locally?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
Are there shared-memory parallel GA packages that might make more sense 
<br>
to use here than PGAPack?
<br>
<p>If you want to stick with PGAPack/MPI, then you can set up shared memory 
<br>
among MPI processes by going outside of MPI.  (You could use MPI calls 
<br>
to share data, including MPI_Get routines, but I'm guessing it's best 
<br>
just to add non-MPI code to do the sharing.)  You can for example create 
<br>
a file that each process &quot;mmap&quot;s into its address space.  There are also 
<br>
System V shared-memory calls like shmget/shmat/shmdt that allow you to 
<br>
share memory among processes.
<br>
<p>The main point:  while MPI allows communication (and therefore &quot;data 
<br>
sharing&quot;) among processes, you might be better off with non-MPI 
<br>
mechanisms here like mmap or SysV shared memory.
<br>
<p><span class="quotelev1">&gt;Later I will need to use other hosts too in the calculation. Will the
</span><br>
<span class="quotelev1">&gt;slaves on other hosts need to calculate their own tables on go on from
</span><br>
<span class="quotelev1">&gt;there and share them locally, or can I share these tables on the
</span><br>
<span class="quotelev1">&gt;master host with them?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
I think this is a performance-vs-memory question.  If your interconnect 
<br>
is fast enough or your performance requirement low enough and your 
<br>
memory constraints severe enough, then you can share common data among 
<br>
all your nodes.  You'd probably want to use MPI calls to do so... 
<br>
possibly using one-sided MPI_Get routines depending on what sort of 
<br>
cluster you're running on.
<br>
<p>But, if your interconnect is not fast enough or your performance 
<br>
requirement high enough or your memory constraint not too severe, then 
<br>
just share within each node.  And, I could imagine you might have enough 
<br>
memory per node (a few Gbytes) that this will be your scenario.  So, 
<br>
just replicate your mmap/SysV solution on each node.
<br>
<p>Short answer:  you probably want to use non-MPI mechanisms to effect 
<br>
your shared memory.
<br>
<p>Most importantly, when your algorithm is successfully implemented and 
<br>
deployed and you're making millions of dollars, please remember us!
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9127.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Previous message:</strong> <a href="9125.php">jody: "Re: [OMPI users] ORTE_ERROR_LOG: Timeout in file"</a>
<li><strong>In reply to:</strong> <a href="9118.php">Barnabas Debreczeni: "[OMPI users] sharing memory between processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9128.php">Barnabas Debreczeni: "Re: [OMPI users] sharing memory between processes"</a>
<li><strong>Reply:</strong> <a href="9128.php">Barnabas Debreczeni: "Re: [OMPI users] sharing memory between processes"</a>
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
