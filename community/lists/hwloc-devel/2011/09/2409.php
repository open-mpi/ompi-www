<?
$subject_val = "Re: [hwloc-devel] roadmap, XML/JSON/...";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 12 20:17:08 2011" -->
<!-- isoreceived="20110913001708" -->
<!-- sent="Tue, 13 Sep 2011 08:16:54 +0800" -->
<!-- isosent="20110913001654" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] roadmap, XML/JSON/..." -->
<!-- id="4E6EA0F6.4070208_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="078BA17F-73ED-4C25-B2A4-96493000FDE6_at_cisco.com" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-12 20:16:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2410.php">Brice Goglin: "Re: [hwloc-devel] CPU Model and type"</a>
<li><strong>Previous message:</strong> <a href="2408.php">Jeff Squyres: "Re: [hwloc-devel] roadmap, XML/JSON/..."</a>
<li><strong>In reply to:</strong> <a href="2408.php">Jeff Squyres: "Re: [hwloc-devel] roadmap, XML/JSON/..."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 12/09/2011 21:13, Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; I had a thought about this issue this morning:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. The XML export without libxml2 should be pretty easy (right?).
</span><br>
<p>I didn't try it but yes it should.
<br>
<p><span class="quotelev1">&gt; 2. If we're importing exactly what was exported, that should also be pretty easy without libxml2 (right?).  Meaning: there can be a very simplistic parser that only handles the expected ordering/cases/whatever that comes from #1.
</span><br>
<p>with whatever containing indentation and mixed spaces and tabulations at
<br>
least.
<br>
<p><span class="quotelev1">&gt; 3. If the simplistic XML parser in #2 fails, it can fall back to libxml2's importer for a &quot;full&quot; XML import (if libxml2 is available, of course).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Or, you could reduce these two down to the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. If libxml2 is present, use it for both export and import.
</span><br>
<span class="quotelev1">&gt; 2. If libxml2 is not present, use a simplistic exporter and importer.  If the simplistic XML importer fails, show a helpful message &quot;Compile hwloc with libxml2 for full XML import support,&quot; or something like that.
</span><br>
<p>Fallback shouldn't be hard.
<br>
<p>We just need to implement this parser now (and I won't do it anything
<br>
soon :))
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2410.php">Brice Goglin: "Re: [hwloc-devel] CPU Model and type"</a>
<li><strong>Previous message:</strong> <a href="2408.php">Jeff Squyres: "Re: [hwloc-devel] roadmap, XML/JSON/..."</a>
<li><strong>In reply to:</strong> <a href="2408.php">Jeff Squyres: "Re: [hwloc-devel] roadmap, XML/JSON/..."</a>
<!-- nextthread="start" -->
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
