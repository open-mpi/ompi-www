<?
$subject_val = "Re: [OMPI users] compilation on windows 7 64-bit";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 27 12:24:13 2012" -->
<!-- isoreceived="20120727162413" -->
<!-- sent="Fri, 27 Jul 2012 12:23:59 -0400" -->
<!-- isosent="20120727162359" -->
<!-- name="Sayre, Alan N" -->
<!-- email="ansayre_at_[hidden]" -->
<!-- subject="Re: [OMPI users] compilation on windows 7 64-bit" -->
<!-- id="A0B7B1B714BA7249B20BAA55F3F4CD61017295F9_at_barbpo5.bwes.net" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5012B13F.6090901_at_hlrs.de" -->
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
<strong>Date:</strong> 2012-07-27 12:23:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19854.php">Tim Prince: "Re: [OMPI users] compilation on windows 7 64-bit"</a>
<li><strong>Previous message:</strong> <a href="19852.php">Shiqing Fan: "Re: [OMPI users] compilation on windows 7 64-bit"</a>
<li><strong>In reply to:</strong> <a href="19852.php">Shiqing Fan: "Re: [OMPI users] compilation on windows 7 64-bit"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19854.php">Tim Prince: "Re: [OMPI users] compilation on windows 7 64-bit"</a>
<li><strong>Reply:</strong> <a href="19854.php">Tim Prince: "Re: [OMPI users] compilation on windows 7 64-bit"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
During compilation I get warning messages such as :
<br>
<p>&nbsp;
<br>
<p>c:\program files
<br>
(x86)\openmpi_v1.6-x64\include\openmpi/ompi/mpi/cxx/op_inln.h(148):
<br>
warning C4800: 'int' : forcing value to bool 'true' or 'false'
<br>
(performance warning)
<br>
<p>&nbsp;&nbsp;cmsolver.cpp
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>Which indicates that the openmpi version &quot;openmpi_v1.6-x64&quot; is 64 bit.
<br>
And I'm sure that I installed the 64 bit version. I am compiling on a 64
<br>
bit version of Windows 7.
<br>
<p>&nbsp;
<br>
<p>From: Shiqing Fan [mailto:fan_at_[hidden]] 
<br>
Sent: Friday, July 27, 2012 11:18 AM
<br>
To: Sayre, Alan N
<br>
Cc: Open MPI Users; Damien
<br>
Subject: Re: [OMPI users] compilation on windows 7 64-bit
<br>
<p>&nbsp;
<br>
<p><p>Have you checked whether the Open MPI libraries and your solution are
<br>
all 64 bit versions?
<br>
<p>Shiqing
<br>
<p><p>On 2012-07-27 3:23 PM, Sayre, Alan N wrote:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thank you both for your help. I added the preprocessor flags. I
<br>
cleaned and rebuilt. I now get the same messages with &quot;-imp&quot; inserted at
<br>
the beginning of each missing symbol e.g.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external
<br>
symbol __imp__MPI_Comm_remote_size referenced in function &quot;struct
<br>
MpComm_s * __cdecl MpCommSpawn(char const *,char const * *
<br>
const,int,enum Bool_e)&quot;
<br>
(?MpCommSpawn@@YAPAUMpComm_s@@PBDQAPBDHW4Bool_e@@@Z)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external
<br>
symbol __imp__MPI_Comm_spawn referenced in function &quot;struct MpComm_s *
<br>
__cdecl MpCommSpawn(char const *,char const * * const,int,enum Bool_e)&quot;
<br>
(?MpCommSpawn@@YAPAUMpComm_s@@PBDQAPBDHW4Bool_e@@@Z)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved external
<br>
symbol __imp__ompi_mpi_info_null
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved external
<br>
symbol __imp__ompi_mpi_comm_self
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved external
<br>
symbol __imp__ompi_mpi_comm_null
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved external
<br>
symbol __imp__ompi_mpi_op_sum
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved external
<br>
symbol __imp__ompi_mpi_op_min
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved external
<br>
symbol __imp__ompi_mpi_op_max
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external
<br>
symbol __imp__MPI_Intercomm_create referenced in function &quot;int __cdecl
<br>
MpCommCreateCommunicators(struct MpComm_s * *,struct MpComm_s * *)&quot;
<br>
(?MpCommCreateCommunicators@@YAHPAPAUMpComm_s@@0_at_Z)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external
<br>
symbol __imp__MPI_Comm_split referenced in function &quot;int __cdecl
<br>
MpCommCreateCommunicators(struct MpComm_s * *,struct MpComm_s * *)&quot;
<br>
(?MpCommCreateCommunicators@@YAHPAPAUMpComm_s@@0_at_Z)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external
<br>
symbol __imp__MPI_Comm_rank referenced in function &quot;int __cdecl
<br>
MpCommCreateCommunicators(struct MpComm_s * *,struct MpComm_s * *)&quot;
<br>
(?MpCommCreateCommunicators@@YAHPAPAUMpComm_s@@0_at_Z)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpenv.obj) : error LNK2001: unresolved external
<br>
symbol __imp__MPI_Comm_rank
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external
<br>
symbol __imp__MPI_Comm_size referenced in function &quot;int __cdecl
<br>
MpCommCreateCommunicators(struct MpComm_s * *,struct MpComm_s * *)&quot;
<br>
(?MpCommCreateCommunicators@@YAHPAPAUMpComm_s@@0_at_Z)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpenv.obj) : error LNK2001: unresolved external
<br>
symbol __imp__MPI_Comm_size
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved external
<br>
symbol __imp__ompi_mpi_comm_world
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpenv.obj) : error LNK2001: unresolved external
<br>
symbol __imp__ompi_mpi_comm_world
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external
<br>
symbol __imp__MPI_Comm_get_parent referenced in function &quot;struct
<br>
MpComm_s * __cdecl MpCommNewChild(void)&quot;
<br>
(?MpCommNewChild@@YAPAUMpComm_s@@XZ)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external
<br>
symbol __imp__MPI_Comm_free referenced in function &quot;void __cdecl
<br>
MpCommFree(struct MpComm_s *)&quot; (?MpCommFree@@YAXPAUMpComm_s@@@Z)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external
<br>
symbol __imp__MPI_Send referenced in function &quot;int __cdecl
<br>
MpCommSend(struct MpComm_s *,void const *,int,enum Dtype_e,int,int)&quot;
<br>
(?MpCommSend@@YAHPAUMpComm_s@@PBXHW4Dtype_e@@HH_at_Z)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external
<br>
symbol __imp__MPI_Isend referenced in function &quot;int __cdecl
<br>
MpCommISend(struct MpComm_s *,void const *,int,enum
<br>
Dtype_e,int,int,struct MpRequest_s *)&quot;
<br>
(?MpCommISend@@YAHPAUMpComm_s@@PBXHW4Dtype_e@@HHPAUMpRequest_s@@@Z)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external
<br>
symbol __imp__MPI_Get_count referenced in function &quot;int __cdecl
<br>
MpCommRecv(struct MpComm_s *,void *,int,enum Dtype_e,int,int,struct
<br>
MpStatus_s *)&quot;
<br>
(?MpCommRecv@@YAHPAUMpComm_s@@PAXHW4Dtype_e@@HHPAUMpStatus_s@@@Z)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external
<br>
symbol __imp__MPI_Recv referenced in function &quot;int __cdecl
<br>
MpCommRecv(struct MpComm_s *,void *,int,enum Dtype_e,int,int,struct
<br>
MpStatus_s *)&quot;
<br>
(?MpCommRecv@@YAHPAUMpComm_s@@PAXHW4Dtype_e@@HHPAUMpStatus_s@@@Z)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external
<br>
symbol __imp__MPI_Irecv referenced in function &quot;int __cdecl
<br>
MpCommIRecv(struct MpComm_s *,void *,int,enum Dtype_e,int,int,struct
<br>
MpRequest_s *)&quot;
<br>
(?MpCommIRecv@@YAHPAUMpComm_s@@PAXHW4Dtype_e@@HHPAUMpRequest_s@@@Z)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved external
<br>
symbol __imp__ompi_mpi_char
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external
<br>
symbol __imp__MPI_Probe referenced in function &quot;int __cdecl
<br>
MpCommProbe(struct MpComm_s *,int,int,struct MpStatus_s *)&quot;
<br>
(?MpCommProbe@@YAHPAUMpComm_s@@HHPAUMpStatus_s@@@Z)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external
<br>
symbol __imp__MPI_Barrier referenced in function &quot;int __cdecl
<br>
MpCommBarrier(struct MpComm_s *)&quot; (?MpCommBarrier@@YAHPAUMpComm_s@@@Z)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external
<br>
symbol __imp__MPI_Reduce referenced in function &quot;int __cdecl
<br>
MpCommReduce(struct MpComm_s *,void const *,void *,int,enum Dtype_e,enum
<br>
MpCommOp_e,int)&quot;
<br>
(?MpCommReduce@@YAHPAUMpComm_s@@PBXPAXHW4Dtype_e@@W4MpCommOp_e@@H_at_Z)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external
<br>
symbol __imp__MPI_Allreduce referenced in function &quot;int __cdecl
<br>
MpCommAllreduce(struct MpComm_s *,void const *,void *,int,enum
<br>
Dtype_e,enum MpCommOp_e)&quot;
<br>
(?MpCommAllreduce@@YAHPAUMpComm_s@@PBXPAXHW4Dtype_e@@W4MpCommOp_e@@@Z)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external
<br>
symbol __imp__MPI_Waitall referenced in function &quot;int __cdecl
<br>
MpCommWaitall(struct MpRequest_s *,struct MpStatus_s * const)&quot;
<br>
(?MpCommWaitall@@YAHPAUMpRequest_s@@QAUMpStatus_s@@@Z)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved external
<br>
symbol __imp__ompi_mpi_byte
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved external
<br>
symbol __imp__ompi_mpi_double
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved external
<br>
symbol __imp__ompi_mpi_float
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved external
<br>
symbol __imp__ompi_mpi_long
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved external
<br>
symbol __imp__ompi_mpi_int
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpenv.obj) : error LNK2019: unresolved external
<br>
symbol __imp__MPI_Errhandler_set referenced in function &quot;int __cdecl
<br>
MpEnvConstr(int *,char * * * const)&quot; (?MpEnvConstr@@YAHPAHQAPAPAD_at_Z)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpenv.obj) : error LNK2001: unresolved external
<br>
symbol __imp__ompi_mpi_errors_return
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpenv.obj) : error LNK2019: unresolved external
<br>
symbol __imp__MPI_Init referenced in function &quot;int __cdecl
<br>
MpEnvConstr(int *,char * * * const)&quot; (?MpEnvConstr@@YAHPAHQAPAPAD_at_Z)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpenv.obj) : error LNK2019: unresolved external
<br>
symbol __imp__MPI_Finalize referenced in function &quot;void __cdecl
<br>
MpEnvFree(void)&quot; (?MpEnvFree@@YAXXZ)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Alan
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;From: users-bounces_at_[hidden]
<br>
[mailto:users-bounces_at_[hidden]] On Behalf Of Shiqing Fan
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sent: Friday, July 27, 2012 7:52 AM
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To: Open MPI Users
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cc: Damien
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subject: Re: [OMPI users] compilation on windows 7 64-bit
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FYI. I've just made an update for this issue in trunk. There
<br>
will be no need to define this flags in the next releases.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Shiqing
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;On 2012-07-27 12:24 AM, Damien wrote:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Do you have 
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OMPI_IMPORTS, OPAL_IMPORTS and ORTE_IMPORTS
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;defined in your preprocessor flags?  You need those.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Damien
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;On 26/07/2012 3:56 PM, Sayre, Alan N wrote:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I'm trying to replace the usage of platform mpi
<br>
with open mpi. I am trying to compile on Windows 7 64 bit using Visual
<br>
Studio 2010. I have added the paths to the openmpi include and library
<br>
directories and added the libmpid.lib and libmpi_cxxd.lib to the linker
<br>
input. The application compiles (find the mpi headers). When it tries to
<br>
link I get the following output:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2019:
<br>
unresolved external symbol _MPI_Comm_remote_size referenced in function
<br>
&quot;struct MpComm_s * __cdecl MpCommSpawn(char const *,char const * *
<br>
const,int,enum Bool_e)&quot;
<br>
(?MpCommSpawn@@YAPAUMpComm_s@@PBDQAPBDHW4Bool_e@@@Z)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2019:
<br>
unresolved external symbol _MPI_Comm_spawn referenced in function
<br>
&quot;struct MpComm_s * __cdecl MpCommSpawn(char const *,char const * *
<br>
const,int,enum Bool_e)&quot;
<br>
(?MpCommSpawn@@YAPAUMpComm_s@@PBDQAPBDHW4Bool_e@@@Z)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2001:
<br>
unresolved external symbol _ompi_mpi_info_null
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2001:
<br>
unresolved external symbol _ompi_mpi_comm_self
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2001:
<br>
unresolved external symbol _ompi_mpi_comm_null
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2001:
<br>
unresolved external symbol _ompi_mpi_op_sum
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2001:
<br>
unresolved external symbol _ompi_mpi_op_min
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2001:
<br>
unresolved external symbol _ompi_mpi_op_max
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2019:
<br>
unresolved external symbol _MPI_Intercomm_create referenced in function
<br>
&quot;int __cdecl MpCommCreateCommunicators(struct MpComm_s * *,struct
<br>
MpComm_s * *)&quot; (?MpCommCreateCommunicators@@YAHPAPAUMpComm_s@@0_at_Z)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2019:
<br>
unresolved external symbol _MPI_Comm_split referenced in function &quot;int
<br>
__cdecl MpCommCreateCommunicators(struct MpComm_s * *,struct MpComm_s *
<br>
*)&quot; (?MpCommCreateCommunicators@@YAHPAPAUMpComm_s@@0_at_Z)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2019:
<br>
unresolved external symbol _MPI_Comm_rank referenced in function &quot;int
<br>
__cdecl MpCommCreateCommunicators(struct MpComm_s * *,struct MpComm_s *
<br>
*)&quot; (?MpCommCreateCommunicators@@YAHPAPAUMpComm_s@@0_at_Z)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpenv.obj) : error LNK2001:
<br>
unresolved external symbol _MPI_Comm_rank
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2019:
<br>
unresolved external symbol _MPI_Comm_size referenced in function &quot;int
<br>
__cdecl MpCommCreateCommunicators(struct MpComm_s * *,struct MpComm_s *
<br>
*)&quot; (?MpCommCreateCommunicators@@YAHPAPAUMpComm_s@@0_at_Z)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpenv.obj) : error LNK2001:
<br>
unresolved external symbol _MPI_Comm_size
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2001:
<br>
unresolved external symbol _ompi_mpi_comm_world
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpenv.obj) : error LNK2001:
<br>
unresolved external symbol _ompi_mpi_comm_world
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2019:
<br>
unresolved external symbol _MPI_Comm_get_parent referenced in function
<br>
&quot;struct MpComm_s * __cdecl MpCommNewChild(void)&quot;
<br>
(?MpCommNewChild@@YAPAUMpComm_s@@XZ)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2019:
<br>
unresolved external symbol _MPI_Comm_free referenced in function &quot;void
<br>
__cdecl MpCommFree(struct MpComm_s *)&quot; (?MpCommFree@@YAXPAUMpComm_s@@@Z)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2019:
<br>
unresolved external symbol _MPI_Send referenced in function &quot;int __cdecl
<br>
MpCommSend(struct MpComm_s *,void const *,int,enum Dtype_e,int,int)&quot;
<br>
(?MpCommSend@@YAHPAUMpComm_s@@PBXHW4Dtype_e@@HH_at_Z)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2019:
<br>
unresolved external symbol _MPI_Isend referenced in function &quot;int
<br>
__cdecl MpCommISend(struct MpComm_s *,void const *,int,enum
<br>
Dtype_e,int,int,struct MpRequest_s *)&quot;
<br>
(?MpCommISend@@YAHPAUMpComm_s@@PBXHW4Dtype_e@@HHPAUMpRequest_s@@@Z)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2019:
<br>
unresolved external symbol _MPI_Get_count referenced in function &quot;int
<br>
__cdecl MpCommRecv(struct MpComm_s *,void *,int,enum
<br>
Dtype_e,int,int,struct MpStatus_s *)&quot;
<br>
(?MpCommRecv@@YAHPAUMpComm_s@@PAXHW4Dtype_e@@HHPAUMpStatus_s@@@Z)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2019:
<br>
unresolved external symbol _MPI_Recv referenced in function &quot;int __cdecl
<br>
MpCommRecv(struct MpComm_s *,void *,int,enum Dtype_e,int,int,struct
<br>
MpStatus_s *)&quot;
<br>
(?MpCommRecv@@YAHPAUMpComm_s@@PAXHW4Dtype_e@@HHPAUMpStatus_s@@@Z)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2019:
<br>
unresolved external symbol _MPI_Irecv referenced in function &quot;int
<br>
__cdecl MpCommIRecv(struct MpComm_s *,void *,int,enum
<br>
Dtype_e,int,int,struct MpRequest_s *)&quot;
<br>
(?MpCommIRecv@@YAHPAUMpComm_s@@PAXHW4Dtype_e@@HHPAUMpRequest_s@@@Z)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2001:
<br>
unresolved external symbol _ompi_mpi_char
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2019:
<br>
unresolved external symbol _MPI_Probe referenced in function &quot;int
<br>
__cdecl MpCommProbe(struct MpComm_s *,int,int,struct MpStatus_s *)&quot;
<br>
(?MpCommProbe@@YAHPAUMpComm_s@@HHPAUMpStatus_s@@@Z)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2019:
<br>
unresolved external symbol _MPI_Barrier referenced in function &quot;int
<br>
__cdecl MpCommBarrier(struct MpComm_s *)&quot;
<br>
(?MpCommBarrier@@YAHPAUMpComm_s@@@Z)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2019:
<br>
unresolved external symbol _MPI_Reduce referenced in function &quot;int
<br>
__cdecl MpCommReduce(struct MpComm_s *,void const *,void *,int,enum
<br>
Dtype_e,enum MpCommOp_e,int)&quot;
<br>
(?MpCommReduce@@YAHPAUMpComm_s@@PBXPAXHW4Dtype_e@@W4MpCommOp_e@@H_at_Z)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2019:
<br>
unresolved external symbol _MPI_Allreduce referenced in function &quot;int
<br>
__cdecl MpCommAllreduce(struct MpComm_s *,void const *,void *,int,enum
<br>
Dtype_e,enum MpCommOp_e)&quot;
<br>
(?MpCommAllreduce@@YAHPAUMpComm_s@@PBXPAXHW4Dtype_e@@W4MpCommOp_e@@@Z)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2019:
<br>
unresolved external symbol _MPI_Waitall referenced in function &quot;int
<br>
__cdecl MpCommWaitall(struct MpRequest_s *,struct MpStatus_s * const)&quot;
<br>
(?MpCommWaitall@@YAHPAUMpRequest_s@@QAUMpStatus_s@@@Z)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2001:
<br>
unresolved external symbol _ompi_mpi_byte
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2001:
<br>
unresolved external symbol _ompi_mpi_double
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2001:
<br>
unresolved external symbol _ompi_mpi_float
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2001:
<br>
unresolved external symbol _ompi_mpi_long
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpcomm.obj) : error LNK2001:
<br>
unresolved external symbol _ompi_mpi_int
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpenv.obj) : error LNK2019:
<br>
unresolved external symbol _MPI_Errhandler_set referenced in function
<br>
&quot;int __cdecl MpEnvConstr(int *,char * * * const)&quot;
<br>
(?MpEnvConstr@@YAHPAHQAPAPAD_at_Z)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpenv.obj) : error LNK2001:
<br>
unresolved external symbol _ompi_mpi_errors_return
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpenv.obj) : error LNK2019:
<br>
unresolved external symbol _MPI_Init referenced in function &quot;int __cdecl
<br>
MpEnvConstr(int *,char * * * const)&quot; (?MpEnvConstr@@YAHPAHQAPAPAD_at_Z)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;como_mplib.lib(mpenv.obj) : error LNK2019:
<br>
unresolved external symbol _MPI_Finalize referenced in function &quot;void
<br>
__cdecl MpEnvFree(void)&quot; (?MpEnvFree@@YAXXZ)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;What am I missing?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thanks in advance for any assistance.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Alan
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
________________________________
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This message is intended only for the individual
<br>
or entity to which it is addressed and contains information that is
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
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_______________________________________________
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;users mailing list
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;users_at_[hidden]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;---------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Shiqing Fan
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;High Performance Computing Center Stuttgart (HLRS)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tel: ++49(0)711-685-87234      Nobelstrasse 19
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fax: ++49(0)711-685-65832      70569 Stuttgart
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.hlrs.de/organization/people/shiqing-fan/">http://www.hlrs.de/organization/people/shiqing-fan/</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;email: fan_at_[hidden]
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19853/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19854.php">Tim Prince: "Re: [OMPI users] compilation on windows 7 64-bit"</a>
<li><strong>Previous message:</strong> <a href="19852.php">Shiqing Fan: "Re: [OMPI users] compilation on windows 7 64-bit"</a>
<li><strong>In reply to:</strong> <a href="19852.php">Shiqing Fan: "Re: [OMPI users] compilation on windows 7 64-bit"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19854.php">Tim Prince: "Re: [OMPI users] compilation on windows 7 64-bit"</a>
<li><strong>Reply:</strong> <a href="19854.php">Tim Prince: "Re: [OMPI users] compilation on windows 7 64-bit"</a>
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
