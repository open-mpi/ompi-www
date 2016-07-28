<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Mar 29 11:35:49 2006" -->
<!-- isoreceived="20060329163549" -->
<!-- sent="Wed, 29 Mar 2006 10:35:35 -0600" -->
<!-- isosent="20060329163535" -->
<!-- name="Adams Samuel D Contr AFRL/HEDR" -->
<!-- email="Samuel.Adams.ctr_at_[hidden]" -->
<!-- subject="[OMPI users] OMPI 1.0.1, CentOS 4.2 and gcc4" -->
<!-- id="4F5BE74AB02653448520E9692496874101E530_at_fscnbc18.brooks.af.mil" -->
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
<strong>From:</strong> Adams Samuel D Contr AFRL/HEDR (<em>Samuel.Adams.ctr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-29 11:35:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0930.php">Brian Barrett: "Re: [OMPI users] OMPI 1.0.1, CentOS 4.2 and gcc4"</a>
<li><strong>Previous message:</strong> <a href="0928.php">Brian Barrett: "Re: [OMPI users] XMPI ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0930.php">Brian Barrett: "Re: [OMPI users] OMPI 1.0.1, CentOS 4.2 and gcc4"</a>
<li><strong>Reply:</strong> <a href="0930.php">Brian Barrett: "Re: [OMPI users] OMPI 1.0.1, CentOS 4.2 and gcc4"</a>
<li><strong>Maybe reply:</strong> <a href="0935.php">Brian Barrett: "Re: [OMPI users] OMPI 1.0.1, CentOS 4.2 and gcc4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
dIt seems like this should be a simple problem.  I am trying to get OpenMPI
<br>
to compile on a CentOS 4.2 (like Redhat EL 4.2) box.  It has installed gcc
<br>
3.4, and gcc 4.0.  I want to compile OMPI with gcc4, but I am getting this
<br>
error.  What am I doing wrong?  
<br>
<p>[root_at_Cent01 openmpi-1.0.1]# CC=gcc4 CPP=gcc4 CXX=g++4 CXXCPP=g++4
<br>
F77=gfortran FC=gfortran ./configure
<br>
checking for a BSD-compatible install... /usr/bin/install -c
<br>
checking whether build environment is sane... yes
<br>
checking for gawk... gawk
<br>
checking whether make sets $(MAKE)... yes
<br>
<p>============================================================================
<br>
== Configuring Open MPI
<br>
============================================================================
<br>
<p>*** Checking versions
<br>
checking Open MPI version... 1.0.1
<br>
checking Open MPI Subversion repository version... r8453
<br>
checking Open Run-Time Environment (ORTE) version... 1.0.1
<br>
checking ORTE Subversion repository version... r8453
<br>
checking Open Portable Access Layer (OPAL) version... 1.0.1
<br>
checking OPAL Subversion repository version... r8453
<br>
<p>*** Initialization, setup
<br>
configure: builddir: /root/Desktop/openmpi-1.0.1
<br>
configure: srcdir: /root/Desktop/openmpi-1.0.1
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
checking Whether to run code coverage... no
<br>
checking whether to debug memory usage... no
<br>
checking whether to profile memory usage... no
<br>
checking if want developer-level compiler pickyness... no
<br>
checking if want developer-level debugging code... no
<br>
checking if want Fortran 77 bindings... yes
<br>
checking if want Fortran 90 bindings... yes
<br>
checking whether to enable PMPI... yes
<br>
checking if want C++ bindings... yes
<br>
checking if want to enable weak symbol support... yes
<br>
checking if want run-time MPI parameter checking... runtime
<br>
checking if want to install OMPI header files... no
<br>
checking if want pretty-print stacktrace... yes
<br>
checking if want deprecated executable names... no
<br>
checking if want MPI-2 one-sided empty shell functions... no
<br>
checking max supported array dimension in F90 MPI bindings... 4
<br>
checking if pty support should be enabled... yes
<br>
checking if user wants dlopen support... yes
<br>
checking if heterogeneous support should be enabled... yes
<br>
checking if want trace file debugging... no
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
checking for gcc... gcc4
<br>
checking for C compiler default output file name... a.out
<br>
checking whether the C compiler works... yes
<br>
checking whether we are cross compiling... no
<br>
checking for suffix of executables...
<br>
checking for suffix of object files... o
<br>
checking whether we are using the GNU C compiler... yes
<br>
checking whether gcc4 accepts -g... yes
<br>
checking for gcc4 option to accept ANSI C... none needed
<br>
checking dependency style of gcc4... gcc3
<br>
checking whether gcc4 and cc understand -c and -o together... yes
<br>
checking if compiler impersonates gcc... no
<br>
checking if gcc4 supports -finline-functions... yes
<br>
checking if gcc4 supports -fno-strict-aliasing... yes
<br>
configure: WARNING:  -fno-strict-aliasing has been added to CFLAGS
<br>
checking for C optimization flags... -O3 -DNDEBUG -fno-strict-aliasing
<br>
checking how to run the C preprocessor... gcc4
<br>
configure: error: C preprocessor &quot;gcc4&quot; fails sanity check
<br>
See `config.log' for more details.
<br>
[root_at_Cent01 openmpi-1.0.1]#
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0930.php">Brian Barrett: "Re: [OMPI users] OMPI 1.0.1, CentOS 4.2 and gcc4"</a>
<li><strong>Previous message:</strong> <a href="0928.php">Brian Barrett: "Re: [OMPI users] XMPI ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0930.php">Brian Barrett: "Re: [OMPI users] OMPI 1.0.1, CentOS 4.2 and gcc4"</a>
<li><strong>Reply:</strong> <a href="0930.php">Brian Barrett: "Re: [OMPI users] OMPI 1.0.1, CentOS 4.2 and gcc4"</a>
<li><strong>Maybe reply:</strong> <a href="0935.php">Brian Barrett: "Re: [OMPI users] OMPI 1.0.1, CentOS 4.2 and gcc4"</a>
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
