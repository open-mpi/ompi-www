<?
$subject_val = "Re: [OMPI users] How to configure Intel Visual Fortran to work with OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 19 05:17:09 2012" -->
<!-- isoreceived="20120119101709" -->
<!-- sent="Thu, 19 Jan 2012 11:17:10 +0100" -->
<!-- isosent="20120119101710" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to configure Intel Visual Fortran to work with OpenMPI" -->
<!-- id="4F17EDA6.8030300_at_hlrs.de" -->
<!-- charset="windows-1254" -->
<!-- inreplyto="DUB108-W4716E94CD6617A778595BDCF860_at_phx.gbl" -->
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
<strong>Date:</strong> 2012-01-19 05:17:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18209.php">Theiner, Andre: "[OMPI users] FW: mpirun hangs when used on more than 2 CPUs ( mpirun compiled without thread support )"</a>
<li><strong>Previous message:</strong> <a href="18207.php">Robert garcia: "Re: [OMPI users] How to configure Intel Visual Fortran to work with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="18207.php">Robert garcia: "Re: [OMPI users] How to configure Intel Visual Fortran to work with OpenMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I made a binary package based on the current 1.5 rc2. Please find it in 
<br>
the download link here: <a href="http://db.tt/AXJF40ph">http://db.tt/AXJF40ph</a>. It should work on your 
<br>
win XP. Thanks a lot for testing it.
<br>
<p><p>Regards,
<br>
Shiqing
<br>
<p><p><p>On 2012-01-19 8:36 AM, Robert garcia wrote:
<br>
<span class="quotelev1">&gt; Thanks for clarification,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For now I 'll stick with current version of Win32 XP , if it's not a 
</span><br>
<span class="quotelev1">&gt; heavy workload, could you build a binary package ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Date: Wed, 18 Jan 2012 23:38:06 +0100
</span><br>
<span class="quotelev1">&gt; From: fan_at_[hidden]
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; CC: robertgarcia2001_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] How to configure Intel Visual Fortran to 
</span><br>
<span class="quotelev1">&gt; work with OpenMPI
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Robert,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is a known issue. The released binary was built on Windows Server 
</span><br>
<span class="quotelev1">&gt; 2008,  which has newer Windows system dependencies. We have fixed this 
</span><br>
<span class="quotelev1">&gt; problem and it is included for the next release. If you don't want to 
</span><br>
<span class="quotelev1">&gt; switch to another Windows version, I can build one working binary 
</span><br>
<span class="quotelev1">&gt; package and pass it to you off-list, meanwhile, you can also wait for 
</span><br>
<span class="quotelev1">&gt; the upcoming release.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best Regards,
</span><br>
<span class="quotelev1">&gt; Shiqing
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2012-01-18 6:21 PM, Robert garcia wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I'm experiencing a difficulty when I'm trying to run the fortran
</span><br>
<span class="quotelev1">&gt;     code which which uses parallel processing. I started with
</span><br>
<span class="quotelev1">&gt;     downloading the /&quot;OpenMPI_v1.5.4-1_win32.exe/
</span><br>
<span class="quotelev1">&gt;     &lt;<a href="http://www.open-mpi.org/software/ompi/v1.5/downloads/OpenMPI_v1.5.4-1_win32.exe">http://www.open-mpi.org/software/ompi/v1.5/downloads/OpenMPI_v1.5.4-1_win32.exe</a>&gt;&quot; I've
</span><br>
<span class="quotelev1">&gt;     configured everything in IVF to point out to the correct static
</span><br>
<span class="quotelev1">&gt;     libs and search paths, also set the enviromental variables Path to
</span><br>
<span class="quotelev1">&gt;     directory where OpenMPI dll's(e.g. libmpi.dll, libmpid.dll
</span><br>
<span class="quotelev1">&gt;     etc..) reside. Program compiles and links properly till the
</span><br>
<span class="quotelev1">&gt;     message pops out like &quot;The procedure entry point
</span><br>
<span class="quotelev1">&gt;     InterlockedCompareExchange64 could not be located in the dynamic
</span><br>
<span class="quotelev1">&gt;     link library KERNEL32.dll&quot;
</span><br>
<span class="quotelev1">&gt;     What can be the problem ?
</span><br>
<span class="quotelev1">&gt;     Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden]  &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; High Performance Computing Center Stuttgart (HLRS)
</span><br>
<span class="quotelev1">&gt; Tel: ++49(0)711-685-87234      Nobelstrasse 19
</span><br>
<span class="quotelev1">&gt; Fax: ++49(0)711-685-65832      70569 Stuttgart
</span><br>
<span class="quotelev1">&gt; <a href="http://www.hlrs.de/organization/people/shiqing-fan/">http://www.hlrs.de/organization/people/shiqing-fan/</a>
</span><br>
<span class="quotelev1">&gt; email:fan_at_[hidden]  &lt;mailto:fan_at_[hidden]&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18208/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18209.php">Theiner, Andre: "[OMPI users] FW: mpirun hangs when used on more than 2 CPUs ( mpirun compiled without thread support )"</a>
<li><strong>Previous message:</strong> <a href="18207.php">Robert garcia: "Re: [OMPI users] How to configure Intel Visual Fortran to work with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="18207.php">Robert garcia: "Re: [OMPI users] How to configure Intel Visual Fortran to work with OpenMPI"</a>
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
