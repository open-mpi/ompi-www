<?
$subject_val = "[OMPI users] Error building Openmpi (configure: error: C compiler cannot create executables)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  2 05:19:45 2012" -->
<!-- isoreceived="20120202101945" -->
<!-- sent="Thu, 2 Feb 2012 15:19:40 +0500" -->
<!-- isosent="20120202101940" -->
<!-- name="Syed Ahsan Ali" -->
<!-- email="ahsanshah01_at_[hidden]" -->
<!-- subject="[OMPI users] Error building Openmpi (configure: error: C compiler cannot create executables)" -->
<!-- id="CAMvdAsLTM=wCDwJ6_Mjn6i1Jwd40k=uFNPotd6M9VqPnNZn=cQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Error building Openmpi (configure: error: C compiler cannot create executables)<br>
<strong>From:</strong> Syed Ahsan Ali (<em>ahsanshah01_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-02 05:19:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18375.php">Jeff Squyres: "Re: [OMPI users] Error building Openmpi (configure: error: C compiler cannot create executables)"</a>
<li><strong>Previous message:</strong> <a href="18373.php">adrian sabou: "Re: [OMPI users] OpenMPI / SLURM -&gt; Send/Recv blocking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18375.php">Jeff Squyres: "Re: [OMPI users] Error building Openmpi (configure: error: C compiler cannot create executables)"</a>
<li><strong>Reply:</strong> <a href="18375.php">Jeff Squyres: "Re: [OMPI users] Error building Openmpi (configure: error: C compiler cannot create executables)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear All,
<br>
<p>I have been stuck in installation of openmpi1.4.2 on RHEL5.2 with ifort and
<br>
icc.I get following error while configuring, Please help.
<br>
<p><p>[precis_at_precis2 openmpi-1.4.2]$ ./build.sh
<br>
checking for a BSD-compatible install... /usr/bin/install -c
<br>
checking whether build environment is sane... yes
<br>
checking for a thread-safe mkdir -p... /bin/mkdir -p
<br>
checking for gawk... gawk
<br>
checking whether make sets $(MAKE)... yes
<br>
checking how to create a ustar tar archive... gnutar
<br>
<p>============================================================================
<br>
== Configuring Open MPI
<br>
============================================================================
<br>
<p>*** Checking versions
<br>
checking Open MPI version... 1.4.2
<br>
checking Open MPI release date... May 04, 2010
<br>
checking Open MPI Subversion repository version... r23093
<br>
checking Open Run-Time Environment version... 1.4.2
<br>
checking Open Run-Time Environment release date... May 04, 2010
<br>
checking Open Run-Time Environment Subversion repository version... r23093
<br>
checking Open Portable Access Layer version... 1.4.2
<br>
checking Open Portable Access Layer release date... May 04, 2010
<br>
checking Open Portable Access Layer Subversion repository version... r23093
<br>
<p>*** Initialization, setup
<br>
configure: builddir: /home/precis/opemmpi/openmpi-1.4.2
<br>
configure: srcdir: /home/precis/opemmpi/openmpi-1.4.2
<br>
checking build system type... i686-pc-linux-gnu
<br>
checking host system type... i686-pc-linux-gnu
<br>
installing to directory &quot;/home/openmpi&quot;
<br>
<p>*** Configuration options
<br>
checking whether to run code coverage... no
<br>
checking whether to compile with branch probabilities... no
<br>
checking whether to debug memory usage... no
<br>
checking whether to profile memory usage... no
<br>
checking if want developer-level compiler pickyness... no
<br>
checking if want developer-level debugging code... no
<br>
checking if want sparse process groups... no
<br>
checking if want Fortran 77 bindings... yes
<br>
checking if want Fortran 90 bindings... yes
<br>
checking desired Fortran 90 bindings &quot;size&quot;... small
<br>
checking whether to enable PMPI... yes
<br>
checking if want C++ bindings... yes
<br>
checking if want MPI::SEEK_SET support... yes
<br>
checking if want to enable weak symbol support... yes
<br>
checking if want run-time MPI parameter checking... runtime
<br>
checking if want to install OMPI header files... no
<br>
checking if want pretty-print stacktrace... yes
<br>
checking if peruse support is required... no
<br>
checking max supported array dimension in F90 MPI bindings... 4
<br>
checking if pty support should be enabled... yes
<br>
checking if user wants dlopen support... yes
<br>
checking if heterogeneous support should be enabled... no
<br>
checking if want trace file debugging... no
<br>
checking if want full RTE support... yes
<br>
checking if want fault tolerance... Disabled fault tolerance
<br>
checking if want IPv6 support... yes (if underlying system supports it)
<br>
checking if want orterun &quot;--prefix&quot; behavior to be enabled by default... no
<br>
checking for package/brand string... Open MPI
<br>
precis_at_precis2.pakmet.com.pkDistribution
<br>
checking for ident string... 1.4.2
<br>
checking whether to add padding to the openib control header... no
<br>
checking whether to use an alternative checksum algo for messages... no
<br>
<p>============================================================================
<br>
== Compiler and preprocessor tests
<br>
============================================================================
<br>
<p>*** C compiler and preprocessor
<br>
checking for style of include used by make... GNU
<br>
checking for gcc... icc
<br>
checking for C compiler default output file name...
<br>
configure: error: in `/home/precis/opemmpi/openmpi-1.4.2':
<br>
configure: error: C compiler cannot create executables
<br>
See `config.log' for more details.
<br>
make: *** No targets specified and no makefile found.  Stop.
<br>
make: *** No rule to make target `install'.  Stop.
<br>
[precis_at_precis2 openmpi-1.4.2]$ clean all
<br>
bash: clean: command not found
<br>
[precis_at_precis2 openmpi-1.4.2]$ make clean
<br>
make: *** No rule to make target `clean'.  Stop.
<br>
[precis_at_precis2 openmpi-1.4.2]$ make
<br>
make: *** No targets specified and no makefile found.  Stop.
<br>
[precis_at_precis2 openmpi-1.4.2]$ ./configure
<br>
checking for a BSD-compatible install... /usr/bin/install -c
<br>
checking whether build environment is sane... yes
<br>
checking for a thread-safe mkdir -p... /bin/mkdir -p
<br>
checking for gawk... gawk
<br>
checking whether make sets $(MAKE)... yes
<br>
checking how to create a ustar tar archive... gnutar
<br>
<p>============================================================================
<br>
== Configuring Open MPI
<br>
============================================================================
<br>
<p>*** Checking versions
<br>
checking Open MPI version... 1.4.2
<br>
checking Open MPI release date... May 04, 2010
<br>
checking Open MPI Subversion repository version... r23093
<br>
checking Open Run-Time Environment version... 1.4.2
<br>
checking Open Run-Time Environment release date... May 04, 2010
<br>
checking Open Run-Time Environment Subversion repository version... r23093
<br>
checking Open Portable Access Layer version... 1.4.2
<br>
checking Open Portable Access Layer release date... May 04, 2010
<br>
checking Open Portable Access Layer Subversion repository version... r23093
<br>
<p>*** Initialization, setup
<br>
configure: builddir: /home/precis/opemmpi/openmpi-1.4.2
<br>
configure: srcdir: /home/precis/opemmpi/openmpi-1.4.2
<br>
checking build system type... i686-pc-linux-gnu
<br>
checking host system type... i686-pc-linux-gnu
<br>
checking for prefix by checking for ompi_clean... no
<br>
installing to directory &quot;/usr/local&quot;
<br>
<p>*** Configuration options
<br>
checking whether to run code coverage... no
<br>
checking whether to compile with branch probabilities... no
<br>
checking whether to debug memory usage... no
<br>
checking whether to profile memory usage... no
<br>
checking if want developer-level compiler pickyness... no
<br>
checking if want developer-level debugging code... no
<br>
checking if want sparse process groups... no
<br>
checking if want Fortran 77 bindings... yes
<br>
checking if want Fortran 90 bindings... yes
<br>
checking desired Fortran 90 bindings &quot;size&quot;... small
<br>
checking whether to enable PMPI... yes
<br>
checking if want C++ bindings... yes
<br>
checking if want MPI::SEEK_SET support... yes
<br>
checking if want to enable weak symbol support... yes
<br>
checking if want run-time MPI parameter checking... runtime
<br>
checking if want to install OMPI header files... no
<br>
checking if want pretty-print stacktrace... yes
<br>
checking if peruse support is required... no
<br>
checking max supported array dimension in F90 MPI bindings... 4
<br>
checking if pty support should be enabled... yes
<br>
checking if user wants dlopen support... yes
<br>
checking if heterogeneous support should be enabled... no
<br>
checking if want trace file debugging... no
<br>
checking if want full RTE support... yes
<br>
checking if want fault tolerance... Disabled fault tolerance
<br>
checking if want IPv6 support... yes (if underlying system supports it)
<br>
checking if want orterun &quot;--prefix&quot; behavior to be enabled by default... no
<br>
checking for package/brand string... Open MPI
<br>
precis_at_precis2.pakmet.com.pkDistribution
<br>
checking for ident string... 1.4.2
<br>
checking whether to add padding to the openib control header... no
<br>
checking whether to use an alternative checksum algo for messages... no
<br>
<p>============================================================================
<br>
== Compiler and preprocessor tests
<br>
============================================================================
<br>
<p>*** C compiler and preprocessor
<br>
checking for style of include used by make... GNU
<br>
checking for gcc... gcc
<br>
checking for C compiler default output file name...
<br>
configure: error: in `/home/precis/opemmpi/openmpi-1.4.2':
<br>
configure: error: C compiler cannot create executables
<br>
See `config.log' for more details.
<br>
<p><pre>
-- 
Kind Regards
Syed Ahsan Ali Bokhari
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18374/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18375.php">Jeff Squyres: "Re: [OMPI users] Error building Openmpi (configure: error: C compiler cannot create executables)"</a>
<li><strong>Previous message:</strong> <a href="18373.php">adrian sabou: "Re: [OMPI users] OpenMPI / SLURM -&gt; Send/Recv blocking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18375.php">Jeff Squyres: "Re: [OMPI users] Error building Openmpi (configure: error: C compiler cannot create executables)"</a>
<li><strong>Reply:</strong> <a href="18375.php">Jeff Squyres: "Re: [OMPI users] Error building Openmpi (configure: error: C compiler cannot create executables)"</a>
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
