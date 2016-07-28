<?
$subject_val = "Re: [OMPI users] Bad performance when scattering big size of data?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct  4 13:07:00 2010" -->
<!-- isoreceived="20101004170700" -->
<!-- sent="Mon, 4 Oct 2010 10:06:33 -0700" -->
<!-- isosent="20101004170633" -->
<!-- name="Doug Reeder" -->
<!-- email="dlr1_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bad performance when scattering big size of data?" -->
<!-- id="E43259D0-2AC9-44AE-8190-4C35A0687167_at_cox.net" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTinxqGd9zMVsE82GKK83dw4cReL4qkxdCzr=+AbP_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Bad performance when scattering big size of data?<br>
<strong>From:</strong> Doug Reeder (<em>dlr1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-04 13:06:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14383.php">Storm Zhang: "Re: [OMPI users] Bad performance when scattering big size of data?"</a>
<li><strong>Previous message:</strong> <a href="14381.php">Ralph Castain: "Re: [OMPI users] mpi_comm_spawn have problems with group communicators"</a>
<li><strong>In reply to:</strong> <a href="14380.php">Storm Zhang: "[OMPI users] Bad performance when scattering big size of data?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14383.php">Storm Zhang: "Re: [OMPI users] Bad performance when scattering big size of data?"</a>
<li><strong>Reply:</strong> <a href="14383.php">Storm Zhang: "Re: [OMPI users] Bad performance when scattering big size of data?"</a>
<li><strong>Reply:</strong> <a href="14384.php">Ralph Castain: "Re: [OMPI users] Bad performance when scattering big size of data?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In my experience hyperthreading can't really deliver two cores worth of processing simultaneously for processes expecting sole use of a core. Since you really have 512 cores I'm not surprised that you see a performance hit when requesting &gt; 512 compute units. We should really get input from a hyperthreading expert, preferably form intel.
<br>
<p>Doug Reeder
<br>
On Oct 4, 2010, at 9:53 AM, Storm Zhang wrote:
<br>
<p><span class="quotelev1">&gt; We have 64 compute nodes which are dual qual-core and hyperthreaded CPUs. So we have 1024 compute units shown in the ROCKS 5.3 system. I'm trying to scatter an array from the master node to the compute nodes using mpiCC and mpirun using C++. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is my test:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The array size is 18KB * Number of compute nodes and is scattered to the compute nodes 5000 times repeatly. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The average running time(seconds):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 100 nodes: 170,
</span><br>
<span class="quotelev1">&gt; 400 nodes: 690,
</span><br>
<span class="quotelev1">&gt; 500 nodes: 855,
</span><br>
<span class="quotelev1">&gt; 600 nodes: 2550,
</span><br>
<span class="quotelev1">&gt; 700 nodes: 2720,
</span><br>
<span class="quotelev1">&gt; 800 nodes: 2900,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There is a big jump of running time from 500 nodes to 600 nodes. Don't know what's the problem. 
</span><br>
<span class="quotelev1">&gt; Tried both in OMPI 1.3.2 and OMPI 1.4.2. Running time is a little faster for all the tests in 1.4.2 but the jump still exists. 
</span><br>
<span class="quotelev1">&gt; Tried using either Bcast function or simply Send/Recv which give very close results. 
</span><br>
<span class="quotelev1">&gt; Tried both in running it directly or using SGE and got the same results.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The code and ompi_info are attached to this email. The direct running command is :
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/bin/mpirun --mca btl_tcp_if_include eth0 --machinefile ../machines -np 600 scatttest
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The ifconfig of head node for eth0 is:
</span><br>
<span class="quotelev1">&gt; eth0      Link encap:Ethernet  HWaddr 00:26:B9:56:8B:44  
</span><br>
<span class="quotelev1">&gt;           inet addr:192.168.1.1  Bcast:192.168.1.255  Mask:255.255.255.0
</span><br>
<span class="quotelev1">&gt;           inet6 addr: fe80::226:b9ff:fe56:8b44/64 Scope:Link
</span><br>
<span class="quotelev1">&gt;           UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt;           RX packets:1096060373 errors:0 dropped:2512622 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;           TX packets:513387679 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;           collisions:0 txqueuelen:1000 
</span><br>
<span class="quotelev1">&gt;           RX bytes:832328807459 (775.1 GiB)  TX bytes:250824621959 (233.5 GiB)
</span><br>
<span class="quotelev1">&gt;           Interrupt:106 Memory:d6000000-d6012800 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A typical ifconfig of a compute node is:
</span><br>
<span class="quotelev1">&gt; eth0      Link encap:Ethernet  HWaddr 00:21:9B:9A:15:AC  
</span><br>
<span class="quotelev1">&gt;           inet addr:192.168.1.253  Bcast:192.168.1.255  Mask:255.255.255.0
</span><br>
<span class="quotelev1">&gt;           inet6 addr: fe80::221:9bff:fe9a:15ac/64 Scope:Link
</span><br>
<span class="quotelev1">&gt;           UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt;           RX packets:362716422 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;           TX packets:349967746 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;           collisions:0 txqueuelen:1000 
</span><br>
<span class="quotelev1">&gt;           RX bytes:139699954685 (130.1 GiB)  TX bytes:338207741480 (314.9 GiB)
</span><br>
<span class="quotelev1">&gt;           Interrupt:82 Memory:d6000000-d6012800 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does anyone help me out of this? It bothers me a lot.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you very much.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Linbao
</span><br>
<span class="quotelev1">&gt; &lt;scatttest.cpp&gt;&lt;ompi_info&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14382/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14383.php">Storm Zhang: "Re: [OMPI users] Bad performance when scattering big size of data?"</a>
<li><strong>Previous message:</strong> <a href="14381.php">Ralph Castain: "Re: [OMPI users] mpi_comm_spawn have problems with group communicators"</a>
<li><strong>In reply to:</strong> <a href="14380.php">Storm Zhang: "[OMPI users] Bad performance when scattering big size of data?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14383.php">Storm Zhang: "Re: [OMPI users] Bad performance when scattering big size of data?"</a>
<li><strong>Reply:</strong> <a href="14383.php">Storm Zhang: "Re: [OMPI users] Bad performance when scattering big size of data?"</a>
<li><strong>Reply:</strong> <a href="14384.php">Ralph Castain: "Re: [OMPI users] Bad performance when scattering big size of data?"</a>
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
