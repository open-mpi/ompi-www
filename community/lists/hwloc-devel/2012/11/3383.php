<?
$subject_val = "Re: [hwloc-devel] plugins update";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  8 07:48:15 2012" -->
<!-- isoreceived="20121108124815" -->
<!-- sent="Thu, 08 Nov 2012 13:48:09 +0100" -->
<!-- isosent="20121108124809" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] plugins update" -->
<!-- id="509BAA09.7050908_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5093F9F5.1030101_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] plugins update<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-08 07:48:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3384.php">Jeff Squyres: "Re: [hwloc-devel] plugins update"</a>
<li><strong>Previous message:</strong> <a href="3382.php">Brice Goglin: "Re: [hwloc-devel] CPU affinity of OS Devices?"</a>
<li><strong>In reply to:</strong> <a href="3354.php">Brice Goglin: "[hwloc-devel] plugins update"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3384.php">Jeff Squyres: "Re: [hwloc-devel] plugins update"</a>
<li><strong>Reply:</strong> <a href="3384.php">Jeff Squyres: "Re: [hwloc-devel] plugins update"</a>
<li><strong>Reply:</strong> <a href="3385.php">Samuel Thibault: "Re: [hwloc-devel] plugins update"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Did anybody look at leastc at the documentation links below?
<br>
I am willing to merge this tomorrow. I split the merge into several
<br>
commits to make things more bisectable in case of problems.
<br>
<p>Brice
<br>
<p><p><p>Le 02/11/2012 17:51, Brice Goglin a &#233;crit :
<br>
<span class="quotelev1">&gt; I pushed big changes to the components in the last days (what came from
</span><br>
<span class="quotelev1">&gt; last month discussion + recent CPUModel feature requests).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now we ombine information from multiple &quot;cpu&quot; backends. For instance the
</span><br>
<span class="quotelev1">&gt; x86 backend will add socket CPUModel to what native OS backends did.
</span><br>
<span class="quotelev1">&gt; Aside from xml/synthetic/custom excluding everything else, other
</span><br>
<span class="quotelev1">&gt; backends let others try to complete the topology if they have something
</span><br>
<span class="quotelev1">&gt; to add/annotate.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Only component management has changed. Their &quot;pluginification&quot; is still
</span><br>
<span class="quotelev1">&gt; the same as earlier.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Old &quot;core&quot; components are now called &quot;disc&quot; for discovery (that's all
</span><br>
<span class="quotelev1">&gt; they do, binding doesn't need to be componentified).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Instead of describing everything, here are pointers to the new
</span><br>
<span class="quotelev1">&gt; documentation:
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/hwloc/browser/branches/components/doc/hwloc.doxy">https://svn.open-mpi.org/trac/hwloc/browser/branches/components/doc/hwloc.doxy</a>
</span><br>
<span class="quotelev1">&gt; Lines 1635-1725 for how it works from the user side
</span><br>
<span class="quotelev1">&gt; Lines 974-1011 for environment variables
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The components branch has a ugly SVN history now. Hopefully SVN will
</span><br>
<span class="quotelev1">&gt; combine all that history into one single commit and nobody will see the
</span><br>
<span class="quotelev1">&gt; ugly components history (except people using git-svn maybe).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3384.php">Jeff Squyres: "Re: [hwloc-devel] plugins update"</a>
<li><strong>Previous message:</strong> <a href="3382.php">Brice Goglin: "Re: [hwloc-devel] CPU affinity of OS Devices?"</a>
<li><strong>In reply to:</strong> <a href="3354.php">Brice Goglin: "[hwloc-devel] plugins update"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3384.php">Jeff Squyres: "Re: [hwloc-devel] plugins update"</a>
<li><strong>Reply:</strong> <a href="3384.php">Jeff Squyres: "Re: [hwloc-devel] plugins update"</a>
<li><strong>Reply:</strong> <a href="3385.php">Samuel Thibault: "Re: [hwloc-devel] plugins update"</a>
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
