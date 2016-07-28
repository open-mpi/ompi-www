<?
$subject_val = "Re: [OMPI users] Relocating an Open MPI installation using	OPAL_PREFIX";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  6 16:36:17 2009" -->
<!-- isoreceived="20090106213617" -->
<!-- sent="Tue, 6 Jan 2009 16:36:12 -0500" -->
<!-- isosent="20090106213612" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Relocating an Open MPI installation using	OPAL_PREFIX" -->
<!-- id="20090106213611.GC245_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20090106153331.GB245_at_sun.com" -->
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
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-06 16:36:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7652.php">jody: "Re: [OMPI users] Open MPI and mpi-defaults"</a>
<li><strong>Previous message:</strong> <a href="7650.php">Adam C Powell IV: "Re: [OMPI users] Open MPI and mpi-defaults"</a>
<li><strong>In reply to:</strong> <a href="7648.php">Ethan Mallove: "Re: [OMPI users] Relocating an Open MPI installation using	OPAL_PREFIX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7656.php">Jeff Squyres: "Re: [OMPI users] Relocating an Open MPI installation using	OPAL_PREFIX"</a>
<li><strong>Reply:</strong> <a href="7656.php">Jeff Squyres: "Re: [OMPI users] Relocating an Open MPI installation using	OPAL_PREFIX"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Jan/06/2009 10:33:31AM, Ethan Mallove wrote:
<br>
<span class="quotelev1">&gt; On Mon, Jan/05/2009 10:14:30PM, Brian Barrett wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Sorry I haven't jumped in this thread earlier -- I've been a bit behind.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The multi-lib support worked at one time, and I can't think of why it would 
</span><br>
<span class="quotelev2">&gt; &gt; have changed.  The one condition is that libdir, includedir, etc. *MUST* be 
</span><br>
<span class="quotelev2">&gt; &gt; specified relative to $prefix for it to work.  It looks like you were 
</span><br>
<span class="quotelev2">&gt; &gt; defining them as absolute paths, so you'd have to set libdir directly, 
</span><br>
<span class="quotelev2">&gt; &gt; which will never work in multi-lib because mpirun and the app likely have 
</span><br>
<span class="quotelev2">&gt; &gt; different word sizes and therefore different libdirs.  
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I see. I'll try configuring with relative paths using ${prefix} and
</span><br>
<span class="quotelev1">&gt; the like.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; More information is on the multilib page in the wiki:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   <a href="https://svn.open-mpi.org/trac/ompi/wiki/MultiLib">https://svn.open-mpi.org/trac/ompi/wiki/MultiLib</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I removed this line from the MultiLib wiki page since Open MPI *is*
</span><br>
<span class="quotelev1">&gt; now relocatable using the OPAL_PREFIX env vars:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   &quot;Presently, Open MPI is not relocatable.  That is, Open MPI *must*
</span><br>
<span class="quotelev1">&gt;   be installed and executed from which ever prefix was specified
</span><br>
<span class="quotelev1">&gt;   during configure.  This is planned to change in the very near
</span><br>
<span class="quotelev1">&gt;   future.&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Ethan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; There is actually one condition we do not handle properly, the prefix flag 
</span><br>
<span class="quotelev2">&gt; &gt; to mpirun.  The LD_LIBRARY_PATH will only be set for the word size of 
</span><br>
<span class="quotelev2">&gt; &gt; mpirun, and not the executable.  Really, both would have to be added (so 
</span><br>
<span class="quotelev2">&gt; &gt; that both orted, which is likely always 32 bit in a multilib situation and 
</span><br>
<span class="quotelev2">&gt; &gt; the app both find their libraries).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Brian
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jan 5, 2009, at 6:02 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I honestly haven't thought through the ramifications of doing a multi-lib 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; build with OPAL_PREFIX et al. :-\
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; If you setenv OPAL_LIBDIR, it'll use whatever you set it to, so it doesn't 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; matter what you configured --libdir with.  Additionally 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mca/installdirs/config/install_dirs.h has this by default:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #define OPAL_LIBDIR &quot;${exec_prefix}/lib&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hence, if you use a default --libdir and setenv OPAL_PREFIX, then the 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; libdir should pick up the right thing (because it's based on the prefix).  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; But if you use --libdir that is *not* based on ${exec_prefix}, then you 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; might run into problems.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Perhaps you can '--libdir=&quot;${exec_prefix}/lib64&quot;' so that you can have 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; your custom libdir, but still have it dependent upon the prefix that gets 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; expanded at run time...?
</span><br>
<p><p>Can the Open MPI configure setup handle ${exec_prefix} at the command
<br>
line? ${exec_prefix} seems to be getting eval'd to &quot;NONE&quot; in the
<br>
sub-configure's, and I get the following error:
<br>
<p>&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;*** GNU libltdl setup
<br>
&nbsp;&nbsp;configure: OMPI configuring in opal/libltdl
<br>
&nbsp;&nbsp;configure: running /bin/bash './configure'  'CC=cc' 'CXX=CC' 'F77=f77' 'FC=f90' '--without-threads' '--enable-heterogeneous' '--enable-cxx-exceptions' '--enable-shared' '--enable-orterun-prefix-by-default' '--with-sge' '--enable-mpi-f90' '--with-mpi-f90-size=small' '--disable-mpi-threads' '--disable-progress-threads' '--disable-debug' 'CFLAGS=-xtarget=ultra3 -m32 -xarch=sparcvis2 -xprefetch -xprefetch_level=2 -xvector=lib -xdepend=yes -xbuiltin=%all -xO5' 'CXXFLAGS=-xtarget=ultra3 -m32 -xarch=sparcvis2 -xprefetch -xprefetch_level=2 -xvector=lib -xdepend=yes -xbuiltin=%all -xO5' 'FFLAGS=-xtarget=ultra3 -m32 -xarch=sparcvis2 -xprefetch -xprefetch_level=2 -xvector=lib -stackvar -xO5' 'FCFLAGS=-xtarget=ultra3 -m32 -xarch=sparcvis2 -xprefetch -xprefetch_level=2 -xvector=lib -stackvar -xO5' '--prefix=/opt/SUNWhpc/HPC8.2/sun' '--libdir=NONE/lib' '--includedir=/opt/SUNWhpc/HPC8.2/sun/include' '--without-mx' '--with-tm=/ws/ompi-tools/orte/torque/current/shared-install32' '--with-contrib-vt-flags=--prefix=/opt/SUNWh<br>
pc/HPC8.2/sun --libdir='/lib' --includedir='/include' LDFLAGS=-R/opt/SUNWhpc/HPC8.2/sun/lib' '--with-package-string=ClusterTools 8.2' '--with-ident-string=@(#)RELEASE VERSION 1.3r20204-ct8.2-b01b-r10' --enable-ltdl-convenience --disable-ltdl-install --enable-shared --disable-static --cache-file=/dev/null --srcdir=. configure: WARNING: Unrecognized options: --without-threads, --enable-heterogeneous, --enable-cxx-exceptions, --enable-orterun-prefix-by-default, --with-sge, --enable-mpi-f90, --with-mpi-f90-size, --disable-mpi-threads, --disable-progress-threads, --disable-debug, --without-mx, --with-tm, --with-contrib-vt-flags, --with-package-string, --with-ident-string, --enable-ltdl-convenience
<br>
&nbsp;&nbsp;configure: error: expected an absolute directory name for --libdir: NONE/lib
<br>
&nbsp;&nbsp;configure: /bin/bash './configure' *failed* for opal/libltdl
<br>
&nbsp;&nbsp;configure: error: Failed to build GNU libltdl.  This usually means that something
<br>
&nbsp;&nbsp;is incorrectly setup with your environment.  There may be useful information in
<br>
&nbsp;&nbsp;opal/libltdl/config.log.  You can also disable GNU libltdl (which will disable
<br>
&nbsp;&nbsp;dynamic shared object loading) by configuring with --disable-dlopen.
<br>
<p>It appears the sub-configure needs to escape some &quot;$&quot; chars.
<br>
(opal/libltdl is the portable dlopen() stuff, right? That is, it's not
<br>
an optional feature that we can temporarily turn off to work around
<br>
this issue.) 
<br>
<p>-Ethan
<br>
<p><span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (again, I'm not thinking all of this through -- just offering a few 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; suggestions off the top of my head that you'll need to test / trace the 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; code to be sure...)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Jan 5, 2009, at 1:35 PM, Ethan Mallove wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Thu, Dec/25/2008 08:12:49AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; It's quite possible that we don't handle this situation properly.  Won't
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; you need to libdir's (one for the 32 bit OMPI executables, and one for 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 64 bit MPI apps)?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I don't need an OPAL environment variable for the executables, just a
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; single OPAL_LIBDIR var for the libraries. (One set of 32-bit
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; executables runs with both 32-bit and 64-bit libraries.) I'm guessing
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; OPAL_LIBDIR will not work for you if you configure with a non-standard
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --libdir option.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; -Ethan
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; On Dec 23, 2008, at 3:58 PM, Ethan Mallove wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; I think the problem is that I am doing a multi-lib build. I have
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 32-bit libraries in lib/, and 64-bit libraries in lib/64. I assume I
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; do not see the issue for 32-bit tests, because all the dependencies
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; are where Open MPI expects them to be. For the 64-bit case, I tried
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; setting OPAL_LIBDIR to /opt/openmpi-relocated/lib/lib64, but no luck.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Given the below configure arguments, what do my OPAL_* env vars need
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; to be? (Also, could using --enable-orterun-prefix-by-default interfere
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; with OPAL_PREFIX?)
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;  $ ./configure CC=cc CXX=CC F77=f77 FC=f90  --with-openib
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; --without-udapl --disable-openib-ibcm --enable-heterogeneous
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; --enable-cxx-exceptions --enable-shared 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; --enable-orterun-prefix-by-default
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; --with-sge --enable-mpi-f90 --with-mpi-f90-size=small
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; --disable-mpi-threads --disable-progress-threads   --disable-debug
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; CFLAGS=&quot;-m32 -xO5&quot; CXXFLAGS=&quot;-m32 -xO5&quot; FFLAGS=&quot;-m32 -xO5&quot;  
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; FCFLAGS=&quot;-m32
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; -xO5&quot;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; --prefix=/workspace/em162155/hpc/mtt-scratch/burl-ct-v20z-12/ompi-tarball-testing/installs/DGQx/install
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; --mandir=/workspace/em162155/hpc/mtt-scratch/burl-ct-v20z-12/ompi-tarball-testing/installs/DGQx/install/man
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; --libdir=/workspace/em162155/hpc/mtt-scratch/burl-ct-v20z-12/ompi-tarball-testing/installs/DGQx/install/lib
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; --includedir=/workspace/em162155/hpc/mtt-scratch/burl-ct-v20z-12/ompi-tarball-testing/installs/DGQx/install/include
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; --without-mx 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; --with-tm=/ws/ompi-tools/orte/torque/current/shared-install32
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; --with-contrib-vt-flags=&quot;--prefix=/workspace/em162155/hpc/mtt-scratch/burl-ct-v!
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 20z-12/ompi-tarball-testing/installs/DGQx/install
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; --mandir=/workspace/em162155/hpc/mtt-scratch/burl-ct-v20z-12/ompi-tarball-testing/installs/DGQx/install/man
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; --libdir=/workspace/em162155/hpc/mtt-scratch/burl-ct-v20z-12/ompi-tarball-testing/installs/DGQx/install/lib
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; --includedir=/workspace/em162155/hpc/mtt-scratch/burl-ct-v20z-12/ompi-tarball-testing/installs/DGQx/install/include
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; LDFLAGS=-R/workspace/em162155/hpc/mtt-scratch/burl-ct-v20z-12/ompi-tarball-testing/installs/DGQx/install/lib&quot;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;  $ ./confgiure CC=cc CXX=CC F77=f77 FC=f90  --with-openib
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; --without-udapl --disable-openib-ibcm --enable-heterogeneous
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; --enable-cxx-exceptions --enable-shared 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; --enable-orterun-prefix-by-default
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; --with-sge --enable-mpi-f90 --with-mpi-f90-size=small
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; --disable-mpi-threads --disable-progress-threads   --disable-debug
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; CFLAGS=&quot;-m64 -xO5&quot; CXXFLAGS=&quot;-m64 -xO5&quot; FFLAGS=&quot;-m64 -xO5&quot;  
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; FCFLAGS=&quot;-m64
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; -xO5&quot;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; --prefix=/workspace/em162155/hpc/mtt-scratch/burl-ct-v20z-12/ompi-tarball-testing/installs/DGQx/install
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; --mandir=/workspace/em162155/hpc/mtt-scratch/burl-ct-v20z-12/ompi-tarball-testing/installs/DGQx/install/man
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; --libdir=/workspace/em162155/hpc/mtt-scratch/burl-ct-v20z-12/ompi-tarball-testing/installs/DGQx/install/lib/lib64
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; --includedir=/workspace/em162155/hpc/mtt-scratch/burl-ct-v20z-12/ompi-tarball-testing/installs/DGQx/install/include/64
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; --without-mx 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; --with-tm=/ws/ompi-tools/orte/torque/current/shared-install64
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; --with-contrib-vt-flags=&quot;--prefix=/workspace/em162155/hpc/mtt-scratch/!
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; burl-ct-v20z-12/ompi-tarball-testing/installs/DGQx/install
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; --mandir=/workspace/em162155/hpc/mtt-scratch/burl-ct-v20z-12/ompi-tarball-testing/installs/DGQx/install/man
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; --libdir=/workspace/em162155/hpc/mtt-scratch/burl-ct-v20z-12/ompi-tarball-testing/installs/DGQx/install/lib/lib64
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; --includedir=/workspace/em162155/hpc/mtt-scratch/burl-ct-v20z-12/ompi-tarball-testing/installs/DGQx/install/include/64
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; LDFLAGS=-R/workspace/em162155/hpc/mtt-scratch/burl-ct-v20z-12/ompi-tarball-testing/installs/DGQx/install/lib&quot;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; --disable-binaries
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; -Ethan
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; On Dec 22, 2008, at 12:42 PM, Ethan Mallove wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Can anyone get OPAL_PREFIX to work on Linux? A simple test is to see
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; if the following works for any mpicc/mpirun:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; $ mv &lt;openmpi-installation&gt; /tmp/foo
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; $ set OPAL_PREFIX /tmp/foo
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; $ mpicc ...
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; $ mpirun ...
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; If you are able to get the above to run successfully, I'm interested
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; in your config.log file.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Ethan
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; On Thu, Dec/18/2008 11:03:25AM, Ethan Mallove wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; The below FAQ lists instructions on how to use a relocated Open MPI
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; installation:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=building#installdirs">http://www.open-mpi.org/faq/?category=building#installdirs</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Solaris, OPAL_PREFIX and friends (documented in the FAQ) work for
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; me with both MPI (hello_c) and non-MPI (hostname) programs. On 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Linux,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I can only get the non-MPI case to work. Here are the environment
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; variables I am setting:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; $ cat setenv_opal_prefix.csh
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; set opal_prefix = &quot;/opt/openmpi-relocated&quot;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; setenv OPAL_PREFIX         $opal_prefix
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; setenv OPAL_BINDIR         $opal_prefix/bin
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; setenv OPAL_SBINDIR        $opal_prefix/sbin
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; setenv OPAL_DATAROOTDIR    $opal_prefix/share
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; setenv OPAL_SYSCONFDIR     $opal_prefix/etc
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; setenv OPAL_SHAREDSTATEDIR $opal_prefix/com
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; setenv OPAL_LOCALSTATEDIR  $opal_prefix/var
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; setenv OPAL_LIBDIR         $opal_prefix/lib
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; setenv OPAL_INCLUDEDIR     $opal_prefix/include
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; setenv OPAL_INFODIR        $opal_prefix/info
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; setenv OPAL_MANDIR         $opal_prefix/man
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; setenv PATH $opal_prefix/bin:$PATH
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; setenv LD_LIBRARY_PATH $opal_prefix/lib:$opal_prefix/lib/64
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Here is the error I get:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; $ mpirun -np 2 hello_c
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; It looks like opal_init failed for some reason; your parallel 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; process
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; is
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; environment problems.  This failure appears to be an internal 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; failure;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; opal_carto_base_select failed
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --&gt; Returned value -13 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [burl-ct-v20z-0:27737] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; in
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; file runtime/orte_init.c at line 77
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Any ideas on what's going on?
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Ethan
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Cisco Systems
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7652.php">jody: "Re: [OMPI users] Open MPI and mpi-defaults"</a>
<li><strong>Previous message:</strong> <a href="7650.php">Adam C Powell IV: "Re: [OMPI users] Open MPI and mpi-defaults"</a>
<li><strong>In reply to:</strong> <a href="7648.php">Ethan Mallove: "Re: [OMPI users] Relocating an Open MPI installation using	OPAL_PREFIX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7656.php">Jeff Squyres: "Re: [OMPI users] Relocating an Open MPI installation using	OPAL_PREFIX"</a>
<li><strong>Reply:</strong> <a href="7656.php">Jeff Squyres: "Re: [OMPI users] Relocating an Open MPI installation using	OPAL_PREFIX"</a>
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
