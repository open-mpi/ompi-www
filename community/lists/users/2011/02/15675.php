<?
$subject_val = "Re: [OMPI users] WRF Problem running in Parallel";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 22 03:59:12 2011" -->
<!-- isoreceived="20110222085912" -->
<!-- sent="Tue, 22 Feb 2011 09:59:04 +0100" -->
<!-- isosent="20110222085904" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] WRF Problem running in Parallel" -->
<!-- id="AANLkTi=+bE2EZU6ijc0JRC2hJDzB3GjGFP2r_wne=+Q5_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTikXUOJdZ4u33E-S-oQHVR1Q6Y6WU79S_9yrv9q6_at_mail.gmail.com" -->
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
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-22 03:59:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15676.php">Xianglong Kong: "Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?"</a>
<li><strong>Previous message:</strong> <a href="15674.php">Federico Golfr&#232; Andreasi: "Re: [OMPI users] Number of processes and spawn"</a>
<li><strong>In reply to:</strong> <a href="15673.php">Ahsan Ali: "[OMPI users] WRF Problem running in Parallel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15682.php">Gus Correa: "Re: [OMPI users] WRF Problem running in Parallel"</a>
<li><strong>Reply:</strong> <a href="15682.php">Gus Correa: "Re: [OMPI users] WRF Problem running in Parallel"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
At a first glance i would say this is not a OpenMPI problem,
<br>
but a wrf problem (though io must admit i have no knowledge whatsoever ith wrf)
<br>
<p>Have you tried running a single instance of wrf.exe?
<br>
Have you tried to run a simple application (like a &quot;hello world&quot;) on your nodes?
<br>
<p>Jody
<br>
<p><p>On Tue, Feb 22, 2011 at 7:37 AM, Ahsan Ali &lt;ahsanshah01_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; &#160;I an stuck in a problem that is regarding the running for Weather research
</span><br>
<span class="quotelev1">&gt; and Forecasting Model (WRFV 3.2.1). I get the following error while running
</span><br>
<span class="quotelev1">&gt; with mpirun. Any help would be highly appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [pmdtest_at_pmd02 em_real]$ mpirun -np 4 wrf.exe
</span><br>
<span class="quotelev1">&gt; starting wrf task 0 of 4
</span><br>
<span class="quotelev1">&gt; starting wrf task 1 of 4
</span><br>
<span class="quotelev1">&gt; starting wrf task 3 of 4
</span><br>
<span class="quotelev1">&gt; starting wrf task 2 of 4
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 3 with PID 6044 on node pmd02.pakmet.com
</span><br>
<span class="quotelev1">&gt; exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Syed Ahsan Ali Bokhari
</span><br>
<span class="quotelev1">&gt; Electronic Engineer (EE)
</span><br>
<span class="quotelev1">&gt; Research &amp; Development Division
</span><br>
<span class="quotelev1">&gt; Pakistan Meteorological Department H-8/4, Islamabad.
</span><br>
<span class="quotelev1">&gt; Phone&#160;#&#160;off &#160;+92518358714
</span><br>
<span class="quotelev1">&gt; Cell # +923155145014
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15676.php">Xianglong Kong: "Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?"</a>
<li><strong>Previous message:</strong> <a href="15674.php">Federico Golfr&#232; Andreasi: "Re: [OMPI users] Number of processes and spawn"</a>
<li><strong>In reply to:</strong> <a href="15673.php">Ahsan Ali: "[OMPI users] WRF Problem running in Parallel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15682.php">Gus Correa: "Re: [OMPI users] WRF Problem running in Parallel"</a>
<li><strong>Reply:</strong> <a href="15682.php">Gus Correa: "Re: [OMPI users] WRF Problem running in Parallel"</a>
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
