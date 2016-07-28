<?
$subject_val = "Re: [OMPI users] Call stack upon MPI routine error";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 21 16:16:59 2014" -->
<!-- isoreceived="20140321201659" -->
<!-- sent="Fri, 21 Mar 2014 20:16:31 +0000" -->
<!-- isosent="20140321201631" -->
<!-- name="Joshua Ladd" -->
<!-- email="joshual_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Call stack upon MPI routine error" -->
<!-- id="8EDEBDDE2C39D447A738659597BBB63A3ED121AB_at_MTIDAG01.mtl.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="532C980E.3060608_at_ttu.edu" -->
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
<strong>From:</strong> Joshua Ladd (<em>joshual_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-21 16:16:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23932.php">Jeff Squyres (jsquyres): "Re: [OMPI users] testsome returns negative indices [diagnosis]"</a>
<li><strong>Previous message:</strong> <a href="23930.php">Ross Boylan: "Re: [OMPI users] testsome returns negative indices [diagnosis]"</a>
<li><strong>In reply to:</strong> <a href="23928.php">Vince Grimes: "[OMPI users] Call stack upon MPI routine error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, Vince
<br>
<p>Couple of ideas off the top of my head:
<br>
<p>1. Try disabling eager RDMA. Eager RDMA can consume significant resources: &quot;-mca btl_openib_use_eager_rdma 0&quot;
<br>
<p>2. Try using the TCP BTL - is the error still present?
<br>
<p>3. Try the poor man's debugger -  print the pid and hostname of the process when and then put a while(1) at btl_openib_component.c:3492 so that the process will hang when it hits this error. Hop over to the node and attach to the hung process. You can move up the call stack from here. 
<br>
<p>Best,
<br>
<p>Josh
<br>
<p>-----Original Message-----
<br>
From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Vince Grimes
<br>
Sent: Friday, March 21, 2014 3:52 PM
<br>
To: users_at_[hidden]
<br>
Subject: [OMPI users] Call stack upon MPI routine error
<br>
<p>OpenMPI folks:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I have mentioned before a problem with an in-house code (ScalIT) that generates the error message
<br>
<p>[[31552,1],84][btl_openib_component.c:3492:handle_wc] from compute-4-5.local to: compute-4-13 error polling LP CQ with status LOCAL QP OPERATION ERROR status number 2 for wr_id 246f300 opcode 128  vendor error 107 qp_idx 0
<br>
<p>at a specific, reproducible point. It was suggested that the error could be due to memory problems, such as the amount of registered memory. I have already corrected the amount of registered memory per the URLs that were given to me. My question today is two-fold:
<br>
<p>First, is it possible that ScalIT uses so much memory that there is no memory to register for IB communications? ScalIT is very memory-intensive and has to run distributed just to get a large matrix in memory (split between nodes).
<br>
<p>Second, is there a way to trap that error so I can see the call stack, showing the MPI function called and exactly where in the code the error was generated?
<br>
<p><pre>
--
T. Vince Grimes, Ph.D.
CCC System Administrator
Texas Tech University
Dept. of Chemistry and Biochemistry (10A) Box 41061 Lubbock, TX 79409-1061
(806) 834-0813 (voice);     (806) 742-1289 (fax)
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23932.php">Jeff Squyres (jsquyres): "Re: [OMPI users] testsome returns negative indices [diagnosis]"</a>
<li><strong>Previous message:</strong> <a href="23930.php">Ross Boylan: "Re: [OMPI users] testsome returns negative indices [diagnosis]"</a>
<li><strong>In reply to:</strong> <a href="23928.php">Vince Grimes: "[OMPI users] Call stack upon MPI routine error"</a>
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
