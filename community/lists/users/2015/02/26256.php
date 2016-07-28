<?
$subject_val = "Re: [OMPI users] independent startup of orted and orterun";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  2 13:07:14 2015" -->
<!-- isoreceived="20150202180714" -->
<!-- sent="Mon, 2 Feb 2015 10:07:12 -0800" -->
<!-- isosent="20150202180712" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] independent startup of orted and orterun" -->
<!-- id="CAMD57ocWgSXNqn5uBO1QfYUVLdEUVNSiuc56g2GdSGN8ytpmvQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="461E9029-0362-453F-B4C4-284B74C0F3A9_at_rutgers.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] independent startup of orted and orterun<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-02 13:07:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26257.php">Mark Santcroos: "Re: [OMPI users] independent startup of orted and orterun"</a>
<li><strong>Previous message:</strong> <a href="26255.php">Burns, Andrew J CTR (US): "Re: [OMPI users] use accept/connect to merge a new intra-comm (UNCLASSIFIED)"</a>
<li><strong>In reply to:</strong> <a href="26254.php">Mark Santcroos: "Re: [OMPI users] independent startup of orted and orterun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26257.php">Mark Santcroos: "Re: [OMPI users] independent startup of orted and orterun"</a>
<li><strong>Reply:</strong> <a href="26257.php">Mark Santcroos: "Re: [OMPI users] independent startup of orted and orterun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yikes - looks like a bug crept into there at the last minute. I actually
<br>
had it working just fine - not sure what happened here. I'm on travel this
<br>
week, but I'll try to dig into this a bit and spot the issue.
<br>
<p>Thanks!
<br>
Ralph
<br>
<p><p>On Mon, Feb 2, 2015 at 3:50 AM, Mark Santcroos &lt;mark.santcroos_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Great, the semantics look exactly as what I need!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (To aid in debugging I added &quot;--debug-devel&quot; to orte-dvm.c which was
</span><br>
<span class="quotelev1">&gt; useful to detect and come by some initial bumps)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The current status:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * I can submit applications and see their output on the orte-dvm console
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * The following message is reported infinitely on the orte-submit console:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [warn] opal_libevent2022_event_base_loop: reentrant invocation.  Only one
</span><br>
<span class="quotelev1">&gt; event_base_loop can run on each event_base at once.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * orte-submit doesn't return, while I see &quot;[nid02819:20571] [[2120,0],0]
</span><br>
<span class="quotelev1">&gt; dvm: job [2120,9] has completed&quot; on the orte-dvm console.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * On the orte-dvm console I see the following when submitting (so also for
</span><br>
<span class="quotelev1">&gt; &quot;successful&quot; runs):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [nid02434:00564] [[9021,0],0] Releasing job data for [INVALID]
</span><br>
<span class="quotelev1">&gt; [nid03388:26474] [[9021,0],2] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev1">&gt; ../../../../orte/mca/odls/base/odls_base_default_fns.c at line 433
</span><br>
<span class="quotelev1">&gt; [nid03534:31545] procdir: /tmp/openmpi-sessions-62758_at_nid03534_0/9021/1/0
</span><br>
<span class="quotelev1">&gt; [nid03534:31545] jobdir: /tmp/openmpi-sessions-62758_at_nid03534_0/9021/1
</span><br>
<span class="quotelev1">&gt; [nid03534:31545] top: openmpi-sessions-62758_at_nid03534_0
</span><br>
<span class="quotelev1">&gt; [nid03534:31545] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [nid03534:31545] sess_dir_finalize: proc session dir does not exist
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * If I dont specify any &quot;-np&quot; on the orte-submit, then I see on the
</span><br>
<span class="quotelev1">&gt; orte-dvm console:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [nid02434:00564] [[9021,0],0] Releasing job data for [INVALID]
</span><br>
<span class="quotelev1">&gt; [nid03388:26474] [[9021,0],2] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev1">&gt; ../../../../orte/mca/odls/base/odls_base_default_fns.c at line 433
</span><br>
<span class="quotelev1">&gt; [nid03534:31544] [[9021,0],1] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev1">&gt; ../../../../orte/mca/odls/base/odls_base_default_fns.c at line 433
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * It only seems to work for single nodes (probably related to the previous
</span><br>
<span class="quotelev1">&gt; point).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this all expected behaviour given the current implementation?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mark
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 02 Feb 2015, at 4:21 , Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have pushed the changes to the OMPI master. It took a little bit more
</span><br>
<span class="quotelev1">&gt; than I had hoped due to the changes to the ORTE infrastructure, but
</span><br>
<span class="quotelev1">&gt; hopefully this will meet your needs. It consists of two new tools:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (a) orte-dvm - starts the virtual machine by launching a daemon on every
</span><br>
<span class="quotelev1">&gt; node of the allocation, as constrained by -host and/or -hostfile. Check the
</span><br>
<span class="quotelev1">&gt; options for outputting the URI as you&#226;&#128;&#153;ll need that info for the other tool.
</span><br>
<span class="quotelev1">&gt; The DVM remains &#226;&#128;&#156;up&#226;&#128;&#157; until you issue the orte-submit -terminate command, or
</span><br>
<span class="quotelev1">&gt; hit the orte-dvm process with a sigterm.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (b) orte-submit - takes the place of mpirun. Basically just packages
</span><br>
<span class="quotelev1">&gt; your app and arguments and sends it to orte-dvm for execution. Requires the
</span><br>
<span class="quotelev1">&gt; URI of orte-dvm. The tool exits once the job has completed execution,
</span><br>
<span class="quotelev1">&gt; though you can run multiple jobs in parallel by backgrounding orte-submit
</span><br>
<span class="quotelev1">&gt; or issuing commands from separate shells.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I&#226;&#128;&#153;ve added man pages for both tools, though they may not be complete.
</span><br>
<span class="quotelev1">&gt; Also, I don&#226;&#128;&#153;t have all the mapping/ranking/binding options supported just
</span><br>
<span class="quotelev1">&gt; yet as I first wanted to see if this meets your basic needs before worrying
</span><br>
<span class="quotelev1">&gt; about the detail.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Let me know what you think
</span><br>
<span class="quotelev2">&gt; &gt; Ralph
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Jan 21, 2015, at 4:07 PM, Mark Santcroos &lt;mark.santcroos_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; All makes sense! Thanks a lot!
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Looking forward to your modifications.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Please don't hesitate to through things with rough-edges to me!
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Mark
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On 21 Jan 2015, at 23:21 , Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Let me address your questions up here so you don&#226;&#128;&#153;t have to scan thru
</span><br>
<span class="quotelev1">&gt; the entire note.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; PMIx rationale: PMI has been around for a long time, primarily used
</span><br>
<span class="quotelev1">&gt; inside the MPI library implementations to perform wireup. It provided a
</span><br>
<span class="quotelev1">&gt; link from the MPI library to the local resource manager. However, as we
</span><br>
<span class="quotelev1">&gt; move towards exascale, two things became apparent:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 1. the current PMI implementations don&#226;&#128;&#153;t scale adequately to get
</span><br>
<span class="quotelev1">&gt; there. The API created too many communications and assumed everything was a
</span><br>
<span class="quotelev1">&gt; blocking operation, thus preventing asynchronous progress
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 2. there were increasing requests for application-level interactions
</span><br>
<span class="quotelev1">&gt; to the resource manager. People want ways to spawn jobs (and not just from
</span><br>
<span class="quotelev1">&gt; within MPI), request pre-location of data, control power, etc. Rather than
</span><br>
<span class="quotelev1">&gt; having every RM write its own interface (and thus make everyone&#226;&#128;&#153;s code
</span><br>
<span class="quotelev1">&gt; non-portable), we at Intel decided to extend the existing PMI definitions
</span><br>
<span class="quotelev1">&gt; to support those functions. Thus, an application developer can directly
</span><br>
<span class="quotelev1">&gt; access PMIx functions to perform all those operations.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; PMIx v1.0 is about to be released - it&#226;&#128;&#153;ll be backward compatible with
</span><br>
<span class="quotelev1">&gt; PMI-1 and PMI-2, plus add non-blocking operations and significantly reduce
</span><br>
<span class="quotelev1">&gt; the number of communications. PMIx 2.0 is slated for this summer and will
</span><br>
<span class="quotelev1">&gt; include the advanced controls capabilities.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ORCM is being developed because we needed a BSD-licensed, fully
</span><br>
<span class="quotelev1">&gt; featured resource manager. This will allow us to integrate the RM even more
</span><br>
<span class="quotelev1">&gt; tightly to the file system, networking, and other subsystems, thus
</span><br>
<span class="quotelev1">&gt; achieving higher launch performance and providing desired features such as
</span><br>
<span class="quotelev1">&gt; QoS management. PMIx is a part of that plan, but as you say, they each play
</span><br>
<span class="quotelev1">&gt; their separate roles in the overall stack.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Persistent ORTE: there is a learning curve on ORTE, I fear. We do have
</span><br>
<span class="quotelev1">&gt; some videos on the web site that can help get you started, and I&#226;&#128;&#153;ve given a
</span><br>
<span class="quotelev1">&gt; number of &#226;&#128;&#156;classes&quot; at Intel now for that purpose. I still have it on my
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#156;to-do&#226;&#128;&#157; list that I summarize those classes and post them on the web site.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; For now, let me summarize how things work. At startup, mpirun reads
</span><br>
<span class="quotelev1">&gt; the allocation (usually from the environment, but it depends on the host
</span><br>
<span class="quotelev1">&gt; RM) and launches a daemon on each allocated node. Each daemon reads its
</span><br>
<span class="quotelev1">&gt; local hardware environment and &#226;&#128;&#156;phones home&#226;&#128;&#157; to let mpirun know it is
</span><br>
<span class="quotelev1">&gt; alive. Once all daemons have reported, mpirun maps the processes to the
</span><br>
<span class="quotelev1">&gt; nodes and sends that map to all the daemons in a scalable broadcast pattern.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Upon receipt of the launch message, each daemon parses it to identify
</span><br>
<span class="quotelev1">&gt; which procs it needs to locally spawn. Once spawned, each proc connects
</span><br>
<span class="quotelev1">&gt; back to its local daemon via a Unix domain socket for wireup support. As
</span><br>
<span class="quotelev1">&gt; procs complete, the daemon maintains bookkeeping and reports back to mpirun
</span><br>
<span class="quotelev1">&gt; once all procs are done. When all procs are reported complete (or one
</span><br>
<span class="quotelev1">&gt; reports as abnormally terminated), mpirun sends a &#226;&#128;&#156;die&#226;&#128;&#157; message to every
</span><br>
<span class="quotelev1">&gt; daemon so it will cleanly terminate.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; What I will do is simply tell mpirun to not do that last step, but
</span><br>
<span class="quotelev1">&gt; instead to wait to receive a &#226;&#128;&#156;terminate&#226;&#128;&#157; cmd before ending the daemons.
</span><br>
<span class="quotelev1">&gt; This will allow you to reuse the existing DVM, making each independent job
</span><br>
<span class="quotelev1">&gt; start a great deal faster. You&#226;&#128;&#153;ll need to either manually terminate the
</span><br>
<span class="quotelev1">&gt; DVM, or the RM will do so when the allocation expires.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; HTH
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; On Jan 21, 2015, at 12:52 PM, Mark Santcroos &lt;
</span><br>
<span class="quotelev1">&gt; mark.santcroos_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; On 21 Jan 2015, at 21:20 , Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Hi Mark
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; On Jan 21, 2015, at 11:21 AM, Mark Santcroos &lt;
</span><br>
<span class="quotelev1">&gt; mark.santcroos_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Hi Ralph, all,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; To give some background, I'm part of the RADICAL-Pilot [1]
</span><br>
<span class="quotelev1">&gt; development team.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; RADICAL-Pilot is a Pilot System, an implementation of the Pilot
</span><br>
<span class="quotelev1">&gt; (job) concept, which is in its most minimal form takes care of the
</span><br>
<span class="quotelev1">&gt; decoupling of resource acquisition and workload management.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; So instead of launching your real_science.exe through PBS, you
</span><br>
<span class="quotelev1">&gt; submit a Pilot, which will allow you to perform application level
</span><br>
<span class="quotelev1">&gt; scheduling.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Most obvious use-case if you want to run many (relatively) small
</span><br>
<span class="quotelev1">&gt; tasks, then you really don;t want to go through the batch system every
</span><br>
<span class="quotelev1">&gt; time. That is besides the fact that these machines are very bad in managing
</span><br>
<span class="quotelev1">&gt; many tasks anyway.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Yeah, we sympathize.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Thats always good :-)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Of course, one obvious solution is to get an allocation and execute
</span><br>
<span class="quotelev1">&gt; a shell script that runs the tasks within that allocation - yes?
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Not really. Most of our use-cases have dynamic runtime properties,
</span><br>
<span class="quotelev1">&gt; which means that at t=0 the exact workload is not known.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; In addition, I don't think such a script would allow me to work
</span><br>
<span class="quotelev1">&gt; around the aprun bottleneck, as I'm not aware of a way to start MPI tasks
</span><br>
<span class="quotelev1">&gt; that span multiple nodes from a Cray worker node.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; I looked a bit better at ORCM and it clearly overlaps with what I
</span><br>
<span class="quotelev1">&gt; want to achieve.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Agreed. In ORCM, we allow a user to request a &#226;&#128;&#156;session&#226;&#128;&#157; that results
</span><br>
<span class="quotelev1">&gt; in allocation of resources. Each session is given an &#226;&#128;&#156;orchestrator&#226;&#128;&#157; - the
</span><br>
<span class="quotelev1">&gt; ORCM &#226;&#128;&#156;shepherd&#226;&#128;&#157; daemon - responsible for executing the individual tasks
</span><br>
<span class="quotelev1">&gt; across the assigned allocation, and a collection of &#226;&#128;&#156;lamb&#226;&#128;&#157; daemons (one on
</span><br>
<span class="quotelev1">&gt; each node of the allocation) that forms a distributed VM. The orchestrator
</span><br>
<span class="quotelev1">&gt; can execute the tasks very quickly since it doesn&#226;&#128;&#153;t have to go back to the
</span><br>
<span class="quotelev1">&gt; scheduler, and we allow it to do so according to any provided precedence
</span><br>
<span class="quotelev1">&gt; requirement. Again, for simplicity, a shell script is the default mechanism
</span><br>
<span class="quotelev1">&gt; for submitting the individual tasks.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Yeah, similar solution to a similar problem.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I noticed that Exascale is also part of the motivation? How does this
</span><br>
<span class="quotelev1">&gt; relate to the pmix effort? Different part of the stack I guess.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; One thing I noticed is that parts of it runs as root, why is that?
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; ORCM is a full resource manager, which means it has a scheduler
</span><br>
<span class="quotelev1">&gt; (rudimentary today) and boot-time daemons that must run as root so they can
</span><br>
<span class="quotelev1">&gt; fork/exec the session-level daemons (that run at the user level). The
</span><br>
<span class="quotelev1">&gt; orchestrator and its daemons all run at the user-level.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Ok. Our solution is user-space only, as one of our features is that
</span><br>
<span class="quotelev1">&gt; we are able to run across different type of systems. Both approaches come
</span><br>
<span class="quotelev1">&gt; with a tradeoff obviously.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; We used to have a cmd line option in ORTE for what you propose -
</span><br>
<span class="quotelev1">&gt; it wouldn&#226;&#128;&#153;t be too hard to restore. Is there some reason to do so?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Can you point me to something that I could look for in the repo
</span><br>
<span class="quotelev1">&gt; history, then I can see if it serves my purpose.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; It would be back in the svn repo, I fear - would take awhile to hunt
</span><br>
<span class="quotelev1">&gt; it down. Basically, it just (a) started all the daemons to create a VM, and
</span><br>
<span class="quotelev1">&gt; (b) told mpirun to stick around as a persistent daemon. All subsequent
</span><br>
<span class="quotelev1">&gt; calls to mpirun would reference back to the persistent one, thus using it
</span><br>
<span class="quotelev1">&gt; to launch the jobs against the standing VM instead of starting a new one
</span><br>
<span class="quotelev1">&gt; every time.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; *nod* That's what I tried to do this afternoon actually with the
</span><br>
<span class="quotelev1">&gt; &quot;--ompi-server&quot;, but that was not meant to be.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; For ORCM, we just took that capability and expressed it as the
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#156;shepherd&#226;&#128;&#157; plus &#226;&#128;&#156;lamb&#226;&#128;&#157; daemon architecture described above.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; ACK.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; If you don&#226;&#128;&#153;t want to replace the base RM, then using ORTE to
</span><br>
<span class="quotelev1">&gt; establish a persistent VM is probably the way to go.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Indeed, thats what it sounds like. Plus that ORTE is generic enough
</span><br>
<span class="quotelev1">&gt; that I can re-use it on other type of systems too.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; I can probably make it do that again fairly readily. We have a
</span><br>
<span class="quotelev1">&gt; developer&#226;&#128;&#153;s meeting next week, which usually means I have some free time
</span><br>
<span class="quotelev1">&gt; (during evenings and topics I&#226;&#128;&#153;m not involved with), so I can take a crack
</span><br>
<span class="quotelev1">&gt; at this then if that would be timely enough.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Happy to accept that offer. At this stage I'm not sure if I would
</span><br>
<span class="quotelev1">&gt; want a CLI or would be more interested to be able to do this
</span><br>
<span class="quotelev1">&gt; programmatically though.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Also more than willing to assist in any way I can.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I tried to see how it all worked, but because of the modular nature
</span><br>
<span class="quotelev1">&gt; of ompi that was quite daunting. There is some learning curve I guess :-)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; So it seems that mpirun is persistent, and opens up a listening port,
</span><br>
<span class="quotelev1">&gt; then some orded's get launched that phone home.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; From there I got lost in the MCA maze. How do the tasks get unto the
</span><br>
<span class="quotelev1">&gt; compute nodes and started?
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Thanks a lot again, I appreciate your help.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Mark
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/01/26227.php">http://www.open-mpi.org/community/lists/users/2015/01/26227.php</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/01/26228.php">http://www.open-mpi.org/community/lists/users/2015/01/26228.php</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/01/26229.php">http://www.open-mpi.org/community/lists/users/2015/01/26229.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/02/26249.php">http://www.open-mpi.org/community/lists/users/2015/02/26249.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/02/26254.php">http://www.open-mpi.org/community/lists/users/2015/02/26254.php</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26256/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26257.php">Mark Santcroos: "Re: [OMPI users] independent startup of orted and orterun"</a>
<li><strong>Previous message:</strong> <a href="26255.php">Burns, Andrew J CTR (US): "Re: [OMPI users] use accept/connect to merge a new intra-comm (UNCLASSIFIED)"</a>
<li><strong>In reply to:</strong> <a href="26254.php">Mark Santcroos: "Re: [OMPI users] independent startup of orted and orterun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26257.php">Mark Santcroos: "Re: [OMPI users] independent startup of orted and orterun"</a>
<li><strong>Reply:</strong> <a href="26257.php">Mark Santcroos: "Re: [OMPI users] independent startup of orted and orterun"</a>
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
