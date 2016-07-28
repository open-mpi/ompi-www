<?
$subject_val = "Re: [OMPI users] Some problems";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 27 08:28:43 2010" -->
<!-- isoreceived="20101027122843" -->
<!-- sent="Wed, 27 Oct 2010 14:30:25 +0200" -->
<!-- isosent="20101027123025" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Some problems" -->
<!-- id="4CC81B61.5030900_at_hlrs.de" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="329429.25918.qm_at_web15806.mail.cnb.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Some problems<br>
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-27 08:30:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14631.php">Stefan Kuhne: "[OMPI users] Using hostfile with default hostfile"</a>
<li><strong>Previous message:</strong> <a href="14629.php">Shiqing Fan: "Re: [OMPI users] Problem with MPI_Comm_accept in a dynamic	client/server application"</a>
<li><strong>In reply to:</strong> <a href="14542.php">&#233;&#130;&#181;&#230;&#128;&#157;&#231;&#157;&#191;: "[OMPI users] Some problems"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Sorry for late reply.
<br>
<p>At moment, CMake build with MinGW is not supported yet.
<br>
<p>For the undefined reference problem, if you use VS to compile your 
<br>
source code,  you probably have to add libmpi_cxx.lib, libmpi.lib, 
<br>
libopen-pal.lib and libopen-rte.lib into the project linker properties 
<br>
(don't forget to set the &quot;Additional Library Directories&quot; to the 
<br>
installed OMPI lib path), and then also add &quot;OMPI_IMPORTS, OPAL_IMPORTS, 
<br>
ORTE_IMPORTS&quot; into preprocessor definitions.
<br>
<p>For the detailed compiler options used by Open MPI, you could run 
<br>
&quot;mpicxx --showme&quot; or &quot;mpicc --showme&quot;.
<br>
<p>Hope this will solve the problem.
<br>
<p><p>Regards,
<br>
Shiqing
<br>
<p><p>On 2010-10-22 10:01 AM, &#233;&#130;&#181;&#230;&#128;&#157;&#231;&#157;&#191; wrote:
<br>
<span class="quotelev1">&gt; Hello, I'm using OpenMPI with VTK (Visualization Toolkit) now on 
</span><br>
<span class="quotelev1">&gt; Windows Vista, and here are some problems occured during installation.
</span><br>
<span class="quotelev1">&gt; OpenMPI 1.5: Error during CMake, no matter using MinGW32 or VS2005 as 
</span><br>
<span class="quotelev1">&gt; compiler
</span><br>
<span class="quotelev1">&gt; OpenMPI 1.4.3:
</span><br>
<span class="quotelev1">&gt; 1 Building with VS2005 is OK, but when I used MinGW v3.81 (I had 
</span><br>
<span class="quotelev1">&gt; chosen MinGW in CMake and then used mingw32-make to build) it reported 
</span><br>
<span class="quotelev1">&gt; error at the very beginning (0%) of make progress
</span><br>
<span class="quotelev1">&gt; 2 When I tried to build VTK with OM, it reported 'undefined reference 
</span><br>
<span class="quotelev1">&gt; to 'MPI::Comm::Comm()', ''undefined reference to 'MPI::Win::Free()' 
</span><br>
<span class="quotelev1">&gt; and 'undefined reference to 'MPI::Datatype::Free()'
</span><br>
<span class="quotelev1">&gt; So could I get some help? Thanks!
</span><br>
<span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14630/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14631.php">Stefan Kuhne: "[OMPI users] Using hostfile with default hostfile"</a>
<li><strong>Previous message:</strong> <a href="14629.php">Shiqing Fan: "Re: [OMPI users] Problem with MPI_Comm_accept in a dynamic	client/server application"</a>
<li><strong>In reply to:</strong> <a href="14542.php">&#233;&#130;&#181;&#230;&#128;&#157;&#231;&#157;&#191;: "[OMPI users] Some problems"</a>
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
