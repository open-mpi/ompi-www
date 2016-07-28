<?
$subject_val = "Re: [OMPI users] Converting --cpus-per-proc to --map-by for a hybrid code";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  8 11:34:45 2014" -->
<!-- isoreceived="20141208163445" -->
<!-- sent="Mon, 8 Dec 2014 16:34:43 +0000" -->
<!-- isosent="20141208163443" -->
<!-- name="John Bray" -->
<!-- email="jbray_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Converting --cpus-per-proc to --map-by for a hybrid code" -->
<!-- id="CAM2Y-daADy0=9TwQTAgAzqbFLK9jLp7+FrENyWzLEBzrg5o6OA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="38D204CC-7925-46FD-9A43-18B7326959A0_at_open-mpi.org" -->
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
<strong>From:</strong> John Bray (<em>jbray_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-08 11:34:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25929.php">Götz Waschk: "Re: [OMPI users] Warning about not enough registerable memory on SL6.6"</a>
<li><strong>Previous message:</strong> <a href="25927.php">Ralph Castain: "Re: [OMPI users] Converting --cpus-per-proc to --map-by for a hybrid code"</a>
<li><strong>In reply to:</strong> <a href="25927.php">Ralph Castain: "Re: [OMPI users] Converting --cpus-per-proc to --map-by for a hybrid code"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OMP_NUM_THREADS=1 mpiexec -n 1 gnu_openmpi_a/one_c_prof.exe : 113 iterations
<br>
OMP_NUM_THREADS=6 mpiexec -n 1 --map-by node:PE=6 : 639 iterations
<br>
OMP_NUM_THREADS=6 mpiexec -n 2 --map-by node:PE=6 : 639 iterations
<br>
OMP_NUM_THREADS=12 mpiexec -n 1 --map-by node:PE=12 : 1000 iterations
<br>
OMP_NUM_THREADS=12 mpiexec -n 2 --use-hwthread-cpus --map-by node:PE=12 :
<br>
646 iterations
<br>
<p>that's looking better, with limited gain for 1 process on 2 chips. Thanks.
<br>
I am testing Allineas profiler, and our goal is to point out bad practice,
<br>
so I need to run all sorts of pathological cases. Now to see what our
<br>
software thinks
<br>
<p>Thanks for your help
<br>
<p>John
<br>
<p>On 8 December 2014 at 15:57, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for sending that lstopo output - helped clarify things for me. I
</span><br>
<span class="quotelev1">&gt; think I now understand the issue. Mostly a problem of my being rather dense
</span><br>
<span class="quotelev1">&gt; when reading your earlier note.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Try using &#226;&#128;&#148;map-by node:PE=N to your cmd line. I think the problem is that
</span><br>
<span class="quotelev1">&gt; we default to &#226;&#128;&#148;map-by numa if you just give cpus-per-proc and no mapping
</span><br>
<span class="quotelev1">&gt; directive as we know that having threads that span multiple numa regions is
</span><br>
<span class="quotelev1">&gt; bad for performance
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Dec 5, 2014, at 9:07 AM, John Bray &lt;jbray_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi Ralph
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have a motherboard with 2 X6580 chips, each with 6 cores 2 way
</span><br>
<span class="quotelev1">&gt; hyperthreading, so /proc/cpuinfo reports 24 cores
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Doing a pure compute OpenMP loop where I'd expect the number of
</span><br>
<span class="quotelev1">&gt; iterations in 10s to rise with number of threads
</span><br>
<span class="quotelev2">&gt; &gt; with gnu and mpich
</span><br>
<span class="quotelev2">&gt; &gt; OMP_NUM_THREADS=1 -n 1 : 112 iterations
</span><br>
<span class="quotelev2">&gt; &gt; OMP_NUM_THREADS=2 -n 1 : 224 iterations
</span><br>
<span class="quotelev2">&gt; &gt; OMP_NUM_THREADS=6 -n 1 : 644 iterations
</span><br>
<span class="quotelev2">&gt; &gt; OMP_NUM_THREADS=12 -n 1 : 1287 iterations
</span><br>
<span class="quotelev2">&gt; &gt; OMP_NUM_THREADS=22 -n 1 : 1182 iterations
</span><br>
<span class="quotelev2">&gt; &gt; OMP_NUM_THREADS=24 -n 1 : 454 iterations
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; which shows that mpich is spreading across the cores, but hyperthreading
</span><br>
<span class="quotelev1">&gt; is not useful, and using the whole node counterproductive
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; with gnu and openmpi 1.8.3
</span><br>
<span class="quotelev2">&gt; &gt; OMP_NUM_THREADS=1 mpiexec -n 1 : 112
</span><br>
<span class="quotelev2">&gt; &gt; OMP_NUM_THREADS=2 mpiexec -n 1 : 113
</span><br>
<span class="quotelev2">&gt; &gt; which suggests you aren't allowing the threads to spread across cores
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; adding --cpus-per-node I gain access to the resources on one chip
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; OMP_NUM_THREADS=1 mpiexec --cpus-per-proc 1 -n 1 : 112
</span><br>
<span class="quotelev2">&gt; &gt; OMP_NUM_THREADS=2 mpiexec --cpus-per-proc 2 -n 1 : 224
</span><br>
<span class="quotelev2">&gt; &gt; OMP_NUM_THREADS=6 mpiexec --cpus-per-proc 2 -n 1 : 644
</span><br>
<span class="quotelev2">&gt; &gt; then
</span><br>
<span class="quotelev2">&gt; &gt; OMP_NUM_THREADS=12 mpiexec --cpus-per-proc 12 -n 1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; A request for multiple cpus-per-proc was given, but a directive
</span><br>
<span class="quotelev2">&gt; &gt; was also give to map to an object level that has less cpus than
</span><br>
<span class="quotelev2">&gt; &gt; requested ones:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   #cpus-per-proc:  12
</span><br>
<span class="quotelev2">&gt; &gt;   number of cpus:  6
</span><br>
<span class="quotelev2">&gt; &gt;   map-by:          BYNUMA
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; So you aren't happy using both chips for one process
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; OMP_NUM_THREADS=1 mpiexec -n 1 --cpus-per-proc 1 --use-hwthread-cpus :
</span><br>
<span class="quotelev1">&gt; 112
</span><br>
<span class="quotelev2">&gt; &gt; OMP_NUM_THREADS=2 mpiexec -n 1 --cpus-per-proc 2 --use-hwthread-cpus :
</span><br>
<span class="quotelev1">&gt; 112
</span><br>
<span class="quotelev2">&gt; &gt; OMP_NUM_THREADS=4 mpiexec -n 1 --cpus-per-proc 4 --use-hwthread-cpus :
</span><br>
<span class="quotelev1">&gt; 224
</span><br>
<span class="quotelev2">&gt; &gt; OMP_NUM_THREADS=6 mpiexec -n 1 --cpus-per-proc 6 --use-hwthread-cpus :
</span><br>
<span class="quotelev1">&gt; 324
</span><br>
<span class="quotelev2">&gt; &gt; OMP_NUM_THREADS=6 mpiexec -n 1 --cpus-per-proc 12 --use-hwthread-cpus :
</span><br>
<span class="quotelev1">&gt; 631
</span><br>
<span class="quotelev2">&gt; &gt; OMP_NUM_THREADS=12 mpiexec -n 1 --cpus-per-proc 12 --use-hwthread-cpus :
</span><br>
<span class="quotelev1">&gt; 647
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; OMP_NUM_THREADS=24 mpiexec -n 1 --cpus-per-proc 12 --use-hwthread-cpus
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; A request for multiple cpus-per-proc was given, but a directive
</span><br>
<span class="quotelev2">&gt; &gt; was also give to map to an object level that has less cpus than
</span><br>
<span class="quotelev2">&gt; &gt; requested ones:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   #cpus-per-proc:  24
</span><br>
<span class="quotelev2">&gt; &gt;   number of cpus:  12
</span><br>
<span class="quotelev2">&gt; &gt;   map-by:          BYNUMA
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; OMP_NUM_THREADS=1 mpiexec -n 1 --cpus-per-proc 2 --use-hwthread-cpus :
</span><br>
<span class="quotelev1">&gt; 112
</span><br>
<span class="quotelev2">&gt; &gt; OMP_NUM_THREADS=2 mpiexec -n 1 --cpus-per-proc 4 --use-hwthread-cpus :
</span><br>
<span class="quotelev1">&gt; 224
</span><br>
<span class="quotelev2">&gt; &gt; OMP_NUM_THREADS=6 mpiexec -n 1 --cpus-per-proc 12 --use-hwthread-cpus ::
</span><br>
<span class="quotelev1">&gt; 644
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; OMP_NUM_THREADS=12 mpiexec -n 1 --cpus-per-proc 24 --use-hwthread-cpus
</span><br>
<span class="quotelev1">&gt; :: 644
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; A request for multiple cpus-per-proc was given, but a directive
</span><br>
<span class="quotelev2">&gt; &gt; was also give to map to an object level that has less cpus than
</span><br>
<span class="quotelev2">&gt; &gt; requested ones:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   #cpus-per-proc:  24
</span><br>
<span class="quotelev2">&gt; &gt;   number of cpus:  12
</span><br>
<span class="quotelev2">&gt; &gt;   map-by:          BYNUMA
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; So it seems that --use-hwthread-cpus means that --cpus-per-proc changes
</span><br>
<span class="quotelev1">&gt; from physical cores to hyperthreaded cores, but I can't get both chips
</span><br>
<span class="quotelev1">&gt; working on the problem in way mpich can
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; John
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/12/25919.php">http://www.open-mpi.org/community/lists/users/2014/12/25919.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/12/25927.php">http://www.open-mpi.org/community/lists/users/2014/12/25927.php</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25928/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25929.php">Götz Waschk: "Re: [OMPI users] Warning about not enough registerable memory on SL6.6"</a>
<li><strong>Previous message:</strong> <a href="25927.php">Ralph Castain: "Re: [OMPI users] Converting --cpus-per-proc to --map-by for a hybrid code"</a>
<li><strong>In reply to:</strong> <a href="25927.php">Ralph Castain: "Re: [OMPI users] Converting --cpus-per-proc to --map-by for a hybrid code"</a>
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
