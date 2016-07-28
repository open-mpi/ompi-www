<?
$subject_val = "Re: [OMPI devel] oshmem 32 bit compile failures";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  4 13:51:01 2013" -->
<!-- isoreceived="20131004175101" -->
<!-- sent="Fri, 4 Oct 2013 20:51:00 +0300" -->
<!-- isosent="20131004175100" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] oshmem 32 bit compile failures" -->
<!-- id="CAAO1KybQazPnvTCyUQWeT3hiSSmNUzmt88hP8JCckxBKPGTsLQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F91DA86_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] oshmem 32 bit compile failures<br>
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-04 13:51:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13056.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] oshmem 32 bit compile failures"</a>
<li><strong>Previous message:</strong> <a href="13054.php">KAWASHIMA Takahiro: "Re: [OMPI devel] 1.6.5 large matrix test doesn't pass (decode) ?"</a>
<li><strong>In reply to:</strong> <a href="13051.php">Jeff Squyres (jsquyres): "[OMPI devel] oshmem 32 bit compile failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13056.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] oshmem 32 bit compile failures"</a>
<li><strong>Reply:</strong> <a href="13056.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] oshmem 32 bit compile failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>the code passes compilation with gcc/icc 32bit toolkits.
<br>
We don`t have absoft fortran compiler in the lab, is there any way we can
<br>
have it to try?
<br>
<p>Igor has some wild guess about what problem can be and created patch
<br>
(attached).
<br>
Could you try to apply it on OMPI tree and check with absoft compiler?
<br>
<p>Thanks
<br>
M
<br>
<p><p>On Fri, Oct 4, 2013 at 2:46 PM, Jeff Squyres (jsquyres)
<br>
&lt;jsquyres_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Absoft is seeing compile failures for oshmem.  Here's one example:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://mtt.open-mpi.org/index.php?do_redir=2132">http://mtt.open-mpi.org/index.php?do_redir=2132</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you scroll down through the stderr, it looks like there's a problem in
</span><br>
<span class="quotelev1">&gt; oshmsm/op/op.c.  Perhaps it's just a missing header file, or some code in
</span><br>
<span class="quotelev1">&gt; an #if/#else that isn't compiled/checked often...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt;
</span><br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13055/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13055/2943-issue.patch">2943-issue.patch</a>
</ul>
<!-- attachment="2943-issue.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13056.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] oshmem 32 bit compile failures"</a>
<li><strong>Previous message:</strong> <a href="13054.php">KAWASHIMA Takahiro: "Re: [OMPI devel] 1.6.5 large matrix test doesn't pass (decode) ?"</a>
<li><strong>In reply to:</strong> <a href="13051.php">Jeff Squyres (jsquyres): "[OMPI devel] oshmem 32 bit compile failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13056.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] oshmem 32 bit compile failures"</a>
<li><strong>Reply:</strong> <a href="13056.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] oshmem 32 bit compile failures"</a>
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
