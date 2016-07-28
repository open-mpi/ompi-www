<?
$subject_val = "[hwloc-users] Process and thread binding";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 12 06:52:59 2011" -->
<!-- isoreceived="20110912105259" -->
<!-- sent="Mon, 12 Sep 2011 12:52:54 +0200" -->
<!-- isosent="20110912105254" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="[hwloc-users] Process and thread binding" -->
<!-- id="CAJNPZUVMz0CiZrjWOmOTHpDw-OSAaYkaRSYJ3joT_HQwioSrDQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [hwloc-users] Process and thread binding<br>
<strong>From:</strong> Gabriele Fatigati (<em>g.fatigati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-12 06:52:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0441.php">Brice Goglin: "Re: [hwloc-users] Process and thread binding"</a>
<li><strong>Previous message:</strong> <a href="0439.php">Samuel Thibault: "Re: [hwloc-users] Re : Re : hwloc topology check initializing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0441.php">Brice Goglin: "Re: [hwloc-users] Process and thread binding"</a>
<li><strong>Reply:</strong> <a href="0441.php">Brice Goglin: "Re: [hwloc-users] Process and thread binding"</a>
<li><strong>Maybe reply:</strong> <a href="0449.php">Samuel Thibault: "Re: [hwloc-users] Process and thread binding"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear hwloc users,
<br>
<p>I'm binding process in a NUMA node and also associated OpenMP threads. I've
<br>
noted that, if I bind  execution  of all on different cores in the same NUMA
<br>
node , it works well.
<br>
<p>If I bind process in NUMA node 0 for example, and thread on NUMA node 1, the
<br>
process is bound on NUMA node 1, and not 0.
<br>
<p>Why this? Thread binding influence bind of main process?
<br>
<p>Thanks in advance.
<br>
<p><pre>
-- 
Ing. Gabriele Fatigati
HPC specialist
SuperComputing Applications and Innovation Department
Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
www.cineca.it                    Tel:   +39 051 6171722
g.fatigati [AT] cineca.it
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0440/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0441.php">Brice Goglin: "Re: [hwloc-users] Process and thread binding"</a>
<li><strong>Previous message:</strong> <a href="0439.php">Samuel Thibault: "Re: [hwloc-users] Re : Re : hwloc topology check initializing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0441.php">Brice Goglin: "Re: [hwloc-users] Process and thread binding"</a>
<li><strong>Reply:</strong> <a href="0441.php">Brice Goglin: "Re: [hwloc-users] Process and thread binding"</a>
<li><strong>Maybe reply:</strong> <a href="0449.php">Samuel Thibault: "Re: [hwloc-users] Process and thread binding"</a>
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
