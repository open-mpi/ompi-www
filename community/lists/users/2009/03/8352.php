<?
$subject_val = "Re: [OMPI users] Any scientific application heavily	using	MPI_Barrier?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  6 08:25:03 2009" -->
<!-- isoreceived="20090306132503" -->
<!-- sent="Fri, 6 Mar 2009 08:24:57 -0500" -->
<!-- isosent="20090306132457" -->
<!-- name="Richard Treumann" -->
<!-- email="treumann_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Any scientific application heavily	using	MPI_Barrier?" -->
<!-- id="OF70CAD125.3D194FA6-ON85257570.005DA642-85257571.0049B224_at_us.ibm.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49AFF694.1060105_at_cs.utah.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Any scientific application heavily	using	MPI_Barrier?<br>
<strong>From:</strong> Richard Treumann (<em>treumann_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-06 08:24:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8353.php">justin oppenheim: "Re: [OMPI users] Run-time problem"</a>
<li><strong>Previous message:</strong> <a href="8351.php">Douglas Guptill: "Re: [OMPI users] threading bug?"</a>
<li><strong>In reply to:</strong> <a href="8320.php">Ganesh: "Re: [OMPI users] Any scientific application heavily using	MPI_Barrier?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8354.php">Ganesh: "Re: [OMPI users] Any scientific application	heavily	using	MPI_Barrier?"</a>
<li><strong>Reply:</strong> <a href="8354.php">Ganesh: "Re: [OMPI users] Any scientific application	heavily	using	MPI_Barrier?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff paraphrased an unnamed source as suggesting that: &quot;any MPI program
<br>
that relies on a barrier for correctness is an incorrect MPI application.&quot;
<br>
.  That is probably too strong.
<br>
<p>How about this assertion?
<br>
<p>If there are no wildcard receives - every MPI_Barrier call is semantically
<br>
irrelevant.
<br>
<p>It is the exception that tests the rule.
<br>
<p>If someone can provide an example of an MPI_Barrier that is required by an
<br>
application based on MPI  communication and that does not use wildcard
<br>
receive I am interested in seeing it. I do not know of a counter example
<br>
but also do not have proof of the assertion I place before the group.
<br>
<p>No fair using examples with non-MPI interactions among tasks or with job
<br>
steering by asynchronous triggers from outside the job. I can construct
<br>
them myself.
<br>
<p>MPI_WIN_FENCE is semantically required in some situations and examples that
<br>
show a semantic need for MPI_WIN_FENCE do not count against the assertion.
<br>
<p>I have appreciated the descriptions from Gus,  Asjley and others of some
<br>
non-symantic justifications for an MPI_Barrier.
<br>
<p><p>Dick Treumann  -  MPI Team
<br>
IBM Systems &amp; Technology Group
<br>
Dept X2ZA / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
<br>
Tele (845) 433-7846         Fax (845) 433-8363
<br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8352/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8353.php">justin oppenheim: "Re: [OMPI users] Run-time problem"</a>
<li><strong>Previous message:</strong> <a href="8351.php">Douglas Guptill: "Re: [OMPI users] threading bug?"</a>
<li><strong>In reply to:</strong> <a href="8320.php">Ganesh: "Re: [OMPI users] Any scientific application heavily using	MPI_Barrier?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8354.php">Ganesh: "Re: [OMPI users] Any scientific application	heavily	using	MPI_Barrier?"</a>
<li><strong>Reply:</strong> <a href="8354.php">Ganesh: "Re: [OMPI users] Any scientific application	heavily	using	MPI_Barrier?"</a>
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
