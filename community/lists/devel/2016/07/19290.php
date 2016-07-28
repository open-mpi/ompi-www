<?
$subject_val = "Re: [OMPI devel] sm BTL performace of the openmpi-2.0.0";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 26 20:17:28 2016" -->
<!-- isoreceived="20160727001728" -->
<!-- sent="Wed, 27 Jul 2016 09:17:19 +0900" -->
<!-- isosent="20160727001719" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] sm BTL performace of the openmpi-2.0.0" -->
<!-- id="OF76EE90AE.374B5BF7-ON49257FFD.000129B5-49257FFD.00019948_at_jcity.maeda.co.jp" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="24361a3d-8c32-cafe-7995-23e480f39249_at_rist.or.jp" -->
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
<strong>Subject:</strong> Re: [OMPI devel] sm BTL performace of the openmpi-2.0.0<br>
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20sm%20BTL%20performace%20of%20the%20openmpi-2.0.0"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2016-07-26 20:17:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19291.php">Nathan Hjelm: "Re: [OMPI devel] sm BTL performace of the openmpi-2.0.0"</a>
<li><strong>Previous message:</strong> <a href="19289.php">Gilles Gouaillardet: "Re: [OMPI devel] sm BTL performace of the openmpi-2.0.0"</a>
<li><strong>In reply to:</strong> <a href="19289.php">Gilles Gouaillardet: "Re: [OMPI devel] sm BTL performace of the openmpi-2.0.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19291.php">Nathan Hjelm: "Re: [OMPI devel] sm BTL performace of the openmpi-2.0.0"</a>
<li><strong>Reply:</strong> <a href="19291.php">Nathan Hjelm: "Re: [OMPI devel] sm BTL performace of the openmpi-2.0.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gilles,
<br>

<br>
Thanks. I ran again with --mca pml ob1 but I've got the same results as
<br>
below:
<br>

<br>
[mishima_at_manage OMB-3.1.1-openmpi2.0.0]$ mpirun -np 2 -mca pml ob1 -bind-to
<br>
core -report-bindings osu_bw
<br>
[manage.cluster:18142] MCW rank 0 bound to socket 0[core 0[hwt 0]]:
<br>
[B/././././.][./././././.]
<br>
[manage.cluster:18142] MCW rank 1 bound to socket 0[core 1[hwt 0]]:
<br>
[./B/./././.][./././././.]
<br>
# OSU MPI Bandwidth Test v3.1.1
<br>
# Size        Bandwidth (MB/s)
<br>
1                         1.48
<br>
2                         3.07
<br>
4                         6.26
<br>
8                        12.53
<br>
16                       24.33
<br>
32                       49.03
<br>
64                       83.46
<br>
128                     132.60
<br>
256                     234.96
<br>
512                     420.86
<br>
1024                    842.37
<br>
2048                   1231.65
<br>
4096                    264.67
<br>
8192                    472.16
<br>
16384                   740.42
<br>
32768                  1030.39
<br>
65536                  1191.16
<br>
131072                 1269.45
<br>
262144                 1238.33
<br>
524288                 1247.97
<br>
1048576                1257.96
<br>
2097152                1274.74
<br>
4194304                1280.94
<br>
[mishima_at_manage OMB-3.1.1-openmpi2.0.0]$ mpirun -np 2 -mca pml ob1 -mca btl
<br>
self,sm -bind-to core -report-bindings osu_b
<br>
w
<br>
[manage.cluster:18204] MCW rank 0 bound to socket 0[core 0[hwt 0]]:
<br>
[B/././././.][./././././.]
<br>
[manage.cluster:18204] MCW rank 1 bound to socket 0[core 1[hwt 0]]:
<br>
[./B/./././.][./././././.]
<br>
# OSU MPI Bandwidth Test v3.1.1
<br>
# Size        Bandwidth (MB/s)
<br>
1                         0.52
<br>
2                         1.05
<br>
4                         2.08
<br>
8                         4.18
<br>
16                        8.21
<br>
32                       16.65
<br>
64                       32.60
<br>
128                      66.70
<br>
256                     132.45
<br>
512                     269.27
<br>
1024                    504.63
<br>
2048                    819.76
<br>
4096                    874.54
<br>
8192                   1447.11
<br>
16384                  2263.28
<br>
32768                  3236.85
<br>
65536                  3567.34
<br>
131072                 3555.17
<br>
262144                 3455.76
<br>
524288                 3441.80
<br>
1048576                3505.30
<br>
2097152                3534.01
<br>
4194304                3546.94
<br>
[mishima_at_manage OMB-3.1.1-openmpi2.0.0]$ mpirun -np 2 -mca pml ob1 -mca btl
<br>
self,sm,openib -bind-to core -report-binding
<br>
s osu_bw
<br>
[manage.cluster:18218] MCW rank 0 bound to socket 0[core 0[hwt 0]]:
<br>
[B/././././.][./././././.]
<br>
[manage.cluster:18218] MCW rank 1 bound to socket 0[core 1[hwt 0]]:
<br>
[./B/./././.][./././././.]
<br>
# OSU MPI Bandwidth Test v3.1.1
<br>
# Size        Bandwidth (MB/s)
<br>
1                         0.51
<br>
2                         1.03
<br>
4                         2.05
<br>
8                         4.07
<br>
16                        8.14
<br>
32                       16.32
<br>
64                       32.98
<br>
128                      63.70
<br>
256                     126.66
<br>
512                     252.61
<br>
1024                    480.22
<br>
2048                    810.54
<br>
4096                    290.61
<br>
8192                    512.49
<br>
16384                   764.60
<br>
32768                  1036.81
<br>
65536                  1182.81
<br>
131072                 1264.48
<br>
262144                 1235.82
<br>
524288                 1246.70
<br>
1048576                1254.66
<br>
2097152                1274.64
<br>
4194304                1280.65
<br>
[mishima_at_manage OMB-3.1.1-openmpi2.0.0]$ mpirun -np 2 -mca pml ob1 -mca btl
<br>
self,openib -bind-to core -report-bindings o
<br>
su_bw
<br>
[manage.cluster:18276] MCW rank 0 bound to socket 0[core 0[hwt 0]]:
<br>
[B/././././.][./././././.]
<br>
[manage.cluster:18276] MCW rank 1 bound to socket 0[core 1[hwt 0]]:
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
4                         2.18
<br>
8                         4.33
<br>
16                        8.69
<br>
32                       17.39
<br>
64                       34.34
<br>
128                      66.28
<br>
256                     130.36
<br>
512                     241.81
<br>
1024                    429.86
<br>
2048                    553.44
<br>
4096                    707.14
<br>
8192                    879.60
<br>
16384                   763.02
<br>
32768                  1042.89
<br>
65536                  1185.45
<br>
131072                 1267.56
<br>
262144                 1227.41
<br>
524288                 1244.61
<br>
1048576                1255.66
<br>
2097152                1273.55
<br>
4194304                1281.05
<br>

