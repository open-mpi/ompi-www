<?
$subject_val = "Re: [OMPI users] How to Read the Rank from the MPI_TASK";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 10 23:26:16 2013" -->
<!-- isoreceived="20130511032616" -->
<!-- sent="Fri, 10 May 2013 20:26:08 -0700" -->
<!-- isosent="20130511032608" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to Read the Rank from the MPI_TASK" -->
<!-- id="5F586F73-5205-451E-A32D-9F7AF4515C4C_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="BLU156-W1AE5BA1D25CC312E09BD4B4A50_at_phx.gbl" -->
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
<strong>Date:</strong> 2013-05-10 23:26:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21897.php">Hayato KUNIIE: "[OMPI users] MPI_SUM is not defined on the MPI_INTEGER datatype"</a>
<li><strong>Previous message:</strong> <a href="21895.php">deepak mehta: "Re: [OMPI users] How to Read the Rank from the MPI_TASK"</a>
<li><strong>In reply to:</strong> <a href="21895.php">deepak mehta: "Re: [OMPI users] How to Read the Rank from the MPI_TASK"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You mean a good MPI book? There are a lot of good ones out there - just search Amazon for &quot;MPI programming&quot;
<br>
<p><p>On May 10, 2013, at 1:55 PM, deepak mehta &lt;godeepakm_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello Ralph,
</span><br>
<span class="quotelev1">&gt; Your suggestion did the trick.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I don't remember back to 1.4.3, but I think it was true even that long ago - we provide an environmental variable OMPI_COMM_WORLD_RANK that holds the rank of the process.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Out of curiosity if I want to learn more about this topic in detail what would be a good place to start.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank You for your help.
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Deepak
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: godeepakm_at_[hidden]
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: How to Read the Rank from the MPI_TASK
</span><br>
<span class="quotelev1">&gt; Date: Fri, 10 May 2013 20:39:34 +0000
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello All,
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21896/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21897.php">Hayato KUNIIE: "[OMPI users] MPI_SUM is not defined on the MPI_INTEGER datatype"</a>
<li><strong>Previous message:</strong> <a href="21895.php">deepak mehta: "Re: [OMPI users] How to Read the Rank from the MPI_TASK"</a>
<li><strong>In reply to:</strong> <a href="21895.php">deepak mehta: "Re: [OMPI users] How to Read the Rank from the MPI_TASK"</a>
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
