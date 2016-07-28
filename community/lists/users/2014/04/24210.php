<?
$subject_val = "Re: [OMPI users] Problem in Open MPI (v1.8) Performance on 10G Ethernet";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 16 04:41:06 2014" -->
<!-- isoreceived="20140416084106" -->
<!-- sent="Wed, 16 Apr 2014 13:41:05 +0500" -->
<!-- isosent="20140416084105" -->
<!-- name="Muhammad Ansar Javed" -->
<!-- email="muhammad.ansar_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem in Open MPI (v1.8) Performance on 10G Ethernet" -->
<!-- id="CACztQg34h-MRjvHTY+ZmHUwePU3XgxB8kmR4u3gHX4Zt=JVYfw_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="0D052D0D-D879-44D9-88BB-6C816A25B122_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem in Open MPI (v1.8) Performance on 10G Ethernet<br>
<strong>From:</strong> Muhammad Ansar Javed (<em>muhammad.ansar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-16 04:41:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24211.php">Ralph Castain: "Re: [OMPI users] Problem in Open MPI (v1.8) Performance on 10G Ethernet"</a>
<li><strong>Previous message:</strong> <a href="24209.php">Gus Correa: "Re: [OMPI users] Where is the error? (MPI program in fortran)"</a>
<li><strong>In reply to:</strong> <a href="24202.php">Ralph Castain: "Re: [OMPI users] Problem in Open MPI (v1.8) Performance on 10G Ethernet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24211.php">Ralph Castain: "Re: [OMPI users] Problem in Open MPI (v1.8) Performance on 10G Ethernet"</a>
<li><strong>Reply:</strong> <a href="24211.php">Ralph Castain: "Re: [OMPI users] Problem in Open MPI (v1.8) Performance on 10G Ethernet"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, I have tried NetPipe-Java and iperf for bandwidth and configuration
<br>
test. NetPipe Java achieves maximum 9.40 Gbps while iperf achieves maximum
<br>
9.61 Gbps bandwidth. I have also tested my bandwidth program on 1Gbps
<br>
Ethernet connection and it achieves 901 Mbps bandwidth. I am using the same
<br>
program for 10G network benchmarks. Please find attached source file of
<br>
bandwidth program.
<br>
<p>As far as --bind-to core is concerned, I think it is working fine. Here is
<br>
output of --report-bindings switch.
<br>
[host3:07134] MCW rank 0 bound to socket 0[core 0[hwt 0]]: [B/././.]
<br>
[host4:10282] MCW rank 1 bound to socket 0[core 0[hwt 0]]: [B/././.]
<br>
<p><p><p><p>On Tue, Apr 15, 2014 at 8:39 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Have you tried a typical benchmark (e.g., NetPipe or OMB) to ensure the
</span><br>
<span class="quotelev1">&gt; problem isn't in your program? Outside of that, you might want to
</span><br>
<span class="quotelev1">&gt; explicitly tell it to --bind-to core just to be sure it does so - it's
</span><br>
<span class="quotelev1">&gt; supposed to do that by default, but might as well be sure. You can check by
</span><br>
<span class="quotelev1">&gt; adding --report-binding to the cmd line.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 14, 2014, at 11:10 PM, Muhammad Ansar Javed &lt;
</span><br>
<span class="quotelev1">&gt; muhammad.ansar_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I am trying to benchmark Open MPI performance on 10G Ethernet network
</span><br>
<span class="quotelev1">&gt; between two hosts. The performance numbers of benchmarks are less than
</span><br>
<span class="quotelev1">&gt; expected. The maximum bandwidth achieved by OMPI-C is 5678 Mbps and I was
</span><br>
<span class="quotelev1">&gt; expecting around 9000+ Mbps. Moreover latency is also quite higher than
</span><br>
<span class="quotelev1">&gt; expected, ranging from 37 to 59 us. Here is complete set of numbers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *LatencyOpen MPI C    Size    Time (us)*
</span><br>
<span class="quotelev1">&gt; 1         37.76
</span><br>
<span class="quotelev1">&gt; 2         37.75
</span><br>
<span class="quotelev1">&gt; 4         37.78
</span><br>
<span class="quotelev1">&gt; 8         55.17
</span><br>
<span class="quotelev1">&gt; 16       37.89
</span><br>
<span class="quotelev1">&gt; 32       39.08
</span><br>
<span class="quotelev1">&gt; 64       37.78
</span><br>
<span class="quotelev1">&gt; 128     59.46
</span><br>
<span class="quotelev1">&gt; 256     39.37
</span><br>
<span class="quotelev1">&gt; 512     40.39
</span><br>
<span class="quotelev1">&gt; 1024   47.18
</span><br>
<span class="quotelev1">&gt; 2048   47.84
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *BandwidthOpen MPI C    Size (Bytes)    Bandwidth (Mbps)*
</span><br>
<span class="quotelev1">&gt; 2048               412.22
</span><br>
<span class="quotelev1">&gt; 4096               539.59
</span><br>
<span class="quotelev1">&gt; 8192               827.73
</span><br>
<span class="quotelev1">&gt; 16384             1655.35
</span><br>
<span class="quotelev1">&gt; 32768             3274.3
</span><br>
<span class="quotelev1">&gt; 65536             1995.22
</span><br>
<span class="quotelev1">&gt; 131072           3270.84
</span><br>
<span class="quotelev1">&gt; 262144           4316.22
</span><br>
<span class="quotelev1">&gt; 524288           5019.46
</span><br>
<span class="quotelev1">&gt; 1048576         5236.17
</span><br>
<span class="quotelev1">&gt; 2097152         5362.61
</span><br>
<span class="quotelev1">&gt; 4194304         5495.2
</span><br>
<span class="quotelev1">&gt; 8388608         5565.32
</span><br>
<span class="quotelev1">&gt; 16777216       5678.32
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My environments consists of two hosts having point-to-point (switch-less)
</span><br>
<span class="quotelev1">&gt; 10Gbps Ethernet connection.  Environment (OS, user, directory structure
</span><br>
<span class="quotelev1">&gt; etc) on both hosts is exactly same. There is no NAS or shared file system
</span><br>
<span class="quotelev1">&gt; between both hosts. Following are configuration and job launching commands
</span><br>
<span class="quotelev1">&gt; that I am using. Moreover, I have attached output of script ompi_info
</span><br>
<span class="quotelev1">&gt; --all.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Configuration commmand: ./configure --enable-mpi-java
</span><br>
<span class="quotelev1">&gt; --prefix=/home/mpj/installed/openmpi_installed CC=/usr/bin/gcc
</span><br>
<span class="quotelev1">&gt; --disable-mpi-fortran
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Job launching command: mpirun -np 2 -hostfile machines -npernode 1
</span><br>
<span class="quotelev1">&gt; ./latency.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are these numbers okay? If not then please suggest performance tuning
</span><br>
<span class="quotelev1">&gt; steps...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Ansar Javed
</span><br>
<span class="quotelev1">&gt; HPC Lab
</span><br>
<span class="quotelev1">&gt; SEECS NUST
</span><br>
<span class="quotelev1">&gt; Contact: +92 334 438 9394
</span><br>
<span class="quotelev1">&gt; Email: muhammad.ansar_at_[hidden]
</span><br>
<span class="quotelev1">&gt;  &lt;ompi_info.tar.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Regards
Ansar Javed
HPC Lab
SEECS NUST
Contact: +92 334 438 9394
Email: muhammad.ansar_at_[hidden]

</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24210/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24210/bandwidth.c">bandwidth.c</a>
</ul>
<!-- attachment="bandwidth.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24211.php">Ralph Castain: "Re: [OMPI users] Problem in Open MPI (v1.8) Performance on 10G Ethernet"</a>
<li><strong>Previous message:</strong> <a href="24209.php">Gus Correa: "Re: [OMPI users] Where is the error? (MPI program in fortran)"</a>
<li><strong>In reply to:</strong> <a href="24202.php">Ralph Castain: "Re: [OMPI users] Problem in Open MPI (v1.8) Performance on 10G Ethernet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24211.php">Ralph Castain: "Re: [OMPI users] Problem in Open MPI (v1.8) Performance on 10G Ethernet"</a>
<li><strong>Reply:</strong> <a href="24211.php">Ralph Castain: "Re: [OMPI users] Problem in Open MPI (v1.8) Performance on 10G Ethernet"</a>
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
