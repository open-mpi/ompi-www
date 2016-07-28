<?
$subject_val = "Re: [OMPI users] independent startup of orted and orterun";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 21 15:52:44 2015" -->
<!-- isoreceived="20150121205244" -->
<!-- sent="Wed, 21 Jan 2015 21:52:39 +0100" -->
<!-- isosent="20150121205239" -->
<!-- name="Mark Santcroos" -->
<!-- email="mark.santcroos_at_[hidden]" -->
<!-- subject="Re: [OMPI users] independent startup of orted and orterun" -->
<!-- id="8006E71D-CCD5-4455-AD1F-C930B4053CA1_at_rutgers.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="7E455F44-8363-42D1-9BF6-429C4043FE51_at_open-mpi.org" -->
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
<strong>From:</strong> Mark Santcroos (<em>mark.santcroos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-21 15:52:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26228.php">Ralph Castain: "Re: [OMPI users] independent startup of orted and orterun"</a>
<li><strong>Previous message:</strong> <a href="26226.php">Ralph Castain: "Re: [OMPI users] independent startup of orted and orterun"</a>
<li><strong>In reply to:</strong> <a href="26226.php">Ralph Castain: "Re: [OMPI users] independent startup of orted and orterun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26228.php">Ralph Castain: "Re: [OMPI users] independent startup of orted and orterun"</a>
<li><strong>Reply:</strong> <a href="26228.php">Ralph Castain: "Re: [OMPI users] independent startup of orted and orterun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p><span class="quotelev1">&gt; On 21 Jan 2015, at 21:20 , Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Mark
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 21, 2015, at 11:21 AM, Mark Santcroos &lt;mark.santcroos_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Ralph, all,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; To give some background, I'm part of the RADICAL-Pilot [1] development team.
</span><br>
<span class="quotelev2">&gt;&gt; RADICAL-Pilot is a Pilot System, an implementation of the Pilot (job) concept, which is in its most minimal form takes care of the decoupling of resource acquisition and workload management.
</span><br>
<span class="quotelev2">&gt;&gt; So instead of launching your real_science.exe through PBS, you submit a Pilot, which will allow you to perform application level scheduling.
</span><br>
<span class="quotelev2">&gt;&gt; Most obvious use-case if you want to run many (relatively) small tasks, then you really don;t want to go through the batch system every time. That is besides the fact that these machines are very bad in managing many tasks anyway.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yeah, we sympathize.
</span><br>
<p>Thats always good :-)
<br>
<p><span class="quotelev1">&gt; Of course, one obvious solution is to get an allocation and execute a shell script that runs the tasks within that allocation - yes?
</span><br>
<p>Not really. Most of our use-cases have dynamic runtime properties, which means that at t=0 the exact workload is not known.
<br>
<p>In addition, I don't think such a script would allow me to work around the aprun bottleneck, as I'm not aware of a way to start MPI tasks that span multiple nodes from a Cray worker node.
<br>
<p><span class="quotelev2">&gt;&gt; I looked a bit better at ORCM and it clearly overlaps with what I want to achieve.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Agreed. In ORCM, we allow a user to request a &#226;&#128;&#156;session&#226;&#128;&#157; that results in allocation of resources. Each session is given an &#226;&#128;&#156;orchestrator&#226;&#128;&#157; - the ORCM &#226;&#128;&#156;shepherd&#226;&#128;&#157; daemon - responsible for executing the individual tasks across the assigned allocation, and a collection of &#226;&#128;&#156;lamb&#226;&#128;&#157; daemons (one on each node of the allocation) that forms a distributed VM. The orchestrator can execute the tasks very quickly since it doesn&#226;&#128;&#153;t have to go back to the scheduler, and we allow it to do so according to any provided precedence requirement. Again, for simplicity, a shell script is the default mechanism for submitting the individual tasks.
</span><br>
<p>Yeah, similar solution to a similar problem.
<br>
I noticed that Exascale is also part of the motivation? How does this relate to the pmix effort? Different part of the stack I guess.
<br>
<p><span class="quotelev2">&gt;&gt; One thing I noticed is that parts of it runs as root, why is that?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ORCM is a full resource manager, which means it has a scheduler (rudimentary today) and boot-time daemons that must run as root so they can fork/exec the session-level daemons (that run at the user level). The orchestrator and its daemons all run at the user-level.
</span><br>
<p>Ok. Our solution is user-space only, as one of our features is that we are able to run across different type of systems. Both approaches come with a tradeoff obviously.
<br>
<p><span class="quotelev3">&gt;&gt;&gt; We used to have a cmd line option in ORTE for what you propose - it wouldn&#226;&#128;&#153;t be too hard to restore. Is there some reason to do so?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Can you point me to something that I could look for in the repo history, then I can see if it serves my purpose.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It would be back in the svn repo, I fear - would take awhile to hunt it down. Basically, it just (a) started all the daemons to create a VM, and (b) told mpirun to stick around as a persistent daemon. All subsequent calls to mpirun would reference back to the persistent one, thus using it to launch the jobs against the standing VM instead of starting a new one every time.
</span><br>
<p>*nod* That's what I tried to do this afternoon actually with the &quot;--ompi-server&quot;, but that was not meant to be.
<br>
<p><span class="quotelev1">&gt; For ORCM, we just took that capability and expressed it as the &#226;&#128;&#156;shepherd&#226;&#128;&#157; plus &#226;&#128;&#156;lamb&#226;&#128;&#157; daemon architecture described above.
</span><br>
<p>ACK.
<br>
<p><span class="quotelev1">&gt; If you don&#226;&#128;&#153;t want to replace the base RM, then using ORTE to establish a persistent VM is probably the way to go.
</span><br>
<p>Indeed, thats what it sounds like. Plus that ORTE is generic enough that I can re-use it on other type of systems too.
<br>
<p><span class="quotelev1">&gt; I can probably make it do that again fairly readily. We have a developer&#226;&#128;&#153;s meeting next week, which usually means I have some free time (during evenings and topics I&#226;&#128;&#153;m not involved with), so I can take a crack at this then if that would be timely enough.
</span><br>
<p>Happy to accept that offer. At this stage I'm not sure if I would want a CLI or would be more interested to be able to do this programmatically though.
<br>
Also more than willing to assist in any way I can.
<br>
<p>I tried to see how it all worked, but because of the modular nature of ompi that was quite daunting. There is some learning curve I guess :-)
<br>
So it seems that mpirun is persistent, and opens up a listening port, then some orded's get launched that phone home.
<br>
From there I got lost in the MCA maze. How do the tasks get unto the compute nodes and started?
<br>
<p>Thanks a lot again, I appreciate your help.
<br>
<p>Cheers,
<br>
<p>Mark<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26228.php">Ralph Castain: "Re: [OMPI users] independent startup of orted and orterun"</a>
<li><strong>Previous message:</strong> <a href="26226.php">Ralph Castain: "Re: [OMPI users] independent startup of orted and orterun"</a>
<li><strong>In reply to:</strong> <a href="26226.php">Ralph Castain: "Re: [OMPI users] independent startup of orted and orterun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26228.php">Ralph Castain: "Re: [OMPI users] independent startup of orted and orterun"</a>
<li><strong>Reply:</strong> <a href="26228.php">Ralph Castain: "Re: [OMPI users] independent startup of orted and orterun"</a>
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
