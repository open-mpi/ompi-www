<?
$subject_val = "Re: [hwloc-devel] hwloc 0.9.2 autogen issue";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 28 17:15:38 2011" -->
<!-- isoreceived="20111128221538" -->
<!-- sent="Mon, 28 Nov 2011 23:15:32 +0100" -->
<!-- isosent="20111128221532" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc 0.9.2 autogen issue" -->
<!-- id="4ED40804.2040902_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="DDF6A741-6FCD-4B7C-8778-D8401AA7A285_at_cisco.com" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-28 17:15:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2557.php">Brice Goglin: "Re: [hwloc-devel] understanding PCI device to NUMA node connection"</a>
<li><strong>Previous message:</strong> <a href="2555.php">Guy Streeter: "Re: [hwloc-devel] understanding PCI device to NUMA node connection"</a>
<li><strong>In reply to:</strong> <a href="2554.php">Jeff Squyres: "Re: [hwloc-devel] hwloc 0.9.2 autogen issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2558.php">Jeff Squyres: "Re: [hwloc-devel] hwloc 0.9.2 autogen issue"</a>
<li><strong>Reply:</strong> <a href="2558.php">Jeff Squyres: "Re: [hwloc-devel] hwloc 0.9.2 autogen issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 28/11/2011 23:07, Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; I think the real question is: why do we have both config/ and m4/ ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There's only a single .m4 file in m4/, but several in config/.  I vote that m4/decl.m4 should move to config/decl.m4, and then this issue goes away.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Specifically: I think the reason we don't specify both directories in Makefile.am is because whatever is specified in ACLOCAL_AMFLAGS must be the same directory that is specified in AC_CONFIG_MACRO_DIR, and it looks like AC_CONFIG_MACRO_DIR can only take 1 directory as an argument.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any objections to removing the decl/ directory?
</span><br>
<p>No idea why this directory exists, likely history only. OK to removing here.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2557.php">Brice Goglin: "Re: [hwloc-devel] understanding PCI device to NUMA node connection"</a>
<li><strong>Previous message:</strong> <a href="2555.php">Guy Streeter: "Re: [hwloc-devel] understanding PCI device to NUMA node connection"</a>
<li><strong>In reply to:</strong> <a href="2554.php">Jeff Squyres: "Re: [hwloc-devel] hwloc 0.9.2 autogen issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2558.php">Jeff Squyres: "Re: [hwloc-devel] hwloc 0.9.2 autogen issue"</a>
<li><strong>Reply:</strong> <a href="2558.php">Jeff Squyres: "Re: [hwloc-devel] hwloc 0.9.2 autogen issue"</a>
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
