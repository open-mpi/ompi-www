<?
$subject_val = "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 25 03:00:29 2009" -->
<!-- isoreceived="20090725070029" -->
<!-- sent="Sat, 25 Jul 2009 17:00:19 +1000 (EST)" -->
<!-- isosent="20090725070019" -->
<!-- name="Chris Samuel" -->
<!-- email="csamuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support" -->
<!-- id="2132414406.209541248505219682.JavaMail.root_at_mail.vpac.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="1050180897.209511248505108735.JavaMail.root_at_mail.vpac.org" -->
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
<strong>Date:</strong> 2009-07-25 03:00:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6527.php">Jeff Squyres: "[OMPI devel] ptmalloc replacement"</a>
<li><strong>Previous message:</strong> <a href="6525.php">Ralph Castain: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>Maybe in reply to:</strong> <a href="6406.php">Chris Samuel: "[OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
----- &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Perhaps a telecon (myself, Jeff S, and you) would be best at this  
</span><br>
<span class="quotelev1">&gt; stage.
</span><br>
<p>Sounds good, will take that part to private email.
<br>
<p><span class="quotelev1">&gt; I confess I'm now confused too - what you describe is precisely
</span><br>
<span class="quotelev1">&gt; what we already do.
</span><br>
<p>I added printf()'s to the PLPA init(),
<br>
PLPA_NAME(sched_getaffinity)() and
<br>
PLPA_NAME(sched_setaffinity)() functions to see where
<br>
they are getting called to try and clarify what's up.
<br>
<p>I do see init() and PLPA_NAME(sched_getaffinity)() getting
<br>
called, but never PLPA_NAME(sched_getaffinity)().
<br>
<p>This is on my home box (quad core) not our production
<br>
clusters, but the basics should be the same..
<br>
<p>cheers,
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
<li><strong>Next message:</strong> <a href="6527.php">Jeff Squyres: "[OMPI devel] ptmalloc replacement"</a>
<li><strong>Previous message:</strong> <a href="6525.php">Ralph Castain: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>Maybe in reply to:</strong> <a href="6406.php">Chris Samuel: "[OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<!-- nextthread="start" -->
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
