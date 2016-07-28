<?
$subject_val = "Re: [OMPI users] compilation on windows 7 64-bit";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 27 11:17:00 2012" -->
<!-- isoreceived="20120727151700" -->
<!-- sent="Fri, 27 Jul 2012 17:18:23 +0200" -->
<!-- isosent="20120727151823" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] compilation on windows 7 64-bit" -->
<!-- id="5012B13F.6090901_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="A0B7B1B714BA7249B20BAA55F3F4CD61017295CD_at_barbpo5.bwes.net" -->
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
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-27 11:18:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19853.php">Sayre, Alan N: "Re: [OMPI users] compilation on windows 7 64-bit"</a>
<li><strong>Previous message:</strong> <a href="19851.php">Sayre, Alan N: "Re: [OMPI users] compilation on windows 7 64-bit"</a>
<li><strong>In reply to:</strong> <a href="19851.php">Sayre, Alan N: "Re: [OMPI users] compilation on windows 7 64-bit"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19853.php">Sayre, Alan N: "Re: [OMPI users] compilation on windows 7 64-bit"</a>
<li><strong>Reply:</strong> <a href="19853.php">Sayre, Alan N: "Re: [OMPI users] compilation on windows 7 64-bit"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Have you checked whether the Open MPI libraries and your solution are 
<br>
all 64 bit versions?
<br>
<p>Shiqing
<br>
<p><p>On 2012-07-27 3:23 PM, Sayre, Alan N wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you both for your help. I added the preprocessor flags. I 
</span><br>
<span class="quotelev1">&gt; cleaned and rebuilt. I now get the same messages with &quot;---imp&quot; 
</span><br>
<span class="quotelev1">&gt; inserted at the beginning of each missing symbol e.g.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; __imp__MPI_Comm_remote_size referenced in function &quot;struct MpComm_s * 
</span><br>
<span class="quotelev1">&gt; __cdecl MpCommSpawn(char const *,char const * * const,int,enum 
</span><br>
<span class="quotelev1">&gt; Bool_e)&quot; (?MpCommSpawn@@YAPAUMpComm_s@@PBDQAPBDHW4Bool_e@@@Z)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; __imp__MPI_Comm_spawn referenced in function &quot;struct MpComm_s * 
</span><br>
<span class="quotelev1">&gt; __cdecl MpCommSpawn(char const *,char const * * const,int,enum 
</span><br>
<span class="quotelev1">&gt; Bool_e)&quot; (?MpCommSpawn@@YAPAUMpComm_s@@PBDQAPBDHW4Bool_e@@@Z)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; __imp__ompi_mpi_info_null
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; __imp__ompi_mpi_comm_self
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; __imp__ompi_mpi_comm_null
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; __imp__ompi_mpi_op_sum
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; __imp__ompi_mpi_op_min
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; __imp__ompi_mpi_op_max
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; __imp__MPI_Intercomm_create referenced in function &quot;int __cdecl 
</span><br>
<span class="quotelev1">&gt; MpCommCreateCommunicators(struct MpComm_s * *,struct MpComm_s * *)&quot; 
</span><br>
<span class="quotelev1">&gt; (?MpCommCreateCommunicators@@YAHPAPAUMpComm_s@@0_at_Z)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; __imp__MPI_Comm_split referenced in function &quot;int __cdecl 
</span><br>
<span class="quotelev1">&gt; MpCommCreateCommunicators(struct MpComm_s * *,struct MpComm_s * *)&quot; 
</span><br>
<span class="quotelev1">&gt; (?MpCommCreateCommunicators@@YAHPAPAUMpComm_s@@0_at_Z)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; __imp__MPI_Comm_rank referenced in function &quot;int __cdecl 
</span><br>
<span class="quotelev1">&gt; MpCommCreateCommunicators(struct MpComm_s * *,struct MpComm_s * *)&quot; 
</span><br>
<span class="quotelev1">&gt; (?MpCommCreateCommunicators@@YAHPAPAUMpComm_s@@0_at_Z)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; como_mplib.lib(mpenv.obj) : error LNK2001: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; __imp__MPI_Comm_rank
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; __imp__MPI_Comm_size referenced in function &quot;int __cdecl 
</span><br>
<span class="quotelev1">&gt; MpCommCreateCommunicators(struct MpComm_s * *,struct MpComm_s * *)&quot; 
</span><br>
<span class="quotelev1">&gt; (?MpCommCreateCommunicators@@YAHPAPAUMpComm_s@@0_at_Z)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; como_mplib.lib(mpenv.obj) : error LNK2001: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; __imp__MPI_Comm_size
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; __imp__ompi_mpi_comm_world
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; como_mplib.lib(mpenv.obj) : error LNK2001: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; __imp__ompi_mpi_comm_world
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; __imp__MPI_Comm_get_parent referenced in function &quot;struct MpComm_s * 
</span><br>
<span class="quotelev1">&gt; __cdecl MpCommNewChild(void)&quot; (?MpCommNewChild@@YAPAUMpComm_s@@XZ)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; __imp__MPI_Comm_free referenced in function &quot;void __cdecl 
</span><br>
<span class="quotelev1">&gt; MpCommFree(struct MpComm_s *)&quot; (?MpCommFree@@YAXPAUMpComm_s@@@Z)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; __imp__MPI_Send referenced in function &quot;int __cdecl MpCommSend(struct 
</span><br>
<span class="quotelev1">&gt; MpComm_s *,void const *,int,enum Dtype_e,int,int)&quot; 
</span><br>
<span class="quotelev1">&gt; (?MpCommSend@@YAHPAUMpComm_s@@PBXHW4Dtype_e@@HH_at_Z)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; __imp__MPI_Isend referenced in function &quot;int __cdecl 
</span><br>
<span class="quotelev1">&gt; MpCommISend(struct MpComm_s *,void const *,int,enum 
</span><br>
<span class="quotelev1">&gt; Dtype_e,int,int,struct MpRequest_s *)&quot; 
</span><br>
<span class="quotelev1">&gt; (?MpCommISend@@YAHPAUMpComm_s@@PBXHW4Dtype_e@@HHPAUMpRequest_s@@@Z)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; __imp__MPI_Get_count referenced in function &quot;int __cdecl 
</span><br>
<span class="quotelev1">&gt; MpCommRecv(struct MpComm_s *,void *,int,enum Dtype_e,int,int,struct 
</span><br>
<span class="quotelev1">&gt; MpStatus_s *)&quot; 
</span><br>
<span class="quotelev1">&gt; (?MpCommRecv@@YAHPAUMpComm_s@@PAXHW4Dtype_e@@HHPAUMpStatus_s@@@Z)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; __imp__MPI_Recv referenced in function &quot;int __cdecl MpCommRecv(struct 
</span><br>
<span class="quotelev1">&gt; MpComm_s *,void *,int,enum Dtype_e,int,int,struct MpStatus_s *)&quot; 
</span><br>
<span class="quotelev1">&gt; (?MpCommRecv@@YAHPAUMpComm_s@@PAXHW4Dtype_e@@HHPAUMpStatus_s@@@Z)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; __imp__MPI_Irecv referenced in function &quot;int __cdecl 
</span><br>
<span class="quotelev1">&gt; MpCommIRecv(struct MpComm_s *,void *,int,enum Dtype_e,int,int,struct 
</span><br>
<span class="quotelev1">&gt; MpRequest_s *)&quot; 
</span><br>
<span class="quotelev1">&gt; (?MpCommIRecv@@YAHPAUMpComm_s@@PAXHW4Dtype_e@@HHPAUMpRequest_s@@@Z)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; __imp__ompi_mpi_char
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; __imp__MPI_Probe referenced in function &quot;int __cdecl 
</span><br>
<span class="quotelev1">&gt; MpCommProbe(struct MpComm_s *,int,int,struct MpStatus_s *)&quot; 
</span><br>
<span class="quotelev1">&gt; (?MpCommProbe@@YAHPAUMpComm_s@@HHPAUMpStatus_s@@@Z)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; __imp__MPI_Barrier referenced in function &quot;int __cdecl 
</span><br>
<span class="quotelev1">&gt; MpCommBarrier(struct MpComm_s *)&quot; (?MpCommBarrier@@YAHPAUMpComm_s@@@Z)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; __imp__MPI_Reduce referenced in function &quot;int __cdecl 
</span><br>
<span class="quotelev1">&gt; MpCommReduce(struct MpComm_s *,void const *,void *,int,enum 
</span><br>
<span class="quotelev1">&gt; Dtype_e,enum MpCommOp_e,int)&quot; 
</span><br>
<span class="quotelev1">&gt; (?MpCommReduce@@YAHPAUMpComm_s@@PBXPAXHW4Dtype_e@@W4MpCommOp_e@@H_at_Z)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; __imp__MPI_Allreduce referenced in function &quot;int __cdecl 
</span><br>
<span class="quotelev1">&gt; MpCommAllreduce(struct MpComm_s *,void const *,void *,int,enum 
</span><br>
<span class="quotelev1">&gt; Dtype_e,enum MpCommOp_e)&quot; 
</span><br>
<span class="quotelev1">&gt; (?MpCommAllreduce@@YAHPAUMpComm_s@@PBXPAXHW4Dtype_e@@W4MpCommOp_e@@@Z)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; __imp__MPI_Waitall referenced in function &quot;int __cdecl 
</span><br>
<span class="quotelev1">&gt; MpCommWaitall(struct MpRequest_s *,struct MpStatus_s * const)&quot; 
</span><br>
<span class="quotelev1">&gt; (?MpCommWaitall@@YAHPAUMpRequest_s@@QAUMpStatus_s@@@Z)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; __imp__ompi_mpi_byte
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; __imp__ompi_mpi_double
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; __imp__ompi_mpi_float
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; __imp__ompi_mpi_long
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; __imp__ompi_mpi_int
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; como_mplib.lib(mpenv.obj) : error LNK2019: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; __imp__MPI_Errhandler_set referenced in function &quot;int __cdecl 
</span><br>
<span class="quotelev1">&gt; MpEnvConstr(int *,char * * * const)&quot; (?MpEnvConstr@@YAHPAHQAPAPAD_at_Z)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; como_mplib.lib(mpenv.obj) : error LNK2001: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; __imp__ompi_mpi_errors_return
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; como_mplib.lib(mpenv.obj) : error LNK2019: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; __imp__MPI_Init referenced in function &quot;int __cdecl MpEnvConstr(int 
</span><br>
<span class="quotelev1">&gt; *,char * * * const)&quot; (?MpEnvConstr@@YAHPAHQAPAPAD_at_Z)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; como_mplib.lib(mpenv.obj) : error LNK2019: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; __imp__MPI_Finalize referenced in function &quot;void __cdecl 
</span><br>
<span class="quotelev1">&gt; MpEnvFree(void)&quot; (?MpEnvFree@@YAXXZ)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Alan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *From:*users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] 
</span><br>
<span class="quotelev1">&gt; *On Behalf Of *Shiqing Fan
</span><br>
<span class="quotelev1">&gt; *Sent:* Friday, July 27, 2012 7:52 AM
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Users
</span><br>
<span class="quotelev1">&gt; *Cc:* Damien
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI users] compilation on windows 7 64-bit
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FYI. I've just made an update for this issue in trunk. There will be 
</span><br>
<span class="quotelev1">&gt; no need to define this flags in the next releases.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Shiqing
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2012-07-27 12:24 AM, Damien wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Do you have
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     OMPI_IMPORTS, OPAL_IMPORTS and ORTE_IMPORTS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     defined in your preprocessor flags?  You need those.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Damien
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On 26/07/2012 3:56 PM, Sayre, Alan N wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         I'm trying to replace the usage of platform mpi with open mpi.
</span><br>
<span class="quotelev1">&gt;         I am trying to compile on Windows 7 64 bit using Visual Studio
</span><br>
<span class="quotelev1">&gt;         2010. I have added the paths to the openmpi include and
</span><br>
<span class="quotelev1">&gt;         library directories and added the libmpid.lib and
</span><br>
<span class="quotelev1">&gt;         libmpi_cxxd.lib to the linker input. The application compiles
</span><br>
<span class="quotelev1">&gt;         (find the mpi headers). When it tries to link I get the
</span><br>
<span class="quotelev1">&gt;         following output:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved
</span><br>
<span class="quotelev1">&gt;         external symbol _MPI_Comm_remote_size referenced in function
</span><br>
<span class="quotelev1">&gt;         &quot;struct MpComm_s * __cdecl MpCommSpawn(char const *,char const
</span><br>
<span class="quotelev1">&gt;         * * const,int,enum Bool_e)&quot;
</span><br>
<span class="quotelev1">&gt;         (?MpCommSpawn@@YAPAUMpComm_s@@PBDQAPBDHW4Bool_e@@@Z)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved
</span><br>
<span class="quotelev1">&gt;         external symbol _MPI_Comm_spawn referenced in function &quot;struct
</span><br>
<span class="quotelev1">&gt;         MpComm_s * __cdecl MpCommSpawn(char const *,char const * *
</span><br>
<span class="quotelev1">&gt;         const,int,enum Bool_e)&quot;
</span><br>
<span class="quotelev1">&gt;         (?MpCommSpawn@@YAPAUMpComm_s@@PBDQAPBDHW4Bool_e@@@Z)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved
</span><br>
<span class="quotelev1">&gt;         external symbol _ompi_mpi_info_null
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved
</span><br>
<span class="quotelev1">&gt;         external symbol _ompi_mpi_comm_self
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved
</span><br>
<span class="quotelev1">&gt;         external symbol _ompi_mpi_comm_null
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved
</span><br>
<span class="quotelev1">&gt;         external symbol _ompi_mpi_op_sum
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved
</span><br>
<span class="quotelev1">&gt;         external symbol _ompi_mpi_op_min
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved
</span><br>
<span class="quotelev1">&gt;         external symbol _ompi_mpi_op_max
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved
</span><br>
<span class="quotelev1">&gt;         external symbol _MPI_Intercomm_create referenced in function
</span><br>
<span class="quotelev1">&gt;         &quot;int __cdecl MpCommCreateCommunicators(struct MpComm_s *
</span><br>
<span class="quotelev1">&gt;         *,struct MpComm_s * *)&quot;
</span><br>
<span class="quotelev1">&gt;         (?MpCommCreateCommunicators@@YAHPAPAUMpComm_s@@0_at_Z)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved
</span><br>
<span class="quotelev1">&gt;         external symbol _MPI_Comm_split referenced in function &quot;int
</span><br>
<span class="quotelev1">&gt;         __cdecl MpCommCreateCommunicators(struct MpComm_s * *,struct
</span><br>
<span class="quotelev1">&gt;         MpComm_s * *)&quot; (?MpCommCreateCommunicators@@YAHPAPAUMpComm_s@@0_at_Z)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved
</span><br>
<span class="quotelev1">&gt;         external symbol _MPI_Comm_rank referenced in function &quot;int
</span><br>
<span class="quotelev1">&gt;         __cdecl MpCommCreateCommunicators(struct MpComm_s * *,struct
</span><br>
<span class="quotelev1">&gt;         MpComm_s * *)&quot; (?MpCommCreateCommunicators@@YAHPAPAUMpComm_s@@0_at_Z)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         como_mplib.lib(mpenv.obj) : error LNK2001: unresolved external
</span><br>
<span class="quotelev1">&gt;         symbol _MPI_Comm_rank
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved
</span><br>
<span class="quotelev1">&gt;         external symbol _MPI_Comm_size referenced in function &quot;int
</span><br>
<span class="quotelev1">&gt;         __cdecl MpCommCreateCommunicators(struct MpComm_s * *,struct
</span><br>
<span class="quotelev1">&gt;         MpComm_s * *)&quot; (?MpCommCreateCommunicators@@YAHPAPAUMpComm_s@@0_at_Z)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         como_mplib.lib(mpenv.obj) : error LNK2001: unresolved external
</span><br>
<span class="quotelev1">&gt;         symbol _MPI_Comm_size
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved
</span><br>
<span class="quotelev1">&gt;         external symbol _ompi_mpi_comm_world
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         como_mplib.lib(mpenv.obj) : error LNK2001: unresolved external
</span><br>
<span class="quotelev1">&gt;         symbol _ompi_mpi_comm_world
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved
</span><br>
<span class="quotelev1">&gt;         external symbol _MPI_Comm_get_parent referenced in function
</span><br>
<span class="quotelev1">&gt;         &quot;struct MpComm_s * __cdecl MpCommNewChild(void)&quot;
</span><br>
<span class="quotelev1">&gt;         (?MpCommNewChild@@YAPAUMpComm_s@@XZ)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved
</span><br>
<span class="quotelev1">&gt;         external symbol _MPI_Comm_free referenced in function &quot;void
</span><br>
<span class="quotelev1">&gt;         __cdecl MpCommFree(struct MpComm_s *)&quot;
</span><br>
<span class="quotelev1">&gt;         (?MpCommFree@@YAXPAUMpComm_s@@@Z)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved
</span><br>
<span class="quotelev1">&gt;         external symbol _MPI_Send referenced in function &quot;int __cdecl
</span><br>
<span class="quotelev1">&gt;         MpCommSend(struct MpComm_s *,void const *,int,enum
</span><br>
<span class="quotelev1">&gt;         Dtype_e,int,int)&quot;
</span><br>
<span class="quotelev1">&gt;         (?MpCommSend@@YAHPAUMpComm_s@@PBXHW4Dtype_e@@HH_at_Z)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved
</span><br>
<span class="quotelev1">&gt;         external symbol _MPI_Isend referenced in function &quot;int __cdecl
</span><br>
<span class="quotelev1">&gt;         MpCommISend(struct MpComm_s *,void const *,int,enum
</span><br>
<span class="quotelev1">&gt;         Dtype_e,int,int,struct MpRequest_s *)&quot;
</span><br>
<span class="quotelev1">&gt;         (?MpCommISend@@YAHPAUMpComm_s@@PBXHW4Dtype_e@@HHPAUMpRequest_s@@@Z)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved
</span><br>
<span class="quotelev1">&gt;         external symbol _MPI_Get_count referenced in function &quot;int
</span><br>
<span class="quotelev1">&gt;         __cdecl MpCommRecv(struct MpComm_s *,void *,int,enum
</span><br>
<span class="quotelev1">&gt;         Dtype_e,int,int,struct MpStatus_s *)&quot;
</span><br>
<span class="quotelev1">&gt;         (?MpCommRecv@@YAHPAUMpComm_s@@PAXHW4Dtype_e@@HHPAUMpStatus_s@@@Z)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved
</span><br>
<span class="quotelev1">&gt;         external symbol _MPI_Recv referenced in function &quot;int __cdecl
</span><br>
<span class="quotelev1">&gt;         MpCommRecv(struct MpComm_s *,void *,int,enum
</span><br>
<span class="quotelev1">&gt;         Dtype_e,int,int,struct MpStatus_s *)&quot;
</span><br>
<span class="quotelev1">&gt;         (?MpCommRecv@@YAHPAUMpComm_s@@PAXHW4Dtype_e@@HHPAUMpStatus_s@@@Z)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved
</span><br>
<span class="quotelev1">&gt;         external symbol _MPI_Irecv referenced in function &quot;int __cdecl
</span><br>
<span class="quotelev1">&gt;         MpCommIRecv(struct MpComm_s *,void *,int,enum
</span><br>
<span class="quotelev1">&gt;         Dtype_e,int,int,struct MpRequest_s *)&quot;
</span><br>
<span class="quotelev1">&gt;         (?MpCommIRecv@@YAHPAUMpComm_s@@PAXHW4Dtype_e@@HHPAUMpRequest_s@@@Z)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved
</span><br>
<span class="quotelev1">&gt;         external symbol _ompi_mpi_char
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved
</span><br>
<span class="quotelev1">&gt;         external symbol _MPI_Probe referenced in function &quot;int __cdecl
</span><br>
<span class="quotelev1">&gt;         MpCommProbe(struct MpComm_s *,int,int,struct MpStatus_s *)&quot;
</span><br>
<span class="quotelev1">&gt;         (?MpCommProbe@@YAHPAUMpComm_s@@HHPAUMpStatus_s@@@Z)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved
</span><br>
<span class="quotelev1">&gt;         external symbol _MPI_Barrier referenced in function &quot;int
</span><br>
<span class="quotelev1">&gt;         __cdecl MpCommBarrier(struct MpComm_s *)&quot;
</span><br>
<span class="quotelev1">&gt;         (?MpCommBarrier@@YAHPAUMpComm_s@@@Z)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved
</span><br>
<span class="quotelev1">&gt;         external symbol _MPI_Reduce referenced in function &quot;int
</span><br>
<span class="quotelev1">&gt;         __cdecl MpCommReduce(struct MpComm_s *,void const *,void
</span><br>
<span class="quotelev1">&gt;         *,int,enum Dtype_e,enum MpCommOp_e,int)&quot;
</span><br>
<span class="quotelev1">&gt;         (?MpCommReduce@@YAHPAUMpComm_s@@PBXPAXHW4Dtype_e@@W4MpCommOp_e@@H_at_Z)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved
</span><br>
<span class="quotelev1">&gt;         external symbol _MPI_Allreduce referenced in function &quot;int
</span><br>
<span class="quotelev1">&gt;         __cdecl MpCommAllreduce(struct MpComm_s *,void const *,void
</span><br>
<span class="quotelev1">&gt;         *,int,enum Dtype_e,enum MpCommOp_e)&quot;
</span><br>
<span class="quotelev1">&gt;         (?MpCommAllreduce@@YAHPAUMpComm_s@@PBXPAXHW4Dtype_e@@W4MpCommOp_e@@@Z)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved
</span><br>
<span class="quotelev1">&gt;         external symbol _MPI_Waitall referenced in function &quot;int
</span><br>
<span class="quotelev1">&gt;         __cdecl MpCommWaitall(struct MpRequest_s *,struct MpStatus_s *
</span><br>
<span class="quotelev1">&gt;         const)&quot; (?MpCommWaitall@@YAHPAUMpRequest_s@@QAUMpStatus_s@@@Z)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved
</span><br>
<span class="quotelev1">&gt;         external symbol _ompi_mpi_byte
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved
</span><br>
<span class="quotelev1">&gt;         external symbol _ompi_mpi_double
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved
</span><br>
<span class="quotelev1">&gt;         external symbol _ompi_mpi_float
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved
</span><br>
<span class="quotelev1">&gt;         external symbol _ompi_mpi_long
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved
</span><br>
<span class="quotelev1">&gt;         external symbol _ompi_mpi_int
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         como_mplib.lib(mpenv.obj) : error LNK2019: unresolved external
</span><br>
<span class="quotelev1">&gt;         symbol _MPI_Errhandler_set referenced in function &quot;int __cdecl
</span><br>
<span class="quotelev1">&gt;         MpEnvConstr(int *,char * * * const)&quot;
</span><br>
<span class="quotelev1">&gt;         (?MpEnvConstr@@YAHPAHQAPAPAD_at_Z)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         como_mplib.lib(mpenv.obj) : error LNK2001: unresolved external
</span><br>
<span class="quotelev1">&gt;         symbol _ompi_mpi_errors_return
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         como_mplib.lib(mpenv.obj) : error LNK2019: unresolved external
</span><br>
<span class="quotelev1">&gt;         symbol _MPI_Init referenced in function &quot;int __cdecl
</span><br>
<span class="quotelev1">&gt;         MpEnvConstr(int *,char * * * const)&quot;
</span><br>
<span class="quotelev1">&gt;         (?MpEnvConstr@@YAHPAHQAPAPAD_at_Z)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         como_mplib.lib(mpenv.obj) : error LNK2019: unresolved external
</span><br>
<span class="quotelev1">&gt;         symbol _MPI_Finalize referenced in function &quot;void __cdecl
</span><br>
<span class="quotelev1">&gt;         MpEnvFree(void)&quot; (?MpEnvFree@@YAXXZ)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         What am I missing?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Thanks in advance for any assistance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Alan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         *This message is intended only for the individual or entity to
</span><br>
<span class="quotelev1">&gt;         which it is addressed and contains information that is
</span><br>
<span class="quotelev1">&gt;         proprietary to The Babcock &amp; Wilcox Company and/or its
</span><br>
<span class="quotelev1">&gt;         affiliates, or may be otherwise confidential. If the reader of
</span><br>
<span class="quotelev1">&gt;         this message is not the intended recipient, or the employee
</span><br>
<span class="quotelev1">&gt;         agent responsible for delivering the message to the intended
</span><br>
<span class="quotelev1">&gt;         recipient, you are hereby notified that any dissemination,
</span><br>
<span class="quotelev1">&gt;         distribution or copying of this communication is strictly
</span><br>
<span class="quotelev1">&gt;         prohibited. If you have received this communication in error,
</span><br>
<span class="quotelev1">&gt;         please notify the sender immediately by return e-mail and
</span><br>
<span class="quotelev1">&gt;         delete this message from your computer. Thank you. *
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         _______________________________________________
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         users mailing list
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         users_at_[hidden]  &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden]  &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Shiqing Fan
</span><br>
<span class="quotelev1">&gt; High Performance Computing Center Stuttgart (HLRS)
</span><br>
<span class="quotelev1">&gt; Tel: ++49(0)711-685-87234      Nobelstrasse 19
</span><br>
<span class="quotelev1">&gt; Fax: ++49(0)711-685-65832      70569 Stuttgart
</span><br>
<span class="quotelev1">&gt; <a href="http://www.hlrs.de/organization/people/shiqing-fan/">http://www.hlrs.de/organization/people/shiqing-fan/</a>
</span><br>
<span class="quotelev1">&gt; email:fan_at_[hidden]  &lt;mailto:fan_at_[hidden]&gt;
</span><br>
<p><p><pre>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19852/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19853.php">Sayre, Alan N: "Re: [OMPI users] compilation on windows 7 64-bit"</a>
<li><strong>Previous message:</strong> <a href="19851.php">Sayre, Alan N: "Re: [OMPI users] compilation on windows 7 64-bit"</a>
<li><strong>In reply to:</strong> <a href="19851.php">Sayre, Alan N: "Re: [OMPI users] compilation on windows 7 64-bit"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19853.php">Sayre, Alan N: "Re: [OMPI users] compilation on windows 7 64-bit"</a>
<li><strong>Reply:</strong> <a href="19853.php">Sayre, Alan N: "Re: [OMPI users] compilation on windows 7 64-bit"</a>
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
