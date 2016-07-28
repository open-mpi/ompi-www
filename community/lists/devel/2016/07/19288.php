<?
$subject_val = "[OMPI devel] sm BTL performace of the openmpi-2.0.0";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 26 19:56:50 2016" -->
<!-- isoreceived="20160726235650" -->
<!-- sent="Wed, 27 Jul 2016 08:56:40 +0900" -->
<!-- isosent="20160726235640" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="[OMPI devel] sm BTL performace of the openmpi-2.0.0" -->
<!-- id="OF4681B235.734B1741-ON49257FFC.0081F5D1-49257FFC.00838B59_at_jcity.maeda.co.jp" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] sm BTL performace of the openmpi-2.0.0<br>
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20sm%20BTL%20performace%20of%20the%20openmpi-2.0.0"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2016-07-26 19:56:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19289.php">Gilles Gouaillardet: "Re: [OMPI devel] sm BTL performace of the openmpi-2.0.0"</a>
<li><strong>Previous message:</strong> <a href="19287.php">Paul Hargrove: "Re: [OMPI devel] PGI built Open MPI vs GNU built slurm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19289.php">Gilles Gouaillardet: "Re: [OMPI devel] sm BTL performace of the openmpi-2.0.0"</a>
<li><strong>Reply:</strong> <a href="19289.php">Gilles Gouaillardet: "Re: [OMPI devel] sm BTL performace of the openmpi-2.0.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>

<br>
Hi folks,
<br>

<br>
I saw a performance degradation of openmpi-2.0.0 when I ran our application
<br>
on a node (12cores). So I did 4 tests using osu_bw as below:
<br>

<br>
1: mpirun &#226;&#128;&#147;np 2 osu_bw				bad(30% of test2)
<br>
2: mpirun &#226;&#128;&#147;np 2 &#226;&#128;&#147;mca btl self,sm osu_bw		good(same as openmpi1.10.3)
<br>
3: mpirun &#226;&#128;&#147;np 2 &#226;&#128;&#147;mca btl self,sm,openib osu_bw	bad(30% of test2)
<br>
4: mpirun &#226;&#128;&#147;np 2 &#226;&#128;&#147;mca btl self,openib osu_bw	bad(30% of test2)
<br>

<br>
I  guess openib BTL was used in the test 1 and 3, because these results are
<br>
almost  same  as  test  4. I believe that sm BTL should be used even in the
<br>
test 1 and 3, because its priority is higher than openib. Unfortunately, at
<br>
the  moment,  I couldn&#226;&#128;&#153;t figure out the root cause. So please someone would
<br>
take care of it.
<br>

<br>
Regards,
<br>
Tetsuya Mishima
<br>

<br>
P.S. Here I attached these test results.
<br>

