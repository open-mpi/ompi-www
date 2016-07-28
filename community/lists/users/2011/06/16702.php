<?
$subject_val = "Re: [OMPI users] Building OpenMPI v. 1.4.3 in VS2008";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 10 14:35:00 2011" -->
<!-- isoreceived="20110610183500" -->
<!-- sent="Fri, 10 Jun 2011 18:34:54 +0000" -->
<!-- isosent="20110610183454" -->
<!-- name="Alan Nichols" -->
<!-- email="anichols_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building OpenMPI v. 1.4.3 in VS2008" -->
<!-- id="CCC13BC82DE1884E80B95641984EFFA71A313F2D_at_ex2a.awr.local" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4DF15A7C.9040506_at_hlrs.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Building OpenMPI v. 1.4.3 in VS2008<br>
<strong>From:</strong> Alan Nichols (<em>anichols_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-10 14:34:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16703.php">Ole Kliemann: "[OMPI users] Deadlock with barrier und RMA"</a>
<li><strong>Previous message:</strong> <a href="16701.php">Shiqing Fan: "Re: [OMPI users] FW: Issue with mpicc --showme in windows"</a>
<li><strong>In reply to:</strong> <a href="16699.php">Shiqing Fan: "Re: [OMPI users] Building OpenMPI v. 1.4.3 in VS2008"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16728.php">Shiqing Fan: "Re: [OMPI users] Building OpenMPI v. 1.4.3 in VS2008"</a>
<li><strong>Reply:</strong> <a href="16728.php">Shiqing Fan: "Re: [OMPI users] Building OpenMPI v. 1.4.3 in VS2008"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Shiquing,
<br>
<p>OK I'll give this a try... however, I realized after some Google searching in the aftermath of my previous attempt to build on VS2008 that the file that I'm missing on that platform is shipped with VS2010.
<br>
So I suspect that building on VS2010 will go smoothly as you said. My problem is that my current effort is part of a much larger project that is being built on VS2008. On the one hand I don't want at all to shift that larger code base from VS2008 to VS2010 (and fight the numerous problems that always follow an upheaval of that sort); on the other hand I'm dubious about trying to build my parallel support library on VS2010 and the rest of the code  on VS2008.
<br>
<p>Is there a way to do what I really want to do, which is build the openmpi source on VS2008?
<br>
<p>Alan Nichols
<br>
AWR - STAAR
<br>
11520 N. Port Washington Rd.
<br>
Mequon, WI 53092
<br>
P: 1.262.240.0291 x 103
<br>
F: 1.262.240.0294
<br>
E: anichols_at_[hidden]&lt;mailto:anichols_at_[hidden]&gt;
<br>
<a href="http://www.awrcorp.com<http://www.awrcorp.com/">http://www.awrcorp.com<http://www.awrcorp.com/</a>&gt;
<br>
<p>From: Shiqing Fan [mailto:fan_at_[hidden]]
<br>
Sent: Thursday, June 09, 2011 6:43 PM
<br>
To: Open MPI Users
<br>
Cc: Alan Nichols
<br>
Subject: Re: [OMPI users] Building OpenMPI v. 1.4.3 in VS2008
<br>
<p><p>Hi Alan,
<br>
<p>It looks like a problem of using a wrong generator in CMake GUI. I double tested a fresh new downloaded 1.4.3 on my win7 machine with VS2010, everything worked well.
<br>
<p>Please check:
<br>
1.  a proper CMake generator is used.
<br>
2.  the CMAKE_BUILD_TYPE in CMake GUI and the build type in VS are both Release
<br>
<p>If the error still happens, please provide me the file name and  line number where triggers the error when compiling it.
<br>
<p>Regards,
<br>
Shiqing
<br>
<p>On 2011-06-07 5:37 PM, Alan Nichols wrote:
<br>
Hello,
<br>
<p>I'm currently trying to build OpenMPI v. 1.4.3 from source, in VS2008.  Platform is Win7, SP1 installed ( I realize that this is possibly not an ideal approach as v. 1.5.3 has installers for Windows binaries.  However for compatibility with other programs I need to use v. 1.4.3 if at all possible;  also as I have many other libraries build under VS2008, I need to use the VS2008 compiler if at all possible).
<br>
<p>Following the README.WINDOWS file I found, I used CMake to build a Windows .sln file.  I accepted the default CMake settings, with the exception that I only created a Release build of OpenMPI.  Upon my first attempt to build the solution, I got an error about a missing file stdint.h.  I was able to fix this by including the stdint.h from VS2010.  However I now get new errors referencing
<br>
<p>__attribute__((__always_inline__))
<br>
<p>__asm__ __volatile__(&quot;&quot;: : :&quot;memory&quot;)
<br>
<p>These look to me like linux-specific problems -- is it even possible to do what I'm attempting, or are the code bases and compiler fundamentally at odds here?  If it is possible can you explain where my error lies?
<br>
<p>Thanks for your help,
<br>
<p>Alan Nichols
<br>
<p><p><p><p><p><p>_______________________________________________
<br>
<p>users mailing list
<br>
<p>users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
<p><a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><p><p><pre>
--
---------------------------------------------------------------
Shiqing Fan
High Performance Computing Center Stuttgart (HLRS)
Tel: ++49(0)711-685-87234      Nobelstrasse 19
Fax: ++49(0)711-685-65832      70569 Stuttgart
<a href="http://www.hlrs.de/organization/people/shiqing-fan/">http://www.hlrs.de/organization/people/shiqing-fan/</a>
email: fan_at_[hidden]&lt;mailto:fan_at_[hidden]&gt;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16702/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16703.php">Ole Kliemann: "[OMPI users] Deadlock with barrier und RMA"</a>
<li><strong>Previous message:</strong> <a href="16701.php">Shiqing Fan: "Re: [OMPI users] FW: Issue with mpicc --showme in windows"</a>
<li><strong>In reply to:</strong> <a href="16699.php">Shiqing Fan: "Re: [OMPI users] Building OpenMPI v. 1.4.3 in VS2008"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16728.php">Shiqing Fan: "Re: [OMPI users] Building OpenMPI v. 1.4.3 in VS2008"</a>
<li><strong>Reply:</strong> <a href="16728.php">Shiqing Fan: "Re: [OMPI users] Building OpenMPI v. 1.4.3 in VS2008"</a>
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
