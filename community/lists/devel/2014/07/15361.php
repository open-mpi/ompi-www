<?
$subject_val = "Re: [OMPI devel] MPI_T SEGV on DSO";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 30 11:41:15 2014" -->
<!-- isoreceived="20140730154115" -->
<!-- sent="Thu, 31 Jul 2014 00:40:55 +0900" -->
<!-- isosent="20140730154055" -->
<!-- name="KAWASHIMA Takahiro" -->
<!-- email="rivis.kawashima_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_T SEGV on DSO" -->
<!-- id="20140731004055.d58b18fd334d1e40b14ca261_at_nifty.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20140730150450.GK43566_at_pn1246003.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI_T SEGV on DSO<br>
<strong>From:</strong> KAWASHIMA Takahiro (<em>rivis.kawashima_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-30 11:40:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15362.php">Nathan Hjelm: "Re: [OMPI devel] MPI_T SEGV on DSO"</a>
<li><strong>Previous message:</strong> <a href="15360.php">Rolf vandeVaart: "Re: [OMPI devel] OMPI devel] trunk compilation errors in jenkins"</a>
<li><strong>In reply to:</strong> <a href="15358.php">Nathan Hjelm: "Re: [OMPI devel] MPI_T SEGV on DSO"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15362.php">Nathan Hjelm: "Re: [OMPI devel] MPI_T SEGV on DSO"</a>
<li><strong>Reply:</strong> <a href="15362.php">Nathan Hjelm: "Re: [OMPI devel] MPI_T SEGV on DSO"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nathan,
<br>
<p>The diffrences seems to be the flags on registering.
<br>
<p>Normal MCA variables shmem_sysv_priority etc. have flag
<br>
MCA_BASE_VAR_FLAG_DWG so that they are deregistered through
<br>
mca_base_var_group_deregister in mca_base_component_unload.
<br>
<p>But shmem_sysv_major_version doesn't have the flag.
<br>
<p>Regards,
<br>
KAWASHIMA Takahiro
<br>
<p><span class="quotelev1">&gt; This is odd. The variable in question is registered by the MCA itself. I
</span><br>
<span class="quotelev1">&gt; will take a look and see if I can determine why it isn't being
</span><br>
<span class="quotelev1">&gt; deregistered correctly when the rest of the component's parameters are.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Jul 30, 2014 at 08:17:15AM +0900, KAWASHIMA Takahiro wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Nathan,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thanks for your response.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Yes. My previous mail was the result of uncommented code.
</span><br>
<span class="quotelev2">&gt; &gt; Now I also pulled latest varList source code which uncommented
</span><br>
<span class="quotelev2">&gt; &gt; the section you mentioned, but the result was same.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; If MPI_T_cvar_get_info should return MPI_T_ERR_INVALID_INDEX
</span><br>
<span class="quotelev2">&gt; &gt; for variables for unloaded components, not returning
</span><br>
<span class="quotelev2">&gt; &gt; MPI_T_ERR_INVALID_INDEX is the problem.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I run varList on GDB and found that MPI_T_cvar_get_info returns
</span><br>
<span class="quotelev2">&gt; &gt; MPI_T_ERR_INVALID_INDEX for shmem_sysv_priority (this is sane).
</span><br>
<span class="quotelev2">&gt; &gt; But it returns MPI_SUCCESS for shmem_sysv_major_version.
</span><br>
<span class="quotelev2">&gt; &gt; The difference is mbv_flags values. mbv_flags is 0x44 for
</span><br>
<span class="quotelev2">&gt; &gt; shmem_sysv_priority on MPI_T_cvar_get_info call so that
</span><br>
<span class="quotelev2">&gt; &gt; mca_base_var_get function in opal/mca/base/mca_base_var.c
</span><br>
<span class="quotelev2">&gt; &gt; returns OPAL_ERR_NOT_FOUND. But mbv_flags is 0x10003 for
</span><br>
<span class="quotelev2">&gt; &gt; shmem_sysv_major_version so that mca_base_var_get function
</span><br>
<span class="quotelev2">&gt; &gt; returns OPAL_SUCCESS.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Control variables for unloaded components are not deregistered
</span><br>
<span class="quotelev2">&gt; &gt; completely?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I can track it more when I have time.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; My environment:
</span><br>
<span class="quotelev2">&gt; &gt;   OS: Debian GNU/Linux wheezy
</span><br>
<span class="quotelev2">&gt; &gt;   CPU: x86_64
</span><br>
<span class="quotelev2">&gt; &gt;   Run: mpiexec -n 1 varList
</span><br>
<span class="quotelev2">&gt; &gt;   Open MPI source: trunk r32338 (almost latest)
</span><br>
<span class="quotelev2">&gt; &gt;   Open MPI configure:
</span><br>
<span class="quotelev2">&gt; &gt;     enable_picky=yes
</span><br>
<span class="quotelev2">&gt; &gt;     enable_debug=yes
</span><br>
<span class="quotelev2">&gt; &gt;     enable_mem_debug=yes
</span><br>
<span class="quotelev2">&gt; &gt;     enable_mem_profile=yes
</span><br>
<span class="quotelev2">&gt; &gt;     enable_memchecker=no
</span><br>
<span class="quotelev2">&gt; &gt;     enable_mca_no_build=btl-elan,btl-gm,btl-mx,btl-ofud,btl-portals,btl-sctp,btl-template,btl-udapl,common-mx,common-portals,ess-alps,ess-cnos,ess-lsf,ess-portals_utcp,ess-singleton,ess-slurm,grpcomm-cnos,mpool-fake,mtl,notifier,plm-alps,plm-ccp,plm-lsf,plm-process,plm-slurm,plm-submit,plm-tm,plm-xgrid,pml-cm,pml-csum,pml-example,pml-v,ras
</span><br>
<span class="quotelev2">&gt; &gt;     enable_contrib_no_build=vt
</span><br>
<span class="quotelev2">&gt; &gt;     enable_mpi_cxx=no
</span><br>
<span class="quotelev2">&gt; &gt;     enable_mpi_f77=no
</span><br>
<span class="quotelev2">&gt; &gt;     enable_mpi_f90=no
</span><br>
<span class="quotelev2">&gt; &gt;     enable_ipv6=no
</span><br>
<span class="quotelev2">&gt; &gt;     enable_mpi_io=no
</span><br>
<span class="quotelev2">&gt; &gt;     with_devel_headers=no
</span><br>
<span class="quotelev2">&gt; &gt;     with_wrapper_cflags=-g
</span><br>
<span class="quotelev2">&gt; &gt;     with_wrapper_cxxflags=-g
</span><br>
<span class="quotelev2">&gt; &gt;     with_wrapper_fflags=-g
</span><br>
<span class="quotelev2">&gt; &gt;     with_wrapper_fcflags=-g
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt; KAWASHIMA Takahiro
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The problem is the code in question does not check the return code of
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MPI_T_cvar_handle_alloc . We are returning an error and they still try
</span><br>
<span class="quotelev3">&gt; &gt; &gt; to use the handle (which is stale). Uncomment this section of the code:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                 //if (MPI_T_ERR_INVALID_INDEX == err)// { NOTE TZI: This variable is not recognized by Mvapich. It is OpenMPI specific.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                 //      continue;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Note that MPI_T_ERR_INVALID_INDEX is in the MPI-3 standard but mvapich
</span><br>
<span class="quotelev3">&gt; &gt; &gt; must not have implemented it (and thus should not claim to be MPI 3.0).
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -Nathan
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Wed, Jul 30, 2014 at 12:04:55AM +0900, KAWASHIMA Takahiro wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Hi,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; I encountered the same SEGV reported on the users list when
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; running varList program.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;   <a href="http://www.open-mpi.org/community/lists/users/2014/07/24792.php">http://www.open-mpi.org/community/lists/users/2014/07/24792.php</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; mpiexec -n 1 ./varList:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; ----------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; ... snip ...
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; event                                             U/D-2 CHAR   n/a      ALL
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; event_base_verbose                                D/D-8 INT    n/a      LOCAL    0
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; event_libevent2021_event_include                  U/A-3 CHAR   n/a      LOCAL    poll
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; opal_event_include                                U/A-3 CHAR   n/a      LOCAL    poll
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; event_libevent2021_major_version                  D/A-9 INT    n/a      UNKNOWN  1
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; event_libevent2021_minor_version                  D/A-9 INT    n/a      UNKNOWN  9
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; event_libevent2021_release_version                D/A-9 INT    n/a      UNKNOWN  0
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; shmem                                             U/D-2 CHAR   n/a      ALL
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; shmem_base_verbose                                D/D-8 INT    n/a      LOCAL    0
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; shmem_base_RUNTIME_QUERY_hint                     D/A-9 CHAR   n/a      ALL-EQ
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; shmem_mmap_priority                               U/A-3 INT    n/a      ALL      50
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; shmem_mmap_enable_nfs_warning                     D/A-9 INT    n/a      LOCAL    true
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; shmem_mmap_relocate_backing_file                  D/A-9 INT    n/a      ALL      0
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; shmem_mmap_backing_file_base_dir                  D/A-9 CHAR   n/a      ALL      /dev/shm
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; shmem_mmap_major_version                          D/A-9 INT    n/a      UNKNOWN  1
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; shmem_mmap_minor_version                          D/A-9 INT    n/a      UNKNOWN  9
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; shmem_mmap_release_version                        D/A-9 INT    n/a      UNKNOWN  0
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; shmem_posix_major_version                         D/A-9 INT    n/a      UNKNOWN  1201644720
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; shmem_posix_minor_version                         D/A-9 INT    n/a      UNKNOWN  32756
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; shmem_posix_release_version                       D/A-9 INT    n/a      UNKNOWN  6
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [ppc:12688] *** Process received signal ***
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [ppc:12688] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [ppc:12688] Signal code: Invalid permissions (2)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [ppc:12688] Failing at address: 0x7ff4479f83d8
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [ppc:12688] [ 0] /lib/x86_64-linux-gnu/libc.so.6(+0x325c0)[0x7ff4493015c0]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [ppc:12688] [ 1] /home/rivis/opt/openmpi-trunk-debug/lib/libmpi.so.0(PMPI_T_cvar_read+0xbc)[0x7ff44970abb7]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [ppc:12688] [ 2] ./varlist(list_cvars+0x56a)[0x4029bc]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [ppc:12688] [ 3] ./varlist(main+0x42b)[0x403598]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [ppc:12688] [ 4] /lib/x86_64-linux-gnu/libc.so.6(__libc_start_main+0xfd)[0x7ff4492edeed]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [ppc:12688] [ 5] ./varlist[0x4016c9]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [ppc:12688] *** End of error message ***
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 	----------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; I tracked this error and found that this seems related to DSO.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; The error occurs when accessing value-&gt;intval for the
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; control variable shmem_sysv_major_version in MPI_T_cvar_read.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;   <a href="https://svn.open-mpi.org/trac/ompi/browser/trunk/ompi/mpi/tool/cvar_read.c">https://svn.open-mpi.org/trac/ompi/browser/trunk/ompi/mpi/tool/cvar_read.c</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; The 'value' was gotten by mca_base_var_get_value and it points
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; mca_shmem_sysv_component.super.base_version.mca_component_major_version,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; which was dlclose'd in MPI_INIT for DSO.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (component mmap is selected on my environment)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Abnormal shmem_posix_{major,minor,relase}_version values in
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; my output above are the same reason. SEGV occurs if the memory
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; was returned to kernel, and abnormal values are printed
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; if not yet.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; So this SEGV doesn't occur if I configure Open MPI with
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; --disable-dlopen option. I think it's the reason why Nathan
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; doesn't see this error.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15362.php">Nathan Hjelm: "Re: [OMPI devel] MPI_T SEGV on DSO"</a>
<li><strong>Previous message:</strong> <a href="15360.php">Rolf vandeVaart: "Re: [OMPI devel] OMPI devel] trunk compilation errors in jenkins"</a>
<li><strong>In reply to:</strong> <a href="15358.php">Nathan Hjelm: "Re: [OMPI devel] MPI_T SEGV on DSO"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15362.php">Nathan Hjelm: "Re: [OMPI devel] MPI_T SEGV on DSO"</a>
<li><strong>Reply:</strong> <a href="15362.php">Nathan Hjelm: "Re: [OMPI devel] MPI_T SEGV on DSO"</a>
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
