<?
$subject_val = "Re: [OMPI users] VS2008 : linking against OpenMPI: unresolved external symbols";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 26 12:56:18 2012" -->
<!-- isoreceived="20120626165618" -->
<!-- sent="Tue, 26 Jun 2012 13:56:11 -0300" -->
<!-- isosent="20120626165611" -->
<!-- name="Dr AD" -->
<!-- email="drad1907_at_[hidden]" -->
<!-- subject="Re: [OMPI users] VS2008 : linking against OpenMPI: unresolved external symbols" -->
<!-- id="CANrwhcu+ROJVaswJa2BJAFFxxmUCpLT_R2Lk5Kc=FogLa_Qg0A_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4FE9297B.1070301_at_khubla.com" -->
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
<strong>From:</strong> Dr AD (<em>drad1907_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-26 12:56:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19672.php">Lloyd Brown: "[OMPI users] rpmbuild defining opt install path"</a>
<li><strong>Previous message:</strong> <a href="19670.php">Tim Prince: "Re: [OMPI users] undefined reference to `netcdf_mp_nf90_open_'"</a>
<li><strong>In reply to:</strong> <a href="19666.php">Damien: "Re: [OMPI users] VS2008 : linking against OpenMPI: unresolved external symbols"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Damien,
<br>
Thank you very much for your prompt reply.
<br>
Your comments helped me to find the proper settings. The thing that was
<br>
missing was CLR.
<br>
<p>For other users  that might have the same problem, here is the
<br>
configuration that worked (at least for Windows XP, VS2008 Pro):
<br>
//
<br>
// Configuration Properties -&gt; Debugging : MPI Cluster Debugger
<br>
//  MPIRun Working Directory : localhost
<br>
//  MPIRun Command: C:\Program Files\OpenMPI_v1.6-win32\bin\mpiexec.exe
<br>
//  MPIRun Arguments : -n 2  C:\MyFolder\MyProgram\Debug\program.exe
<br>
//                           C:\MyFolder\MyProgram\Debug\program.exe
<br>
//
<br>
// Configuration Properties -&gt; General -&gt; CLR Support: No CLR support
<br>
//
<br>
// C/C++ -&gt; Additional Include Directories: C:\Program
<br>
Files\OpenMPI_v1.6-win32\include
<br>
// C/C++ -&gt; Preprocessor-&gt; Preprocessor Definitions:
<br>
//                                                  OMPI_IMPORTS
<br>
//                                                  OPAL_IMPORTS (it seems
<br>
that may be ommited)
<br>
//                                                  ORTE_IMPORTS (it seems
<br>
that may be ommited)
<br>
//
<br>
//Linker -&gt; Additional Library Directories: C:\Program
<br>
Files\OpenMPI_v1.6-win32\lib
<br>
//Linker -&gt; Additional Dependencies: libmpid.lib
<br>
//     libopen-rted.lib
<br>
//     libopen-pald.lib
<br>
//     libmpi_cxxd.lib
<br>
//
<br>
<p>On Tue, Jun 26, 2012 at 12:16 AM, Damien &lt;damien_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Really fast off the top of my head, LNK4248 and LNK2020 are
</span><br>
<span class="quotelev1">&gt; Microsoft-specific C++/CLI warning for managed C++.  Are you intending to
</span><br>
<span class="quotelev1">&gt; use managed C++ in your app?  That can do funny things to linker symbols.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, you might need to have all three of OMPI_IMPORTS, OPAL_IMPORTS and
</span><br>
<span class="quotelev1">&gt; ORTE_IMPORTS defined.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, make sure you're not set to a 64-bit project type using 32-bit
</span><br>
<span class="quotelev1">&gt; OpenMPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Damien
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 25/06/2012 8:57 PM, Dr AD wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Hello,
</span><br>
<span class="quotelev1">&gt; I installed the windows binaries by running OpenMPI_v1.6-1_win32.exe
</span><br>
<span class="quotelev1">&gt; In VS2008 professional I set the following project preferences:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Configuration -&gt; Properties -&gt; Debugging : MPI Cluster Debugger
</span><br>
<span class="quotelev1">&gt;         MPIRun Working Directory : localhost/NUM PROCS TO LAUNCH
</span><br>
<span class="quotelev1">&gt;         MPIRun Command: C:\Program Files\OpenMPI_v1.6-win32\bin\mpiexec.exe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; C/C++ -&gt; Additional Include Directories: C:\Program
</span><br>
<span class="quotelev1">&gt; Files\OpenMPI_v1.6-win32\include
</span><br>
<span class="quotelev1">&gt; C/C++ -&gt; Preprocessor-&gt; Preprocessor Definitions:
</span><br>
<span class="quotelev1">&gt;                                                   OMPI_IMPORTS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Linker -&gt; Additioanl Library Directories: C:\Program
</span><br>
<span class="quotelev1">&gt; Files\OpenMPI_v1.6-win32\lib
</span><br>
<span class="quotelev1">&gt; Linker -&gt; Additional Dependencies: libmpid.lib
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
<span class="quotelev1">&gt;  : warning LNK4248: unresolved typeref token (01000015) for
</span><br>
<span class="quotelev1">&gt; 'ompi_datatype_t'; image may not run
</span><br>
<span class="quotelev1">&gt;  warning LNK4248: unresolved typeref token (01000016) for
</span><br>
<span class="quotelev1">&gt; 'ompi_request_t'; image may not run
</span><br>
<span class="quotelev1">&gt; f warning LNK4248: unresolved typeref token (01000017) for 'ompi_group_t';
</span><br>
<span class="quotelev1">&gt; image may not run
</span><br>
<span class="quotelev1">&gt;  warning LNK4248: unresolved typeref token (01000018) for
</span><br>
<span class="quotelev1">&gt; 'ompi_communicator_t'; image may not run
</span><br>
<span class="quotelev1">&gt;  warning LNK4248: unresolved typeref token (01000019) for 'ompi_win_t';
</span><br>
<span class="quotelev1">&gt; image may not run
</span><br>
<span class="quotelev1">&gt;  warning LNK4248: unresolved typeref token (0100001B) for
</span><br>
<span class="quotelev1">&gt; 'ompi_errhandler_t'; image may not run
</span><br>
<span class="quotelev1">&gt;  warning LNK4248: unresolved typeref token (0100001C) for 'ompi_info_t';
</span><br>
<span class="quotelev1">&gt; image may not run
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
<span class="quotelev1">&gt; &quot;public: __thiscall MPI::Intracomm::Intracomm(struct ompi_communicator_t
</span><br>
<span class="quotelev1">&gt; *)&quot; (??0Intracomm_at_MPI@@$$FQAE_at_PAUompi_communicator_t@@@Z)
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
<span class="quotelev1">&gt; &quot;public: __thiscall MPI::Intracomm::Intracomm(struct ompi_communicator_t
</span><br>
<span class="quotelev1">&gt; *)&quot; (??0Intracomm_at_MPI@@$$FQAE_at_PAUompi_communicator_t@@@Z)
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
<span class="quotelev1">&gt; users mailing listusers_at_[hidden]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19671/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19672.php">Lloyd Brown: "[OMPI users] rpmbuild defining opt install path"</a>
<li><strong>Previous message:</strong> <a href="19670.php">Tim Prince: "Re: [OMPI users] undefined reference to `netcdf_mp_nf90_open_'"</a>
<li><strong>In reply to:</strong> <a href="19666.php">Damien: "Re: [OMPI users] VS2008 : linking against OpenMPI: unresolved external symbols"</a>
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
