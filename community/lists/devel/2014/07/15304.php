<?
$subject_val = "[OMPI devel] MPI_T SEGV on DSO";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 29 11:05:13 2014" -->
<!-- isoreceived="20140729150513" -->
<!-- sent="Wed, 30 Jul 2014 00:04:55 +0900" -->
<!-- isosent="20140729150455" -->
<!-- name="KAWASHIMA Takahiro" -->
<!-- email="rivis.kawashima_at_[hidden]" -->
<!-- subject="[OMPI devel] MPI_T SEGV on DSO" -->
<!-- id="20140730000455.20b0fa092eb627f1590de202_at_nifty.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] MPI_T SEGV on DSO<br>
<strong>From:</strong> KAWASHIMA Takahiro (<em>rivis.kawashima_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-29 11:04:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15305.php">Bert Wesarg: "Re: [OMPI devel] SHMEM symmetric objects in shared libraries"</a>
<li><strong>Previous message:</strong> <a href="15303.php">tmishima_at_[hidden]: "[OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15306.php">Nathan Hjelm: "Re: [OMPI devel] MPI_T SEGV on DSO"</a>
<li><strong>Reply:</strong> <a href="15306.php">Nathan Hjelm: "Re: [OMPI devel] MPI_T SEGV on DSO"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I encountered the same SEGV reported on the users list when
<br>
running varList program.
<br>
<p>&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/users/2014/07/24792.php">http://www.open-mpi.org/community/lists/users/2014/07/24792.php</a>
<br>
<p>mpiexec -n 1 ./varList:
<br>
----------------------------------------------------------------
<br>
... snip ...
<br>
event                                             U/D-2 CHAR   n/a      ALL
<br>
event_base_verbose                                D/D-8 INT    n/a      LOCAL    0
<br>
event_libevent2021_event_include                  U/A-3 CHAR   n/a      LOCAL    poll
<br>
opal_event_include                                U/A-3 CHAR   n/a      LOCAL    poll
<br>
event_libevent2021_major_version                  D/A-9 INT    n/a      UNKNOWN  1
<br>
event_libevent2021_minor_version                  D/A-9 INT    n/a      UNKNOWN  9
<br>
event_libevent2021_release_version                D/A-9 INT    n/a      UNKNOWN  0
<br>
shmem                                             U/D-2 CHAR   n/a      ALL
<br>
shmem_base_verbose                                D/D-8 INT    n/a      LOCAL    0
<br>
shmem_base_RUNTIME_QUERY_hint                     D/A-9 CHAR   n/a      ALL-EQ
<br>
shmem_mmap_priority                               U/A-3 INT    n/a      ALL      50
<br>
shmem_mmap_enable_nfs_warning                     D/A-9 INT    n/a      LOCAL    true
<br>
shmem_mmap_relocate_backing_file                  D/A-9 INT    n/a      ALL      0
<br>
shmem_mmap_backing_file_base_dir                  D/A-9 CHAR   n/a      ALL      /dev/shm
<br>
shmem_mmap_major_version                          D/A-9 INT    n/a      UNKNOWN  1
<br>
shmem_mmap_minor_version                          D/A-9 INT    n/a      UNKNOWN  9
<br>
shmem_mmap_release_version                        D/A-9 INT    n/a      UNKNOWN  0
<br>
shmem_posix_major_version                         D/A-9 INT    n/a      UNKNOWN  1201644720
<br>
shmem_posix_minor_version                         D/A-9 INT    n/a      UNKNOWN  32756
<br>
shmem_posix_release_version                       D/A-9 INT    n/a      UNKNOWN  6
<br>
[ppc:12688] *** Process received signal ***
<br>
[ppc:12688] Signal: Segmentation fault (11)
<br>
[ppc:12688] Signal code: Invalid permissions (2)
<br>
[ppc:12688] Failing at address: 0x7ff4479f83d8
<br>
[ppc:12688] [ 0] /lib/x86_64-linux-gnu/libc.so.6(+0x325c0)[0x7ff4493015c0]
<br>
[ppc:12688] [ 1] /home/rivis/opt/openmpi-trunk-debug/lib/libmpi.so.0(PMPI_T_cvar_read+0xbc)[0x7ff44970abb7]
<br>
[ppc:12688] [ 2] ./varlist(list_cvars+0x56a)[0x4029bc]
<br>
[ppc:12688] [ 3] ./varlist(main+0x42b)[0x403598]
<br>
[ppc:12688] [ 4] /lib/x86_64-linux-gnu/libc.so.6(__libc_start_main+0xfd)[0x7ff4492edeed]
<br>
[ppc:12688] [ 5] ./varlist[0x4016c9]
<br>
[ppc:12688] *** End of error message ***
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;----------------------------------------------------------------
<br>
<p>I tracked this error and found that this seems related to DSO.
<br>
<p>The error occurs when accessing value-&gt;intval for the
<br>
control variable shmem_sysv_major_version in MPI_T_cvar_read.
<br>
<p>&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/browser/trunk/ompi/mpi/tool/cvar_read.c">https://svn.open-mpi.org/trac/ompi/browser/trunk/ompi/mpi/tool/cvar_read.c</a>
<br>
<p>The 'value' was gotten by mca_base_var_get_value and it points
<br>
mca_shmem_sysv_component.super.base_version.mca_component_major_version,
<br>
which was dlclose'd in MPI_INIT for DSO.
<br>
(component mmap is selected on my environment)
<br>
<p>Abnormal shmem_posix_{major,minor,relase}_version values in
<br>
my output above are the same reason. SEGV occurs if the memory
<br>
was returned to kernel, and abnormal values are printed
<br>
if not yet.
<br>
<p>So this SEGV doesn't occur if I configure Open MPI with
<br>
--disable-dlopen option. I think it's the reason why Nathan
<br>
doesn't see this error.
<br>
<p>Regards,
<br>
KAWASHIMA Takahiro
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15305.php">Bert Wesarg: "Re: [OMPI devel] SHMEM symmetric objects in shared libraries"</a>
<li><strong>Previous message:</strong> <a href="15303.php">tmishima_at_[hidden]: "[OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15306.php">Nathan Hjelm: "Re: [OMPI devel] MPI_T SEGV on DSO"</a>
<li><strong>Reply:</strong> <a href="15306.php">Nathan Hjelm: "Re: [OMPI devel] MPI_T SEGV on DSO"</a>
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
