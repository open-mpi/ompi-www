<?
$subject_val = "[OMPI users] How to Read the Rank from the MPI_TASK";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 10 16:39:39 2013" -->
<!-- isoreceived="20130510203939" -->
<!-- sent="Fri, 10 May 2013 20:39:34 +0000" -->
<!-- isosent="20130510203934" -->
<!-- name="deepak mehta" -->
<!-- email="godeepakm_at_[hidden]" -->
<!-- subject="[OMPI users] How to Read the Rank from the MPI_TASK" -->
<!-- id="BLU156-W34B827173F9FA3B7BCF20EB4A50_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] How to Read the Rank from the MPI_TASK<br>
<strong>From:</strong> deepak mehta (<em>godeepakm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-10 16:39:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21894.php">Ralph Castain: "Re: [OMPI users] How to Read the Rank from the MPI_TASK"</a>
<li><strong>Previous message:</strong> <a href="21892.php">Matteo Parsani: "Re: [OMPI users] /usr/bin/ld: skipping incompatible ......"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21894.php">Ralph Castain: "Re: [OMPI users] How to Read the Rank from the MPI_TASK"</a>
<li><strong>Reply:</strong> <a href="21894.php">Ralph Castain: "Re: [OMPI users] How to Read the Rank from the MPI_TASK"</a>
<li><strong>Reply:</strong> <a href="21895.php">deepak mehta: "Re: [OMPI users] How to Read the Rank from the MPI_TASK"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello All,I am new user to this mailing list and am trying to get familiar with mpi.I am using open mpi version 1.4.3I have a simple shell script that I have writtenThe Shell Script that I have is as followshelloWorld.sh&lt;code&gt;#!/bin/bashecho &quot; Hello World from Rank $rank&quot;&lt;code&gt;
<br>
The MPI Command that I am executing is as followsmpirun -np 3 helloWorld.sh
<br>
What I want to know how what parameter do I need to pass from the mpirun command line so that I can read the rank for each task within my helloWorld Shell Script.
<br>
Please excuse me if this is a duplicate entry. I have searched through all the forums and did not get the answer to my question.Thanks in advance for all your help.Regards,Deepak 		 	   		  
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21893/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21894.php">Ralph Castain: "Re: [OMPI users] How to Read the Rank from the MPI_TASK"</a>
<li><strong>Previous message:</strong> <a href="21892.php">Matteo Parsani: "Re: [OMPI users] /usr/bin/ld: skipping incompatible ......"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21894.php">Ralph Castain: "Re: [OMPI users] How to Read the Rank from the MPI_TASK"</a>
<li><strong>Reply:</strong> <a href="21894.php">Ralph Castain: "Re: [OMPI users] How to Read the Rank from the MPI_TASK"</a>
<li><strong>Reply:</strong> <a href="21895.php">deepak mehta: "Re: [OMPI users] How to Read the Rank from the MPI_TASK"</a>
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
