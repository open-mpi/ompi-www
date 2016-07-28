<?
$subject_val = "Re: [OMPI users] Win32 compilation broken (MSVC2008, OpenMPI1.4.1)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 19 11:21:57 2010" -->
<!-- isoreceived="20100119162157" -->
<!-- sent="Tue, 19 Jan 2010 17:21:57 +0100" -->
<!-- isosent="20100119162157" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Win32 compilation broken (MSVC2008, OpenMPI1.4.1)" -->
<!-- id="4B55DC25.5030409_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2401d8be1001190113w684fa633gdea897245eef3672_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Win32 compilation broken (MSVC2008, OpenMPI1.4.1)<br>
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-19 11:21:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11816.php">Eloi Gaudry: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<li><strong>Previous message:</strong> <a href="11814.php">Gus Correa: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<li><strong>In reply to:</strong> <a href="11810.php">T. Farago: "[OMPI users] Win32 compilation broken (MSVC2008, OpenMPI1.4.1)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>The heterogeneous support hasn't been tested on Windows, and it might 
<br>
have problems if you enable it. But if you disable it for Windows, it 
<br>
should work.
<br>
<p>And for the linking problem you got with CMake 2.8, I have already filed 
<br>
a ticket to fix it, see: <a href="https://svn.open-mpi.org/trac/ompi/ticket/2169">https://svn.open-mpi.org/trac/ompi/ticket/2169</a> 
<br>
. So to get rid of it, you could either use CMake 2.6 series or use Open 
<br>
MPI trunk.
<br>
<p>Thanks,
<br>
Shiqing
<br>
<p>T. Farago wrote:
<br>
<span class="quotelev1">&gt; Information: Windows XP SP3 x86, MSVC 2008 Professional, openmpi 1.4.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is a compile error if I enable heterogeneous support, see error
</span><br>
<span class="quotelev1">&gt; message below. The relevant line is:
</span><br>
<span class="quotelev1">&gt; payload=  (void*)malloc(buflen);
</span><br>
<span class="quotelev1">&gt; ompi/mca/osc/rdma/osc_rdma_data_move.c(1059): error C2440: '=': cannot
</span><br>
<span class="quotelev1">&gt; convert from 'void *' to 'void **'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; gcc doesn't complain, I've changed void* to void** which seems to
</span><br>
<span class="quotelev1">&gt; &quot;fix&quot; the problem
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also when generating the MSVC2008 project files through CMake (2.8.0)
</span><br>
<span class="quotelev1">&gt; there are linker errors for all the project files. libopen-pal.lib and
</span><br>
<span class="quotelev1">&gt; libopen-rte.lib aren't linked in with the other projects. I couldn't
</span><br>
<span class="quotelev1">&gt; fnd anything in CMake to fix this, so I manually edited each project
</span><br>
<span class="quotelev1">&gt; file to change LinkLibraryDependencies to TRUE which for some reason
</span><br>
<span class="quotelev1">&gt; is set to FALSE by CMake. The relevant option in Visual Studio is in
</span><br>
<span class="quotelev1">&gt; Configuration Properties &gt; Linker &gt; General &gt; Link Library
</span><br>
<span class="quotelev1">&gt; Dependencies. I am not familiar with CMake so unfortunately I can't
</span><br>
<span class="quotelev1">&gt; offer a proper solution.
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
<span class="quotelev1">&gt;   
</span><br>
<p><p><pre>
-- 
--------------------------------------------------------------
Shiqing Fan                          <a href="http://www.hlrs.de/people/fan">http://www.hlrs.de/people/fan</a>
High Performance Computing           Tel.: +49 711 685 87234
  Center Stuttgart (HLRS)            Fax.: +49 711 685 65832
Address:Allmandring 30               email: fan_at_[hidden]    
70569 Stuttgart
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11816.php">Eloi Gaudry: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<li><strong>Previous message:</strong> <a href="11814.php">Gus Correa: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<li><strong>In reply to:</strong> <a href="11810.php">T. Farago: "[OMPI users] Win32 compilation broken (MSVC2008, OpenMPI1.4.1)"</a>
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
