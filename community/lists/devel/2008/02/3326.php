<?
$subject_val = "Re: [OMPI devel] Error Running Executable Linking C++, C, F77 and F90";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 29 15:29:53 2008" -->
<!-- isoreceived="20080229202953" -->
<!-- sent="Fri, 29 Feb 2008 15:29:11 -0500" -->
<!-- isosent="20080229202911" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Error Running Executable Linking C++, C, F77 and F90" -->
<!-- id="DE1B2961-4F5A-4B41-9292-AF28DD7BE4BB_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="47C32F93.8080204_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Error Running Executable Linking C++, C, F77 and F90<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-29 15:29:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3327.php">Ralph Castain: "[OMPI devel] [RFC] Default hostfile MCA param"</a>
<li><strong>Previous message:</strong> <a href="3325.php">Andreas Kn&#252;pfer: "Re: [OMPI devel] vt configuration issues"</a>
<li><strong>In reply to:</strong> <a href="3301.php">Si Hammond: "[OMPI devel] Error Running Executable Linking C++, C, F77 and F90"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW, this kind of error usually occurs when an invalid communicator  
<br>
value is passed to an MPI function.  OMPI just reports  
<br>
&quot;MPI_COMM_WORLD&quot; because it has no other communicator to report.
<br>
<p>You might want to set the MCA parameter mpi_abort_delay to a delay in  
<br>
seconds how long Open MPI will wait before killing the job when an  
<br>
error occurs (negative values mean to never abort; spin forever).   
<br>
This will allow you to attach a debugger to the application and poke  
<br>
around and see what value was passed for the communicator, what the  
<br>
state of the process was, etc.
<br>
<p><p><p>On Feb 25, 2008, at 4:13 PM, Si Hammond wrote:
<br>
<p><span class="quotelev1">&gt; Hi Guys,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have a very large executable written in C++, C, F77 and F90 (and we
</span><br>
<span class="quotelev1">&gt; use all of these compilers!). Our code compiles and links fine but  
</span><br>
<span class="quotelev1">&gt; when
</span><br>
<span class="quotelev1">&gt; we run it on our cluster (under PBSPro) we get the errors at the  
</span><br>
<span class="quotelev1">&gt; bottom
</span><br>
<span class="quotelev1">&gt; of the email.
</span><br>
<span class="quotelev1">&gt; I wondered if you guys could shed any light on this? Seems to be an  
</span><br>
<span class="quotelev1">&gt; odd
</span><br>
<span class="quotelev1">&gt; error than MPI_COMM_WORLD is an invalid communicator? Do you think  
</span><br>
<span class="quotelev1">&gt; its a
</span><br>
<span class="quotelev1">&gt; hardware fault or a compilation issue? For reference we're using  
</span><br>
<span class="quotelev1">&gt; OpenMPI
</span><br>
<span class="quotelev1">&gt; 1.2.5 with InfiniBand connected via a Voltaire switch. Processors are
</span><br>
<span class="quotelev1">&gt; Intel Dual Core. Compilers are GNU C (gcc), C++ (g++) and gfortran.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [node207:12109] *** An error occurred in MPI_Allreduce
</span><br>
<span class="quotelev1">&gt; [node109:11337] *** An error occurred in MPI_Allreduce
</span><br>
<span class="quotelev1">&gt; [node109:11337] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [node109:11337] *** MPI_ERR_COMM: invalid communicator
</span><br>
<span class="quotelev1">&gt; [node109:11337] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; [node117:11236] *** An error occurred in MPI_Allreduce
</span><br>
<span class="quotelev1">&gt; [node117:11236] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [node117:11236] *** MPI_ERR_COMM: invalid communicator
</span><br>
<span class="quotelev1">&gt; [node117:11236] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; [node113:11288] *** An error occurred in MPI_Allreduce
</span><br>
<span class="quotelev1">&gt; [node113:11288] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [node113:11288] *** MPI_ERR_COMM: invalid communicator
</span><br>
<span class="quotelev1">&gt; [node113:11288] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; [node111:11295] *** An error occurred in MPI_Allreduce
</span><br>
<span class="quotelev1">&gt; [node111:11295] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [node111:11295] *** MPI_ERR_COMM: invalid communicator
</span><br>
<span class="quotelev1">&gt; [node111:11295] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; [node110:11295] *** An error occurred in MPI_Allreduce
</span><br>
<span class="quotelev1">&gt; [node110:11295] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [node110:11295] *** MPI_ERR_COMM: invalid communicator
</span><br>
<span class="quotelev1">&gt; [node110:11295] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; [node115:11496] *** An error occurred in MPI_Allreduce
</span><br>
<span class="quotelev1">&gt; [node115:11496] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [node115:11496] *** MPI_ERR_COMM: invalid communicator
</span><br>
<span class="quotelev1">&gt; [node115:11496] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; [node118:11239] *** An error occurred in MPI_Allreduce
</span><br>
<span class="quotelev1">&gt; [node118:11239] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [node118:11239] *** MPI_ERR_COMM: invalid communicator
</span><br>
<span class="quotelev1">&gt; [node118:11239] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; [node116:11249] *** An error occurred in MPI_Allreduce
</span><br>
<span class="quotelev1">&gt; [node116:11249] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [node116:11249] *** MPI_ERR_COMM: invalid communicator
</span><br>
<span class="quotelev1">&gt; [node116:11249] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; [node119:11239] *** An error occurred in MPI_Allreduce
</span><br>
<span class="quotelev1">&gt; [node119:11239] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [node119:11239] *** MPI_ERR_COMM: invalid communicator
</span><br>
<span class="quotelev1">&gt; [node119:11239] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; [node207:12109] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [node207:12109] *** MPI_ERR_COMM: invalid communicator
</span><br>
<span class="quotelev1">&gt; [node207:12109] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; [node114:11261] *** An error occurred in MPI_Allreduce
</span><br>
<span class="quotelev1">&gt; [node114:11261] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [node114:11261] *** MPI_ERR_COMM: invalid communicator
</span><br>
<span class="quotelev1">&gt; [node114:11261] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; [node206:12030] *** An error occurred in MPI_Allreduce
</span><br>
<span class="quotelev1">&gt; [node206:12030] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [node206:12030] *** MPI_ERR_COMM: invalid communicator
</span><br>
<span class="quotelev1">&gt; [node206:12030] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; [node117:11237] *** An error occurred in MPI_Allreduce
</span><br>
<span class="quotelev1">&gt; [node113:11287] *** An error occurred in MPI_Allreduce
</span><br>
<span class="quotelev1">&gt; [node111:11293] *** An error occurred in MPI_Allreduce
</span><br>
<span class="quotelev1">&gt; [node110:11293] *** An error occurred in MPI_Allreduce
</span><br>
<span class="quotelev1">&gt; [node110:11293] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [node110:11293] *** MPI_ERR_COMM: invalid communicator
</span><br>
<span class="quotelev1">&gt; [node110:11293] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; [node115:11495] *** An error occurred in MPI_Allreduce
</span><br>
<span class="quotelev1">&gt; [node118:11237] *** An error occurred in MPI_Allreduce
</span><br>
<span class="quotelev1">&gt; [node118:11237] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [node118:11237] *** MPI_ERR_COMM: invalid communicator
</span><br>
<span class="quotelev1">&gt; [node118:11237] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; [node116:11247] *** An error occurred in MPI_Allreduce
</span><br>
<span class="quotelev1">&gt; [node116:11247] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [node116:11247] *** MPI_ERR_COMM: invalid communicator
</span><br>
<span class="quotelev1">&gt; [node116:11247] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; [node119:11238] *** An error occurred in MPI_Allreduce
</span><br>
<span class="quotelev1">&gt; [node114:11262] *** An error occurred in MPI_Allreduce
</span><br>
<span class="quotelev1">&gt; [node206:12029] *** An error occurred in MPI_Allreduce
</span><br>
<span class="quotelev1">&gt; [node206:12029] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [node206:12029] *** MPI_ERR_COMM: invalid communicator
</span><br>
<span class="quotelev1">&gt; [node206:12029] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; [node117:11238] *** An error occurred in MPI_Allreduce
</span><br>
<span class="quotelev1">&gt; [node113:11289] *** An error occurred in MPI_Allreduce
</span><br>
<span class="quotelev1">&gt; [node111:11294] *** An error occurred in MPI_Allreduce
</span><br>
<span class="quotelev1">&gt; [node110:11294] *** An error occurred in MPI_Allreduce
</span><br>
<span class="quotelev1">&gt; [node110:11294] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [node110:11294] *** MPI_ERR_COMM: invalid communicator
</span><br>
<span class="quotelev1">&gt; [node110:11294] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; [node115:11497] *** An error occurred in MPI_Allreduce
</span><br>
<span class="quotelev1">&gt; [node115:11497] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [node118:11238] *** An error occurred in MPI_Allreduce
</span><br>
<span class="quotelev1">&gt; [node118:11238] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [node118:11238] *** MPI_ERR_COMM: invalid communicator
</span><br>
<span class="quotelev1">&gt; [node118:11238] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; [node116:11248] *** An error occurred in MPI_Allreduce
</span><br>
<span class="quotelev1">&gt; [node116:11248] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [node116:11248] *** MPI_ERR_COMM: invalid communicator
</span><br>
<span class="quotelev1">&gt; [node116:11248] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; [node119:11240] *** An error occurred in MPI_Allreduce
</span><br>
<span class="quotelev1">&gt; [node114:11263] *** An error occurred in MPI_Allreduce
</span><br>
<span class="quotelev1">&gt; [node114:11263] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [node114:11263] *** MPI_ERR_COMM: invalid communicator
</span><br>
<span class="quotelev1">&gt; [node114:11263] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; [node206:12031] *** An error occurred in MPI_Allreduce
</span><br>
<span class="quotelev1">&gt; [node206:12031] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [node206:12031] *** MPI_ERR_COMM: invalid communicator
</span><br>
<span class="quotelev1">&gt; [node206:12031] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; [node117:11237] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [node117:11237] *** MPI_ERR_COMM: invalid communicator
</span><br>
<span class="quotelev1">&gt; [node117:11237] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; [node113:11287] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [node113:11287] *** MPI_ERR_COMM: invalid communicator
</span><br>
<span class="quotelev1">&gt; [node113:11287] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; [node111:11293] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [node111:11293] *** MPI_ERR_COMM: invalid communicator
</span><br>
<span class="quotelev1">&gt; [node111:11293] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; [node115:11495] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [node115:11495] *** MPI_ERR_COMM: invalid communicator
</span><br>
<span class="quotelev1">&gt; [node115:11495] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; [node119:11238] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [node119:11238] *** MPI_ERR_COMM: invalid communicator
</span><br>
<span class="quotelev1">&gt; [node119:11238] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; [node114:11262] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [node114:11262] *** MPI_ERR_COMM: invalid communicator
</span><br>
<span class="quotelev1">&gt; [node114:11262] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; [node117:11238] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [node117:11238] *** MPI_ERR_COMM: invalid communicator
</span><br>
<span class="quotelev1">&gt; [node117:11238] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; [node113:11289] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [node113:11289] *** MPI_ERR_COMM: invalid communicator
</span><br>
<span class="quotelev1">&gt; [node113:11289] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; [node111:11294] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [node111:11294] *** MPI_ERR_COMM: invalid communicator
</span><br>
<span class="quotelev1">&gt; [node111:11294] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; [node115:11497] *** MPI_ERR_COMM: invalid communicator
</span><br>
<span class="quotelev1">&gt; [node115:11497] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; [node119:11240] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [node119:11240] *** MPI_ERR_COMM: invalid communicator
</span><br>
<span class="quotelev1">&gt; [node119:11240] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; [node109:11335] [0,0,0] ORTE_ERROR_LOG: Timeout in file
</span><br>
<span class="quotelev1">&gt; base/pls_base_orted_cmds.c at line 275
</span><br>
<span class="quotelev1">&gt; [node109:11335] [0,0,0] ORTE_ERROR_LOG: Timeout in file  
</span><br>
<span class="quotelev1">&gt; pls_tm_module.c
</span><br>
<span class="quotelev1">&gt; at line 572
</span><br>
<span class="quotelev1">&gt; [node109:11335] [0,0,0] ORTE_ERROR_LOG: Timeout in file errmgr_hnp.c  
</span><br>
<span class="quotelev1">&gt; at
</span><br>
<span class="quotelev1">&gt; line 90
</span><br>
<span class="quotelev1">&gt; [node109:11335] [0,0,0] ORTE_ERROR_LOG: Timeout in file
</span><br>
<span class="quotelev1">&gt; base/pls_base_orted_cmds.c at line 188
</span><br>
<span class="quotelev1">&gt; [node109:11335] [0,0,0] ORTE_ERROR_LOG: Timeout in file  
</span><br>
<span class="quotelev1">&gt; pls_tm_module.c
</span><br>
<span class="quotelev1">&gt; at line 603
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun was unable to cleanly terminate the daemons for this job.
</span><br>
<span class="quotelev1">&gt; Returned value Timeout instead of ORTE_SUCCESS.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [node117:11235] OOB: Connection to HNP lost
</span><br>
<span class="quotelev1">&gt; [node113:11286] OOB: Connection to HNP lost
</span><br>
<span class="quotelev1">&gt; [node111:11292] OOB: Connection to HNP lost
</span><br>
<span class="quotelev1">&gt; [node115:11494] OOB: Connection to HNP lost
</span><br>
<span class="quotelev1">&gt; [node119:11237] OOB: Connection to HNP lost
</span><br>
<span class="quotelev1">&gt; [node116:11246] OOB: Connection to HNP lost
</span><br>
<span class="quotelev1">&gt; [node206:12028] OOB: Connection to HNP lost
</span><br>
<span class="quotelev1">&gt; [node114:11260] OOB: Connection to HNP lost
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OMPI Info Output
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI: 1.2.5
</span><br>
<span class="quotelev1">&gt;    Open MPI SVN revision: r16989
</span><br>
<span class="quotelev1">&gt;                 Open RTE: 1.2.5
</span><br>
<span class="quotelev1">&gt;    Open RTE SVN revision: r16989
</span><br>
<span class="quotelev1">&gt;                     OPAL: 1.2.5
</span><br>
<span class="quotelev1">&gt;        OPAL SVN revision: r16989
</span><br>
<span class="quotelev1">&gt;                   Prefix: /opt/ompi/1.2.5/gnu/64
</span><br>
<span class="quotelev1">&gt;  Configured architecture: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev1">&gt;            Configured by: root
</span><br>
<span class="quotelev1">&gt;            Configured on: Sun Jan 20 13:29:39 GMT 2008
</span><br>
<span class="quotelev1">&gt;           Configure host: mg1
</span><br>
<span class="quotelev1">&gt;                 Built by: root
</span><br>
<span class="quotelev1">&gt;                 Built on: Sun Jan 20 13:37:14 GMT 2008
</span><br>
<span class="quotelev1">&gt;               Built host: mg1
</span><br>
<span class="quotelev1">&gt;               C bindings: yes
</span><br>
<span class="quotelev1">&gt;             C++ bindings: yes
</span><br>
<span class="quotelev1">&gt;       Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev1">&gt;       Fortran90 bindings: yes
</span><br>
<span class="quotelev1">&gt;  Fortran90 bindings size: small
</span><br>
<span class="quotelev1">&gt;               C compiler: gcc
</span><br>
<span class="quotelev1">&gt;      C compiler absolute: /usr/bin/gcc
</span><br>
<span class="quotelev1">&gt;             C++ compiler: g++
</span><br>
<span class="quotelev1">&gt;    C++ compiler absolute: /usr/bin/g++
</span><br>
<span class="quotelev1">&gt;       Fortran77 compiler: gfortran
</span><br>
<span class="quotelev1">&gt;   Fortran77 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev1">&gt;       Fortran90 compiler: gfortran
</span><br>
<span class="quotelev1">&gt;   Fortran90 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev1">&gt;              C profiling: yes
</span><br>
<span class="quotelev1">&gt;            C++ profiling: yes
</span><br>
<span class="quotelev1">&gt;      Fortran77 profiling: yes
</span><br>
<span class="quotelev1">&gt;      Fortran90 profiling: yes
</span><br>
<span class="quotelev1">&gt;           C++ exceptions: no
</span><br>
<span class="quotelev1">&gt;           Thread support: posix (mpi: no, progress: no)
</span><br>
<span class="quotelev1">&gt;   Internal debug support: no
</span><br>
<span class="quotelev1">&gt;      MPI parameter check: runtime
</span><br>
<span class="quotelev1">&gt; Memory profiling support: no
</span><br>
<span class="quotelev1">&gt; Memory debugging support: no
</span><br>
<span class="quotelev1">&gt;          libltdl support: yes
</span><br>
<span class="quotelev1">&gt;    Heterogeneous support: yes
</span><br>
<span class="quotelev1">&gt;  mpirun default --prefix: no
</span><br>
<span class="quotelev1">&gt;            MCA backtrace: execinfo (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.5)
</span><br>
<span class="quotelev1">&gt;               MCA memory: ptmalloc2 (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.5)
</span><br>
<span class="quotelev1">&gt;            MCA paffinity: linux (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: first_use (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.5)
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: libnuma (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.5)
</span><br>
<span class="quotelev1">&gt;                MCA timer: linux (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;          MCA installdirs: env (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;          MCA installdirs: config (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.5)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: basic (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: self (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: sm (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: tuned (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                   MCA io: romio (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: rdma (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: sm (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: cm (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA bml: r2 (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;               MCA rcache: vma (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: openib (MCA v1.0, API v1.0.1, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: self (MCA v1.0, API v1.0.1, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: sm (MCA v1.0, API v1.0.1, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: tcp (MCA v1.0, API v1.0.1, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA mtl: psm (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                 MCA topo: unity (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA osc: pt2pt (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: hnp (MCA v1.0, API v1.3, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: orted (MCA v1.0, API v1.3, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: proxy (MCA v1.0, API v1.3, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: null (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: replica (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: proxy (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: svc (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: proxy (MCA v1.0, API v2.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: replica (MCA v1.0, API v2.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: dash_host (MCA v1.0, API v1.3, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: gridengine (MCA v1.0, API v1.3, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: localhost (MCA v1.0, API v1.3, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: slurm (MCA v1.0, API v1.3, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: tm (MCA v1.0, API v1.3, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: hostfile (MCA v1.0, API v1.3, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: proxy (MCA v1.0, API v1.3, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: resfile (MCA v1.0, API v1.3, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.5)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: round_robin (MCA v1.0, API v1.3, Component
</span><br>
<span class="quotelev1">&gt; v1.2.5)
</span><br>
<span class="quotelev1">&gt;                 MCA rmgr: proxy (MCA v1.0, API v2.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                 MCA rmgr: urm (MCA v1.0, API v2.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA rml: oob (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: gridengine (MCA v1.0, API v1.3, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: proxy (MCA v1.0, API v1.3, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: rsh (MCA v1.0, API v1.3, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: slurm (MCA v1.0, API v1.3, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: tm (MCA v1.0, API v1.3, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: env (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: pipe (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: seed (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: singleton (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: slurm (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Si Hammond
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Performance Prediction and Analysis Lab,
</span><br>
<span class="quotelev1">&gt; High Performance Systems Group,
</span><br>
<span class="quotelev1">&gt; University of Warwick, UK
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3327.php">Ralph Castain: "[OMPI devel] [RFC] Default hostfile MCA param"</a>
<li><strong>Previous message:</strong> <a href="3325.php">Andreas Kn&#252;pfer: "Re: [OMPI devel] vt configuration issues"</a>
<li><strong>In reply to:</strong> <a href="3301.php">Si Hammond: "[OMPI devel] Error Running Executable Linking C++, C, F77 and F90"</a>
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
