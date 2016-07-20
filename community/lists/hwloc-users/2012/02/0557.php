<?
$subject_val = "[hwloc-users] bind process to built cpuset";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 20 11:42:04 2012" -->
<!-- isoreceived="20120220164204" -->
<!-- sent="Mon, 20 Feb 2012 16:41:58 +0000" -->
<!-- isosent="20120220164158" -->
<!-- name="Albert Solernou" -->
<!-- email="albert.solernou_at_[hidden]" -->
<!-- subject="[hwloc-users] bind process to built cpuset" -->
<!-- id="4F4277D6.1010901_at_oerc.ox.ac.uk" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [hwloc-users] bind process to built cpuset<br>
<strong>From:</strong> Albert Solernou (<em>albert.solernou_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-20 11:41:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0558.php">Brice Goglin: "Re: [hwloc-users] bind process to built cpuset"</a>
<li><strong>Previous message:</strong> <a href="0556.php">Brice Goglin: "Re: [hwloc-users] receive 0x0 from hwloc_cuda_get_device_cpuset"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0558.php">Brice Goglin: "Re: [hwloc-users] bind process to built cpuset"</a>
<li><strong>Reply:</strong> <a href="0558.php">Brice Goglin: "Re: [hwloc-users] bind process to built cpuset"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I'd like to bind a process to a cpuset, so that when it spawns on 
<br>
several threads, those are trapped on that cpuset.
<br>
<p>In order to do so, I want to define my own cpuset. Let's say I want it 
<br>
to include HWLOC_OBJ_CORE 2 and 5. How can I create this cpuset? The 
<br>
bitmap api sounds like the solution to me, but I couldn't relate the 
<br>
indexes in there into HWLOC_OBJects of any type...
<br>
<p>So the question is two fold. On one hand I want to set up my own cpuset. 
<br>
On the other hand, I'd like to know if binding a process in there would 
<br>
lock its spawned threads.
<br>
<p>Thank you,
<br>
Albert
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0558.php">Brice Goglin: "Re: [hwloc-users] bind process to built cpuset"</a>
<li><strong>Previous message:</strong> <a href="0556.php">Brice Goglin: "Re: [hwloc-users] receive 0x0 from hwloc_cuda_get_device_cpuset"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0558.php">Brice Goglin: "Re: [hwloc-users] bind process to built cpuset"</a>
<li><strong>Reply:</strong> <a href="0558.php">Brice Goglin: "Re: [hwloc-users] bind process to built cpuset"</a>
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
