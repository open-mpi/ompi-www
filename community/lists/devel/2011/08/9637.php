<?
$subject_val = "Re: [OMPI devel] bug report-";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  9 09:12:00 2011" -->
<!-- isoreceived="20110809131200" -->
<!-- sent="Tue, 09 Aug 2011 15:11:53 +0200" -->
<!-- isosent="20110809131153" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] bug report-" -->
<!-- id="4E413219.90807_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAKk-Ga6PkXxb5=+Ab9OJhRxSyr8F1ZTi_j1r3XHmTeuaS8mU8w_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2011-08-09 09:11:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9638.php">Shiqing Fan: "Re: [OMPI devel] bug report-"</a>
<li><strong>Previous message:</strong> <a href="9636.php">Jeff Squyres: "Re: [OMPI devel] bug report-"</a>
<li><strong>Maybe in reply to:</strong> <a href="9621.php">renyong.yang: "[OMPI devel] bug report-"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9638.php">Shiqing Fan: "Re: [OMPI devel] bug report-"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Which command did you use to compile your code?
<br>
<p>I tried following code on my Windows 7 machine with compile command 
<br>
&quot;mpicxx hello.cpp&quot;:
<br>
<p>hello.cpp
<br>
===================================
<br>
# include &quot;mpi.h&quot;
<br>
using namespace std;
<br>
<p>int main ( int argc, char *argv[] )
<br>
{
<br>
&nbsp;&nbsp;&nbsp;int rank, size;
<br>
<p>&nbsp;&nbsp;&nbsp;MPI::Init ( argc, argv );
<br>
<p>&nbsp;&nbsp;&nbsp;size = MPI::COMM_WORLD.Get_size ( );
<br>
<p>&nbsp;&nbsp;&nbsp;rank = MPI::COMM_WORLD.Get_rank ( );
<br>
<p>&nbsp;&nbsp;&nbsp;printf(&quot;Rank # %d \n&quot;, rank);
<br>
<p>&nbsp;&nbsp;&nbsp;MPI::Finalize ( );
<br>
<p>&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p><p>console output :
<br>
======================================
<br>
d:\work\OpenMPI\tests\CXX&gt;mpicxx hello.cpp
<br>
Microsoft (R) 32-bit C/C++ Optimizing Compiler Version 16.00.30319.01 
<br>
for 80x86
<br>
Copyright (C) Microsoft Corporation.  All rights reserved.
<br>
<p>hello.cpp
<br>
Microsoft (R) Incremental Linker Version 10.00.30319.01
<br>
Copyright (C) Microsoft Corporation.  All rights reserved.
<br>
<p>/out:hello.exe
<br>
&quot;/LIBPATH:C:\Program Files\OpenMPI_v1.5.3-win32\lib&quot;
<br>
libmpi_cxx.lib
<br>
libmpi.lib
<br>
libopen-pal.lib
<br>
libopen-rte.lib
<br>
advapi32.lib
<br>
Ws2_32.lib
<br>
shlwapi.lib
<br>
hello.obj
<br>
<p>d:\work\OpenMPI\tests\CXX&gt;mpirun -np 2 hello.exe
<br>
Rank # 0
<br>
Rank # 1
<br>
<p><p>Regards,
<br>
Shiqing
<br>
<p>On 2011-08-09 3:04 PM, renyong.yang wrote:
<br>
<span class="quotelev1">&gt; I compiled the simple code with &quot;Microsoft Compute Cluster Pack&quot; on 
</span><br>
<span class="quotelev1">&gt; Windows and if I load its own loader &quot;mpiexec.exe&quot; within its program 
</span><br>
<span class="quotelev1">&gt; folder, the program can work correctly, however if I tried to use your 
</span><br>
<span class="quotelev1">&gt; loader &quot;C:\Program Files\OpenMPI_v1.5.3-win32\bin\mpiexec.exe&quot; 
</span><br>
<span class="quotelev1">&gt; and  &quot;C:\Program Files\OpenMPI_v1.5.3-win32\bin\mpirun.exe&quot;, the 
</span><br>
<span class="quotelev1">&gt; process it created is always with rank &quot;0&quot;. BTW, I compile the code 
</span><br>
<span class="quotelev1">&gt; with &quot;Microsoft Compute Cluster Pack&quot; because the simple code can not 
</span><br>
<span class="quotelev1">&gt; be compiled with the v1.5.3 release for windows, the compiler complains:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./src/mpi_test1.o: In function `Intracomm':
</span><br>
<span class="quotelev1">&gt; C:/Program 
</span><br>
<span class="quotelev1">&gt; Files/OpenMPI_v1.5.3-win32/include/openmpi/ompi/mpi/cxx/intracomm.h:25: undefined 
</span><br>
<span class="quotelev1">&gt; reference to `MPI::Comm::Comm()'
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I tried CMake with GUI for version 1.4.3, no .sln file generated, 
</span><br>
<span class="quotelev1">&gt; is there something I've missed?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regardes~~
</span><br>
<span class="quotelev1">&gt; Renyong
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2011/8/9 renyong.yang &lt;yangrenyong_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:yangrenyong_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         I've solved the same weird error on Linux, but have not tried
</span><br>
<span class="quotelev1">&gt;     Windows yet. The error recurs on Linux system, when I firstly use
</span><br>
<span class="quotelev1">&gt;     mpich on my Linux, the program works fine, then I uninstalled it
</span><br>
<span class="quotelev1">&gt;     and switched to your open-mpi,  the error came out without
</span><br>
<span class="quotelev1">&gt;     warning, and I tried to change the compiler to mpic++ other than
</span><br>
<span class="quotelev1">&gt;     g++, the error remains. So I doubt if the Boost.MPI is compatible
</span><br>
<span class="quotelev1">&gt;     with current MPI system, I recompiled the Boost.MPI library and
</span><br>
<span class="quotelev1">&gt;     substituted the old ones, the code with Boost library came back to
</span><br>
<span class="quotelev1">&gt;     work. So I guess the old compiled Boost library depends on other
</span><br>
<span class="quotelev1">&gt;     library like mpich, so it can't work with current open-mpi because
</span><br>
<span class="quotelev1">&gt;     they are incompatible, however, I'm still confused why simple code
</span><br>
<span class="quotelev1">&gt;     (In the last mail I sent to you) which does not depend on Boost
</span><br>
<span class="quotelev1">&gt;     library(I never used mpich on Windows before), can not work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Wishes~
</span><br>
<span class="quotelev1">&gt;     Renyong
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     2011/8/9 Shiqing Fan &lt;fan_at_[hidden] &lt;mailto:fan_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         The code works for me under MinGW console with the
</span><br>
<span class="quotelev1">&gt;         pre-compiled installer. Could you try &quot;which mpicc&quot; to ensure
</span><br>
<span class="quotelev1">&gt;         that the correct Open MPI commands are in path?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         For building Open MPI by your self with CMake, you have to
</span><br>
<span class="quotelev1">&gt;         configure it in the GUI and then generate the sln files by
</span><br>
<span class="quotelev1">&gt;         pressing the generate button. I don't recommend to use the
</span><br>
<span class="quotelev1">&gt;         other two means, they haven't been tested for some while.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Regards,
</span><br>
<span class="quotelev1">&gt;         Shiqing
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         On 2011-08-09 3:48 AM, renyong.yang wrote:
</span><br>
<span class="quotelev2">&gt;&gt;         hi,
</span><br>
<span class="quotelev2">&gt;&gt;          the following code:
</span><br>
<span class="quotelev2">&gt;&gt;         int main(int argc, char **argv)
</span><br>
<span class="quotelev2">&gt;&gt;         {
</span><br>
<span class="quotelev2">&gt;&gt;         int  procnum;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         /* Initialize MPI */
</span><br>
<span class="quotelev2">&gt;&gt;         MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         /* Find out this processor number */
</span><br>
<span class="quotelev2">&gt;&gt;         MPI_Comm_rank(MPI_COMM_WORLD, &amp;procnum);
</span><br>
<span class="quotelev2">&gt;&gt;         /* Find out the number of processors */
</span><br>
<span class="quotelev2">&gt;&gt;         std::cout &lt;&lt; &quot;I'm process: &quot; &lt;&lt; procnum &lt;&lt; std::endl;
</span><br>
<span class="quotelev2">&gt;&gt;         MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         return 0;
</span><br>
<span class="quotelev2">&gt;&gt;         }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         also goes with the same rank &quot;0&quot; error, I think if there's
</span><br>
<span class="quotelev2">&gt;&gt;         something wrong with the auxiliary program &quot;mpirun&quot; ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         BTW, I tried all the 3 means on your
</span><br>
<span class="quotelev2">&gt;&gt;         <a href="http://svn.open-mpi.org/svn/ompi/trunk/README.WINDOWS.txt">http://svn.open-mpi.org/svn/ompi/trunk/README.WINDOWS.txt</a> guideline
</span><br>
<span class="quotelev2">&gt;&gt;         but none worked to compile my own dll for
</span><br>
<span class="quotelev2">&gt;&gt;         <a href="http://www.open-mpi.org/software/ompi/v1.4/downloads/openmpi-1.4.3.tar.bz2">http://www.open-mpi.org/software/ompi/v1.4/downloads/openmpi-1.4.3.tar.bz2</a>,
</span><br>
<span class="quotelev2">&gt;&gt;         the first approach failed because I found no .sln file in the
</span><br>
<span class="quotelev2">&gt;&gt;         distributed tarballs after configuring with cmake, the second
</span><br>
<span class="quotelev2">&gt;&gt;         mean I can not use is the lacking of ompi-static.tgz file,
</span><br>
<span class="quotelev2">&gt;&gt;         the 3rd solution I tried does not work neither, because I
</span><br>
<span class="quotelev2">&gt;&gt;         don't know what the ash.exe shell interpreter you are
</span><br>
<span class="quotelev2">&gt;&gt;         actually pointing to, so I'd be much appreciated if you can
</span><br>
<span class="quotelev2">&gt;&gt;         tell me the  a working approach. Thanks very much.
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
<span class="quotelev2">&gt;&gt;             I've never tried this Boost.MPI with Open MPI on Windows.
</span><br>
<span class="quotelev2">&gt;&gt;             Does it work without the Boost.MPI library? Did you run
</span><br>
<span class="quotelev2">&gt;&gt;             your test under MinGW?
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
<span class="quotelev2">&gt;&gt;             On 2011-08-08 5:31 PM, renyong.yang wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              Run time environment of mine is Windows 7, with the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             unstable OpenMPI_v1.5.3-2_win32.exe
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             &lt;<a href="http://www.open-mpi.org/software/ompi/v1.5/downloads/OpenMPI_v1.5.3-2_win32.exe">http://www.open-mpi.org/software/ompi/v1.5/downloads/OpenMPI_v1.5.3-2_win32.exe</a>&gt; release
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             for Windows, together with Microsoft Compute Cluster
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Pack. Additionally I'm using Boost.MPI library v1.47
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             compiled by mingw, I write those following codes:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             int main(int argc, char **argv)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             mpi::environment env(argc, argv); // Boost.MPI class
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             boost::mpi::communicator worldCom; // Boost.MPI class
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             std::cout &lt;&lt; &quot;rank():&quot; &lt;&lt; worldCom.rank() &lt;&lt; std::endl;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     worldCom.barrier();
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             return 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             and successfully compiled and linked with your library
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             as &quot;a.exe&quot; by mingw, however, if I run it:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;             &gt;mpirun -np 4 a.exe
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             the command will create 4 process with the same rank
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             &quot;0&quot;, I wonder if it's the bug of your unstable release
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             for windows?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             BTW, can you publish the Visual studio project to the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             subversion? Thanks very much.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             devel_at_[hidden]  &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         -- 
</span><br>
<span class="quotelev1">&gt;         ---------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;         Shiqing Fan
</span><br>
<span class="quotelev1">&gt;         High Performance Computing Center Stuttgart (HLRS)
</span><br>
<span class="quotelev1">&gt;         Tel: ++49(0)711-685-87234      Nobelstrasse 19
</span><br>
<span class="quotelev1">&gt;         Fax: ++49(0)711-685-65832      70569 Stuttgart
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.hlrs.de/organization/people/shiqing-fan/">http://www.hlrs.de/organization/people/shiqing-fan/</a>
</span><br>
<span class="quotelev1">&gt;         email:fan_at_[hidden]  &lt;mailto:fan_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9637/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9638.php">Shiqing Fan: "Re: [OMPI devel] bug report-"</a>
<li><strong>Previous message:</strong> <a href="9636.php">Jeff Squyres: "Re: [OMPI devel] bug report-"</a>
<li><strong>Maybe in reply to:</strong> <a href="9621.php">renyong.yang: "[OMPI devel] bug report-"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9638.php">Shiqing Fan: "Re: [OMPI devel] bug report-"</a>
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
