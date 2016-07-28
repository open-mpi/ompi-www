<?
$subject_val = "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on	IB";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  6 19:11:17 2009" -->
<!-- isoreceived="20090806231117" -->
<!-- sent="Thu, 06 Aug 2009 18:11:08 -0500" -->
<!-- isosent="20090806231108" -->
<!-- name="Gerry Creager" -->
<!-- email="gerry.creager_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on	IB" -->
<!-- id="4A7B630C.1050407_at_tamu.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4A7B612C.8070501_at_noaa.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on	IB<br>
<strong>From:</strong> Gerry Creager (<em>gerry.creager_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-06 19:11:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10234.php">Jeff Squyres: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>Previous message:</strong> <a href="10232.php">Craig Tierney: "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on IB"</a>
<li><strong>In reply to:</strong> <a href="10231.php">Craig Tierney: "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on IB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10238.php">Terry Dontje: "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on	IB"</a>
<li><strong>Maybe reply:</strong> <a href="10238.php">Terry Dontje: "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on	IB"</a>
<li><strong>Maybe reply:</strong> <a href="10241.php">Terry Dontje: "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on	IB"</a>
<li><strong>Maybe reply:</strong> <a href="10246.php">Terry Dontje: "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on	IB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Craig,
<br>
<p>Let me look at your script, if you'd like... I may be able to help 
<br>
there.  I've also been seeing some &quot;interesting results for WRF on 
<br>
OpenMPI, and we may want to see if we're taking complimentary approaches...
<br>
<p>gerry
<br>
<p>Craig Tierney wrote:
<br>
<span class="quotelev1">&gt; A followup....
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Part of problem was affinity.  I had written a script to do processor
</span><br>
<span class="quotelev1">&gt; and memory affinity (which works fine with MVAPICH2).  It is an
</span><br>
<span class="quotelev1">&gt; idea that I got from TACC.  However, the script didn't seem to
</span><br>
<span class="quotelev1">&gt; work correctly with OpenMPI (or I still have bugs).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Setting --mca mpi_paffinity_alone 1 made things better.  However,
</span><br>
<span class="quotelev1">&gt; the performance is still not as good:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cores   Mvapich2    Openmpi
</span><br>
<span class="quotelev1">&gt; ---------------------------
</span><br>
<span class="quotelev1">&gt;    8      17.3        17.3
</span><br>
<span class="quotelev1">&gt;   16      31.7        31.5
</span><br>
<span class="quotelev1">&gt;   32      62.9        62.8
</span><br>
<span class="quotelev1">&gt;   64     110.8       108.0
</span><br>
<span class="quotelev1">&gt;  128     219.2       201.4
</span><br>
<span class="quotelev1">&gt;  256     384.5       342.7
</span><br>
<span class="quotelev1">&gt;  512     687.2       537.6
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The performance number is GFlops (so larger is better).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The first few numbers show that the executable is the right
</span><br>
<span class="quotelev1">&gt; speed.  I verified that IB is being used by using OMB and
</span><br>
<span class="quotelev1">&gt; checking latency and bandwidth.  Those numbers are what I
</span><br>
<span class="quotelev1">&gt; expect (3GB/s, 1.5mu/s for QDR).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, the Openmpi version is not scaling as well.  Any
</span><br>
<span class="quotelev1">&gt; ideas on why that might be the case?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Craig
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Craig Tierney wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I am running openmpi-1.3.3 on my cluster which is using
</span><br>
<span class="quotelev2">&gt;&gt; OFED-1.4.1 for Infiniband support.  I am comparing performance
</span><br>
<span class="quotelev2">&gt;&gt; between this version of OpenMPI and Mvapich2, and seeing a
</span><br>
<span class="quotelev2">&gt;&gt; very large difference in performance.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The code I am testing is WRF v3.0.1.  I am running the
</span><br>
<span class="quotelev2">&gt;&gt; 12km benchmark.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The two builds are the exact same codes and configuration
</span><br>
<span class="quotelev2">&gt;&gt; files.  All I did different was use modules to switch versions
</span><br>
<span class="quotelev2">&gt;&gt; of MPI, and recompiled the code.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Performance:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cores   Mvapich2    Openmpi
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------
</span><br>
<span class="quotelev2">&gt;&gt;    8      17.3        13.9
</span><br>
<span class="quotelev2">&gt;&gt;   16      31.7        25.9
</span><br>
<span class="quotelev2">&gt;&gt;   32      62.9        51.6
</span><br>
<span class="quotelev2">&gt;&gt;   64     110.8        92.8
</span><br>
<span class="quotelev2">&gt;&gt;  128     219.2       189.4
</span><br>
<span class="quotelev2">&gt;&gt;  256     384.5       317.8
</span><br>
<span class="quotelev2">&gt;&gt;  512     687.2       516.7
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The performance number is GFlops (so larger is better).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am calling openmpi as:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /opt/openmpi/1.3.3-intel/bin/mpirun  --mca plm_rsh_disable_qrsh 1 --mca btl openib,sm,self \
</span><br>
<span class="quotelev2">&gt;&gt; -machinefile /tmp/6026489.1.qntest.q/machines -x LD_LIBRARY_PATH -np $NSLOTS /home/ctierney/bin/noaa_affinity ./wrf.exe
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is this expected?  Are some common sense optimizations to use?
</span><br>
<span class="quotelev2">&gt;&gt; Is there a way to verify that I am really using the IB?  When
</span><br>
<span class="quotelev2">&gt;&gt; I try:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -mca bta ^tcp,openib,sm,self
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I get the errors:
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; No available btl components were found!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This means that there are no components of this type installed on your
</span><br>
<span class="quotelev2">&gt;&gt; system or all the components reported that they could not be used.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is a fatal error; your MPI process is likely to abort.  Check the
</span><br>
<span class="quotelev2">&gt;&gt; output of the &quot;ompi_info&quot; command and ensure that components of this
</span><br>
<span class="quotelev2">&gt;&gt; type are available on your system.  You may also wish to check the
</span><br>
<span class="quotelev2">&gt;&gt; value of the &quot;component_path&quot; MCA parameter and ensure that it has at
</span><br>
<span class="quotelev2">&gt;&gt; least one directory that contains valid MCA components.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But ompi_info is telling me that I have openib support:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    MCA btl: openib (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Note, I did rebuild OFED and put it in a different directory
</span><br>
<span class="quotelev2">&gt;&gt; and did not rebuild OpenMPI.  However, since ompi_info isn't
</span><br>
<span class="quotelev2">&gt;&gt; complaining and the libraries are available, I am thinking that
</span><br>
<span class="quotelev2">&gt;&gt; is isn't a problem.  I could be wrong.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Craig
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
Gerry Creager -- gerry.creager_at_[hidden]
Texas Mesonet -- AATLT, Texas A&amp;M University
Cell: 979.229.5301 Office: 979.458.4020 FAX: 979.862.3983
Office: 1700 Research Parkway Ste 160, TAMU, College Station, TX 77843
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10234.php">Jeff Squyres: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>Previous message:</strong> <a href="10232.php">Craig Tierney: "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on IB"</a>
<li><strong>In reply to:</strong> <a href="10231.php">Craig Tierney: "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on IB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10238.php">Terry Dontje: "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on	IB"</a>
<li><strong>Maybe reply:</strong> <a href="10238.php">Terry Dontje: "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on	IB"</a>
<li><strong>Maybe reply:</strong> <a href="10241.php">Terry Dontje: "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on	IB"</a>
<li><strong>Maybe reply:</strong> <a href="10246.php">Terry Dontje: "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on	IB"</a>
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
