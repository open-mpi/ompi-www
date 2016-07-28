<?
$subject_val = "[OMPI users] Open MPI on Cygwin";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  9 10:32:44 2010" -->
<!-- isoreceived="20101209153244" -->
<!-- sent="Thu, 9 Dec 2010 16:24:42 +0100 (CET)" -->
<!-- isosent="20101209152442" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] Open MPI on Cygwin" -->
<!-- id="201012091524.oB9FOgc8007435_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Open MPI on Cygwin<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-09 10:24:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15051.php">Santosh Ansumali: "Re: [OMPI users] Help on Mpi derived datatype for class with static members"</a>
<li><strong>Previous message:</strong> <a href="15049.php">George Bosilca: "Re: [OMPI users] Help on Mpi derived datatype for class with static members"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15060.php">Shiqing Fan: "Re: [OMPI users] Open MPI on Cygwin"</a>
<li><strong>Reply:</strong> <a href="15060.php">Shiqing Fan: "Re: [OMPI users] Open MPI on Cygwin"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I know that you don't try to port Open Mpi to Cygwin at the moment but
<br>
perhaps you can give me a hint how to proceed. I tried to build
<br>
openmpi-1.5.1rc1 on Cygwin 1.5.25 with gcc-4 with the following options.
<br>
<p>../openmpi-1.5.1rc1r24104/configure --prefix=/usr/local/openmpi-1.5.1-gcc-4
<br>
CC=gcc-4 CPP=cpp-4 CXX=g++-4 CXXCPP=cpp-4 F77=gfortran-4 FC=gfortran-4
<br>
CFLAGS=-m32 CXXFLAGS=-m32 FFLAGS=-m32 FCFLAGS=-m32 CXXLDFLAGS=-m32
<br>
LDFLAGS=-m32 CPPFLAGS= C_INCL_PATH= C_INCLUDE_PATH= CPLUS_INCLUDE_PATH=
<br>
OBJC_INCLUDE_PATH= MPIHOME= --without-udapl --without-openib
<br>
--without-cs-fs --enable-mpi-f90 --with-mpi-f90-size=small
<br>
--enable-heterogeneous --enable-cxx-exceptions --enable-shared 
<br>
--enable-orterun-prefix-by-default --with-threads=posix
<br>
--enable-mpi-threads --disable-progress-threads --disable-vt
<br>
<p>&quot;--disable-vt&quot; was necessary to avoid some errors. I got the following
<br>
output in config.log.
<br>
<p>## --------- ##
<br>
## Platform. ##
<br>
## --------- ##
<br>
<p>hostname = eiger
<br>
uname -m = i686
<br>
uname -r = 1.5.25(0.156/4/2)
<br>
uname -s = CYGWIN_NT-5.1
<br>
uname -v = 2008-06-12 19:34
<br>
<p>/usr/bin/uname -p = unknown
<br>
/bin/uname -X     = unknown
<br>
<p>/bin/arch              = i686
<br>
/usr/bin/arch -k       = unknown
<br>
/usr/convex/getsysinfo = unknown
<br>
/usr/bin/hostinfo      = unknown
<br>
/bin/machine           = unknown
<br>
/usr/bin/oslevel       = unknown
<br>
/bin/universe          = unknown
<br>
...
<br>
<p><p>My configure-log-file contains the following two lines:
<br>
<p>checking for architecture... i686
<br>
configure: WARNING: Unknown architecture ... proceeding anyway
<br>
<p>In my opinion all other warnings in that file are unimportant because
<br>
I get them on Solaris and Linux as well. &quot;make&quot; breaks with some errors.
<br>
<p>eiger openmpi-1.5.1-Cygwin.x86_gcc-4 56 grep -i error
<br>
&nbsp;&nbsp;log.make.Cygwin.x86_gcc-4 | more
<br>
...
<br>
<p>&nbsp;&nbsp;CC     error.lo
<br>
.../opal/mca/installdirs/windows/opal_installdirs_windows.c:72: error:
<br>
&nbsp;&nbsp;'HKEY' undeclared (first use in this function)
<br>
.../opal/mca/installdirs/windows/opal_installdirs_windows.c:72: error:
<br>
&nbsp;&nbsp;(Each undeclared identifier is reported only once
<br>
.../opal/mca/installdirs/windows/opal_installdirs_windows.c:72: error:
<br>
&nbsp;&nbsp;for each function it appears in.)
<br>
.../opal/mca/installdirs/windows/opal_installdirs_windows.c:72: error:
<br>
&nbsp;&nbsp;expected ';' before 'ompi_key'
<br>
.../opal/mca/installdirs/windows/opal_installdirs_windows.c:82: error:
<br>
&nbsp;&nbsp;'ERROR_SUCCESS' undeclared (first use in this function)
<br>
.../opal/mca/installdirs/windows/opal_installdirs_windows.c:82: error:
<br>
&nbsp;&nbsp;'HKEY_LOCAL_MACHINE' undeclared (first use in this function)
<br>
...
<br>
<p><p>&quot;opal_installdirs_windows.c&quot; needs some header files which are not
<br>
available.
<br>
<p>eiger openmpi-1.5.1-Cygwin.x86_gcc-4 79 find . -name constants.h
<br>
eiger openmpi-1.5.1-Cygwin.x86_gcc-4 80 find . -name installdirs.h
<br>
eiger openmpi-1.5.1-Cygwin.x86_gcc-4 81 find . -name opal_config.h
<br>
./opal/include/opal_config.h
<br>
<p>What can I do, that the first two files will be created? Are they
<br>
necessary for Cygwin or is it only windows stuff? How can I avoid
<br>
the windows-subtree in Cygwin if it is not necessary? Thank you very
<br>
much for any help in advance.
<br>
<p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15051.php">Santosh Ansumali: "Re: [OMPI users] Help on Mpi derived datatype for class with static members"</a>
<li><strong>Previous message:</strong> <a href="15049.php">George Bosilca: "Re: [OMPI users] Help on Mpi derived datatype for class with static members"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15060.php">Shiqing Fan: "Re: [OMPI users] Open MPI on Cygwin"</a>
<li><strong>Reply:</strong> <a href="15060.php">Shiqing Fan: "Re: [OMPI users] Open MPI on Cygwin"</a>
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
