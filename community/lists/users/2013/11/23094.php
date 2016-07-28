<?
$subject_val = "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 27 11:51:33 2013" -->
<!-- isoreceived="20131127165133" -->
<!-- sent="Wed, 27 Nov 2013 09:51:32 -0700" -->
<!-- isosent="20131127165132" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)" -->
<!-- id="20131127165132.GJ55796_at_pn1246003.lanl.gov" -->
<!-- charset="utf-8" -->
<!-- inreplyto="3342D0F7-890D-4DB1-898C-96B7952CCA47_at_fmglobal.com" -->
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
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-27 11:51:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23095.php">Meredith, Karl: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>Previous message:</strong> <a href="23093.php">Meredith, Karl: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>In reply to:</strong> <a href="23093.php">Meredith, Karl: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23095.php">Meredith, Karl: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>Reply:</strong> <a href="23095.php">Meredith, Karl: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Been running on Mavericks all summer with no issues. I do not use the C++ interface
<br>
though (C++ bindings were removed from the MPI standard in 3.0.) Can you try a C
<br>
example and see if that works?
<br>
<p>-Nathan Hjelm
<br>
Application Readiness, HPC-5, LANL
<br>
<p>On Wed, Nov 27, 2013 at 11:43:05AM -0500, Meredith, Karl wrote:
<br>
<span class="quotelev1">&gt; Okay, in order to try and track down this problem I have done a fresh install of OpenMPI-1.7.3 on Mac OS 10.9 (Mavericks).  I am using the Apple compilers, and not using anything from macports.  The code compiles fine, but when running the examples for openmpi-1.7.3, the code hangs in MPI::Init() and never returns.  No error message.  No warning.  It just hangs.  If I compile in debug mode and do a stack trace, it shows that it is stalled inside of MPI::Init() every time.  Has anyone been able to successfully get openmpi working on 10.9?  If so, what, if anything, are you doing differently?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is how I installed openmpi:
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=$HOME/tools/openmpi-1.7.3
</span><br>
<span class="quotelev1">&gt; make
</span><br>
<span class="quotelev1">&gt; make install
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here are my settings, environment variables, compilers, etc:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; bash-4.2$ which g++
</span><br>
<span class="quotelev1">&gt; /usr/bin/g++
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; bash-4.2$ which gcc
</span><br>
<span class="quotelev1">&gt; /usr/bin/gcc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; bash-4.2$ which clang
</span><br>
<span class="quotelev1">&gt; /usr/bin/clang
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; bash-4.2$ g++ --version
</span><br>
<span class="quotelev1">&gt; Configured with: --prefix=/Applications/Xcode.app/Contents/Developer/usr --with-gxx-include-dir=/usr/include/c++/4.2.1
</span><br>
<span class="quotelev1">&gt; Apple LLVM version 5.0 (clang-500.2.79) (based on LLVM 3.3svn)
</span><br>
<span class="quotelev1">&gt; Target: x86_64-apple-darwin13.0.0
</span><br>
<span class="quotelev1">&gt; Thread model: posix
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; bash-4.2$ gcc --version
</span><br>
<span class="quotelev1">&gt; Configured with: --prefix=/Applications/Xcode.app/Contents/Developer/usr --with-gxx-include-dir=/usr/include/c++/4.2.1
</span><br>
<span class="quotelev1">&gt; Apple LLVM version 5.0 (clang-500.2.79) (based on LLVM 3.3svn)
</span><br>
<span class="quotelev1">&gt; Target: x86_64-apple-darwin13.0.0
</span><br>
<span class="quotelev1">&gt; Thread model: posix
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; bash-4.2$ which mpicc
</span><br>
<span class="quotelev1">&gt; /Users/meredithk/tools/openmpi-1.7.3-noenv/bin/mpicc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; bash-4.2$ which mpic++
</span><br>
<span class="quotelev1">&gt; /Users/meredithk/tools/openmpi-1.7.3-noenv/bin/mpic++
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; bash-4.2$ which mpirun
</span><br>
<span class="quotelev1">&gt; /Users/meredithk/tools/openmpi-1.7.3-noenv/bin/mpirun
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; bash-4.2$ mpicc -show
</span><br>
<span class="quotelev1">&gt; gcc -I/Users/meredithk/tools/openmpi-1.7.3-noenv/include -L/Users/meredithk/tools/openmpi-1.7.3-noenv/lib -lmpi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; bash-4.2$ mpic++ -show
</span><br>
<span class="quotelev1">&gt; g++ -I/Users/meredithk/tools/openmpi-1.7.3-noenv/include -L/Users/meredithk/tools/openmpi-1.7.3-noenv/lib -lmpi_cxx -lmpi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; bash-4.2$ pwd
</span><br>
<span class="quotelev1">&gt; /Users/meredithk/tools/openmpi-1.7.3-src
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; bash-4.2$ otool -L hello_cxx
</span><br>
<span class="quotelev1">&gt; hello_cxx:
</span><br>
<span class="quotelev1">&gt; /Users/meredithk/tools/openmpi-1.7.3-noenv/lib/libmpi_cxx.1.dylib (compatibility version 3.0.0, current version 3.3.0)
</span><br>
<span class="quotelev1">&gt; /Users/meredithk/tools/openmpi-1.7.3-noenv/lib/libmpi.1.dylib (compatibility version 4.0.0, current version 4.0.0)
</span><br>
<span class="quotelev1">&gt; /usr/lib/libc++.1.dylib (compatibility version 1.0.0, current version 120.0.0)
</span><br>
<span class="quotelev1">&gt; /usr/lib/libSystem.B.dylib (compatibility version 1.0.0, current version 1197.1.1)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; bash-4.2$ mpirun -n 5 hostname
</span><br>
<span class="quotelev1">&gt; meredithk-mac.corp.fmglobal.com&lt;<a href="http://meredithk-mac.corp.fmglobal.com">http://meredithk-mac.corp.fmglobal.com</a>&gt;
</span><br>
<span class="quotelev1">&gt; meredithk-mac.corp.fmglobal.com&lt;<a href="http://meredithk-mac.corp.fmglobal.com">http://meredithk-mac.corp.fmglobal.com</a>&gt;
</span><br>
<span class="quotelev1">&gt; meredithk-mac.corp.fmglobal.com&lt;<a href="http://meredithk-mac.corp.fmglobal.com">http://meredithk-mac.corp.fmglobal.com</a>&gt;
</span><br>
<span class="quotelev1">&gt; meredithk-mac.corp.fmglobal.com&lt;<a href="http://meredithk-mac.corp.fmglobal.com">http://meredithk-mac.corp.fmglobal.com</a>&gt;
</span><br>
<span class="quotelev1">&gt; meredithk-mac.corp.fmglobal.com&lt;<a href="http://meredithk-mac.corp.fmglobal.com">http://meredithk-mac.corp.fmglobal.com</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; bash-4.2$ echo $PATH
</span><br>
<span class="quotelev1">&gt; /Users/meredithk/tools/openmpi-1.7.3-noenv/bin:/usr/bin:/bin:/usr/sbin:/sbin
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; bash-4.2$ echo $LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; /Users/meredithk/tools/openmpi-1.7.3-noenv/lib:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; bash-4.2$ echo $DYLD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; /Users/meredithk/tools/openmpi-1.7.3-noenv/lib:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; bash-4.2$ ls /Users/meredithk/tools/openmpi-1.7.3-noenv/lib/
</span><br>
<span class="quotelev1">&gt; libmca_common_sm.4.dylib libmpi_cxx.1.dylib libopen-pal.6.dylib libopen-trace-format.1.dylib libotfaux.dylib libvt-mpi-unify.0.dylib libvt-mpi.dylib libvt.0.dylib
</span><br>
<span class="quotelev1">&gt; libmca_common_sm.dylib libmpi_cxx.dylib libopen-pal.dylib libopen-trace-format.a libotfaux.la libvt-mpi-unify.a libvt-mpi.la libvt.a
</span><br>
<span class="quotelev1">&gt; libmca_common_sm.la libmpi_cxx.la libopen-pal.la libopen-trace-format.dylib libvt-hyb.0.dylib libvt-mpi-unify.dylib libvt-mt.0.dylib libvt.dylib
</span><br>
<span class="quotelev1">&gt; libmpi.1.dylib libompitrace.0.dylib libopen-rte.6.dylib libopen-trace-format.la libvt-hyb.a libvt-mpi-unify.la libvt-mt.a libvt.la
</span><br>
<span class="quotelev1">&gt; libmpi.dylib libompitrace.dylib libopen-rte.dylib libotfaux.0.dylib libvt-hyb.dylib libvt-mpi.0.dylib libvt-mt.dylib openmpi
</span><br>
<span class="quotelev1">&gt; libmpi.la libompitrace.la libopen-rte.la libotfaux.a libvt-hyb.la libvt-mpi.a libvt-mt.la pkgconfig
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; bash-4.2$ otool -L /Users/meredithk/tools/openmpi-1.7.3-noenv/lib/libmpi_cxx.dylib
</span><br>
<span class="quotelev1">&gt; /Users/meredithk/tools/openmpi-1.7.3-noenv/lib/libmpi_cxx.dylib:
</span><br>
<span class="quotelev1">&gt; /Users/meredithk/tools/openmpi-1.7.3-noenv/lib/libmpi_cxx.1.dylib (compatibility version 3.0.0, current version 3.3.0)
</span><br>
<span class="quotelev1">&gt; /Users/meredithk/tools/openmpi-1.7.3-noenv/lib/libmpi.1.dylib (compatibility version 4.0.0, current version 4.0.0)
</span><br>
<span class="quotelev1">&gt; /Users/meredithk/tools/openmpi-1.7.3-noenv/lib/libopen-rte.6.dylib (compatibility version 7.0.0, current version 7.0.0)
</span><br>
<span class="quotelev1">&gt; /Users/meredithk/tools/openmpi-1.7.3-noenv/lib/libopen-pal.6.dylib (compatibility version 7.0.0, current version 7.0.0)
</span><br>
<span class="quotelev1">&gt; /usr/lib/libSystem.B.dylib (compatibility version 1.0.0, current version 1197.1.1)
</span><br>
<span class="quotelev1">&gt; /usr/lib/libc++.1.dylib (compatibility version 1.0.0, current version 120.0.0)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 27, 2013, at 9:41 AM, Meredith, Karl &lt;karl.meredith_at_[hidden]&lt;mailto:karl.meredith_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I&#226;&#128;&#153;m pretty sure it is using the correct g++
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ )which g++
</span><br>
<span class="quotelev1">&gt; /opt/local/bin/g++
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ )echo $PATH
</span><br>
<span class="quotelev1">&gt; /Users/meredithk/tools/openmpi/bin:/opt/local/bin:/opt/local/sbin:/Users/meredithk/tools/bin:/Users/meredithk/OpenFOAM/fireFoam-2.2.x/scripts:/Users/meredithk/OpenFOAM/ThirdParty-2.2.x/platforms/darwinIntel64Gcc46/gperftools-svn/bin:/Applications/paraview.app/Contents/bin:/Users/meredithk/OpenFOAM/ThirdParty-2.2.x/platforms/darwinIntel64Gcc46/paraview-3.12.0/bin:/Users/meredithk/OpenFOAM/meredithk-2.2.x/platforms/darwinIntel64Gcc46DPOpt/bin:/Users/meredithk/OpenFOAM/site/2.2.x/platforms/darwinIntel64Gcc46DPOpt/bin:/Users/meredithk/OpenFOAM/OpenFOAM-2.2.x/platforms/darwinIntel64Gcc46DPOpt/bin:/Users/meredithk/OpenFOAM/OpenFOAM-2.2.x/bin:/Users/meredithk/OpenFOAM/OpenFOAM-2.2.x/wmake:/Developer/usr/bin:/usr/bin:/bin:/usr/sbin:/sbin
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ )g++ --version
</span><br>
<span class="quotelev1">&gt; g++ (MacPorts gcc46 4.6.4_3) 4.6.4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Karl
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 27, 2013, at 3:23 AM, Iliev, Hristo &lt;Iliev_at_[hidden]&lt;mailto:Iliev_at_[hidden]&gt;&lt;mailto:Iliev_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Karl,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The Xcode command-line tools provide a g++ command that is effectively
</span><br>
<span class="quotelev1">&gt; clang++. Since mpic++ invokes g++ without the full path to it, it might pick
</span><br>
<span class="quotelev1">&gt; the wrong g++. Make sure that /opt/local/bin is the first item in your
</span><br>
<span class="quotelev1">&gt; $PATH.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hristo
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Hristo Iliev, PhD - High Performance Computing Team / JARA-HPC
</span><br>
<span class="quotelev1">&gt; RWTH Aachen University, Center for Computing and Communication
</span><br>
<span class="quotelev1">&gt; Rechen- und Kommunikationszentrum der RWTH Aachen
</span><br>
<span class="quotelev1">&gt; Seffenter Weg 23, D-52074 Aachen (Germany)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Meredith,
</span><br>
<span class="quotelev1">&gt; Karl
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, November 26, 2013 9:33 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here are the results of those two commands:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ )mpic++ -show
</span><br>
<span class="quotelev1">&gt; g++ -I/Users/meredithk/tools/openmpi/include -
</span><br>
<span class="quotelev1">&gt; L/Users/meredithk/tools/openmpi/lib -lmpi_cxx -lmpi -lm
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ )otool -L /Users/meredithk/tools/openmpi/lib/libmpi_cxx.dylib
</span><br>
<span class="quotelev1">&gt; /Users/meredithk/tools/openmpi/lib/libmpi_cxx.dylib:
</span><br>
<span class="quotelev1">&gt; /Users/meredithk/tools/openmpi/lib/libmpi_cxx.1.dylib
</span><br>
<span class="quotelev1">&gt; (compatibility version 2.0.0, current version 2.2.0)
</span><br>
<span class="quotelev1">&gt; /Users/meredithk/tools/openmpi/lib/libmpi.1.dylib (compatibility
</span><br>
<span class="quotelev1">&gt; version 2.0.0, current version 2.8.0)
</span><br>
<span class="quotelev1">&gt; /opt/local/lib/libgcc/libstdc++.6.dylib (compatibility version
</span><br>
<span class="quotelev1">&gt; 7.0.0,
</span><br>
<span class="quotelev1">&gt; current version 7.18.0)
</span><br>
<span class="quotelev1">&gt; /usr/lib/libSystem.B.dylib (compatibility version 1.0.0, current
</span><br>
<span class="quotelev1">&gt; version
</span><br>
<span class="quotelev1">&gt; 1197.1.1)
</span><br>
<span class="quotelev1">&gt; /opt/local/lib/libgcc/libgcc_s.1.dylib (compatibility version 1.0.0,
</span><br>
<span class="quotelev1">&gt; current version 1.0.0)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It looks like libstdc++ is being used and g++ is being used.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Karl
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 25, 2013, at 6:56 PM, Pierre Jolivet &lt;jolivet_at_[hidden]&lt;mailto:jolivet_at_[hidden]&gt;&lt;mailto:jolivet_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Karl,
</span><br>
<span class="quotelev1">&gt; What does &quot;mpic++ -show&quot; returns ? It is possible that you are
</span><br>
<span class="quotelev1">&gt; compiling/linking with &quot;c++&quot;, which will defaults to clang++, while you
</span><br>
<span class="quotelev1">&gt; compiled OpenMPI with g++.
</span><br>
<span class="quotelev1">&gt; Since libstdc++ and libc++ have incompatible ABI, that might be why you
</span><br>
<span class="quotelev1">&gt; are getting a wrong behavior.
</span><br>
<span class="quotelev1">&gt; Also, it could be worthwhile to have a look at &quot;otool -L
</span><br>
<span class="quotelev1">&gt; /Users/meredithk/tools/openmpi/lib/libmpi_cxx.dylib&quot;
</span><br>
<span class="quotelev1">&gt; Pierre
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 25, 2013, at 7:38 AM, Meredith, Karl
</span><br>
<span class="quotelev1">&gt; &lt;karl.meredith_at_[hidden]&lt;mailto:karl.meredith_at_[hidden]&gt;&lt;mailto:karl.meredith_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I do have DYLD_LIBRARY_PATH set as well, and I get the same problem:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; DYLD_LIBRARY_PATH=/Users/meredithk/tools/openmpi/lib
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here's the directory listing of /Users/meredithk/tools/openmpi/lib
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ )ls -1
</span><br>
<span class="quotelev1">&gt; libmca_common_sm.3.dylib*
</span><br>
<span class="quotelev1">&gt; libmca_common_sm.dylib@
</span><br>
<span class="quotelev1">&gt; libmca_common_sm.la*
</span><br>
<span class="quotelev1">&gt; libmpi.1.dylib*
</span><br>
<span class="quotelev1">&gt; libmpi.dylib@
</span><br>
<span class="quotelev1">&gt; libmpi.la*
</span><br>
<span class="quotelev1">&gt; libmpi_cxx.1.dylib*
</span><br>
<span class="quotelev1">&gt; libmpi_cxx.dylib@
</span><br>
<span class="quotelev1">&gt; libmpi_cxx.la*
</span><br>
<span class="quotelev1">&gt; libmpi_f77.1.dylib*
</span><br>
<span class="quotelev1">&gt; libmpi_f77.dylib@
</span><br>
<span class="quotelev1">&gt; libmpi_f77.la*
</span><br>
<span class="quotelev1">&gt; libmpi_f90.a
</span><br>
<span class="quotelev1">&gt; libmpi_f90.la*
</span><br>
<span class="quotelev1">&gt; libompitrace.0.dylib*
</span><br>
<span class="quotelev1">&gt; libompitrace.dylib@
</span><br>
<span class="quotelev1">&gt; libompitrace.la*
</span><br>
<span class="quotelev1">&gt; libopen-pal.4.dylib*
</span><br>
<span class="quotelev1">&gt; libopen-pal.dylib@
</span><br>
<span class="quotelev1">&gt; libopen-pal.la*
</span><br>
<span class="quotelev1">&gt; libopen-rte.4.dylib*
</span><br>
<span class="quotelev1">&gt; libopen-rte.dylib@
</span><br>
<span class="quotelev1">&gt; libopen-rte.la*
</span><br>
<span class="quotelev1">&gt; libopen-trace-format.1.dylib*
</span><br>
<span class="quotelev1">&gt; libopen-trace-format.a
</span><br>
<span class="quotelev1">&gt; libopen-trace-format.dylib@
</span><br>
<span class="quotelev1">&gt; libopen-trace-format.la*
</span><br>
<span class="quotelev1">&gt; libotfaux.0.dylib*
</span><br>
<span class="quotelev1">&gt; libotfaux.a
</span><br>
<span class="quotelev1">&gt; libotfaux.dylib@
</span><br>
<span class="quotelev1">&gt; libotfaux.la*
</span><br>
<span class="quotelev1">&gt; libvt-hyb.0.dylib*
</span><br>
<span class="quotelev1">&gt; libvt-hyb.a
</span><br>
<span class="quotelev1">&gt; libvt-hyb.dylib@
</span><br>
<span class="quotelev1">&gt; libvt-hyb.la*
</span><br>
<span class="quotelev1">&gt; libvt-mpi-unify.0.dylib*
</span><br>
<span class="quotelev1">&gt; libvt-mpi-unify.a
</span><br>
<span class="quotelev1">&gt; libvt-mpi-unify.dylib@
</span><br>
<span class="quotelev1">&gt; libvt-mpi-unify.la*
</span><br>
<span class="quotelev1">&gt; libvt-mpi.0.dylib*
</span><br>
<span class="quotelev1">&gt; libvt-mpi.a
</span><br>
<span class="quotelev1">&gt; libvt-mpi.dylib@
</span><br>
<span class="quotelev1">&gt; libvt-mpi.la*
</span><br>
<span class="quotelev1">&gt; libvt-mt.0.dylib*
</span><br>
<span class="quotelev1">&gt; libvt-mt.a
</span><br>
<span class="quotelev1">&gt; libvt-mt.dylib@
</span><br>
<span class="quotelev1">&gt; libvt-mt.la*
</span><br>
<span class="quotelev1">&gt; libvt-pomp.a
</span><br>
<span class="quotelev1">&gt; libvt-pomp.la*
</span><br>
<span class="quotelev1">&gt; libvt.0.dylib*
</span><br>
<span class="quotelev1">&gt; libvt.a
</span><br>
<span class="quotelev1">&gt; libvt.dylib@
</span><br>
<span class="quotelev1">&gt; libvt.la*
</span><br>
<span class="quotelev1">&gt; mpi.mod*
</span><br>
<span class="quotelev1">&gt; openmpi/
</span><br>
<span class="quotelev1">&gt; pkgconfig/
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't notice anything out of ordinary.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Karl
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 25, 2013, at 8:31 AM, Reuti &lt;reuti_at_[hidden]&lt;mailto:reuti_at_[hidden]&gt;&lt;mailto:reuti_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Am 25.11.2013 um 14:25 schrieb Meredith, Karl:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I do have these two environment variables set:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=/Users/meredithk/tools/openmpi/lib
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On a Mac it should DYLD_LIBRARY_PATH - and there are *.dylib files in
</span><br>
<span class="quotelev1">&gt; your /Users/meredithk/tools/openmpi/lib?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; PATH=/Users/meredithk/tools/openmpi/bin
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Running mpirun seems to work fine with a simple command, like
</span><br>
<span class="quotelev1">&gt; hostname:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ )mpirun -n 2 hostname
</span><br>
<span class="quotelev1">&gt; meredithk-mac.corp.fmglobal.com&lt;<a href="http://meredithk-mac.corp.fmglobal.com/">http://meredithk-mac.corp.fmglobal.com/</a>&gt;&lt;<a href="http://meredithk-mac.corp.fmglobal.com<http://meredithk-mac.corp.fmglobal.com/">http://meredithk-mac.corp.fmglobal.com<http://meredithk-mac.corp.fmglobal.com/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt; meredithk-mac.corp.fmglobal.com&lt;<a href="http://meredithk-mac.corp.fmglobal.com/">http://meredithk-mac.corp.fmglobal.com/</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am trying to run the simple hello_cxx example from the openmpi
</span><br>
<span class="quotelev1">&gt; distribution, compiled as such:
</span><br>
<span class="quotelev1">&gt; mpic++ -g    hello_cxx.cc   -o hello_cxx
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It compiles fine, without warning or error.  However, when I go to
</span><br>
<span class="quotelev1">&gt; run
</span><br>
<span class="quotelev1">&gt; the example, it stalls on the MPI::Init() command:
</span><br>
<span class="quotelev1">&gt; mpirun -np 1 hello_cxx
</span><br>
<span class="quotelev1">&gt; It never errors out or crashes.  It simply hangs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am using the same mpic++ and mpirun version:
</span><br>
<span class="quotelev1">&gt; $ )which mpirun
</span><br>
<span class="quotelev1">&gt; /Users/meredithk/tools/openmpi/bin/mpirun
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ )which mpic++
</span><br>
<span class="quotelev1">&gt; /Users/meredithk/tools/openmpi/bin/mpic++
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Not quite sure what else to check.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Karl
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 23, 2013, at 5:29 PM, Ralph Castain &lt;rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&lt;mailto:rhc_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Strange - I run on Mavericks now without problem. Can you run
</span><br>
<span class="quotelev1">&gt; &quot;mpirun -n 1 hostname&quot;?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You also might want to check your PATH and LD_LIBRARY_PATH to
</span><br>
<span class="quotelev1">&gt; ensure you have the prefix where you installed OMPI 1.6.5 at the front.
</span><br>
<span class="quotelev1">&gt; Mac
</span><br>
<span class="quotelev1">&gt; distributes a very old version of OMPI with its software and you don't
</span><br>
<span class="quotelev1">&gt; want
</span><br>
<span class="quotelev1">&gt; to pick it up by mistake.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 22, 2013, at 1:45 PM, Meredith, Karl
</span><br>
<span class="quotelev1">&gt; &lt;karl.meredith_at_[hidden]&lt;mailto:karl.meredith_at_[hidden]&gt;&lt;mailto:karl.meredith_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I recently upgraded my 2013 Macbook Pro (Retina display) from 10.8
</span><br>
<span class="quotelev1">&gt; to 10.9.  I downloaded and installed openmpi-1.6.5 and compiled it with
</span><br>
<span class="quotelev1">&gt; gcc
</span><br>
<span class="quotelev1">&gt; 4.8 (gcc installed from macports).
</span><br>
<span class="quotelev1">&gt; openmpi compiled and installed without error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, when I try to run any of the example test cases, the code
</span><br>
<span class="quotelev1">&gt; gets stuck inside the first MPI::Init() call and never returns.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any thoughts on what might be going wrong?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The same install on OS 10.8 works fine and the example test cases
</span><br>
<span class="quotelev1">&gt; run without error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Karl
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &lt;smime.p7s&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23094/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23095.php">Meredith, Karl: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>Previous message:</strong> <a href="23093.php">Meredith, Karl: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>In reply to:</strong> <a href="23093.php">Meredith, Karl: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23095.php">Meredith, Karl: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>Reply:</strong> <a href="23095.php">Meredith, Karl: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
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
