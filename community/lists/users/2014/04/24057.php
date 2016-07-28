<?
$subject_val = "[OMPI users] Call stack upon MPI routine error";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  4 14:26:12 2014" -->
<!-- isoreceived="20140404182612" -->
<!-- sent="Fri, 4 Apr 2014 13:26:10 -0500" -->
<!-- isosent="20140404182610" -->
<!-- name="Vince Grimes" -->
<!-- email="tom.grimes_at_[hidden]" -->
<!-- subject="[OMPI users] Call stack upon MPI routine error" -->
<!-- id="533EF942.5000107_at_ttu.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="mailman.22.1395504004.32602.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI users] Call stack upon MPI routine error<br>
<strong>From:</strong> Vince Grimes (<em>tom.grimes_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-04 14:26:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24058.php">Ralph Castain: "Re: [OMPI users] Call stack upon MPI routine error"</a>
<li><strong>Previous message:</strong> <a href="24056.php">Ralph Castain: "Re: [OMPI users] openmpi query"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24058.php">Ralph Castain: "Re: [OMPI users] Call stack upon MPI routine error"</a>
<li><strong>Reply:</strong> <a href="24058.php">Ralph Castain: "Re: [OMPI users] Call stack upon MPI routine error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The subject heading is a little misleading because this is in response 
<br>
to part of that original contact. I tried the first two suggestions 
<br>
below (disabling eager DMA and using tcp btl), but to no avail. In all 
<br>
cases I am running over 20 12-core nodes through SGE. In the first case, 
<br>
I get the errors:
<br>
<p>***
<br>
[[30430,1],234][btl_openib_component.c:3492:handle_wc] from 
<br>
compute-1-18.local to: compute-6-10 error polling HP CQ with status WORK 
<br>
REQUEST FLUSHED ERROR status number 5 for wr_id 2c41e80 opcode 128 
<br>
vendor error 244 qp_idx 0
<br>
--------------------------------------------------------------------------
<br>
WARNING: A process refused to die!
<br>
<p>Host: compute-4-13.local
<br>
PID:  22356
<br>
<p>This process may still be running and/or consuming resources.
<br>
<p>--------------------------------------------------------------------------
<br>
[compute-6-1.local:22658] 2 more processes have sent help message 
<br>
help-odls-default.txt / odls-default:could-not-kill
<br>
[compute-6-1.local:22658] Set MCA parameter &quot;orte_base_help_aggregate&quot; 
<br>
to 0 to see all help / error messages
<br>
--------------------------------------------------------------------------
<br>
***
<br>
<p>The first error is at the same place as before 
<br>
([btl_openib_component.c:3492:handle_wc]) and the message is only 
<br>
slightly different (LP -&gt; HP).
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;For the second suggestion, using tcp btl, I got a whole load of these:
<br>
<p>***
<br>
[compute-3-1.local][[20917,1],74][btl_tcp_endpoint.c:653:mca_btl_tcp_endpoint_complete_connect] 
<br>
connect() to 10.7.36.244 failed: Connection timed out (110)
<br>
***
<br>
<p>there are 1826 &quot;Connection timed out&quot; errors at an earlier spot in the 
<br>
code than in the case above. I checked iptables and there is no reason 
<br>
the connection would have been refused. Is it possible I'm out of file 
<br>
descriptors (because sockets count as files)? `ulimit -n` yields 1024.
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
<p>On 03/22/2014 11:00 AM, users-request_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 1
</span><br>
<span class="quotelev1">&gt; Date: Fri, 21 Mar 2014 20:16:31 +0000
</span><br>
<span class="quotelev1">&gt; From: Joshua Ladd &lt;joshual_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Call stack upon MPI routine error
</span><br>
<span class="quotelev1">&gt; Message-ID:
</span><br>
<span class="quotelev1">&gt; 	&lt;8EDEBDDE2C39D447A738659597BBB63A3ED121AB_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi, Vince
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Couple of ideas off the top of my head:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Try disabling eager RDMA. Eager RDMA can consume significant resources: &quot;-mca btl_openib_use_eager_rdma 0&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. Try using the TCP BTL - is the error still present?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. Try the poor man's debugger -  print the pid and hostname of the process when and then put a while(1) at btl_openib_component.c:3492 so that the process will hang when it hits this error. Hop over to the node and attach to the hung process. You can move up the call stack from here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Vince Grimes
</span><br>
<span class="quotelev1">&gt; Sent: Friday, March 21, 2014 3:52 PM
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] Call stack upon MPI routine error
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OpenMPI folks:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	I have mentioned before a problem with an in-house code (ScalIT) that generates the error message
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [[31552,1],84][btl_openib_component.c:3492:handle_wc] from compute-4-5.local to: compute-4-13 error polling LP CQ with status LOCAL QP OPERATION ERROR status number 2 for wr_id 246f300 opcode 128  vendor error 107 qp_idx 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; at a specific, reproducible point. It was suggested that the error could be due to memory problems, such as the amount of registered memory. I have already corrected the amount of registered memory per the URLs that were given to me. My question today is two-fold:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; First, is it possible that ScalIT uses so much memory that there is no memory to register for IB communications? ScalIT is very memory-intensive and has to run distributed just to get a large matrix in memory (split between nodes).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Second, is there a way to trap that error so I can see the call stack, showing the MPI function called and exactly where in the code the error was generated?
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
<span class="quotelev1">&gt; Dept. of Chemistry and Biochemistry (10A) Box 41061 Lubbock, TX 79409-1061
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24058.php">Ralph Castain: "Re: [OMPI users] Call stack upon MPI routine error"</a>
<li><strong>Previous message:</strong> <a href="24056.php">Ralph Castain: "Re: [OMPI users] openmpi query"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24058.php">Ralph Castain: "Re: [OMPI users] Call stack upon MPI routine error"</a>
<li><strong>Reply:</strong> <a href="24058.php">Ralph Castain: "Re: [OMPI users] Call stack upon MPI routine error"</a>
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
