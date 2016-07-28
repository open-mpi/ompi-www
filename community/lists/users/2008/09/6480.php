<?
$subject_val = "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  9 06:06:34 2008" -->
<!-- isoreceived="20080909100634" -->
<!-- sent="Tue, 09 Sep 2008 12:06:29 +0200" -->
<!-- isosent="20080909100629" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2" -->
<!-- id="48C64AA5.5060708_at_rz.rwth-aachen.de" -->
<!-- charset="utf-8" -->
<!-- inreplyto="C4EADAF2.2F33%prasanna_at_searchme.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2<br>
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-09 06:06:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6481.php">Christopher Tanner: "[OMPI users] libimf.so Error"</a>
<li><strong>Previous message:</strong> <a href="6479.php">Jeff Squyres: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>In reply to:</strong> <a href="6478.php">Prasanna Ranganathan: "[OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6483.php">Prasanna Ranganathan: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>First, consider to update to newer OpenMPI.
<br>
<p>Second, look on your environment on the box you startts OpenMPI (runs 
<br>
mpirun ...).
<br>
<p>Type
<br>
ulimit -n
<br>
to explore how many file descriptors your envirinment have. (ulimit -a 
<br>
for all limits). Note, every process on older versions of OpenMPI (prior 
<br>
1.2.6 inclusively) needs an own file descriptor for each process 
<br>
started, IMHO. Maybe its your problem? Does your HelloWorld run OK with 
<br>
some 500 processes?
<br>
<p>best regards
<br>
PK
<br>
<p><p><p>Prasanna Ranganathan wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am trying to run a test mpiHelloWorld program that simply initializes 
</span><br>
<span class="quotelev1">&gt; the MPI environment on all the nodes, prints the hostname and rank of 
</span><br>
<span class="quotelev1">&gt; each node in the MPI process group and exits.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am using MPI 1.1.2 and am running 997 processes on 499 nodes (Nodes 
</span><br>
<span class="quotelev1">&gt; have 2 dual core CPUs).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I get the following error messages when I run my program as follows: 
</span><br>
<span class="quotelev1">&gt; mpirun -np 997 -bynode -hostfile nodelist /main/mpiHelloWorld
</span><br>
<span class="quotelev1">&gt; .....
</span><br>
<span class="quotelev1">&gt; .....
</span><br>
<span class="quotelev1">&gt; .....
</span><br>
<span class="quotelev1">&gt; [0,1,380][btl_tcp_endpoint.c:572:mca_btl_tcp_endpoint_complete_connect] 
</span><br>
<span class="quotelev1">&gt; [0,1,142][btl_tcp_endpoint.c:572:mca_btl_tcp_endpoint_complete_connect] 
</span><br>
<span class="quotelev1">&gt; [0,1,140][btl_tcp_endpoint.c:572:mca_btl_tcp_endpoint_complete_connect] 
</span><br>
<span class="quotelev1">&gt; [0,1,390][btl_tcp_endpoint.c:572:mca_btl_tcp_endpoint_complete_connect] 
</span><br>
<span class="quotelev1">&gt; connect() failed with errno=113
</span><br>
<span class="quotelev1">&gt; connect() failed with errno=113connect() failed with errno=113connect() 
</span><br>
<span class="quotelev1">&gt; failed with 
</span><br>
<span class="quotelev1">&gt; errno=113[0,1,138][btl_tcp_endpoint.c:572:mca_btl_tcp_endpoint_complete_connect] 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; connect() failed with 
</span><br>
<span class="quotelev1">&gt; errno=113[0,1,384][btl_tcp_endpoint.c:572:mca_btl_tcp_endpoint_complete_connect] 
</span><br>
<span class="quotelev1">&gt; [0,1,144][btl_tcp_endpoint.c:572:mca_btl_tcp_endpoint_complete_connect] 
</span><br>
<span class="quotelev1">&gt; connect() failed with errno=113
</span><br>
<span class="quotelev1">&gt; [0,1,388][btl_tcp_endpoint.c:572:mca_btl_tcp_endpoint_complete_connect] 
</span><br>
<span class="quotelev1">&gt; connect() failed with 
</span><br>
<span class="quotelev1">&gt; errno=113[0,1,386][btl_tcp_endpoint.c:572:mca_btl_tcp_endpoint_complete_connect] 
</span><br>
<span class="quotelev1">&gt; connect() failed with errno=113
</span><br>
<span class="quotelev1">&gt; [0,1,139][btl_tcp_endpoint.c:572:mca_btl_tcp_endpoint_complete_connect] 
</span><br>
<span class="quotelev1">&gt; connect() failed with errno=113
</span><br>
<span class="quotelev1">&gt; connect() failed with errno=113
</span><br>
<span class="quotelev1">&gt; .....
</span><br>
<span class="quotelev1">&gt; .....
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *The main thing is that I get these error messages around 3-4 times out 
</span><br>
<span class="quotelev1">&gt; of 10 attempts with the rest all completing successfully. I have looked 
</span><br>
<span class="quotelev1">&gt; into the FAQs in detail and also checked the tcp btl settings but am not 
</span><br>
<span class="quotelev1">&gt; able to figure it out.
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; All the 499 nodes have only eth0 active and I get the error even when I 
</span><br>
<span class="quotelev1">&gt; run the following: mpirun -np 997 -bynode &#150;hostfile nodelist --mca 
</span><br>
<span class="quotelev1">&gt; btl_tcp_if_include eth0 /main/mpiHelloWorld
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have attached the output of ompi_info &#151;all.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The following is the output of /sbin/ifconfig on the node where I start 
</span><br>
<span class="quotelev1">&gt; the mpi process (it is one of the 499 nodes)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; eth0      Link encap:Ethernet  HWaddr 00:03:25:44:8F:D6  
</span><br>
<span class="quotelev1">&gt;           inet addr:10.12.1.11  Bcast:10.12.255.255  Mask:255.255.0.0
</span><br>
<span class="quotelev1">&gt;           UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt;           RX packets:1978724556 errors:17 dropped:0 overruns:0 frame:17
</span><br>
<span class="quotelev1">&gt;           TX packets:1767028063 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;           collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev1">&gt;           RX bytes:580938897359 (554026.5 Mb)  TX bytes:689318600552 
</span><br>
<span class="quotelev1">&gt; (657385.4 Mb)
</span><br>
<span class="quotelev1">&gt;           Interrupt:22 Base address:0xc000
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; lo        Link encap:Local Loopback  
</span><br>
<span class="quotelev1">&gt;           inet addr:127.0.0.1  Mask:255.0.0.0
</span><br>
<span class="quotelev1">&gt;           UP LOOPBACK RUNNING  MTU:16436  Metric:1
</span><br>
<span class="quotelev1">&gt;           RX packets:70560 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;           TX packets:70560 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;           collisions:0 txqueuelen:0
</span><br>
<span class="quotelev1">&gt;           RX bytes:339687635 (323.9 Mb)  TX bytes:339687635 (323.9 Mb)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kindly help.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Prasanna.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<p><p>
<br><p>
<p>
<br><hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6480/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6481.php">Christopher Tanner: "[OMPI users] libimf.so Error"</a>
<li><strong>Previous message:</strong> <a href="6479.php">Jeff Squyres: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>In reply to:</strong> <a href="6478.php">Prasanna Ranganathan: "[OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6483.php">Prasanna Ranganathan: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
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
