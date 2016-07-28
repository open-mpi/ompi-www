<?
$subject_val = "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  6 15:17:43 2016" -->
<!-- isoreceived="20160106201743" -->
<!-- sent="Wed, 6 Jan 2016 15:17:12 -0500" -->
<!-- isosent="20160106201712" -->
<!-- name="Matt Thompson" -->
<!-- email="fortran_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question" -->
<!-- id="CAFb48S-0kQPV-Ea9eNqo_BLxji-WiB-1NVkH=NEVWBMGf7dbwA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CADKQjjcBiAcYG9ndgEzJ1viWG2ks3MB4UOHecEkV-P83f5JnxQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question<br>
<strong>From:</strong> Matt Thompson (<em>fortran_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-06 15:17:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28221.php">Ralph Castain: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<li><strong>Previous message:</strong> <a href="28219.php">Nick Papior: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<li><strong>In reply to:</strong> <a href="28218.php">Erik Schnetter: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sure. Here's the basic one:
<br>
<p>(1159) $ env OMP_NUM_THREADS=7 mpirun -np 4 ./hello-hybrid.x | sort -g -k 18
<br>
Hello from thread 3 out of 7 from process 0 out of 4 on borgo035 on CPU 0
<br>
Hello from thread 1 out of 7 from process 0 out of 4 on borgo035 on CPU 1
<br>
Hello from thread 4 out of 7 from process 0 out of 4 on borgo035 on CPU 1
<br>
Hello from thread 5 out of 7 from process 0 out of 4 on borgo035 on CPU 1
<br>
Hello from thread 6 out of 7 from process 0 out of 4 on borgo035 on CPU 1
<br>
Hello from thread 2 out of 7 from process 0 out of 4 on borgo035 on CPU 2
<br>
Hello from thread 3 out of 7 from process 2 out of 4 on borgo035 on CPU 3
<br>
Hello from thread 4 out of 7 from process 2 out of 4 on borgo035 on CPU 3
<br>
Hello from thread 5 out of 7 from process 2 out of 4 on borgo035 on CPU 3
<br>
Hello from thread 6 out of 7 from process 2 out of 4 on borgo035 on CPU 3
<br>
Hello from thread 1 out of 7 from process 2 out of 4 on borgo035 on CPU 5
<br>
Hello from thread 0 out of 7 from process 2 out of 4 on borgo035 on CPU 10
<br>
Hello from thread 0 out of 7 from process 0 out of 4 on borgo035 on CPU 13
<br>
Hello from thread 2 out of 7 from process 2 out of 4 on borgo035 on CPU 13
<br>
Hello from thread 2 out of 7 from process 1 out of 4 on borgo035 on CPU 14
<br>
Hello from thread 5 out of 7 from process 1 out of 4 on borgo035 on CPU 14
<br>
Hello from thread 1 out of 7 from process 1 out of 4 on borgo035 on CPU 15
<br>
Hello from thread 3 out of 7 from process 1 out of 4 on borgo035 on CPU 15
<br>
Hello from thread 3 out of 7 from process 3 out of 4 on borgo035 on CPU 16
<br>
Hello from thread 1 out of 7 from process 3 out of 4 on borgo035 on CPU 17
<br>
Hello from thread 5 out of 7 from process 3 out of 4 on borgo035 on CPU 19
<br>
Hello from thread 6 out of 7 from process 1 out of 4 on borgo035 on CPU 21
<br>
Hello from thread 4 out of 7 from process 3 out of 4 on borgo035 on CPU 24
<br>
Hello from thread 6 out of 7 from process 3 out of 4 on borgo035 on CPU 25
<br>
Hello from thread 0 out of 7 from process 1 out of 4 on borgo035 on CPU 26
<br>
Hello from thread 4 out of 7 from process 1 out of 4 on borgo035 on CPU 26
<br>
Hello from thread 0 out of 7 from process 3 out of 4 on borgo035 on CPU 27
<br>
Hello from thread 2 out of 7 from process 3 out of 4 on borgo035 on CPU 27
<br>
<p>So, we get some where 4 threads are on a CPU, etc. Using -bind-to core does
<br>
interesting things:
<br>
<p>(1162) $ env OMP_NUM_THREADS=7 mpirun -np 4 -bind-to core ./hello-hybrid.x
<br>
| sort -g -k 18
<br>
Hello from thread 0 out of 7 from process 0 out of 4 on borgo035 on CPU 0
<br>
Hello from thread 1 out of 7 from process 0 out of 4 on borgo035 on CPU 0
<br>
Hello from thread 2 out of 7 from process 0 out of 4 on borgo035 on CPU 0
<br>
Hello from thread 3 out of 7 from process 0 out of 4 on borgo035 on CPU 0
<br>
Hello from thread 4 out of 7 from process 0 out of 4 on borgo035 on CPU 0
<br>
Hello from thread 5 out of 7 from process 0 out of 4 on borgo035 on CPU 0
<br>
Hello from thread 6 out of 7 from process 0 out of 4 on borgo035 on CPU 0
<br>
Hello from thread 0 out of 7 from process 2 out of 4 on borgo035 on CPU 1
<br>
Hello from thread 1 out of 7 from process 2 out of 4 on borgo035 on CPU 1
<br>
Hello from thread 2 out of 7 from process 2 out of 4 on borgo035 on CPU 1
<br>
Hello from thread 3 out of 7 from process 2 out of 4 on borgo035 on CPU 1
<br>
Hello from thread 4 out of 7 from process 2 out of 4 on borgo035 on CPU 1
<br>
Hello from thread 5 out of 7 from process 2 out of 4 on borgo035 on CPU 1
<br>
Hello from thread 6 out of 7 from process 2 out of 4 on borgo035 on CPU 1
<br>
Hello from thread 0 out of 7 from process 1 out of 4 on borgo035 on CPU 14
<br>
Hello from thread 1 out of 7 from process 1 out of 4 on borgo035 on CPU 14
<br>
Hello from thread 2 out of 7 from process 1 out of 4 on borgo035 on CPU 14
<br>
Hello from thread 3 out of 7 from process 1 out of 4 on borgo035 on CPU 14
<br>
Hello from thread 4 out of 7 from process 1 out of 4 on borgo035 on CPU 14
<br>
Hello from thread 5 out of 7 from process 1 out of 4 on borgo035 on CPU 14
<br>
Hello from thread 6 out of 7 from process 1 out of 4 on borgo035 on CPU 14
<br>
Hello from thread 0 out of 7 from process 3 out of 4 on borgo035 on CPU 15
<br>
Hello from thread 1 out of 7 from process 3 out of 4 on borgo035 on CPU 15
<br>
Hello from thread 2 out of 7 from process 3 out of 4 on borgo035 on CPU 15
<br>
Hello from thread 3 out of 7 from process 3 out of 4 on borgo035 on CPU 15
<br>
Hello from thread 4 out of 7 from process 3 out of 4 on borgo035 on CPU 15
<br>
Hello from thread 5 out of 7 from process 3 out of 4 on borgo035 on CPU 15
<br>
Hello from thread 6 out of 7 from process 3 out of 4 on borgo035 on CPU 15
<br>
<p>And if you think it makes sense. I've bound the MPI processes to a core
<br>
(I'd prefer cores 0, 7, 14, 21 instead of 0,1,14,15. I'm guessing Open MPI
<br>
can do this?), but then all the OpenMP threads are executing on that core
<br>
which is not ideal.
<br>
<p>Note: we are working here on getting SGI omplace/dplace built and
<br>
installed. I know that works with MPT and Intel MPI, but I'm guessing Open
<br>
MPI can as well? Then I can follow this:
<br>
<a href="http://www.nas.nasa.gov/hecc/support/kb/using-sgi-omplace-for-pinning_287.html">http://www.nas.nasa.gov/hecc/support/kb/using-sgi-omplace-for-pinning_287.html</a>
<br>
<p>Matt
<br>
<p><p>On Wed, Jan 6, 2016 at 2:48 PM, Erik Schnetter &lt;schnetter_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Setting KMP_AFFINITY will probably override anything that OpenMPI
</span><br>
<span class="quotelev1">&gt; sets. Can you try without?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -erik
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Jan 6, 2016 at 2:46 PM, Matt Thompson &lt;fortran_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hello Open MPI Gurus,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; As I explore MPI-OpenMP hybrid codes, I'm trying to figure out how to do
</span><br>
<span class="quotelev2">&gt; &gt; things to get the same behavior in various stacks. For example, I have a
</span><br>
<span class="quotelev2">&gt; &gt; 28-core node (2 14-core Haswells), and I'd like to run 4 MPI processes
</span><br>
<span class="quotelev1">&gt; and 7
</span><br>
<span class="quotelev2">&gt; &gt; OpenMP threads. Thus, I'd like the processes to be 2 processes per socket
</span><br>
<span class="quotelev2">&gt; &gt; with the OpenMP threads laid out on them. Using a &quot;hybrid Hello World&quot;
</span><br>
<span class="quotelev2">&gt; &gt; program, I can achieve this with Intel MPI (after a lot of testing):
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (1097) $ env OMP_NUM_THREADS=7 KMP_AFFINITY=compact mpirun -np 4
</span><br>
<span class="quotelev2">&gt; &gt; ./hello-hybrid.x | sort -g -k 18
</span><br>
<span class="quotelev2">&gt; &gt; srun.slurm: cluster configuration lacks support for cpu binding
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 0 out of 7 from process 2 out of 4 on borgo035 on CPU 0
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 1 out of 7 from process 2 out of 4 on borgo035 on CPU 1
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 2 out of 7 from process 2 out of 4 on borgo035 on CPU 2
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 3 out of 7 from process 2 out of 4 on borgo035 on CPU 3
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 4 out of 7 from process 2 out of 4 on borgo035 on CPU 4
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 5 out of 7 from process 2 out of 4 on borgo035 on CPU 5
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 6 out of 7 from process 2 out of 4 on borgo035 on CPU 6
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 0 out of 7 from process 3 out of 4 on borgo035 on CPU 7
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 1 out of 7 from process 3 out of 4 on borgo035 on CPU 8
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 2 out of 7 from process 3 out of 4 on borgo035 on CPU 9
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 3 out of 7 from process 3 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev1">&gt; 10
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 4 out of 7 from process 3 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev1">&gt; 11
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 5 out of 7 from process 3 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev1">&gt; 12
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 6 out of 7 from process 3 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev1">&gt; 13
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 0 out of 7 from process 0 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev1">&gt; 14
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 1 out of 7 from process 0 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev1">&gt; 15
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 2 out of 7 from process 0 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev1">&gt; 16
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 3 out of 7 from process 0 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev1">&gt; 17
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 4 out of 7 from process 0 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev1">&gt; 18
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 5 out of 7 from process 0 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev1">&gt; 19
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 6 out of 7 from process 0 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev1">&gt; 20
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 0 out of 7 from process 1 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev1">&gt; 21
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 1 out of 7 from process 1 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev1">&gt; 22
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 2 out of 7 from process 1 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev1">&gt; 23
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 3 out of 7 from process 1 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev1">&gt; 24
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 4 out of 7 from process 1 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev1">&gt; 25
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 5 out of 7 from process 1 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev1">&gt; 26
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 6 out of 7 from process 1 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev1">&gt; 27
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Other than the odd fact that Process #0 seemed to start on Socket #1
</span><br>
<span class="quotelev1">&gt; (this
</span><br>
<span class="quotelev2">&gt; &gt; might be an artifact of how I'm trying to detect the CPU I'm on), this
</span><br>
<span class="quotelev1">&gt; looks
</span><br>
<span class="quotelev2">&gt; &gt; reasonable. 14 threads on each socket and each process is laying out its
</span><br>
<span class="quotelev2">&gt; &gt; threads in a nice orderly fashion.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm trying to figure out how to do this with Open MPI (version 1.10.0)
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev2">&gt; &gt; apparently I am just not quite good enough to figure it out. The closest
</span><br>
<span class="quotelev2">&gt; &gt; I've gotten is:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (1155) $ env OMP_NUM_THREADS=7 KMP_AFFINITY=compact mpirun -np 4 -map-by
</span><br>
<span class="quotelev2">&gt; &gt; ppr:2:socket ./hello-hybrid.x | sort -g -k 18
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 0 out of 7 from process 0 out of 4 on borgo035 on CPU 0
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 0 out of 7 from process 1 out of 4 on borgo035 on CPU 0
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 1 out of 7 from process 0 out of 4 on borgo035 on CPU 1
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 1 out of 7 from process 1 out of 4 on borgo035 on CPU 1
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 2 out of 7 from process 0 out of 4 on borgo035 on CPU 2
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 2 out of 7 from process 1 out of 4 on borgo035 on CPU 2
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 3 out of 7 from process 0 out of 4 on borgo035 on CPU 3
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 3 out of 7 from process 1 out of 4 on borgo035 on CPU 3
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 4 out of 7 from process 0 out of 4 on borgo035 on CPU 4
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 4 out of 7 from process 1 out of 4 on borgo035 on CPU 4
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 5 out of 7 from process 0 out of 4 on borgo035 on CPU 5
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 5 out of 7 from process 1 out of 4 on borgo035 on CPU 5
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 6 out of 7 from process 0 out of 4 on borgo035 on CPU 6
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 6 out of 7 from process 1 out of 4 on borgo035 on CPU 6
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 0 out of 7 from process 2 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev1">&gt; 14
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 0 out of 7 from process 3 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev1">&gt; 14
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 1 out of 7 from process 2 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev1">&gt; 15
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 1 out of 7 from process 3 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev1">&gt; 15
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 2 out of 7 from process 2 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev1">&gt; 16
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 2 out of 7 from process 3 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev1">&gt; 16
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 3 out of 7 from process 2 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev1">&gt; 17
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 3 out of 7 from process 3 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev1">&gt; 17
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 4 out of 7 from process 2 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev1">&gt; 18
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 4 out of 7 from process 3 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev1">&gt; 18
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 5 out of 7 from process 2 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev1">&gt; 19
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 5 out of 7 from process 3 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev1">&gt; 19
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 6 out of 7 from process 2 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev1">&gt; 20
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 6 out of 7 from process 3 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev1">&gt; 20
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Obviously not right. Any ideas on how to help me learn? The man mpirun
</span><br>
<span class="quotelev1">&gt; page
</span><br>
<span class="quotelev2">&gt; &gt; is a bit formidable in the pinning part, so maybe I've missed an obvious
</span><br>
<span class="quotelev2">&gt; &gt; answer.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Matt
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Matt Thompson
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Man Among Men
</span><br>
<span class="quotelev2">&gt; &gt; Fulcrum of History
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28217.php">http://www.open-mpi.org/community/lists/users/2016/01/28217.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Erik Schnetter &lt;schnetter_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.perimeterinstitute.ca/personal/eschnetter/">http://www.perimeterinstitute.ca/personal/eschnetter/</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28218.php">http://www.open-mpi.org/community/lists/users/2016/01/28218.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Matt Thompson
Man Among Men
Fulcrum of History
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28220/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28221.php">Ralph Castain: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<li><strong>Previous message:</strong> <a href="28219.php">Nick Papior: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<li><strong>In reply to:</strong> <a href="28218.php">Erik Schnetter: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
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
