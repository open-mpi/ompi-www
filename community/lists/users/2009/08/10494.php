<?
$subject_val = "Re: [OMPI users] Problem with repeatedly spawning a few processes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 26 18:07:35 2009" -->
<!-- isoreceived="20090826220735" -->
<!-- sent="Wed, 26 Aug 2009 16:07:21 -0600" -->
<!-- isosent="20090826220721" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with repeatedly spawning a few processes" -->
<!-- id="CC04F59E-FD09-4AF2-A7C1-E16936E20B73_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="3cc760c90908261440w772f5f97ie1164247f57dba3b_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with repeatedly spawning a few processes<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-26 18:07:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10495.php">Changsheng Jiang: "[OMPI users] MPI_File_open return error code 16"</a>
<li><strong>Previous message:</strong> <a href="10493.php">Tim Miller: "[OMPI users] Problem with repeatedly spawning a few processes"</a>
<li><strong>In reply to:</strong> <a href="10493.php">Tim Miller: "[OMPI users] Problem with repeatedly spawning a few processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10528.php">Tim Miller: "Re: [OMPI users] Problem with repeatedly spawning a few processes"</a>
<li><strong>Reply:</strong> <a href="10528.php">Tim Miller: "Re: [OMPI users] Problem with repeatedly spawning a few processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is a known issue - I'll test to see if it has been fixed for the  
<br>
upcoming 1.3.4. We know the problem does not exist in our devel trunk,  
<br>
but I don't know if the fix propagated to the 1.3 branch.
<br>
<p><p>On Aug 26, 2009, at 3:40 PM, Tim Miller wrote:
<br>
<p><span class="quotelev1">&gt; Hello Everyone,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a problem that I can't seem to figure out from searching the  
</span><br>
<span class="quotelev1">&gt; mailing list archive. I have a code that repeatedly spawns (via  
</span><br>
<span class="quotelev1">&gt; MPI_COMM_SPAWN) a group of 8 processes and then waits for them to  
</span><br>
<span class="quotelev1">&gt; finish. The problem is that OpenMPI (I've tried 1.3.1 and 1.3.3)  
</span><br>
<span class="quotelev1">&gt; opens a pipe each time MPI_COMM_SPAWN is called, but this pipe never  
</span><br>
<span class="quotelev1">&gt; gets closed (even if I call MPI_COMM_FREE on both the parent and  
</span><br>
<span class="quotelev1">&gt; child). Therefore, eventually my master process hits the limit of  
</span><br>
<span class="quotelev1">&gt; open file descriptors and cannot spawn any more. I cannot figure out  
</span><br>
<span class="quotelev1">&gt; why this is happening since I am only spawning 8 jobs at a time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I should note that I don't exchange any data over the child  
</span><br>
<span class="quotelev1">&gt; intercommunicators -- they exist solely so I can call MPI_BARRIER on  
</span><br>
<span class="quotelev1">&gt; them (the spawned processes are programed to call MPI_BARRIER  
</span><br>
<span class="quotelev1">&gt; directly before they call MPI_FINALIZE, thus indicating that they  
</span><br>
<span class="quotelev1">&gt; are done doing their work).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'd appreciate any suggestions as to what I might be doing wrong  
</span><br>
<span class="quotelev1">&gt; with this that is causing OpenMPI to hold the pipes open.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Tim M.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10495.php">Changsheng Jiang: "[OMPI users] MPI_File_open return error code 16"</a>
<li><strong>Previous message:</strong> <a href="10493.php">Tim Miller: "[OMPI users] Problem with repeatedly spawning a few processes"</a>
<li><strong>In reply to:</strong> <a href="10493.php">Tim Miller: "[OMPI users] Problem with repeatedly spawning a few processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10528.php">Tim Miller: "Re: [OMPI users] Problem with repeatedly spawning a few processes"</a>
<li><strong>Reply:</strong> <a href="10528.php">Tim Miller: "Re: [OMPI users] Problem with repeatedly spawning a few processes"</a>
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
