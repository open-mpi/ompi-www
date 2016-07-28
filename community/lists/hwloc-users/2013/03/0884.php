<?
$subject_val = "[hwloc-users] Many queries creating slow performance";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  5 14:22:29 2013" -->
<!-- isoreceived="20130305192229" -->
<!-- sent="Tue, 5 Mar 2013 12:23:42 -0700" -->
<!-- isosent="20130305192342" -->
<!-- name="Simon Hammond" -->
<!-- email="sdhammo_at_[hidden]" -->
<!-- subject="[hwloc-users] Many queries creating slow performance" -->
<!-- id="42344F54-16BC-439E-8878-4E166FD7D1AE_at_sandia.gov" -->
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
<strong>Subject:</strong> [hwloc-users] Many queries creating slow performance<br>
<strong>From:</strong> Simon Hammond (<em>sdhammo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-05 14:23:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0885.php">Brice Goglin: "Re: [hwloc-users] Many queries creating slow performance"</a>
<li><strong>Previous message:</strong> <a href="0883.php">Brice Goglin: "Re: [hwloc-users] Trying to get last cpu location"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0885.php">Brice Goglin: "Re: [hwloc-users] Many queries creating slow performance"</a>
<li><strong>Reply:</strong> <a href="0885.php">Brice Goglin: "Re: [hwloc-users] Many queries creating slow performance"</a>
<li><strong>Reply:</strong> <a href="0889.php">Brice Goglin: "Re: [hwloc-users] Many queries creating slow performance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi HWLOC users,
<br>
<p>We are seeing some significant performance problems using HWLOC 1.6.2 on Intel's MIC products. In one of our configurations we create 56 MPI ranks, each rank then queries the topology of the MIC card before creating threads. We are noticing that if we run 56 MPI ranks as opposed to one the calls to query the topology in HWLOC are very slow, runtime goes from seconds to minutes (and upwards).
<br>
<p>We guessed that this might be caused by the kernel serializing access to the /proc filesystem but this is just a hunch. 
<br>
<p>Has anyone had this problem and found an easy way to change the library / calls to HWLOC so that the slow down is not experienced? Would you describe this as a bug?
<br>
<p>Thanks for your help.
<br>
<p><p><pre>
--
Simon Hammond
1-(505)-845-7897 / MS-1319
Scalable Computer Architectures
Sandia National Laboratories, NM
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0884/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0885.php">Brice Goglin: "Re: [hwloc-users] Many queries creating slow performance"</a>
<li><strong>Previous message:</strong> <a href="0883.php">Brice Goglin: "Re: [hwloc-users] Trying to get last cpu location"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0885.php">Brice Goglin: "Re: [hwloc-users] Many queries creating slow performance"</a>
<li><strong>Reply:</strong> <a href="0885.php">Brice Goglin: "Re: [hwloc-users] Many queries creating slow performance"</a>
<li><strong>Reply:</strong> <a href="0889.php">Brice Goglin: "Re: [hwloc-users] Many queries creating slow performance"</a>
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
