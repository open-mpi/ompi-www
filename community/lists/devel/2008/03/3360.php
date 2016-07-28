<?
$subject_val = "Re: [OMPI devel] Fwd: OpenMPI changes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  4 18:14:51 2008" -->
<!-- isoreceived="20080304231451" -->
<!-- sent="Tue, 04 Mar 2008 16:14:35 -0700" -->
<!-- isosent="20080304231435" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fwd: OpenMPI changes" -->
<!-- id="C3F325EB.48A0%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="02B8773E-502C-4519-A54F-4143824BE0BB_at_computer.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Fwd: OpenMPI changes<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-04 18:14:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3361.php">Greg Watson: "Re: [OMPI devel] Fwd: OpenMPI changes"</a>
<li><strong>Previous message:</strong> <a href="3359.php">Greg Watson: "Re: [OMPI devel] Fwd: OpenMPI changes"</a>
<li><strong>In reply to:</strong> <a href="3359.php">Greg Watson: "Re: [OMPI devel] Fwd: OpenMPI changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3361.php">Greg Watson: "Re: [OMPI devel] Fwd: OpenMPI changes"</a>
<li><strong>Reply:</strong> <a href="3361.php">Greg Watson: "Re: [OMPI devel] Fwd: OpenMPI changes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yeah, the problem we had in the past was:
<br>
<p>1. something would trigger in the system - e.g., a particular job state was
<br>
reached. This would cause us to execute a callback function via the GPR
<br>
<p>2. the callback function would take some action. Typically, this involved
<br>
sending out a message or calling another function. Either way, the eventual
<br>
result of that action would be to cause another GPR trigger to fire - either
<br>
the job or a process changing state
<br>
<p>This loop would continue ad infinitum. Sometimes, I would see stack traces
<br>
hundreds of calls deep. Debugging and maintaining something that intertwined
<br>
was impossible.
<br>
<p>People tried to impose order by establishing rules about what could and
<br>
could not be called from various situations, but that also proved
<br>
intractable. Problem was that we could get it to work for a &quot;normal&quot; code
<br>
path, but all the variety of failure modes, combined with all the
<br>
flexibility built into the code base, created so many code paths that you
<br>
inevitably wound up deadlocked under some corner case conditions.
<br>
<p>Which we generally agreed was unacceptable.
<br>
<p>It -is- possible to have callback functions that avoid this situation.
<br>
However, it is very easy to make a mistake and &quot;hang&quot; the whole system. Just
<br>
seemed easier to avoid the entire problem. (I don't get that option!)
<br>
<p>The ability to get an allocation without launching is easy to add.
<br>
<p>I/O forwarding is currently an issue. Our IOF doesn't seem to like it when I
<br>
try to create an &quot;alternate&quot; tap (the default always goes back through the
<br>
persistent orted, so the tool looks like a second &quot;tap&quot; on the flow). This
<br>
is noted as a &quot;bug&quot; on our tracker, and I expect it will be addressed prior
<br>
to releasing 1.3. I will ask that it be raised in priority.
<br>
<p>I'll review what I had done and see about bringing it into the trunk by the
<br>
end of the week.
<br>
<p>Ralph
<br>
<p><p><p>On 3/4/08 4:00 PM, &quot;Greg Watson&quot; &lt;g.watson_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I don't have a problem using a different interface, assuming it's
</span><br>
<span class="quotelev1">&gt; adequately supported and provides the functionality we need. I presume
</span><br>
<span class="quotelev1">&gt; the recursive behavior you're referring to is calling OMPI interfaces
</span><br>
<span class="quotelev1">&gt; from the callback functions. Any event-based system has this issue,
</span><br>
<span class="quotelev1">&gt; and it is usually solved by clearly specifying the allowable
</span><br>
<span class="quotelev1">&gt; interfaces that can be called (possibly none). Since PTP doesn't call
</span><br>
<span class="quotelev1">&gt; OMPI functions from callbacks, it's not a problem for us if no
</span><br>
<span class="quotelev1">&gt; interfaces can be called.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The major missing features appear to be:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Ability to request a process allocation without launching the job
</span><br>
<span class="quotelev1">&gt; - I/O forwarding callbacks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Without these, PTP support will be so limited that I'd be reluctant to
</span><br>
<span class="quotelev1">&gt; say we support OMPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Greg
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 4, 2008, at 4:50 PM, Ralph H Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It is buried deep-down in the thread, but I'll just reiterate it
</span><br>
<span class="quotelev2">&gt;&gt; here. I
</span><br>
<span class="quotelev2">&gt;&gt; have &quot;restored&quot; the ability to &quot;subscribe&quot; to changes in job, proc,
</span><br>
<span class="quotelev2">&gt;&gt; and node
</span><br>
<span class="quotelev2">&gt;&gt; state via OMPI's tool interface library. I have -not- checked this
</span><br>
<span class="quotelev2">&gt;&gt; into the
</span><br>
<span class="quotelev2">&gt;&gt; trunk yet, though, until the community has a chance to consider
</span><br>
<span class="quotelev2">&gt;&gt; whether or
</span><br>
<span class="quotelev2">&gt;&gt; not it wants it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Restoring the ability to have such changes &quot;callback&quot; to user
</span><br>
<span class="quotelev2">&gt;&gt; functions
</span><br>
<span class="quotelev2">&gt;&gt; raises the concern again about recursive behavior. We worked hard to
</span><br>
<span class="quotelev2">&gt;&gt; remove
</span><br>
<span class="quotelev2">&gt;&gt; recursion from the code base, and it would be a concern to see it
</span><br>
<span class="quotelev2">&gt;&gt; potentially re-enter.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I realize there is some difference between ORTE calling back into
</span><br>
<span class="quotelev2">&gt;&gt; itself vs
</span><br>
<span class="quotelev2">&gt;&gt; calling back into a user-specified function. However, unless that
</span><br>
<span class="quotelev2">&gt;&gt; user truly
</span><br>
<span class="quotelev2">&gt;&gt; understands ORTE/OMPI and takes considerable precautions, it is very
</span><br>
<span class="quotelev2">&gt;&gt; easy to
</span><br>
<span class="quotelev2">&gt;&gt; recreate the recursive behavior without intending to do so.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The tool interface library was built to accomplish two things:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. help reduce the impact on external tools of changes to ORTE/OMPI
</span><br>
<span class="quotelev2">&gt;&gt; interfaces, and
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2. provide a degree of separation to prevent the tool from
</span><br>
<span class="quotelev2">&gt;&gt; inadvertently
</span><br>
<span class="quotelev2">&gt;&gt; causing OMPI to &quot;behave badly&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I think we accomplished that - I would encourage you to at least
</span><br>
<span class="quotelev2">&gt;&gt; consider
</span><br>
<span class="quotelev2">&gt;&gt; using the library. If there is something missing, we can always add
</span><br>
<span class="quotelev2">&gt;&gt; it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 3/4/08 2:37 PM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Greg --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I admit to being a bit puzzled here.  Ralph sent around RFCs about
</span><br>
<span class="quotelev3">&gt;&gt;&gt; these changes many months ago.  Everyone said they didn't want this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; functionality -- it was seen as excess functionality that Open MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; didn't want or need -- so it was all removed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As such, I have to agree with Ralph that it is an &quot;enhancement&quot; to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; re-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; add the functionality.  That being said, patches are always welcome!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; IBM has signed the OMPI 3rd party contribution agreement, so it could
</span><br>
<span class="quotelev3">&gt;&gt;&gt; be contributed directly.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sidenote: I was also under the impression that PTP was being re-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; geared
</span><br>
<span class="quotelev3">&gt;&gt;&gt; towards STCI and moving away from ORTE anyway.  Is this incorrect?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mar 4, 2008, at 3:24 PM, Greg Watson wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi all,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph informs me that significant functionality has been removed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; from
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ORTE in 1.3. Unfortunately this functionality was being used by
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PTP to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; provide support for OMPI, and without it, it seems unlikely that PTP
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; will be able to work with 1.3. Apparently restoring this lost
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; functionality is an &quot;enhancement&quot; of 1.3, and so is something that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; will not necessarily be done. Having worked with OMPI from a very
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; early stage to ensure that we were able to provide robust support, I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; must say it is a bit disappointing that this approach is being
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; taken.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I hope that the community will view this &quot;enhancement&quot; as
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; worthwhile.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Greg
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Begin forwarded message:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On 2/29/08 7:13 AM, &quot;Gregory R Watson&quot; &lt;grw_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Ralph Castain &lt;rhc_at_[hidden]&gt; wrote on 02/29/2008 12:18:39 AM:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 02/29/08 12:18 AM
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; To
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Gregory R Watson/Watson/IBM_at_IBMUS
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; cc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subject
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Re: OpenMPI changes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi Greg
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; All of the prior options (and some new ones) for spawning a job
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; are fully
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; supported in the new interface. Instead of setting them with
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;attributes&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; you create an orte_job_t object and just fill them in. This is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; precisely how
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpirun does it - you can look at that code if you want an
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; example, though it
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; is somewhat complex. Alternatively, you can look at the way it is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; done for
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; comm_spawn, which may be more analogous to your situation - that
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; code is in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ompi/mca/dpm/orte.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; All the tools library does is communicate the job object to the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; target
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; persistent daemon so it can do the work. This way, you don't have
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to open
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; all the frameworks, deal directly with the plm interface, etc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Alternatively, you are welcome to do a full orte_init and use the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; frameworks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; yourself - there is no requirement to use the library. I only
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; offer it as an
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; alternative.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; As far as I can tell, neither API provides the same functionality
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; as that
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; available in 1.2. While this might be beneficial for OMPI-specific
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; activities,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the changes appear to severely limit the interaction of tools with
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; runtime. At this point, I can't see either interface supporting
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; PTP.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I went ahead and added a notification capability to the system -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; took about
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 30 minutes. I can provide notice of job and process state changes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; since I
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; see those. Node state changes, however, are different - I can
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; notify
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; on
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; them, but we have no way of seeing them. None of the environments
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; we
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; support
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; tell us when a node fails.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I know that the tool library works because it uses the identical
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; APIs as
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; comm_spawn and mpirun. I have also tested them by building my own
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; tools.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; There's a big difference being on a code path that *must* work
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; because it is
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; used by core components, to one that is provided as an add-on for
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; external
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; tools. I may be worrying needlessly if this new interface
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; becomes an
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &quot;officially supported&quot; API. Is that planned? At a minimum, it
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; seems like it's
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; going to complicate your testing process, since you're going to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; need to
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; provide a separate set of tests that exercise this interface
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; independent of
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the rest of OMPI.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; It is an officially supported API. Testing is not as big a problem
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; as you
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; might expect since the library exercises the same code paths as
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; comm_spawn. Like I said, I have written my own tools that exercise
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; library - no problem using them as tests.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; We do not launch an orted for any tool-library query. All we do
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; communicate the query to the target persistent daemon or mpirun.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Those
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; entities have recv's posted to catch any incoming messages and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; execute the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; request.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; You are correct that we no longer have event driven notification
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; system. I repeatedly asked the community (on both devel and core
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; lists) for
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; input on that question, and received no indications that anyone
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; wanted it
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; supported. It can be added back into the system, but would
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; require the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; approval of the OMPI community. I don't know how problematic that
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; would be -
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; there is a lot of concern over the amount of memory, overhead,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and potential
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; reliability issues that surround event notification. If you want
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; capability, I suggest we discuss it, come up with a plan that
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; deals with
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; those issues, and then take a proposal to the devel list for
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; discussion.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; As for reliability, the objectives of the last year's effort were
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; precisely
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; scalability and reliability. We did a lot of work to eliminate
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; recursive
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; deadlocks and improve the reliability of the code. Our current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; testing
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; indicates we had considerable success in that regard,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; particularly with the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; recursion elimination commit earlier today.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I would be happy to work with you to meet the PTP's needs - we'll
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; just need
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; to work with the OMPI community to ensure everyone buys into the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; plan. If it
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; would help, I could come and review the new arch with the team (I
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; already
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; gave a presentation on it to IBM Rochester MN) and discuss
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; required
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; enhancements.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; PTP's needs have not changed since 1.0. From our perspective, the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 1.3 branch
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; simply removes functionality that is required for PTP to support
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; OMPI. It
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; seems strange that we need &quot;approval of the OMPI community&quot; to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; continue to use
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; functionality that has been available since 1.0. In any case,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; there are
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; unfortunately no resources to work on the kind of re-engineering
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that appears
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; to be required to support 1.3, even if it did provide the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; functionality we
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; need.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Afraid I have to be driven by the OMPI community's requirements
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; since they
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; pay my salary :-)  What they need is a &quot;lean, mean, OMPI machine&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; as
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; they
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; say, and (for some reason) they view the debugger community as
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; consisting of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; folks like totalview, vampirtrace, etc. - all of whom get involved
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (either
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; directly or via one of the OMPI members) in the requirements
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; discussions.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Can't argue with business decisions, though. I gather there was
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; some
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mention
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; of PTP at the recent LANL/IBM RR meeting, so I'll let people know
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that PTP
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; won't be an option on RR.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; And I'll see if there is any interest here in adding 1.3 support to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; PTP
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ourselves - from looking at your code, I think it would take
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; about a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; day,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; assuming someone more familiar with PTP will work with me.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Take care
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Greg
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3361.php">Greg Watson: "Re: [OMPI devel] Fwd: OpenMPI changes"</a>
<li><strong>Previous message:</strong> <a href="3359.php">Greg Watson: "Re: [OMPI devel] Fwd: OpenMPI changes"</a>
<li><strong>In reply to:</strong> <a href="3359.php">Greg Watson: "Re: [OMPI devel] Fwd: OpenMPI changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3361.php">Greg Watson: "Re: [OMPI devel] Fwd: OpenMPI changes"</a>
<li><strong>Reply:</strong> <a href="3361.php">Greg Watson: "Re: [OMPI devel] Fwd: OpenMPI changes"</a>
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
