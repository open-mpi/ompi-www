<?
$subject_val = "[OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep  8 16:37:41 2008" -->
<!-- isoreceived="20080908203741" -->
<!-- sent="Mon, 08 Sep 2008 13:36:49 -0700" -->
<!-- isosent="20080908203649" -->
<!-- name="Prasanna Ranganathan" -->
<!-- email="prasanna_at_[hidden]" -->
<!-- subject="[OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2" -->
<!-- id="C4EADAF2.2F33%prasanna_at_searchme.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2<br>
<strong>From:</strong> Prasanna Ranganathan (<em>prasanna_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-08 16:36:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6479.php">Jeff Squyres: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>Previous message:</strong> <a href="6477.php">Jeff Squyres: "Re: [OMPI users] Warnings in Ubuntu Hardy"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6479.php">Jeff Squyres: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>Reply:</strong> <a href="6479.php">Jeff Squyres: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>Reply:</strong> <a href="6480.php">Paul Kapinos: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>Maybe reply:</strong> <a href="6483.php">Prasanna Ranganathan: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>Maybe reply:</strong> <a href="6501.php">Prasanna Ranganathan: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>Maybe reply:</strong> <a href="6504.php">Prasanna Ranganathan: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>Maybe reply:</strong> <a href="6507.php">Prasanna Ranganathan: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>Maybe reply:</strong> <a href="6517.php">Prasanna Ranganathan: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>Maybe reply:</strong> <a href="6521.php">Prasanna Ranganathan: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>Maybe reply:</strong> <a href="6550.php">Prasanna Ranganathan: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am trying to run a test mpiHelloWorld program that simply initializes the
<br>
MPI environment on all the nodes, prints the hostname and rank of each node
<br>
in the MPI process group and exits.
<br>
<p>I am using MPI 1.1.2 and am running 997 processes on 499 nodes (Nodes have 2
<br>
dual core CPUs).
<br>
<p>I get the following error messages when I run my program as follows: mpirun
<br>
-np 997 -bynode -hostfile nodelist /main/mpiHelloWorld
<br>
.....
<br>
.....
<br>
.....
<br>
[0,1,380][btl_tcp_endpoint.c:572:mca_btl_tcp_endpoint_complete_connect]
<br>
[0,1,142][btl_tcp_endpoint.c:572:mca_btl_tcp_endpoint_complete_connect]
<br>
[0,1,140][btl_tcp_endpoint.c:572:mca_btl_tcp_endpoint_complete_connect]
<br>
[0,1,390][btl_tcp_endpoint.c:572:mca_btl_tcp_endpoint_complete_connect]
<br>
connect() failed with errno=113
<br>
connect() failed with errno=113connect() failed with errno=113connect()
<br>
failed with 
<br>
errno=113[0,1,138][btl_tcp_endpoint.c:572:mca_btl_tcp_endpoint_complete_conn
<br>
ect] 
<br>
connect() failed with
<br>
errno=113[0,1,384][btl_tcp_endpoint.c:572:mca_btl_tcp_endpoint_complete_conn
<br>
ect] [0,1,144][btl_tcp_endpoint.c:572:mca_btl_tcp_endpoint_complete_connect]
<br>
connect() failed with errno=113
<br>
[0,1,388][btl_tcp_endpoint.c:572:mca_btl_tcp_endpoint_complete_connect]
<br>
connect() failed with
<br>
errno=113[0,1,386][btl_tcp_endpoint.c:572:mca_btl_tcp_endpoint_complete_conn
<br>
ect] connect() failed with errno=113
<br>
[0,1,139][btl_tcp_endpoint.c:572:mca_btl_tcp_endpoint_complete_connect]
<br>
connect() failed with errno=113
<br>
connect() failed with errno=113
<br>
.....
<br>
.....
<br>
<p>The main thing is that I get these error messages around 3-4 times out of 10
<br>
attempts with the rest all completing successfully. I have looked into the
<br>
FAQs in detail and also checked the tcp btl settings but am not able to
<br>
figure it out.
<br>
<p>All the 499 nodes have only eth0 active and I get the error even when I run
<br>
the following: mpirun -np 997 -bynode &#173;hostfile nodelist --mca
<br>
btl_tcp_if_include eth0 /main/mpiHelloWorld
<br>
<p>I have attached the output of ompi_info &#139;all.
<br>
<p>The following is the output of /sbin/ifconfig on the node where I start the
<br>
mpi process (it is one of the 499 nodes)
<br>
<p>eth0      Link encap:Ethernet  HWaddr 00:03:25:44:8F:D6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:10.12.1.11  Bcast:10.12.255.255  Mask:255.255.0.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:1978724556 errors:17 dropped:0 overruns:0 frame:17
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:1767028063 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:1000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:580938897359 (554026.5 Mb)  TX bytes:689318600552
<br>
(657385.4 Mb)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Interrupt:22 Base address:0xc000
<br>
<p>lo        Link encap:Local Loopback
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:127.0.0.1  Mask:255.0.0.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP LOOPBACK RUNNING  MTU:16436  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:70560 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:70560 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:339687635 (323.9 Mb)  TX bytes:339687635 (323.9 Mb)
<br>
<p><p>Kindly help.
<br>
<p>Regards,
<br>
<p>Prasanna.
<br>
<p><p><p><p>
<p><p>
<br><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6478/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6478/ompi_info.rtf">ompi_info.rtf</a>
</ul>
<!-- attachment="ompi_info.rtf" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6479.php">Jeff Squyres: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>Previous message:</strong> <a href="6477.php">Jeff Squyres: "Re: [OMPI users] Warnings in Ubuntu Hardy"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6479.php">Jeff Squyres: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>Reply:</strong> <a href="6479.php">Jeff Squyres: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>Reply:</strong> <a href="6480.php">Paul Kapinos: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>Maybe reply:</strong> <a href="6483.php">Prasanna Ranganathan: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>Maybe reply:</strong> <a href="6501.php">Prasanna Ranganathan: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>Maybe reply:</strong> <a href="6504.php">Prasanna Ranganathan: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>Maybe reply:</strong> <a href="6507.php">Prasanna Ranganathan: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>Maybe reply:</strong> <a href="6517.php">Prasanna Ranganathan: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>Maybe reply:</strong> <a href="6521.php">Prasanna Ranganathan: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>Maybe reply:</strong> <a href="6550.php">Prasanna Ranganathan: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
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
