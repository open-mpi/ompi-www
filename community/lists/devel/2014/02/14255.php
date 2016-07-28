<?
$subject_val = "[OMPI devel] Fwd: [OMPI svn] svn:open-mpi r30894 - in branches/v1.7: . ompi	ompi/attribute ompi/debuggers ompi/errhandler ompi/include	ompi/mca/btl ompi/mca/btl/openib/connect ompi/mca/op	ompi/mca/osc ompi/mca/osc/base ompi/mca/osc/portals4	ompi/mca/osc/rdma ompi/m...";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 28 17:14:05 2014" -->
<!-- isoreceived="20140228221405" -->
<!-- sent="Fri, 28 Feb 2014 22:14:04 +0000" -->
<!-- isosent="20140228221404" -->
<!-- name="Dave Goodell (dgoodell)" -->
<!-- email="dgoodell_at_[hidden]" -->
<!-- subject="[OMPI devel] Fwd: [OMPI svn] svn:open-mpi r30894 - in branches/v1.7: . ompi	ompi/attribute ompi/debuggers ompi/errhandler ompi/include	ompi/mca/btl ompi/mca/btl/openib/connect ompi/mca/op	ompi/mca/osc ompi/mca/osc/base ompi/mca/osc/portals4	ompi/mca/osc/rdma ompi/m..." -->
<!-- id="1D5F1460-882D-444B-829D-954835499A15_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140228181610.5BEC7160B6F_at_tiger.crest.iu.edu" -->
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
<strong>Subject:</strong> [OMPI devel] Fwd: [OMPI svn] svn:open-mpi r30894 - in branches/v1.7: . ompi	ompi/attribute ompi/debuggers ompi/errhandler ompi/include	ompi/mca/btl ompi/mca/btl/openib/connect ompi/mca/op	ompi/mca/osc ompi/mca/osc/base ompi/mca/osc/portals4	ompi/mca/osc/rdma ompi/m...<br>
<strong>From:</strong> Dave Goodell (dgoodell) (<em>dgoodell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-28 17:14:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14256.php">Ralph Castain: "Re: [OMPI devel] Fwd: [OMPI svn] svn:open-mpi r30894 - in branches/v1.7: . ompi	ompi/attribute ompi/debuggers ompi/errhandler ompi/include	ompi/mca/btl ompi/mca/btl/openib/connect ompi/mca/op	ompi/mca/osc ompi/mca/osc/base ompi/mca/osc/portals4	ompi/mca/osc/rdma ompi/m..."</a>
<li><strong>Previous message:</strong> <a href="14254.php">Latham, Robert J.: "[OMPI devel] pulling in Open-MPI changes to ROMIO"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14256.php">Ralph Castain: "Re: [OMPI devel] Fwd: [OMPI svn] svn:open-mpi r30894 - in branches/v1.7: . ompi	ompi/attribute ompi/debuggers ompi/errhandler ompi/include	ompi/mca/btl ompi/mca/btl/openib/connect ompi/mca/op	ompi/mca/osc ompi/mca/osc/base ompi/mca/osc/portals4	ompi/mca/osc/rdma ompi/m..."</a>
<li><strong>Reply:</strong> <a href="14256.php">Ralph Castain: "Re: [OMPI devel] Fwd: [OMPI svn] svn:open-mpi r30894 - in branches/v1.7: . ompi	ompi/attribute ompi/debuggers ompi/errhandler ompi/include	ompi/mca/btl ompi/mca/btl/openib/connect ompi/mca/op	ompi/mca/osc ompi/mca/osc/base ompi/mca/osc/portals4	ompi/mca/osc/rdma ompi/m..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Begin forwarded message:
<br>
<p><span class="quotelev1">&gt; From: &lt;svn-commit-mailer_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI svn] svn:open-mpi r30894 - in branches/v1.7: . ompi ompi/attribute ompi/debuggers ompi/errhandler ompi/include ompi/mca/btl ompi/mca/btl/openib/connect ompi/mca/op ompi/mca/osc ompi/mca/osc/base ompi/mca/osc/portals4 ompi/mca/osc/rdma ompi/mca/osc/sm ompi/mca/pml/cm ompi/mpi/c ompi/mpi/c/profile ompi/mpi/man/man3 ompi/op ompi/win opal opal/util
</span><br>
<span class="quotelev1">&gt; Date: February 28, 2014 10:16:08 AM PST
</span><br>
<span class="quotelev1">&gt; To: &lt;svn_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Reply-To: &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Author: rhc (Ralph Castain)
</span><br>
<span class="quotelev1">&gt; Date: 2014-02-28 13:16:08 EST (Fri, 28 Feb 2014)
</span><br>
<span class="quotelev1">&gt; New Revision: 30894
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/30894">https://svn.open-mpi.org/trac/ompi/changeset/30894</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Fixes #4304: Move r30816, 30820, 30821, r30853 to v1.7 branch (Fix a number of issues)
</span><br>
<p>I get one-sided build errors in our Cisco jenkins as of this commit (well, actually r30895, but I suspect this commit is the culprit).  Maybe something's missing from the CMR?
<br>
<p>----8&lt;----
<br>
make[2]: Leaving directory `/home/jenkins/slave-roots/master/ompi_upstream_v1.7_build_debug/ompi/mca/osc/sm'
<br>
Making all in mca/osc/pt2pt
<br>
make[2]: Entering directory `/home/jenkins/slave-roots/master/ompi_upstream_v1.7_build_debug/ompi/mca/osc/pt2pt'
<br>
&nbsp;&nbsp;CC       osc_pt2pt.lo
<br>
&nbsp;&nbsp;CC       osc_pt2pt_buffer.lo
<br>
&nbsp;&nbsp;CC       osc_pt2pt_comm.lo
<br>
&nbsp;&nbsp;CC       osc_pt2pt_component.lo
<br>
&nbsp;&nbsp;CC       osc_pt2pt_data_move.lo
<br>
&nbsp;&nbsp;CC       osc_pt2pt_longreq.lo
<br>
&nbsp;&nbsp;CC       osc_pt2pt_replyreq.lo
<br>
&nbsp;&nbsp;CC       osc_pt2pt_sendreq.lo
<br>
&nbsp;&nbsp;CC       osc_pt2pt_sync.lo
<br>
osc_pt2pt_replyreq.c: In function 'ompi_osc_pt2pt_replyreq_alloc_init':
<br>
osc_pt2pt_replyreq.c:35: error: 'ompi_win_t' has no member named 'w_baseptr'
<br>
osc_pt2pt_replyreq.c:36: error: 'ompi_win_t' has no member named 'w_disp_unit'
<br>
make[2]: *** [osc_pt2pt_replyreq.lo] Error 1
<br>
make[2]: *** Waiting for unfinished jobs....
<br>
osc_pt2pt_sync.c: In function 'ompi_osc_pt2pt_module_fence':
<br>
osc_pt2pt_sync.c:153: error: implicit declaration of function 'ompi_win_set_mode'
<br>
osc_pt2pt_sync.c:153: error: 'OMPI_WIN_FENCE' undeclared (first use in this function)
<br>
osc_pt2pt_sync.c:153: error: (Each undeclared identifier is reported only once
<br>
osc_pt2pt_sync.c:153: error: for each function it appears in.)
<br>
osc_pt2pt_comm.c: In function 'ompi_osc_pt2pt_module_accumulate':
<br>
osc_pt2pt_comm.c:60: error: 'OMPI_WIN_STARTED' undeclared (first use in this function)
<br>
osc_pt2pt_comm.c:60: error: (Each undeclared identifier is reported only once
<br>
osc_pt2pt_comm.c:60: error: for each function it appears in.)
<br>
osc_pt2pt_comm.c:60: error: implicit declaration of function 'ompi_win_get_mode'
<br>
osc_pt2pt_comm.c:65: error: 'OMPI_WIN_FENCE' undeclared (first use in this function)
<br>
osc_pt2pt_comm.c:67: error: implicit declaration of function 'ompi_win_set_mode'
<br>
osc_pt2pt_comm.c:67: error: 'OMPI_WIN_ACCESS_EPOCH' undeclared (first use in this function)
<br>
osc_pt2pt_comm.c:68: error: 'OMPI_WIN_EXPOSE_EPOCH' undeclared (first use in this function)
<br>
osc_pt2pt_comm.c: In function 'ompi_osc_pt2pt_module_get':
<br>
osc_pt2pt_comm.c:115: error: 'OMPI_WIN_STARTED' undeclared (first use in this function)
<br>
osc_pt2pt_comm.c:120: error: 'OMPI_WIN_FENCE' undeclared (first use in this function)
<br>
osc_pt2pt_sync.c: In function 'ompi_osc_pt2pt_module_start':
<br>
osc_pt2pt_sync.c:213: error: implicit declaration of function 'ompi_win_remove_mode'
<br>
osc_pt2pt_comm.c:122: error: 'OMPI_WIN_ACCESS_EPOCH' undeclared (first use in this function)
<br>
osc_pt2pt_sync.c:213: error: 'OMPI_WIN_FENCE' undeclared (first use in this function)
<br>
osc_pt2pt_comm.c:123: error: 'OMPI_WIN_EXPOSE_EPOCH' undeclared (first use in this function)
<br>
osc_pt2pt_sync.c:214: error: implicit declaration of function 'ompi_win_append_mode'
<br>
osc_pt2pt_sync.c:214: error: 'OMPI_WIN_ACCESS_EPOCH' undeclared (first use in this function)
<br>
osc_pt2pt_sync.c:214: error: 'OMPI_WIN_STARTED' undeclared (first use in this function)
<br>
osc_pt2pt_comm.c: In function 'ompi_osc_pt2pt_module_put':
<br>
osc_pt2pt_comm.c:165: error: 'OMPI_WIN_STARTED' undeclared (first use in this function)
<br>
osc_pt2pt_comm.c:170: error: 'OMPI_WIN_FENCE' undeclared (first use in this function)
<br>
osc_pt2pt_comm.c:172: error: 'OMPI_WIN_ACCESS_EPOCH' undeclared (first use in this function)
<br>
osc_pt2pt_comm.c:173: error: 'OMPI_WIN_EXPOSE_EPOCH' undeclared (first use in this function)
<br>
osc_pt2pt_sync.c: In function 'ompi_osc_pt2pt_module_complete':
<br>
osc_pt2pt_sync.c:294: error: 'OMPI_WIN_ACCESS_EPOCH' undeclared (first use in this function)
<br>
osc_pt2pt_sync.c:294: error: 'OMPI_WIN_STARTED' undeclared (first use in this function)
<br>
osc_pt2pt_sync.c: In function 'ompi_osc_pt2pt_module_post':
<br>
osc_pt2pt_sync.c:319: error: 'OMPI_WIN_FENCE' undeclared (first use in this function)
<br>
osc_pt2pt_sync.c:320: error: 'OMPI_WIN_EXPOSE_EPOCH' undeclared (first use in this function)
<br>
osc_pt2pt_sync.c:320: error: 'OMPI_WIN_POSTED' undeclared (first use in this function)
<br>
osc_pt2pt_sync.c: In function 'ompi_osc_pt2pt_module_wait':
<br>
osc_pt2pt_sync.c:354: error: 'OMPI_WIN_EXPOSE_EPOCH' undeclared (first use in this function)
<br>
osc_pt2pt_sync.c:354: error: 'OMPI_WIN_POSTED' undeclared (first use in this function)
<br>
osc_pt2pt_sync.c: In function 'ompi_osc_pt2pt_module_test':
<br>
osc_pt2pt_sync.c:382: error: 'OMPI_WIN_EXPOSE_EPOCH' undeclared (first use in this function)
<br>
osc_pt2pt_sync.c:382: error: 'OMPI_WIN_POSTED' undeclared (first use in this function)
<br>
osc_pt2pt_data_move.c: In function 'ompi_osc_pt2pt_sendreq_recv_put':
<br>
osc_pt2pt_data_move.c:555: error: 'ompi_win_t' has no member named 'w_baseptr'
<br>
osc_pt2pt_data_move.c:556: error: 'ompi_win_t' has no member named 'w_disp_unit'
<br>
osc_pt2pt_sync.c: In function 'ompi_osc_pt2pt_module_lock':
<br>
osc_pt2pt_sync.c:418: error: 'OMPI_WIN_FENCE' undeclared (first use in this function)
<br>
osc_pt2pt_sync.c:419: error: 'OMPI_WIN_ACCESS_EPOCH' undeclared (first use in this function)
<br>
osc_pt2pt_sync.c:419: error: 'OMPI_WIN_LOCK_ACCESS' undeclared (first use in this function)
<br>
osc_pt2pt_sync.c: In function 'ompi_osc_pt2pt_module_unlock':
<br>
osc_pt2pt_data_move.c: In function 'ompi_osc_pt2pt_sendreq_recv_accum_long_cb':
<br>
osc_pt2pt_sync.c:517: error: 'OMPI_WIN_ACCESS_EPOCH' undeclared (first use in this function)
<br>
osc_pt2pt_data_move.c:643: error: 'ompi_win_t' has no member named 'w_baseptr'
<br>
osc_pt2pt_sync.c:517: error: 'OMPI_WIN_LOCK_ACCESS' undeclared (first use in this function)
<br>
osc_pt2pt_data_move.c:644: error: 'ompi_win_t' has no member named 'w_disp_unit'
<br>
osc_pt2pt_sync.c: In function 'ompi_osc_pt2pt_passive_lock':
<br>
osc_pt2pt_sync.c:539: error: 'OMPI_WIN_EXPOSE_EPOCH' undeclared (first use in this function)
<br>
osc_pt2pt_component.c:49: error: 'OMPI_OSC_BASE_VERSION_2_0_0' undeclared here (not in a function)
<br>
osc_pt2pt_component.c:50: warning: initialization makes integer from pointer without a cast
<br>
osc_pt2pt_component.c:50: error: initializer element is not computable at load time
<br>
osc_pt2pt_component.c:50: error: (near initialization for 'mca_osc_pt2pt_component.super.osc_version.mca_minor_version')
<br>
osc_pt2pt_component.c:52: warning: missing braces around initializer
<br>
osc_pt2pt_component.c:52: warning: (near initialization for 'mca_osc_pt2pt_component.super.osc_version.mca_type_name')
<br>
osc_pt2pt_component.c:54: warning: initialization makes integer from pointer without a cast
<br>
osc_pt2pt_component.c:55: warning: initialization makes integer from pointer without a cast
<br>
osc_pt2pt_component.c:56: warning: initialization makes integer from pointer without a cast
<br>
osc_pt2pt_component.c:58: warning: initialization makes integer from pointer without a cast
<br>
osc_pt2pt_component.c:58: error: initializer element is not computable at load time
<br>
osc_pt2pt_component.c:58: error: (near initialization for 'mca_osc_pt2pt_component.super.osc_version.mca_type_name[5]')
<br>
osc_pt2pt_component.c:63: warning: initialization from incompatible pointer type
<br>
osc_pt2pt_component.c:64: warning: initialization from incompatible pointer type
<br>
osc_pt2pt_data_move.c: In function 'ompi_osc_pt2pt_sendreq_recv_accum':
<br>
osc_pt2pt_data_move.c:730: error: 'ompi_win_t' has no member named 'w_baseptr'
<br>
osc_pt2pt_component.c:72: warning: initialization from incompatible pointer type
<br>
osc_pt2pt_data_move.c:731: error: 'ompi_win_t' has no member named 'w_disp_unit'osc_pt2pt_component.c:74: warning: initialization from incompatible pointer type
<br>
<p>osc_pt2pt_component.c:75: warning: initialization from incompatible pointer type
<br>
osc_pt2pt_component.c:76: warning: initialization from incompatible pointer type
<br>
osc_pt2pt_component.c:78: warning: initialization from incompatible pointer type
<br>
osc_pt2pt_component.c:80: warning: initialization from incompatible pointer type
<br>
osc_pt2pt_component.c:81: warning: initialization from incompatible pointer type
<br>
osc_pt2pt_component.c:82: warning: initialization from incompatible pointer type
<br>
osc_pt2pt_component.c:83: warning: initialization from incompatible pointer type
<br>
osc_pt2pt_component.c:84: warning: initialization from incompatible pointer type
<br>
osc_pt2pt_component.c:86: warning: initialization from incompatible pointer type
<br>
osc_pt2pt_component.c:87: warning: initialization from incompatible pointer type
<br>
osc_pt2pt_sync.c: In function 'ompi_osc_pt2pt_passive_unlock_complete':
<br>
osc_pt2pt_sync.c:627: error: 'OMPI_WIN_EXPOSE_EPOCH' undeclared (first use in this function)
<br>
make[2]: *** [osc_pt2pt_comm.lo] Error 1
<br>
osc_pt2pt_component.c: In function 'component_fragment_cb':
<br>
osc_pt2pt_component.c:365: error: implicit declaration of function 'ompi_win_exposure_epoch'
<br>
osc_pt2pt_component.c:366: error: 'OMPI_WIN_FENCE' undeclared (first use in this function)
<br>
osc_pt2pt_component.c:366: error: (Each undeclared identifier is reported only once
<br>
osc_pt2pt_component.c:366: error: for each function it appears in.)
<br>
osc_pt2pt_component.c:366: error: implicit declaration of function 'ompi_win_get_mode'
<br>
osc_pt2pt_component.c:367: error: implicit declaration of function 'ompi_win_set_mode'
<br>
osc_pt2pt_component.c:369: error: 'OMPI_WIN_ACCESS_EPOCH' undeclared (first use in this function)
<br>
osc_pt2pt_component.c:370: error: 'OMPI_WIN_EXPOSE_EPOCH' undeclared (first use in this function)
<br>
make[2]: *** [osc_pt2pt_sync.lo] Error 1
<br>
make[2]: *** [osc_pt2pt_data_move.lo] Error 1
<br>
make[2]: *** [osc_pt2pt_component.lo] Error 1
<br>
make[2]: Leaving directory `/home/jenkins/slave-roots/master/ompi_upstream_v1.7_build_debug/ompi/mca/osc/pt2pt'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/home/jenkins/slave-roots/master/ompi_upstream_v1.7_build_debug/ompi'
<br>
make: *** [all-recursive] Error 1
<br>
----8&lt;----
<br>
<p>-Dave
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14256.php">Ralph Castain: "Re: [OMPI devel] Fwd: [OMPI svn] svn:open-mpi r30894 - in branches/v1.7: . ompi	ompi/attribute ompi/debuggers ompi/errhandler ompi/include	ompi/mca/btl ompi/mca/btl/openib/connect ompi/mca/op	ompi/mca/osc ompi/mca/osc/base ompi/mca/osc/portals4	ompi/mca/osc/rdma ompi/m..."</a>
<li><strong>Previous message:</strong> <a href="14254.php">Latham, Robert J.: "[OMPI devel] pulling in Open-MPI changes to ROMIO"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14256.php">Ralph Castain: "Re: [OMPI devel] Fwd: [OMPI svn] svn:open-mpi r30894 - in branches/v1.7: . ompi	ompi/attribute ompi/debuggers ompi/errhandler ompi/include	ompi/mca/btl ompi/mca/btl/openib/connect ompi/mca/op	ompi/mca/osc ompi/mca/osc/base ompi/mca/osc/portals4	ompi/mca/osc/rdma ompi/m..."</a>
<li><strong>Reply:</strong> <a href="14256.php">Ralph Castain: "Re: [OMPI devel] Fwd: [OMPI svn] svn:open-mpi r30894 - in branches/v1.7: . ompi	ompi/attribute ompi/debuggers ompi/errhandler ompi/include	ompi/mca/btl ompi/mca/btl/openib/connect ompi/mca/op	ompi/mca/osc ompi/mca/osc/base ompi/mca/osc/portals4	ompi/mca/osc/rdma ompi/m..."</a>
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
