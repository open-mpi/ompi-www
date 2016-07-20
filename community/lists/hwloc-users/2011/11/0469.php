<?
$subject_val = "[hwloc-users] How to combine hwloc-bind and mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 10 07:13:29 2011" -->
<!-- isoreceived="20111110121329" -->
<!-- sent="Thu, 10 Nov 2011 13:13:22 +0100" -->
<!-- isosent="20111110121322" -->
<!-- name="Rafael R. Pappalardo" -->
<!-- email="rafapa_at_[hidden]" -->
<!-- subject="[hwloc-users] How to combine hwloc-bind and mpirun" -->
<!-- id="201111101313.22299.rafapa_at_us.es" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [hwloc-users] How to combine hwloc-bind and mpirun<br>
<strong>From:</strong> Rafael R. Pappalardo (<em>rafapa_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-10 07:13:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0470.php">Brice Goglin: "Re: [hwloc-users] How to combine hwloc-bind and mpirun"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2011/10/0468.php">Jiri Hladky: "Re: [hwloc-users] [hwloc-announce] Hardware Locality (hwloc) v1.2.2 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0470.php">Brice Goglin: "Re: [hwloc-users] How to combine hwloc-bind and mpirun"</a>
<li><strong>Reply:</strong> <a href="0470.php">Brice Goglin: "Re: [hwloc-users] How to combine hwloc-bind and mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am trying to send a MPI job to selected cores on a 64 cores machine. With 
<br>
taskset I use:
<br>
<p>mpirun -np 8 taskset -c 1,3,5,7,9,11,13,15 program
<br>
<p>but if I substitute taskset by hwloc-bind doing
<br>
<p>mpirun -np 8 hwloc-bind core:1 core:3 core:5 core:7 core:9 core:11 core:13 
<br>
core:15 program
<br>
<p>it does not work. In the following thread:
<br>
<p><a href="http://www.open-mpi.org/community/lists/hwloc-users/2011/02/0277.php">http://www.open-mpi.org/community/lists/hwloc-users/2011/02/0277.php</a>
<br>
<p>The answer was:
<br>
<p>&quot;Each hwloc-bind command in the mpirun above doesn't know that there
<br>
are other hwloc-bind instances on the same machine. All of them bind
<br>
their process to all cores in the first socket. &quot;
<br>
<p>Is there something wrong if I do:
<br>
<p>hwloc-bind core:1 core:3 core:5 core:7 core:9 core:11 core:13 core:15 mpirun -
<br>
np 8 program
<br>
<p>Is the an easier way to tell mpirun the individual cores?
<br>
<p>Thanks a lot.
<br>
<pre>
-- 
Dr. Rafael R. Pappalardo
Dept. Quimica Fisica, Fac. de Quimica, Univ. de Sevilla (Spain)
e-mail: rafapa_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0470.php">Brice Goglin: "Re: [hwloc-users] How to combine hwloc-bind and mpirun"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2011/10/0468.php">Jiri Hladky: "Re: [hwloc-users] [hwloc-announce] Hardware Locality (hwloc) v1.2.2 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0470.php">Brice Goglin: "Re: [hwloc-users] How to combine hwloc-bind and mpirun"</a>
<li><strong>Reply:</strong> <a href="0470.php">Brice Goglin: "Re: [hwloc-users] How to combine hwloc-bind and mpirun"</a>
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
