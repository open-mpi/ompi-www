<?
$subject_val = "Re: [OMPI users] Mixed Mellanox and Qlogic problems";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 15 19:58:43 2011" -->
<!-- isoreceived="20110715235843" -->
<!-- sent="Fri, 15 Jul 2011 16:58:35 -0700" -->
<!-- isosent="20110715235835" -->
<!-- name="David Warren" -->
<!-- email="warren_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mixed Mellanox and Qlogic problems" -->
<!-- id="4E20D42B.4050608_at_atmos.washington.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="68F4EB47-D349-4026-ACE6-71EDD4B127CA_at_cisco.com" -->
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
<strong>Date:</strong> 2011-07-15 19:58:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16952.php">Terry Dontje: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<li><strong>Previous message:</strong> <a href="16950.php">Jeff Squyres: "Re: [OMPI users] Processor affinity troubles"</a>
<li><strong>In reply to:</strong> <a href="16938.php">Jeff Squyres: "Re: [OMPI users] Mixed Mellanox and Qlogic problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16955.php">Jeff Squyres: "Re: [OMPI users] Mixed Mellanox and Qlogic problems"</a>
<li><strong>Reply:</strong> <a href="16955.php">Jeff Squyres: "Re: [OMPI users] Mixed Mellanox and Qlogic problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All OFED 1.4 and 2.6.32 (that's what I can get to today)
<br>
qib to qib:
<br>
<p># OSU MPI Latency Test v3.3
<br>
# Size            Latency (us)
<br>
0                         0.29
<br>
1                         0.32
<br>
2                         0.31
<br>
4                         0.32
<br>
8                         0.32
<br>
16                        0.35
<br>
32                        0.35
<br>
64                        0.47
<br>
128                       0.47
<br>
256                       0.50
<br>
512                       0.53
<br>
1024                      0.66
<br>
2048                      0.88
<br>
4096                      1.24
<br>
8192                      1.89
<br>
16384                     3.94
<br>
32768                     5.94
<br>
65536                     9.79
<br>
131072                   18.93
<br>
262144                   37.36
<br>
524288                   71.90
<br>
1048576                 189.62
<br>
2097152                 478.55
<br>
4194304                1148.80
<br>
<p># OSU MPI Bandwidth Test v3.3
<br>
# Size        Bandwidth (MB/s)
<br>
1                         2.48
<br>
2                         5.00
<br>
4                        10.04
<br>
8                        20.02
<br>
16                       33.22
<br>
32                       67.32
<br>
64                      134.65
<br>
128                     260.30
<br>
256                     486.44
<br>
512                     860.77
<br>
1024                   1385.54
<br>
2048                   1940.68
<br>
4096                   2231.20
<br>
8192                   2343.30
<br>
16384                  2944.99
<br>
32768                  3213.77
<br>
65536                  3174.85
<br>
131072                 3220.07
<br>
262144                 3259.48
<br>
524288                 3277.05
<br>
1048576                3283.97
<br>
2097152                3288.91
<br>
4194304                3291.84
<br>
<p># OSU MPI Bi-Directional Bandwidth Test v3.3
<br>
# Size     Bi-Bandwidth (MB/s)
<br>
1                         3.10
<br>
2                         6.21
<br>
4                        13.08
<br>
8                        26.91
<br>
16                       41.00
<br>
32                       78.17
<br>
64                      161.13
<br>
128                     312.08
<br>
256                     588.18
<br>
512                     968.32
<br>
1024                   1683.42
<br>
2048                   2513.86
<br>
4096                   2948.11
<br>
8192                   2918.39
<br>
16384                  3370.28
<br>
32768                  3543.99
<br>
65536                  4159.99
<br>
131072                 4709.73
<br>
262144                 4733.31
<br>
524288                 4795.44
<br>
1048576                4753.69
<br>
2097152                4786.11
<br>
4194304                4779.40
<br>
<p>mlx4 to mlx4:
<br>
# OSU MPI Latency Test v3.3
<br>
# Size            Latency (us)
<br>
0                         1.62
<br>
1                         1.66
<br>
2                         1.67
<br>
4                         1.66
<br>
8                         1.70
<br>
16                        1.71
<br>
32                        1.75
<br>
64                        1.91
<br>
128                       3.11
<br>
256                       3.32
<br>
512                       3.66
<br>
1024                      4.46
<br>
2048                      5.57
<br>
4096                      6.62
<br>
8192                      8.95
<br>
16384                    11.07
<br>
32768                    15.94
<br>
65536                    25.57
<br>
131072                   44.93
<br>
262144                   83.58
<br>
524288                  160.85
<br>
1048576                 315.47
<br>
2097152                 624.68
<br>
4194304                1247.17
<br>
<p># OSU MPI Bandwidth Test v3.3
<br>
# Size        Bandwidth (MB/s)
<br>
1                         1.80
<br>
2                         4.21
<br>
4                         8.79
<br>
8                        18.14
<br>
16                       35.79
<br>
32                       68.58
<br>
64                      132.72
<br>
128                     221.89
<br>
256                     399.62
<br>
512                     724.13
<br>
1024                   1267.36
<br>
2048                   1959.22
<br>
4096                   2354.26
<br>
8192                   2519.50
<br>
16384                  3225.44
<br>
32768                  3227.86
<br>
65536                  3350.76
<br>
131072                 3369.86
<br>
262144                 3378.76
<br>
524288                 3384.02
<br>
1048576                3386.60
<br>
2097152                3387.97
<br>
4194304                3388.66
<br>
<p># OSU MPI Bi-Directional Bandwidth Test v3.3
<br>
# Size     Bi-Bandwidth (MB/s)
<br>
1                         1.70
<br>
2                         3.86
<br>
4                        10.42
<br>
8                        20.99
<br>
16                       41.22
<br>
32                       79.17
<br>
64                      151.25
<br>
128                     277.64
<br>
256                     495.44
<br>
512                     843.44
<br>
1024                    162.53
<br>
2048                   2427.23
<br>
4096                   2989.63
<br>
8192                   3587.58
<br>
16384                  5391.08
<br>
32768                  6051.56
<br>
65536                  6314.33
<br>
131072                 6439.04
<br>
262144                 6506.51
<br>
524288                 6539.51
<br>
1048576                6558.34
<br>
2097152                6567.24
<br>
4194304                6555.76
<br>
<p>mixed:
<br>
# OSU MPI Latency Test v3.3
<br>
# Size            Latency (us)
<br>
0                         3.81
<br>
1                         3.88
<br>
2                         3.86
<br>
4                         3.85
<br>
8                         3.92
<br>
16                        3.93
<br>
32                        3.93
<br>
64                        4.02
<br>
128                       4.60
<br>
256                       4.80
<br>
512                       5.14
<br>
1024                      5.94
<br>
2048                      7.26
<br>
4096                      8.50
<br>
8192                     10.98
<br>
16384                    19.92
<br>
32768                    26.35
<br>
65536                    39.93
<br>
131072                   64.45
<br>
262144                  106.93
<br>
524288                  191.89
<br>
1048576                 358.31
<br>
2097152                 694.25
<br>
4194304                1429.56
<br>
<p># OSU MPI Bandwidth Test v3.3
<br>
# Size        Bandwidth (MB/s)
<br>
1                         0.64
<br>
2                         1.39
<br>
4                         2.76
<br>
8                         5.58
<br>
16                       11.03
<br>
32                       22.17
<br>
64                       43.70
<br>
128                     100.49
<br>
256                     179.83
<br>
512                     305.87
<br>
1024                    544.68
<br>
2048                    838.22
<br>
4096                   1187.74
<br>
8192                   1542.07
<br>
16384                  1260.93
<br>
32768                  1708.54
<br>
65536                  2180.45
<br>
131072                 2482.28
<br>
262144                 2624.89
<br>
524288                 2680.55
<br>
1048576                2728.58
<br>
never gets past here
<br>
<p># OSU MPI Bi-Directional Bandwidth Test v3.3
<br>
# Size     Bi-Bandwidth (MB/s)
<br>
1                         0.41
<br>
2                         0.83
<br>
4                         1.68
<br>
8                         3.37
<br>
16                        6.71
<br>
32                       13.37
<br>
64                       26.64
<br>
128                      63.47
<br>
256                     113.23
<br>
512                     202.92
<br>
1024                    362.48
<br>
2048                    578.53
<br>
4096                    830.31
<br>
8192                   1143.16
<br>
16384                  1303.02
<br>
32768                  1913.07
<br>
65536                  2463.83
<br>
131072                 2793.83
<br>
262144                 2918.32
<br>
524288                 2987.92
<br>
1048576                3033.31
<br>
never gets past here
<br>
<p><p><p>On 07/15/11 09:03, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; I don't think too many people have done combined QLogic + Mellanox runs, so this probably isn't a well-explored space.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you run some microbenchmarks to see what kind of latency / bandwidth you're getting between nodes of the same type and nodes of different types?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 14, 2011, at 8:21 PM, David Warren wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev2">&gt;&gt; On my test runs (wrf run just long enough to go beyond the spinup influence)
</span><br>
<span class="quotelev2">&gt;&gt; On just 6 of the the old mlx4 machines I get about 00:05:30 runtime
</span><br>
<span class="quotelev2">&gt;&gt; On 3 mlx4 and 3 qib nodes I get avg of 00:06:20
</span><br>
<span class="quotelev2">&gt;&gt; So the slow down is about 11+%
</span><br>
<span class="quotelev2">&gt;&gt; When this is a full run 11% becomes a evry long time.  This has held for some longer tests as well before I went to ofed 1.6.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 07/14/11 05:55, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jul 13, 2011, at 7:46 PM, David Warren wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I finally got access to the systems again (the original ones are part of our real time system). I thought I would try one other test I had set up first.  I went to OFED 1.6 and it started running with no errors. It must have been an OFED bug. Now I just have the speed problem. Anyone have a way to make the mixture of mlx4 and qlogic work together without slowing down?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What do you mean by &quot;slowing down&quot;?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<li><strong>Next message:</strong> <a href="16952.php">Terry Dontje: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<li><strong>Previous message:</strong> <a href="16950.php">Jeff Squyres: "Re: [OMPI users] Processor affinity troubles"</a>
<li><strong>In reply to:</strong> <a href="16938.php">Jeff Squyres: "Re: [OMPI users] Mixed Mellanox and Qlogic problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16955.php">Jeff Squyres: "Re: [OMPI users] Mixed Mellanox and Qlogic problems"</a>
<li><strong>Reply:</strong> <a href="16955.php">Jeff Squyres: "Re: [OMPI users] Mixed Mellanox and Qlogic problems"</a>
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
