<?
$subject_val = "Re: [hwloc-devel] hwloc-1.7 issue roundup";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  6 09:12:53 2013" -->
<!-- isoreceived="20130506131253" -->
<!-- sent="Mon, 06 May 2013 08:12:48 -0500" -->
<!-- isosent="20130506131248" -->
<!-- name="Pavan Balaji" -->
<!-- email="balaji_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-1.7 issue roundup" -->
<!-- id="5187AC50.7050605_at_mcs.anl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5187A113.906_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc-1.7 issue roundup<br>
<strong>From:</strong> Pavan Balaji (<em>balaji_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-06 09:12:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3703.php">Pavan Balaji: "Re: [hwloc-devel] hwloc and c89/c99"</a>
<li><strong>Previous message:</strong> <a href="3701.php">Brice Goglin: "Re: [hwloc-devel] hwloc and c89/c99"</a>
<li><strong>In reply to:</strong> <a href="3700.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.7 issue roundup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3707.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.7 issue roundup"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 05/06/2013 07:24 AM US Central Time, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; I am testing your patches on FreeBSD 9.1 under POSIX_SOURCE, things
</span><br>
<span class="quotelev1">&gt; compile fine but hwloc complains that it cannot find the number of
</span><br>
<span class="quotelev1">&gt; processors (because it needs sysctl or sysconf to do so, not available
</span><br>
<span class="quotelev1">&gt; without BSD types). So hwloc is almost useless in this case. Does that
</span><br>
<span class="quotelev1">&gt; look OK to you ? You're only using strict build flags for compile
</span><br>
<span class="quotelev1">&gt; testing, right?
</span><br>
<p>Yes, that looks right to me.  An alternative would be to detect that
<br>
sysctl is not present and just abort in HWLOC_SETUP_CORE.  They are both
<br>
equivalent as far as mpich is concerned.
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
<li><strong>Next message:</strong> <a href="3703.php">Pavan Balaji: "Re: [hwloc-devel] hwloc and c89/c99"</a>
<li><strong>Previous message:</strong> <a href="3701.php">Brice Goglin: "Re: [hwloc-devel] hwloc and c89/c99"</a>
<li><strong>In reply to:</strong> <a href="3700.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.7 issue roundup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3707.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.7 issue roundup"</a>
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
