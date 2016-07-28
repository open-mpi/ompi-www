<?
$subject_val = "Re: [OMPI users] Relocating an Open MPI installation using	OPAL_PREFIX";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  7 06:31:13 2009" -->
<!-- isoreceived="20090107113113" -->
<!-- sent="Wed, 7 Jan 2009 06:31:07 -0500" -->
<!-- isosent="20090107113107" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Relocating an Open MPI installation using	OPAL_PREFIX" -->
<!-- id="10B9741C-2C41-4A64-8592-9F66D069FC10_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20090106213611.GC245_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Relocating an Open MPI installation using	OPAL_PREFIX<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-07 06:31:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7657.php">Manuel Prinz: "Re: [OMPI users] [Pkg-openmpi-maintainers] Open MPI and	mpi-defaults"</a>
<li><strong>Previous message:</strong> <a href="7655.php">Jeff Squyres: "Re: [OMPI users] Open MPI and mpi-defaults"</a>
<li><strong>In reply to:</strong> <a href="7651.php">Ethan Mallove: "Re: [OMPI users] Relocating an Open MPI installation using	OPAL_PREFIX"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 6, 2009, at 4:36 PM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; Can the Open MPI configure setup handle ${exec_prefix} at the command
</span><br>
<span class="quotelev1">&gt; line? ${exec_prefix} seems to be getting eval'd to &quot;NONE&quot; in the
</span><br>
<span class="quotelev1">&gt; sub-configure's, and I get the following error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ...
</span><br>
<span class="quotelev1">&gt;  *** GNU libltdl setup
</span><br>
<span class="quotelev1">&gt;  configure: OMPI configuring in opal/libltdl
</span><br>
<span class="quotelev1">&gt;  configure: running /bin/bash './configure'  'CC=cc' 'CXX=CC'  
</span><br>
<span class="quotelev1">&gt; 'F77=f77' 'FC=f90' '--without-threads' '--enable-heterogeneous' '-- 
</span><br>
<span class="quotelev1">&gt; enable-cxx-exceptions' '--enable-shared' '--enable-orterun-prefix-by- 
</span><br>
<span class="quotelev1">&gt; default' '--with-sge' '--enable-mpi-f90' '--with-mpi-f90-size=small'  
</span><br>
<span class="quotelev1">&gt; '--disable-mpi-threads' '--disable-progress-threads' '--disable- 
</span><br>
<span class="quotelev1">&gt; debug' 'CFLAGS=-xtarget=ultra3 -m32 -xarch=sparcvis2 -xprefetch - 
</span><br>
<span class="quotelev1">&gt; xprefetch_level=2 -xvector=lib -xdepend=yes -xbuiltin=%all -xO5'  
</span><br>
<span class="quotelev1">&gt; 'CXXFLAGS=-xtarget=ultra3 -m32 -xarch=sparcvis2 -xprefetch - 
</span><br>
<span class="quotelev1">&gt; xprefetch_level=2 -xvector=lib -xdepend=yes -xbuiltin=%all -xO5'  
</span><br>
<span class="quotelev1">&gt; 'FFLAGS=-xtarget=ultra3 -m32 -xarch=sparcvis2 -xprefetch - 
</span><br>
<span class="quotelev1">&gt; xprefetch_level=2 -xvector=lib -stackvar -xO5' 'FCFLAGS=- 
</span><br>
<span class="quotelev1">&gt; xtarget=ultra3 -m32 -xarch=sparcvis2 -xprefetch -xprefetch_level=2 - 
</span><br>
<span class="quotelev1">&gt; xvector=lib -stackvar -xO5' '--prefix=/opt/SUNWhpc/HPC8.2/sun' '-- 
</span><br>
<span class="quotelev1">&gt; libdir=NONE/lib' '--includedir=/opt/SUNWhpc/HPC8.2/sun/include' '-- 
</span><br>
<span class="quotelev1">&gt; without-mx' '--with-tm=/ws/ompi-tools/orte/torque/current/shared- 
</span><br>
<span class="quotelev1">&gt; install32' '--with-co!
</span><br>
<span class="quotelev1">&gt; ntrib-vt-flags=--prefix=/opt/SUNWhpc/HPC8.2/sun --libdir='/lib' -- 
</span><br>
<span class="quotelev1">&gt; includedir='/include' LDFLAGS=-R/opt/SUNWhpc/HPC8.2/sun/lib' '--with- 
</span><br>
<span class="quotelev1">&gt; package-string=ClusterTools 8.2' '--with-ident-string=@(#)RELEASE  
</span><br>
<span class="quotelev1">&gt; VERSION 1.3r20204-ct8.2-b01b-r10' --enable-ltdl-convenience -- 
</span><br>
<span class="quotelev1">&gt; disable-ltdl-install --enable-shared --disable-static --cache-file=/ 
</span><br>
<span class="quotelev1">&gt; dev/null --srcdir=. configure: WARNING: Unrecognized options: -- 
</span><br>
<span class="quotelev1">&gt; without-threads, --enable-heterogeneous, --enable-cxx-exceptions, -- 
</span><br>
<span class="quotelev1">&gt; enable-orterun-prefix-by-default, --with-sge, --enable-mpi-f90, -- 
</span><br>
<span class="quotelev1">&gt; with-mpi-f90-size, --disable-mpi-threads, --disable-progress- 
</span><br>
<span class="quotelev1">&gt; threads, --disable-debug, --without-mx, --with-tm, --with-contrib-vt- 
</span><br>
<span class="quotelev1">&gt; flags, --with-package-string, --with-ident-string, --enable-ltdl- 
</span><br>
<span class="quotelev1">&gt; convenience
</span><br>
<span class="quotelev1">&gt;  configure: error: expected an absolute directory name for --libdir:  
</span><br>
<span class="quotelev1">&gt; NONE/lib
</span><br>
<span class="quotelev1">&gt;  configure: /bin/bash './configure' *failed* for opal/libltdl
</span><br>
<span class="quotelev1">&gt;  configure: error: Failed to build GNU libltdl.  This usually means  
</span><br>
<span class="quotelev1">&gt; that something
</span><br>
<span class="quotelev1">&gt;  is incorrectly setup with your environment.  There may be useful  
</span><br>
<span class="quotelev1">&gt; information in
</span><br>
<span class="quotelev1">&gt;  opal/libltdl/config.log.  You can also disable GNU libltdl (which  
</span><br>
<span class="quotelev1">&gt; will disable
</span><br>
<span class="quotelev1">&gt;  dynamic shared object loading) by configuring with --disable-dlopen.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It appears the sub-configure needs to escape some &quot;$&quot; chars.
</span><br>
<span class="quotelev1">&gt; (opal/libltdl is the portable dlopen() stuff, right? That is, it's not
</span><br>
<span class="quotelev1">&gt; an optional feature that we can temporarily turn off to work around
</span><br>
<span class="quotelev1">&gt; this issue.)
</span><br>
<p><p>That could well be true.  Have you tried it?
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
<li><strong>Next message:</strong> <a href="7657.php">Manuel Prinz: "Re: [OMPI users] [Pkg-openmpi-maintainers] Open MPI and	mpi-defaults"</a>
<li><strong>Previous message:</strong> <a href="7655.php">Jeff Squyres: "Re: [OMPI users] Open MPI and mpi-defaults"</a>
<li><strong>In reply to:</strong> <a href="7651.php">Ethan Mallove: "Re: [OMPI users] Relocating an Open MPI installation using	OPAL_PREFIX"</a>
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
