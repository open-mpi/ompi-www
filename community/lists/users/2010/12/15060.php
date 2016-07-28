<?
$subject_val = "Re: [OMPI users] Open MPI on Cygwin";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 10 03:14:44 2010" -->
<!-- isoreceived="20101210081444" -->
<!-- sent="Fri, 10 Dec 2010 09:16:53 +0100" -->
<!-- isosent="20101210081653" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI on Cygwin" -->
<!-- id="4D01E1F5.3090804_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201012091524.oB9FOgc8007435_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI on Cygwin<br>
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-10 03:16:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15061.php">Terry Dontje: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a single machine?"</a>
<li><strong>Previous message:</strong> <a href="15059.php">Santosh Ansumali: "Re: [OMPI users] Help on Mpi derived datatype for class with static members"</a>
<li><strong>In reply to:</strong> <a href="15050.php">Siegmar Gross: "[OMPI users] Open MPI on Cygwin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15064.php">Siegmar Gross: "Re: [OMPI users] Open MPI on Cygwin"</a>
<li><strong>Reply:</strong> <a href="15064.php">Siegmar Gross: "Re: [OMPI users] Open MPI on Cygwin"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Siegmar,
<br>
<p>Do you have to use Open MPI that build with Cygwin? If not, you can 
<br>
simply use CMake and Visual Studio to compile it. Please refer to the 
<br>
README.WINDOWS file in the main directory.
<br>
<p><p>Regards,
<br>
Shiqing
<br>
<p>On 12/9/2010 4:24 PM, Siegmar Gross wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I know that you don't try to port Open Mpi to Cygwin at the moment but
</span><br>
<span class="quotelev1">&gt; perhaps you can give me a hint how to proceed. I tried to build
</span><br>
<span class="quotelev1">&gt; openmpi-1.5.1rc1 on Cygwin 1.5.25 with gcc-4 with the following options.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ../openmpi-1.5.1rc1r24104/configure --prefix=/usr/local/openmpi-1.5.1-gcc-4
</span><br>
<span class="quotelev1">&gt; CC=gcc-4 CPP=cpp-4 CXX=g++-4 CXXCPP=cpp-4 F77=gfortran-4 FC=gfortran-4
</span><br>
<span class="quotelev1">&gt; CFLAGS=-m32 CXXFLAGS=-m32 FFLAGS=-m32 FCFLAGS=-m32 CXXLDFLAGS=-m32
</span><br>
<span class="quotelev1">&gt; LDFLAGS=-m32 CPPFLAGS= C_INCL_PATH= C_INCLUDE_PATH= CPLUS_INCLUDE_PATH=
</span><br>
<span class="quotelev1">&gt; OBJC_INCLUDE_PATH= MPIHOME= --without-udapl --without-openib
</span><br>
<span class="quotelev1">&gt; --without-cs-fs --enable-mpi-f90 --with-mpi-f90-size=small
</span><br>
<span class="quotelev1">&gt; --enable-heterogeneous --enable-cxx-exceptions --enable-shared
</span><br>
<span class="quotelev1">&gt; --enable-orterun-prefix-by-default --with-threads=posix
</span><br>
<span class="quotelev1">&gt; --enable-mpi-threads --disable-progress-threads --disable-vt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;--disable-vt&quot; was necessary to avoid some errors. I got the following
</span><br>
<span class="quotelev1">&gt; output in config.log.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ## --------- ##
</span><br>
<span class="quotelev1">&gt; ## Platform. ##
</span><br>
<span class="quotelev1">&gt; ## --------- ##
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hostname = eiger
</span><br>
<span class="quotelev1">&gt; uname -m = i686
</span><br>
<span class="quotelev1">&gt; uname -r = 1.5.25(0.156/4/2)
</span><br>
<span class="quotelev1">&gt; uname -s = CYGWIN_NT-5.1
</span><br>
<span class="quotelev1">&gt; uname -v = 2008-06-12 19:34
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /usr/bin/uname -p = unknown
</span><br>
<span class="quotelev1">&gt; /bin/uname -X     = unknown
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /bin/arch              = i686
</span><br>
<span class="quotelev1">&gt; /usr/bin/arch -k       = unknown
</span><br>
<span class="quotelev1">&gt; /usr/convex/getsysinfo = unknown
</span><br>
<span class="quotelev1">&gt; /usr/bin/hostinfo      = unknown
</span><br>
<span class="quotelev1">&gt; /bin/machine           = unknown
</span><br>
<span class="quotelev1">&gt; /usr/bin/oslevel       = unknown
</span><br>
<span class="quotelev1">&gt; /bin/universe          = unknown
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My configure-log-file contains the following two lines:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; checking for architecture... i686
</span><br>
<span class="quotelev1">&gt; configure: WARNING: Unknown architecture ... proceeding anyway
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In my opinion all other warnings in that file are unimportant because
</span><br>
<span class="quotelev1">&gt; I get them on Solaris and Linux as well. &quot;make&quot; breaks with some errors.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; eiger openmpi-1.5.1-Cygwin.x86_gcc-4 56 grep -i error
</span><br>
<span class="quotelev1">&gt;    log.make.Cygwin.x86_gcc-4 | more
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    CC     error.lo
</span><br>
<span class="quotelev1">&gt; .../opal/mca/installdirs/windows/opal_installdirs_windows.c:72: error:
</span><br>
<span class="quotelev1">&gt;    'HKEY' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; .../opal/mca/installdirs/windows/opal_installdirs_windows.c:72: error:
</span><br>
<span class="quotelev1">&gt;    (Each undeclared identifier is reported only once
</span><br>
<span class="quotelev1">&gt; .../opal/mca/installdirs/windows/opal_installdirs_windows.c:72: error:
</span><br>
<span class="quotelev1">&gt;    for each function it appears in.)
</span><br>
<span class="quotelev1">&gt; .../opal/mca/installdirs/windows/opal_installdirs_windows.c:72: error:
</span><br>
<span class="quotelev1">&gt;    expected ';' before 'ompi_key'
</span><br>
<span class="quotelev1">&gt; .../opal/mca/installdirs/windows/opal_installdirs_windows.c:82: error:
</span><br>
<span class="quotelev1">&gt;    'ERROR_SUCCESS' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; .../opal/mca/installdirs/windows/opal_installdirs_windows.c:82: error:
</span><br>
<span class="quotelev1">&gt;    'HKEY_LOCAL_MACHINE' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;opal_installdirs_windows.c&quot; needs some header files which are not
</span><br>
<span class="quotelev1">&gt; available.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; eiger openmpi-1.5.1-Cygwin.x86_gcc-4 79 find . -name constants.h
</span><br>
<span class="quotelev1">&gt; eiger openmpi-1.5.1-Cygwin.x86_gcc-4 80 find . -name installdirs.h
</span><br>
<span class="quotelev1">&gt; eiger openmpi-1.5.1-Cygwin.x86_gcc-4 81 find . -name opal_config.h
</span><br>
<span class="quotelev1">&gt; ./opal/include/opal_config.h
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What can I do, that the first two files will be created? Are they
</span><br>
<span class="quotelev1">&gt; necessary for Cygwin or is it only windows stuff? How can I avoid
</span><br>
<span class="quotelev1">&gt; the windows-subtree in Cygwin if it is not necessary? Thank you very
</span><br>
<span class="quotelev1">&gt; much for any help in advance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kind regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Siegmar
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
<li><strong>Next message:</strong> <a href="15061.php">Terry Dontje: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a single machine?"</a>
<li><strong>Previous message:</strong> <a href="15059.php">Santosh Ansumali: "Re: [OMPI users] Help on Mpi derived datatype for class with static members"</a>
<li><strong>In reply to:</strong> <a href="15050.php">Siegmar Gross: "[OMPI users] Open MPI on Cygwin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15064.php">Siegmar Gross: "Re: [OMPI users] Open MPI on Cygwin"</a>
<li><strong>Reply:</strong> <a href="15064.php">Siegmar Gross: "Re: [OMPI users] Open MPI on Cygwin"</a>
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
