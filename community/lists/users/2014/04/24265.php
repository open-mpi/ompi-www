<?
$subject_val = "Re: [OMPI users] Connection timed out on TCP";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 28 11:08:11 2014" -->
<!-- isoreceived="20140428150811" -->
<!-- sent="Mon, 28 Apr 2014 10:08:05 -0500" -->
<!-- isosent="20140428150805" -->
<!-- name="Vince Grimes" -->
<!-- email="tom.grimes_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Connection timed out on TCP" -->
<!-- id="535E6ED5.7080103_at_ttu.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="mailman.2169.1398460951.6754.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Connection timed out on TCP<br>
<strong>From:</strong> Vince Grimes (<em>tom.grimes_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-28 11:08:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24266.php">Ralph Castain: "Re: [OMPI users] Deadlocks and warnings from libevent when using	MPI_THREAD_MULTIPLE"</a>
<li><strong>Previous message:</strong> <a href="24264.php">Jeffrey A Cummings: "Re: [OMPI users] Deadlocks and warnings from libevent when using	MPI_THREAD_MULTIPLE"</a>
<li><strong>Maybe in reply to:</strong> <a href="24258.php">Vince Grimes: "[OMPI users] Connection timed out on TCP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24267.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Connection timed out on TCP"</a>
<li><strong>Reply:</strong> <a href="24267.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Connection timed out on TCP"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
After barring the ib0 interfaces, I still get &quot;Connection timed out&quot; 
<br>
errors even over the Ethernet interfaces.
<br>
<p>At the end of the output I not get the following messages in addition to 
<br>
the one above:
<br>
<p>--------------------------------------------------------------------------
<br>
Sorry!  You were supposed to get help about:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;client handshake fail
<br>
from the file:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;help-mpi-btl-tcp.txt
<br>
But I couldn't find that topic in the file.  Sorry!
<br>
--------------------------------------------------------------------------
<br>
<p>The Ethernet switches are managed. Is it likely there is something set 
<br>
wrong?
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
<p>On 04/25/2014 04:22 PM, users-request_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Message: 3
</span><br>
<span class="quotelev1">&gt; Date: Fri, 25 Apr 2014 14:56:47 -0500
</span><br>
<span class="quotelev1">&gt; From: Vince Grimes &lt;tom.grimes_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] Connection timed out on TCP
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;535ABDFF.1020409_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;ISO-8859-1&quot;; format=flowed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is no firewall on this subnet as it is the internal Ethernet for
</span><br>
<span class="quotelev1">&gt; the cluster.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, I double-checked the offending IPs and discovered they are
</span><br>
<span class="quotelev1">&gt; Infiniband IPoIB addresses! I'm now trying to exclude the ib0 interface
</span><br>
<span class="quotelev1">&gt; as in <a href="https://www.open-mpi.org/faq/?category=tcp#tcp-selection">https://www.open-mpi.org/faq/?category=tcp#tcp-selection</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; T. Vince Grimes, Ph.D.
</span><br>
<span class="quotelev1">&gt; CCC System Administrator
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Texas Tech University
</span><br>
<span class="quotelev1">&gt; Dept. of Chemistry and Biochemistry (10A)
</span><br>
<span class="quotelev1">&gt; Box 41061
</span><br>
<span class="quotelev1">&gt; Lubbock, TX 79409-1061
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (806) 834-0813 (voice);     (806) 742-1289 (fax)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 04/25/2014 11:00 AM, users-request_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Date: Thu, 24 Apr 2014 19:49:26 -0700 From: Ralph Castain
</span><br>
<span class="quotelev2">&gt;&gt; &lt;rhc_at_[hidden]&gt; To: Open MPI Users &lt;users_at_[hidden]&gt; Subject: Re:
</span><br>
<span class="quotelev2">&gt;&gt; [OMPI users] Connection timed out on TCP and notify question Message-ID:
</span><br>
<span class="quotelev2">&gt;&gt; &lt;11462B85-83CA-4B3D-86E5-EDDD9BC872A6_at_[hidden]&gt; Content-Type:
</span><br>
<span class="quotelev2">&gt;&gt; text/plain; charset=us-ascii Sounds like either a routing problem or a
</span><br>
<span class="quotelev2">&gt;&gt; firewall. Are there multiple NICs on these nodes? Looking at the quoted
</span><br>
<span class="quotelev2">&gt;&gt; NIC in your error message, is that the correct subnet we should be
</span><br>
<span class="quotelev2">&gt;&gt; using? Have you checked to ensure no firewalls exist on that subnet
</span><br>
<span class="quotelev2">&gt;&gt; between the nodes? On Apr 24, 2014, at 8:41 AM, Vince Grimes
</span><br>
<span class="quotelev2">&gt;&gt; &lt;tom.grimes_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Dear all:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 	In the ongoing investigation into why a particular in-house program is not working in parallel over multiple nodes using OpenMPI, running with &quot;--mca btl self,sm,tcp&quot; I have been running into the following error:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [compute-6-15.local][[8185,1],0 [btl_tcp_endpoint.c:653:mca_btl_tcp_endpoint_complete_connect] connect() to 10.7.36.247 failed: Connection timed out (110)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I thought at first it was due to running out of file handles (sockets are considered files), but I have amended limits.d to allow 102400 files (up from the default of 1024), which should be more than enough.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 	What is going on? Trying to connect to 4/20 nodes gave the error above.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 	My second question involves the notify system for btl openib. What does the syslog notifier require in order to work? I want to see if the errors running the same program with openib are due to dropped IB connections.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; T. Vince Grimes, Ph.D.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; CCC System Administrator
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Texas Tech University
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Dept. of Chemistry and Biochemistry (10A)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Box 41061
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Lubbock, TX 79409-1061
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (806) 834-0813 (voice);     (806) 742-1289 (fax)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24266.php">Ralph Castain: "Re: [OMPI users] Deadlocks and warnings from libevent when using	MPI_THREAD_MULTIPLE"</a>
<li><strong>Previous message:</strong> <a href="24264.php">Jeffrey A Cummings: "Re: [OMPI users] Deadlocks and warnings from libevent when using	MPI_THREAD_MULTIPLE"</a>
<li><strong>Maybe in reply to:</strong> <a href="24258.php">Vince Grimes: "[OMPI users] Connection timed out on TCP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24267.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Connection timed out on TCP"</a>
<li><strong>Reply:</strong> <a href="24267.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Connection timed out on TCP"</a>
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
