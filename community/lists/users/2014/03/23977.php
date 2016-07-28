<?
$subject_val = "Re: [OMPI users] busy waiting and oversubscriptions";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 26 19:21:07 2014" -->
<!-- isoreceived="20140326232107" -->
<!-- sent="Wed, 26 Mar 2014 19:21:03 -0400" -->
<!-- isosent="20140326232103" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] busy waiting and oversubscriptions" -->
<!-- id="533360DF.9060606_at_ldeo.columbia.edu" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="1395869218.27857.191.camel_at_localhost" -->
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
<strong>Subject:</strong> Re: [OMPI users] busy waiting and oversubscriptions<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-26 19:21:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23978.php">Saliya Ekanayake: "[OMPI users] How to replace --cpus-per-proc by --map-by"</a>
<li><strong>Previous message:</strong> <a href="23976.php">Ross Boylan: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<li><strong>In reply to:</strong> <a href="23976.php">Ross Boylan: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23981.php">Andreas Schäfer: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<li><strong>Reply:</strong> <a href="23981.php">Andreas Schäfer: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<li><strong>Reply:</strong> <a href="24005.php">Dave Love: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 03/26/2014 05:26 PM, Ross Boylan wrote:
<br>
<span class="quotelev1">&gt; [Main part is at the bottom]
</span><br>
<span class="quotelev1">&gt; On Wed, 2014-03-26 at 19:28 +0100, Andreas Sch&#195;&#164;fer wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Ross-
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 09:08 Wed 26 Mar     , Ross Boylan wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Wed, 2014-03-26 at 10:27 +0000, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Mar 26, 2014, at 1:31 AM, Andreas Sch&#195;&#164;fer &lt;gentryx_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This seems to restate the premise of my question.  Is it meant to lead
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to the answer &quot;A process in busy wait blocks other users of the CPU to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the same extent as any other process at 100%&quot;?
</span><br>
<span class="quotelev2">&gt;&gt; Yes.
</span><br>
<span class="quotelev1">&gt; Thanks for  confirming.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; At any rate, my question is whether, if I have processes that spend most
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; of their time waiting to receive a message, I can put more of them than
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I have physical cores without much slowdown?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; AFAICS there will always be a certain slowdown. Is there a reason why
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; you would want to oversubscribe your nodes?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Agreed -- this is not a good idea.  It suggests that you should make your existing code more efficient -- perhaps by overlapping communication and computation.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My motivation was to get more work done with a given number of CPUs, and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; also to find out how much of burden I was imposing on other users.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My application consists of processes that have different roles.  Some of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the roles don't have much to do (they play important roles, but don't do
</span><br>
<span class="quotelev3">&gt;&gt;&gt; much computation).  My hope was that I could add them on without
</span><br>
<span class="quotelev3">&gt;&gt;&gt; imposing much of a burden.
</span><br>
<span class="quotelev2">&gt;&gt; If you have a complex workflow with varying computational loads, then
</span><br>
<span class="quotelev2">&gt;&gt; you might want to take a look at runtime systems which allow you to
</span><br>
<span class="quotelev2">&gt;&gt; express this directly through their API, e.g. HPX[1]. HPX has proven to
</span><br>
<span class="quotelev2">&gt;&gt; run with high efficiency on a wide range of architectures, and with a
</span><br>
<span class="quotelev2">&gt;&gt; multitude of different workloads.
</span><br>
<span class="quotelev1">&gt; Thanks for the pointer.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Second, we do not operate in a batch queuing environment
</span><br>
<span class="quotelev2">&gt;&gt; Why not fix that?
</span><br>
<span class="quotelev1">&gt; I'm not the sysadmin, though I'm involved in the group that sets policy.
</span><br>
<span class="quotelev1">&gt; At one point we were using Sun's grid engine, but I don't think it's
</span><br>
<span class="quotelev1">&gt; installed now.  I'm not sure why.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have discussed putting in a batch queuing system and nobody was
</span><br>
<span class="quotelev1">&gt; really pushing for it.  My impression was (and probably still is) that
</span><br>
<span class="quotelev1">&gt; it was more pain than gain.  There is hassle not only for the sysadmin
</span><br>
<span class="quotelev1">&gt; to set it up (and, I suppose, monitor it), but for users.  Personally I
</span><br>
<span class="quotelev1">&gt; run a lot of interactive parallel jobs (the interaction is on rank 0
</span><br>
<span class="quotelev1">&gt; only).  I have the impression that won't work under a batch system,
</span><br>
<span class="quotelev1">&gt; though I could be wrong.  I also had the impression we'd need to have an
</span><br>
<span class="quotelev1">&gt; estimate of how long the job would run when we submit, and we don't
</span><br>
<span class="quotelev1">&gt; always know.
</span><br>
<p>But I've never really used such a system, and may not appreciate what it
<br>
would get us.  The other reason we haven't bothered is that the load on
<br>
the cluster was relatively light and contention was low.  That is less
<br>
and less true, which probably starts tipping the balance toward a
<br>
queuing system.
<br>
<p>This is wandering off topic, but if you or anyone else could say more
<br>
about why you regard the absence of a queuing system as a problem that
<br>
should be fixed, I'd love to hear it.
<br>
<p>Ross
<br>
<p>Hi Ross
<br>
<p>Some pros:
<br>
(I don't know of any cons.)
<br>
<p>Torque+Maui, SGE/OGE, and Slurm are free.
<br>
There are commercial products as well.
<br>
<p>Installation and initial configuration may take some effort,
<br>
but after that it is mostly peace of mind, and occasional tuning to the 
<br>
workload.
<br>
<p>You can build OpenMPI integrated to them (no need for a hostfile to 
<br>
submit jobs,
<br>
OpenMPI will use whatever nodes the queue system gave you).
<br>
<p>If you build the queue system with cpuset control, a node can be shared 
<br>
among several jobs, but the cpus/cores will be assigned specifically
<br>
to each job's processes, so that nobody steps on each other toes.
<br>
(There is similar control over the memory used per job as well.)
<br>
<p>Queue systems won't allow resources to be oversubscribed.
<br>
As it is now, what else but courtesy and a great deal of coordination
<br>
would guarantee that you and your colleagues won't launch
<br>
several computationally demanding jobs on the same node, using the same 
<br>
cpus, perhaps using more memory than the available RAM,
<br>
maybe forcing the system to swap to disk, and ruining performance?
<br>
I've been to an organization that didn't want to use a queue system,
<br>
and where people would have to go knocking on doors
<br>
to ask things like: &quot;Would you please release nodes 01 to 32?
<br>
You have processes leftover from a dead job running on them for a week,
<br>
taking 100% CPU, and there are no nodes available.&quot;
<br>
The queue system avoids that, it has courtesy and coordination built in, 
<br>
so to speak.
<br>
<p>You can configure the queue system from very simple to quite complex
<br>
resource use policies, with queues for specific types of jobs, etc.
<br>
You can start with single queue and a first-in-first-out job policy,
<br>
then make it more complex as the workload increases.
<br>
<p>Queue systems do support interactive jobs (even with X-windows GUIs, if 
<br>
needed).
<br>
You submit the interactive job, the queue system puts you in
<br>
a free node, and you work normally there.
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23978.php">Saliya Ekanayake: "[OMPI users] How to replace --cpus-per-proc by --map-by"</a>
<li><strong>Previous message:</strong> <a href="23976.php">Ross Boylan: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<li><strong>In reply to:</strong> <a href="23976.php">Ross Boylan: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23981.php">Andreas Schäfer: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<li><strong>Reply:</strong> <a href="23981.php">Andreas Schäfer: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<li><strong>Reply:</strong> <a href="24005.php">Dave Love: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
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
