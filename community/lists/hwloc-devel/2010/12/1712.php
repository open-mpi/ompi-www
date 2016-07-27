<?
$subject_val = "Re: [hwloc-devel] Hwloc perl binding";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 15 08:56:10 2010" -->
<!-- isoreceived="20101215135610" -->
<!-- sent="Wed, 15 Dec 2010 14:56:04 +0100" -->
<!-- isosent="20101215135604" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Hwloc perl binding" -->
<!-- id="4D08C8F4.8050604_at_inria.fr" -->
<!-- charset="ISO-8859-15" -->
<!-- inreplyto="1292420731.2272.54.camel_at_kallies" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-15 08:56:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1713.php">Bernd Kallies: "Re: [hwloc-devel] Hwloc perl binding"</a>
<li><strong>Previous message:</strong> <a href="1711.php">Bernd Kallies: "Re: [hwloc-devel] Hwloc perl binding"</a>
<li><strong>In reply to:</strong> <a href="1711.php">Bernd Kallies: "Re: [hwloc-devel] Hwloc perl binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1713.php">Bernd Kallies: "Re: [hwloc-devel] Hwloc perl binding"</a>
<li><strong>Reply:</strong> <a href="1713.php">Bernd Kallies: "Re: [hwloc-devel] Hwloc perl binding"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 15/12/2010 14:45, Bernd Kallies a &#233;crit :
<br>
<span class="quotelev1">&gt; The CPAN thing is the third implementation, which works with objects and
</span><br>
<span class="quotelev1">&gt; accessor methods. It is as fast as the first implementation, and perl
</span><br>
<span class="quotelev1">&gt; code looks almost like C code (except that it is not possible now to
</span><br>
<span class="quotelev1">&gt; compare the hwloc_obj perl representatives by value).
</span><br>
<p>Could you add something like obj-&gt;id which would contain a unique id
<br>
(the original C pointer?) that could be used to compare objects?
<br>
<p><span class="quotelev1">&gt; In summary I'm very satisfied with this implementation. There remains
</span><br>
<span class="quotelev1">&gt; the question how one should handle structs like hwloc_obj_memory_s and
</span><br>
<span class="quotelev1">&gt; the like. In my implementation these are represented by perl hashes.
</span><br>
<span class="quotelev1">&gt; SWIG code would map them to perl objects. The difference is:
</span><br>
<span class="quotelev1">&gt; my: $obj-&gt;memory-&gt;{total_memory}
</span><br>
<span class="quotelev1">&gt; OO: $obj-&gt;memory-&gt;total_memory
</span><br>
<span class="quotelev1">&gt; The first variant is uncoupled from the hwloc_obj struct, and allows to
</span><br>
<span class="quotelev1">&gt; change values or store additional things in the hash.
</span><br>
<span class="quotelev1">&gt; The second variant may allow manipulation of the hwloc_obj struct in the
</span><br>
<span class="quotelev1">&gt; memory of the C lib, but does not allow to store additional properties.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>I don't know which one is better.
<br>
<p><span class="quotelev1">&gt; In addition I noticed a lot of hwloc API functions that need a topology
</span><br>
<span class="quotelev1">&gt; pointer in their parameter list, which is unused in the function. Will
</span><br>
<span class="quotelev1">&gt; this become cleaned up in the future?
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>I'd say we have the topology parameter everywhere because the API looks
<br>
more consistent and because we may need it in the future.
<br>
<p>Are you actually referring to the main API, or to inline helpers such as
<br>
hwloc/helpers.h ? The latter are not strictly part of the API, and may
<br>
be changed easily since they are not in the ABI.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1713.php">Bernd Kallies: "Re: [hwloc-devel] Hwloc perl binding"</a>
<li><strong>Previous message:</strong> <a href="1711.php">Bernd Kallies: "Re: [hwloc-devel] Hwloc perl binding"</a>
<li><strong>In reply to:</strong> <a href="1711.php">Bernd Kallies: "Re: [hwloc-devel] Hwloc perl binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1713.php">Bernd Kallies: "Re: [hwloc-devel] Hwloc perl binding"</a>
<li><strong>Reply:</strong> <a href="1713.php">Bernd Kallies: "Re: [hwloc-devel] Hwloc perl binding"</a>
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
