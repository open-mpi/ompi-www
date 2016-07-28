<?
$subject_val = "Re: [hwloc-users] Many queries creating slow performance";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  5 20:31:31 2013" -->
<!-- isoreceived="20130306013131" -->
<!-- sent="Tue, 5 Mar 2013 19:31:06 -0600" -->
<!-- isosent="20130306013106" -->
<!-- name="Jeff Hammond" -->
<!-- email="jhammond_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Many queries creating slow performance" -->
<!-- id="CAGKz=uL4KpeY2CKUwdx7Emx9oC9amJydG56P8ncaBzDm-o4zbw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="51365E04.7040909_at_inria.fr" -->
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
<strong>From:</strong> Jeff Hammond (<em>jhammond_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-05 20:31:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0892.php">Hammond, Simon David (-EXP): "Re: [hwloc-users] [EXTERNAL] Re: Many queries creating slow performance"</a>
<li><strong>Previous message:</strong> <a href="0890.php">Fabio Tordini: "Re: [hwloc-users] Trying to get last cpu location"</a>
<li><strong>In reply to:</strong> <a href="0889.php">Brice Goglin: "Re: [hwloc-users] Many queries creating slow performance"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Si - Is your code that calls hwloc part of MPICH or OpenMPI or
<br>
something that can be made standalone and shared?
<br>
<p>Brice - Do you have access to a MIC system for testing?  Write me
<br>
offline if you don't and I'll see what I can do to help.
<br>
<p>If this affects MPICH i.e. Hydra, then I'm sure Intel will be
<br>
committed to helping fix it since Intel MPI is using Hydra as the
<br>
launcher on systems like Stampede.
<br>
<p>Best,
<br>
<p>Jeff
<br>
<p>On Tue, Mar 5, 2013 at 3:05 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Just tested on a 96-core shared-memory machine. Running OpenMPI 1.6 mpiexec
</span><br>
<span class="quotelev1">&gt; lstopo, here's the execution time (mpiexec launch time is 0.2-0.4s)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1 rank :  0.2s
</span><br>
<span class="quotelev1">&gt; 8 ranks:  0.3-0.5s depending on binding (packed or scatter)
</span><br>
<span class="quotelev1">&gt; 24ranks:  0.8-3.7s depending on binding
</span><br>
<span class="quotelev1">&gt; 48ranks:  2.8-8.0s depending on binding
</span><br>
<span class="quotelev1">&gt; 96ranks: 14.2s
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 96ranks from a single XML file: 0.4s (negligible against mpiexec launch
</span><br>
<span class="quotelev1">&gt; time)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 05/03/2013 20:23, Simon Hammond a &#233;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi HWLOC users,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We are seeing some significant performance problems using HWLOC 1.6.2 on
</span><br>
<span class="quotelev1">&gt; Intel's MIC products. In one of our configurations we create 56 MPI ranks,
</span><br>
<span class="quotelev1">&gt; each rank then queries the topology of the MIC card before creating threads.
</span><br>
<span class="quotelev1">&gt; We are noticing that if we run 56 MPI ranks as opposed to one the calls to
</span><br>
<span class="quotelev1">&gt; query the topology in HWLOC are very slow, runtime goes from seconds to
</span><br>
<span class="quotelev1">&gt; minutes (and upwards).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We guessed that this might be caused by the kernel serializing access to the
</span><br>
<span class="quotelev1">&gt; /proc filesystem but this is just a hunch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Has anyone had this problem and found an easy way to change the library /
</span><br>
<span class="quotelev1">&gt; calls to HWLOC so that the slow down is not experienced? Would you describe
</span><br>
<span class="quotelev1">&gt; this as a bug?
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
<p><p><p><pre>
-- 
Jeff Hammond
Argonne Leadership Computing Facility
University of Chicago Computation Institute
jhammond_at_[hidden] / (630) 252-5381
<a href="http://www.linkedin.com/in/jeffhammond">http://www.linkedin.com/in/jeffhammond</a>
<a href="https://wiki.alcf.anl.gov/parts/index.php/User:Jhammond">https://wiki.alcf.anl.gov/parts/index.php/User:Jhammond</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0892.php">Hammond, Simon David (-EXP): "Re: [hwloc-users] [EXTERNAL] Re: Many queries creating slow performance"</a>
<li><strong>Previous message:</strong> <a href="0890.php">Fabio Tordini: "Re: [hwloc-users] Trying to get last cpu location"</a>
<li><strong>In reply to:</strong> <a href="0889.php">Brice Goglin: "Re: [hwloc-users] Many queries creating slow performance"</a>
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
