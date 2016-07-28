<?
$subject_val = "Re: [OMPI users] Problem in Open MPI (v1.8) Performance on 10G Ethernet";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 15 11:41:14 2014" -->
<!-- isoreceived="20140415154114" -->
<!-- sent="Tue, 15 Apr 2014 08:39:46 -0700" -->
<!-- isosent="20140415153946" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem in Open MPI (v1.8) Performance on 10G Ethernet" -->
<!-- id="0D052D0D-D879-44D9-88BB-6C816A25B122_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CACztQg0Mfru2SLKSW5XaRw5FoTDSaiQxZ9SX_mdC0JPZHgx9eg_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-15 11:39:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24203.php">Gus Correa: "Re: [OMPI users] mpirun runs in serial even I set np to several processors"</a>
<li><strong>Previous message:</strong> <a href="24201.php">Daniel Milroy: "Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4"</a>
<li><strong>In reply to:</strong> <a href="24196.php">Muhammad Ansar Javed: "[OMPI users] Problem in Open MPI (v1.8) Performance on 10G Ethernet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24210.php">Muhammad Ansar Javed: "Re: [OMPI users] Problem in Open MPI (v1.8) Performance on 10G Ethernet"</a>
<li><strong>Reply:</strong> <a href="24210.php">Muhammad Ansar Javed: "Re: [OMPI users] Problem in Open MPI (v1.8) Performance on 10G Ethernet"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Have you tried a typical benchmark (e.g., NetPipe or OMB) to ensure the problem isn't in your program? Outside of that, you might want to explicitly tell it to --bind-to core just to be sure it does so - it's supposed to do that by default, but might as well be sure. You can check by adding --report-binding to the cmd line.
<br>
<p><p>On Apr 14, 2014, at 11:10 PM, Muhammad Ansar Javed &lt;muhammad.ansar_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I am trying to benchmark Open MPI performance on 10G Ethernet network between two hosts. The performance numbers of benchmarks are less than expected. The maximum bandwidth achieved by OMPI-C is 5678 Mbps and I was expecting around 9000+ Mbps. Moreover latency is also quite higher than expected, ranging from 37 to 59 us. Here is complete set of numbers.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Latency
</span><br>
<span class="quotelev1">&gt; Open MPI C    
</span><br>
<span class="quotelev1">&gt; Size    Time (us)
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
<span class="quotelev1">&gt; Bandwidth
</span><br>
<span class="quotelev1">&gt; Open MPI C    
</span><br>
<span class="quotelev1">&gt; Size (Bytes)    Bandwidth (Mbps)
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
<span class="quotelev1">&gt; My environments consists of two hosts having point-to-point (switch-less) 10Gbps Ethernet connection.  Environment (OS, user, directory structure etc) on both hosts is exactly same. There is no NAS or shared file system between both hosts. Following are configuration and job launching commands that I am using. Moreover, I have attached output of script ompi_info --all.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Configuration commmand: ./configure --enable-mpi-java --prefix=/home/mpj/installed/openmpi_installed CC=/usr/bin/gcc --disable-mpi-fortran 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Job launching command: mpirun -np 2 -hostfile machines -npernode 1 ./latency.out
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are these numbers okay? If not then please suggest performance tuning steps...
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
<span class="quotelev1">&gt; &lt;ompi_info.tar.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24202/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24203.php">Gus Correa: "Re: [OMPI users] mpirun runs in serial even I set np to several processors"</a>
<li><strong>Previous message:</strong> <a href="24201.php">Daniel Milroy: "Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4"</a>
<li><strong>In reply to:</strong> <a href="24196.php">Muhammad Ansar Javed: "[OMPI users] Problem in Open MPI (v1.8) Performance on 10G Ethernet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24210.php">Muhammad Ansar Javed: "Re: [OMPI users] Problem in Open MPI (v1.8) Performance on 10G Ethernet"</a>
<li><strong>Reply:</strong> <a href="24210.php">Muhammad Ansar Javed: "Re: [OMPI users] Problem in Open MPI (v1.8) Performance on 10G Ethernet"</a>
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
