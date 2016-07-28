<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Dec  6 09:11:27 2006" -->
<!-- isoreceived="20061206141127" -->
<!-- sent="Wed, 06 Dec 2006 07:11:23 -0700" -->
<!-- isosent="20061206141123" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Major revision to the RML/OOB" -->
<!-- id="C19C1D9B.6413%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20061204223508.11544.qmail_at_web31511.mail.mud.yahoo.com" -->
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
<strong>Date:</strong> 2006-12-06 09:11:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1223.php">Adrian Knoth: "Re: [OMPI devel] Major revision to the RML/OOB"</a>
<li><strong>Previous message:</strong> <a href="1221.php">Ralph H Castain: "Re: [OMPI devel] Major revision to the RML/OOB"</a>
<li><strong>In reply to:</strong> <a href="1219.php">Jonathan Day: "Re: [OMPI devel] Major revision to the RML/OOB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1220.php">Adrian Knoth: "Re: [OMPI devel] Major revision to the RML/OOB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The changes we are planning to do will in no way preclude the use of
<br>
multicast for the xcast procedure. The changes in the OOB subsystem deal
<br>
specifically with how those connections are initialized, which is something
<br>
we would need to do for multicast anyway.
<br>
<p>The routing method for the xcast is already selectable (at least, on the
<br>
trunk) - there is no problem with adding a multicast option in that
<br>
procedure. If someone wishes to do so, please feel free! I'm not sure
<br>
when/if I'll get around to it.
<br>
<p>Ralph
<br>
<p><p>On 12/4/06 3:35 PM, &quot;Jonathan Day&quot; &lt;imipak_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Whilst I can see these changes being good in the
</span><br>
<span class="quotelev1">&gt; general case (most clusters are designed with very
</span><br>
<span class="quotelev1">&gt; smart NICs and painfully dumb switches, because that
</span><br>
<span class="quotelev1">&gt; produces the best latencies for many topologies), I
</span><br>
<span class="quotelev1">&gt; would suggest that we can do better on smarter
</span><br>
<span class="quotelev1">&gt; networks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There is no obvious reason why you could not establish
</span><br>
<span class="quotelev1">&gt; a well-known multicast address/port for out-of-band
</span><br>
<span class="quotelev1">&gt; traffic. A reliable multicast protocol, such as SRM,
</span><br>
<span class="quotelev1">&gt; NORM or FLUTE could then be used to carry the
</span><br>
<span class="quotelev1">&gt; information between nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The advantage of this approach is that it requires the
</span><br>
<span class="quotelev1">&gt; least alteration to the code - a single transmission
</span><br>
<span class="quotelev1">&gt; to the group address as opposed to one transmission to
</span><br>
<span class="quotelev1">&gt; each target - AND would work perfectly well with the
</span><br>
<span class="quotelev1">&gt; new approach described.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The drawbacks are that it would have to be switchable,
</span><br>
<span class="quotelev1">&gt; though, as multicast is truly horrible on dumber
</span><br>
<span class="quotelev1">&gt; devices, development resources aren't infinite and the
</span><br>
<span class="quotelev1">&gt; number of cases it will actually win on are limited.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (It's entirely coincidental that this is a capability
</span><br>
<span class="quotelev1">&gt; that I actually need. Well, almost!)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jonathan Day
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Message: 1
</span><br>
<span class="quotelev2">&gt;&gt; Date: Mon, 04 Dec 2006 06:26:26 -0700
</span><br>
<span class="quotelev2">&gt;&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [OMPI devel] Major revision to the RML/OOB
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Core Developers
</span><br>
<span class="quotelev2">&gt;&gt; &lt;devel-core_at_[hidden]&gt;, Open MPI
</span><br>
<span class="quotelev2">&gt;&gt; Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message-ID: &lt;C1997012.B86%rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Content-Type: text/plain; charset=&quot;US-ASCII&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello all
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If you are interested in the ongoing scalability
</span><br>
<span class="quotelev2">&gt;&gt; work, or in the RML/OOB in
</span><br>
<span class="quotelev2">&gt;&gt; ORTE, please read on - otherwise, feel free to hit
</span><br>
<span class="quotelev2">&gt;&gt; &quot;delete&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; As many of you know, we have been working towards
</span><br>
<span class="quotelev2">&gt;&gt; solving several problems
</span><br>
<span class="quotelev2">&gt;&gt; that affect our ability to operate at large scale.
</span><br>
<span class="quotelev2">&gt;&gt; Some of the required
</span><br>
<span class="quotelev2">&gt;&gt; modifications to the code base have recently been
</span><br>
<span class="quotelev2">&gt;&gt; applied to the trunk.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We have known since it was originally written over
</span><br>
<span class="quotelev2">&gt;&gt; two years ago that the
</span><br>
<span class="quotelev2">&gt;&gt; OOB contained some inherent scalability limits. For
</span><br>
<span class="quotelev2">&gt;&gt; example, the system
</span><br>
<span class="quotelev2">&gt;&gt; immediately upon opening obtains contact info for
</span><br>
<span class="quotelev2">&gt;&gt; all daemons in the
</span><br>
<span class="quotelev2">&gt;&gt; universe, opens sockets to them, and sends an
</span><br>
<span class="quotelev2">&gt;&gt; initial message to them. It
</span><br>
<span class="quotelev2">&gt;&gt; then does the same with all the application
</span><br>
<span class="quotelev2">&gt;&gt; processes in its job.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; As a result, for a 2000 process job running on 500
</span><br>
<span class="quotelev2">&gt;&gt; nodes, each application
</span><br>
<span class="quotelev2">&gt;&gt; process will immediately open and communicate across
</span><br>
<span class="quotelev2">&gt;&gt; 2501 sockets (2000
</span><br>
<span class="quotelev2">&gt;&gt; procs + 500 daemons [one per node] + the HNP) during
</span><br>
<span class="quotelev2">&gt;&gt; the startup phase.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If you really want to imagine some fun, now have
</span><br>
<span class="quotelev2">&gt;&gt; that job comm_spawn 500
</span><br>
<span class="quotelev2">&gt;&gt; processes across the 500 nodes, and *don't* reuse
</span><br>
<span class="quotelev2">&gt;&gt; daemons. As each new
</span><br>
<span class="quotelev2">&gt;&gt; daemon is spawned, every process in the original job
</span><br>
<span class="quotelev2">&gt;&gt; (including the original
</span><br>
<span class="quotelev2">&gt;&gt; daemons) is notified, loads the new contact info for
</span><br>
<span class="quotelev2">&gt;&gt; that daemon, opens a
</span><br>
<span class="quotelev2">&gt;&gt; socket to it, and does an &quot;ack&quot; comm. After all 500
</span><br>
<span class="quotelev2">&gt;&gt; new daemons are running,
</span><br>
<span class="quotelev2">&gt;&gt; they now launch the 500 new procs, each of which
</span><br>
<span class="quotelev2">&gt;&gt; gets the info on 1000
</span><br>
<span class="quotelev2">&gt;&gt; daemons plus the info for 2000 parents and 500
</span><br>
<span class="quotelev2">&gt;&gt; peers, and immediately opens
</span><br>
<span class="quotelev2">&gt;&gt; 1000 daemons + 2000 parents + 500 peers + 1 HNP =
</span><br>
<span class="quotelev2">&gt;&gt; 3501 sockets!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This was acceptable for small jobs, but causes
</span><br>
<span class="quotelev2">&gt;&gt; considerable delay during
</span><br>
<span class="quotelev2">&gt;&gt; startup for large jobs. A few other OOB operational
</span><br>
<span class="quotelev2">&gt;&gt; characteristics further
</span><br>
<span class="quotelev2">&gt;&gt; exacerbate the problem - I will detail those in a
</span><br>
<span class="quotelev2">&gt;&gt; document on the wiki to
</span><br>
<span class="quotelev2">&gt;&gt; help foster greater understanding.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres and I are about to begin a major
</span><br>
<span class="quotelev2">&gt;&gt; revision of the RML/OOB code
</span><br>
<span class="quotelev2">&gt;&gt; to resolve these problems. We will be using a staged
</span><br>
<span class="quotelev2">&gt;&gt; approach to the effort:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. separate the OOB's actions for loading contact
</span><br>
<span class="quotelev2">&gt;&gt; info from actually opening
</span><br>
<span class="quotelev2">&gt;&gt; a socket to a process. Currently, the OOB
</span><br>
<span class="quotelev2">&gt;&gt; immediately opens a socket and
</span><br>
<span class="quotelev2">&gt;&gt; performs an &quot;ack&quot; communication whenever contact
</span><br>
<span class="quotelev2">&gt;&gt; info for another process is
</span><br>
<span class="quotelev2">&gt;&gt; loaded into it. In addition, the OOB immediately
</span><br>
<span class="quotelev2">&gt;&gt; subscribes to the job
</span><br>
<span class="quotelev2">&gt;&gt; segment of the provided process, requesting that
</span><br>
<span class="quotelev2">&gt;&gt; this process be alerted to
</span><br>
<span class="quotelev2">&gt;&gt; *any* change in OOB contact info to any process in
</span><br>
<span class="quotelev2">&gt;&gt; that job. These actions
</span><br>
<span class="quotelev2">&gt;&gt; need to be separated out.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2. revise the RML/OOB init/open procedure. These are
</span><br>
<span class="quotelev2">&gt;&gt; currently interwoven in
</span><br>
<span class="quotelev2">&gt;&gt; a manner that causes the OOB to execute registry
</span><br>
<span class="quotelev2">&gt;&gt; operations that are not
</span><br>
<span class="quotelev2">&gt;&gt; needed (and actually cause headaches) during
</span><br>
<span class="quotelev2">&gt;&gt; orte_init. The procedure will
</span><br>
<span class="quotelev2">&gt;&gt; be revised so that connections to the HNP and to the
</span><br>
<span class="quotelev2">&gt;&gt; process' local orted
</span><br>
<span class="quotelev2">&gt;&gt; are opened, but all other contact info (e.g., for
</span><br>
<span class="quotelev2">&gt;&gt; the other procs in the
</span><br>
<span class="quotelev2">&gt;&gt; job) is simply loaded into the OOB's contact tables,
</span><br>
<span class="quotelev2">&gt;&gt; but no sockets opened
</span><br>
<span class="quotelev2">&gt;&gt; until first communication.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 3. revise the xcast procedure so that it relays via
</span><br>
<span class="quotelev2">&gt;&gt; the daemons and not the
</span><br>
<span class="quotelev2">&gt;&gt; application processes. For systems that do not use
</span><br>
<span class="quotelev2">&gt;&gt; our daemons, alternative
</span><br>
<span class="quotelev2">&gt;&gt; mechanisms will be developed.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; At some point in the future, a fully routable OOB
</span><br>
<span class="quotelev2">&gt;&gt; will be developed to
</span><br>
<span class="quotelev2">&gt;&gt; remove the need for so many sockets on each
</span><br>
<span class="quotelev2">&gt;&gt; application process. For now,
</span><br>
<span class="quotelev2">&gt;&gt; these steps should improve our startup time
</span><br>
<span class="quotelev2">&gt;&gt; considerably.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; With some luck and (hopefully) not too many
</span><br>
<span class="quotelev2">&gt;&gt; conflicting priorities, Jeff and
</span><br>
<span class="quotelev2">&gt;&gt; I may complete this work by Christmas - more likely,
</span><br>
<span class="quotelev2">&gt;&gt; though, is sometime
</span><br>
<span class="quotelev2">&gt;&gt; early in Jan. We will be working on a tmp branch,
</span><br>
<span class="quotelev2">&gt;&gt; but you may see some
</span><br>
<span class="quotelev2">&gt;&gt; transfer of code to the trunk as we progress.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; As always, feel free to comment and/or make
</span><br>
<span class="quotelev2">&gt;&gt; suggestions!
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; ______________________________________________________________________________
</span><br>
<span class="quotelev1">&gt; ______
</span><br>
<span class="quotelev1">&gt; Want to start your own business?
</span><br>
<span class="quotelev1">&gt; Learn how on Yahoo! Small Business.
</span><br>
<span class="quotelev1">&gt; <a href="http://smallbusiness.yahoo.com/r-index">http://smallbusiness.yahoo.com/r-index</a>
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
<li><strong>Next message:</strong> <a href="1223.php">Adrian Knoth: "Re: [OMPI devel] Major revision to the RML/OOB"</a>
<li><strong>Previous message:</strong> <a href="1221.php">Ralph H Castain: "Re: [OMPI devel] Major revision to the RML/OOB"</a>
<li><strong>In reply to:</strong> <a href="1219.php">Jonathan Day: "Re: [OMPI devel] Major revision to the RML/OOB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1220.php">Adrian Knoth: "Re: [OMPI devel] Major revision to the RML/OOB"</a>
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
