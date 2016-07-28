<?
$subject_val = "[OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 19 22:03:50 2010" -->
<!-- isoreceived="20100820020350" -->
<!-- sent="Thu, 19 Aug 2010 21:03:24 -0500" -->
<!-- isosent="20100820020324" -->
<!-- name="Rahul Nabar" -->
<!-- email="rpnabar_at_[hidden]" -->
<!-- subject="[OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?" -->
<!-- id="AANLkTi=NHYq+RfLMp9ymxbwRjH+Vjwn2oi5kP0hAVe-k_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?<br>
<strong>From:</strong> Rahul Nabar (<em>rpnabar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-19 22:03:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14083.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Previous message:</strong> <a href="14081.php">Ralph Castain: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14085.php">Randolph Pullen: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
<li><strong>Reply:</strong> <a href="14085.php">Randolph Pullen: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
<li><strong>Reply:</strong> <a href="14123.php">Rahul Nabar: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My Intel IMB-MPI tests stall, but only in very specific cases:larger
<br>
packet sizes + large core counts. Only happens for bcast, gather and
<br>
exchange tests. Only for the larger core counts (~256 cores). Other
<br>
tests like pingpong and sendrecev run fine even with larger core
<br>
counts.
<br>
<p>e.g. This bcast test hangs consistently at the 524288 bytes packet
<br>
size when invoked on 256 cores. Same test runs fine on 128 cores.
<br>
<p>NP=256;mpirun  -np $NP --host [ 32_HOSTS_8_core_each]  -mca btl
<br>
openib,sm,self    /mpitests/imb/src/IMB-MPI1 -npmin $NP  bcast
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#bytes #repetitions  t_min[usec]  t_max[usec]  t_avg[usec]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0         1000         0.02         0.02         0.02
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1          130        26.94        27.59        27.25
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2          130        26.44        27.09        26.77
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4          130        75.98        81.07        76.75
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8          130        28.41        29.06        28.74
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16          130        28.70        29.39        29.03
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32          130        28.48        29.15        28.85
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;64          130        30.10        30.86        30.48
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;128          130        31.62        32.41        32.01
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;256          130        31.08        31.72        31.42
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;512          130        31.79        32.58        32.13
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1024          130        33.22        34.06        33.65
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2048          130        66.21        67.61        67.21
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4096          130        79.14        80.86        80.37
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8192          130       103.38       105.21       104.70
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16384          130       160.82       163.67       162.97
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32768          130       516.11       541.75       533.46
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;65536          130      1044.09      1063.63      1052.88
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;131072          130      1740.09      1750.12      1746.78
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;262144          130      3587.23      3598.52      3594.52
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;524288           80      4000.99      6669.65      5737.78
<br>
stalls for at least 5 minutes at this point when I killed the test.
<br>
<p>I did more extensive testing for various combinations of test-type and
<br>
core counts (see below). I know exactly when the tests fail but I
<br>
still cannot see a trend from this data. Any points or further debug
<br>
ideas? I do have padb installed and have collected core dumps if that
<br>
is going to help? One example below:
<br>
<p><a href="http://dl.dropbox.com/u/118481/padb.log.new.new.txt">http://dl.dropbox.com/u/118481/padb.log.new.new.txt</a>
<br>
<p>System Details:
<br>
Intel Nehalem 2.2 GHz
<br>
10Gig Ethernet Chelsio Cards and Cisco Nexus Switch. Using the OFED drivers.
<br>
CentOS 5.4
<br>
Open MPI: 1.4.1 / Open RTE: 1.4.1 / OPAL: 1.4.1
<br>
<p><p>------------------------------------------------------------------
<br>
bcast:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;NP256    hangs
<br>
&nbsp;&nbsp;&nbsp;&nbsp;NP128    OK
<br>
<p>Note: &quot;bcast&quot; mostly hangs at:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#bytes #repetitions  t_min[usec]  t_max[usec]  t_avg[usec]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;524288           80      2682.61      4408.94      3880.68
<br>
------------------------------------------------------------------
<br>
sendrecv:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;NP256    OK
<br>
------------------------------------------------------------------
<br>
gather:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;NP256    hangs
<br>
&nbsp;&nbsp;&nbsp;&nbsp;NP128    hangs
<br>
&nbsp;&nbsp;&nbsp;&nbsp;NP64    hangs
<br>
&nbsp;&nbsp;&nbsp;&nbsp;NP32    OK
<br>
<p>Note: &quot;gather&quot; always hangs at the following line of the test:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#bytes #repetitions  t_min[usec]  t_max[usec]  t_avg[usec]
<br>
[snip]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4096         1000       525.80       527.69       526.79
<br>
------------------------------------------------------------------
<br>
exchange:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;NP256    hangs
<br>
&nbsp;&nbsp;&nbsp;&nbsp;NP128    OK
<br>
<p>Note: &quot;exchange&quot; always hangs at:
<br>
<p>#bytes #repetitions  t_min[usec]  t_max[usec]  t_avg[usec]   Mbytes/sec
<br>
8192         1000       109.65       110.79       110.37       282.08
<br>
------------------------------------------------------------------
<br>
<p>Note: I kept the --host string the same (all 32 servers) and just
<br>
changed the NPMIN. Just in case this matters for how the procs are
<br>
mapped out
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14083.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Previous message:</strong> <a href="14081.php">Ralph Castain: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14085.php">Randolph Pullen: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
<li><strong>Reply:</strong> <a href="14085.php">Randolph Pullen: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
<li><strong>Reply:</strong> <a href="14123.php">Rahul Nabar: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
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
