<?
$subject_val = "Re: [OMPI devel] use-mpi mpiext?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 24 09:27:50 2016" -->
<!-- isoreceived="20160224142750" -->
<!-- sent="Wed, 24 Feb 2016 23:27:49 +0900" -->
<!-- isosent="20160224142749" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] use-mpi mpiext?" -->
<!-- id="CAAkFZ5tV=Ht+Aqhf-mu7d5OE5-DEsHw2aTRyNOeutvdyMiygRA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="3FB0014B-1F53-48A5-BE80-A80E02035BD6_at_icl.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] use-mpi mpiext?<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-24 09:27:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18616.php">Adrian Reber: "[OMPI devel] MTT setup updated to gcc-6.0 (pre)"</a>
<li><strong>Previous message:</strong> <a href="18614.php">Aur&#195;&#169;lien Bouteiller: "[OMPI devel] use-mpi mpiext?"</a>
<li><strong>In reply to:</strong> <a href="18614.php">Aur&#195;&#169;lien Bouteiller: "[OMPI devel] use-mpi mpiext?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Aurelien,
<br>
<p>I guess you should also have
<br>
<p>noinst_LTLIBRARIES += libmpiext_blabla_usempi.la
<br>
in your Makefile.am
<br>
<p>is your extension available somewhere in github so we can have a look ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Wednesday, February 24, 2016, Aur&#195;&#169;lien Bouteiller &lt;bouteill_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; I am making an MPI extension in latest master. I have a problem with the
</span><br>
<span class="quotelev1">&gt; use-mpi part of the extension:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Makefile.am contains the following
</span><br>
<span class="quotelev1">&gt;  13 headers = \
</span><br>
<span class="quotelev1">&gt;  14 &gt;...mpiext_blabla_usempi.h
</span><br>
<span class="quotelev1">&gt;  15
</span><br>
<span class="quotelev1">&gt;  16 noinst_HEADERS = \
</span><br>
<span class="quotelev1">&gt;  17         $(headers)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For some reason, the build system tries to compile a .a for the usempi
</span><br>
<span class="quotelev1">&gt; extension. My understanding is that it should use the same bindings as the
</span><br>
<span class="quotelev1">&gt; mpifh.a extension (which builds successfully).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/home/bouteill/ompi/debug.build/ompi/mpi/fortran/mpif-h'
</span><br>
<span class="quotelev1">&gt; Making install in mpi/fortran/use-mpi-ignore-tkr
</span><br>
<span class="quotelev1">&gt; make[1]: Entering directory
</span><br>
<span class="quotelev1">&gt; `/home/bouteill/ompi/debug.build/ompi/mpi/fortran/use-mpi-ignore-tkr'
</span><br>
<span class="quotelev1">&gt;   FCLD     libmpi_usempi_ignore_tkr.la
</span><br>
<span class="quotelev1">&gt; libtool: link: cannot find the library
</span><br>
<span class="quotelev1">&gt; `../../../../ompi/mpiext/blabla/use-mpi/libmpiext_blabla_usempi.la' or
</span><br>
<span class="quotelev1">&gt; unhandled argument `../../../../ompi/mpiext/blabla/use-mpi/
</span><br>
<span class="quotelev1">&gt; libmpiext_blabla_usempi.la'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [libmpi_usempi_ignore_tkr.la] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Aur&#195;&#169;lien Bouteiller, Ph.D. ~~ <a href="https://icl.cs.utk.edu/~bouteill/">https://icl.cs.utk.edu/~bouteill/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18615/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18616.php">Adrian Reber: "[OMPI devel] MTT setup updated to gcc-6.0 (pre)"</a>
<li><strong>Previous message:</strong> <a href="18614.php">Aur&#195;&#169;lien Bouteiller: "[OMPI devel] use-mpi mpiext?"</a>
<li><strong>In reply to:</strong> <a href="18614.php">Aur&#195;&#169;lien Bouteiller: "[OMPI devel] use-mpi mpiext?"</a>
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
