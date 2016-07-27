<?
$subject_val = "Re: [hwloc-devel] AIX";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug  3 06:56:25 2011" -->
<!-- isoreceived="20110803105625" -->
<!-- sent="Wed, 3 Aug 2011 12:56:19 +0200" -->
<!-- isosent="20110803105619" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] AIX" -->
<!-- id="20110803105619.GZ11101_at_const.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="2098899503.1933125.1312368557743.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] AIX<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-03 06:56:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2263.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3a1r3578)"</a>
<li><strong>Previous message:</strong> <a href="2261.php">Brice Goglin: "Re: [hwloc-devel] AIX"</a>
<li><strong>Maybe in reply to:</strong> <a href="2260.php">Samuel Thibault: "Re: [hwloc-devel] AIX"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice Goglin, le Wed 03 Aug 2011 12:49:17 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; Le 03/08/2011 12:46, Samuel Thibault a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; Also, it seems that on your system the processing units are gathered 4
</span><br>
<span class="quotelev2">&gt; &gt; by 4 (exposed as a &quot;group&quot; in hwloc). Do you happen to know what this
</span><br>
<span class="quotelev2">&gt; &gt; physically correspond to?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Power6 is dual-core dual-thread and we don't have sockets in this
</span><br>
<span class="quotelev1">&gt; output, so I assume each 4-group is a socket ?
</span><br>
<p>That's what I'd assume too, I'd just rather make sure. What is missing
<br>
is the R_SOMETHING that corresponds to. On our old 16 cores decrypthon
<br>
machine, R_SMPSDL was covering the whole system, so that wouldn't be it,
<br>
I guess AIX defined yet another R_FOO.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2263.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3a1r3578)"</a>
<li><strong>Previous message:</strong> <a href="2261.php">Brice Goglin: "Re: [hwloc-devel] AIX"</a>
<li><strong>Maybe in reply to:</strong> <a href="2260.php">Samuel Thibault: "Re: [hwloc-devel] AIX"</a>
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
