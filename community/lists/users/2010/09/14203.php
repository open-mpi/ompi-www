<?
$subject_val = "Re: [OMPI users] MPI_Reduce performance";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  9 15:33:07 2010" -->
<!-- isoreceived="20100909193307" -->
<!-- sent="Thu, 09 Sep 2010 12:32:20 -0700" -->
<!-- isosent="20100909193220" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Reduce performance" -->
<!-- id="4C893644.7060505_at_oracle.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="000201cb504e$d7d96190$3c45efc3_at_alexg" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Reduce performance<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-09 15:32:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14204.php">Ashley Pittman: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>Previous message:</strong> <a href="14202.php">Alex A. Granovsky: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>In reply to:</strong> <a href="14202.php">Alex A. Granovsky: "Re: [OMPI users] MPI_Reduce performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14209.php">Alex A. Granovsky: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>Reply:</strong> <a href="14209.php">Alex A. Granovsky: "Re: [OMPI users] MPI_Reduce performance"</a>
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
Alex A. Granovsky wrote:
<blockquote cite="mid000201cb504e$d7d96190$3c45efc3@alexg" type="cite">
  <meta content="text/html; charset=iso-8859-1"
 http-equiv="Content-Type">
  <meta content="MSHTML 5.00.3314.2100" name="GENERATOR">
  <style></style>
  <div><font face="Arial" size="2"></font>
  <div><font face="Arial" size="2"><font face="Arial" size="2">Isn't in
evident from the theory of random processes and probability theory that&nbsp;</font></font><font
 face="Arial" size="2">in the limit of infinitely </font></div>
  <div><font face="Arial" size="2">large cluster and parallel process, </font><font
 face="Arial" size="2">the probability of deadlocks </font><font
 face="Arial" size="2">with current implementation is unfortunately </font></div>
  <div><font face="Arial" size="2">quite a finite quantity and in limit
approaches to unity regardless on any particular details of the program.</font></div>
  </div>
</blockquote>
No, not at all.&nbsp; Consider simulating a physical volume.&nbsp; Each process
is assigned to some small subvolume.&nbsp; It updates conditions locally,
but on the surface of its simulation subvolume it needs information
from "nearby" processes.&nbsp; It cannot proceed along the surface until it
has that neighboring information.&nbsp; Its neighbors, in turn, cannot
proceed until their neighbors have reached some point.&nbsp; Two distant
processes can be quite out of step with one another, but only by some
bounded amount.&nbsp; At some point, a leading process has to wait for
information from a laggard to propagate to it.&nbsp; All processes proceed
together, in some loose lock-step fashion.&nbsp; Many applications behave in
this fashion.&nbsp; Actually, in many applications, the synchronization is
tightened in that "physics" is made to propagate faster than
neighbor-by-neighbor.<br>
<br>
As the number of processes increases, the laggard might seem relatively
slower in comparison, but that isn't deadlock.<br>
<br>
As the size of the cluster increases, the chances of a system component
failure increase, but that also is a different matter.<br>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14204.php">Ashley Pittman: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>Previous message:</strong> <a href="14202.php">Alex A. Granovsky: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>In reply to:</strong> <a href="14202.php">Alex A. Granovsky: "Re: [OMPI users] MPI_Reduce performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14209.php">Alex A. Granovsky: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>Reply:</strong> <a href="14209.php">Alex A. Granovsky: "Re: [OMPI users] MPI_Reduce performance"</a>
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
