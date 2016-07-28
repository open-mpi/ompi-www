<?
$subject_val = "Re: [OMPI users] Problem in Open MPI (v1.8) Performance on 10G Ethernet";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 16 18:05:12 2014" -->
<!-- isoreceived="20140416220512" -->
<!-- sent="Wed, 16 Apr 2014 16:05:07 -0600" -->
<!-- isosent="20140416220507" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem in Open MPI (v1.8) Performance on 10G Ethernet" -->
<!-- id="C0F5F70F-B7FB-4A3C-AF8C-102DAD743C2C_at_icl.utk.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CACztQg3PwFZ7rewMZcd4h2JE=yosgcbhhFoxuO2TX7=iwkuXYg_at_mail.gmail.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-16 18:05:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24233.php">Alfonso Sanchez: "[OMPI users] Conflicts between jobs running on the same node"</a>
<li><strong>Previous message:</strong> <a href="24231.php">Ralph Castain: "Re: [OMPI users] OpenMPI with Gemini Interconnect"</a>
<li><strong>In reply to:</strong> <a href="24214.php">Muhammad Ansar Javed: "Re: [OMPI users] Problem in Open MPI (v1.8) Performance on 10G Ethernet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24239.php">Muhammad Ansar Javed: "Re: [OMPI users] Problem in Open MPI (v1.8) Performance on 10G Ethernet"</a>
<li><strong>Reply:</strong> <a href="24239.php">Muhammad Ansar Javed: "Re: [OMPI users] Problem in Open MPI (v1.8) Performance on 10G Ethernet"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Muhammad,
<br>
<p>Our configuration of TCP is tailored for 1Gbs networks, so it&#146;s performance on 10G might be sub-optimal. That being said, the remaining of this email will be speculation as I do not have access to a 10G system to test it.
<br>
<p>There are two things that I would test to see if I can improve the performance.
<br>
<p>1. The send and receive TCP suffer. These are handled by the btl_tcp_sndbuf and btl_tcp_rcvbuf. By default these are set to 128K which is extremely small for a 10G network. Try 256KB or maybe even 1M (you might need to fiddle with your kernel to get here).
<br>
<p>2. Add more links between the processes by increasing the default value for btl_tcp_links to 2 or 4.
<br>
<p>You might also try to the following (but here I&#146;m more skeptical). Try pushing the value of btl_tcp_endpoint_cache up. This parameter is not to be used eagerly in real applications with a complete communication pattern, but for a benchmark it might be a good use.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p>On Apr 16, 2014, at 06:30 , Muhammad Ansar Javed &lt;muhammad.ansar_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; Yes, you are right. I should have also tested NetPipe-MPI version earlier. I ran NetPipe-MPI version on 10G Ethernet and maximum bandwidth achieved is 5872 Mbps. Moreover, maximum bandwidth achieved by osu_bw test is 6080 Mbps. I have used OSU-Micro-Benchmarks version 4.3.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Apr 16, 2014 at 3:40 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; I apologize, but I am now confused. Let me see if I can translate:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * you ran the non-MPI version of the NetPipe benchmark and got 9.5Gps on a 10Gps network
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * you ran iperf and got 9.61Gps - however, this has nothing to do with MPI. Just tests your TCP stack
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * you tested your bandwidth program on a 1Gps network and got about 90% efficiency.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is the above correct? If so, my actual suggestion was to run the MPI version of NetPipe and to use the OSB benchmark program as well. Your program might well be okay, but benchmarking is a hard thing to get right in a parallel world, so you might as well validate it by cross-checking the result.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I suggest this mostly because your performance numbers are far worse than anything we've measured using those standard benchmarks, and so we should first ensure we aren't chasing a ghost.
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
<span class="quotelev1">&gt; On Wed, Apr 16, 2014 at 1:41 AM, Muhammad Ansar Javed &lt;muhammad.ansar_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Yes, I have tried NetPipe-Java and iperf for bandwidth and configuration test. NetPipe Java achieves maximum 9.40 Gbps while iperf achieves maximum 9.61 Gbps bandwidth. I have also tested my bandwidth program on 1Gbps Ethernet connection and it achieves 901 Mbps bandwidth. I am using the same program for 10G network benchmarks. Please find attached source file of bandwidth program. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As far as --bind-to core is concerned, I think it is working fine. Here is output of --report-bindings switch.
</span><br>
<span class="quotelev1">&gt; [host3:07134] MCW rank 0 bound to socket 0[core 0[hwt 0]]: [B/././.]
</span><br>
<span class="quotelev1">&gt; [host4:10282] MCW rank 1 bound to socket 0[core 0[hwt 0]]: [B/././.]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Apr 15, 2014 at 8:39 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Have you tried a typical benchmark (e.g., NetPipe or OMB) to ensure the problem isn't in your program? Outside of that, you might want to explicitly tell it to --bind-to core just to be sure it does so - it's supposed to do that by default, but might as well be sure. You can check by adding --report-binding to the cmd line.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 14, 2014, at 11:10 PM, Muhammad Ansar Javed &lt;muhammad.ansar_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; I am trying to benchmark Open MPI performance on 10G Ethernet network between two hosts. The performance numbers of benchmarks are less than expected. The maximum bandwidth achieved by OMPI-C is 5678 Mbps and I was expecting around 9000+ Mbps. Moreover latency is also quite higher than expected, ranging from 37 to 59 us. Here is complete set of numbers.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Latency
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI C    
</span><br>
<span class="quotelev2">&gt;&gt; Size    Time (us)
</span><br>
<span class="quotelev2">&gt;&gt; 1         37.76
</span><br>
<span class="quotelev2">&gt;&gt; 2         37.75
</span><br>
<span class="quotelev2">&gt;&gt; 4         37.78
</span><br>
<span class="quotelev2">&gt;&gt; 8         55.17
</span><br>
<span class="quotelev2">&gt;&gt; 16       37.89
</span><br>
<span class="quotelev2">&gt;&gt; 32       39.08
</span><br>
<span class="quotelev2">&gt;&gt; 64       37.78
</span><br>
<span class="quotelev2">&gt;&gt; 128     59.46
</span><br>
<span class="quotelev2">&gt;&gt; 256     39.37
</span><br>
<span class="quotelev2">&gt;&gt; 512     40.39
</span><br>
<span class="quotelev2">&gt;&gt; 1024   47.18
</span><br>
<span class="quotelev2">&gt;&gt; 2048   47.84
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Bandwidth
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI C    
</span><br>
<span class="quotelev2">&gt;&gt; Size (Bytes)    Bandwidth (Mbps)
</span><br>
<span class="quotelev2">&gt;&gt; 2048               412.22
</span><br>
<span class="quotelev2">&gt;&gt; 4096               539.59
</span><br>
<span class="quotelev2">&gt;&gt; 8192               827.73
</span><br>
<span class="quotelev2">&gt;&gt; 16384             1655.35
</span><br>
<span class="quotelev2">&gt;&gt; 32768             3274.3
</span><br>
<span class="quotelev2">&gt;&gt; 65536             1995.22
</span><br>
<span class="quotelev2">&gt;&gt; 131072           3270.84
</span><br>
<span class="quotelev2">&gt;&gt; 262144           4316.22
</span><br>
<span class="quotelev2">&gt;&gt; 524288           5019.46
</span><br>
<span class="quotelev2">&gt;&gt; 1048576         5236.17
</span><br>
<span class="quotelev2">&gt;&gt; 2097152         5362.61
</span><br>
<span class="quotelev2">&gt;&gt; 4194304         5495.2
</span><br>
<span class="quotelev2">&gt;&gt; 8388608         5565.32
</span><br>
<span class="quotelev2">&gt;&gt; 16777216       5678.32
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; My environments consists of two hosts having point-to-point (switch-less) 10Gbps Ethernet connection.  Environment (OS, user, directory structure etc) on both hosts is exactly same. There is no NAS or shared file system between both hosts. Following are configuration and job launching commands that I am using. Moreover, I have attached output of script ompi_info --all.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Configuration commmand: ./configure --enable-mpi-java --prefix=/home/mpj/installed/openmpi_installed CC=/usr/bin/gcc --disable-mpi-fortran 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Job launching command: mpirun -np 2 -hostfile machines -npernode 1 ./latency.out
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Are these numbers okay? If not then please suggest performance tuning steps...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
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
<span class="quotelev2">&gt;&gt; &lt;ompi_info.tar.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24232/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24233.php">Alfonso Sanchez: "[OMPI users] Conflicts between jobs running on the same node"</a>
<li><strong>Previous message:</strong> <a href="24231.php">Ralph Castain: "Re: [OMPI users] OpenMPI with Gemini Interconnect"</a>
<li><strong>In reply to:</strong> <a href="24214.php">Muhammad Ansar Javed: "Re: [OMPI users] Problem in Open MPI (v1.8) Performance on 10G Ethernet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24239.php">Muhammad Ansar Javed: "Re: [OMPI users] Problem in Open MPI (v1.8) Performance on 10G Ethernet"</a>
<li><strong>Reply:</strong> <a href="24239.php">Muhammad Ansar Javed: "Re: [OMPI users] Problem in Open MPI (v1.8) Performance on 10G Ethernet"</a>
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
