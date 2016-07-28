<?
$subject_val = "Re: [OMPI users] MPI_Comm_split";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 23 15:56:31 2010" -->
<!-- isoreceived="20101123205631" -->
<!-- sent="Tue, 23 Nov 2010 20:56:17 -0000" -->
<!-- isosent="20101123205617" -->
<!-- name="Hicham Mouline" -->
<!-- email="hicham_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Comm_split" -->
<!-- id="004201cb8b50$dfc11a50$9f434ef0$_at_org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="76097BB0C025054786EFAB631C4A2E3C094D4D42_at_MERCMBX02D.na.SAS.com" -->
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
<strong>From:</strong> Hicham Mouline (<em>hicham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-23 15:56:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14880.php">Bill Rankin: "Re: [OMPI users] MPI_Comm_split"</a>
<li><strong>Previous message:</strong> <a href="14878.php">Bill Rankin: "Re: [OMPI users] MPI_Comm_split"</a>
<li><strong>In reply to:</strong> <a href="14878.php">Bill Rankin: "Re: [OMPI users] MPI_Comm_split"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14880.php">Bill Rankin: "Re: [OMPI users] MPI_Comm_split"</a>
<li><strong>Reply:</strong> <a href="14880.php">Bill Rankin: "Re: [OMPI users] MPI_Comm_split"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt; Behalf Of Bill Rankin
</span><br>
<span class="quotelev1">&gt; Sent: 23 November 2010 19:32
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] MPI_Comm_split
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hicham:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; If I have a 256 mpi processes in 1 communicator, am I able to split
</span><br>
<span class="quotelev2">&gt; &gt; that communicator, then again split the resulting 2 subgroups, then
</span><br>
<span class="quotelev2">&gt; &gt; again the resulting 4 subgroups and so on, until potentially having
</span><br>
<span class="quotelev1">&gt; 256
</span><br>
<span class="quotelev2">&gt; &gt; subgroups?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can.  But as the old saying goes: &quot;just because you *can* do
</span><br>
<span class="quotelev1">&gt; something doesn't necessarily mean you *should* do it.&quot; :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What is your intent in creating all these communicators?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Is this insane in terms of performance?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Well, how much &quot;real&quot; work are you doing?  Operations on communicators
</span><br>
<span class="quotelev1">&gt; are collectives, so they are expensive.  However if you do this only
</span><br>
<span class="quotelev1">&gt; once at the beginning of something like a three-week long simulation
</span><br>
<span class="quotelev1">&gt; run then you probably won't notice the impact.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In any case, I suspect there is a better way.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -bill
</span><br>
<p>I have need for a parallel parameter sweep. I have arguments x0 to x9 say of
<br>
a function.
<br>
I need to evaluate this function for every acceptable combination of
<br>
x0,...x9.
<br>
This list of acceptable combinations forms what I can view as a tree:
<br>
. under the root node, all possible values of x0 (say there are 10 of them
<br>
x0_0 to x0_9)
<br>
. under each of these nodes, all possible values of x1 that agree with the
<br>
args defined so far, for .e.g
<br>
if x1_0 is not possible with x0_0, then it's not part of the tree...
<br>
. and so on until reaching the leaf nodes. At those nodes, I evaluate the
<br>
function and I want the global maximum and/or minimum.
<br>
<p>the order of magnitude is 128 for the depth of the tree, and 100 possible
<br>
values for each x. 
<br>
each eval takes a couple of ms though.
<br>
<p>I thought this facility of splitting communicators maps nicely the nature of
<br>
my problem.
<br>
<p>what do you think?
<br>
I'm actually not exactly sure how I'm gonna do it, but wished to have an
<br>
opinion about whether it's just crazy
<br>
<p>rds,
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14880.php">Bill Rankin: "Re: [OMPI users] MPI_Comm_split"</a>
<li><strong>Previous message:</strong> <a href="14878.php">Bill Rankin: "Re: [OMPI users] MPI_Comm_split"</a>
<li><strong>In reply to:</strong> <a href="14878.php">Bill Rankin: "Re: [OMPI users] MPI_Comm_split"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14880.php">Bill Rankin: "Re: [OMPI users] MPI_Comm_split"</a>
<li><strong>Reply:</strong> <a href="14880.php">Bill Rankin: "Re: [OMPI users] MPI_Comm_split"</a>
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
