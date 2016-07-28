<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jun 26 08:52:29 2007" -->
<!-- isoreceived="20070626125229" -->
<!-- sent="Tue, 26 Jun 2007 15:02:35 +0200" -->
<!-- isosent="20070626130235" -->
<!-- name="Peter Drakenberg" -->
<!-- email="drakenberg_at_[hidden]" -->
<!-- subject="[OMPI devel] Allgatherv performance anomaly" -->
<!-- id="46810E6B.9000205_at_dkrz.de" -->
<!-- charset="ISO-8859-15" -->
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
<strong>From:</strong> Peter Drakenberg (<em>drakenberg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-26 09:02:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1765.php">Andrew Friedley: "Re: [OMPI devel] send/recv during initialization"</a>
<li><strong>Previous message:</strong> <a href="1763.php">Georg Wassen: "[OMPI devel] send/recv during initialization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1769.php">Jelena Pjesivac-Grbovic: "Re: [OMPI devel] Allgatherv performance anomaly"</a>
<li><strong>Reply:</strong> <a href="1769.php">Jelena Pjesivac-Grbovic: "Re: [OMPI devel] Allgatherv performance anomaly"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>When running the Intel MPI Benchmark (IMB) on our cluster
<br>
(Sun X2200M2 nodes, Voltaire DDRx Infiniband, OFED-1.1) we
<br>
see rather strange (i.e., unreasonably bad) performance for the
<br>
Allgatherv part of the IMP when using OpenMPI-1.2.2. The
<br>
performance figures reported by the IMB are provided immediately
<br>
below, and the corresponding figures for Voltaire's MPI
<br>
implementation (which in most cases performs worse than
<br>
OpenMPI, but not in this case) is provided further below for
<br>
comparison.
<br>
<p>Best regards,
<br>
<p>&nbsp;&nbsp;Peter Drakenberg
<br>
<p>OpenMPI-1.2.2 results
<br>
<p># Benchmarking Allgatherv
<br>
# #processes = 128
<br>
# ( 128 additional processes waiting in MPI_Barrier)
<br>
#----------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#bytes #repetitions  t_min[usec]  t_max[usec]  t_avg[usec]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0         1000         0.27         0.37         0.28
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1         1000      2963.90      2964.34      2964.18
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2         1000      2964.58      2965.27      2965.12
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4         1000      2957.89      2960.70      2960.34
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8         1000      2957.16      2957.48      2957.41
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16         1000      1476.52      1477.29      1476.92
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32         1000      1262.78      1264.01      1263.42
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;64         1000      1777.36      1781.58      1780.73
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;128         1000      3179.43      3184.41      3182.70
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;256         1000      5585.14      5590.76      5588.06
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;512         1000      9305.17      9314.22      9309.76
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1024         1000     15080.38     15095.19     15087.83
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2048         1000     26654.10     26680.41     26667.36
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4096         1000     51284.44     51335.00     51310.00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8192         1000    128715.45    128845.60    128781.31
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16384         1000    268331.78    268600.18    268467.99
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32768         1000    523252.38    523771.30    523512.56
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;65536          640   1026546.88   1028134.76   1027342.31
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;131072          320   2032981.61   2039325.76   2036150.23
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;262144          160   4036154.11   4061263.87   4048673.85
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;524288           80   7985005.01   8084825.39   8034942.12
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1048576           40  15676708.42  16074075.63  15875796.81
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2097152           20  30574097.00  32172253.91  31373789.00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4194304           &lt; never completes, no results reported &gt;
<br>
<p>Voltaire MPI results:
<br>
<p>[0] # Benchmarking Allgatherv
<br>
[0] # #processes = 128
<br>
[0] # ( 128 additional processes waiting in MPI_Barrier)
<br>
[0] #----------------------------------------------------------------
<br>
[0]        #bytes #repetitions  t_min[usec]  t_max[usec]  t_avg[usec]
<br>
[0]             0         1000         0.15         0.17         0.15
<br>
[0]             1         1000       491.80       492.27       491.93
<br>
[0]             2         1000       442.39       442.77       442.49
<br>
[0]             4         1000       422.91       423.79       423.20
<br>
[0]             8         1000       491.78       492.04       491.88
<br>
[0]            16         1000       493.50       494.55       493.82
<br>
[0]            32         1000       439.22       439.80       439.55
<br>
[0]            64         1000       474.54       475.11       474.80
<br>
[0]           128         1000       520.39       521.44       520.73
<br>
[0]           256         1000       480.01       480.57       480.26
<br>
[0]           512         1000       802.98       803.68       803.27
<br>
[0]          1024         1000      1501.60      1502.54      1502.19
<br>
[0]          2048         1000      2863.70      2867.45      2864.90
<br>
[0]          4096         1000      4990.05      4990.86      4990.49
<br>
[0]          8192         1000      7508.46      7513.27      7511.21
<br>
[0]         16384         1000     17513.71     17523.39     17519.27
<br>
[0]         32768         1000     26655.31     26664.25     26659.42
<br>
[0]         65536          640     46089.07     46122.00     46106.04
<br>
[0]        131072          320     93248.85     93381.15     93319.76
<br>
[0]        262144          160    187527.89    188133.28    187883.96
<br>
[0]        524288           80    366881.26    369236.00    368337.76
<br>
[0]       1048576           40    663046.35    667853.38    665697.79
<br>
[0]       2097152           20   1324301.75   1345114.85   1335772.46
<br>
[0]       4194304           10   2593647.10   2662831.10   2633482.66
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1765.php">Andrew Friedley: "Re: [OMPI devel] send/recv during initialization"</a>
<li><strong>Previous message:</strong> <a href="1763.php">Georg Wassen: "[OMPI devel] send/recv during initialization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1769.php">Jelena Pjesivac-Grbovic: "Re: [OMPI devel] Allgatherv performance anomaly"</a>
<li><strong>Reply:</strong> <a href="1769.php">Jelena Pjesivac-Grbovic: "Re: [OMPI devel] Allgatherv performance anomaly"</a>
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
