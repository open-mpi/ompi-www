<?
$subject_val = "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#512616: [openmpi]	missing symbols?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 22 16:13:54 2009" -->
<!-- isoreceived="20090122211354" -->
<!-- sent="Thu, 22 Jan 2009 15:12:42 -0600" -->
<!-- isosent="20090122211242" -->
<!-- name="Dirk Eddelbuettel" -->
<!-- email="edd_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#512616: [openmpi]	missing symbols?" -->
<!-- id="18808.57674.900960.664635_at_ron.nulle.part" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="87851181-04FD-48FE-B3E8-3D512FA6BEE7_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#512616: [openmpi]	missing symbols?<br>
<strong>From:</strong> Dirk Eddelbuettel (<em>edd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-22 16:12:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5281.php">Manuel Prinz: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#512616:	[openmpi]	missing symbols?"</a>
<li><strong>Previous message:</strong> <a href="5279.php">Jeff Squyres: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#512616: [openmpi] missing symbols?"</a>
<li><strong>In reply to:</strong> <a href="5279.php">Jeff Squyres: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#512616: [openmpi] missing symbols?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5281.php">Manuel Prinz: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#512616:	[openmpi]	missing symbols?"</a>
<li><strong>Reply:</strong> <a href="5281.php">Manuel Prinz: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#512616:	[openmpi]	missing symbols?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 22 January 2009 at 15:23, Jeff Squyres wrote:
<br>
| (note that Chrisophe is not subscribed to devel, so if he replies, we  
<br>
| won't see it -- sorry; spammers force this kind of policy on us :-( )
<br>
<p>(Yes, I also own a few mailing lists for the R Project and use the same
<br>
policy. He is CC'ed though.)
<br>
<p>| On Jan 22, 2009, at 6:10 AM, Dirk Eddelbuettel wrote:
<br>
| 
<br>
| &gt; This bug report just came in against the new Open MPI 1.3 release  
<br>
| &gt; which we
<br>
| &gt; built the same way as 1.2.*.
<br>
| &gt;
<br>
| &gt; Christophe,
<br>
| &gt;
<br>
| &gt; Sorry about that.  And yes, it should be a drop-in replacement. You  
<br>
| &gt; can
<br>
| &gt; revert back to 1.2.8 from testing for now.  If you have a small
<br>
| &gt; self-contained C++ example, it would help debugging.
<br>
| 
<br>
| FWIW, &quot;drop in replacement&quot; in this context means recompile and  
<br>
| relink.  We did not provide binary compatibility between the 1.2  
<br>
| series and the 1.3 series.
<br>
<p>Ack. So we need to push that through all Open MPI-using apps in Debian.
<br>
&nbsp;
<br>
| More below.
<br>
| 
<br>
| &gt; | I just upgraded to openmpi 1.3-1. The compilation of my codes went  
<br>
| &gt; fine.
<br>
| &gt; | The linking stage sometimes failed with
<br>
| &gt; |
<br>
| &gt; | undefined reference to `MPI::Win::Set_errhandler(MPI::Errhandler  
<br>
| &gt; const&amp;)'
<br>
| &gt; | undefined reference to `MPI::Comm::Set_errhandler(MPI::Errhandler  
<br>
| &gt; const&amp;)'
<br>
| &gt; |
<br>
| &gt; | in some external libs (trilinos) using openmpi
<br>
| &gt; |
<br>
| &gt; | When linking is ok, runtime fails with for example
<br>
| &gt; |
<br>
| &gt; | symbol lookup error: /usr/lib/libHYPRE_FEI.so.2.0.0: undefined  
<br>
| &gt; symbol:
<br>
| &gt; | _ZN3MPI3Win14Set_errhandlerERKNS_10ErrhandlerE
<br>
| &gt; |
<br>
| &gt; | After playing with nm I got
<br>
| &gt; |
<br>
| &gt; | nm /usr/lib/openmpi/lib/libmpi_cxx.a
<br>
| &gt; | 00000000 W _ZN3MPI6Status9Set_errorEi
<br>
| &gt; | 00000000 W _ZNK3MPI3Win14Set_errhandlerERKNS_10ErrhandlerE
<br>
| &gt; | 00000000 W _ZNK3MPI4Comm14Set_errhandlerERKNS_10ErrhandlerE
<br>
| &gt; | 00000000 W _ZN3MPI6Status9Set_errorEi
<br>
| &gt; | 00000000 W _ZNK3MPI3Win14Set_errhandlerERKNS_10ErrhandlerE
<br>
| &gt; | 00000000 W _ZNK3MPI4Comm14Set_errhandlerERKNS_10ErrhandlerE
<br>
| &gt; | 00000000 W _ZN3MPI6Status9Set_errorEi
<br>
| &gt; | 00000000 W _ZNK3MPI3Win14Set_errhandlerERKNS_10ErrhandlerE
<br>
| &gt; | 00000000 W _ZNK3MPI4Comm14Set_errhandlerERKNS_10ErrhandlerE
<br>
| &gt; | 00000000 W _ZN3MPI6Status9Set_errorEi
<br>
| &gt; | 00000000 W _ZNK3MPI3Win14Set_errhandlerERKNS_10ErrhandlerE
<br>
| &gt; | 00000000 W _ZNK3MPI4Comm14Set_errhandlerERKNS_10ErrhandlerE
<br>
| &gt; | 00000000 W _ZN3MPI6Status9Set_errorEi
<br>
| &gt; | 00000000 W _ZNK3MPI3Win14Set_errhandlerERKNS_10ErrhandlerE
<br>
| &gt; | 00000000 W _ZNK3MPI4Comm14Set_errhandlerERKNS_10ErrhandlerE
<br>
| &gt; | 00000000 W _ZN3MPI6Status9Set_errorEi
<br>
| &gt; | 00000000 W _ZNK3MPI3Win14Set_errhandlerERKNS_10ErrhandlerE
<br>
| &gt; | 00000000 W _ZNK3MPI4Comm14Set_errhandlerERKNS_10ErrhandlerE
<br>
| &gt; |
<br>
| &gt; | which mean that the missing symbol is registered as a weak symbol.
<br>
| &gt; |
<br>
| &gt; | PS: I have -lmpi++ -lmpi at the linking stage and libmpi_cxx.* are  
<br>
| &gt; present in
<br>
| &gt; | /usr/lib/openmpi/lib
<br>
| 
<br>
| I'm not sure what -lmpi++ is for -- that's not an OMPI library, at  
<br>
| least not from the v1.2 or v1.3 series (I'd have to check versions  
<br>
| before that; I don't remember offhand).
<br>
<p>It's a Debianism. Similar to use providing several 'vi' or 'emacs'
<br>
implementation we also try (tried...) to align LAM, MPICH, OpenMPI,... 
<br>
<p>This means we still provide symlinks from orterun to mpirun etc pp and here: 
<br>
<p>edd_at_ron:~$ ls -l /usr/lib/libmpi++.so /etc/alternatives/libmpi++.so 
<br>
lrwxrwxrwx 1 root root 34 2009-01-21 10:53 /etc/alternatives/libmpi++.so -&gt; /usr/lib/openmpi/lib/libmpi_cxx.so
<br>
lrwxrwxrwx 1 root root 29 2008-01-20 19:42 /usr/lib/libmpi++.so -&gt; /etc/alternatives/libmpi++.so
<br>
edd_at_ron:~$ 
<br>
<p>| Is there a reason you're not using the mpiCC wrapper compiler to  
<br>
| compile/link MPI C++ codes?
<br>
| 
<br>
| If you prefer to call the compiler directly, you might want to use  
<br>
| &quot;mpiCC --showme:compile&quot; to get the compiler flags and &quot;mpiCC -- 
<br>
| showme:link&quot; to get the linker flags.  I say this because OMPI  
<br>
| reserves the right to change what compiler and linker flags are  
<br>
| required from release to release.  Using the --showme:&lt;foo&gt; option  
<br>
| gives you a forward-compatible way to keep compiling and linking if  
<br>
| you choose not to use the OMPI wrapper compilers.
<br>
| 
<br>
| Here's the help output from v1.3 showing all the --showme options:
<br>
| 
<br>
| --------------------------------------------------------------------------
<br>
| mpiCC [-showme[:&lt;command,compile,link,incdirs,
<br>
|                libdirs,libs,version&gt;]] args
<br>
| 
<br>
|    -showme:command    Show command used to invoke real compiler
<br>
|    -showme:compile    Show flags added when compiling
<br>
|    -showme:link       Show flags added when linking
<br>
|    -showme:incdirs    Show list of include dirs added when compiling
<br>
|    -showme:libdirs    Show list of library dirs added when linking
<br>
|    -showme:libs       Show list of libraries added when linking
<br>
|    -showme:version    Show version of Open MPI
<br>
| --------------------------------------------------------------------------
<br>
| 
<br>
| (both -showme and --showme work)
<br>
<p>Ack. That also worked for me.  What I find confusing is that 
<br>
<p>$ mpiCC -showme:link -o helloMPIworld helloMPIworld.cpp
<br>
-pthread -o helloMPIworld helloMPIworld.cpp -L/usr/lib/openmpi/lib -lmpi_cxx
<br>
-lmpi -lopen-rte -lopen-pal -ldl -Wl,--export-dynamic -lnsl -lutil -lm -ldl
<br>
<p>but I also got by manually with just
<br>
<p>$ g++ -o helloMPIworld helloMPIworld.cpp -I/usr/lib/openmpi/include -L/usr/lib/openmpi/lib -lmpi_cxx -lmpi
<br>
<p>i.e. way fewer libraries.   
<br>
<p>And for what it is worth,  Rmpi still segfaults on MPI_Init() for me :-/  
<br>
<p>But Christophe, could you try mpiCC ?
<br>
<p>Dirk
<br>
<p><p><pre>
-- 
Three out of two people have difficulties with fractions.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5281.php">Manuel Prinz: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#512616:	[openmpi]	missing symbols?"</a>
<li><strong>Previous message:</strong> <a href="5279.php">Jeff Squyres: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#512616: [openmpi] missing symbols?"</a>
<li><strong>In reply to:</strong> <a href="5279.php">Jeff Squyres: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#512616: [openmpi] missing symbols?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5281.php">Manuel Prinz: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#512616:	[openmpi]	missing symbols?"</a>
<li><strong>Reply:</strong> <a href="5281.php">Manuel Prinz: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#512616:	[openmpi]	missing symbols?"</a>
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
