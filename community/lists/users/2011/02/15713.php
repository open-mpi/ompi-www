<?
$subject_val = "Re: [OMPI users] WRF Problem running in Parallel (Gus Correa)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 23 22:29:18 2011" -->
<!-- isoreceived="20110224032918" -->
<!-- sent="Wed, 23 Feb 2011 22:29:05 -0500" -->
<!-- isosent="20110224032905" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] WRF Problem running in Parallel (Gus Correa)" -->
<!-- id="4D65D081.6010701_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTimh11OiaDAiDgkkVSNZg-Wu9r=5uYUf41vivN=i_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] WRF Problem running in Parallel (Gus Correa)<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-23 22:29:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15714.php">Li Zuwei: "Re: [OMPI users] Performance Issues with OpenMPI v1.5.1 MPI_Barrier on Windows XP SP3"</a>
<li><strong>Previous message:</strong> <a href="15712.php">Ahsan Ali: "Re: [OMPI users] WRF Problem running in Parallel (Gus Correa)"</a>
<li><strong>In reply to:</strong> <a href="15712.php">Ahsan Ali: "Re: [OMPI users] WRF Problem running in Parallel (Gus Correa)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ashan
<br>
<p>Small stacksize sometimes causes segmentation fault,
<br>
specially on large programs like WRF.
<br>
However, it is not the only possible cause, of course.
<br>
<p>Are you sure you set the stacksize unlimited on *all* nodes
<br>
where WRF ran?
<br>
It may be tricky.
<br>
<p>Ask your system administrator to do it on a permanent
<br>
basis on /etc/security/limits.conf.
<br>
See 'man limits.conf'.
<br>
<p>I hope it helps.
<br>
Gus Correa
<br>
<p><p>Ahsan Ali wrote:
<br>
<span class="quotelev1">&gt; Hello Gus, Jody
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  The system has enough memory. I unlimited the stack size before 
</span><br>
<span class="quotelev1">&gt; runnning WRF by the command *ulimit -s unlimited*.But he problem occured.
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Hi Ahsan, Jody
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Just a guess that this may be a stack size problem.
</span><br>
<span class="quotelev1">&gt;     Did you try to run WRF with unlimited stack size?
</span><br>
<span class="quotelev1">&gt;     Also, does your machine have enough memory to run WRF?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     I hope this helps,
</span><br>
<span class="quotelev1">&gt;     Gus Correa
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     jody wrote:
</span><br>
<span class="quotelev2">&gt;      &gt; Hi
</span><br>
<span class="quotelev2">&gt;      &gt; At a first glance i would say this is not a OpenMPI problem,
</span><br>
<span class="quotelev2">&gt;      &gt; but a wrf problem (though io must admit i have no knowledge
</span><br>
<span class="quotelev1">&gt;     whatsoever ith wrf)
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev2">&gt;      &gt; Have you tried running a single instance of wrf.exe?
</span><br>
<span class="quotelev2">&gt;      &gt; Have you tried to run a simple application (like a &quot;hello world&quot;)
</span><br>
<span class="quotelev1">&gt;     on your nodes?
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev2">&gt;      &gt; Jody
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev2">&gt;      &gt; On Tue, Feb 22, 2011 at 7:37 AM, Ahsan Ali &lt;ahsanshah01_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:ahsanshah01_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;  I an stuck in a problem that is regarding the running for
</span><br>
<span class="quotelev1">&gt;     Weather research
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; and Forecasting Model (WRFV 3.2.1). I get the following error
</span><br>
<span class="quotelev1">&gt;     while running
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; with mpirun. Any help would be highly appreciated.
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; [pmdtest_at_pmd02 em_real]$ mpirun -np 4 wrf.exe
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; starting wrf task 0 of 4
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; starting wrf task 1 of 4
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; starting wrf task 3 of 4
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; starting wrf task 2 of 4
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;
</span><br>
<span class="quotelev1">&gt;     --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; mpirun noticed that process rank 3 with PID 6044 on node
</span><br>
<span class="quotelev1">&gt;     pmd02.pakmet.com &lt;<a href="http://pmd02.pakmet.com">http://pmd02.pakmet.com</a>&gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; --
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; Syed Ahsan Ali Bokhari
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; Electronic Engineer (EE)
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; Research &amp; Development Division
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; Pakistan Meteorological Department H-8/4, Islamabad.
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; Phone # off  +92518358714
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; Cell # +923155145014
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;
</span><br>
<span class="quotelev1">&gt;     Dear Jody,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     WRF is running well on serial option (i.e single interface) . I am
</span><br>
<span class="quotelev1">&gt;     running
</span><br>
<span class="quotelev1">&gt;     another application HRM using OpenMPI , there is no issue with that and
</span><br>
<span class="quotelev1">&gt;     application is running on cluster of many nodes. The wrf manual says the
</span><br>
<span class="quotelev1">&gt;     following about MPI run:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     I*f you have run the model on multiple processors using MPI, you
</span><br>
<span class="quotelev1">&gt;     should have
</span><br>
<span class="quotelev1">&gt;     a number of rsl.out.* and rsl.error.* files. Type ?tail
</span><br>
<span class="quotelev1">&gt;     rsl.out.0000? to see
</span><br>
<span class="quotelev1">&gt;     if you get ?SUCCESS COMPLETE WRF?. This is a good indication that
</span><br>
<span class="quotelev1">&gt;     the model
</span><br>
<span class="quotelev1">&gt;     has run successfully.*
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     *Take a look at either rsl.out.0000 file or other standard out file.
</span><br>
<span class="quotelev1">&gt;     This
</span><br>
<span class="quotelev1">&gt;     file logs the times taken to compute for one model time step, and to
</span><br>
<span class="quotelev1">&gt;     write
</span><br>
<span class="quotelev1">&gt;     one history and restart output:*
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     *
</span><br>
<span class="quotelev1">&gt;     Timing for main: time 2006-01-21_23:55:00 on domain  2:    4.91110
</span><br>
<span class="quotelev1">&gt;     elapsed
</span><br>
<span class="quotelev1">&gt;     seconds.*
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     *Timing for main: time 2006-01-21_23:56:00 on domain  2:    4.73350
</span><br>
<span class="quotelev1">&gt;     elapsed
</span><br>
<span class="quotelev1">&gt;     seconds.*
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     *Timing for main: time 2006-01-21_23:57:00 on domain  2:    4.72360
</span><br>
<span class="quotelev1">&gt;     elapsed
</span><br>
<span class="quotelev1">&gt;     seconds.*
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     *Timing for main: time 2006-01-21_23:57:00 on domain  1:   19.55880
</span><br>
<span class="quotelev1">&gt;     elapsed
</span><br>
<span class="quotelev1">&gt;     seconds.*
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     *and*
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     *Timing for Writing wrfout_d02_2006-01-22_00:00:00 for domain 2: 1.17970
</span><br>
<span class="quotelev1">&gt;     elapsed seconds.*
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     *Timing for main: time 2006-01-22_00:00:00 on domain 1: 27.66230 elapsed
</span><br>
<span class="quotelev1">&gt;     seconds.*
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     *Timing for Writing wrfout_d01_2006-01-22_00:00:00 for domain 1: 0.60250
</span><br>
<span class="quotelev1">&gt;     elapsed seconds.*
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     * *
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     *If the model did not run to completion, take a look at these standard
</span><br>
<span class="quotelev1">&gt;     output/error files too. If the model has become numerically
</span><br>
<span class="quotelev1">&gt;     unstable, it may
</span><br>
<span class="quotelev1">&gt;     have violated the CFL criterion (for numerical stability). Check whether
</span><br>
<span class="quotelev1">&gt;     this is true by typing the following:*
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     * *
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     *grep cfl rsl.error.* or grep cfl wrf.out*
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     *you might see something like these:*
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     *5 points exceeded cfl=2 in domain            1 at time   4.200000 *
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     *  MAX AT i,j,k:          123          48          3 cfl,w,d(eta)=
</span><br>
<span class="quotelev1">&gt;     4.165821*
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     *21 points exceeded cfl=2 in domain            1 at time   4.200000 *
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     *  MAX AT i,j,k:          123          49          4 cfl,w,d(eta)=
</span><br>
<span class="quotelev1">&gt;     10.66290*
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     But when I check the rsl.out* or rsl.error* there is no indication
</span><br>
<span class="quotelev1">&gt;     on any
</span><br>
<span class="quotelev1">&gt;     error occured ,It seems that the application just didn't start.
</span><br>
<span class="quotelev1">&gt;     [pmdtest_at_pmd02 em_real]$ tail rsl.out.0000
</span><br>
<span class="quotelev1">&gt;      WRF NUMBER OF TILES FROM OMP_GET_MAX_THREADS =   8
</span><br>
<span class="quotelev1">&gt;      WRF TILE   1 IS      1 IE    360 JS      1 JE     25
</span><br>
<span class="quotelev1">&gt;      WRF TILE   2 IS      1 IE    360 JS     26 JE     50
</span><br>
<span class="quotelev1">&gt;      WRF TILE   3 IS      1 IE    360 JS     51 JE     74
</span><br>
<span class="quotelev1">&gt;      WRF TILE   4 IS      1 IE    360 JS     75 JE     98
</span><br>
<span class="quotelev1">&gt;      WRF TILE   5 IS      1 IE    360 JS     99 JE    122
</span><br>
<span class="quotelev1">&gt;      WRF TILE   6 IS      1 IE    360 JS    123 JE    146
</span><br>
<span class="quotelev1">&gt;      WRF TILE   7 IS      1 IE    360 JS    147 JE    170
</span><br>
<span class="quotelev1">&gt;      WRF TILE   8 IS      1 IE    360 JS    171 JE    195
</span><br>
<span class="quotelev1">&gt;      WRF NUMBER OF TILES =   8
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Syed Ahsan Ali Bokhari
</span><br>
<span class="quotelev1">&gt; Electronic Engineer (EE)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Research &amp; Development Division
</span><br>
<span class="quotelev1">&gt; Pakistan Meteorological Department H-8/4, Islamabad.
</span><br>
<span class="quotelev1">&gt; Phone # off  +92518358714
</span><br>
<span class="quotelev1">&gt; Cell # +923155145014
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="15714.php">Li Zuwei: "Re: [OMPI users] Performance Issues with OpenMPI v1.5.1 MPI_Barrier on Windows XP SP3"</a>
<li><strong>Previous message:</strong> <a href="15712.php">Ahsan Ali: "Re: [OMPI users] WRF Problem running in Parallel (Gus Correa)"</a>
<li><strong>In reply to:</strong> <a href="15712.php">Ahsan Ali: "Re: [OMPI users] WRF Problem running in Parallel (Gus Correa)"</a>
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
