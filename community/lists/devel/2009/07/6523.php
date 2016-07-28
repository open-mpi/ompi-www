<?
$subject_val = "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 24 09:57:37 2009" -->
<!-- isoreceived="20090724135737" -->
<!-- sent="Fri, 24 Jul 2009 23:57:22 +1000 (EST)" -->
<!-- isosent="20090724135722" -->
<!-- name="Chris Samuel" -->
<!-- email="csamuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support" -->
<!-- id="1731374888.165071248443842303.JavaMail.root_at_mail.vpac.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="1126256257.165051248443111820.JavaMail.root_at_mail.vpac.org" -->
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
<strong>Date:</strong> 2009-07-24 09:57:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6524.php">Sebastian Rinke: "[OMPI devel] ob1 question"</a>
<li><strong>Previous message:</strong> <a href="6522.php">Jeff Squyres: "Re: [OMPI devel] Shared library versioning"</a>
<li><strong>Maybe in reply to:</strong> <a href="6406.php">Chris Samuel: "[OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6525.php">Ralph Castain: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>Reply:</strong> <a href="6525.php">Ralph Castain: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>----- &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ummm....I'll let you guys work this out on PLPA. However, just to  
</span><br>
<span class="quotelev1">&gt; clarify, OMPI currently binds to cores, not logical cpus. It is the  
</span><br>
<span class="quotelev1">&gt; PLPA that is &quot;dumb&quot; and provides the plumbing to do what OMPI tells
</span><br>
<span class="quotelev1">&gt; it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; :-)
</span><br>
<p>Ahh, if that's the case then this isn't something that PLPA
<br>
needs to be involved in then!  I'm getting confused here,
<br>
haven't had a coffee since Monday, must be the reason. :-)
<br>
<p>What we really want is for the usual execution of:
<br>
<p>mpiexec /path/to/my/code $arguments
<br>
<p>to launch via the PBS TM API, work out what cores are
<br>
available to it on the nodes assigned to it and then
<br>
bind appropriately to them.  Easy, see.. ;-)
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
<li><strong>Next message:</strong> <a href="6524.php">Sebastian Rinke: "[OMPI devel] ob1 question"</a>
<li><strong>Previous message:</strong> <a href="6522.php">Jeff Squyres: "Re: [OMPI devel] Shared library versioning"</a>
<li><strong>Maybe in reply to:</strong> <a href="6406.php">Chris Samuel: "[OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6525.php">Ralph Castain: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>Reply:</strong> <a href="6525.php">Ralph Castain: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
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
