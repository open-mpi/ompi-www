<?
$subject_val = "[hwloc-users] HWLoc error mesg";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Dec 20 13:15:02 2014" -->
<!-- isoreceived="20141220181502" -->
<!-- sent="Sat, 20 Dec 2014 19:15:01 +0100" -->
<!-- isosent="20141220181501" -->
<!-- name="Sergio Manzetti" -->
<!-- email="sergio.manzetti_at_[hidden]" -->
<!-- subject="[hwloc-users] HWLoc error mesg" -->
<!-- id="DUB126-W357137001569C698933894E3680_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="DUB126-W303F8BE1A71C917A68295FE3680_at_phx.gbl" -->
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
<strong>Subject:</strong> [hwloc-users] HWLoc error mesg<br>
<strong>From:</strong> Sergio Manzetti (<em>sergio.manzetti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-20 13:15:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1139.php">Brice Goglin: "Re: [hwloc-users] HWLoc error mesg"</a>
<li><strong>Previous message:</strong> <a href="1137.php">Hendryk Bockelmann: "Re: [hwloc-users] wrong os_index on AIX -&gt; please test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1139.php">Brice Goglin: "Re: [hwloc-users] HWLoc error mesg"</a>
<li><strong>Reply:</strong> <a href="1139.php">Brice Goglin: "Re: [hwloc-users] HWLoc error mesg"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all, I have an AMD Opteron 24 core system which is not compatible with hwloc, and gives repeated error.
<br>
<p>****************************************************************************
* hwloc has encountered what looks like an error from the operating system.
*
* L3 (cpuset 0x000003f0) intersects with NUMANode (P#0 cpuset 0x0000003f) without inclusion!
* Error occurred in topology.c line 940
*
* Please report this error message to the hwloc user's mailing list,
* along with the output from the hwloc-gather-topology script.
****************************************************************************
<br>
<p><p>The attachment shows this report, which indicates that hwloc is unable to count the correct number of CPUs, siblings etc. It identifies 21 instead of 24.
<br>
<p><p>Please advise, and is there an alternative to this which is free?
<br>
<p>Thanks
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1138/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1138/tmp.05sqhvA2j3.tar.gz">tmp.05sqhvA2j3.tar.gz</a>
</ul>
<!-- attachment="tmp.05sqhvA2j3.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1139.php">Brice Goglin: "Re: [hwloc-users] HWLoc error mesg"</a>
<li><strong>Previous message:</strong> <a href="1137.php">Hendryk Bockelmann: "Re: [hwloc-users] wrong os_index on AIX -&gt; please test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1139.php">Brice Goglin: "Re: [hwloc-users] HWLoc error mesg"</a>
<li><strong>Reply:</strong> <a href="1139.php">Brice Goglin: "Re: [hwloc-users] HWLoc error mesg"</a>
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
