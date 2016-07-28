<?
$subject_val = "Re: [OMPI users] compilation on windows 7 64-bit";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 27 09:23:36 2012" -->
<!-- isoreceived="20120727132336" -->
<!-- sent="Fri, 27 Jul 2012 09:23:23 -0400" -->
<!-- isosent="20120727132323" -->
<!-- name="Sayre, Alan N" -->
<!-- email="ansayre_at_[hidden]" -->
<!-- subject="Re: [OMPI users] compilation on windows 7 64-bit" -->
<!-- id="A0B7B1B714BA7249B20BAA55F3F4CD61017295CD_at_barbpo5.bwes.net" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="501280EF.8000505_at_hlrs.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] compilation on windows 7 64-bit<br>
<strong>From:</strong> Sayre, Alan N (<em>ansayre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-27 09:23:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19852.php">Shiqing Fan: "Re: [OMPI users] compilation on windows 7 64-bit"</a>
<li><strong>Previous message:</strong> <a href="19850.php">Shiqing Fan: "Re: [OMPI users] compilation on windows 7 64-bit"</a>
<li><strong>In reply to:</strong> <a href="19850.php">Shiqing Fan: "Re: [OMPI users] compilation on windows 7 64-bit"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19852.php">Shiqing Fan: "Re: [OMPI users] compilation on windows 7 64-bit"</a>
<li><strong>Reply:</strong> <a href="19852.php">Shiqing Fan: "Re: [OMPI users] compilation on windows 7 64-bit"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you both for your help. I added the preprocessor flags. I cleaned
<br>
and rebuilt. I now get the same messages with &quot;-imp&quot; inserted at the
<br>
beginning of each missing symbol e.g.
<br>
<p>&nbsp;
<br>
<p>como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external symbol
<br>
__imp__MPI_Comm_remote_size referenced in function &quot;struct MpComm_s *
<br>
__cdecl MpCommSpawn(char const *,char const * * const,int,enum Bool_e)&quot;
<br>
(?MpCommSpawn@@YAPAUMpComm_s@@PBDQAPBDHW4Bool_e@@@Z)
<br>
<p>como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external symbol
<br>
__imp__MPI_Comm_spawn referenced in function &quot;struct MpComm_s * __cdecl
<br>
MpCommSpawn(char const *,char const * * const,int,enum Bool_e)&quot;
<br>
(?MpCommSpawn@@YAPAUMpComm_s@@PBDQAPBDHW4Bool_e@@@Z)
<br>
<p>como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved external symbol
<br>
__imp__ompi_mpi_info_null
<br>
<p>como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved external symbol
<br>
__imp__ompi_mpi_comm_self
<br>
<p>como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved external symbol
<br>
__imp__ompi_mpi_comm_null
<br>
<p>como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved external symbol
<br>
__imp__ompi_mpi_op_sum
<br>
<p>como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved external symbol
<br>
__imp__ompi_mpi_op_min
<br>
<p>como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved external symbol
<br>
__imp__ompi_mpi_op_max
<br>
<p>como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external symbol
<br>
__imp__MPI_Intercomm_create referenced in function &quot;int __cdecl
<br>
MpCommCreateCommunicators(struct MpComm_s * *,struct MpComm_s * *)&quot;
<br>
(?MpCommCreateCommunicators@@YAHPAPAUMpComm_s@@0_at_Z)
<br>
<p>como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external symbol
<br>
__imp__MPI_Comm_split referenced in function &quot;int __cdecl
<br>
MpCommCreateCommunicators(struct MpComm_s * *,struct MpComm_s * *)&quot;
<br>
(?MpCommCreateCommunicators@@YAHPAPAUMpComm_s@@0_at_Z)
<br>
<p>como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external symbol
<br>
__imp__MPI_Comm_rank referenced in function &quot;int __cdecl
<br>
MpCommCreateCommunicators(struct MpComm_s * *,struct MpComm_s * *)&quot;
<br>
(?MpCommCreateCommunicators@@YAHPAPAUMpComm_s@@0_at_Z)
<br>
<p>como_mplib.lib(mpenv.obj) : error LNK2001: unresolved external symbol
<br>
__imp__MPI_Comm_rank
<br>
<p>como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external symbol
<br>
__imp__MPI_Comm_size referenced in function &quot;int __cdecl
<br>
MpCommCreateCommunicators(struct MpComm_s * *,struct MpComm_s * *)&quot;
<br>
(?MpCommCreateCommunicators@@YAHPAPAUMpComm_s@@0_at_Z)
<br>
<p>como_mplib.lib(mpenv.obj) : error LNK2001: unresolved external symbol
<br>
__imp__MPI_Comm_size
<br>
<p>como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved external symbol
<br>
__imp__ompi_mpi_comm_world
<br>
<p>como_mplib.lib(mpenv.obj) : error LNK2001: unresolved external symbol
<br>
__imp__ompi_mpi_comm_world
<br>
<p>como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external symbol
<br>
__imp__MPI_Comm_get_parent referenced in function &quot;struct MpComm_s *
<br>
__cdecl MpCommNewChild(void)&quot; (?MpCommNewChild@@YAPAUMpComm_s@@XZ)
<br>
<p>como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external symbol
<br>
__imp__MPI_Comm_free referenced in function &quot;void __cdecl
<br>
MpCommFree(struct MpComm_s *)&quot; (?MpCommFree@@YAXPAUMpComm_s@@@Z)
<br>
<p>como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external symbol
<br>
__imp__MPI_Send referenced in function &quot;int __cdecl MpCommSend(struct
<br>
MpComm_s *,void const *,int,enum Dtype_e,int,int)&quot;
<br>
(?MpCommSend@@YAHPAUMpComm_s@@PBXHW4Dtype_e@@HH_at_Z)
<br>
<p>como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external symbol
<br>
__imp__MPI_Isend referenced in function &quot;int __cdecl MpCommISend(struct
<br>
MpComm_s *,void const *,int,enum Dtype_e,int,int,struct MpRequest_s *)&quot;
<br>
(?MpCommISend@@YAHPAUMpComm_s@@PBXHW4Dtype_e@@HHPAUMpRequest_s@@@Z)
<br>
<p>como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external symbol
<br>
__imp__MPI_Get_count referenced in function &quot;int __cdecl
<br>
MpCommRecv(struct MpComm_s *,void *,int,enum Dtype_e,int,int,struct
<br>
MpStatus_s *)&quot;
<br>
(?MpCommRecv@@YAHPAUMpComm_s@@PAXHW4Dtype_e@@HHPAUMpStatus_s@@@Z)
<br>
<p>como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external symbol
<br>
__imp__MPI_Recv referenced in function &quot;int __cdecl MpCommRecv(struct
<br>
MpComm_s *,void *,int,enum Dtype_e,int,int,struct MpStatus_s *)&quot;
<br>
(?MpCommRecv@@YAHPAUMpComm_s@@PAXHW4Dtype_e@@HHPAUMpStatus_s@@@Z)
<br>
<p>como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external symbol
<br>
__imp__MPI_Irecv referenced in function &quot;int __cdecl MpCommIRecv(struct
<br>
MpComm_s *,void *,int,enum Dtype_e,int,int,struct MpRequest_s *)&quot;
<br>
(?MpCommIRecv@@YAHPAUMpComm_s@@PAXHW4Dtype_e@@HHPAUMpRequest_s@@@Z)
<br>
<p>como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved external symbol
<br>
__imp__ompi_mpi_char
<br>
<p>como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external symbol
<br>
__imp__MPI_Probe referenced in function &quot;int __cdecl MpCommProbe(struct
<br>
MpComm_s *,int,int,struct MpStatus_s *)&quot;
<br>
(?MpCommProbe@@YAHPAUMpComm_s@@HHPAUMpStatus_s@@@Z)
<br>
<p>como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external symbol
<br>
__imp__MPI_Barrier referenced in function &quot;int __cdecl
<br>
MpCommBarrier(struct MpComm_s *)&quot; (?MpCommBarrier@@YAHPAUMpComm_s@@@Z)
<br>
<p>como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external symbol
<br>
__imp__MPI_Reduce referenced in function &quot;int __cdecl
<br>
MpCommReduce(struct MpComm_s *,void const *,void *,int,enum Dtype_e,enum
<br>
MpCommOp_e,int)&quot;
<br>
(?MpCommReduce@@YAHPAUMpComm_s@@PBXPAXHW4Dtype_e@@W4MpCommOp_e@@H_at_Z)
<br>
<p>como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external symbol
<br>
__imp__MPI_Allreduce referenced in function &quot;int __cdecl
<br>
MpCommAllreduce(struct MpComm_s *,void const *,void *,int,enum
<br>
Dtype_e,enum MpCommOp_e)&quot;
<br>
(?MpCommAllreduce@@YAHPAUMpComm_s@@PBXPAXHW4Dtype_e@@W4MpCommOp_e@@@Z)
<br>
<p>como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external symbol
<br>
__imp__MPI_Waitall referenced in function &quot;int __cdecl
<br>
MpCommWaitall(struct MpRequest_s *,struct MpStatus_s * const)&quot;
<br>
(?MpCommWaitall@@YAHPAUMpRequest_s@@QAUMpStatus_s@@@Z)
<br>
<p>como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved external symbol
<br>
__imp__ompi_mpi_byte
<br>
<p>como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved external symbol
<br>
__imp__ompi_mpi_double
<br>
<p>como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved external symbol
<br>
__imp__ompi_mpi_float
<br>
<p>como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved external symbol
<br>
__imp__ompi_mpi_long
<br>
<p>como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved external symbol
<br>
__imp__ompi_mpi_int
<br>
<p>como_mplib.lib(mpenv.obj) : error LNK2019: unresolved external symbol
<br>
__imp__MPI_Errhandler_set referenced in function &quot;int __cdecl
<br>
MpEnvConstr(int *,char * * * const)&quot; (?MpEnvConstr@@YAHPAHQAPAPAD_at_Z)
<br>
<p>como_mplib.lib(mpenv.obj) : error LNK2001: unresolved external symbol
<br>
__imp__ompi_mpi_errors_return
<br>
<p>como_mplib.lib(mpenv.obj) : error LNK2019: unresolved external symbol
<br>
__imp__MPI_Init referenced in function &quot;int __cdecl MpEnvConstr(int
<br>
*,char * * * const)&quot; (?MpEnvConstr@@YAHPAHQAPAPAD_at_Z)
<br>
<p>como_mplib.lib(mpenv.obj) : error LNK2019: unresolved external symbol
<br>
__imp__MPI_Finalize referenced in function &quot;void __cdecl
<br>
MpEnvFree(void)&quot; (?MpEnvFree@@YAXXZ)
<br>
<p>&nbsp;
<br>
<p>Alan
<br>
<p>&nbsp;
<br>
<p>From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Shiqing Fan
<br>
Sent: Friday, July 27, 2012 7:52 AM
<br>
To: Open MPI Users
<br>
Cc: Damien
<br>
Subject: Re: [OMPI users] compilation on windows 7 64-bit
<br>
<p>&nbsp;
<br>
<p><p>FYI. I've just made an update for this issue in trunk. There will be no
<br>
need to define this flags in the next releases.
<br>
<p><p>Shiqing
<br>
<p>On 2012-07-27 12:24 AM, Damien wrote:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Do you have 
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OMPI_IMPORTS, OPAL_IMPORTS and ORTE_IMPORTS
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;defined in your preprocessor flags?  You need those.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Damien
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;On 26/07/2012 3:56 PM, Sayre, Alan N wrote:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I'm trying to replace the usage of platform mpi with
<br>
open mpi. I am trying to compile on Windows 7 64 bit using Visual Studio
<br>
2010. I have added the paths to the openmpi include and library
<br>
directories and added the libmpid.lib and libmpi_cxxd.lib to the linker
<br>
input. The application compiles (find the mpi headers). When it tries to
<br>
link I get the following output:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved
<br>
external symbol _MPI_Comm_remote_size referenced in function &quot;struct
<br>
MpComm_s * __cdecl MpCommSpawn(char const *,char const * *
<br>
const,int,enum Bool_e)&quot;
<br>
(?MpCommSpawn@@YAPAUMpComm_s@@PBDQAPBDHW4Bool_e@@@Z)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved
<br>
external symbol _MPI_Comm_spawn referenced in function &quot;struct MpComm_s
<br>
* __cdecl MpCommSpawn(char const *,char const * * const,int,enum
<br>
Bool_e)&quot; (?MpCommSpawn@@YAPAUMpComm_s@@PBDQAPBDHW4Bool_e@@@Z)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved
<br>
external symbol _ompi_mpi_info_null
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved
<br>
external symbol _ompi_mpi_comm_self
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved
<br>
external symbol _ompi_mpi_comm_null
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved
<br>
external symbol _ompi_mpi_op_sum
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved
<br>
external symbol _ompi_mpi_op_min
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved
<br>
external symbol _ompi_mpi_op_max
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved
<br>
external symbol _MPI_Intercomm_create referenced in function &quot;int
<br>
__cdecl MpCommCreateCommunicators(struct MpComm_s * *,struct MpComm_s *
<br>
*)&quot; (?MpCommCreateCommunicators@@YAHPAPAUMpComm_s@@0_at_Z)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved
<br>
external symbol _MPI_Comm_split referenced in function &quot;int __cdecl
<br>
MpCommCreateCommunicators(struct MpComm_s * *,struct MpComm_s * *)&quot;
<br>
(?MpCommCreateCommunicators@@YAHPAPAUMpComm_s@@0_at_Z)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved
<br>
external symbol _MPI_Comm_rank referenced in function &quot;int __cdecl
<br>
MpCommCreateCommunicators(struct MpComm_s * *,struct MpComm_s * *)&quot;
<br>
(?MpCommCreateCommunicators@@YAHPAPAUMpComm_s@@0_at_Z)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpenv.obj) : error LNK2001: unresolved
<br>
external symbol _MPI_Comm_rank
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved
<br>
external symbol _MPI_Comm_size referenced in function &quot;int __cdecl
<br>
MpCommCreateCommunicators(struct MpComm_s * *,struct MpComm_s * *)&quot;
<br>
(?MpCommCreateCommunicators@@YAHPAPAUMpComm_s@@0_at_Z)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpenv.obj) : error LNK2001: unresolved
<br>
external symbol _MPI_Comm_size
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved
<br>
external symbol _ompi_mpi_comm_world
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpenv.obj) : error LNK2001: unresolved
<br>
external symbol _ompi_mpi_comm_world
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved
<br>
external symbol _MPI_Comm_get_parent referenced in function &quot;struct
<br>
MpComm_s * __cdecl MpCommNewChild(void)&quot;
<br>
(?MpCommNewChild@@YAPAUMpComm_s@@XZ)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved
<br>
external symbol _MPI_Comm_free referenced in function &quot;void __cdecl
<br>
MpCommFree(struct MpComm_s *)&quot; (?MpCommFree@@YAXPAUMpComm_s@@@Z)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved
<br>
external symbol _MPI_Send referenced in function &quot;int __cdecl
<br>
MpCommSend(struct MpComm_s *,void const *,int,enum Dtype_e,int,int)&quot;
<br>
(?MpCommSend@@YAHPAUMpComm_s@@PBXHW4Dtype_e@@HH_at_Z)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved
<br>
external symbol _MPI_Isend referenced in function &quot;int __cdecl
<br>
MpCommISend(struct MpComm_s *,void const *,int,enum
<br>
Dtype_e,int,int,struct MpRequest_s *)&quot;
<br>
(?MpCommISend@@YAHPAUMpComm_s@@PBXHW4Dtype_e@@HHPAUMpRequest_s@@@Z)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved
<br>
external symbol _MPI_Get_count referenced in function &quot;int __cdecl
<br>
MpCommRecv(struct MpComm_s *,void *,int,enum Dtype_e,int,int,struct
<br>
MpStatus_s *)&quot;
<br>
(?MpCommRecv@@YAHPAUMpComm_s@@PAXHW4Dtype_e@@HHPAUMpStatus_s@@@Z)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved
<br>
external symbol _MPI_Recv referenced in function &quot;int __cdecl
<br>
MpCommRecv(struct MpComm_s *,void *,int,enum Dtype_e,int,int,struct
<br>
MpStatus_s *)&quot;
<br>
(?MpCommRecv@@YAHPAUMpComm_s@@PAXHW4Dtype_e@@HHPAUMpStatus_s@@@Z)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved
<br>
external symbol _MPI_Irecv referenced in function &quot;int __cdecl
<br>
MpCommIRecv(struct MpComm_s *,void *,int,enum Dtype_e,int,int,struct
<br>
MpRequest_s *)&quot;
<br>
(?MpCommIRecv@@YAHPAUMpComm_s@@PAXHW4Dtype_e@@HHPAUMpRequest_s@@@Z)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved
<br>
external symbol _ompi_mpi_char
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved
<br>
external symbol _MPI_Probe referenced in function &quot;int __cdecl
<br>
MpCommProbe(struct MpComm_s *,int,int,struct MpStatus_s *)&quot;
<br>
(?MpCommProbe@@YAHPAUMpComm_s@@HHPAUMpStatus_s@@@Z)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved
<br>
external symbol _MPI_Barrier referenced in function &quot;int __cdecl
<br>
MpCommBarrier(struct MpComm_s *)&quot; (?MpCommBarrier@@YAHPAUMpComm_s@@@Z)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved
<br>
external symbol _MPI_Reduce referenced in function &quot;int __cdecl
<br>
MpCommReduce(struct MpComm_s *,void const *,void *,int,enum Dtype_e,enum
<br>
MpCommOp_e,int)&quot;
<br>
(?MpCommReduce@@YAHPAUMpComm_s@@PBXPAXHW4Dtype_e@@W4MpCommOp_e@@H_at_Z)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved
<br>
external symbol _MPI_Allreduce referenced in function &quot;int __cdecl
<br>
MpCommAllreduce(struct MpComm_s *,void const *,void *,int,enum
<br>
Dtype_e,enum MpCommOp_e)&quot;
<br>
(?MpCommAllreduce@@YAHPAUMpComm_s@@PBXPAXHW4Dtype_e@@W4MpCommOp_e@@@Z)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved
<br>
external symbol _MPI_Waitall referenced in function &quot;int __cdecl
<br>
MpCommWaitall(struct MpRequest_s *,struct MpStatus_s * const)&quot;
<br>
(?MpCommWaitall@@YAHPAUMpRequest_s@@QAUMpStatus_s@@@Z)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved
<br>
external symbol _ompi_mpi_byte
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved
<br>
external symbol _ompi_mpi_double
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved
<br>
external symbol _ompi_mpi_float
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved
<br>
external symbol _ompi_mpi_long
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved
<br>
external symbol _ompi_mpi_int
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpenv.obj) : error LNK2019: unresolved
<br>
external symbol _MPI_Errhandler_set referenced in function &quot;int __cdecl
<br>
MpEnvConstr(int *,char * * * const)&quot; (?MpEnvConstr@@YAHPAHQAPAPAD_at_Z)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpenv.obj) : error LNK2001: unresolved
<br>
external symbol _ompi_mpi_errors_return
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpenv.obj) : error LNK2019: unresolved
<br>
external symbol _MPI_Init referenced in function &quot;int __cdecl
<br>
MpEnvConstr(int *,char * * * const)&quot; (?MpEnvConstr@@YAHPAHQAPAPAD_at_Z)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpenv.obj) : error LNK2019: unresolved
<br>
external symbol _MPI_Finalize referenced in function &quot;void __cdecl
<br>
MpEnvFree(void)&quot; (?MpEnvFree@@YAXXZ)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;What am I missing?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thanks in advance for any assistance.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Alan
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
________________________________
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This message is intended only for the individual or
<br>
entity to which it is addressed and contains information that is
<br>
proprietary to The Babcock &amp; Wilcox Company and/or its affiliates, or
<br>
may be otherwise confidential. If the reader of this message is not the
<br>
intended recipient, or the employee agent responsible for delivering the
<br>
message to the intended recipient, you are hereby notified that any
<br>
dissemination, distribution or copying of this communication is strictly
<br>
prohibited. If you have received this communication in error, please
<br>
notify the sender immediately by return e-mail and delete this message
<br>
from your computer. Thank you. 
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_______________________________________________
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;users mailing list
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;users_at_[hidden]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_______________________________________________
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;users mailing list
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;users_at_[hidden]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><p><p><p><p><pre>
-- 
---------------------------------------------------------------
Shiqing Fan
High Performance Computing Center Stuttgart (HLRS)
Tel: ++49(0)711-685-87234      Nobelstrasse 19
Fax: ++49(0)711-685-65832      70569 Stuttgart
<a href="http://www.hlrs.de/organization/people/shiqing-fan/">http://www.hlrs.de/organization/people/shiqing-fan/</a>
email: fan_at_[hidden]
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19851/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19852.php">Shiqing Fan: "Re: [OMPI users] compilation on windows 7 64-bit"</a>
<li><strong>Previous message:</strong> <a href="19850.php">Shiqing Fan: "Re: [OMPI users] compilation on windows 7 64-bit"</a>
<li><strong>In reply to:</strong> <a href="19850.php">Shiqing Fan: "Re: [OMPI users] compilation on windows 7 64-bit"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19852.php">Shiqing Fan: "Re: [OMPI users] compilation on windows 7 64-bit"</a>
<li><strong>Reply:</strong> <a href="19852.php">Shiqing Fan: "Re: [OMPI users] compilation on windows 7 64-bit"</a>
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
