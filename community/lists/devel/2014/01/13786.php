<?
$subject_val = "Re: [OMPI devel] OSHMEM_SETUP_CFLAGS still not right";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 17 10:14:08 2014" -->
<!-- isoreceived="20140117151408" -->
<!-- sent="Fri, 17 Jan 2014 15:14:07 +0000" -->
<!-- isosent="20140117151407" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OSHMEM_SETUP_CFLAGS still not right" -->
<!-- id="844022F3-7FC3-4483-8D08-C83872BE3BB4_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA16r7GbjvN64WXJ_hUB2RJtBAV4pM0UMJjZkpupOtYk7Mw_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-17 10:14:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13787.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Paul's testing summary"</a>
<li><strong>Previous message:</strong> <a href="13785.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] test/util/opal_path_nfs failure due to EPERM"</a>
<li><strong>In reply to:</strong> <a href="13779.php">Paul Hargrove: "[OMPI devel] OSHMEM_SETUP_CFLAGS still not right"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13807.php">Paul Hargrove: "Re: [OMPI devel] OSHMEM_SETUP_CFLAGS still not right"</a>
<li><strong>Reply:</strong> <a href="13807.php">Paul Hargrove: "Re: [OMPI devel] OSHMEM_SETUP_CFLAGS still not right"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Paul --
<br>
<p>Looks like this wasn't actually fixed until r30305.
<br>
<p><p>On Jan 16, 2014, at 11:31 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The following commit claimed to have resolved the OSHMEM_SETUP_CFLAGS issues:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; r30286 | miked | 2014-01-14 05:23:44 -0800 (Tue, 14 Jan 2014) | 5 lines
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OSHMEM: fix fortran selection logic and refactoring
</span><br>
<span class="quotelev1">&gt; refactoring inspired by this thread: <a href="http://www.open-mpi.org/community/lists/devel/2014/01/13744.php">http://www.open-mpi.org/community/lists/devel/2014/01/13744.php</a>
</span><br>
<span class="quotelev1">&gt; fix oshmem fortran selection logic, Thanks to Paul for info
</span><br>
<span class="quotelev1">&gt; Refs #3763
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However the past couple nightly tarballs (1.9a1r30298 and 1.9a1r30302)
</span><br>
<span class="quotelev1">&gt; produce output like the following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *** Compiler flags
</span><br>
<span class="quotelev1">&gt; checking which of CFLAGS are ok for debugger modules...  -DNDEBUG
</span><br>
<span class="quotelev1">&gt; checking for debugger extra CFLAGS... -g
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-trunk-linux-x86_64-pgi-12.10/openmpi-1.9a1r30302/configure: line 285176: OSHMEM_SETUP_CFLAGS: command not found
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="13787.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Paul's testing summary"</a>
<li><strong>Previous message:</strong> <a href="13785.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] test/util/opal_path_nfs failure due to EPERM"</a>
<li><strong>In reply to:</strong> <a href="13779.php">Paul Hargrove: "[OMPI devel] OSHMEM_SETUP_CFLAGS still not right"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13807.php">Paul Hargrove: "Re: [OMPI devel] OSHMEM_SETUP_CFLAGS still not right"</a>
<li><strong>Reply:</strong> <a href="13807.php">Paul Hargrove: "Re: [OMPI devel] OSHMEM_SETUP_CFLAGS still not right"</a>
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
