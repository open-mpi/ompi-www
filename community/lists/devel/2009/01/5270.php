<?
$subject_val = "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#512616: [openmpi] missing symbols?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 22 06:10:05 2009" -->
<!-- isoreceived="20090122111005" -->
<!-- sent="Thu, 22 Jan 2009 05:10:00 -0600" -->
<!-- isosent="20090122111000" -->
<!-- name="Dirk Eddelbuettel" -->
<!-- email="edd_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#512616: [openmpi] missing symbols?" -->
<!-- id="18808.21512.174340.128349_at_ron.nulle.part" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="200901221110.51472.prudhomm_at_debian.org" -->
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
<strong>From:</strong> Dirk Eddelbuettel (<em>edd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-22 06:10:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5271.php">David Robertson: "Re: [OMPI devel] Fortran 90 Interface"</a>
<li><strong>Previous message:</strong> <a href="5269.php">Matthias Jurenz: "Re: [OMPI devel] VT problems on Debian"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5279.php">Jeff Squyres: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#512616: [openmpi] missing symbols?"</a>
<li><strong>Reply:</strong> <a href="5279.php">Jeff Squyres: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#512616: [openmpi] missing symbols?"</a>
<li><strong>Maybe reply:</strong> <a href="5285.php">Jeff Squyres: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#512616: [openmpi] missing symbols?"</a>
<li><strong>Maybe reply:</strong> <a href="5289.php">Dirk Eddelbuettel: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#512616: [openmpi] missing symbols?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Open MPI developers,
<br>
<p>This bug report just came in against the new Open MPI 1.3 release which we
<br>
built the same way as 1.2.*.  
<br>
<p><p>Christophe,
<br>
<p>Sorry about that.  And yes, it should be a drop-in replacement. You can
<br>
revert back to 1.2.8 from testing for now.  If you have a small
<br>
self-contained C++ example, it would help debugging.
<br>
<p><p>Regards, Dirk
<br>
<p><p>On 22 January 2009 at 11:10, Christophe Prud'homme wrote:
<br>
| Package: openmpi
<br>
| Version: 1.3-1
<br>
| Severity: serious
<br>
| 
<br>
| --- Please enter the report below this line. ---
<br>
| 
<br>
| 
<br>
| Hello
<br>
| 
<br>
| I just upgraded to openmpi 1.3-1. The compilation of my codes went fine.
<br>
| The linking stage sometimes failed with
<br>
| 
<br>
| undefined reference to `MPI::Win::Set_errhandler(MPI::Errhandler const&amp;)'
<br>
| undefined reference to `MPI::Comm::Set_errhandler(MPI::Errhandler const&amp;)'
<br>
| 
<br>
| in some external libs (trilinos) using openmpi 
<br>
| 
<br>
| When linking is ok, runtime fails with for example
<br>
| 
<br>
| symbol lookup error: /usr/lib/libHYPRE_FEI.so.2.0.0: undefined symbol: 
<br>
| _ZN3MPI3Win14Set_errhandlerERKNS_10ErrhandlerE   
<br>
| 
<br>
| After playing with nm I got
<br>
| 
<br>
| nm /usr/lib/openmpi/lib/libmpi_cxx.a                                           
<br>
| 00000000 W _ZN3MPI6Status9Set_errorEi                                       
<br>
| 00000000 W _ZNK3MPI3Win14Set_errhandlerERKNS_10ErrhandlerE                  
<br>
| 00000000 W _ZNK3MPI4Comm14Set_errhandlerERKNS_10ErrhandlerE                 
<br>
| 00000000 W _ZN3MPI6Status9Set_errorEi                                       
<br>
| 00000000 W _ZNK3MPI3Win14Set_errhandlerERKNS_10ErrhandlerE                  
<br>
| 00000000 W _ZNK3MPI4Comm14Set_errhandlerERKNS_10ErrhandlerE                 
<br>
| 00000000 W _ZN3MPI6Status9Set_errorEi                                       
<br>
| 00000000 W _ZNK3MPI3Win14Set_errhandlerERKNS_10ErrhandlerE                  
<br>
| 00000000 W _ZNK3MPI4Comm14Set_errhandlerERKNS_10ErrhandlerE                 
<br>
| 00000000 W _ZN3MPI6Status9Set_errorEi                                       
<br>
| 00000000 W _ZNK3MPI3Win14Set_errhandlerERKNS_10ErrhandlerE
<br>
| 00000000 W _ZNK3MPI4Comm14Set_errhandlerERKNS_10ErrhandlerE
<br>
| 00000000 W _ZN3MPI6Status9Set_errorEi
<br>
| 00000000 W _ZNK3MPI3Win14Set_errhandlerERKNS_10ErrhandlerE
<br>
| 00000000 W _ZNK3MPI4Comm14Set_errhandlerERKNS_10ErrhandlerE
<br>
| 00000000 W _ZN3MPI6Status9Set_errorEi
<br>
| 00000000 W _ZNK3MPI3Win14Set_errhandlerERKNS_10ErrhandlerE
<br>
| 00000000 W _ZNK3MPI4Comm14Set_errhandlerERKNS_10ErrhandlerE
<br>
| 
<br>
| which mean that the missing symbol is registered as a weak symbol.
<br>
| 
<br>
| PS: I have -lmpi++ -lmpi at the linking stage and libmpi_cxx.* are present in 
<br>
| /usr/lib/openmpi/lib
<br>
| 
<br>
| Am I missing something with 1.3? shouldn't it be a drop in replacement ?
<br>
| 
<br>
| --- System information. ---
<br>
| Architecture: i386
<br>
| Kernel:       Linux 2.6.26-1-686-bigmem
<br>
| 
<br>
| Debian Release: 5.0
<br>
|   500 unstable        ftp.fr.debian.org 
<br>
|   500 testing         security.debian.org 
<br>
|   500 hardy           ppa.launchpad.net 
<br>
|   500 UNRELEASED      kde42.debian.net 
<br>
| 
<br>
| --- Package information. ---
<br>
| Depends       (Version) | Installed
<br>
| =======================-+-===========
<br>
|                         | 
<br>
| 
<br>
| 
<br>
| 
<br>
| -- 
<br>
| Debian Developer
<br>
| Annecy - Grenoble
<br>
| Scientific computing related software
<br>
| -- 
<br>
| Pkg-openmpi-maintainers mailing list
<br>
| Pkg-openmpi-maintainers_at_[hidden]
<br>
| <a href="http://lists.alioth.debian.org/mailman/listinfo/pkg-openmpi-maintainers">http://lists.alioth.debian.org/mailman/listinfo/pkg-openmpi-maintainers</a>
<br>
<p><pre>
-- 
Three out of two people have difficulties with fractions.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5271.php">David Robertson: "Re: [OMPI devel] Fortran 90 Interface"</a>
<li><strong>Previous message:</strong> <a href="5269.php">Matthias Jurenz: "Re: [OMPI devel] VT problems on Debian"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5279.php">Jeff Squyres: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#512616: [openmpi] missing symbols?"</a>
<li><strong>Reply:</strong> <a href="5279.php">Jeff Squyres: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#512616: [openmpi] missing symbols?"</a>
<li><strong>Maybe reply:</strong> <a href="5285.php">Jeff Squyres: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#512616: [openmpi] missing symbols?"</a>
<li><strong>Maybe reply:</strong> <a href="5289.php">Dirk Eddelbuettel: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#512616: [openmpi] missing symbols?"</a>
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
