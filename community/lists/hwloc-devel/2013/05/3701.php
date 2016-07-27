<?
$subject_val = "Re: [hwloc-devel] hwloc and c89/c99";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  6 08:37:59 2013" -->
<!-- isoreceived="20130506123759" -->
<!-- sent="Mon, 06 May 2013 14:37:47 +0200" -->
<!-- isosent="20130506123747" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc and c89/c99" -->
<!-- id="5187A41B.1000603_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="51879305.7050502_at_mcs.anl.gov" -->
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
<strong>Date:</strong> 2013-05-06 08:37:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3702.php">Pavan Balaji: "Re: [hwloc-devel] hwloc-1.7 issue roundup"</a>
<li><strong>Previous message:</strong> <a href="3700.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.7 issue roundup"</a>
<li><strong>In reply to:</strong> <a href="3699.php">Pavan Balaji: "Re: [hwloc-devel] hwloc and c89/c99"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3703.php">Pavan Balaji: "Re: [hwloc-devel] hwloc and c89/c99"</a>
<li><strong>Reply:</strong> <a href="3703.php">Pavan Balaji: "Re: [hwloc-devel] hwloc and c89/c99"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 06/05/2013 13:24, Pavan Balaji a &#233;crit :
<br>
<span class="quotelev1">&gt; On 05/06/2013 01:25 AM US Central Time, Brice Goglin wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I think we removed C99 use (and configure check) from the code in 1.2
</span><br>
<span class="quotelev2">&gt;&gt; because some compilers didn't properly support it.
</span><br>
<span class="quotelev1">&gt; I looked at the code once more.  It seems to assume fixed width integers
</span><br>
<span class="quotelev1">&gt; all over the place.  These are all stdint.h types which is c99.  It
</span><br>
<span class="quotelev1">&gt; looks like c89 support is not consistent in the code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you check inside HWLOC_SETUP_CORE whether you have the necessary
</span><br>
<span class="quotelev1">&gt; level of c99 support and fail if you don't?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I am far from understanding everything in the C99-or-not aspects of the
<br>
code and build-system so I am not the one going to change any of this
<br>
unless strictly required.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3702.php">Pavan Balaji: "Re: [hwloc-devel] hwloc-1.7 issue roundup"</a>
<li><strong>Previous message:</strong> <a href="3700.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.7 issue roundup"</a>
<li><strong>In reply to:</strong> <a href="3699.php">Pavan Balaji: "Re: [hwloc-devel] hwloc and c89/c99"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3703.php">Pavan Balaji: "Re: [hwloc-devel] hwloc and c89/c99"</a>
<li><strong>Reply:</strong> <a href="3703.php">Pavan Balaji: "Re: [hwloc-devel] hwloc and c89/c99"</a>
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
