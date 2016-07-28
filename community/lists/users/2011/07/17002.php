<?
$subject_val = "Re: [OMPI users] Mixed Mellanox and Qlogic problems";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 27 19:11:30 2011" -->
<!-- isoreceived="20110727231130" -->
<!-- sent="Wed, 27 Jul 2011 16:11:23 -0700" -->
<!-- isosent="20110727231123" -->
<!-- name="David Warren" -->
<!-- email="warren_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mixed Mellanox and Qlogic problems" -->
<!-- id="4E309B1B.8050208_at_atmos.washington.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="D8DE6621-B725-4E73-B477-82A826BCD843_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Mixed Mellanox and Qlogic problems<br>
<strong>From:</strong> David Warren (<em>warren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-27 19:11:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17003.php">吕慧伟: "[OMPI users] Open MPI 1.4: [connect/btl_openib_connect_oob.c:463:qp_create_one] error creating qp errno says Cannot allocate memory"</a>
<li><strong>Previous message:</strong> <a href="17001.php">Ralph Castain: "Re: [OMPI users] Seg fault with PBS Pro 10.4"</a>
<li><strong>In reply to:</strong> <a href="16955.php">Jeff Squyres: "Re: [OMPI users] Mixed Mellanox and Qlogic problems"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok, I finally was able to get on and run some ofed tests - it looks to 
<br>
me like I must have something configured wrong with the qlogic cards, 
<br>
but I have no idea what???
<br>
<p>Mellanox to Qlogic:
<br>
&nbsp;&nbsp;ibv_rc_pingpong n15
<br>
&nbsp;&nbsp;&nbsp;local address:  LID 0x0006, QPN 0x240049, PSN 0x87f83a, GID ::
<br>
&nbsp;&nbsp;&nbsp;remote address: LID 0x000d, QPN 0x00b7cb, PSN 0xcc9dee, GID ::
<br>
8192000 bytes in 0.01 seconds = 4565.38 Mbit/sec
<br>
1000 iters in 0.01 seconds = 14.35 usec/iter
<br>
<p>ibv_srq_pingpong n15
<br>
&nbsp;&nbsp;&nbsp;local address:  LID 0x0006, QPN 0x280049, PSN 0xf83e06, GID ::
<br>
&nbsp;&nbsp;...
<br>
8192000 bytes in 0.01 seconds = 9829.91 Mbit/sec
<br>
1000 iters in 0.01 seconds = 6.67 usec/iter
<br>
<p>ibv_uc_pingpong n15
<br>
&nbsp;&nbsp;&nbsp;local address:  LID 0x0006, QPN 0x680049, PSN 0x7b33d2, GID ::
<br>
&nbsp;&nbsp;&nbsp;remote address: LID 0x000d, QPN 0x00b7ed, PSN 0x7fafaa, GID ::
<br>
8192000 bytes in 0.02 seconds = 4080.19 Mbit/sec
<br>
1000 iters in 0.02 seconds = 16.06 usec/iter
<br>
<p>Qlogic to Qlogic
<br>
<p>ibv_rc_pingpong n15
<br>
&nbsp;&nbsp;&nbsp;local address:  LID 0x000b, QPN 0x00afb7, PSN 0x3f08df, GID ::
<br>
&nbsp;&nbsp;&nbsp;remote address: LID 0x000d, QPN 0x00b7ef, PSN 0xd15096, GID ::
<br>
8192000 bytes in 0.02 seconds = 3223.13 Mbit/sec
<br>
1000 iters in 0.02 seconds = 20.33 usec/iter
<br>
<p>ibv_srq_pingpong n15
<br>
&nbsp;&nbsp;&nbsp;local address:  LID 0x000b, QPN 0x00afb9, PSN 0x9cdde3, GID ::
<br>
&nbsp;&nbsp;...
<br>
8192000 bytes in 0.01 seconds = 9018.30 Mbit/sec
<br>
1000 iters in 0.01 seconds = 7.27 usec/iter
<br>
<p>ibv_uc_pingpong n15
<br>
&nbsp;&nbsp;&nbsp;local address:  LID 0x000b, QPN 0x00afd9, PSN 0x98cfa0, GID ::
<br>
&nbsp;&nbsp;&nbsp;remote address: LID 0x000d, QPN 0x00b811, PSN 0x0a0d6e, GID ::
<br>
8192000 bytes in 0.02 seconds = 3318.28 Mbit/sec
<br>
1000 iters in 0.02 seconds = 19.75 usec/iter
<br>
<p>Mellanox to Mellanox
<br>
<p>ibv_rc_pingpong n5
<br>
&nbsp;&nbsp;&nbsp;local address:  LID 0x0009, QPN 0x240049, PSN 0xd72119, GID ::
<br>
&nbsp;&nbsp;&nbsp;remote address: LID 0x0006, QPN 0x6c0049, PSN 0xc1909e, GID ::
<br>
8192000 bytes in 0.01 seconds = 7121.93 Mbit/sec
<br>
1000 iters in 0.01 seconds = 9.20 usec/iter
<br>
<p>ibv_srq_pingpong n5
<br>
&nbsp;&nbsp;&nbsp;local address:  LID 0x0009, QPN 0x280049, PSN 0x78f4f7, GID ::
<br>
...
<br>
8192000 bytes in 0.00 seconds = 24619.08 Mbit/sec
<br>
1000 iters in 0.00 seconds = 2.66 usec/iter
<br>
<p>ibv_uc_pingpong n5
<br>
&nbsp;&nbsp;&nbsp;local address:  LID 0x0009, QPN 0x680049, PSN 0x4002ea, GID ::
<br>
&nbsp;&nbsp;&nbsp;remote address: LID 0x0006, QPN 0x300049, PSN 0x29abf0, GID ::
<br>
8192000 bytes in 0.01 seconds = 7176.52 Mbit/sec
<br>
1000 iters in 0.01 seconds = 9.13 usec/iter
<br>
<p><p>On 07/17/11 05:49, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Interesting.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Try with the native OFED benchmarks -- i.e., get MPI out of the way and see if the raw/native performance of the network between the devices reflects the same dichotomy.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (e.g., ibv_rc_pingpong)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 15, 2011, at 7:58 PM, David Warren wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev2">&gt;&gt; All OFED 1.4 and 2.6.32 (that's what I can get to today)
</span><br>
<span class="quotelev2">&gt;&gt; qib to qib:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # OSU MPI Latency Test v3.3
</span><br>
<span class="quotelev2">&gt;&gt; # Size            Latency (us)
</span><br>
<span class="quotelev2">&gt;&gt; 0                         0.29
</span><br>
<span class="quotelev2">&gt;&gt; 1                         0.32
</span><br>
<span class="quotelev2">&gt;&gt; 2                         0.31
</span><br>
<span class="quotelev2">&gt;&gt; 4                         0.32
</span><br>
<span class="quotelev2">&gt;&gt; 8                         0.32
</span><br>
<span class="quotelev2">&gt;&gt; 16                        0.35
</span><br>
<span class="quotelev2">&gt;&gt; 32                        0.35
</span><br>
<span class="quotelev2">&gt;&gt; 64                        0.47
</span><br>
<span class="quotelev2">&gt;&gt; 128                       0.47
</span><br>
<span class="quotelev2">&gt;&gt; 256                       0.50
</span><br>
<span class="quotelev2">&gt;&gt; 512                       0.53
</span><br>
<span class="quotelev2">&gt;&gt; 1024                      0.66
</span><br>
<span class="quotelev2">&gt;&gt; 2048                      0.88
</span><br>
<span class="quotelev2">&gt;&gt; 4096                      1.24
</span><br>
<span class="quotelev2">&gt;&gt; 8192                      1.89
</span><br>
<span class="quotelev2">&gt;&gt; 16384                     3.94
</span><br>
<span class="quotelev2">&gt;&gt; 32768                     5.94
</span><br>
<span class="quotelev2">&gt;&gt; 65536                     9.79
</span><br>
<span class="quotelev2">&gt;&gt; 131072                   18.93
</span><br>
<span class="quotelev2">&gt;&gt; 262144                   37.36
</span><br>
<span class="quotelev2">&gt;&gt; 524288                   71.90
</span><br>
<span class="quotelev2">&gt;&gt; 1048576                 189.62
</span><br>
<span class="quotelev2">&gt;&gt; 2097152                 478.55
</span><br>
<span class="quotelev2">&gt;&gt; 4194304                1148.80
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # OSU MPI Bandwidth Test v3.3
</span><br>
<span class="quotelev2">&gt;&gt; # Size        Bandwidth (MB/s)
</span><br>
<span class="quotelev2">&gt;&gt; 1                         2.48
</span><br>
<span class="quotelev2">&gt;&gt; 2                         5.00
</span><br>
<span class="quotelev2">&gt;&gt; 4                        10.04
</span><br>
<span class="quotelev2">&gt;&gt; 8                        20.02
</span><br>
<span class="quotelev2">&gt;&gt; 16                       33.22
</span><br>
<span class="quotelev2">&gt;&gt; 32                       67.32
</span><br>
<span class="quotelev2">&gt;&gt; 64                      134.65
</span><br>
<span class="quotelev2">&gt;&gt; 128                     260.30
</span><br>
<span class="quotelev2">&gt;&gt; 256                     486.44
</span><br>
<span class="quotelev2">&gt;&gt; 512                     860.77
</span><br>
<span class="quotelev2">&gt;&gt; 1024                   1385.54
</span><br>
<span class="quotelev2">&gt;&gt; 2048                   1940.68
</span><br>
<span class="quotelev2">&gt;&gt; 4096                   2231.20
</span><br>
<span class="quotelev2">&gt;&gt; 8192                   2343.30
</span><br>
<span class="quotelev2">&gt;&gt; 16384                  2944.99
</span><br>
<span class="quotelev2">&gt;&gt; 32768                  3213.77
</span><br>
<span class="quotelev2">&gt;&gt; 65536                  3174.85
</span><br>
<span class="quotelev2">&gt;&gt; 131072                 3220.07
</span><br>
<span class="quotelev2">&gt;&gt; 262144                 3259.48
</span><br>
<span class="quotelev2">&gt;&gt; 524288                 3277.05
</span><br>
<span class="quotelev2">&gt;&gt; 1048576                3283.97
</span><br>
<span class="quotelev2">&gt;&gt; 2097152                3288.91
</span><br>
<span class="quotelev2">&gt;&gt; 4194304                3291.84
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # OSU MPI Bi-Directional Bandwidth Test v3.3
</span><br>
<span class="quotelev2">&gt;&gt; # Size     Bi-Bandwidth (MB/s)
</span><br>
<span class="quotelev2">&gt;&gt; 1                         3.10
</span><br>
<span class="quotelev2">&gt;&gt; 2                         6.21
</span><br>
<span class="quotelev2">&gt;&gt; 4                        13.08
</span><br>
<span class="quotelev2">&gt;&gt; 8                        26.91
</span><br>
<span class="quotelev2">&gt;&gt; 16                       41.00
</span><br>
<span class="quotelev2">&gt;&gt; 32                       78.17
</span><br>
<span class="quotelev2">&gt;&gt; 64                      161.13
</span><br>
<span class="quotelev2">&gt;&gt; 128                     312.08
</span><br>
<span class="quotelev2">&gt;&gt; 256                     588.18
</span><br>
<span class="quotelev2">&gt;&gt; 512                     968.32
</span><br>
<span class="quotelev2">&gt;&gt; 1024                   1683.42
</span><br>
<span class="quotelev2">&gt;&gt; 2048                   2513.86
</span><br>
<span class="quotelev2">&gt;&gt; 4096                   2948.11
</span><br>
<span class="quotelev2">&gt;&gt; 8192                   2918.39
</span><br>
<span class="quotelev2">&gt;&gt; 16384                  3370.28
</span><br>
<span class="quotelev2">&gt;&gt; 32768                  3543.99
</span><br>
<span class="quotelev2">&gt;&gt; 65536                  4159.99
</span><br>
<span class="quotelev2">&gt;&gt; 131072                 4709.73
</span><br>
<span class="quotelev2">&gt;&gt; 262144                 4733.31
</span><br>
<span class="quotelev2">&gt;&gt; 524288                 4795.44
</span><br>
<span class="quotelev2">&gt;&gt; 1048576                4753.69
</span><br>
<span class="quotelev2">&gt;&gt; 2097152                4786.11
</span><br>
<span class="quotelev2">&gt;&gt; 4194304                4779.40
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mlx4 to mlx4:
</span><br>
<span class="quotelev2">&gt;&gt; # OSU MPI Latency Test v3.3
</span><br>
<span class="quotelev2">&gt;&gt; # Size            Latency (us)
</span><br>
<span class="quotelev2">&gt;&gt; 0                         1.62
</span><br>
<span class="quotelev2">&gt;&gt; 1                         1.66
</span><br>
<span class="quotelev2">&gt;&gt; 2                         1.67
</span><br>
<span class="quotelev2">&gt;&gt; 4                         1.66
</span><br>
<span class="quotelev2">&gt;&gt; 8                         1.70
</span><br>
<span class="quotelev2">&gt;&gt; 16                        1.71
</span><br>
<span class="quotelev2">&gt;&gt; 32                        1.75
</span><br>
<span class="quotelev2">&gt;&gt; 64                        1.91
</span><br>
<span class="quotelev2">&gt;&gt; 128                       3.11
</span><br>
<span class="quotelev2">&gt;&gt; 256                       3.32
</span><br>
<span class="quotelev2">&gt;&gt; 512                       3.66
</span><br>
<span class="quotelev2">&gt;&gt; 1024                      4.46
</span><br>
<span class="quotelev2">&gt;&gt; 2048                      5.57
</span><br>
<span class="quotelev2">&gt;&gt; 4096                      6.62
</span><br>
<span class="quotelev2">&gt;&gt; 8192                      8.95
</span><br>
<span class="quotelev2">&gt;&gt; 16384                    11.07
</span><br>
<span class="quotelev2">&gt;&gt; 32768                    15.94
</span><br>
<span class="quotelev2">&gt;&gt; 65536                    25.57
</span><br>
<span class="quotelev2">&gt;&gt; 131072                   44.93
</span><br>
<span class="quotelev2">&gt;&gt; 262144                   83.58
</span><br>
<span class="quotelev2">&gt;&gt; 524288                  160.85
</span><br>
<span class="quotelev2">&gt;&gt; 1048576                 315.47
</span><br>
<span class="quotelev2">&gt;&gt; 2097152                 624.68
</span><br>
<span class="quotelev2">&gt;&gt; 4194304                1247.17
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # OSU MPI Bandwidth Test v3.3
</span><br>
<span class="quotelev2">&gt;&gt; # Size        Bandwidth (MB/s)
</span><br>
<span class="quotelev2">&gt;&gt; 1                         1.80
</span><br>
<span class="quotelev2">&gt;&gt; 2                         4.21
</span><br>
<span class="quotelev2">&gt;&gt; 4                         8.79
</span><br>
<span class="quotelev2">&gt;&gt; 8                        18.14
</span><br>
<span class="quotelev2">&gt;&gt; 16                       35.79
</span><br>
<span class="quotelev2">&gt;&gt; 32                       68.58
</span><br>
<span class="quotelev2">&gt;&gt; 64                      132.72
</span><br>
<span class="quotelev2">&gt;&gt; 128                     221.89
</span><br>
<span class="quotelev2">&gt;&gt; 256                     399.62
</span><br>
<span class="quotelev2">&gt;&gt; 512                     724.13
</span><br>
<span class="quotelev2">&gt;&gt; 1024                   1267.36
</span><br>
<span class="quotelev2">&gt;&gt; 2048                   1959.22
</span><br>
<span class="quotelev2">&gt;&gt; 4096                   2354.26
</span><br>
<span class="quotelev2">&gt;&gt; 8192                   2519.50
</span><br>
<span class="quotelev2">&gt;&gt; 16384                  3225.44
</span><br>
<span class="quotelev2">&gt;&gt; 32768                  3227.86
</span><br>
<span class="quotelev2">&gt;&gt; 65536                  3350.76
</span><br>
<span class="quotelev2">&gt;&gt; 131072                 3369.86
</span><br>
<span class="quotelev2">&gt;&gt; 262144                 3378.76
</span><br>
<span class="quotelev2">&gt;&gt; 524288                 3384.02
</span><br>
<span class="quotelev2">&gt;&gt; 1048576                3386.60
</span><br>
<span class="quotelev2">&gt;&gt; 2097152                3387.97
</span><br>
<span class="quotelev2">&gt;&gt; 4194304                3388.66
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # OSU MPI Bi-Directional Bandwidth Test v3.3
</span><br>
<span class="quotelev2">&gt;&gt; # Size     Bi-Bandwidth (MB/s)
</span><br>
<span class="quotelev2">&gt;&gt; 1                         1.70
</span><br>
<span class="quotelev2">&gt;&gt; 2                         3.86
</span><br>
<span class="quotelev2">&gt;&gt; 4                        10.42
</span><br>
<span class="quotelev2">&gt;&gt; 8                        20.99
</span><br>
<span class="quotelev2">&gt;&gt; 16                       41.22
</span><br>
<span class="quotelev2">&gt;&gt; 32                       79.17
</span><br>
<span class="quotelev2">&gt;&gt; 64                      151.25
</span><br>
<span class="quotelev2">&gt;&gt; 128                     277.64
</span><br>
<span class="quotelev2">&gt;&gt; 256                     495.44
</span><br>
<span class="quotelev2">&gt;&gt; 512                     843.44
</span><br>
<span class="quotelev2">&gt;&gt; 1024                    162.53
</span><br>
<span class="quotelev2">&gt;&gt; 2048                   2427.23
</span><br>
<span class="quotelev2">&gt;&gt; 4096                   2989.63
</span><br>
<span class="quotelev2">&gt;&gt; 8192                   3587.58
</span><br>
<span class="quotelev2">&gt;&gt; 16384                  5391.08
</span><br>
<span class="quotelev2">&gt;&gt; 32768                  6051.56
</span><br>
<span class="quotelev2">&gt;&gt; 65536                  6314.33
</span><br>
<span class="quotelev2">&gt;&gt; 131072                 6439.04
</span><br>
<span class="quotelev2">&gt;&gt; 262144                 6506.51
</span><br>
<span class="quotelev2">&gt;&gt; 524288                 6539.51
</span><br>
<span class="quotelev2">&gt;&gt; 1048576                6558.34
</span><br>
<span class="quotelev2">&gt;&gt; 2097152                6567.24
</span><br>
<span class="quotelev2">&gt;&gt; 4194304                6555.76
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mixed:
</span><br>
<span class="quotelev2">&gt;&gt; # OSU MPI Latency Test v3.3
</span><br>
<span class="quotelev2">&gt;&gt; # Size            Latency (us)
</span><br>
<span class="quotelev2">&gt;&gt; 0                         3.81
</span><br>
<span class="quotelev2">&gt;&gt; 1                         3.88
</span><br>
<span class="quotelev2">&gt;&gt; 2                         3.86
</span><br>
<span class="quotelev2">&gt;&gt; 4                         3.85
</span><br>
<span class="quotelev2">&gt;&gt; 8                         3.92
</span><br>
<span class="quotelev2">&gt;&gt; 16                        3.93
</span><br>
<span class="quotelev2">&gt;&gt; 32                        3.93
</span><br>
<span class="quotelev2">&gt;&gt; 64                        4.02
</span><br>
<span class="quotelev2">&gt;&gt; 128                       4.60
</span><br>
<span class="quotelev2">&gt;&gt; 256                       4.80
</span><br>
<span class="quotelev2">&gt;&gt; 512                       5.14
</span><br>
<span class="quotelev2">&gt;&gt; 1024                      5.94
</span><br>
<span class="quotelev2">&gt;&gt; 2048                      7.26
</span><br>
<span class="quotelev2">&gt;&gt; 4096                      8.50
</span><br>
<span class="quotelev2">&gt;&gt; 8192                     10.98
</span><br>
<span class="quotelev2">&gt;&gt; 16384                    19.92
</span><br>
<span class="quotelev2">&gt;&gt; 32768                    26.35
</span><br>
<span class="quotelev2">&gt;&gt; 65536                    39.93
</span><br>
<span class="quotelev2">&gt;&gt; 131072                   64.45
</span><br>
<span class="quotelev2">&gt;&gt; 262144                  106.93
</span><br>
<span class="quotelev2">&gt;&gt; 524288                  191.89
</span><br>
<span class="quotelev2">&gt;&gt; 1048576                 358.31
</span><br>
<span class="quotelev2">&gt;&gt; 2097152                 694.25
</span><br>
<span class="quotelev2">&gt;&gt; 4194304                1429.56
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # OSU MPI Bandwidth Test v3.3
</span><br>
<span class="quotelev2">&gt;&gt; # Size        Bandwidth (MB/s)
</span><br>
<span class="quotelev2">&gt;&gt; 1                         0.64
</span><br>
<span class="quotelev2">&gt;&gt; 2                         1.39
</span><br>
<span class="quotelev2">&gt;&gt; 4                         2.76
</span><br>
<span class="quotelev2">&gt;&gt; 8                         5.58
</span><br>
<span class="quotelev2">&gt;&gt; 16                       11.03
</span><br>
<span class="quotelev2">&gt;&gt; 32                       22.17
</span><br>
<span class="quotelev2">&gt;&gt; 64                       43.70
</span><br>
<span class="quotelev2">&gt;&gt; 128                     100.49
</span><br>
<span class="quotelev2">&gt;&gt; 256                     179.83
</span><br>
<span class="quotelev2">&gt;&gt; 512                     305.87
</span><br>
<span class="quotelev2">&gt;&gt; 1024                    544.68
</span><br>
<span class="quotelev2">&gt;&gt; 2048                    838.22
</span><br>
<span class="quotelev2">&gt;&gt; 4096                   1187.74
</span><br>
<span class="quotelev2">&gt;&gt; 8192                   1542.07
</span><br>
<span class="quotelev2">&gt;&gt; 16384                  1260.93
</span><br>
<span class="quotelev2">&gt;&gt; 32768                  1708.54
</span><br>
<span class="quotelev2">&gt;&gt; 65536                  2180.45
</span><br>
<span class="quotelev2">&gt;&gt; 131072                 2482.28
</span><br>
<span class="quotelev2">&gt;&gt; 262144                 2624.89
</span><br>
<span class="quotelev2">&gt;&gt; 524288                 2680.55
</span><br>
<span class="quotelev2">&gt;&gt; 1048576                2728.58
</span><br>
<span class="quotelev2">&gt;&gt; never gets past here
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # OSU MPI Bi-Directional Bandwidth Test v3.3
</span><br>
<span class="quotelev2">&gt;&gt; # Size     Bi-Bandwidth (MB/s)
</span><br>
<span class="quotelev2">&gt;&gt; 1                         0.41
</span><br>
<span class="quotelev2">&gt;&gt; 2                         0.83
</span><br>
<span class="quotelev2">&gt;&gt; 4                         1.68
</span><br>
<span class="quotelev2">&gt;&gt; 8                         3.37
</span><br>
<span class="quotelev2">&gt;&gt; 16                        6.71
</span><br>
<span class="quotelev2">&gt;&gt; 32                       13.37
</span><br>
<span class="quotelev2">&gt;&gt; 64                       26.64
</span><br>
<span class="quotelev2">&gt;&gt; 128                      63.47
</span><br>
<span class="quotelev2">&gt;&gt; 256                     113.23
</span><br>
<span class="quotelev2">&gt;&gt; 512                     202.92
</span><br>
<span class="quotelev2">&gt;&gt; 1024                    362.48
</span><br>
<span class="quotelev2">&gt;&gt; 2048                    578.53
</span><br>
<span class="quotelev2">&gt;&gt; 4096                    830.31
</span><br>
<span class="quotelev2">&gt;&gt; 8192                   1143.16
</span><br>
<span class="quotelev2">&gt;&gt; 16384                  1303.02
</span><br>
<span class="quotelev2">&gt;&gt; 32768                  1913.07
</span><br>
<span class="quotelev2">&gt;&gt; 65536                  2463.83
</span><br>
<span class="quotelev2">&gt;&gt; 131072                 2793.83
</span><br>
<span class="quotelev2">&gt;&gt; 262144                 2918.32
</span><br>
<span class="quotelev2">&gt;&gt; 524288                 2987.92
</span><br>
<span class="quotelev2">&gt;&gt; 1048576                3033.31
</span><br>
<span class="quotelev2">&gt;&gt; never gets past here
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 07/15/11 09:03, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I don't think too many people have done combined QLogic + Mellanox runs, so this probably isn't a well-explored space.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can you run some microbenchmarks to see what kind of latency / bandwidth you're getting between nodes of the same type and nodes of different types?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jul 14, 2011, at 8:21 PM, David Warren wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On my test runs (wrf run just long enough to go beyond the spinup influence)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On just 6 of the the old mlx4 machines I get about 00:05:30 runtime
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 3 mlx4 and 3 qib nodes I get avg of 00:06:20
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So the slow down is about 11+%
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; When this is a full run 11% becomes a evry long time.  This has held for some longer tests as well before I went to ofed 1.6.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 07/14/11 05:55, Jeff Squyres wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Jul 13, 2011, at 7:46 PM, David Warren wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I finally got access to the systems again (the original ones are part of our real time system). I thought I would try one other test I had set up first.  I went to OFED 1.6 and it started running with no errors. It must have been an OFED bug. Now I just have the speed problem. Anyone have a way to make the mixture of mlx4 and qlogic work together without slowing down?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;              
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; What do you mean by &quot;slowing down&quot;?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;warren.vcf&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        
</span><br>
<span class="quotelev2">&gt;&gt; &lt;warren.vcf&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<p><!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17003.php">吕慧伟: "[OMPI users] Open MPI 1.4: [connect/btl_openib_connect_oob.c:463:qp_create_one] error creating qp errno says Cannot allocate memory"</a>
<li><strong>Previous message:</strong> <a href="17001.php">Ralph Castain: "Re: [OMPI users] Seg fault with PBS Pro 10.4"</a>
<li><strong>In reply to:</strong> <a href="16955.php">Jeff Squyres: "Re: [OMPI users] Mixed Mellanox and Qlogic problems"</a>
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
