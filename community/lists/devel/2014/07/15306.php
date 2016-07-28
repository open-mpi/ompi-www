<?
$subject_val = "Re: [OMPI devel] MPI_T SEGV on DSO";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 29 11:38:44 2014" -->
<!-- isoreceived="20140729153844" -->
<!-- sent="Tue, 29 Jul 2014 09:38:43 -0600" -->
<!-- isosent="20140729153843" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_T SEGV on DSO" -->
<!-- id="20140729153843.GC43566_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140730000455.20b0fa092eb627f1590de202_at_nifty.com" -->
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
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-29 11:38:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15307.php">Jeff Squyres (jsquyres): "[OMPI devel] Github exploration status"</a>
<li><strong>Previous message:</strong> <a href="15305.php">Bert Wesarg: "Re: [OMPI devel] SHMEM symmetric objects in shared libraries"</a>
<li><strong>In reply to:</strong> <a href="15304.php">KAWASHIMA Takahiro: "[OMPI devel] MPI_T SEGV on DSO"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15309.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MPI_T SEGV on DSO"</a>
<li><strong>Reply:</strong> <a href="15309.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MPI_T SEGV on DSO"</a>
<li><strong>Reply:</strong> <a href="15334.php">KAWASHIMA Takahiro: "Re: [OMPI devel] MPI_T SEGV on DSO"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The problem is the code in question does not check the return code of
<br>
MPI_T_cvar_handle_alloc . We are returning an error and they still try
<br>
to use the handle (which is stale). Uncomment this section of the code:
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//if (MPI_T_ERR_INVALID_INDEX == err)// { NOTE TZI: This variable is not recognized by Mvapich. It is OpenMPI specific.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//      continue;
<br>
<p><p>Note that MPI_T_ERR_INVALID_INDEX is in the MPI-3 standard but mvapich
<br>
must not have implemented it (and thus should not claim to be MPI 3.0).
<br>
<p>-Nathan
<br>
<p>On Wed, Jul 30, 2014 at 12:04:55AM +0900, KAWASHIMA Takahiro wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I encountered the same SEGV reported on the users list when
</span><br>
<span class="quotelev1">&gt; running varList program.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   <a href="http://www.open-mpi.org/community/lists/users/2014/07/24792.php">http://www.open-mpi.org/community/lists/users/2014/07/24792.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpiexec -n 1 ./varList:
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ... snip ...
</span><br>
<span class="quotelev1">&gt; event                                             U/D-2 CHAR   n/a      ALL
</span><br>
<span class="quotelev1">&gt; event_base_verbose                                D/D-8 INT    n/a      LOCAL    0
</span><br>
<span class="quotelev1">&gt; event_libevent2021_event_include                  U/A-3 CHAR   n/a      LOCAL    poll
</span><br>
<span class="quotelev1">&gt; opal_event_include                                U/A-3 CHAR   n/a      LOCAL    poll
</span><br>
<span class="quotelev1">&gt; event_libevent2021_major_version                  D/A-9 INT    n/a      UNKNOWN  1
</span><br>
<span class="quotelev1">&gt; event_libevent2021_minor_version                  D/A-9 INT    n/a      UNKNOWN  9
</span><br>
<span class="quotelev1">&gt; event_libevent2021_release_version                D/A-9 INT    n/a      UNKNOWN  0
</span><br>
<span class="quotelev1">&gt; shmem                                             U/D-2 CHAR   n/a      ALL
</span><br>
<span class="quotelev1">&gt; shmem_base_verbose                                D/D-8 INT    n/a      LOCAL    0
</span><br>
<span class="quotelev1">&gt; shmem_base_RUNTIME_QUERY_hint                     D/A-9 CHAR   n/a      ALL-EQ
</span><br>
<span class="quotelev1">&gt; shmem_mmap_priority                               U/A-3 INT    n/a      ALL      50
</span><br>
<span class="quotelev1">&gt; shmem_mmap_enable_nfs_warning                     D/A-9 INT    n/a      LOCAL    true
</span><br>
<span class="quotelev1">&gt; shmem_mmap_relocate_backing_file                  D/A-9 INT    n/a      ALL      0
</span><br>
<span class="quotelev1">&gt; shmem_mmap_backing_file_base_dir                  D/A-9 CHAR   n/a      ALL      /dev/shm
</span><br>
<span class="quotelev1">&gt; shmem_mmap_major_version                          D/A-9 INT    n/a      UNKNOWN  1
</span><br>
<span class="quotelev1">&gt; shmem_mmap_minor_version                          D/A-9 INT    n/a      UNKNOWN  9
</span><br>
<span class="quotelev1">&gt; shmem_mmap_release_version                        D/A-9 INT    n/a      UNKNOWN  0
</span><br>
<span class="quotelev1">&gt; shmem_posix_major_version                         D/A-9 INT    n/a      UNKNOWN  1201644720
</span><br>
<span class="quotelev1">&gt; shmem_posix_minor_version                         D/A-9 INT    n/a      UNKNOWN  32756
</span><br>
<span class="quotelev1">&gt; shmem_posix_release_version                       D/A-9 INT    n/a      UNKNOWN  6
</span><br>
<span class="quotelev1">&gt; [ppc:12688] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [ppc:12688] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [ppc:12688] Signal code: Invalid permissions (2)
</span><br>
<span class="quotelev1">&gt; [ppc:12688] Failing at address: 0x7ff4479f83d8
</span><br>
<span class="quotelev1">&gt; [ppc:12688] [ 0] /lib/x86_64-linux-gnu/libc.so.6(+0x325c0)[0x7ff4493015c0]
</span><br>
<span class="quotelev1">&gt; [ppc:12688] [ 1] /home/rivis/opt/openmpi-trunk-debug/lib/libmpi.so.0(PMPI_T_cvar_read+0xbc)[0x7ff44970abb7]
</span><br>
<span class="quotelev1">&gt; [ppc:12688] [ 2] ./varlist(list_cvars+0x56a)[0x4029bc]
</span><br>
<span class="quotelev1">&gt; [ppc:12688] [ 3] ./varlist(main+0x42b)[0x403598]
</span><br>
<span class="quotelev1">&gt; [ppc:12688] [ 4] /lib/x86_64-linux-gnu/libc.so.6(__libc_start_main+0xfd)[0x7ff4492edeed]
</span><br>
<span class="quotelev1">&gt; [ppc:12688] [ 5] ./varlist[0x4016c9]
</span><br>
<span class="quotelev1">&gt; [ppc:12688] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; 	----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tracked this error and found that this seems related to DSO.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The error occurs when accessing value-&gt;intval for the
</span><br>
<span class="quotelev1">&gt; control variable shmem_sysv_major_version in MPI_T_cvar_read.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   <a href="https://svn.open-mpi.org/trac/ompi/browser/trunk/ompi/mpi/tool/cvar_read.c">https://svn.open-mpi.org/trac/ompi/browser/trunk/ompi/mpi/tool/cvar_read.c</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The 'value' was gotten by mca_base_var_get_value and it points
</span><br>
<span class="quotelev1">&gt; mca_shmem_sysv_component.super.base_version.mca_component_major_version,
</span><br>
<span class="quotelev1">&gt; which was dlclose'd in MPI_INIT for DSO.
</span><br>
<span class="quotelev1">&gt; (component mmap is selected on my environment)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Abnormal shmem_posix_{major,minor,relase}_version values in
</span><br>
<span class="quotelev1">&gt; my output above are the same reason. SEGV occurs if the memory
</span><br>
<span class="quotelev1">&gt; was returned to kernel, and abnormal values are printed
</span><br>
<span class="quotelev1">&gt; if not yet.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So this SEGV doesn't occur if I configure Open MPI with
</span><br>
<span class="quotelev1">&gt; --disable-dlopen option. I think it's the reason why Nathan
</span><br>
<span class="quotelev1">&gt; doesn't see this error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; KAWASHIMA Takahiro
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15304.php">http://www.open-mpi.org/community/lists/devel/2014/07/15304.php</a>
</span><br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15306/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15307.php">Jeff Squyres (jsquyres): "[OMPI devel] Github exploration status"</a>
<li><strong>Previous message:</strong> <a href="15305.php">Bert Wesarg: "Re: [OMPI devel] SHMEM symmetric objects in shared libraries"</a>
<li><strong>In reply to:</strong> <a href="15304.php">KAWASHIMA Takahiro: "[OMPI devel] MPI_T SEGV on DSO"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15309.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MPI_T SEGV on DSO"</a>
<li><strong>Reply:</strong> <a href="15309.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MPI_T SEGV on DSO"</a>
<li><strong>Reply:</strong> <a href="15334.php">KAWASHIMA Takahiro: "Re: [OMPI devel] MPI_T SEGV on DSO"</a>
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
