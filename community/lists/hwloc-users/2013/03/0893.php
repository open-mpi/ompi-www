<?
$subject_val = "Re: [hwloc-users] [EXTERNAL] Re: Many queries creating slow performance";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  6 02:31:50 2013" -->
<!-- isoreceived="20130306073150" -->
<!-- sent="Wed, 06 Mar 2013 08:31:41 +0100" -->
<!-- isosent="20130306073141" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] [EXTERNAL] Re: Many queries creating slow performance" -->
<!-- id="5136F0DD.7020003_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="74A0D537FED93B4EA49EA78E5A3905C30535D8F1_at_EXMB02.srn.sandia.gov" -->
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
<strong>Subject:</strong> Re: [hwloc-users] [EXTERNAL] Re: Many queries creating slow performance<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-06 02:31:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0894.php">Pavan Balaji: "Re: [hwloc-users] [EXTERNAL] Re: Many queries creating slow performance"</a>
<li><strong>Previous message:</strong> <a href="0892.php">Hammond, Simon David (-EXP): "Re: [hwloc-users] [EXTERNAL] Re: Many queries creating slow performance"</a>
<li><strong>In reply to:</strong> <a href="0892.php">Hammond, Simon David (-EXP): "Re: [hwloc-users] [EXTERNAL] Re: Many queries creating slow performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0894.php">Pavan Balaji: "Re: [hwloc-users] [EXTERNAL] Re: Many queries creating slow performance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Aside from the idea of saving the topology to a XML file before running
<br>
the job, you could also:
<br>
* rank 0 load the topology as usual
<br>
* rank 0 saves it to a XML buffer (hwloc_topology_export_xmlbuffer())
<br>
then MPI_Broadcast() to other ranks
<br>
* those ranks would just load a hwloc topology from the received XML
<br>
buffer (hwloc_topology_set_xmlbuffer()).
<br>
<p>Brice
<br>
<p><p><p>Le 06/03/2013 03:53, Hammond, Simon David (-EXP) a &#233;crit :
<br>
<span class="quotelev1">&gt; Hey Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's not in OpenMPI or MPICH :(. It's a custom library which is not
</span><br>
<span class="quotelev1">&gt; MPI aware making it difficult to share the topology query. Ill see if
</span><br>
<span class="quotelev1">&gt; we can get a stand alone piece of code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From earlier posts it sounds like OpenMPI queries once per physical
</span><br>
<span class="quotelev1">&gt; node so probably won't have this problem. I'm guessing MPICH would do
</span><br>
<span class="quotelev1">&gt; something similar?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; S.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sent with Good (www.good.com)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; *From: *Jeff Hammond [jhammond_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:jhammond_at_[hidden]&gt;]
</span><br>
<span class="quotelev1">&gt; *Sent: *Tuesday, March 05, 2013 07:17 PM Mountain Standard Time
</span><br>
<span class="quotelev1">&gt; *To: *Hardware locality user list
</span><br>
<span class="quotelev1">&gt; *Subject: *[EXTERNAL] Re: [hwloc-users] Many queries creating slow
</span><br>
<span class="quotelev1">&gt; performance
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Si - Is your code that calls hwloc part of MPICH or OpenMPI or
</span><br>
<span class="quotelev1">&gt; something that can be made standalone and shared?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice - Do you have access to a MIC system for testing?  Write me
</span><br>
<span class="quotelev1">&gt; offline if you don't and I'll see what I can do to help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If this affects MPICH i.e. Hydra, then I'm sure Intel will be
</span><br>
<span class="quotelev1">&gt; committed to helping fix it since Intel MPI is using Hydra as the
</span><br>
<span class="quotelev1">&gt; launcher on systems like Stampede.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Mar 5, 2013 at 3:05 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Just tested on a 96-core shared-memory machine. Running OpenMPI 1.6
</span><br>
<span class="quotelev1">&gt; mpiexec
</span><br>
<span class="quotelev2">&gt; &gt; lstopo, here's the execution time (mpiexec launch time is 0.2-0.4s)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1 rank :  0.2s
</span><br>
<span class="quotelev2">&gt; &gt; 8 ranks:  0.3-0.5s depending on binding (packed or scatter)
</span><br>
<span class="quotelev2">&gt; &gt; 24ranks:  0.8-3.7s depending on binding
</span><br>
<span class="quotelev2">&gt; &gt; 48ranks:  2.8-8.0s depending on binding
</span><br>
<span class="quotelev2">&gt; &gt; 96ranks: 14.2s
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 96ranks from a single XML file: 0.4s (negligible against mpiexec launch
</span><br>
<span class="quotelev2">&gt; &gt; time)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Brice
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Le 05/03/2013 20:23, Simon Hammond a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi HWLOC users,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; We are seeing some significant performance problems using HWLOC 1.6.2 on
</span><br>
<span class="quotelev2">&gt; &gt; Intel's MIC products. In one of our configurations we create 56 MPI
</span><br>
<span class="quotelev1">&gt; ranks,
</span><br>
<span class="quotelev2">&gt; &gt; each rank then queries the topology of the MIC card before creating
</span><br>
<span class="quotelev1">&gt; threads.
</span><br>
<span class="quotelev2">&gt; &gt; We are noticing that if we run 56 MPI ranks as opposed to one the
</span><br>
<span class="quotelev1">&gt; calls to
</span><br>
<span class="quotelev2">&gt; &gt; query the topology in HWLOC are very slow, runtime goes from seconds to
</span><br>
<span class="quotelev2">&gt; &gt; minutes (and upwards).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; We guessed that this might be caused by the kernel serializing
</span><br>
<span class="quotelev1">&gt; access to the
</span><br>
<span class="quotelev2">&gt; &gt; /proc filesystem but this is just a hunch.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Has anyone had this problem and found an easy way to change the
</span><br>
<span class="quotelev1">&gt; library /
</span><br>
<span class="quotelev2">&gt; &gt; calls to HWLOC so that the slow down is not experienced? Would you
</span><br>
<span class="quotelev1">&gt; describe
</span><br>
<span class="quotelev2">&gt; &gt; this as a bug?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks for your help.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Simon Hammond
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1-(505)-845-7897 / MS-1319
</span><br>
<span class="quotelev2">&gt; &gt; Scalable Computer Architectures
</span><br>
<span class="quotelev2">&gt; &gt; Sandia National Laboratories, NM
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; hwloc-users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; hwloc-users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Hammond
</span><br>
<span class="quotelev1">&gt; Argonne Leadership Computing Facility
</span><br>
<span class="quotelev1">&gt; University of Chicago Computation Institute
</span><br>
<span class="quotelev1">&gt; jhammond_at_[hidden] / (630) 252-5381
</span><br>
<span class="quotelev1">&gt; <a href="http://www.linkedin.com/in/jeffhammond">http://www.linkedin.com/in/jeffhammond</a>
</span><br>
<span class="quotelev1">&gt; <a href="https://wiki.alcf.anl.gov/parts/index.php/User:Jhammond">https://wiki.alcf.anl.gov/parts/index.php/User:Jhammond</a>
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0893/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0894.php">Pavan Balaji: "Re: [hwloc-users] [EXTERNAL] Re: Many queries creating slow performance"</a>
<li><strong>Previous message:</strong> <a href="0892.php">Hammond, Simon David (-EXP): "Re: [hwloc-users] [EXTERNAL] Re: Many queries creating slow performance"</a>
<li><strong>In reply to:</strong> <a href="0892.php">Hammond, Simon David (-EXP): "Re: [hwloc-users] [EXTERNAL] Re: Many queries creating slow performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0894.php">Pavan Balaji: "Re: [hwloc-users] [EXTERNAL] Re: Many queries creating slow performance"</a>
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
