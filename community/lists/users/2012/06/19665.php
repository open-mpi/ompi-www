<?
$subject_val = "[OMPI users] VS2008 : linking against OpenMPI: unresolved external symbols";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 25 22:57:49 2012" -->
<!-- isoreceived="20120626025749" -->
<!-- sent="Mon, 25 Jun 2012 23:57:38 -0300" -->
<!-- isosent="20120626025738" -->
<!-- name="Dr AD" -->
<!-- email="drad1907_at_[hidden]" -->
<!-- subject="[OMPI users] VS2008 : linking against OpenMPI: unresolved external symbols" -->
<!-- id="CANrwhctWKrrXTvQ=h-ZJyKqf6X4KTahf_N=ZqShSYSjFSCdgvA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] VS2008 : linking against OpenMPI: unresolved external symbols<br>
<strong>From:</strong> Dr AD (<em>drad1907_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-25 22:57:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19666.php">Damien: "Re: [OMPI users] VS2008 : linking against OpenMPI: unresolved external symbols"</a>
<li><strong>Previous message:</strong> <a href="19664.php">Jeff Squyres: "Re: [OMPI users] MPI Problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19666.php">Damien: "Re: [OMPI users] VS2008 : linking against OpenMPI: unresolved external symbols"</a>
<li><strong>Reply:</strong> <a href="19666.php">Damien: "Re: [OMPI users] VS2008 : linking against OpenMPI: unresolved external symbols"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
I installed the windows binaries by running OpenMPI_v1.6-1_win32.exe
<br>
In VS2008 professional I set the following project preferences:
<br>
<p>Configuration -&gt; Properties -&gt; Debugging : MPI Cluster Debugger
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPIRun Working Directory : localhost/NUM PROCS TO LAUNCH
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPIRun Command: C:\Program Files\OpenMPI_v1.6-win32\bin\mpiexec.exe
<br>
<p>C/C++ -&gt; Additional Include Directories: C:\Program
<br>
Files\OpenMPI_v1.6-win32\include
<br>
C/C++ -&gt; Preprocessor-&gt; Preprocessor Definitions:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OMPI_IMPORTS
<br>
<p>Linker -&gt; Additioanl Library Directories: C:\Program
<br>
Files\OpenMPI_v1.6-win32\lib
<br>
Linker -&gt; Additional Dependencies: libmpid.lib
<br>
libopen-rted.lib
<br>
libopen-pald.lib
<br>
libmpi_cxxd.lib
<br>
<p>I get unresolved external symbols link errors, below:
<br>
<p>: warning LNK4248: unresolved typeref token (01000015) for
<br>
'ompi_datatype_t'; image may not run
<br>
&nbsp;warning LNK4248: unresolved typeref token (01000016) for 'ompi_request_t';
<br>
image may not run
<br>
f warning LNK4248: unresolved typeref token (01000017) for 'ompi_group_t';
<br>
image may not run
<br>
&nbsp;warning LNK4248: unresolved typeref token (01000018) for
<br>
'ompi_communicator_t'; image may not run
<br>
&nbsp;warning LNK4248: unresolved typeref token (01000019) for 'ompi_win_t';
<br>
image may not run
<br>
&nbsp;warning LNK4248: unresolved typeref token (0100001B) for
<br>
'ompi_errhandler_t'; image may not run
<br>
&nbsp;warning LNK4248: unresolved typeref token (0100001C) for 'ompi_info_t';
<br>
image may not run
<br>
&nbsp;warning LNK4248: unresolved typeref token (0100001D) for 'ompi_op_t';
<br>
image may not run
<br>
&nbsp;warning LNK4248: unresolved typeref token (01000022) for
<br>
'ompi_predefined_communicator_t'; image may not run
<br>
<p>&nbsp;error LNK2020: unresolved token (0A0003B5) *ompi_mpi_comm_null*
<br>
&nbsp;error LNK2020: unresolved token (0A000486) *ompi_mpi_comm_world*
<br>
&nbsp;error LNK2028: unresolved token (0A0004AF) &quot;public: __thiscall
<br>
MPI::Comm::Comm(void)&quot; (??0Comm_at_MPI@@$$FQAE_at_XZ) referenced in function
<br>
&quot;public: __thiscall MPI::Intracomm::Intracomm(struct ompi_communicator_t
<br>
*)&quot; (??0Intracomm_at_MPI@@$$FQAE_at_PAUompi_communicator_t@@@Z)
<br>
&nbsp;error LNK2001: unresolved external symbol &quot;public: virtual void __thiscall
<br>
MPI::Datatype::Free(void)&quot; (?Free_at_Datatype@MPI@@UAEXXZ)
<br>
&nbsp;error LNK2001: unresolved external symbol &quot;public: virtual void __thiscall
<br>
MPI::Win::Free(void)&quot; (?Free_at_Win@MPI@@UAEXXZ)
<br>
&nbsp;error LNK2001: unresolved external symbol _ompi_mpi_comm_null
<br>
&nbsp;error LNK2019: unresolved external symbol &quot;public: __thiscall
<br>
MPI::Comm::Comm(void)&quot; (??0Comm_at_MPI@@$$FQAE_at_XZ) referenced in function
<br>
&quot;public: __thiscall MPI::Intracomm::Intracomm(struct ompi_communicator_t
<br>
*)&quot; (??0Intracomm_at_MPI@@$$FQAE_at_PAUompi_communicator_t@@@Z)
<br>
&nbsp;error LNK2001: unresolved external symbol _ompi_mpi_cxx_op_intercept
<br>
&nbsp;error LNK2001: unresolved external symbol _ompi_mpi_comm_world
<br>
<p>Does anyone know how to fix this ? Thank you.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19665/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19666.php">Damien: "Re: [OMPI users] VS2008 : linking against OpenMPI: unresolved external symbols"</a>
<li><strong>Previous message:</strong> <a href="19664.php">Jeff Squyres: "Re: [OMPI users] MPI Problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19666.php">Damien: "Re: [OMPI users] VS2008 : linking against OpenMPI: unresolved external symbols"</a>
<li><strong>Reply:</strong> <a href="19666.php">Damien: "Re: [OMPI users] VS2008 : linking against OpenMPI: unresolved external symbols"</a>
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
