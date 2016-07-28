<?
$subject_val = "Re: [OMPI users] sharing memory between processes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 28 13:40:19 2009" -->
<!-- isoreceived="20090428174019" -->
<!-- sent="Tue, 28 Apr 2009 19:40:14 +0200" -->
<!-- isosent="20090428174014" -->
<!-- name="Barnabas Debreczeni" -->
<!-- email="keo_at_[hidden]" -->
<!-- subject="Re: [OMPI users] sharing memory between processes" -->
<!-- id="60110f460904281040n160421fbh125cbcad735f6943_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49F731B7.8000800_at_sun.com" -->
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
<strong>From:</strong> Barnabas Debreczeni (<em>keo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-28 13:40:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9129.php">Hugh Dickinson: "Re: [OMPI users] ORTE_ERROR_LOG: Timeout in file"</a>
<li><strong>Previous message:</strong> <a href="9127.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>In reply to:</strong> <a href="9126.php">Eugene Loh: "Re: [OMPI users] sharing memory between processes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Eugene and Jody,
<br>
<p>thanks for the ideas and elaborate answers. I will look into SysV and
<br>
mmap, and find out something. I am not tied to PGAPack, there may be
<br>
other PGA libs too... But I guess MPI and SysV/mmap do not cancel each
<br>
other out, I just have to know about what is running locally and what
<br>
is running remotely.
<br>
<p>I sure will remember your help - and I am also thinking of making the
<br>
simulator opensource when it will be ready, as currently there's no
<br>
fast, distributed/parallel intraday forex simulator library available
<br>
that is capable of walk forward optimization and others. So others
<br>
will be available to take part in cashing in (or losing) those
<br>
zillions. :)
<br>
<p>Barnabas
<br>
<p>On Tue, Apr 28, 2009 at 6:41 PM, Eugene Loh &lt;Eugene.Loh_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Barnabas Debreczeni wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am using PGAPack as a GA library, and it uses MPI to parallelize
</span><br>
<span class="quotelev2">&gt;&gt; optimization runs. This is how I got to Open MPI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let me see if I understand the underlying premise. &#160;You want to parallelize,
</span><br>
<span class="quotelev1">&gt; but there are some large shared tables. &#160;There are many different
</span><br>
<span class="quotelev1">&gt; parallelization models. &#160;E.g., there are certainly *shared-memory* parallel
</span><br>
<span class="quotelev1">&gt; programming models such as OpenMP (which is totally different from Open MPI,
</span><br>
<span class="quotelev1">&gt; despite the similar names). &#160;But you are using MPI (which doesn't really do
</span><br>
<span class="quotelev1">&gt; shared memory) since you're trying to leverage PGAPack, which is nice for
</span><br>
<span class="quotelev1">&gt; handling genetic algorithms but basically forces you to use MPI. &#160;(I suspect
</span><br>
<span class="quotelev1">&gt; most GA algorithms map reasonably well to MPI. &#160;Your interest in shared
</span><br>
<span class="quotelev1">&gt; tables gives your situation a different twist.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My problem is, I'd like to share that 2 GB table (computed once at the
</span><br>
<span class="quotelev2">&gt;&gt; beginning, and is read-only after) between processes so I don't have
</span><br>
<span class="quotelev2">&gt;&gt; to use up 16 gigs of memory.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; How do you share data between processes locally?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are there shared-memory parallel GA packages that might make more sense to
</span><br>
<span class="quotelev1">&gt; use here than PGAPack?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you want to stick with PGAPack/MPI, then you can set up shared memory
</span><br>
<span class="quotelev1">&gt; among MPI processes by going outside of MPI. &#160;(You could use MPI calls to
</span><br>
<span class="quotelev1">&gt; share data, including MPI_Get routines, but I'm guessing it's best just to
</span><br>
<span class="quotelev1">&gt; add non-MPI code to do the sharing.) &#160;You can for example create a file that
</span><br>
<span class="quotelev1">&gt; each process &quot;mmap&quot;s into its address space. &#160;There are also System V
</span><br>
<span class="quotelev1">&gt; shared-memory calls like shmget/shmat/shmdt that allow you to share memory
</span><br>
<span class="quotelev1">&gt; among processes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The main point: &#160;while MPI allows communication (and therefore &quot;data
</span><br>
<span class="quotelev1">&gt; sharing&quot;) among processes, you might be better off with non-MPI mechanisms
</span><br>
<span class="quotelev1">&gt; here like mmap or SysV shared memory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Later I will need to use other hosts too in the calculation. Will the
</span><br>
<span class="quotelev2">&gt;&gt; slaves on other hosts need to calculate their own tables on go on from
</span><br>
<span class="quotelev2">&gt;&gt; there and share them locally, or can I share these tables on the
</span><br>
<span class="quotelev2">&gt;&gt; master host with them?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think this is a performance-vs-memory question. &#160;If your interconnect is
</span><br>
<span class="quotelev1">&gt; fast enough or your performance requirement low enough and your memory
</span><br>
<span class="quotelev1">&gt; constraints severe enough, then you can share common data among all your
</span><br>
<span class="quotelev1">&gt; nodes. &#160;You'd probably want to use MPI calls to do so... possibly using
</span><br>
<span class="quotelev1">&gt; one-sided MPI_Get routines depending on what sort of cluster you're running
</span><br>
<span class="quotelev1">&gt; on.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But, if your interconnect is not fast enough or your performance requirement
</span><br>
<span class="quotelev1">&gt; high enough or your memory constraint not too severe, then just share within
</span><br>
<span class="quotelev1">&gt; each node. &#160;And, I could imagine you might have enough memory per node (a
</span><br>
<span class="quotelev1">&gt; few Gbytes) that this will be your scenario. &#160;So, just replicate your
</span><br>
<span class="quotelev1">&gt; mmap/SysV solution on each node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Short answer: &#160;you probably want to use non-MPI mechanisms to effect your
</span><br>
<span class="quotelev1">&gt; shared memory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Most importantly, when your algorithm is successfully implemented and
</span><br>
<span class="quotelev1">&gt; deployed and you're making millions of dollars, please remember us!
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9129.php">Hugh Dickinson: "Re: [OMPI users] ORTE_ERROR_LOG: Timeout in file"</a>
<li><strong>Previous message:</strong> <a href="9127.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>In reply to:</strong> <a href="9126.php">Eugene Loh: "Re: [OMPI users] sharing memory between processes"</a>
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
