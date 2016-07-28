<?
$subject_val = "Re: [OMPI users] tcp of openmpi-1.7.3 under our environment is very slow";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 18 08:43:46 2013" -->
<!-- isoreceived="20131218134346" -->
<!-- sent="Wed, 18 Dec 2013 13:43:44 +0000" -->
<!-- isosent="20131218134344" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] tcp of openmpi-1.7.3 under our environment is very slow" -->
<!-- id="7D1A65FF-DAFB-4409-B52E-290F8280FF69_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="OFD7A445F2.75F3D24E-ON49257C43.00812B1F-49257C43.0081B6C6_at_jcity.maeda.co.jp" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-18 08:43:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23222.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [OMPI devel] Recommended tool to measure packet counters"</a>
<li><strong>Previous message:</strong> <a href="23220.php">Reuti: "Re: [OMPI users] Error: Unable to create the sub-directory (/tmp/openmpi etc...)"</a>
<li><strong>In reply to:</strong> <a href="23206.php">tmishima_at_[hidden]: "[OMPI users] tcp of openmpi-1.7.3 under our environment is very slow"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23232.php">tmishima_at_[hidden]: "Re: [OMPI users] tcp of openmpi-1.7.3 under our environment is very slow"</a>
<li><strong>Reply:</strong> <a href="23232.php">tmishima_at_[hidden]: "Re: [OMPI users] tcp of openmpi-1.7.3 under our environment is very slow"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you re-run these tests with processor binding enabled?
<br>
<p>On Dec 16, 2013, at 6:36 PM, tmishima_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I usually use infiniband network, where openmpi-1.7.3 and 1.6.5 works fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The other days, I had a chance to use tcp network(1GbE) and I noticed that
</span><br>
<span class="quotelev1">&gt; my application with openmpi-1.7.3 was quite slower than openmpi-1.6.5.
</span><br>
<span class="quotelev1">&gt; So, I did OSU MPI Bandwidth Test v3.1.1 as shown below, which shows
</span><br>
<span class="quotelev1">&gt; bandwidth for smaller size(&lt; 1024) is very slow compared with 1.6.5.
</span><br>
<span class="quotelev1">&gt; In addition, the latency for larger size( &gt;65536 ) seems to be strange.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does this depend on our local environment or some mca parameter would be
</span><br>
<span class="quotelev1">&gt; necesarry? I'm afraid that something is wrong with tcp of openmpi-1.7.3.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; openmpi-1.7.3:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [mishima_at_node07 OMB-3.1.1]$ mpirun -np 2 -host node07,node08 -mca tbl
</span><br>
<span class="quotelev1">&gt; ^openib osu_bw
</span><br>
<span class="quotelev1">&gt; # OSU MPI Bandwidth Test v3.1.1
</span><br>
<span class="quotelev1">&gt; # Size        Bandwidth (MB/s)
</span><br>
<span class="quotelev1">&gt; 1                         0.00
</span><br>
<span class="quotelev1">&gt; 2                         0.01
</span><br>
<span class="quotelev1">&gt; 4                         0.01
</span><br>
<span class="quotelev1">&gt; 8                         0.03
</span><br>
<span class="quotelev1">&gt; 16                        0.05
</span><br>
<span class="quotelev1">&gt; 32                        0.10
</span><br>
<span class="quotelev1">&gt; 64                        0.32
</span><br>
<span class="quotelev1">&gt; 128                       0.37
</span><br>
<span class="quotelev1">&gt; 256                       0.87
</span><br>
<span class="quotelev1">&gt; 512                       5.97
</span><br>
<span class="quotelev1">&gt; 1024                     20.00
</span><br>
<span class="quotelev1">&gt; 2048                    182.87
</span><br>
<span class="quotelev1">&gt; 4096                    202.53
</span><br>
<span class="quotelev1">&gt; 8192                    215.14
</span><br>
<span class="quotelev1">&gt; 16384                   225.16
</span><br>
<span class="quotelev1">&gt; 32768                   228.58
</span><br>
<span class="quotelev1">&gt; 65536                   115.23
</span><br>
<span class="quotelev1">&gt; 131072                  198.24
</span><br>
<span class="quotelev1">&gt; 262144                  193.38
</span><br>
<span class="quotelev1">&gt; 524288                  233.03
</span><br>
<span class="quotelev1">&gt; 1048576                 227.31
</span><br>
<span class="quotelev1">&gt; 2097152                 233.07
</span><br>
<span class="quotelev1">&gt; 4194304                 233.25
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [mishima_at_node07 OMB-3.1.1]$ mpirun -np 2 -host node07,node08 -mca btl
</span><br>
<span class="quotelev1">&gt; ^openib osu_latency
</span><br>
<span class="quotelev1">&gt; # OSU MPI Latency Test v3.1.1
</span><br>
<span class="quotelev1">&gt; # Size            Latency (us)
</span><br>
<span class="quotelev1">&gt; 0                        19.23
</span><br>
<span class="quotelev1">&gt; 1                        19.57
</span><br>
<span class="quotelev1">&gt; 2                        19.52
</span><br>
<span class="quotelev1">&gt; 4                        19.88
</span><br>
<span class="quotelev1">&gt; 8                        20.44
</span><br>
<span class="quotelev1">&gt; 16                       20.38
</span><br>
<span class="quotelev1">&gt; 32                       20.78
</span><br>
<span class="quotelev1">&gt; 64                       21.14
</span><br>
<span class="quotelev1">&gt; 128                      21.75
</span><br>
<span class="quotelev1">&gt; 256                      23.20
</span><br>
<span class="quotelev1">&gt; 512                      26.12
</span><br>
<span class="quotelev1">&gt; 1024                     31.54
</span><br>
<span class="quotelev1">&gt; 2048                     41.72
</span><br>
<span class="quotelev1">&gt; 4096                     64.55
</span><br>
<span class="quotelev1">&gt; 8192                    107.52
</span><br>
<span class="quotelev1">&gt; 16384                   179.23
</span><br>
<span class="quotelev1">&gt; 32768                   251.58
</span><br>
<span class="quotelev1">&gt; 65536                 20689.68
</span><br>
<span class="quotelev1">&gt; 131072                21179.79
</span><br>
<span class="quotelev1">&gt; 262144                20168.56
</span><br>
<span class="quotelev1">&gt; 524288                22984.83
</span><br>
<span class="quotelev1">&gt; 1048576               25994.54
</span><br>
<span class="quotelev1">&gt; 2097152               30929.55
</span><br>
<span class="quotelev1">&gt; 4194304               38028.48
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; openmpi-1.6.5:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [mishima_at_node07 OMB-3.1.1]$ mpirun -np 2 -host node07,node08 -mca tbl
</span><br>
<span class="quotelev1">&gt; ^openib osu_bw
</span><br>
<span class="quotelev1">&gt; # OSU MPI Bandwidth Test v3.1.1
</span><br>
<span class="quotelev1">&gt; # Size        Bandwidth (MB/s)
</span><br>
<span class="quotelev1">&gt; 1                         0.22
</span><br>
<span class="quotelev1">&gt; 2                         0.45
</span><br>
<span class="quotelev1">&gt; 4                         0.89
</span><br>
<span class="quotelev1">&gt; 8                         1.77
</span><br>
<span class="quotelev1">&gt; 16                        3.57
</span><br>
<span class="quotelev1">&gt; 32                        7.15
</span><br>
<span class="quotelev1">&gt; 64                       14.28
</span><br>
<span class="quotelev1">&gt; 128                      28.58
</span><br>
<span class="quotelev1">&gt; 256                      57.17
</span><br>
<span class="quotelev1">&gt; 512                      96.44
</span><br>
<span class="quotelev1">&gt; 1024                    152.38
</span><br>
<span class="quotelev1">&gt; 2048                    182.84
</span><br>
<span class="quotelev1">&gt; 4096                    203.17
</span><br>
<span class="quotelev1">&gt; 8192                    215.13
</span><br>
<span class="quotelev1">&gt; 16384                   225.05
</span><br>
<span class="quotelev1">&gt; 32768                   100.58
</span><br>
<span class="quotelev1">&gt; 65536                   225.24
</span><br>
<span class="quotelev1">&gt; 131072                  182.92
</span><br>
<span class="quotelev1">&gt; 262144                  192.82
</span><br>
<span class="quotelev1">&gt; 524288                  212.92
</span><br>
<span class="quotelev1">&gt; 1048576                 233.35
</span><br>
<span class="quotelev1">&gt; 2097152                 233.72
</span><br>
<span class="quotelev1">&gt; 4194304                 233.89
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [mishima_at_node07 OMB-3.1.1]$ mpirun -np 2 -host node07,node08 -mca btl
</span><br>
<span class="quotelev1">&gt; ^openib osu_latency
</span><br>
<span class="quotelev1">&gt; # OSU MPI Latency Test v3.1.1
</span><br>
<span class="quotelev1">&gt; # Size            Latency (us)
</span><br>
<span class="quotelev1">&gt; 0                        17.24
</span><br>
<span class="quotelev1">&gt; 1                        17.30
</span><br>
<span class="quotelev1">&gt; 2                        17.29
</span><br>
<span class="quotelev1">&gt; 4                        17.30
</span><br>
<span class="quotelev1">&gt; 8                        24.32
</span><br>
<span class="quotelev1">&gt; 16                       17.24
</span><br>
<span class="quotelev1">&gt; 32                       17.80
</span><br>
<span class="quotelev1">&gt; 64                       17.91
</span><br>
<span class="quotelev1">&gt; 128                      19.08
</span><br>
<span class="quotelev1">&gt; 256                      20.81
</span><br>
<span class="quotelev1">&gt; 512                      22.83
</span><br>
<span class="quotelev1">&gt; 1024                     27.82
</span><br>
<span class="quotelev1">&gt; 2048                     39.54
</span><br>
<span class="quotelev1">&gt; 4096                     52.66
</span><br>
<span class="quotelev1">&gt; 8192                     97.70
</span><br>
<span class="quotelev1">&gt; 16384                   143.23
</span><br>
<span class="quotelev1">&gt; 32768                   215.02
</span><br>
<span class="quotelev1">&gt; 65536                   481.08
</span><br>
<span class="quotelev1">&gt; 131072                  800.64
</span><br>
<span class="quotelev1">&gt; 262144                 1475.12
</span><br>
<span class="quotelev1">&gt; 524288                 2698.62
</span><br>
<span class="quotelev1">&gt; 1048576                4992.31
</span><br>
<span class="quotelev1">&gt; 2097152                9558.96
</span><br>
<span class="quotelev1">&gt; 4194304               20801.50
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Tetsuya Mishima
</span><br>
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23222.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [OMPI devel] Recommended tool to measure packet counters"</a>
<li><strong>Previous message:</strong> <a href="23220.php">Reuti: "Re: [OMPI users] Error: Unable to create the sub-directory (/tmp/openmpi etc...)"</a>
<li><strong>In reply to:</strong> <a href="23206.php">tmishima_at_[hidden]: "[OMPI users] tcp of openmpi-1.7.3 under our environment is very slow"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23232.php">tmishima_at_[hidden]: "Re: [OMPI users] tcp of openmpi-1.7.3 under our environment is very slow"</a>
<li><strong>Reply:</strong> <a href="23232.php">tmishima_at_[hidden]: "Re: [OMPI users] tcp of openmpi-1.7.3 under our environment is very slow"</a>
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
