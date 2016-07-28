<?
$subject_val = "Re: [hwloc-devel] AMD fusion &amp; hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  6 17:05:23 2011" -->
<!-- isoreceived="20110406210523" -->
<!-- sent="Wed, 06 Apr 2011 23:05:18 +0200" -->
<!-- isosent="20110406210518" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] AMD fusion &amp;amp; hwloc" -->
<!-- id="4D9CD58E.3080005_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BANLkTinncrOVGTt1ajyP6=huUEeNc58tmw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] AMD fusion &amp; hwloc<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-06 17:05:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2104.php">Christopher Samuel: "Re: [hwloc-devel] AMD fusion &amp; hwloc"</a>
<li><strong>Previous message:</strong> <a href="2102.php">Rayson Ho: "[hwloc-devel] AMD fusion &amp; hwloc"</a>
<li><strong>In reply to:</strong> <a href="2102.php">Rayson Ho: "[hwloc-devel] AMD fusion &amp; hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2104.php">Christopher Samuel: "Re: [hwloc-devel] AMD fusion &amp; hwloc"</a>
<li><strong>Reply:</strong> <a href="2104.php">Christopher Samuel: "Re: [hwloc-devel] AMD fusion &amp; hwloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>What I call &quot;GPU cores&quot; is likely not shown by the operating systems as
<br>
&quot;normal&quot; cores. So hwloc would likely not show anything about them. The
<br>
new hwloc trunk has support for showing GPU devices (as long as they are
<br>
PCI devices), but we won't have any details about the cores inside these
<br>
I/O devices without specific support for their driver.
<br>
<p>Reading your mail the gridengine mailing list, I see that you are
<br>
talking about Bulldozer. Somebody at AMD already ran hwloc on the
<br>
upcoming Interlagos processor a while ago, and it worked fine. But these
<br>
were only CPU cores, nothing about GPUs. Actually, I am not so familiar
<br>
with all these marketing names, so I don't really know if the &quot;Fusion&quot;
<br>
name applies to Bulldozer chips, or only to the already available
<br>
laptop-like Bobcat chips.
<br>
<p>Brice
<br>
<p><p><p><p>Le 06/04/2011 22:55, Rayson Ho a &#233;crit :
<br>
<span class="quotelev1">&gt; Just wondering if anyone on this list has an AMD fusion laptop, or has
</span><br>
<span class="quotelev1">&gt; access to a machine with pre-release version of AMD Fusion CPUs?? I
</span><br>
<span class="quotelev1">&gt; would like to find out what hwloc reports when it is run on those
</span><br>
<span class="quotelev1">&gt; machines: do the GPU cores get reported as CPU cores or not reported
</span><br>
<span class="quotelev1">&gt; by hwloc at all?? I asked that question on the Grid Engine mailing
</span><br>
<span class="quotelev1">&gt; list but no one has access to one.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Grid Engine (our open source fork: Open Grid Scheduler, and there are
</span><br>
<span class="quotelev1">&gt; other forks like Univa Grid Engine) is still using PLPA, but will
</span><br>
<span class="quotelev1">&gt; eventually(!) migrate to hwloc. But if there are API changes required
</span><br>
<span class="quotelev1">&gt; in order to support AMD fusion in hwloc, then we might just wait for
</span><br>
<span class="quotelev1">&gt; another few months...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://gridscheduler.sourceforge.net/">http://gridscheduler.sourceforge.net/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.mail-archive.com/users&#64;gridengine.org/msg00394.html">http://www.mail-archive.com/users&#64;gridengine.org/msg00394.html</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rayson
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2104.php">Christopher Samuel: "Re: [hwloc-devel] AMD fusion &amp; hwloc"</a>
<li><strong>Previous message:</strong> <a href="2102.php">Rayson Ho: "[hwloc-devel] AMD fusion &amp; hwloc"</a>
<li><strong>In reply to:</strong> <a href="2102.php">Rayson Ho: "[hwloc-devel] AMD fusion &amp; hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2104.php">Christopher Samuel: "Re: [hwloc-devel] AMD fusion &amp; hwloc"</a>
<li><strong>Reply:</strong> <a href="2104.php">Christopher Samuel: "Re: [hwloc-devel] AMD fusion &amp; hwloc"</a>
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
