<?
$subject_val = "Re: [OMPI users] independent startup of orted and orterun";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 21 15:21:03 2015" -->
<!-- isoreceived="20150121202103" -->
<!-- sent="Wed, 21 Jan 2015 12:20:59 -0800" -->
<!-- isosent="20150121202059" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] independent startup of orted and orterun" -->
<!-- id="7E455F44-8363-42D1-9BF6-429C4043FE51_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="76488969-DDCA-4877-A8A5-5F3C1B55607C_at_rutgers.edu" -->
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
<strong>Date:</strong> 2015-01-21 15:20:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26227.php">Mark Santcroos: "Re: [OMPI users] independent startup of orted and orterun"</a>
<li><strong>Previous message:</strong> <a href="26225.php">Mark Santcroos: "Re: [OMPI users] independent startup of orted and orterun"</a>
<li><strong>In reply to:</strong> <a href="26225.php">Mark Santcroos: "Re: [OMPI users] independent startup of orted and orterun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26227.php">Mark Santcroos: "Re: [OMPI users] independent startup of orted and orterun"</a>
<li><strong>Reply:</strong> <a href="26227.php">Mark Santcroos: "Re: [OMPI users] independent startup of orted and orterun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Mark
<br>
<p><span class="quotelev1">&gt; On Jan 21, 2015, at 11:21 AM, Mark Santcroos &lt;mark.santcroos_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Ralph, all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To give some background, I'm part of the RADICAL-Pilot [1] development team.
</span><br>
<span class="quotelev1">&gt; RADICAL-Pilot is a Pilot System, an implementation of the Pilot (job) concept, which is in its most minimal form takes care of the decoupling of resource acquisition and workload management.
</span><br>
<span class="quotelev1">&gt; So instead of launching your real_science.exe through PBS, you submit a Pilot, which will allow you to perform application level scheduling.
</span><br>
<span class="quotelev1">&gt; Most obvious use-case if you want to run many (relatively) small tasks, then you really don;t want to go through the batch system every time. That is besides the fact that these machines are very bad in managing many tasks anyway.
</span><br>
<p>Yeah, we sympathize. Of course, one obvious solution is to get an allocation and execute a shell script that runs the tasks within that allocation - yes?
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The recent discussion we had on Spawn() on Cray's also originates here.
</span><br>
<span class="quotelev1">&gt; I want to free myself from having to use aprun for every task, and therefore I am interested to see if ompi and/or orte can be the vehicle for that.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 21 Jan 2015, at 17:16 , Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Theoretically, yes - see the ORCM project, which basically does what you ask.
</span><br>
<span class="quotelev2">&gt;&gt; The launch system in there isn&#226;&#128;&#153;t fully implemented yet, but the fundamental idea is valid and supports some range of capability.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I looked a bit better at ORCM and it clearly overlaps with what I want to achieve.
</span><br>
<p>Agreed. In ORCM, we allow a user to request a &#226;&#128;&#156;session&#226;&#128;&#157; that results in allocation of resources. Each session is given an &#226;&#128;&#156;orchestrator&#226;&#128;&#157; - the ORCM &#226;&#128;&#156;shepherd&#226;&#128;&#157; daemon - responsible for executing the individual tasks across the assigned allocation, and a collection of &#226;&#128;&#156;lamb&#226;&#128;&#157; daemons (one on each node of the allocation) that forms a distributed VM. The orchestrator can execute the tasks very quickly since it doesn&#226;&#128;&#153;t have to go back to the scheduler, and we allow it to do so according to any provided precedence requirement. Again, for simplicity, a shell script is the default mechanism for submitting the individual tasks.
<br>
<p><span class="quotelev1">&gt; One thing I noticed is that parts of it runs as root, why is that?
</span><br>
<p>ORCM is a full resource manager, which means it has a scheduler (rudimentary today) and boot-time daemons that must run as root so they can fork/exec the session-level daemons (that run at the user level). The orchestrator and its daemons all run at the user-level.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We used to have a cmd line option in ORTE for what you propose - it wouldn&#226;&#128;&#153;t be too hard to restore. Is there some reason to do so?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you point me to something that I could look for in the repo history, then I can see if it serves my purpose.
</span><br>
<p>It would be back in the svn repo, I fear - would take awhile to hunt it down. Basically, it just (a) started all the daemons to create a VM, and (b) told mpirun to stick around as a persistent daemon. All subsequent calls to mpirun would reference back to the persistent one, thus using it to launch the jobs against the standing VM instead of starting a new one every time.
<br>
<p>For ORCM, we just took that capability and expressed it as the &#226;&#128;&#156;shepherd&#226;&#128;&#157; plus &#226;&#128;&#156;lamb&#226;&#128;&#157; daemon architecture described above. If you don&#226;&#128;&#153;t want to replace the base RM, then using ORTE to establish a persistent VM is probably the way to go.
<br>
<p>I can probably make it do that again fairly readily. We have a developer&#226;&#128;&#153;s meeting next week, which usually means I have some free time (during evenings and topics I&#226;&#128;&#153;m not involved with), so I can take a crack at this then if that would be timely enough.
<br>
<p>Ralph
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you think there is enough to warrant looking in more detail at ORCM I'm happy to do that too.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Mark
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. <a href="https://github.com/radical-cybertools/radical.pilot">https://github.com/radical-cybertools/radical.pilot</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/01/26225.php">http://www.open-mpi.org/community/lists/users/2015/01/26225.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26227.php">Mark Santcroos: "Re: [OMPI users] independent startup of orted and orterun"</a>
<li><strong>Previous message:</strong> <a href="26225.php">Mark Santcroos: "Re: [OMPI users] independent startup of orted and orterun"</a>
<li><strong>In reply to:</strong> <a href="26225.php">Mark Santcroos: "Re: [OMPI users] independent startup of orted and orterun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26227.php">Mark Santcroos: "Re: [OMPI users] independent startup of orted and orterun"</a>
<li><strong>Reply:</strong> <a href="26227.php">Mark Santcroos: "Re: [OMPI users] independent startup of orted and orterun"</a>
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
