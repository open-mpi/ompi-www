<?
$subject_val = "Re: [OMPI devel] bug report-";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  9 09:01:53 2011" -->
<!-- isoreceived="20110809130153" -->
<!-- sent="Tue, 9 Aug 2011 09:01:47 -0400" -->
<!-- isosent="20110809130147" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] bug report-" -->
<!-- id="8C9A049C-C690-4196-8875-C5F8FD0AF669_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4E412E29.7070000_at_hlrs.de" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-09 09:01:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9637.php">Shiqing Fan: "Re: [OMPI devel] bug report-"</a>
<li><strong>Previous message:</strong> <a href="9635.php">Shiqing Fan: "Re: [OMPI devel] bug report-"</a>
<li><strong>In reply to:</strong> <a href="9635.php">Shiqing Fan: "Re: [OMPI devel] bug report-"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9637.php">Shiqing Fan: "Re: [OMPI devel] bug report-"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If all processes are coming out to be rank 0, it *may* mean that you're dynamically linking to the wrong MPI library at run time, or have some other kind of MPI implementation/version mismatch. 
<br>
<p>At least, it can mean this in a POSIX environment.  I don't rightly know what it means in a Windows environment, but I thought I'd throw this out there...
<br>
<p><p>On Aug 9, 2011, at 8:55 AM, Shiqing Fan wrote:
<br>
<p><span class="quotelev1">&gt; Hi Renyong,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If the same problem occurs under Linux, then the Boost.MPI library might have compatible issues with Open MPI, but it still needs to be verified.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, I'm also confused why the simple code didn't work for you. The only guess is the environment is messed up by different MPI implementations, that the launched mpi processes are several 'singleton' jobs which have all rank 0.
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
<span class="quotelev1">&gt; On 2011-08-09 2:00 PM, renyong.yang wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     I've solved the same weird error on Linux, but have not tried Windows yet. The error recurs on Linux system, when I firstly use mpich on my Linux, the program works fine, then I uninstalled it and switched to your open-mpi,  the error came out without warning, and I tried to change the compiler to mpic++ other than g++, the error remains. So I doubt if the Boost.MPI is compatible with current MPI system, I recompiled the Boost.MPI library and substituted the old ones, the code with Boost library came back to work. So I guess the old compiled Boost library depends on other library like mpich, so it can't work with current open-mpi because they are incompatible, however, I'm still confused why simple code (In the last mail I sent to you) which does not depend on Boost library(I never used mpich on Windows before), can not work.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Wishes~
</span><br>
<span class="quotelev2">&gt;&gt; Renyong
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2011/8/9 Shiqing Fan &lt;fan_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The code works for me under MinGW console with the pre-compiled installer. Could you try &quot;which mpicc&quot; to ensure that the correct Open MPI commands are in path?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; For building Open MPI by your self with CMake, you have to configure it in the GUI and then generate the sln files by pressing the generate button. I don't recommend to use the other two means, they haven't been tested for some while.
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
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 2011-08-09 3:48 AM, renyong.yang wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  the following code:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int main(int argc, char **argv)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int  procnum;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Initialize MPI */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Find out this processor number */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MPI_Comm_rank(MPI_COMM_WORLD, &amp;procnum);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Find out the number of processors */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  std::cout &lt;&lt; &quot;I'm process: &quot; &lt;&lt; procnum &lt;&lt; std::endl;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MPI_Finalize();
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  return 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; also goes with the same rank &quot;0&quot; error, I think if there's something wrong with the auxiliary program &quot;mpirun&quot; ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; BTW, I tried all the 3 means on your  <a href="http://svn.open-mpi.org/svn/ompi/trunk/README.WINDOWS.txt">http://svn.open-mpi.org/svn/ompi/trunk/README.WINDOWS.txt</a> guideline but none worked to compile my own dll for <a href="http://www.open-mpi.org/software/ompi/v1.4/downloads/openmpi-1.4.3.tar.bz2">http://www.open-mpi.org/software/ompi/v1.4/downloads/openmpi-1.4.3.tar.bz2</a>, the first approach failed because I found no .sln file in the distributed tarballs after configuring with cmake, the second mean I can not use is the lacking of 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi-static.tgz
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                           
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file, the 3rd solution I tried does not work neither, because I don't know what the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ash.exe
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                         
</span><br>
<span class="quotelev3">&gt;&gt;&gt; shell interpreter you are actually pointing to, so I'd be much appreciated if you can tell me the  a working approach. Thanks very much.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2011/8/9 Shiqing Fan &lt;fan_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've never tried this Boost.MPI with Open MPI on Windows. Does it work without the Boost.MPI library? Did you run your test under MinGW?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Shiqing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 2011-08-08 5:31 PM, renyong.yang wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Run time environment of mine is Windows 7, with the unstable OpenMPI_v1.5.3-2_win32.exe release for Windows, together with Microsoft Compute Cluster Pack. Additionally I'm using Boost.MPI library v1.47 compiled by mingw, I write those following codes:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; int main(int argc, char **argv)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  mpi::environment env(argc, argv); // Boost.MPI class
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  boost::mpi::communicator worldCom; // Boost.MPI class
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  std::cout &lt;&lt; &quot;rank():&quot; &lt;&lt; worldCom.rank() &lt;&lt; std::endl;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         worldCom.barrier();
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                                 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; return 0;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and successfully compiled and linked with your library as &quot;a.exe&quot; by mingw, however, if I run it:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;mpirun -np 4 a.exe
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the command will create 4 process with the same rank &quot;0&quot;, I wonder if it's the bug of your unstable release for windows?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; BTW, can you publish the Visual studio project to the subversion? Thanks very much.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Shiqing Fan
</span><br>
<span class="quotelev3">&gt;&gt;&gt; High Performance Computing Center Stuttgart (HLRS)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tel: ++49(0)711-685-87234      Nobelstrasse 19
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fax: ++49(0)711-685-65832      70569 Stuttgart
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.hlrs.de/organization/people/shiqing-fan/">http://www.hlrs.de/organization/people/shiqing-fan/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; email: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fan_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Shiqing Fan
</span><br>
<span class="quotelev2">&gt;&gt; High Performance Computing Center Stuttgart (HLRS)
</span><br>
<span class="quotelev2">&gt;&gt; Tel: ++49(0)711-685-87234      Nobelstrasse 19
</span><br>
<span class="quotelev2">&gt;&gt; Fax: ++49(0)711-685-65832      70569 Stuttgart
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.hlrs.de/organization/people/shiqing-fan/">http://www.hlrs.de/organization/people/shiqing-fan/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; email: 
</span><br>
<span class="quotelev2">&gt;&gt; fan_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Shiqing Fan
</span><br>
<span class="quotelev1">&gt; High Performance Computing Center Stuttgart (HLRS)
</span><br>
<span class="quotelev1">&gt; Tel: ++49(0)711-685-87234      Nobelstrasse 19
</span><br>
<span class="quotelev1">&gt; Fax: ++49(0)711-685-65832      70569 Stuttgart
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.hlrs.de/organization/people/shiqing-fan/">http://www.hlrs.de/organization/people/shiqing-fan/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; email: 
</span><br>
<span class="quotelev1">&gt; fan_at_[hidden]
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9637.php">Shiqing Fan: "Re: [OMPI devel] bug report-"</a>
<li><strong>Previous message:</strong> <a href="9635.php">Shiqing Fan: "Re: [OMPI devel] bug report-"</a>
<li><strong>In reply to:</strong> <a href="9635.php">Shiqing Fan: "Re: [OMPI devel] bug report-"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9637.php">Shiqing Fan: "Re: [OMPI devel] bug report-"</a>
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
