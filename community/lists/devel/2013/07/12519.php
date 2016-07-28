<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28694 - in trunk/ompi/mca/coll/hcoll: . .deps";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  1 18:45:02 2013" -->
<!-- isoreceived="20130701224502" -->
<!-- sent="Mon, 1 Jul 2013 16:44:57 -0600" -->
<!-- isosent="20130701224457" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r28694 - in trunk/ompi/mca/coll/hcoll: . .deps" -->
<!-- id="20130701224457.GI3886_at_pantheralanlgov.local" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20130701223944.57032160430_at_tiger.crest.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r28694 - in trunk/ompi/mca/coll/hcoll: . .deps<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-01 18:44:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12520.php">George Bosilca: "[OMPI devel] RFC: OMPI_FREE_LIST_{GET|WAIT} lose the rc argument"</a>
<li><strong>Previous message:</strong> <a href="12518.php">George Bosilca: "Re: [OMPI devel] RFC MPI 2.2 Dist_graph addition"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Awesome! BTW, you added some generated files and other files by mistake (.deps, Makefile, Makefile.in, configure.params).
<br>
<p>-Nathan
<br>
<p>On Mon, Jul 01, 2013 at 06:39:44PM -0400, svn-commit-mailer_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Author: jladd (Joshua Ladd)
</span><br>
<span class="quotelev1">&gt; Date: 2013-07-01 18:39:43 EDT (Mon, 01 Jul 2013)
</span><br>
<span class="quotelev1">&gt; New Revision: 28694
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/28694">https://svn.open-mpi.org/trac/ompi/changeset/28694</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Per the details and schedule outlined in the attached RFC, Mellanox Technologies would like to CMR the new 'coll/hcoll' component. This component enables Mellanox Technologies' latest HPC middleware offering - 'Hcoll'. 'Hcoll' is a high-performance, standalone collectives library with support for truly asynchronous, non-blocking, hierarchical collectives via hardware offload on supporting Mellanox HCAs (ConnectX-3 and above.) To build the component, libhcoll must first be installed on your system, then you must configure OMPI with the configure flag: '--with-hcoll=/path/to/libhcoll'. Subsequent to installing, you may select the 'coll/hcoll' component at runtime as you would any other coll component, e.g. '-mca coll hcoll,tuned,libnbc'. This has been reviewed by Josh Ladd and should be added to cmr:v1.7:reviewer=jladd
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Added:
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/coll/hcoll/
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/coll/hcoll/.deps/
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/coll/hcoll/.deps/coll_hcoll_component.Plo
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/coll/hcoll/.deps/coll_hcoll_module.Plo
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/coll/hcoll/.deps/coll_hcoll_ops.Plo
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/coll/hcoll/.deps/coll_hcoll_rte.Plo
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/coll/hcoll/Makefile
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/coll/hcoll/Makefile.am
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/coll/hcoll/Makefile.in
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/coll/hcoll/coll_hcoll.h
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/coll/hcoll/coll_hcoll_component.c
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/coll/hcoll/coll_hcoll_debug.h
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/coll/hcoll/coll_hcoll_dtypes.h
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/coll/hcoll/coll_hcoll_module.c
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/coll/hcoll/coll_hcoll_ops.c
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/coll/hcoll/coll_hcoll_rte.c
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/coll/hcoll/configure.m4
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/coll/hcoll/configure.params
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Diff not shown due to size (295514 bytes).
</span><br>
<span class="quotelev1">&gt; To see the diff, run the following command:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	svn diff -r 28693:28694 --no-diff-deleted
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn mailing list
</span><br>
<span class="quotelev1">&gt; svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12520.php">George Bosilca: "[OMPI devel] RFC: OMPI_FREE_LIST_{GET|WAIT} lose the rc argument"</a>
<li><strong>Previous message:</strong> <a href="12518.php">George Bosilca: "Re: [OMPI devel] RFC MPI 2.2 Dist_graph addition"</a>
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
