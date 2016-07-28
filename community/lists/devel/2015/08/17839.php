<?
$subject_val = "Re: [OMPI devel] esslingen MTT?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 25 06:27:32 2015" -->
<!-- isoreceived="20150825102732" -->
<!-- sent="Tue, 25 Aug 2015 10:27:24 +0000" -->
<!-- isosent="20150825102724" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] esslingen MTT?" -->
<!-- id="99FBEE90-1137-48E3-B768-823256C9A317_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="55DC219F.3090109_at_rist.or.jp" -->
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
<strong>Subject:</strong> Re: [OMPI devel] esslingen MTT?<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-25 06:27:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17840.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mca_mtl_psm and java"</a>
<li><strong>Previous message:</strong> <a href="17838.php">Gilles Gouaillardet: "[OMPI devel] mca_mtl_psm and java"</a>
<li><strong>In reply to:</strong> <a href="17837.php">Gilles Gouaillardet: "Re: [OMPI devel] esslingen MTT?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
+1 -- thanks Adrian.
<br>
<p><span class="quotelev1">&gt; On Aug 25, 2015, at 4:04 AM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks Adrian,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i fixed this in PR #831 <a href="https://github.com/open-mpi/ompi/pull/831">https://github.com/open-mpi/ompi/pull/831</a> and push it shortly to master
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 8/25/2015 4:47 PM, Adrian Reber wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Aug 24, 2015 at 09:47:22PM +0000, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Who runs the esslingen MTT?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You're getting some build failures on master that I don't understand:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[3]: Entering directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; '/home/adrian/mtt-scratch/mpi-install/FDvh/src/openmpi-dev-2350-geb25c00/ompi/mpi/fortran/mpif-h/profile'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   GENERATE psizeof_f.f90
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   FC       psizeof_f.lo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Usage: /home/adrian/mtt-scratch/mpi-install/FDvh/src/openmpi-dev-2350-geb25c00/libtool [OPTION]...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [MODE-ARG]...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Try 'libtool --help' for more information.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Makefile:2609: recipe for target 'psizeof_f.lo' failed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can you do a &quot;make V=1&quot; so that I can see what exactly is going wrong?
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Entering directory '/home/adrian/ompi/build/ompi/mpi/fortran/mpif-h/profile'
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../../../../../libtool  --tag=FC   --mode=compile    -c -o psizeof_f.lo  psizeof_f.f90
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: unrecognized option `-c'
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: Try `libtool --help' for more information.
</span><br>
<span class="quotelev2">&gt;&gt; Makefile:2598: recipe for target 'psizeof_f.lo' failed
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: *** [psizeof_f.lo] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The system has no fortran compiler installed and after a
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  yum install gcc-gfortran.ppc64
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; it builds again. So it seems a fortran compiler is now required.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 		Adrian
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17836.php">http://www.open-mpi.org/community/lists/devel/2015/08/17836.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17837.php">http://www.open-mpi.org/community/lists/devel/2015/08/17837.php</a>
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
<li><strong>Next message:</strong> <a href="17840.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mca_mtl_psm and java"</a>
<li><strong>Previous message:</strong> <a href="17838.php">Gilles Gouaillardet: "[OMPI devel] mca_mtl_psm and java"</a>
<li><strong>In reply to:</strong> <a href="17837.php">Gilles Gouaillardet: "Re: [OMPI devel] esslingen MTT?"</a>
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
