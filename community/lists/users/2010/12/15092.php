<?
$subject_val = "Re: [OMPI users] Open MPI on Cygwin";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 13 04:31:09 2010" -->
<!-- isoreceived="20101213093109" -->
<!-- sent="Mon, 13 Dec 2010 10:31:05 +0100" -->
<!-- isosent="20101213093105" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI on Cygwin" -->
<!-- id="4D05E7D9.4060800_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="43ab0f3720ecb7563b37fa6123301413_at_urd.informatik.fh-fulda.de" -->
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
<strong>Date:</strong> 2010-12-13 04:31:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15093.php">peifan: "[OMPI users] how to set the connecttimeout para?"</a>
<li><strong>Previous message:</strong> <a href="15091.php">Tang, Hsiu-Khuern: "Re: [OMPI users] cannot restrict port numbers using btl_tcp_port_min_v4 and btl_tcp_port_range_v4"</a>
<li><strong>In reply to:</strong> <a href="15064.php">Siegmar Gross: "Re: [OMPI users] Open MPI on Cygwin"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Siegmar,
<br>
<p>Building Open MPI under Cygwin is not the way we recommend, it's not 
<br>
easy, and the building time is extremely long. Actually if you have 
<br>
CMake and Visual Studio installed, then it's pretty easy to build Open 
<br>
MPI binary, but of course you have to port your GNU makefiles.
<br>
<p>If there is anything I can help, e.g. providing an installer of Open MPI 
<br>
binary, please just let me know.
<br>
<p>Regards,
<br>
Shiqing
<br>
<p>On 12/10/2010 3:54 PM, Siegmar Gross wrote:
<br>
<span class="quotelev1">&gt; Hello Shiqing,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thank you very much for your reply. I want a working MPI implementation on my
</span><br>
<span class="quotelev1">&gt; Notebook. At the moment I still use LAM-MPI on Cygwin on Windows XP
</span><br>
<span class="quotelev1">&gt; Professional
</span><br>
<span class="quotelev1">&gt; SP3. Unfortunately LAM-MPI will not be supported any longer so that I am
</span><br>
<span class="quotelev1">&gt; looking for a replacement. I use MPI for my courses and I implement small
</span><br>
<span class="quotelev1">&gt; programs on my Notebook before I run them on our Solaris and Linux machines.
</span><br>
<span class="quotelev1">&gt; I thought that I need some kind of Windows Server for MPI on Windows so
</span><br>
<span class="quotelev1">&gt; that I didn't try building it on Windows. If I can build Open MPI on Cygwin,
</span><br>
<span class="quotelev1">&gt; I would prefer Cygwin because I have for all programs GNUmakefiles which
</span><br>
<span class="quotelev1">&gt; I would have to port to Windows Makefiles if I use MPI on Windows. If it isn't
</span><br>
<span class="quotelev1">&gt; possible to build Open MPI on Cygwin, I will try to build it directly on
</span><br>
<span class="quotelev1">&gt; Windows and I will port my GNUmakefiles in that case.
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, 10 Dec 2010 09:16:53 +0100, Shiqing Fan&lt;fan_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hello Siegmar,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Do you have to use Open MPI that build with Cygwin? If not, you can
</span><br>
<span class="quotelev2">&gt;&gt; simply use CMake and Visual Studio to compile it. Please refer to the
</span><br>
<span class="quotelev2">&gt;&gt; README.WINDOWS file in the main directory.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Shiqing
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 12/9/2010 4:24 PM, Siegmar Gross wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I know that you don't try to port Open Mpi to Cygwin at the moment but
</span><br>
<span class="quotelev3">&gt;&gt;&gt; perhaps you can give me a hint how to proceed. I tried to build
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openmpi-1.5.1rc1 on Cygwin 1.5.25 with gcc-4 with the following options.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../openmpi-1.5.1rc1r24104/configure
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --prefix=/usr/local/openmpi-1.5.1-gcc-4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CC=gcc-4 CPP=cpp-4 CXX=g++-4 CXXCPP=cpp-4 F77=gfortran-4 FC=gfortran-4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CFLAGS=-m32 CXXFLAGS=-m32 FFLAGS=-m32 FCFLAGS=-m32 CXXLDFLAGS=-m32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LDFLAGS=-m32 CPPFLAGS= C_INCL_PATH= C_INCLUDE_PATH= CPLUS_INCLUDE_PATH=
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OBJC_INCLUDE_PATH= MPIHOME= --without-udapl --without-openib
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --without-cs-fs --enable-mpi-f90 --with-mpi-f90-size=small
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --enable-heterogeneous --enable-cxx-exceptions --enable-shared
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --enable-orterun-prefix-by-default --with-threads=posix
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --enable-mpi-threads --disable-progress-threads --disable-vt
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;--disable-vt&quot; was necessary to avoid some errors. I got the following
</span><br>
<span class="quotelev3">&gt;&gt;&gt; output in config.log.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ## --------- ##
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ## Platform. ##
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ## --------- ##
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hostname = eiger
</span><br>
<span class="quotelev3">&gt;&gt;&gt; uname -m = i686
</span><br>
<span class="quotelev3">&gt;&gt;&gt; uname -r = 1.5.25(0.156/4/2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; uname -s = CYGWIN_NT-5.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; uname -v = 2008-06-12 19:34
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/bin/uname -p = unknown
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /bin/uname -X     = unknown
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /bin/arch              = i686
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/bin/arch -k       = unknown
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/convex/getsysinfo = unknown
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/bin/hostinfo      = unknown
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /bin/machine           = unknown
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/bin/oslevel       = unknown
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /bin/universe          = unknown
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My configure-log-file contains the following two lines:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for architecture... i686
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure: WARNING: Unknown architecture ... proceeding anyway
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In my opinion all other warnings in that file are unimportant because
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I get them on Solaris and Linux as well. &quot;make&quot; breaks with some errors.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; eiger openmpi-1.5.1-Cygwin.x86_gcc-4 56 grep -i error
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     log.make.Cygwin.x86_gcc-4 | more
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     CC     error.lo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; .../opal/mca/installdirs/windows/opal_installdirs_windows.c:72: error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     'HKEY' undeclared (first use in this function)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; .../opal/mca/installdirs/windows/opal_installdirs_windows.c:72: error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     (Each undeclared identifier is reported only once
</span><br>
<span class="quotelev3">&gt;&gt;&gt; .../opal/mca/installdirs/windows/opal_installdirs_windows.c:72: error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     for each function it appears in.)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; .../opal/mca/installdirs/windows/opal_installdirs_windows.c:72: error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     expected ';' before 'ompi_key'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; .../opal/mca/installdirs/windows/opal_installdirs_windows.c:82: error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     'ERROR_SUCCESS' undeclared (first use in this function)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; .../opal/mca/installdirs/windows/opal_installdirs_windows.c:82: error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     'HKEY_LOCAL_MACHINE' undeclared (first use in this function)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;opal_installdirs_windows.c&quot; needs some header files which are not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; available.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; eiger openmpi-1.5.1-Cygwin.x86_gcc-4 79 find . -name constants.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt; eiger openmpi-1.5.1-Cygwin.x86_gcc-4 80 find . -name installdirs.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt; eiger openmpi-1.5.1-Cygwin.x86_gcc-4 81 find . -name opal_config.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./opal/include/opal_config.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What can I do, that the first two files will be created? Are they
</span><br>
<span class="quotelev3">&gt;&gt;&gt; necessary for Cygwin or is it only windows stuff? How can I avoid
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the windows-subtree in Cygwin if it is not necessary? Thank you very
</span><br>
<span class="quotelev3">&gt;&gt;&gt; much for any help in advance.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Kind regards
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Siegmar
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
<span class="quotelev3">&gt;&gt;&gt;
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
<li><strong>Next message:</strong> <a href="15093.php">peifan: "[OMPI users] how to set the connecttimeout para?"</a>
<li><strong>Previous message:</strong> <a href="15091.php">Tang, Hsiu-Khuern: "Re: [OMPI users] cannot restrict port numbers using btl_tcp_port_min_v4 and btl_tcp_port_range_v4"</a>
<li><strong>In reply to:</strong> <a href="15064.php">Siegmar Gross: "Re: [OMPI users] Open MPI on Cygwin"</a>
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
