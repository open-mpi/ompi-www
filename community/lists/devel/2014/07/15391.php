<?
$subject_val = "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 31 07:27:02 2014" -->
<!-- isoreceived="20140731112702" -->
<!-- sent="Thu, 31 Jul 2014 04:27:00 -0700" -->
<!-- isosent="20140731112700" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error" -->
<!-- id="CAAvDA15NgncNafMrXdMLOP-b+MHHbxztqCuqS5o-Q+7rkDGL0g_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="53D9F931.5060008_at_iferc.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-31 07:27:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15392.php">Kenneth A. Lloyd: "Re: [OMPI devel] mca_PROJECT_FRAMEWORK_COMPONENT_symbol vs. mca_FRAMEWORK_COMPONENT_symbol"</a>
<li><strong>Previous message:</strong> <a href="15390.php">Gilles Gouaillardet: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>In reply to:</strong> <a href="15390.php">Gilles Gouaillardet: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15415.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>Reply:</strong> <a href="15415.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gilles,
<br>
<p><p>Just as you speculate, PGI is creating a _-suffixed reference to the module
<br>
name:
<br>
<p>$ pgf90 -c test.f90
<br>
$ nm -u test.o | grep f08
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;U mpi_f08_sizeof_
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;U mpi_f08_sizeof_mpi_sizeof_real_s_4_
<br>
<p><p><p>You suggested the following work-around in a previous email:
<br>
<p>$ INST/bin/mpifort  ../test.f
<br>
./BLD/ompi/mpi/fortran/use-mpi-f08/.libs/libforce_usempif08_internal_modules_to_be_built.a
<br>
<p>That works fine.  That doesn't surprise me, because I had already
<br>
identified that file as having been removed from libmpi_usempif08.so
<br>
between 1.8.1 and 1.8.2rc2.  It includes the symbol for the module names
<br>
plus trailing '_'.
<br>
<p>-Paul
<br>
<p><p>On Thu, Jul 31, 2014 at 1:07 AM, Gilles Gouaillardet &lt;
<br>
gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Paul,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; in .../ompi/mpi/fortran/use-mpi-f08, can you create the following dumb
</span><br>
<span class="quotelev1">&gt; test program,
</span><br>
<span class="quotelev1">&gt; compile and run nm | grep f08 on the object :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ cat foo.f90
</span><br>
<span class="quotelev1">&gt; program foo
</span><br>
<span class="quotelev1">&gt; use mpi_f08_sizeof
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; implicit none
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; real :: x
</span><br>
<span class="quotelev1">&gt; integer :: size, ierror
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; call MPI_Sizeof_real_s_4(x, size, ierror)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; stop
</span><br>
<span class="quotelev1">&gt; end program
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; with intel compiler :
</span><br>
<span class="quotelev1">&gt; $ ifort -c foo.f90
</span><br>
<span class="quotelev1">&gt; $ nm foo.o | grep f08
</span><br>
<span class="quotelev1">&gt;                  U mpi_f08_sizeof_mp_mpi_sizeof_real_s_4_
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i am wondering whether PGI compiler adds an additional undefined
</span><br>
<span class="quotelev1">&gt; reference to mpi_f08_sizeof_ ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15390.php">http://www.open-mpi.org/community/lists/devel/2014/07/15390.php</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15391/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15392.php">Kenneth A. Lloyd: "Re: [OMPI devel] mca_PROJECT_FRAMEWORK_COMPONENT_symbol vs. mca_FRAMEWORK_COMPONENT_symbol"</a>
<li><strong>Previous message:</strong> <a href="15390.php">Gilles Gouaillardet: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>In reply to:</strong> <a href="15390.php">Gilles Gouaillardet: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15415.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>Reply:</strong> <a href="15415.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
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
