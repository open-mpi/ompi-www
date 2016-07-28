<?
$subject_val = "Re: [OMPI users] Win32 compilation broken (MSVC2008, OpenMPI1.4.1)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 19 06:08:58 2010" -->
<!-- isoreceived="20100119110858" -->
<!-- sent="Tue, 19 Jan 2010 12:08:33 +0100" -->
<!-- isosent="20100119110833" -->
<!-- name="T. Farago" -->
<!-- email="farago1_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Win32 compilation broken (MSVC2008, OpenMPI1.4.1)" -->
<!-- id="2401d8be1001190308k78a88ec7sf1ece32d5412d284_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>From:</strong> T. Farago (<em>farago1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-19 06:08:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11812.php">T. Farago: "Re: [OMPI users] Win32 compilation broken (MSVC2008, OpenMPI1.4.1)"</a>
<li><strong>Previous message:</strong> <a href="11810.php">T. Farago: "[OMPI users] Win32 compilation broken (MSVC2008, OpenMPI1.4.1)"</a>
<li><strong>In reply to:</strong> <a href="11810.php">T. Farago: "[OMPI users] Win32 compilation broken (MSVC2008, OpenMPI1.4.1)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11812.php">T. Farago: "Re: [OMPI users] Win32 compilation broken (MSVC2008, OpenMPI1.4.1)"</a>
<li><strong>Reply:</strong> <a href="11812.php">T. Farago: "Re: [OMPI users] Win32 compilation broken (MSVC2008, OpenMPI1.4.1)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is the windows build actually working? I have the static library
<br>
version working correctly, however shared libraries give linker errors
<br>
when compiling an MPI application. It seems libmpi_cxx.lib doesn't
<br>
export any functions, only constant data members (checked through
<br>
dependency walker of libmpi_cxx.dll and dumpbin of libmpi_cxx.lib)
<br>
<p>Eg in a very simple MPI application I get unresolved external symbols
<br>
about MPI::Datatype::Free, MPI::Win::Free, MPI::Comm::Comm and
<br>
ompi_mpi_cxx_op_intercept. I am linking to libmpi.lib and
<br>
libmpi_cxx.lib, both of which have been built with the CMake solution
<br>
where the only changes were the enabling of heterogeneous support, the
<br>
one in osc_rdma_data_move.c and setting Link Library Dependencies to
<br>
yes as per my previous mail.
<br>
<p>2010/1/19 T. Farago &lt;farago1_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; Information: Windows XP SP3 x86, MSVC 2008 Professional, openmpi 1.4.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is a compile error if I enable heterogeneous support, see error
</span><br>
<span class="quotelev1">&gt; message below. The relevant line is:
</span><br>
<span class="quotelev1">&gt; payload= &#194;&#160;(void*)malloc(buflen);
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11812.php">T. Farago: "Re: [OMPI users] Win32 compilation broken (MSVC2008, OpenMPI1.4.1)"</a>
<li><strong>Previous message:</strong> <a href="11810.php">T. Farago: "[OMPI users] Win32 compilation broken (MSVC2008, OpenMPI1.4.1)"</a>
<li><strong>In reply to:</strong> <a href="11810.php">T. Farago: "[OMPI users] Win32 compilation broken (MSVC2008, OpenMPI1.4.1)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11812.php">T. Farago: "Re: [OMPI users] Win32 compilation broken (MSVC2008, OpenMPI1.4.1)"</a>
<li><strong>Reply:</strong> <a href="11812.php">T. Farago: "Re: [OMPI users] Win32 compilation broken (MSVC2008, OpenMPI1.4.1)"</a>
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
