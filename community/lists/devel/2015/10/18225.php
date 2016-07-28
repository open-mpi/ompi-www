<?
$subject_val = "Re: [OMPI devel] Problem running openmpi on nodes connected via eth";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 21 00:22:17 2015" -->
<!-- isoreceived="20151021042217" -->
<!-- sent="Wed, 21 Oct 2015 13:22:14 +0900" -->
<!-- isosent="20151021042214" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Problem running openmpi on nodes connected via eth" -->
<!-- id="CAAkFZ5sAs7orsvhXXfJJLEYQYZqOS-6QGFqTUOr4GA+ym4hsuw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20151020230839.08467057_at_antares" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Problem running openmpi on nodes connected via eth<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-21 00:22:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18226.php">Tobias Hilbrich: "Re: [OMPI devel] Issue with OpenMPI 1.8.4 + Xcode 7.0.1"</a>
<li><strong>Previous message:</strong> <a href="18224.php">Andrej Prsa: "Re: [OMPI devel] Problem running openmpi on nodes connected via eth"</a>
<li><strong>In reply to:</strong> <a href="18224.php">Andrej Prsa: "Re: [OMPI devel] Problem running openmpi on nodes connected via eth"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Andrej,
<br>
<p>a load average of 700 is very curious.
<br>
<p>i guess you already made sure load average is zero when the system is idle ...
<br>
<p>are you running an hybrid app (e.g. MPI + OpenMP) ?
<br>
one possible explanation is you run 48 MPI tasks and each task has 48
<br>
OpenMP threads, and that kills performances.
<br>
<p>when you log into the compute node, you can simply do
<br>
ls -l /proc/&lt;pid&gt;/task
<br>
to list the number of tasks
<br>
there should be 2 or 3 threads (main thread + mpi threads that should
<br>
be idle 99% of the time)
<br>
<p>at first, try to
<br>
export OMP_NUM_THREADS=1
<br>
mpirun -np 48 a.out
<br>
<p>if that still does not work, try to
<br>
mpirun -np 48 a.sh
<br>
<p>where a.sh is
<br>
#!/bin/sh
<br>
export OMP_NUM_THREADS=1
<br>
exec a.out $*
<br>
<p><p>for MPI profiling, you can try IPM
<br>
<a href="https://www.nersc.gov/users/software/performance-and-debugging-tools/ipm/">https://www.nersc.gov/users/software/performance-and-debugging-tools/ipm/</a>
<br>
(build the tool, relink your app with IPM, set environment variable
<br>
and you will get
<br>
a summary of how much time is spent in MPI and how many time it is called)
<br>
<p>for I/O profiling, there are tools like darshan, but i am not familiar
<br>
with them.
<br>
a simpler approach is to run both
<br>
iostat 1
<br>
and
<br>
nfsiostat 1
<br>
on the compute node and see how much io is performed
<br>
<p><p><p>i hope this helps
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Wed, Oct 21, 2015 at 12:08 PM, Andrej Prsa &lt;aprsa09_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your reply!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; by &quot;running on the head node&quot;, shall i understand you mean
</span><br>
<span class="quotelev2">&gt;&gt; &quot;running mpirun command *and* all mpi tasks on the head node&quot; ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Precisely.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; by &quot;running on the compute node&quot;, shall i understand you mean
</span><br>
<span class="quotelev2">&gt;&gt; &quot;running mpirun on the compute node *and* all mpi tasks on the *same*
</span><br>
<span class="quotelev2">&gt;&gt; compute node&quot; ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What I meant to say is &quot;running mpirun on the head node and all mpi
</span><br>
<span class="quotelev1">&gt; tasks on a single worker node&quot;, i.e.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         mpirun --hostfile node1 -np 48 --byslot ./mpitest.py
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; where node1 contains:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         node1 slots=48 max_slots=48
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I then ssh'd to node1 and ran htop to observe that processes are all
</span><br>
<span class="quotelev1">&gt; colored in red, i.e. kernel cycles. A curious observation is the load
</span><br>
<span class="quotelev1">&gt; average, which shows 700+, i.e. ridiculous given that there are only 48
</span><br>
<span class="quotelev1">&gt; processors.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; what i mean is that if your mpi program is very sensitive to
</span><br>
<span class="quotelev2">&gt;&gt; latency/bandwidth, TCP over a gigabit ethernet is way slower that
</span><br>
<span class="quotelev2">&gt;&gt; shared memory, and that can explain the 20x drop in performance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there a good way to profile this? I installed an evaluation version
</span><br>
<span class="quotelev1">&gt; of vampirtrace, but I didn't yet get so far to produce a trace with
</span><br>
<span class="quotelev1">&gt; mpirun.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ideally, i would recommend you first try using openmpi v1.8 or the
</span><br>
<span class="quotelev2">&gt;&gt; latest v1.10.1rc2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried 1.8.2 and needed to use --bind-to none to get the cores to even
</span><br>
<span class="quotelev1">&gt; run (with Jeff Squyres' help), most likely because of this L3 bios bug.
</span><br>
<span class="quotelev1">&gt; I'll try 1.10.1rc2 tomorrow and report back.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; btw, is your head node running on similar hardware than compute nodes
</span><br>
<span class="quotelev2">&gt;&gt; (e.g. 4 sockets 48 cores) ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, all nodes are identical, 4 sockets, 48 cores.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; are you using a batch manager to run on compute nodes ?
</span><br>
<span class="quotelev2">&gt;&gt; if yes, did you check all tasks are running on different cores ?
</span><br>
<span class="quotelev2">&gt;&gt; (depending on your configuration and how you submit your job, all mpi
</span><br>
<span class="quotelev2">&gt;&gt; tasks can endup sharing the same core ...)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I do have torque/maui installed and configured, but I disabled them for
</span><br>
<span class="quotelev1">&gt; these tests, and running mpirun directly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; you reported a lot of time is spent in the kernel, is this time spent
</span><br>
<span class="quotelev2">&gt;&gt; for MPI communication ?
</span><br>
<span class="quotelev2">&gt;&gt; (it could be for NFS access since you have no local disk on the
</span><br>
<span class="quotelev2">&gt;&gt; compute nodes)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'd *love* to be able to answer that question, but I don't know how to
</span><br>
<span class="quotelev1">&gt; find that out. If you can point me in the right direction, I'd love to
</span><br>
<span class="quotelev1">&gt; learn how to do it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; btw, how many MPI tasks are you running ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I ran it on all 48 cores per node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; if your application can run on a small number of tasks, here is what
</span><br>
<span class="quotelev2">&gt;&gt; you can do from your head node :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 1 a.out
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 1 -host &lt;compute&gt; a.out
</span><br>
<span class="quotelev2">&gt;&gt; run a job with one task on the compute node
</span><br>
<span class="quotelev2">&gt;&gt; if there a performance drop ? if yes,  when ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; try again with -np 2 (using one host)
</span><br>
<span class="quotelev2">&gt;&gt; if there a performance drop ? if yes,  when ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and then try with two nodes and one task per node
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 2 -host &lt;compute1,compute2&gt; a.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It'll take a bit of code modification, but let me try it and report
</span><br>
<span class="quotelev1">&gt; back.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks a lot,
</span><br>
<span class="quotelev1">&gt; Andrej
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18224.php">http://www.open-mpi.org/community/lists/devel/2015/10/18224.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18226.php">Tobias Hilbrich: "Re: [OMPI devel] Issue with OpenMPI 1.8.4 + Xcode 7.0.1"</a>
<li><strong>Previous message:</strong> <a href="18224.php">Andrej Prsa: "Re: [OMPI devel] Problem running openmpi on nodes connected via eth"</a>
<li><strong>In reply to:</strong> <a href="18224.php">Andrej Prsa: "Re: [OMPI devel] Problem running openmpi on nodes connected via eth"</a>
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
