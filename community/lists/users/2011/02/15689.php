<?
$subject_val = "Re: [OMPI users] WRF Problem running in Parallel (jody)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 22 22:59:33 2011" -->
<!-- isoreceived="20110223035933" -->
<!-- sent="Wed, 23 Feb 2011 08:59:28 +0500" -->
<!-- isosent="20110223035928" -->
<!-- name="Ahsan Ali" -->
<!-- email="ahsanshah01_at_[hidden]" -->
<!-- subject="Re: [OMPI users] WRF Problem running in Parallel (jody)" -->
<!-- id="AANLkTim_+KUzX45_8aaN-xy=zrpVBxbA=fDiZc=zaUuF_at_mail.gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="[OMPI users] WRF Problem running in Parallel (jody)" -->
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
<strong>Subject:</strong> Re: [OMPI users] WRF Problem running in Parallel (jody)<br>
<strong>From:</strong> Ahsan Ali (<em>ahsanshah01_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-22 22:59:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15690.php">Prentice Bisbal: "Re: [OMPI users] What's wrong with this code?"</a>
<li><strong>Previous message:</strong> <a href="15688.php">Michael Shuey: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Jody,
<br>
<p>WRF is running well on serial option (i.e single interface) . I am running
<br>
another application HRM using OpenMPI , there is no issue with that and
<br>
application is running on cluster of many nodes. The wrf manual says the
<br>
following about MPI run:
<br>
<p>I*f you have run the model on multiple processors using MPI, you should have
<br>
a number of rsl.out.* and rsl.error.* files. Type &#145;tail rsl.out.0000&#146; to see
<br>
if you get &#145;SUCCESS COMPLETE WRF&#146;. This is a good indication that the model
<br>
has run successfully.*
<br>
<p>*Take a look at either rsl.out.0000 file or other standard out file. This
<br>
file logs the times taken to compute for one model time step, and to write
<br>
one history and restart output:*
<br>
<p>*
<br>
Timing for main: time 2006-01-21_23:55:00 on domain  2:    4.91110 elapsed
<br>
seconds.*
<br>
<p>*Timing for main: time 2006-01-21_23:56:00 on domain  2:    4.73350 elapsed
<br>
seconds.*
<br>
<p>*Timing for main: time 2006-01-21_23:57:00 on domain  2:    4.72360 elapsed
<br>
seconds.*
<br>
<p>*Timing for main: time 2006-01-21_23:57:00 on domain  1:   19.55880 elapsed
<br>
seconds.*
<br>
<p>*and*
<br>
<p>*Timing for Writing wrfout_d02_2006-01-22_00:00:00 for domain 2: 1.17970
<br>
elapsed seconds.*
<br>
<p>*Timing for main: time 2006-01-22_00:00:00 on domain 1: 27.66230 elapsed
<br>
seconds.*
<br>
<p>*Timing for Writing wrfout_d01_2006-01-22_00:00:00 for domain 1: 0.60250
<br>
elapsed seconds.*
<br>
<p>* *
<br>
<p>*If the model did not run to completion, take a look at these standard
<br>
output/error files too. If the model has become numerically unstable, it may
<br>
have violated the CFL criterion (for numerical stability). Check whether
<br>
this is true by typing the following:*
<br>
<p>* *
<br>
<p>*grep cfl rsl.error.* or grep cfl wrf.out*
<br>
<p>*you might see something like these:*
<br>
<p>*5 points exceeded cfl=2 in domain            1 at time   4.200000 *
<br>
<p>*  MAX AT i,j,k:          123          48          3 cfl,w,d(eta)= 4.165821*
<br>
<p>*21 points exceeded cfl=2 in domain            1 at time   4.200000 *
<br>
<p>*  MAX AT i,j,k:          123          49          4 cfl,w,d(eta)= 10.66290*
<br>
<p>But when I check the rsl.out* or rsl.error* there is no indication on any
<br>
error occured ,It seems that the application just didn't start.
<br>
[pmdtest_at_pmd02 em_real]$ tail rsl.out.0000
<br>
&nbsp;WRF NUMBER OF TILES FROM OMP_GET_MAX_THREADS =   8
<br>
&nbsp;WRF TILE   1 IS      1 IE    360 JS      1 JE     25
<br>
&nbsp;WRF TILE   2 IS      1 IE    360 JS     26 JE     50
<br>
&nbsp;WRF TILE   3 IS      1 IE    360 JS     51 JE     74
<br>
&nbsp;WRF TILE   4 IS      1 IE    360 JS     75 JE     98
<br>
&nbsp;WRF TILE   5 IS      1 IE    360 JS     99 JE    122
<br>
&nbsp;WRF TILE   6 IS      1 IE    360 JS    123 JE    146
<br>
&nbsp;WRF TILE   7 IS      1 IE    360 JS    147 JE    170
<br>
&nbsp;WRF TILE   8 IS      1 IE    360 JS    171 JE    195
<br>
&nbsp;WRF NUMBER OF TILES =   8
<br>
<p><p><p>Best Regards,
<br>
<pre>
-- 
Syed Ahsan Ali Bokhari
Electronic Engineer (EE)
Research &amp; Development Division
Pakistan Meteorological Department H-8/4, Islamabad.
Phone # off  +92518358714
Cell # +923155145014
------------------------------------------------------------------------------------------------------------------------
&gt; Hi
&gt; At a first glance i would say this is not a OpenMPI problem,
&gt; but a wrf problem (though io must admit i have no knowledge whatsoever ith
&gt; wrf)
&gt;
&gt; Have you tried running a single instance of wrf.exe?
&gt; Have you tried to run a simple application (like a &quot;hello world&quot;) on your
&gt; nodes?
&gt;
&gt; Jody
&gt;
&gt;
&gt;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15689/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15690.php">Prentice Bisbal: "Re: [OMPI users] What's wrong with this code?"</a>
<li><strong>Previous message:</strong> <a href="15688.php">Michael Shuey: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
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
