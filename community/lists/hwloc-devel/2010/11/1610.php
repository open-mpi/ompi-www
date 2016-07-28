<?
$subject_val = "Re: [hwloc-devel] hwloc patches for upstream";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 24 17:27:26 2010" -->
<!-- isoreceived="20101124222726" -->
<!-- sent="Wed, 24 Nov 2010 16:27:18 -0600" -->
<!-- isosent="20101124222718" -->
<!-- name="Pavan Balaji" -->
<!-- email="balaji_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc patches for upstream" -->
<!-- id="4CED9146.1070206_at_mcs.anl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4CED8FF8.1030604_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc patches for upstream<br>
<strong>From:</strong> Pavan Balaji (<em>balaji_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-24 17:27:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1611.php">Samuel Thibault: "Re: [hwloc-devel] hwloc patches for upstream"</a>
<li><strong>Previous message:</strong> <a href="1609.php">Brice Goglin: "Re: [hwloc-devel] hwloc patches for upstream"</a>
<li><strong>In reply to:</strong> <a href="1609.php">Brice Goglin: "Re: [hwloc-devel] hwloc patches for upstream"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1617.php">Jeff Squyres: "Re: [hwloc-devel] hwloc patches for upstream"</a>
<li><strong>Reply:</strong> <a href="1617.php">Jeff Squyres: "Re: [hwloc-devel] hwloc patches for upstream"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11/24/2010 04:21 PM, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Jeff knows more about this, but from I see in
</span><br>
<span class="quotelev1">&gt; tests/embedded/configure.ac, you can catch errors:
</span><br>
<span class="quotelev1">&gt;    HWLOC_SETUP_CORE([hwloc], [hwloc_setup=happy], [hwloc_setup=unhappy])
</span><br>
<span class="quotelev1">&gt; and then do what you want depending on $hwloc_setup.
</span><br>
<p>Ok, I searched through the hwloc macros, and I see that you are not 
<br>
aborting on errors now (except a few cases that I don't care about) and 
<br>
returning errors cleanly upstream. This was not the case when I checked 
<br>
last time, so I was discouraged from using it. I'll give it a shot and 
<br>
see if it works for us.
<br>
<p>Thanks for pointing it out.
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
<li><strong>Next message:</strong> <a href="1611.php">Samuel Thibault: "Re: [hwloc-devel] hwloc patches for upstream"</a>
<li><strong>Previous message:</strong> <a href="1609.php">Brice Goglin: "Re: [hwloc-devel] hwloc patches for upstream"</a>
<li><strong>In reply to:</strong> <a href="1609.php">Brice Goglin: "Re: [hwloc-devel] hwloc patches for upstream"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1617.php">Jeff Squyres: "Re: [hwloc-devel] hwloc patches for upstream"</a>
<li><strong>Reply:</strong> <a href="1617.php">Jeff Squyres: "Re: [hwloc-devel] hwloc patches for upstream"</a>
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
