<?
$subject_val = "Re: [OMPI devel] esslingen MTT?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 25 03:47:30 2015" -->
<!-- isoreceived="20150825074730" -->
<!-- sent="Tue, 25 Aug 2015 09:47:28 +0200" -->
<!-- isosent="20150825074728" -->
<!-- name="Adrian Reber" -->
<!-- email="adrian_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] esslingen MTT?" -->
<!-- id="20150825074728.GG6407_at_lisas.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="47362803-33E4-4B4D-A26F-54AC8C9CCA41_at_cisco.com" -->
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
<strong>From:</strong> Adrian Reber (<em>adrian_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-25 03:47:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17837.php">Gilles Gouaillardet: "Re: [OMPI devel] esslingen MTT?"</a>
<li><strong>Previous message:</strong> <a href="17835.php">Paul Hargrove: "Re: [OMPI devel] v1.10.0rc7"</a>
<li><strong>In reply to:</strong> <a href="17831.php">Jeff Squyres (jsquyres): "[OMPI devel] esslingen MTT?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17837.php">Gilles Gouaillardet: "Re: [OMPI devel] esslingen MTT?"</a>
<li><strong>Reply:</strong> <a href="17837.php">Gilles Gouaillardet: "Re: [OMPI devel] esslingen MTT?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Aug 24, 2015 at 09:47:22PM +0000, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; Who runs the esslingen MTT?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You're getting some build failures on master that I don't understand:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; make[3]: Entering directory
</span><br>
<span class="quotelev1">&gt; '/home/adrian/mtt-scratch/mpi-install/FDvh/src/openmpi-dev-2350-geb25c00/ompi/mpi/fortran/mpif-h/profile'
</span><br>
<span class="quotelev1">&gt;   GENERATE psizeof_f.f90
</span><br>
<span class="quotelev1">&gt;   FC       psizeof_f.lo
</span><br>
<span class="quotelev1">&gt; Usage: /home/adrian/mtt-scratch/mpi-install/FDvh/src/openmpi-dev-2350-geb25c00/libtool [OPTION]...
</span><br>
<span class="quotelev1">&gt; [MODE-ARG]...
</span><br>
<span class="quotelev1">&gt; Try 'libtool --help' for more information.
</span><br>
<span class="quotelev1">&gt; Makefile:2609: recipe for target 'psizeof_f.lo' failed
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you do a &quot;make V=1&quot; so that I can see what exactly is going wrong?
</span><br>
<p>make[3]: Entering directory '/home/adrian/ompi/build/ompi/mpi/fortran/mpif-h/profile'
<br>
/bin/sh ../../../../../libtool  --tag=FC   --mode=compile    -c -o psizeof_f.lo  psizeof_f.f90
<br>
libtool: compile: unrecognized option `-c'
<br>
libtool: compile: Try `libtool --help' for more information.
<br>
Makefile:2598: recipe for target 'psizeof_f.lo' failed
<br>
make[3]: *** [psizeof_f.lo] Error 1
<br>
<p>The system has no fortran compiler installed and after a
<br>
<p>&nbsp;yum install gcc-gfortran.ppc64
<br>
<p>it builds again. So it seems a fortran compiler is now required.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adrian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17837.php">Gilles Gouaillardet: "Re: [OMPI devel] esslingen MTT?"</a>
<li><strong>Previous message:</strong> <a href="17835.php">Paul Hargrove: "Re: [OMPI devel] v1.10.0rc7"</a>
<li><strong>In reply to:</strong> <a href="17831.php">Jeff Squyres (jsquyres): "[OMPI devel] esslingen MTT?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17837.php">Gilles Gouaillardet: "Re: [OMPI devel] esslingen MTT?"</a>
<li><strong>Reply:</strong> <a href="17837.php">Gilles Gouaillardet: "Re: [OMPI devel] esslingen MTT?"</a>
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
