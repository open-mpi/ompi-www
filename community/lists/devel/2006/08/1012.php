<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug 24 16:16:30 2006" -->
<!-- isoreceived="20060824201630" -->
<!-- sent="Thu, 24 Aug 2006 14:16:26 -0600" -->
<!-- isosent="20060824201626" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="[OMPI devel] LANL ORTE todo / milestones" -->
<!-- id="1156450586.13391.44.camel_at_boxtop.lanl.gov" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-08-24 16:16:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1013.php">Ralph Castain: "[OMPI devel] OpenRTE and Threads"</a>
<li><strong>Previous message:</strong> <a href="1011.php">Dave Rogers: "[OMPI devel] Buffer Overflow Error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all -
<br>
<p>LANL had an internal meeting yesterday trying to classify a number of
<br>
issues we're having with the run-time environment for Open MPI and how
<br>
to best prioritize team resources.  We thought it would be good to
<br>
both share the list (with priorities) with the group and to ask the
<br>
group if there were other issues that need to be addressed (either
<br>
short or long term).  We've categorized the issues as performance
<br>
related, robustness, and feature / platform support.  The numbers are
<br>
the current priority on our list, and items within a category are
<br>
sorted by priority.
<br>
<p><p>PERFORMANCE:
<br>
<p>5) 50% scale factor in process startup
<br>
<p>&nbsp;&nbsp;&nbsp;Start-up of non-MPI jobs has a strange bend in the timing curve
<br>
&nbsp;&nbsp;&nbsp;when the number of processes we are trying to start is greater than
<br>
&nbsp;&nbsp;&nbsp;or equal to 50% of the current allocation.  It appears that
<br>
&nbsp;&nbsp;&nbsp;starting a 16 process (1 ppn) job takes longer if there are 32
<br>
&nbsp;&nbsp;&nbsp;nodes in the allocation than if there are 64 nodes in the
<br>
&nbsp;&nbsp;&nbsp;allocation.
<br>
<p>&nbsp;&nbsp;&nbsp;Assigned to: Galen
<br>
<p>6) MPI_INIT startup timings
<br>
<p>&nbsp;&nbsp;&nbsp;In addition to seeming to suffer from the same 50% issue as the
<br>
&nbsp;&nbsp;&nbsp;previous issue, there also appears to be a number of places in
<br>
&nbsp;&nbsp;&nbsp;MPI_INIT where we spend a considerable amount of time when at
<br>
&nbsp;&nbsp;&nbsp;scale, leading to startup times much worse than LA-MPI or
<br>
&nbsp;&nbsp;&nbsp;MPIEXEC/MVAPICH.
<br>
<p>&nbsp;&nbsp;&nbsp;Assigned to: Galen
<br>
<p><p>ROBUSTNESS:
<br>
<p>1) MPI process aborting issue
<br>
<p>&nbsp;&nbsp;&nbsp;This is the orted spin, MPI processes don't die, etc. issue that
<br>
&nbsp;&nbsp;&nbsp;occurs when some process dies unexpectedly.  Ralph has already sent
<br>
&nbsp;&nbsp;&nbsp;a detailed e-mail to devel about this issue.
<br>
<p>&nbsp;&nbsp;&nbsp;Assigned to: Ralph
<br>
<p>1.5) MPI_ABORT rework
<br>
<p>&nbsp;&nbsp;&nbsp;The MPI process aborting issue is going to require a rework of
<br>
&nbsp;&nbsp;&nbsp;MPI_ABORT so that it uses the error manager instead of calling
<br>
&nbsp;&nbsp;&nbsp;terminate_proc/terminate_job.
<br>
<p>&nbsp;&nbsp;&nbsp;Assigned to: Brian
<br>
<p>2) ORTE hangs when start-up fails
<br>
<p>&nbsp;&nbsp;&nbsp;If an orted fails to start or fails to connect back to the HNP, the
<br>
&nbsp;&nbsp;&nbsp;system hangs waiting for the callback.  If a orted process fails to
<br>
&nbsp;&nbsp;&nbsp;start entirely, we sometimes catch this.  But we need a better
<br>
&nbsp;&nbsp;&nbsp;mechanism for handling the general failure case.
<br>
<p>&nbsp;&nbsp;&nbsp;Assigned to: Ralph
<br>
<p>3) Hardened cleanup of session directory
<br>
<p>&nbsp;&nbsp;&nbsp;While #1 should greatly help in ensuring that the session directory
<br>
&nbsp;&nbsp;&nbsp;is cleaned up every time, there are still a number of race
<br>
&nbsp;&nbsp;&nbsp;conditions that need to be sorted out.  The goal is to develop a
<br>
&nbsp;&nbsp;&nbsp;plan that ensures files that need to be removed are removed
<br>
&nbsp;&nbsp;&nbsp;automatically a high percentage of the time, that there is a way to
<br>
&nbsp;&nbsp;&nbsp;allow a tool like orte_clean to clean up everything it should clean
<br>
&nbsp;&nbsp;&nbsp;up, and that there is a way to make sure files that should not be
<br>
&nbsp;&nbsp;&nbsp;automatically removed aren't automatically removed.
<br>
<p>&nbsp;&nbsp;&nbsp;Assigned to: Brian
<br>
<p>3.5) Process not found hangs
<br>
<p>&nbsp;&nbsp;&nbsp;See <a href="https://svn.open-mpi.org/trac/ompi/ticket/245">https://svn.open-mpi.org/trac/ompi/ticket/245</a>
<br>
<p>&nbsp;&nbsp;&nbsp;Assigned to: Ralph
<br>
<p>7) Node death failures / hangs
<br>
<p>&nbsp;&nbsp;&nbsp;With the exception of BProc, if a node fails, we don't detect the
<br>
&nbsp;&nbsp;&nbsp;failure.  Even if we did detect the failure, we have no general
<br>
&nbsp;&nbsp;&nbsp;mechanism for dealing with that failure.  The bulk of this project
<br>
&nbsp;&nbsp;&nbsp;is going to be adding a general SOH/SMR component that uses the OOB
<br>
&nbsp;&nbsp;&nbsp;for timeout pings.
<br>
<p>&nbsp;&nbsp;&nbsp;Assigned to: Brian
<br>
<p>15) More friendly error messages
<br>
<p>&nbsp;&nbsp;&nbsp;There are situations where we give something south of a useful
<br>
&nbsp;&nbsp;&nbsp;error message when an error is found.  We should play nicer with
<br>
&nbsp;&nbsp;&nbsp;users.
<br>
<p>&nbsp;&nbsp;&nbsp;Assigned to:
<br>
<p>16) Consistent error checking
<br>
<p>&nbsp;&nbsp;&nbsp;We've had a number of recent instances of errors occuring, but not
<br>
&nbsp;&nbsp;&nbsp;being propogated / returned to the user simply because no one ever
<br>
&nbsp;&nbsp;&nbsp;checked the return code.  We need to audit most of ORTE to always
<br>
&nbsp;&nbsp;&nbsp;check return codes.
<br>
<p>&nbsp;&nbsp;&nbsp;Assigned to:
<br>
<p><p>FEATURE / PLATFORM SUPPORT:
<br>
<p>4) TM error handling
<br>
<p>&nbsp;&nbsp;&nbsp;TM, while used on a number of large systems LANL needs to support,
<br>
&nbsp;&nbsp;&nbsp;is not exactly friendly to usage at scale.  It seems that it likes
<br>
&nbsp;&nbsp;&nbsp;to go away and cry to mamma for a couple seconds, returning system
<br>
&nbsp;&nbsp;&nbsp;error messages, only to come back and be ok a second later.  This
<br>
&nbsp;&nbsp;&nbsp;means that every TM call needs to be handled as if it's going to
<br>
&nbsp;&nbsp;&nbsp;fail, and we need to be prepared to re-initialize the system (if
<br>
&nbsp;&nbsp;&nbsp;possible) when failures occur.  In testing on t-bird, launching was
<br>
&nbsp;&nbsp;&nbsp;usually pretty stable, but the calls to get the node allocations
<br>
&nbsp;&nbsp;&nbsp;tended to result in the strange behavior.  These should definitely
<br>
&nbsp;&nbsp;&nbsp;be re-startable type errors
<br>
<p>&nbsp;&nbsp;&nbsp;Assigned to: Brian
<br>
<p>8) Hetergeneous Issues
<br>
<p>&nbsp;&nbsp;&nbsp;Assigned to:
<br>
<p>9) External connections
<br>
<p>&nbsp;&nbsp;&nbsp;This covers issues like those the Eclipse team is experiencing.
<br>
&nbsp;&nbsp;&nbsp;If, for example, a TCP connection to the seed is severed, it causes
<br>
&nbsp;&nbsp;&nbsp;Open RTE to call abort, which means Eclipse just aborted.  That's
<br>
&nbsp;&nbsp;&nbsp;not so good.  There are other naming / status issues that also need
<br>
&nbsp;&nbsp;&nbsp;to be handled here.
<br>
<p>&nbsp;&nbsp;&nbsp;Assigned to:
<br>
<p>9.5) Fix/Complete orte-ps and friends
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;orte-ps / orte-clean / etc. all depend on being able to make a
<br>
&nbsp;&nbsp;&nbsp;&nbsp;connection to the orte universe that doesn't result in bad things
<br>
&nbsp;&nbsp;&nbsp;&nbsp;happening.  We should finish these things for obvious reasons.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Assigned to:
<br>
<p>10) Remote connections
<br>
<p>&nbsp;&nbsp;&nbsp;This is similar to #9, but includes the ability to start a remote
<br>
&nbsp;&nbsp;&nbsp;HNP process
<br>
<p>&nbsp;&nbsp;&nbsp;Assigned to:
<br>
<p>11) Dynamic MPI-2 support
<br>
<p>&nbsp;&nbsp;&nbsp;ORTE's support for the MPI-2 dynamics has some well-known issues.
<br>
&nbsp;&nbsp;&nbsp;In addition, we need to change some behaviors at the Open MPI level
<br>
&nbsp;&nbsp;&nbsp;to behave better.   
<br>
<p>&nbsp;&nbsp;&nbsp;Assigned to:
<br>
<p>12) XCPU support
<br>
<p>&nbsp;&nbsp;&nbsp;The XCPU system is a distributed process management system
<br>
&nbsp;&nbsp;&nbsp;implemented using the Plan 9 filesystem.  An RAS (possibly) and PLS
<br>
&nbsp;&nbsp;&nbsp;are needed to support launching on XCPU systems.
<br>
<p>&nbsp;&nbsp;&nbsp;Assigned to:
<br>
<p>13) Multi-cell support
<br>
<p>&nbsp;&nbsp;&nbsp;Assigned to:
<br>
<p>14) Memory usage / null components
<br>
<p>&nbsp;&nbsp;&nbsp;This is related to an e-mail Ralph or Jeff sent yesterday regarding
<br>
&nbsp;&nbsp;&nbsp;support for NULL components.  The idea is to not load all the
<br>
&nbsp;&nbsp;&nbsp;components into memory if null is specified as the prefered
<br>
&nbsp;&nbsp;&nbsp;component name.
<br>
<p>&nbsp;&nbsp;&nbsp;Assigned to:
<br>
<p>15) RAS multi-component issues
<br>
<p>&nbsp;&nbsp;&nbsp;If you are in an allocation (say, TM or BProc) and try to specify
<br>
&nbsp;&nbsp;&nbsp;--hostfile on the orterun command line, the hostfile option will be
<br>
&nbsp;&nbsp;&nbsp;ignored and you'll use the previous allocation.  There are some
<br>
&nbsp;&nbsp;&nbsp;other similar cases, all of which can result in rather unexpected
<br>
&nbsp;&nbsp;&nbsp;behaviour from the user's point of view
<br>
<p>&nbsp;&nbsp;&nbsp;Assigned to:
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1013.php">Ralph Castain: "[OMPI devel] OpenRTE and Threads"</a>
<li><strong>Previous message:</strong> <a href="1011.php">Dave Rogers: "[OMPI devel] Buffer Overflow Error"</a>
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
