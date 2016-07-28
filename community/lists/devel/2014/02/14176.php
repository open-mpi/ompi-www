<?
$subject_val = "Re: [OMPI devel] [PATCH] Fix typo defining macro _WORD_MASK_";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 18 10:55:37 2014" -->
<!-- isoreceived="20140218155537" -->
<!-- sent="Tue, 18 Feb 2014 08:55:36 -0700" -->
<!-- isosent="20140218155536" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH] Fix typo defining macro _WORD_MASK_" -->
<!-- id="20140218155536.GR89915_at_pn1246003.lanl.gov" -->
<!-- charset="utf-8" -->
<!-- inreplyto="5E8E6A82-335E-4E90-A7CA-FE5D6F691715_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [PATCH] Fix typo defining macro _WORD_MASK_<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-18 10:55:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14177.php">Josh Hursey: "Re: [OMPI devel] CRS/CRIU: add code to actually checkpoint a process"</a>
<li><strong>Previous message:</strong> <a href="14175.php">Adrian Reber: "Re: [OMPI devel] C/R and orte_oob"</a>
<li><strong>In reply to:</strong> <a href="14159.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH] Fix typo defining macro _WORD_MASK_"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14684.php">Ralph Castain: "Re: [OMPI devel] [PATCH] Fix typo defining macro _WORD_MASK_"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14684.php">Ralph Castain: "Re: [OMPI devel] [PATCH] Fix typo defining macro _WORD_MASK_"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
_WORD_MASK_ violates C99 &#194;&#167; 7.1.3:
<br>
<p>&quot;All identi&#239;&#172;&#129;ers that begin with an underscore and either an uppercase letter or another
<br>
underscore are always reserved for any use.&quot;
<br>
<p><p>So we should probably rename the identifier.
<br>
<p>-Nathan
<br>
<p>On Mon, Feb 17, 2014 at 04:37:34PM +0000, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; +1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 16, 2014, at 4:55 PM, Andreas Schwab &lt;schwab_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/opal/util/crc.c b/opal/util/crc.c
</span><br>
<span class="quotelev2">&gt; &gt; index 9cfae94..c2112de 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/opal/util/crc.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/opal/util/crc.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -41,7 +41,7 @@
</span><br>
<span class="quotelev2">&gt; &gt; #elif (OPAL_ALIGNMENT_LONG == 4)
</span><br>
<span class="quotelev2">&gt; &gt; #define _WORD_MASK_ 0x3
</span><br>
<span class="quotelev2">&gt; &gt; #else
</span><br>
<span class="quotelev2">&gt; &gt; -#define _WORD_MASK 0xFFFF
</span><br>
<span class="quotelev2">&gt; &gt; +#define _WORD_MASK_ 0xFFFF
</span><br>
<span class="quotelev2">&gt; &gt; #endif
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -- 
</span><br>
<span class="quotelev2">&gt; &gt; 1.9.0
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -- 
</span><br>
<span class="quotelev2">&gt; &gt; Andreas Schwab, schwab_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; GPG Key fingerprint = 58CA 54C7 6D53 942B 1756  01D3 44D5 214B 8276 4ED5
</span><br>
<span class="quotelev2">&gt; &gt; &quot;And now for something completely different.&quot;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14176/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14177.php">Josh Hursey: "Re: [OMPI devel] CRS/CRIU: add code to actually checkpoint a process"</a>
<li><strong>Previous message:</strong> <a href="14175.php">Adrian Reber: "Re: [OMPI devel] C/R and orte_oob"</a>
<li><strong>In reply to:</strong> <a href="14159.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH] Fix typo defining macro _WORD_MASK_"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14684.php">Ralph Castain: "Re: [OMPI devel] [PATCH] Fix typo defining macro _WORD_MASK_"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14684.php">Ralph Castain: "Re: [OMPI devel] [PATCH] Fix typo defining macro _WORD_MASK_"</a>
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
