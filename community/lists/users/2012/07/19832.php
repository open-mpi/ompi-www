<?
$subject_val = "[OMPI users] compilation on windows 7 64-bit";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 26 17:56:20 2012" -->
<!-- isoreceived="20120726215620" -->
<!-- sent="Thu, 26 Jul 2012 17:56:11 -0400" -->
<!-- isosent="20120726215611" -->
<!-- name="Sayre, Alan N" -->
<!-- email="ansayre_at_[hidden]" -->
<!-- subject="[OMPI users] compilation on windows 7 64-bit" -->
<!-- id="A0B7B1B714BA7249B20BAA55F3F4CD61017295AB_at_barbpo5.bwes.net" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] compilation on windows 7 64-bit<br>
<strong>From:</strong> Sayre, Alan N (<em>ansayre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-26 17:56:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19833.php">Reuti: "Re: [OMPI users] restricting a job to a set of hosts"</a>
<li><strong>Previous message:</strong> <a href="19831.php">Reuti: "Re: [OMPI users] restricting a job to a set of hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19837.php">Damien: "Re: [OMPI users] compilation on windows 7 64-bit"</a>
<li><strong>Reply:</strong> <a href="19837.php">Damien: "Re: [OMPI users] compilation on windows 7 64-bit"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm trying to replace the usage of platform mpi with open mpi. I am
trying to compile on Windows 7 64 bit using Visual Studio 2010. I have
added the paths to the openmpi include and library directories and added
the libmpid.lib and libmpi_cxxd.lib to the linker input. The application
compiles (find the mpi headers). When it tries to link I get the
following output:

 

como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external symbol
_MPI_Comm_remote_size referenced in function &quot;struct MpComm_s * __cdecl
MpCommSpawn(char const *,char const * * const,int,enum Bool_e)&quot;
(?MpCommSpawn@@YAPAUMpComm_s@@PBDQAPBDHW4Bool_e@@@Z)

como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external symbol
_MPI_Comm_spawn referenced in function &quot;struct MpComm_s * __cdecl
MpCommSpawn(char const *,char const * * const,int,enum Bool_e)&quot;
(?MpCommSpawn@@YAPAUMpComm_s@@PBDQAPBDHW4Bool_e@@@Z)

como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved external symbol
_ompi_mpi_info_null

como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved external symbol
_ompi_mpi_comm_self

como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved external symbol
_ompi_mpi_comm_null

como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved external symbol
_ompi_mpi_op_sum

como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved external symbol
_ompi_mpi_op_min

como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved external symbol
_ompi_mpi_op_max

como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external symbol
_MPI_Intercomm_create referenced in function &quot;int __cdecl
MpCommCreateCommunicators(struct MpComm_s * *,struct MpComm_s * *)&quot;
(?MpCommCreateCommunicators@@YAHPAPAUMpComm_s@@0_at_Z)

como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external symbol
_MPI_Comm_split referenced in function &quot;int __cdecl
MpCommCreateCommunicators(struct MpComm_s * *,struct MpComm_s * *)&quot;
(?MpCommCreateCommunicators@@YAHPAPAUMpComm_s@@0_at_Z)

como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external symbol
_MPI_Comm_rank referenced in function &quot;int __cdecl
MpCommCreateCommunicators(struct MpComm_s * *,struct MpComm_s * *)&quot;
(?MpCommCreateCommunicators@@YAHPAPAUMpComm_s@@0_at_Z)

como_mplib.lib(mpenv.obj) : error LNK2001: unresolved external symbol
_MPI_Comm_rank

como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external symbol
_MPI_Comm_size referenced in function &quot;int __cdecl
MpCommCreateCommunicators(struct MpComm_s * *,struct MpComm_s * *)&quot;
(?MpCommCreateCommunicators@@YAHPAPAUMpComm_s@@0_at_Z)

como_mplib.lib(mpenv.obj) : error LNK2001: unresolved external symbol
_MPI_Comm_size

como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved external symbol
_ompi_mpi_comm_world

como_mplib.lib(mpenv.obj) : error LNK2001: unresolved external symbol
_ompi_mpi_comm_world

como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external symbol
_MPI_Comm_get_parent referenced in function &quot;struct MpComm_s * __cdecl
MpCommNewChild(void)&quot; (?MpCommNewChild@@YAPAUMpComm_s@@XZ)

como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external symbol
_MPI_Comm_free referenced in function &quot;void __cdecl MpCommFree(struct
MpComm_s *)&quot; (?MpCommFree@@YAXPAUMpComm_s@@@Z)

como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external symbol
_MPI_Send referenced in function &quot;int __cdecl MpCommSend(struct MpComm_s
*,void const *,int,enum Dtype_e,int,int)&quot;
(?MpCommSend@@YAHPAUMpComm_s@@PBXHW4Dtype_e@@HH_at_Z)

como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external symbol
_MPI_Isend referenced in function &quot;int __cdecl MpCommISend(struct
MpComm_s *,void const *,int,enum Dtype_e,int,int,struct MpRequest_s *)&quot;
(?MpCommISend@@YAHPAUMpComm_s@@PBXHW4Dtype_e@@HHPAUMpRequest_s@@@Z)

como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external symbol
_MPI_Get_count referenced in function &quot;int __cdecl MpCommRecv(struct
MpComm_s *,void *,int,enum Dtype_e,int,int,struct MpStatus_s *)&quot;
(?MpCommRecv@@YAHPAUMpComm_s@@PAXHW4Dtype_e@@HHPAUMpStatus_s@@@Z)

como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external symbol
_MPI_Recv referenced in function &quot;int __cdecl MpCommRecv(struct MpComm_s
*,void *,int,enum Dtype_e,int,int,struct MpStatus_s *)&quot;
(?MpCommRecv@@YAHPAUMpComm_s@@PAXHW4Dtype_e@@HHPAUMpStatus_s@@@Z)

como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external symbol
_MPI_Irecv referenced in function &quot;int __cdecl MpCommIRecv(struct
MpComm_s *,void *,int,enum Dtype_e,int,int,struct MpRequest_s *)&quot;
(?MpCommIRecv@@YAHPAUMpComm_s@@PAXHW4Dtype_e@@HHPAUMpRequest_s@@@Z)

como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved external symbol
_ompi_mpi_char

como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external symbol
_MPI_Probe referenced in function &quot;int __cdecl MpCommProbe(struct
MpComm_s *,int,int,struct MpStatus_s *)&quot;
(?MpCommProbe@@YAHPAUMpComm_s@@HHPAUMpStatus_s@@@Z)

como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external symbol
_MPI_Barrier referenced in function &quot;int __cdecl MpCommBarrier(struct
MpComm_s *)&quot; (?MpCommBarrier@@YAHPAUMpComm_s@@@Z)

como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external symbol
_MPI_Reduce referenced in function &quot;int __cdecl MpCommReduce(struct
MpComm_s *,void const *,void *,int,enum Dtype_e,enum MpCommOp_e,int)&quot;
(?MpCommReduce@@YAHPAUMpComm_s@@PBXPAXHW4Dtype_e@@W4MpCommOp_e@@H_at_Z)

como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external symbol
_MPI_Allreduce referenced in function &quot;int __cdecl
MpCommAllreduce(struct MpComm_s *,void const *,void *,int,enum
Dtype_e,enum MpCommOp_e)&quot;
(?MpCommAllreduce@@YAHPAUMpComm_s@@PBXPAXHW4Dtype_e@@W4MpCommOp_e@@@Z)

como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external symbol
_MPI_Waitall referenced in function &quot;int __cdecl MpCommWaitall(struct
MpRequest_s *,struct MpStatus_s * const)&quot;
(?MpCommWaitall@@YAHPAUMpRequest_s@@QAUMpStatus_s@@@Z)

como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved external symbol
_ompi_mpi_byte

como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved external symbol
_ompi_mpi_double

como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved external symbol
_ompi_mpi_float

como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved external symbol
_ompi_mpi_long

como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved external symbol
_ompi_mpi_int

como_mplib.lib(mpenv.obj) : error LNK2019: unresolved external symbol
_MPI_Errhandler_set referenced in function &quot;int __cdecl MpEnvConstr(int
*,char * * * const)&quot; (?MpEnvConstr@@YAHPAHQAPAPAD_at_Z)

como_mplib.lib(mpenv.obj) : error LNK2001: unresolved external symbol
_ompi_mpi_errors_return

como_mplib.lib(mpenv.obj) : error LNK2019: unresolved external symbol
_MPI_Init referenced in function &quot;int __cdecl MpEnvConstr(int *,char * *
* const)&quot; (?MpEnvConstr@@YAHPAHQAPAPAD_at_Z)

como_mplib.lib(mpenv.obj) : error LNK2019: unresolved external symbol
_MPI_Finalize referenced in function &quot;void __cdecl MpEnvFree(void)&quot;
(?MpEnvFree@@YAXXZ)

 

What am I missing?

 

Thanks in advance for any assistance.

 

Alan



-----------------------------------------
This message is intended only for the individual or entity to which
it is addressed and contains information that is proprietary to The
Babcock &amp; Wilcox Company and/or its affiliates, or may be otherwise
confidential.  If the reader of this message is not the intended
recipient, or the employee agent responsible for delivering the
message to the intended recipient, you are hereby notified that any
dissemination, distribution or copying of this communication is
strictly prohibited.  If you have received this communication in
error, please notify the sender immediately by return e-mail and
delete this message from your computer.  Thank you.
<br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19832/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19833.php">Reuti: "Re: [OMPI users] restricting a job to a set of hosts"</a>
<li><strong>Previous message:</strong> <a href="19831.php">Reuti: "Re: [OMPI users] restricting a job to a set of hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19837.php">Damien: "Re: [OMPI users] compilation on windows 7 64-bit"</a>
<li><strong>Reply:</strong> <a href="19837.php">Damien: "Re: [OMPI users] compilation on windows 7 64-bit"</a>
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
