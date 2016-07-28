<?
$subject_val = "Re: [hwloc-devel] Hwloc perl binding";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 15 15:02:10 2010" -->
<!-- isoreceived="20101215200210" -->
<!-- sent="Wed, 15 Dec 2010 21:02:04 +0100" -->
<!-- isosent="20101215200204" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Hwloc perl binding" -->
<!-- id="4D091EBC.7040202_at_inria.fr" -->
<!-- charset="ISO-8859-15" -->
<!-- inreplyto="1292442102.2272.159.camel_at_kallies" -->
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
<strong>Date:</strong> 2010-12-15 15:02:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1715.php">Guy Streeter: "Re: [hwloc-devel] Hwloc perl binding"</a>
<li><strong>Previous message:</strong> <a href="1713.php">Bernd Kallies: "Re: [hwloc-devel] Hwloc perl binding"</a>
<li><strong>In reply to:</strong> <a href="1713.php">Bernd Kallies: "Re: [hwloc-devel] Hwloc perl binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1715.php">Guy Streeter: "Re: [hwloc-devel] Hwloc perl binding"</a>
<li><strong>Reply:</strong> <a href="1715.php">Guy Streeter: "Re: [hwloc-devel] Hwloc perl binding"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 15/12/2010 20:41, Bernd Kallies a &#233;crit :
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Are you actually referring to the main API, or to inline helpers such as
</span><br>
<span class="quotelev2">&gt;&gt; hwloc/helpers.h ? The latter are not strictly part of the API, and may
</span><br>
<span class="quotelev2">&gt;&gt; be changed easily since they are not in the ABI.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt; It is not really clear to me what belongs to the main API, and what are
</span><br>
<span class="quotelev1">&gt; helpers.
</span><br>
<p>The main API is hwloc.h (and its dependency hwloc/bitmap.h or cpuset.h).
<br>
That's what's implemented in src/*.c
<br>
<p>Inline helpers are all static inline functions in most hwloc/*.h headers
<br>
(except config.h and rename.h which are special).
<br>
<p><span class="quotelev1">&gt;  I'm referring to things like the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int hwloc_obj_attr_snprintf(char * __hwloc_restrict string,
</span><br>
<span class="quotelev1">&gt;                             size_t size,
</span><br>
<span class="quotelev1">&gt;                             hwloc_obj_t obj,
</span><br>
<span class="quotelev1">&gt;                             const char * __hwloc_restrict separator,
</span><br>
<span class="quotelev1">&gt;                             int verbose);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int hwloc_obj_snprintf(char * __hwloc_restrict string,
</span><br>
<span class="quotelev1">&gt;                        size_t size,
</span><br>
<span class="quotelev1">&gt;                        hwloc_topology_t topology,
</span><br>
<span class="quotelev1">&gt;                        hwloc_obj_t obj,
</span><br>
<span class="quotelev1">&gt;                        const char * __hwloc_restrict indexprefix,
</span><br>
<span class="quotelev1">&gt;                        int verbose);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The prototypes are in hwloc.h (&quot;main&quot; API ?). The true source of these
</span><br>
<span class="quotelev1">&gt; are in src/traversal.c (&quot;helper&quot; API ?). There the topology parameter of
</span><br>
<span class="quotelev1">&gt; hwloc_obj_snprintf has attribute unused. Things like that.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>hwloc_obj_snprintf is deprecated anyway. We probably needed the topology
<br>
flag in the past, and we couldn't remove it later because it would have
<br>
broken the ABI.
<br>
<p>As I said, we're trying to keep things consistent. My understanding is
<br>
that a function should have a topology parameter if it traverses some
<br>
links between objects inside the topology. If it only operates on a
<br>
given object and does not traverse the topology at all, it will likely
<br>
not need any topology parameter.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1715.php">Guy Streeter: "Re: [hwloc-devel] Hwloc perl binding"</a>
<li><strong>Previous message:</strong> <a href="1713.php">Bernd Kallies: "Re: [hwloc-devel] Hwloc perl binding"</a>
<li><strong>In reply to:</strong> <a href="1713.php">Bernd Kallies: "Re: [hwloc-devel] Hwloc perl binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1715.php">Guy Streeter: "Re: [hwloc-devel] Hwloc perl binding"</a>
<li><strong>Reply:</strong> <a href="1715.php">Guy Streeter: "Re: [hwloc-devel] Hwloc perl binding"</a>
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
