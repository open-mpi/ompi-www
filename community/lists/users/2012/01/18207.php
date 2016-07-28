<?
$subject_val = "Re: [OMPI users] How to configure Intel Visual Fortran to work with OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 19 02:36:22 2012" -->
<!-- isoreceived="20120119073622" -->
<!-- sent="Thu, 19 Jan 2012 08:36:16 +0100" -->
<!-- isosent="20120119073616" -->
<!-- name="Robert garcia" -->
<!-- email="robertgarcia2001_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to configure Intel Visual Fortran to work with OpenMPI" -->
<!-- id="DUB108-W4716E94CD6617A778595BDCF860_at_phx.gbl" -->
<!-- charset="windows-1254" -->
<!-- inreplyto="4F1749CE.3000506_at_hlrs.de" -->
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
<strong>From:</strong> Robert garcia (<em>robertgarcia2001_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-19 02:36:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18208.php">Shiqing Fan: "Re: [OMPI users] How to configure Intel Visual Fortran to work with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="18206.php">Randolph Pullen: "[OMPI users] system() call corrupts MPI processes"</a>
<li><strong>In reply to:</strong> <a href="18205.php">Shiqing Fan: "Re: [OMPI users] How to configure Intel Visual Fortran to work with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18208.php">Shiqing Fan: "Re: [OMPI users] How to configure Intel Visual Fortran to work with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="18208.php">Shiqing Fan: "Re: [OMPI users] How to configure Intel Visual Fortran to work with OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for clarification, 
<br>
&nbsp;
<br>
For now I 'll stick with current version of Win32 XP , if it's not a heavy workload, could you build a binary package ?
<br>
&nbsp;
<br>
Regards, 
<br>
&nbsp;
<br>
<p><p><p>Date: Wed, 18 Jan 2012 23:38:06 +0100
<br>
From: fan_at_[hidden]
<br>
To: users_at_[hidden]
<br>
CC: robertgarcia2001_at_[hidden]
<br>
Subject: Re: [OMPI users] How to configure Intel Visual Fortran to work with OpenMPI
<br>
<p><p>Hi Robert,
<br>
<p>This is a known issue. The released binary was built on Windows Server 2008,  which has newer Windows system dependencies. We have fixed this problem and it is included for the next release. If you don't want to switch to another Windows version, I can build one working binary package and pass it to you off-list, meanwhile, you can also wait for the upcoming release.
<br>
<p><p>Best Regards,
<br>
Shiqing
<br>
<p><p>On 2012-01-18 6:21 PM, Robert garcia wrote: 
<br>
<p><p><p><p><p>hi all, 
<br>
&nbsp;
<br>
I'm experiencing a difficulty when I'm trying to run the fortran code which which uses parallel processing. I started with downloading the &quot;OpenMPI_v1.5.4-1_win32.exe&quot; I've configured everything in IVF to point out to the correct static libs and search paths, also set the enviromental variables Path to directory where OpenMPI dll's(e.g. libmpi.dll, libmpid.dll etc..) reside. Program compiles and links properly till the message pops out like &quot;The procedure entry point InterlockedCompareExchange64 could not be located in the dynamic link library KERNEL32.dll&quot;
<br>
<p>What can be the problem ?
<br>
&nbsp;
<br>
Regards, 
<br>
<p><p><p>&nbsp;
<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><pre>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18207/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18208.php">Shiqing Fan: "Re: [OMPI users] How to configure Intel Visual Fortran to work with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="18206.php">Randolph Pullen: "[OMPI users] system() call corrupts MPI processes"</a>
<li><strong>In reply to:</strong> <a href="18205.php">Shiqing Fan: "Re: [OMPI users] How to configure Intel Visual Fortran to work with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18208.php">Shiqing Fan: "Re: [OMPI users] How to configure Intel Visual Fortran to work with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="18208.php">Shiqing Fan: "Re: [OMPI users] How to configure Intel Visual Fortran to work with OpenMPI"</a>
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
