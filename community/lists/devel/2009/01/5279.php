<?
$subject_val = "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#512616: [openmpi] missing symbols?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 22 15:23:33 2009" -->
<!-- isoreceived="20090122202333" -->
<!-- sent="Thu, 22 Jan 2009 15:23:27 -0500" -->
<!-- isosent="20090122202327" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#512616: [openmpi] missing symbols?" -->
<!-- id="87851181-04FD-48FE-B3E8-3D512FA6BEE7_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="18808.21512.174340.128349_at_ron.nulle.part" -->
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
<strong>Date:</strong> 2009-01-22 15:23:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5280.php">Dirk Eddelbuettel: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#512616: [openmpi]	missing symbols?"</a>
<li><strong>Previous message:</strong> <a href="5278.php">Richard Graham: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>In reply to:</strong> <a href="5270.php">Dirk Eddelbuettel: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#512616: [openmpi] missing symbols?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5280.php">Dirk Eddelbuettel: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#512616: [openmpi]	missing symbols?"</a>
<li><strong>Reply:</strong> <a href="5280.php">Dirk Eddelbuettel: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#512616: [openmpi]	missing symbols?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
(note that Chrisophe is not subscribed to devel, so if he replies, we  
<br>
won't see it -- sorry; spammers force this kind of policy on us :-( )
<br>
<p><p>On Jan 22, 2009, at 6:10 AM, Dirk Eddelbuettel wrote:
<br>
<p><span class="quotelev1">&gt; This bug report just came in against the new Open MPI 1.3 release  
</span><br>
<span class="quotelev1">&gt; which we
</span><br>
<span class="quotelev1">&gt; built the same way as 1.2.*.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Christophe,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry about that.  And yes, it should be a drop-in replacement. You  
</span><br>
<span class="quotelev1">&gt; can
</span><br>
<span class="quotelev1">&gt; revert back to 1.2.8 from testing for now.  If you have a small
</span><br>
<span class="quotelev1">&gt; self-contained C++ example, it would help debugging.
</span><br>
<p>FWIW, &quot;drop in replacement&quot; in this context means recompile and  
<br>
relink.  We did not provide binary compatibility between the 1.2  
<br>
series and the 1.3 series.
<br>
<p>More below.
<br>
<p><span class="quotelev1">&gt; | I just upgraded to openmpi 1.3-1. The compilation of my codes went  
</span><br>
<span class="quotelev1">&gt; fine.
</span><br>
<span class="quotelev1">&gt; | The linking stage sometimes failed with
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; | undefined reference to `MPI::Win::Set_errhandler(MPI::Errhandler  
</span><br>
<span class="quotelev1">&gt; const&amp;)'
</span><br>
<span class="quotelev1">&gt; | undefined reference to `MPI::Comm::Set_errhandler(MPI::Errhandler  
</span><br>
<span class="quotelev1">&gt; const&amp;)'
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; | in some external libs (trilinos) using openmpi
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; | When linking is ok, runtime fails with for example
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; | symbol lookup error: /usr/lib/libHYPRE_FEI.so.2.0.0: undefined  
</span><br>
<span class="quotelev1">&gt; symbol:
</span><br>
<span class="quotelev1">&gt; | _ZN3MPI3Win14Set_errhandlerERKNS_10ErrhandlerE
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; | After playing with nm I got
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; | nm /usr/lib/openmpi/lib/libmpi_cxx.a
</span><br>
<span class="quotelev1">&gt; | 00000000 W _ZN3MPI6Status9Set_errorEi
</span><br>
<span class="quotelev1">&gt; | 00000000 W _ZNK3MPI3Win14Set_errhandlerERKNS_10ErrhandlerE
</span><br>
<span class="quotelev1">&gt; | 00000000 W _ZNK3MPI4Comm14Set_errhandlerERKNS_10ErrhandlerE
</span><br>
<span class="quotelev1">&gt; | 00000000 W _ZN3MPI6Status9Set_errorEi
</span><br>
<span class="quotelev1">&gt; | 00000000 W _ZNK3MPI3Win14Set_errhandlerERKNS_10ErrhandlerE
</span><br>
<span class="quotelev1">&gt; | 00000000 W _ZNK3MPI4Comm14Set_errhandlerERKNS_10ErrhandlerE
</span><br>
<span class="quotelev1">&gt; | 00000000 W _ZN3MPI6Status9Set_errorEi
</span><br>
<span class="quotelev1">&gt; | 00000000 W _ZNK3MPI3Win14Set_errhandlerERKNS_10ErrhandlerE
</span><br>
<span class="quotelev1">&gt; | 00000000 W _ZNK3MPI4Comm14Set_errhandlerERKNS_10ErrhandlerE
</span><br>
<span class="quotelev1">&gt; | 00000000 W _ZN3MPI6Status9Set_errorEi
</span><br>
<span class="quotelev1">&gt; | 00000000 W _ZNK3MPI3Win14Set_errhandlerERKNS_10ErrhandlerE
</span><br>
<span class="quotelev1">&gt; | 00000000 W _ZNK3MPI4Comm14Set_errhandlerERKNS_10ErrhandlerE
</span><br>
<span class="quotelev1">&gt; | 00000000 W _ZN3MPI6Status9Set_errorEi
</span><br>
<span class="quotelev1">&gt; | 00000000 W _ZNK3MPI3Win14Set_errhandlerERKNS_10ErrhandlerE
</span><br>
<span class="quotelev1">&gt; | 00000000 W _ZNK3MPI4Comm14Set_errhandlerERKNS_10ErrhandlerE
</span><br>
<span class="quotelev1">&gt; | 00000000 W _ZN3MPI6Status9Set_errorEi
</span><br>
<span class="quotelev1">&gt; | 00000000 W _ZNK3MPI3Win14Set_errhandlerERKNS_10ErrhandlerE
</span><br>
<span class="quotelev1">&gt; | 00000000 W _ZNK3MPI4Comm14Set_errhandlerERKNS_10ErrhandlerE
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; | which mean that the missing symbol is registered as a weak symbol.
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; | PS: I have -lmpi++ -lmpi at the linking stage and libmpi_cxx.* are  
</span><br>
<span class="quotelev1">&gt; present in
</span><br>
<span class="quotelev1">&gt; | /usr/lib/openmpi/lib
</span><br>
<p>I'm not sure what -lmpi++ is for -- that's not an OMPI library, at  
<br>
least not from the v1.2 or v1.3 series (I'd have to check versions  
<br>
before that; I don't remember offhand).
<br>
<p>Is there a reason you're not using the mpiCC wrapper compiler to  
<br>
compile/link MPI C++ codes?
<br>
<p>If you prefer to call the compiler directly, you might want to use  
<br>
&quot;mpiCC --showme:compile&quot; to get the compiler flags and &quot;mpiCC -- 
<br>
showme:link&quot; to get the linker flags.  I say this because OMPI  
<br>
reserves the right to change what compiler and linker flags are  
<br>
required from release to release.  Using the --showme:&lt;foo&gt; option  
<br>
gives you a forward-compatible way to keep compiling and linking if  
<br>
you choose not to use the OMPI wrapper compilers.
<br>
<p>Here's the help output from v1.3 showing all the --showme options:
<br>
<p>--------------------------------------------------------------------------
<br>
mpiCC [-showme[:&lt;command,compile,link,incdirs,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libdirs,libs,version&gt;]] args
<br>
<p>&nbsp;&nbsp;&nbsp;-showme:command    Show command used to invoke real compiler
<br>
&nbsp;&nbsp;&nbsp;-showme:compile    Show flags added when compiling
<br>
&nbsp;&nbsp;&nbsp;-showme:link       Show flags added when linking
<br>
&nbsp;&nbsp;&nbsp;-showme:incdirs    Show list of include dirs added when compiling
<br>
&nbsp;&nbsp;&nbsp;-showme:libdirs    Show list of library dirs added when linking
<br>
&nbsp;&nbsp;&nbsp;-showme:libs       Show list of libraries added when linking
<br>
&nbsp;&nbsp;&nbsp;-showme:version    Show version of Open MPI
<br>
--------------------------------------------------------------------------
<br>
<p>(both -showme and --showme work)
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
<li><strong>Next message:</strong> <a href="5280.php">Dirk Eddelbuettel: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#512616: [openmpi]	missing symbols?"</a>
<li><strong>Previous message:</strong> <a href="5278.php">Richard Graham: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>In reply to:</strong> <a href="5270.php">Dirk Eddelbuettel: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#512616: [openmpi] missing symbols?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5280.php">Dirk Eddelbuettel: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#512616: [openmpi]	missing symbols?"</a>
<li><strong>Reply:</strong> <a href="5280.php">Dirk Eddelbuettel: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#512616: [openmpi]	missing symbols?"</a>
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
