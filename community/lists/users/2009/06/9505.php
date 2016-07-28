<?
$subject_val = "Re: [OMPI users] Exit Program Without Calling MPI_Finalize For Special Case";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  3 05:19:50 2009" -->
<!-- isoreceived="20090603091950" -->
<!-- sent="Wed, 3 Jun 2009 03:19:36 -0600" -->
<!-- isosent="20090603091936" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Exit Program Without Calling MPI_Finalize For Special Case" -->
<!-- id="898D3D04-8D22-4DE4-98AF-3F3D0A8DD1FA_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="484817.7135.qm_at_web76209.mail.sg1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Exit Program Without Calling MPI_Finalize For Special Case<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-03 05:19:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9506.php">tsilva_at_[hidden]: "[OMPI users] top question"</a>
<li><strong>Previous message:</strong> <a href="9504.php">Tee Wen Kai: "[OMPI users] Exit Program Without Calling MPI_Finalize For Special Case"</a>
<li><strong>In reply to:</strong> <a href="9504.php">Tee Wen Kai: "[OMPI users] Exit Program Without Calling MPI_Finalize For Special Case"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9534.php">Tee Wen Kai: "Re: [OMPI users] Exit Program Without Calling MPI_Finalize For Special Case"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm afraid there is no way to do this in 1.3.2 (or any OMPI  
<br>
distributed release) with MPI applications.
<br>
<p>The OMPI trunk does provide continuous re-spawn of failed processes,  
<br>
mapping them to other nodes and considering fault relationships  
<br>
between nodes, but this only works if they are -not- MPI processes. I  
<br>
can detail that for you, if you would like.
<br>
<p>The problem with MPI processes is that restart is a much larger  
<br>
problem than just re-spawning a process. The entire MPI system becomes  
<br>
out-of-sync when one process fails - messages in-flight can be lost,  
<br>
collectives hang, etc.
<br>
<p>Even if you rewire the connections after re-spawning the process, you  
<br>
still have the problem of re-synchronizing the MPI communications -  
<br>
recovering lost messages, determining if a collective is already in  
<br>
operation and waiting for this process to respond, etc. Hence, our  
<br>
default response is to simply terminate the job, letting the user  
<br>
restart it from some prior checkpoint.
<br>
<p>Of course, the issue of how to recover from a single process failure  
<br>
remains the subject of considerable research. I assume you are  
<br>
engaging in such research?
<br>
<p>On Jun 2, 2009, at 10:49 PM, Tee Wen Kai wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am writing a program for a central controller that will spawn  
</span><br>
<span class="quotelev1">&gt; processes depend on the user selection. And when there is some fault  
</span><br>
<span class="quotelev1">&gt; in the spawn processes like for example, the computer that is  
</span><br>
<span class="quotelev1">&gt; spawned with the process suddenly go down, the controller should  
</span><br>
<span class="quotelev1">&gt; react to this and respawn the processes to available machines.  
</span><br>
<span class="quotelev1">&gt; However, when a computer go down, all communications will hang. To  
</span><br>
<span class="quotelev1">&gt; resolve this, the controller will sent SIGTERM signal to kill those  
</span><br>
<span class="quotelev1">&gt; spawned processes. In the spawned program, I have written signal  
</span><br>
<span class="quotelev1">&gt; handler to handle such cases. However, when I include MPI_Finalize  
</span><br>
<span class="quotelev1">&gt; in the handler, there will be some error messages when the processes  
</span><br>
<span class="quotelev1">&gt; exit because some communication is not complete. Thus, I modify my  
</span><br>
<span class="quotelev1">&gt; program such that when the processes need to exit through handler,  
</span><br>
<span class="quotelev1">&gt; there will be no MPI_Finalize statement. I am using openmpi 1.2.8  
</span><br>
<span class="quotelev1">&gt; and this works. However, version 1.2.8 has other bugs like spawned  
</span><br>
<span class="quotelev1">&gt; processes using MPI_Comm_spawn when exited does not terminate the  
</span><br>
<span class="quotelev1">&gt; orted services leading to alot of orted services when processes are  
</span><br>
<span class="quotelev1">&gt; spawn over and over again. Thus, I started evaluating version 1.3.2.  
</span><br>
<span class="quotelev1">&gt; 1.3.2 solve the bug but the whole program exited once a process exit  
</span><br>
<span class="quotelev1">&gt; without calling MPI_Finalize. Therefore, I seek your help or  
</span><br>
<span class="quotelev1">&gt; suggestion on how should I overcome this or what should be the  
</span><br>
<span class="quotelev1">&gt; proper way to quit processes when they are stuck due to one process  
</span><br>
<span class="quotelev1">&gt; down.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Wenkai
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; New Email names for you!
</span><br>
<span class="quotelev1">&gt; Get the Email name you've always wanted on the new @ymail and  
</span><br>
<span class="quotelev1">&gt; @rocketmail.
</span><br>
<span class="quotelev1">&gt; Hurry before someone else does! 
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9505/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9506.php">tsilva_at_[hidden]: "[OMPI users] top question"</a>
<li><strong>Previous message:</strong> <a href="9504.php">Tee Wen Kai: "[OMPI users] Exit Program Without Calling MPI_Finalize For Special Case"</a>
<li><strong>In reply to:</strong> <a href="9504.php">Tee Wen Kai: "[OMPI users] Exit Program Without Calling MPI_Finalize For Special Case"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9534.php">Tee Wen Kai: "Re: [OMPI users] Exit Program Without Calling MPI_Finalize For Special Case"</a>
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
