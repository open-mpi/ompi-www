<?
$subject_val = "Re: [OMPI users] Over committing?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 13 10:34:12 2011" -->
<!-- isoreceived="20110413143412" -->
<!-- sent="Wed, 13 Apr 2011 08:34:03 -0600" -->
<!-- isosent="20110413143403" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Over committing?" -->
<!-- id="06A32C80-F418-4408-B4FA-A490EF57D81D_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="130270405279510173_at_towy" -->
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
<strong>Subject:</strong> Re: [OMPI users] Over committing?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-13 10:34:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16220.php">Rushton Martin: "Re: [OMPI users] Over committing?"</a>
<li><strong>Previous message:</strong> <a href="16218.php">Reuti: "Re: [OMPI users] OMPI monitor each process behavior"</a>
<li><strong>In reply to:</strong> <a href="16217.php">Rushton Martin: "[OMPI users] Over committing?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16220.php">Rushton Martin: "Re: [OMPI users] Over committing?"</a>
<li><strong>Reply:</strong> <a href="16220.php">Rushton Martin: "Re: [OMPI users] Over committing?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 13, 2011, at 8:13 AM, Rushton Martin wrote:
<br>
<p><span class="quotelev1">&gt; The bulk of our compute nodes are 8 cores (twin 4-core IBM x3550-m2).
</span><br>
<span class="quotelev1">&gt; Jobs are submitted by Torque/MOAB.  When run with up to np=8 there is
</span><br>
<span class="quotelev1">&gt; good performance.  Attempting to run with more processors brings
</span><br>
<span class="quotelev1">&gt; problems, specifically if any one node of a group of nodes has all 8
</span><br>
<span class="quotelev1">&gt; cores in use the job hangs.  For instance running with 14 cores (7+7) is
</span><br>
<span class="quotelev1">&gt; fine, but running with 16 (8+8) hangs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; From the FAQs I note the issues of over committing and aggressive
</span><br>
<span class="quotelev1">&gt; scheduling.  Is it possible for mpirun (or orted on the remote nodes) to
</span><br>
<span class="quotelev1">&gt; be blocked from progressing by a fully committed node?  We have a few
</span><br>
<span class="quotelev1">&gt; x3755-m2 machines with 16 cores, and we have detected a similar issue
</span><br>
<span class="quotelev1">&gt; with 16+16.
</span><br>
<p>I'm not entirely sure I understand your notation, but we have never seen an issue when running with fully loaded nodes (i.e., where the number of MPI procs on the node = the number of cores).
<br>
<p>What version of OMPI are you using? Are you binding the procs?
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Martin Rushton
</span><br>
<span class="quotelev1">&gt; HPC System Manager, Weapons Technologies
</span><br>
<span class="quotelev1">&gt; Tel: 01959 514777, Mobile: 07939 219057
</span><br>
<span class="quotelev1">&gt; email: jmrushton_at_[hidden]
</span><br>
<span class="quotelev1">&gt; www.QinetiQ.com
</span><br>
<span class="quotelev1">&gt; QinetiQ - Delivering customer-focused solutions
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please consider the environment before printing this email.
</span><br>
<span class="quotelev1">&gt; This email and any attachments to it may be confidential and are
</span><br>
<span class="quotelev1">&gt; intended solely for the use of the individual to whom it is 
</span><br>
<span class="quotelev1">&gt; addressed. If you are not the intended recipient of this email,
</span><br>
<span class="quotelev1">&gt; you must neither take any action based upon its contents, nor 
</span><br>
<span class="quotelev1">&gt; copy or show it to anyone. Please contact the sender if you 
</span><br>
<span class="quotelev1">&gt; believe you have received this email in error. QinetiQ may 
</span><br>
<span class="quotelev1">&gt; monitor email traffic data and also the content of email for 
</span><br>
<span class="quotelev1">&gt; the purposes of security. QinetiQ Limited (Registered in England
</span><br>
<span class="quotelev1">&gt; &amp; Wales: Company Number: 3796233) Registered office: Cody Technology 
</span><br>
<span class="quotelev1">&gt; Park, Ively Road, Farnborough, Hampshire, GU14 0LX  <a href="http://www.qinetiq.com">http://www.qinetiq.com</a>.
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
<li><strong>Next message:</strong> <a href="16220.php">Rushton Martin: "Re: [OMPI users] Over committing?"</a>
<li><strong>Previous message:</strong> <a href="16218.php">Reuti: "Re: [OMPI users] OMPI monitor each process behavior"</a>
<li><strong>In reply to:</strong> <a href="16217.php">Rushton Martin: "[OMPI users] Over committing?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16220.php">Rushton Martin: "Re: [OMPI users] Over committing?"</a>
<li><strong>Reply:</strong> <a href="16220.php">Rushton Martin: "Re: [OMPI users] Over committing?"</a>
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
