<?
$subject_val = "Re: [OMPI users] busy waiting and oversubscriptions";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 26 17:27:01 2014" -->
<!-- isoreceived="20140326212701" -->
<!-- sent="Wed, 26 Mar 2014 14:26:58 -0700" -->
<!-- isosent="20140326212658" -->
<!-- name="Ross Boylan" -->
<!-- email="ross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] busy waiting and oversubscriptions" -->
<!-- id="1395869218.27857.191.camel_at_localhost" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20140326182858.GA24087_at_neuromancer" -->
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
<strong>From:</strong> Ross Boylan (<em>ross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-26 17:26:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23977.php">Gus Correa: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<li><strong>Previous message:</strong> <a href="23975.php">Andreas Sch&#228;fer: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<li><strong>In reply to:</strong> <a href="23975.php">Andreas Sch&#228;fer: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23977.php">Gus Correa: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<li><strong>Reply:</strong> <a href="23977.php">Gus Correa: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<li><strong>Reply:</strong> <a href="23983.php">Andreas Schäfer: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
[Main part is at the bottom]
<br>
On Wed, 2014-03-26 at 19:28 +0100, Andreas Sch&#195;&#164;fer wrote:
<br>
<span class="quotelev1">&gt; Ross-
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 09:08 Wed 26 Mar     , Ross Boylan wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, 2014-03-26 at 10:27 +0000, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Mar 26, 2014, at 1:31 AM, Andreas Sch&#195;&#164;fer &lt;gentryx_at_[hidden]&gt; wrote:
</span><br>
...
<br>
<span class="quotelev2">&gt; &gt; This seems to restate the premise of my question.  Is it meant to lead
</span><br>
<span class="quotelev2">&gt; &gt; to the answer &quot;A process in busy wait blocks other users of the CPU to
</span><br>
<span class="quotelev2">&gt; &gt; the same extent as any other process at 100%&quot;?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes.
</span><br>
Thanks for  confirming.
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; At any rate, my question is whether, if I have processes that spend most
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; of their time waiting to receive a message, I can put more of them than
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; I have physical cores without much slowdown?
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; AFAICS there will always be a certain slowdown. Is there a reason why
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; you would want to oversubscribe your nodes?
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Agreed -- this is not a good idea.  It suggests that you should make your existing code more efficient -- perhaps by overlapping communication and computation.
</span><br>
<span class="quotelev2">&gt; &gt; My motivation was to get more work done with a given number of CPUs, and
</span><br>
<span class="quotelev2">&gt; &gt; also to find out how much of burden I was imposing on other users.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; My application consists of processes that have different roles.  Some of
</span><br>
<span class="quotelev2">&gt; &gt; the roles don't have much to do (they play important roles, but don't do
</span><br>
<span class="quotelev2">&gt; &gt; much computation).  My hope was that I could add them on without
</span><br>
<span class="quotelev2">&gt; &gt; imposing much of a burden.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you have a complex workflow with varying computational loads, then
</span><br>
<span class="quotelev1">&gt; you might want to take a look at runtime systems which allow you to
</span><br>
<span class="quotelev1">&gt; express this directly through their API, e.g. HPX[1]. HPX has proven to
</span><br>
<span class="quotelev1">&gt; run with high efficiency on a wide range of architectures, and with a
</span><br>
<span class="quotelev1">&gt; multitude of different workloads.
</span><br>
Thanks for the pointer.
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Second, we do not operate in a batch queuing environment
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Why not fix that?
</span><br>
I'm not the sysadmin, though I'm involved in the group that sets policy.
<br>
At one point we were using Sun's grid engine, but I don't think it's
<br>
installed now.  I'm not sure why.
<br>
<p>We have discussed putting in a batch queuing system and nobody was
<br>
really pushing for it.  My impression was (and probably still is) that
<br>
it was more pain than gain.  There is hassle not only for the sysadmin
<br>
to set it up (and, I suppose, monitor it), but for users.  Personally I
<br>
run a lot of interactive parallel jobs (the interaction is on rank 0
<br>
only).  I have the impression that won't work under a batch system,
<br>
though I could be wrong.  I also had the impression we'd need to have an
<br>
estimate of how long the job would run when we submit, and we don't
<br>
always know.
<br>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23977.php">Gus Correa: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<li><strong>Previous message:</strong> <a href="23975.php">Andreas Sch&#228;fer: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<li><strong>In reply to:</strong> <a href="23975.php">Andreas Sch&#228;fer: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23977.php">Gus Correa: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<li><strong>Reply:</strong> <a href="23977.php">Gus Correa: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<li><strong>Reply:</strong> <a href="23983.php">Andreas Schäfer: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
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