<br>
[mishima_at_manage   OMB-3.1.1-openmpi2.0.0]$   mpirun  -np  2  -bind-to  core
<br>
-report-bindings osu_bw
<br>
[manage.cluster:13389]  MCW  rank  0  bound  to  socket  0[core  0[hwt 0]]:
<br>
[B/././././.][./././././.]
<br>
[manage.cluster:13389]  MCW  rank  1  bound  to  socket  0[core  1[hwt 0]]:
<br>
[./B/./././.][./././././.]
<br>
# OSU MPI Bandwidth Test v3.1.1
<br>
# Size        Bandwidth (MB/s)
<br>
1                         1.49
<br>
2                         3.04
<br>
4                         6.13
<br>
8                        12.23
<br>
16                       25.01
<br>
32                       49.96
<br>
64                       87.07
<br>
128                     138.87
<br>
256                     245.97
<br>
512                     423.30
<br>
1024                    865.85
<br>
2048                   1279.63
<br>
4096                    264.79
<br>
8192                    473.92
<br>
16384                   739.27
<br>
32768                  1030.49
<br>
65536                  1190.21
<br>
131072                 1270.77
<br>
262144                 1238.74
<br>
524288                 1245.97
<br>
1048576                1260.09
<br>
2097152                1274.53
<br>
4194304                1285.07
<br>
[mishima_at_manage  OMB-3.1.1-openmpi2.0.0]$  mpirun  -np  2  -mca btl self,sm
<br>
-bind-to core -report-bindings osu_bw
<br>
[manage.cluster:13448]  MCW  rank  0  bound  to  socket  0[core  0[hwt 0]]:
<br>
[B/././././.][./././././.]
<br>
[manage.cluster:13448]  MCW  rank  1  bound  to  socket  0[core  1[hwt 0]]:
<br>
[./B/./././.][./././././.]
<br>
# OSU MPI Bandwidth Test v3.1.1
<br>
# Size        Bandwidth (MB/s)
<br>
1                         0.51
<br>
2                         1.01
<br>
4                         2.03
<br>
8                         4.08
<br>
16                        7.92
<br>
32                       16.16
<br>
64                       32.53
<br>
128                      64.30
<br>
256                     128.19
<br>
512                     256.48
<br>
1024                    468.62
<br>
2048                    785.29
<br>
4096                    854.78
<br>
8192                   1404.51
<br>
16384                  2249.20
<br>
32768                  3136.40
<br>
65536                  3495.84
<br>
131072                 3436.69
<br>
262144                 3392.11
<br>
524288                 3400.07
<br>
1048576                3460.60
<br>
2097152                3488.09
<br>
4194304                3498.45
<br>
[mishima_at_manage    OMB-3.1.1-openmpi2.0.0]$   mpirun   -np   2   -mca   btl
<br>
self,sm,openib -bind-to core -report-bindings osu_bw
<br>
[manage.cluster:13462]  MCW  rank  0  bound  to  socket  0[core  0[hwt 0]]:
<br>
[B/././././.][./././././.]
<br>
[manage.cluster:13462]  MCW  rank  1  bound  to  socket  0[core  1[hwt 0]]:
<br>
[./B/./././.][./././././.]
<br>
# OSU MPI Bandwidth Test v3.1.1
<br>
# Size        Bandwidth (MB/s)
<br>
1                         0.54
<br>
2                         1.09
<br>
4                         2.18
<br>
8                         4.37
<br>
16                        8.75
<br>
32                       17.37
<br>
64                       34.67
<br>
128                      66.66
<br>
256                     132.55
<br>
512                     261.52
<br>
1024                    489.51
<br>
2048                    818.38
<br>
4096                    290.48
<br>
8192                    511.64
<br>
16384                   765.24
<br>
32768                  1043.28
<br>
65536                  1180.48
<br>
131072                 1261.41
<br>
262144                 1232.86
<br>
524288                 1245.70
<br>
1048576                1245.69
<br>
2097152                1268.67
<br>
4194304                1281.33
<br>
[mishima_at_manage  OMB-3.1.1-openmpi2.0.0]$ mpirun -np 2 -mca btl self,openib
<br>
-bind-to core -report-bindings osu_bw
<br>
[manage.cluster:13521]  MCW  rank  0  bound  to  socket  0[core  0[hwt 0]]:
<br>
[B/././././.][./././././.]
<br>
[manage.cluster:13521]  MCW  rank  1  bound  to  socket  0[core  1[hwt 0]]:
<br>
[./B/./././.][./././././.]
<br>
# OSU MPI Bandwidth Test v3.1.1
<br>
# Size        Bandwidth (MB/s)
<br>
1                         0.54
<br>
2                         1.08
<br>
4                         2.16
<br>
8                         4.34
<br>
16                        8.64
<br>
32                       17.25
<br>
64                       34.30
<br>
128                      66.13
<br>
256                     129.99
<br>
512                     242.26
<br>
1024                    429.24
<br>
2048                    556.00
<br>
4096                    706.80
<br>
8192                    874.35
<br>
16384                   762.60
<br>
32768                  1039.61
<br>
65536                  1184.03
<br>
131072                 1267.09
<br>
262144                 1230.76
<br>
524288                 1246.92
<br>
1048576                1255.88
<br>
2097152                1274.54
<br>
4194304                                                             1281.63<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19289.php">Gilles Gouaillardet: "Re: [OMPI devel] sm BTL performace of the openmpi-2.0.0"</a>
<li><strong>Previous message:</strong> <a href="19287.php">Paul Hargrove: "Re: [OMPI devel] PGI built Open MPI vs GNU built slurm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19289.php">Gilles Gouaillardet: "Re: [OMPI devel] sm BTL performace of the openmpi-2.0.0"</a>
<li><strong>Reply:</strong> <a href="19289.php">Gilles Gouaillardet: "Re: [OMPI devel] sm BTL performace of the openmpi-2.0.0"</a>
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
