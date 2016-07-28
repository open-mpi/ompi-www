<?
$subject_val = "[OMPI devel] RFC: Bring in Shared Memory Backing Facility Framework (shmem)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 15 12:01:27 2011" -->
<!-- isoreceived="20110615160127" -->
<!-- sent="Wed, 15 Jun 2011 10:01:22 -0600" -->
<!-- isosent="20110615160122" -->
<!-- name="Samuel K. Gutierrez" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: Bring in Shared Memory Backing Facility Framework (shmem)" -->
<!-- id="9A4788DC-B7B6-4138-BF48-BBDADD7959E4_at_lanl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: Bring in Shared Memory Backing Facility Framework (shmem)<br>
<strong>From:</strong> Samuel K. Gutierrez (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-15 12:01:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9377.php">Jeff Squyres: "Re: [OMPI devel] Open-MPI on TIPC"</a>
<li><strong>Previous message:</strong> <a href="9375.php">Lawrence Stewart: "Re: [OMPI devel] Open-MPI on TIPC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9390.php">Samuel K. Gutierrez: "Re: [OMPI devel] RFC: Bring in Shared Memory Backing Facility Framework (shmem)"</a>
<li><strong>Reply:</strong> <a href="9390.php">Samuel K. Gutierrez: "Re: [OMPI devel] RFC: Bring in Shared Memory Backing Facility Framework (shmem)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT:
<br>
Bring in new shared memory backing facility framework (shmem) and its  
<br>
components.  shmem is simply a framework for the manipulation of  
<br>
shared memory segments (create, attach, detach, unlink, etc).
<br>
<p>WHY:
<br>
The use of shared memory is probably going to start poking up in other  
<br>
parts of Open MPI, so this simply provides the needed infrastructure  
<br>
to facilitate that work.
<br>
<p>WHERE:
<br>
<p>See: <a href="https://bitbucket.org/samuelkgutierrez/orte_shmem">https://bitbucket.org/samuelkgutierrez/orte_shmem</a>
<br>
<p>Additions:
<br>
opal/mca/shmem
<br>
<p>Other Modifications:
<br>
M       opal/runtime/opal_init.c
<br>
M       opal/runtime/opal_params.c
<br>
M       opal/runtime/opal_finalize.c
<br>
M       ompi/tools/ompi_info/ompi_info.c
<br>
M       ompi/tools/ompi_info/components.c
<br>
M       ompi/mca/btl/sm/btl_sm_component.c
<br>
M       ompi/mca/mpool/sm/mpool_sm_module.c
<br>
!       ompi/mca/common/sm/common_sm_mmap.c
<br>
M       ompi/mca/common/sm/common_sm_rml.c
<br>
!       ompi/mca/common/sm/common_sm_windows.c
<br>
!       ompi/mca/common/sm/common_sm_mmap.h
<br>
M       ompi/mca/common/sm/common_sm_rml.h
<br>
!       ompi/mca/common/sm/common_sm_windows.h
<br>
!       ompi/mca/common/sm/common_sm_posix.c
<br>
!       ompi/mca/common/sm/common_sm_sysv.c
<br>
M       ompi/mca/common/sm/help-mpi-common-sm.txt
<br>
!       ompi/mca/common/sm/common_sm_posix.h
<br>
M       ompi/mca/common/sm/configure.m4
<br>
!       ompi/mca/common/sm/common_sm_sysv.h
<br>
M       ompi/mca/common/sm/common_sm.c
<br>
M       ompi/mca/common/sm/Makefile.am
<br>
M       ompi/mca/common/sm/common_sm.h
<br>
M       ompi/mca/coll/sm/coll_sm_component.c
<br>
M       ompi/mca/coll/sm/coll_sm_module.c
<br>
M       orte/mca/odls/base/odls_base_default_fns.c
<br>
M       orte/tools/orte-info/orte-info.c
<br>
M       orte/tools/orte-info/components.c
<br>
<p>WHEN:
<br>
Before 1.7.
<br>
<p>TIMEOUT:
<br>
Teleconference, Tues 21 June 2011
<br>
<p>Thanks!
<br>
<p><pre>
--
Samuel K. Gutierrez
Los Alamos National Laboratory
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9376/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9377.php">Jeff Squyres: "Re: [OMPI devel] Open-MPI on TIPC"</a>
<li><strong>Previous message:</strong> <a href="9375.php">Lawrence Stewart: "Re: [OMPI devel] Open-MPI on TIPC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9390.php">Samuel K. Gutierrez: "Re: [OMPI devel] RFC: Bring in Shared Memory Backing Facility Framework (shmem)"</a>
<li><strong>Reply:</strong> <a href="9390.php">Samuel K. Gutierrez: "Re: [OMPI devel] RFC: Bring in Shared Memory Backing Facility Framework (shmem)"</a>
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
