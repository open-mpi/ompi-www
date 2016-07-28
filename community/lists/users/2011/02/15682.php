<?
$subject_val = "Re: [OMPI users] WRF Problem running in Parallel";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 22 13:31:40 2011" -->
<!-- isoreceived="20110222183140" -->
<!-- sent="Tue, 22 Feb 2011 13:31:26 -0500" -->
<!-- isosent="20110222183126" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] WRF Problem running in Parallel" -->
<!-- id="4D6400FE.5040403_at_ldeo.columbia.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="AANLkTi=+bE2EZU6ijc0JRC2hJDzB3GjGFP2r_wne=+Q5_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] WRF Problem running in Parallel<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-22 13:31:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15683.php">Xianglong Kong: "Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?"</a>
<li><strong>Previous message:</strong> <a href="15681.php">Barrett, Brian W: "Re: [OMPI users] nonblock alternative to MPI_Win_complete"</a>
<li><strong>In reply to:</strong> <a href="15675.php">jody: "Re: [OMPI users] WRF Problem running in Parallel"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ahsan, Jody
<br>
<p>Just a guess that this may be a stack size problem.
<br>
Did you try to run WRF with unlimited stack size?
<br>
Also, does your machine have enough memory to run WRF?
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
<p><p>jody wrote:
<br>
<span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; At a first glance i would say this is not a OpenMPI problem,
</span><br>
<span class="quotelev1">&gt; but a wrf problem (though io must admit i have no knowledge whatsoever ith wrf)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Have you tried running a single instance of wrf.exe?
</span><br>
<span class="quotelev1">&gt; Have you tried to run a simple application (like a &quot;hello world&quot;) on your nodes?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jody
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Feb 22, 2011 at 7:37 AM, Ahsan Ali &lt;ahsanshah01_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;  I an stuck in a problem that is regarding the running for Weather research
</span><br>
<span class="quotelev2">&gt;&gt; and Forecasting Model (WRFV 3.2.1). I get the following error while running
</span><br>
<span class="quotelev2">&gt;&gt; with mpirun. Any help would be highly appreciated.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [pmdtest_at_pmd02 em_real]$ mpirun -np 4 wrf.exe
</span><br>
<span class="quotelev2">&gt;&gt; starting wrf task 0 of 4
</span><br>
<span class="quotelev2">&gt;&gt; starting wrf task 1 of 4
</span><br>
<span class="quotelev2">&gt;&gt; starting wrf task 3 of 4
</span><br>
<span class="quotelev2">&gt;&gt; starting wrf task 2 of 4
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that process rank 3 with PID 6044 on node pmd02.pakmet.com
</span><br>
<span class="quotelev2">&gt;&gt; exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Syed Ahsan Ali Bokhari
</span><br>
<span class="quotelev2">&gt;&gt; Electronic Engineer (EE)
</span><br>
<span class="quotelev2">&gt;&gt; Research &amp; Development Division
</span><br>
<span class="quotelev2">&gt;&gt; Pakistan Meteorological Department H-8/4, Islamabad.
</span><br>
<span class="quotelev2">&gt;&gt; Phone # off  +92518358714
</span><br>
<span class="quotelev2">&gt;&gt; Cell # +923155145014
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="15683.php">Xianglong Kong: "Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?"</a>
<li><strong>Previous message:</strong> <a href="15681.php">Barrett, Brian W: "Re: [OMPI users] nonblock alternative to MPI_Win_complete"</a>
<li><strong>In reply to:</strong> <a href="15675.php">jody: "Re: [OMPI users] WRF Problem running in Parallel"</a>
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
