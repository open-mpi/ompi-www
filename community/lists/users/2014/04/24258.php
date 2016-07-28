<?
$subject_val = "[OMPI users] Connection timed out on TCP";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 25 15:56:48 2014" -->
<!-- isoreceived="20140425195648" -->
<!-- sent="Fri, 25 Apr 2014 14:56:47 -0500" -->
<!-- isosent="20140425195647" -->
<!-- name="Vince Grimes" -->
<!-- email="tom.grimes_at_[hidden]" -->
<!-- subject="[OMPI users] Connection timed out on TCP" -->
<!-- id="535ABDFF.1020409_at_ttu.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="mailman.21.1398441604.11652.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI users] Connection timed out on TCP<br>
<strong>From:</strong> Vince Grimes (<em>tom.grimes_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-25 15:56:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24259.php">Jamil Appa: "[OMPI users] OMPI 1.8.1 Deadlock in mpi_finalize with mpi_init_thread"</a>
<li><strong>Previous message:</strong> <a href="24257.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8 and PGI compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24265.php">Vince Grimes: "Re: [OMPI users] Connection timed out on TCP"</a>
<li><strong>Maybe reply:</strong> <a href="24265.php">Vince Grimes: "Re: [OMPI users] Connection timed out on TCP"</a>
<li><strong>Maybe reply:</strong> <a href="24272.php">Vince Grimes: "Re: [OMPI users] Connection timed out on TCP"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There is no firewall on this subnet as it is the internal Ethernet for 
<br>
the cluster.
<br>
<p>However, I double-checked the offending IPs and discovered they are 
<br>
Infiniband IPoIB addresses! I'm now trying to exclude the ib0 interface 
<br>
as in <a href="https://www.open-mpi.org/faq/?category=tcp#tcp-selection">https://www.open-mpi.org/faq/?category=tcp#tcp-selection</a>
<br>
<p>T. Vince Grimes, Ph.D.
<br>
CCC System Administrator
<br>
<p>Texas Tech University
<br>
Dept. of Chemistry and Biochemistry (10A)
<br>
Box 41061
<br>
Lubbock, TX 79409-1061
<br>
<p>(806) 834-0813 (voice);     (806) 742-1289 (fax)
<br>
<p>On 04/25/2014 11:00 AM, users-request_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Date: Thu, 24 Apr 2014 19:49:26 -0700 From: Ralph Castain
</span><br>
<span class="quotelev1">&gt; &lt;rhc_at_[hidden]&gt; To: Open MPI Users &lt;users_at_[hidden]&gt; Subject: Re:
</span><br>
<span class="quotelev1">&gt; [OMPI users] Connection timed out on TCP and notify question Message-ID:
</span><br>
<span class="quotelev1">&gt; &lt;11462B85-83CA-4B3D-86E5-EDDD9BC872A6_at_[hidden]&gt; Content-Type:
</span><br>
<span class="quotelev1">&gt; text/plain; charset=us-ascii Sounds like either a routing problem or a
</span><br>
<span class="quotelev1">&gt; firewall. Are there multiple NICs on these nodes? Looking at the quoted
</span><br>
<span class="quotelev1">&gt; NIC in your error message, is that the correct subnet we should be
</span><br>
<span class="quotelev1">&gt; using? Have you checked to ensure no firewalls exist on that subnet
</span><br>
<span class="quotelev1">&gt; between the nodes? On Apr 24, 2014, at 8:41 AM, Vince Grimes
</span><br>
<span class="quotelev1">&gt; &lt;tom.grimes_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;Dear all:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;	In the ongoing investigation into why a particular in-house program is not working in parallel over multiple nodes using OpenMPI, running with &quot;--mca btl self,sm,tcp&quot; I have been running into the following error:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;[compute-6-15.local][[8185,1],0 [btl_tcp_endpoint.c:653:mca_btl_tcp_endpoint_complete_connect] connect() to 10.7.36.247 failed: Connection timed out (110)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;I thought at first it was due to running out of file handles (sockets are considered files), but I have amended limits.d to allow 102400 files (up from the default of 1024), which should be more than enough.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;	What is going on? Trying to connect to 4/20 nodes gave the error above.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;	My second question involves the notify system for btl openib. What does the syslog notifier require in order to work? I want to see if the errors running the same program with openib are due to dropped IB connections.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;--
</span><br>
<span class="quotelev3">&gt;&gt; &gt;T. Vince Grimes, Ph.D.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;CCC System Administrator
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;Texas Tech University
</span><br>
<span class="quotelev3">&gt;&gt; &gt;Dept. of Chemistry and Biochemistry (10A)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;Box 41061
</span><br>
<span class="quotelev3">&gt;&gt; &gt;Lubbock, TX 79409-1061
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;(806) 834-0813 (voice);     (806) 742-1289 (fax)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt;users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt;users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24259.php">Jamil Appa: "[OMPI users] OMPI 1.8.1 Deadlock in mpi_finalize with mpi_init_thread"</a>
<li><strong>Previous message:</strong> <a href="24257.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8 and PGI compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24265.php">Vince Grimes: "Re: [OMPI users] Connection timed out on TCP"</a>
<li><strong>Maybe reply:</strong> <a href="24265.php">Vince Grimes: "Re: [OMPI users] Connection timed out on TCP"</a>
<li><strong>Maybe reply:</strong> <a href="24272.php">Vince Grimes: "Re: [OMPI users] Connection timed out on TCP"</a>
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
