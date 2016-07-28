<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17941";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 27 13:06:41 2008" -->
<!-- isoreceived="20080327170641" -->
<!-- sent="Thu, 27 Mar 2008 11:06:30 -0600" -->
<!-- isosent="20080327170630" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r17941" -->
<!-- id="C4113036.CD77%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C41129EE.CD73%rhc_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r17941<br>
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-27 13:06:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3558.php">Ralph H Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17941"</a>
<li><strong>Previous message:</strong> <a href="3556.php">Ralph H Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17941"</a>
<li><strong>In reply to:</strong> <a href="3556.php">Ralph H Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17941"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3558.php">Ralph H Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17941"</a>
<li><strong>Reply:</strong> <a href="3558.php">Ralph H Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17941"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Found the problem - should have a fix committed soon. Issue is with
<br>
differences in the number of daemons launched by the various plms (whether
<br>
or not procs are launched local to mpirun).
<br>
<p><p><p>On 3/27/08 10:39 AM, &quot;Ralph H Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hmmm...puzzling. It is working fine for me on TM machines and on my Mac.
</span><br>
<span class="quotelev1">&gt; However, Galen reports it borked on alps as well.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'll have to dig a little to check this out and see if there is something
</span><br>
<span class="quotelev1">&gt; missing on those PLMs. Will get back shortly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry for problem
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 3/27/08 10:28 AM, &quot;Tim Prins&quot; &lt;tprins_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Unfortunately now with r17988 I cannot run any mpi programs, they seem
</span><br>
<span class="quotelev2">&gt;&gt; to hang in the modex.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Tim
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph H Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks Tim - I found the problem and will commit a fix shortly.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Appreciate your testing and reporting!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 3/27/08 8:24 AM, &quot;Tim Prins&quot; &lt;tprins_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This commit breaks things for me. Running on 3 nodes of odin:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun -mca btl tcp,sm,self  examples/ring_c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; causes a hang. All of the processes are stuck in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; orte_grpcomm_base_barrier during MPI_Finalize. Not all programs hang,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and the ring program does not hang all the time, but fairly often.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Tim
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rhc_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Author: rhc
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Date: 2008-03-24 16:50:31 EDT (Mon, 24 Mar 2008)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; New Revision: 17941
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/17941">https://svn.open-mpi.org/trac/ompi/changeset/17941</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Fix the allgather and allgather_list functions to avoid deadlocks at large
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; node/proc counts. Violated the RML rules here - we received the allgather
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; buffer and then did an xcast, which causes a send to go out, and is then
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; subsequently received by the sender. This fix breaks that pattern by
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; forcing
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the recv to complete outside of the function itself - thus, the allgather
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; allgather_list always complete their recvs before returning or sending.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Reogranize the grpcomm code a little to provide support for soon-to-come
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; new
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; grpcomm components. The revised organization puts what will be common code
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; elements in the base to avoid duplication, while allowing components that
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; don't need those functions to ignore them.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Added:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    trunk/orte/mca/grpcomm/base/grpcomm_base_allgather.c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    trunk/orte/mca/grpcomm/base/grpcomm_base_barrier.c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    trunk/orte/mca/grpcomm/base/grpcomm_base_modex.c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    trunk/orte/mca/grpcomm/base/Makefile.am                |     5
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    trunk/orte/mca/grpcomm/base/base.h                     |    23 +
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    trunk/orte/mca/grpcomm/base/grpcomm_base_close.c       |     4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    trunk/orte/mca/grpcomm/base/grpcomm_base_open.c        |     1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    trunk/orte/mca/grpcomm/base/grpcomm_base_select.c      |   121 ++---
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    trunk/orte/mca/grpcomm/basic/grpcomm_basic.h           |    16
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    trunk/orte/mca/grpcomm/basic/grpcomm_basic_component.c |    30 -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    trunk/orte/mca/grpcomm/basic/grpcomm_basic_module.c    |   845
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ++-------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    trunk/orte/mca/grpcomm/cnos/grpcomm_cnos.h             |     8
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    trunk/orte/mca/grpcomm/cnos/grpcomm_cnos_component.c   |     8
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    trunk/orte/mca/grpcomm/cnos/grpcomm_cnos_module.c      |    21
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    trunk/orte/mca/grpcomm/grpcomm.h                       |    45 +
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    trunk/orte/mca/rml/rml_types.h                         |    31
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    trunk/orte/orted/orted_comm.c                          |    27 +
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    14 files changed, 226 insertions(+), 959 deletions(-)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Diff not shown due to size (92619 bytes).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; To see the diff, run the following command:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; svn diff -r 17940:17941 --no-diff-deleted
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; svn mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="3558.php">Ralph H Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17941"</a>
<li><strong>Previous message:</strong> <a href="3556.php">Ralph H Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17941"</a>
<li><strong>In reply to:</strong> <a href="3556.php">Ralph H Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17941"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3558.php">Ralph H Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17941"</a>
<li><strong>Reply:</strong> <a href="3558.php">Ralph H Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17941"</a>
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
