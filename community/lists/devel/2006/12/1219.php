<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Dec  4 17:35:16 2006" -->
<!-- isoreceived="20061204223516" -->
<!-- sent="Mon, 4 Dec 2006 14:35:07 -0800 (PST)" -->
<!-- isosent="20061204223507" -->
<!-- name="Jonathan Day" -->
<!-- email="imipak_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Major revision to the RML/OOB" -->
<!-- id="20061204223508.11544.qmail_at_web31511.mail.mud.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="mailman.5.1165251609.21625.devel_at_open-mpi.org" -->
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
<strong>From:</strong> Jonathan Day (<em>imipak_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-04 17:35:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1220.php">Adrian Knoth: "Re: [OMPI devel] Major revision to the RML/OOB"</a>
<li><strong>Previous message:</strong> <a href="1218.php">Ralph Castain: "[OMPI devel] Major revision to the RML/OOB"</a>
<li><strong>Maybe in reply to:</strong> <a href="1218.php">Ralph Castain: "[OMPI devel] Major revision to the RML/OOB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1222.php">Ralph H Castain: "Re: [OMPI devel] Major revision to the RML/OOB"</a>
<li><strong>Reply:</strong> <a href="1222.php">Ralph H Castain: "Re: [OMPI devel] Major revision to the RML/OOB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Whilst I can see these changes being good in the
<br>
general case (most clusters are designed with very
<br>
smart NICs and painfully dumb switches, because that
<br>
produces the best latencies for many topologies), I
<br>
would suggest that we can do better on smarter
<br>
networks.
<br>
<p>There is no obvious reason why you could not establish
<br>
a well-known multicast address/port for out-of-band
<br>
traffic. A reliable multicast protocol, such as SRM,
<br>
NORM or FLUTE could then be used to carry the
<br>
information between nodes.
<br>
<p>The advantage of this approach is that it requires the
<br>
least alteration to the code - a single transmission
<br>
to the group address as opposed to one transmission to
<br>
each target - AND would work perfectly well with the
<br>
new approach described.
<br>
<p>The drawbacks are that it would have to be switchable,
<br>
though, as multicast is truly horrible on dumber
<br>
devices, development resources aren't infinite and the
<br>
number of cases it will actually win on are limited.
<br>
<p>(It's entirely coincidental that this is a capability
<br>
that I actually need. Well, almost!)
<br>
<p>Jonathan Day
<br>
<p><span class="quotelev1">&gt; Message: 1
</span><br>
<span class="quotelev1">&gt; Date: Mon, 04 Dec 2006 06:26:26 -0700
</span><br>
<span class="quotelev1">&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI devel] Major revision to the RML/OOB
</span><br>
<span class="quotelev1">&gt; To: Open MPI Core Developers
</span><br>
<span class="quotelev1">&gt; &lt;devel-core_at_[hidden]&gt;,	Open MPI
</span><br>
<span class="quotelev1">&gt; 	Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;C1997012.B86%rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain;	charset=&quot;US-ASCII&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello all
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you are interested in the ongoing scalability
</span><br>
<span class="quotelev1">&gt; work, or in the RML/OOB in
</span><br>
<span class="quotelev1">&gt; ORTE, please read on - otherwise, feel free to hit
</span><br>
<span class="quotelev1">&gt; &quot;delete&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As many of you know, we have been working towards
</span><br>
<span class="quotelev1">&gt; solving several problems
</span><br>
<span class="quotelev1">&gt; that affect our ability to operate at large scale.
</span><br>
<span class="quotelev1">&gt; Some of the required
</span><br>
<span class="quotelev1">&gt; modifications to the code base have recently been
</span><br>
<span class="quotelev1">&gt; applied to the trunk.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We have known since it was originally written over
</span><br>
<span class="quotelev1">&gt; two years ago that the
</span><br>
<span class="quotelev1">&gt; OOB contained some inherent scalability limits. For
</span><br>
<span class="quotelev1">&gt; example, the system
</span><br>
<span class="quotelev1">&gt; immediately upon opening obtains contact info for
</span><br>
<span class="quotelev1">&gt; all daemons in the
</span><br>
<span class="quotelev1">&gt; universe, opens sockets to them, and sends an
</span><br>
<span class="quotelev1">&gt; initial message to them. It
</span><br>
<span class="quotelev1">&gt; then does the same with all the application
</span><br>
<span class="quotelev1">&gt; processes in its job.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As a result, for a 2000 process job running on 500
</span><br>
<span class="quotelev1">&gt; nodes, each application
</span><br>
<span class="quotelev1">&gt; process will immediately open and communicate across
</span><br>
<span class="quotelev1">&gt; 2501 sockets (2000
</span><br>
<span class="quotelev1">&gt; procs + 500 daemons [one per node] + the HNP) during
</span><br>
<span class="quotelev1">&gt; the startup phase.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you really want to imagine some fun, now have
</span><br>
<span class="quotelev1">&gt; that job comm_spawn 500
</span><br>
<span class="quotelev1">&gt; processes across the 500 nodes, and *don't* reuse
</span><br>
<span class="quotelev1">&gt; daemons. As each new
</span><br>
<span class="quotelev1">&gt; daemon is spawned, every process in the original job
</span><br>
<span class="quotelev1">&gt; (including the original
</span><br>
<span class="quotelev1">&gt; daemons) is notified, loads the new contact info for
</span><br>
<span class="quotelev1">&gt; that daemon, opens a
</span><br>
<span class="quotelev1">&gt; socket to it, and does an &quot;ack&quot; comm. After all 500
</span><br>
<span class="quotelev1">&gt; new daemons are running,
</span><br>
<span class="quotelev1">&gt; they now launch the 500 new procs, each of which
</span><br>
<span class="quotelev1">&gt; gets the info on 1000
</span><br>
<span class="quotelev1">&gt; daemons plus the info for 2000 parents and 500
</span><br>
<span class="quotelev1">&gt; peers, and immediately opens
</span><br>
<span class="quotelev1">&gt; 1000 daemons + 2000 parents + 500 peers + 1 HNP =
</span><br>
<span class="quotelev1">&gt; 3501 sockets!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This was acceptable for small jobs, but causes
</span><br>
<span class="quotelev1">&gt; considerable delay during
</span><br>
<span class="quotelev1">&gt; startup for large jobs. A few other OOB operational
</span><br>
<span class="quotelev1">&gt; characteristics further
</span><br>
<span class="quotelev1">&gt; exacerbate the problem - I will detail those in a
</span><br>
<span class="quotelev1">&gt; document on the wiki to
</span><br>
<span class="quotelev1">&gt; help foster greater understanding.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres and I are about to begin a major
</span><br>
<span class="quotelev1">&gt; revision of the RML/OOB code
</span><br>
<span class="quotelev1">&gt; to resolve these problems. We will be using a staged
</span><br>
<span class="quotelev1">&gt; approach to the effort:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. separate the OOB's actions for loading contact
</span><br>
<span class="quotelev1">&gt; info from actually opening
</span><br>
<span class="quotelev1">&gt; a socket to a process. Currently, the OOB
</span><br>
<span class="quotelev1">&gt; immediately opens a socket and
</span><br>
<span class="quotelev1">&gt; performs an &quot;ack&quot; communication whenever contact
</span><br>
<span class="quotelev1">&gt; info for another process is
</span><br>
<span class="quotelev1">&gt; loaded into it. In addition, the OOB immediately
</span><br>
<span class="quotelev1">&gt; subscribes to the job
</span><br>
<span class="quotelev1">&gt; segment of the provided process, requesting that
</span><br>
<span class="quotelev1">&gt; this process be alerted to
</span><br>
<span class="quotelev1">&gt; *any* change in OOB contact info to any process in
</span><br>
<span class="quotelev1">&gt; that job. These actions
</span><br>
<span class="quotelev1">&gt; need to be separated out.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. revise the RML/OOB init/open procedure. These are
</span><br>
<span class="quotelev1">&gt; currently interwoven in
</span><br>
<span class="quotelev1">&gt; a manner that causes the OOB to execute registry
</span><br>
<span class="quotelev1">&gt; operations that are not
</span><br>
<span class="quotelev1">&gt; needed (and actually cause headaches) during
</span><br>
<span class="quotelev1">&gt; orte_init. The procedure will
</span><br>
<span class="quotelev1">&gt; be revised so that connections to the HNP and to the
</span><br>
<span class="quotelev1">&gt; process' local orted
</span><br>
<span class="quotelev1">&gt; are opened, but all other contact info (e.g., for
</span><br>
<span class="quotelev1">&gt; the other procs in the
</span><br>
<span class="quotelev1">&gt; job) is simply loaded into the OOB's contact tables,
</span><br>
<span class="quotelev1">&gt; but no sockets opened
</span><br>
<span class="quotelev1">&gt; until first communication.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3. revise the xcast procedure so that it relays via
</span><br>
<span class="quotelev1">&gt; the daemons and not the
</span><br>
<span class="quotelev1">&gt; application processes. For systems that do not use
</span><br>
<span class="quotelev1">&gt; our daemons, alternative
</span><br>
<span class="quotelev1">&gt; mechanisms will be developed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; At some point in the future, a fully routable OOB
</span><br>
<span class="quotelev1">&gt; will be developed to
</span><br>
<span class="quotelev1">&gt; remove the need for so many sockets on each
</span><br>
<span class="quotelev1">&gt; application process. For now,
</span><br>
<span class="quotelev1">&gt; these steps should improve our startup time
</span><br>
<span class="quotelev1">&gt; considerably.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With some luck and (hopefully) not too many
</span><br>
<span class="quotelev1">&gt; conflicting priorities, Jeff and
</span><br>
<span class="quotelev1">&gt; I may complete this work by Christmas - more likely,
</span><br>
<span class="quotelev1">&gt; though, is sometime
</span><br>
<span class="quotelev1">&gt; early in Jan. We will be working on a tmp branch,
</span><br>
<span class="quotelev1">&gt; but you may see some
</span><br>
<span class="quotelev1">&gt; transfer of code to the trunk as we progress.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As always, feel free to comment and/or make
</span><br>
<span class="quotelev1">&gt; suggestions!
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<p><p><p>&nbsp;
<br>
____________________________________________________________________________________
<br>
Want to start your own business?
<br>
Learn how on Yahoo! Small Business.
<br>
<a href="http://smallbusiness.yahoo.com/r-index">http://smallbusiness.yahoo.com/r-index</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1220.php">Adrian Knoth: "Re: [OMPI devel] Major revision to the RML/OOB"</a>
<li><strong>Previous message:</strong> <a href="1218.php">Ralph Castain: "[OMPI devel] Major revision to the RML/OOB"</a>
<li><strong>Maybe in reply to:</strong> <a href="1218.php">Ralph Castain: "[OMPI devel] Major revision to the RML/OOB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1222.php">Ralph H Castain: "Re: [OMPI devel] Major revision to the RML/OOB"</a>
<li><strong>Reply:</strong> <a href="1222.php">Ralph H Castain: "Re: [OMPI devel] Major revision to the RML/OOB"</a>
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
