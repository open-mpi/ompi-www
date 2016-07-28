<?
$subject_val = "Re: [OMPI users] Connection timed out on TCP and notify question";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 24 22:49:30 2014" -->
<!-- isoreceived="20140425024930" -->
<!-- sent="Thu, 24 Apr 2014 19:49:26 -0700" -->
<!-- isosent="20140425024926" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Connection timed out on TCP and notify question" -->
<!-- id="11462B85-83CA-4B3D-86E5-EDDD9BC872A6_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="53593099.3030305_at_ttu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Connection timed out on TCP and notify question<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-24 22:49:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24256.php">Andrus, Brian Contractor: "[OMPI users] OpenMPI 1.8 and PGI compilers"</a>
<li><strong>Previous message:</strong> <a href="24254.php">Jamil Appa: "[OMPI users] OMPI 1.8.1 and hcoll support"</a>
<li><strong>In reply to:</strong> <a href="24250.php">Vince Grimes: "[OMPI users] Connection timed out on TCP and notify question"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sounds like either a routing problem or a firewall. Are there multiple NICs on these nodes? Looking at the quoted NIC in your error message, is that the correct subnet we should be using?
<br>
<p>Have you checked to ensure no firewalls exist on that subnet between the nodes?
<br>
<p><p>On Apr 24, 2014, at 8:41 AM, Vince Grimes &lt;tom.grimes_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear all:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	In the ongoing investigation into why a particular in-house program is not working in parallel over multiple nodes using OpenMPI, running with &quot;--mca btl self,sm,tcp&quot; I have been running into the following error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [compute-6-15.local][[8185,1],0 [btl_tcp_endpoint.c:653:mca_btl_tcp_endpoint_complete_connect] connect() to 10.7.36.247 failed: Connection timed out (110)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I thought at first it was due to running out of file handles (sockets are considered files), but I have amended limits.d to allow 102400 files (up from the default of 1024), which should be more than enough.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	What is going on? Trying to connect to 4/20 nodes gave the error above.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	My second question involves the notify system for btl openib. What does the syslog notifier require in order to work? I want to see if the errors running the same program with openib are due to dropped IB connections.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24256.php">Andrus, Brian Contractor: "[OMPI users] OpenMPI 1.8 and PGI compilers"</a>
<li><strong>Previous message:</strong> <a href="24254.php">Jamil Appa: "[OMPI users] OMPI 1.8.1 and hcoll support"</a>
<li><strong>In reply to:</strong> <a href="24250.php">Vince Grimes: "[OMPI users] Connection timed out on TCP and notify question"</a>
<!-- nextthread="start" -->
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
