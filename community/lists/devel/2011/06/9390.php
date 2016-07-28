<?
$subject_val = "Re: [OMPI devel] RFC: Bring in Shared Memory Backing Facility Framework (shmem)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 21 11:43:15 2011" -->
<!-- isoreceived="20110621154315" -->
<!-- sent="Tue, 21 Jun 2011 09:43:10 -0600" -->
<!-- isosent="20110621154310" -->
<!-- name="Samuel K. Gutierrez" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Bring in Shared Memory Backing Facility Framework (shmem)" -->
<!-- id="FBA83E1C-9BE0-4EC2-AACA-F0B88B935132_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="9A4788DC-B7B6-4138-BF48-BBDADD7959E4_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Bring in Shared Memory Backing Facility Framework (shmem)<br>
<strong>From:</strong> Samuel K. Gutierrez (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-21 11:43:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9391.php">Matthias Jurenz: "Re: [OMPI devel] VT support for 1.5"</a>
<li><strong>Previous message:</strong> <a href="9389.php">Josh Hursey: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>In reply to:</strong> <a href="9376.php">Samuel K. Gutierrez: "[OMPI devel] RFC: Bring in Shared Memory Backing Facility Framework (shmem)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In r24795.
<br>
<p>Thanks,
<br>
<p><pre>
--
Samuel K. Gutierrez
Los Alamos National Laboratory
On Jun 15, 2011, at 10:01 AM, Samuel K. Gutierrez wrote:
&gt; WHAT:
&gt; Bring in new shared memory backing facility framework (shmem) and  
&gt; its components.  shmem is simply a framework for the manipulation of  
&gt; shared memory segments (create, attach, detach, unlink, etc).
&gt;
&gt; WHY:
&gt; The use of shared memory is probably going to start poking up in  
&gt; other parts of Open MPI, so this simply provides the needed  
&gt; infrastructure to facilitate that work.
&gt;
&gt; WHERE:
&gt;
&gt; See: <a href="https://bitbucket.org/samuelkgutierrez/orte_shmem">https://bitbucket.org/samuelkgutierrez/orte_shmem</a>
&gt;
&gt; Additions:
&gt; opal/mca/shmem
&gt;
&gt; Other Modifications:
&gt; M       opal/runtime/opal_init.c
&gt; M       opal/runtime/opal_params.c
&gt; M       opal/runtime/opal_finalize.c
&gt; M       ompi/tools/ompi_info/ompi_info.c
&gt; M       ompi/tools/ompi_info/components.c
&gt; M       ompi/mca/btl/sm/btl_sm_component.c
&gt; M       ompi/mca/mpool/sm/mpool_sm_module.c
&gt; !       ompi/mca/common/sm/common_sm_mmap.c
&gt; M       ompi/mca/common/sm/common_sm_rml.c
&gt; !       ompi/mca/common/sm/common_sm_windows.c
&gt; !       ompi/mca/common/sm/common_sm_mmap.h
&gt; M       ompi/mca/common/sm/common_sm_rml.h
&gt; !       ompi/mca/common/sm/common_sm_windows.h
&gt; !       ompi/mca/common/sm/common_sm_posix.c
&gt; !       ompi/mca/common/sm/common_sm_sysv.c
&gt; M       ompi/mca/common/sm/help-mpi-common-sm.txt
&gt; !       ompi/mca/common/sm/common_sm_posix.h
&gt; M       ompi/mca/common/sm/configure.m4
&gt; !       ompi/mca/common/sm/common_sm_sysv.h
&gt; M       ompi/mca/common/sm/common_sm.c
&gt; M       ompi/mca/common/sm/Makefile.am
&gt; M       ompi/mca/common/sm/common_sm.h
&gt; M       ompi/mca/coll/sm/coll_sm_component.c
&gt; M       ompi/mca/coll/sm/coll_sm_module.c
&gt; M       orte/mca/odls/base/odls_base_default_fns.c
&gt; M       orte/tools/orte-info/orte-info.c
&gt; M       orte/tools/orte-info/components.c
&gt;
&gt; WHEN:
&gt; Before 1.7.
&gt;
&gt; TIMEOUT:
&gt; Teleconference, Tues 21 June 2011
&gt;
&gt; Thanks!
&gt;
&gt; --
&gt; Samuel K. Gutierrez
&gt; Los Alamos National Laboratory
&gt;
&gt;
&gt;
&gt;
&gt;
&gt; _______________________________________________
&gt; devel mailing list
&gt; devel_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9390/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9391.php">Matthias Jurenz: "Re: [OMPI devel] VT support for 1.5"</a>
<li><strong>Previous message:</strong> <a href="9389.php">Josh Hursey: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>In reply to:</strong> <a href="9376.php">Samuel K. Gutierrez: "[OMPI devel] RFC: Bring in Shared Memory Backing Facility Framework (shmem)"</a>
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
