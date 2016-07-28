<?
$subject_val = "Re: [OMPI devel] bug report-";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  9 05:35:21 2011" -->
<!-- isoreceived="20110809093521" -->
<!-- sent="Tue, 09 Aug 2011 11:35:14 +0200" -->
<!-- isosent="20110809093514" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] bug report-" -->
<!-- id="4E40FF52.30809_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAKk-Ga453kLN5puSpNjXAgXL4hBkXOimB_2=oOY7snGG+aBSeg_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2011-08-09 05:35:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9635.php">Shiqing Fan: "Re: [OMPI devel] bug report-"</a>
<li><strong>Previous message:</strong> <a href="9633.php">Mike Dubman: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25005"</a>
<li><strong>Maybe in reply to:</strong> <a href="9621.php">renyong.yang: "[OMPI devel] bug report-"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9635.php">Shiqing Fan: "Re: [OMPI devel] bug report-"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>The code works for me under MinGW console with the pre-compiled 
<br>
installer. Could you try &quot;which mpicc&quot; to ensure that the correct Open 
<br>
MPI commands are in path?
<br>
<p>For building Open MPI by your self with CMake, you have to configure it 
<br>
in the GUI and then generate the sln files by pressing the generate 
<br>
button. I don't recommend to use the other two means, they haven't been 
<br>
tested for some while.
<br>
<p><p>Regards,
<br>
Shiqing
<br>
<p>On 2011-08-09 3:48 AM, renyong.yang wrote:
<br>
<span class="quotelev1">&gt; hi,
</span><br>
<span class="quotelev1">&gt;  the following code:
</span><br>
<span class="quotelev1">&gt; int main(int argc, char **argv)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; int  procnum;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* Initialize MPI */
</span><br>
<span class="quotelev1">&gt; MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* Find out this processor number */
</span><br>
<span class="quotelev1">&gt; MPI_Comm_rank(MPI_COMM_WORLD, &amp;procnum);
</span><br>
<span class="quotelev1">&gt; /* Find out the number of processors */
</span><br>
<span class="quotelev1">&gt; std::cout &lt;&lt; &quot;I'm process: &quot; &lt;&lt; procnum &lt;&lt; std::endl;
</span><br>
<span class="quotelev1">&gt; MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; also goes with the same rank &quot;0&quot; error, I think if there's something 
</span><br>
<span class="quotelev1">&gt; wrong with the auxiliary program &quot;mpirun&quot; ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BTW, I tried all the 3 means on your 
</span><br>
<span class="quotelev1">&gt; <a href="http://svn.open-mpi.org/svn/ompi/trunk/README.WINDOWS.txt">http://svn.open-mpi.org/svn/ompi/trunk/README.WINDOWS.txt</a> guideline 
</span><br>
<span class="quotelev1">&gt; but none worked to compile my own dll for 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/software/ompi/v1.4/downloads/openmpi-1.4.3.tar.bz2">http://www.open-mpi.org/software/ompi/v1.4/downloads/openmpi-1.4.3.tar.bz2</a>, 
</span><br>
<span class="quotelev1">&gt; the first approach failed because I found no .sln file in the 
</span><br>
<span class="quotelev1">&gt; distributed tarballs after configuring with cmake, the second mean I 
</span><br>
<span class="quotelev1">&gt; can not use is the lacking of ompi-static.tgz file, the 3rd solution I 
</span><br>
<span class="quotelev1">&gt; tried does not work neither, because I don't know what the ash.exe 
</span><br>
<span class="quotelev1">&gt; shell interpreter you are actually pointing to, so I'd be much 
</span><br>
<span class="quotelev1">&gt; appreciated if you can tell me the  a working approach. Thanks very much.
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
<span class="quotelev1">&gt;     I've never tried this Boost.MPI with Open MPI on Windows. Does it
</span><br>
<span class="quotelev1">&gt;     work without the Boost.MPI library? Did you run your test under MinGW?
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
<span class="quotelev1">&gt;     On 2011-08-08 5:31 PM, renyong.yang wrote:
</span><br>
<span class="quotelev2">&gt;&gt;      Run time environment of mine is Windows 7, with the unstable
</span><br>
<span class="quotelev2">&gt;&gt;     OpenMPI_v1.5.3-2_win32.exe
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;<a href="http://www.open-mpi.org/software/ompi/v1.5/downloads/OpenMPI_v1.5.3-2_win32.exe">http://www.open-mpi.org/software/ompi/v1.5/downloads/OpenMPI_v1.5.3-2_win32.exe</a>&gt; release
</span><br>
<span class="quotelev2">&gt;&gt;     for Windows, together with Microsoft Compute Cluster Pack.
</span><br>
<span class="quotelev2">&gt;&gt;     Additionally I'm using Boost.MPI library v1.47 compiled by mingw,
</span><br>
<span class="quotelev2">&gt;&gt;     I write those following codes:
</span><br>
<span class="quotelev2">&gt;&gt;     int main(int argc, char **argv)
</span><br>
<span class="quotelev2">&gt;&gt;     {
</span><br>
<span class="quotelev2">&gt;&gt;     mpi::environment env(argc, argv); // Boost.MPI class
</span><br>
<span class="quotelev2">&gt;&gt;     boost::mpi::communicator worldCom; // Boost.MPI class
</span><br>
<span class="quotelev2">&gt;&gt;     std::cout &lt;&lt; &quot;rank():&quot; &lt;&lt; worldCom.rank() &lt;&lt; std::endl;
</span><br>
<span class="quotelev2">&gt;&gt;             worldCom.barrier();
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     return 0;
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt;     and successfully compiled and linked with your library as &quot;a.exe&quot;
</span><br>
<span class="quotelev2">&gt;&gt;     by mingw, however, if I run it:
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;mpirun -np 4 a.exe
</span><br>
<span class="quotelev2">&gt;&gt;     the command will create 4 process with the same rank &quot;0&quot;, I
</span><br>
<span class="quotelev2">&gt;&gt;     wonder if it's the bug of your unstable release for windows?
</span><br>
<span class="quotelev2">&gt;&gt;     BTW, can you publish the Visual studio project to the subversion?
</span><br>
<span class="quotelev2">&gt;&gt;     Thanks very much.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;     devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;     devel_at_[hidden]  &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9634/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9635.php">Shiqing Fan: "Re: [OMPI devel] bug report-"</a>
<li><strong>Previous message:</strong> <a href="9633.php">Mike Dubman: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25005"</a>
<li><strong>Maybe in reply to:</strong> <a href="9621.php">renyong.yang: "[OMPI devel] bug report-"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9635.php">Shiqing Fan: "Re: [OMPI devel] bug report-"</a>
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
