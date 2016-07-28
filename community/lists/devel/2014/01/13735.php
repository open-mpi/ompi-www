<?
$subject_val = "Re: [OMPI devel] 1.7.4rc2r30168 - PGI F08 failure";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 10 20:04:39 2014" -->
<!-- isoreceived="20140111010439" -->
<!-- sent="Sat, 11 Jan 2014 01:04:38 +0000" -->
<!-- isosent="20140111010438" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4rc2r30168 - PGI F08 failure" -->
<!-- id="4663AF09-730E-455C-84CD-C96BF2E25178_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA17e+BTUWEr0NnJyj+XWgCjJaHJgNmKh7fP-ZRCstB=d1g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7.4rc2r30168 - PGI F08 failure<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-10 20:04:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13736.php">Paul Hargrove: "Re: [OMPI devel] trunk - build failure on OpenBSD"</a>
<li><strong>Previous message:</strong> <a href="13734.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30168 - PGI F08 failure"</a>
<li><strong>In reply to:</strong> <a href="13734.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30168 - PGI F08 failure"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, I'm pretty sure we've seen that before, and it was ID'ed as either a local configuration issue or a PGI bug.
<br>
<p><p>On Jan 10, 2014, at 7:51 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Jan 10, 2014 at 4:46 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Jan 10, 2014 at 4:43 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Don't worry about PGI 11.  I'm happy enough knowing that PGI 12 works.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Test is already running to satisfy my own curiosity.
</span><br>
<span class="quotelev1">&gt; But I'll only post the result if something fails.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With pgi-11.1 something DID fail:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   CCLD     libopen-pal.la
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: /global/common/carver/usg/pgi/11.1/linux86-64/11.1/lib/libpgbind.a(bindsa.o): relocation R_X86_64_PC32 against `syscall@@GLIBC_2.2.5' can not be used when making a shared object; recompile with -fPIC
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: final link failed: Bad value
</span><br>
<span class="quotelev1">&gt; make[2]: *** [libopen-pal.la] Error 2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This looks like a PGI bug.
</span><br>
<span class="quotelev1">&gt; So, I'll try again for a pgi-11.x with x &gt; 1.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
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
<li><strong>Next message:</strong> <a href="13736.php">Paul Hargrove: "Re: [OMPI devel] trunk - build failure on OpenBSD"</a>
<li><strong>Previous message:</strong> <a href="13734.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30168 - PGI F08 failure"</a>
<li><strong>In reply to:</strong> <a href="13734.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30168 - PGI F08 failure"</a>
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
