<?
$subject_val = "[OMPI devel] RTE issue I. Support for non-MPI jobs";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  4 10:12:09 2007" -->
<!-- isoreceived="20071204151209" -->
<!-- sent="Tue, 04 Dec 2007 08:11:54 -0700" -->
<!-- isosent="20071204151154" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] RTE issue I. Support for non-MPI jobs" -->
<!-- id="C37ABC4A.B782%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] RTE issue I. Support for non-MPI jobs<br>
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-04 10:11:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2710.php">Ralph H Castain: "[OMPI devel] RTE Issue II: Interaction between the ROUTED and GRPCOMM frameworks"</a>
<li><strong>Previous message:</strong> <a href="2708.php">Ralph H Castain: "[OMPI devel] RTE issues: scalability &amp; complexity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2715.php">Jeff Squyres: "Re: [OMPI devel] RTE issue I. Support for non-MPI jobs"</a>
<li><strong>Reply:</strong> <a href="2715.php">Jeff Squyres: "Re: [OMPI devel] RTE issue I. Support for non-MPI jobs"</a>
<li><strong>Reply:</strong> <a href="2718.php">Rolf.Vandevaart_at_[hidden]: "Re: [OMPI devel] RTE issue I. Support for non-MPI jobs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I. Support for non-MPI jobs
<br>
Considerable complexity currently exists in ORTE because of the stipulation
<br>
in our first requirements document that users be able to mpirun non-MPI jobs
<br>
- i.e., that we support such calls as &quot;mpirun -n 100 hostname&quot;. This creates
<br>
a situation, however, where the RTE cannot know if the application will call
<br>
MPI_Init (or at least orte_init), which has significant implications to the
<br>
RTE's architecture. For example, during the launch of the application's
<br>
processes, the RTE cannot go into any form of blocking receive while waiting
<br>
for the procs to report a successful startup as this won't occur for
<br>
execution of something like &quot;hostname&quot;.
<br>
<p>Jeff has noted that support for non-MPI jobs is not something most (all?)
<br>
MPIs currently provide, nor something that users are likely to exploit as
<br>
they can more easily just &quot;qsub hostname&quot; (or the equivalent for that
<br>
environment). While nice for debugging purposes, therefore, it isn't clear
<br>
that supporting non-MPI jobs is worth the increased code complexity and
<br>
fragility.
<br>
<p>In addition, the fact that we do not know if a job will call Init limits our
<br>
ability to do collective communications within the RTE, and hence our
<br>
scalability - see the note on that specific subject for further discussion
<br>
on this area.
<br>
<p>This would be a &quot;regression&quot; in behavior, though, so the questions for the
<br>
community are:
<br>
<p>(a) do we want to retain the feature to run non-MPI jobs with mpirun as-is
<br>
(and accept the tradeoffs, including the one described below in II)?
<br>
<p>(b) do we provide a flag to mpirun (perhaps adding the distinction that
<br>
&quot;orterun&quot; must be used for non-MPI jobs?) to indicate &quot;this is NOT an MPI
<br>
job&quot; so we can act accordingly?
<br>
<p>(c) simply eliminate support for non-MPI jobs?
<br>
<p>(d) other suggestions?
<br>
<p>Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2710.php">Ralph H Castain: "[OMPI devel] RTE Issue II: Interaction between the ROUTED and GRPCOMM frameworks"</a>
<li><strong>Previous message:</strong> <a href="2708.php">Ralph H Castain: "[OMPI devel] RTE issues: scalability &amp; complexity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2715.php">Jeff Squyres: "Re: [OMPI devel] RTE issue I. Support for non-MPI jobs"</a>
<li><strong>Reply:</strong> <a href="2715.php">Jeff Squyres: "Re: [OMPI devel] RTE issue I. Support for non-MPI jobs"</a>
<li><strong>Reply:</strong> <a href="2718.php">Rolf.Vandevaart_at_[hidden]: "Re: [OMPI devel] RTE issue I. Support for non-MPI jobs"</a>
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
