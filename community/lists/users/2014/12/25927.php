<?
$subject_val = "Re: [OMPI users] Converting --cpus-per-proc to --map-by for a hybrid code";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  8 10:57:54 2014" -->
<!-- isoreceived="20141208155754" -->
<!-- sent="Mon, 8 Dec 2014 07:57:49 -0800" -->
<!-- isosent="20141208155749" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Converting --cpus-per-proc to --map-by for a hybrid code" -->
<!-- id="38D204CC-7925-46FD-9A43-18B7326959A0_at_open-mpi.org" -->
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
<strong>Date:</strong> 2014-12-08 10:57:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25928.php">John Bray: "Re: [OMPI users] Converting --cpus-per-proc to --map-by for a hybrid code"</a>
<li><strong>Previous message:</strong> <a href="25926.php">G&#195;&#182;tz Waschk: "Re: [OMPI users] Warning about not enough registerable memory on SL6.6"</a>
<li><strong>In reply to:</strong> <a href="25919.php">John Bray: "Re: [OMPI users] Converting --cpus-per-proc to --map-by for a hybrid code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25928.php">John Bray: "Re: [OMPI users] Converting --cpus-per-proc to --map-by for a hybrid code"</a>
<li><strong>Reply:</strong> <a href="25928.php">John Bray: "Re: [OMPI users] Converting --cpus-per-proc to --map-by for a hybrid code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for sending that lstopo output - helped clarify things for me. I think I now understand the issue. Mostly a problem of my being rather dense when reading your earlier note.
<br>
<p>Try using &#226;&#128;&#148;map-by node:PE=N to your cmd line. I think the problem is that we default to &#226;&#128;&#148;map-by numa if you just give cpus-per-proc and no mapping directive as we know that having threads that span multiple numa regions is bad for performance
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
<li><strong>Next message:</strong> <a href="25928.php">John Bray: "Re: [OMPI users] Converting --cpus-per-proc to --map-by for a hybrid code"</a>
<li><strong>Previous message:</strong> <a href="25926.php">G&#195;&#182;tz Waschk: "Re: [OMPI users] Warning about not enough registerable memory on SL6.6"</a>
<li><strong>In reply to:</strong> <a href="25919.php">John Bray: "Re: [OMPI users] Converting --cpus-per-proc to --map-by for a hybrid code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25928.php">John Bray: "Re: [OMPI users] Converting --cpus-per-proc to --map-by for a hybrid code"</a>
<li><strong>Reply:</strong> <a href="25928.php">John Bray: "Re: [OMPI users] Converting --cpus-per-proc to --map-by for a hybrid code"</a>
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
