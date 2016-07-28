<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 23 13:52:46 2006" -->
<!-- isoreceived="20060823175246" -->
<!-- sent="Wed, 23 Aug 2006 11:52:41 -0600" -->
<!-- isosent="20060823175241" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Upcoming: Major ORTE changes" -->
<!-- id="C111F209.407A%rhc_at_lanl.gov" -->
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
<strong>Date:</strong> 2006-08-23 13:52:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1010.php">Adrian Knoth: "[OMPI devel] First IPv6 communication with ORTE"</a>
<li><strong>Previous message:</strong> <a href="1008.php">Brian Barrett: "Re: [OMPI devel] exit declaration in configure tests"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yo all
<br>
<p>There has been a bit of discussion about this on the core developers list
<br>
and on telecons, but I felt that perhaps I should provide a more detailed
<br>
warning to the broader developer community.
<br>
<p>In the next few weeks, there will be some major revisions submitted to the
<br>
Open MPI trunk on the OpenRTE (ORTE) side of the code base. These will
<br>
primarily address three known issues:
<br>
<p>1. Scalability - the test code that was run on Sandia's Thunderbird cluster
<br>
a few weeks ago utilized a stage gate and trigger to help speed up launch of
<br>
the OpenRTE daemons on backend nodes. In addition, some code cleanup
<br>
occurred in the TM launcher. These improvements yielded a positive result,
<br>
and they will be brought over to the trunk with these changes.
<br>
<p>2. MAD (MPI_Abort Disease) - we have encountered a problem whereby daemons
<br>
are left &quot;spinning&quot; wildly when MPI processes call MPI_Abort. This is
<br>
symptomatic of a circular logic loop that has crept into the abort handling
<br>
section of the OpenRTE code base. These changes will resolve that problem.
<br>
<p>3. Daemon timeout on start - currently, we will wait forever for all daemons
<br>
to start because we have no way to detect that they failed in some
<br>
environments. We are adding a timeout mechanism (adjustable via MCA param,
<br>
of course) that will allow orte/mpirun to give up after some period of time.
<br>
<p>As part of these revisions, I am working to bring the code base another step
<br>
closer to OpenRTE 2.0 compatibility. As a result, some of the changes may
<br>
appear unnecessary in terms of fixing the three issues noted above. I
<br>
apologize in advance for that, but beg your indulgence as these changes will
<br>
make eventual integration with 2.0 a little easier.
<br>
<p>The upcoming revisions will involve changes to the RDS, RAS, PLS, ERRMGR,
<br>
RMGR, and SMR frameworks in the form of API changes. Most of these changes
<br>
are not massive, but impact a number of places in the code. However,
<br>
significant change will occur in several places:
<br>
<p>1. the ERRMGR will see significant change in actual behavior as we clarify
<br>
its role. New components to differentiate behavior between head node
<br>
processes (HNPs), daemons (our orteds), and application processes are being
<br>
created.
<br>
<p>2. communications to the OpenRTE daemons (orted's) will no longer take place
<br>
via individual frameworks but will be concentrated through the existing
<br>
orted non-blocking receive function. This will help us break the circular
<br>
logic loop and (hopefully) avoid re-creating it in the future.
<br>
<p>3. the PLS &quot;fork&quot; component really was the orted's private launcher for
<br>
local processes. It has been moved to the orted's directory and renamed to
<br>
indicate that fact. Although there were good reasons to do this before, it
<br>
could not previously be done due to the built-in calls to the PLS - however,
<br>
with the new clarification of roles, this can now be cleanly done.
<br>
<p>4. ALL resource management functionality has been constrained to the HNP.
<br>
Non-HNP processes (including orteds and application processes) solely
<br>
communicate their requests back to the HNP for execution. In addition, in
<br>
accordance with the OpenRTE 2.0 design, all resource management frameworks
<br>
(i.e., RDS, RAS, RMAPS, and PLS) are now publicly available (i.e., not just
<br>
through the RMGR).
<br>
<p>5. the RMAPS framework has been changed to support multiple concurrent
<br>
mapping components, and a parameter added to the &quot;map&quot; API so the caller can
<br>
specify which one should be used for this specific map command.
<br>
<p>For those of you with components in the affected frameworks, I am going
<br>
through them and making changes to keep them compatible with the revisions.
<br>
Again, these aren't major, but will require some checking to ensure they are
<br>
correct, especially for those components that will not compile unless in a
<br>
specific environment.
<br>
<p>I hope to complete this work in the next 2-3 weeks. The work is taking place
<br>
on the tmp/mad branch - those of you with access to it are welcome to keep
<br>
track of what I am doing.
<br>
<p>Prior to committing this massive a change to the trunk, I will be performing
<br>
testing on various platforms. I will also be contacting key people with
<br>
access to platforms beyond my domain to ask their help in testing the branch
<br>
in those environments.
<br>
<p>And yes - I WILL send out a note alerting people to the upcoming commit
<br>
prior to throwing it into the trunk!
<br>
<p>Feel free to contact me with any comments, suggestions, or concerns.
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1010.php">Adrian Knoth: "[OMPI devel] First IPv6 communication with ORTE"</a>
<li><strong>Previous message:</strong> <a href="1008.php">Brian Barrett: "Re: [OMPI devel] exit declaration in configure tests"</a>
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
