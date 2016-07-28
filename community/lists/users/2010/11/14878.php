<?
$subject_val = "Re: [OMPI users] MPI_Comm_split";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 23 14:32:29 2010" -->
<!-- isoreceived="20101123193229" -->
<!-- sent="Tue, 23 Nov 2010 19:32:23 +0000" -->
<!-- isosent="20101123193223" -->
<!-- name="Bill Rankin" -->
<!-- email="Bill.Rankin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Comm_split" -->
<!-- id="76097BB0C025054786EFAB631C4A2E3C094D4D42_at_MERCMBX02D.na.SAS.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20101123120352.6331_at_web002.roc2.bluetie.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Comm_split<br>
<strong>From:</strong> Bill Rankin (<em>Bill.Rankin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-23 14:32:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14879.php">Hicham Mouline: "Re: [OMPI users] MPI_Comm_split"</a>
<li><strong>Previous message:</strong> <a href="14877.php">Eugene Loh: "Re: [OMPI users] tool for measuring the ping with accuracy"</a>
<li><strong>In reply to:</strong> <a href="14876.php">Hicham Mouline: "[OMPI users] MPI_Comm_split"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14879.php">Hicham Mouline: "Re: [OMPI users] MPI_Comm_split"</a>
<li><strong>Reply:</strong> <a href="14879.php">Hicham Mouline: "Re: [OMPI users] MPI_Comm_split"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hicham:
<br>
<p><span class="quotelev1">&gt; If I have a 256 mpi processes in 1 communicator, am I able to split
</span><br>
<span class="quotelev1">&gt; that communicator, then again split the resulting 2 subgroups, then
</span><br>
<span class="quotelev1">&gt; again the resulting 4 subgroups and so on, until potentially having 256
</span><br>
<span class="quotelev1">&gt; subgroups?
</span><br>
<p>You can.  But as the old saying goes: &quot;just because you *can* do something doesn't necessarily mean you *should* do it.&quot; :-)
<br>
<p>What is your intent in creating all these communicators?
<br>
<p><span class="quotelev1">&gt; Is this insane in terms of performance?
</span><br>
<p>Well, how much &quot;real&quot; work are you doing?  Operations on communicators are collectives, so they are expensive.  However if you do this only once at the beginning of something like a three-week long simulation run then you probably won't notice the impact.
<br>
<p>In any case, I suspect there is a better way.
<br>
<p>-bill
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14879.php">Hicham Mouline: "Re: [OMPI users] MPI_Comm_split"</a>
<li><strong>Previous message:</strong> <a href="14877.php">Eugene Loh: "Re: [OMPI users] tool for measuring the ping with accuracy"</a>
<li><strong>In reply to:</strong> <a href="14876.php">Hicham Mouline: "[OMPI users] MPI_Comm_split"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14879.php">Hicham Mouline: "Re: [OMPI users] MPI_Comm_split"</a>
<li><strong>Reply:</strong> <a href="14879.php">Hicham Mouline: "Re: [OMPI users] MPI_Comm_split"</a>
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
