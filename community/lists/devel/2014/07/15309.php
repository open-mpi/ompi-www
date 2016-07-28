<?
$subject_val = "Re: [OMPI devel] MPI_T SEGV on DSO";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 29 12:32:32 2014" -->
<!-- isoreceived="20140729163232" -->
<!-- sent="Tue, 29 Jul 2014 16:32:30 +0000" -->
<!-- isosent="20140729163230" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_T SEGV on DSO" -->
<!-- id="F27F687A-A162-4332-AD1A-75A3576605EA_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140729153843.GC43566_at_pn1246003.lanl.gov" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-29 12:32:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15310.php">Bert Wesarg: "Re: [OMPI devel] SHMEM symmetric objects in shared libraries"</a>
<li><strong>Previous message:</strong> <a href="15308.php">Shamis, Pavel: "Re: [OMPI devel] SHMEM symmetric objects in shared libraries"</a>
<li><strong>In reply to:</strong> <a href="15306.php">Nathan Hjelm: "Re: [OMPI devel] MPI_T SEGV on DSO"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15334.php">KAWASHIMA Takahiro: "Re: [OMPI devel] MPI_T SEGV on DSO"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FYI: We have pinged the upstream/LLNL authors of varlist about this issue.
<br>
<p><p>On Jul 29, 2014, at 11:38 AM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem is the code in question does not check the return code of
</span><br>
<span class="quotelev1">&gt; MPI_T_cvar_handle_alloc . We are returning an error and they still try
</span><br>
<span class="quotelev1">&gt; to use the handle (which is stale). Uncomment this section of the code:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                //if (MPI_T_ERR_INVALID_INDEX == err)// { NOTE TZI: This variable is not recognized by Mvapich. It is OpenMPI specific.
</span><br>
<span class="quotelev1">&gt;                //      continue;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note that MPI_T_ERR_INVALID_INDEX is in the MPI-3 standard but mvapich
</span><br>
<span class="quotelev1">&gt; must not have implemented it (and thus should not claim to be MPI 3.0).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Jul 30, 2014 at 12:04:55AM +0900, KAWASHIMA Takahiro wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I encountered the same SEGV reported on the users list when
</span><br>
<span class="quotelev2">&gt;&gt; running varList program.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  <a href="http://www.open-mpi.org/community/lists/users/2014/07/24792.php">http://www.open-mpi.org/community/lists/users/2014/07/24792.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec -n 1 ./varList:
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; ... snip ...
</span><br>
<span class="quotelev2">&gt;&gt; event                                             U/D-2 CHAR   n/a      ALL
</span><br>
<span class="quotelev2">&gt;&gt; event_base_verbose                                D/D-8 INT    n/a      LOCAL    0
</span><br>
<span class="quotelev2">&gt;&gt; event_libevent2021_event_include                  U/A-3 CHAR   n/a      LOCAL    poll
</span><br>
<span class="quotelev2">&gt;&gt; opal_event_include                                U/A-3 CHAR   n/a      LOCAL    poll
</span><br>
<span class="quotelev2">&gt;&gt; event_libevent2021_major_version                  D/A-9 INT    n/a      UNKNOWN  1
</span><br>
<span class="quotelev2">&gt;&gt; event_libevent2021_minor_version                  D/A-9 INT    n/a      UNKNOWN  9
</span><br>
<span class="quotelev2">&gt;&gt; event_libevent2021_release_version                D/A-9 INT    n/a      UNKNOWN  0
</span><br>
<span class="quotelev2">&gt;&gt; shmem                                             U/D-2 CHAR   n/a      ALL
</span><br>
<span class="quotelev2">&gt;&gt; shmem_base_verbose                                D/D-8 INT    n/a      LOCAL    0
</span><br>
<span class="quotelev2">&gt;&gt; shmem_base_RUNTIME_QUERY_hint                     D/A-9 CHAR   n/a      ALL-EQ
</span><br>
<span class="quotelev2">&gt;&gt; shmem_mmap_priority                               U/A-3 INT    n/a      ALL      50
</span><br>
<span class="quotelev2">&gt;&gt; shmem_mmap_enable_nfs_warning                     D/A-9 INT    n/a      LOCAL    true
</span><br>
<span class="quotelev2">&gt;&gt; shmem_mmap_relocate_backing_file                  D/A-9 INT    n/a      ALL      0
</span><br>
<span class="quotelev2">&gt;&gt; shmem_mmap_backing_file_base_dir                  D/A-9 CHAR   n/a      ALL      /dev/shm
</span><br>
<span class="quotelev2">&gt;&gt; shmem_mmap_major_version                          D/A-9 INT    n/a      UNKNOWN  1
</span><br>
<span class="quotelev2">&gt;&gt; shmem_mmap_minor_version                          D/A-9 INT    n/a      UNKNOWN  9
</span><br>
<span class="quotelev2">&gt;&gt; shmem_mmap_release_version                        D/A-9 INT    n/a      UNKNOWN  0
</span><br>
<span class="quotelev2">&gt;&gt; shmem_posix_major_version                         D/A-9 INT    n/a      UNKNOWN  1201644720
</span><br>
<span class="quotelev2">&gt;&gt; shmem_posix_minor_version                         D/A-9 INT    n/a      UNKNOWN  32756
</span><br>
<span class="quotelev2">&gt;&gt; shmem_posix_release_version                       D/A-9 INT    n/a      UNKNOWN  6
</span><br>
<span class="quotelev2">&gt;&gt; [ppc:12688] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [ppc:12688] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt; [ppc:12688] Signal code: Invalid permissions (2)
</span><br>
<span class="quotelev2">&gt;&gt; [ppc:12688] Failing at address: 0x7ff4479f83d8
</span><br>
<span class="quotelev2">&gt;&gt; [ppc:12688] [ 0] /lib/x86_64-linux-gnu/libc.so.6(+0x325c0)[0x7ff4493015c0]
</span><br>
<span class="quotelev2">&gt;&gt; [ppc:12688] [ 1] /home/rivis/opt/openmpi-trunk-debug/lib/libmpi.so.0(PMPI_T_cvar_read+0xbc)[0x7ff44970abb7]
</span><br>
<span class="quotelev2">&gt;&gt; [ppc:12688] [ 2] ./varlist(list_cvars+0x56a)[0x4029bc]
</span><br>
<span class="quotelev2">&gt;&gt; [ppc:12688] [ 3] ./varlist(main+0x42b)[0x403598]
</span><br>
<span class="quotelev2">&gt;&gt; [ppc:12688] [ 4] /lib/x86_64-linux-gnu/libc.so.6(__libc_start_main+0xfd)[0x7ff4492edeed]
</span><br>
<span class="quotelev2">&gt;&gt; [ppc:12688] [ 5] ./varlist[0x4016c9]
</span><br>
<span class="quotelev2">&gt;&gt; [ppc:12688] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; 	----------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I tracked this error and found that this seems related to DSO.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The error occurs when accessing value-&gt;intval for the
</span><br>
<span class="quotelev2">&gt;&gt; control variable shmem_sysv_major_version in MPI_T_cvar_read.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  <a href="https://svn.open-mpi.org/trac/ompi/browser/trunk/ompi/mpi/tool/cvar_read.c">https://svn.open-mpi.org/trac/ompi/browser/trunk/ompi/mpi/tool/cvar_read.c</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The 'value' was gotten by mca_base_var_get_value and it points
</span><br>
<span class="quotelev2">&gt;&gt; mca_shmem_sysv_component.super.base_version.mca_component_major_version,
</span><br>
<span class="quotelev2">&gt;&gt; which was dlclose'd in MPI_INIT for DSO.
</span><br>
<span class="quotelev2">&gt;&gt; (component mmap is selected on my environment)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Abnormal shmem_posix_{major,minor,relase}_version values in
</span><br>
<span class="quotelev2">&gt;&gt; my output above are the same reason. SEGV occurs if the memory
</span><br>
<span class="quotelev2">&gt;&gt; was returned to kernel, and abnormal values are printed
</span><br>
<span class="quotelev2">&gt;&gt; if not yet.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So this SEGV doesn't occur if I configure Open MPI with
</span><br>
<span class="quotelev2">&gt;&gt; --disable-dlopen option. I think it's the reason why Nathan
</span><br>
<span class="quotelev2">&gt;&gt; doesn't see this error.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; KAWASHIMA Takahiro
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15304.php">http://www.open-mpi.org/community/lists/devel/2014/07/15304.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15306.php">http://www.open-mpi.org/community/lists/devel/2014/07/15306.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15310.php">Bert Wesarg: "Re: [OMPI devel] SHMEM symmetric objects in shared libraries"</a>
<li><strong>Previous message:</strong> <a href="15308.php">Shamis, Pavel: "Re: [OMPI devel] SHMEM symmetric objects in shared libraries"</a>
<li><strong>In reply to:</strong> <a href="15306.php">Nathan Hjelm: "Re: [OMPI devel] MPI_T SEGV on DSO"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15334.php">KAWASHIMA Takahiro: "Re: [OMPI devel] MPI_T SEGV on DSO"</a>
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