<br>

<br>
2016/07/27 9:02:49&#227;&#128;&#129;&quot;devel&quot;&#227;&#129;&#149;&#227;&#130;&#147;&#227;&#129;&#175;&#227;&#128;&#140;Re: [OMPI devel] sm BTL performace of
<br>
the openmpi-2.0.0&#227;&#128;&#141;&#227;&#129;&#167;&#230;&#155;&#184;&#227;&#129;&#141;&#227;&#129;&#190;&#227;&#129;&#151;&#227;&#129;&#159;
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; can you please run again with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --mca pml ob1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if Open MPI was built with mxm support, pml/cm and mtl/mxm are used
</span><br>
<span class="quotelev1">&gt; instead of pml/ob1 and btl/openib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 7/27/2016 8:56 AM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi folks,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I saw a performance degradation of openmpi-2.0.0 when I ran our
</span><br>
application
<br>
<span class="quotelev2">&gt; &gt; on a node (12cores). So I did 4 tests using osu_bw as below:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1: mpirun &#226;&#128;&#147;np 2 osu_bw				bad(30% of test2)
</span><br>
<span class="quotelev2">&gt; &gt; 2: mpirun &#226;&#128;&#147;np 2 &#226;&#128;&#147;mca btl self,sm osu_bw		good(same as
</span><br>
openmpi1.10.3)
<br>
<span class="quotelev2">&gt; &gt; 3: mpirun &#226;&#128;&#147;np 2 &#226;&#128;&#147;mca btl self,sm,openib osu_bw	bad(30% of test2)
</span><br>
<span class="quotelev2">&gt; &gt; 4: mpirun &#226;&#128;&#147;np 2 &#226;&#128;&#147;mca btl self,openib osu_bw	bad(30% of test2)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I  guess openib BTL was used in the test 1 and 3, because these results
</span><br>
are
<br>
<span class="quotelev2">&gt; &gt; almost  same  as  test  4. I believe that sm BTL should be used even in
</span><br>
the
<br>
<span class="quotelev2">&gt; &gt; test 1 and 3, because its priority is higher than openib.
</span><br>
Unfortunately, at
<br>
<span class="quotelev2">&gt; &gt; the  moment,  I couldn&#226;&#128;&#153;t figure out the root cause. So please someone
</span><br>
would
<br>
<span class="quotelev2">&gt; &gt; take care of it.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt; Tetsuya Mishima
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; P.S. Here I attached these test results.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [mishima_at_manage   OMB-3.1.1-openmpi2.0.0]$   mpirun  -np  2  -bind-to
</span><br>
core
<br>
<span class="quotelev2">&gt; &gt; -report-bindings osu_bw
</span><br>
<span class="quotelev2">&gt; &gt; [manage.cluster:13389]  MCW  rank  0  bound  to  socket  0[core  0[hwt
</span><br>
0]]:
<br>
<span class="quotelev2">&gt; &gt; [B/././././.][./././././.]
</span><br>
<span class="quotelev2">&gt; &gt; [manage.cluster:13389]  MCW  rank  1  bound  to  socket  0[core  1[hwt
</span><br>
0]]:
<br>
<span class="quotelev2">&gt; &gt; [./B/./././.][./././././.]
</span><br>
<span class="quotelev2">&gt; &gt; # OSU MPI Bandwidth Test v3.1.1
</span><br>
<span class="quotelev2">&gt; &gt; # Size        Bandwidth (MB/s)
</span><br>
<span class="quotelev2">&gt; &gt; 1                         1.49
</span><br>
<span class="quotelev2">&gt; &gt; 2                         3.04
</span><br>
<span class="quotelev2">&gt; &gt; 4                         6.13
</span><br>
<span class="quotelev2">&gt; &gt; 8                        12.23
</span><br>
<span class="quotelev2">&gt; &gt; 16                       25.01
</span><br>
<span class="quotelev2">&gt; &gt; 32                       49.96
</span><br>
<span class="quotelev2">&gt; &gt; 64                       87.07
</span><br>
<span class="quotelev2">&gt; &gt; 128                     138.87
</span><br>
<span class="quotelev2">&gt; &gt; 256                     245.97
</span><br>
<span class="quotelev2">&gt; &gt; 512                     423.30
</span><br>
<span class="quotelev2">&gt; &gt; 1024                    865.85
</span><br>
<span class="quotelev2">&gt; &gt; 2048                   1279.63
</span><br>
<span class="quotelev2">&gt; &gt; 4096                    264.79
</span><br>
<span class="quotelev2">&gt; &gt; 8192                    473.92
</span><br>
<span class="quotelev2">&gt; &gt; 16384                   739.27
</span><br>
<span class="quotelev2">&gt; &gt; 32768                  1030.49
</span><br>
<span class="quotelev2">&gt; &gt; 65536                  1190.21
</span><br>
<span class="quotelev2">&gt; &gt; 131072                 1270.77
</span><br>
<span class="quotelev2">&gt; &gt; 262144                 1238.74
</span><br>
<span class="quotelev2">&gt; &gt; 524288                 1245.97
</span><br>
<span class="quotelev2">&gt; &gt; 1048576                1260.09
</span><br>
<span class="quotelev2">&gt; &gt; 2097152                1274.53
</span><br>
<span class="quotelev2">&gt; &gt; 4194304                1285.07
</span><br>
<span class="quotelev2">&gt; &gt; [mishima_at_manage  OMB-3.1.1-openmpi2.0.0]$  mpirun  -np  2  -mca btl
</span><br>
self,sm
<br>
<span class="quotelev2">&gt; &gt; -bind-to core -report-bindings osu_bw
</span><br>
<span class="quotelev2">&gt; &gt; [manage.cluster:13448]  MCW  rank  0  bound  to  socket  0[core  0[hwt
</span><br>
0]]:
<br>
<span class="quotelev2">&gt; &gt; [B/././././.][./././././.]
</span><br>
<span class="quotelev2">&gt; &gt; [manage.cluster:13448]  MCW  rank  1  bound  to  socket  0[core  1[hwt
</span><br>
0]]:
<br>
<span class="quotelev2">&gt; &gt; [./B/./././.][./././././.]
</span><br>
<span class="quotelev2">&gt; &gt; # OSU MPI Bandwidth Test v3.1.1
</span><br>
<span class="quotelev2">&gt; &gt; # Size        Bandwidth (MB/s)
</span><br>
<span class="quotelev2">&gt; &gt; 1                         0.51
</span><br>
<span class="quotelev2">&gt; &gt; 2                         1.01
</span><br>
<span class="quotelev2">&gt; &gt; 4                         2.03
</span><br>
<span class="quotelev2">&gt; &gt; 8                         4.08
</span><br>
<span class="quotelev2">&gt; &gt; 16                        7.92
</span><br>
<span class="quotelev2">&gt; &gt; 32                       16.16
</span><br>
<span class="quotelev2">&gt; &gt; 64                       32.53
</span><br>
<span class="quotelev2">&gt; &gt; 128                      64.30
</span><br>
<span class="quotelev2">&gt; &gt; 256                     128.19
</span><br>
<span class="quotelev2">&gt; &gt; 512                     256.48
</span><br>
<span class="quotelev2">&gt; &gt; 1024                    468.62
</span><br>
<span class="quotelev2">&gt; &gt; 2048                    785.29
</span><br>
<span class="quotelev2">&gt; &gt; 4096                    854.78
</span><br>
<span class="quotelev2">&gt; &gt; 8192                   1404.51
</span><br>
<span class="quotelev2">&gt; &gt; 16384                  2249.20
</span><br>
<span class="quotelev2">&gt; &gt; 32768                  3136.40
</span><br>
<span class="quotelev2">&gt; &gt; 65536                  3495.84
</span><br>
<span class="quotelev2">&gt; &gt; 131072                 3436.69
</span><br>
<span class="quotelev2">&gt; &gt; 262144                 3392.11
</span><br>
<span class="quotelev2">&gt; &gt; 524288                 3400.07
</span><br>
<span class="quotelev2">&gt; &gt; 1048576                3460.60
</span><br>
<span class="quotelev2">&gt; &gt; 2097152                3488.09
</span><br>
<span class="quotelev2">&gt; &gt; 4194304                3498.45
</span><br>
<span class="quotelev2">&gt; &gt; [mishima_at_manage    OMB-3.1.1-openmpi2.0.0]$   mpirun   -np   2   -mca
</span><br>
btl
<br>
<span class="quotelev2">&gt; &gt; self,sm,openib -bind-to core -report-bindings osu_bw
</span><br>
<span class="quotelev2">&gt; &gt; [manage.cluster:13462]  MCW  rank  0  bound  to  socket  0[core  0[hwt
</span><br>
0]]:
<br>
<span class="quotelev2">&gt; &gt; [B/././././.][./././././.]
</span><br>
<span class="quotelev2">&gt; &gt; [manage.cluster:13462]  MCW  rank  1  bound  to  socket  0[core  1[hwt
</span><br>
0]]:
<br>
<span class="quotelev2">&gt; &gt; [./B/./././.][./././././.]
</span><br>
<span class="quotelev2">&gt; &gt; # OSU MPI Bandwidth Test v3.1.1
</span><br>
<span class="quotelev2">&gt; &gt; # Size        Bandwidth (MB/s)
</span><br>
<span class="quotelev2">&gt; &gt; 1                         0.54
</span><br>
<span class="quotelev2">&gt; &gt; 2                         1.09
</span><br>
<span class="quotelev2">&gt; &gt; 4                         2.18
</span><br>
<span class="quotelev2">&gt; &gt; 8                         4.37
</span><br>
<span class="quotelev2">&gt; &gt; 16                        8.75
</span><br>
<span class="quotelev2">&gt; &gt; 32                       17.37
</span><br>
<span class="quotelev2">&gt; &gt; 64                       34.67
</span><br>
<span class="quotelev2">&gt; &gt; 128                      66.66
</span><br>
<span class="quotelev2">&gt; &gt; 256                     132.55
</span><br>
<span class="quotelev2">&gt; &gt; 512                     261.52
</span><br>
<span class="quotelev2">&gt; &gt; 1024                    489.51
</span><br>
<span class="quotelev2">&gt; &gt; 2048                    818.38
</span><br>
<span class="quotelev2">&gt; &gt; 4096                    290.48
</span><br>
<span class="quotelev2">&gt; &gt; 8192                    511.64
</span><br>
<span class="quotelev2">&gt; &gt; 16384                   765.24
</span><br>
<span class="quotelev2">&gt; &gt; 32768                  1043.28
</span><br>
<span class="quotelev2">&gt; &gt; 65536                  1180.48
</span><br>
<span class="quotelev2">&gt; &gt; 131072                 1261.41
</span><br>
<span class="quotelev2">&gt; &gt; 262144                 1232.86
</span><br>
<span class="quotelev2">&gt; &gt; 524288                 1245.70
</span><br>
<span class="quotelev2">&gt; &gt; 1048576                1245.69
</span><br>
<span class="quotelev2">&gt; &gt; 2097152                1268.67
</span><br>
<span class="quotelev2">&gt; &gt; 4194304                1281.33
</span><br>
<span class="quotelev2">&gt; &gt; [mishima_at_manage  OMB-3.1.1-openmpi2.0.0]$ mpirun -np 2 -mca btl
</span><br>
self,openib
<br>
<span class="quotelev2">&gt; &gt; -bind-to core -report-bindings osu_bw
</span><br>
<span class="quotelev2">&gt; &gt; [manage.cluster:13521]  MCW  rank  0  bound  to  socket  0[core  0[hwt
</span><br>
0]]:
<br>
<span class="quotelev2">&gt; &gt; [B/././././.][./././././.]
</span><br>
<span class="quotelev2">&gt; &gt; [manage.cluster:13521]  MCW  rank  1  bound  to  socket  0[core  1[hwt
</span><br>
0]]:
<br>
<span class="quotelev2">&gt; &gt; [./B/./././.][./././././.]
</span><br>
<span class="quotelev2">&gt; &gt; # OSU MPI Bandwidth Test v3.1.1
</span><br>
<span class="quotelev2">&gt; &gt; # Size        Bandwidth (MB/s)
</span><br>
<span class="quotelev2">&gt; &gt; 1                         0.54
</span><br>
<span class="quotelev2">&gt; &gt; 2                         1.08
</span><br>
<span class="quotelev2">&gt; &gt; 4                         2.16
</span><br>
<span class="quotelev2">&gt; &gt; 8                         4.34
</span><br>
<span class="quotelev2">&gt; &gt; 16                        8.64
</span><br>
<span class="quotelev2">&gt; &gt; 32                       17.25
</span><br>
<span class="quotelev2">&gt; &gt; 64                       34.30
</span><br>
<span class="quotelev2">&gt; &gt; 128                      66.13
</span><br>
<span class="quotelev2">&gt; &gt; 256                     129.99
</span><br>
<span class="quotelev2">&gt; &gt; 512                     242.26
</span><br>
<span class="quotelev2">&gt; &gt; 1024                    429.24
</span><br>
<span class="quotelev2">&gt; &gt; 2048                    556.00
</span><br>
<span class="quotelev2">&gt; &gt; 4096                    706.80
</span><br>
<span class="quotelev2">&gt; &gt; 8192                    874.35
</span><br>
<span class="quotelev2">&gt; &gt; 16384                   762.60
</span><br>
<span class="quotelev2">&gt; &gt; 32768                  1039.61
</span><br>
<span class="quotelev2">&gt; &gt; 65536                  1184.03
</span><br>
<span class="quotelev2">&gt; &gt; 131072                 1267.09
</span><br>
<span class="quotelev2">&gt; &gt; 262144                 1230.76
</span><br>
<span class="quotelev2">&gt; &gt; 524288                 1246.92
</span><br>
<span class="quotelev2">&gt; &gt; 1048576                1255.88
</span><br>
<span class="quotelev2">&gt; &gt; 2097152                1274.54
</span><br>
<span class="quotelev2">&gt; &gt; 4194304
</span><br>
1281.63
<br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<a href="http://www.open-mpi.org/community/lists/devel/2016/07/19288.php">http://www.open-mpi.org/community/lists/devel/2016/07/19288.php</a>
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/develLink">https://www.open-mpi.org/mailman/listinfo.cgi/develLink</a> to
</span><br>
this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19289.php">http://www.open-mpi.org/community/lists/devel/2016/07/19289.php</a><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19291.php">Nathan Hjelm: "Re: [OMPI devel] sm BTL performace of the openmpi-2.0.0"</a>
<li><strong>Previous message:</strong> <a href="19289.php">Gilles Gouaillardet: "Re: [OMPI devel] sm BTL performace of the openmpi-2.0.0"</a>
<li><strong>In reply to:</strong> <a href="19289.php">Gilles Gouaillardet: "Re: [OMPI devel] sm BTL performace of the openmpi-2.0.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19291.php">Nathan Hjelm: "Re: [OMPI devel] sm BTL performace of the openmpi-2.0.0"</a>
<li><strong>Reply:</strong> <a href="19291.php">Nathan Hjelm: "Re: [OMPI devel] sm BTL performace of the openmpi-2.0.0"</a>
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
