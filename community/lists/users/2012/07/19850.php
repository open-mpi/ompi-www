<?
$subject_val = "Re: [OMPI users] compilation on windows 7 64-bit";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 27 07:50:47 2012" -->
<!-- isoreceived="20120727115047" -->
<!-- sent="Fri, 27 Jul 2012 13:52:15 +0200" -->
<!-- isosent="20120727115215" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] compilation on windows 7 64-bit" -->
<!-- id="501280EF.8000505_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5011C3B1.6000709_at_khubla.com" -->
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
<strong>Date:</strong> 2012-07-27 07:52:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19851.php">Sayre, Alan N: "Re: [OMPI users] compilation on windows 7 64-bit"</a>
<li><strong>Previous message:</strong> <a href="19849.php">Reuti: "Re: [OMPI users] restricting a job to a set of hosts"</a>
<li><strong>In reply to:</strong> <a href="19837.php">Damien: "Re: [OMPI users] compilation on windows 7 64-bit"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19851.php">Sayre, Alan N: "Re: [OMPI users] compilation on windows 7 64-bit"</a>
<li><strong>Reply:</strong> <a href="19851.php">Sayre, Alan N: "Re: [OMPI users] compilation on windows 7 64-bit"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FYI. I've just made an update for this issue in trunk. There will be no 
<br>
need to define this flags in the next releases.
<br>
<p><p>Shiqing
<br>
<p>On 2012-07-27 12:24 AM, Damien wrote:
<br>
<span class="quotelev1">&gt; Do you have
</span><br>
<span class="quotelev1">&gt; OMPI_IMPORTS, OPAL_IMPORTS and ORTE_IMPORTS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; defined in your preprocessor flags?  You need those.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Damien
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 26/07/2012 3:56 PM, Sayre, Alan N wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm trying to replace the usage of platform mpi with open mpi. I am 
</span><br>
<span class="quotelev2">&gt;&gt; trying to compile on Windows 7 64 bit using Visual Studio 2010. I 
</span><br>
<span class="quotelev2">&gt;&gt; have added the paths to the openmpi include and library directories 
</span><br>
<span class="quotelev2">&gt;&gt; and added the libmpid.lib and libmpi_cxxd.lib to the linker input. 
</span><br>
<span class="quotelev2">&gt;&gt; The application compiles (find the mpi headers). When it tries to 
</span><br>
<span class="quotelev2">&gt;&gt; link I get the following output:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external 
</span><br>
<span class="quotelev2">&gt;&gt; symbol _MPI_Comm_remote_size referenced in function &quot;struct MpComm_s 
</span><br>
<span class="quotelev2">&gt;&gt; * __cdecl MpCommSpawn(char const *,char const * * const,int,enum 
</span><br>
<span class="quotelev2">&gt;&gt; Bool_e)&quot; (?MpCommSpawn@@YAPAUMpComm_s@@PBDQAPBDHW4Bool_e@@@Z)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external 
</span><br>
<span class="quotelev2">&gt;&gt; symbol _MPI_Comm_spawn referenced in function &quot;struct MpComm_s * 
</span><br>
<span class="quotelev2">&gt;&gt; __cdecl MpCommSpawn(char const *,char const * * const,int,enum 
</span><br>
<span class="quotelev2">&gt;&gt; Bool_e)&quot; (?MpCommSpawn@@YAPAUMpComm_s@@PBDQAPBDHW4Bool_e@@@Z)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved external 
</span><br>
<span class="quotelev2">&gt;&gt; symbol _ompi_mpi_info_null
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved external 
</span><br>
<span class="quotelev2">&gt;&gt; symbol _ompi_mpi_comm_self
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved external 
</span><br>
<span class="quotelev2">&gt;&gt; symbol _ompi_mpi_comm_null
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved external 
</span><br>
<span class="quotelev2">&gt;&gt; symbol _ompi_mpi_op_sum
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved external 
</span><br>
<span class="quotelev2">&gt;&gt; symbol _ompi_mpi_op_min
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved external 
</span><br>
<span class="quotelev2">&gt;&gt; symbol _ompi_mpi_op_max
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external 
</span><br>
<span class="quotelev2">&gt;&gt; symbol _MPI_Intercomm_create referenced in function &quot;int __cdecl 
</span><br>
<span class="quotelev2">&gt;&gt; MpCommCreateCommunicators(struct MpComm_s * *,struct MpComm_s * *)&quot; 
</span><br>
<span class="quotelev2">&gt;&gt; (?MpCommCreateCommunicators@@YAHPAPAUMpComm_s@@0_at_Z)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external 
</span><br>
<span class="quotelev2">&gt;&gt; symbol _MPI_Comm_split referenced in function &quot;int __cdecl 
</span><br>
<span class="quotelev2">&gt;&gt; MpCommCreateCommunicators(struct MpComm_s * *,struct MpComm_s * *)&quot; 
</span><br>
<span class="quotelev2">&gt;&gt; (?MpCommCreateCommunicators@@YAHPAPAUMpComm_s@@0_at_Z)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external 
</span><br>
<span class="quotelev2">&gt;&gt; symbol _MPI_Comm_rank referenced in function &quot;int __cdecl 
</span><br>
<span class="quotelev2">&gt;&gt; MpCommCreateCommunicators(struct MpComm_s * *,struct MpComm_s * *)&quot; 
</span><br>
<span class="quotelev2">&gt;&gt; (?MpCommCreateCommunicators@@YAHPAPAUMpComm_s@@0_at_Z)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; como_mplib.lib(mpenv.obj) : error LNK2001: unresolved external symbol 
</span><br>
<span class="quotelev2">&gt;&gt; _MPI_Comm_rank
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external 
</span><br>
<span class="quotelev2">&gt;&gt; symbol _MPI_Comm_size referenced in function &quot;int __cdecl 
</span><br>
<span class="quotelev2">&gt;&gt; MpCommCreateCommunicators(struct MpComm_s * *,struct MpComm_s * *)&quot; 
</span><br>
<span class="quotelev2">&gt;&gt; (?MpCommCreateCommunicators@@YAHPAPAUMpComm_s@@0_at_Z)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; como_mplib.lib(mpenv.obj) : error LNK2001: unresolved external symbol 
</span><br>
<span class="quotelev2">&gt;&gt; _MPI_Comm_size
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved external 
</span><br>
<span class="quotelev2">&gt;&gt; symbol _ompi_mpi_comm_world
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; como_mplib.lib(mpenv.obj) : error LNK2001: unresolved external symbol 
</span><br>
<span class="quotelev2">&gt;&gt; _ompi_mpi_comm_world
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external 
</span><br>
<span class="quotelev2">&gt;&gt; symbol _MPI_Comm_get_parent referenced in function &quot;struct MpComm_s * 
</span><br>
<span class="quotelev2">&gt;&gt; __cdecl MpCommNewChild(void)&quot; (?MpCommNewChild@@YAPAUMpComm_s@@XZ)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external 
</span><br>
<span class="quotelev2">&gt;&gt; symbol _MPI_Comm_free referenced in function &quot;void __cdecl 
</span><br>
<span class="quotelev2">&gt;&gt; MpCommFree(struct MpComm_s *)&quot; (?MpCommFree@@YAXPAUMpComm_s@@@Z)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external 
</span><br>
<span class="quotelev2">&gt;&gt; symbol _MPI_Send referenced in function &quot;int __cdecl 
</span><br>
<span class="quotelev2">&gt;&gt; MpCommSend(struct MpComm_s *,void const *,int,enum Dtype_e,int,int)&quot; 
</span><br>
<span class="quotelev2">&gt;&gt; (?MpCommSend@@YAHPAUMpComm_s@@PBXHW4Dtype_e@@HH_at_Z)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external 
</span><br>
<span class="quotelev2">&gt;&gt; symbol _MPI_Isend referenced in function &quot;int __cdecl 
</span><br>
<span class="quotelev2">&gt;&gt; MpCommISend(struct MpComm_s *,void const *,int,enum 
</span><br>
<span class="quotelev2">&gt;&gt; Dtype_e,int,int,struct MpRequest_s *)&quot; 
</span><br>
<span class="quotelev2">&gt;&gt; (?MpCommISend@@YAHPAUMpComm_s@@PBXHW4Dtype_e@@HHPAUMpRequest_s@@@Z)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external 
</span><br>
<span class="quotelev2">&gt;&gt; symbol _MPI_Get_count referenced in function &quot;int __cdecl 
</span><br>
<span class="quotelev2">&gt;&gt; MpCommRecv(struct MpComm_s *,void *,int,enum Dtype_e,int,int,struct 
</span><br>
<span class="quotelev2">&gt;&gt; MpStatus_s *)&quot; 
</span><br>
<span class="quotelev2">&gt;&gt; (?MpCommRecv@@YAHPAUMpComm_s@@PAXHW4Dtype_e@@HHPAUMpStatus_s@@@Z)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external 
</span><br>
<span class="quotelev2">&gt;&gt; symbol _MPI_Recv referenced in function &quot;int __cdecl 
</span><br>
<span class="quotelev2">&gt;&gt; MpCommRecv(struct MpComm_s *,void *,int,enum Dtype_e,int,int,struct 
</span><br>
<span class="quotelev2">&gt;&gt; MpStatus_s *)&quot; 
</span><br>
<span class="quotelev2">&gt;&gt; (?MpCommRecv@@YAHPAUMpComm_s@@PAXHW4Dtype_e@@HHPAUMpStatus_s@@@Z)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external 
</span><br>
<span class="quotelev2">&gt;&gt; symbol _MPI_Irecv referenced in function &quot;int __cdecl 
</span><br>
<span class="quotelev2">&gt;&gt; MpCommIRecv(struct MpComm_s *,void *,int,enum Dtype_e,int,int,struct 
</span><br>
<span class="quotelev2">&gt;&gt; MpRequest_s *)&quot; 
</span><br>
<span class="quotelev2">&gt;&gt; (?MpCommIRecv@@YAHPAUMpComm_s@@PAXHW4Dtype_e@@HHPAUMpRequest_s@@@Z)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved external 
</span><br>
<span class="quotelev2">&gt;&gt; symbol _ompi_mpi_char
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external 
</span><br>
<span class="quotelev2">&gt;&gt; symbol _MPI_Probe referenced in function &quot;int __cdecl 
</span><br>
<span class="quotelev2">&gt;&gt; MpCommProbe(struct MpComm_s *,int,int,struct MpStatus_s *)&quot; 
</span><br>
<span class="quotelev2">&gt;&gt; (?MpCommProbe@@YAHPAUMpComm_s@@HHPAUMpStatus_s@@@Z)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external 
</span><br>
<span class="quotelev2">&gt;&gt; symbol _MPI_Barrier referenced in function &quot;int __cdecl 
</span><br>
<span class="quotelev2">&gt;&gt; MpCommBarrier(struct MpComm_s *)&quot; (?MpCommBarrier@@YAHPAUMpComm_s@@@Z)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external 
</span><br>
<span class="quotelev2">&gt;&gt; symbol _MPI_Reduce referenced in function &quot;int __cdecl 
</span><br>
<span class="quotelev2">&gt;&gt; MpCommReduce(struct MpComm_s *,void const *,void *,int,enum 
</span><br>
<span class="quotelev2">&gt;&gt; Dtype_e,enum MpCommOp_e,int)&quot; 
</span><br>
<span class="quotelev2">&gt;&gt; (?MpCommReduce@@YAHPAUMpComm_s@@PBXPAXHW4Dtype_e@@W4MpCommOp_e@@H_at_Z)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external 
</span><br>
<span class="quotelev2">&gt;&gt; symbol _MPI_Allreduce referenced in function &quot;int __cdecl 
</span><br>
<span class="quotelev2">&gt;&gt; MpCommAllreduce(struct MpComm_s *,void const *,void *,int,enum 
</span><br>
<span class="quotelev2">&gt;&gt; Dtype_e,enum MpCommOp_e)&quot; 
</span><br>
<span class="quotelev2">&gt;&gt; (?MpCommAllreduce@@YAHPAUMpComm_s@@PBXPAXHW4Dtype_e@@W4MpCommOp_e@@@Z)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external 
</span><br>
<span class="quotelev2">&gt;&gt; symbol _MPI_Waitall referenced in function &quot;int __cdecl 
</span><br>
<span class="quotelev2">&gt;&gt; MpCommWaitall(struct MpRequest_s *,struct MpStatus_s * const)&quot; 
</span><br>
<span class="quotelev2">&gt;&gt; (?MpCommWaitall@@YAHPAUMpRequest_s@@QAUMpStatus_s@@@Z)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved external 
</span><br>
<span class="quotelev2">&gt;&gt; symbol _ompi_mpi_byte
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved external 
</span><br>
<span class="quotelev2">&gt;&gt; symbol _ompi_mpi_double
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved external 
</span><br>
<span class="quotelev2">&gt;&gt; symbol _ompi_mpi_float
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved external 
</span><br>
<span class="quotelev2">&gt;&gt; symbol _ompi_mpi_long
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved external 
</span><br>
<span class="quotelev2">&gt;&gt; symbol _ompi_mpi_int
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; como_mplib.lib(mpenv.obj) : error LNK2019: unresolved external symbol 
</span><br>
<span class="quotelev2">&gt;&gt; _MPI_Errhandler_set referenced in function &quot;int __cdecl 
</span><br>
<span class="quotelev2">&gt;&gt; MpEnvConstr(int *,char * * * const)&quot; (?MpEnvConstr@@YAHPAHQAPAPAD_at_Z)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; como_mplib.lib(mpenv.obj) : error LNK2001: unresolved external symbol 
</span><br>
<span class="quotelev2">&gt;&gt; _ompi_mpi_errors_return
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; como_mplib.lib(mpenv.obj) : error LNK2019: unresolved external symbol 
</span><br>
<span class="quotelev2">&gt;&gt; _MPI_Init referenced in function &quot;int __cdecl MpEnvConstr(int *,char 
</span><br>
<span class="quotelev2">&gt;&gt; * * * const)&quot; (?MpEnvConstr@@YAHPAHQAPAPAD_at_Z)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; como_mplib.lib(mpenv.obj) : error LNK2019: unresolved external symbol 
</span><br>
<span class="quotelev2">&gt;&gt; _MPI_Finalize referenced in function &quot;void __cdecl MpEnvFree(void)&quot; 
</span><br>
<span class="quotelev2">&gt;&gt; (?MpEnvFree@@YAXXZ)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What am I missing?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance for any assistance.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Alan
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *This message is intended only for the individual or entity to which 
</span><br>
<span class="quotelev2">&gt;&gt; it is addressed and contains information that is proprietary to The 
</span><br>
<span class="quotelev2">&gt;&gt; Babcock &amp; Wilcox Company and/or its affiliates, or may be otherwise 
</span><br>
<span class="quotelev2">&gt;&gt; confidential. If the reader of this message is not the intended 
</span><br>
<span class="quotelev2">&gt;&gt; recipient, or the employee agent responsible for delivering the 
</span><br>
<span class="quotelev2">&gt;&gt; message to the intended recipient, you are hereby notified that any 
</span><br>
<span class="quotelev2">&gt;&gt; dissemination, distribution or copying of this communication is 
</span><br>
<span class="quotelev2">&gt;&gt; strictly prohibited. If you have received this communication in 
</span><br>
<span class="quotelev2">&gt;&gt; error, please notify the sender immediately by return e-mail and 
</span><br>
<span class="quotelev2">&gt;&gt; delete this message from your computer. Thank you. *
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19850/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19851.php">Sayre, Alan N: "Re: [OMPI users] compilation on windows 7 64-bit"</a>
<li><strong>Previous message:</strong> <a href="19849.php">Reuti: "Re: [OMPI users] restricting a job to a set of hosts"</a>
<li><strong>In reply to:</strong> <a href="19837.php">Damien: "Re: [OMPI users] compilation on windows 7 64-bit"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19851.php">Sayre, Alan N: "Re: [OMPI users] compilation on windows 7 64-bit"</a>
<li><strong>Reply:</strong> <a href="19851.php">Sayre, Alan N: "Re: [OMPI users] compilation on windows 7 64-bit"</a>
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
