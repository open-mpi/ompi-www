<?
$subject_val = "Re: [hwloc-devel] hwloc patch suggestions";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May  5 16:52:48 2013" -->
<!-- isoreceived="20130505205248" -->
<!-- sent="Sun, 05 May 2013 22:52:22 +0200" -->
<!-- isosent="20130505205222" -->
<!-- name="Brice Goglin" -->
<!-- email="brice.goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc patch suggestions" -->
<!-- id="cc4f98a0-0241-4850-ac9a-36c019a6f5a6_at_email.android.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="5186BF96.9070006_at_mcs.anl.gov" -->
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
<strong>From:</strong> Brice Goglin (<em>brice.goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-05 16:52:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3688.php">Pavan Balaji: "Re: [hwloc-devel] hwloc patch suggestions"</a>
<li><strong>Previous message:</strong> <a href="3686.php">Pavan Balaji: "Re: [hwloc-devel] hwloc patch suggestions"</a>
<li><strong>In reply to:</strong> <a href="3686.php">Pavan Balaji: "Re: [hwloc-devel] hwloc patch suggestions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3688.php">Pavan Balaji: "Re: [hwloc-devel] hwloc patch suggestions"</a>
<li><strong>Reply:</strong> <a href="3688.php">Pavan Balaji: "Re: [hwloc-devel] hwloc patch suggestions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
By the way, libhwloc_embedded.so doesn't libtool version info, so maybe MPICH doesn't need that part?
<br>
Brice
<br>
<p><p>Pavan Balaji &lt;balaji_at_[hidden]&gt; a &#195;&#169;crit&#194;&#160;:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On 05/05/2013 03:15 PM US Central Time, Brice Goglin wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I think I'll apply these.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; But one question: do you still use autogen.sh in MPICH? I assumed
</span><br>
<span class="quotelev2">&gt;&gt; embedding hwloc.m4 would mean you don't need hwloc's autogen anymore.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;We still need it for the include/private/autogen/config.h stuff.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;However, this also means that the configure.ac part of the versioning
</span><br>
<span class="quotelev1">&gt;patch has no effect for us.  That part will need to sit in one of the
</span><br>
<span class="quotelev1">&gt;embeddable macros.  Let me investigate it some more and get back to
</span><br>
<span class="quotelev1">&gt;you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Pavan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;-- 
</span><br>
<span class="quotelev1">&gt;Pavan Balaji
</span><br>
<span class="quotelev1">&gt;<a href="http://www.mcs.anl.gov/~balaji">http://www.mcs.anl.gov/~balaji</a>
</span><br>
<p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-3687/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3688.php">Pavan Balaji: "Re: [hwloc-devel] hwloc patch suggestions"</a>
<li><strong>Previous message:</strong> <a href="3686.php">Pavan Balaji: "Re: [hwloc-devel] hwloc patch suggestions"</a>
<li><strong>In reply to:</strong> <a href="3686.php">Pavan Balaji: "Re: [hwloc-devel] hwloc patch suggestions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3688.php">Pavan Balaji: "Re: [hwloc-devel] hwloc patch suggestions"</a>
<li><strong>Reply:</strong> <a href="3688.php">Pavan Balaji: "Re: [hwloc-devel] hwloc patch suggestions"</a>
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
