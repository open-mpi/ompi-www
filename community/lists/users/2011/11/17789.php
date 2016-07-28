<?
$subject_val = "Re: [OMPI users] vs2010: MPI_Address() unresolved";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Nov 19 10:17:35 2011" -->
<!-- isoreceived="20111119151735" -->
<!-- sent="Sat, 19 Nov 2011 15:17:37 -0000" -->
<!-- isosent="20111119151737" -->
<!-- name="MM" -->
<!-- email="finjulhich_at_[hidden]" -->
<!-- subject="Re: [OMPI users] vs2010: MPI_Address() unresolved" -->
<!-- id="001d01cca6ce$5fff1c50$1ffd54f0$_at_com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4EC7345A.4010201_at_hlrs.de" -->
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
<strong>From:</strong> MM (<em>finjulhich_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-19 10:17:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17790.php">MM: "[OMPI users] orte_debugger_select and orte_ess_set_name failed"</a>
<li><strong>Previous message:</strong> <a href="17788.php">Lukas Razik: "Re: [OMPI users] UDP like messaging with MPI"</a>
<li><strong>In reply to:</strong> <a href="17786.php">Shiqing Fan: "Re: [OMPI users] vs2010: MPI_Address() unresolved"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I took off the OMPI_IMPORTS actually and it now compiles correctly. Maybe
<br>
those are to be defined if I had built shared lib version of mpi libs.
<br>
<p>&nbsp;
<br>
<p>thanks
<br>
<p>&nbsp;
<br>
<p>From: Shiqing Fan [mailto:fan_at_[hidden]] 
<br>
Sent: 19 November 2011 04:45
<br>
To: Open MPI Users
<br>
Cc: MM
<br>
Subject: Re: [OMPI users] vs2010: MPI_Address() unresolved
<br>
<p>&nbsp;
<br>
<p><p>Does this happen also for other MPI_* functions? Probably you need to add
<br>
OMPI_IMPORTS as an extra preprocessor. 
<br>
<p>Regards,
<br>
Shiqing
<br>
<p>On 2011-11-19 1:02 AM, MM wrote: 
<br>
<p>Hi,
<br>
<p>&nbsp;
<br>
<p>I get this style of errors when trying to link against libmpid.lib
<br>
(compiled with instructions from README.Windows part 1 cmake):
<br>
<p>mylib.lib(myfile.obj): : error LNK2001: unresolved external symbol
<br>
__imp__MPI_Address
<br>
<p>&nbsp;
<br>
<p>I set BUILD_SHARED_LIBS to false, so I generate static libs. I've also
<br>
checked that the /MDd is set and indeed libmpid.lib are built against the
<br>
DLL version of the C++ runtime when I open the solution in vs2010.
<br>
<p>&nbsp;
<br>
<p>I myself link my application against the /MDd as well.
<br>
<p>&nbsp;
<br>
<p>I don't know why it's looking for __impl__MPI_Address  (__impl__ is a prefix
<br>
related to DLLs somehow).
<br>
<p>I gather this MPI_Address() function resides in libmpi.lib and libmpid.lib
<br>
<p>&nbsp;
<br>
<p>PS: I didn't have these link errors when I built against the prebuilt win
<br>
libraries from the website, what are the CMAke flags for those?
<br>
<p>Thanks,
<br>
<p>&nbsp;
<br>
<p>MM
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
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17789/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17790.php">MM: "[OMPI users] orte_debugger_select and orte_ess_set_name failed"</a>
<li><strong>Previous message:</strong> <a href="17788.php">Lukas Razik: "Re: [OMPI users] UDP like messaging with MPI"</a>
<li><strong>In reply to:</strong> <a href="17786.php">Shiqing Fan: "Re: [OMPI users] vs2010: MPI_Address() unresolved"</a>
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
