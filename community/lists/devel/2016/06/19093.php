<?
$subject_val = "[OMPI devel] Event notification in OMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  9 11:37:59 2016" -->
<!-- isoreceived="20160609153759" -->
<!-- sent="Thu, 9 Jun 2016 08:37:54 -0700" -->
<!-- isosent="20160609153754" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Event notification in OMPI" -->
<!-- id="485AF526-AD62-48EE-9A78-DE79515327BD_at_open-mpi.org" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI devel] Event notification in OMPI<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-09 11:37:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19094.php">Gilles Gouaillardet: "[OMPI devel] MPI_T and coll/tuned module"</a>
<li><strong>Previous message:</strong> <a href="19092.php">Jeff Squyres (jsquyres): "[OMPI devel] Fwd: Coverity Scan: Analysis completed for Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19097.php">Ralph Castain: "Re: [OMPI devel] Event notification in OMPI"</a>
<li><strong>Reply:</strong> <a href="19097.php">Ralph Castain: "Re: [OMPI devel] Event notification in OMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks
<br>
<p>There is a PR that has cleared Jenkins, but it represents a fairly significant change in OMPI capabilities. Thus, I think it merits a little more attention.
<br>
<p>The PR (<a href="https://github.com/open-mpi/ompi/pull/1767">https://github.com/open-mpi/ompi/pull/1767</a> &lt;<a href="https://github.com/open-mpi/ompi/pull/1767">https://github.com/open-mpi/ompi/pull/1767</a>&gt;) brings the PMIx event notification system into OMPI. Quoting from the PMIx RFC:
<br>
<p>===============================
<br>
The PMIx Event Notification system provides a mechanism by which the resource manager can communicate system events to applications, thus providing applications with an opportunity to generate an appropriate response. In addition, applications can use the system to request that the resource manager notify their peers of internal events (e.g., computational errors and aborted operations), and notify the resource manager of events detected by the application.
<br>
<p>The resource manager will be aware of a wide range of events that occur across the system. For the purposes of this discussion, only events that impact the allocated session being served by the PMIx server are considered. These events can be divided into two distinct classes:
<br>
<p>* Job-specific events that directly relate to a job executing within the
<br>
&nbsp;&nbsp;session. This might include events such as debugger attachment or process failure within a related job. These events are characterized by directly targeting processes within session jobs - i.e., the &quot;procs&quot; parameter of the notification contain members of a job executing within the session. Events in this category are to be immediately delivered to the PMIx server library for delivery to the specified processes.
<br>
<p>&nbsp;&nbsp;Clients can indicate a desire to register solely for job-specific events by including the _PMIX\_EVENT\_JOB\_LEVEL_ key in their call to _PMIx\_Register\_event_ - i.e., providing this key will explicitly indicate that environment events are _not_ to be reported to this callback function.
<br>
<p>* Environment events that impact the session, but are not directly sent to
<br>
&nbsp;&nbsp;executing jobs. This is a much broader category of events that includes ECC errors, temperature excursions, and other environmental events directly affecting the session's resources. Note that although these do impact the session's jobs, they are not directly referencing those jobs - i.e., the event is generated without specifying a particular target. Thus, events in this category are to be delivered to the PMIx server library only upon request - i.e., when the PMIx server has registered for those events.
<br>
<p>Note that race conditions can cause the registration to come _after_ events of possible interest (e.g., a memory ECC event that occurs after start of execution but prior to registration). RMs are free to cache events in this category for some time to mitigate this situation, but are not required to do so. Thus, applications must be aware that environment events prior to registration may not be included in notifications.
<br>
<p>As above, clients can indicate a desire to register solely for environment events of a given type by include the _PMIX\_EVENT\_ENVIRO\_LEVEL_ key in their registration call.
<br>
<p>The PMIx server will cache any environment events passed to it for a period of time to provide notification to clients that have not yet registered for them. Currently, the PMIx server uses a ring buffer to cache events. The size of the ring buffer defaults to 512 events (as of PMIx 2.0), but can be configured using the _PMIx\_server\_cache\_size_ info key during the call to the _PMIx\_Server\_init_ API.
<br>
<p>Client application processes can also use the PMIx Event Notification system to request that the resource manager notify its peers of internal events, and notify the resource manager of events detected by the application process. Examples of the latter include network communication errors that may not have been detected by the fabric manager itself (e.g., data corruption). The client must direct the notification to the appropriate target (RM or peers) using the corresponding range parameter.
<br>
===============================
<br>
<p>The biggest change for OMPI is that it enables you to register event handlers for specific error constants - e.g., for knowing when debugger release has been issued. What you do in response to that notification is totally up to you, and we do &#226;&#128;&#156;chain&#226;&#128;&#157; the handlers (and pass the output of one down to the following handlers).
<br>
<p>This should not be considered a cast-in-concrete capability - it will evolve as folks start to use it. However, we believe the interfaces should now be stable and ready for use.
<br>
<p>The changes include:
<br>
<p>* upgrade the base PMIx installation to 2.0.0a1, tracking (but lagging) the PMIx master
<br>
* creating a PMIx 1.1.4-specific external component for backward compatibility
<br>
* adding a PMIx 2.x-specific external component for those wanting to build directly against the PMIx master
<br>
* converting debugger support to use PMIx instead of RML for release. Note that the OOB/usock component remains for show_help support until the upcoming PMIx_Log interface is available.
<br>
<p>Please provide any comments or concerns. I&#226;&#128;&#153;m planning to &#226;&#128;&#156;hold&#226;&#128;&#157; this PR a bit while we resolve the OMPI 2.0 issues.
<br>
<p>Ralph
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19093/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19094.php">Gilles Gouaillardet: "[OMPI devel] MPI_T and coll/tuned module"</a>
<li><strong>Previous message:</strong> <a href="19092.php">Jeff Squyres (jsquyres): "[OMPI devel] Fwd: Coverity Scan: Analysis completed for Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19097.php">Ralph Castain: "Re: [OMPI devel] Event notification in OMPI"</a>
<li><strong>Reply:</strong> <a href="19097.php">Ralph Castain: "Re: [OMPI devel] Event notification in OMPI"</a>
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
