<?
$subject_val = "Re: [hwloc-devel] want 1.0rc4?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  3 22:28:31 2010" -->
<!-- isoreceived="20100504022831" -->
<!-- sent="Mon, 3 May 2010 21:28:23 -0500" -->
<!-- isosent="20100504022823" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] want 1.0rc4?" -->
<!-- id="95875102-5C5B-4313-B176-5BB85A7A688B_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="D45958078CD65C429557B4C5F492B6A60770E4C8_at_IS-EX-BEV3.unimelb.edu.au" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] want 1.0rc4?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-03 22:28:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0956.php">Brice Goglin: "Re: [hwloc-devel] want 1.0rc4?"</a>
<li><strong>Previous message:</strong> <a href="0954.php">Christopher Samuel: "Re: [hwloc-devel] want 1.0rc4?"</a>
<li><strong>In reply to:</strong> <a href="0954.php">Christopher Samuel: "Re: [hwloc-devel] want 1.0rc4?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0956.php">Brice Goglin: "Re: [hwloc-devel] want 1.0rc4?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Awesome; thanks Chris!
<br>
<p>On May 3, 2010, at 8:57 PM, Christopher Samuel wrote:
<br>
<p><span class="quotelev1">&gt; On 03/05/10 09:57, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 1.0rc4 is up.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Running coccicheck on 1.0rc4 flags up this construct, I presume
</span><br>
<span class="quotelev1">&gt; as an ambiguous construction:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     if (!topology-&gt;flags &amp; HWLOC_TOPOLOGY_FLAG_WHOLE_SYSTEM) {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That's at line 1518 of src/topology.c in hwloc_discover(). The
</span><br>
<span class="quotelev1">&gt; check file simply says:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; // !x&amp;y combines boolean negation with bitwise and
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's also flagged some unchecked malloc()'s in various bits:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; line 41 of src/misc.c in hwloc_snprintf():
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      str = malloc(size);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; line 321 of src/topology-linux.c in hwloc_linux_get_proc_tids():
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    tids = malloc(max_tids*sizeof(pid_t));
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; line 328 of src/topology-linux.c in hwloc_linux_get_proc_tids():
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        tids = realloc(tids, max_tids*sizeof(pid_t));
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; line 1561 of src/topology.c in hwloc_discover():
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    objs = malloc(n_objs * sizeof(objs[0]));
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hope these are helpful!
</span><br>
<span class="quotelev1">&gt; Chris
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;   Christopher Samuel - Senior Systems Administrator
</span><br>
<span class="quotelev1">&gt;   VLSCI - Victorian Life Sciences Computational Initiative
</span><br>
<span class="quotelev1">&gt;   Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
</span><br>
<span class="quotelev1">&gt;           <a href="http://www.vlsci.unimelb.edu.au/">http://www.vlsci.unimelb.edu.au/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0956.php">Brice Goglin: "Re: [hwloc-devel] want 1.0rc4?"</a>
<li><strong>Previous message:</strong> <a href="0954.php">Christopher Samuel: "Re: [hwloc-devel] want 1.0rc4?"</a>
<li><strong>In reply to:</strong> <a href="0954.php">Christopher Samuel: "Re: [hwloc-devel] want 1.0rc4?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0956.php">Brice Goglin: "Re: [hwloc-devel] want 1.0rc4?"</a>
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
