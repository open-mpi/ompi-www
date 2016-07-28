<?
$subject_val = "Re: [OMPI users] Connection timed out on TCP";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 29 16:28:31 2014" -->
<!-- isoreceived="20140429202831" -->
<!-- sent="Tue, 29 Apr 2014 15:28:30 -0500" -->
<!-- isosent="20140429202830" -->
<!-- name="Vince Grimes" -->
<!-- email="tom.grimes_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Connection timed out on TCP" -->
<!-- id="53600B6E.2070201_at_ttu.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="mailman.19.1398787203.9841.users_at_open-mpi.org" -->
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
<strong>Date:</strong> 2014-04-29 16:28:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24273.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Connection timed out on TCP"</a>
<li><strong>Previous message:</strong> <a href="24271.php">Dave Goodell (dgoodell): "Re: [OMPI users] OMPI 1.8.1 Deadlock in mpi_finalize with	mpi_init_thread"</a>
<li><strong>Maybe in reply to:</strong> <a href="24258.php">Vince Grimes: "[OMPI users] Connection timed out on TCP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24273.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Connection timed out on TCP"</a>
<li><strong>Reply:</strong> <a href="24273.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Connection timed out on TCP"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I realize it is no longer in the history of replies for this message, 
<br>
but the reason I am trying to use tcp instead of Infiniband is because:
<br>
<p>We are using an in-house program called ScalIT that performs operations 
<br>
on very large sparse distributed matrices.
<br>
ScalIT works on other clusters with comparable hardware and software, 
<br>
but not ours.
<br>
Other programs run just fine on our cluster using OpenMPI.
<br>
ScalIT runs to completion using OpenMPI *on a single 12-core node*.
<br>
<p>It was suggested to me by another list member that I try forcing usage 
<br>
of tcp instead of Infiniband, so that's what I've been trying, just to 
<br>
see if it will work. I guess the tcp code is expected to be more 
<br>
reliable? The mca parameters used to produce the current error are: 
<br>
&quot;--mca btl self,sm,tcp --mca btl_tcp_if_exclude lo,ib0&quot;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The previous Infiniband error message is:
<br>
<pre>
---
local QP operation err (QPN 7c1d43, WQE @ 00015005, CQN 7a009a, index 
307512)
   [ 0] 007c1d43
   [ 4] 00000000
   [ 8] 00000000
   [ c] 00000000
   [10] 026b2ed0
   [14] 00000000
   [18] 00015005
   [1c] ff100000
[[31552,1],84][btl_openib_component.c:3492:handle_wc] from 
compute-4-5.local to: compute-4-13 error polling LP CQ with status LOCAL 
QP OPERATION ERROR status number 2 for wr_id 246f300 opcode 128  vendor 
error 107 qp_idx 0
---
It was also suggested that I disable eager RDMA. Doing this (&quot;--mca 
btl_openib_use_eager_rdma 0&quot;) results in:
---
[[30430,1],234][btl_openib_component.c:3492:handle_wc] from 
compute-1-18.local to: compute-6-10 error polling HP CQ with status WORK 
REQUEST FLUSHED ERROR status number 5 for wr_id 2c41e80 opcode 128 
vendor error 244 qp_idx 0
---
All the Infiniband errors come in the same place with respect to the 
program output and reference the same OpenMPI code line. (It is 
notoriously difficult to trace through this program to be sure of the 
location in the code where the error occurs as ScalIT is written in 
appalling FORTRAN.)
	I had another problem with a completely different code, also in FORTRAN 
