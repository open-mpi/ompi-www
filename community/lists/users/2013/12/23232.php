<?
$subject_val = "Re: [OMPI users] tcp of openmpi-1.7.3 under our environment is very slow";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 18 18:48:02 2013" -->
<!-- isoreceived="20131218234802" -->
<!-- sent="Thu, 19 Dec 2013 08:47:48 +0900" -->
<!-- isosent="20131218234748" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="Re: [OMPI users] tcp of openmpi-1.7.3 under our environment is very slow" -->
<!-- id="OFAD0DB395.AD05A9D0-ON49257C45.0081705F-49257C45.0082BD52_at_jcity.maeda.co.jp" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="7D1A65FF-DAFB-4409-B52E-290F8280FF69_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] tcp of openmpi-1.7.3 under our environment is very slow<br>
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20users]%20tcp%20of%20openmpi-1.7.3%20under%20our%20environment%20is%20very%20slow"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2013-12-18 18:47:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23233.php">Blosch, Edwin L: "[OMPI users] What's the status of OpenMPI and thread safety?"</a>
<li><strong>Previous message:</strong> <a href="23231.php">Siddhartha Jana: "Re: [OMPI users] [OMPI devel] Recommended tool to measure packet counters"</a>
<li><strong>In reply to:</strong> <a href="23221.php">Jeff Squyres (jsquyres): "Re: [OMPI users] tcp of openmpi-1.7.3 under our environment is very slow"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23241.php">tmishima_at_[hidden]: "[OMPI users] &quot;-bind-to numa&quot; of openmpi-1.7.4rc1 dosen't work for our magny cours based 32 core node"</a>
<li><strong>Reply:</strong> <a href="23241.php">tmishima_at_[hidden]: "[OMPI users] &quot;-bind-to numa&quot; of openmpi-1.7.4rc1 dosen't work for our magny cours based 32 core node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>I did with processor binding enabled using both of openmpi-1.7.3
<br>
and 1.7.4rc1. But I got the same results as no binding.
<br>
<p>In addition, core mapping of 1.7.4rc1 seems to be strange, which
<br>
has no relation with tcp slowdown.
<br>
<p>Regards,
<br>
Tetsuya Mishima
<br>
<p><p>[mishima_at_node08 OMB-3.1.1]$ mpirun -V
<br>
mpirun (Open MPI) 1.7.3
<br>
<p>Report bugs to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
[mishima_at_node08 OMB-3.1.1]$ mpirun -np 2 -host node08,node09 -mca btl
<br>
^openib -bind-to core -report-bindings osu_bw
<br>
[node08.cluster:23950] MCW rank 0 bound to socket 0[core 0[hwt 0]]:
<br>
[B/././.][./././.]
<br>
[node09.cluster:23477] MCW rank 1 bound to socket 0[core 0[hwt 0]]:
<br>
[B/././.][./././.]
<br>
# OSU MPI Bandwidth Test v3.1.1
<br>
# Size        Bandwidth (MB/s)
<br>
1                         0.00
<br>
2                         0.01
<br>
4                         0.01
<br>
8                         0.02
<br>
16                        0.05
<br>
32                        0.09
<br>
64                        6.49
<br>
128                       0.39
<br>
256                       1.74
<br>
512                       9.51
<br>
1024                     26.59
<br>
2048                    182.55
<br>
4096                    202.52
<br>
8192                    217.44
<br>
16384                   227.91
<br>
32768                   231.11
<br>
65536                   112.57
<br>
131072                  217.01
<br>
262144                  215.49
<br>
524288                  233.97
<br>
1048576                 231.33
<br>
2097152                 235.04
<br>
4194304                 234.77
<br>
[mishima_at_node08 OMB-3.1.1]$ mpirun -np 2 -host node08,node09 -mca btl
<br>
^openib -bind-to core -report-bindings osu_latency
<br>
[node08.cluster:23968] MCW rank 0 bound to socket 0[core 0[hwt 0]]:
<br>
[B/././.][./././.]
<br>
[node09.cluster:23522] MCW rank 1 bound to socket 0[core 0[hwt 0]]:
<br>
[B/././.][./././.]
<br>
# OSU MPI Latency Test v3.1.1
<br>
# Size            Latency (us)
<br>
0                        18.08
<br>
1                        18.46
<br>
2                        18.37
<br>
4                        18.45
<br>
8                        18.96
<br>
16                       18.98
<br>
32                       19.31
<br>
64                       19.83
<br>
128                      20.24
<br>
256                      21.86
<br>
512                      24.74
<br>
1024                     30.02
<br>
2048                     71.07
<br>
4096                     73.64
<br>
8192                    106.67
<br>
16384                   176.36
<br>
32768                   250.88
<br>
65536                 20188.73
<br>
131072                21141.11
<br>
262144                18462.47
<br>
524288                24940.10
<br>
1048576               26160.76
<br>
2097152               29538.91
<br>
4194304               42420.03
<br>
<p><p>[mishima_at_node08 OMB-3.1.1]$ mpirun -V
<br>
mpirun (Open MPI) 1.7.4rc1
<br>
<p>Report bugs to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
[mishima_at_node08 OMB-3.1.1]$ mpirun -np 2 -host node08,node09 -mca btl
<br>
^openib -bind-to core -report-bindings osu_bw
<br>
[node08.cluster:23932] MCW rank 0 bound to socket 0[core 0[hwt 0]]:
<br>
[B/././.][./././.]
<br>
[node09.cluster:23409] MCW rank 1 bound to socket 0[core 1[hwt 0]]:
<br>
[./B/./.][./././.]
<br>
# OSU MPI Bandwidth Test v3.1.1
<br>
# Size        Bandwidth (MB/s)
<br>
1                         0.00
<br>
2                         0.01
<br>
4                         0.01
<br>
8                         0.03
<br>
16                        0.05
<br>
32                        0.08
<br>
64                        6.35
<br>
128                       0.34
<br>
256                       3.79
<br>
512                       8.38
<br>
1024                      9.53
<br>
2048                    182.12
<br>
4096                    203.16
<br>
8192                    215.49
<br>
16384                   228.56
<br>
32768                   231.28
<br>
65536                   134.46
<br>
131072                  217.33
<br>
262144                  226.90
<br>
524288                  220.98
<br>
1048576                 234.73
<br>
2097152                 232.56
<br>
4194304                 234.78
<br>
[mishima_at_node08 OMB-3.1.1]$ mpirun -np 2 -host node08,node09 -mca btl
<br>
^openib -bind-to core -report-bindings osu_latency
<br>
[node08.cluster:23940] MCW rank 0 bound to socket 0[core 0[hwt 0]]:
<br>
[B/././.][./././.]
<br>
[node09.cluster:23443] MCW rank 1 bound to socket 0[core 1[hwt 0]]:
<br>
[./B/./.][./././.]
<br>
# OSU MPI Latency Test v3.1.1
<br>
# Size            Latency (us)
<br>
0                        19.99
<br>
1                        19.79
<br>
2                        19.87
<br>
4                        20.04
<br>
8                        19.99
<br>
16                       20.00
<br>
32                       20.12
<br>
64                       20.85
<br>
128                      21.27
<br>
256                      22.73
<br>
512                      25.57
<br>
1024                     31.25
<br>
2048                     41.68
<br>
4096                     56.41
<br>
8192                     90.48
<br>
16384                   177.76
<br>
32768                   252.26
<br>
65536                 20489.12
<br>
131072                21235.08
<br>
262144                20278.82
<br>
524288                24009.70
<br>
1048576               25395.96
<br>
2097152               30260.70
<br>
4194304               41058.17
<br>
<p><span class="quotelev1">&gt; Can you re-run these tests with processor binding enabled?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 16, 2013, at 6:36 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I usually use infiniband network, where openmpi-1.7.3 and 1.6.5 works
</span><br>
fine.
<br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The other days, I had a chance to use tcp network(1GbE) and I noticed
</span><br>
that
<br>
<span class="quotelev2">&gt; &gt; my application with openmpi-1.7.3 was quite slower than openmpi-1.6.5.
</span><br>
<span class="quotelev2">&gt; &gt; So, I did OSU MPI Bandwidth Test v3.1.1 as shown below, which shows
</span><br>
<span class="quotelev2">&gt; &gt; bandwidth for smaller size(&lt; 1024) is very slow compared with 1.6.5.
</span><br>
<span class="quotelev2">&gt; &gt; In addition, the latency for larger size( &gt;65536 ) seems to be strange.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Does this depend on our local environment or some mca parameter would
</span><br>
be
<br>
<span class="quotelev2">&gt; &gt; necesarry? I'm afraid that something is wrong with tcp of
</span><br>
openmpi-1.7.3.
<br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; openmpi-1.7.3:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [mishima_at_node07 OMB-3.1.1]$ mpirun -np 2 -host node07,node08 -mca tbl
</span><br>
<span class="quotelev2">&gt; &gt; ^openib osu_bw
</span><br>
<span class="quotelev2">&gt; &gt; # OSU MPI Bandwidth Test v3.1.1
</span><br>
<span class="quotelev2">&gt; &gt; # Size        Bandwidth (MB/s)
</span><br>
<span class="quotelev2">&gt; &gt; 1                         0.00
</span><br>
<span class="quotelev2">&gt; &gt; 2                         0.01
</span><br>
<span class="quotelev2">&gt; &gt; 4                         0.01
</span><br>
<span class="quotelev2">&gt; &gt; 8                         0.03
</span><br>
<span class="quotelev2">&gt; &gt; 16                        0.05
</span><br>
<span class="quotelev2">&gt; &gt; 32                        0.10
</span><br>
<span class="quotelev2">&gt; &gt; 64                        0.32
</span><br>
<span class="quotelev2">&gt; &gt; 128                       0.37
</span><br>
<span class="quotelev2">&gt; &gt; 256                       0.87
</span><br>
<span class="quotelev2">&gt; &gt; 512                       5.97
</span><br>
<span class="quotelev2">&gt; &gt; 1024                     20.00
</span><br>
<span class="quotelev2">&gt; &gt; 2048                    182.87
</span><br>
<span class="quotelev2">&gt; &gt; 4096                    202.53
</span><br>
<span class="quotelev2">&gt; &gt; 8192                    215.14
</span><br>
<span class="quotelev2">&gt; &gt; 16384                   225.16
</span><br>
<span class="quotelev2">&gt; &gt; 32768                   228.58
</span><br>
<span class="quotelev2">&gt; &gt; 65536                   115.23
</span><br>
<span class="quotelev2">&gt; &gt; 131072                  198.24
</span><br>
<span class="quotelev2">&gt; &gt; 262144                  193.38
</span><br>
<span class="quotelev2">&gt; &gt; 524288                  233.03
</span><br>
<span class="quotelev2">&gt; &gt; 1048576                 227.31
</span><br>
<span class="quotelev2">&gt; &gt; 2097152                 233.07
</span><br>
<span class="quotelev2">&gt; &gt; 4194304                 233.25
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [mishima_at_node07 OMB-3.1.1]$ mpirun -np 2 -host node07,node08 -mca btl
</span><br>
<span class="quotelev2">&gt; &gt; ^openib osu_latency
</span><br>
<span class="quotelev2">&gt; &gt; # OSU MPI Latency Test v3.1.1
</span><br>
<span class="quotelev2">&gt; &gt; # Size            Latency (us)
</span><br>
<span class="quotelev2">&gt; &gt; 0                        19.23
</span><br>
<span class="quotelev2">&gt; &gt; 1                        19.57
</span><br>
<span class="quotelev2">&gt; &gt; 2                        19.52
</span><br>
<span class="quotelev2">&gt; &gt; 4                        19.88
</span><br>
<span class="quotelev2">&gt; &gt; 8                        20.44
</span><br>
<span class="quotelev2">&gt; &gt; 16                       20.38
</span><br>
<span class="quotelev2">&gt; &gt; 32                       20.78
</span><br>
<span class="quotelev2">&gt; &gt; 64                       21.14
</span><br>
<span class="quotelev2">&gt; &gt; 128                      21.75
</span><br>
<span class="quotelev2">&gt; &gt; 256                      23.20
</span><br>
<span class="quotelev2">&gt; &gt; 512                      26.12
</span><br>
<span class="quotelev2">&gt; &gt; 1024                     31.54
</span><br>
<span class="quotelev2">&gt; &gt; 2048                     41.72
</span><br>
<span class="quotelev2">&gt; &gt; 4096                     64.55
</span><br>
<span class="quotelev2">&gt; &gt; 8192                    107.52
</span><br>
<span class="quotelev2">&gt; &gt; 16384                   179.23
</span><br>
<span class="quotelev2">&gt; &gt; 32768                   251.58
</span><br>
<span class="quotelev2">&gt; &gt; 65536                 20689.68
</span><br>
<span class="quotelev2">&gt; &gt; 131072                21179.79
</span><br>
<span class="quotelev2">&gt; &gt; 262144                20168.56
</span><br>
<span class="quotelev2">&gt; &gt; 524288                22984.83
</span><br>
<span class="quotelev2">&gt; &gt; 1048576               25994.54
</span><br>
<span class="quotelev2">&gt; &gt; 2097152               30929.55
</span><br>
<span class="quotelev2">&gt; &gt; 4194304               38028.48
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; openmpi-1.6.5:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [mishima_at_node07 OMB-3.1.1]$ mpirun -np 2 -host node07,node08 -mca tbl
</span><br>
<span class="quotelev2">&gt; &gt; ^openib osu_bw
</span><br>
<span class="quotelev2">&gt; &gt; # OSU MPI Bandwidth Test v3.1.1
</span><br>
<span class="quotelev2">&gt; &gt; # Size        Bandwidth (MB/s)
</span><br>
<span class="quotelev2">&gt; &gt; 1                         0.22
</span><br>
<span class="quotelev2">&gt; &gt; 2                         0.45
</span><br>
<span class="quotelev2">&gt; &gt; 4                         0.89
</span><br>
<span class="quotelev2">&gt; &gt; 8                         1.77
</span><br>
<span class="quotelev2">&gt; &gt; 16                        3.57
</span><br>
<span class="quotelev2">&gt; &gt; 32                        7.15
</span><br>
<span class="quotelev2">&gt; &gt; 64                       14.28
</span><br>
<span class="quotelev2">&gt; &gt; 128                      28.58
</span><br>
<span class="quotelev2">&gt; &gt; 256                      57.17
</span><br>
<span class="quotelev2">&gt; &gt; 512                      96.44
</span><br>
<span class="quotelev2">&gt; &gt; 1024                    152.38
</span><br>
<span class="quotelev2">&gt; &gt; 2048                    182.84
</span><br>
<span class="quotelev2">&gt; &gt; 4096                    203.17
</span><br>
<span class="quotelev2">&gt; &gt; 8192                    215.13
</span><br>
<span class="quotelev2">&gt; &gt; 16384                   225.05
</span><br>
<span class="quotelev2">&gt; &gt; 32768                   100.58
</span><br>
<span class="quotelev2">&gt; &gt; 65536                   225.24
</span><br>
<span class="quotelev2">&gt; &gt; 131072                  182.92
</span><br>
<span class="quotelev2">&gt; &gt; 262144                  192.82
</span><br>
<span class="quotelev2">&gt; &gt; 524288                  212.92
</span><br>
<span class="quotelev2">&gt; &gt; 1048576                 233.35
</span><br>
<span class="quotelev2">&gt; &gt; 2097152                 233.72
</span><br>
<span class="quotelev2">&gt; &gt; 4194304                 233.89
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [mishima_at_node07 OMB-3.1.1]$ mpirun -np 2 -host node07,node08 -mca btl
</span><br>
<span class="quotelev2">&gt; &gt; ^openib osu_latency
</span><br>
<span class="quotelev2">&gt; &gt; # OSU MPI Latency Test v3.1.1
</span><br>
<span class="quotelev2">&gt; &gt; # Size            Latency (us)
</span><br>
<span class="quotelev2">&gt; &gt; 0                        17.24
</span><br>
<span class="quotelev2">&gt; &gt; 1                        17.30
</span><br>
<span class="quotelev2">&gt; &gt; 2                        17.29
</span><br>
<span class="quotelev2">&gt; &gt; 4                        17.30
</span><br>
<span class="quotelev2">&gt; &gt; 8                        24.32
</span><br>
<span class="quotelev2">&gt; &gt; 16                       17.24
</span><br>
<span class="quotelev2">&gt; &gt; 32                       17.80
</span><br>
<span class="quotelev2">&gt; &gt; 64                       17.91
</span><br>
<span class="quotelev2">&gt; &gt; 128                      19.08
</span><br>
<span class="quotelev2">&gt; &gt; 256                      20.81
</span><br>
<span class="quotelev2">&gt; &gt; 512                      22.83
</span><br>
<span class="quotelev2">&gt; &gt; 1024                     27.82
</span><br>
<span class="quotelev2">&gt; &gt; 2048                     39.54
</span><br>
<span class="quotelev2">&gt; &gt; 4096                     52.66
</span><br>
<span class="quotelev2">&gt; &gt; 8192                     97.70
</span><br>
<span class="quotelev2">&gt; &gt; 16384                   143.23
</span><br>
<span class="quotelev2">&gt; &gt; 32768                   215.02
</span><br>
<span class="quotelev2">&gt; &gt; 65536                   481.08
</span><br>
<span class="quotelev2">&gt; &gt; 131072                  800.64
</span><br>
<span class="quotelev2">&gt; &gt; 262144                 1475.12
</span><br>
<span class="quotelev2">&gt; &gt; 524288                 2698.62
</span><br>
<span class="quotelev2">&gt; &gt; 1048576                4992.31
</span><br>
<span class="quotelev2">&gt; &gt; 2097152                9558.96
</span><br>
<span class="quotelev2">&gt; &gt; 4194304               20801.50
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt; Tetsuya Mishima
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23233.php">Blosch, Edwin L: "[OMPI users] What's the status of OpenMPI and thread safety?"</a>
<li><strong>Previous message:</strong> <a href="23231.php">Siddhartha Jana: "Re: [OMPI users] [OMPI devel] Recommended tool to measure packet counters"</a>
<li><strong>In reply to:</strong> <a href="23221.php">Jeff Squyres (jsquyres): "Re: [OMPI users] tcp of openmpi-1.7.3 under our environment is very slow"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23241.php">tmishima_at_[hidden]: "[OMPI users] &quot;-bind-to numa&quot; of openmpi-1.7.4rc1 dosen't work for our magny cours based 32 core node"</a>
<li><strong>Reply:</strong> <a href="23241.php">tmishima_at_[hidden]: "[OMPI users] &quot;-bind-to numa&quot; of openmpi-1.7.4rc1 dosen't work for our magny cours based 32 core node"</a>
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
