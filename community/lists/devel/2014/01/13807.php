<?
$subject_val = "Re: [OMPI devel] OSHMEM_SETUP_CFLAGS still not right";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 17 22:58:12 2014" -->
<!-- isoreceived="20140118035812" -->
<!-- sent="Fri, 17 Jan 2014 19:58:10 -0800" -->
<!-- isosent="20140118035810" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OSHMEM_SETUP_CFLAGS still not right" -->
<!-- id="CAAvDA159HB4i5agyyvcn-sm81pVyErURoY_oEEKSLDiKpeUpYw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="844022F3-7FC3-4483-8D08-C83872BE3BB4_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OSHMEM_SETUP_CFLAGS still not right<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-17 22:58:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13808.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: build failure on mips32 and ppc32"</a>
<li><strong>Previous message:</strong> <a href="13806.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: build failure on mips32 and ppc32"</a>
<li><strong>In reply to:</strong> <a href="13786.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OSHMEM_SETUP_CFLAGS still not right"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yup, looks fine in the nightly (1.9a1r30319) tarball.
<br>
<p>-Paul
<br>
<p><p>On Fri, Jan 17, 2014 at 7:14 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; Paul --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Looks like this wasn't actually fixed until r30305.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 16, 2014, at 11:31 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The following commit claimed to have resolved the OSHMEM_SETUP_CFLAGS
</span><br>
<span class="quotelev1">&gt; issues:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; r30286 | miked | 2014-01-14 05:23:44 -0800 (Tue, 14 Jan 2014) | 5 lines
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; OSHMEM: fix fortran selection logic and refactoring
</span><br>
<span class="quotelev2">&gt; &gt; refactoring inspired by this thread:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/01/13744.php">http://www.open-mpi.org/community/lists/devel/2014/01/13744.php</a>
</span><br>
<span class="quotelev2">&gt; &gt; fix oshmem fortran selection logic, Thanks to Paul for info
</span><br>
<span class="quotelev2">&gt; &gt; Refs #3763
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; However the past couple nightly tarballs (1.9a1r30298 and 1.9a1r30302)
</span><br>
<span class="quotelev2">&gt; &gt; produce output like the following:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; *** Compiler flags
</span><br>
<span class="quotelev2">&gt; &gt; checking which of CFLAGS are ok for debugger modules...  -DNDEBUG
</span><br>
<span class="quotelev2">&gt; &gt; checking for debugger extra CFLAGS... -g
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-trunk-linux-x86_64-pgi-12.10/openmpi-1.9a1r30302/configure:
</span><br>
<span class="quotelev1">&gt; line 285176: OSHMEM_SETUP_CFLAGS: command not found
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Paul
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Future Technologies Group
</span><br>
<span class="quotelev2">&gt; &gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt; &gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
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
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13807/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13808.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: build failure on mips32 and ppc32"</a>
<li><strong>Previous message:</strong> <a href="13806.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: build failure on mips32 and ppc32"</a>
<li><strong>In reply to:</strong> <a href="13786.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OSHMEM_SETUP_CFLAGS still not right"</a>
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
