<?
$subject_val = "Re: [hwloc-users] Many queries creating slow performance";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  5 16:05:15 2013" -->
<!-- isoreceived="20130305210515" -->
<!-- sent="Tue, 05 Mar 2013 22:05:08 +0100" -->
<!-- isosent="20130305210508" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Many queries creating slow performance" -->
<!-- id="51365E04.7040909_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="42344F54-16BC-439E-8878-4E166FD7D1AE_at_sandia.gov" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Many queries creating slow performance<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-05 16:05:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0890.php">Fabio Tordini: "Re: [hwloc-users] Trying to get last cpu location"</a>
<li><strong>Previous message:</strong> <a href="0888.php">Brice Goglin: "Re: [hwloc-users] Trying to get last cpu location"</a>
<li><strong>In reply to:</strong> <a href="0884.php">Simon Hammond: "[hwloc-users] Many queries creating slow performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0891.php">Jeff Hammond: "Re: [hwloc-users] Many queries creating slow performance"</a>
<li><strong>Reply:</strong> <a href="0891.php">Jeff Hammond: "Re: [hwloc-users] Many queries creating slow performance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just tested on a 96-core shared-memory machine. Running OpenMPI 1.6
<br>
mpiexec lstopo, here's the execution time (mpiexec launch time is 0.2-0.4s)
<br>
<p>1 rank :  0.2s
<br>
8 ranks:  0.3-0.5s depending on binding (packed or scatter)
<br>
24ranks:  0.8-3.7s depending on binding
<br>
48ranks:  2.8-8.0s depending on binding
<br>
96ranks: 14.2s
<br>
<p>96ranks from a single XML file: 0.4s (negligible against mpiexec launch time)
<br>
<p><p>Brice
<br>
<p><p><p>Le 05/03/2013 20:23, Simon Hammond a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi HWLOC users,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We are seeing some significant performance problems using HWLOC 1.6.2
</span><br>
<span class="quotelev1">&gt; on Intel's MIC products. In one of our configurations we create 56 MPI
</span><br>
<span class="quotelev1">&gt; ranks, each rank then queries the topology of the MIC card before
</span><br>
<span class="quotelev1">&gt; creating threads. We are noticing that if we run 56 MPI ranks as
</span><br>
<span class="quotelev1">&gt; opposed to one the calls to query the topology in HWLOC are very slow,
</span><br>
<span class="quotelev1">&gt; runtime goes from seconds to minutes (and upwards).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We guessed that this might be caused by the kernel serializing access
</span><br>
<span class="quotelev1">&gt; to the /proc filesystem but this is just a hunch. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Has anyone had this problem and found an easy way to change the
</span><br>
<span class="quotelev1">&gt; library / calls to HWLOC so that the slow down is not experienced?
</span><br>
<span class="quotelev1">&gt; Would you describe this as a bug?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Simon Hammond
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1-(505)-845-7897 / MS-1319
</span><br>
<span class="quotelev1">&gt; Scalable Computer Architectures
</span><br>
<span class="quotelev1">&gt; Sandia National Laboratories, NM
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
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0889/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0890.php">Fabio Tordini: "Re: [hwloc-users] Trying to get last cpu location"</a>
<li><strong>Previous message:</strong> <a href="0888.php">Brice Goglin: "Re: [hwloc-users] Trying to get last cpu location"</a>
<li><strong>In reply to:</strong> <a href="0884.php">Simon Hammond: "[hwloc-users] Many queries creating slow performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0891.php">Jeff Hammond: "Re: [hwloc-users] Many queries creating slow performance"</a>
<li><strong>Reply:</strong> <a href="0891.php">Jeff Hammond: "Re: [hwloc-users] Many queries creating slow performance"</a>
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
