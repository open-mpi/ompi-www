<?
$subject_val = "Re: [OMPI users] Problem in Open MPI (v1.8) Performance on 10G Ethernet";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 16 08:30:40 2014" -->
<!-- isoreceived="20140416123040" -->
<!-- sent="Wed, 16 Apr 2014 17:30:39 +0500" -->
<!-- isosent="20140416123039" -->
<!-- name="Muhammad Ansar Javed" -->
<!-- email="muhammad.ansar_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem in Open MPI (v1.8) Performance on 10G Ethernet" -->
<!-- id="CACztQg3PwFZ7rewMZcd4h2JE=yosgcbhhFoxuO2TX7=iwkuXYg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAMD57oeFo7QPCS2cXUhTZ3aqYp6v08H21Rg5KjNri+=_DBJ_Ng_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-04-16 08:30:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24215.php">Oscar Mojica: "Re: [OMPI users] Where is the error? (MPI program in fortran)"</a>
<li><strong>Previous message:</strong> <a href="24213.php">&#197;ke Sandgren: "[OMPI users] probable bug in 1.9a1r31409"</a>
<li><strong>In reply to:</strong> <a href="24211.php">Ralph Castain: "Re: [OMPI users] Problem in Open MPI (v1.8) Performance on 10G Ethernet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24232.php">George Bosilca: "Re: [OMPI users] Problem in Open MPI (v1.8) Performance on 10G Ethernet"</a>
<li><strong>Reply:</strong> <a href="24232.php">George Bosilca: "Re: [OMPI users] Problem in Open MPI (v1.8) Performance on 10G Ethernet"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
Yes, you are right. I should have also tested NetPipe-MPI version earlier.
<br>
I ran NetPipe-MPI version on 10G Ethernet and maximum bandwidth achieved is
<br>
5872 Mbps. Moreover, maximum bandwidth achieved by osu_bw test is 6080
<br>
Mbps. I have used OSU-Micro-Benchmarks version 4.3.
<br>
<p><p>On Wed, Apr 16, 2014 at 3:40 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I apologize, but I am now confused. Let me see if I can translate:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * you ran the non-MPI version of the NetPipe benchmark and got 9.5Gps on a
</span><br>
<span class="quotelev1">&gt; 10Gps network
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * you ran iperf and got 9.61Gps - however, this has nothing to do with
</span><br>
<span class="quotelev1">&gt; MPI. Just tests your TCP stack
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * you tested your bandwidth program on a 1Gps network and got about 90%
</span><br>
<span class="quotelev1">&gt; efficiency.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is the above correct? If so, my actual suggestion was to run the MPI
</span><br>
<span class="quotelev1">&gt; version of NetPipe and to use the OSB benchmark program as well. Your
</span><br>
<span class="quotelev1">&gt; program might well be okay, but benchmarking is a hard thing to get right
</span><br>
<span class="quotelev1">&gt; in a parallel world, so you might as well validate it by cross-checking the
</span><br>
<span class="quotelev1">&gt; result.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I suggest this mostly because your performance numbers are far worse than
</span><br>
<span class="quotelev1">&gt; anything we've measured using those standard benchmarks, and so we should
</span><br>
<span class="quotelev1">&gt; first ensure we aren't chasing a ghost.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Apr 16, 2014 at 1:41 AM, Muhammad Ansar Javed &lt;
</span><br>
<span class="quotelev1">&gt; muhammad.ansar_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes, I have tried NetPipe-Java and iperf for bandwidth and configuration
</span><br>
<span class="quotelev2">&gt;&gt; test. NetPipe Java achieves maximum 9.40 Gbps while iperf achieves maximum
</span><br>
<span class="quotelev2">&gt;&gt; 9.61 Gbps bandwidth. I have also tested my bandwidth program on 1Gbps
</span><br>
<span class="quotelev2">&gt;&gt; Ethernet connection and it achieves 901 Mbps bandwidth. I am using the same
</span><br>
<span class="quotelev2">&gt;&gt; program for 10G network benchmarks. Please find attached source file of
</span><br>
<span class="quotelev2">&gt;&gt; bandwidth program.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As far as --bind-to core is concerned, I think it is working fine. Here
</span><br>
<span class="quotelev2">&gt;&gt; is output of --report-bindings switch.
</span><br>
<span class="quotelev2">&gt;&gt; [host3:07134] MCW rank 0 bound to socket 0[core 0[hwt 0]]: [B/././.]
</span><br>
<span class="quotelev2">&gt;&gt; [host4:10282] MCW rank 1 bound to socket 0[core 0[hwt 0]]: [B/././.]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Apr 15, 2014 at 8:39 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Have you tried a typical benchmark (e.g., NetPipe or OMB) to ensure the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problem isn't in your program? Outside of that, you might want to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; explicitly tell it to --bind-to core just to be sure it does so - it's
</span><br>
<span class="quotelev3">&gt;&gt;&gt; supposed to do that by default, but might as well be sure. You can check by
</span><br>
<span class="quotelev3">&gt;&gt;&gt; adding --report-binding to the cmd line.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Apr 14, 2014, at 11:10 PM, Muhammad Ansar Javed &lt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; muhammad.ansar_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am trying to benchmark Open MPI performance on 10G Ethernet network
</span><br>
<span class="quotelev3">&gt;&gt;&gt; between two hosts. The performance numbers of benchmarks are less than
</span><br>
<span class="quotelev3">&gt;&gt;&gt; expected. The maximum bandwidth achieved by OMPI-C is 5678 Mbps and I was
</span><br>
<span class="quotelev3">&gt;&gt;&gt; expecting around 9000+ Mbps. Moreover latency is also quite higher than
</span><br>
<span class="quotelev3">&gt;&gt;&gt; expected, ranging from 37 to 59 us. Here is complete set of numbers.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *LatencyOpen MPI C    Size    Time (us)*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1         37.76
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2         37.75
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4         37.78
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 8         55.17
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 16       37.89
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 32       39.08
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 64       37.78
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 128     59.46
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 256     39.37
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 512     40.39
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1024   47.18
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2048   47.84
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *BandwidthOpen MPI C    Size (Bytes)    Bandwidth (Mbps)*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2048               412.22
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4096               539.59
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 8192               827.73
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 16384             1655.35
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 32768             3274.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 65536             1995.22
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 131072           3270.84
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 262144           4316.22
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 524288           5019.46
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1048576         5236.17
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2097152         5362.61
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4194304         5495.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 8388608         5565.32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 16777216       5678.32
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My environments consists of two hosts having point-to-point
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (switch-less) 10Gbps Ethernet connection.  Environment (OS, user, directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; structure etc) on both hosts is exactly same. There is no NAS or shared
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file system between both hosts. Following are configuration and job
</span><br>
<span class="quotelev3">&gt;&gt;&gt; launching commands that I am using. Moreover, I have attached output of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; script ompi_info --all.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Configuration commmand: ./configure --enable-mpi-java
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --prefix=/home/mpj/installed/openmpi_installed CC=/usr/bin/gcc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --disable-mpi-fortran
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Job launching command: mpirun -np 2 -hostfile machines -npernode 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./latency.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Are these numbers okay? If not then please suggest performance tuning
</span><br>
<span class="quotelev3">&gt;&gt;&gt; steps...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ansar Javed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HPC Lab
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SEECS NUST
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Contact: +92 334 438 9394
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Email: muhammad.ansar_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  &lt;ompi_info.tar.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Regards
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ansar Javed
</span><br>
<span class="quotelev2">&gt;&gt; HPC Lab
</span><br>
<span class="quotelev2">&gt;&gt; SEECS NUST
</span><br>
<span class="quotelev2">&gt;&gt; Contact: +92 334 438 9394
</span><br>
<span class="quotelev2">&gt;&gt; Email: muhammad.ansar_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24214/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24215.php">Oscar Mojica: "Re: [OMPI users] Where is the error? (MPI program in fortran)"</a>
<li><strong>Previous message:</strong> <a href="24213.php">&#197;ke Sandgren: "[OMPI users] probable bug in 1.9a1r31409"</a>
<li><strong>In reply to:</strong> <a href="24211.php">Ralph Castain: "Re: [OMPI users] Problem in Open MPI (v1.8) Performance on 10G Ethernet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24232.php">George Bosilca: "Re: [OMPI users] Problem in Open MPI (v1.8) Performance on 10G Ethernet"</a>
<li><strong>Reply:</strong> <a href="24232.php">George Bosilca: "Re: [OMPI users] Problem in Open MPI (v1.8) Performance on 10G Ethernet"</a>
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