and also in the same research group, that scaLAPACK initialization when 
compiled with Intel Composer 13.1.3 and 11.1-080 segfaulted. Switching 
to to MVAPICH2 solved the problem, but I wonder if maybe a convention of 
some sort is being violated in ScalIT such that the semantics do not 
work the same way as expected. I'm kind of grasping at straws here, and 
any leads are appreciated.
T. Vince Grimes, Ph.D.
CCC System Administrator
Texas Tech University
Dept. of Chemistry and Biochemistry (10A)
Box 41061
Lubbock, TX 79409-1061
(806) 834-0813 (voice);     (806) 742-1289 (fax)
On 04/29/2014 11:00 AM, users-request_at_[hidden] wrote:
&gt; ------------------------------
&gt;
&gt; Message: 2
&gt; Date: Mon, 28 Apr 2014 22:07:08 +0000
&gt; From: &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt;
&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
&gt; Subject: Re: [OMPI users] Connection timed out on TCP
&gt; Message-ID: &lt;F8B864A2-8243-4EB3-B6A0-EB5E0940FC50_at_[hidden]&gt;
&gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;
&gt;
&gt; In principle, there's nothing wrong with using ib0 interfaces for TCP MPI communication, but it does raise the question of why you're using TCP when you have InfiniBand available...?
&gt;
&gt; Aside from that, can you send all the info listed here:
&gt;
&gt;     <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
&gt;
&gt;
&gt;
&gt; On Apr 28, 2014, at 11:08 AM, Vince Grimes &lt;tom.grimes_at_[hidden]&gt; wrote:
&gt;
&gt;&gt; After barring the ib0 interfaces, I still get &quot;Connection timed out&quot; errors even over the Ethernet interfaces.
&gt;&gt;
&gt;&gt; At the end of the output I not get the following messages in addition to the one above:
&gt;&gt;
&gt;&gt; --------------------------------------------------------------------------
&gt;&gt; Sorry!  You were supposed to get help about:
&gt;&gt;     client handshake fail
&gt;&gt; from the file:
&gt;&gt;     help-mpi-btl-tcp.txt
&gt;&gt; But I couldn't find that topic in the file.  Sorry!
&gt;&gt; --------------------------------------------------------------------------
&gt;&gt;
&gt;&gt; The Ethernet switches are managed. Is it likely there is something set wrong?
&gt;&gt;
&gt;&gt; T. Vince Grimes, Ph.D.
&gt;&gt; CCC System Administrator
&gt;&gt;
&gt;&gt; Texas Tech University
&gt;&gt; Dept. of Chemistry and Biochemistry (10A)
&gt;&gt; Box 41061
&gt;&gt; Lubbock, TX 79409-1061
&gt;&gt;
&gt;&gt; (806) 834-0813 (voice);     (806) 742-1289 (fax)
&gt;&gt;
&gt;&gt; On 04/25/2014 04:22 PM, users-request_at_[hidden] wrote:
&gt;&gt;
&gt;&gt;&gt; Message: 3
&gt;&gt;&gt; Date: Fri, 25 Apr 2014 14:56:47 -0500
&gt;&gt;&gt; From: Vince Grimes &lt;tom.grimes_at_[hidden]&gt;
&gt;&gt;&gt; To: &lt;users_at_[hidden]&gt;
&gt;&gt;&gt; Subject: [OMPI users] Connection timed out on TCP
&gt;&gt;&gt; Message-ID: &lt;535ABDFF.1020409_at_[hidden]&gt;
&gt;&gt;&gt; Content-Type: text/plain; charset=&quot;ISO-8859-1&quot;; format=flowed
&gt;&gt;&gt;
&gt;&gt;&gt; There is no firewall on this subnet as it is the internal Ethernet for
&gt;&gt;&gt; the cluster.
&gt;&gt;&gt;
&gt;&gt;&gt; However, I double-checked the offending IPs and discovered they are
&gt;&gt;&gt; Infiniband IPoIB addresses! I'm now trying to exclude the ib0 interface
&gt;&gt;&gt; as in <a href="https://www.open-mpi.org/faq/?category=tcp#tcp-selection">https://www.open-mpi.org/faq/?category=tcp#tcp-selection</a>
&gt;&gt;&gt;
&gt;&gt;&gt; T. Vince Grimes, Ph.D.
&gt;&gt;&gt; CCC System Administrator
&gt;&gt;&gt;
&gt;&gt;&gt; Texas Tech University
&gt;&gt;&gt; Dept. of Chemistry and Biochemistry (10A)
&gt;&gt;&gt; Box 41061
&gt;&gt;&gt; Lubbock, TX 79409-1061
&gt;&gt;&gt;
&gt;&gt;&gt; (806) 834-0813 (voice);     (806) 742-1289 (fax)
&gt;&gt;&gt;
&gt;&gt;&gt; On 04/25/2014 11:00 AM, users-request_at_[hidden] wrote:
&gt;&gt;&gt;&gt; Date: Thu, 24 Apr 2014 19:49:26 -0700 From: Ralph Castain
&gt;&gt;&gt;&gt; &lt;rhc_at_[hidden]&gt; To: Open MPI Users &lt;users_at_[hidden]&gt; Subject: Re:
&gt;&gt;&gt;&gt; [OMPI users] Connection timed out on TCP and notify question Message-ID:
&gt;&gt;&gt;&gt; &lt;11462B85-83CA-4B3D-86E5-EDDD9BC872A6_at_[hidden]&gt; Content-Type:
&gt;&gt;&gt;&gt; text/plain; charset=us-ascii Sounds like either a routing problem or a
&gt;&gt;&gt;&gt; firewall. Are there multiple NICs on these nodes? Looking at the quoted
&gt;&gt;&gt;&gt; NIC in your error message, is that the correct subnet we should be
&gt;&gt;&gt;&gt; using? Have you checked to ensure no firewalls exist on that subnet
&gt;&gt;&gt;&gt; between the nodes? On Apr 24, 2014, at 8:41 AM, Vince Grimes
&gt;&gt;&gt;&gt; &lt;tom.grimes_at_[hidden]&gt; wrote:
&gt;&gt;&gt;&gt;&gt;&gt; Dear all:
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; 	In the ongoing investigation into why a particular in-house program is not working in parallel over multiple nodes using OpenMPI, running with &quot;--mca btl self,sm,tcp&quot; I have been running into the following error:
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; [compute-6-15.local][[8185,1],0 [btl_tcp_endpoint.c:653:mca_btl_tcp_endpoint_complete_connect] connect() to 10.7.36.247 failed: Connection timed out (110)
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; I thought at first it was due to running out of file handles (sockets are considered files), but I have amended limits.d to allow 102400 files (up from the default of 1024), which should be more than enough.
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; 	What is going on? Trying to connect to 4/20 nodes gave the error above.
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; 	My second question involves the notify system for btl openib. What does the syslog notifier require in order to work? I want to see if the errors running the same program with openib are due to dropped IB connections.
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; --
&gt;&gt;&gt;&gt;&gt;&gt; T. Vince Grimes, Ph.D.
&gt;&gt;&gt;&gt;&gt;&gt; CCC System Administrator
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; Texas Tech University
&gt;&gt;&gt;&gt;&gt;&gt; Dept. of Chemistry and Biochemistry (10A)
&gt;&gt;&gt;&gt;&gt;&gt; Box 41061
&gt;&gt;&gt;&gt;&gt;&gt; Lubbock, TX 79409-1061
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; (806) 834-0813 (voice);     (806) 742-1289 (fax)
&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt; _______________________________________________
&gt;&gt; users mailing list
&gt;&gt; users_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
&gt;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24273.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Connection timed out on TCP"</a>
<li><strong>Previous message:</strong> <a href="24271.php">Dave Goodell (dgoodell): "Re: [OMPI users] OMPI 1.8.1 Deadlock in mpi_finalize with	mpi_init_thread"</a>
<li><strong>Maybe in reply to:</strong> <a href="24258.php">Vince Grimes: "[OMPI users] Connection timed out on TCP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24273.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Connection timed out on TCP"</a>
<li><strong>Reply:</strong> <a href="24273.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Connection timed out on TCP"</a>
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
