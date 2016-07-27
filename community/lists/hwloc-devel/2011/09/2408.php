<?
$subject_val = "Re: [hwloc-devel] roadmap, XML/JSON/...";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 12 09:13:52 2011" -->
<!-- isoreceived="20110912131352" -->
<!-- sent="Mon, 12 Sep 2011 09:13:47 -0400" -->
<!-- isosent="20110912131347" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] roadmap, XML/JSON/..." -->
<!-- id="078BA17F-73ED-4C25-B2A4-96493000FDE6_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4E664B3E.5030302_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] roadmap, XML/JSON/...<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-12 09:13:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2409.php">Brice Goglin: "Re: [hwloc-devel] roadmap, XML/JSON/..."</a>
<li><strong>Previous message:</strong> <a href="2407.php">Brice Goglin: "Re: [hwloc-devel] CPU Model and type"</a>
<li><strong>In reply to:</strong> <a href="2396.php">Brice Goglin: "Re: [hwloc-devel] roadmap, XML/JSON/..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2409.php">Brice Goglin: "Re: [hwloc-devel] roadmap, XML/JSON/..."</a>
<li><strong>Reply:</strong> <a href="2409.php">Brice Goglin: "Re: [hwloc-devel] roadmap, XML/JSON/..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I had a thought about this issue this morning:
<br>
<p>1. The XML export without libxml2 should be pretty easy (right?).
<br>
<p>2. If we're importing exactly what was exported, that should also be pretty easy without libxml2 (right?).  Meaning: there can be a very simplistic parser that only handles the expected ordering/cases/whatever that comes from #1.
<br>
<p>3. If the simplistic XML parser in #2 fails, it can fall back to libxml2's importer for a &quot;full&quot; XML import (if libxml2 is available, of course).
<br>
<p>Or, you could reduce these two down to the following:
<br>
<p>1. If libxml2 is present, use it for both export and import.
<br>
2. If libxml2 is not present, use a simplistic exporter and importer.  If the simplistic XML importer fails, show a helpful message &quot;Compile hwloc with libxml2 for full XML import support,&quot; or something like that.
<br>
<p><p><p>On Sep 6, 2011, at 12:33 PM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; Le 06/09/2011 17:39, Jeff Squyres a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 6, 2011, at 11:25 AM, Brice Goglin wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - I don't know where we ended up in the other thread: do we want JSON or no?  If we can parse it easily without an external dependency, then I think it's worthwhile.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I stopped working on JSON this to see where the idea of reimplementing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; our own XML parser would go.
</span><br>
<span class="quotelev2">&gt;&gt; Beyond your prior emails on this, any further thoughts?  Especially if we restrict to ASCII-only?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would they that French developers are used to cast their names into
</span><br>
<span class="quotelev1">&gt; ASCII. So restricting hwloc to ASCII would be ok for me. I am not sure I
</span><br>
<span class="quotelev1">&gt; will use my name or my institution as a topology attribute anyway :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't have any non-ASCII char in my name or institution so I am open
</span><br>
<span class="quotelev1">&gt; to other opinions :)
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
<li><strong>Next message:</strong> <a href="2409.php">Brice Goglin: "Re: [hwloc-devel] roadmap, XML/JSON/..."</a>
<li><strong>Previous message:</strong> <a href="2407.php">Brice Goglin: "Re: [hwloc-devel] CPU Model and type"</a>
<li><strong>In reply to:</strong> <a href="2396.php">Brice Goglin: "Re: [hwloc-devel] roadmap, XML/JSON/..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2409.php">Brice Goglin: "Re: [hwloc-devel] roadmap, XML/JSON/..."</a>
<li><strong>Reply:</strong> <a href="2409.php">Brice Goglin: "Re: [hwloc-devel] roadmap, XML/JSON/..."</a>
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
