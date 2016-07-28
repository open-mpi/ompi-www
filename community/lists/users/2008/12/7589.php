<?
$subject_val = "Re: [OMPI users] Relocating an Open MPI installation using	OPAL_PREFIX";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 23 15:58:52 2008" -->
<!-- isoreceived="20081223205852" -->
<!-- sent="Tue, 23 Dec 2008 15:58:46 -0500" -->
<!-- isosent="20081223205846" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Relocating an Open MPI installation using	OPAL_PREFIX" -->
<!-- id="20081223205846.GL240_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1114C40F-CD8D-4787-9BF2-49CB133AE6A2_at_cisco.com" -->
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
<strong>Date:</strong> 2008-12-23 15:58:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7590.php">doriankrause: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<li><strong>Previous message:</strong> <a href="7588.php">Eugene Loh: "Re: [OMPI users] sending message to the source(0) from other	processors"</a>
<li><strong>In reply to:</strong> <a href="7586.php">Jeff Squyres: "Re: [OMPI users] Relocating an Open MPI installation using OPAL_PREFIX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7606.php">Jeff Squyres: "Re: [OMPI users] Relocating an Open MPI installation using	OPAL_PREFIX"</a>
<li><strong>Reply:</strong> <a href="7606.php">Jeff Squyres: "Re: [OMPI users] Relocating an Open MPI installation using	OPAL_PREFIX"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Dec/23/2008 02:33:07PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Yes, it works for me...  :-\
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With initial install dir of /home/jsquyres/bogus (in my $path and 
</span><br>
<span class="quotelev1">&gt; $LD_LIBRARY_PATH already):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [11:30] svbu-mpi:~/mpi % mpicc hello.c -o hello
</span><br>
<span class="quotelev1">&gt; [11:30] svbu-mpi:~/mpi % mpirun -np 2 hello
</span><br>
<span class="quotelev1">&gt; stdout: Hello, world!  I am 0 of 2 (svbu-mpi.cisco.com)
</span><br>
<span class="quotelev1">&gt; stdout: Hello, world!  I am 1 of 2 (svbu-mpi.cisco.com)
</span><br>
<span class="quotelev1">&gt; stderr: Hello, world!  I am 0 of 2 (svbu-mpi.cisco.com)
</span><br>
<span class="quotelev1">&gt; stderr: Hello, world!  I am 1 of 2 (svbu-mpi.cisco.com)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now let's move it
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [11:30] svbu-mpi:~/mpi % cd
</span><br>
<span class="quotelev1">&gt; [11:31] svbu-mpi:~ % cd /home/jsquyres/
</span><br>
<span class="quotelev1">&gt; [11:31] svbu-mpi:/home/jsquyres % mv bogus bogus-bogus
</span><br>
<span class="quotelev1">&gt; [11:31] svbu-mpi:/home/jsquyres % set path = 
</span><br>
<span class="quotelev1">&gt; (/home/jsquyres/bogus-bogus/bin $path)
</span><br>
<span class="quotelev1">&gt; [11:31] svbu-mpi:/home/jsquyres % setenv LD_LIBRARY_PATH 
</span><br>
<span class="quotelev1">&gt; /home/jsquyres/bogus-bogus/lib:$LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; [11:31] svbu-mpi:/home/jsquyres % cd
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Confirm that it's broken:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [11:31] svbu-mpi:~ % cd mpi
</span><br>
<span class="quotelev1">&gt; [11:31] svbu-mpi:~/mpi % !mpir
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 hello
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Sorry!  You were supposed to get help about:
</span><br>
<span class="quotelev1">&gt;     opal_init:startup:internal-failure
</span><br>
<span class="quotelev1">&gt; from the file:
</span><br>
<span class="quotelev1">&gt;     help-opal-runtime.txt
</span><br>
<span class="quotelev1">&gt; But I couldn't find any file matching that name.  Sorry!
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [svbu-mpi.cisco.com:23042] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in 
</span><br>
<span class="quotelev1">&gt; file runtime/orte_init.c at line 77
</span><br>
<span class="quotelev1">&gt; [svbu-mpi.cisco.com:23042] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in 
</span><br>
<span class="quotelev1">&gt; file orterun.c at line 493
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now try with OPAL_PREFIX:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [11:31] svbu-mpi:~/mpi % setenv OPAL_PREFIX /home/jsquyres/bogus-bogus
</span><br>
<span class="quotelev1">&gt; [11:31] svbu-mpi:~/mpi % mpirun -np 2 hello
</span><br>
<span class="quotelev1">&gt; stdout: Hello, world!  I am 0 of 2 (svbu-mpi.cisco.com)
</span><br>
<span class="quotelev1">&gt; stderr: Hello, world!  I am 0 of 2 (svbu-mpi.cisco.com)
</span><br>
<span class="quotelev1">&gt; stdout: Hello, world!  I am 1 of 2 (svbu-mpi.cisco.com)
</span><br>
<span class="quotelev1">&gt; stderr: Hello, world!  I am 1 of 2 (svbu-mpi.cisco.com)
</span><br>
<span class="quotelev1">&gt; [11:31] svbu-mpi:~/mpi %
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't know what you'd like from config.log -- I configured it with a 
</span><br>
<span class="quotelev1">&gt; simple:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       $ ./configure --prefix=/home/jsquyres/bogus
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I think the problem is that I am doing a multi-lib build. I have
<br>
32-bit libraries in lib/, and 64-bit libraries in lib/64. I assume I
<br>
do not see the issue for 32-bit tests, because all the dependencies
<br>
are where Open MPI expects them to be. For the 64-bit case, I tried
<br>
setting OPAL_LIBDIR to /opt/openmpi-relocated/lib/lib64, but no luck.
<br>
Given the below configure arguments, what do my OPAL_* env vars need
<br>
to be? (Also, could using --enable-orterun-prefix-by-default interfere
<br>
with OPAL_PREFIX?)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;$ ./configure CC=cc CXX=CC F77=f77 FC=f90  --with-openib --without-udapl --disable-openib-ibcm --enable-heterogeneous --enable-cxx-exceptions --enable-shared --enable-orterun-prefix-by-default --with-sge --enable-mpi-f90 --with-mpi-f90-size=small --disable-mpi-threads --disable-progress-threads   --disable-debug  CFLAGS=&quot;-m32 -xO5&quot; CXXFLAGS=&quot;-m32 -xO5&quot; FFLAGS=&quot;-m32 -xO5&quot;  FCFLAGS=&quot;-m32 -xO5&quot; --prefix=/workspace/em162155/hpc/mtt-scratch/burl-ct-v20z-12/ompi-tarball-testing/installs/DGQx/install --mandir=/workspace/em162155/hpc/mtt-scratch/burl-ct-v20z-12/ompi-tarball-testing/installs/DGQx/install/man --libdir=/workspace/em162155/hpc/mtt-scratch/burl-ct-v20z-12/ompi-tarball-testing/installs/DGQx/install/lib --includedir=/workspace/em162155/hpc/mtt-scratch/burl-ct-v20z-12/ompi-tarball-testing/installs/DGQx/install/include --without-mx --with-tm=/ws/ompi-tools/orte/torque/current/shared-install32 --with-contrib-vt-flags=&quot;--prefix=/workspace/em162155/hpc/mtt-scratch/burl-ct-v20z-12/ompi-tarball-testing/instal<br>
ls/DGQx/install --mandir=/workspace/em162155/hpc/mtt-scratch/burl-ct-v20z-12/ompi-tarball-testing/installs/DGQx/install/man --libdir=/workspace/em162155/hpc/mtt-scratch/burl-ct-v20z-12/ompi-tarball-testing/installs/DGQx/install/lib --includedir=/workspace/em162155/hpc/mtt-scratch/burl-ct-v20z-12/ompi-tarball-testing/installs/DGQx/install/include LDFLAGS=-R/workspace/em162155/hpc/mtt-scratch/burl-ct-v20z-12/ompi-tarball-testing/installs/DGQx/install/lib&quot; 
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;$ ./confgiure CC=cc CXX=CC F77=f77 FC=f90  --with-openib --without-udapl --disable-openib-ibcm --enable-heterogeneous --enable-cxx-exceptions --enable-shared --enable-orterun-prefix-by-default --with-sge --enable-mpi-f90 --with-mpi-f90-size=small --disable-mpi-threads --disable-progress-threads   --disable-debug  CFLAGS=&quot;-m64 -xO5&quot; CXXFLAGS=&quot;-m64 -xO5&quot; FFLAGS=&quot;-m64 -xO5&quot;  FCFLAGS=&quot;-m64 -xO5&quot; --prefix=/workspace/em162155/hpc/mtt-scratch/burl-ct-v20z-12/ompi-tarball-testing/installs/DGQx/install --mandir=/workspace/em162155/hpc/mtt-scratch/burl-ct-v20z-12/ompi-tarball-testing/installs/DGQx/install/man --libdir=/workspace/em162155/hpc/mtt-scratch/burl-ct-v20z-12/ompi-tarball-testing/installs/DGQx/install/lib/lib64 --includedir=/workspace/em162155/hpc/mtt-scratch/burl-ct-v20z-12/ompi-tarball-testing/installs/DGQx/install/include/64 --without-mx --with-tm=/ws/ompi-tools/orte/torque/current/shared-install64 --with-contrib-vt-flags=&quot;--prefix=/workspace/em162155/hpc/mtt-scratch/burl-ct-v20z-12/ompi-tarball-testi<br>
ng/installs/DGQx/install --mandir=/workspace/em162155/hpc/mtt-scratch/burl-ct-v20z-12/ompi-tarball-testing/installs/DGQx/install/man --libdir=/workspace/em162155/hpc/mtt-scratch/burl-ct-v20z-12/ompi-tarball-testing/installs/DGQx/install/lib/lib64 --includedir=/workspace/em162155/hpc/mtt-scratch/burl-ct-v20z-12/ompi-tarball-testing/installs/DGQx/install/include/64 LDFLAGS=-R/workspace/em162155/hpc/mtt-scratch/burl-ct-v20z-12/ompi-tarball-testing/installs/DGQx/install/lib&quot; --disable-binaries
<br>
<p>-Ethan
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 22, 2008, at 12:42 PM, Ethan Mallove wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can anyone get OPAL_PREFIX to work on Linux? A simple test is to see
</span><br>
<span class="quotelev2">&gt;&gt; if the following works for any mpicc/mpirun:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  $ mv &lt;openmpi-installation&gt; /tmp/foo
</span><br>
<span class="quotelev2">&gt;&gt;  $ set OPAL_PREFIX /tmp/foo
</span><br>
<span class="quotelev2">&gt;&gt;  $ mpicc ...
</span><br>
<span class="quotelev2">&gt;&gt;  $ mpirun ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you are able to get the above to run successfully, I'm interested
</span><br>
<span class="quotelev2">&gt;&gt; in your config.log file.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Ethan
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Dec/18/2008 11:03:25AM, Ethan Mallove wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The below FAQ lists instructions on how to use a relocated Open MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; installation:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  <a href="http://www.open-mpi.org/faq/?category=building#installdirs">http://www.open-mpi.org/faq/?category=building#installdirs</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Solaris, OPAL_PREFIX and friends (documented in the FAQ) work for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; me with both MPI (hello_c) and non-MPI (hostname) programs. On Linux,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I can only get the non-MPI case to work. Here are the environment
</span><br>
<span class="quotelev3">&gt;&gt;&gt; variables I am setting:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  $ cat setenv_opal_prefix.csh
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  set opal_prefix = &quot;/opt/openmpi-relocated&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  setenv OPAL_PREFIX         $opal_prefix
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  setenv OPAL_BINDIR         $opal_prefix/bin
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  setenv OPAL_SBINDIR        $opal_prefix/sbin
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  setenv OPAL_DATAROOTDIR    $opal_prefix/share
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  setenv OPAL_SYSCONFDIR     $opal_prefix/etc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  setenv OPAL_SHAREDSTATEDIR $opal_prefix/com
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  setenv OPAL_LOCALSTATEDIR  $opal_prefix/var
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  setenv OPAL_LIBDIR         $opal_prefix/lib
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  setenv OPAL_INCLUDEDIR     $opal_prefix/include
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  setenv OPAL_INFODIR        $opal_prefix/info
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  setenv OPAL_MANDIR         $opal_prefix/man
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  setenv PATH $opal_prefix/bin:$PATH
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  setenv LD_LIBRARY_PATH $opal_prefix/lib:$opal_prefix/lib/64
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here is the error I get:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  $ mpirun -np 2 hello_c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  It looks like opal_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Open MPI developer):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    opal_carto_base_select failed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    --&gt; Returned value -13 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  [burl-ct-v20z-0:27737] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file runtime/orte_init.c at line 77
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any ideas on what's going on?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ethan
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7590.php">doriankrause: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<li><strong>Previous message:</strong> <a href="7588.php">Eugene Loh: "Re: [OMPI users] sending message to the source(0) from other	processors"</a>
<li><strong>In reply to:</strong> <a href="7586.php">Jeff Squyres: "Re: [OMPI users] Relocating an Open MPI installation using OPAL_PREFIX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7606.php">Jeff Squyres: "Re: [OMPI users] Relocating an Open MPI installation using	OPAL_PREFIX"</a>
<li><strong>Reply:</strong> <a href="7606.php">Jeff Squyres: "Re: [OMPI users] Relocating an Open MPI installation using	OPAL_PREFIX"</a>
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
