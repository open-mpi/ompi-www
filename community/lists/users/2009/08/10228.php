<?
$subject_val = "[OMPI users] Performance question about OpenMPI and MVAPICH2 on IB";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  6 17:25:46 2009" -->
<!-- isoreceived="20090806212546" -->
<!-- sent="Thu, 06 Aug 2009 15:25:41 -0600" -->
<!-- isosent="20090806212541" -->
<!-- name="Craig Tierney" -->
<!-- email="Craig.Tierney_at_[hidden]" -->
<!-- subject="[OMPI users] Performance question about OpenMPI and MVAPICH2 on IB" -->
<!-- id="4A7B4A55.4080404_at_noaa.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4A79ECF9.3010500_at_dev.mellanox.co.il" -->
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
<strong>Subject:</strong> [OMPI users] Performance question about OpenMPI and MVAPICH2 on IB<br>
<strong>From:</strong> Craig Tierney (<em>Craig.Tierney_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-06 17:25:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10229.php">Nifty Tom Mitchell: "Re: [OMPI users] 2 to 1 oversubscription"</a>
<li><strong>Previous message:</strong> <a href="10227.php">Tomislav Maric: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>In reply to:</strong> <a href="10215.php">Pavel Shamis (Pasha): "Re: [OMPI users] Performance difference on OpenMPI, IntelMPI and 	ScaliMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10230.php">Gus Correa: "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on IB"</a>
<li><strong>Reply:</strong> <a href="10230.php">Gus Correa: "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on IB"</a>
<li><strong>Reply:</strong> <a href="10231.php">Craig Tierney: "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on IB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am running openmpi-1.3.3 on my cluster which is using
<br>
OFED-1.4.1 for Infiniband support.  I am comparing performance
<br>
between this version of OpenMPI and Mvapich2, and seeing a
<br>
very large difference in performance.
<br>
<p>The code I am testing is WRF v3.0.1.  I am running the
<br>
12km benchmark.
<br>
<p>The two builds are the exact same codes and configuration
<br>
files.  All I did different was use modules to switch versions
<br>
of MPI, and recompiled the code.
<br>
<p>Performance:
<br>
<p>Cores   Mvapich2    Openmpi
<br>
---------------------------
<br>
&nbsp;&nbsp;&nbsp;8      17.3        13.9
<br>
&nbsp;&nbsp;16      31.7        25.9
<br>
&nbsp;&nbsp;32      62.9        51.6
<br>
&nbsp;&nbsp;64     110.8        92.8
<br>
&nbsp;128     219.2       189.4
<br>
&nbsp;256     384.5       317.8
<br>
&nbsp;512     687.2       516.7
<br>
<p>The performance number is GFlops (so larger is better).
<br>
<p>I am calling openmpi as:
<br>
<p>/opt/openmpi/1.3.3-intel/bin/mpirun  --mca plm_rsh_disable_qrsh 1 --mca btl openib,sm,self \
<br>
-machinefile /tmp/6026489.1.qntest.q/machines -x LD_LIBRARY_PATH -np $NSLOTS /home/ctierney/bin/noaa_affinity ./wrf.exe
<br>
<p>So,
<br>
<p>Is this expected?  Are some common sense optimizations to use?
<br>
Is there a way to verify that I am really using the IB?  When
<br>
I try:
<br>
<p>-mca bta ^tcp,openib,sm,self
<br>
<p>I get the errors:
<br>
--------------------------------------------------------------------------
<br>
No available btl components were found!
<br>
<p>This means that there are no components of this type installed on your
<br>
system or all the components reported that they could not be used.
<br>
<p>This is a fatal error; your MPI process is likely to abort.  Check the
<br>
output of the &quot;ompi_info&quot; command and ensure that components of this
<br>
type are available on your system.  You may also wish to check the
<br>
value of the &quot;component_path&quot; MCA parameter and ensure that it has at
<br>
least one directory that contains valid MCA components.
<br>
--------------------------------------------------------------------------
<br>
<p>But ompi_info is telling me that I have openib support:
<br>
<p>&nbsp;&nbsp;&nbsp;MCA btl: openib (MCA v2.0, API v2.0, Component v1.3.3)
<br>
<p>Note, I did rebuild OFED and put it in a different directory
<br>
and did not rebuild OpenMPI.  However, since ompi_info isn't
<br>
complaining and the libraries are available, I am thinking that
<br>
is isn't a problem.  I could be wrong.
<br>
<p>Thanks,
<br>
Craig
<br>
<pre>
-- 
Craig Tierney (craig.tierney_at_[hidden])
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10229.php">Nifty Tom Mitchell: "Re: [OMPI users] 2 to 1 oversubscription"</a>
<li><strong>Previous message:</strong> <a href="10227.php">Tomislav Maric: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>In reply to:</strong> <a href="10215.php">Pavel Shamis (Pasha): "Re: [OMPI users] Performance difference on OpenMPI, IntelMPI and 	ScaliMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10230.php">Gus Correa: "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on IB"</a>
<li><strong>Reply:</strong> <a href="10230.php">Gus Correa: "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on IB"</a>
<li><strong>Reply:</strong> <a href="10231.php">Craig Tierney: "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on IB"</a>
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
