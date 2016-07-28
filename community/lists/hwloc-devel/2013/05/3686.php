<?
$subject_val = "Re: [hwloc-devel] hwloc patch suggestions";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May  5 16:22:52 2013" -->
<!-- isoreceived="20130505202252" -->
<!-- sent="Sun, 05 May 2013 15:22:46 -0500" -->
<!-- isosent="20130505202246" -->
<!-- name="Pavan Balaji" -->
<!-- email="balaji_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc patch suggestions" -->
<!-- id="5186BF96.9070006_at_mcs.anl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5186BDCE.9050406_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc patch suggestions<br>
<strong>From:</strong> Pavan Balaji (<em>balaji_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-05 16:22:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3687.php">Brice Goglin: "Re: [hwloc-devel] hwloc patch suggestions"</a>
<li><strong>Previous message:</strong> <a href="3685.php">Brice Goglin: "Re: [hwloc-devel] hwloc patch suggestions"</a>
<li><strong>In reply to:</strong> <a href="3685.php">Brice Goglin: "Re: [hwloc-devel] hwloc patch suggestions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3687.php">Brice Goglin: "Re: [hwloc-devel] hwloc patch suggestions"</a>
<li><strong>Reply:</strong> <a href="3687.php">Brice Goglin: "Re: [hwloc-devel] hwloc patch suggestions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 05/05/2013 03:15 PM US Central Time, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; I think I'll apply these.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But one question: do you still use autogen.sh in MPICH? I assumed
</span><br>
<span class="quotelev1">&gt; embedding hwloc.m4 would mean you don't need hwloc's autogen anymore.
</span><br>
<p>We still need it for the include/private/autogen/config.h stuff.
<br>
<p>However, this also means that the configure.ac part of the versioning
<br>
patch has no effect for us.  That part will need to sit in one of the
<br>
embeddable macros.  Let me investigate it some more and get back to you.
<br>
<p>&nbsp;-- Pavan
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
<li><strong>Next message:</strong> <a href="3687.php">Brice Goglin: "Re: [hwloc-devel] hwloc patch suggestions"</a>
<li><strong>Previous message:</strong> <a href="3685.php">Brice Goglin: "Re: [hwloc-devel] hwloc patch suggestions"</a>
<li><strong>In reply to:</strong> <a href="3685.php">Brice Goglin: "Re: [hwloc-devel] hwloc patch suggestions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3687.php">Brice Goglin: "Re: [hwloc-devel] hwloc patch suggestions"</a>
<li><strong>Reply:</strong> <a href="3687.php">Brice Goglin: "Re: [hwloc-devel] hwloc patch suggestions"</a>
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
