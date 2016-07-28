<?
$subject_val = "Re: [OMPI users] Win32 compilation broken (MSVC2008, OpenMPI1.4.1)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 19 06:15:43 2010" -->
<!-- isoreceived="20100119111543" -->
<!-- sent="Tue, 19 Jan 2010 12:15:18 +0100" -->
<!-- isosent="20100119111518" -->
<!-- name="T. Farago" -->
<!-- email="farago1_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Win32 compilation broken (MSVC2008, OpenMPI1.4.1)" -->
<!-- id="2401d8be1001190315l29537fefie690bab8ac3ef323_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="2401d8be1001190308k78a88ec7sf1ece32d5412d284_at_mail.gmail.com" -->
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
<strong>From:</strong> T. Farago (<em>farago1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-19 06:15:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11813.php">Andreea Costea: "Re: [OMPI users] Checkpoint/Restart error"</a>
<li><strong>Previous message:</strong> <a href="11811.php">T. Farago: "Re: [OMPI users] Win32 compilation broken (MSVC2008, OpenMPI1.4.1)"</a>
<li><strong>In reply to:</strong> <a href="11811.php">T. Farago: "Re: [OMPI users] Win32 compilation broken (MSVC2008, OpenMPI1.4.1)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11818.php">Shiqing Fan: "Re: [OMPI users] Win32 compilation broken (MSVC2008, OpenMPI1.4.1)"</a>
<li><strong>Reply:</strong> <a href="11818.php">Shiqing Fan: "Re: [OMPI users] Win32 compilation broken (MSVC2008, OpenMPI1.4.1)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
He, this is getting annoying, but I have another question:
<br>
I am trying to get windows and linux hosts to work together. Is this
<br>
even possible with openmpi? I tried mpich2 first but there were
<br>
several problems and on google I found some hints that openmpi will do
<br>
the job. However I don't see any cross-platform run-time systems.
<br>
Obviously rsh/ssh doesn't work on Windows and neither does MS CCP on
<br>
linux.
<br>
<p>The FAQ does state heterogeneous execution environments but I get the
<br>
feeling Windows &lt;&gt; Linux is not what is meant there.
<br>
<p>Tom
<br>
<p>2010/1/19 T. Farago &lt;farago1_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; Is the windows build actually working? I have the static library
</span><br>
<span class="quotelev1">&gt; version working correctly, however shared libraries give linker errors
</span><br>
<span class="quotelev1">&gt; when compiling an MPI application. It seems libmpi_cxx.lib doesn't
</span><br>
<span class="quotelev1">&gt; export any functions, only constant data members (checked through
</span><br>
<span class="quotelev1">&gt; dependency walker of libmpi_cxx.dll and dumpbin of libmpi_cxx.lib)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Eg in a very simple MPI application I get unresolved external symbols
</span><br>
<span class="quotelev1">&gt; about MPI::Datatype::Free, MPI::Win::Free, MPI::Comm::Comm and
</span><br>
<span class="quotelev1">&gt; ompi_mpi_cxx_op_intercept. I am linking to libmpi.lib and
</span><br>
<span class="quotelev1">&gt; libmpi_cxx.lib, both of which have been built with the CMake solution
</span><br>
<span class="quotelev1">&gt; where the only changes were the enabling of heterogeneous support, the
</span><br>
<span class="quotelev1">&gt; one in osc_rdma_data_move.c and setting Link Library Dependencies to
</span><br>
<span class="quotelev1">&gt; yes as per my previous mail.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2010/1/19 T. Farago &lt;farago1_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt; Information: Windows XP SP3 x86, MSVC 2008 Professional, openmpi 1.4.1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There is a compile error if I enable heterogeneous support, see error
</span><br>
<span class="quotelev2">&gt;&gt; message below. The relevant line is:
</span><br>
<span class="quotelev2">&gt;&gt; payload= &#194;&#160;(void*)malloc(buflen);
</span><br>
<span class="quotelev2">&gt;&gt; ompi/mca/osc/rdma/osc_rdma_data_move.c(1059): error C2440: '=': cannot
</span><br>
<span class="quotelev2">&gt;&gt; convert from 'void *' to 'void **'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; gcc doesn't complain, I've changed void* to void** which seems to
</span><br>
<span class="quotelev2">&gt;&gt; &quot;fix&quot; the problem
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also when generating the MSVC2008 project files through CMake (2.8.0)
</span><br>
<span class="quotelev2">&gt;&gt; there are linker errors for all the project files. libopen-pal.lib and
</span><br>
<span class="quotelev2">&gt;&gt; libopen-rte.lib aren't linked in with the other projects. I couldn't
</span><br>
<span class="quotelev2">&gt;&gt; fnd anything in CMake to fix this, so I manually edited each project
</span><br>
<span class="quotelev2">&gt;&gt; file to change LinkLibraryDependencies to TRUE which for some reason
</span><br>
<span class="quotelev2">&gt;&gt; is set to FALSE by CMake. The relevant option in Visual Studio is in
</span><br>
<span class="quotelev2">&gt;&gt; Configuration Properties &gt; Linker &gt; General &gt; Link Library
</span><br>
<span class="quotelev2">&gt;&gt; Dependencies. I am not familiar with CMake so unfortunately I can't
</span><br>
<span class="quotelev2">&gt;&gt; offer a proper solution.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11813.php">Andreea Costea: "Re: [OMPI users] Checkpoint/Restart error"</a>
<li><strong>Previous message:</strong> <a href="11811.php">T. Farago: "Re: [OMPI users] Win32 compilation broken (MSVC2008, OpenMPI1.4.1)"</a>
<li><strong>In reply to:</strong> <a href="11811.php">T. Farago: "Re: [OMPI users] Win32 compilation broken (MSVC2008, OpenMPI1.4.1)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11818.php">Shiqing Fan: "Re: [OMPI users] Win32 compilation broken (MSVC2008, OpenMPI1.4.1)"</a>
<li><strong>Reply:</strong> <a href="11818.php">Shiqing Fan: "Re: [OMPI users] Win32 compilation broken (MSVC2008, OpenMPI1.4.1)"</a>
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
