<?
$subject_val = "Re: [OMPI users] Relocating an Open MPI installation using	OPAL_PREFIX";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  6 00:14:52 2009" -->
<!-- isoreceived="20090106051452" -->
<!-- sent="Mon, 5 Jan 2009 22:14:30 -0700" -->
<!-- isosent="20090106051430" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Relocating an Open MPI installation using	OPAL_PREFIX" -->
<!-- id="8EAE3DC0-6AE9-44C2-AE60-138A3DB41C9D_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="98599C3F-289C-46E0-87A8-56CA2D124F39_at_cisco.com" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-06 00:14:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7640.php">Terry Dontje: "Re: [OMPI users] using the carto facility"</a>
<li><strong>Previous message:</strong> <a href="7638.php">Jeff Squyres: "Re: [OMPI users] Relocating an Open MPI installation using	OPAL_PREFIX"</a>
<li><strong>In reply to:</strong> <a href="7638.php">Jeff Squyres: "Re: [OMPI users] Relocating an Open MPI installation using	OPAL_PREFIX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7648.php">Ethan Mallove: "Re: [OMPI users] Relocating an Open MPI installation using	OPAL_PREFIX"</a>
<li><strong>Reply:</strong> <a href="7648.php">Ethan Mallove: "Re: [OMPI users] Relocating an Open MPI installation using	OPAL_PREFIX"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry I haven't jumped in this thread earlier -- I've been a bit behind.
<br>
<p>The multi-lib support worked at one time, and I can't think of why it  
<br>
would have changed.  The one condition is that libdir, includedir,  
<br>
etc. *MUST* be specified relative to $prefix for it to work.  It looks  
<br>
like you were defining them as absolute paths, so you'd have to set  
<br>
libdir directly, which will never work in multi-lib because mpirun and  
<br>
the app likely have different word sizes and therefore different  
<br>
libdirs.  More information is on the multilib page in the wiki:
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/wiki/MultiLib">https://svn.open-mpi.org/trac/ompi/wiki/MultiLib</a>
<br>
<p>There is actually one condition we do not handle properly, the prefix  
<br>
flag to mpirun.  The LD_LIBRARY_PATH will only be set for the word  
<br>
size of mpirun, and not the executable.  Really, both would have to be  
<br>
added (so that both orted, which is likely always 32 bit in a multilib  
<br>
situation and the app both find their libraries).
<br>
<p><p>Brian
<br>
<p>On Jan 5, 2009, at 6:02 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; I honestly haven't thought through the ramifications of doing a  
</span><br>
<span class="quotelev1">&gt; multi-lib build with OPAL_PREFIX et al. :-\
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you setenv OPAL_LIBDIR, it'll use whatever you set it to, so it  
</span><br>
<span class="quotelev1">&gt; doesn't matter what you configured --libdir with.  Additionally mca/ 
</span><br>
<span class="quotelev1">&gt; installdirs/config/install_dirs.h has this by default:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #define OPAL_LIBDIR &quot;${exec_prefix}/lib&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hence, if you use a default --libdir and setenv OPAL_PREFIX, then  
</span><br>
<span class="quotelev1">&gt; the libdir should pick up the right thing (because it's based on the  
</span><br>
<span class="quotelev1">&gt; prefix).  But if you use --libdir that is *not* based on $ 
</span><br>
<span class="quotelev1">&gt; {exec_prefix}, then you might run into problems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Perhaps you can '--libdir=&quot;${exec_prefix}/lib64&quot;' so that you can  
</span><br>
<span class="quotelev1">&gt; have your custom libdir, but still have it dependent upon the prefix  
</span><br>
<span class="quotelev1">&gt; that gets expanded at run time...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (again, I'm not thinking all of this through -- just offering a few  
</span><br>
<span class="quotelev1">&gt; suggestions off the top of my head that you'll need to test / trace  
</span><br>
<span class="quotelev1">&gt; the code to be sure...)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 5, 2009, at 1:35 PM, Ethan Mallove wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Dec/25/2008 08:12:49AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It's quite possible that we don't handle this situation properly.   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Won't
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you need to libdir's (one for the 32 bit OMPI executables, and one  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 64 bit MPI apps)?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't need an OPAL environment variable for the executables, just a
</span><br>
<span class="quotelev2">&gt;&gt; single OPAL_LIBDIR var for the libraries. (One set of 32-bit
</span><br>
<span class="quotelev2">&gt;&gt; executables runs with both 32-bit and 64-bit libraries.) I'm guessing
</span><br>
<span class="quotelev2">&gt;&gt; OPAL_LIBDIR will not work for you if you configure with a non- 
</span><br>
<span class="quotelev2">&gt;&gt; standard
</span><br>
<span class="quotelev2">&gt;&gt; --libdir option.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Ethan
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Dec 23, 2008, at 3:58 PM, Ethan Mallove wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I think the problem is that I am doing a multi-lib build. I have
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 32-bit libraries in lib/, and 64-bit libraries in lib/64. I  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; assume I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; do not see the issue for 32-bit tests, because all the dependencies
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; are where Open MPI expects them to be. For the 64-bit case, I tried
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; setting OPAL_LIBDIR to /opt/openmpi-relocated/lib/lib64, but no  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; luck.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Given the below configure arguments, what do my OPAL_* env vars  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; need
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to be? (Also, could using --enable-orterun-prefix-by-default  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; interfere
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with OPAL_PREFIX?)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  $ ./configure CC=cc CXX=CC F77=f77 FC=f90  --with-openib
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --without-udapl --disable-openib-ibcm --enable-heterogeneous
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --enable-cxx-exceptions --enable-shared --enable-orterun-prefix- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; by-default
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --with-sge --enable-mpi-f90 --with-mpi-f90-size=small
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --disable-mpi-threads --disable-progress-threads   --disable-debug
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; CFLAGS=&quot;-m32 -xO5&quot; CXXFLAGS=&quot;-m32 -xO5&quot; FFLAGS=&quot;-m32 -xO5&quot;   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; FCFLAGS=&quot;-m32
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -xO5&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --prefix=/workspace/em162155/hpc/mtt-scratch/burl-ct-v20z-12/ompi- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tarball-testing/installs/DGQx/install
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --mandir=/workspace/em162155/hpc/mtt-scratch/burl-ct-v20z-12/ompi- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tarball-testing/installs/DGQx/install/man
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --libdir=/workspace/em162155/hpc/mtt-scratch/burl-ct-v20z-12/ompi- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tarball-testing/installs/DGQx/install/lib
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --includedir=/workspace/em162155/hpc/mtt-scratch/burl-ct-v20z-12/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ompi-tarball-testing/installs/DGQx/install/include
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --without-mx --with-tm=/ws/ompi-tools/orte/torque/current/shared- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; install32
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --with-contrib-vt-flags=&quot;--prefix=/workspace/em162155/hpc/mtt- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; scratch/burl-ct-v!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 20z-12/ompi-tarball-testing/installs/DGQx/install
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --mandir=/workspace/em162155/hpc/mtt-scratch/burl-ct-v20z-12/ompi- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tarball-testing/installs/DGQx/install/man
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --libdir=/workspace/em162155/hpc/mtt-scratch/burl-ct-v20z-12/ompi- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tarball-testing/installs/DGQx/install/lib
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --includedir=/workspace/em162155/hpc/mtt-scratch/burl-ct-v20z-12/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ompi-tarball-testing/installs/DGQx/install/include
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; LDFLAGS=-R/workspace/em162155/hpc/mtt-scratch/burl-ct-v20z-12/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ompi-tarball-testing/installs/DGQx/install/lib&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  $ ./confgiure CC=cc CXX=CC F77=f77 FC=f90  --with-openib
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --without-udapl --disable-openib-ibcm --enable-heterogeneous
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --enable-cxx-exceptions --enable-shared --enable-orterun-prefix- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; by-default
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --with-sge --enable-mpi-f90 --with-mpi-f90-size=small
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --disable-mpi-threads --disable-progress-threads   --disable-debug
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; CFLAGS=&quot;-m64 -xO5&quot; CXXFLAGS=&quot;-m64 -xO5&quot; FFLAGS=&quot;-m64 -xO5&quot;   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; FCFLAGS=&quot;-m64
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -xO5&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --prefix=/workspace/em162155/hpc/mtt-scratch/burl-ct-v20z-12/ompi- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tarball-testing/installs/DGQx/install
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --mandir=/workspace/em162155/hpc/mtt-scratch/burl-ct-v20z-12/ompi- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tarball-testing/installs/DGQx/install/man
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --libdir=/workspace/em162155/hpc/mtt-scratch/burl-ct-v20z-12/ompi- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tarball-testing/installs/DGQx/install/lib/lib64
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --includedir=/workspace/em162155/hpc/mtt-scratch/burl-ct-v20z-12/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ompi-tarball-testing/installs/DGQx/install/include/64
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --without-mx --with-tm=/ws/ompi-tools/orte/torque/current/shared- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; install64
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --with-contrib-vt-flags=&quot;--prefix=/workspace/em162155/hpc/mtt- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; scratch/!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; burl-ct-v20z-12/ompi-tarball-testing/installs/DGQx/install
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --mandir=/workspace/em162155/hpc/mtt-scratch/burl-ct-v20z-12/ompi- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tarball-testing/installs/DGQx/install/man
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --libdir=/workspace/em162155/hpc/mtt-scratch/burl-ct-v20z-12/ompi- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tarball-testing/installs/DGQx/install/lib/lib64
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --includedir=/workspace/em162155/hpc/mtt-scratch/burl-ct-v20z-12/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ompi-tarball-testing/installs/DGQx/install/include/64
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; LDFLAGS=-R/workspace/em162155/hpc/mtt-scratch/burl-ct-v20z-12/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ompi-tarball-testing/installs/DGQx/install/lib&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --disable-binaries
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -Ethan
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Dec 22, 2008, at 12:42 PM, Ethan Mallove wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Can anyone get OPAL_PREFIX to work on Linux? A simple test is  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; to see
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; if the following works for any mpicc/mpirun:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; $ mv &lt;openmpi-installation&gt; /tmp/foo
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; $ set OPAL_PREFIX /tmp/foo
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; $ mpicc ...
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; $ mpirun ...
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; If you are able to get the above to run successfully, I'm  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; interested
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; in your config.log file.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Ethan
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Thu, Dec/18/2008 11:03:25AM, Ethan Mallove wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; The below FAQ lists instructions on how to use a relocated  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Open MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; installation:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=building#installdirs">http://www.open-mpi.org/faq/?category=building#installdirs</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Solaris, OPAL_PREFIX and friends (documented in the FAQ)  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; work for
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; me with both MPI (hello_c) and non-MPI (hostname) programs. On  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Linux,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I can only get the non-MPI case to work. Here are the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; environment
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; variables I am setting:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; $ cat setenv_opal_prefix.csh
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; set opal_prefix = &quot;/opt/openmpi-relocated&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; setenv OPAL_PREFIX         $opal_prefix
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; setenv OPAL_BINDIR         $opal_prefix/bin
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; setenv OPAL_SBINDIR        $opal_prefix/sbin
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; setenv OPAL_DATAROOTDIR    $opal_prefix/share
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; setenv OPAL_SYSCONFDIR     $opal_prefix/etc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; setenv OPAL_SHAREDSTATEDIR $opal_prefix/com
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; setenv OPAL_LOCALSTATEDIR  $opal_prefix/var
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; setenv OPAL_LIBDIR         $opal_prefix/lib
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; setenv OPAL_INCLUDEDIR     $opal_prefix/include
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; setenv OPAL_INFODIR        $opal_prefix/info
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; setenv OPAL_MANDIR         $opal_prefix/man
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; setenv PATH $opal_prefix/bin:$PATH
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; setenv LD_LIBRARY_PATH $opal_prefix/lib:$opal_prefix/lib/64
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Here is the error I get:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; $ mpirun -np 2 hello_c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; It looks like opal_init failed for some reason; your parallel  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; process
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; likely to abort.  There are many reasons that a parallel  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; process can
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; environment problems.  This failure appears to be an internal  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; failure;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; here's some additional information (which may only be relevant  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; to an
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; opal_carto_base_select failed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; --&gt; Returned value -13 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [burl-ct-v20z-0:27737] [[INVALID],INVALID] ORTE_ERROR_LOG: Not  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; found in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; file runtime/orte_init.c at line 77
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Any ideas on what's going on?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Ethan
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7640.php">Terry Dontje: "Re: [OMPI users] using the carto facility"</a>
<li><strong>Previous message:</strong> <a href="7638.php">Jeff Squyres: "Re: [OMPI users] Relocating an Open MPI installation using	OPAL_PREFIX"</a>
<li><strong>In reply to:</strong> <a href="7638.php">Jeff Squyres: "Re: [OMPI users] Relocating an Open MPI installation using	OPAL_PREFIX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7648.php">Ethan Mallove: "Re: [OMPI users] Relocating an Open MPI installation using	OPAL_PREFIX"</a>
<li><strong>Reply:</strong> <a href="7648.php">Ethan Mallove: "Re: [OMPI users] Relocating an Open MPI installation using	OPAL_PREFIX"</a>
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
