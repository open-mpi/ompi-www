<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct  3 14:14:32 2007" -->
<!-- isoreceived="20071003181432" -->
<!-- sent="Wed, 03 Oct 2007 14:14:41 -0400" -->
<!-- isosent="20071003181441" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI binding all tasks to cpu0, leaving cpu1 idle. (2-cpu system)" -->
<!-- id="4703DC11.3020708_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="f058a9c30710030652t30017b66nfb4be57cb7f78513_at_mail.gmail.com" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-03 14:14:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4147.php">Tim Prins: "Re: [OMPI users] mpirun ERROR: The daemon exited unexpectedly with status 255."</a>
<li><strong>Previous message:</strong> <a href="4145.php">Tim Prins: "Re: [OMPI users] OpenMPI binding all tasks to cpu0, leaving cpu1 idle. (2-cpu system)"</a>
<li><strong>In reply to:</strong> <a href="4140.php">Miguel Figueiredo Mascarenhas Sousa Filipe: "[OMPI users] OpenMPI binding all tasks to cpu0, leaving cpu1 idle. (2-cpu system)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Miguel Figueiredo Mascarenhas Sousa Filipe wrote:
<br>
<span class="quotelev1">&gt; Hi there,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a 2-cpu system (linux/x86-64), running openmpi-1.1. I do not
</span><br>
<span class="quotelev1">&gt; specify a hostfile.
</span><br>
<span class="quotelev1">&gt; Lately I'm having performance problems when running my mpi-app this way:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpiexec -n 2 ./mpi-app config.ini
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Both mpi-app processes are running on cpu0, leaving cpu1 idle.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; After reading the mpirun manpage, it seems that openmpi bind tasks to
</span><br>
<span class="quotelev1">&gt; cpus in a round-robin way, meaning that this should not happen.
</span><br>
<span class="quotelev1">&gt; But given my problem, I assume that it's not detecting this is a 2-way
</span><br>
<span class="quotelev1">&gt; smp system, (assuming a UP system) and binding both tasks to cpu0..
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is this correct?
</span><br>
By default I do not think Open MPI does any process affinity (although I 
<br>
could be wrong). See this FAQ for information on process affinity:
<br>
<a href="http://www.open-mpi.org/faq/?category=tuning#paffinity-defs">http://www.open-mpi.org/faq/?category=tuning#paffinity-defs</a>
<br>
<a href="http://www.open-mpi.org/faq/?category=tuning#using-paffinity">http://www.open-mpi.org/faq/?category=tuning#using-paffinity</a>
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The openmpi-default-hostfile says I should not specify localhost in
</span><br>
<span class="quotelev1">&gt; there.. and let the job dispatcher/rca &quot;detect&quot; the single-node setup.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Where should I define/configure system wide, that this is a
</span><br>
<span class="quotelev1">&gt; single-node, 2-slot system?
</span><br>
<span class="quotelev1">&gt; I would like to avoid making the system users be obliged to pass a
</span><br>
<span class="quotelev1">&gt; hostfile to mpirun/mpiexec. I simply want mpiexec -n N ./mpi-task to
</span><br>
<span class="quotelev1">&gt; do the propper job of _really_ spreading the processes evenly between
</span><br>
<span class="quotelev1">&gt; all the system's CPUs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards, waiting for your answer.
</span><br>
<p>You could put localhost and specify the number of slots in the default 
<br>
hostfile, or just pass a hostfile containing local host to mpirun.
<br>
<p>By default Open MPI will run on the localhost assuming 1 slot if it does 
<br>
not detect a resource manager or isn't passed a hostfile.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ps.: should I upgrade to latest openMPI to have my problem
</span><br>
<span class="quotelev1">&gt; &quot;automagically&quot; solved?
</span><br>
I would definitely update to a newer version. The 1.1 series has many 
<br>
problems.
<br>
<p>Hope this helps,
<br>
<p>Tim
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4147.php">Tim Prins: "Re: [OMPI users] mpirun ERROR: The daemon exited unexpectedly with status 255."</a>
<li><strong>Previous message:</strong> <a href="4145.php">Tim Prins: "Re: [OMPI users] OpenMPI binding all tasks to cpu0, leaving cpu1 idle. (2-cpu system)"</a>
<li><strong>In reply to:</strong> <a href="4140.php">Miguel Figueiredo Mascarenhas Sousa Filipe: "[OMPI users] OpenMPI binding all tasks to cpu0, leaving cpu1 idle. (2-cpu system)"</a>
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
