<?
$subject_val = "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on IB";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  6 18:47:49 2009" -->
<!-- isoreceived="20090806224749" -->
<!-- sent="Thu, 06 Aug 2009 18:47:39 -0400" -->
<!-- isosent="20090806224739" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on IB" -->
<!-- id="4A7B5D8B.5060602_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4A7B4A55.4080404_at_noaa.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on IB<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-06 18:47:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10231.php">Craig Tierney: "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on IB"</a>
<li><strong>Previous message:</strong> <a href="10229.php">Nifty Tom Mitchell: "Re: [OMPI users] 2 to 1 oversubscription"</a>
<li><strong>In reply to:</strong> <a href="10228.php">Craig Tierney: "[OMPI users] Performance question about OpenMPI and MVAPICH2 on IB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10232.php">Craig Tierney: "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on IB"</a>
<li><strong>Reply:</strong> <a href="10232.php">Craig Tierney: "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on IB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Craig, list
<br>
<p>I suppose WRF uses MPI collective calls (MPI_Reduce,
<br>
MPI_Bcast, MPI_Alltoall etc),
<br>
just like the climate models we run here do.
<br>
A recursive grep on the source code will tell.
<br>
<p>If that is the case, you may need to tune the collectives dynamically.
<br>
We are experimenting with tuned collectives here also.
<br>
<p>Specifically, we had a scaling problem with the MITgcm
<br>
(also running on an IB cluster)
<br>
that is probably due to collectives.
<br>
Similar problems were reported on this list before,
<br>
with computational chemistry software.
<br>
See these threads:
<br>
<a href="http://www.open-mpi.org/community/lists/users/2009/07/10045.php">http://www.open-mpi.org/community/lists/users/2009/07/10045.php</a>
<br>
<a href="http://www.open-mpi.org/community/lists/users/2009/05/9419.php">http://www.open-mpi.org/community/lists/users/2009/05/9419.php</a>
<br>
<p>If WRF outputs timing information, particularly the time spent on MPI
<br>
routines, you may also want to compare how the OpenMPI and
<br>
MVAPICH versions fare w.r.t. MPI collectives.
<br>
<p>I hope this helps.
<br>
<p>Gus Correa
<br>
---------------------------------------------------------------------
<br>
Gustavo Correa
<br>
Lamont-Doherty Earth Observatory - Columbia University
<br>
Palisades, NY, 10964-8000 - USA
<br>
---------------------------------------------------------------------
<br>
<p><p><p>Craig Tierney wrote:
<br>
<span class="quotelev1">&gt; I am running openmpi-1.3.3 on my cluster which is using
</span><br>
<span class="quotelev1">&gt; OFED-1.4.1 for Infiniband support.  I am comparing performance
</span><br>
<span class="quotelev1">&gt; between this version of OpenMPI and Mvapich2, and seeing a
</span><br>
<span class="quotelev1">&gt; very large difference in performance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The code I am testing is WRF v3.0.1.  I am running the
</span><br>
<span class="quotelev1">&gt; 12km benchmark.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The two builds are the exact same codes and configuration
</span><br>
<span class="quotelev1">&gt; files.  All I did different was use modules to switch versions
</span><br>
<span class="quotelev1">&gt; of MPI, and recompiled the code.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Performance:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cores   Mvapich2    Openmpi
</span><br>
<span class="quotelev1">&gt; ---------------------------
</span><br>
<span class="quotelev1">&gt;    8      17.3        13.9
</span><br>
<span class="quotelev1">&gt;   16      31.7        25.9
</span><br>
<span class="quotelev1">&gt;   32      62.9        51.6
</span><br>
<span class="quotelev1">&gt;   64     110.8        92.8
</span><br>
<span class="quotelev1">&gt;  128     219.2       189.4
</span><br>
<span class="quotelev1">&gt;  256     384.5       317.8
</span><br>
<span class="quotelev1">&gt;  512     687.2       516.7
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The performance number is GFlops (so larger is better).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am calling openmpi as:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/1.3.3-intel/bin/mpirun  --mca plm_rsh_disable_qrsh 1 --mca btl openib,sm,self \
</span><br>
<span class="quotelev1">&gt; -machinefile /tmp/6026489.1.qntest.q/machines -x LD_LIBRARY_PATH -np $NSLOTS /home/ctierney/bin/noaa_affinity ./wrf.exe
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is this expected?  Are some common sense optimizations to use?
</span><br>
<span class="quotelev1">&gt; Is there a way to verify that I am really using the IB?  When
</span><br>
<span class="quotelev1">&gt; I try:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -mca bta ^tcp,openib,sm,self
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I get the errors:
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; No available btl components were found!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This means that there are no components of this type installed on your
</span><br>
<span class="quotelev1">&gt; system or all the components reported that they could not be used.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is a fatal error; your MPI process is likely to abort.  Check the
</span><br>
<span class="quotelev1">&gt; output of the &quot;ompi_info&quot; command and ensure that components of this
</span><br>
<span class="quotelev1">&gt; type are available on your system.  You may also wish to check the
</span><br>
<span class="quotelev1">&gt; value of the &quot;component_path&quot; MCA parameter and ensure that it has at
</span><br>
<span class="quotelev1">&gt; least one directory that contains valid MCA components.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But ompi_info is telling me that I have openib support:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    MCA btl: openib (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note, I did rebuild OFED and put it in a different directory
</span><br>
<span class="quotelev1">&gt; and did not rebuild OpenMPI.  However, since ompi_info isn't
</span><br>
<span class="quotelev1">&gt; complaining and the libraries are available, I am thinking that
</span><br>
<span class="quotelev1">&gt; is isn't a problem.  I could be wrong.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Craig
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10231.php">Craig Tierney: "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on IB"</a>
<li><strong>Previous message:</strong> <a href="10229.php">Nifty Tom Mitchell: "Re: [OMPI users] 2 to 1 oversubscription"</a>
<li><strong>In reply to:</strong> <a href="10228.php">Craig Tierney: "[OMPI users] Performance question about OpenMPI and MVAPICH2 on IB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10232.php">Craig Tierney: "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on IB"</a>
<li><strong>Reply:</strong> <a href="10232.php">Craig Tierney: "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on IB"</a>
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
