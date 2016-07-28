<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep  6 08:50:52 2007" -->
<!-- isoreceived="20070906125052" -->
<!-- sent="Thu, 06 Sep 2007 06:50:43 -0600" -->
<!-- isosent="20070906125043" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] [RFC] Exit without finalize" -->
<!-- id="C30553C3.AB68%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-06 08:50:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2290.php">Gleb Natapov: "Re: [OMPI devel] [devel-core] [RFC] Exit without finalize"</a>
<li><strong>Previous message:</strong> <a href="2288.php">Ralph Castain: "Re: [OMPI devel] thread model"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2290.php">Gleb Natapov: "Re: [OMPI devel] [devel-core] [RFC] Exit without finalize"</a>
<li><strong>Reply:</strong> <a href="2290.php">Gleb Natapov: "Re: [OMPI devel] [devel-core] [RFC] Exit without finalize"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT:   Decide upon how to handle MPI applications where one or more
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;processes exit without calling MPI_Finalize
<br>
<p>WHY:    Some applications can abort via an exit call instead of
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;calling MPI_Abort when a library (or something else) calls
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;exit. This situation is outside a user's control, so they
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cannot fix it.
<br>
<p>WHERE:  Refer to ticket #1144 - code changes are TBD
<br>
<p>WHEN:   Up to the group
<br>
<p>TIMEOUT: N/A
<br>
<p>============================================================
<br>
A user has reported (see ticket #1144) a situation where their fortran
<br>
library can call &quot;exit&quot; on a process in their application. This causes Open
<br>
MPI to &quot;hang&quot; when the remaining processes reach MPI_Finalize as we have a
<br>
barrier function at the beginning of that procedure.
<br>
<p>There are several possible ways we could resolve this problem, all of which
<br>
have their own issues - here are two that immediately come to mind:
<br>
<p>(a) the RTE could detect that a process exit'd without calling finalize, and
<br>
instigate an abort sequence. This would require two things: (1) inserting
<br>
something into mpi_init that notifies the RTE &quot;I am an MPI process&quot; so the
<br>
RTE knows to look for finalize; and (2) inserting a call to notify the RTE
<br>
that we have indeed called finalize. We have both of these right now in
<br>
ORTE, but we had agreed that we were to reduce the RTE's involvement in MPI
<br>
- hence, the revised ORTE no longer has such detailed knowledge of an MPI
<br>
process' state. I could reinsert it, of course - but that does seem to go
<br>
away from what the MPI community here had requested. It also introduces
<br>
possible race conditions, though we may be able to control those to some
<br>
extent, and we couldn't provide that coverage in all environments (e.g.,
<br>
Cray).
<br>
<p>(b) we could remove the barrier in MPI_Finalize. While this would resolve
<br>
this particular user's cited problem, I'm not convinced it would really
<br>
solve the overall problem. For example, if one proc calls exit and the
<br>
others enter a collective operation, I believe we will still hang. In
<br>
addition, it was my understanding that the barrier in finalize was required
<br>
to ensure that this exact scenario did not occur - that all procs remained
<br>
alive until everyone was done just to ensure that a collective operation
<br>
would not hang. Is this not true?
<br>
<p>Does the general community feel we should do anything here, or is this a
<br>
&quot;bug&quot; that should be fixed by the entity calling &quot;exit&quot;? I should note that
<br>
it actually is bad behavior (IMHO) for any library to call &quot;exit&quot; - but
<br>
then, we do that in some situations too, so perhaps we shouldn't cast
<br>
stones!
<br>
<p>Any suggested solutions or comments on whether or not we should do anything
<br>
would be appreciated.
<br>
<p>Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2290.php">Gleb Natapov: "Re: [OMPI devel] [devel-core] [RFC] Exit without finalize"</a>
<li><strong>Previous message:</strong> <a href="2288.php">Ralph Castain: "Re: [OMPI devel] thread model"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2290.php">Gleb Natapov: "Re: [OMPI devel] [devel-core] [RFC] Exit without finalize"</a>
<li><strong>Reply:</strong> <a href="2290.php">Gleb Natapov: "Re: [OMPI devel] [devel-core] [RFC] Exit without finalize"</a>
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
