<?
$subject_val = "Re: [OMPI users] Problem launching application on windows";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 10 11:32:26 2012" -->
<!-- isoreceived="20120110163226" -->
<!-- sent="Tue, 10 Jan 2012 17:32:19 +0100" -->
<!-- isosent="20120110163219" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem launching application on windows" -->
<!-- id="4F0C6813.3080506_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="01EEFBFAE71D9647ACE91B708502D7ACB702B6_at_FJLDMAIL01.ldam.fugro-jason.local" -->
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
<strong>Date:</strong> 2012-01-10 11:32:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18124.php">Anas Al-Trad: "Re: [OMPI users] SIGV at MPI_Cart_sub"</a>
<li><strong>Previous message:</strong> <a href="18122.php">Jeff Squyres: "Re: [OMPI users] SIGV at MPI_Cart_sub"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/10/17648.php">Alex van 't Veer: "Re: [OMPI users] Problem launching application on windows"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Alex,
<br>
<p>Have you solved the problem?
<br>
<p>Another user also spotted the same problem but under Cygwin. Did you 
<br>
also see the problem under Cygwin, or in normal Windows command prompt? 
<br>
Actually, there shouldn't be anything wrong with sockets in Open MPI to 
<br>
cause such errors anymore, but they of course won't work correctly under 
<br>
Cygwin in some cases.
<br>
<p><p>Regards,
<br>
Shiqing
<br>
<p>On 2011-10-28 1:33 PM, Alex van 't Veer wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Shiqing,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Unfortunately that did not solve the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you tell me something more about how the sockets work and how they 
</span><br>
<span class="quotelev1">&gt; could get corrupted? Maybe I can figure out what is going wrong.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *From:*Shiqing Fan [mailto:fan_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; *Sent:* Friday, October 28, 2011 12:16 PM
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Users
</span><br>
<span class="quotelev1">&gt; *Cc:* Alex van 't Veer
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI users] Problem launching application on windows
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This looks not normal, because this error might happen mainly by 
</span><br>
<span class="quotelev1">&gt; improper sockets. I don't have any clue at moment, as I can't 
</span><br>
<span class="quotelev1">&gt; reproduce it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could you try to reinstall Open MPI? And make sure there is no other 
</span><br>
<span class="quotelev1">&gt; installation on your system. If this is still not working, try using 
</span><br>
<span class="quotelev1">&gt; Open MPI 1.5.3. Please let me know whether these will work for you or not.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Shiqing
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2011-10-27 11:35 AM, Alex van 't Veer wrote:
</span><br>
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]  &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; High Performance Computing CenterStuttgart  (HLRS)
</span><br>
<span class="quotelev1">&gt; Tel: ++49(0)711-685-87234      Nobelstrasse 19
</span><br>
<span class="quotelev1">&gt; Fax: ++49(0)711-685-65832      70569Stuttgart
</span><br>
<span class="quotelev1">&gt; <a href="http://www.hlrs.de/organization/people/shiqing-fan/">http://www.hlrs.de/organization/people/shiqing-fan/</a>
</span><br>
<span class="quotelev1">&gt; email:fan_at_[hidden]  &lt;mailto:fan_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt;   
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18123/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18124.php">Anas Al-Trad: "Re: [OMPI users] SIGV at MPI_Cart_sub"</a>
<li><strong>Previous message:</strong> <a href="18122.php">Jeff Squyres: "Re: [OMPI users] SIGV at MPI_Cart_sub"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/10/17648.php">Alex van 't Veer: "Re: [OMPI users] Problem launching application on windows"</a>
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
