<?
$subject_val = "Re: [hwloc-devel] hwloc and c89/c99";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  6 09:14:38 2013" -->
<!-- isoreceived="20130506131438" -->
<!-- sent="Mon, 06 May 2013 08:14:33 -0500" -->
<!-- isosent="20130506131433" -->
<!-- name="Pavan Balaji" -->
<!-- email="balaji_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc and c89/c99" -->
<!-- id="5187ACB9.9030802_at_mcs.anl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5187A41B.1000603_at_inria.fr" -->
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
<strong>From:</strong> Pavan Balaji (<em>balaji_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-06 09:14:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3704.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.8a1r5587)"</a>
<li><strong>Previous message:</strong> <a href="3702.php">Pavan Balaji: "Re: [hwloc-devel] hwloc-1.7 issue roundup"</a>
<li><strong>In reply to:</strong> <a href="3701.php">Brice Goglin: "Re: [hwloc-devel] hwloc and c89/c99"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 05/06/2013 07:37 AM US Central Time, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Le 06/05/2013 13:24, Pavan Balaji a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; On 05/06/2013 01:25 AM US Central Time, Brice Goglin wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think we removed C99 use (and configure check) from the code in 1.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; because some compilers didn't properly support it.
</span><br>
<span class="quotelev2">&gt;&gt; I looked at the code once more.  It seems to assume fixed width integers
</span><br>
<span class="quotelev2">&gt;&gt; all over the place.  These are all stdint.h types which is c99.  It
</span><br>
<span class="quotelev2">&gt;&gt; looks like c89 support is not consistent in the code.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you check inside HWLOC_SETUP_CORE whether you have the necessary
</span><br>
<span class="quotelev2">&gt;&gt; level of c99 support and fail if you don't?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am far from understanding everything in the C99-or-not aspects of the
</span><br>
<span class="quotelev1">&gt; code and build-system so I am not the one going to change any of this
</span><br>
<span class="quotelev1">&gt; unless strictly required.
</span><br>
<p>Fair enough.  I can contribute patches as I find issues.  So far things
<br>
seem to be working well for us.
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
<li><strong>Next message:</strong> <a href="3704.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.8a1r5587)"</a>
<li><strong>Previous message:</strong> <a href="3702.php">Pavan Balaji: "Re: [hwloc-devel] hwloc-1.7 issue roundup"</a>
<li><strong>In reply to:</strong> <a href="3701.php">Brice Goglin: "Re: [hwloc-devel] hwloc and c89/c99"</a>
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
