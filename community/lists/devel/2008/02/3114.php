<?
$subject_val = "Re: [OMPI devel] 32 bit openib btl warnings";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  1 09:27:50 2008" -->
<!-- isoreceived="20080201142750" -->
<!-- sent="Fri, 1 Feb 2008 09:27:04 -0500" -->
<!-- isosent="20080201142704" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 32 bit openib btl warnings" -->
<!-- id="2FA95D37-FA12-4853-8A2C-63040E00AE11_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="47A32BBC.2050401_at_cs.indiana.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 32 bit openib btl warnings<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-01 09:27:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3115.php">Tim Prins: "[OMPI devel] More VT warnings"</a>
<li><strong>Previous message:</strong> <a href="3113.php">Tim Prins: "Re: [OMPI devel] 32 bit openib btl warnings"</a>
<li><strong>In reply to:</strong> <a href="3113.php">Tim Prins: "Re: [OMPI devel] 32 bit openib btl warnings"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Cool; I missed that one -- thanks.
<br>
<p>On Feb 1, 2008, at 9:25 AM, Tim Prins wrote:
<br>
<p><span class="quotelev1">&gt; These were fixed by Gleb yesterday in
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/changeset/17346">https://svn.open-mpi.org/trac/ompi/changeset/17346</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I noticed these in IBM's MTT runs on the rhc branch last night:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; btl_openib_frag.c: In function 'out_constructor':
</span><br>
<span class="quotelev2">&gt;&gt; btl_openib_frag.c:74: warning: cast from pointer to integer of
</span><br>
<span class="quotelev2">&gt;&gt; different size
</span><br>
<span class="quotelev2">&gt;&gt; btl_openib_frag.c: In function 'recv_constructor':
</span><br>
<span class="quotelev2">&gt;&gt; btl_openib_frag.c:120: warning: cast from pointer to integer of
</span><br>
<span class="quotelev2">&gt;&gt; different size
</span><br>
<span class="quotelev2">&gt;&gt; btl_openib_frag.c: In function 'get_constructor':
</span><br>
<span class="quotelev2">&gt;&gt; btl_openib_frag.c:141: warning: cast from pointer to integer of
</span><br>
<span class="quotelev2">&gt;&gt; different size
</span><br>
<span class="quotelev2">&gt;&gt; btl_openib_lex.c:1740: warning: 'yy_flex_realloc' defined but not  
</span><br>
<span class="quotelev2">&gt;&gt; used
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This should be fairly recent with the OMPI trunk; I seem to recall
</span><br>
<span class="quotelev2">&gt;&gt; seeing Ralph merge yesterday.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't test 32 bit builds; do we have some casting / size issues in
</span><br>
<span class="quotelev2">&gt;&gt; 32 bit?
</span><br>
<span class="quotelev2">&gt;&gt;
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3115.php">Tim Prins: "[OMPI devel] More VT warnings"</a>
<li><strong>Previous message:</strong> <a href="3113.php">Tim Prins: "Re: [OMPI devel] 32 bit openib btl warnings"</a>
<li><strong>In reply to:</strong> <a href="3113.php">Tim Prins: "Re: [OMPI devel] 32 bit openib btl warnings"</a>
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
