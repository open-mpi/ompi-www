<?
$subject_val = "[OMPI users] tcp of openmpi-1.7.3 under our environment is very slow";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 16 18:36:57 2013" -->
<!-- isoreceived="20131216233657" -->
<!-- sent="Tue, 17 Dec 2013 08:36:38 +0900" -->
<!-- isosent="20131216233638" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="[OMPI users] tcp of openmpi-1.7.3 under our environment is very slow" -->
<!-- id="OFD7A445F2.75F3D24E-ON49257C43.00812B1F-49257C43.0081B6C6_at_jcity.maeda.co.jp" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="OF8971C8DD.1953598B-ON49257C3E.0016283C-49257C3E.00169FAA_at_jcity.maeda.co.jp" -->
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
<strong>Subject:</strong> [OMPI users] tcp of openmpi-1.7.3 under our environment is very slow<br>
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20users]%20tcp%20of%20openmpi-1.7.3%20under%20our%20environment%20is%20very%20slow"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2013-12-16 18:36:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23207.php">Noam Bernstein: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<li><strong>Previous message:</strong> <a href="23205.php">Jeff Squyres (jsquyres): "Re: [OMPI users] typo in opal/memoryhooks/memory.h (1.6.5)"</a>
<li><strong>In reply to:</strong> <a href="23181.php">tmishima_at_[hidden]: "Re: [OMPI users] openmpi-1.7.4a1r29646	with	-hostfile	option	under	Torque manager"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23221.php">Jeff Squyres (jsquyres): "Re: [OMPI users] tcp of openmpi-1.7.3 under our environment is very slow"</a>
<li><strong>Reply:</strong> <a href="23221.php">Jeff Squyres (jsquyres): "Re: [OMPI users] tcp of openmpi-1.7.3 under our environment is very slow"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/01/23331.php">tmishima_at_[hidden]: "[OMPI users] btl_tcp_use_nagle is negated in openmpi-1.7.4rc1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I usually use infiniband network, where openmpi-1.7.3 and 1.6.5 works fine.
<br>
<p>The other days, I had a chance to use tcp network(1GbE) and I noticed that
<br>
my application with openmpi-1.7.3 was quite slower than openmpi-1.6.5.
<br>
So, I did OSU MPI Bandwidth Test v3.1.1 as shown below, which shows
<br>
bandwidth for smaller size(&lt; 1024) is very slow compared with 1.6.5.
<br>
In addition, the latency for larger size( &gt;65536 ) seems to be strange.
<br>
<p>Does this depend on our local environment or some mca parameter would be
<br>
necesarry? I'm afraid that something is wrong with tcp of openmpi-1.7.3.
<br>
<p>openmpi-1.7.3:
<br>
<p>[mishima_at_node07 OMB-3.1.1]$ mpirun -np 2 -host node07,node08 -mca tbl
<br>
^openib osu_bw
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
32                        0.10
<br>
64                        0.32
<br>
128                       0.37
<br>
256                       0.87
<br>
512                       5.97
<br>
1024                     20.00
<br>
2048                    182.87
<br>
4096                    202.53
<br>
8192                    215.14
<br>
16384                   225.16
<br>
32768                   228.58
<br>
65536                   115.23
<br>
131072                  198.24
<br>
262144                  193.38
<br>
524288                  233.03
<br>
1048576                 227.31
<br>
2097152                 233.07
<br>
4194304                 233.25
<br>
<p>[mishima_at_node07 OMB-3.1.1]$ mpirun -np 2 -host node07,node08 -mca btl
<br>
^openib osu_latency
<br>
# OSU MPI Latency Test v3.1.1
<br>
# Size            Latency (us)
<br>
0                        19.23
<br>
1                        19.57
<br>
2                        19.52
<br>
4                        19.88
<br>
8                        20.44
<br>
16                       20.38
<br>
32                       20.78
<br>
64                       21.14
<br>
128                      21.75
<br>
256                      23.20
<br>
512                      26.12
<br>
1024                     31.54
<br>
2048                     41.72
<br>
4096                     64.55
<br>
8192                    107.52
<br>
16384                   179.23
<br>
32768                   251.58
<br>
65536                 20689.68
<br>
131072                21179.79
<br>
262144                20168.56
<br>
524288                22984.83
<br>
1048576               25994.54
<br>
2097152               30929.55
<br>
4194304               38028.48
<br>
<p>openmpi-1.6.5:
<br>
<p>[mishima_at_node07 OMB-3.1.1]$ mpirun -np 2 -host node07,node08 -mca tbl
<br>
^openib osu_bw
<br>
# OSU MPI Bandwidth Test v3.1.1
<br>
# Size        Bandwidth (MB/s)
<br>
1                         0.22
<br>
2                         0.45
<br>
4                         0.89
<br>
8                         1.77
<br>
16                        3.57
<br>
32                        7.15
<br>
64                       14.28
<br>
128                      28.58
<br>
256                      57.17
<br>
512                      96.44
<br>
1024                    152.38
<br>
2048                    182.84
<br>
4096                    203.17
<br>
8192                    215.13
<br>
16384                   225.05
<br>
32768                   100.58
<br>
65536                   225.24
<br>
131072                  182.92
<br>
262144                  192.82
<br>
524288                  212.92
<br>
1048576                 233.35
<br>
2097152                 233.72
<br>
4194304                 233.89
<br>
<p>[mishima_at_node07 OMB-3.1.1]$ mpirun -np 2 -host node07,node08 -mca btl
<br>
^openib osu_latency
<br>
# OSU MPI Latency Test v3.1.1
<br>
# Size            Latency (us)
<br>
0                        17.24
<br>
1                        17.30
<br>
2                        17.29
<br>
4                        17.30
<br>
8                        24.32
<br>
16                       17.24
<br>
32                       17.80
<br>
64                       17.91
<br>
128                      19.08
<br>
256                      20.81
<br>
512                      22.83
<br>
1024                     27.82
<br>
2048                     39.54
<br>
4096                     52.66
<br>
8192                     97.70
<br>
16384                   143.23
<br>
32768                   215.02
<br>
65536                   481.08
<br>
131072                  800.64
<br>
262144                 1475.12
<br>
524288                 2698.62
<br>
1048576                4992.31
<br>
2097152                9558.96
<br>
4194304               20801.50
<br>
<p>Regards,
<br>
Tetsuya Mishima
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23207.php">Noam Bernstein: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<li><strong>Previous message:</strong> <a href="23205.php">Jeff Squyres (jsquyres): "Re: [OMPI users] typo in opal/memoryhooks/memory.h (1.6.5)"</a>
<li><strong>In reply to:</strong> <a href="23181.php">tmishima_at_[hidden]: "Re: [OMPI users] openmpi-1.7.4a1r29646	with	-hostfile	option	under	Torque manager"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23221.php">Jeff Squyres (jsquyres): "Re: [OMPI users] tcp of openmpi-1.7.3 under our environment is very slow"</a>
<li><strong>Reply:</strong> <a href="23221.php">Jeff Squyres (jsquyres): "Re: [OMPI users] tcp of openmpi-1.7.3 under our environment is very slow"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/01/23331.php">tmishima_at_[hidden]: "[OMPI users] btl_tcp_use_nagle is negated in openmpi-1.7.4rc1"</a>
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
