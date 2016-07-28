<?
$subject_val = "Re: [OMPI users] Open MPI 1.5.4 on windows g95 / mpif90 support";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 15 06:55:10 2011" -->
<!-- isoreceived="20111215115510" -->
<!-- sent="Thu, 15 Dec 2011 11:54:57 +0000" -->
<!-- isosent="20111215115457" -->
<!-- name="Joao Amaral" -->
<!-- email="jsamaral_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI 1.5.4 on windows g95 / mpif90 support" -->
<!-- id="4EE9E011.4060705_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4EE9A46F.4070003_at_hlrs.de" -->
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
<strong>From:</strong> Joao Amaral (<em>jsamaral_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-15 06:54:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17985.php">TERRY DONTJE: "Re: [OMPI users] Error launching w/ 1.5.3 on IB mthca nodes"</a>
<li><strong>Previous message:</strong> <a href="17983.php">Patrick Begou: "Re: [OMPI users] MPI_BCAST and fortran subarrays"</a>
<li><strong>In reply to:</strong> <a href="17982.php">Shiqing Fan: "Re: [OMPI users] Open MPI 1.5.4 on windows g95 / mpif90 support"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OK, thanks for the reply!
<br>
<p>Joao
<br>
<p>On 15-12-2011 07:40, Shiqing Fan wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The Fortran 90 bindings on Windows is still not available yet.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Shiqing
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2011-12-14 12:56 PM, Joao Amaral wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am trying to have a working mpif90 on my laptop PC (windows 7 64 
</span><br>
<span class="quotelev2">&gt;&gt; bits), so that I can develop/test fortran 90 MPI code before running 
</span><br>
<span class="quotelev2">&gt;&gt; it on a cluster.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have tried the 1.5.4 installer on windows, cygwin, installed 
</span><br>
<span class="quotelev2">&gt;&gt; ubuntu, tried cygwin again, and now am back to the Open MPI 1.5.4 
</span><br>
<span class="quotelev2">&gt;&gt; windows build.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is it possible to use my existing g95 installation on windows so that 
</span><br>
<span class="quotelev2">&gt;&gt; I can compile fortran 90 mpi code?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; These are the top lines from the output of the &quot;ompi_info&quot; command.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                  Package: Open MPI hpcfan_at_VISCLUSTER26 Distribution
</span><br>
<span class="quotelev2">&gt;&gt;                 Open MPI: 1.5.4
</span><br>
<span class="quotelev2">&gt;&gt;    Open MPI SVN revision: r25060
</span><br>
<span class="quotelev2">&gt;&gt;    Open MPI release date: Aug 18, 2011
</span><br>
<span class="quotelev2">&gt;&gt;                 Open RTE: 1.5.4
</span><br>
<span class="quotelev2">&gt;&gt;    Open RTE SVN revision: r25060
</span><br>
<span class="quotelev2">&gt;&gt;    Open RTE release date: Aug 18, 2011
</span><br>
<span class="quotelev2">&gt;&gt;                     OPAL: 1.5.4
</span><br>
<span class="quotelev2">&gt;&gt;        OPAL SVN revision: r25060
</span><br>
<span class="quotelev2">&gt;&gt;        OPAL release date: Aug 18, 2011
</span><br>
<span class="quotelev2">&gt;&gt;             Ident string: 1.5.4
</span><br>
<span class="quotelev2">&gt;&gt;                   Prefix: C:\Program Files (x86)\OpenMPI_v1.5.4-x64
</span><br>
<span class="quotelev2">&gt;&gt;  Configured architecture: x86 Windows-6.1
</span><br>
<span class="quotelev2">&gt;&gt;           Configure host: VISCLUSTER26
</span><br>
<span class="quotelev2">&gt;&gt;            Configured by: hpcfan
</span><br>
<span class="quotelev2">&gt;&gt;            Configured on: 10:44 AM 08/19/2011
</span><br>
<span class="quotelev2">&gt;&gt;           Configure host: VISCLUSTER26
</span><br>
<span class="quotelev2">&gt;&gt;                 Built by: hpcfan
</span><br>
<span class="quotelev2">&gt;&gt;                 Built on: 10:44 AM 08/19/2011
</span><br>
<span class="quotelev2">&gt;&gt;               Built host: VISCLUSTER26
</span><br>
<span class="quotelev2">&gt;&gt;               C bindings: yes
</span><br>
<span class="quotelev2">&gt;&gt;             C++ bindings: yes
</span><br>
<span class="quotelev2">&gt;&gt;       Fortran77 bindings: yes (caps)
</span><br>
<span class="quotelev2">&gt;&gt;       Fortran90 bindings: no
</span><br>
<span class="quotelev2">&gt;&gt;  Fortran90 bindings size: na
</span><br>
<span class="quotelev2">&gt;&gt;               C compiler: cl
</span><br>
<span class="quotelev2">&gt;&gt;      C compiler absolute: D:/MSDev10/VC/bin/amd64/cl.exe
</span><br>
<span class="quotelev2">&gt;&gt;   C compiler family name: MICROSOFT
</span><br>
<span class="quotelev2">&gt;&gt;       C compiler version: 1600
</span><br>
<span class="quotelev2">&gt;&gt;             C++ compiler: cl
</span><br>
<span class="quotelev2">&gt;&gt;    C++ compiler absolute: D:/MSDev10/VC/bin/amd64/cl.exe
</span><br>
<span class="quotelev2">&gt;&gt;       Fortran77 compiler: ifort
</span><br>
<span class="quotelev2">&gt;&gt;   Fortran77 compiler abs: C:/Program Files
</span><br>
<span class="quotelev2">&gt;&gt;                           
</span><br>
<span class="quotelev2">&gt;&gt; (x86)/Intel/ComposerXE-2011/bin/amd64/ifort.exe
</span><br>
<span class="quotelev2">&gt;&gt;       Fortran90 compiler: none
</span><br>
<span class="quotelev2">&gt;&gt;   Fortran90 compiler abs: none
</span><br>
<span class="quotelev2">&gt;&gt;              C profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;            C++ profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;      Fortran77 profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;      Fortran90 profiling: no
</span><br>
<span class="quotelev2">&gt;&gt;           C++ exceptions: no
</span><br>
<span class="quotelev2">&gt;&gt;           Thread support: no
</span><br>
<span class="quotelev2">&gt;&gt;            Sparse Groups: no
</span><br>
<span class="quotelev2">&gt;&gt;   Internal debug support: no
</span><br>
<span class="quotelev2">&gt;&gt;   MPI interface warnings: no
</span><br>
<span class="quotelev2">&gt;&gt;      MPI parameter check: never
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (...)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for your help.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17985.php">TERRY DONTJE: "Re: [OMPI users] Error launching w/ 1.5.3 on IB mthca nodes"</a>
<li><strong>Previous message:</strong> <a href="17983.php">Patrick Begou: "Re: [OMPI users] MPI_BCAST and fortran subarrays"</a>
<li><strong>In reply to:</strong> <a href="17982.php">Shiqing Fan: "Re: [OMPI users] Open MPI 1.5.4 on windows g95 / mpif90 support"</a>
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
