<?
$subject_val = "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  2 05:39:01 2010" -->
<!-- isoreceived="20100602093901" -->
<!-- sent="Wed, 2 Jun 2010 05:38:53 -0400" -->
<!-- isosent="20100602093853" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: System V Shared Memory for Open MPI" -->
<!-- id="457EBFE2-F4BC-4100-82A2-1DFEA2EB8FC1_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="72F57368-CF91-4AA2-84E3-E507A8B6E589_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: System V Shared Memory for Open MPI<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-02 05:38:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8021.php">Jeff Squyres: "Re: [OMPI devel] Wrong documentation for MPI_Comm_size manual page"</a>
<li><strong>Previous message:</strong> <a href="8019.php">George Bosilca: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>In reply to:</strong> <a href="8015.php">Samuel K. Gutierrez: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8023.php">Jeff Squyres: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<li><strong>Reply:</strong> <a href="8023.php">Jeff Squyres: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think adding support for sysv shared memory is a good thing. However, I have some strong objections over the implementation in the hg tree. Here are 2 of the major ones:
<br>
<p>1) the sysv shared memory creation is __atomic__ based on the flags used. Therefore, all the RML messages exchange is totally useless.
<br>
<p>2) the whole code is replicated in the 3 files (mmap, sysv and windows), even the common parts. However in the sysv case most of the comments have been modified to remove all capitals letter. I'm in favor of extracting all the common parts and moving them in a special file. What should be kept in the particular files should only be the really different parts (small part of the init and finalize).
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Jun 1, 2010, at 19:26 , Samuel K. Gutierrez wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Configure option added: --enable-sysv (default: disabled).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For sysv testing purposes, please enable.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Samuel K. Gutierrez
</span><br>
<span class="quotelev1">&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 1, 2010, at 11:11 AM, Samuel K. Gutierrez wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Doh!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; bitbucket repository: <a href="http://bitbucket.org/samuelkgutierrez/ompi_sysv_sm">http://bitbucket.org/samuelkgutierrez/ompi_sysv_sm</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Samuel K. Gutierrez
</span><br>
<span class="quotelev2">&gt;&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 1, 2010, at 11:08 AM, Samuel K. Gutierrez wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHAT: New System V shared memory component.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHY: <a href="https://svn.open-mpi.org/trac/ompi/ticket/1320">https://svn.open-mpi.org/trac/ompi/ticket/1320</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHERE:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; M      ompi/mca/btl/sm/btl_sm.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; M      ompi/mca/btl/sm/btl_sm_component.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; M      ompi/mca/btl/sm/btl_sm.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt; M      ompi/mca/mpool/sm/mpool_sm_component.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; M      ompi/mca/mpool/sm/mpool_sm.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt; M      ompi/mca/mpool/sm/mpool_sm_module.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A      ompi/mca/common/sm/configure.m4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A      ompi/mca/common/sm/common_sm_sysv.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A      ompi/mca/common/sm/common_sm_windows.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A      ompi/mca/common/sm/common_sm_windows.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A      ompi/mca/common/sm/common_sm.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A      ompi/mca/common/sm/common_sm_sysv.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A      ompi/mca/common/sm/common_sm.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt; M      ompi/mca/common/sm/common_sm_mmap.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; M      ompi/mca/common/sm/common_sm_mmap.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt; M      ompi/mca/common/sm/Makefile.am
</span><br>
<span class="quotelev3">&gt;&gt;&gt; M      ompi/mca/common/sm/help-mpi-common-sm.txt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; M      ompi/mca/coll/sm/coll_sm_module.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; M      ompi/mca/coll/sm/coll_sm.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHEN: Upon acceptance.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; TIMEOUT: Tuesday, June 8, 2010 (after devel concall).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HOW:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MCA mpi: parameter &quot;mpi_common_sm&quot; (current value: &lt;mmap&gt;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        data source: default value)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        Which shared memory support will be used. Valid
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        values: sysv,mmap - or a comma delimited combination
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        of them (order dependent).  The first component that
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        is successfully selected is used.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Samuel K. Gutierrez
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8021.php">Jeff Squyres: "Re: [OMPI devel] Wrong documentation for MPI_Comm_size manual page"</a>
<li><strong>Previous message:</strong> <a href="8019.php">George Bosilca: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>In reply to:</strong> <a href="8015.php">Samuel K. Gutierrez: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8023.php">Jeff Squyres: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<li><strong>Reply:</strong> <a href="8023.php">Jeff Squyres: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
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
