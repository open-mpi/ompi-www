<?
$subject_val = "Re: [OMPI users] Don't crash on node failures";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 14 09:59:07 2010" -->
<!-- isoreceived="20100414135907" -->
<!-- sent="Wed, 14 Apr 2010 07:58:58 -0600" -->
<!-- isosent="20100414135858" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Don't crash on node failures" -->
<!-- id="57FE7263-7EE8-49D0-86E1-2EEDFF8A6097_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4BC5C350.3070106_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Don't crash on node failures<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-14 09:58:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12632.php">Fernando Lemos: "Re: [OMPI users] OpenMPI Checkpoint/Restart is failed"</a>
<li><strong>Previous message:</strong> <a href="12630.php">J&#252;rgen Kaiser: "Re: [OMPI users] Don't crash on node failures"</a>
<li><strong>In reply to:</strong> <a href="12630.php">J&#252;rgen Kaiser: "Re: [OMPI users] Don't crash on node failures"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes - followed a few microseconds later with a SIGKILL if it didn't terminate. The daemon exits shortly thereafter, and if the proc is -still- somehow alive, it kills itself once it sees the daemon is gone.
<br>
<p><p>On Apr 14, 2010, at 7:29 AM, J&#252;rgen Kaiser wrote:
<br>
<p><span class="quotelev1">&gt; What happens exactly when a job or node crashes? Does orte send a
</span><br>
<span class="quotelev1">&gt; SIGTERM to each process?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; J&#252;rgen
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Durga Choudhury wrote:
</span><br>
<span class="quotelev2">&gt;&gt; This would be a very welcoming new feature for me as well. My two
</span><br>
<span class="quotelev2">&gt;&gt; thumbs up when it happens.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Best regards
</span><br>
<span class="quotelev2">&gt;&gt; Durga
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Apr 13, 2010 at 10:28 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Not right now, but coming later this year...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Apr 13, 2010, at 7:21 AM, J&#252;rgen Kaiser wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Can I force MPI to not abort the whole job when a node crashes? I would
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; like to let the remaining MPI-processes perform some action in that case
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and then proceed.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; J&#252;rgen
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12632.php">Fernando Lemos: "Re: [OMPI users] OpenMPI Checkpoint/Restart is failed"</a>
<li><strong>Previous message:</strong> <a href="12630.php">J&#252;rgen Kaiser: "Re: [OMPI users] Don't crash on node failures"</a>
<li><strong>In reply to:</strong> <a href="12630.php">J&#252;rgen Kaiser: "Re: [OMPI users] Don't crash on node failures"</a>
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
