<?
$subject_val = "Re: [hwloc-devel] plugins update";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  8 07:50:33 2012" -->
<!-- isoreceived="20121108125033" -->
<!-- sent="Thu, 8 Nov 2012 07:50:28 -0500" -->
<!-- isosent="20121108125028" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] plugins update" -->
<!-- id="97CBDE6F-3968-47DC-8975-FB45B1A15B71_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="509BAA09.7050908_at_inria.fr" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-08 07:50:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3385.php">Samuel Thibault: "Re: [hwloc-devel] plugins update"</a>
<li><strong>Previous message:</strong> <a href="3383.php">Brice Goglin: "Re: [hwloc-devel] plugins update"</a>
<li><strong>In reply to:</strong> <a href="3383.php">Brice Goglin: "Re: [hwloc-devel] plugins update"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3385.php">Samuel Thibault: "Re: [hwloc-devel] plugins update"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I can/will, but not until after SC.  :-(
<br>
<p><p>On Nov 8, 2012, at 7:48 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; Did anybody look at leastc at the documentation links below?
</span><br>
<span class="quotelev1">&gt; I am willing to merge this tomorrow. I split the merge into several
</span><br>
<span class="quotelev1">&gt; commits to make things more bisectable in case of problems.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 02/11/2012 17:51, Brice Goglin a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; I pushed big changes to the components in the last days (what came from
</span><br>
<span class="quotelev2">&gt;&gt; last month discussion + recent CPUModel feature requests).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Now we ombine information from multiple &quot;cpu&quot; backends. For instance the
</span><br>
<span class="quotelev2">&gt;&gt; x86 backend will add socket CPUModel to what native OS backends did.
</span><br>
<span class="quotelev2">&gt;&gt; Aside from xml/synthetic/custom excluding everything else, other
</span><br>
<span class="quotelev2">&gt;&gt; backends let others try to complete the topology if they have something
</span><br>
<span class="quotelev2">&gt;&gt; to add/annotate.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Only component management has changed. Their &quot;pluginification&quot; is still
</span><br>
<span class="quotelev2">&gt;&gt; the same as earlier.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Old &quot;core&quot; components are now called &quot;disc&quot; for discovery (that's all
</span><br>
<span class="quotelev2">&gt;&gt; they do, binding doesn't need to be componentified).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Instead of describing everything, here are pointers to the new
</span><br>
<span class="quotelev2">&gt;&gt; documentation:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://svn.open-mpi.org/trac/hwloc/browser/branches/components/doc/hwloc.doxy">https://svn.open-mpi.org/trac/hwloc/browser/branches/components/doc/hwloc.doxy</a>
</span><br>
<span class="quotelev2">&gt;&gt; Lines 1635-1725 for how it works from the user side
</span><br>
<span class="quotelev2">&gt;&gt; Lines 974-1011 for environment variables
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The components branch has a ugly SVN history now. Hopefully SVN will
</span><br>
<span class="quotelev2">&gt;&gt; combine all that history into one single commit and nobody will see the
</span><br>
<span class="quotelev2">&gt;&gt; ugly components history (except people using git-svn maybe).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Brice
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
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
<li><strong>Next message:</strong> <a href="3385.php">Samuel Thibault: "Re: [hwloc-devel] plugins update"</a>
<li><strong>Previous message:</strong> <a href="3383.php">Brice Goglin: "Re: [hwloc-devel] plugins update"</a>
<li><strong>In reply to:</strong> <a href="3383.php">Brice Goglin: "Re: [hwloc-devel] plugins update"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3385.php">Samuel Thibault: "Re: [hwloc-devel] plugins update"</a>
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
