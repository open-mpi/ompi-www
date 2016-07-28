<?
$subject_val = "Re: [hwloc-devel] hwloc 0.9.2 autogen issue";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 28 17:07:20 2011" -->
<!-- isoreceived="20111128220720" -->
<!-- sent="Mon, 28 Nov 2011 17:07:15 -0500" -->
<!-- isosent="20111128220715" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc 0.9.2 autogen issue" -->
<!-- id="DDF6A741-6FCD-4B7C-8778-D8401AA7A285_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4ED3A117.4080603_at_mcs.anl.gov" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc 0.9.2 autogen issue<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-28 17:07:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2555.php">Guy Streeter: "Re: [hwloc-devel] understanding PCI device to NUMA node connection"</a>
<li><strong>Previous message:</strong> <a href="2553.php">Brice Goglin: "Re: [hwloc-devel] understanding PCI device to NUMA node connection"</a>
<li><strong>In reply to:</strong> <a href="2551.php">Pavan Balaji: "Re: [hwloc-devel] hwloc 0.9.2 autogen issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2556.php">Brice Goglin: "Re: [hwloc-devel] hwloc 0.9.2 autogen issue"</a>
<li><strong>Reply:</strong> <a href="2556.php">Brice Goglin: "Re: [hwloc-devel] hwloc 0.9.2 autogen issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think the real question is: why do we have both config/ and m4/ ?
<br>
<p>There's only a single .m4 file in m4/, but several in config/.  I vote that m4/decl.m4 should move to config/decl.m4, and then this issue goes away.
<br>
<p>Specifically: I think the reason we don't specify both directories in Makefile.am is because whatever is specified in ACLOCAL_AMFLAGS must be the same directory that is specified in AC_CONFIG_MACRO_DIR, and it looks like AC_CONFIG_MACRO_DIR can only take 1 directory as an argument.
<br>
<p>Any objections to removing the decl/ directory?
<br>
<p><p>On Nov 28, 2011, at 9:56 AM, Pavan Balaji wrote:
<br>
<p><span class="quotelev1">&gt; Hi Brice,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 11/28/2011 10:24 PM, Brice Goglin wrote:
</span><br>
<span class="quotelev2">&gt;&gt; This was indeed changed a long time ago when Jeff brought the embedding
</span><br>
<span class="quotelev2">&gt;&gt; support. I have nothing against bumping prereq to 2.64. But I'd rather
</span><br>
<span class="quotelev2">&gt;&gt; have Jeff look at the missing &quot;-I m4&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ok. I upgraded to newer versions of autoconf on most of my machines, and have not noticed it till now. In fact, I just upgraded the last of my machines as well, so I'll likely not notice it even if it remains broken :-). So I guess this bug report is just an FYI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Btw, the patch is pretty straightforward and should apply cleanly even with the current version. It's just an additional -I path that's missing in Makefile.am.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Pavan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Pavan Balaji
</span><br>
<span class="quotelev1">&gt; <a href="http://www.mcs.anl.gov/~balaji">http://www.mcs.anl.gov/~balaji</a>
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
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2555.php">Guy Streeter: "Re: [hwloc-devel] understanding PCI device to NUMA node connection"</a>
<li><strong>Previous message:</strong> <a href="2553.php">Brice Goglin: "Re: [hwloc-devel] understanding PCI device to NUMA node connection"</a>
<li><strong>In reply to:</strong> <a href="2551.php">Pavan Balaji: "Re: [hwloc-devel] hwloc 0.9.2 autogen issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2556.php">Brice Goglin: "Re: [hwloc-devel] hwloc 0.9.2 autogen issue"</a>
<li><strong>Reply:</strong> <a href="2556.php">Brice Goglin: "Re: [hwloc-devel] hwloc 0.9.2 autogen issue"</a>
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
