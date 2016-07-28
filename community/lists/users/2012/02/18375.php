<?
$subject_val = "Re: [OMPI users] Error building Openmpi (configure: error: C compiler cannot create executables)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  2 07:55:53 2012" -->
<!-- isoreceived="20120202125553" -->
<!-- sent="Thu, 2 Feb 2012 07:55:47 -0500" -->
<!-- isosent="20120202125547" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error building Openmpi (configure: error: C compiler cannot create executables)" -->
<!-- id="FC6D5B17-3222-414D-A993-D685429ED472_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMvdAsLTM=wCDwJ6_Mjn6i1Jwd40k=uFNPotd6M9VqPnNZn=cQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error building Openmpi (configure: error: C compiler cannot create executables)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-02 07:55:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18376.php">Jeff Squyres: "Re: [OMPI users] OpenMPI / SLURM -&gt; Send/Recv blocking"</a>
<li><strong>Previous message:</strong> <a href="18374.php">Syed Ahsan Ali: "[OMPI users] Error building Openmpi (configure: error: C compiler cannot create executables)"</a>
<li><strong>In reply to:</strong> <a href="18374.php">Syed Ahsan Ali: "[OMPI users] Error building Openmpi (configure: error: C compiler cannot create executables)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Both icc and gcc seem to be broken on your system; they're not creating executables.
<br>
<p>You can look in config.log for more details about what is failing.  But basically, configure is trying to compile a simple &quot;hello world&quot;-like C program, and it's failing.
<br>
<p>You might want to try trying to compile a simple &quot;hello world&quot;-like C program yourself and see what error messages are coming out of the compiler.
<br>
<p><p><p>On Feb 2, 2012, at 5:19 AM, Syed Ahsan Ali wrote:
<br>
<p><span class="quotelev1">&gt; Dear All,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have been stuck in installation of openmpi1.4.2 on RHEL5.2 with ifort and icc.I get following error while configuring, Please help.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [precis_at_precis2 openmpi-1.4.2]$ ./build.sh 
</span><br>
<span class="quotelev1">&gt; checking for a BSD-compatible install... /usr/bin/install -c
</span><br>
<span class="quotelev1">&gt; checking whether build environment is sane... yes
</span><br>
<span class="quotelev1">&gt; checking for a thread-safe mkdir -p... /bin/mkdir -p
</span><br>
<span class="quotelev1">&gt; checking for gawk... gawk
</span><br>
<span class="quotelev1">&gt; checking whether make sets $(MAKE)... yes
</span><br>
<span class="quotelev1">&gt; checking how to create a ustar tar archive... gnutar
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ============================================================================
</span><br>
<span class="quotelev1">&gt; == Configuring Open MPI
</span><br>
<span class="quotelev1">&gt; ============================================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *** Checking versions
</span><br>
<span class="quotelev1">&gt; checking Open MPI version... 1.4.2
</span><br>
<span class="quotelev1">&gt; checking Open MPI release date... May 04, 2010
</span><br>
<span class="quotelev1">&gt; checking Open MPI Subversion repository version... r23093
</span><br>
<span class="quotelev1">&gt; checking Open Run-Time Environment version... 1.4.2
</span><br>
<span class="quotelev1">&gt; checking Open Run-Time Environment release date... May 04, 2010
</span><br>
<span class="quotelev1">&gt; checking Open Run-Time Environment Subversion repository version... r23093
</span><br>
<span class="quotelev1">&gt; checking Open Portable Access Layer version... 1.4.2
</span><br>
<span class="quotelev1">&gt; checking Open Portable Access Layer release date... May 04, 2010
</span><br>
<span class="quotelev1">&gt; checking Open Portable Access Layer Subversion repository version... r23093
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *** Initialization, setup
</span><br>
<span class="quotelev1">&gt; configure: builddir: /home/precis/opemmpi/openmpi-1.4.2
</span><br>
<span class="quotelev1">&gt; configure: srcdir: /home/precis/opemmpi/openmpi-1.4.2
</span><br>
<span class="quotelev1">&gt; checking build system type... i686-pc-linux-gnu
</span><br>
<span class="quotelev1">&gt; checking host system type... i686-pc-linux-gnu
</span><br>
<span class="quotelev1">&gt; installing to directory &quot;/home/openmpi&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *** Configuration options
</span><br>
<span class="quotelev1">&gt; checking whether to run code coverage... no
</span><br>
<span class="quotelev1">&gt; checking whether to compile with branch probabilities... no
</span><br>
<span class="quotelev1">&gt; checking whether to debug memory usage... no
</span><br>
<span class="quotelev1">&gt; checking whether to profile memory usage... no
</span><br>
<span class="quotelev1">&gt; checking if want developer-level compiler pickyness... no
</span><br>
<span class="quotelev1">&gt; checking if want developer-level debugging code... no
</span><br>
<span class="quotelev1">&gt; checking if want sparse process groups... no
</span><br>
<span class="quotelev1">&gt; checking if want Fortran 77 bindings... yes
</span><br>
<span class="quotelev1">&gt; checking if want Fortran 90 bindings... yes
</span><br>
<span class="quotelev1">&gt; checking desired Fortran 90 bindings &quot;size&quot;... small
</span><br>
<span class="quotelev1">&gt; checking whether to enable PMPI... yes
</span><br>
<span class="quotelev1">&gt; checking if want C++ bindings... yes
</span><br>
<span class="quotelev1">&gt; checking if want MPI::SEEK_SET support... yes
</span><br>
<span class="quotelev1">&gt; checking if want to enable weak symbol support... yes
</span><br>
<span class="quotelev1">&gt; checking if want run-time MPI parameter checking... runtime
</span><br>
<span class="quotelev1">&gt; checking if want to install OMPI header files... no
</span><br>
<span class="quotelev1">&gt; checking if want pretty-print stacktrace... yes
</span><br>
<span class="quotelev1">&gt; checking if peruse support is required... no
</span><br>
<span class="quotelev1">&gt; checking max supported array dimension in F90 MPI bindings... 4
</span><br>
<span class="quotelev1">&gt; checking if pty support should be enabled... yes
</span><br>
<span class="quotelev1">&gt; checking if user wants dlopen support... yes
</span><br>
<span class="quotelev1">&gt; checking if heterogeneous support should be enabled... no
</span><br>
<span class="quotelev1">&gt; checking if want trace file debugging... no
</span><br>
<span class="quotelev1">&gt; checking if want full RTE support... yes
</span><br>
<span class="quotelev1">&gt; checking if want fault tolerance... Disabled fault tolerance
</span><br>
<span class="quotelev1">&gt; checking if want IPv6 support... yes (if underlying system supports it)
</span><br>
<span class="quotelev1">&gt; checking if want orterun &quot;--prefix&quot; behavior to be enabled by default... no
</span><br>
<span class="quotelev1">&gt; checking for package/brand string... Open MPI precis_at_[hidden] Distribution
</span><br>
<span class="quotelev1">&gt; checking for ident string... 1.4.2
</span><br>
<span class="quotelev1">&gt; checking whether to add padding to the openib control header... no
</span><br>
<span class="quotelev1">&gt; checking whether to use an alternative checksum algo for messages... no
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ============================================================================
</span><br>
<span class="quotelev1">&gt; == Compiler and preprocessor tests
</span><br>
<span class="quotelev1">&gt; ============================================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *** C compiler and preprocessor
</span><br>
<span class="quotelev1">&gt; checking for style of include used by make... GNU
</span><br>
<span class="quotelev1">&gt; checking for gcc... icc
</span><br>
<span class="quotelev1">&gt; checking for C compiler default output file name... 
</span><br>
<span class="quotelev1">&gt; configure: error: in `/home/precis/opemmpi/openmpi-1.4.2':
</span><br>
<span class="quotelev1">&gt; configure: error: C compiler cannot create executables
</span><br>
<span class="quotelev1">&gt; See `config.log' for more details.
</span><br>
<span class="quotelev1">&gt; make: *** No targets specified and no makefile found.  Stop.
</span><br>
<span class="quotelev1">&gt; make: *** No rule to make target `install'.  Stop.
</span><br>
<span class="quotelev1">&gt; [precis_at_precis2 openmpi-1.4.2]$ clean all
</span><br>
<span class="quotelev1">&gt; bash: clean: command not found
</span><br>
<span class="quotelev1">&gt; [precis_at_precis2 openmpi-1.4.2]$ make clean
</span><br>
<span class="quotelev1">&gt; make: *** No rule to make target `clean'.  Stop.
</span><br>
<span class="quotelev1">&gt; [precis_at_precis2 openmpi-1.4.2]$ make
</span><br>
<span class="quotelev1">&gt; make: *** No targets specified and no makefile found.  Stop.
</span><br>
<span class="quotelev1">&gt; [precis_at_precis2 openmpi-1.4.2]$ ./configure 
</span><br>
<span class="quotelev1">&gt; checking for a BSD-compatible install... /usr/bin/install -c
</span><br>
<span class="quotelev1">&gt; checking whether build environment is sane... yes
</span><br>
<span class="quotelev1">&gt; checking for a thread-safe mkdir -p... /bin/mkdir -p
</span><br>
<span class="quotelev1">&gt; checking for gawk... gawk
</span><br>
<span class="quotelev1">&gt; checking whether make sets $(MAKE)... yes
</span><br>
<span class="quotelev1">&gt; checking how to create a ustar tar archive... gnutar
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ============================================================================
</span><br>
<span class="quotelev1">&gt; == Configuring Open MPI
</span><br>
<span class="quotelev1">&gt; ============================================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *** Checking versions
</span><br>
<span class="quotelev1">&gt; checking Open MPI version... 1.4.2
</span><br>
<span class="quotelev1">&gt; checking Open MPI release date... May 04, 2010
</span><br>
<span class="quotelev1">&gt; checking Open MPI Subversion repository version... r23093
</span><br>
<span class="quotelev1">&gt; checking Open Run-Time Environment version... 1.4.2
</span><br>
<span class="quotelev1">&gt; checking Open Run-Time Environment release date... May 04, 2010
</span><br>
<span class="quotelev1">&gt; checking Open Run-Time Environment Subversion repository version... r23093
</span><br>
<span class="quotelev1">&gt; checking Open Portable Access Layer version... 1.4.2
</span><br>
<span class="quotelev1">&gt; checking Open Portable Access Layer release date... May 04, 2010
</span><br>
<span class="quotelev1">&gt; checking Open Portable Access Layer Subversion repository version... r23093
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *** Initialization, setup
</span><br>
<span class="quotelev1">&gt; configure: builddir: /home/precis/opemmpi/openmpi-1.4.2
</span><br>
<span class="quotelev1">&gt; configure: srcdir: /home/precis/opemmpi/openmpi-1.4.2
</span><br>
<span class="quotelev1">&gt; checking build system type... i686-pc-linux-gnu
</span><br>
<span class="quotelev1">&gt; checking host system type... i686-pc-linux-gnu
</span><br>
<span class="quotelev1">&gt; checking for prefix by checking for ompi_clean... no
</span><br>
<span class="quotelev1">&gt; installing to directory &quot;/usr/local&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *** Configuration options
</span><br>
<span class="quotelev1">&gt; checking whether to run code coverage... no
</span><br>
<span class="quotelev1">&gt; checking whether to compile with branch probabilities... no
</span><br>
<span class="quotelev1">&gt; checking whether to debug memory usage... no
</span><br>
<span class="quotelev1">&gt; checking whether to profile memory usage... no
</span><br>
<span class="quotelev1">&gt; checking if want developer-level compiler pickyness... no
</span><br>
<span class="quotelev1">&gt; checking if want developer-level debugging code... no
</span><br>
<span class="quotelev1">&gt; checking if want sparse process groups... no
</span><br>
<span class="quotelev1">&gt; checking if want Fortran 77 bindings... yes
</span><br>
<span class="quotelev1">&gt; checking if want Fortran 90 bindings... yes
</span><br>
<span class="quotelev1">&gt; checking desired Fortran 90 bindings &quot;size&quot;... small
</span><br>
<span class="quotelev1">&gt; checking whether to enable PMPI... yes
</span><br>
<span class="quotelev1">&gt; checking if want C++ bindings... yes
</span><br>
<span class="quotelev1">&gt; checking if want MPI::SEEK_SET support... yes
</span><br>
<span class="quotelev1">&gt; checking if want to enable weak symbol support... yes
</span><br>
<span class="quotelev1">&gt; checking if want run-time MPI parameter checking... runtime
</span><br>
<span class="quotelev1">&gt; checking if want to install OMPI header files... no
</span><br>
<span class="quotelev1">&gt; checking if want pretty-print stacktrace... yes
</span><br>
<span class="quotelev1">&gt; checking if peruse support is required... no
</span><br>
<span class="quotelev1">&gt; checking max supported array dimension in F90 MPI bindings... 4
</span><br>
<span class="quotelev1">&gt; checking if pty support should be enabled... yes
</span><br>
<span class="quotelev1">&gt; checking if user wants dlopen support... yes
</span><br>
<span class="quotelev1">&gt; checking if heterogeneous support should be enabled... no
</span><br>
<span class="quotelev1">&gt; checking if want trace file debugging... no
</span><br>
<span class="quotelev1">&gt; checking if want full RTE support... yes
</span><br>
<span class="quotelev1">&gt; checking if want fault tolerance... Disabled fault tolerance
</span><br>
<span class="quotelev1">&gt; checking if want IPv6 support... yes (if underlying system supports it)
</span><br>
<span class="quotelev1">&gt; checking if want orterun &quot;--prefix&quot; behavior to be enabled by default... no
</span><br>
<span class="quotelev1">&gt; checking for package/brand string... Open MPI precis_at_[hidden] Distribution
</span><br>
<span class="quotelev1">&gt; checking for ident string... 1.4.2
</span><br>
<span class="quotelev1">&gt; checking whether to add padding to the openib control header... no
</span><br>
<span class="quotelev1">&gt; checking whether to use an alternative checksum algo for messages... no
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ============================================================================
</span><br>
<span class="quotelev1">&gt; == Compiler and preprocessor tests
</span><br>
<span class="quotelev1">&gt; ============================================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *** C compiler and preprocessor
</span><br>
<span class="quotelev1">&gt; checking for style of include used by make... GNU
</span><br>
<span class="quotelev1">&gt; checking for gcc... gcc
</span><br>
<span class="quotelev1">&gt; checking for C compiler default output file name... 
</span><br>
<span class="quotelev1">&gt; configure: error: in `/home/precis/opemmpi/openmpi-1.4.2':
</span><br>
<span class="quotelev1">&gt; configure: error: C compiler cannot create executables
</span><br>
<span class="quotelev1">&gt; See `config.log' for more details.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Kind Regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Syed Ahsan Ali Bokhari 
</span><br>
<span class="quotelev1">&gt; 
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
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18376.php">Jeff Squyres: "Re: [OMPI users] OpenMPI / SLURM -&gt; Send/Recv blocking"</a>
<li><strong>Previous message:</strong> <a href="18374.php">Syed Ahsan Ali: "[OMPI users] Error building Openmpi (configure: error: C compiler cannot create executables)"</a>
<li><strong>In reply to:</strong> <a href="18374.php">Syed Ahsan Ali: "[OMPI users] Error building Openmpi (configure: error: C compiler cannot create executables)"</a>
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
