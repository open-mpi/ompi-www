<?
$subject_val = "Re: [OMPI users] Anyscientific	application	heavily	using	MPI_Barrier?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 24 18:42:41 2009" -->
<!-- isoreceived="20090824224241" -->
<!-- sent="Mon, 24 Aug 2009 15:43:11 -0700" -->
<!-- isosent="20090824224311" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Anyscientific	application	heavily	using	MPI_Barrier?" -->
<!-- id="4A93177F.2060202_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="OFBD2D2BE7.5EC8BF4B-ON8525761C.0072B2F6-8525761C.00735680_at_us.ibm.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Anyscientific	application	heavily	using	MPI_Barrier?<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-24 18:43:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10479.php">Ake Sandgren: "[OMPI users] Need help with tuning of IB for OpenMPI 1.3.3"</a>
<li><strong>Previous message:</strong> <a href="10477.php">jimkress_58: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
<li><strong>In reply to:</strong> <a href="10476.php">Richard Treumann: "Re: [OMPI users] Anyscientific	application	heavily	using	MPI_Barrier?"</a>
<!-- nextthread="start" -->
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
Richard Treumann wrote:
<blockquote
 cite="midOFBD2D2BE7.5EC8BF4B-ON8525761C.0072B2F6-8525761C.00735680@us.ibm.com"
 type="cite">
  <p>Guess I should have kept quiet a bit longer. As I recall we had
already seen a counter example to Jeff's stronger statement and that
motivated my narrower one.<br>
  </p>
  <ul>
    <ul>
      <ul>
        <ul>
          <b><font size="4">If there are no wildcard receives - every
MPI_Barrier call is semantically irrelevant.</font></b>
        </ul>
      </ul>
    </ul>
  </ul>
Do you have a counter example for my more cautious assertion?</blockquote>
No, but my momentary interest included wildcards, and it seemed to me
that, as a corollary to your claim, that if there are wildcards, then
Barriers could be relevent.&nbsp; And my example was "proof by
demonstration".<br>
<blockquote
 cite="midOFBD2D2BE7.5EC8BF4B-ON8525761C.0072B2F6-8525761C.00735680@us.ibm.com"
 type="cite">( I had already granted that a correct MPI program could
be made incorrect with a barrier and the barrier that broke it would
have to be considered be "semantically relevant". I would reword the
statement with that in mind if I were to offer it up again. )<tt><br>
  </tt></blockquote>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10479.php">Ake Sandgren: "[OMPI users] Need help with tuning of IB for OpenMPI 1.3.3"</a>
<li><strong>Previous message:</strong> <a href="10477.php">jimkress_58: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
<li><strong>In reply to:</strong> <a href="10476.php">Richard Treumann: "Re: [OMPI users] Anyscientific	application	heavily	using	MPI_Barrier?"</a>
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
