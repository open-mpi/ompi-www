<?
$subject_val = "Re: [OMPI users] Problem with MPI_Comm_spawn_multiple &amp; MPI_Info_free";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  9 07:42:19 2009" -->
<!-- isoreceived="20090309114219" -->
<!-- sent="Mon, 9 Mar 2009 05:42:09 -0600" -->
<!-- isosent="20090309114209" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with MPI_Comm_spawn_multiple &amp;amp; MPI_Info_free" -->
<!-- id="9882FDDA-2474-4F75-A90D-D20469AAF54E_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="345107.74527.qm_at_web76212.mail.sg1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with MPI_Comm_spawn_multiple &amp; MPI_Info_free<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-09 07:42:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8358.php">Ralph Castain: "Re: [OMPI users] Run-time problem"</a>
<li><strong>Previous message:</strong> <a href="8356.php">Tee Wen Kai: "[OMPI users] Problem with MPI_Comm_spawn_multiple &amp; MPI_Info_free"</a>
<li><strong>In reply to:</strong> <a href="8356.php">Tee Wen Kai: "[OMPI users] Problem with MPI_Comm_spawn_multiple &amp; MPI_Info_free"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8373.php">Tee Wen Kai: "Re: [OMPI users] Problem with MPI_Comm_spawn_multiple &amp; MPI_Info_free"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Could you tell us what version of Open MPI you are using? It would  
<br>
help us to provide you with advice.
<br>
<p>Thanks
<br>
Ralph
<br>
<p>On Mar 9, 2009, at 2:18 AM, Tee Wen Kai wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a program that allow user to enter their choice of operation.  
</span><br>
<span class="quotelev1">&gt; For example, when the user enter '4', the program will enter a  
</span><br>
<span class="quotelev1">&gt; function which will spawn some other programs stored in the same  
</span><br>
<span class="quotelev1">&gt; directory. When the user enter '5', the program will enter another  
</span><br>
<span class="quotelev1">&gt; function to request all spawned processes to exit. Therefore,  
</span><br>
<span class="quotelev1">&gt; initially only one process which act as the controller is spawned.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My MPI_Info_create and MPI_Comm_spawn_multiple are called in a  
</span><br>
<span class="quotelev1">&gt; function. Everything is working fine except when I tried to free the  
</span><br>
<span class="quotelev1">&gt; MPI_Info in the function by calling MPI_Info_free, I have  
</span><br>
<span class="quotelev1">&gt; segmentation fault error. The second problem is when i do the  
</span><br>
<span class="quotelev1">&gt; spawning once and exit the controller program with MPI_Finalize, the  
</span><br>
<span class="quotelev1">&gt; program exited normally. But when spawning is done more than once  
</span><br>
<span class="quotelev1">&gt; and exit the controller program with MPI_Finalize, there is  
</span><br>
<span class="quotelev1">&gt; segmentation fault. I also realize that when the spawed processes  
</span><br>
<span class="quotelev1">&gt; exit, the 'orted' process is still running. Thus, when multiple  
</span><br>
<span class="quotelev1">&gt; MPI_Comm_spawn_multiple are called, there will be multiple 'orted'  
</span><br>
<span class="quotelev1">&gt; processes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you and hope someone has a solution to my problem.
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8357/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8358.php">Ralph Castain: "Re: [OMPI users] Run-time problem"</a>
<li><strong>Previous message:</strong> <a href="8356.php">Tee Wen Kai: "[OMPI users] Problem with MPI_Comm_spawn_multiple &amp; MPI_Info_free"</a>
<li><strong>In reply to:</strong> <a href="8356.php">Tee Wen Kai: "[OMPI users] Problem with MPI_Comm_spawn_multiple &amp; MPI_Info_free"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8373.php">Tee Wen Kai: "Re: [OMPI users] Problem with MPI_Comm_spawn_multiple &amp; MPI_Info_free"</a>
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
