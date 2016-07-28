<?
$subject_val = "Re: [OMPI users] Problem launching application on windows";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 28 07:33:11 2011" -->
<!-- isoreceived="20111028113311" -->
<!-- sent="Fri, 28 Oct 2011 13:33:06 +0200" -->
<!-- isosent="20111028113306" -->
<!-- name="Alex van 't Veer" -->
<!-- email="avantveer_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem launching application on windows" -->
<!-- id="01EEFBFAE71D9647ACE91B708502D7ACB702B6_at_FJLDMAIL01.ldam.fugro-jason.local" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4EAA80C3.2010205_at_hlrs.de" -->
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
<strong>From:</strong> Alex van 't Veer (<em>avantveer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-28 07:33:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17649.php">John R. Cary: "Re: [OMPI users] successful story of building openmpi on cygwin?"</a>
<li><strong>Previous message:</strong> <a href="17647.php">Shiqing Fan: "Re: [OMPI users] Problem launching application on windows"</a>
<li><strong>In reply to:</strong> <a href="17647.php">Shiqing Fan: "Re: [OMPI users] Problem launching application on windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/01/18123.php">Shiqing Fan: "Re: [OMPI users] Problem launching application on windows"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/01/18123.php">Shiqing Fan: "Re: [OMPI users] Problem launching application on windows"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Shiqing,
<br>
<p>&nbsp;
<br>
<p>Unfortunately that did not solve the problem.
<br>
<p>Can you tell me something more about how the sockets work and how they could
<br>
get corrupted? Maybe I can figure out what is going wrong.
<br>
<p>&nbsp;
<br>
<p>Thanks
<br>
<p>&nbsp;
<br>
<p>________________________________
<br>
<p>From: Shiqing Fan [mailto:fan_at_[hidden]] 
<br>
Sent: Friday, October 28, 2011 12:16 PM
<br>
To: Open MPI Users
<br>
Cc: Alex van 't Veer
<br>
Subject: Re: [OMPI users] Problem launching application on windows
<br>
<p>&nbsp;
<br>
<p>Hi,
<br>
<p>This looks not normal, because this error might happen mainly by improper
<br>
sockets. I don't have any clue at moment, as I can't reproduce it.
<br>
<p>Could you try to reinstall Open MPI? And make sure there is no other
<br>
installation on your system. If this is still not working, try using Open MPI
<br>
1.5.3. Please let me know whether these will work for you or not.
<br>
<p>Regards,
<br>
Shiqing
<br>
<p>On 2011-10-27 11:35 AM, Alex van 't Veer wrote: 
<br>
<p>Hi
<br>
<p>&nbsp;
<br>
<p>I've installed the OpenMPI 1.5.4-1 64-bit binaries on windows 7 when I run
<br>
mpirun.exe without any options I get the help text and everything seems to
<br>
work fine but when I try to actually run a application, I get the following
<br>
error:
<br>
<p>..\..\..\openmpi-1.5.4\opal\event\event.c: ompi_evesel-&gt;dispatch() failed.
<br>
<p>I get the error when running any application, to exclude my own application I
<br>
tried the hello world example and it returns the same error. (The command I
<br>
used is mpirun.exe helloworld.exe)
<br>
<p>Searching for the error in the list or looking at event.c didn't get me much
<br>
further, can anyone point me in the right direction for solving this problem?
<br>
<p>&nbsp;
<br>
<p>Thanks
<br>
<p><p><p><p><p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><p><p><p><p><pre>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17648/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17649.php">John R. Cary: "Re: [OMPI users] successful story of building openmpi on cygwin?"</a>
<li><strong>Previous message:</strong> <a href="17647.php">Shiqing Fan: "Re: [OMPI users] Problem launching application on windows"</a>
<li><strong>In reply to:</strong> <a href="17647.php">Shiqing Fan: "Re: [OMPI users] Problem launching application on windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/01/18123.php">Shiqing Fan: "Re: [OMPI users] Problem launching application on windows"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/01/18123.php">Shiqing Fan: "Re: [OMPI users] Problem launching application on windows"</a>
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
