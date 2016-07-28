<?
$subject_val = "[OMPI devel] use-mpi mpiext?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 24 08:43:54 2016" -->
<!-- isoreceived="20160224134354" -->
<!-- sent="Wed, 24 Feb 2016 08:43:54 -0500" -->
<!-- isosent="20160224134354" -->
<!-- name="Aur&#195;&#169;lien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="[OMPI devel] use-mpi mpiext?" -->
<!-- id="3FB0014B-1F53-48A5-BE80-A80E02035BD6_at_icl.utk.edu" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI devel] use-mpi mpiext?<br>
<strong>From:</strong> Aur&#195;&#169;lien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-24 08:43:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18615.php">Gilles Gouaillardet: "Re: [OMPI devel] use-mpi mpiext?"</a>
<li><strong>Previous message:</strong> <a href="18613.php">Gilles Gouaillardet: "Re: [OMPI devel] ORTED process group"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18615.php">Gilles Gouaillardet: "Re: [OMPI devel] use-mpi mpiext?"</a>
<li><strong>Reply:</strong> <a href="18615.php">Gilles Gouaillardet: "Re: [OMPI devel] use-mpi mpiext?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am making an MPI extension in latest master. I have a problem with the use-mpi part of the extension: 
<br>
<p>Makefile.am contains the following
<br>
&nbsp;13 headers = \
<br>
&nbsp;14 &gt;...mpiext_blabla_usempi.h
<br>
&nbsp;15 
<br>
&nbsp;16 noinst_HEADERS = \
<br>
&nbsp;17         $(headers)
<br>
<p>For some reason, the build system tries to compile a .a for the usempi extension. My understanding is that it should use the same bindings as the mpifh.a extension (which builds successfully). 
<br>
<p>make[1]: Leaving directory `/home/bouteill/ompi/debug.build/ompi/mpi/fortran/mpif-h'
<br>
Making install in mpi/fortran/use-mpi-ignore-tkr
<br>
make[1]: Entering directory `/home/bouteill/ompi/debug.build/ompi/mpi/fortran/use-mpi-ignore-tkr'
<br>
&nbsp;&nbsp;FCLD     libmpi_usempi_ignore_tkr.la
<br>
libtool: link: cannot find the library `../../../../ompi/mpiext/blabla/use-mpi/libmpiext_blabla_usempi.la' or unhandled argument `../../../../ompi/mpiext/blabla/use-mpi/libmpiext_blabla_usempi.la'
<br>
make[1]: *** [libmpi_usempi_ignore_tkr.la] Error 1
<br>
<p><p><pre>
--
Aur&#195;&#169;lien Bouteiller, Ph.D. ~~ <a href="https://icl.cs.utk.edu/~bouteill/">https://icl.cs.utk.edu/~bouteill/</a>

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18614/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18615.php">Gilles Gouaillardet: "Re: [OMPI devel] use-mpi mpiext?"</a>
<li><strong>Previous message:</strong> <a href="18613.php">Gilles Gouaillardet: "Re: [OMPI devel] ORTED process group"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18615.php">Gilles Gouaillardet: "Re: [OMPI devel] use-mpi mpiext?"</a>
<li><strong>Reply:</strong> <a href="18615.php">Gilles Gouaillardet: "Re: [OMPI devel] use-mpi mpiext?"</a>
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
