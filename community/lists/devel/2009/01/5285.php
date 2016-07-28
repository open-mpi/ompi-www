<?
$subject_val = "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#512616: [openmpi] missing symbols?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 23 06:39:33 2009" -->
<!-- isoreceived="20090123113933" -->
<!-- sent="Fri, 23 Jan 2009 06:39:26 -0500" -->
<!-- isosent="20090123113926" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#512616: [openmpi] missing symbols?" -->
<!-- id="57E3E343-FBC1-4837-A003-5A866E915685_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="aefba0690901230009t418c683fr1aca8843b2ddbd2b_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#512616: [openmpi] missing symbols?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-23 06:39:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5286.php">Jeff Squyres: "Re: [OMPI devel] Fortran 90 Interface"</a>
<li><strong>Previous message:</strong> <a href="5284.php">David Robertson: "Re: [OMPI devel] Fortran 90 Interface"</a>
<li><strong>Maybe in reply to:</strong> <a href="5270.php">Dirk Eddelbuettel: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#512616: [openmpi] missing symbols?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5289.php">Dirk Eddelbuettel: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#512616: [openmpi] missing symbols?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 23, 2009, at 3:09 AM, Christophe Prud'homme wrote:
<br>
<p><span class="quotelev2">&gt;&gt; FWIW, &quot;drop in replacement&quot; in this context means recompile and  
</span><br>
<span class="quotelev2">&gt;&gt; relink.  We
</span><br>
<span class="quotelev2">&gt;&gt; did not provide binary compatibility between the 1.2 series and the  
</span><br>
<span class="quotelev2">&gt;&gt; 1.3
</span><br>
<span class="quotelev2">&gt;&gt; series.
</span><br>
<span class="quotelev1">&gt; that would mean that all libs and programs in Debian depending on
</span><br>
<span class="quotelev1">&gt; openmpi must be recompiled and relinked
</span><br>
<span class="quotelev1">&gt; yes ?
</span><br>
<p>Correct.  Completely coincidentally and unrelated to this e-mail  
<br>
thread, Sun, Cisco, Sandia, and U. Tennessee have had a bunch of  
<br>
conversations over this past week about how to avoid this for future  
<br>
versions (i.e., be able to have forward binary compatibility if you  
<br>
compile against OMPI va.b, you can change your LD_LIBRARY_PATH and run  
<br>
with OMPI vc.d).  If all goes well, this will work for v1.4 and  
<br>
forward -- it will likely *not* be true for the v1.3.x series.
<br>
<p><span class="quotelev1">&gt; I have another package in debian using openmpi called paraview for
</span><br>
<span class="quotelev1">&gt; parallel scientific visualisation
</span><br>
<span class="quotelev1">&gt; paraview
</span><br>
<span class="quotelev1">&gt; paraview: symbol lookup error:
</span><br>
<span class="quotelev1">&gt; /usr/lib/paraview/libvtkParallel.so.pv3.4: undefined symbol:
</span><br>
<span class="quotelev1">&gt; _ZN3MPI3Win14Set_errhandlerERKNS_10ErrhandlerE
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the same link problem as with hypre
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; now after some investigation when I look in
</span><br>
<span class="quotelev1">&gt; openmpi/ompi/mpi/cxx/{win,comm}_inlin.h
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I find the _inline_ implementation of MPI::Win::Set_errhandler and
</span><br>
<span class="quotelev1">&gt; MPI::Comm::Set_errhandler
</span><br>
<span class="quotelev1">&gt; it seems that before openmpi 1.3 these functions where provided with
</span><br>
<span class="quotelev1">&gt; the library, i.e. they were not inlined
</span><br>
<span class="quotelev1">&gt; but shipped with the mpi_cxx lib.
</span><br>
<p>Correct.  IIRC, we made this change because we eliminated the use of  
<br>
the STL from our C++ bindings and it was therefore unnecessary to have  
<br>
these functions in the library anymore (the vast majority of the  
<br>
OMPI's C++ MPI API bindings are inlined).
<br>
<p><span class="quotelev1">&gt; It means that, indeed, we _must_ recompile/relink all libs and
</span><br>
<span class="quotelev1">&gt; programs in Debian depending on openmpi
</span><br>
<p>Sorry about that.  :-(
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5286.php">Jeff Squyres: "Re: [OMPI devel] Fortran 90 Interface"</a>
<li><strong>Previous message:</strong> <a href="5284.php">David Robertson: "Re: [OMPI devel] Fortran 90 Interface"</a>
<li><strong>Maybe in reply to:</strong> <a href="5270.php">Dirk Eddelbuettel: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#512616: [openmpi] missing symbols?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5289.php">Dirk Eddelbuettel: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#512616: [openmpi] missing symbols?"</a>
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
