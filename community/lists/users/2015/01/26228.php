<?
$subject_val = "Re: [OMPI users] independent startup of orted and orterun";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 21 17:22:02 2015" -->
<!-- isoreceived="20150121222202" -->
<!-- sent="Wed, 21 Jan 2015 14:21:58 -0800" -->
<!-- isosent="20150121222158" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] independent startup of orted and orterun" -->
<!-- id="F8289E5C-664F-426B-8BC4-C8DF5D4F8590_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="8006E71D-CCD5-4455-AD1F-C930B4053CA1_at_rutgers.edu" -->
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
<strong>Date:</strong> 2015-01-21 17:21:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26229.php">Mark Santcroos: "Re: [OMPI users] independent startup of orted and orterun"</a>
<li><strong>Previous message:</strong> <a href="26227.php">Mark Santcroos: "Re: [OMPI users] independent startup of orted and orterun"</a>
<li><strong>In reply to:</strong> <a href="26227.php">Mark Santcroos: "Re: [OMPI users] independent startup of orted and orterun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26229.php">Mark Santcroos: "Re: [OMPI users] independent startup of orted and orterun"</a>
<li><strong>Reply:</strong> <a href="26229.php">Mark Santcroos: "Re: [OMPI users] independent startup of orted and orterun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Let me address your questions up here so you don&#226;&#128;&#153;t have to scan thru the entire note.
<br>
<p>PMIx rationale: PMI has been around for a long time, primarily used inside the MPI library implementations to perform wireup. It provided a link from the MPI library to the local resource manager. However, as we move towards exascale, two things became apparent:
<br>
<p>1. the current PMI implementations don&#226;&#128;&#153;t scale adequately to get there. The API created too many communications and assumed everything was a blocking operation, thus preventing asynchronous progress
<br>
<p>2. there were increasing requests for application-level interactions to the resource manager. People want ways to spawn jobs (and not just from within MPI), request pre-location of data, control power, etc. Rather than having every RM write its own interface (and thus make everyone&#226;&#128;&#153;s code non-portable), we at Intel decided to extend the existing PMI definitions to support those functions. Thus, an application developer can directly access PMIx functions to perform all those operations.
<br>
<p>PMIx v1.0 is about to be released - it&#226;&#128;&#153;ll be backward compatible with PMI-1 and PMI-2, plus add non-blocking operations and significantly reduce the number of communications. PMIx 2.0 is slated for this summer and will include the advanced controls capabilities.
<br>
<p>ORCM is being developed because we needed a BSD-licensed, fully featured resource manager. This will allow us to integrate the RM even more tightly to the file system, networking, and other subsystems, thus achieving higher launch performance and providing desired features such as QoS management. PMIx is a part of that plan, but as you say, they each play their separate roles in the overall stack.
<br>
<p><p>Persistent ORTE: there is a learning curve on ORTE, I fear. We do have some videos on the web site that can help get you started, and I&#226;&#128;&#153;ve given a number of &#226;&#128;&#156;classes&quot; at Intel now for that purpose. I still have it on my &#226;&#128;&#156;to-do&#226;&#128;&#157; list that I summarize those classes and post them on the web site.
<br>
<p>For now, let me summarize how things work. At startup, mpirun reads the allocation (usually from the environment, but it depends on the host RM) and launches a daemon on each allocated node. Each daemon reads its local hardware environment and &#226;&#128;&#156;phones home&#226;&#128;&#157; to let mpirun know it is alive. Once all daemons have reported, mpirun maps the processes to the nodes and sends that map to all the daemons in a scalable broadcast pattern.
<br>
<p>Upon receipt of the launch message, each daemon parses it to identify which procs it needs to locally spawn. Once spawned, each proc connects back to its local daemon via a Unix domain socket for wireup support. As procs complete, the daemon maintains bookkeeping and reports back to mpirun once all procs are done. When all procs are reported complete (or one reports as abnormally terminated), mpirun sends a &#226;&#128;&#156;die&#226;&#128;&#157; message to every daemon so it will cleanly terminate.
<br>
<p>What I will do is simply tell mpirun to not do that last step, but instead to wait to receive a &#226;&#128;&#156;terminate&#226;&#128;&#157; cmd before ending the daemons. This will allow you to reuse the existing DVM, making each independent job start a great deal faster. You&#226;&#128;&#153;ll need to either manually terminate the DVM, or the RM will do so when the allocation expires.
<br>
<p>HTH
<br>
Ralph
<br>
<p><p><span class="quotelev1">&gt; On Jan 21, 2015, at 12:52 PM, Mark Santcroos &lt;mark.santcroos_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 21 Jan 2015, at 21:20 , Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Mark
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jan 21, 2015, at 11:21 AM, Mark Santcroos &lt;mark.santcroos_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Ralph, all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To give some background, I'm part of the RADICAL-Pilot [1] development team.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; RADICAL-Pilot is a Pilot System, an implementation of the Pilot (job) concept, which is in its most minimal form takes care of the decoupling of resource acquisition and workload management.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So instead of launching your real_science.exe through PBS, you submit a Pilot, which will allow you to perform application level scheduling.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Most obvious use-case if you want to run many (relatively) small tasks, then you really don;t want to go through the batch system every time. That is besides the fact that these machines are very bad in managing many tasks anyway.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Yeah, we sympathize.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thats always good :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Of course, one obvious solution is to get an allocation and execute a shell script that runs the tasks within that allocation - yes?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Not really. Most of our use-cases have dynamic runtime properties, which means that at t=0 the exact workload is not known.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In addition, I don't think such a script would allow me to work around the aprun bottleneck, as I'm not aware of a way to start MPI tasks that span multiple nodes from a Cray worker node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I looked a bit better at ORCM and it clearly overlaps with what I want to achieve.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Agreed. In ORCM, we allow a user to request a &#226;&#128;&#156;session&#226;&#128;&#157; that results in allocation of resources. Each session is given an &#226;&#128;&#156;orchestrator&#226;&#128;&#157; - the ORCM &#226;&#128;&#156;shepherd&#226;&#128;&#157; daemon - responsible for executing the individual tasks across the assigned allocation, and a collection of &#226;&#128;&#156;lamb&#226;&#128;&#157; daemons (one on each node of the allocation) that forms a distributed VM. The orchestrator can execute the tasks very quickly since it doesn&#226;&#128;&#153;t have to go back to the scheduler, and we allow it to do so according to any provided precedence requirement. Again, for simplicity, a shell script is the default mechanism for submitting the individual tasks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yeah, similar solution to a similar problem.
</span><br>
<span class="quotelev1">&gt; I noticed that Exascale is also part of the motivation? How does this relate to the pmix effort? Different part of the stack I guess.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; One thing I noticed is that parts of it runs as root, why is that?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ORCM is a full resource manager, which means it has a scheduler (rudimentary today) and boot-time daemons that must run as root so they can fork/exec the session-level daemons (that run at the user level). The orchestrator and its daemons all run at the user-level.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ok. Our solution is user-space only, as one of our features is that we are able to run across different type of systems. Both approaches come with a tradeoff obviously.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; We used to have a cmd line option in ORTE for what you propose - it wouldn&#226;&#128;&#153;t be too hard to restore. Is there some reason to do so?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can you point me to something that I could look for in the repo history, then I can see if it serves my purpose.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It would be back in the svn repo, I fear - would take awhile to hunt it down. Basically, it just (a) started all the daemons to create a VM, and (b) told mpirun to stick around as a persistent daemon. All subsequent calls to mpirun would reference back to the persistent one, thus using it to launch the jobs against the standing VM instead of starting a new one every time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *nod* That's what I tried to do this afternoon actually with the &quot;--ompi-server&quot;, but that was not meant to be.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; For ORCM, we just took that capability and expressed it as the &#226;&#128;&#156;shepherd&#226;&#128;&#157; plus &#226;&#128;&#156;lamb&#226;&#128;&#157; daemon architecture described above.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ACK.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If you don&#226;&#128;&#153;t want to replace the base RM, then using ORTE to establish a persistent VM is probably the way to go.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Indeed, thats what it sounds like. Plus that ORTE is generic enough that I can re-use it on other type of systems too.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I can probably make it do that again fairly readily. We have a developer&#226;&#128;&#153;s meeting next week, which usually means I have some free time (during evenings and topics I&#226;&#128;&#153;m not involved with), so I can take a crack at this then if that would be timely enough.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Happy to accept that offer. At this stage I'm not sure if I would want a CLI or would be more interested to be able to do this programmatically though.
</span><br>
<span class="quotelev1">&gt; Also more than willing to assist in any way I can.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried to see how it all worked, but because of the modular nature of ompi that was quite daunting. There is some learning curve I guess :-)
</span><br>
<span class="quotelev1">&gt; So it seems that mpirun is persistent, and opens up a listening port, then some orded's get launched that phone home.
</span><br>
<span class="quotelev1">&gt; From there I got lost in the MCA maze. How do the tasks get unto the compute nodes and started?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks a lot again, I appreciate your help.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Mark
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/01/26227.php">http://www.open-mpi.org/community/lists/users/2015/01/26227.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/01/26227.php">http://www.open-mpi.org/community/lists/users/2015/01/26227.php</a>&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26228/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26229.php">Mark Santcroos: "Re: [OMPI users] independent startup of orted and orterun"</a>
<li><strong>Previous message:</strong> <a href="26227.php">Mark Santcroos: "Re: [OMPI users] independent startup of orted and orterun"</a>
<li><strong>In reply to:</strong> <a href="26227.php">Mark Santcroos: "Re: [OMPI users] independent startup of orted and orterun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26229.php">Mark Santcroos: "Re: [OMPI users] independent startup of orted and orterun"</a>
<li><strong>Reply:</strong> <a href="26229.php">Mark Santcroos: "Re: [OMPI users] independent startup of orted and orterun"</a>
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
