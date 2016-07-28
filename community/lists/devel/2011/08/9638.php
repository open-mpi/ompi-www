<?
$subject_val = "Re: [OMPI devel] bug report-";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  9 09:25:08 2011" -->
<!-- isoreceived="20110809132508" -->
<!-- sent="Tue, 09 Aug 2011 15:25:00 +0200" -->
<!-- isosent="20110809132500" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] bug report-" -->
<!-- id="4E41352C.5030407_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAKk-Ga7=h_faZh4nR3AKfqx-7iwOYP09U+tifwB_yf8acjh7HQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] bug report-<br>
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-09 09:25:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9639.php">Jeff Squyres: "[OMPI devel] 1.5.4 NEWS bullets"</a>
<li><strong>Previous message:</strong> <a href="9637.php">Shiqing Fan: "Re: [OMPI devel] bug report-"</a>
<li><strong>Maybe in reply to:</strong> <a href="9621.php">renyong.yang: "[OMPI devel] bug report-"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Now I see the problem. The Open MPI binaries were build with Microsoft 
<br>
cl compiler, it has different name conventions, so the symbols couldn't 
<br>
be resolved by g++ compiler. I've started the native MinGW compiler 
<br>
support, some projects can already be built via gcc or g++, but it's not 
<br>
finished yet.
<br>
<p><p>Regards,
<br>
Shiqing
<br>
<p>On 2011-08-09 3:19 PM, renyong.yang wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm using mingw g++, the IDE is eclipse cdt,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; these are all the info:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make all
</span><br>
<span class="quotelev1">&gt; 'Building file: ../src/mpi_test1.cpp'
</span><br>
<span class="quotelev1">&gt; 'Invoking: Cross G++ Compiler'
</span><br>
<span class="quotelev1">&gt; g++ -I&quot;C:\Program Files\OpenMPI_v1.5.3-win32\include&quot; -O0 -g3 -Wall -c 
</span><br>
<span class="quotelev1">&gt; -fmessage-length=0 -MMD -MP -MF&quot;src/mpi_test1.d&quot; -MT&quot;src/mpi_test1.d&quot; 
</span><br>
<span class="quotelev1">&gt; -o &quot;src/mpi_test1.o&quot; &quot;../src/mpi_test1.cpp&quot;
</span><br>
<span class="quotelev1">&gt; 'Finished building: ../src/mpi_test1.cpp'
</span><br>
<span class="quotelev1">&gt; ' '
</span><br>
<span class="quotelev1">&gt; 'Building target: mpi_test1'
</span><br>
<span class="quotelev1">&gt; 'Invoking: Cross G++ Linker'
</span><br>
<span class="quotelev1">&gt; g++ -L&quot;C:\Program Files\OpenMPI_v1.5.3-win32\bin&quot; -o &quot;mpi_test1&quot; 
</span><br>
<span class="quotelev1">&gt;  ./src/mpi_test1.o   -lmpi
</span><br>
<span class="quotelev1">&gt; c:/program 
</span><br>
<span class="quotelev1">&gt; files/codeblocks/mingw/bin/../lib/gcc/mingw32/4.4.1/../../../../mingw32/bin/ld.exe: 
</span><br>
<span class="quotelev1">&gt; warning: auto-importing has been activated without 
</span><br>
<span class="quotelev1">&gt; --enable-auto-import specified on the command line.
</span><br>
<span class="quotelev1">&gt; This should work unless it involves constant data structures 
</span><br>
<span class="quotelev1">&gt; referencing symbols from auto-imported DLLs.
</span><br>
<span class="quotelev1">&gt; ./src/mpi_test1.o: In function `main':
</span><br>
<span class="quotelev1">&gt; C:\Users\yong\workspace\mpi_test1\Debug/../src/mpi_test1.cpp:21: 
</span><br>
<span class="quotelev1">&gt; undefined reference to `MPI::COMM_WORLD'
</span><br>
<span class="quotelev1">&gt; C:\Users\yong\workspace\mpi_test1\Debug/../src/mpi_test1.cpp:23: 
</span><br>
<span class="quotelev1">&gt; undefined reference to `MPI::COMM_WORLD'
</span><br>
<span class="quotelev1">&gt; ./src/mpi_test1.o: In function `Intracomm':
</span><br>
<span class="quotelev1">&gt; C:/Program 
</span><br>
<span class="quotelev1">&gt; Files/OpenMPI_v1.5.3-win32/include/openmpi/ompi/mpi/cxx/intracomm.h:25: undefined 
</span><br>
<span class="quotelev1">&gt; reference to `MPI::Comm::Comm()'
</span><br>
<span class="quotelev1">&gt; ./src/mpi_test1.o:C:/Program 
</span><br>
<span class="quotelev1">&gt; Files/OpenMPI_v1.5.3-win32/include/openmpi/ompi/mpi/cxx/functions_inln.h:91: 
</span><br>
<span class="quotelev1">&gt; undefined reference to `MPI::InitializeIntercepts()'
</span><br>
<span class="quotelev1">&gt; ./src/mpi_test1.o: In function `Intracomm':
</span><br>
<span class="quotelev1">&gt; C:/Program 
</span><br>
<span class="quotelev1">&gt; Files/OpenMPI_v1.5.3-win32/include/openmpi/ompi/mpi/cxx/intracomm_inln.h:23: 
</span><br>
<span class="quotelev1">&gt; undefined reference to `MPI::Comm::Comm()'
</span><br>
<span class="quotelev1">&gt; ./src/mpi_test1.o:C:/Program 
</span><br>
<span class="quotelev1">&gt; Files/OpenMPI_v1.5.3-win32/include/openmpi/ompi/mpi/cxx/op_inln.h:122: 
</span><br>
<span class="quotelev1">&gt; undefined reference to `ompi_mpi_cxx_op_intercept'
</span><br>
<span class="quotelev1">&gt; ./src/mpi_test1.o:mpi_test1.cpp:(.rdata$_ZTVN3MPI3WinE[vtable for 
</span><br>
<span class="quotelev1">&gt; MPI::Win]+0x24): undefined reference to `MPI::Win::Free()'
</span><br>
<span class="quotelev1">&gt; ./src/mpi_test1.o:mpi_test1.cpp:(.rdata$_ZTVN3MPI8DatatypeE[vtable for 
</span><br>
<span class="quotelev1">&gt; MPI::Datatype]+0x3c): undefined reference to `MPI::Datatype::Free()'
</span><br>
<span class="quotelev1">&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; make: *** [mpi_test1] Error 1
</span><br>
<span class="quotelev1">&gt; Info: resolving _ompi_mpi_comm_null by linking to 
</span><br>
<span class="quotelev1">&gt; __imp__ompi_mpi_comm_null (auto-import)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2011/8/9 Shiqing Fan &lt;fan_at_[hidden] &lt;mailto:fan_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Which command did you use to compile your code?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I tried following code on my Windows 7 machine with compile
</span><br>
<span class="quotelev1">&gt;     command &quot;mpicxx hello.cpp&quot;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     hello.cpp
</span><br>
<span class="quotelev1">&gt;     ===================================
</span><br>
<span class="quotelev1">&gt;     # include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt;     using namespace std;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     int main ( int argc, char *argv[] )
</span><br>
<span class="quotelev1">&gt;     {
</span><br>
<span class="quotelev1">&gt;       int rank, size;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       MPI::Init ( argc, argv );
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       size = MPI::COMM_WORLD.Get_size ( );
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       rank = MPI::COMM_WORLD.Get_rank ( );
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       printf(&quot;Rank # %d \n&quot;, rank);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       MPI::Finalize ( );
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       return 0;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     console output :
</span><br>
<span class="quotelev1">&gt;     ======================================
</span><br>
<span class="quotelev1">&gt;     d:\work\OpenMPI\tests\CXX&gt;mpicxx hello.cpp
</span><br>
<span class="quotelev1">&gt;     Microsoft (R) 32-bit C/C++ Optimizing Compiler Version
</span><br>
<span class="quotelev1">&gt;     16.00.30319.01 for 80x86
</span><br>
<span class="quotelev1">&gt;     Copyright (C) Microsoft Corporation.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     hello.cpp
</span><br>
<span class="quotelev1">&gt;     Microsoft (R) Incremental Linker Version 10.00.30319.01
</span><br>
<span class="quotelev1">&gt;     Copyright (C) Microsoft Corporation.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /out:hello.exe
</span><br>
<span class="quotelev1">&gt;     &quot;/LIBPATH:C:\Program Files\OpenMPI_v1.5.3-win32\lib&quot;
</span><br>
<span class="quotelev1">&gt;     libmpi_cxx.lib
</span><br>
<span class="quotelev1">&gt;     libmpi.lib
</span><br>
<span class="quotelev1">&gt;     libopen-pal.lib
</span><br>
<span class="quotelev1">&gt;     libopen-rte.lib
</span><br>
<span class="quotelev1">&gt;     advapi32.lib
</span><br>
<span class="quotelev1">&gt;     Ws2_32.lib
</span><br>
<span class="quotelev1">&gt;     shlwapi.lib
</span><br>
<span class="quotelev1">&gt;     hello.obj
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     d:\work\OpenMPI\tests\CXX&gt;mpirun -np 2 hello.exe
</span><br>
<span class="quotelev1">&gt;     Rank # 0
</span><br>
<span class="quotelev1">&gt;     Rank # 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Regards,
</span><br>
<span class="quotelev1">&gt;     Shiqing
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On 2011-08-09 3:04 PM, renyong.yang wrote:
</span><br>
<span class="quotelev2">&gt;&gt;     I compiled the simple code with &quot;Microsoft Compute Cluster Pack&quot;
</span><br>
<span class="quotelev2">&gt;&gt;     on Windows and if I load its own loader &quot;mpiexec.exe&quot; within its
</span><br>
<span class="quotelev2">&gt;&gt;     program folder, the program can work correctly, however if I
</span><br>
<span class="quotelev2">&gt;&gt;     tried to use your loader &quot;C:\Program
</span><br>
<span class="quotelev2">&gt;&gt;     Files\OpenMPI_v1.5.3-win32\bin\mpiexec.exe&quot; and  &quot;C:\Program
</span><br>
<span class="quotelev2">&gt;&gt;     Files\OpenMPI_v1.5.3-win32\bin\mpirun.exe&quot;, the process it
</span><br>
<span class="quotelev2">&gt;&gt;     created is always with rank &quot;0&quot;. BTW, I compile the code
</span><br>
<span class="quotelev2">&gt;&gt;     with &quot;Microsoft Compute Cluster Pack&quot; because the simple code can
</span><br>
<span class="quotelev2">&gt;&gt;     not be compiled with the v1.5.3 release for windows, the compiler
</span><br>
<span class="quotelev2">&gt;&gt;     complains:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     ./src/mpi_test1.o: In function `Intracomm':
</span><br>
<span class="quotelev2">&gt;&gt;     C:/Program
</span><br>
<span class="quotelev2">&gt;&gt;     Files/OpenMPI_v1.5.3-win32/include/openmpi/ompi/mpi/cxx/intracomm.h:25:
</span><br>
<span class="quotelev2">&gt;&gt;     undefined reference to `MPI::Comm::Comm()'
</span><br>
<span class="quotelev2">&gt;&gt;     ./src/mpi_test1.o: In function `Intracomm':
</span><br>
<span class="quotelev2">&gt;&gt;     C:/Program
</span><br>
<span class="quotelev2">&gt;&gt;     Files/OpenMPI_v1.5.3-win32/include/openmpi/ompi/mpi/cxx/intracomm_inln.h:23:
</span><br>
<span class="quotelev2">&gt;&gt;     undefined reference to `MPI::Comm::Comm()'
</span><br>
<span class="quotelev2">&gt;&gt;     ./src/mpi_test1.o:C:/Program
</span><br>
<span class="quotelev2">&gt;&gt;     Files/OpenMPI_v1.5.3-win32/include/openmpi/ompi/mpi/cxx/op_inln.h:122:
</span><br>
<span class="quotelev2">&gt;&gt;     undefined reference to `ompi_mpi_cxx_op_intercept'
</span><br>
<span class="quotelev2">&gt;&gt;     ./src/mpi_test1.o:mpi_test1.cpp:(.rdata$_ZTVN3MPI3WinE[vtable for
</span><br>
<span class="quotelev2">&gt;&gt;     MPI::Win]+0x24): undefined reference to `MPI::Win::Free()'
</span><br>
<span class="quotelev2">&gt;&gt;     ./src/mpi_test1.o:mpi_test1.cpp:(.rdata$_ZTVN3MPI8DatatypeE[vtable for
</span><br>
<span class="quotelev2">&gt;&gt;     MPI::Datatype]+0x3c): undefined reference to `MPI::Datatype::Free()'
</span><br>
<span class="quotelev2">&gt;&gt;     collect2: ld returned 1 exit status
</span><br>
<span class="quotelev2">&gt;&gt;     make: *** [mpi_test1] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     When I tried CMake with GUI for version 1.4.3, no .sln file
</span><br>
<span class="quotelev2">&gt;&gt;     generated, is there something I've missed?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Regardes~~
</span><br>
<span class="quotelev2">&gt;&gt;     Renyong
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     2011/8/9 renyong.yang &lt;yangrenyong_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;mailto:yangrenyong_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             I've solved the same weird error on Linux, but have not
</span><br>
<span class="quotelev2">&gt;&gt;         tried Windows yet. The error recurs on Linux system, when I
</span><br>
<span class="quotelev2">&gt;&gt;         firstly use mpich on my Linux, the program works fine, then I
</span><br>
<span class="quotelev2">&gt;&gt;         uninstalled it and switched to your open-mpi,  the error came
</span><br>
<span class="quotelev2">&gt;&gt;         out without warning, and I tried to change the compiler to
</span><br>
<span class="quotelev2">&gt;&gt;         mpic++ other than g++, the error remains. So I doubt if the
</span><br>
<span class="quotelev2">&gt;&gt;         Boost.MPI is compatible with current MPI system, I recompiled
</span><br>
<span class="quotelev2">&gt;&gt;         the Boost.MPI library and substituted the old ones, the code
</span><br>
<span class="quotelev2">&gt;&gt;         with Boost library came back to work. So I guess the old
</span><br>
<span class="quotelev2">&gt;&gt;         compiled Boost library depends on other library like mpich,
</span><br>
<span class="quotelev2">&gt;&gt;         so it can't work with current open-mpi because they are
</span><br>
<span class="quotelev2">&gt;&gt;         incompatible, however, I'm still confused why simple code (In
</span><br>
<span class="quotelev2">&gt;&gt;         the last mail I sent to you) which does not depend on Boost
</span><br>
<span class="quotelev2">&gt;&gt;         library(I never used mpich on Windows before), can not work.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Wishes~
</span><br>
<span class="quotelev2">&gt;&gt;         Renyong
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         2011/8/9 Shiqing Fan &lt;fan_at_[hidden] &lt;mailto:fan_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             The code works for me under MinGW console with the
</span><br>
<span class="quotelev2">&gt;&gt;             pre-compiled installer. Could you try &quot;which mpicc&quot; to
</span><br>
<span class="quotelev2">&gt;&gt;             ensure that the correct Open MPI commands are in path?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             For building Open MPI by your self with CMake, you have
</span><br>
<span class="quotelev2">&gt;&gt;             to configure it in the GUI and then generate the sln
</span><br>
<span class="quotelev2">&gt;&gt;             files by pressing the generate button. I don't recommend
</span><br>
<span class="quotelev2">&gt;&gt;             to use the other two means, they haven't been tested for
</span><br>
<span class="quotelev2">&gt;&gt;             some while.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             Regards,
</span><br>
<span class="quotelev2">&gt;&gt;             Shiqing
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             On 2011-08-09 3:48 AM, renyong.yang wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              the following code:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             int main(int argc, char **argv)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             int  procnum;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             /* Initialize MPI */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             /* Find out this processor number */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             MPI_Comm_rank(MPI_COMM_WORLD, &amp;procnum);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             /* Find out the number of processors */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             std::cout &lt;&lt; &quot;I'm process: &quot; &lt;&lt; procnum &lt;&lt; std::endl;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             MPI_Finalize();
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             return 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             also goes with the same rank &quot;0&quot; error, I think if
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             there's something wrong with the auxiliary program
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             &quot;mpirun&quot; ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             BTW, I tried all the 3 means on your
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             <a href="http://svn.open-mpi.org/svn/ompi/trunk/README.WINDOWS.txt">http://svn.open-mpi.org/svn/ompi/trunk/README.WINDOWS.txt</a> guideline
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             but none worked to compile my own dll for
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             <a href="http://www.open-mpi.org/software/ompi/v1.4/downloads/openmpi-1.4.3.tar.bz2">http://www.open-mpi.org/software/ompi/v1.4/downloads/openmpi-1.4.3.tar.bz2</a>,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             the first approach failed because I found no .sln file
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             in the distributed tarballs after configuring with
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             cmake, the second mean I can not use is the lacking of
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             ompi-static.tgz file, the 3rd solution I tried does not
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             work neither, because I don't know what the ash.exe
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             shell interpreter you are actually pointing to, so I'd
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             be much appreciated if you can tell me the  a working
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             approach. Thanks very much.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             2011/8/9 Shiqing Fan &lt;fan_at_[hidden] &lt;mailto:fan_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 I've never tried this Boost.MPI with Open MPI on
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 Windows. Does it work without the Boost.MPI library?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 Did you run your test under MinGW?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 Shiqing
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 On 2011-08-08 5:31 PM, renyong.yang wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  Run time environment of mine is Windows 7, with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 the unstable OpenMPI_v1.5.3-2_win32.exe
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 &lt;<a href="http://www.open-mpi.org/software/ompi/v1.5/downloads/OpenMPI_v1.5.3-2_win32.exe">http://www.open-mpi.org/software/ompi/v1.5/downloads/OpenMPI_v1.5.3-2_win32.exe</a>&gt; release
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 for Windows, together with Microsoft Compute
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 Cluster Pack. Additionally I'm using Boost.MPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 library v1.47 compiled by mingw, I write those
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 following codes:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 int main(int argc, char **argv)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 mpi::environment env(argc, argv); // Boost.MPI class
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 boost::mpi::communicator worldCom; // Boost.MPI class
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 std::cout &lt;&lt; &quot;rank():&quot; &lt;&lt; worldCom.rank() &lt;&lt; std::endl;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         worldCom.barrier();
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 return 0;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 and successfully compiled and linked with your
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 library as &quot;a.exe&quot; by mingw, however, if I run it:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;                 &gt;mpirun -np 4 a.exe
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 the command will create 4 process with the same
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 rank &quot;0&quot;, I wonder if it's the bug of your unstable
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 release for windows?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 BTW, can you publish the Visual studio project to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 the subversion? Thanks very much.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 devel_at_[hidden]  &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 ---------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 Shiqing Fan
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 High Performance Computing Center Stuttgart (HLRS)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 Tel: ++49(0)711-685-87234      Nobelstrasse 19
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 Fax: ++49(0)711-685-65832      70569 Stuttgart
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 <a href="http://www.hlrs.de/organization/people/shiqing-fan/">http://www.hlrs.de/organization/people/shiqing-fan/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 email:fan_at_[hidden]  &lt;mailto:fan_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             -- 
</span><br>
<span class="quotelev2">&gt;&gt;             ---------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;             Shiqing Fan
</span><br>
<span class="quotelev2">&gt;&gt;             High Performance Computing Center Stuttgart (HLRS)
</span><br>
<span class="quotelev2">&gt;&gt;             Tel: ++49(0)711-685-87234      Nobelstrasse 19
</span><br>
<span class="quotelev2">&gt;&gt;             Fax: ++49(0)711-685-65832      70569 Stuttgart
</span><br>
<span class="quotelev2">&gt;&gt;             <a href="http://www.hlrs.de/organization/people/shiqing-fan/">http://www.hlrs.de/organization/people/shiqing-fan/</a>
</span><br>
<span class="quotelev2">&gt;&gt;             email:fan_at_[hidden]  &lt;mailto:fan_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     -- 
</span><br>
<span class="quotelev1">&gt;     ---------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;     Shiqing Fan
</span><br>
<span class="quotelev1">&gt;     High Performance Computing Center Stuttgart (HLRS)
</span><br>
<span class="quotelev1">&gt;     Tel: ++49(0)711-685-87234      Nobelstrasse 19
</span><br>
<span class="quotelev1">&gt;     Fax: ++49(0)711-685-65832      70569 Stuttgart
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.hlrs.de/organization/people/shiqing-fan/">http://www.hlrs.de/organization/people/shiqing-fan/</a>
</span><br>
<span class="quotelev1">&gt;     email:fan_at_[hidden]  &lt;mailto:fan_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
---------------------------------------------------------------
Shiqing Fan
High Performance Computing Center Stuttgart (HLRS)
Tel: ++49(0)711-685-87234      Nobelstrasse 19
Fax: ++49(0)711-685-65832      70569 Stuttgart
<a href="http://www.hlrs.de/organization/people/shiqing-fan/">http://www.hlrs.de/organization/people/shiqing-fan/</a>
email: fan_at_[hidden]
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9638/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9639.php">Jeff Squyres: "[OMPI devel] 1.5.4 NEWS bullets"</a>
<li><strong>Previous message:</strong> <a href="9637.php">Shiqing Fan: "Re: [OMPI devel] bug report-"</a>
<li><strong>Maybe in reply to:</strong> <a href="9621.php">renyong.yang: "[OMPI devel] bug report-"</a>
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
