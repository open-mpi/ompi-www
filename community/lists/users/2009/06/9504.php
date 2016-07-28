<?
$subject_val = "[OMPI users] Exit Program Without Calling MPI_Finalize For Special Case";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  3 00:49:31 2009" -->
<!-- isoreceived="20090603044931" -->
<!-- sent="Wed, 3 Jun 2009 12:49:24 +0800 (SGT)" -->
<!-- isosent="20090603044924" -->
<!-- name="Tee Wen Kai" -->
<!-- email="teewenkai_at_[hidden]" -->
<!-- subject="[OMPI users] Exit Program Without Calling MPI_Finalize For Special Case" -->
<!-- id="484817.7135.qm_at_web76209.mail.sg1.yahoo.com" -->
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
<strong>Subject:</strong> [OMPI users] Exit Program Without Calling MPI_Finalize For Special Case<br>
<strong>From:</strong> Tee Wen Kai (<em>teewenkai_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-03 00:49:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9505.php">Ralph Castain: "Re: [OMPI users] Exit Program Without Calling MPI_Finalize For Special Case"</a>
<li><strong>Previous message:</strong> <a href="9503.php">Iftikhar Rathore: "Re: [OMPI users] Openmpi and processor affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9505.php">Ralph Castain: "Re: [OMPI users] Exit Program Without Calling MPI_Finalize For Special Case"</a>
<li><strong>Reply:</strong> <a href="9505.php">Ralph Castain: "Re: [OMPI users] Exit Program Without Calling MPI_Finalize For Special Case"</a>
<li><strong>Maybe reply:</strong> <a href="9534.php">Tee Wen Kai: "Re: [OMPI users] Exit Program Without Calling MPI_Finalize For Special Case"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
&#160;
<br>
I am writing a program for a central controller that will spawn processes depend on the user selection. And when there is some fault in the spawn processes like for example, the computer that is spawned with the process suddenly go down, the controller should react to this and respawn the processes to available machines. However, when a computer go down, all communications will hang. To resolve this, the controller will sent SIGTERM signal to kill those spawned processes. In the spawned program, I have written signal handler to handle such cases. However, when I include MPI_Finalize in the handler, there will be some error messages when the processes exit because some communication is not complete. Thus, I modify my program such that when the processes need to exit through handler, there will be no MPI_Finalize statement. I am using openmpi 1.2.8 and this works. However, version 1.2.8 has other bugs like spawned processes using MPI_Comm_spawn when exited
<br>
&nbsp;does not terminate the orted services leading to alot of orted services when processes are spawn over and over again. Thus, I started evaluating version 1.3.2. 1.3.2 solve the bug but the whole program exited once a process exit without calling MPI_Finalize. Therefore, I seek your help or suggestion on how should I overcome this or what should be the proper way to&#160;quit processes when they&#160;are stuck due to one process down.
<br>
&#160;
<br>
Thank you.
<br>
&#160;
<br>
Regards,
<br>
Wenkai


      
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9504/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9505.php">Ralph Castain: "Re: [OMPI users] Exit Program Without Calling MPI_Finalize For Special Case"</a>
<li><strong>Previous message:</strong> <a href="9503.php">Iftikhar Rathore: "Re: [OMPI users] Openmpi and processor affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9505.php">Ralph Castain: "Re: [OMPI users] Exit Program Without Calling MPI_Finalize For Special Case"</a>
<li><strong>Reply:</strong> <a href="9505.php">Ralph Castain: "Re: [OMPI users] Exit Program Without Calling MPI_Finalize For Special Case"</a>
<li><strong>Maybe reply:</strong> <a href="9534.php">Tee Wen Kai: "Re: [OMPI users] Exit Program Without Calling MPI_Finalize For Special Case"</a>
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
