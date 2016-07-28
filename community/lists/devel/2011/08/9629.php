<?
$subject_val = "Re: [OMPI devel] bug report-";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  8 17:04:44 2011" -->
<!-- isoreceived="20110808210444" -->
<!-- sent="Mon, 08 Aug 2011 23:04:37 +0200" -->
<!-- isosent="20110808210437" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] bug report-" -->
<!-- id="4E404F65.3030807_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAKk-Ga7=grMnS3XbQXRmVAtDe9eNyP12bHy4G8EBsUA=pTpZ7A_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2011-08-08 17:04:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9630.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015"</a>
<li><strong>Previous message:</strong> <a href="9628.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015"</a>
<li><strong>In reply to:</strong> <a href="9621.php">renyong.yang: "[OMPI devel] bug report-"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9634.php">Shiqing Fan: "Re: [OMPI devel] bug report-"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I've never tried this Boost.MPI with Open MPI on Windows. Does it work 
<br>
without the Boost.MPI library? Did you run your test under MinGW?
<br>
<p><p>Regards,
<br>
Shiqing
<br>
<p>On 2011-08-08 5:31 PM, renyong.yang wrote:
<br>
<span class="quotelev1">&gt;  Run time environment of mine is Windows 7, with the unstable 
</span><br>
<span class="quotelev1">&gt; OpenMPI_v1.5.3-2_win32.exe 
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://www.open-mpi.org/software/ompi/v1.5/downloads/OpenMPI_v1.5.3-2_win32.exe">http://www.open-mpi.org/software/ompi/v1.5/downloads/OpenMPI_v1.5.3-2_win32.exe</a>&gt; release 
</span><br>
<span class="quotelev1">&gt; for Windows, together with Microsoft Compute Cluster Pack. 
</span><br>
<span class="quotelev1">&gt; Additionally I'm using Boost.MPI library v1.47 compiled by mingw, I 
</span><br>
<span class="quotelev1">&gt; write those following codes:
</span><br>
<span class="quotelev1">&gt; int main(int argc, char **argv)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; mpi::environment env(argc, argv); // Boost.MPI class
</span><br>
<span class="quotelev1">&gt; boost::mpi::communicator worldCom; // Boost.MPI class
</span><br>
<span class="quotelev1">&gt; std::cout &lt;&lt; &quot;rank():&quot; &lt;&lt; worldCom.rank() &lt;&lt; std::endl;
</span><br>
<span class="quotelev1">&gt;         worldCom.barrier();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; and successfully compiled and linked with your library as &quot;a.exe&quot; by 
</span><br>
<span class="quotelev1">&gt; mingw, however, if I run it:
</span><br>
<span class="quotelev2">&gt; &gt;mpirun -np 4 a.exe
</span><br>
<span class="quotelev1">&gt; the command will create 4 process with the same rank &quot;0&quot;, I wonder if 
</span><br>
<span class="quotelev1">&gt; it's the bug of your unstable release for windows?
</span><br>
<span class="quotelev1">&gt; BTW, can you publish the Visual studio project to the subversion? 
</span><br>
<span class="quotelev1">&gt; Thanks very much.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9629/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9630.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015"</a>
<li><strong>Previous message:</strong> <a href="9628.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015"</a>
<li><strong>In reply to:</strong> <a href="9621.php">renyong.yang: "[OMPI devel] bug report-"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9634.php">Shiqing Fan: "Re: [OMPI devel] bug report-"</a>
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
