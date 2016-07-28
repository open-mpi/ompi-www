<?
$subject_val = "Re: [OMPI users] OMPI C++ Bindings problems";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 10 13:53:35 2012" -->
<!-- isoreceived="20120110185335" -->
<!-- sent="Tue, 10 Jan 2012 11:53:25 -0700" -->
<!-- isosent="20120110185325" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI C++ Bindings problems" -->
<!-- id="6F95FF98-578D-4B4F-B39E-51E561A49751_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAJ32XeaHneBSkgHw=pA5tXygC2sabYtMcF92s5ZLFHMP1nViWg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OMPI C++ Bindings problems<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-10 13:53:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18128.php">Randy Abernethy: "[OMPI users] OpenMPI 1.5.4 remote send hang on Windows 2008R2"</a>
<li><strong>Previous message:</strong> <a href="18126.php">John Doe: "[OMPI users] OMPI C++ Bindings problems"</a>
<li><strong>In reply to:</strong> <a href="18126.php">John Doe: "[OMPI users] OMPI C++ Bindings problems"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Did you use OMPI's C++ wrapper compiler to build your code? Looks to me like you are missing the required include paths, which is what the wrapper compiler would provide.
<br>
<p><p>On Jan 10, 2012, at 11:50 AM, John Doe wrote:
<br>
<p><span class="quotelev1">&gt; I'm trying to compile some code that uses the Chombo mesh package which uses Open MPI's C++ but keep getting errors like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; AMRLevelX.o: In function `Intracomm':
</span><br>
<span class="quotelev1">&gt; /opt/ompi/gnu/1.4.4/include/openmpi/ompi/mpi/cxx/intracomm.h:25: undefined reference to `MPI::Comm::Comm()'
</span><br>
<span class="quotelev1">&gt; AMRLevelX.o: In function `Intracomm':
</span><br>
<span class="quotelev1">&gt; /opt/ompi/gnu/1.4.4/include/openmpi/ompi/mpi/cxx/intracomm_inln.h:23: undefined reference to `MPI::Comm::Comm()'
</span><br>
<span class="quotelev1">&gt; AMRLevelX.o: In function `MPI::Op::Init(void (*)(void const*, void*, int, MPI::Datatype const&amp;), bool)':
</span><br>
<span class="quotelev1">&gt; /opt/ompi/gnu/1.4.4/include/openmpi/ompi/mpi/cxx/op_inln.h:122: undefined reference to `ompi_mpi_cxx_op_intercept'
</span><br>
<span class="quotelev1">&gt; AMRLevelX.o:(.rodata._ZTVN3MPI3WinE[vtable for MPI::Win]+0x48): undefined reference to `MPI::Win::Free()'
</span><br>
<span class="quotelev1">&gt; AMRLevelX.o:(.rodata._ZTVN3MPI8DatatypeE[vtable for MPI::Datatype]+0x78): undefined reference to `MPI::Datatype::Free()'
</span><br>
<span class="quotelev1">&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; which looks like a problem with some ompi c++ symbols. I have the path to the library file libmpi_cxx.so in my LD_LIBRARY_PATH and compiled openmpi with C++ and shared library support. Am I missing something?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks 
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18127/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18128.php">Randy Abernethy: "[OMPI users] OpenMPI 1.5.4 remote send hang on Windows 2008R2"</a>
<li><strong>Previous message:</strong> <a href="18126.php">John Doe: "[OMPI users] OMPI C++ Bindings problems"</a>
<li><strong>In reply to:</strong> <a href="18126.php">John Doe: "[OMPI users] OMPI C++ Bindings problems"</a>
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
