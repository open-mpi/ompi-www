<?
$subject_val = "Re: [hwloc-devel] trunk build problem";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 20 08:21:59 2012" -->
<!-- isoreceived="20120320122159" -->
<!-- sent="Tue, 20 Mar 2012 08:21:54 -0400" -->
<!-- isosent="20120320122154" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] trunk build problem" -->
<!-- id="F5B8A110-8A8D-4C44-B8C9-93D52C88C561_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4F6875B3.20108_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] trunk build problem<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-20 08:21:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2944.php">Jeffrey Squyres: "[hwloc-devel] PCI device name question"</a>
<li><strong>Previous message:</strong> <a href="2942.php">Brice Goglin: "Re: [hwloc-devel] trunk build problem"</a>
<li><strong>In reply to:</strong> <a href="2942.php">Brice Goglin: "Re: [hwloc-devel] trunk build problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No, what I need is to install doxygen (duh!).
<br>
<p>Sorry -- this is a relatively new laptop and I forgot to install doxygen.
<br>
<p>Ignore my mails; sorry for the noise...
<br>
<p><p>On Mar 20, 2012, at 8:18 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; These come from the icache branch merge. It was merged on 2012/03/16,
</span><br>
<span class="quotelev1">&gt; and nightly builds and our local testing look happy since then. Do you
</span><br>
<span class="quotelev1">&gt; need a fresh checkout and/or make maintainer-clean?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 20/03/2012 12:51, Jeffrey Squyres a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Sorry -- I should have done a &quot;make -k&quot; first:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** No rule to make target `doxygen-doc/man/man3/HWLOC_TOPOLOGY_FLAG_ICACHES.3', needed by `all-am'.
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** No rule to make target `doxygen-doc/man/man3/hwloc_get_cache_type_depth.3', needed by `all-am'.
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** No rule to make target `doxygen-doc/man/man3/HWLOC_OBJ_CACHE_UNIFIED.3', needed by `all-am'.
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** No rule to make target `doxygen-doc/man/man3/HWLOC_OBJ_CACHE_DATA.3', needed by `all-am'.
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** No rule to make target `doxygen-doc/man/man3/HWLOC_OBJ_CACHE_INSTRUCTION.3', needed by `all-am'.
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** No rule to make target `doxygen-doc/man/man3/hwloc_obj_cache_type_e.3', needed by `all-am'.
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** No rule to make target `doxygen-doc/man/man3/hwloc_obj_cache_type_t.3', needed by `all-am'.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 20, 2012, at 7:50 AM, Jeffrey Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FYI:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: *** No rule to make target `doxygen-doc/man/man3/HWLOC_TOPOLOGY_FLAG_ICACHES.3', needed by `all-am'.  Stop.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2944.php">Jeffrey Squyres: "[hwloc-devel] PCI device name question"</a>
<li><strong>Previous message:</strong> <a href="2942.php">Brice Goglin: "Re: [hwloc-devel] trunk build problem"</a>
<li><strong>In reply to:</strong> <a href="2942.php">Brice Goglin: "Re: [hwloc-devel] trunk build problem"</a>
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
