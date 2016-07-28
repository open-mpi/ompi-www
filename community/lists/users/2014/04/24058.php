<?
$subject_val = "Re: [OMPI users] Call stack upon MPI routine error";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  4 15:53:54 2014" -->
<!-- isoreceived="20140404195354" -->
<!-- sent="Fri, 4 Apr 2014 12:53:41 -0700" -->
<!-- isosent="20140404195341" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Call stack upon MPI routine error" -->
<!-- id="FC5BE023-71D2-4E3A-B77F-163D4CB54AE2_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="533EF942.5000107_at_ttu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Call stack upon MPI routine error<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-04 15:53:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24059.php">Ross Boylan: "[OMPI users] Waitall never returns"</a>
<li><strong>Previous message:</strong> <a href="24057.php">Vince Grimes: "[OMPI users] Call stack upon MPI routine error"</a>
<li><strong>In reply to:</strong> <a href="24057.php">Vince Grimes: "[OMPI users] Call stack upon MPI routine error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Running out of file descriptors sounds likely here - if you have 20 procs/node, and fully connect, each node will see 20*220 connections (you don't use tcp between procs on the same node), with each connection requiring a file descriptor.
<br>
<p><p>On Apr 4, 2014, at 11:26 AM, Vince Grimes &lt;tom.grimes_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear all:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	The subject heading is a little misleading because this is in response to part of that original contact. I tried the first two suggestions below (disabling eager DMA and using tcp btl), but to no avail. In all cases I am running over 20 12-core nodes through SGE. In the first case, I get the errors:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ***
</span><br>
<span class="quotelev1">&gt; [[30430,1],234][btl_openib_component.c:3492:handle_wc] from compute-1-18.local to: compute-6-10 error polling HP CQ with status WORK REQUEST FLUSHED ERROR status number 5 for wr_id 2c41e80 opcode 128 vendor error 244 qp_idx 0
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WARNING: A process refused to die!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Host: compute-4-13.local
</span><br>
<span class="quotelev1">&gt; PID:  22356
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This process may still be running and/or consuming resources.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [compute-6-1.local:22658] 2 more processes have sent help message help-odls-default.txt / odls-default:could-not-kill
</span><br>
<span class="quotelev1">&gt; [compute-6-1.local:22658] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ***
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The first error is at the same place as before ([btl_openib_component.c:3492:handle_wc]) and the message is only slightly different (LP -&gt; HP).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	For the second suggestion, using tcp btl, I got a whole load of these:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ***
</span><br>
<span class="quotelev1">&gt; [compute-3-1.local][[20917,1],74][btl_tcp_endpoint.c:653:mca_btl_tcp_endpoint_complete_connect] connect() to 10.7.36.244 failed: Connection timed out (110)
</span><br>
<span class="quotelev1">&gt; ***
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; there are 1826 &quot;Connection timed out&quot; errors at an earlier spot in the code than in the case above. I checked iptables and there is no reason the connection would have been refused. Is it possible I'm out of file descriptors (because sockets count as files)? `ulimit -n` yields 1024.
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
<span class="quotelev1">&gt; On 03/22/2014 11:00 AM, users-request_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Message: 1
</span><br>
<span class="quotelev2">&gt;&gt; Date: Fri, 21 Mar 2014 20:16:31 +0000
</span><br>
<span class="quotelev2">&gt;&gt; From: Joshua Ladd &lt;joshual_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Call stack upon MPI routine error
</span><br>
<span class="quotelev2">&gt;&gt; Message-ID:
</span><br>
<span class="quotelev2">&gt;&gt; 	&lt;8EDEBDDE2C39D447A738659597BBB63A3ED121AB_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi, Vince
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Couple of ideas off the top of my head:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. Try disabling eager RDMA. Eager RDMA can consume significant resources: &quot;-mca btl_openib_use_eager_rdma 0&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2. Try using the TCP BTL - is the error still present?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 3. Try the poor man's debugger -  print the pid and hostname of the process when and then put a while(1) at btl_openib_component.c:3492 so that the process will hang when it hits this error. Hop over to the node and attach to the hung process. You can move up the call stack from here.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Best,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Josh
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Vince Grimes
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Friday, March 21, 2014 3:52 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [OMPI users] Call stack upon MPI routine error
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI folks:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 	I have mentioned before a problem with an in-house code (ScalIT) that generates the error message
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [[31552,1],84][btl_openib_component.c:3492:handle_wc] from compute-4-5.local to: compute-4-13 error polling LP CQ with status LOCAL QP OPERATION ERROR status number 2 for wr_id 246f300 opcode 128  vendor error 107 qp_idx 0
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; at a specific, reproducible point. It was suggested that the error could be due to memory problems, such as the amount of registered memory. I have already corrected the amount of registered memory per the URLs that were given to me. My question today is two-fold:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; First, is it possible that ScalIT uses so much memory that there is no memory to register for IB communications? ScalIT is very memory-intensive and has to run distributed just to get a large matrix in memory (split between nodes).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Second, is there a way to trap that error so I can see the call stack, showing the MPI function called and exactly where in the code the error was generated?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; T. Vince Grimes, Ph.D.
</span><br>
<span class="quotelev2">&gt;&gt; CCC System Administrator
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Texas Tech University
</span><br>
<span class="quotelev2">&gt;&gt; Dept. of Chemistry and Biochemistry (10A) Box 41061 Lubbock, TX 79409-1061
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; (806) 834-0813 (voice);     (806) 742-1289 (fax)
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="24059.php">Ross Boylan: "[OMPI users] Waitall never returns"</a>
<li><strong>Previous message:</strong> <a href="24057.php">Vince Grimes: "[OMPI users] Call stack upon MPI routine error"</a>
<li><strong>In reply to:</strong> <a href="24057.php">Vince Grimes: "[OMPI users] Call stack upon MPI routine error"</a>
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
