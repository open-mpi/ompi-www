<?
$subject_val = "[OMPI devel] [PATCH] Fix typo defining macro _WORD_MASK_";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb 16 16:55:45 2014" -->
<!-- isoreceived="20140216215545" -->
<!-- sent="Sun, 16 Feb 2014 22:55:44 +0100" -->
<!-- isosent="20140216215544" -->
<!-- name="Andreas Schwab" -->
<!-- email="schwab_at_[hidden]" -->
<!-- subject="[OMPI devel] [PATCH] Fix typo defining macro _WORD_MASK_" -->
<!-- id="8761oeiuxr.fsf_at_igel.home" -->
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
<strong>Subject:</strong> [OMPI devel] [PATCH] Fix typo defining macro _WORD_MASK_<br>
<strong>From:</strong> Andreas Schwab (<em>schwab_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-16 16:55:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14153.php">Alex Margolin: "[OMPI devel] How to read OPAL_OUTPUT-ed strings"</a>
<li><strong>Previous message:</strong> <a href="14151.php">Ralph Castain: "Re: [OMPI devel] C/R and orte_oob"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14159.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH] Fix typo defining macro _WORD_MASK_"</a>
<li><strong>Reply:</strong> <a href="14159.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH] Fix typo defining macro _WORD_MASK_"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
diff --git a/opal/util/crc.c b/opal/util/crc.c
<br>
index 9cfae94..c2112de 100644
<br>
--- a/opal/util/crc.c
<br>
+++ b/opal/util/crc.c
<br>
@@ -41,7 +41,7 @@
<br>
&nbsp;#elif (OPAL_ALIGNMENT_LONG == 4)
<br>
&nbsp;#define _WORD_MASK_ 0x3
<br>
&nbsp;#else
<br>
-#define _WORD_MASK 0xFFFF
<br>
+#define _WORD_MASK_ 0xFFFF
<br>
&nbsp;#endif
<br>
&nbsp;
<br>
&nbsp;
<br>
<pre>
-- 
1.9.0
-- 
Andreas Schwab, schwab_at_[hidden]
GPG Key fingerprint = 58CA 54C7 6D53 942B 1756  01D3 44D5 214B 8276 4ED5
&quot;And now for something completely different.&quot;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14153.php">Alex Margolin: "[OMPI devel] How to read OPAL_OUTPUT-ed strings"</a>
<li><strong>Previous message:</strong> <a href="14151.php">Ralph Castain: "Re: [OMPI devel] C/R and orte_oob"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14159.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH] Fix typo defining macro _WORD_MASK_"</a>
<li><strong>Reply:</strong> <a href="14159.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH] Fix typo defining macro _WORD_MASK_"</a>
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
