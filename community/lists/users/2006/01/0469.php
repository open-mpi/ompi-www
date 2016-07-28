<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jan  4 08:26:06 2006" -->
<!-- isoreceived="20060104132606" -->
<!-- sent="Wed, 4 Jan 2006 14:26:00 +0100 (MET)" -->
<!-- isosent="20060104132600" -->
<!-- name="Carsten Kutzner" -->
<!-- email="ckutzne_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet" -->
<!-- id="Pine.OSF.4.58.0601041155030.247487_at_gwdu70.gwdg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.GSO.4.62.0601030914000.24586_at_enterprise" -->
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
<strong>From:</strong> Carsten Kutzner (<em>ckutzne_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-04 08:26:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0470.php">Graham E Fagg: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>Previous message:</strong> <a href="0468.php">Carsten Kutzner: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>In reply to:</strong> <a href="0460.php">Graham E Fagg: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0470.php">Graham E Fagg: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>Reply:</strong> <a href="0470.php">Graham E Fagg: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Graham,
<br>
<p>here are the all-to-all test results with the modification to the decision
<br>
routine you suggested yesterday. Now the routine behaves nicely for 128
<br>
and 256 float messages on 128 CPUs! For the other sizes one probably wants
<br>
to keep the original algorithm, since it is faster there. However I have
<br>
the feeling that for messages &gt;= 4096 floats there still exists the old
<br>
problem since the execution times are so variable there (note that the
<br>
standard deviation rises by more than a factor of 10 when going from 2048
<br>
to 4096 floats.) If you need additional test results to tune the decision
<br>
functions please let me know.
<br>
<p>Carsten
<br>
<p><p>OMPI tuned all-to-all with modification:
<br>
========================================
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mesg size  time in seconds
<br>
#CPUs     floats  average   std.dev.    min.      max.
<br>
&nbsp;128           1  0.001253  0.000074    0.001141  0.001470
<br>
&nbsp;128           2  0.023507  0.000563    0.022562  0.024761
<br>
&nbsp;128           4  0.023435  0.000426    0.022582  0.024166
<br>
&nbsp;128           8  0.023438  0.000359    0.022904  0.024104
<br>
&nbsp;128          16  0.023664  0.000438    0.022844  0.024670
<br>
&nbsp;128          32  0.024136  0.000463    0.023297  0.025117
<br>
&nbsp;128          64  0.024704  0.000535    0.023727  0.026030
<br>
&nbsp;128         128  0.025750  0.000525    0.024592  0.026799 *
<br>
&nbsp;128         256  0.028862  0.000683    0.027389  0.030168 *
<br>
&nbsp;128         512  0.035869  0.001214    0.034067  0.038655
<br>
&nbsp;128        1024  0.046528  0.001722    0.043549  0.050432
<br>
&nbsp;128        2048  0.072388  0.007032    0.066708  0.104358
<br>
&nbsp;128        4096  0.217678  0.097312    0.135113  0.409431
<br>
&nbsp;128        8192  0.378586  0.090267    0.297878  0.577771
<br>
&nbsp;128       16384  0.567473  0.105083    0.483573  0.735509
<br>
&nbsp;128       32768  1.151343  0.146547    0.937150  1.404478
<br>
&nbsp;128       65536  2.298998  0.169669    1.983286  2.572027
<br>
&nbsp;128      131072  4.070989  0.159958    3.691039  4.373587
<br>
<p><p><p><span class="quotelev2">&gt; &gt; OMPI tuned all-to-all:
</span><br>
<span class="quotelev2">&gt; &gt; ======================
</span><br>
<span class="quotelev2">&gt; &gt;       mesg size  time in seconds
</span><br>
<span class="quotelev2">&gt; &gt; #CPUs     floats  average   std.dev.    min.      max.
</span><br>
<span class="quotelev2">&gt; &gt; 128           1  0.001288  0.000102    0.001077  0.001512
</span><br>
<span class="quotelev2">&gt; &gt; 128           2  0.008391  0.000400    0.007861  0.009958
</span><br>
<span class="quotelev2">&gt; &gt; 128           4  0.008403  0.000237    0.008095  0.009018
</span><br>
<span class="quotelev2">&gt; &gt; 128           8  0.008228  0.000942    0.003801  0.008810
</span><br>
<span class="quotelev2">&gt; &gt; 128          16  0.008503  0.000191    0.008233  0.008839
</span><br>
<span class="quotelev2">&gt; &gt; 128          32  0.008656  0.000271    0.008084  0.009177
</span><br>
<span class="quotelev2">&gt; &gt; 128          64  0.009085  0.000209    0.008757  0.009603
</span><br>
<span class="quotelev2">&gt; &gt; 128         128  0.251414  0.073069    0.011547  0.506703 !
</span><br>
<span class="quotelev2">&gt; &gt; 128         256  0.385515  0.127661    0.251431  0.578955 !
</span><br>
<span class="quotelev2">&gt; &gt; 128         512  0.035111  0.000872    0.033358  0.036262
</span><br>
<span class="quotelev2">&gt; &gt; 128        1024  0.046028  0.002116    0.043381  0.052602
</span><br>
<span class="quotelev2">&gt; &gt; 128        2048  0.073392  0.007745    0.066432  0.104531
</span><br>
<span class="quotelev2">&gt; &gt; 128        4096  0.165052  0.072889    0.124589  0.404213
</span><br>
<span class="quotelev2">&gt; &gt; 128        8192  0.341377  0.041815    0.309457  0.530409
</span><br>
<span class="quotelev2">&gt; &gt; 128       16384  0.507200  0.050872    0.492307  0.750956
</span><br>
<span class="quotelev2">&gt; &gt; 128       32768  1.050291  0.132867    0.954496  1.344978
</span><br>
<span class="quotelev2">&gt; &gt; 128       65536  2.213977  0.154987    1.962907  2.492560
</span><br>
<span class="quotelev2">&gt; &gt; 128      131072  4.026107  0.147103    3.800191  4.336205
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; alternative all-to-all:
</span><br>
<span class="quotelev2">&gt; &gt; ======================
</span><br>
<span class="quotelev2">&gt; &gt; 128           1  0.012584  0.000724    0.011073  0.015331
</span><br>
<span class="quotelev2">&gt; &gt; 128           2  0.012506  0.000444    0.011707  0.013461
</span><br>
<span class="quotelev2">&gt; &gt; 128           4  0.012412  0.000511    0.011157  0.013413
</span><br>
<span class="quotelev2">&gt; &gt; 128           8  0.012488  0.000455    0.011767  0.013746
</span><br>
<span class="quotelev2">&gt; &gt; 128          16  0.012664  0.000416    0.011745  0.013362
</span><br>
<span class="quotelev2">&gt; &gt; 128          32  0.012878  0.000410    0.012157  0.013609
</span><br>
<span class="quotelev2">&gt; &gt; 128          64  0.013138  0.000417    0.012452  0.013826
</span><br>
<span class="quotelev2">&gt; &gt; 128         128  0.014016  0.000505    0.013195  0.014942 +
</span><br>
<span class="quotelev2">&gt; &gt; 128         256  0.015843  0.000521    0.015107  0.016725 +
</span><br>
<span class="quotelev2">&gt; &gt; 128         512  0.052240  0.079323    0.027019  0.320653 !
</span><br>
<span class="quotelev2">&gt; &gt; 128        1024  0.123884  0.121560    0.038062  0.308929 !
</span><br>
<span class="quotelev2">&gt; &gt; 128        2048  0.176877  0.125229    0.074457  0.387276 !
</span><br>
<span class="quotelev2">&gt; &gt; 128        4096  0.305030  0.121716    0.176640  0.496375 !
</span><br>
<span class="quotelev2">&gt; &gt; 128        8192  0.546405  0.108007    0.415272  0.899858 !
</span><br>
<span class="quotelev2">&gt; &gt; 128       16384  0.604844  0.056576    0.558657  0.843943 !
</span><br>
<span class="quotelev2">&gt; &gt; 128       32768  1.235298  0.097969    1.094720  1.451241 !
</span><br>
<span class="quotelev2">&gt; &gt; 128       65536  2.926902  0.312733    2.458742  3.895563 !
</span><br>
<span class="quotelev2">&gt; &gt; 128      131072  6.208087  0.472115    5.354304  7.317153 !
</span><br>
<p><p>---------------------------------------------------
<br>
Dr. Carsten Kutzner
<br>
Max Planck Institute for Biophysical Chemistry
<br>
Theoretical and Computational Biophysics Department
<br>
Am Fassberg 11
<br>
37077 Goettingen, Germany
<br>
Tel. +49-551-2012313, Fax: +49-551-2012302
<br>
eMail ckutzne_at_[hidden]
<br>
<a href="http://www.gwdg.de/~ckutzne">http://www.gwdg.de/~ckutzne</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0470.php">Graham E Fagg: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>Previous message:</strong> <a href="0468.php">Carsten Kutzner: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>In reply to:</strong> <a href="0460.php">Graham E Fagg: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0470.php">Graham E Fagg: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>Reply:</strong> <a href="0470.php">Graham E Fagg: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
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
