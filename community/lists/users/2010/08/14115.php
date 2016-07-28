<?
$subject_val = "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 24 17:44:30 2010" -->
<!-- isoreceived="20100824214430" -->
<!-- sent="Tue, 24 Aug 2010 16:44:06 -0500" -->
<!-- isosent="20100824214406" -->
<!-- name="Rahul Nabar" -->
<!-- email="rpnabar_at_[hidden]" -->
<!-- subject="Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?" -->
<!-- id="AANLkTikNcS6jSsGSbfLc1gg=r4vjxtdLhpxyD0geMybQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="OFFA28161F.E922B288-ON85257789.000D4AF1-85257789.000EFE55_at_us.ibm.com" -->
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
<strong>Date:</strong> 2010-08-24 17:44:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14116.php">Jeff Squyres: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
<li><strong>Previous message:</strong> <a href="14114.php">Michael E. Thomadakis: "Re: [OMPI users] Open-MPI 1.4.2 : mpirun core-dumps when &quot;-npernode N&quot; is used at command line"</a>
<li><strong>In reply to:</strong> <a href="14096.php">Richard Treumann: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core	counts: debug ideas?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14108.php">Rahul Nabar: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Aug 23, 2010 at 9:43 PM, Richard Treumann &lt;treumann_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Bugs are always a possibility but unless there is something very unusual
</span><br>
<span class="quotelev1">&gt; about the cluster and interconnect or this is an unstable version of MPI, it
</span><br>
<span class="quotelev1">&gt; seems very unlikely this use of MPI_Bcast with so few tasks and only a 1/2
</span><br>
<span class="quotelev1">&gt; MB message would trip on one. &#160;80 tasks is a very small number in modern
</span><br>
<span class="quotelev1">&gt; parallel computing. &#160;Thousands of tasks involved in an MPI collective has
</span><br>
<span class="quotelev1">&gt; become pretty standard.
</span><br>
<p>Here's something absolutely strange that I accidentally stumbled upon:
<br>
<p>I ran the test  again, but accidentally forgot to kill the
<br>
user-jobs already running on the test servers (via. Torque and our
<br>
usual queues).
<br>
I was about to kick myself, but I couldn't believe that the test
<br>
actually completes! I mean the timings are horribly bad but the test
<br>
( for the first time ) runs to completion. How could this be happening?
<br>
Doesn't make sense to me that the test completes when the
<br>
cards+servers+network is loaded but not otherwise! But I repeated the
<br>
experiment many times and still the same result.
<br>
<p># /opt/src/mpitests/imb/src/IMB-MPI1 -npmin 256 bcast
<br>
[snip]
<br>
# Bcast
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#bytes #repetitions  t_min[usec]  t_max[usec]  t_avg[usec]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0         1000         0.02         0.02         0.02
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1           34    546807.94    626743.09    565196.07
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2           34     37159.11     52942.09     44910.73
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4           34     19777.97     40382.53     29656.53
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8           34     36060.21     53265.27     43909.68
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16           34     11765.59     31912.50     19611.75
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32           34     23530.79     41176.94     32532.89
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;64           34     11735.91     23529.02     16552.16
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;128           34     47998.44     59323.76     55164.14
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;256           34     18121.96     30500.15     25528.95
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;512           34     20072.76     33787.32     26786.55
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1024           34     39737.29     55589.97     45704.99
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2048            9     77787.56    150555.66    118741.83
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4096            9     44444.67    118331.78     77201.40
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8192            9     80835.66    166666.56    133781.08
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16384            9     77032.88    149890.66    119558.73
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32768            9    111819.45    177778.99    149048.91
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;65536            9    159304.67    222298.99    195071.34
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;131072            9    172941.13    262216.57    218351.14
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;262144            9    161371.65    266703.79    223514.31
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;524288            2       497.46   4402568.94   2183980.20
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1048576            2      5401.49   3519284.01   1947754.45
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2097152            2     75251.10   4137861.49   2220910.50
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4194304            2     33270.48   4601072.91   2173905.32
<br>
# All processes entering MPI_Finalize
<br>
<p>Another observation is that if I replace the openib BTL with the tcp
<br>
BTL the tests run OK.
<br>
<p><p><pre>
-- 
Rahul
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14116.php">Jeff Squyres: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
<li><strong>Previous message:</strong> <a href="14114.php">Michael E. Thomadakis: "Re: [OMPI users] Open-MPI 1.4.2 : mpirun core-dumps when &quot;-npernode N&quot; is used at command line"</a>
<li><strong>In reply to:</strong> <a href="14096.php">Richard Treumann: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core	counts: debug ideas?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14108.php">Rahul Nabar: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
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
