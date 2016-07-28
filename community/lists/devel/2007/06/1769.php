<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jun 26 15:06:05 2007" -->
<!-- isoreceived="20070626190605" -->
<!-- sent="Tue, 26 Jun 2007 15:06:00 -0400 (EDT)" -->
<!-- isosent="20070626190600" -->
<!-- name="Jelena Pjesivac-Grbovic" -->
<!-- email="pjesa_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Allgatherv performance anomaly" -->
<!-- id="Pine.LNX.4.62.0706261452100.24638_at_reliant.cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="46810E6B.9000205_at_dkrz.de" -->
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
<strong>From:</strong> Jelena Pjesivac-Grbovic (<em>pjesa_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-26 15:06:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1770.php">George Bosilca: "Re: [OMPI devel] SCTP BTL Development for Open MPI"</a>
<li><strong>Previous message:</strong> <a href="1768.php">Karol Mroz: "[OMPI devel] SCTP BTL Development for Open MPI"</a>
<li><strong>In reply to:</strong> <a href="1764.php">Peter Drakenberg: "[OMPI devel] Allgatherv performance anomaly"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Peter,
<br>
<p>in 1.2.2 the allgatherv is called from coll basic component, 
<br>
and is implemented as a gatherv followed by a broadcast.
<br>
The broadcast is executed with single element of MPI_TYPE_INDEXED.
<br>
<p>The decision function in coll tuned makes mistake of using segmented 
<br>
broadcast algorithm for this case (which results in sending single segment 
<br>
possibly using pipeline -&gt; bad performance).
<br>
<p>I will fix this in the trunk and ask for it to be moved to 1.2.2 if it 
<br>
solves the problem.
<br>
<p>Thanks,
<br>
Jelena
<br>
<p>On Tue, 26 Jun 2007, Peter Drakenberg wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When running the Intel MPI Benchmark (IMB) on our cluster
</span><br>
<span class="quotelev1">&gt; (Sun X2200M2 nodes, Voltaire DDRx Infiniband, OFED-1.1) we
</span><br>
<span class="quotelev1">&gt; see rather strange (i.e., unreasonably bad) performance for the
</span><br>
<span class="quotelev1">&gt; Allgatherv part of the IMP when using OpenMPI-1.2.2. The
</span><br>
<span class="quotelev1">&gt; performance figures reported by the IMB are provided immediately
</span><br>
<span class="quotelev1">&gt; below, and the corresponding figures for Voltaire's MPI
</span><br>
<span class="quotelev1">&gt; implementation (which in most cases performs worse than
</span><br>
<span class="quotelev1">&gt; OpenMPI, but not in this case) is provided further below for
</span><br>
<span class="quotelev1">&gt; comparison.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Peter Drakenberg
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OpenMPI-1.2.2 results
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # Benchmarking Allgatherv
</span><br>
<span class="quotelev1">&gt; # #processes = 128
</span><br>
<span class="quotelev1">&gt; # ( 128 additional processes waiting in MPI_Barrier)
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;       #bytes #repetitions  t_min[usec]  t_max[usec]  t_avg[usec]
</span><br>
<span class="quotelev1">&gt;            0         1000         0.27         0.37         0.28
</span><br>
<span class="quotelev1">&gt;            1         1000      2963.90      2964.34      2964.18
</span><br>
<span class="quotelev1">&gt;            2         1000      2964.58      2965.27      2965.12
</span><br>
<span class="quotelev1">&gt;            4         1000      2957.89      2960.70      2960.34
</span><br>
<span class="quotelev1">&gt;            8         1000      2957.16      2957.48      2957.41
</span><br>
<span class="quotelev1">&gt;           16         1000      1476.52      1477.29      1476.92
</span><br>
<span class="quotelev1">&gt;           32         1000      1262.78      1264.01      1263.42
</span><br>
<span class="quotelev1">&gt;           64         1000      1777.36      1781.58      1780.73
</span><br>
<span class="quotelev1">&gt;          128         1000      3179.43      3184.41      3182.70
</span><br>
<span class="quotelev1">&gt;          256         1000      5585.14      5590.76      5588.06
</span><br>
<span class="quotelev1">&gt;          512         1000      9305.17      9314.22      9309.76
</span><br>
<span class="quotelev1">&gt;         1024         1000     15080.38     15095.19     15087.83
</span><br>
<span class="quotelev1">&gt;         2048         1000     26654.10     26680.41     26667.36
</span><br>
<span class="quotelev1">&gt;         4096         1000     51284.44     51335.00     51310.00
</span><br>
<span class="quotelev1">&gt;         8192         1000    128715.45    128845.60    128781.31
</span><br>
<span class="quotelev1">&gt;        16384         1000    268331.78    268600.18    268467.99
</span><br>
<span class="quotelev1">&gt;        32768         1000    523252.38    523771.30    523512.56
</span><br>
<span class="quotelev1">&gt;        65536          640   1026546.88   1028134.76   1027342.31
</span><br>
<span class="quotelev1">&gt;       131072          320   2032981.61   2039325.76   2036150.23
</span><br>
<span class="quotelev1">&gt;       262144          160   4036154.11   4061263.87   4048673.85
</span><br>
<span class="quotelev1">&gt;       524288           80   7985005.01   8084825.39   8034942.12
</span><br>
<span class="quotelev1">&gt;      1048576           40  15676708.42  16074075.63  15875796.81
</span><br>
<span class="quotelev1">&gt;      2097152           20  30574097.00  32172253.91  31373789.00
</span><br>
<span class="quotelev1">&gt;      4194304           &lt; never completes, no results reported &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Voltaire MPI results:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [0] # Benchmarking Allgatherv
</span><br>
<span class="quotelev1">&gt; [0] # #processes = 128
</span><br>
<span class="quotelev1">&gt; [0] # ( 128 additional processes waiting in MPI_Barrier)
</span><br>
<span class="quotelev1">&gt; [0] #----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [0]        #bytes #repetitions  t_min[usec]  t_max[usec]  t_avg[usec]
</span><br>
<span class="quotelev1">&gt; [0]             0         1000         0.15         0.17         0.15
</span><br>
<span class="quotelev1">&gt; [0]             1         1000       491.80       492.27       491.93
</span><br>
<span class="quotelev1">&gt; [0]             2         1000       442.39       442.77       442.49
</span><br>
<span class="quotelev1">&gt; [0]             4         1000       422.91       423.79       423.20
</span><br>
<span class="quotelev1">&gt; [0]             8         1000       491.78       492.04       491.88
</span><br>
<span class="quotelev1">&gt; [0]            16         1000       493.50       494.55       493.82
</span><br>
<span class="quotelev1">&gt; [0]            32         1000       439.22       439.80       439.55
</span><br>
<span class="quotelev1">&gt; [0]            64         1000       474.54       475.11       474.80
</span><br>
<span class="quotelev1">&gt; [0]           128         1000       520.39       521.44       520.73
</span><br>
<span class="quotelev1">&gt; [0]           256         1000       480.01       480.57       480.26
</span><br>
<span class="quotelev1">&gt; [0]           512         1000       802.98       803.68       803.27
</span><br>
<span class="quotelev1">&gt; [0]          1024         1000      1501.60      1502.54      1502.19
</span><br>
<span class="quotelev1">&gt; [0]          2048         1000      2863.70      2867.45      2864.90
</span><br>
<span class="quotelev1">&gt; [0]          4096         1000      4990.05      4990.86      4990.49
</span><br>
<span class="quotelev1">&gt; [0]          8192         1000      7508.46      7513.27      7511.21
</span><br>
<span class="quotelev1">&gt; [0]         16384         1000     17513.71     17523.39     17519.27
</span><br>
<span class="quotelev1">&gt; [0]         32768         1000     26655.31     26664.25     26659.42
</span><br>
<span class="quotelev1">&gt; [0]         65536          640     46089.07     46122.00     46106.04
</span><br>
<span class="quotelev1">&gt; [0]        131072          320     93248.85     93381.15     93319.76
</span><br>
<span class="quotelev1">&gt; [0]        262144          160    187527.89    188133.28    187883.96
</span><br>
<span class="quotelev1">&gt; [0]        524288           80    366881.26    369236.00    368337.76
</span><br>
<span class="quotelev1">&gt; [0]       1048576           40    663046.35    667853.38    665697.79
</span><br>
<span class="quotelev1">&gt; [0]       2097152           20   1324301.75   1345114.85   1335772.46
</span><br>
<span class="quotelev1">&gt; [0]       4194304           10   2593647.10   2662831.10   2633482.66
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
--
Jelena Pjesivac-Grbovic, Pjesa
Graduate Research Assistant
Innovative Computing Laboratory
Computer Science Department, UTK
Claxton Complex 350
(865) 974 - 6722 
(865) 974 - 6321
jpjesiva_at_[hidden]
Murphy's Law of Research:
         Enough research will tend to support your theory.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1770.php">George Bosilca: "Re: [OMPI devel] SCTP BTL Development for Open MPI"</a>
<li><strong>Previous message:</strong> <a href="1768.php">Karol Mroz: "[OMPI devel] SCTP BTL Development for Open MPI"</a>
<li><strong>In reply to:</strong> <a href="1764.php">Peter Drakenberg: "[OMPI devel] Allgatherv performance anomaly"</a>
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
