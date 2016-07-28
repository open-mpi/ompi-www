<?
$subject_val = "Re: [hwloc-devel] hwloc with Xen system support - v2";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 29 10:04:43 2014" -->
<!-- isoreceived="20140129150443" -->
<!-- sent="Wed, 29 Jan 2014 16:04:29 +0100" -->
<!-- isosent="20140129150429" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc with Xen system support - v2" -->
<!-- id="52E9187D.6040800_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="52D6D03D.2030201_at_citrix.com" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-29 10:04:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4045.php">Samuel Thibault: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<li><strong>Previous message:</strong> <a href="4043.php">Brice Goglin: "Re: [hwloc-devel] Attribute request"</a>
<li><strong>In reply to:</strong> <a href="4029.php">Andrew Cooper: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4045.php">Samuel Thibault: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<li><strong>Reply:</strong> <a href="4045.php">Samuel Thibault: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<li><strong>Reply:</strong> <a href="4047.php">Andrew Cooper: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've been thinking about how to use the cpuid hypercall.
<br>
<p>Right now the x86 backend does
<br>
foreach proc
<br>
&nbsp;&nbsp;bind on this proc
<br>
&nbsp;&nbsp;do a lot of cpuid calls
<br>
<p>It would do instead
<br>
foreach proc
<br>
&nbsp;&nbsp;cpuid hypercall on this proc
<br>
<p>So we would
<br>
1) add a cpuid(topology, cpu, inputbuffer, outputbuffer) hook pointer in
<br>
the topology structure
<br>
2) have xen define that hook (using a new function since the topology
<br>
internals are not visible to plugins). It could be in the xen discover()
<br>
callback. Or it could be in the instantiate() callback if we want the
<br>
x86 backend to work when used before the xen backend. I think we just
<br>
have to be sure we don't enable that hook before we're sure the Xen
<br>
backend will work.
<br>
3) when this hook is defined, the x86 backend doesn't need to bind
<br>
anymore, but it uses that cpuid hook instead of raw cpuid instructions.
<br>
<p>We may want to make inputbuffer and outputbuffer generic enough (void* +
<br>
length) so that the model works for other architectures one day? Xen
<br>
will know that they correspond to inputbuffer=one-register and
<br>
outputbuffer=four-registers when running on x86.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4045.php">Samuel Thibault: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<li><strong>Previous message:</strong> <a href="4043.php">Brice Goglin: "Re: [hwloc-devel] Attribute request"</a>
<li><strong>In reply to:</strong> <a href="4029.php">Andrew Cooper: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4045.php">Samuel Thibault: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<li><strong>Reply:</strong> <a href="4045.php">Samuel Thibault: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<li><strong>Reply:</strong> <a href="4047.php">Andrew Cooper: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
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
