<?
$subject_val = "Re: [OMPI devel] OpenIB compile error";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun 23 06:32:20 2012" -->
<!-- isoreceived="20120623103220" -->
<!-- sent="Sat, 23 Jun 2012 06:32:15 -0400" -->
<!-- isosent="20120623103215" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenIB compile error" -->
<!-- id="B8727CE9-5C9A-4BB3-88EC-C8D870DB26BD_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4FE53752.5010003_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OpenIB compile error<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-23 06:32:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11158.php">Eugene Loh: "Re: [OMPI devel] bug in r26626"</a>
<li><strong>Previous message:</strong> <a href="11156.php">TERRY DONTJE: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>In reply to:</strong> <a href="11156.php">TERRY DONTJE: "Re: [OMPI devel] OpenIB compile error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11159.php">TERRY DONTJE: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>Reply:</strong> <a href="11159.php">TERRY DONTJE: "Re: [OMPI devel] OpenIB compile error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 22, 2012, at 11:26 PM, TERRY DONTJE wrote:
<br>
<p><span class="quotelev2">&gt;&gt; 4. The behavior of --with[out]-verbs is as was described in a prior mail:
</span><br>
<span class="quotelev2">&gt;&gt;   - if --with-verbs is specified, all 3 verbs-based components must succeed
</span><br>
<span class="quotelev2">&gt;&gt;   - if --without-verbs is specified, all 4 verbs-based components will not build
</span><br>
<span class="quotelev2">&gt;&gt;   - if --with-verbs=DIR is specified, all 3 verbs-based components must succeed and will use DIR to find verbs headers and libraries
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; What does it mean that &quot;all 3 verbs-based components must succeed&quot;?  
</span><br>
<span class="quotelev1">&gt; Does that mean you cannot specify --with-verbs=DIR --with-openib --without-ofud?
</span><br>
<p>Yes.  --with/without-ofud never worked, anyway (i.e., there was no code that implemented it).  Ditto that there was no --with/without-ud.
<br>
<p><span class="quotelev1">&gt; Does it mean that if you specify --with-verbs=DIR  and some other dependency is not found for openib btl that the configure fails?
</span><br>
<p>Yes.  Same was true for --with-openib=DIR.
<br>
<p><span class="quotelev1">&gt; What is the 4th verbs-based component this is not built when one specifies --without-verbs.
</span><br>
<p>There isn't one.  
<br>
<p>You're probably thinking of hwloc; hwloc can *use* verbs, but it doesn't *require* verbs.  The other 3 (OOB UD, BTL OFUD, BTL openib) all *require* verbs and cannot be built without it.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11158.php">Eugene Loh: "Re: [OMPI devel] bug in r26626"</a>
<li><strong>Previous message:</strong> <a href="11156.php">TERRY DONTJE: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>In reply to:</strong> <a href="11156.php">TERRY DONTJE: "Re: [OMPI devel] OpenIB compile error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11159.php">TERRY DONTJE: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>Reply:</strong> <a href="11159.php">TERRY DONTJE: "Re: [OMPI devel] OpenIB compile error"</a>
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
