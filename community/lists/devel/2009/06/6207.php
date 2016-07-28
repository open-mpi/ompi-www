<?
$subject_val = "[OMPI devel] Hang in collectives involving shared memory";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  9 14:40:07 2009" -->
<!-- isoreceived="20090609184007" -->
<!-- sent="Tue, 9 Jun 2009 12:40:02 -0600" -->
<!-- isosent="20090609184002" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Hang in collectives involving shared memory" -->
<!-- id="71d2d8cc0906091140j1752d813h7dd7a2291433fc29_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] Hang in collectives involving shared memory<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-09 14:40:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6208.php">Sylvain Jeaugey: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
<li><strong>Previous message:</strong> <a href="6206.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6210.php">Ashley Pittman: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
<li><strong>Reply:</strong> <a href="6210.php">Ashley Pittman: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks
<br>
<p>As mentioned in today's telecon, we at LANL are continuing to see hangs when
<br>
running even small jobs that involve shared memory in collective operations.
<br>
This has been the topic of discussion before, but I bring it up again
<br>
because (a) the problem is beginning to become epidemic across our
<br>
application codes, and (b) repeated testing provides more info and (most
<br>
importantly) confirms that this problem -does not- occur under 1.2.x - it is
<br>
strictly a 1.3.2 (we haven't checked to see if it is in 1.3.0 or 1.3.1)
<br>
problem.
<br>
<p>The condition is caused when the application performs a loop over collective
<br>
operations such as MPI_Allgather, MPI_Reduce, and MPI_Bcast. This list is
<br>
not intended to be exhaustive, but only represents the ones for which we
<br>
have solid and repeatable data. The symptoms are a &quot;hanging&quot; job, typically
<br>
(but not always!) associated with fully-consumed memory. The loops do not
<br>
have to involve substantial amounts of memory (the Bcast loop hangs after
<br>
moving a whole 32Mbytes, total), nor involve high loop counts. They only
<br>
have to repeatedly call the collective.
<br>
<p>Disabling the shared memory BTL is enough to completely resolve the problem.
<br>
However, this creates an undesirable performance penalty we would like to
<br>
avoid, if possible.
<br>
<p>Our current solution is to use the &quot;sync&quot; collective to occasionally insert
<br>
an MPI_Barrier into the code &quot;behind the scenes&quot; - i.e., to add an
<br>
MPI_Barrier call every N number of calls to &quot;problem&quot; collectives. The
<br>
argument in favor of this was that the hang is caused by consuming memory
<br>
due to &quot;unexpected messages&quot;, caused principally by the root process in the
<br>
collective running slower than other procs. Thus, the notion goes, the root
<br>
process continues to fall further and further behind, consuming ever more
<br>
memory until it simply cannot progress. Adding the barrier operation forced
<br>
the other procs to &quot;hold&quot; until the root process could catch up, thereby
<br>
relieving the memory backlog.
<br>
<p>The sync collective has worked for us, but we are now finding a very
<br>
disconcerting behavior - namely, that the precise value of N required to
<br>
avoid hanging (a) is very, very sensitive and can still let the app hang
<br>
even by changing the value by small amounts, (b) flunctuates between runs on
<br>
an unpredictable basis, and (c) can be different for different collectives.
<br>
<p>These new problems surfaced this week when we found that a job that
<br>
previously ran fine with one value of coll_sync_barrier_before suddenly hung
<br>
when a loop over MPI_Bcast was added to the code. Further investigation has
<br>
found that the value of N required to make the new loop work is
<br>
significantly different than the prior value that made Allgather work,
<br>
creating an exhaustive search for a &quot;sweet spot&quot; for N.
<br>
<p>Clearly, as codes grow in complexity, this simply is not going to work.
<br>
<p>It seems to me that we have to begin investigating -why- the 1.3.2 code is
<br>
encountering this problem whereas the 1.2.x code is not. From our rough
<br>
measurements, there is a some speed difference between the two releases, so
<br>
perhaps we are now getting fast enough to create the problem - I don't think
<br>
we know enough yet to really claim this is true. At this time, we really
<br>
don't know -why- one process is running slow, or even if it is -always- the
<br>
root process that is doing so...nor have we confirmed (to my knowledge) that
<br>
our original analysis of the problem is correct!
<br>
<p>We would appreciate any help with this problem. I gathered from today's
<br>
telecon that others are also encountering this, so perhaps there is enough
<br>
general pain to stimulate a team effort to resolve it!
<br>
<p>Thanks
<br>
Ralph
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6207/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6208.php">Sylvain Jeaugey: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
<li><strong>Previous message:</strong> <a href="6206.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6210.php">Ashley Pittman: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
<li><strong>Reply:</strong> <a href="6210.php">Ashley Pittman: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
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
