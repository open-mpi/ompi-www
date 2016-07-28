<?
$subject_val = "Re: [OMPI users] busy waiting and oversubscriptions";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 26 12:08:36 2014" -->
<!-- isoreceived="20140326160836" -->
<!-- sent="Wed, 26 Mar 2014 09:08:34 -0700" -->
<!-- isosent="20140326160834" -->
<!-- name="Ross Boylan" -->
<!-- email="ross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] busy waiting and oversubscriptions" -->
<!-- id="1395850114.27857.161.camel_at_localhost" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="F2CBF75A-0559-437B-B52B-8C54D174E5EC_at_cisco.com" -->
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
<strong>Date:</strong> 2014-03-26 12:08:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23975.php">Andreas Schäfer: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<li><strong>Previous message:</strong> <a href="23973.php">Tim Prince: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<li><strong>In reply to:</strong> <a href="23970.php">Jeff Squyres (jsquyres): "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23975.php">Andreas Schäfer: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<li><strong>Reply:</strong> <a href="23975.php">Andreas Schäfer: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 2014-03-26 at 10:27 +0000, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; On Mar 26, 2014, at 1:31 AM, Andreas Sch&#195;&#164;fer &lt;gentryx_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Even when &quot;idle&quot;, MPI processes use all the CPU.  I thought I remember
</span><br>
<span class="quotelev3">&gt; &gt;&gt; someone saying that they will be low priority, and so not pose much of
</span><br>
<span class="quotelev3">&gt; &gt;&gt; an obstacle to other uses of the CPU.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; well, if they're blocking in an MPI call, then they'll be doing a busy
</span><br>
<span class="quotelev2">&gt; &gt; wait, so each thread will easily churn up 100% CPU load.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +1
</span><br>
This seems to restate the premise of my question.  Is it meant to lead
<br>
to the answer &quot;A process in busy wait blocks other users of the CPU to
<br>
the same extent as any other process at 100%&quot;?
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; At any rate, my question is whether, if I have processes that spend most
</span><br>
<span class="quotelev3">&gt; &gt;&gt; of their time waiting to receive a message, I can put more of them than
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I have physical cores without much slowdown?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; AFAICS there will always be a certain slowdown. Is there a reason why
</span><br>
<span class="quotelev2">&gt; &gt; you would want to oversubscribe your nodes?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Agreed -- this is not a good idea.  It suggests that you should make your existing code more efficient -- perhaps by overlapping communication and computation.
</span><br>
My motivation was to get more work done with a given number of CPUs, and
<br>
also to find out how much of burden I was imposing on other users.
<br>
<p>My application consists of processes that have different roles.  Some of
<br>
the roles don't have much to do (they play important roles, but don't do
<br>
much computation).  My hope was that I could add them on without
<br>
imposing much of a burden.
<br>
<p>Second, we do not operate in a batch queuing environment and so
<br>
different users can end up sharing a CPU (though we try to avoid it).
<br>
So I was wondering whether my &quot;idle but busy waiting&quot; processes would
<br>
really get in the way of others.
<br>
<p>Finally, overlapping communication and computation is a bit tricky.  The
<br>
recent thread I started about Isend indicates that communication
<br>
requires the involvement of both the sender and receiver processes and
<br>
if one of them is busy with computation it can really slow things down.
<br>
I seem to have gotten good results by using Isend generally, in
<br>
particular when sending messages to the heavy computing processes, and
<br>
Send when sending from those same processes.
<br>
<p>Ross
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23975.php">Andreas Schäfer: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<li><strong>Previous message:</strong> <a href="23973.php">Tim Prince: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<li><strong>In reply to:</strong> <a href="23970.php">Jeff Squyres (jsquyres): "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23975.php">Andreas Schäfer: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<li><strong>Reply:</strong> <a href="23975.php">Andreas Schäfer: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
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
