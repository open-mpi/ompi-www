<?
$subject_val = "Re: [OMPI users] Converting --cpus-per-proc to --map-by for a hybrid code";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  5 15:47:50 2014" -->
<!-- isoreceived="20141205204750" -->
<!-- sent="Fri, 5 Dec 2014 12:47:45 -0800" -->
<!-- isosent="20141205204745" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Converting --cpus-per-proc to --map-by for a hybrid code" -->
<!-- id="2BB84C3F-D4D5-4EA9-B52A-A8C1EBC6C439_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAM2Y-dakTFgYQY52bzwEdCySvrJc0f1LEkAfdAHMP7YmQM9YUw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Converting --cpus-per-proc to --map-by for a hybrid code<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-05 15:47:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25921.php">Faraj, Daniel A: "[OMPI users] netloc"</a>
<li><strong>Previous message:</strong> <a href="25919.php">John Bray: "Re: [OMPI users] Converting --cpus-per-proc to --map-by for a hybrid code"</a>
<li><strong>In reply to:</strong> <a href="25919.php">John Bray: "Re: [OMPI users] Converting --cpus-per-proc to --map-by for a hybrid code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25925.php">John Bray: "Re: [OMPI users] Converting --cpus-per-proc to --map-by for a hybrid code"</a>
<li><strong>Reply:</strong> <a href="25925.php">John Bray: "Re: [OMPI users] Converting --cpus-per-proc to --map-by for a hybrid code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We may be getting hung up on terminology, but my guess is that the problem is one of accurately understanding how many cores you have vs ht&#226;&#128;&#153;s.Can you run lstopo and see what it thinks is there?
<br>
<p>If you haven&#226;&#128;&#153;t installed that, you can just run &#226;&#128;&#156;mpirun -mca ess_base_verbose 10 -n 1 hostname&#226;&#128;&#157; to get the info
<br>
<p><p><span class="quotelev1">&gt; On Dec 5, 2014, at 9:07 AM, John Bray &lt;jbray_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a motherboard with 2 X6580 chips, each with 6 cores 2 way hyperthreading, so /proc/cpuinfo reports 24 cores
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Doing a pure compute OpenMP loop where I'd expect the number of iterations in 10s to rise with number of threads
</span><br>
<span class="quotelev1">&gt; with gnu and mpich
</span><br>
<span class="quotelev1">&gt; OMP_NUM_THREADS=1 -n 1 : 112 iterations
</span><br>
<span class="quotelev1">&gt; OMP_NUM_THREADS=2 -n 1 : 224 iterations
</span><br>
<span class="quotelev1">&gt; OMP_NUM_THREADS=6 -n 1 : 644 iterations
</span><br>
<span class="quotelev1">&gt; OMP_NUM_THREADS=12 -n 1 : 1287 iterations
</span><br>
<span class="quotelev1">&gt; OMP_NUM_THREADS=22 -n 1 : 1182 iterations
</span><br>
<span class="quotelev1">&gt; OMP_NUM_THREADS=24 -n 1 : 454 iterations
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; which shows that mpich is spreading across the cores, but hyperthreading is not useful, and using the whole node counterproductive
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; with gnu and openmpi 1.8.3
</span><br>
<span class="quotelev1">&gt; OMP_NUM_THREADS=1 mpiexec -n 1 : 112
</span><br>
<span class="quotelev1">&gt; OMP_NUM_THREADS=2 mpiexec -n 1 : 113
</span><br>
<span class="quotelev1">&gt; which suggests you aren't allowing the threads to spread across cores
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; adding --cpus-per-node I gain access to the resources on one chip
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OMP_NUM_THREADS=1 mpiexec --cpus-per-proc 1 -n 1 : 112
</span><br>
<span class="quotelev1">&gt; OMP_NUM_THREADS=2 mpiexec --cpus-per-proc 2 -n 1 : 224
</span><br>
<span class="quotelev1">&gt; OMP_NUM_THREADS=6 mpiexec --cpus-per-proc 2 -n 1 : 644
</span><br>
<span class="quotelev1">&gt; then
</span><br>
<span class="quotelev1">&gt; OMP_NUM_THREADS=12 mpiexec --cpus-per-proc 12 -n 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A request for multiple cpus-per-proc was given, but a directive
</span><br>
<span class="quotelev1">&gt; was also give to map to an object level that has less cpus than
</span><br>
<span class="quotelev1">&gt; requested ones:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   #cpus-per-proc:  12
</span><br>
<span class="quotelev1">&gt;   number of cpus:  6
</span><br>
<span class="quotelev1">&gt;   map-by:          BYNUMA
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So you aren't happy using both chips for one process
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OMP_NUM_THREADS=1 mpiexec -n 1 --cpus-per-proc 1 --use-hwthread-cpus : 112
</span><br>
<span class="quotelev1">&gt; OMP_NUM_THREADS=2 mpiexec -n 1 --cpus-per-proc 2 --use-hwthread-cpus : 112
</span><br>
<span class="quotelev1">&gt; OMP_NUM_THREADS=4 mpiexec -n 1 --cpus-per-proc 4 --use-hwthread-cpus : 224
</span><br>
<span class="quotelev1">&gt; OMP_NUM_THREADS=6 mpiexec -n 1 --cpus-per-proc 6 --use-hwthread-cpus : 324
</span><br>
<span class="quotelev1">&gt; OMP_NUM_THREADS=6 mpiexec -n 1 --cpus-per-proc 12 --use-hwthread-cpus : 631
</span><br>
<span class="quotelev1">&gt; OMP_NUM_THREADS=12 mpiexec -n 1 --cpus-per-proc 12 --use-hwthread-cpus : 647
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OMP_NUM_THREADS=24 mpiexec -n 1 --cpus-per-proc 12 --use-hwthread-cpus 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A request for multiple cpus-per-proc was given, but a directive
</span><br>
<span class="quotelev1">&gt; was also give to map to an object level that has less cpus than
</span><br>
<span class="quotelev1">&gt; requested ones:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   #cpus-per-proc:  24
</span><br>
<span class="quotelev1">&gt;   number of cpus:  12
</span><br>
<span class="quotelev1">&gt;   map-by:          BYNUMA
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OMP_NUM_THREADS=1 mpiexec -n 1 --cpus-per-proc 2 --use-hwthread-cpus : 112
</span><br>
<span class="quotelev1">&gt; OMP_NUM_THREADS=2 mpiexec -n 1 --cpus-per-proc 4 --use-hwthread-cpus : 224
</span><br>
<span class="quotelev1">&gt; OMP_NUM_THREADS=6 mpiexec -n 1 --cpus-per-proc 12 --use-hwthread-cpus :: 644
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OMP_NUM_THREADS=12 mpiexec -n 1 --cpus-per-proc 24 --use-hwthread-cpus :: 644
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A request for multiple cpus-per-proc was given, but a directive
</span><br>
<span class="quotelev1">&gt; was also give to map to an object level that has less cpus than
</span><br>
<span class="quotelev1">&gt; requested ones:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   #cpus-per-proc:  24
</span><br>
<span class="quotelev1">&gt;   number of cpus:  12
</span><br>
<span class="quotelev1">&gt;   map-by:          BYNUMA
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So it seems that --use-hwthread-cpus means that --cpus-per-proc changes from physical cores to hyperthreaded cores, but I can't get both chips working on the problem in way mpich can
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; John
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/25919.php">http://www.open-mpi.org/community/lists/users/2014/12/25919.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25921.php">Faraj, Daniel A: "[OMPI users] netloc"</a>
<li><strong>Previous message:</strong> <a href="25919.php">John Bray: "Re: [OMPI users] Converting --cpus-per-proc to --map-by for a hybrid code"</a>
<li><strong>In reply to:</strong> <a href="25919.php">John Bray: "Re: [OMPI users] Converting --cpus-per-proc to --map-by for a hybrid code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25925.php">John Bray: "Re: [OMPI users] Converting --cpus-per-proc to --map-by for a hybrid code"</a>
<li><strong>Reply:</strong> <a href="25925.php">John Bray: "Re: [OMPI users] Converting --cpus-per-proc to --map-by for a hybrid code"</a>
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
