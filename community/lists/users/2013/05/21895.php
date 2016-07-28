<?
$subject_val = "Re: [OMPI users] How to Read the Rank from the MPI_TASK";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 10 16:55:36 2013" -->
<!-- isoreceived="20130510205536" -->
<!-- sent="Fri, 10 May 2013 20:55:32 +0000" -->
<!-- isosent="20130510205532" -->
<!-- name="deepak mehta" -->
<!-- email="godeepakm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to Read the Rank from the MPI_TASK" -->
<!-- id="BLU156-W1AE5BA1D25CC312E09BD4B4A50_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="BLU156-W34B827173F9FA3B7BCF20EB4A50_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to Read the Rank from the MPI_TASK<br>
<strong>From:</strong> deepak mehta (<em>godeepakm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-10 16:55:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21896.php">Ralph Castain: "Re: [OMPI users] How to Read the Rank from the MPI_TASK"</a>
<li><strong>Previous message:</strong> <a href="21894.php">Ralph Castain: "Re: [OMPI users] How to Read the Rank from the MPI_TASK"</a>
<li><strong>In reply to:</strong> <a href="21893.php">deepak mehta: "[OMPI users] How to Read the Rank from the MPI_TASK"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21896.php">Ralph Castain: "Re: [OMPI users] How to Read the Rank from the MPI_TASK"</a>
<li><strong>Reply:</strong> <a href="21896.php">Ralph Castain: "Re: [OMPI users] How to Read the Rank from the MPI_TASK"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Ralph,Your suggestion did the trick.
<br>
<p><span class="quotelev2">&gt;&gt; I don't remember back to 1.4.3, but I think it was true even that long ago - we provide an environmental variable OMPI_COMM_WORLD_RANK that holds the rank of the process. Out of curiosity if I want to learn more about this topic in detail what would be a good place to start.
</span><br>
Thank You for your help.Regards,Deepak
<br>
<p>From: godeepakm_at_[hidden]
<br>
To: users_at_[hidden]
<br>
Subject: How to Read the Rank from the MPI_TASK
<br>
Date: Fri, 10 May 2013 20:39:34 +0000
<br>
<p><p>The MPI Command that I am executing is as followsmpirun -np 3 helloWorld.sh
<br>
What I want to know how what parameter do I need to pass from the mpirun command line so that I can read the rank for each task within my helloWorld Shell Script.
<br>
Please excuse me if this is a duplicate entry. I have searched through all the forums and did not get the answer to my question.Thanks in advance for all your help.Regards,Deepak 		 	   		   		 	   		  
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21895/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21896.php">Ralph Castain: "Re: [OMPI users] How to Read the Rank from the MPI_TASK"</a>
<li><strong>Previous message:</strong> <a href="21894.php">Ralph Castain: "Re: [OMPI users] How to Read the Rank from the MPI_TASK"</a>
<li><strong>In reply to:</strong> <a href="21893.php">deepak mehta: "[OMPI users] How to Read the Rank from the MPI_TASK"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21896.php">Ralph Castain: "Re: [OMPI users] How to Read the Rank from the MPI_TASK"</a>
<li><strong>Reply:</strong> <a href="21896.php">Ralph Castain: "Re: [OMPI users] How to Read the Rank from the MPI_TASK"</a>
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
