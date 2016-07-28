<?
$subject_val = "Re: [hwloc-users] How to combine hwloc-bind and mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 10 07:57:46 2011" -->
<!-- isoreceived="20111110125746" -->
<!-- sent="Thu, 10 Nov 2011 13:57:41 +0100" -->
<!-- isosent="20111110125741" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] How to combine hwloc-bind and mpirun" -->
<!-- id="4EBBCA45.3040807_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201111101313.22299.rafapa_at_us.es" -->
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
<strong>Subject:</strong> Re: [hwloc-users] How to combine hwloc-bind and mpirun<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-10 07:57:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0471.php">Stefan Eilemann: "[hwloc-users] GPU/NIC/CPU locality"</a>
<li><strong>Previous message:</strong> <a href="0469.php">Rafael R. Pappalardo: "[hwloc-users] How to combine hwloc-bind and mpirun"</a>
<li><strong>In reply to:</strong> <a href="0469.php">Rafael R. Pappalardo: "[hwloc-users] How to combine hwloc-bind and mpirun"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 10/11/2011 13:13, Rafael R. Pappalardo a &#233;crit :
<br>
<span class="quotelev1">&gt; I am trying to send a MPI job to selected cores on a 64 cores machine. With 
</span><br>
<span class="quotelev1">&gt; taskset I use:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 8 taskset -c 1,3,5,7,9,11,13,15 program
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but if I substitute taskset by hwloc-bind doing
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 8 hwloc-bind core:1 core:3 core:5 core:7 core:9 core:11 core:13 
</span><br>
<span class="quotelev1">&gt; core:15 program
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; it does not work.
</span><br>
<p>What do you mean by &quot;does not work&quot;? Failure? No binding? Wrong binding?
<br>
<p>Note that taskset numbers are very likely different from hwloc-bind core
<br>
numbers. If you want to bind on 8 cores on the second socket, it may be
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpirun -np 8 hwloc-bind core:8-15 program
<br>
<p><p><span class="quotelev1">&gt; &quot;Each hwloc-bind command in the mpirun above doesn't know that there
</span><br>
<span class="quotelev1">&gt; are other hwloc-bind instances on the same machine. All of them bind
</span><br>
<span class="quotelev1">&gt; their process to all cores in the first socket. &quot;
</span><br>
<p>This sentence also applies to taskset.
<br>
<p><span class="quotelev1">&gt; Is there something wrong if I do:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hwloc-bind core:1 core:3 core:5 core:7 core:9 core:11 core:13 core:15 mpirun -
</span><br>
<span class="quotelev1">&gt; np 8 program
</span><br>
<p>If you don't run the mpirun command on the machine where the final MPI
<br>
processes run, it won't work at all.
<br>
<p>Otherwise, I would say that it depends on the implementation of mpirun.
<br>
And even if it binds the final MPI processes, it won't be better than above.
<br>
<p>If you want to bind each individual process on a single and independent
<br>
core, you can:
<br>
* use a mpirun that can do that
<br>
* use a more complex mpiexec line if your MPI implementation supports
<br>
it, for instance by bind each process individually:
<br>
mpiexec -np 1 hwloc-bind core:8 program : -np 1 hwloc-bind core:9
<br>
program : -np 1 hwloc-bind core:10 program : -np 1 hwloc-bind core:11
<br>
program : -np 1 hwloc-bind core:12 program : -np 1 hwloc-bind core:13
<br>
program : -np 1 hwloc-bind core:14 program : -np 1 hwloc-bind core:15
<br>
program
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0471.php">Stefan Eilemann: "[hwloc-users] GPU/NIC/CPU locality"</a>
<li><strong>Previous message:</strong> <a href="0469.php">Rafael R. Pappalardo: "[hwloc-users] How to combine hwloc-bind and mpirun"</a>
<li><strong>In reply to:</strong> <a href="0469.php">Rafael R. Pappalardo: "[hwloc-users] How to combine hwloc-bind and mpirun"</a>
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
