<?
$subject_val = "Re: [OMPI devel] Invalid format strings in ROMIO";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 20 19:32:06 2012" -->
<!-- isoreceived="20120221003206" -->
<!-- sent="Mon, 20 Feb 2012 19:32:00 -0500" -->
<!-- isosent="20120221003200" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Invalid format strings in ROMIO" -->
<!-- id="1E8A0B69-10DF-4142-B87A-2F96FE22CA79_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F42E3E9.6060907_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Invalid format strings in ROMIO<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-20 19:32:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10528.php">Jeffrey Squyres: "Re: [OMPI devel] [EXTERNAL] Re:  [OMPI svn] svn:open-mpi r25966"</a>
<li><strong>Previous message:</strong> <a href="10526.php">Paul H. Hargrove: "[OMPI devel] Invalid format strings in ROMIO"</a>
<li><strong>In reply to:</strong> <a href="10526.php">Paul H. Hargrove: "[OMPI devel] Invalid format strings in ROMIO"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We've been forwarding all of these kinds of fixes upstream.
<br>
<p><p>On Feb 20, 2012, at 7:23 PM, Paul H. Hargrove wrote:
<br>
<p><span class="quotelev1">&gt; Both the v1.5 branch and trunk are getting lots of warnings from Clang like the following:
</span><br>
<span class="quotelev2">&gt;&gt;  CC     ad_coll_exch_new.lo
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../../../../ompi/mca/io/romio/romio/adio/common/ad_coll_exch_new.c:51:28: warning: length modifier
</span><br>
<span class="quotelev2">&gt;&gt; 'L' results in undefined behavior or no effect with 'd' conversion specifier [-Wformat]
</span><br>
<span class="quotelev2">&gt;&gt;            fprintf(stderr, &quot;%d=(%Ld,%Ld)\n&quot;, i, flatlist_node_p-&gt;indices[i],
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Manpages from both Linux (glibc) and FreeBSD (NOT glibc) agree that &quot;L&quot; is only a valid length modifier for the floating-point conversion specifiers.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Grepping both v1.5 and trunk show instances of &quot;%Ld&quot; in:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ompi/mca/io/romio/romio/adio/common/ad_write_nolock.c
</span><br>
<span class="quotelev1">&gt; ompi/mca/io/romio/romio/adio/common/ad_coll_build_req_new.c
</span><br>
<span class="quotelev1">&gt; ompi/mca/io/romio/romio/adio/common/ad_coll_exch_new.c
</span><br>
<span class="quotelev1">&gt; ompi/mca/io/romio/romio/adio/ad_gridftp/ad_gridftp_write.c
</span><br>
<span class="quotelev1">&gt; ompi/mca/io/romio/romio/adio/ad_pvfs2/ad_pvfs2_io_dtype.c
</span><br>
<span class="quotelev1">&gt; ompi/mca/io/romio/romio/adio/ad_pvfs2/ad_pvfs2_io_list.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Not sure how much one cares, but I am reporting on the off chance somebody does want to fix this.
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
<span class="quotelev1">&gt; HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
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
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10528.php">Jeffrey Squyres: "Re: [OMPI devel] [EXTERNAL] Re:  [OMPI svn] svn:open-mpi r25966"</a>
<li><strong>Previous message:</strong> <a href="10526.php">Paul H. Hargrove: "[OMPI devel] Invalid format strings in ROMIO"</a>
<li><strong>In reply to:</strong> <a href="10526.php">Paul H. Hargrove: "[OMPI devel] Invalid format strings in ROMIO"</a>
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
