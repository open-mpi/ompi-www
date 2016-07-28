<?
$subject_val = "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  6 14:48:52 2016" -->
<!-- isoreceived="20160106194852" -->
<!-- sent="Wed, 6 Jan 2016 14:48:51 -0500" -->
<!-- isosent="20160106194851" -->
<!-- name="Erik Schnetter" -->
<!-- email="schnetter_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question" -->
<!-- id="CADKQjjcBiAcYG9ndgEzJ1viWG2ks3MB4UOHecEkV-P83f5JnxQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAFb48S8WttBsOQbdD1onZ5wTfQx0Tqm1M7YVvbGP0=UUMjurbw_at_mail.gmail.com" -->
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
<strong>From:</strong> Erik Schnetter (<em>schnetter_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-06 14:48:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28219.php">Nick Papior: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<li><strong>Previous message:</strong> <a href="28217.php">Matt Thompson: "[OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<li><strong>In reply to:</strong> <a href="28217.php">Matt Thompson: "[OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28219.php">Nick Papior: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<li><strong>Reply:</strong> <a href="28219.php">Nick Papior: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<li><strong>Reply:</strong> <a href="28220.php">Matt Thompson: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Setting KMP_AFFINITY will probably override anything that OpenMPI
<br>
sets. Can you try without?
<br>
<p>-erik
<br>
<p>On Wed, Jan 6, 2016 at 2:46 PM, Matt Thompson &lt;fortran_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hello Open MPI Gurus,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As I explore MPI-OpenMP hybrid codes, I'm trying to figure out how to do
</span><br>
<span class="quotelev1">&gt; things to get the same behavior in various stacks. For example, I have a
</span><br>
<span class="quotelev1">&gt; 28-core node (2 14-core Haswells), and I'd like to run 4 MPI processes and 7
</span><br>
<span class="quotelev1">&gt; OpenMP threads. Thus, I'd like the processes to be 2 processes per socket
</span><br>
<span class="quotelev1">&gt; with the OpenMP threads laid out on them. Using a &quot;hybrid Hello World&quot;
</span><br>
<span class="quotelev1">&gt; program, I can achieve this with Intel MPI (after a lot of testing):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (1097) $ env OMP_NUM_THREADS=7 KMP_AFFINITY=compact mpirun -np 4
</span><br>
<span class="quotelev1">&gt; ./hello-hybrid.x | sort -g -k 18
</span><br>
<span class="quotelev1">&gt; srun.slurm: cluster configuration lacks support for cpu binding
</span><br>
<span class="quotelev1">&gt; Hello from thread 0 out of 7 from process 2 out of 4 on borgo035 on CPU 0
</span><br>
<span class="quotelev1">&gt; Hello from thread 1 out of 7 from process 2 out of 4 on borgo035 on CPU 1
</span><br>
<span class="quotelev1">&gt; Hello from thread 2 out of 7 from process 2 out of 4 on borgo035 on CPU 2
</span><br>
<span class="quotelev1">&gt; Hello from thread 3 out of 7 from process 2 out of 4 on borgo035 on CPU 3
</span><br>
<span class="quotelev1">&gt; Hello from thread 4 out of 7 from process 2 out of 4 on borgo035 on CPU 4
</span><br>
<span class="quotelev1">&gt; Hello from thread 5 out of 7 from process 2 out of 4 on borgo035 on CPU 5
</span><br>
<span class="quotelev1">&gt; Hello from thread 6 out of 7 from process 2 out of 4 on borgo035 on CPU 6
</span><br>
<span class="quotelev1">&gt; Hello from thread 0 out of 7 from process 3 out of 4 on borgo035 on CPU 7
</span><br>
<span class="quotelev1">&gt; Hello from thread 1 out of 7 from process 3 out of 4 on borgo035 on CPU 8
</span><br>
<span class="quotelev1">&gt; Hello from thread 2 out of 7 from process 3 out of 4 on borgo035 on CPU 9
</span><br>
<span class="quotelev1">&gt; Hello from thread 3 out of 7 from process 3 out of 4 on borgo035 on CPU 10
</span><br>
<span class="quotelev1">&gt; Hello from thread 4 out of 7 from process 3 out of 4 on borgo035 on CPU 11
</span><br>
<span class="quotelev1">&gt; Hello from thread 5 out of 7 from process 3 out of 4 on borgo035 on CPU 12
</span><br>
<span class="quotelev1">&gt; Hello from thread 6 out of 7 from process 3 out of 4 on borgo035 on CPU 13
</span><br>
<span class="quotelev1">&gt; Hello from thread 0 out of 7 from process 0 out of 4 on borgo035 on CPU 14
</span><br>
<span class="quotelev1">&gt; Hello from thread 1 out of 7 from process 0 out of 4 on borgo035 on CPU 15
</span><br>
<span class="quotelev1">&gt; Hello from thread 2 out of 7 from process 0 out of 4 on borgo035 on CPU 16
</span><br>
<span class="quotelev1">&gt; Hello from thread 3 out of 7 from process 0 out of 4 on borgo035 on CPU 17
</span><br>
<span class="quotelev1">&gt; Hello from thread 4 out of 7 from process 0 out of 4 on borgo035 on CPU 18
</span><br>
<span class="quotelev1">&gt; Hello from thread 5 out of 7 from process 0 out of 4 on borgo035 on CPU 19
</span><br>
<span class="quotelev1">&gt; Hello from thread 6 out of 7 from process 0 out of 4 on borgo035 on CPU 20
</span><br>
<span class="quotelev1">&gt; Hello from thread 0 out of 7 from process 1 out of 4 on borgo035 on CPU 21
</span><br>
<span class="quotelev1">&gt; Hello from thread 1 out of 7 from process 1 out of 4 on borgo035 on CPU 22
</span><br>
<span class="quotelev1">&gt; Hello from thread 2 out of 7 from process 1 out of 4 on borgo035 on CPU 23
</span><br>
<span class="quotelev1">&gt; Hello from thread 3 out of 7 from process 1 out of 4 on borgo035 on CPU 24
</span><br>
<span class="quotelev1">&gt; Hello from thread 4 out of 7 from process 1 out of 4 on borgo035 on CPU 25
</span><br>
<span class="quotelev1">&gt; Hello from thread 5 out of 7 from process 1 out of 4 on borgo035 on CPU 26
</span><br>
<span class="quotelev1">&gt; Hello from thread 6 out of 7 from process 1 out of 4 on borgo035 on CPU 27
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Other than the odd fact that Process #0 seemed to start on Socket #1 (this
</span><br>
<span class="quotelev1">&gt; might be an artifact of how I'm trying to detect the CPU I'm on), this looks
</span><br>
<span class="quotelev1">&gt; reasonable. 14 threads on each socket and each process is laying out its
</span><br>
<span class="quotelev1">&gt; threads in a nice orderly fashion.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying to figure out how to do this with Open MPI (version 1.10.0) and
</span><br>
<span class="quotelev1">&gt; apparently I am just not quite good enough to figure it out. The closest
</span><br>
<span class="quotelev1">&gt; I've gotten is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (1155) $ env OMP_NUM_THREADS=7 KMP_AFFINITY=compact mpirun -np 4 -map-by
</span><br>
<span class="quotelev1">&gt; ppr:2:socket ./hello-hybrid.x | sort -g -k 18
</span><br>
<span class="quotelev1">&gt; Hello from thread 0 out of 7 from process 0 out of 4 on borgo035 on CPU 0
</span><br>
<span class="quotelev1">&gt; Hello from thread 0 out of 7 from process 1 out of 4 on borgo035 on CPU 0
</span><br>
<span class="quotelev1">&gt; Hello from thread 1 out of 7 from process 0 out of 4 on borgo035 on CPU 1
</span><br>
<span class="quotelev1">&gt; Hello from thread 1 out of 7 from process 1 out of 4 on borgo035 on CPU 1
</span><br>
<span class="quotelev1">&gt; Hello from thread 2 out of 7 from process 0 out of 4 on borgo035 on CPU 2
</span><br>
<span class="quotelev1">&gt; Hello from thread 2 out of 7 from process 1 out of 4 on borgo035 on CPU 2
</span><br>
<span class="quotelev1">&gt; Hello from thread 3 out of 7 from process 0 out of 4 on borgo035 on CPU 3
</span><br>
<span class="quotelev1">&gt; Hello from thread 3 out of 7 from process 1 out of 4 on borgo035 on CPU 3
</span><br>
<span class="quotelev1">&gt; Hello from thread 4 out of 7 from process 0 out of 4 on borgo035 on CPU 4
</span><br>
<span class="quotelev1">&gt; Hello from thread 4 out of 7 from process 1 out of 4 on borgo035 on CPU 4
</span><br>
<span class="quotelev1">&gt; Hello from thread 5 out of 7 from process 0 out of 4 on borgo035 on CPU 5
</span><br>
<span class="quotelev1">&gt; Hello from thread 5 out of 7 from process 1 out of 4 on borgo035 on CPU 5
</span><br>
<span class="quotelev1">&gt; Hello from thread 6 out of 7 from process 0 out of 4 on borgo035 on CPU 6
</span><br>
<span class="quotelev1">&gt; Hello from thread 6 out of 7 from process 1 out of 4 on borgo035 on CPU 6
</span><br>
<span class="quotelev1">&gt; Hello from thread 0 out of 7 from process 2 out of 4 on borgo035 on CPU 14
</span><br>
<span class="quotelev1">&gt; Hello from thread 0 out of 7 from process 3 out of 4 on borgo035 on CPU 14
</span><br>
<span class="quotelev1">&gt; Hello from thread 1 out of 7 from process 2 out of 4 on borgo035 on CPU 15
</span><br>
<span class="quotelev1">&gt; Hello from thread 1 out of 7 from process 3 out of 4 on borgo035 on CPU 15
</span><br>
<span class="quotelev1">&gt; Hello from thread 2 out of 7 from process 2 out of 4 on borgo035 on CPU 16
</span><br>
<span class="quotelev1">&gt; Hello from thread 2 out of 7 from process 3 out of 4 on borgo035 on CPU 16
</span><br>
<span class="quotelev1">&gt; Hello from thread 3 out of 7 from process 2 out of 4 on borgo035 on CPU 17
</span><br>
<span class="quotelev1">&gt; Hello from thread 3 out of 7 from process 3 out of 4 on borgo035 on CPU 17
</span><br>
<span class="quotelev1">&gt; Hello from thread 4 out of 7 from process 2 out of 4 on borgo035 on CPU 18
</span><br>
<span class="quotelev1">&gt; Hello from thread 4 out of 7 from process 3 out of 4 on borgo035 on CPU 18
</span><br>
<span class="quotelev1">&gt; Hello from thread 5 out of 7 from process 2 out of 4 on borgo035 on CPU 19
</span><br>
<span class="quotelev1">&gt; Hello from thread 5 out of 7 from process 3 out of 4 on borgo035 on CPU 19
</span><br>
<span class="quotelev1">&gt; Hello from thread 6 out of 7 from process 2 out of 4 on borgo035 on CPU 20
</span><br>
<span class="quotelev1">&gt; Hello from thread 6 out of 7 from process 3 out of 4 on borgo035 on CPU 20
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Obviously not right. Any ideas on how to help me learn? The man mpirun page
</span><br>
<span class="quotelev1">&gt; is a bit formidable in the pinning part, so maybe I've missed an obvious
</span><br>
<span class="quotelev1">&gt; answer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Matt
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Matt Thompson
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Man Among Men
</span><br>
<span class="quotelev1">&gt; Fulcrum of History
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28217.php">http://www.open-mpi.org/community/lists/users/2016/01/28217.php</a>
</span><br>
<p><p><p><pre>
-- 
Erik Schnetter &lt;schnetter_at_[hidden]&gt;
<a href="http://www.perimeterinstitute.ca/personal/eschnetter/">http://www.perimeterinstitute.ca/personal/eschnetter/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28219.php">Nick Papior: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<li><strong>Previous message:</strong> <a href="28217.php">Matt Thompson: "[OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<li><strong>In reply to:</strong> <a href="28217.php">Matt Thompson: "[OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28219.php">Nick Papior: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<li><strong>Reply:</strong> <a href="28219.php">Nick Papior: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<li><strong>Reply:</strong> <a href="28220.php">Matt Thompson: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
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
