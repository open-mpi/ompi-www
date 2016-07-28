<?
$subject_val = "Re: [OMPI users] vs2010: MPI_Address() unresolved";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 18 23:45:24 2011" -->
<!-- isoreceived="20111119044524" -->
<!-- sent="Sat, 19 Nov 2011 05:45:14 +0100" -->
<!-- isosent="20111119044514" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] vs2010: MPI_Address() unresolved" -->
<!-- id="4EC7345A.4010201_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="000001cca64e$8517ef60$8f47ce20$_at_com" -->
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
<strong>Subject:</strong> Re: [OMPI users] vs2010: MPI_Address() unresolved<br>
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-18 23:45:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17787.php">Mudassar Majeed: "[OMPI users] UDP like messaging with MPI"</a>
<li><strong>Previous message:</strong> <a href="17785.php">Shiqing Fan: "Re: [OMPI users] mpic++-wrapper-data.txt msvc10 Release/Debug 1.5.4"</a>
<li><strong>In reply to:</strong> <a href="17784.php">MM: "[OMPI users] vs2010: MPI_Address() unresolved"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17789.php">MM: "Re: [OMPI users] vs2010: MPI_Address() unresolved"</a>
<li><strong>Reply:</strong> <a href="17789.php">MM: "Re: [OMPI users] vs2010: MPI_Address() unresolved"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Does this happen also for other MPI_* functions? Probably you need to 
<br>
add OMPI_IMPORTS as an extra preprocessor.
<br>
<p>Regards,
<br>
Shiqing
<br>
<p>On 2011-11-19 1:02 AM, MM wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I get this style of errors when trying to link against libmpid.lib 
</span><br>
<span class="quotelev1">&gt;  (compiled with instructions from README.Windows part 1 cmake):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mylib.lib(myfile.obj): : error LNK2001: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; __imp__MPI_Address
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I set BUILD_SHARED_LIBS to false, so I generate static libs. I've also 
</span><br>
<span class="quotelev1">&gt; checked that the /MDd is set and indeed libmpid.lib are built against 
</span><br>
<span class="quotelev1">&gt; the DLL version of the C++ runtime when I open the solution in vs2010.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I myself link my application against the /MDd as well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't know why it's looking for __impl__MPI_Address  (__impl__ is a 
</span><br>
<span class="quotelev1">&gt; prefix related to DLLs somehow).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I gather this MPI_Address() function resides in libmpi.lib and libmpid.lib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PS: I didn't have these link errors when I built against the prebuilt 
</span><br>
<span class="quotelev1">&gt; win libraries from the website, what are the CMAke flags for those?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MM
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17786/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17787.php">Mudassar Majeed: "[OMPI users] UDP like messaging with MPI"</a>
<li><strong>Previous message:</strong> <a href="17785.php">Shiqing Fan: "Re: [OMPI users] mpic++-wrapper-data.txt msvc10 Release/Debug 1.5.4"</a>
<li><strong>In reply to:</strong> <a href="17784.php">MM: "[OMPI users] vs2010: MPI_Address() unresolved"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17789.php">MM: "Re: [OMPI users] vs2010: MPI_Address() unresolved"</a>
<li><strong>Reply:</strong> <a href="17789.php">MM: "Re: [OMPI users] vs2010: MPI_Address() unresolved"</a>
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
