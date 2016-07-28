<?
$subject_val = "Re: [OMPI users] compilation on windows 7 64-bit";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 26 18:25:01 2012" -->
<!-- isoreceived="20120726222501" -->
<!-- sent="Thu, 26 Jul 2012 16:24:49 -0600" -->
<!-- isosent="20120726222449" -->
<!-- name="Damien" -->
<!-- email="damien_at_[hidden]" -->
<!-- subject="Re: [OMPI users] compilation on windows 7 64-bit" -->
<!-- id="5011C3B1.6000709_at_khubla.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="A0B7B1B714BA7249B20BAA55F3F4CD61017295AB_at_barbpo5.bwes.net" -->
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
<strong>From:</strong> Damien (<em>damien_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-26 18:24:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19838.php">Ralph Castain: "Re: [OMPI users] OpenMPI and Rmpi/snow"</a>
<li><strong>Previous message:</strong> <a href="19836.php">Reuti: "Re: [OMPI users] restricting a job to a set of hosts"</a>
<li><strong>In reply to:</strong> <a href="19832.php">Sayre, Alan N: "[OMPI users] compilation on windows 7 64-bit"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19850.php">Shiqing Fan: "Re: [OMPI users] compilation on windows 7 64-bit"</a>
<li><strong>Reply:</strong> <a href="19850.php">Shiqing Fan: "Re: [OMPI users] compilation on windows 7 64-bit"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Do you have
<br>
<p>OMPI_IMPORTS, OPAL_IMPORTS and ORTE_IMPORTS
<br>
<p>defined in your preprocessor flags?  You need those.
<br>
<p>Damien
<br>
<p><p>On 26/07/2012 3:56 PM, Sayre, Alan N wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying to replace the usage of platform mpi with open mpi. I am 
</span><br>
<span class="quotelev1">&gt; trying to compile on Windows 7 64 bit using Visual Studio 2010. I have 
</span><br>
<span class="quotelev1">&gt; added the paths to the openmpi include and library directories and 
</span><br>
<span class="quotelev1">&gt; added the libmpid.lib and libmpi_cxxd.lib to the linker input. The 
</span><br>
<span class="quotelev1">&gt; application compiles (find the mpi headers). When it tries to link I 
</span><br>
<span class="quotelev1">&gt; get the following output:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; _MPI_Comm_remote_size referenced in function &quot;struct MpComm_s * 
</span><br>
<span class="quotelev1">&gt; __cdecl MpCommSpawn(char const *,char const * * const,int,enum 
</span><br>
<span class="quotelev1">&gt; Bool_e)&quot; (?MpCommSpawn@@YAPAUMpComm_s@@PBDQAPBDHW4Bool_e@@@Z)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; _MPI_Comm_spawn referenced in function &quot;struct MpComm_s * __cdecl 
</span><br>
<span class="quotelev1">&gt; MpCommSpawn(char const *,char const * * const,int,enum Bool_e)&quot; 
</span><br>
<span class="quotelev1">&gt; (?MpCommSpawn@@YAPAUMpComm_s@@PBDQAPBDHW4Bool_e@@@Z)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; _ompi_mpi_info_null
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; _ompi_mpi_comm_self
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; _ompi_mpi_comm_null
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; _ompi_mpi_op_sum
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; _ompi_mpi_op_min
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; _ompi_mpi_op_max
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; _MPI_Intercomm_create referenced in function &quot;int __cdecl 
</span><br>
<span class="quotelev1">&gt; MpCommCreateCommunicators(struct MpComm_s * *,struct MpComm_s * *)&quot; 
</span><br>
<span class="quotelev1">&gt; (?MpCommCreateCommunicators@@YAHPAPAUMpComm_s@@0_at_Z)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; _MPI_Comm_split referenced in function &quot;int __cdecl 
</span><br>
<span class="quotelev1">&gt; MpCommCreateCommunicators(struct MpComm_s * *,struct MpComm_s * *)&quot; 
</span><br>
<span class="quotelev1">&gt; (?MpCommCreateCommunicators@@YAHPAPAUMpComm_s@@0_at_Z)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; _MPI_Comm_rank referenced in function &quot;int __cdecl 
</span><br>
<span class="quotelev1">&gt; MpCommCreateCommunicators(struct MpComm_s * *,struct MpComm_s * *)&quot; 
</span><br>
<span class="quotelev1">&gt; (?MpCommCreateCommunicators@@YAHPAPAUMpComm_s@@0_at_Z)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; como_mplib.lib(mpenv.obj) : error LNK2001: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; _MPI_Comm_rank
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; _MPI_Comm_size referenced in function &quot;int __cdecl 
</span><br>
<span class="quotelev1">&gt; MpCommCreateCommunicators(struct MpComm_s * *,struct MpComm_s * *)&quot; 
</span><br>
<span class="quotelev1">&gt; (?MpCommCreateCommunicators@@YAHPAPAUMpComm_s@@0_at_Z)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; como_mplib.lib(mpenv.obj) : error LNK2001: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; _MPI_Comm_size
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; _ompi_mpi_comm_world
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; como_mplib.lib(mpenv.obj) : error LNK2001: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; _ompi_mpi_comm_world
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; _MPI_Comm_get_parent referenced in function &quot;struct MpComm_s * __cdecl 
</span><br>
<span class="quotelev1">&gt; MpCommNewChild(void)&quot; (?MpCommNewChild@@YAPAUMpComm_s@@XZ)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; _MPI_Comm_free referenced in function &quot;void __cdecl MpCommFree(struct 
</span><br>
<span class="quotelev1">&gt; MpComm_s *)&quot; (?MpCommFree@@YAXPAUMpComm_s@@@Z)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; _MPI_Send referenced in function &quot;int __cdecl MpCommSend(struct 
</span><br>
<span class="quotelev1">&gt; MpComm_s *,void const *,int,enum Dtype_e,int,int)&quot; 
</span><br>
<span class="quotelev1">&gt; (?MpCommSend@@YAHPAUMpComm_s@@PBXHW4Dtype_e@@HH_at_Z)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; _MPI_Isend referenced in function &quot;int __cdecl MpCommISend(struct 
</span><br>
<span class="quotelev1">&gt; MpComm_s *,void const *,int,enum Dtype_e,int,int,struct MpRequest_s 
</span><br>
<span class="quotelev1">&gt; *)&quot; (?MpCommISend@@YAHPAUMpComm_s@@PBXHW4Dtype_e@@HHPAUMpRequest_s@@@Z)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; _MPI_Get_count referenced in function &quot;int __cdecl MpCommRecv(struct 
</span><br>
<span class="quotelev1">&gt; MpComm_s *,void *,int,enum Dtype_e,int,int,struct MpStatus_s *)&quot; 
</span><br>
<span class="quotelev1">&gt; (?MpCommRecv@@YAHPAUMpComm_s@@PAXHW4Dtype_e@@HHPAUMpStatus_s@@@Z)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; _MPI_Recv referenced in function &quot;int __cdecl MpCommRecv(struct 
</span><br>
<span class="quotelev1">&gt; MpComm_s *,void *,int,enum Dtype_e,int,int,struct MpStatus_s *)&quot; 
</span><br>
<span class="quotelev1">&gt; (?MpCommRecv@@YAHPAUMpComm_s@@PAXHW4Dtype_e@@HHPAUMpStatus_s@@@Z)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; _MPI_Irecv referenced in function &quot;int __cdecl MpCommIRecv(struct 
</span><br>
<span class="quotelev1">&gt; MpComm_s *,void *,int,enum Dtype_e,int,int,struct MpRequest_s *)&quot; 
</span><br>
<span class="quotelev1">&gt; (?MpCommIRecv@@YAHPAUMpComm_s@@PAXHW4Dtype_e@@HHPAUMpRequest_s@@@Z)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; _ompi_mpi_char
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; _MPI_Probe referenced in function &quot;int __cdecl MpCommProbe(struct 
</span><br>
<span class="quotelev1">&gt; MpComm_s *,int,int,struct MpStatus_s *)&quot; 
</span><br>
<span class="quotelev1">&gt; (?MpCommProbe@@YAHPAUMpComm_s@@HHPAUMpStatus_s@@@Z)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; _MPI_Barrier referenced in function &quot;int __cdecl MpCommBarrier(struct 
</span><br>
<span class="quotelev1">&gt; MpComm_s *)&quot; (?MpCommBarrier@@YAHPAUMpComm_s@@@Z)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; _MPI_Reduce referenced in function &quot;int __cdecl MpCommReduce(struct 
</span><br>
<span class="quotelev1">&gt; MpComm_s *,void const *,void *,int,enum Dtype_e,enum MpCommOp_e,int)&quot; 
</span><br>
<span class="quotelev1">&gt; (?MpCommReduce@@YAHPAUMpComm_s@@PBXPAXHW4Dtype_e@@W4MpCommOp_e@@H_at_Z)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; como_mplib.lib(mpcomm.obj) : error LNK2019: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; _MPI_Allreduce referenced in function &quot;int __cdecl 
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
<span class="quotelev1">&gt; _MPI_Waitall referenced in function &quot;int __cdecl MpCommWaitall(struct 
</span><br>
<span class="quotelev1">&gt; MpRequest_s *,struct MpStatus_s * const)&quot; 
</span><br>
<span class="quotelev1">&gt; (?MpCommWaitall@@YAHPAUMpRequest_s@@QAUMpStatus_s@@@Z)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; _ompi_mpi_byte
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; _ompi_mpi_double
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; _ompi_mpi_float
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; _ompi_mpi_long
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; como_mplib.lib(mpcomm.obj) : error LNK2001: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; _ompi_mpi_int
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; como_mplib.lib(mpenv.obj) : error LNK2019: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; _MPI_Errhandler_set referenced in function &quot;int __cdecl 
</span><br>
<span class="quotelev1">&gt; MpEnvConstr(int *,char * * * const)&quot; (?MpEnvConstr@@YAHPAHQAPAPAD_at_Z)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; como_mplib.lib(mpenv.obj) : error LNK2001: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; _ompi_mpi_errors_return
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; como_mplib.lib(mpenv.obj) : error LNK2019: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; _MPI_Init referenced in function &quot;int __cdecl MpEnvConstr(int *,char * 
</span><br>
<span class="quotelev1">&gt; * * const)&quot; (?MpEnvConstr@@YAHPAHQAPAPAD_at_Z)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; como_mplib.lib(mpenv.obj) : error LNK2019: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; _MPI_Finalize referenced in function &quot;void __cdecl MpEnvFree(void)&quot; 
</span><br>
<span class="quotelev1">&gt; (?MpEnvFree@@YAXXZ)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What am I missing?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance for any assistance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Alan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *This message is intended only for the individual or entity to which 
</span><br>
<span class="quotelev1">&gt; it is addressed and contains information that is proprietary to The 
</span><br>
<span class="quotelev1">&gt; Babcock &amp; Wilcox Company and/or its affiliates, or may be otherwise 
</span><br>
<span class="quotelev1">&gt; confidential. If the reader of this message is not the intended 
</span><br>
<span class="quotelev1">&gt; recipient, or the employee agent responsible for delivering the 
</span><br>
<span class="quotelev1">&gt; message to the intended recipient, you are hereby notified that any 
</span><br>
<span class="quotelev1">&gt; dissemination, distribution or copying of this communication is 
</span><br>
<span class="quotelev1">&gt; strictly prohibited. If you have received this communication in error, 
</span><br>
<span class="quotelev1">&gt; please notify the sender immediately by return e-mail and delete this 
</span><br>
<span class="quotelev1">&gt; message from your computer. Thank you. *
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19837/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19838.php">Ralph Castain: "Re: [OMPI users] OpenMPI and Rmpi/snow"</a>
<li><strong>Previous message:</strong> <a href="19836.php">Reuti: "Re: [OMPI users] restricting a job to a set of hosts"</a>
<li><strong>In reply to:</strong> <a href="19832.php">Sayre, Alan N: "[OMPI users] compilation on windows 7 64-bit"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19850.php">Shiqing Fan: "Re: [OMPI users] compilation on windows 7 64-bit"</a>
<li><strong>Reply:</strong> <a href="19850.php">Shiqing Fan: "Re: [OMPI users] compilation on windows 7 64-bit"</a>
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
