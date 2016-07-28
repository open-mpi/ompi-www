<?
$subject_val = "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep  8 16:43:39 2008" -->
<!-- isoreceived="20080908204339" -->
<!-- sent="Mon, 8 Sep 2008 16:43:33 -0400" -->
<!-- isosent="20080908204333" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2" -->
<!-- id="AF302D68-0D30-469E-AFD3-566FF962814B_at_cisco.com" -->
<!-- charset="WINDOWS-1252" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-08 16:43:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6480.php">Paul Kapinos: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>Previous message:</strong> <a href="6478.php">Prasanna Ranganathan: "[OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>In reply to:</strong> <a href="6478.php">Prasanna Ranganathan: "[OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6480.php">Paul Kapinos: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Are you able to upgrade to Open MPI v1.2.7?
<br>
<p>There were *many* bug fixes and changes in the 1.2 series compared to  
<br>
the 1.1 series, some, in particular, were dealing with TCP socket  
<br>
timeouts (which are important when dealing with large numbers of MPI  
<br>
processes).
<br>
<p><p><p>On Sep 8, 2008, at 4:36 PM, Prasanna Ranganathan wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to run a test mpiHelloWorld program that simply  
</span><br>
<span class="quotelev1">&gt; initializes the MPI environment on all the nodes, prints the  
</span><br>
<span class="quotelev1">&gt; hostname and rank of each node in the MPI process group and exits.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am using MPI 1.1.2 and am running 997 processes on 499 nodes  
</span><br>
<span class="quotelev1">&gt; (Nodes have 2 dual core CPUs).
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
<span class="quotelev1">&gt; [0,1,380][btl_tcp_endpoint.c: 
</span><br>
<span class="quotelev1">&gt; 572:mca_btl_tcp_endpoint_complete_connect] [0,1,142] 
</span><br>
<span class="quotelev1">&gt; [btl_tcp_endpoint.c:572:mca_btl_tcp_endpoint_complete_connect]  
</span><br>
<span class="quotelev1">&gt; [0,1,140][btl_tcp_endpoint.c: 
</span><br>
<span class="quotelev1">&gt; 572:mca_btl_tcp_endpoint_complete_connect] [0,1,390] 
</span><br>
<span class="quotelev1">&gt; [btl_tcp_endpoint.c:572:mca_btl_tcp_endpoint_complete_connect]  
</span><br>
<span class="quotelev1">&gt; connect() failed with errno=113
</span><br>
<span class="quotelev1">&gt; connect() failed with errno=113connect() failed with  
</span><br>
<span class="quotelev1">&gt; errno=113connect() failed with errno=113[0,1,138][btl_tcp_endpoint.c: 
</span><br>
<span class="quotelev1">&gt; 572:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() failed with errno=113[0,1,384][btl_tcp_endpoint.c: 
</span><br>
<span class="quotelev1">&gt; 572:mca_btl_tcp_endpoint_complete_connect] [0,1,144] 
</span><br>
<span class="quotelev1">&gt; [btl_tcp_endpoint.c:572:mca_btl_tcp_endpoint_complete_connect]  
</span><br>
<span class="quotelev1">&gt; connect() failed with errno=113
</span><br>
<span class="quotelev1">&gt; [0,1,388][btl_tcp_endpoint.c: 
</span><br>
<span class="quotelev1">&gt; 572:mca_btl_tcp_endpoint_complete_connect] connect() failed with  
</span><br>
<span class="quotelev1">&gt; errno=113[0,1,386][btl_tcp_endpoint.c: 
</span><br>
<span class="quotelev1">&gt; 572:mca_btl_tcp_endpoint_complete_connect] connect() failed with  
</span><br>
<span class="quotelev1">&gt; errno=113
</span><br>
<span class="quotelev1">&gt; [0,1,139][btl_tcp_endpoint.c: 
</span><br>
<span class="quotelev1">&gt; 572:mca_btl_tcp_endpoint_complete_connect] connect() failed with  
</span><br>
<span class="quotelev1">&gt; errno=113
</span><br>
<span class="quotelev1">&gt; connect() failed with errno=113
</span><br>
<span class="quotelev1">&gt; .....
</span><br>
<span class="quotelev1">&gt; .....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The main thing is that I get these error messages around 3-4 times  
</span><br>
<span class="quotelev1">&gt; out of 10 attempts with the rest all completing successfully. I have  
</span><br>
<span class="quotelev1">&gt; looked into the FAQs in detail and also checked the tcp btl settings  
</span><br>
<span class="quotelev1">&gt; but am not able to figure it out.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All the 499 nodes have only eth0 active and I get the error even  
</span><br>
<span class="quotelev1">&gt; when I run the following: mpirun -np 997 -bynode &#150;hostfile nodelist  
</span><br>
<span class="quotelev1">&gt; --mca btl_tcp_if_include eth0 /main/mpiHelloWorld
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have attached the output of ompi_info &#151;all.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The following is the output of /sbin/ifconfig on the node where I  
</span><br>
<span class="quotelev1">&gt; start the mpi process (it is one of the 499 nodes)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; eth0      Link encap:Ethernet  HWaddr 00:03:25:44:8F:D6
</span><br>
<span class="quotelev1">&gt;           inet addr:10.12.1.11  Bcast:10.12.255.255  Mask:255.255.0.0
</span><br>
<span class="quotelev1">&gt;           UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt;           RX packets:1978724556 errors:17 dropped:0 overruns:0 frame: 
</span><br>
<span class="quotelev1">&gt; 17
</span><br>
<span class="quotelev1">&gt;           TX packets:1767028063 errors:0 dropped:0 overruns:0  
</span><br>
<span class="quotelev1">&gt; carrier:0
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
<span class="quotelev1">&gt; &lt;ompi_info.rtf&gt;_______________________________________________
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6480.php">Paul Kapinos: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>Previous message:</strong> <a href="6478.php">Prasanna Ranganathan: "[OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>In reply to:</strong> <a href="6478.php">Prasanna Ranganathan: "[OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6480.php">Paul Kapinos: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
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
