<?
$subject_val = "Re: [hwloc-devel] asymmetric trees";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 15 00:35:33 2011" -->
<!-- isoreceived="20110415043533" -->
<!-- sent="Fri, 15 Apr 2011 06:35:26 +0200" -->
<!-- isosent="20110415043526" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] asymmetric trees" -->
<!-- id="4DA7CB0E.3000002_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="08C650B6-335C-4E4B-B763-E660B708F894_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] asymmetric trees<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-15 00:35:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2153.php">Brice Goglin: "Re: [hwloc-devel] specifying I/O devices on the command-line"</a>
<li><strong>Previous message:</strong> <a href="2151.php">Jeff Squyres: "Re: [hwloc-devel] asymmetric trees"</a>
<li><strong>In reply to:</strong> <a href="2151.php">Jeff Squyres: "Re: [hwloc-devel] asymmetric trees"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&quot;Group&quot; too. When you have very hierarchy NUMA distances (Altix UV), you
<br>
create groups of groups of groups...
<br>
<p>Brice
<br>
<p><p>Le 15/04/2011 03:16, Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; Ok, I get it now -- cache is probably about the only object where this could occur, right?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 14, 2011, at 9:08 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; On the subject of asymmetric trees, I see the description of hwloc_type_get_depth() in hwloc.h:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /** \brief Returns the depth of objects of type \p type.
</span><br>
<span class="quotelev2">&gt;&gt; *
</span><br>
<span class="quotelev2">&gt;&gt; * ...snipped...
</span><br>
<span class="quotelev2">&gt;&gt; *
</span><br>
<span class="quotelev2">&gt;&gt; * If some objects of the given type exist in different levels, for instance
</span><br>
<span class="quotelev2">&gt;&gt; * L1 and L2 caches, the function returns HWLOC_TYPE_DEPTH_MULTIPLE.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Am I reading the FAQ wrong?  I thought the figure on page 21 (US letter) indicated that, for example, the depth of CORE objects would always be the same, even though one of them doesn't have the same caches as its siblings.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2153.php">Brice Goglin: "Re: [hwloc-devel] specifying I/O devices on the command-line"</a>
<li><strong>Previous message:</strong> <a href="2151.php">Jeff Squyres: "Re: [hwloc-devel] asymmetric trees"</a>
<li><strong>In reply to:</strong> <a href="2151.php">Jeff Squyres: "Re: [hwloc-devel] asymmetric trees"</a>
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
