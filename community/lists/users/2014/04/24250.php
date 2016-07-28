<?
$subject_val = "[OMPI users] Connection timed out on TCP and notify question";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 24 11:41:14 2014" -->
<!-- isoreceived="20140424154114" -->
<!-- sent="Thu, 24 Apr 2014 10:41:13 -0500" -->
<!-- isosent="20140424154113" -->
<!-- name="Vince Grimes" -->
<!-- email="tom.grimes_at_[hidden]" -->
<!-- subject="[OMPI users] Connection timed out on TCP and notify question" -->
<!-- id="53593099.3030305_at_ttu.edu" -->
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
<strong>Subject:</strong> [OMPI users] Connection timed out on TCP and notify question<br>
<strong>From:</strong> Vince Grimes (<em>tom.grimes_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-24 11:41:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24251.php">Nathan Hjelm: "Re: [OMPI users] MPI one-sided communication questions"</a>
<li><strong>Previous message:</strong> <a href="24249.php">Ross Boylan: "Re: [OMPI users] mpi.isend still not working (was trying to use personal copy of 1.7.4--solved)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24255.php">Ralph Castain: "Re: [OMPI users] Connection timed out on TCP and notify question"</a>
<li><strong>Reply:</strong> <a href="24255.php">Ralph Castain: "Re: [OMPI users] Connection timed out on TCP and notify question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In the ongoing investigation into why a particular in-house program is 
<br>
not working in parallel over multiple nodes using OpenMPI, running with 
<br>
&quot;--mca btl self,sm,tcp&quot; I have been running into the following error:
<br>
<p>[compute-6-15.local][[8185,1],0 
<br>
[btl_tcp_endpoint.c:653:mca_btl_tcp_endpoint_complete_connect] connect() 
<br>
to 10.7.36.247 failed: Connection timed out (110)
<br>
<p>I thought at first it was due to running out of file handles (sockets 
<br>
are considered files), but I have amended limits.d to allow 102400 files 
<br>
(up from the default of 1024), which should be more than enough.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;What is going on? Trying to connect to 4/20 nodes gave the error above.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;My second question involves the notify system for btl openib. What does 
<br>
the syslog notifier require in order to work? I want to see if the 
<br>
errors running the same program with openib are due to dropped IB 
<br>
connections.
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
<li><strong>Next message:</strong> <a href="24251.php">Nathan Hjelm: "Re: [OMPI users] MPI one-sided communication questions"</a>
<li><strong>Previous message:</strong> <a href="24249.php">Ross Boylan: "Re: [OMPI users] mpi.isend still not working (was trying to use personal copy of 1.7.4--solved)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24255.php">Ralph Castain: "Re: [OMPI users] Connection timed out on TCP and notify question"</a>
<li><strong>Reply:</strong> <a href="24255.php">Ralph Castain: "Re: [OMPI users] Connection timed out on TCP and notify question"</a>
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
