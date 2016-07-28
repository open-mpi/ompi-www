<?
$subject_val = "Re: [OMPI users] Problem with repeatedly spawning a few processes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 31 21:25:05 2009" -->
<!-- isoreceived="20090901012505" -->
<!-- sent="Mon, 31 Aug 2009 21:25:01 -0400" -->
<!-- isosent="20090901012501" -->
<!-- name="Tim Miller" -->
<!-- email="btamiller_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with repeatedly spawning a few processes" -->
<!-- id="3cc760c90908311825ub564223rbb01bd9244f3b115_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CC04F59E-FD09-4AF2-A7C1-E16936E20B73_at_open-mpi.org" -->
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
<strong>From:</strong> Tim Miller (<em>btamiller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-31 21:25:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10529.php">Ralph Castain: "Re: [OMPI users] Problem with repeatedly spawning a few processes"</a>
<li><strong>Previous message:</strong> <a href="10527.php">Shaun Jackman: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<li><strong>In reply to:</strong> <a href="10494.php">Ralph Castain: "Re: [OMPI users] Problem with repeatedly spawning a few processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10529.php">Ralph Castain: "Re: [OMPI users] Problem with repeatedly spawning a few processes"</a>
<li><strong>Reply:</strong> <a href="10529.php">Ralph Castain: "Re: [OMPI users] Problem with repeatedly spawning a few processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Thanks -- I downloaded the latest 1.4 snapshot after I saw your message and
<br>
verified that this issue does not seem to occur in it. However, I ran into
<br>
other stability issues (not necessarily surprising for a development
<br>
snapshot). Is there any idea on when 1.3.4 will be out and if this fix will
<br>
be migrated in?
<br>
<p>Thanks again very much for your help.
<br>
<p>Regards,
<br>
Tim
<br>
<p><p>On Wed, Aug 26, 2009 at 6:07 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; This is a known issue - I'll test to see if it has been fixed for the
</span><br>
<span class="quotelev1">&gt; upcoming 1.3.4. We know the problem does not exist in our devel trunk, but I
</span><br>
<span class="quotelev1">&gt; don't know if the fix propagated to the 1.3 branch.
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
<span class="quotelev1">&gt;  Hello Everyone,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have a problem that I can't seem to figure out from searching the
</span><br>
<span class="quotelev2">&gt;&gt; mailing list archive. I have a code that repeatedly spawns (via
</span><br>
<span class="quotelev2">&gt;&gt; MPI_COMM_SPAWN) a group of 8 processes and then waits for them to finish.
</span><br>
<span class="quotelev2">&gt;&gt; The problem is that OpenMPI (I've tried 1.3.1 and 1.3.3) opens a pipe each
</span><br>
<span class="quotelev2">&gt;&gt; time MPI_COMM_SPAWN is called, but this pipe never gets closed (even if I
</span><br>
<span class="quotelev2">&gt;&gt; call MPI_COMM_FREE on both the parent and child). Therefore, eventually my
</span><br>
<span class="quotelev2">&gt;&gt; master process hits the limit of open file descriptors and cannot spawn any
</span><br>
<span class="quotelev2">&gt;&gt; more. I cannot figure out why this is happening since I am only spawning 8
</span><br>
<span class="quotelev2">&gt;&gt; jobs at a time.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I should note that I don't exchange any data over the child
</span><br>
<span class="quotelev2">&gt;&gt; intercommunicators -- they exist solely so I can call MPI_BARRIER on them
</span><br>
<span class="quotelev2">&gt;&gt; (the spawned processes are programed to call MPI_BARRIER directly before
</span><br>
<span class="quotelev2">&gt;&gt; they call MPI_FINALIZE, thus indicating that they are done doing their
</span><br>
<span class="quotelev2">&gt;&gt; work).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'd appreciate any suggestions as to what I might be doing wrong with this
</span><br>
<span class="quotelev2">&gt;&gt; that is causing OpenMPI to hold the pipes open.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Tim M.
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<p><p><p><pre>
-- 
Staff Scientist, Laboratory of Computational Biology NHLBI/NIH
5635 Fishers Lane Rm. T903
Rockville, MD 20852
301-402-0618
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10528/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10529.php">Ralph Castain: "Re: [OMPI users] Problem with repeatedly spawning a few processes"</a>
<li><strong>Previous message:</strong> <a href="10527.php">Shaun Jackman: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<li><strong>In reply to:</strong> <a href="10494.php">Ralph Castain: "Re: [OMPI users] Problem with repeatedly spawning a few processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10529.php">Ralph Castain: "Re: [OMPI users] Problem with repeatedly spawning a few processes"</a>
<li><strong>Reply:</strong> <a href="10529.php">Ralph Castain: "Re: [OMPI users] Problem with repeatedly spawning a few processes"</a>
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
