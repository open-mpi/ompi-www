<?
$subject_val = "Re: [OMPI users] Problem launching application on windows";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 28 06:15:38 2011" -->
<!-- isoreceived="20111028101538" -->
<!-- sent="Fri, 28 Oct 2011 12:15:31 +0200" -->
<!-- isosent="20111028101531" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem launching application on windows" -->
<!-- id="4EAA80C3.2010205_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="01EEFBFAE71D9647ACE91B708502D7ACFEE938_at_FJLDMAIL01.ldam.fugro-jason.local" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem launching application on windows<br>
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-28 06:15:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17648.php">Alex van 't Veer: "Re: [OMPI users] Problem launching application on windows"</a>
<li><strong>Previous message:</strong> <a href="17646.php">Shiqing Fan: "Re: [OMPI users] successful story of building openmpi on cygwin?"</a>
<li><strong>In reply to:</strong> <a href="17634.php">Alex van 't Veer: "[OMPI users] Problem launching application on windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17648.php">Alex van 't Veer: "Re: [OMPI users] Problem launching application on windows"</a>
<li><strong>Reply:</strong> <a href="17648.php">Alex van 't Veer: "Re: [OMPI users] Problem launching application on windows"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>This looks not normal, because this error might happen mainly by 
<br>
improper sockets. I don't have any clue at moment, as I can't reproduce it.
<br>
<p>Could you try to reinstall Open MPI? And make sure there is no other 
<br>
installation on your system. If this is still not working, try using 
<br>
Open MPI 1.5.3. Please let me know whether these will work for you or not.
<br>
<p>Regards,
<br>
Shiqing
<br>
<p>On 2011-10-27 11:35 AM, Alex van 't Veer wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've installed the OpenMPI 1.5.4-1 64-bit binaries on windows 7 when I 
</span><br>
<span class="quotelev1">&gt; run mpirun.exe without any options I get the help text and everything 
</span><br>
<span class="quotelev1">&gt; seems to work fine but when I try to actually run a application, I get 
</span><br>
<span class="quotelev1">&gt; the following error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ..\..\..\openmpi-1.5.4\opal\event\event.c: ompi_evesel-&gt;dispatch() failed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I get the error when running any application, to exclude my own 
</span><br>
<span class="quotelev1">&gt; application I tried the hello world example and it returns the same 
</span><br>
<span class="quotelev1">&gt; error. (The command I used is mpirun.exe helloworld.exe)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Searching for the error in the list or looking at event.c didn't get 
</span><br>
<span class="quotelev1">&gt; me much further, can anyone point me in the right direction for 
</span><br>
<span class="quotelev1">&gt; solving this problem?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17647/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17648.php">Alex van 't Veer: "Re: [OMPI users] Problem launching application on windows"</a>
<li><strong>Previous message:</strong> <a href="17646.php">Shiqing Fan: "Re: [OMPI users] successful story of building openmpi on cygwin?"</a>
<li><strong>In reply to:</strong> <a href="17634.php">Alex van 't Veer: "[OMPI users] Problem launching application on windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17648.php">Alex van 't Veer: "Re: [OMPI users] Problem launching application on windows"</a>
<li><strong>Reply:</strong> <a href="17648.php">Alex van 't Veer: "Re: [OMPI users] Problem launching application on windows"</a>
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
