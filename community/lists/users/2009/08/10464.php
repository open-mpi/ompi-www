<?
$subject_val = "Re: [OMPI users] Any scientific	application	heavily	using	MPI_Barrier?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 24 13:03:00 2009" -->
<!-- isoreceived="20090824170300" -->
<!-- sent="Mon, 24 Aug 2009 10:03:32 -0700" -->
<!-- isosent="20090824170332" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Any scientific	application	heavily	using	MPI_Barrier?" -->
<!-- id="4A92C7E4.5060301_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49B16602.5080106_at_cs.utah.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Any scientific	application	heavily	using	MPI_Barrier?<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-24 13:03:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10465.php">matthew.piehl_at_[hidden]: "[OMPI users] Bug? openMPI interpretation of SLURM environment variables"</a>
<li><strong>Previous message:</strong> <a href="10463.php">Yann JOBIC: "Re: [OMPI users] Help: orted: command not found."</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/03/8354.php">Ganesh: "Re: [OMPI users] Any scientific application	heavily	using	MPI_Barrier?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10469.php">Jeff Squyres: "Re: [OMPI users] Anyscientific	application	heavily	using	MPI_Barrier?"</a>
<li><strong>Reply:</strong> <a href="10469.php">Jeff Squyres: "Re: [OMPI users] Anyscientific	application	heavily	using	MPI_Barrier?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
  <title></title>
</head>
<body bgcolor="#ffffff" text="#000000">
Going back to this thread from earlier this calendar year...<br>
<br>
Ganesh wrote:
<blockquote cite="mid49B16602.5080106@cs.utah.edu" type="cite">
  <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
  <title></title>
Hi Dick,<br>
  <blockquote
 cite="mid:OF70CAD125.3D194FA6-ON85257570.005DA642-85257571.0049B224@us.ibm.com"
 type="cite">
    <p>Jeff paraphrased an unnamed source as suggesting that<tt>: "any
MPI program that relies on a barrier for correctness is an incorrect
MPI application.</tt>" . That is probably too strong.<br>
    <br>
How about this assertion?<br>
    <br>
    <b>If there are no wildcard receives - every MPI_Barrier call is
semantically irrelevant.</b><br>
    </p>
  </blockquote>
This depends on what 'semantically irrelevant' means.&nbsp; It is clear that
one can write a wildcard-free program that will deadlock if you insert
a barrier incorrectly, but that removing the barrier will avoid the
deadlock. (Imagine P1 doing a Send; Barrier and P2 doing a Barrier;
Receive(nonwildcard)).<br>
  <br>
So a wildcard-free program may still deadlock (semantically noticeable
effect) by having barriers. I'm sure you did not mean to include this
degenerate nit-pick - but yes otherwise you are right!</blockquote>
And similarly (to disprove Jeff's original assertion), if there are
wildcards, then an MPI_Barrier call could be semantically relevent.<br>
<br>
E.g., let's say P0 and P1 each send a message to P2, both using the
same tag and communicator.&nbsp; Let's say P2 does two receives on that
communicator and tag, using a wildcard source.&nbsp; So, the messages could
be received in either order.&nbsp; One could introduce barriers to order the
messages.&nbsp; E.g.,<br>
<br>
P0:<br>
&nbsp; Send<br>
&nbsp; Barrier<br>
P1:<br>
&nbsp; Barrier<br>
&nbsp; Send<br>
P2:<br>
&nbsp; Recv<br>
&nbsp; Barrier<br>
&nbsp; Recv<br>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10465.php">matthew.piehl_at_[hidden]: "[OMPI users] Bug? openMPI interpretation of SLURM environment variables"</a>
<li><strong>Previous message:</strong> <a href="10463.php">Yann JOBIC: "Re: [OMPI users] Help: orted: command not found."</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/03/8354.php">Ganesh: "Re: [OMPI users] Any scientific application	heavily	using	MPI_Barrier?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10469.php">Jeff Squyres: "Re: [OMPI users] Anyscientific	application	heavily	using	MPI_Barrier?"</a>
<li><strong>Reply:</strong> <a href="10469.php">Jeff Squyres: "Re: [OMPI users] Anyscientific	application	heavily	using	MPI_Barrier?"</a>
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
