<?
$subject_val = "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on	IB";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  7 10:01:45 2009" -->
<!-- isoreceived="20090807140145" -->
<!-- sent="Fri, 07 Aug 2009 08:01:09 -0600" -->
<!-- isosent="20090807140109" -->
<!-- name="Craig Tierney" -->
<!-- email="craig.tierney_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on	IB" -->
<!-- id="4A7C33A5.2020300_at_noaa.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4A7C0967.9070206_at_sun.com" -->
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
<strong>From:</strong> Craig Tierney (<em>craig.tierney_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-07 10:01:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10248.php">Craig Tierney: "[OMPI users] Failure trying to use tuned collectives"</a>
<li><strong>Previous message:</strong> <a href="10246.php">Terry Dontje: "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on	IB"</a>
<li><strong>In reply to:</strong> <a href="10238.php">Terry Dontje: "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on	IB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10241.php">Terry Dontje: "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on	IB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Terry Dontje wrote:
<br>
<span class="quotelev1">&gt; Craig,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Did your affinity script bind the processes per socket or linearly to 
</span><br>
<span class="quotelev1">&gt; cores.  If the former you'll want to look at using rankfiles and place 
</span><br>
<span class="quotelev1">&gt; the ranks based on sockets.  TWe have found this especially useful if 
</span><br>
<span class="quotelev1">&gt; you are not running fully subscribed on your machines.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also, if you think the main issue is collectives performance you may 
</span><br>
<span class="quotelev1">&gt; want to try using the hierarchical and SM collectives.  However, be 
</span><br>
<span class="quotelev1">&gt; forewarned we are right now trying to pound out some errors with these 
</span><br>
<span class="quotelev1">&gt; modules.  To enable them you add the following parameters &quot;--mca 
</span><br>
<span class="quotelev1">&gt; coll_hierarch_priority 100 --mca coll_sm_priority 100&quot;.  We would be 
</span><br>
<span class="quotelev1">&gt; very interested in any results you get (failures, improvements, 
</span><br>
<span class="quotelev1">&gt; non-improvements).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Adding these two options causes the code to segfault at startup.
<br>
<p>Craig
<br>
<p><p><p><p><span class="quotelev1">&gt; thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Message: 4
</span><br>
<span class="quotelev2">&gt;&gt; Date: Thu, 06 Aug 2009 17:03:08 -0600
</span><br>
<span class="quotelev2">&gt;&gt; From: Craig Tierney &lt;Craig.Tierney_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Performance question about OpenMPI and
</span><br>
<span class="quotelev2">&gt;&gt;     MVAPICH2 on    IB
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message-ID: &lt;4A7B612C.8070501_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Content-Type: text/plain; charset=ISO-8859-1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A followup....
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Part of problem was affinity.  I had written a script to do processor
</span><br>
<span class="quotelev2">&gt;&gt; and memory affinity (which works fine with MVAPICH2).  It is an
</span><br>
<span class="quotelev2">&gt;&gt; idea that I got from TACC.  However, the script didn't seem to
</span><br>
<span class="quotelev2">&gt;&gt; work correctly with OpenMPI (or I still have bugs).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Setting --mca mpi_paffinity_alone 1 made things better.  However,
</span><br>
<span class="quotelev2">&gt;&gt; the performance is still not as good:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cores   Mvapich2    Openmpi
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------
</span><br>
<span class="quotelev2">&gt;&gt;    8      17.3        17.3
</span><br>
<span class="quotelev2">&gt;&gt;   16      31.7        31.5
</span><br>
<span class="quotelev2">&gt;&gt;   32      62.9        62.8
</span><br>
<span class="quotelev2">&gt;&gt;   64     110.8       108.0
</span><br>
<span class="quotelev2">&gt;&gt;  128     219.2       201.4
</span><br>
<span class="quotelev2">&gt;&gt;  256     384.5       342.7
</span><br>
<span class="quotelev2">&gt;&gt;  512     687.2       537.6
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The performance number is GFlops (so larger is better).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The first few numbers show that the executable is the right
</span><br>
<span class="quotelev2">&gt;&gt; speed.  I verified that IB is being used by using OMB and
</span><br>
<span class="quotelev2">&gt;&gt; checking latency and bandwidth.  Those numbers are what I
</span><br>
<span class="quotelev2">&gt;&gt; expect (3GB/s, 1.5mu/s for QDR).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, the Openmpi version is not scaling as well.  Any
</span><br>
<span class="quotelev2">&gt;&gt; ideas on why that might be the case?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Craig
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10248.php">Craig Tierney: "[OMPI users] Failure trying to use tuned collectives"</a>
<li><strong>Previous message:</strong> <a href="10246.php">Terry Dontje: "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on	IB"</a>
<li><strong>In reply to:</strong> <a href="10238.php">Terry Dontje: "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on	IB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10241.php">Terry Dontje: "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on	IB"</a>
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
