<?
$subject_val = "Re: [OMPI users] Problem with repeatedly spawning a few processes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 31 21:53:35 2009" -->
<!-- isoreceived="20090901015335" -->
<!-- sent="Mon, 31 Aug 2009 19:53:16 -0600" -->
<!-- isosent="20090901015316" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with repeatedly spawning a few processes" -->
<!-- id="DBC6953A-4CA8-4A20-9208-12ADF006EB92_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="3cc760c90908311825ub564223rbb01bd9244f3b115_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2009-08-31 21:53:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10530.php">Ashika Umanga Umagiliya: "Re: [OMPI users] OpenMPI 1.3.3 with Boost.MPI ?"</a>
<li><strong>Previous message:</strong> <a href="10528.php">Tim Miller: "Re: [OMPI users] Problem with repeatedly spawning a few processes"</a>
<li><strong>In reply to:</strong> <a href="10528.php">Tim Miller: "Re: [OMPI users] Problem with repeatedly spawning a few processes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Download the nightly 1.3 release branch snapshot - not the actual  
<br>
release, but the nightly tarball:
<br>
<p><a href="http://www.open-mpi.org/nightly/v1.3/">http://www.open-mpi.org/nightly/v1.3/</a>
<br>
<p>It is very close to release quality - only waiting for a couple of  
<br>
things, none of which would impact this issue.
<br>
<p>Let me know how this works for you.
<br>
Ralph
<br>
<p>On Aug 31, 2009, at 7:25 PM, Tim Miller wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks -- I downloaded the latest 1.4 snapshot after I saw your  
</span><br>
<span class="quotelev1">&gt; message and verified that this issue does not seem to occur in it.  
</span><br>
<span class="quotelev1">&gt; However, I ran into other stability issues (not necessarily  
</span><br>
<span class="quotelev1">&gt; surprising for a development snapshot). Is there any idea on when  
</span><br>
<span class="quotelev1">&gt; 1.3.4 will be out and if this fix will be migrated in?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks again very much for your help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Aug 26, 2009 at 6:07 PM, Ralph Castain &lt;rhc_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; This is a known issue - I'll test to see if it has been fixed for  
</span><br>
<span class="quotelev1">&gt; the upcoming 1.3.4. We know the problem does not exist in our devel  
</span><br>
<span class="quotelev1">&gt; trunk, but I don't know if the fix propagated to the 1.3 branch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 26, 2009, at 3:40 PM, Tim Miller wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello Everyone,
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Staff Scientist, Laboratory of Computational Biology NHLBI/NIH
</span><br>
<span class="quotelev1">&gt; 5635 Fishers Lane Rm. T903
</span><br>
<span class="quotelev1">&gt; Rockville, MD 20852
</span><br>
<span class="quotelev1">&gt; 301-402-0618
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10529/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10530.php">Ashika Umanga Umagiliya: "Re: [OMPI users] OpenMPI 1.3.3 with Boost.MPI ?"</a>
<li><strong>Previous message:</strong> <a href="10528.php">Tim Miller: "Re: [OMPI users] Problem with repeatedly spawning a few processes"</a>
<li><strong>In reply to:</strong> <a href="10528.php">Tim Miller: "Re: [OMPI users] Problem with repeatedly spawning a few processes"</a>
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
