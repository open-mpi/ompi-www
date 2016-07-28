<?
$subject_val = "[hwloc-devel] lstopo --top";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 18 11:17:21 2013" -->
<!-- isoreceived="20130618151721" -->
<!-- sent="Tue, 18 Jun 2013 17:17:16 +0200" -->
<!-- isosent="20130618151716" -->
<!-- name="Jiri Hladky" -->
<!-- email="hladky.jiri_at_[hidden]" -->
<!-- subject="[hwloc-devel] lstopo --top" -->
<!-- id="CALT_uBR4D0+2v3_tHevbJgKr=vOZNRSNpC+p+UnLvQT8nBK63A_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [hwloc-devel] lstopo --top<br>
<strong>From:</strong> Jiri Hladky (<em>hladky.jiri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-18 11:17:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3808.php">Samuel Thibault: "Re: [hwloc-devel] lstopo --top"</a>
<li><strong>Previous message:</strong> <a href="3806.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-users] hwloc on Xeon Phi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3808.php">Samuel Thibault: "Re: [hwloc-devel] lstopo --top"</a>
<li><strong>Reply:</strong> <a href="3808.php">Samuel Thibault: "Re: [hwloc-devel] lstopo --top"</a>
<li><strong>Maybe reply:</strong> <a href="3822.php">Brice Goglin: "Re: [hwloc-devel] lstopo --top"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brice,
<br>
<p>we test linux kernel job scheduler. To do so, we run for example
<br>
<p>1
<br>
2
<br>
....
<br>
16
<br>
32 linpack benchmarks simultaneously.
<br>
(upto the number of cores)
<br>
<p>For each group of jobs we have this output:
<br>
<p>=======2 simultaneous jobs========
<br>
PID #CPU #CPU #CPU #CPU
<br>
PID #CPU #CPU #CPU
<br>
==============================
<br>
<p>where first column is PID of linpack benchmark and other columns is CPU on
<br>
which the process was running with granularity of 1 second
<br>
<p>I would like to check the possibilities to visualize the results to the
<br>
output similar to lstopo --top (see the attachment). I would like to write
<br>
a simple utility which will
<br>
&nbsp;* parse the above file
<br>
&nbsp;* foreach timestep create an output similar to lstopo --top output
<br>
showing, where each job was running
<br>
<p>How difficult would be this? Could you please provide some hints what API
<br>
functionality to use?
<br>
<p>Thanks!
<br>
Jirka
<br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-3807/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/hwloc-devel/att-3807/a.png" alt="a.png">
<!-- attachment="a.png" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3808.php">Samuel Thibault: "Re: [hwloc-devel] lstopo --top"</a>
<li><strong>Previous message:</strong> <a href="3806.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-users] hwloc on Xeon Phi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3808.php">Samuel Thibault: "Re: [hwloc-devel] lstopo --top"</a>
<li><strong>Reply:</strong> <a href="3808.php">Samuel Thibault: "Re: [hwloc-devel] lstopo --top"</a>
<li><strong>Maybe reply:</strong> <a href="3822.php">Brice Goglin: "Re: [hwloc-devel] lstopo --top"</a>
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
