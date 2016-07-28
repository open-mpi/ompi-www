<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 24 18:42:35 2007" -->
<!-- isoreceived="20070724224235" -->
<!-- sent="Wed, 25 Jul 2007 00:42:19 +0200" -->
<!-- isosent="20070724224219" -->
<!-- name="Adrian Knoth" -->
<!-- email="adi_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#433142: openmpi: FTBFS on GNU/kFreeBSD" -->
<!-- id="20070724224219.GA24192_at_drcomp.erfurt.thur.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="18073.14384.876294.571906_at_basebud.nulle.part" -->
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
<strong>From:</strong> Adrian Knoth (<em>adi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-24 18:42:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1991.php">Jeff Squyres: "[OMPI devel] [RFC] Sparse group implementation"</a>
<li><strong>Previous message:</strong> <a href="1989.php">Ralph Castain: "[OMPI devel] Hostfile - oh yes, again!"</a>
<li><strong>In reply to:</strong> <a href="1894.php">Dirk Eddelbuettel: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#433142: openmpi: FTBFS on GNU/kFreeBSD"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sat, Jul 14, 2007 at 03:55:12PM -0500, Dirk Eddelbuettel wrote:
<br>
<p><span class="quotelev1">&gt; | the current version fails to build on GNU/kFreeBSD.
</span><br>
<span class="quotelev1">&gt; | 
</span><br>
<span class="quotelev1">&gt; | It needs small fixups for munmap hackery and stacktrace.
</span><br>
<span class="quotelev1">&gt; | It also needs to exclude linux specific build-depends.
</span><br>
<span class="quotelev1">&gt; | Please find attached patch with that.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for that patch.
</span><br>
<p><span class="quotelev1">&gt; | It would be nice if you can ask upstream
</span><br>
<span class="quotelev1">&gt; | to include changes to opal/util/stacktrace.c and
</span><br>
<span class="quotelev1">&gt; | opal/mca/memory/ptmalloc2/opal_ptmalloc2_munmap.c .
</span><br>
<p>I've neither seen a ticket nor any discussion within the last days. Did
<br>
you get any response?
<br>
<p>AFAIK, kFreeBSD isn't a major target for OMPI, but if these patches
<br>
doesn't break anything, I don't mind to include them.
<br>
<p><p>I'll give them a run inside our virtual testing environment, but I'd
<br>
feel better with additional feedback from MTT.
<br>
<p><p>HTH
<br>
<p><p>PS: <a href="https://svn.open-mpi.org/trac/ompi/ticket/1105">https://svn.open-mpi.org/trac/ompi/ticket/1105</a>
<br>
<p><pre>
-- 
Cluster and Metacomputing Working Group
Friedrich-Schiller-Universit&#228;t Jena, Germany
private: <a href="http://adi.thur.de">http://adi.thur.de</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1991.php">Jeff Squyres: "[OMPI devel] [RFC] Sparse group implementation"</a>
<li><strong>Previous message:</strong> <a href="1989.php">Ralph Castain: "[OMPI devel] Hostfile - oh yes, again!"</a>
<li><strong>In reply to:</strong> <a href="1894.php">Dirk Eddelbuettel: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#433142: openmpi: FTBFS on GNU/kFreeBSD"</a>
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
