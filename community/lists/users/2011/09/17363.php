<?
$subject_val = "Re: [OMPI users] EXTERNAL: Re: How could OpenMPI (or MVAPICH) affect floating-point results?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 20 12:52:34 2011" -->
<!-- isoreceived="20110920165234" -->
<!-- sent="Tue, 20 Sep 2011 10:49:54 -0600" -->
<!-- isosent="20110920164954" -->
<!-- name="Blosch, Edwin L" -->
<!-- email="edwin.l.blosch_at_[hidden]" -->
<!-- subject="Re: [OMPI users] EXTERNAL: Re: How could OpenMPI (or MVAPICH) affect floating-point results?" -->
<!-- id="E9F276A0010AF44ABD2C03ED2EDAE7DB275FB9DB2B_at_HDXMSPB.us.lmco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4E78AC38.5090706_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] EXTERNAL: Re: How could OpenMPI (or MVAPICH) affect floating-point results?<br>
<strong>From:</strong> Blosch, Edwin L (<em>edwin.l.blosch_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-20 12:49:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17364.php">Blosch, Edwin L: "[OMPI users] Trouble compiling 1.4.3 with PGI 10.9 compilers"</a>
<li><strong>Previous message:</strong> <a href="17362.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: How could OpenMPI (or MVAPICH) affect floating-point results?"</a>
<li><strong>In reply to:</strong> <a href="17358.php">Eugene Loh: "Re: [OMPI users] EXTERNAL: Re: How could OpenMPI (or MVAPICH) affect floating-point results?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17360.php">Reuti: "Re: [OMPI users] EXTERNAL: Re: How could OpenMPI (or MVAPICH) affect	floating-point results?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here is a diff -y output of the compilation of one of the program's files.  The one on the left is OpenMPI mpif90, the one on the right is MVAPICH mpif90.
<br>
<p>Does that suggest perhaps I should try adding -fPIC to the OpenMPI-linked compilation?
<br>
<p><p>/appserv/intel/Compiler/11.1/072/bin/intel64/fortcom                                            /appserv/intel/Compiler/11.1/072/bin/intel64/fortcom
<br>
-D__INTEL_COMPILER=1110                                                                 -D__INTEL_COMPILER=1110
<br>
-D_MT                                                                                   -D_MT
<br>
-D__ELF__                                                                               -D__ELF__
<br>
-D__INTEL_COMPILER_BUILD_DATE=20100414                                                         -D__INTEL_COMPILER_BUILD_DATE=20100414
<br>
<span class="quotelev1">                                                                                     &gt;   -D__PIC__
</span><br>
<span class="quotelev1">                                                                                     &gt;   -D__pic__
</span><br>
-D__unix__                                                                              -D__unix__
<br>
-D__unix                                                                                -D__unix
<br>
-D__linux__                                                                             -D__linux__
<br>
-D__linux                                                                               -D__linux
<br>
-D__gnu_linux__                                                                         -D__gnu_linux__
<br>
-Dunix                                                                                         -Dunix
<br>
-Dlinux                                                                                 -Dlinux
<br>
-D__x86_64                                                                              -D__x86_64
<br>
-D__x86_64__                                                                            -D__x86_64__
<br>
-mGLOB_pack_sort_init_list                                                              -mGLOB_pack_sort_init_list
<br>
-I../../../code/src/main                                                                -I../../../code/src/main
<br>
-I.                                                                                     -I.
<br>
-I.                                                                                     -I.
<br>
-I/usr/mpi/intel/openmpi-1.4.3/include                                                     |   -I/usr/mpi/intel/mvapich-1.2.0/include
<br>
&nbsp;&nbsp;&lt;snip&gt;                                                                             |   &lt;snip&gt;
<br>
-I/usr/mpi/intel/openmpi-1.4.3/include                                                     |   -I/usr/mpi/intel/mvapich-1.2.0/include/f90base
<br>
-I/usr/mpi/intel/openmpi-1.4.3/lib64                                                       &lt;
<br>
-I/appserv/intel/Compiler/11.1/072/include/intel64                                             -I/appserv/intel/Compiler/11.1/072/include/intel64
<br>
-I/appserv/intel/Compiler/11.1/072/include/intel64                                             -I/appserv/intel/Compiler/11.1/072/include/intel64
<br>
-I/appserv/intel/Compiler/11.1/072/include                                                     -I/appserv/intel/Compiler/11.1/072/include
<br>
-I/usr/local/include                                                                           -I/usr/local/include
<br>
-I/usr/include                                                                                 -I/usr/include
<br>
-I/usr/lib64/gcc/x86_64-suse-linux/4.3/include                                                 -I/usr/lib64/gcc/x86_64-suse-linux/4.3/include
<br>
&quot;-align all&quot;                                                                            &quot;-align all&quot;
<br>
&quot;-align records&quot;                                                                        &quot;-align records&quot;
<br>
<span class="quotelev1">                                                                                     &gt;   -D__INTEL_COMPILER
</span><br>
-D_GNU_SOURCE                                                                                  -D_GNU_SOURCE
<br>
-fpconstant                                                                             -fpconstant
<br>
-O2                                                                                     -O2
<br>
&quot;-reentrancy threaded&quot;                                                                     &lt;
<br>
-traceback                                                                              -traceback
<br>
-mP1OPT_version=11.1-intel64                                                                   -mP1OPT_version=11.1-intel64
<br>
-mGLOB_diag_file=main.diag                                                              -mGLOB_diag_file=main.diag
<br>
-mGLOB_source_language=GLOB_SOURCE_LANGUAGE_F90                                                -mGLOB_source_language=GLOB_SOURCE_LANGUAGE_F90
<br>
-mGLOB_tune_for_fort                                                                           -mGLOB_tune_for_fort
<br>
-mGLOB_use_fort_dope_vector                                                                    -mGLOB_use_fort_dope_vector
<br>
-mP2OPT_static_promotion                                                                -mP2OPT_static_promotion
<br>
-mP1OPT_print_version=FALSE                                                                    -mP1OPT_print_version=FALSE
<br>
-mP3OPT_use_mspp_call_convention                                                        -mP3OPT_use_mspp_call_convention
<br>
-mCG_use_gas_got_workaround=F                                                                  -mCG_use_gas_got_workaround=F
<br>
-mP2OPT_align_option_used=TRUE                                                                 -mP2OPT_align_option_used=TRUE
<br>
&quot;-mGLOB_options_string=-I.  -I/usr/mpi/intel/openmpi-1.4.3/include &lt;snip&gt;                  |   &quot;-mGLOB_options_string=-I.  -I/usr/mpi/intel/mvapich-1.2.0/include &lt;snip&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-I/usr/mpi/intel/openmpi-1.4.3/include -I/usr/mpi/intel/openmpi-1.4.3/lib64                 |         -I/usr/mpi/intel/mvapich-1.2.0/include/f90base
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-D_GNU_SOURCE                                                                       |         -fPIC -fPIC -L/usr/lib64 -D__INTEL_COMPILER -D_GNU_SOURCE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-v -traceback -align -pad -xHost -falign-functions -fpconstant -O2 -c -pthread&quot;            |         -v -traceback -align -pad -xHost -falign-functions -fpconstant -O2 -c&quot;
<br>
<span class="quotelev1">                                                                                     &gt;   -mGLOB_position_independent_code
</span><br>
<span class="quotelev1">                                                                                     &gt;   -mGLOB_preemption_model=3
</span><br>
-mGLOB_cxx_limited_range=FALSE                                                                 -mGLOB_cxx_limited_range=FALSE
<br>
-mGLOB_traceback                                                                        -mGLOB_traceback
<br>
-mGLOB_as_output_backup_file_name=/tmp/ifortnQ90gcas_.s                                    |   -mGLOB_as_output_backup_file_name=/tmp/ifortPHVEMsas_.s
<br>
-mIPOPT_activate                                                                        -mIPOPT_activate
<br>
-mIPOPT_lite                                                                            -mIPOPT_lite
<br>
-mGLOB_machine_model=GLOB_MACHINE_MODEL_EFI2                                                   -mGLOB_machine_model=GLOB_MACHINE_MODEL_EFI2
<br>
-mGLOB_use_base_pointer                                                                 -mGLOB_use_base_pointer
<br>
-mGLOB_extended_instructions=0x400                                                             -mGLOB_extended_instructions=0x400
<br>
-mGLOB_advanced_optim=TRUE                                                              -mGLOB_advanced_optim=TRUE
<br>
-mP2OPT_pad_local                                                                       -mP2OPT_pad_local
<br>
-mP2OPT_subs_out_of_bound=FALSE                                                         -mP2OPT_subs_out_of_bound=FALSE
<br>
-mGLOB_ansi_alias                                                                       -mGLOB_ansi_alias
<br>
-mIPOPT_args_in_regs=0                                                                         -mIPOPT_args_in_regs=0
<br>
-mPGOPTI_value_profile_use=T                                                                   -mPGOPTI_value_profile_use=T
<br>
-mCG_function_alignment=16                                                              -mCG_function_alignment=16
<br>
-mGLOB_opt_level=2                                                                      -mGLOB_opt_level=2
<br>
-mP2OPT_hlo_level=2                                                                     -mP2OPT_hlo_level=2
<br>
-mP2OPT_hlo                                                                             -mP2OPT_hlo
<br>
-mIPOPT_obj_output_file_name=main.o                                                            -mIPOPT_obj_output_file_name=main.o
<br>
-mGLOB_linker_version=2.20.0.20100122-0.7.9                                                    -mGLOB_linker_version=2.20.0.20100122-0.7.9
<br>
-mP3OPT_asm_target=P3OPT_ASM_TARGET_GAS                                                 -mP3OPT_asm_target=P3OPT_ASM_TARGET_GAS
<br>
-mGLOB_obj_output_file=main.o                                                                  -mGLOB_obj_output_file=main.o
<br>
-mGLOB_source_dialect=GLOB_SOURCE_DIALECT_FORTRAN                                              -mGLOB_source_dialect=GLOB_SOURCE_DIALECT_FORTRAN
<br>
-mP1OPT_source_file_name=../../../code/src/main/main.f90                                       -mP1OPT_source_file_name=../../../code/src/main/main.f90
<br>
../../../code/src/main/main.f90                                                         ../../../code/src/main/main.f90
<br>
<p><p><p><p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Eugene Loh
<br>
Sent: Tuesday, September 20, 2011 10:08 AM
<br>
To: users_at_[hidden]
<br>
Subject: Re: [OMPI users] EXTERNAL: Re: How could OpenMPI (or MVAPICH) affect floating-point results?
<br>
<p><p><p>I've not been following closely.  How do you know you're using the
<br>
<p>identical compilation flags?  Are you saying you specify the same flags
<br>
<p>to &quot;mpicc&quot; (or whatever) or are you confirming that the back-end
<br>
<p>compiler is seeing the same flags?  The MPI compiler wrapper (mpicc, et
<br>
<p>al.) can add flags.  E.g., as I remember it, &quot;mpicc&quot; with no flags means
<br>
<p>no optimization with OMPI but with optimization for MVAPICH.
<br>
<p><p><p>On 9/20/2011 7:50 AM, Blosch, Edwin L wrote:
<br>
<p><span class="quotelev1">&gt; - It was exact same compiler, with identical compilation flags.
</span><br>
<p>_______________________________________________
<br>
<p>users mailing list
<br>
<p>users_at_[hidden]
<br>
<p><a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17363/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17364.php">Blosch, Edwin L: "[OMPI users] Trouble compiling 1.4.3 with PGI 10.9 compilers"</a>
<li><strong>Previous message:</strong> <a href="17362.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: How could OpenMPI (or MVAPICH) affect floating-point results?"</a>
<li><strong>In reply to:</strong> <a href="17358.php">Eugene Loh: "Re: [OMPI users] EXTERNAL: Re: How could OpenMPI (or MVAPICH) affect floating-point results?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17360.php">Reuti: "Re: [OMPI users] EXTERNAL: Re: How could OpenMPI (or MVAPICH) affect	floating-point results?"</a>
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
