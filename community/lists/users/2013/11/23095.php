<?
$subject_val = "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 27 12:04:19 2013" -->
<!-- isoreceived="20131127170419" -->
<!-- sent="Wed, 27 Nov 2013 12:04:17 -0500" -->
<!-- isosent="20131127170417" -->
<!-- name="Meredith, Karl" -->
<!-- email="karl.meredith_at_[hidden]" -->
<!-- subject="Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)" -->
<!-- id="71C4A588-15A1-407E-BFE3-B453DFBFAD0A_at_fmglobal.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="20131127165132.GJ55796_at_pn1246003.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)<br>
<strong>From:</strong> Meredith, Karl (<em>karl.meredith_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-27 12:04:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23096.php">George Bosilca: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>Previous message:</strong> <a href="23094.php">Nathan Hjelm: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>In reply to:</strong> <a href="23094.php">Nathan Hjelm: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23096.php">George Bosilca: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>Reply:</strong> <a href="23096.php">George Bosilca: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
None of the C or C++ examples run.  For example, the hello_c.c example in the examples directory included with openmpi.  It compiles, but hangs on MPI_Init().
<br>
<p>Are your compiler versions different from the ones I&#146;m showing? Apple LLVM version 5.0 (clang-500.2.79) (based on LLVM 3.3svn)
<br>
<p>Karl
<br>
<p><p>On Nov 27, 2013, at 11:51 AM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Been running on Mavericks all summer with no issues. I do not use the C++ interface
</span><br>
<span class="quotelev1">&gt; though (C++ bindings were removed from the MPI standard in 3.0.) Can you try a C
</span><br>
<span class="quotelev1">&gt; example and see if that works?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Nathan Hjelm
</span><br>
<span class="quotelev1">&gt; Application Readiness, HPC-5, LANL
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Nov 27, 2013 at 11:43:05AM -0500, Meredith, Karl wrot
</span><br>
<span class="quotelev2">&gt;&gt; Okay, in order to try and track down this problem I have done a fresh install of OpenMPI-1.7.3 on Mac OS 10.9 (Mavericks).  I am using the Apple compilers, and not using anything from macports.  The code compiles fine, but when running the examples for openmpi-1.7.3, the code hangs in MPI::Init() and never returns.  No error message.  No warning.  It just hangs.  If I compile in debug mode and do a stack trace, it shows that it is stalled inside of MPI::Init() every time.  Has anyone been able to successfully get openmpi working on 10.9?  If so, what, if anything, are you doing differently?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is how I installed openmpi:
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --prefix=$HOME/tools/openmpi-1.7.3
</span><br>
<span class="quotelev2">&gt;&gt; make
</span><br>
<span class="quotelev2">&gt;&gt; make install
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here are my settings, environment variables, compilers, etc:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; bash-4.2$ which g++
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/g++
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; bash-4.2$ which gcc
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/gcc
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; bash-4.2$ which clang
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/clang
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; bash-4.2$ g++ --version
</span><br>
<span class="quotelev2">&gt;&gt; Configured with: --prefix=/Applications/Xcode.app/Contents/Developer/usr --with-gxx-include-dir=/usr/include/c++/4.2.1
</span><br>
<span class="quotelev2">&gt;&gt; Apple LLVM version 5.0 (clang-500.2.79) (based on LLVM 3.3svn)
</span><br>
<span class="quotelev2">&gt;&gt; Target: x86_64-apple-darwin13.0.0
</span><br>
<span class="quotelev2">&gt;&gt; Thread model: posix
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; bash-4.2$ gcc --version
</span><br>
<span class="quotelev2">&gt;&gt; Configured with: --prefix=/Applications/Xcode.app/Contents/Developer/usr --with-gxx-include-dir=/usr/include/c++/4.2.1
</span><br>
<span class="quotelev2">&gt;&gt; Apple LLVM version 5.0 (clang-500.2.79) (based on LLVM 3.3svn)
</span><br>
<span class="quotelev2">&gt;&gt; Target: x86_64-apple-darwin13.0.0
</span><br>
<span class="quotelev2">&gt;&gt; Thread model: posix
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; bash-4.2$ which mpicc
</span><br>
<span class="quotelev2">&gt;&gt; /Users/meredithk/tools/openmpi-1.7.3-noenv/bin/mpicc
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; bash-4.2$ which mpic++
</span><br>
<span class="quotelev2">&gt;&gt; /Users/meredithk/tools/openmpi-1.7.3-noenv/bin/mpic++
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; bash-4.2$ which mpirun
</span><br>
<span class="quotelev2">&gt;&gt; /Users/meredithk/tools/openmpi-1.7.3-noenv/bin/mpirun
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; bash-4.2$ mpicc -show
</span><br>
<span class="quotelev2">&gt;&gt; gcc -I/Users/meredithk/tools/openmpi-1.7.3-noenv/include -L/Users/meredithk/tools/openmpi-1.7.3-noenv/lib -lmpi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; bash-4.2$ mpic++ -show
</span><br>
<span class="quotelev2">&gt;&gt; g++ -I/Users/meredithk/tools/openmpi-1.7.3-noenv/include -L/Users/meredithk/tools/openmpi-1.7.3-noenv/lib -lmpi_cxx -lmpi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; bash-4.2$ pwd
</span><br>
<span class="quotelev2">&gt;&gt; /Users/meredithk/tools/openmpi-1.7.3-src
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; bash-4.2$ otool -L hello_cxx
</span><br>
<span class="quotelev2">&gt;&gt; hello_cxx:
</span><br>
<span class="quotelev2">&gt;&gt; /Users/meredithk/tools/openmpi-1.7.3-noenv/lib/libmpi_cxx.1.dylib (compatibility version 3.0.0, current version 3.3.0)
</span><br>
<span class="quotelev2">&gt;&gt; /Users/meredithk/tools/openmpi-1.7.3-noenv/lib/libmpi.1.dylib (compatibility version 4.0.0, current version 4.0.0)
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib/libc++.1.dylib (compatibility version 1.0.0, current version 120.0.0)
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib/libSystem.B.dylib (compatibility version 1.0.0, current version 1197.1.1)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; bash-4.2$ mpirun -n 5 hostname
</span><br>
<span class="quotelev2">&gt;&gt; meredithk-mac.corp.fmglobal.com&lt;<a href="http://meredithk-mac.corp.fmglobal.com">http://meredithk-mac.corp.fmglobal.com</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; meredithk-mac.corp.fmglobal.com&lt;<a href="http://meredithk-mac.corp.fmglobal.com">http://meredithk-mac.corp.fmglobal.com</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; meredithk-mac.corp.fmglobal.com&lt;<a href="http://meredithk-mac.corp.fmglobal.com">http://meredithk-mac.corp.fmglobal.com</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; meredithk-mac.corp.fmglobal.com&lt;<a href="http://meredithk-mac.corp.fmglobal.com">http://meredithk-mac.corp.fmglobal.com</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; meredithk-mac.corp.fmglobal.com&lt;<a href="http://meredithk-mac.corp.fmglobal.com">http://meredithk-mac.corp.fmglobal.com</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; bash-4.2$ echo $PATH
</span><br>
<span class="quotelev2">&gt;&gt; /Users/meredithk/tools/openmpi-1.7.3-noenv/bin:/usr/bin:/bin:/usr/sbin:/sbin
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; bash-4.2$ echo $LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt;&gt; /Users/meredithk/tools/openmpi-1.7.3-noenv/lib:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; bash-4.2$ echo $DYLD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt;&gt; /Users/meredithk/tools/openmpi-1.7.3-noenv/lib:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; bash-4.2$ ls /Users/meredithk/tools/openmpi-1.7.3-noenv/lib/
</span><br>
<span class="quotelev2">&gt;&gt; libmca_common_sm.4.dylib libmpi_cxx.1.dylib libopen-pal.6.dylib libopen-trace-format.1.dylib libotfaux.dylib libvt-mpi-unify.0.dylib libvt-mpi.dylib libvt.0.dylib
</span><br>
<span class="quotelev2">&gt;&gt; libmca_common_sm.dylib libmpi_cxx.dylib libopen-pal.dylib libopen-trace-format.a libotfaux.la libvt-mpi-unify.a libvt-mpi.la libvt.a
</span><br>
<span class="quotelev2">&gt;&gt; libmca_common_sm.la libmpi_cxx.la libopen-pal.la libopen-trace-format.dylib libvt-hyb.0.dylib libvt-mpi-unify.dylib libvt-mt.0.dylib libvt.dylib
</span><br>
<span class="quotelev2">&gt;&gt; libmpi.1.dylib libompitrace.0.dylib libopen-rte.6.dylib libopen-trace-format.la libvt-hyb.a libvt-mpi-unify.la libvt-mt.a libvt.la
</span><br>
<span class="quotelev2">&gt;&gt; libmpi.dylib libompitrace.dylib libopen-rte.dylib libotfaux.0.dylib libvt-hyb.dylib libvt-mpi.0.dylib libvt-mt.dylib openmpi
</span><br>
<span class="quotelev2">&gt;&gt; libmpi.la libompitrace.la libopen-rte.la libotfaux.a libvt-hyb.la libvt-mpi.a libvt-mt.la pkgconfig
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; bash-4.2$ otool -L /Users/meredithk/tools/openmpi-1.7.3-noenv/lib/libmpi_cxx.dylib
</span><br>
<span class="quotelev2">&gt;&gt; /Users/meredithk/tools/openmpi-1.7.3-noenv/lib/libmpi_cxx.dylib:
</span><br>
<span class="quotelev2">&gt;&gt; /Users/meredithk/tools/openmpi-1.7.3-noenv/lib/libmpi_cxx.1.dylib (compatibility version 3.0.0, current version 3.3.0)
</span><br>
<span class="quotelev2">&gt;&gt; /Users/meredithk/tools/openmpi-1.7.3-noenv/lib/libmpi.1.dylib (compatibility version 4.0.0, current version 4.0.0)
</span><br>
<span class="quotelev2">&gt;&gt; /Users/meredithk/tools/openmpi-1.7.3-noenv/lib/libopen-rte.6.dylib (compatibility version 7.0.0, current version 7.0.0)
</span><br>
<span class="quotelev2">&gt;&gt; /Users/meredithk/tools/openmpi-1.7.3-noenv/lib/libopen-pal.6.dylib (compatibility version 7.0.0, current version 7.0.0)
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib/libSystem.B.dylib (compatibility version 1.0.0, current version 1197.1.1)
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib/libc++.1.dylib (compatibility version 1.0.0, current version 120.0.0)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 27, 2013, at 9:41 AM, Meredith, Karl &lt;karl.meredith_at_[hidden]&lt;mailto:karl.meredith_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I&#146;m pretty sure it is using the correct g++
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ )which g++
</span><br>
<span class="quotelev2">&gt;&gt; /opt/local/bin/g++
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ )echo $PATH
</span><br>
<span class="quotelev2">&gt;&gt; /Users/meredithk/tools/openmpi/bin:/opt/local/bin:/opt/local/sbin:/Users/meredithk/tools/bin:/Users/meredithk/OpenFOAM/fireFoam-2.2.x/scripts:/Users/meredithk/OpenFOAM/ThirdParty-2.2.x/platforms/darwinIntel64Gcc46/gperftools-svn/bin:/Applications/paraview.app/Contents/bin:/Users/meredithk/OpenFOAM/ThirdParty-2.2.x/platforms/darwinIntel64Gcc46/paraview-3.12.0/bin:/Users/meredithk/OpenFOAM/meredithk-2.2.x/platforms/darwinIntel64Gcc46DPOpt/bin:/Users/meredithk/OpenFOAM/site/2.2.x/platforms/darwinIntel64Gcc46DPOpt/bin:/Users/meredithk/OpenFOAM/OpenFOAM-2.2.x/platforms/darwinIntel64Gcc46DPOpt/bin:/Users/meredithk/OpenFOAM/OpenFOAM-2.2.x/bin:/Users/meredithk/OpenFOAM/OpenFOAM-2.2.x/wmake:/Developer/usr/bin:/usr/bin:/bin:/usr/sbin:/sbin
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ )g++ --version
</span><br>
<span class="quotelev2">&gt;&gt; g++ (MacPorts gcc46 4.6.4_3) 4.6.4
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Karl
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 27, 2013, at 3:23 AM, Iliev, Hristo &lt;Iliev_at_[hidden]&lt;mailto:Iliev_at_[hidden]&gt;&lt;mailto:Iliev_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Karl,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The Xcode command-line tools provide a g++ command that is effectively
</span><br>
<span class="quotelev2">&gt;&gt; clang++. Since mpic++ invokes g++ without the full path to it, it might pick
</span><br>
<span class="quotelev2">&gt;&gt; the wrong g++. Make sure that /opt/local/bin is the first item in your
</span><br>
<span class="quotelev2">&gt;&gt; $PATH.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hristo
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Hristo Iliev, PhD - High Performance Computing Team / JARA-HPC
</span><br>
<span class="quotelev2">&gt;&gt; RWTH Aachen University, Center for Computing and Communication
</span><br>
<span class="quotelev2">&gt;&gt; Rechen- und Kommunikationszentrum der RWTH Aachen
</span><br>
<span class="quotelev2">&gt;&gt; Seffenter Weg 23, D-52074 Aachen (Germany)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Meredith,
</span><br>
<span class="quotelev2">&gt;&gt; Karl
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Tuesday, November 26, 2013 9:33 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here are the results of those two commands:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ )mpic++ -show
</span><br>
<span class="quotelev2">&gt;&gt; g++ -I/Users/meredithk/tools/openmpi/include -
</span><br>
<span class="quotelev2">&gt;&gt; L/Users/meredithk/tools/openmpi/lib -lmpi_cxx -lmpi -lm
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ )otool -L /Users/meredithk/tools/openmpi/lib/libmpi_cxx.dylib
</span><br>
<span class="quotelev2">&gt;&gt; /Users/meredithk/tools/openmpi/lib/libmpi_cxx.dylib:
</span><br>
<span class="quotelev2">&gt;&gt; /Users/meredithk/tools/openmpi/lib/libmpi_cxx.1.dylib
</span><br>
<span class="quotelev2">&gt;&gt; (compatibility version 2.0.0, current version 2.2.0)
</span><br>
<span class="quotelev2">&gt;&gt; /Users/meredithk/tools/openmpi/lib/libmpi.1.dylib (compatibility
</span><br>
<span class="quotelev2">&gt;&gt; version 2.0.0, current version 2.8.0)
</span><br>
<span class="quotelev2">&gt;&gt; /opt/local/lib/libgcc/libstdc++.6.dylib (compatibility version
</span><br>
<span class="quotelev2">&gt;&gt; 7.0.0,
</span><br>
<span class="quotelev2">&gt;&gt; current version 7.18.0)
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib/libSystem.B.dylib (compatibility version 1.0.0, current
</span><br>
<span class="quotelev2">&gt;&gt; version
</span><br>
<span class="quotelev2">&gt;&gt; 1197.1.1)
</span><br>
<span class="quotelev2">&gt;&gt; /opt/local/lib/libgcc/libgcc_s.1.dylib (compatibility version 1.0.0,
</span><br>
<span class="quotelev2">&gt;&gt; current version 1.0.0)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It looks like libstdc++ is being used and g++ is being used.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Karl
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 25, 2013, at 6:56 PM, Pierre Jolivet &lt;jolivet_at_[hidden]&lt;mailto:jolivet_at_[hidden]&gt;&lt;mailto:jolivet_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Karl,
</span><br>
<span class="quotelev2">&gt;&gt; What does &quot;mpic++ -show&quot; returns ? It is possible that you are
</span><br>
<span class="quotelev2">&gt;&gt; compiling/linking with &quot;c++&quot;, which will defaults to clang++, while you
</span><br>
<span class="quotelev2">&gt;&gt; compiled OpenMPI with g++.
</span><br>
<span class="quotelev2">&gt;&gt; Since libstdc++ and libc++ have incompatible ABI, that might be why you
</span><br>
<span class="quotelev2">&gt;&gt; are getting a wrong behavior.
</span><br>
<span class="quotelev2">&gt;&gt; Also, it could be worthwhile to have a look at &quot;otool -L
</span><br>
<span class="quotelev2">&gt;&gt; /Users/meredithk/tools/openmpi/lib/libmpi_cxx.dylib&quot;
</span><br>
<span class="quotelev2">&gt;&gt; Pierre
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 25, 2013, at 7:38 AM, Meredith, Karl
</span><br>
<span class="quotelev2">&gt;&gt; &lt;karl.meredith_at_[hidden]&lt;mailto:karl.meredith_at_[hidden]&gt;&lt;mailto:karl.meredith_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I do have DYLD_LIBRARY_PATH set as well, and I get the same problem:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; DYLD_LIBRARY_PATH=/Users/meredithk/tools/openmpi/lib
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here's the directory listing of /Users/meredithk/tools/openmpi/lib
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ )ls -1
</span><br>
<span class="quotelev2">&gt;&gt; libmca_common_sm.3.dylib*
</span><br>
<span class="quotelev2">&gt;&gt; libmca_common_sm.dylib@
</span><br>
<span class="quotelev2">&gt;&gt; libmca_common_sm.la*
</span><br>
<span class="quotelev2">&gt;&gt; libmpi.1.dylib*
</span><br>
<span class="quotelev2">&gt;&gt; libmpi.dylib@
</span><br>
<span class="quotelev2">&gt;&gt; libmpi.la*
</span><br>
<span class="quotelev2">&gt;&gt; libmpi_cxx.1.dylib*
</span><br>
<span class="quotelev2">&gt;&gt; libmpi_cxx.dylib@
</span><br>
<span class="quotelev2">&gt;&gt; libmpi_cxx.la*
</span><br>
<span class="quotelev2">&gt;&gt; libmpi_f77.1.dylib*
</span><br>
<span class="quotelev2">&gt;&gt; libmpi_f77.dylib@
</span><br>
<span class="quotelev2">&gt;&gt; libmpi_f77.la*
</span><br>
<span class="quotelev2">&gt;&gt; libmpi_f90.a
</span><br>
<span class="quotelev2">&gt;&gt; libmpi_f90.la*
</span><br>
<span class="quotelev2">&gt;&gt; libompitrace.0.dylib*
</span><br>
<span class="quotelev2">&gt;&gt; libompitrace.dylib@
</span><br>
<span class="quotelev2">&gt;&gt; libompitrace.la*
</span><br>
<span class="quotelev2">&gt;&gt; libopen-pal.4.dylib*
</span><br>
<span class="quotelev2">&gt;&gt; libopen-pal.dylib@
</span><br>
<span class="quotelev2">&gt;&gt; libopen-pal.la*
</span><br>
<span class="quotelev2">&gt;&gt; libopen-rte.4.dylib*
</span><br>
<span class="quotelev2">&gt;&gt; libopen-rte.dylib@
</span><br>
<span class="quotelev2">&gt;&gt; libopen-rte.la*
</span><br>
<span class="quotelev2">&gt;&gt; libopen-trace-format.1.dylib*
</span><br>
<span class="quotelev2">&gt;&gt; libopen-trace-format.a
</span><br>
<span class="quotelev2">&gt;&gt; libopen-trace-format.dylib@
</span><br>
<span class="quotelev2">&gt;&gt; libopen-trace-format.la*
</span><br>
<span class="quotelev2">&gt;&gt; libotfaux.0.dylib*
</span><br>
<span class="quotelev2">&gt;&gt; libotfaux.a
</span><br>
<span class="quotelev2">&gt;&gt; libotfaux.dylib@
</span><br>
<span class="quotelev2">&gt;&gt; libotfaux.la*
</span><br>
<span class="quotelev2">&gt;&gt; libvt-hyb.0.dylib*
</span><br>
<span class="quotelev2">&gt;&gt; libvt-hyb.a
</span><br>
<span class="quotelev2">&gt;&gt; libvt-hyb.dylib@
</span><br>
<span class="quotelev2">&gt;&gt; libvt-hyb.la*
</span><br>
<span class="quotelev2">&gt;&gt; libvt-mpi-unify.0.dylib*
</span><br>
<span class="quotelev2">&gt;&gt; libvt-mpi-unify.a
</span><br>
<span class="quotelev2">&gt;&gt; libvt-mpi-unify.dylib@
</span><br>
<span class="quotelev2">&gt;&gt; libvt-mpi-unify.la*
</span><br>
<span class="quotelev2">&gt;&gt; libvt-mpi.0.dylib*
</span><br>
<span class="quotelev2">&gt;&gt; libvt-mpi.a
</span><br>
<span class="quotelev2">&gt;&gt; libvt-mpi.dylib@
</span><br>
<span class="quotelev2">&gt;&gt; libvt-mpi.la*
</span><br>
<span class="quotelev2">&gt;&gt; libvt-mt.0.dylib*
</span><br>
<span class="quotelev2">&gt;&gt; libvt-mt.a
</span><br>
<span class="quotelev2">&gt;&gt; libvt-mt.dylib@
</span><br>
<span class="quotelev2">&gt;&gt; libvt-mt.la*
</span><br>
<span class="quotelev2">&gt;&gt; libvt-pomp.a
</span><br>
<span class="quotelev2">&gt;&gt; libvt-pomp.la*
</span><br>
<span class="quotelev2">&gt;&gt; libvt.0.dylib*
</span><br>
<span class="quotelev2">&gt;&gt; libvt.a
</span><br>
<span class="quotelev2">&gt;&gt; libvt.dylib@
</span><br>
<span class="quotelev2">&gt;&gt; libvt.la*
</span><br>
<span class="quotelev2">&gt;&gt; mpi.mod*
</span><br>
<span class="quotelev2">&gt;&gt; openmpi/
</span><br>
<span class="quotelev2">&gt;&gt; pkgconfig/
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't notice anything out of ordinary.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Karl
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 25, 2013, at 8:31 AM, Reuti &lt;reuti_at_[hidden]&lt;mailto:reuti_at_[hidden]&gt;&lt;mailto:reuti_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Am 25.11.2013 um 14:25 schrieb Meredith, Karl:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I do have these two environment variables set:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; LD_LIBRARY_PATH=/Users/meredithk/tools/openmpi/lib
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On a Mac it should DYLD_LIBRARY_PATH - and there are *.dylib files in
</span><br>
<span class="quotelev2">&gt;&gt; your /Users/meredithk/tools/openmpi/lib?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- Reuti
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; PATH=/Users/meredithk/tools/openmpi/bin
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Running mpirun seems to work fine with a simple command, like
</span><br>
<span class="quotelev2">&gt;&gt; hostname:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ )mpirun -n 2 hostname
</span><br>
<span class="quotelev2">&gt;&gt; meredithk-mac.corp.fmglobal.com&lt;<a href="http://meredithk-mac.corp.fmglobal.com/">http://meredithk-mac.corp.fmglobal.com/</a>&gt;&lt;<a href="http://meredithk-mac.corp.fmglobal.com<http://meredithk-mac.corp.fmglobal.com/">http://meredithk-mac.corp.fmglobal.com<http://meredithk-mac.corp.fmglobal.com/</a>&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; meredithk-mac.corp.fmglobal.com&lt;<a href="http://meredithk-mac.corp.fmglobal.com/">http://meredithk-mac.corp.fmglobal.com/</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am trying to run the simple hello_cxx example from the openmpi
</span><br>
<span class="quotelev2">&gt;&gt; distribution, compiled as such:
</span><br>
<span class="quotelev2">&gt;&gt; mpic++ -g    hello_cxx.cc   -o hello_cxx
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It compiles fine, without warning or error.  However, when I go to
</span><br>
<span class="quotelev2">&gt;&gt; run
</span><br>
<span class="quotelev2">&gt;&gt; the example, it stalls on the MPI::Init() command:
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 1 hello_cxx
</span><br>
<span class="quotelev2">&gt;&gt; It never errors out or crashes.  It simply hangs.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am using the same mpic++ and mpirun version:
</span><br>
<span class="quotelev2">&gt;&gt; $ )which mpirun
</span><br>
<span class="quotelev2">&gt;&gt; /Users/meredithk/tools/openmpi/bin/mpirun
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ )which mpic++
</span><br>
<span class="quotelev2">&gt;&gt; /Users/meredithk/tools/openmpi/bin/mpic++
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Not quite sure what else to check.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Karl
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 23, 2013, at 5:29 PM, Ralph Castain &lt;rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&lt;mailto:rhc_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Strange - I run on Mavericks now without problem. Can you run
</span><br>
<span class="quotelev2">&gt;&gt; &quot;mpirun -n 1 hostname&quot;?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You also might want to check your PATH and LD_LIBRARY_PATH to
</span><br>
<span class="quotelev2">&gt;&gt; ensure you have the prefix where you installed OMPI 1.6.5 at the front.
</span><br>
<span class="quotelev2">&gt;&gt; Mac
</span><br>
<span class="quotelev2">&gt;&gt; distributes a very old version of OMPI with its software and you don't
</span><br>
<span class="quotelev2">&gt;&gt; want
</span><br>
<span class="quotelev2">&gt;&gt; to pick it up by mistake.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 22, 2013, at 1:45 PM, Meredith, Karl
</span><br>
<span class="quotelev2">&gt;&gt; &lt;karl.meredith_at_[hidden]&lt;mailto:karl.meredith_at_[hidden]&gt;&lt;mailto:karl.meredith_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I recently upgraded my 2013 Macbook Pro (Retina display) from 10.8
</span><br>
<span class="quotelev2">&gt;&gt; to 10.9.  I downloaded and installed openmpi-1.6.5 and compiled it with
</span><br>
<span class="quotelev2">&gt;&gt; gcc
</span><br>
<span class="quotelev2">&gt;&gt; 4.8 (gcc installed from macports).
</span><br>
<span class="quotelev2">&gt;&gt; openmpi compiled and installed without error.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, when I try to run any of the example test cases, the code
</span><br>
<span class="quotelev2">&gt;&gt; gets stuck inside the first MPI::Init() call and never returns.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any thoughts on what might be going wrong?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The same install on OS 10.8 works fine and the example test cases
</span><br>
<span class="quotelev2">&gt;&gt; run without error.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Karl
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; &lt;smime.p7s&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; &lt;ATT00001&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="23096.php">George Bosilca: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>Previous message:</strong> <a href="23094.php">Nathan Hjelm: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>In reply to:</strong> <a href="23094.php">Nathan Hjelm: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23096.php">George Bosilca: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>Reply:</strong> <a href="23096.php">George Bosilca: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
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
