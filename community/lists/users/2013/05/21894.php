<?
$subject_val = "Re: [OMPI users] How to Read the Rank from the MPI_TASK";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 10 16:44:58 2013" -->
<!-- isoreceived="20130510204458" -->
<!-- sent="Fri, 10 May 2013 13:44:51 -0700" -->
<!-- isosent="20130510204451" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to Read the Rank from the MPI_TASK" -->
<!-- id="4648501E-4E82-45D3-8FF7-9E55506D41FF_at_open-mpi.org" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-10 16:44:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21895.php">deepak mehta: "Re: [OMPI users] How to Read the Rank from the MPI_TASK"</a>
<li><strong>Previous message:</strong> <a href="21893.php">deepak mehta: "[OMPI users] How to Read the Rank from the MPI_TASK"</a>
<li><strong>In reply to:</strong> <a href="21893.php">deepak mehta: "[OMPI users] How to Read the Rank from the MPI_TASK"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21895.php">deepak mehta: "Re: [OMPI users] How to Read the Rank from the MPI_TASK"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't remember back to 1.4.3, but I think it was true even that long ago - we provide an environmental variable OMPI_COMM_WORLD_RANK that holds the rank of the process
<br>
<p><p>On May 10, 2013, at 1:39 PM, deepak mehta &lt;godeepakm_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello All,
</span><br>
<span class="quotelev1">&gt; I am new user to this mailing list and am trying to get familiar with mpi.
</span><br>
<span class="quotelev1">&gt; I am using open mpi version 1.4.3
</span><br>
<span class="quotelev1">&gt; I have a simple shell script that I have written
</span><br>
<span class="quotelev1">&gt; The Shell Script that I have is as follows
</span><br>
<span class="quotelev1">&gt; helloWorld.sh
</span><br>
<span class="quotelev1">&gt; &lt;code&gt;
</span><br>
<span class="quotelev1">&gt; #!/bin/bash
</span><br>
<span class="quotelev1">&gt; echo &quot; Hello World from Rank $rank&quot;
</span><br>
<span class="quotelev1">&gt; &lt;code&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The MPI Command that I am executing is as follows
</span><br>
<span class="quotelev1">&gt; mpirun -np 3 helloWorld.sh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What I want to know how what parameter do I need to pass from the mpirun command line so that I can read the rank for each task within my helloWorld Shell Script.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please excuse me if this is a duplicate entry. I have searched through all the forums and did not get the answer to my question.
</span><br>
<span class="quotelev1">&gt; Thanks in advance for all your help.
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Deepak
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21894/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21895.php">deepak mehta: "Re: [OMPI users] How to Read the Rank from the MPI_TASK"</a>
<li><strong>Previous message:</strong> <a href="21893.php">deepak mehta: "[OMPI users] How to Read the Rank from the MPI_TASK"</a>
<li><strong>In reply to:</strong> <a href="21893.php">deepak mehta: "[OMPI users] How to Read the Rank from the MPI_TASK"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21895.php">deepak mehta: "Re: [OMPI users] How to Read the Rank from the MPI_TASK"</a>
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
