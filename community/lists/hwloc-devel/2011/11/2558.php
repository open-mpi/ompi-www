<?
$subject_val = "Re: [hwloc-devel] hwloc 0.9.2 autogen issue";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 28 17:36:42 2011" -->
<!-- isoreceived="20111128223642" -->
<!-- sent="Mon, 28 Nov 2011 17:36:37 -0500" -->
<!-- isosent="20111128223637" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc 0.9.2 autogen issue" -->
<!-- id="144B592B-B429-47F6-A62A-C06724FA28CD_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4ED40804.2040902_at_inria.fr" -->
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
<strong>Date:</strong> 2011-11-28 17:36:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2559.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.4a1r3999)"</a>
<li><strong>Previous message:</strong> <a href="2557.php">Brice Goglin: "Re: [hwloc-devel] understanding PCI device to NUMA node connection"</a>
<li><strong>In reply to:</strong> <a href="2556.php">Brice Goglin: "Re: [hwloc-devel] hwloc 0.9.2 autogen issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2562.php">Jeff Squyres: "Re: [hwloc-devel] hwloc 0.9.2 autogen issue"</a>
<li><strong>Reply:</strong> <a href="2562.php">Jeff Squyres: "Re: [hwloc-devel] hwloc 0.9.2 autogen issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok.  I'll commit on trunk, v1.3, and just for good measure, v1.2 and v1.2-ompi.
<br>
<p><p>On Nov 28, 2011, at 5:15 PM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; Le 28/11/2011 23:07, Jeff Squyres a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; I think the real question is: why do we have both config/ and m4/ ?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; There's only a single .m4 file in m4/, but several in config/.  I vote that m4/decl.m4 should move to config/decl.m4, and then this issue goes away.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Specifically: I think the reason we don't specify both directories in Makefile.am is because whatever is specified in ACLOCAL_AMFLAGS must be the same directory that is specified in AC_CONFIG_MACRO_DIR, and it looks like AC_CONFIG_MACRO_DIR can only take 1 directory as an argument.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Any objections to removing the decl/ directory?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No idea why this directory exists, likely history only. OK to removing here.
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
<li><strong>Next message:</strong> <a href="2559.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.4a1r3999)"</a>
<li><strong>Previous message:</strong> <a href="2557.php">Brice Goglin: "Re: [hwloc-devel] understanding PCI device to NUMA node connection"</a>
<li><strong>In reply to:</strong> <a href="2556.php">Brice Goglin: "Re: [hwloc-devel] hwloc 0.9.2 autogen issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2562.php">Jeff Squyres: "Re: [hwloc-devel] hwloc 0.9.2 autogen issue"</a>
<li><strong>Reply:</strong> <a href="2562.php">Jeff Squyres: "Re: [hwloc-devel] hwloc 0.9.2 autogen issue"</a>
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
