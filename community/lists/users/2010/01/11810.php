<?
$subject_val = "[OMPI users] Win32 compilation broken (MSVC2008, OpenMPI1.4.1)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 19 04:14:12 2010" -->
<!-- isoreceived="20100119091412" -->
<!-- sent="Tue, 19 Jan 2010 10:13:47 +0100" -->
<!-- isosent="20100119091347" -->
<!-- name="T. Farago" -->
<!-- email="farago1_at_[hidden]" -->
<!-- subject="[OMPI users] Win32 compilation broken (MSVC2008, OpenMPI1.4.1)" -->
<!-- id="2401d8be1001190113w684fa633gdea897245eef3672_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Win32 compilation broken (MSVC2008, OpenMPI1.4.1)<br>
<strong>From:</strong> T. Farago (<em>farago1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-19 04:13:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11811.php">T. Farago: "Re: [OMPI users] Win32 compilation broken (MSVC2008, OpenMPI1.4.1)"</a>
<li><strong>Previous message:</strong> <a href="11809.php">Andreea Costea: "Re: [OMPI users] Checkpoint/Restart error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11811.php">T. Farago: "Re: [OMPI users] Win32 compilation broken (MSVC2008, OpenMPI1.4.1)"</a>
<li><strong>Reply:</strong> <a href="11811.php">T. Farago: "Re: [OMPI users] Win32 compilation broken (MSVC2008, OpenMPI1.4.1)"</a>
<li><strong>Reply:</strong> <a href="11815.php">Shiqing Fan: "Re: [OMPI users] Win32 compilation broken (MSVC2008, OpenMPI1.4.1)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Information: Windows XP SP3 x86, MSVC 2008 Professional, openmpi 1.4.1
<br>
<p>There is a compile error if I enable heterogeneous support, see error
<br>
message below. The relevant line is:
<br>
payload=  (void*)malloc(buflen);
<br>
ompi/mca/osc/rdma/osc_rdma_data_move.c(1059): error C2440: '=': cannot
<br>
convert from 'void *' to 'void **'
<br>
<p>gcc doesn't complain, I've changed void* to void** which seems to
<br>
&quot;fix&quot; the problem
<br>
<p>Also when generating the MSVC2008 project files through CMake (2.8.0)
<br>
there are linker errors for all the project files. libopen-pal.lib and
<br>
libopen-rte.lib aren't linked in with the other projects. I couldn't
<br>
fnd anything in CMake to fix this, so I manually edited each project
<br>
file to change LinkLibraryDependencies to TRUE which for some reason
<br>
is set to FALSE by CMake. The relevant option in Visual Studio is in
<br>
Configuration Properties &gt; Linker &gt; General &gt; Link Library
<br>
Dependencies. I am not familiar with CMake so unfortunately I can't
<br>
offer a proper solution.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11811.php">T. Farago: "Re: [OMPI users] Win32 compilation broken (MSVC2008, OpenMPI1.4.1)"</a>
<li><strong>Previous message:</strong> <a href="11809.php">Andreea Costea: "Re: [OMPI users] Checkpoint/Restart error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11811.php">T. Farago: "Re: [OMPI users] Win32 compilation broken (MSVC2008, OpenMPI1.4.1)"</a>
<li><strong>Reply:</strong> <a href="11811.php">T. Farago: "Re: [OMPI users] Win32 compilation broken (MSVC2008, OpenMPI1.4.1)"</a>
<li><strong>Reply:</strong> <a href="11815.php">Shiqing Fan: "Re: [OMPI users] Win32 compilation broken (MSVC2008, OpenMPI1.4.1)"</a>
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
