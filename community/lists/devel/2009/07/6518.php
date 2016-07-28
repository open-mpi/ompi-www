<?
$subject_val = "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 24 03:27:11 2009" -->
<!-- isoreceived="20090724072711" -->
<!-- sent="Fri, 24 Jul 2009 17:26:57 +1000 (EST)" -->
<!-- isosent="20090724072657" -->
<!-- name="Chris Samuel" -->
<!-- email="csamuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support" -->
<!-- id="131212564.164411248420417169.JavaMail.root_at_mail.vpac.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="1303531937.164391248420304873.JavaMail.root_at_mail.vpac.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support<br>
<strong>From:</strong> Chris Samuel (<em>csamuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-24 03:26:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6519.php">Chris Samuel: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>Previous message:</strong> <a href="6517.php">Jeff Squyres: "[OMPI devel] Shared library versioning"</a>
<li><strong>Maybe in reply to:</strong> <a href="6406.php">Chris Samuel: "[OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6519.php">Chris Samuel: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
----- &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p>Hi Jeff,
<br>
<p><span class="quotelev1">&gt; I'm the &quot;primary PLPA&quot; guy that Ralph referred to, and I was on  
</span><br>
<span class="quotelev1">&gt; vacation last week -- sorry for missing all the chatter.
</span><br>
<p>No worries!
<br>
<p><span class="quotelev1">&gt; Based on your mails, it looks like you're out this week -- so little 
</span><br>
<span class="quotelev1">&gt; will likely occur.  I'm at the MPI Forum standards meeting next week, 
</span><br>
<span class="quotelev1">&gt; so my replies to email will be sporatic.
</span><br>
<p>Not a problem, can quite understand.
<br>
<p><span class="quotelev1">&gt; OMPI is pretty much directly calling PLPA to set affinity for  
</span><br>
<span class="quotelev1">&gt; &quot;processors&quot; 0, 1, 2, 3 (which PLPA translates into Linux virtual  
</span><br>
<span class="quotelev1">&gt; processor IDs, and then invokes sched_setaffinity with each of those 
</span><br>
<span class="quotelev1">&gt; IDs).
</span><br>
<p>Cool, so it does indeed sound like something that can be
<br>
solved purely inside PLPA.  That's good to know!
<br>
<p><span class="quotelev1">&gt; Note that the EFAULT errors you're seeing in the output are  
</span><br>
<span class="quotelev1">&gt; deliberate. [...]
</span><br>
<p>Great, after reading a bit more I got the impression that's
<br>
what might be going on, thanks for the confirmation!
<br>
<p><span class="quotelev1">&gt; But as to why it's getting EINVAL, that could be wonky.
</span><br>
<span class="quotelev1">&gt; We might want to take this to the PLPA list and have you
</span><br>
<span class="quotelev1">&gt; run some small, non-MPI examples to ensure that PLPA is
</span><br>
<span class="quotelev1">&gt; parsing your /sys tree properly, etc.
</span><br>
<p>Not a problem.
<br>
<p><span class="quotelev1">&gt; Ping when you get back from vacation.
</span><br>
<p>I'm back Monday (which is Sunday arvo for you I think).
<br>
<p>cheers!
<br>
Chris
<br>
<pre>
-- 
Christopher Samuel - (03) 9925 4751 - Systems Manager
 The Victorian Partnership for Advanced Computing
 P.O. Box 201, Carlton South, VIC 3053, Australia
VPAC is a not-for-profit Registered Research Agency
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6519.php">Chris Samuel: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>Previous message:</strong> <a href="6517.php">Jeff Squyres: "[OMPI devel] Shared library versioning"</a>
<li><strong>Maybe in reply to:</strong> <a href="6406.php">Chris Samuel: "[OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6519.php">Chris Samuel: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
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
