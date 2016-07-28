<?
$subject_val = "Re: [OMPI users] Relocating an Open MPI installation using	OPAL_PREFIX";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 25 08:13:10 2008" -->
<!-- isoreceived="20081225131310" -->
<!-- sent="Thu, 25 Dec 2008 08:12:49 -0500" -->
<!-- isosent="20081225131249" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Relocating an Open MPI installation using	OPAL_PREFIX" -->
<!-- id="1BED49D4-4A74-41A1-91DD-A99E2CBFD600_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20081223205846.GL240_at_sun.com" -->
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
<strong>Date:</strong> 2008-12-25 08:12:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7607.php">Teige,  Scott W: "Re: [OMPI users] BTL question"</a>
<li><strong>Previous message:</strong> <a href="7605.php">Jeff Squyres: "Re: [OMPI users] sending message to the source(0) from other processors"</a>
<li><strong>In reply to:</strong> <a href="7589.php">Ethan Mallove: "Re: [OMPI users] Relocating an Open MPI installation using	OPAL_PREFIX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/01/7634.php">Ethan Mallove: "Re: [OMPI users] Relocating an Open MPI installation using	OPAL_PREFIX"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/01/7634.php">Ethan Mallove: "Re: [OMPI users] Relocating an Open MPI installation using	OPAL_PREFIX"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It's quite possible that we don't handle this situation properly.   
<br>
Won't you need to libdir's (one for the 32 bit OMPI executables, and  
<br>
one for the 64 bit MPI apps)?
<br>
<p>On Dec 23, 2008, at 3:58 PM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; I think the problem is that I am doing a multi-lib build. I have
</span><br>
<span class="quotelev1">&gt; 32-bit libraries in lib/, and 64-bit libraries in lib/64. I assume I
</span><br>
<span class="quotelev1">&gt; do not see the issue for 32-bit tests, because all the dependencies
</span><br>
<span class="quotelev1">&gt; are where Open MPI expects them to be. For the 64-bit case, I tried
</span><br>
<span class="quotelev1">&gt; setting OPAL_LIBDIR to /opt/openmpi-relocated/lib/lib64, but no luck.
</span><br>
<span class="quotelev1">&gt; Given the below configure arguments, what do my OPAL_* env vars need
</span><br>
<span class="quotelev1">&gt; to be? (Also, could using --enable-orterun-prefix-by-default interfere
</span><br>
<span class="quotelev1">&gt; with OPAL_PREFIX?)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    $ ./configure CC=cc CXX=CC F77=f77 FC=f90  --with-openib -- 
</span><br>
<span class="quotelev1">&gt; without-udapl --disable-openib-ibcm --enable-heterogeneous --enable- 
</span><br>
<span class="quotelev1">&gt; cxx-exceptions --enable-shared --enable-orterun-prefix-by-default -- 
</span><br>
<span class="quotelev1">&gt; with-sge --enable-mpi-f90 --with-mpi-f90-size=small --disable-mpi- 
</span><br>
<span class="quotelev1">&gt; threads --disable-progress-threads   --disable-debug  CFLAGS=&quot;-m32 - 
</span><br>
<span class="quotelev1">&gt; xO5&quot; CXXFLAGS=&quot;-m32 -xO5&quot; FFLAGS=&quot;-m32 -xO5&quot;  FCFLAGS=&quot;-m32 -xO5&quot; -- 
</span><br>
<span class="quotelev1">&gt; prefix=/workspace/em162155/hpc/mtt-scratch/burl-ct-v20z-12/ompi- 
</span><br>
<span class="quotelev1">&gt; tarball-testing/installs/DGQx/install --mandir=/workspace/em162155/ 
</span><br>
<span class="quotelev1">&gt; hpc/mtt-scratch/burl-ct-v20z-12/ompi-tarball-testing/installs/DGQx/ 
</span><br>
<span class="quotelev1">&gt; install/man --libdir=/workspace/em162155/hpc/mtt-scratch/burl-ct- 
</span><br>
<span class="quotelev1">&gt; v20z-12/ompi-tarball-testing/installs/DGQx/install/lib --includedir=/ 
</span><br>
<span class="quotelev1">&gt; workspace/em162155/hpc/mtt-scratch/burl-ct-v20z-12/ompi-tarball- 
</span><br>
<span class="quotelev1">&gt; testing/installs/DGQx/install/include --without-mx --with-tm=/ws/ 
</span><br>
<span class="quotelev1">&gt; ompi-tools/orte/torque/current/shared-install32 --with-contrib-vt- 
</span><br>
<span class="quotelev1">&gt; flags=&quot;--prefix=/workspace/em162155/hpc/mtt-scratch/burl-ct-v!
</span><br>
<span class="quotelev1">&gt; 20z-12/ompi-tarball-testing/installs/DGQx/install --mandir=/ 
</span><br>
<span class="quotelev1">&gt; workspace/em162155/hpc/mtt-scratch/burl-ct-v20z-12/ompi-tarball- 
</span><br>
<span class="quotelev1">&gt; testing/installs/DGQx/install/man --libdir=/workspace/em162155/hpc/ 
</span><br>
<span class="quotelev1">&gt; mtt-scratch/burl-ct-v20z-12/ompi-tarball-testing/installs/DGQx/ 
</span><br>
<span class="quotelev1">&gt; install/lib --includedir=/workspace/em162155/hpc/mtt-scratch/burl-ct- 
</span><br>
<span class="quotelev1">&gt; v20z-12/ompi-tarball-testing/installs/DGQx/install/include LDFLAGS=- 
</span><br>
<span class="quotelev1">&gt; R/workspace/em162155/hpc/mtt-scratch/burl-ct-v20z-12/ompi-tarball- 
</span><br>
<span class="quotelev1">&gt; testing/installs/DGQx/install/lib&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    $ ./confgiure CC=cc CXX=CC F77=f77 FC=f90  --with-openib -- 
</span><br>
<span class="quotelev1">&gt; without-udapl --disable-openib-ibcm --enable-heterogeneous --enable- 
</span><br>
<span class="quotelev1">&gt; cxx-exceptions --enable-shared --enable-orterun-prefix-by-default -- 
</span><br>
<span class="quotelev1">&gt; with-sge --enable-mpi-f90 --with-mpi-f90-size=small --disable-mpi- 
</span><br>
<span class="quotelev1">&gt; threads --disable-progress-threads   --disable-debug  CFLAGS=&quot;-m64 - 
</span><br>
<span class="quotelev1">&gt; xO5&quot; CXXFLAGS=&quot;-m64 -xO5&quot; FFLAGS=&quot;-m64 -xO5&quot;  FCFLAGS=&quot;-m64 -xO5&quot; -- 
</span><br>
<span class="quotelev1">&gt; prefix=/workspace/em162155/hpc/mtt-scratch/burl-ct-v20z-12/ompi- 
</span><br>
<span class="quotelev1">&gt; tarball-testing/installs/DGQx/install --mandir=/workspace/em162155/ 
</span><br>
<span class="quotelev1">&gt; hpc/mtt-scratch/burl-ct-v20z-12/ompi-tarball-testing/installs/DGQx/ 
</span><br>
<span class="quotelev1">&gt; install/man --libdir=/workspace/em162155/hpc/mtt-scratch/burl-ct- 
</span><br>
<span class="quotelev1">&gt; v20z-12/ompi-tarball-testing/installs/DGQx/install/lib/lib64 -- 
</span><br>
<span class="quotelev1">&gt; includedir=/workspace/em162155/hpc/mtt-scratch/burl-ct-v20z-12/ompi- 
</span><br>
<span class="quotelev1">&gt; tarball-testing/installs/DGQx/install/include/64 --without-mx --with- 
</span><br>
<span class="quotelev1">&gt; tm=/ws/ompi-tools/orte/torque/current/shared-install64 --with- 
</span><br>
<span class="quotelev1">&gt; contrib-vt-flags=&quot;--prefix=/workspace/em162155/hpc/mtt-scratch/!
</span><br>
<span class="quotelev1">&gt; burl-ct-v20z-12/ompi-tarball-testing/installs/DGQx/install --mandir=/ 
</span><br>
<span class="quotelev1">&gt; workspace/em162155/hpc/mtt-scratch/burl-ct-v20z-12/ompi-tarball- 
</span><br>
<span class="quotelev1">&gt; testing/installs/DGQx/install/man --libdir=/workspace/em162155/hpc/ 
</span><br>
<span class="quotelev1">&gt; mtt-scratch/burl-ct-v20z-12/ompi-tarball-testing/installs/DGQx/ 
</span><br>
<span class="quotelev1">&gt; install/lib/lib64 --includedir=/workspace/em162155/hpc/mtt-scratch/ 
</span><br>
<span class="quotelev1">&gt; burl-ct-v20z-12/ompi-tarball-testing/installs/DGQx/install/include/ 
</span><br>
<span class="quotelev1">&gt; 64 LDFLAGS=-R/workspace/em162155/hpc/mtt-scratch/burl-ct-v20z-12/ 
</span><br>
<span class="quotelev1">&gt; ompi-tarball-testing/installs/DGQx/install/lib&quot; --disable-binaries
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 22, 2008, at 12:42 PM, Ethan Mallove wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can anyone get OPAL_PREFIX to work on Linux? A simple test is to see
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if the following works for any mpicc/mpirun:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ mv &lt;openmpi-installation&gt; /tmp/foo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ set OPAL_PREFIX /tmp/foo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ mpicc ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ mpirun ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If you are able to get the above to run successfully, I'm interested
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in your config.log file.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ethan
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Thu, Dec/18/2008 11:03:25AM, Ethan Mallove wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The below FAQ lists instructions on how to use a relocated Open MPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; installation:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=building#installdirs">http://www.open-mpi.org/faq/?category=building#installdirs</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Solaris, OPAL_PREFIX and friends (documented in the FAQ) work  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; me with both MPI (hello_c) and non-MPI (hostname) programs. On  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Linux,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I can only get the non-MPI case to work. Here are the environment
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; variables I am setting:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ cat setenv_opal_prefix.csh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; set opal_prefix = &quot;/opt/openmpi-relocated&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; setenv OPAL_PREFIX         $opal_prefix
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; setenv OPAL_BINDIR         $opal_prefix/bin
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; setenv OPAL_SBINDIR        $opal_prefix/sbin
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; setenv OPAL_DATAROOTDIR    $opal_prefix/share
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; setenv OPAL_SYSCONFDIR     $opal_prefix/etc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; setenv OPAL_SHAREDSTATEDIR $opal_prefix/com
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; setenv OPAL_LOCALSTATEDIR  $opal_prefix/var
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; setenv OPAL_LIBDIR         $opal_prefix/lib
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; setenv OPAL_INCLUDEDIR     $opal_prefix/include
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; setenv OPAL_INFODIR        $opal_prefix/info
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; setenv OPAL_MANDIR         $opal_prefix/man
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; setenv PATH $opal_prefix/bin:$PATH
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; setenv LD_LIBRARY_PATH $opal_prefix/lib:$opal_prefix/lib/64
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Here is the error I get:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ mpirun -np 2 hello_c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It looks like opal_init failed for some reason; your parallel  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; process is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; likely to abort.  There are many reasons that a parallel process  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; can
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; environment problems.  This failure appears to be an internal  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; failure;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; here's some additional information (which may only be relevant to  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; an
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   opal_carto_base_select failed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   --&gt; Returned value -13 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [burl-ct-v20z-0:27737] [[INVALID],INVALID] ORTE_ERROR_LOG: Not  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; found in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; file runtime/orte_init.c at line 77
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Any ideas on what's going on?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ethan
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7607.php">Teige,  Scott W: "Re: [OMPI users] BTL question"</a>
<li><strong>Previous message:</strong> <a href="7605.php">Jeff Squyres: "Re: [OMPI users] sending message to the source(0) from other processors"</a>
<li><strong>In reply to:</strong> <a href="7589.php">Ethan Mallove: "Re: [OMPI users] Relocating an Open MPI installation using	OPAL_PREFIX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/01/7634.php">Ethan Mallove: "Re: [OMPI users] Relocating an Open MPI installation using	OPAL_PREFIX"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/01/7634.php">Ethan Mallove: "Re: [OMPI users] Relocating an Open MPI installation using	OPAL_PREFIX"</a>
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
