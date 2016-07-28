<?
$subject_val = "Re: [hwloc-users] Assembling multiple node XMLs";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 30 08:57:06 2015" -->
<!-- isoreceived="20151030125706" -->
<!-- sent="Fri, 30 Oct 2015 08:57:01 -0400" -->
<!-- isosent="20151030125701" -->
<!-- name="Andrej Prsa" -->
<!-- email="aprsa09_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Assembling multiple node XMLs" -->
<!-- id="20151030085701.3a468bf2_at_antares" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="56330B48.7020906_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Assembling multiple node XMLs<br>
<strong>From:</strong> Andrej Prsa (<em>aprsa09_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-30 08:57:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1217.php">Brice Goglin: "Re: [hwloc-users] Assembling multiple node XMLs"</a>
<li><strong>Previous message:</strong> <a href="1215.php">Brice Goglin: "Re: [hwloc-users] Assembling multiple node XMLs"</a>
<li><strong>In reply to:</strong> <a href="1215.php">Brice Goglin: "Re: [hwloc-users] Assembling multiple node XMLs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1217.php">Brice Goglin: "Re: [hwloc-users] Assembling multiple node XMLs"</a>
<li><strong>Reply:</strong> <a href="1217.php">Brice Goglin: "Re: [hwloc-users] Assembling multiple node XMLs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brice,
<br>
<p><span class="quotelev1">&gt; When you assemble multiple nodes' topologies into a single one, the
</span><br>
<span class="quotelev1">&gt; resulting topology cannot be used for binding. Binding is only
</span><br>
<span class="quotelev1">&gt; possible when using objects/cpusets that correspond to the current
</span><br>
<span class="quotelev1">&gt; node.
</span><br>
<p>Ah, that explains it.
<br>
<p><span class="quotelev1">&gt; Open-MPI does not support these cases, hence the crash. I see that
</span><br>
<span class="quotelev1">&gt; individual XMLs worked fine. So why did you try this?
</span><br>
<p>I was trying to figure out a way to fix buggy BIOS topologies for all
<br>
nodes from the server side. With our current setup, all the nodes are
<br>
diskless, they boot up an identical image from NFS and I don't know how
<br>
to tell each one what XML file to use. The reason I know that the XML
<br>
file fixes the problem is by logging onto that node, exporting
<br>
HWLOC_XMLFILE and running mpirun from there. Any suggestions on how to
<br>
do that system-wide?
<br>
<p>Thanks,
<br>
Andrej
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1217.php">Brice Goglin: "Re: [hwloc-users] Assembling multiple node XMLs"</a>
<li><strong>Previous message:</strong> <a href="1215.php">Brice Goglin: "Re: [hwloc-users] Assembling multiple node XMLs"</a>
<li><strong>In reply to:</strong> <a href="1215.php">Brice Goglin: "Re: [hwloc-users] Assembling multiple node XMLs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1217.php">Brice Goglin: "Re: [hwloc-users] Assembling multiple node XMLs"</a>
<li><strong>Reply:</strong> <a href="1217.php">Brice Goglin: "Re: [hwloc-users] Assembling multiple node XMLs"</a>
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
