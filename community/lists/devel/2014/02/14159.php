<?
$subject_val = "Re: [OMPI devel] [PATCH] Fix typo defining macro _WORD_MASK_";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 17 11:37:36 2014" -->
<!-- isoreceived="20140217163736" -->
<!-- sent="Mon, 17 Feb 2014 16:37:34 +0000" -->
<!-- isosent="20140217163734" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH] Fix typo defining macro _WORD_MASK_" -->
<!-- id="5E8E6A82-335E-4E90-A7CA-FE5D6F691715_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8761oeiuxr.fsf_at_igel.home" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-17 11:37:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14160.php">Adrian Reber: "[OMPI devel] CRS/CRIU: add code to actually checkpoint a process"</a>
<li><strong>Previous message:</strong> <a href="14158.php">Ralph Castain: "Re: [OMPI devel] How to prefer oob/tcp over oob/usock"</a>
<li><strong>In reply to:</strong> <a href="14152.php">Andreas Schwab: "[OMPI devel] [PATCH] Fix typo defining macro _WORD_MASK_"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14176.php">Nathan Hjelm: "Re: [OMPI devel] [PATCH] Fix typo defining macro _WORD_MASK_"</a>
<li><strong>Reply:</strong> <a href="14176.php">Nathan Hjelm: "Re: [OMPI devel] [PATCH] Fix typo defining macro _WORD_MASK_"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
+1
<br>
<p>On Feb 16, 2014, at 4:55 PM, Andreas Schwab &lt;schwab_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; diff --git a/opal/util/crc.c b/opal/util/crc.c
</span><br>
<span class="quotelev1">&gt; index 9cfae94..c2112de 100644
</span><br>
<span class="quotelev1">&gt; --- a/opal/util/crc.c
</span><br>
<span class="quotelev1">&gt; +++ b/opal/util/crc.c
</span><br>
<span class="quotelev1">&gt; @@ -41,7 +41,7 @@
</span><br>
<span class="quotelev1">&gt; #elif (OPAL_ALIGNMENT_LONG == 4)
</span><br>
<span class="quotelev1">&gt; #define _WORD_MASK_ 0x3
</span><br>
<span class="quotelev1">&gt; #else
</span><br>
<span class="quotelev1">&gt; -#define _WORD_MASK 0xFFFF
</span><br>
<span class="quotelev1">&gt; +#define _WORD_MASK_ 0xFFFF
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; 1.9.0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Andreas Schwab, schwab_at_[hidden]
</span><br>
<span class="quotelev1">&gt; GPG Key fingerprint = 58CA 54C7 6D53 942B 1756  01D3 44D5 214B 8276 4ED5
</span><br>
<span class="quotelev1">&gt; &quot;And now for something completely different.&quot;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="14160.php">Adrian Reber: "[OMPI devel] CRS/CRIU: add code to actually checkpoint a process"</a>
<li><strong>Previous message:</strong> <a href="14158.php">Ralph Castain: "Re: [OMPI devel] How to prefer oob/tcp over oob/usock"</a>
<li><strong>In reply to:</strong> <a href="14152.php">Andreas Schwab: "[OMPI devel] [PATCH] Fix typo defining macro _WORD_MASK_"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14176.php">Nathan Hjelm: "Re: [OMPI devel] [PATCH] Fix typo defining macro _WORD_MASK_"</a>
<li><strong>Reply:</strong> <a href="14176.php">Nathan Hjelm: "Re: [OMPI devel] [PATCH] Fix typo defining macro _WORD_MASK_"</a>
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
