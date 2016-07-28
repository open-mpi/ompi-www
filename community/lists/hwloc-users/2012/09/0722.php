<?
$subject_val = "Re: [hwloc-users] Solaris and hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 13 11:09:23 2012" -->
<!-- isoreceived="20120913150923" -->
<!-- sent="Thu, 13 Sep 2012 11:09:16 -0400" -->
<!-- isosent="20120913150916" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Solaris and hwloc" -->
<!-- id="6468E0D4-1F18-45A4-B279-7B9E91EEC0BE_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="505194D4.60307_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Solaris and hwloc<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-13 11:09:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0723.php">Brice Goglin: "Re: [hwloc-users] Solaris and hwloc"</a>
<li><strong>Previous message:</strong> <a href="0721.php">Brice Goglin: "Re: [hwloc-users] Solaris and hwloc"</a>
<li><strong>In reply to:</strong> <a href="0721.php">Brice Goglin: "Re: [hwloc-users] Solaris and hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0723.php">Brice Goglin: "Re: [hwloc-users] Solaris and hwloc"</a>
<li><strong>Reply:</strong> <a href="0723.php">Brice Goglin: "Re: [hwloc-users] Solaris and hwloc"</a>
<li><strong>Reply:</strong> <a href="0727.php">Samuel Thibault: "Re: [hwloc-users] Solaris and hwloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
These are all good points.
<br>
<p>That being said, Brock Palen made another good point on the OMPI list recently.  It was in regards to OpenFabrics registered memory, but the issue is quite analogous.
<br>
<p>OMPI used to issue a warning if there wasn't enough registered memory available, but allow the job to run anyway (at lower performance).  Brock was firmly opposed to that (he's an HPC sysadmin): he didn't want jobs to run at all if there wasn't enough registered memory.  
<br>
<p>One of the rationale here is that users won't tend to notice a warning at the top of a job's stdout/stderr -- if the job ran, that's good enough (until much later when they realize that they're not getting the right performance, or, worse, this job is impacting other jobs because its affinity is wrong).  But if the job doesn't run, that will get noticed immediately, and the problem will be fixed by a human.
<br>
<p>Hence, it seems safer to fall back on the &quot;if we can't give the user what they asked for, fail and let a human figure it out&quot; philosophy.  Even if it means changing the default.  Keep in mind that if they run hwloc-bind, they're specifically asking for binding.
<br>
<p>I think I'm now 80/20 in the &quot;abort hwloc-bind if it fails to bind&quot; camp now.  :-)
<br>
<p>After a little more thought, I'm also thinking that having a &quot;it's ok if binding fails&quot; CLI flag is a bad idea.  If the user really wants something to run without binding, then you can just do that in the shell:
<br>
<p>-----
<br>
hwloc-bind ...whatever... my_executable
<br>
if test &quot;$?&quot; != &quot;0&quot;; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# run without binding
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;my_executable
<br>
fi
<br>
-----
<br>
<p>My $0.02.  :)
<br>
<p><p>On Sep 13, 2012, at 4:09 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; (resending because the formatting was bad)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 13/09/2012 00:26, Jeff Squyres a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 12, 2012, at 10:30 AM, Samuel Thibault wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sidenote: if hwloc-bind fails to bind, should we still launch the child process?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Well, it's up to you to decide :)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Anyone have an opinion?  I'm 60/40 in favor of not letting it run, under the rationale that the user asked for something that we can't deliver, so we shouldn't continue.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Any idea what numactl does if it can't bind?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Let me add taskset to the list of tools to compare to, and distinguish
</span><br>
<span class="quotelev1">&gt; several cases:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1) invalid command line
</span><br>
<span class="quotelev1">&gt; * taskset (with invalid list &quot;2,&quot;) errors out
</span><br>
<span class="quotelev1">&gt; * numactl (with invalid list &quot;2,&quot;) errors out
</span><br>
<span class="quotelev1">&gt; * hwloc-bind (with invalid location followed by &quot;-- executable&quot;) errors
</span><br>
<span class="quotelev1">&gt; out (considers the invalid location as the executable name)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2) valid command-line containing *only* non-existing objects:
</span><br>
<span class="quotelev1">&gt; * taskset errors out
</span><br>
<span class="quotelev1">&gt; * numactl errors out
</span><br>
<span class="quotelev1">&gt; * hwloc-bind succeeds, binds to nothing
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3) valid command-line containing some existing objects and some
</span><br>
<span class="quotelev1">&gt; non-existing:
</span><br>
<span class="quotelev1">&gt; * taskset succeed (ignores unexisting objects, bind to others)
</span><br>
<span class="quotelev1">&gt; * numactl errors out
</span><br>
<span class="quotelev1">&gt; * hwloc-bind succeeds (ignores unexisting objects, bind to others)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 4) valid command-line with only valid objects but missing OS support
</span><br>
<span class="quotelev1">&gt; * doesn't apply to taskset and numactl afaik
</span><br>
<span class="quotelev1">&gt; * hwloc-bind succeeds (ignores failure to bind)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We have a --strict option, which translate into the STRICT binding flag
</span><br>
<span class="quotelev1">&gt; which is documented as
</span><br>
<span class="quotelev1">&gt;  &quot;Request strict binding from the OS.  The function will fail if the
</span><br>
<span class="quotelev1">&gt; binding can not be guaranteed / completely enforced.&quot;
</span><br>
<span class="quotelev1">&gt; I usually see &quot;non-strict&quot; as 'if you can't do what I want, do something
</span><br>
<span class="quotelev1">&gt; similar&quot;. I wouldn't be too bad to say that this applies to (3) (bind to
</span><br>
<span class="quotelev1">&gt; smaller than requested).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But (2) and (4) are different. Not binding at all or binding to nothing
</span><br>
<span class="quotelev1">&gt; is far from &quot;non-strict&quot;. But I wonder if adding a new command-line flag
</span><br>
<span class="quotelev1">&gt; to exit on such errors would be confusing with respect to the existing
</span><br>
<span class="quotelev1">&gt; --strict.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We could also change the default to exit on error, and add --force to
</span><br>
<span class="quotelev1">&gt; launch the process even on failure to bind. But changing defaults isn't
</span><br>
<span class="quotelev1">&gt; always a good idea.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0723.php">Brice Goglin: "Re: [hwloc-users] Solaris and hwloc"</a>
<li><strong>Previous message:</strong> <a href="0721.php">Brice Goglin: "Re: [hwloc-users] Solaris and hwloc"</a>
<li><strong>In reply to:</strong> <a href="0721.php">Brice Goglin: "Re: [hwloc-users] Solaris and hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0723.php">Brice Goglin: "Re: [hwloc-users] Solaris and hwloc"</a>
<li><strong>Reply:</strong> <a href="0723.php">Brice Goglin: "Re: [hwloc-users] Solaris and hwloc"</a>
<li><strong>Reply:</strong> <a href="0727.php">Samuel Thibault: "Re: [hwloc-users] Solaris and hwloc"</a>
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
