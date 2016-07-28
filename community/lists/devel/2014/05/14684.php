<?
$subject_val = "Re: [OMPI devel] [PATCH] Fix typo defining macro _WORD_MASK_";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  2 13:21:52 2014" -->
<!-- isoreceived="20140502172152" -->
<!-- sent="Fri, 2 May 2014 10:21:39 -0700" -->
<!-- isosent="20140502172139" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH] Fix typo defining macro _WORD_MASK_" -->
<!-- id="F9128918-70B0-47CC-B508-A86D47BF3106_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="20140218155536.GR89915_at_pn1246003.lanl.gov" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-02 13:21:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14685.php">Jeff Squyres (jsquyres): "[OMPI devel] oshmem fixed sized type support"</a>
<li><strong>Previous message:</strong> <a href="14683.php">Ralph Castain: "Re: [OMPI devel] [OMPI	svn]	svn:open-mpi	r31577	-	trunk/ompi/mca/rte/base"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/02/14176.php">Nathan Hjelm: "Re: [OMPI devel] [PATCH] Fix typo defining macro _WORD_MASK_"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fixed in r31615
<br>
<p>On Feb 18, 2014, at 7:55 AM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; _WORD_MASK_ violates C99 &#194;&#167; 7.1.3:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;All identi&#239;&#172;&#129;ers that begin with an underscore and either an uppercase letter or another
</span><br>
<span class="quotelev1">&gt; underscore are always reserved for any use.&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So we should probably rename the identifier.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Feb 17, 2014 at 04:37:34PM +0000, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt;&gt; +1
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 16, 2014, at 4:55 PM, Andreas Schwab &lt;schwab_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; diff --git a/opal/util/crc.c b/opal/util/crc.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; index 9cfae94..c2112de 100644
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- a/opal/util/crc.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ b/opal/util/crc.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -41,7 +41,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #elif (OPAL_ALIGNMENT_LONG == 4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #define _WORD_MASK_ 0x3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define _WORD_MASK 0xFFFF
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define _WORD_MASK_ 0xFFFF
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1.9.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Andreas Schwab, schwab_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; GPG Key fingerprint = 58CA 54C7 6D53 942B 1756  01D3 44D5 214B 8276 4ED5
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;And now for something completely different.&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14685.php">Jeff Squyres (jsquyres): "[OMPI devel] oshmem fixed sized type support"</a>
<li><strong>Previous message:</strong> <a href="14683.php">Ralph Castain: "Re: [OMPI devel] [OMPI	svn]	svn:open-mpi	r31577	-	trunk/ompi/mca/rte/base"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/02/14176.php">Nathan Hjelm: "Re: [OMPI devel] [PATCH] Fix typo defining macro _WORD_MASK_"</a>
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
