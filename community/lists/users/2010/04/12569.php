<?
$subject_val = "Re: [OMPI users] excluding hosts";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  6 18:29:39 2010" -->
<!-- isoreceived="20100406222939" -->
<!-- sent="Tue, 6 Apr 2010 16:29:30 -0600" -->
<!-- isosent="20100406222930" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] excluding hosts" -->
<!-- id="55177EF6-F995-42C1-9696-9CD9B3CC3927_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4BBBA78A.6090909_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] excluding hosts<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-06 18:29:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12570.php">David Turner: "Re: [OMPI users] excluding hosts"</a>
<li><strong>Previous message:</strong> <a href="12568.php">Oliver Geisler: "Re: [OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>In reply to:</strong> <a href="12567.php">David Turner: "[OMPI users] excluding hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12570.php">David Turner: "Re: [OMPI users] excluding hosts"</a>
<li><strong>Reply:</strong> <a href="12570.php">David Turner: "Re: [OMPI users] excluding hosts"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi David
<br>
<p>Are you using a scheduler of some kind? If so, you can add this to your default mca param file:
<br>
<p>orte_allocation_required = 1
<br>
<p>This will prevent anyone running without having an allocation. You can also set
<br>
<p>rmaps_base_no_schedule_local = 1
<br>
<p>which tells mpirun not to schedule any MPI procs on the local node.
<br>
<p>Does that solve the problem?
<br>
Ralph
<br>
<p><p>On Apr 6, 2010, at 3:28 PM, David Turner wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Our cluster has a handful of login nodes, and then a bunch of
</span><br>
<span class="quotelev1">&gt; compute nodes.  OpenMPI is installed in a global file system
</span><br>
<span class="quotelev1">&gt; visible from both sets of nodes.  This means users can type
</span><br>
<span class="quotelev1">&gt; &quot;mpirun&quot; from an interactive prompt, and quickly oversubscribe
</span><br>
<span class="quotelev1">&gt; the login node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, is there a way to explicitly exclude hosts from consideration
</span><br>
<span class="quotelev1">&gt; for mpirun?  To prevent (what is usually accidental) running
</span><br>
<span class="quotelev1">&gt; MPI apps on our login nodes?  Thanks!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; David Turner
</span><br>
<span class="quotelev1">&gt; User Services Group        email: dpturner_at_[hidden]
</span><br>
<span class="quotelev1">&gt; NERSC Division             phone: (510) 486-4027
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley Lab        fax: (510) 486-4316
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
<li><strong>Next message:</strong> <a href="12570.php">David Turner: "Re: [OMPI users] excluding hosts"</a>
<li><strong>Previous message:</strong> <a href="12568.php">Oliver Geisler: "Re: [OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>In reply to:</strong> <a href="12567.php">David Turner: "[OMPI users] excluding hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12570.php">David Turner: "Re: [OMPI users] excluding hosts"</a>
<li><strong>Reply:</strong> <a href="12570.php">David Turner: "Re: [OMPI users] excluding hosts"</a>
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
