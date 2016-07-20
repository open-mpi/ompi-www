<?
$subject_val = "Re: [hwloc-users] Solaris and hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 13 11:17:14 2012" -->
<!-- isoreceived="20120913151714" -->
<!-- sent="Thu, 13 Sep 2012 17:17:08 +0200" -->
<!-- isosent="20120913151708" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Solaris and hwloc" -->
<!-- id="5051F8F4.9060708_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="6468E0D4-1F18-45A4-B279-7B9E91EEC0BE_at_cisco.com" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-13 11:17:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0724.php">Jeff Squyres: "Re: [hwloc-users] Solaris and hwloc"</a>
<li><strong>Previous message:</strong> <a href="0722.php">Jeff Squyres: "Re: [hwloc-users] Solaris and hwloc"</a>
<li><strong>In reply to:</strong> <a href="0722.php">Jeff Squyres: "Re: [hwloc-users] Solaris and hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0724.php">Jeff Squyres: "Re: [hwloc-users] Solaris and hwloc"</a>
<li><strong>Reply:</strong> <a href="0724.php">Jeff Squyres: "Re: [hwloc-users] Solaris and hwloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think I am going to agree. Three comments:
<br>
* which &quot;binding fails&quot; do you refer to? I assume all cases I listed.
<br>
* I was initially against changing the default behavior of hwloc-bind,
<br>
but it's not like changing the ABI. There are likely very few scripts
<br>
using hwloc-bind out there. Breaking some of them is not too bad as long
<br>
as we give a useful error message.
<br>
* If we start failing because of invalid inputs in hwloc-bind, we may
<br>
have to do the same in hwloc-calc. The parsing code is shared anyway.
<br>
<p>Brice
<br>
<p><p><p>Le 13/09/2012 17:09, Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; These are all good points.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That being said, Brock Palen made another good point on the OMPI list recently.  It was in regards to OpenFabrics registered memory, but the issue is quite analogous.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OMPI used to issue a warning if there wasn't enough registered memory available, but allow the job to run anyway (at lower performance).  Brock was firmly opposed to that (he's an HPC sysadmin): he didn't want jobs to run at all if there wasn't enough registered memory.  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; One of the rationale here is that users won't tend to notice a warning at the top of a job's stdout/stderr -- if the job ran, that's good enough (until much later when they realize that they're not getting the right performance, or, worse, this job is impacting other jobs because its affinity is wrong).  But if the job doesn't run, that will get noticed immediately, and the problem will be fixed by a human.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hence, it seems safer to fall back on the &quot;if we can't give the user what they asked for, fail and let a human figure it out&quot; philosophy.  Even if it means changing the default.  Keep in mind that if they run hwloc-bind, they're specifically asking for binding.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think I'm now 80/20 in the &quot;abort hwloc-bind if it fails to bind&quot; camp now.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; After a little more thought, I'm also thinking that having a &quot;it's ok if binding fails&quot; CLI flag is a bad idea.  If the user really wants something to run without binding, then you can just do that in the shell:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; hwloc-bind ...whatever... my_executable
</span><br>
<span class="quotelev1">&gt; if test &quot;$?&quot; != &quot;0&quot;; then
</span><br>
<span class="quotelev1">&gt; 	# run without binding
</span><br>
<span class="quotelev1">&gt; 	my_executable
</span><br>
<span class="quotelev1">&gt; fi
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My $0.02.  :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 13, 2012, at 4:09 AM, Brice Goglin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (resending because the formatting was bad)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Le 13/09/2012 00:26, Jeff Squyres a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sep 12, 2012, at 10:30 AM, Samuel Thibault wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Sidenote: if hwloc-bind fails to bind, should we still launch the child process?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Well, it's up to you to decide :)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Anyone have an opinion?  I'm 60/40 in favor of not letting it run, under the rationale that the user asked for something that we can't deliver, so we shouldn't continue.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any idea what numactl does if it can't bind?
</span><br>
<span class="quotelev2">&gt;&gt; Let me add taskset to the list of tools to compare to, and distinguish
</span><br>
<span class="quotelev2">&gt;&gt; several cases:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1) invalid command line
</span><br>
<span class="quotelev2">&gt;&gt; * taskset (with invalid list &quot;2,&quot;) errors out
</span><br>
<span class="quotelev2">&gt;&gt; * numactl (with invalid list &quot;2,&quot;) errors out
</span><br>
<span class="quotelev2">&gt;&gt; * hwloc-bind (with invalid location followed by &quot;-- executable&quot;) errors
</span><br>
<span class="quotelev2">&gt;&gt; out (considers the invalid location as the executable name)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2) valid command-line containing *only* non-existing objects:
</span><br>
<span class="quotelev2">&gt;&gt; * taskset errors out
</span><br>
<span class="quotelev2">&gt;&gt; * numactl errors out
</span><br>
<span class="quotelev2">&gt;&gt; * hwloc-bind succeeds, binds to nothing
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 3) valid command-line containing some existing objects and some
</span><br>
<span class="quotelev2">&gt;&gt; non-existing:
</span><br>
<span class="quotelev2">&gt;&gt; * taskset succeed (ignores unexisting objects, bind to others)
</span><br>
<span class="quotelev2">&gt;&gt; * numactl errors out
</span><br>
<span class="quotelev2">&gt;&gt; * hwloc-bind succeeds (ignores unexisting objects, bind to others)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 4) valid command-line with only valid objects but missing OS support
</span><br>
<span class="quotelev2">&gt;&gt; * doesn't apply to taskset and numactl afaik
</span><br>
<span class="quotelev2">&gt;&gt; * hwloc-bind succeeds (ignores failure to bind)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We have a --strict option, which translate into the STRICT binding flag
</span><br>
<span class="quotelev2">&gt;&gt; which is documented as
</span><br>
<span class="quotelev2">&gt;&gt;  &quot;Request strict binding from the OS.  The function will fail if the
</span><br>
<span class="quotelev2">&gt;&gt; binding can not be guaranteed / completely enforced.&quot;
</span><br>
<span class="quotelev2">&gt;&gt; I usually see &quot;non-strict&quot; as 'if you can't do what I want, do something
</span><br>
<span class="quotelev2">&gt;&gt; similar&quot;. I wouldn't be too bad to say that this applies to (3) (bind to
</span><br>
<span class="quotelev2">&gt;&gt; smaller than requested).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But (2) and (4) are different. Not binding at all or binding to nothing
</span><br>
<span class="quotelev2">&gt;&gt; is far from &quot;non-strict&quot;. But I wonder if adding a new command-line flag
</span><br>
<span class="quotelev2">&gt;&gt; to exit on such errors would be confusing with respect to the existing
</span><br>
<span class="quotelev2">&gt;&gt; --strict.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We could also change the default to exit on error, and add --force to
</span><br>
<span class="quotelev2">&gt;&gt; launch the process even on failure to bind. But changing defaults isn't
</span><br>
<span class="quotelev2">&gt;&gt; always a good idea.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brice
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0724.php">Jeff Squyres: "Re: [hwloc-users] Solaris and hwloc"</a>
<li><strong>Previous message:</strong> <a href="0722.php">Jeff Squyres: "Re: [hwloc-users] Solaris and hwloc"</a>
<li><strong>In reply to:</strong> <a href="0722.php">Jeff Squyres: "Re: [hwloc-users] Solaris and hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0724.php">Jeff Squyres: "Re: [hwloc-users] Solaris and hwloc"</a>
<li><strong>Reply:</strong> <a href="0724.php">Jeff Squyres: "Re: [hwloc-users] Solaris and hwloc"</a>
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
