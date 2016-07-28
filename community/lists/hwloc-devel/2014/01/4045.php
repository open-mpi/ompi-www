<?
$subject_val = "Re: [hwloc-devel] hwloc with Xen system support - v2";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 29 11:08:03 2014" -->
<!-- isoreceived="20140129160803" -->
<!-- sent="Wed, 29 Jan 2014 17:08:01 +0100" -->
<!-- isosent="20140129160801" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc with Xen system support - v2" -->
<!-- id="20140129160801.GF5634_at_type.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="52E9187D.6040800_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc with Xen system support - v2<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-29 11:08:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4046.php">Ralph Castain: "Re: [hwloc-devel] Attribute request"</a>
<li><strong>Previous message:</strong> <a href="4044.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<li><strong>In reply to:</strong> <a href="4044.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4047.php">Andrew Cooper: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice Goglin, le Wed 29 Jan 2014 16:04:54 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; We may want to make inputbuffer and outputbuffer generic enough (void* +
</span><br>
<span class="quotelev1">&gt; length) so that the model works for other architectures one day?
</span><br>
<p>Probably, yes.
<br>
<p><span class="quotelev1">&gt; Xen will know that they correspond to inputbuffer=one-register and
</span><br>
<span class="quotelev1">&gt; outputbuffer=four-registers when running on x86.
</span><br>
<p>It's actually already two-registers on x86, see cpuid calls which put
<br>
cachenum in ecx. Perhaps ebx and edx would be used someday, who knows,
<br>
so perhaps pass the four registers already.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4046.php">Ralph Castain: "Re: [hwloc-devel] Attribute request"</a>
<li><strong>Previous message:</strong> <a href="4044.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<li><strong>In reply to:</strong> <a href="4044.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4047.php">Andrew Cooper: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
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
