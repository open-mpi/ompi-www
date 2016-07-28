<?
$subject_val = "Re: [OMPI devel] Event notification in OMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun 11 14:31:10 2016" -->
<!-- isoreceived="20160611183110" -->
<!-- sent="Sat, 11 Jun 2016 11:30:57 -0700" -->
<!-- isosent="20160611183057" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Event notification in OMPI" -->
<!-- id="EA1722D4-13A9-47DC-822F-464FF8568120_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="485AF526-AD62-48EE-9A78-DE79515327BD_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Event notification in OMPI<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-11 14:30:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19098.php">George Bosilca: "Re: [OMPI devel] MPI_T and coll/tuned module"</a>
<li><strong>Previous message:</strong> <a href="19096.php">Gilles Gouaillardet: "Re: [OMPI devel] MPI_T and coll/tuned module"</a>
<li><strong>In reply to:</strong> <a href="19093.php">Ralph Castain: "[OMPI devel] Event notification in OMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The corresponding PMIx RFC is now available for comment: <a href="https://github.com/pmix/RFCs/pull/2">https://github.com/pmix/RFCs/pull/2</a> &lt;<a href="https://github.com/pmix/RFCs/pull/2">https://github.com/pmix/RFCs/pull/2</a>&gt;
<br>
<p><p><span class="quotelev1">&gt; On Jun 9, 2016, at 8:37 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi folks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There is a PR that has cleared Jenkins, but it represents a fairly significant change in OMPI capabilities. Thus, I think it merits a little more attention.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The PR (<a href="https://github.com/open-mpi/ompi/pull/1767">https://github.com/open-mpi/ompi/pull/1767</a> &lt;<a href="https://github.com/open-mpi/ompi/pull/1767">https://github.com/open-mpi/ompi/pull/1767</a>&gt;) brings the PMIx event notification system into OMPI. Quoting from the PMIx RFC:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ===============================
</span><br>
<span class="quotelev1">&gt; The PMIx Event Notification system provides a mechanism by which the resource manager can communicate system events to applications, thus providing applications with an opportunity to generate an appropriate response. In addition, applications can use the system to request that the resource manager notify their peers of internal events (e.g., computational errors and aborted operations), and notify the resource manager of events detected by the application.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The resource manager will be aware of a wide range of events that occur across the system. For the purposes of this discussion, only events that impact the allocated session being served by the PMIx server are considered. These events can be divided into two distinct classes:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * Job-specific events that directly relate to a job executing within the
</span><br>
<span class="quotelev1">&gt;   session. This might include events such as debugger attachment or process failure within a related job. These events are characterized by directly targeting processes within session jobs - i.e., the &quot;procs&quot; parameter of the notification contain members of a job executing within the session. Events in this category are to be immediately delivered to the PMIx server library for delivery to the specified processes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Clients can indicate a desire to register solely for job-specific events by including the _PMIX\_EVENT\_JOB\_LEVEL_ key in their call to _PMIx\_Register\_event_ - i.e., providing this key will explicitly indicate that environment events are _not_ to be reported to this callback function.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * Environment events that impact the session, but are not directly sent to
</span><br>
<span class="quotelev1">&gt;   executing jobs. This is a much broader category of events that includes ECC errors, temperature excursions, and other environmental events directly affecting the session's resources. Note that although these do impact the session's jobs, they are not directly referencing those jobs - i.e., the event is generated without specifying a particular target. Thus, events in this category are to be delivered to the PMIx server library only upon request - i.e., when the PMIx server has registered for those events.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note that race conditions can cause the registration to come _after_ events of possible interest (e.g., a memory ECC event that occurs after start of execution but prior to registration). RMs are free to cache events in this category for some time to mitigate this situation, but are not required to do so. Thus, applications must be aware that environment events prior to registration may not be included in notifications.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As above, clients can indicate a desire to register solely for environment events of a given type by include the _PMIX\_EVENT\_ENVIRO\_LEVEL_ key in their registration call.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The PMIx server will cache any environment events passed to it for a period of time to provide notification to clients that have not yet registered for them. Currently, the PMIx server uses a ring buffer to cache events. The size of the ring buffer defaults to 512 events (as of PMIx 2.0), but can be configured using the _PMIx\_server\_cache\_size_ info key during the call to the _PMIx\_Server\_init_ API.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Client application processes can also use the PMIx Event Notification system to request that the resource manager notify its peers of internal events, and notify the resource manager of events detected by the application process. Examples of the latter include network communication errors that may not have been detected by the fabric manager itself (e.g., data corruption). The client must direct the notification to the appropriate target (RM or peers) using the corresponding range parameter.
</span><br>
<span class="quotelev1">&gt; ===============================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The biggest change for OMPI is that it enables you to register event handlers for specific error constants - e.g., for knowing when debugger release has been issued. What you do in response to that notification is totally up to you, and we do &#226;&#128;&#156;chain&#226;&#128;&#157; the handlers (and pass the output of one down to the following handlers).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This should not be considered a cast-in-concrete capability - it will evolve as folks start to use it. However, we believe the interfaces should now be stable and ready for use.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The changes include:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * upgrade the base PMIx installation to 2.0.0a1, tracking (but lagging) the PMIx master
</span><br>
<span class="quotelev1">&gt; * creating a PMIx 1.1.4-specific external component for backward compatibility
</span><br>
<span class="quotelev1">&gt; * adding a PMIx 2.x-specific external component for those wanting to build directly against the PMIx master
</span><br>
<span class="quotelev1">&gt; * converting debugger support to use PMIx instead of RML for release. Note that the OOB/usock component remains for show_help support until the upcoming PMIx_Log interface is available.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please provide any comments or concerns. I&#226;&#128;&#153;m planning to &#226;&#128;&#156;hold&#226;&#128;&#157; this PR a bit while we resolve the OMPI 2.0 issues.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19097/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19098.php">George Bosilca: "Re: [OMPI devel] MPI_T and coll/tuned module"</a>
<li><strong>Previous message:</strong> <a href="19096.php">Gilles Gouaillardet: "Re: [OMPI devel] MPI_T and coll/tuned module"</a>
<li><strong>In reply to:</strong> <a href="19093.php">Ralph Castain: "[OMPI devel] Event notification in OMPI"</a>
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
