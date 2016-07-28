<?
$subject_val = "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 25 12:27:09 2010" -->
<!-- isoreceived="20100825162709" -->
<!-- sent="Wed, 25 Aug 2010 11:26:45 -0500" -->
<!-- isosent="20100825162645" -->
<!-- name="Rahul Nabar" -->
<!-- email="rpnabar_at_[hidden]" -->
<!-- subject="Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?" -->
<!-- id="AANLkTinC_k9ODEZhJ40nm02Pfa9w37RpDeUJs__5mOog_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTi=NHYq+RfLMp9ymxbwRjH+Vjwn2oi5kP0hAVe-k_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?<br>
<strong>From:</strong> Rahul Nabar (<em>rpnabar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-25 12:26:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14124.php">Jeff Squyres: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
<li><strong>Previous message:</strong> <a href="14122.php">Steve Wise: "[OMPI users] delivering SIGUSR2 to an ompi process"</a>
<li><strong>In reply to:</strong> <a href="14082.php">Rahul Nabar: "[OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Aug 19, 2010 at 9:03 PM, Rahul Nabar &lt;rpnabar_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; ------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; gather:
</span><br>
<span class="quotelev1">&gt; &#160; &#160;NP256 &#160; &#160;hangs
</span><br>
<span class="quotelev1">&gt; &#160; &#160;NP128 &#160; &#160;hangs
</span><br>
<span class="quotelev1">&gt; &#160; &#160;NP64 &#160; &#160;hangs
</span><br>
<span class="quotelev1">&gt; &#160; &#160;NP32 &#160; &#160;OK
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note: &quot;gather&quot; always hangs at the following line of the test:
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; #bytes #repetitions &#160;t_min[usec] &#160;t_max[usec] &#160;t_avg[usec]
</span><br>
<span class="quotelev1">&gt; [snip]
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; 4096 &#160; &#160; &#160; &#160; 1000 &#160; &#160; &#160; 525.80 &#160; &#160; &#160; 527.69 &#160; &#160; &#160; 526.79
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------
</span><br>
<p>What I thought was a permanent &quot;hang&quot; for the NP64 &quot;gather&quot; test, was,
<br>
in fact, an exceedingly long stall. After waiting for more than 7
<br>
minutes the test runs forward to completion.  What is surprising is
<br>
the _huge_ jump in times from the 4096 to 8192 byte packet sizes. Its
<br>
a step change from 275 to 1380 usecs.  Any ideas what could cause this
<br>
and if this could be related to the other &quot;hangs&quot; I am seeing? We are
<br>
using jumbo frames with a MTU:9000 so that was one thought I had for
<br>
this transition.
<br>
<p>On the other hand, this doesn't seem to be the case with the &quot;hang&quot;
<br>
for the NP256 bcast test. That one stayed hung for more than an hour
<br>
at which point I did kill it.
<br>
<p>Just to make sure this wasn't just some quirk or buggy implementation
<br>
in the Intel-IMB test suite are there any alternative testing suites
<br>
that I could  run on my cluster? I was a bit iffy about the &quot;Intel-IMB
<br>
test suite&quot; because I have found no active forums or mailing lists
<br>
that focus on this suite so can't really get in touch with any users
<br>
nor developers that might have an insight into how these benchmarks
<br>
run.
<br>
<p>7m22.972s
<br>
# /opt/src/mpitests/imb/src/IMB-MPI1 -npmin 64 gather
<br>
<p># Minimum message length in bytes:   0
<br>
# Maximum message length in bytes:   4194304
<br>
#
<br>
# MPI_Datatype                   :   MPI_BYTE
<br>
# MPI_Datatype for reductions    :   MPI_FLOAT
<br>
# MPI_Op                         :   MPI_SUM
<br>
#
<br>
#
<br>
<p># List of Benchmarks to run:
<br>
<p># Gather
<br>
<p>#----------------------------------------------------------------
<br>
# Benchmarking Gather
<br>
# #processes = 64
<br>
#----------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#bytes #repetitions  t_min[usec]  t_max[usec]  t_avg[usec]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0         1000         0.02         0.03         0.02
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1         1000        68.72        68.95        68.84
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2         1000        69.16        69.39        69.28
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4         1000        68.85        69.08        68.97
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8         1000        69.02        69.25        69.14
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16         1000        70.29        70.51        70.40
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32         1000        72.14        72.38        72.27
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;64         1000        70.99        71.24        71.12
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;128         1000        72.59        72.84        72.72
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;256         1000        76.00        76.26        76.14
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;512         1000        84.92        85.21        85.06
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1024         1000       101.69       102.01       101.84
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2048         1000       146.94       147.41       147.18
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4096         1000       275.61       276.45       276.04
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8192           13      1380.54      1607.84      1522.64
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16384           13      1497.09      1749.46      1656.61
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32768           13      2055.61      2380.37      2259.50
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;65536           13      4553.46      5002.70      4837.14
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;131072           13      7720.76      8926.69      8483.07
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;262144           13     10423.99     12027.23     11440.07
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;524288           13     19456.94     22369.62     21317.78
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1048576           13     38228.53     43892.99     41880.94
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2097152           13     99705.55    119614.62    115667.49
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4194304           10    425823.38    496396.78    468326.45
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14124.php">Jeff Squyres: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
<li><strong>Previous message:</strong> <a href="14122.php">Steve Wise: "[OMPI users] delivering SIGUSR2 to an ompi process"</a>
<li><strong>In reply to:</strong> <a href="14082.php">Rahul Nabar: "[OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
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
