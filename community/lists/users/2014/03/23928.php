<?
$subject_val = "[OMPI users] Call stack upon MPI routine error";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 21 15:50:39 2014" -->
<!-- isoreceived="20140321195039" -->
<!-- sent="Fri, 21 Mar 2014 14:50:38 -0500" -->
<!-- isosent="20140321195038" -->
<!-- name="Vince Grimes" -->
<!-- email="tom.grimes_at_[hidden]" -->
<!-- subject="[OMPI users] Call stack upon MPI routine error" -->
<!-- id="532C980E.3060608_at_ttu.edu" -->
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
<strong>Subject:</strong> [OMPI users] Call stack upon MPI routine error<br>
<strong>From:</strong> Vince Grimes (<em>tom.grimes_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-21 15:50:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23929.php">Saliya Ekanayake: "Re: [OMPI users] OpenMPI + Hadoop"</a>
<li><strong>Previous message:</strong> <a href="23927.php">Madison Stemm: "Re: [OMPI users] Segmentation Fault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23931.php">Joshua Ladd: "Re: [OMPI users] Call stack upon MPI routine error"</a>
<li><strong>Reply:</strong> <a href="23931.php">Joshua Ladd: "Re: [OMPI users] Call stack upon MPI routine error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OpenMPI folks:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I have mentioned before a problem with an in-house code (ScalIT) that 
<br>
generates the error message
<br>
<p>[[31552,1],84][btl_openib_component.c:3492:handle_wc] from 
<br>
compute-4-5.local to: compute-4-13 error polling LP CQ with status LOCAL 
<br>
QP OPERATION ERROR status number 2 for wr_id 246f300 opcode 128  vendor 
<br>
error 107 qp_idx 0
<br>
<p>at a specific, reproducible point. It was suggested that the error could 
<br>
be due to memory problems, such as the amount of registered memory. I 
<br>
have already corrected the amount of registered memory per the URLs that 
<br>
were given to me. My question today is two-fold:
<br>
<p>First, is it possible that ScalIT uses so much memory that there is no 
<br>
memory to register for IB communications? ScalIT is very 
<br>
memory-intensive and has to run distributed just to get a large matrix 
<br>
in memory (split between nodes).
<br>
<p>Second, is there a way to trap that error so I can see the call stack, 
<br>
showing the MPI function called and exactly where in the code the error 
<br>
was generated?
<br>
<p><pre>
-- 
T. Vince Grimes, Ph.D.
CCC System Administrator
Texas Tech University
Dept. of Chemistry and Biochemistry (10A)
Box 41061
Lubbock, TX 79409-1061
(806) 834-0813 (voice);     (806) 742-1289 (fax)
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23929.php">Saliya Ekanayake: "Re: [OMPI users] OpenMPI + Hadoop"</a>
<li><strong>Previous message:</strong> <a href="23927.php">Madison Stemm: "Re: [OMPI users] Segmentation Fault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23931.php">Joshua Ladd: "Re: [OMPI users] Call stack upon MPI routine error"</a>
<li><strong>Reply:</strong> <a href="23931.php">Joshua Ladd: "Re: [OMPI users] Call stack upon MPI routine error"</a>
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
