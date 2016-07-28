<?
$subject_val = "Re: [OMPI devel] bug report-";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  9 08:55:13 2011" -->
<!-- isoreceived="20110809125513" -->
<!-- sent="Tue, 09 Aug 2011 14:55:05 +0200" -->
<!-- isosent="20110809125505" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] bug report-" -->
<!-- id="4E412E29.7070000_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAKk-Ga6my-SgVnffBVaELZ+KjgMe2xSaKuCb+fArzEEOyPPS9A_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2011-08-09 08:55:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9636.php">Jeff Squyres: "Re: [OMPI devel] bug report-"</a>
<li><strong>Previous message:</strong> <a href="9634.php">Shiqing Fan: "Re: [OMPI devel] bug report-"</a>
<li><strong>Maybe in reply to:</strong> <a href="9621.php">renyong.yang: "[OMPI devel] bug report-"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9636.php">Jeff Squyres: "Re: [OMPI devel] bug report-"</a>
<li><strong>Reply:</strong> <a href="9636.php">Jeff Squyres: "Re: [OMPI devel] bug report-"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Renyong,
<br>
<p>If the same problem occurs under Linux, then the Boost.MPI library might 
<br>
have compatible issues with Open MPI, but it still needs to be verified.
<br>
<p>However, I'm also confused why the simple code didn't work for you. The 
<br>
only guess is the environment is messed up by different MPI 
<br>
implementations, that the launched mpi processes are several 'singleton' 
<br>
jobs which have all rank 0.
<br>
<p><p>Regards,
<br>
Shiqing
<br>
<p>On 2011-08-09 2:00 PM, renyong.yang wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I've solved the same weird error on Linux, but have not tried 
</span><br>
<span class="quotelev1">&gt; Windows yet. The error recurs on Linux system, when I firstly use 
</span><br>
<span class="quotelev1">&gt; mpich on my Linux, the program works fine, then I uninstalled it and 
</span><br>
<span class="quotelev1">&gt; switched to your open-mpi,  the error came out without warning, and I 
</span><br>
<span class="quotelev1">&gt; tried to change the compiler to mpic++ other than g++, the error 
</span><br>
<span class="quotelev1">&gt; remains. So I doubt if the Boost.MPI is compatible with current MPI 
</span><br>
<span class="quotelev1">&gt; system, I recompiled the Boost.MPI library and substituted the old 
</span><br>
<span class="quotelev1">&gt; ones, the code with Boost library came back to work. So I guess the 
</span><br>
<span class="quotelev1">&gt; old compiled Boost library depends on other library like mpich, so it 
</span><br>
<span class="quotelev1">&gt; can't work with current open-mpi because they are incompatible, 
</span><br>
<span class="quotelev1">&gt; however, I'm still confused why simple code (In the last mail I sent 
</span><br>
<span class="quotelev1">&gt; to you) which does not depend on Boost library(I never used mpich on 
</span><br>
<span class="quotelev1">&gt; Windows before), can not work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Wishes~
</span><br>
<span class="quotelev1">&gt; Renyong
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
<span class="quotelev1">&gt;     The code works for me under MinGW console with the pre-compiled
</span><br>
<span class="quotelev1">&gt;     installer. Could you try &quot;which mpicc&quot; to ensure that the correct
</span><br>
<span class="quotelev1">&gt;     Open MPI commands are in path?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     For building Open MPI by your self with CMake, you have to
</span><br>
<span class="quotelev1">&gt;     configure it in the GUI and then generate the sln files by
</span><br>
<span class="quotelev1">&gt;     pressing the generate button. I don't recommend to use the other
</span><br>
<span class="quotelev1">&gt;     two means, they haven't been tested for some while.
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
<span class="quotelev1">&gt;     On 2011-08-09 3:48 AM, renyong.yang wrote:
</span><br>
<span class="quotelev2">&gt;&gt;     hi,
</span><br>
<span class="quotelev2">&gt;&gt;      the following code:
</span><br>
<span class="quotelev2">&gt;&gt;     int main(int argc, char **argv)
</span><br>
<span class="quotelev2">&gt;&gt;     {
</span><br>
<span class="quotelev2">&gt;&gt;     int  procnum;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     /* Initialize MPI */
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     /* Find out this processor number */
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Comm_rank(MPI_COMM_WORLD, &amp;procnum);
</span><br>
<span class="quotelev2">&gt;&gt;     /* Find out the number of processors */
</span><br>
<span class="quotelev2">&gt;&gt;     std::cout &lt;&lt; &quot;I'm process: &quot; &lt;&lt; procnum &lt;&lt; std::endl;
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     return 0;
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     also goes with the same rank &quot;0&quot; error, I think if there's
</span><br>
<span class="quotelev2">&gt;&gt;     something wrong with the auxiliary program &quot;mpirun&quot; ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     BTW, I tried all the 3 means on your
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://svn.open-mpi.org/svn/ompi/trunk/README.WINDOWS.txt">http://svn.open-mpi.org/svn/ompi/trunk/README.WINDOWS.txt</a> guideline
</span><br>
<span class="quotelev2">&gt;&gt;     but none worked to compile my own dll for
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/software/ompi/v1.4/downloads/openmpi-1.4.3.tar.bz2">http://www.open-mpi.org/software/ompi/v1.4/downloads/openmpi-1.4.3.tar.bz2</a>,
</span><br>
<span class="quotelev2">&gt;&gt;     the first approach failed because I found no .sln file in the
</span><br>
<span class="quotelev2">&gt;&gt;     distributed tarballs after configuring with cmake, the second
</span><br>
<span class="quotelev2">&gt;&gt;     mean I can not use is the lacking of ompi-static.tgz file, the
</span><br>
<span class="quotelev2">&gt;&gt;     3rd solution I tried does not work neither, because I don't know
</span><br>
<span class="quotelev2">&gt;&gt;     what the ash.exe shell interpreter you are actually pointing to,
</span><br>
<span class="quotelev2">&gt;&gt;     so I'd be much appreciated if you can tell me the  a working
</span><br>
<span class="quotelev2">&gt;&gt;     approach. Thanks very much.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     2011/8/9 Shiqing Fan &lt;fan_at_[hidden] &lt;mailto:fan_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         I've never tried this Boost.MPI with Open MPI on Windows.
</span><br>
<span class="quotelev2">&gt;&gt;         Does it work without the Boost.MPI library? Did you run your
</span><br>
<span class="quotelev2">&gt;&gt;         test under MinGW?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Regards,
</span><br>
<span class="quotelev2">&gt;&gt;         Shiqing
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         On 2011-08-08 5:31 PM, renyong.yang wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Run time environment of mine is Windows 7, with the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         unstable OpenMPI_v1.5.3-2_win32.exe
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         &lt;<a href="http://www.open-mpi.org/software/ompi/v1.5/downloads/OpenMPI_v1.5.3-2_win32.exe">http://www.open-mpi.org/software/ompi/v1.5/downloads/OpenMPI_v1.5.3-2_win32.exe</a>&gt; release
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         for Windows, together with Microsoft Compute Cluster Pack.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Additionally I'm using Boost.MPI library v1.47 compiled by
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         mingw, I write those following codes:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         int main(int argc, char **argv)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         mpi::environment env(argc, argv); // Boost.MPI class
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         boost::mpi::communicator worldCom; // Boost.MPI class
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         std::cout &lt;&lt; &quot;rank():&quot; &lt;&lt; worldCom.rank() &lt;&lt; std::endl;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 worldCom.barrier();
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         return 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         and successfully compiled and linked with your library as
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         &quot;a.exe&quot; by mingw, however, if I run it:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;         &gt;mpirun -np 4 a.exe
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         the command will create 4 process with the same rank &quot;0&quot;, I
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         wonder if it's the bug of your unstable release for windows?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         BTW, can you publish the Visual studio project to the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         subversion? Thanks very much.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         devel_at_[hidden]  &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         -- 
</span><br>
<span class="quotelev2">&gt;&gt;         ---------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;         Shiqing Fan
</span><br>
<span class="quotelev2">&gt;&gt;         High Performance Computing Center Stuttgart (HLRS)
</span><br>
<span class="quotelev2">&gt;&gt;         Tel: ++49(0)711-685-87234      Nobelstrasse 19
</span><br>
<span class="quotelev2">&gt;&gt;         Fax: ++49(0)711-685-65832      70569 Stuttgart
</span><br>
<span class="quotelev2">&gt;&gt;         <a href="http://www.hlrs.de/organization/people/shiqing-fan/">http://www.hlrs.de/organization/people/shiqing-fan/</a>
</span><br>
<span class="quotelev2">&gt;&gt;         email:fan_at_[hidden]  &lt;mailto:fan_at_[hidden]&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9635/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9636.php">Jeff Squyres: "Re: [OMPI devel] bug report-"</a>
<li><strong>Previous message:</strong> <a href="9634.php">Shiqing Fan: "Re: [OMPI devel] bug report-"</a>
<li><strong>Maybe in reply to:</strong> <a href="9621.php">renyong.yang: "[OMPI devel] bug report-"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9636.php">Jeff Squyres: "Re: [OMPI devel] bug report-"</a>
<li><strong>Reply:</strong> <a href="9636.php">Jeff Squyres: "Re: [OMPI devel] bug report-"</a>
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
