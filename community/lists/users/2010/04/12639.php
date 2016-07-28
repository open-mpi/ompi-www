<?
$subject_val = "Re: [OMPI users] import/export issues on Windows";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 15 07:27:19 2010" -->
<!-- isoreceived="20100415112719" -->
<!-- sent="Thu, 15 Apr 2010 13:28:23 +0200" -->
<!-- isosent="20100415112823" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] import/export issues on Windows" -->
<!-- id="4BC6F857.8070900_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="FA35C5CD419A6A499BEA69EF175460AA1EF3DF_at_amsdc1-s-02348.europe.shell.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] import/export issues on Windows<br>
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-15 07:28:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12640.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault in mca_btl_tcp"</a>
<li><strong>Previous message:</strong> <a href="12638.php">Werner Van Geit: "Re: [OMPI users] Segmentation fault in mca_btl_tcp"</a>
<li><strong>In reply to:</strong> <a href="12636.php">Ben.Kuppers_at_[hidden]: "[OMPI users] import/export issues on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12647.php">Ben.Kuppers_at_[hidden]: "Re: [OMPI users] import/export issues on Windows"</a>
<li><strong>Reply:</strong> <a href="12647.php">Ben.Kuppers_at_[hidden]: "Re: [OMPI users] import/export issues on Windows"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>It seems Microsoft C++ compiler could recognize what the code wants to 
<br>
do, while Intel C++ compiler couldn't. I know a solution for this kind 
<br>
of problem, but it involves some code base changes,  I need some time to 
<br>
test it. At moment, if you want to use Intel C++ compiler, the dirty 
<br>
solution is just changing &quot;OMPI_DECLSPEC&quot; in ompi/mpi/cxx/functions.h to 
<br>
&quot;__declspec(dllexport)&quot;. Or you could switch to use Microsoft compiler 
<br>
only for this libmpi_cxx project.
<br>
<p><p>Thanks,
<br>
Shiqing
<br>
<p><p><p><p>On 2010-4-15 9:52 AM, Ben.Kuppers_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I use 1.4.2rc1 I am able build in Visual Studio 2005 (CMake 2.6.4 
</span><br>
<span class="quotelev1">&gt; default settings VS2005 x64)but I get the following warning (among 
</span><br>
<span class="quotelev1">&gt; others):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 11&gt;..\..\..\..\..\ompi\mpi\cxx\intercepts.cc(81) : warning C4273: 
</span><br>
<span class="quotelev1">&gt; 'MPI::InitializeIntercepts' : inconsistent dll linkage
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 11&gt;        E:\source\openmpi-1.4.1\ompi/mpi/cxx/functions.h(64) : see 
</span><br>
<span class="quotelev1">&gt; previous definition of 'InitializeIntercepts'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I convert the Visual Studio projects to use the Intel 10.1 
</span><br>
<span class="quotelev1">&gt; compiler (required for our production environment) this warning 
</span><br>
<span class="quotelev1">&gt; becomes an error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 11&gt;E:\source\openmpi-1.4.2rc1\ompi\mpi\cxx\intercepts.cc(80): error: a 
</span><br>
<span class="quotelev1">&gt; function declared &quot;dllimport&quot; may not be defined
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 11&gt;  MPI::InitializeIntercepts()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This issue seems related to 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2010/03/12392.php">http://www.open-mpi.org/community/lists/users/2010/03/12392.php</a>.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It appears to me that you are trying to use a single symbol to import 
</span><br>
<span class="quotelev1">&gt; from the c module and export from cxx module at the same time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any help would be appreciated,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ben
</span><br>
<span class="quotelev1">&gt;
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
<p><p><pre>
-- 
--------------------------------------------------------------
Shiqing Fan                          <a href="http://www.hlrs.de/people/fan">http://www.hlrs.de/people/fan</a>
High Performance Computing           Tel.: +49 711 685 87234
   Center Stuttgart (HLRS)            Fax.: +49 711 685 65832
Address:Allmandring 30               email: fan_at_[hidden]
70569 Stuttgart
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12639/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12640.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault in mca_btl_tcp"</a>
<li><strong>Previous message:</strong> <a href="12638.php">Werner Van Geit: "Re: [OMPI users] Segmentation fault in mca_btl_tcp"</a>
<li><strong>In reply to:</strong> <a href="12636.php">Ben.Kuppers_at_[hidden]: "[OMPI users] import/export issues on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12647.php">Ben.Kuppers_at_[hidden]: "Re: [OMPI users] import/export issues on Windows"</a>
<li><strong>Reply:</strong> <a href="12647.php">Ben.Kuppers_at_[hidden]: "Re: [OMPI users] import/export issues on Windows"</a>
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
