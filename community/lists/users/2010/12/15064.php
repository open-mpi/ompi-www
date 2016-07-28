<?
$subject_val = "Re: [OMPI users] Open MPI on Cygwin";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 10 09:55:01 2010" -->
<!-- isoreceived="20101210145501" -->
<!-- sent="Fri, 10 Dec 2010 15:54:35 +0100" -->
<!-- isosent="20101210145435" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI on Cygwin" -->
<!-- id="43ab0f3720ecb7563b37fa6123301413_at_urd.informatik.fh-fulda.de" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4D01E1F5.3090804_at_hlrs.de" -->
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
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-10 09:54:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15065.php">Terry Dontje: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a	single machine?"</a>
<li><strong>Previous message:</strong> <a href="15063.php">Richard Treumann: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a	single machine?"</a>
<li><strong>In reply to:</strong> <a href="15060.php">Shiqing Fan: "Re: [OMPI users] Open MPI on Cygwin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15092.php">Shiqing Fan: "Re: [OMPI users] Open MPI on Cygwin"</a>
<li><strong>Reply:</strong> <a href="15092.php">Shiqing Fan: "Re: [OMPI users] Open MPI on Cygwin"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Shiqing,
<br>
<p>thank you very much for your reply. I want a working MPI implementation on my
<br>
Notebook. At the moment I still use LAM-MPI on Cygwin on Windows XP
<br>
Professional
<br>
SP3. Unfortunately LAM-MPI will not be supported any longer so that I am
<br>
looking for a replacement. I use MPI for my courses and I implement small
<br>
programs on my Notebook before I run them on our Solaris and Linux machines.
<br>
I thought that I need some kind of Windows Server for MPI on Windows so
<br>
that I didn't try building it on Windows. If I can build Open MPI on Cygwin,
<br>
I would prefer Cygwin because I have for all programs GNUmakefiles which
<br>
I would have to port to Windows Makefiles if I use MPI on Windows. If it isn't
<br>
possible to build Open MPI on Cygwin, I will try to build it directly on
<br>
Windows and I will port my GNUmakefiles in that case.
<br>
<p>Kind regards
<br>
<p>Siegmar
<br>
<p><p>On Fri, 10 Dec 2010 09:16:53 +0100, Shiqing Fan &lt;fan_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hello Siegmar,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you have to use Open MPI that build with Cygwin? If not, you can 
</span><br>
<span class="quotelev1">&gt; simply use CMake and Visual Studio to compile it. Please refer to the 
</span><br>
<span class="quotelev1">&gt; README.WINDOWS file in the main directory.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Shiqing
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 12/9/2010 4:24 PM, Siegmar Gross wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I know that you don't try to port Open Mpi to Cygwin at the moment but
</span><br>
<span class="quotelev2">&gt;&gt; perhaps you can give me a hint how to proceed. I tried to build
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.5.1rc1 on Cygwin 1.5.25 with gcc-4 with the following options.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ../openmpi-1.5.1rc1r24104/configure
</span><br>
<span class="quotelev2">&gt;&gt; --prefix=/usr/local/openmpi-1.5.1-gcc-4
</span><br>
<span class="quotelev2">&gt;&gt; CC=gcc-4 CPP=cpp-4 CXX=g++-4 CXXCPP=cpp-4 F77=gfortran-4 FC=gfortran-4
</span><br>
<span class="quotelev2">&gt;&gt; CFLAGS=-m32 CXXFLAGS=-m32 FFLAGS=-m32 FCFLAGS=-m32 CXXLDFLAGS=-m32
</span><br>
<span class="quotelev2">&gt;&gt; LDFLAGS=-m32 CPPFLAGS= C_INCL_PATH= C_INCLUDE_PATH= CPLUS_INCLUDE_PATH=
</span><br>
<span class="quotelev2">&gt;&gt; OBJC_INCLUDE_PATH= MPIHOME= --without-udapl --without-openib
</span><br>
<span class="quotelev2">&gt;&gt; --without-cs-fs --enable-mpi-f90 --with-mpi-f90-size=small
</span><br>
<span class="quotelev2">&gt;&gt; --enable-heterogeneous --enable-cxx-exceptions --enable-shared
</span><br>
<span class="quotelev2">&gt;&gt; --enable-orterun-prefix-by-default --with-threads=posix
</span><br>
<span class="quotelev2">&gt;&gt; --enable-mpi-threads --disable-progress-threads --disable-vt
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;--disable-vt&quot; was necessary to avoid some errors. I got the following
</span><br>
<span class="quotelev2">&gt;&gt; output in config.log.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ## --------- ##
</span><br>
<span class="quotelev2">&gt;&gt; ## Platform. ##
</span><br>
<span class="quotelev2">&gt;&gt; ## --------- ##
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; hostname = eiger
</span><br>
<span class="quotelev2">&gt;&gt; uname -m = i686
</span><br>
<span class="quotelev2">&gt;&gt; uname -r = 1.5.25(0.156/4/2)
</span><br>
<span class="quotelev2">&gt;&gt; uname -s = CYGWIN_NT-5.1
</span><br>
<span class="quotelev2">&gt;&gt; uname -v = 2008-06-12 19:34
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/uname -p = unknown
</span><br>
<span class="quotelev2">&gt;&gt; /bin/uname -X     = unknown
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /bin/arch              = i686
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/arch -k       = unknown
</span><br>
<span class="quotelev2">&gt;&gt; /usr/convex/getsysinfo = unknown
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/hostinfo      = unknown
</span><br>
<span class="quotelev2">&gt;&gt; /bin/machine           = unknown
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/oslevel       = unknown
</span><br>
<span class="quotelev2">&gt;&gt; /bin/universe          = unknown
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My configure-log-file contains the following two lines:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; checking for architecture... i686
</span><br>
<span class="quotelev2">&gt;&gt; configure: WARNING: Unknown architecture ... proceeding anyway
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In my opinion all other warnings in that file are unimportant because
</span><br>
<span class="quotelev2">&gt;&gt; I get them on Solaris and Linux as well. &quot;make&quot; breaks with some errors.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; eiger openmpi-1.5.1-Cygwin.x86_gcc-4 56 grep -i error
</span><br>
<span class="quotelev2">&gt;&gt;    log.make.Cygwin.x86_gcc-4 | more
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    CC     error.lo
</span><br>
<span class="quotelev2">&gt;&gt; .../opal/mca/installdirs/windows/opal_installdirs_windows.c:72: error:
</span><br>
<span class="quotelev2">&gt;&gt;    'HKEY' undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt;&gt; .../opal/mca/installdirs/windows/opal_installdirs_windows.c:72: error:
</span><br>
<span class="quotelev2">&gt;&gt;    (Each undeclared identifier is reported only once
</span><br>
<span class="quotelev2">&gt;&gt; .../opal/mca/installdirs/windows/opal_installdirs_windows.c:72: error:
</span><br>
<span class="quotelev2">&gt;&gt;    for each function it appears in.)
</span><br>
<span class="quotelev2">&gt;&gt; .../opal/mca/installdirs/windows/opal_installdirs_windows.c:72: error:
</span><br>
<span class="quotelev2">&gt;&gt;    expected ';' before 'ompi_key'
</span><br>
<span class="quotelev2">&gt;&gt; .../opal/mca/installdirs/windows/opal_installdirs_windows.c:82: error:
</span><br>
<span class="quotelev2">&gt;&gt;    'ERROR_SUCCESS' undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt;&gt; .../opal/mca/installdirs/windows/opal_installdirs_windows.c:82: error:
</span><br>
<span class="quotelev2">&gt;&gt;    'HKEY_LOCAL_MACHINE' undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;opal_installdirs_windows.c&quot; needs some header files which are not
</span><br>
<span class="quotelev2">&gt;&gt; available.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; eiger openmpi-1.5.1-Cygwin.x86_gcc-4 79 find . -name constants.h
</span><br>
<span class="quotelev2">&gt;&gt; eiger openmpi-1.5.1-Cygwin.x86_gcc-4 80 find . -name installdirs.h
</span><br>
<span class="quotelev2">&gt;&gt; eiger openmpi-1.5.1-Cygwin.x86_gcc-4 81 find . -name opal_config.h
</span><br>
<span class="quotelev2">&gt;&gt; ./opal/include/opal_config.h
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What can I do, that the first two files will be created? Are they
</span><br>
<span class="quotelev2">&gt;&gt; necessary for Cygwin or is it only windows stuff? How can I avoid
</span><br>
<span class="quotelev2">&gt;&gt; the windows-subtree in Cygwin if it is not necessary? Thank you very
</span><br>
<span class="quotelev2">&gt;&gt; much for any help in advance.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Kind regards
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Siegmar
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
<span class="quotelev2">&gt;&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15065.php">Terry Dontje: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a	single machine?"</a>
<li><strong>Previous message:</strong> <a href="15063.php">Richard Treumann: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a	single machine?"</a>
<li><strong>In reply to:</strong> <a href="15060.php">Shiqing Fan: "Re: [OMPI users] Open MPI on Cygwin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15092.php">Shiqing Fan: "Re: [OMPI users] Open MPI on Cygwin"</a>
<li><strong>Reply:</strong> <a href="15092.php">Shiqing Fan: "Re: [OMPI users] Open MPI on Cygwin"</a>
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
