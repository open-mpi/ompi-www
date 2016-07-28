<?
$subject_val = "Re: [OMPI devel] Snow leopard builds";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 25 10:34:59 2010" -->
<!-- isoreceived="20100125153459" -->
<!-- sent="Mon, 25 Jan 2010 10:34:54 -0500" -->
<!-- isosent="20100125153454" -->
<!-- name="Greg Watson" -->
<!-- email="g.watson_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Snow leopard builds" -->
<!-- id="0BF0AEBE-9EF4-4480-B941-69001045E5EC_at_computer.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B5CE6E1.60809_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Snow leopard builds<br>
<strong>From:</strong> Greg Watson (<em>g.watson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-25 10:34:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7356.php">Jeff Squyres: "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)"</a>
<li><strong>Previous message:</strong> <a href="7354.php">Jeff Squyres: "Re: [OMPI devel] Snow leopard builds"</a>
<li><strong>In reply to:</strong> <a href="7352.php">Paul H. Hargrove: "Re: [OMPI devel] Snow leopard builds"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rich, 
<br>
<p>Have you updated your developer tools to Xcode 3.2.1? If you still have the old developer tools you were using before upgrading to SL, this may be the problem.
<br>
<p>Greg
<br>
<p>On Jan 24, 2010, at 7:33 PM, Paul H. Hargrove wrote:
<br>
<p><span class="quotelev1">&gt; I build ompi-1.3.3 on Snow Leopard with no problems.
</span><br>
<span class="quotelev1">&gt; I have not tried any other versions.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Graham, Richard L. wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Has someone managed to build ompi on snow leopard ?  I am trying to build, and it looks like configure does not detect the support for htonl and friends, so it adds the definition.
</span><br>
<span class="quotelev2">&gt;&gt; static inline uint32_t htonl(uint32_t hostvar) { return hostvar; }
</span><br>
<span class="quotelev2">&gt;&gt; with the compiler proceeding to do a macro substituion for htonl, which obviously does not work.  I am hoping someone has run into this AND fixed the problem and could save me trying to figure out this part of our configure script, and how to fix it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Rich
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
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group                 Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; HPC Research Department                   Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     
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
<li><strong>Next message:</strong> <a href="7356.php">Jeff Squyres: "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)"</a>
<li><strong>Previous message:</strong> <a href="7354.php">Jeff Squyres: "Re: [OMPI devel] Snow leopard builds"</a>
<li><strong>In reply to:</strong> <a href="7352.php">Paul H. Hargrove: "Re: [OMPI devel] Snow leopard builds"</a>
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
