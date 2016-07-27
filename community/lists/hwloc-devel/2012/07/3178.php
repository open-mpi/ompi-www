<?
$subject_val = "Re: [hwloc-devel] Compile warning";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 17 09:55:42 2012" -->
<!-- isoreceived="20120717135542" -->
<!-- sent="Tue, 17 Jul 2012 08:55:10 -0500" -->
<!-- isosent="20120717135510" -->
<!-- name="Pavan Balaji" -->
<!-- email="balaji_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Compile warning" -->
<!-- id="50056EBE.9070802_at_mcs.anl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="50056A2A.3080700_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Compile warning<br>
<strong>From:</strong> Pavan Balaji (<em>balaji_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-17 09:55:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3179.php">Jeff Squyres: "[hwloc-devel] Fwd: Rebooting the CREST VM server machines (lion and tiger)"</a>
<li><strong>Previous message:</strong> <a href="3177.php">Brice Goglin: "Re: [hwloc-devel] Compile warning"</a>
<li><strong>In reply to:</strong> <a href="3177.php">Brice Goglin: "Re: [hwloc-devel] Compile warning"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 07/17/2012 08:35 AM, Brice Goglin wrote:
<br>
<span class="quotelev2">&gt;&gt; <a href="https://trac.mcs.anl.gov/projects/mpich2/changeset/10012">https://trac.mcs.anl.gov/projects/mpich2/changeset/10012</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What kind of warning is this?
</span><br>
<span class="quotelev1">&gt; Does your pci_lookup_name() in pci/pci.h return a const char * instead
</span><br>
<span class="quotelev1">&gt; of a char * ?
</span><br>
<p>You are assigning it to &quot;??&quot; on line 468.  You could alternatively just 
<br>
typecast that one line, but this seems to be cleaner as you are not 
<br>
really editing that string anywhere.
<br>
<p>&nbsp;&nbsp;-- Pavan
<br>
<p><pre>
-- 
Pavan Balaji
<a href="http://www.mcs.anl.gov/~balaji">http://www.mcs.anl.gov/~balaji</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3179.php">Jeff Squyres: "[hwloc-devel] Fwd: Rebooting the CREST VM server machines (lion and tiger)"</a>
<li><strong>Previous message:</strong> <a href="3177.php">Brice Goglin: "Re: [hwloc-devel] Compile warning"</a>
<li><strong>In reply to:</strong> <a href="3177.php">Brice Goglin: "Re: [hwloc-devel] Compile warning"</a>
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
