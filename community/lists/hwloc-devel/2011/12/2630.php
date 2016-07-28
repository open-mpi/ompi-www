<?
$subject_val = "Re: [hwloc-devel] hwloc-1.3.1rc1: odd &quot;make check&quot; failure on Solaris 11";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 14 04:03:19 2011" -->
<!-- isoreceived="20111214090319" -->
<!-- sent="Wed, 14 Dec 2011 01:02:59 -0800" -->
<!-- isosent="20111214090259" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-1.3.1rc1: odd &amp;quot;make check&amp;quot; failure on Solaris 11" -->
<!-- id="4EE86643.5050208_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20111214085305.GH4197_at_type.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc-1.3.1rc1: odd &quot;make check&quot; failure on Solaris 11<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-14 04:02:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2631.php">Samuel Thibault: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<li><strong>Previous message:</strong> <a href="2629.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.3.1rc1: odd &quot;make check&quot; failure on Solaris 11"</a>
<li><strong>In reply to:</strong> <a href="2628.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.3.1rc1: odd &quot;make check&quot; failure on Solaris 11"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 12/14/2011 12:53 AM, Samuel Thibault wrote:
<br>
<span class="quotelev1">&gt; Paul H. Hargrove, le Wed 14 Dec 2011 09:50:23 +0100, a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; It appears that something has passed bogus arguments to hwloc-calc.
</span><br>
<span class="quotelev2">&gt;&gt; Adding &quot;set -x&quot; in test-hwloc-calc.sh.in I can find the failure is from:
</span><br>
<span class="quotelev2">&gt;&gt;       ./hwloc-calc --if synthetic --input &quot;node:4 core:4 pu:4&quot; pu:22-47
</span><br>
<span class="quotelev2">&gt;&gt; --largest --sep &quot;&quot;
</span><br>
<span class="quotelev2">&gt;&gt; Which I can confirm fails when run by hand on this platform, but works fine
</span><br>
<span class="quotelev2">&gt;&gt; elsewhere.
</span><br>
<span class="quotelev1">&gt; IIRC, the libtool-generated hwloc-calc shell script has issues with
</span><br>
<span class="quotelev1">&gt; empty parameters, such as &quot;&quot; above...
</span><br>
<p>Ah, yes.  If I change &quot;#!/bin/sh&quot; to &quot;#!/bin/bash&quot; in the 
<br>
libtool-generated wrapper then all goes fine.
<br>
So this is a problem w/ libtool-vs-sh when (sh != bash).
<br>
<p>I am about to report another libtool-related issue too.
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2631.php">Samuel Thibault: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<li><strong>Previous message:</strong> <a href="2629.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.3.1rc1: odd &quot;make check&quot; failure on Solaris 11"</a>
<li><strong>In reply to:</strong> <a href="2628.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.3.1rc1: odd &quot;make check&quot; failure on Solaris 11"</a>
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
