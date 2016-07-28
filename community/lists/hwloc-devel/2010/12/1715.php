<?
$subject_val = "Re: [hwloc-devel] Hwloc perl binding";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 15 17:47:12 2010" -->
<!-- isoreceived="20101215224712" -->
<!-- sent="Wed, 15 Dec 2010 16:47:03 -0600" -->
<!-- isosent="20101215224703" -->
<!-- name="Guy Streeter" -->
<!-- email="streeter_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Hwloc perl binding" -->
<!-- id="4D094567.8050905_at_redhat.com" -->
<!-- charset="ISO-8859-15" -->
<!-- inreplyto="4D091EBC.7040202_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Hwloc perl binding<br>
<strong>From:</strong> Guy Streeter (<em>streeter_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-15 17:47:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1716.php">Christopher Samuel: "Re: [hwloc-devel] 1.1rc4 released"</a>
<li><strong>Previous message:</strong> <a href="1714.php">Brice Goglin: "Re: [hwloc-devel] Hwloc perl binding"</a>
<li><strong>In reply to:</strong> <a href="1714.php">Brice Goglin: "Re: [hwloc-devel] Hwloc perl binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1718.php">Samuel Thibault: "Re: [hwloc-devel] Hwloc perl binding"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 12/15/2010 02:02 PM, Brice Goglin wrote:
<br>
...
<br>
<span class="quotelev1">&gt; As I said, we're trying to keep things consistent. My understanding is
</span><br>
<span class="quotelev1">&gt; that a function should have a topology parameter if it traverses some
</span><br>
<span class="quotelev1">&gt; links between objects inside the topology. If it only operates on a
</span><br>
<span class="quotelev1">&gt; given object and does not traverse the topology at all, it will likely
</span><br>
<span class="quotelev1">&gt; not need any topology parameter.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I noticed that some functions (in or not in the ABI I don't recall right now, 
<br>
I'm not at my desk) need the topology parameter only because the topology 
<br>
structure holds pointers to platform-specific routines. That seems like a 
<br>
confusing generalization of the parameter's meaning/purpose.
<br>
It would be helpful, when creating bindings for object-oriented languages, if 
<br>
for instance operations on bindings could be methods of the bindings object, 
<br>
without the complication of holding the topology pointer in each object instance.
<br>
--Guy
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1716.php">Christopher Samuel: "Re: [hwloc-devel] 1.1rc4 released"</a>
<li><strong>Previous message:</strong> <a href="1714.php">Brice Goglin: "Re: [hwloc-devel] Hwloc perl binding"</a>
<li><strong>In reply to:</strong> <a href="1714.php">Brice Goglin: "Re: [hwloc-devel] Hwloc perl binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1718.php">Samuel Thibault: "Re: [hwloc-devel] Hwloc perl binding"</a>
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
