<?
$subject_val = "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 10 18:09:06 2008" -->
<!-- isoreceived="20080910220906" -->
<!-- sent="Wed, 10 Sep 2008 15:08:41 -0700" -->
<!-- isosent="20080910220841" -->
<!-- name="Prasanna Ranganathan" -->
<!-- email="prasanna_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2" -->
<!-- id="C4ED9379.3056%prasanna_at_searchme.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="mailman.15.1220976042.32255.users_at_open-mpi.org" -->
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
<strong>From:</strong> Prasanna Ranganathan (<em>prasanna_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-10 18:08:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6502.php">Eric Thibodeau: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>Previous message:</strong> <a href="6500.php">Jeff Squyres: "Re: [OMPI users] prepend the standard output with rank of the process"</a>
<li><strong>Maybe in reply to:</strong> <a href="6478.php">Prasanna Ranganathan: "[OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6502.php">Eric Thibodeau: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>Reply:</strong> <a href="6502.php">Eric Thibodeau: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>Reply:</strong> <a href="6503.php">Eric Thibodeau: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have upgraded my openMPI to 1.2.6 (We have gentoo and emerge showed
<br>
1.2.6-r1 to be the latest stable version of openMPI).
<br>
<p>I do still get the following error message when running my test helloWorld
<br>
program:
<br>
<p>[10.12.77.21][0,1,95][btl_tcp_endpoint.c:572:mca_btl_tcp_endpoint_complete_c
<br>
onnect] connect() failed with
<br>
errno=113[10.12.16.13][0,1,408][btl_tcp_endpoint.c:572:mca_btl_tcp_endpoint_
<br>
complete_connect] connect() failed with errno=113
<br>
[10.12.77.15][0,1,89][btl_tcp_endpoint.c:572:mca_btl_tcp_endpoint_complete_c
<br>
onnect] connect() failed with errno=113
<br>
[10.12.77.22][0,1,96][btl_tcp_endpoint.c:572:mca_btl_tcp_endpoint_complete_c
<br>
onnect] connect() failed with errno=113
<br>
<p>Again, this error does not happen with every run of the test program and
<br>
occurs only certain times.
<br>
<p>How do I take care of this?
<br>
<p>Regards,
<br>
<p>Prasanna.
<br>
<p><p>On 9/9/08 9:00 AM, &quot;users-request_at_[hidden]&quot; &lt;users-request_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Message: 1
</span><br>
<span class="quotelev1">&gt; Date: Mon, 8 Sep 2008 16:43:33 -0400
</span><br>
<span class="quotelev1">&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Need help resolving No route to host error
</span><br>
<span class="quotelev1">&gt; with OpenMPI 1.1.2
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;AF302D68-0D30-469E-AFD3-566FF962814B_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=WINDOWS-1252; format=flowed;
</span><br>
<span class="quotelev1">&gt; delsp=yes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are you able to upgrade to Open MPI v1.2.7?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There were *many* bug fixes and changes in the 1.2 series compared to
</span><br>
<span class="quotelev1">&gt; the 1.1 series, some, in particular, were dealing with TCP socket
</span><br>
<span class="quotelev1">&gt; timeouts (which are important when dealing with large numbers of MPI
</span><br>
<span class="quotelev1">&gt; processes).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 8, 2008, at 4:36 PM, Prasanna Ranganathan wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am trying to run a test mpiHelloWorld program that simply
</span><br>
<span class="quotelev2">&gt;&gt; initializes the MPI environment on all the nodes, prints the
</span><br>
<span class="quotelev2">&gt;&gt; hostname and rank of each node in the MPI process group and exits.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am using MPI 1.1.2 and am running 997 processes on 499 nodes
</span><br>
<span class="quotelev2">&gt;&gt; (Nodes have 2 dual core CPUs).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I get the following error messages when I run my program as follows:
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 997 -bynode -hostfile nodelist /main/mpiHelloWorld
</span><br>
<span class="quotelev2">&gt;&gt; .....
</span><br>
<span class="quotelev2">&gt;&gt; .....
</span><br>
<span class="quotelev2">&gt;&gt; .....
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,380][btl_tcp_endpoint.c:
</span><br>
<span class="quotelev2">&gt;&gt; 572:mca_btl_tcp_endpoint_complete_connect] [0,1,142]
</span><br>
<span class="quotelev2">&gt;&gt; [btl_tcp_endpoint.c:572:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,140][btl_tcp_endpoint.c:
</span><br>
<span class="quotelev2">&gt;&gt; 572:mca_btl_tcp_endpoint_complete_connect] [0,1,390]
</span><br>
<span class="quotelev2">&gt;&gt; [btl_tcp_endpoint.c:572:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev2">&gt;&gt; connect() failed with errno=113
</span><br>
<span class="quotelev2">&gt;&gt; connect() failed with errno=113connect() failed with
</span><br>
<span class="quotelev2">&gt;&gt; errno=113connect() failed with errno=113[0,1,138][btl_tcp_endpoint.c:
</span><br>
<span class="quotelev2">&gt;&gt; 572:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev2">&gt;&gt; connect() failed with errno=113[0,1,384][btl_tcp_endpoint.c:
</span><br>
<span class="quotelev2">&gt;&gt; 572:mca_btl_tcp_endpoint_complete_connect] [0,1,144]
</span><br>
<span class="quotelev2">&gt;&gt; [btl_tcp_endpoint.c:572:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev2">&gt;&gt; connect() failed with errno=113
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,388][btl_tcp_endpoint.c:
</span><br>
<span class="quotelev2">&gt;&gt; 572:mca_btl_tcp_endpoint_complete_connect] connect() failed with
</span><br>
<span class="quotelev2">&gt;&gt; errno=113[0,1,386][btl_tcp_endpoint.c:
</span><br>
<span class="quotelev2">&gt;&gt; 572:mca_btl_tcp_endpoint_complete_connect] connect() failed with
</span><br>
<span class="quotelev2">&gt;&gt; errno=113
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,139][btl_tcp_endpoint.c:
</span><br>
<span class="quotelev2">&gt;&gt; 572:mca_btl_tcp_endpoint_complete_connect] connect() failed with
</span><br>
<span class="quotelev2">&gt;&gt; errno=113
</span><br>
<span class="quotelev2">&gt;&gt; connect() failed with errno=113
</span><br>
<span class="quotelev2">&gt;&gt; .....
</span><br>
<span class="quotelev2">&gt;&gt; .....
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The main thing is that I get these error messages around 3-4 times
</span><br>
<span class="quotelev2">&gt;&gt; out of 10 attempts with the rest all completing successfully. I have
</span><br>
<span class="quotelev2">&gt;&gt; looked into the FAQs in detail and also checked the tcp btl settings
</span><br>
<span class="quotelev2">&gt;&gt; but am not able to figure it out.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; All the 499 nodes have only eth0 active and I get the error even
</span><br>
<span class="quotelev2">&gt;&gt; when I run the following: mpirun -np 997 -bynode ?hostfile nodelist
</span><br>
<span class="quotelev2">&gt;&gt; --mca btl_tcp_if_include eth0 /main/mpiHelloWorld
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have attached the output of ompi_info ?all.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The following is the output of /sbin/ifconfig on the node where I
</span><br>
<span class="quotelev2">&gt;&gt; start the mpi process (it is one of the 499 nodes)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; eth0      Link encap:Ethernet  HWaddr 00:03:25:44:8F:D6
</span><br>
<span class="quotelev2">&gt;&gt;           inet addr:10.12.1.11  Bcast:10.12.255.255  Mask:255.255.0.0
</span><br>
<span class="quotelev2">&gt;&gt;           UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev2">&gt;&gt;           RX packets:1978724556 errors:17 dropped:0 overruns:0 frame:
</span><br>
<span class="quotelev2">&gt;&gt; 17
</span><br>
<span class="quotelev2">&gt;&gt;           TX packets:1767028063 errors:0 dropped:0 overruns:0
</span><br>
<span class="quotelev2">&gt;&gt; carrier:0
</span><br>
<span class="quotelev2">&gt;&gt;           collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev2">&gt;&gt;           RX bytes:580938897359 (554026.5 Mb)  TX bytes:689318600552
</span><br>
<span class="quotelev2">&gt;&gt; (657385.4 Mb)
</span><br>
<span class="quotelev2">&gt;&gt;           Interrupt:22 Base address:0xc000
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; lo        Link encap:Local Loopback
</span><br>
<span class="quotelev2">&gt;&gt;           inet addr:127.0.0.1  Mask:255.0.0.0
</span><br>
<span class="quotelev2">&gt;&gt;           UP LOOPBACK RUNNING  MTU:16436  Metric:1
</span><br>
<span class="quotelev2">&gt;&gt;           RX packets:70560 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev2">&gt;&gt;           TX packets:70560 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev2">&gt;&gt;           collisions:0 txqueuelen:0
</span><br>
<span class="quotelev2">&gt;&gt;           RX bytes:339687635 (323.9 Mb)  TX bytes:339687635 (323.9 Mb)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Kindly help.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Prasanna.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;ompi_info.rtf&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6502.php">Eric Thibodeau: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>Previous message:</strong> <a href="6500.php">Jeff Squyres: "Re: [OMPI users] prepend the standard output with rank of the process"</a>
<li><strong>Maybe in reply to:</strong> <a href="6478.php">Prasanna Ranganathan: "[OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6502.php">Eric Thibodeau: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>Reply:</strong> <a href="6502.php">Eric Thibodeau: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>Reply:</strong> <a href="6503.php">Eric Thibodeau: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
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
