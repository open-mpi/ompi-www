<?
$subject_val = "[hwloc-users] Thread binding problem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  5 08:27:53 2012" -->
<!-- isoreceived="20120905122753" -->
<!-- sent="Wed, 5 Sep 2012 14:27:49 +0200" -->
<!-- isosent="20120905122749" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="[hwloc-users] Thread binding problem" -->
<!-- id="CAJNPZUWXUc+zOtp9TaxQZYHLK2o79K4AG7XS1ohQw=fCGPCMHg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [hwloc-users] Thread binding problem<br>
<strong>From:</strong> Gabriele Fatigati (<em>g.fatigati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-05 08:27:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0682.php">Brice Goglin: "Re: [hwloc-users] Thread binding problem"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2012/08/0680.php">Samuel Thibault: "Re: [hwloc-users] lstopo and GPus"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0682.php">Brice Goglin: "Re: [hwloc-users] Thread binding problem"</a>
<li><strong>Reply:</strong> <a href="0682.php">Brice Goglin: "Re: [hwloc-users] Thread binding problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Hwloc users and developers,
<br>
<p><p>I'm using hwloc 1.4.1 on a multithreaded program in a Linux platform, where
<br>
each thread bind many non contiguos pieces of a big matrix using in a very
<br>
intensive way hwloc_set_area_membind_nodeset function:
<br>
<p>hwloc_set_area_membind_nodeset(topology, punt+offset, len, nodeset,
<br>
HWLOC_MEMBIND_BIND, HWLOC_MEMBIND_THREAD | HWLOC_MEMBIND_MIGRATE);
<br>
<p>Binding seems works well, since the returned code from function is 0 for
<br>
every calls.
<br>
<p>The problems is that after binding, a simple little new malloc fails,
<br>
without any apparent reason.
<br>
<p>Disabling memory binding, the allocations works well.  Is there any knows
<br>
problem if  hwloc_set_area_membind_nodeset is used intensively?
<br>
<p>Is there some operating system limit for memory pages binding?
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0681/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0682.php">Brice Goglin: "Re: [hwloc-users] Thread binding problem"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2012/08/0680.php">Samuel Thibault: "Re: [hwloc-users] lstopo and GPus"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0682.php">Brice Goglin: "Re: [hwloc-users] Thread binding problem"</a>
<li><strong>Reply:</strong> <a href="0682.php">Brice Goglin: "Re: [hwloc-users] Thread binding problem"</a>
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
