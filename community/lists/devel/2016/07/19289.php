<?
$subject_val = "Re: [OMPI devel] sm BTL performace of the openmpi-2.0.0";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 26 20:02:53 2016" -->
<!-- isoreceived="20160727000253" -->
<!-- sent="Wed, 27 Jul 2016 09:02:49 +0900" -->
<!-- isosent="20160727000249" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] sm BTL performace of the openmpi-2.0.0" -->
<!-- id="24361a3d-8c32-cafe-7995-23e480f39249_at_rist.or.jp" -->
<!-- charset="utf-8" -->
<!-- inreplyto="OF4681B235.734B1741-ON49257FFC.0081F5D1-49257FFC.00838B59_at_jcity.maeda.co.jp" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-26 20:02:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19290.php">tmishima_at_[hidden]: "Re: [OMPI devel] sm BTL performace of the openmpi-2.0.0"</a>
<li><strong>Previous message:</strong> <a href="19288.php">tmishima_at_[hidden]: "[OMPI devel] sm BTL performace of the openmpi-2.0.0"</a>
<li><strong>In reply to:</strong> <a href="19288.php">tmishima_at_[hidden]: "[OMPI devel] sm BTL performace of the openmpi-2.0.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19290.php">tmishima_at_[hidden]: "Re: [OMPI devel] sm BTL performace of the openmpi-2.0.0"</a>
<li><strong>Reply:</strong> <a href="19290.php">tmishima_at_[hidden]: "Re: [OMPI devel] sm BTL performace of the openmpi-2.0.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p><p>can you please run again with
<br>
<p>--mca pml ob1
<br>
<p><p>if Open MPI was built with mxm support, pml/cm and mtl/mxm are used 
<br>
instead of pml/ob1 and btl/openib
<br>
<p><p>Cheers,
<br>
<p><p>Gilles
<br>
<p><p>On 7/27/2016 8:56 AM, tmishima_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Hi folks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I saw a performance degradation of openmpi-2.0.0 when I ran our application
</span><br>
<span class="quotelev1">&gt; on a node (12cores). So I did 4 tests using osu_bw as below:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1: mpirun &#226;&#128;&#147;np 2 osu_bw				bad(30% of test2)
</span><br>
<span class="quotelev1">&gt; 2: mpirun &#226;&#128;&#147;np 2 &#226;&#128;&#147;mca btl self,sm osu_bw		good(same as openmpi1.10.3)
</span><br>
<span class="quotelev1">&gt; 3: mpirun &#226;&#128;&#147;np 2 &#226;&#128;&#147;mca btl self,sm,openib osu_bw	bad(30% of test2)
</span><br>
<span class="quotelev1">&gt; 4: mpirun &#226;&#128;&#147;np 2 &#226;&#128;&#147;mca btl self,openib osu_bw	bad(30% of test2)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I  guess openib BTL was used in the test 1 and 3, because these results are
</span><br>
<span class="quotelev1">&gt; almost  same  as  test  4. I believe that sm BTL should be used even in the
</span><br>
<span class="quotelev1">&gt; test 1 and 3, because its priority is higher than openib. Unfortunately, at
</span><br>
<span class="quotelev1">&gt; the  moment,  I couldn&#226;&#128;&#153;t figure out the root cause. So please someone would
</span><br>
<span class="quotelev1">&gt; take care of it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Tetsuya Mishima
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; P.S. Here I attached these test results.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [mishima_at_manage   OMB-3.1.1-openmpi2.0.0]$   mpirun  -np  2  -bind-to  core
</span><br>
<span class="quotelev1">&gt; -report-bindings osu_bw
</span><br>
<span class="quotelev1">&gt; [manage.cluster:13389]  MCW  rank  0  bound  to  socket  0[core  0[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [B/././././.][./././././.]
</span><br>
<span class="quotelev1">&gt; [manage.cluster:13389]  MCW  rank  1  bound  to  socket  0[core  1[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [./B/./././.][./././././.]
</span><br>
<span class="quotelev1">&gt; # OSU MPI Bandwidth Test v3.1.1
</span><br>
<span class="quotelev1">&gt; # Size        Bandwidth (MB/s)
</span><br>
<span class="quotelev1">&gt; 1                         1.49
</span><br>
<span class="quotelev1">&gt; 2                         3.04
</span><br>
<span class="quotelev1">&gt; 4                         6.13
</span><br>
<span class="quotelev1">&gt; 8                        12.23
</span><br>
<span class="quotelev1">&gt; 16                       25.01
</span><br>
<span class="quotelev1">&gt; 32                       49.96
</span><br>
<span class="quotelev1">&gt; 64                       87.07
</span><br>
<span class="quotelev1">&gt; 128                     138.87
</span><br>
<span class="quotelev1">&gt; 256                     245.97
</span><br>
<span class="quotelev1">&gt; 512                     423.30
</span><br>
<span class="quotelev1">&gt; 1024                    865.85
</span><br>
<span class="quotelev1">&gt; 2048                   1279.63
</span><br>
<span class="quotelev1">&gt; 4096                    264.79
</span><br>
<span class="quotelev1">&gt; 8192                    473.92
</span><br>
<span class="quotelev1">&gt; 16384                   739.27
</span><br>
<span class="quotelev1">&gt; 32768                  1030.49
</span><br>
<span class="quotelev1">&gt; 65536                  1190.21
</span><br>
<span class="quotelev1">&gt; 131072                 1270.77
</span><br>
<span class="quotelev1">&gt; 262144                 1238.74
</span><br>
<span class="quotelev1">&gt; 524288                 1245.97
</span><br>
<span class="quotelev1">&gt; 1048576                1260.09
</span><br>
<span class="quotelev1">&gt; 2097152                1274.53
</span><br>
<span class="quotelev1">&gt; 4194304                1285.07
</span><br>
<span class="quotelev1">&gt; [mishima_at_manage  OMB-3.1.1-openmpi2.0.0]$  mpirun  -np  2  -mca btl self,sm
</span><br>
<span class="quotelev1">&gt; -bind-to core -report-bindings osu_bw
</span><br>
<span class="quotelev1">&gt; [manage.cluster:13448]  MCW  rank  0  bound  to  socket  0[core  0[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [B/././././.][./././././.]
</span><br>
<span class="quotelev1">&gt; [manage.cluster:13448]  MCW  rank  1  bound  to  socket  0[core  1[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [./B/./././.][./././././.]
</span><br>
<span class="quotelev1">&gt; # OSU MPI Bandwidth Test v3.1.1
</span><br>
<span class="quotelev1">&gt; # Size        Bandwidth (MB/s)
</span><br>
<span class="quotelev1">&gt; 1                         0.51
</span><br>
<span class="quotelev1">&gt; 2                         1.01
</span><br>
<span class="quotelev1">&gt; 4                         2.03
</span><br>
<span class="quotelev1">&gt; 8                         4.08
</span><br>
<span class="quotelev1">&gt; 16                        7.92
</span><br>
<span class="quotelev1">&gt; 32                       16.16
</span><br>
<span class="quotelev1">&gt; 64                       32.53
</span><br>
<span class="quotelev1">&gt; 128                      64.30
</span><br>
<span class="quotelev1">&gt; 256                     128.19
</span><br>
<span class="quotelev1">&gt; 512                     256.48
</span><br>
<span class="quotelev1">&gt; 1024                    468.62
</span><br>
<span class="quotelev1">&gt; 2048                    785.29
</span><br>
<span class="quotelev1">&gt; 4096                    854.78
</span><br>
<span class="quotelev1">&gt; 8192                   1404.51
</span><br>
<span class="quotelev1">&gt; 16384                  2249.20
</span><br>
<span class="quotelev1">&gt; 32768                  3136.40
</span><br>
<span class="quotelev1">&gt; 65536                  3495.84
</span><br>
<span class="quotelev1">&gt; 131072                 3436.69
</span><br>
<span class="quotelev1">&gt; 262144                 3392.11
</span><br>
<span class="quotelev1">&gt; 524288                 3400.07
</span><br>
<span class="quotelev1">&gt; 1048576                3460.60
</span><br>
<span class="quotelev1">&gt; 2097152                3488.09
</span><br>
<span class="quotelev1">&gt; 4194304                3498.45
</span><br>
<span class="quotelev1">&gt; [mishima_at_manage    OMB-3.1.1-openmpi2.0.0]$   mpirun   -np   2   -mca   btl
</span><br>
<span class="quotelev1">&gt; self,sm,openib -bind-to core -report-bindings osu_bw
</span><br>
<span class="quotelev1">&gt; [manage.cluster:13462]  MCW  rank  0  bound  to  socket  0[core  0[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [B/././././.][./././././.]
</span><br>
<span class="quotelev1">&gt; [manage.cluster:13462]  MCW  rank  1  bound  to  socket  0[core  1[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [./B/./././.][./././././.]
</span><br>
<span class="quotelev1">&gt; # OSU MPI Bandwidth Test v3.1.1
</span><br>
<span class="quotelev1">&gt; # Size        Bandwidth (MB/s)
</span><br>
<span class="quotelev1">&gt; 1                         0.54
</span><br>
<span class="quotelev1">&gt; 2                         1.09
</span><br>
<span class="quotelev1">&gt; 4                         2.18
</span><br>
<span class="quotelev1">&gt; 8                         4.37
</span><br>
<span class="quotelev1">&gt; 16                        8.75
</span><br>
<span class="quotelev1">&gt; 32                       17.37
</span><br>
<span class="quotelev1">&gt; 64                       34.67
</span><br>
<span class="quotelev1">&gt; 128                      66.66
</span><br>
<span class="quotelev1">&gt; 256                     132.55
</span><br>
<span class="quotelev1">&gt; 512                     261.52
</span><br>
<span class="quotelev1">&gt; 1024                    489.51
</span><br>
<span class="quotelev1">&gt; 2048                    818.38
</span><br>
<span class="quotelev1">&gt; 4096                    290.48
</span><br>
<span class="quotelev1">&gt; 8192                    511.64
</span><br>
<span class="quotelev1">&gt; 16384                   765.24
</span><br>
<span class="quotelev1">&gt; 32768                  1043.28
</span><br>
<span class="quotelev1">&gt; 65536                  1180.48
</span><br>
<span class="quotelev1">&gt; 131072                 1261.41
</span><br>
<span class="quotelev1">&gt; 262144                 1232.86
</span><br>
<span class="quotelev1">&gt; 524288                 1245.70
</span><br>
<span class="quotelev1">&gt; 1048576                1245.69
</span><br>
<span class="quotelev1">&gt; 2097152                1268.67
</span><br>
<span class="quotelev1">&gt; 4194304                1281.33
</span><br>
<span class="quotelev1">&gt; [mishima_at_manage  OMB-3.1.1-openmpi2.0.0]$ mpirun -np 2 -mca btl self,openib
</span><br>
<span class="quotelev1">&gt; -bind-to core -report-bindings osu_bw
</span><br>
<span class="quotelev1">&gt; [manage.cluster:13521]  MCW  rank  0  bound  to  socket  0[core  0[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [B/././././.][./././././.]
</span><br>
<span class="quotelev1">&gt; [manage.cluster:13521]  MCW  rank  1  bound  to  socket  0[core  1[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [./B/./././.][./././././.]
</span><br>
<span class="quotelev1">&gt; # OSU MPI Bandwidth Test v3.1.1
</span><br>
<span class="quotelev1">&gt; # Size        Bandwidth (MB/s)
</span><br>
<span class="quotelev1">&gt; 1                         0.54
</span><br>
<span class="quotelev1">&gt; 2                         1.08
</span><br>
<span class="quotelev1">&gt; 4                         2.16
</span><br>
<span class="quotelev1">&gt; 8                         4.34
</span><br>
<span class="quotelev1">&gt; 16                        8.64
</span><br>
<span class="quotelev1">&gt; 32                       17.25
</span><br>
<span class="quotelev1">&gt; 64                       34.30
</span><br>
<span class="quotelev1">&gt; 128                      66.13
</span><br>
<span class="quotelev1">&gt; 256                     129.99
</span><br>
<span class="quotelev1">&gt; 512                     242.26
</span><br>
<span class="quotelev1">&gt; 1024                    429.24
</span><br>
<span class="quotelev1">&gt; 2048                    556.00
</span><br>
<span class="quotelev1">&gt; 4096                    706.80
</span><br>
<span class="quotelev1">&gt; 8192                    874.35
</span><br>
<span class="quotelev1">&gt; 16384                   762.60
</span><br>
<span class="quotelev1">&gt; 32768                  1039.61
</span><br>
<span class="quotelev1">&gt; 65536                  1184.03
</span><br>
<span class="quotelev1">&gt; 131072                 1267.09
</span><br>
<span class="quotelev1">&gt; 262144                 1230.76
</span><br>
<span class="quotelev1">&gt; 524288                 1246.92
</span><br>
<span class="quotelev1">&gt; 1048576                1255.88
</span><br>
<span class="quotelev1">&gt; 2097152                1274.54
</span><br>
<span class="quotelev1">&gt; 4194304                                                             1281.63
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19288.php">http://www.open-mpi.org/community/lists/devel/2016/07/19288.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19290.php">tmishima_at_[hidden]: "Re: [OMPI devel] sm BTL performace of the openmpi-2.0.0"</a>
<li><strong>Previous message:</strong> <a href="19288.php">tmishima_at_[hidden]: "[OMPI devel] sm BTL performace of the openmpi-2.0.0"</a>
<li><strong>In reply to:</strong> <a href="19288.php">tmishima_at_[hidden]: "[OMPI devel] sm BTL performace of the openmpi-2.0.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19290.php">tmishima_at_[hidden]: "Re: [OMPI devel] sm BTL performace of the openmpi-2.0.0"</a>
<li><strong>Reply:</strong> <a href="19290.php">tmishima_at_[hidden]: "Re: [OMPI devel] sm BTL performace of the openmpi-2.0.0"</a>
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
