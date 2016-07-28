<?
$subject_val = "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on	IB";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  7 07:02:10 2009" -->
<!-- isoreceived="20090807110210" -->
<!-- sent="Fri, 07 Aug 2009 07:00:55 -0400" -->
<!-- isosent="20090807110055" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on	IB" -->
<!-- id="4A7C0967.9070206_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="mailman.12814.1249600278.6040.users_at_open-mpi.org" -->
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
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-07 07:00:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10239.php">neeraj_at_[hidden]: "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2	on	IB"</a>
<li><strong>Previous message:</strong> <a href="10237.php">Terry Frankcombe: "[OMPI users] Automated tuning tool"</a>
<li><strong>Maybe in reply to:</strong> <a href="10233.php">Gerry Creager: "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on	IB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10239.php">neeraj_at_[hidden]: "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2	on	IB"</a>
<li><strong>Reply:</strong> <a href="10239.php">neeraj_at_[hidden]: "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2	on	IB"</a>
<li><strong>Reply:</strong> <a href="10243.php">Craig Tierney: "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on	IB"</a>
<li><strong>Reply:</strong> <a href="10247.php">Craig Tierney: "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on	IB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Craig,
<br>
<p>Did your affinity script bind the processes per socket or linearly to cores.  If the former you'll want to look at using rankfiles and place the ranks based on sockets.  TWe have found this especially useful if you are not running fully subscribed on your machines.
<br>
<p>Also, if you think the main issue is collectives performance you may want to try using the hierarchical and SM collectives.  However, be forewarned we are right now trying to pound out some errors with these modules.  To enable them you add the following parameters &quot;--mca coll_hierarch_priority 100 --mca coll_sm_priority 100&quot;.  We would be very interested in any results you get (failures, improvements, non-improvements).
<br>
<p>thanks,
<br>
<p>--td
<br>
<p><span class="quotelev1">&gt; Message: 4
</span><br>
<span class="quotelev1">&gt; Date: Thu, 06 Aug 2009 17:03:08 -0600
</span><br>
<span class="quotelev1">&gt; From: Craig Tierney &lt;Craig.Tierney_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Performance question about OpenMPI and
</span><br>
<span class="quotelev1">&gt; 	MVAPICH2 on	IB
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;4A7B612C.8070501_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=ISO-8859-1
</span><br>
<span class="quotelev1">&gt;
</span><br>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10239.php">neeraj_at_[hidden]: "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2	on	IB"</a>
<li><strong>Previous message:</strong> <a href="10237.php">Terry Frankcombe: "[OMPI users] Automated tuning tool"</a>
<li><strong>Maybe in reply to:</strong> <a href="10233.php">Gerry Creager: "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on	IB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10239.php">neeraj_at_[hidden]: "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2	on	IB"</a>
<li><strong>Reply:</strong> <a href="10239.php">neeraj_at_[hidden]: "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2	on	IB"</a>
<li><strong>Reply:</strong> <a href="10243.php">Craig Tierney: "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on	IB"</a>
<li><strong>Reply:</strong> <a href="10247.php">Craig Tierney: "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on	IB"</a>
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
