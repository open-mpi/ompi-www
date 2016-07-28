<?
$subject_val = "Re: [OMPI users] How to configure Intel Visual Fortran to work with OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 18 17:38:04 2012" -->
<!-- isoreceived="20120118223804" -->
<!-- sent="Wed, 18 Jan 2012 23:38:06 +0100" -->
<!-- isosent="20120118223806" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to configure Intel Visual Fortran to work with OpenMPI" -->
<!-- id="4F1749CE.3000506_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="DUB108-W257EDA0A2C01C49C1EA7D0CF810_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to configure Intel Visual Fortran to work with OpenMPI<br>
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-18 17:38:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18206.php">Randolph Pullen: "[OMPI users] system() call corrupts MPI processes"</a>
<li><strong>Previous message:</strong> <a href="18204.php">Andrew Senin: "Re: [OMPI users] Possible bug in finalize, OpenMPI v1.5, head revision"</a>
<li><strong>In reply to:</strong> <a href="18200.php">Robert garcia: "[OMPI users] How to configure Intel Visual Fortran to work with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18207.php">Robert garcia: "Re: [OMPI users] How to configure Intel Visual Fortran to work with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="18207.php">Robert garcia: "Re: [OMPI users] How to configure Intel Visual Fortran to work with OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Robert,
<br>
<p>This is a known issue. The released binary was built on Windows Server 
<br>
2008,  which has newer Windows system dependencies. We have fixed this 
<br>
problem and it is included for the next release. If you don't want to 
<br>
switch to another Windows version, I can build one working binary 
<br>
package and pass it to you off-list, meanwhile, you can also wait for 
<br>
the upcoming release.
<br>
<p><p>Best Regards,
<br>
Shiqing
<br>
<p><p>On 2012-01-18 6:21 PM, Robert garcia wrote:
<br>
<span class="quotelev1">&gt; hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm experiencing a difficulty when I'm trying to run the fortran code 
</span><br>
<span class="quotelev1">&gt; which which uses parallel processing. I started with downloading the 
</span><br>
<span class="quotelev1">&gt; /&quot;OpenMPI_v1.5.4-1_win32.exe/ 
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://www.open-mpi.org/software/ompi/v1.5/downloads/OpenMPI_v1.5.4-1_win32.exe">http://www.open-mpi.org/software/ompi/v1.5/downloads/OpenMPI_v1.5.4-1_win32.exe</a>&gt;&quot; I've 
</span><br>
<span class="quotelev1">&gt; configured everything in IVF to point out to the correct static libs 
</span><br>
<span class="quotelev1">&gt; and search paths, also set the enviromental variables Path to 
</span><br>
<span class="quotelev1">&gt; directory where OpenMPI dll's(e.g. libmpi.dll, libmpid.dll 
</span><br>
<span class="quotelev1">&gt; etc..) reside. Program compiles and links properly till the message 
</span><br>
<span class="quotelev1">&gt; pops out like &quot;The procedure entry point InterlockedCompareExchange64 
</span><br>
<span class="quotelev1">&gt; could not be located in the dynamic link library KERNEL32.dll&quot;
</span><br>
<span class="quotelev1">&gt; What can be the problem ?
</span><br>
<span class="quotelev1">&gt; Regards,
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18205/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18206.php">Randolph Pullen: "[OMPI users] system() call corrupts MPI processes"</a>
<li><strong>Previous message:</strong> <a href="18204.php">Andrew Senin: "Re: [OMPI users] Possible bug in finalize, OpenMPI v1.5, head revision"</a>
<li><strong>In reply to:</strong> <a href="18200.php">Robert garcia: "[OMPI users] How to configure Intel Visual Fortran to work with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18207.php">Robert garcia: "Re: [OMPI users] How to configure Intel Visual Fortran to work with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="18207.php">Robert garcia: "Re: [OMPI users] How to configure Intel Visual Fortran to work with OpenMPI"</a>
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
