<?
$subject_val = "Re: [OMPI users] Open MPI exited on signal 11 (Segmentation fault). Trying to run a script that uses Open MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  5 00:35:48 2013" -->
<!-- isoreceived="20130705043548" -->
<!-- sent="Thu, 4 Jul 2013 21:35:41 -0700" -->
<!-- isosent="20130705043541" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI exited on signal 11 (Segmentation fault). Trying to run a script that uses Open MPI" -->
<!-- id="0DDBCA0F-490B-4622-BDED-F93120035D84_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CA+g4zPSzWuDoqOfxA6ZDujqwC6WxffAsuhSPNWY1LygTh9_Low_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI exited on signal 11 (Segmentation fault). Trying to run a script that uses Open MPI<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-05 00:35:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22251.php">Ed Blosch: "Re: [OMPI users] Open MPI exited on signal 11 (Segmentation fault).	Trying to run a script that uses Open MPI"</a>
<li><strong>Previous message:</strong> <a href="22249.php">Rick White: "[OMPI users] Open MPI exited on signal 11 (Segmentation fault). Trying to run a script that uses Open MPI"</a>
<li><strong>In reply to:</strong> <a href="22249.php">Rick White: "[OMPI users] Open MPI exited on signal 11 (Segmentation fault). Trying to run a script that uses Open MPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, it's telling you that your program segfaulted - so I'd start with that, perhaps looking for any core it might have dropped.
<br>
<p>On Jul 4, 2013, at 8:36 PM, Rick White &lt;raw937_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have this error:
</span><br>
<span class="quotelev1">&gt; mpiexec noticed that process rank 1 with PID 16087 on node server exited on signal 11 (Segmentation fault)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Wondering how to fix it?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers and many thanks
</span><br>
<span class="quotelev1">&gt; Rick
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Richard Allen White III M.S.
</span><br>
<span class="quotelev1">&gt; PhD Candidate - Suttle Lab
</span><br>
<span class="quotelev1">&gt; Department of Microbiology &amp; Immunology
</span><br>
<span class="quotelev1">&gt; The University of British Columbia 
</span><br>
<span class="quotelev1">&gt; Vancouver, BC, Canada
</span><br>
<span class="quotelev1">&gt; cell.  604-440-5150 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.ocgy.ubc.ca/~suttle/">http://www.ocgy.ubc.ca/~suttle/</a> 
</span><br>
<span class="quotelev1">&gt; 
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22250/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22251.php">Ed Blosch: "Re: [OMPI users] Open MPI exited on signal 11 (Segmentation fault).	Trying to run a script that uses Open MPI"</a>
<li><strong>Previous message:</strong> <a href="22249.php">Rick White: "[OMPI users] Open MPI exited on signal 11 (Segmentation fault). Trying to run a script that uses Open MPI"</a>
<li><strong>In reply to:</strong> <a href="22249.php">Rick White: "[OMPI users] Open MPI exited on signal 11 (Segmentation fault). Trying to run a script that uses Open MPI"</a>
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
