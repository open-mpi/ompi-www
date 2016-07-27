<?
$subject_val = "Re: [hwloc-devel] Strange difference";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 31 05:37:23 2010" -->
<!-- isoreceived="20100331093723" -->
<!-- sent="Wed, 31 Mar 2010 11:37:17 +0200" -->
<!-- isosent="20100331093717" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Strange difference" -->
<!-- id="4BB317CD.3050100_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="6F915763-FAC4-4733-B1A2-647825C7AAAB_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Strange difference<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-31 05:37:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0845.php">Samuel Thibault: "Re: [hwloc-devel] Strange difference"</a>
<li><strong>Previous message:</strong> <a href="0843.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1882)"</a>
<li><strong>In reply to:</strong> <a href="0819.php">Jeff Squyres: "Re: [hwloc-devel] Strange difference"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0845.php">Samuel Thibault: "Re: [hwloc-devel] Strange difference"</a>
<li><strong>Reply:</strong> <a href="0845.php">Samuel Thibault: "Re: [hwloc-devel] Strange difference"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Is it a crime to use the full word &quot;Processor&quot;?  At least on my machine, the output width is still far less than 80 characters, so the full word should be no problem.  But I don't know if there are other strange topologies out there that would take up more space...?  (it certainly would in the graphic output...)
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Trying to summarize what was said:
<br>
* There is no output width problem in text mode
<br>
* There is a strong width problem in graphic mode
<br>
* &quot;Processor&quot;: ambiguous wrt socket/die, and needs a much shorter
<br>
version in the graphic output
<br>
* &quot;CPU&quot;: ambiguous wrt socket/die
<br>
* &quot;Proc&quot;: ambiguous wrt socket/die, and also with Process
<br>
* &quot;PU&quot;: beware that it'll need some thinking since we cannot bind
<br>
processes/threads on GPU and SPU. Could be an empty CPU set. Or another
<br>
PU object.
<br>
<p>Anybody really against PU ? Otherwise I'll commit the attached patch and
<br>
maybe we'll finally release 1.0-rc1 one day :)
<br>
<p>The patch renames PROC into PU, both in the core and tools. I added some
<br>
backward compat code so that the &quot;proc&quot; string is still converted into
<br>
HWLOC_OBJ_PU (but it's not documented).
<br>
<p>We might need to replace some occurences of &quot;logical processor&quot; in the
<br>
doc with &quot;processing unit&quot;. Or use both from time to time to make it
<br>
clear that it's very similar (and explain the difference somewhere).
<br>
<p>Brice
<br>
<p><p>
<br><hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-0844/PU.patch">PU.patch</a>
</ul>
<!-- attachment="PU.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0845.php">Samuel Thibault: "Re: [hwloc-devel] Strange difference"</a>
<li><strong>Previous message:</strong> <a href="0843.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1882)"</a>
<li><strong>In reply to:</strong> <a href="0819.php">Jeff Squyres: "Re: [hwloc-devel] Strange difference"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0845.php">Samuel Thibault: "Re: [hwloc-devel] Strange difference"</a>
<li><strong>Reply:</strong> <a href="0845.php">Samuel Thibault: "Re: [hwloc-devel] Strange difference"</a>
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
