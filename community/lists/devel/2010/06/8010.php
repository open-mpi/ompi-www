<?
$subject_val = "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  1 13:35:18 2010" -->
<!-- isoreceived="20100601173518" -->
<!-- sent="Tue, 01 Jun 2010 13:35:12 -0400" -->
<!-- isosent="20100601173512" -->
<!-- name="Graham, Richard L." -->
<!-- email="rlgraham_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: System V Shared Memory for Open MPI" -->
<!-- id="236B18D117B37C449E470367EFCEC00303B8C58FFE6D_at_EXCHMB.ornl.gov" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI devel] RFC: System V Shared Memory for Open MPI" -->
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
<strong>From:</strong> Graham, Richard L. (<em>rlgraham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-01 13:35:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8011.php">Samuel K. Gutierrez: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<li><strong>Previous message:</strong> <a href="8009.php">Samuel K. Gutierrez: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<li><strong>Maybe in reply to:</strong> <a href="8008.php">Samuel K. Gutierrez: "[OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8011.php">Samuel K. Gutierrez: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<li><strong>Reply:</strong> <a href="8011.php">Samuel K. Gutierrez: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<li><strong>Reply:</strong> <a href="8014.php">Jeff Squyres: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you be a bit more explicit, please ?
<br>
I do not want this on our systems, so as long as this is a compile time decision, and as long as this does not degrade the performance of the current sm device, I will not object.
<br>
<p>Rich
<br>
<p>----- Original Message -----
<br>
From: devel-bounces_at_[hidden] &lt;devel-bounces_at_[hidden]&gt;
<br>
To: Open MPI Developers &lt;devel_at_[hidden]&gt;
<br>
Sent: Tue Jun 01 13:08:46 2010
<br>
Subject: [OMPI devel] RFC: System V Shared Memory for Open MPI
<br>
<p>WHAT: New System V shared memory component.
<br>
<p>WHY: <a href="https://svn.open-mpi.org/trac/ompi/ticket/1320">https://svn.open-mpi.org/trac/ompi/ticket/1320</a>
<br>
<p>WHERE:
<br>
M      ompi/mca/btl/sm/btl_sm.c
<br>
M      ompi/mca/btl/sm/btl_sm_component.c
<br>
M      ompi/mca/btl/sm/btl_sm.h
<br>
M      ompi/mca/mpool/sm/mpool_sm_component.c
<br>
M      ompi/mca/mpool/sm/mpool_sm.h
<br>
M      ompi/mca/mpool/sm/mpool_sm_module.c
<br>
A      ompi/mca/common/sm/configure.m4
<br>
A      ompi/mca/common/sm/common_sm_sysv.h
<br>
A      ompi/mca/common/sm/common_sm_windows.c
<br>
A      ompi/mca/common/sm/common_sm_windows.h
<br>
A      ompi/mca/common/sm/common_sm.c
<br>
A      ompi/mca/common/sm/common_sm_sysv.c
<br>
A      ompi/mca/common/sm/common_sm.h
<br>
M      ompi/mca/common/sm/common_sm_mmap.c
<br>
M      ompi/mca/common/sm/common_sm_mmap.h
<br>
M      ompi/mca/common/sm/Makefile.am
<br>
M      ompi/mca/common/sm/help-mpi-common-sm.txt
<br>
M      ompi/mca/coll/sm/coll_sm_module.c
<br>
M      ompi/mca/coll/sm/coll_sm.h
<br>
<p>WHEN: Upon acceptance.
<br>
<p>TIMEOUT: Tuesday, June 8, 2010 (after devel concall).
<br>
<p>HOW:
<br>
MCA mpi: parameter &quot;mpi_common_sm&quot; (current value: &lt;mmap&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;data source: default value)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Which shared memory support will be used.  
<br>
Valid
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;values: sysv,mmap - or a comma delimited  
<br>
combination
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;of them (order dependent).  The first  
<br>
component that
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;is successfully selected is used.
<br>
<p>Thanks!
<br>
<p><pre>
--
Samuel K. Gutierrez
Los Alamos National Laboratory
_______________________________________________
devel mailing list
devel_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8011.php">Samuel K. Gutierrez: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<li><strong>Previous message:</strong> <a href="8009.php">Samuel K. Gutierrez: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<li><strong>Maybe in reply to:</strong> <a href="8008.php">Samuel K. Gutierrez: "[OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8011.php">Samuel K. Gutierrez: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<li><strong>Reply:</strong> <a href="8011.php">Samuel K. Gutierrez: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<li><strong>Reply:</strong> <a href="8014.php">Jeff Squyres: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
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
