<?
$subject_val = "Re: [OMPI users] Open MPI 1.5.4 on windows g95 / mpif90 support";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 15 02:40:34 2011" -->
<!-- isoreceived="20111215074034" -->
<!-- sent="Thu, 15 Dec 2011 08:40:31 +0100" -->
<!-- isosent="20111215074031" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI 1.5.4 on windows g95 / mpif90 support" -->
<!-- id="4EE9A46F.4070003_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4EE88EDB.5080003_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI 1.5.4 on windows g95 / mpif90 support<br>
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-15 02:40:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17983.php">Patrick Begou: "Re: [OMPI users] MPI_BCAST and fortran subarrays"</a>
<li><strong>Previous message:</strong> <a href="17981.php">Rayson Ho: "Re: [OMPI users] How to justify the use MPI codes on multicore systems/PCs?"</a>
<li><strong>In reply to:</strong> <a href="17949.php">Joao Amaral: "[OMPI users] Open MPI 1.5.4 on windows g95 / mpif90 support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17984.php">Joao Amaral: "Re: [OMPI users] Open MPI 1.5.4 on windows g95 / mpif90 support"</a>
<li><strong>Reply:</strong> <a href="17984.php">Joao Amaral: "Re: [OMPI users] Open MPI 1.5.4 on windows g95 / mpif90 support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>The Fortran 90 bindings on Windows is still not available yet.
<br>
<p>Regards,
<br>
Shiqing
<br>
<p><p>On 2011-12-14 12:56 PM, Joao Amaral wrote:
<br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to have a working mpif90 on my laptop PC (windows 7 64 
</span><br>
<span class="quotelev1">&gt; bits), so that I can develop/test fortran 90 MPI code before running 
</span><br>
<span class="quotelev1">&gt; it on a cluster.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have tried the 1.5.4 installer on windows, cygwin, installed ubuntu, 
</span><br>
<span class="quotelev1">&gt; tried cygwin again, and now am back to the Open MPI 1.5.4 windows build.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is it possible to use my existing g95 installation on windows so that 
</span><br>
<span class="quotelev1">&gt; I can compile fortran 90 mpi code?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; These are the top lines from the output of the &quot;ompi_info&quot; command.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  Package: Open MPI hpcfan_at_VISCLUSTER26 Distribution
</span><br>
<span class="quotelev1">&gt;                 Open MPI: 1.5.4
</span><br>
<span class="quotelev1">&gt;    Open MPI SVN revision: r25060
</span><br>
<span class="quotelev1">&gt;    Open MPI release date: Aug 18, 2011
</span><br>
<span class="quotelev1">&gt;                 Open RTE: 1.5.4
</span><br>
<span class="quotelev1">&gt;    Open RTE SVN revision: r25060
</span><br>
<span class="quotelev1">&gt;    Open RTE release date: Aug 18, 2011
</span><br>
<span class="quotelev1">&gt;                     OPAL: 1.5.4
</span><br>
<span class="quotelev1">&gt;        OPAL SVN revision: r25060
</span><br>
<span class="quotelev1">&gt;        OPAL release date: Aug 18, 2011
</span><br>
<span class="quotelev1">&gt;             Ident string: 1.5.4
</span><br>
<span class="quotelev1">&gt;                   Prefix: C:\Program Files (x86)\OpenMPI_v1.5.4-x64
</span><br>
<span class="quotelev1">&gt;  Configured architecture: x86 Windows-6.1
</span><br>
<span class="quotelev1">&gt;           Configure host: VISCLUSTER26
</span><br>
<span class="quotelev1">&gt;            Configured by: hpcfan
</span><br>
<span class="quotelev1">&gt;            Configured on: 10:44 AM 08/19/2011
</span><br>
<span class="quotelev1">&gt;           Configure host: VISCLUSTER26
</span><br>
<span class="quotelev1">&gt;                 Built by: hpcfan
</span><br>
<span class="quotelev1">&gt;                 Built on: 10:44 AM 08/19/2011
</span><br>
<span class="quotelev1">&gt;               Built host: VISCLUSTER26
</span><br>
<span class="quotelev1">&gt;               C bindings: yes
</span><br>
<span class="quotelev1">&gt;             C++ bindings: yes
</span><br>
<span class="quotelev1">&gt;       Fortran77 bindings: yes (caps)
</span><br>
<span class="quotelev1">&gt;       Fortran90 bindings: no
</span><br>
<span class="quotelev1">&gt;  Fortran90 bindings size: na
</span><br>
<span class="quotelev1">&gt;               C compiler: cl
</span><br>
<span class="quotelev1">&gt;      C compiler absolute: D:/MSDev10/VC/bin/amd64/cl.exe
</span><br>
<span class="quotelev1">&gt;   C compiler family name: MICROSOFT
</span><br>
<span class="quotelev1">&gt;       C compiler version: 1600
</span><br>
<span class="quotelev1">&gt;             C++ compiler: cl
</span><br>
<span class="quotelev1">&gt;    C++ compiler absolute: D:/MSDev10/VC/bin/amd64/cl.exe
</span><br>
<span class="quotelev1">&gt;       Fortran77 compiler: ifort
</span><br>
<span class="quotelev1">&gt;   Fortran77 compiler abs: C:/Program Files
</span><br>
<span class="quotelev1">&gt;                           (x86)/Intel/ComposerXE-2011/bin/amd64/ifort.exe
</span><br>
<span class="quotelev1">&gt;       Fortran90 compiler: none
</span><br>
<span class="quotelev1">&gt;   Fortran90 compiler abs: none
</span><br>
<span class="quotelev1">&gt;              C profiling: yes
</span><br>
<span class="quotelev1">&gt;            C++ profiling: yes
</span><br>
<span class="quotelev1">&gt;      Fortran77 profiling: yes
</span><br>
<span class="quotelev1">&gt;      Fortran90 profiling: no
</span><br>
<span class="quotelev1">&gt;           C++ exceptions: no
</span><br>
<span class="quotelev1">&gt;           Thread support: no
</span><br>
<span class="quotelev1">&gt;            Sparse Groups: no
</span><br>
<span class="quotelev1">&gt;   Internal debug support: no
</span><br>
<span class="quotelev1">&gt;   MPI interface warnings: no
</span><br>
<span class="quotelev1">&gt;      MPI parameter check: never
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (...)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your help.
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
<span class="quotelev1">&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17983.php">Patrick Begou: "Re: [OMPI users] MPI_BCAST and fortran subarrays"</a>
<li><strong>Previous message:</strong> <a href="17981.php">Rayson Ho: "Re: [OMPI users] How to justify the use MPI codes on multicore systems/PCs?"</a>
<li><strong>In reply to:</strong> <a href="17949.php">Joao Amaral: "[OMPI users] Open MPI 1.5.4 on windows g95 / mpif90 support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17984.php">Joao Amaral: "Re: [OMPI users] Open MPI 1.5.4 on windows g95 / mpif90 support"</a>
<li><strong>Reply:</strong> <a href="17984.php">Joao Amaral: "Re: [OMPI users] Open MPI 1.5.4 on windows g95 / mpif90 support"</a>
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
