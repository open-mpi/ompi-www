<?
$subject_val = "Re: [OMPI users] Running application with MPI_Comm_spawn() in multithreaded environment";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  3 09:20:34 2008" -->
<!-- isoreceived="20081003132034" -->
<!-- sent="Fri, 3 Oct 2008 07:20:27 -0600" -->
<!-- isosent="20081003132027" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running application with MPI_Comm_spawn() in multithreaded environment" -->
<!-- id="4D3F9299-90C9-4F43-88B6-E40BCBBAF468_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="48E61ACA.2020905_at_tekno-soft.it" -->
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
<strong>Subject:</strong> Re: [OMPI users] Running application with MPI_Comm_spawn() in multithreaded environment<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-03 09:20:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6847.php">George Bosilca: "Re: [OMPI users] Tuned Collective MCA params"</a>
<li><strong>Previous message:</strong> <a href="6845.php">Roberto Fichera: "Re: [OMPI users] Running application with MPI_Comm_spawn() in multithreaded environment"</a>
<li><strong>In reply to:</strong> <a href="6845.php">Roberto Fichera: "Re: [OMPI users] Running application with MPI_Comm_spawn() in multithreaded environment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6848.php">Roberto Fichera: "Re: [OMPI users] Running application with MPI_Comm_spawn() in multithreaded environment"</a>
<li><strong>Reply:</strong> <a href="6848.php">Roberto Fichera: "Re: [OMPI users] Running application with MPI_Comm_spawn() in multithreaded environment"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 3, 2008, at 7:14 AM, Roberto Fichera wrote:
<br>
<p><span class="quotelev1">&gt; Ralph Castain ha scritto:
</span><br>
<span class="quotelev2">&gt;&gt; I committed something to the trunk yesterday. Given the complexity of
</span><br>
<span class="quotelev2">&gt;&gt; the fix, I don't plan to bring it over to the 1.3 branch until
</span><br>
<span class="quotelev2">&gt;&gt; sometime mid-to-end next week so it can be adequately tested.
</span><br>
<span class="quotelev1">&gt; Ok! So it means that I can checkout from the SVN/trunk to get you fix,
</span><br>
<span class="quotelev1">&gt; right?
</span><br>
<p>Yes, though note that I don't claim it is fully correct yet. Still  
<br>
needs testing. However, I have tested it a fair amount and it seems  
<br>
okay.
<br>
<p>If you do test it, please let me know how it goes.
<br>
<p>Thanks
<br>
Ralph
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 3, 2008, at 5:02 AM, Roberto Fichera wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph Castain ha scritto:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Actually, it just occurred to me that you may be seeing a problem  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; comm_spawn itself that I am currently chasing down. It is in the  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1.3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; branch and has to do with comm_spawning procs on subsets of nodes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (instead of across all nodes). Could be related to this - you might
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; want to give me a chance to complete the fix. I have identified the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; problem and should have it fixed later today in our trunk -  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; probably
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; won't move to the 1.3 branch for several days.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do you have any news about the above fix? Does the fix is already
</span><br>
<span class="quotelev3">&gt;&gt;&gt; available for testing?
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
<li><strong>Next message:</strong> <a href="6847.php">George Bosilca: "Re: [OMPI users] Tuned Collective MCA params"</a>
<li><strong>Previous message:</strong> <a href="6845.php">Roberto Fichera: "Re: [OMPI users] Running application with MPI_Comm_spawn() in multithreaded environment"</a>
<li><strong>In reply to:</strong> <a href="6845.php">Roberto Fichera: "Re: [OMPI users] Running application with MPI_Comm_spawn() in multithreaded environment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6848.php">Roberto Fichera: "Re: [OMPI users] Running application with MPI_Comm_spawn() in multithreaded environment"</a>
<li><strong>Reply:</strong> <a href="6848.php">Roberto Fichera: "Re: [OMPI users] Running application with MPI_Comm_spawn() in multithreaded environment"</a>
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
