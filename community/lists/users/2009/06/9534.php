<?
$subject_val = "Re: [OMPI users] Exit Program Without Calling MPI_Finalize For Special Case";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  4 02:16:32 2009" -->
<!-- isoreceived="20090604061632" -->
<!-- sent="Thu, 4 Jun 2009 14:16:24 +0800 (SGT)" -->
<!-- isosent="20090604061624" -->
<!-- name="Tee Wen Kai" -->
<!-- email="teewenkai_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Exit Program Without Calling MPI_Finalize For Special Case" -->
<!-- id="1166.7592.qm_at_web76214.mail.sg1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="[OMPI users] Exit Program Without Calling MPI_Finalize For Special Case" -->
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
<strong>From:</strong> Tee Wen Kai (<em>teewenkai_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-04 02:16:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9535.php">Lars Andersson: "Re: [OMPI users] Receiving MPI messages of unknown size"</a>
<li><strong>Previous message:</strong> <a href="9533.php">&#197;ke Sandgren: "Re: [OMPI users] Receiving MPI messages of unknown size"</a>
<li><strong>Maybe in reply to:</strong> <a href="9504.php">Tee Wen Kai: "[OMPI users] Exit Program Without Calling MPI_Finalize For Special Case"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9539.php">Jeff Squyres: "Re: [OMPI users] Exit Program Without Calling MPI_Finalize ForSpecial Case"</a>
<li><strong>Reply:</strong> <a href="9539.php">Jeff Squyres: "Re: [OMPI users] Exit Program Without Calling MPI_Finalize ForSpecial Case"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
&#160;
<br>
Thanks for your reply. Yup, I am engaging in such research. 
<br>
&#160;
<br>
In that case, I think I will just stick to 1.2.8 and maybe beside sending the SIGTERM signal to kill the process, I will kill the orted service as well when the spawned processes died or exited.
<br>
&#160;
<br>
Just to find out more about the consequences for exiting MPI processes without calling MPI_Finalize, will it cause memory leak or other fatal problem?
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
<p>--- On Wed, 3/6/09, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><p>From: Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] Exit Program Without Calling MPI_Finalize For Special Case
<br>
To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Date: Wednesday, 3 June, 2009, 5:19 PM
<br>
<p><p>I'm afraid there is no way to do this in 1.3.2 (or any OMPI distributed release) with MPI applications.
<br>
<p><p>The OMPI trunk does provide continuous re-spawn of failed processes, mapping them to other nodes and considering fault relationships between nodes, but this only works if they are -not- MPI processes. I can detail that for you, if you would like.
<br>
<p><p>The problem with MPI processes is that restart is a much larger problem than just re-spawning a process. The entire MPI system becomes out-of-sync when one process fails - messages in-flight can be lost, collectives hang, etc.
<br>
<p><p>Even if you rewire the connections after re-spawning the process, you still have the problem of re-synchronizing the MPI communications - recovering lost messages, determining if a collective is already in operation and waiting for this process to respond, etc. Hence, our default response is to simply terminate the job, letting the user restart it from some prior checkpoint.
<br>
<p><p>Of course, the issue of how to recover from a single process failure remains the subject of considerable research. I assume you are engaging in such research?
<br>
<p><p><p>On Jun 2, 2009, at 10:49 PM, Tee Wen Kai wrote:
<br>
<p><p><p><p><p><p>Hi,
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
<p><p>New Email names for you! 
<br>
Get the Email name you've always wanted on the new @ymail and @rocketmail.
<br>
Hurry before someone else does!_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>-----Inline Attachment Follows-----
<br>
<p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>


      
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9534/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9535.php">Lars Andersson: "Re: [OMPI users] Receiving MPI messages of unknown size"</a>
<li><strong>Previous message:</strong> <a href="9533.php">&#197;ke Sandgren: "Re: [OMPI users] Receiving MPI messages of unknown size"</a>
<li><strong>Maybe in reply to:</strong> <a href="9504.php">Tee Wen Kai: "[OMPI users] Exit Program Without Calling MPI_Finalize For Special Case"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9539.php">Jeff Squyres: "Re: [OMPI users] Exit Program Without Calling MPI_Finalize ForSpecial Case"</a>
<li><strong>Reply:</strong> <a href="9539.php">Jeff Squyres: "Re: [OMPI users] Exit Program Without Calling MPI_Finalize ForSpecial Case"</a>
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
