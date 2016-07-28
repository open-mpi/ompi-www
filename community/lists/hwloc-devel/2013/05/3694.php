<?
$subject_val = "Re: [hwloc-devel] hwloc and c89/c99";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  6 02:26:00 2013" -->
<!-- isoreceived="20130506062600" -->
<!-- sent="Mon, 06 May 2013 08:25:51 +0200" -->
<!-- isosent="20130506062551" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc and c89/c99" -->
<!-- id="51874CEF.4080502_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5187040F.3050607_at_mcs.anl.gov" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc and c89/c99<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-06 02:25:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3695.php">Brice Goglin: "Re: [hwloc-devel] hwloc patch suggestions"</a>
<li><strong>Previous message:</strong> <a href="3693.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.5.3rc1r5585)"</a>
<li><strong>In reply to:</strong> <a href="3692.php">Pavan Balaji: "[hwloc-devel] hwloc and c89/c99"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3696.php">Pavan Balaji: "Re: [hwloc-devel] hwloc and c89/c99"</a>
<li><strong>Reply:</strong> <a href="3696.php">Pavan Balaji: "Re: [hwloc-devel] hwloc and c89/c99"</a>
<li><strong>Reply:</strong> <a href="3699.php">Pavan Balaji: "Re: [hwloc-devel] hwloc and c89/c99"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think we removed C99 use (and configure check) from the code in 1.2
<br>
because some compilers didn't properly support it.
<br>
Brice
<br>
<p><p><p>Le 06/05/2013 03:14, Pavan Balaji a &#233;crit :
<br>
<span class="quotelev1">&gt; Is hwloc supposed to support c89 only (no c99)?  I remember having this
</span><br>
<span class="quotelev1">&gt; discussion earlier and the hwloc developers said that hwloc assumes c99.
</span><br>
<span class="quotelev1">&gt;  At that point we ensured that there was a configure check for c99
</span><br>
<span class="quotelev1">&gt; support and hwloc was disabled if c99 support was not found (by failing
</span><br>
<span class="quotelev1">&gt; in HWLOC_SETUP_CORE).  I don't see such a check in the current code.
</span><br>
<span class="quotelev1">&gt; Was this accidentally dropped at some point?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When we build mpich with c89 support, it is entering hwloc and failing
</span><br>
<span class="quotelev1">&gt; to build.  Before I go tracking this, I want to make sure I'm not
</span><br>
<span class="quotelev1">&gt; missing something more straightforward.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  -- Pavan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3695.php">Brice Goglin: "Re: [hwloc-devel] hwloc patch suggestions"</a>
<li><strong>Previous message:</strong> <a href="3693.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.5.3rc1r5585)"</a>
<li><strong>In reply to:</strong> <a href="3692.php">Pavan Balaji: "[hwloc-devel] hwloc and c89/c99"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3696.php">Pavan Balaji: "Re: [hwloc-devel] hwloc and c89/c99"</a>
<li><strong>Reply:</strong> <a href="3696.php">Pavan Balaji: "Re: [hwloc-devel] hwloc and c89/c99"</a>
<li><strong>Reply:</strong> <a href="3699.php">Pavan Balaji: "Re: [hwloc-devel] hwloc and c89/c99"</a>
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
