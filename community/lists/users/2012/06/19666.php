<?
$subject_val = "Re: [OMPI users] VS2008 : linking against OpenMPI: unresolved external symbols";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 25 23:16:24 2012" -->
<!-- isoreceived="20120626031624" -->
<!-- sent="Mon, 25 Jun 2012 21:16:11 -0600" -->
<!-- isosent="20120626031611" -->
<!-- name="Damien" -->
<!-- email="damien_at_[hidden]" -->
<!-- subject="Re: [OMPI users] VS2008 : linking against OpenMPI: unresolved external symbols" -->
<!-- id="4FE9297B.1070301_at_khubla.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CANrwhctWKrrXTvQ=h-ZJyKqf6X4KTahf_N=ZqShSYSjFSCdgvA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] VS2008 : linking against OpenMPI: unresolved external symbols<br>
<strong>From:</strong> Damien (<em>damien_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-25 23:16:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19667.php">Syed Ahsan Ali: "[OMPI users] undefined reference to `netcdf_mp_nf90_open_'"</a>
<li><strong>Previous message:</strong> <a href="19665.php">Dr AD: "[OMPI users] VS2008 : linking against OpenMPI: unresolved external symbols"</a>
<li><strong>In reply to:</strong> <a href="19665.php">Dr AD: "[OMPI users] VS2008 : linking against OpenMPI: unresolved external symbols"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19671.php">Dr AD: "Re: [OMPI users] VS2008 : linking against OpenMPI: unresolved external symbols"</a>
<li><strong>Reply:</strong> <a href="19671.php">Dr AD: "Re: [OMPI users] VS2008 : linking against OpenMPI: unresolved external symbols"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Really fast off the top of my head, LNK4248 and LNK2020 are 
<br>
Microsoft-specific C++/CLI warning for managed C++.  Are you intending 
<br>
to use managed C++ in your app?  That can do funny things to linker symbols.
<br>
<p>Also, you might need to have all three of OMPI_IMPORTS, OPAL_IMPORTS and 
<br>
ORTE_IMPORTS defined.
<br>
<p>Also, make sure you're not set to a 64-bit project type using 32-bit 
<br>
OpenMPI.
<br>
<p>Damien
<br>
<p>On 25/06/2012 8:57 PM, Dr AD wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; I installed the windows binaries by running OpenMPI_v1.6-1_win32.exe
</span><br>
<span class="quotelev1">&gt; In VS2008 professional I set the following project preferences:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Configuration -&gt; Properties -&gt; Debugging : MPI Cluster Debugger
</span><br>
<span class="quotelev1">&gt;         MPIRun Working Directory : localhost/NUM PROCS TO LAUNCH
</span><br>
<span class="quotelev1">&gt;         MPIRun Command: C:\Program 
</span><br>
<span class="quotelev1">&gt; Files\OpenMPI_v1.6-win32\bin\mpiexec.exe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; C/C++ -&gt; Additional Include Directories: C:\Program 
</span><br>
<span class="quotelev1">&gt; Files\OpenMPI_v1.6-win32\include
</span><br>
<span class="quotelev1">&gt; C/C++ -&gt; Preprocessor-&gt; Preprocessor Definitions:
</span><br>
<span class="quotelev1">&gt; OMPI_IMPORTS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Linker -&gt; Additioanl Library Directories: C:\Program 
</span><br>
<span class="quotelev1">&gt; Files\OpenMPI_v1.6-win32\lib
</span><br>
<span class="quotelev1">&gt; Linker -&gt; Additional Dependencies:libmpid.lib
</span><br>
<span class="quotelev1">&gt; libopen-rted.lib
</span><br>
<span class="quotelev1">&gt; libopen-pald.lib
</span><br>
<span class="quotelev1">&gt; libmpi_cxxd.lib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I get unresolved external symbols link errors, below:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; : warning LNK4248: unresolved typeref token (01000015) for 
</span><br>
<span class="quotelev1">&gt; 'ompi_datatype_t'; image may not run
</span><br>
<span class="quotelev1">&gt;  warning LNK4248: unresolved typeref token (01000016) for 
</span><br>
<span class="quotelev1">&gt; 'ompi_request_t'; image may not run
</span><br>
<span class="quotelev1">&gt; f warning LNK4248: unresolved typeref token (01000017) for 
</span><br>
<span class="quotelev1">&gt; 'ompi_group_t'; image may not run
</span><br>
<span class="quotelev1">&gt;  warning LNK4248: unresolved typeref token (01000018) for 
</span><br>
<span class="quotelev1">&gt; 'ompi_communicator_t'; image may not run
</span><br>
<span class="quotelev1">&gt;  warning LNK4248: unresolved typeref token (01000019) for 
</span><br>
<span class="quotelev1">&gt; 'ompi_win_t'; image may not run
</span><br>
<span class="quotelev1">&gt;  warning LNK4248: unresolved typeref token (0100001B) for 
</span><br>
<span class="quotelev1">&gt; 'ompi_errhandler_t'; image may not run
</span><br>
<span class="quotelev1">&gt;  warning LNK4248: unresolved typeref token (0100001C) for 
</span><br>
<span class="quotelev1">&gt; 'ompi_info_t'; image may not run
</span><br>
<span class="quotelev1">&gt;  warning LNK4248: unresolved typeref token (0100001D) for 'ompi_op_t'; 
</span><br>
<span class="quotelev1">&gt; image may not run
</span><br>
<span class="quotelev1">&gt;  warning LNK4248: unresolved typeref token (01000022) for 
</span><br>
<span class="quotelev1">&gt; 'ompi_predefined_communicator_t'; image may not run
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  error LNK2020: unresolved token (0A0003B5) *ompi_mpi_comm_null*
</span><br>
<span class="quotelev1">&gt;  error LNK2020: unresolved token (0A000486) *ompi_mpi_comm_world*
</span><br>
<span class="quotelev1">&gt;  error LNK2028: unresolved token (0A0004AF) &quot;public: __thiscall 
</span><br>
<span class="quotelev1">&gt; MPI::Comm::Comm(void)&quot; (??0Comm_at_MPI@@$$FQAE_at_XZ) referenced in function 
</span><br>
<span class="quotelev1">&gt; &quot;public: __thiscall MPI::Intracomm::Intracomm(struct 
</span><br>
<span class="quotelev1">&gt; ompi_communicator_t *)&quot; 
</span><br>
<span class="quotelev1">&gt; (??0Intracomm_at_MPI@@$$FQAE_at_PAUompi_communicator_t@@@Z)
</span><br>
<span class="quotelev1">&gt;  error LNK2001: unresolved external symbol &quot;public: virtual void 
</span><br>
<span class="quotelev1">&gt; __thiscall MPI::Datatype::Free(void)&quot; (?Free_at_Datatype@MPI@@UAEXXZ)
</span><br>
<span class="quotelev1">&gt;  error LNK2001: unresolved external symbol &quot;public: virtual void 
</span><br>
<span class="quotelev1">&gt; __thiscall MPI::Win::Free(void)&quot; (?Free_at_Win@MPI@@UAEXXZ)
</span><br>
<span class="quotelev1">&gt;  error LNK2001: unresolved external symbol _ompi_mpi_comm_null
</span><br>
<span class="quotelev1">&gt;  error LNK2019: unresolved external symbol &quot;public: __thiscall 
</span><br>
<span class="quotelev1">&gt; MPI::Comm::Comm(void)&quot; (??0Comm_at_MPI@@$$FQAE_at_XZ) referenced in function 
</span><br>
<span class="quotelev1">&gt; &quot;public: __thiscall MPI::Intracomm::Intracomm(struct 
</span><br>
<span class="quotelev1">&gt; ompi_communicator_t *)&quot; 
</span><br>
<span class="quotelev1">&gt; (??0Intracomm_at_MPI@@$$FQAE_at_PAUompi_communicator_t@@@Z)
</span><br>
<span class="quotelev1">&gt;  error LNK2001: unresolved external symbol _ompi_mpi_cxx_op_intercept
</span><br>
<span class="quotelev1">&gt;  error LNK2001: unresolved external symbol _ompi_mpi_comm_world
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does anyone know how to fix this ? Thank you.
</span><br>
<span class="quotelev1">&gt;
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
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19666/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19667.php">Syed Ahsan Ali: "[OMPI users] undefined reference to `netcdf_mp_nf90_open_'"</a>
<li><strong>Previous message:</strong> <a href="19665.php">Dr AD: "[OMPI users] VS2008 : linking against OpenMPI: unresolved external symbols"</a>
<li><strong>In reply to:</strong> <a href="19665.php">Dr AD: "[OMPI users] VS2008 : linking against OpenMPI: unresolved external symbols"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19671.php">Dr AD: "Re: [OMPI users] VS2008 : linking against OpenMPI: unresolved external symbols"</a>
<li><strong>Reply:</strong> <a href="19671.php">Dr AD: "Re: [OMPI users] VS2008 : linking against OpenMPI: unresolved external symbols"</a>
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
