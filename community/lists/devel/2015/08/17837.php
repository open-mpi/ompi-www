<?
$subject_val = "Re: [OMPI devel] esslingen MTT?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 25 04:04:54 2015" -->
<!-- isoreceived="20150825080454" -->
<!-- sent="Tue, 25 Aug 2015 17:04:47 +0900" -->
<!-- isosent="20150825080447" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] esslingen MTT?" -->
<!-- id="55DC219F.3090109_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="20150825074728.GG6407_at_lisas.de" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-25 04:04:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17838.php">Gilles Gouaillardet: "[OMPI devel] mca_mtl_psm and java"</a>
<li><strong>Previous message:</strong> <a href="17836.php">Adrian Reber: "Re: [OMPI devel] esslingen MTT?"</a>
<li><strong>In reply to:</strong> <a href="17836.php">Adrian Reber: "Re: [OMPI devel] esslingen MTT?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17839.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] esslingen MTT?"</a>
<li><strong>Reply:</strong> <a href="17839.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] esslingen MTT?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Adrian,
<br>
<p>i fixed this in PR #831 <a href="https://github.com/open-mpi/ompi/pull/831">https://github.com/open-mpi/ompi/pull/831</a> and 
<br>
push it shortly to master
<br>
<p>Best regards,
<br>
<p>Gilles
<br>
<p>On 8/25/2015 4:47 PM, Adrian Reber wrote:
<br>
<span class="quotelev1">&gt; On Mon, Aug 24, 2015 at 09:47:22PM +0000, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Who runs the esslingen MTT?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You're getting some build failures on master that I don't understand:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Entering directory
</span><br>
<span class="quotelev2">&gt;&gt; '/home/adrian/mtt-scratch/mpi-install/FDvh/src/openmpi-dev-2350-geb25c00/ompi/mpi/fortran/mpif-h/profile'
</span><br>
<span class="quotelev2">&gt;&gt;    GENERATE psizeof_f.f90
</span><br>
<span class="quotelev2">&gt;&gt;    FC       psizeof_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; Usage: /home/adrian/mtt-scratch/mpi-install/FDvh/src/openmpi-dev-2350-geb25c00/libtool [OPTION]...
</span><br>
<span class="quotelev2">&gt;&gt; [MODE-ARG]...
</span><br>
<span class="quotelev2">&gt;&gt; Try 'libtool --help' for more information.
</span><br>
<span class="quotelev2">&gt;&gt; Makefile:2609: recipe for target 'psizeof_f.lo' failed
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you do a &quot;make V=1&quot; so that I can see what exactly is going wrong?
</span><br>
<span class="quotelev1">&gt; make[3]: Entering directory '/home/adrian/ompi/build/ompi/mpi/fortran/mpif-h/profile'
</span><br>
<span class="quotelev1">&gt; /bin/sh ../../../../../libtool  --tag=FC   --mode=compile    -c -o psizeof_f.lo  psizeof_f.f90
</span><br>
<span class="quotelev1">&gt; libtool: compile: unrecognized option `-c'
</span><br>
<span class="quotelev1">&gt; libtool: compile: Try `libtool --help' for more information.
</span><br>
<span class="quotelev1">&gt; Makefile:2598: recipe for target 'psizeof_f.lo' failed
</span><br>
<span class="quotelev1">&gt; make[3]: *** [psizeof_f.lo] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The system has no fortran compiler installed and after a
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   yum install gcc-gfortran.ppc64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; it builds again. So it seems a fortran compiler is now required.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 		Adrian
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17836.php">http://www.open-mpi.org/community/lists/devel/2015/08/17836.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17838.php">Gilles Gouaillardet: "[OMPI devel] mca_mtl_psm and java"</a>
<li><strong>Previous message:</strong> <a href="17836.php">Adrian Reber: "Re: [OMPI devel] esslingen MTT?"</a>
<li><strong>In reply to:</strong> <a href="17836.php">Adrian Reber: "Re: [OMPI devel] esslingen MTT?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17839.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] esslingen MTT?"</a>
<li><strong>Reply:</strong> <a href="17839.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] esslingen MTT?"</a>
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
