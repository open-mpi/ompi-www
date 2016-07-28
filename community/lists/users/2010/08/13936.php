<?
$subject_val = "Re: [OMPI users] MPI_Bcast issue";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  9 08:54:46 2010" -->
<!-- isoreceived="20100809125446" -->
<!-- sent="Mon, 9 Aug 2010 08:54:28 -0400" -->
<!-- isosent="20100809125428" -->
<!-- name="Richard Treumann" -->
<!-- email="treumann_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Bcast issue" -->
<!-- id="OFF854D5CF.7C53854C-ON8525777A.00467DAD-8525777A.0046E94E_at_us.ibm.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="914097.96007.qm_at_web50808.mail.re2.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Bcast issue<br>
<strong>From:</strong> Richard Treumann (<em>treumann_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-09 08:54:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13937.php">Richard Treumann: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>Previous message:</strong> <a href="13935.php">Edgar Gabriel: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>In reply to:</strong> <a href="13922.php">Randolph Pullen: "[OMPI users] MPI_Bcast issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13994.php">Michael E. Thomadakis: "[OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question"</a>
<li><strong>Reply:</strong> <a href="13994.php">Michael E. Thomadakis: "[OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I did not take the time to try to fully understand your approach so this 
<br>
may sound like a dumb question; 
<br>

<br>
Do you have an MPI_Bcast ROOT process in every MPI_COMM_WORLD and does 
<br>
every non-ROOT MPI_Bcast call correctly identify the rank of ROOT in its 
<br>
MPI_COMM_WORLD ? 
<br>

<br>
An MPI_Bcast call when there is not root task in the communicator or when 
<br>
the root task rank is given incorrectly will hang.
<br>

<br>

<br>
Dick Treumann  -  MPI Team 
<br>
IBM Systems &amp; Technology Group
<br>
Dept X2ZA / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
<br>
Tele (845) 433-7846         Fax (845) 433-8363
<br>

<br>

<br>

<br>

<br>
From:
<br>
Randolph Pullen &lt;randolph_pullen_at_[hidden]&gt;
<br>
To:
<br>
users_at_[hidden]
<br>
Date:
<br>
08/07/2010 01:23 AM
<br>
Subject:
<br>
[OMPI users] MPI_Bcast issue
<br>
Sent by:
<br>
users-bounces_at_[hidden]
<br>

<br>

<br>

<br>

<br>
I seem to be having a problem with MPI_Bcast.
<br>
My massive I/O intensive data movement program must broadcast from n to n 
<br>
nodes. My problem starts because I require 2 processes per node, a sender 
<br>
and a receiver and I have implemented these using MPI processes rather 
<br>
than tackle the complexities of threads on MPI.
<br>

<br>
Consequently, broadcast and calls like alltoall are not completely 
<br>
helpful.  The dataset is huge and each node must end up with a complete 
<br>
copy built by the large number of contributing broadcasts from the sending 
<br>
nodes.  Network efficiency and run time are paramount.
<br>

<br>
As I don&#226;&#128;&#153;t want to needlessly broadcast all this data to the sending nodes 
<br>
and I have a perfectly good MPI program that distributes globally from a 
<br>
single node (1 to N), I took the unusual decision to start N copies of 
<br>
this program by spawning the MPI system from the PVM system in an effort 
<br>
to get my N to N concurrent transfers.
<br>

<br>
It seems that the broadcasts running on concurrent MPI environments 
<br>
collide and cause all but the first process to hang waiting for their 
<br>
broadcasts.  This theory seems to be confirmed by introducing a sleep of 
<br>
n-1 seconds before the first MPI_Bcast  call on each node, which results 
<br>
in the code working perfectly.  (total run time 55 seconds, 3 nodes, 
<br>
standard TCP stack)
<br>

<br>
My guess is that unlike PVM, OpenMPI implements broadcasts with broadcasts 
<br>
rather than multicasts.  Can someone confirm this?  Is this a bug?
<br>

<br>
Is there any multicast or N to N broadcast where sender processes can 
<br>
avoid participating when they don&#226;&#128;&#153;t need to?
<br>

<br>
Thanks in advance
<br>
Randolph
<br>

<br>

<br>
&nbsp;_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>

<br>

<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13936/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13937.php">Richard Treumann: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>Previous message:</strong> <a href="13935.php">Edgar Gabriel: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>In reply to:</strong> <a href="13922.php">Randolph Pullen: "[OMPI users] MPI_Bcast issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13994.php">Michael E. Thomadakis: "[OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question"</a>
<li><strong>Reply:</strong> <a href="13994.php">Michael E. Thomadakis: "[OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question"</a>
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
