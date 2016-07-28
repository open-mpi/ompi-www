<?
$subject_val = "[OMPI devel] bug report-";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  8 11:31:28 2011" -->
<!-- isoreceived="20110808153128" -->
<!-- sent="Mon, 8 Aug 2011 23:31:24 +0800" -->
<!-- isosent="20110808153124" -->
<!-- name="renyong.yang" -->
<!-- email="yangrenyong_at_[hidden]" -->
<!-- subject="[OMPI devel] bug report-" -->
<!-- id="CAKk-Ga7=grMnS3XbQXRmVAtDe9eNyP12bHy4G8EBsUA=pTpZ7A_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] bug report-<br>
<strong>From:</strong> renyong.yang (<em>yangrenyong_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-08 11:31:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9622.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015"</a>
<li><strong>Previous message:</strong> <a href="9620.php">Wesley Bland: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9629.php">Shiqing Fan: "Re: [OMPI devel] bug report-"</a>
<li><strong>Reply:</strong> <a href="9629.php">Shiqing Fan: "Re: [OMPI devel] bug report-"</a>
<li><strong>Maybe reply:</strong> <a href="9634.php">Shiqing Fan: "Re: [OMPI devel] bug report-"</a>
<li><strong>Maybe reply:</strong> <a href="9635.php">Shiqing Fan: "Re: [OMPI devel] bug report-"</a>
<li><strong>Maybe reply:</strong> <a href="9637.php">Shiqing Fan: "Re: [OMPI devel] bug report-"</a>
<li><strong>Maybe reply:</strong> <a href="9638.php">Shiqing Fan: "Re: [OMPI devel] bug report-"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;Run time environment of mine is Windows 7, with the unstable
<br>
OpenMPI_v1.5.3-2_win32.exe&lt;<a href="http://www.open-mpi.org/software/ompi/v1.5/downloads/OpenMPI_v1.5.3-2_win32.exe">http://www.open-mpi.org/software/ompi/v1.5/downloads/OpenMPI_v1.5.3-2_win32.exe</a>&gt;
<br>
release
<br>
for Windows, together with Microsoft Compute Cluster Pack. Additionally I'm
<br>
using Boost.MPI library v1.47 compiled by mingw, I write those following
<br>
codes:
<br>
int main(int argc, char **argv)
<br>
{
<br>
mpi::environment env(argc, argv); // Boost.MPI class
<br>
boost::mpi::communicator worldCom; // Boost.MPI class
<br>
std::cout &lt;&lt; &quot;rank():&quot; &lt;&lt; worldCom.rank() &lt;&lt; std::endl;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;worldCom.barrier();
<br>
<p>return 0;
<br>
}
<br>
and successfully compiled and linked with your library as &quot;a.exe&quot; by mingw,
<br>
however, if I run it:
<br>
<span class="quotelev1">&gt;mpirun -np 4 a.exe
</span><br>
the command will create 4 process with the same rank &quot;0&quot;, I wonder if it's
<br>
the bug of your unstable release for windows?
<br>
BTW, can you publish the Visual studio project to the subversion? Thanks
<br>
very much.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9621/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9622.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015"</a>
<li><strong>Previous message:</strong> <a href="9620.php">Wesley Bland: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9629.php">Shiqing Fan: "Re: [OMPI devel] bug report-"</a>
<li><strong>Reply:</strong> <a href="9629.php">Shiqing Fan: "Re: [OMPI devel] bug report-"</a>
<li><strong>Maybe reply:</strong> <a href="9634.php">Shiqing Fan: "Re: [OMPI devel] bug report-"</a>
<li><strong>Maybe reply:</strong> <a href="9635.php">Shiqing Fan: "Re: [OMPI devel] bug report-"</a>
<li><strong>Maybe reply:</strong> <a href="9637.php">Shiqing Fan: "Re: [OMPI devel] bug report-"</a>
<li><strong>Maybe reply:</strong> <a href="9638.php">Shiqing Fan: "Re: [OMPI devel] bug report-"</a>
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
