<?
$subject_val = "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 26 11:59:03 2010" -->
<!-- isoreceived="20100826155903" -->
<!-- sent="Thu, 26 Aug 2010 10:58:18 -0500" -->
<!-- isosent="20100826155818" -->
<!-- name="Rahul Nabar" -->
<!-- email="rpnabar_at_[hidden]" -->
<!-- subject="Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?" -->
<!-- id="AANLkTikTsJQ2r=BjF=VcNwKQwDM-_RKqr8aq0jNasuZt_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F2D3A958-A633-44C3-A656-DECDA4F18D5A_at_cisco.com" -->
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
<strong>Date:</strong> 2010-08-26 11:58:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14128.php">³ÂÎÄºÆ: "[OMPI users] Checkpoint problem with BLCR + OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="14126.php">Rahul Nabar: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
<li><strong>In reply to:</strong> <a href="14124.php">Jeff Squyres: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/09/14152.php">Rahul Nabar: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Aug 25, 2010 at 12:14 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Once you do that, try using just one of the networks by telling OMPI to use only one of the devices, something like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160; &#160;mpirun --mca btl_tcp_if_include eth0 ...
</span><br>
<p>Thanks Jeff! Just tried the exact test that you suggested.
<br>
<p>[rpnabar_at_eu001 ~]$ NP=64;time mpirun  -np $NP --host
<br>
eu001,eu003,eu004,eu005,eu006,eu007,eu008,eu012 --mca
<br>
btl_tcp_if_include eth0  -mca btl openib,sm,self
<br>
/opt/src/mpitests/imb/src/IMB-MPI1 -npmin $NP  gather
<br>
<p>Still the same problem. The NP64 gather stalls at 4096 for about 7
<br>
minutes and then completes with a step change increase in times. All
<br>
10GigE's are eth0 now and all on the 192.168.x.x. subnet. The 7 minute
<br>
stall time seems very reproducible each time around.
<br>
<p>Once the test stalled I ran a padb stack trace from the master node.
<br>
Posted here:
<br>
<p>[rpnabar_at_eu001 root]$ /opt/sbin/bin/padb --all --stack-trace --tree
<br>
--config-option rmgr=orte
<br>
<a href="http://dl.dropbox.com/u/118481/padb_Aug26_gather_NP64.txt">http://dl.dropbox.com/u/118481/padb_Aug26_gather_NP64.txt</a>
<br>
<p>Did a top for the most cpu intensive processes during the stall and
<br>
the all seem the IMB-MPI ones. Memory usage seems minimal. (Each node
<br>
has 16 Gigs of RAM)
<br>
<a href="http://dl.dropbox.com/u/118481/top_Aug26.txt">http://dl.dropbox.com/u/118481/top_Aug26.txt</a>
<br>
<p>Interestingly the NP56 test runs just great and finishes in less than
<br>
a minute. It's only at NP64 that I hit this roadblock. On the other
<br>
hand even for the NP56 test at the bytesize of 4096--&gt;8192 there is
<br>
almost a 10x degradation in transmit times.
<br>
<p>&nbsp;Any other debug options or suggestions are most welcome!
<br>
<p># /opt/src/mpitests/imb/src/IMB-MPI1 -npmin 64 gather
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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1         1000        84.25        84.55        84.40
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2         1000        84.16        84.45        84.31
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4         1000        84.48        84.78        84.64
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8         1000        84.58        84.92        84.77
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16         1000        86.51        86.79        86.66
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32         1000        88.60        88.93        88.78
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;64         1000        90.88        91.22        91.06
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;128         1000        92.44        92.76        92.60
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;256         1000        95.79        96.14        95.98
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;512         1000       104.90       105.25       105.07
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1024         1000       118.01       118.40       118.19
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2048         1000       154.42       154.94       154.67
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4096         1000       292.15       292.95       292.52
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8192           13      1436.77      1667.15      1581.73
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16384           13      1733.38      2004.77      1903.27
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32768           13      2082.55      2403.24      2282.68
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;65536           13      3106.37      3546.15      3384.07
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;131072           13      7812.54      9011.62      8572.76
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;262144           13     10773.70     12358.30     11782.77
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;524288           13     19377.23     22315.85     21238.98
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1048576           13     38661.61     44293.92     42280.09
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2097152           13    120665.00    140697.08    136576.54
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4194304           10    475155.12    567579.08    536037.92
<br>
<p><p># All processes entering MPI_Finalize
<br>
<p><p>real    7m31.039s
<br>
user    58m58.321s
<br>
sys     0m21.633s
<br>
<p>--------------------------------NP56
<br>
test------------------------------------------
<br>
#----------------------------------------------------------------
<br>
# Benchmarking Gather
<br>
# #processes = 56
<br>
#----------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#bytes #repetitions  t_min[usec]  t_max[usec]  t_avg[usec]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0         1000         0.02         0.09         0.03
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1         1000        74.23        74.53        74.35
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2         1000        73.87        74.15        74.02
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4         1000        73.59        73.86        73.72
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8         1000        74.15        74.40        74.27
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16         1000        76.18        76.45        76.30
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32         1000        77.82        78.10        77.95
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;64         1000        79.85        80.16        80.00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;128         1000        81.67        82.01        81.84
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;256         1000        86.07        86.41        86.27
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;512         1000        94.91        95.23        95.07
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1024          843        33.45        35.13        34.38
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2048          843       218.82       241.49       230.18
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4096          843       130.76       131.62       131.17
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8192          843      1344.88      1348.68      1347.62
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16384          843      1915.72      1919.64      1918.58
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32768          843      2463.28      2469.58      2468.08
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;65536          640      3395.59      3401.03      3398.49
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;131072          320      6952.66      6981.24      6968.44
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;262144          160     10137.25     10209.22     10174.13
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;524288           80     16631.20     16921.68     16788.20
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1048576           40     35974.07     36980.07     36517.35
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2097152           20    167574.75    183295.25    177734.75
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4194304           10    321249.79    410697.10    367498.59
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14128.php">³ÂÎÄºÆ: "[OMPI users] Checkpoint problem with BLCR + OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="14126.php">Rahul Nabar: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
<li><strong>In reply to:</strong> <a href="14124.php">Jeff Squyres: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/09/14152.php">Rahul Nabar: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
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
