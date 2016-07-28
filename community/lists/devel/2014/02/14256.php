<?
$subject_val = "Re: [OMPI devel] Fwd: [OMPI svn] svn:open-mpi r30894 - in branches/v1.7: . ompi	ompi/attribute ompi/debuggers ompi/errhandler ompi/include	ompi/mca/btl ompi/mca/btl/openib/connect ompi/mca/op	ompi/mca/osc ompi/mca/osc/base ompi/mca/osc/portals4	ompi/mca/osc/rdma ompi/m...";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 28 17:38:44 2014" -->
<!-- isoreceived="20140228223844" -->
<!-- sent="Fri, 28 Feb 2014 14:38:37 -0800" -->
<!-- isosent="20140228223837" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fwd: [OMPI svn] svn:open-mpi r30894 - in branches/v1.7: . ompi	ompi/attribute ompi/debuggers ompi/errhandler ompi/include	ompi/mca/btl ompi/mca/btl/openib/connect ompi/mca/op	ompi/mca/osc ompi/mca/osc/base ompi/mca/osc/portals4	ompi/mca/osc/rdma ompi/m..." -->
<!-- id="125C4914-B99E-4A01-B0FF-90EE17839209_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1D5F1460-882D-444B-829D-954835499A15_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Fwd: [OMPI svn] svn:open-mpi r30894 - in branches/v1.7: . ompi	ompi/attribute ompi/debuggers ompi/errhandler ompi/include	ompi/mca/btl ompi/mca/btl/openib/connect ompi/mca/op	ompi/mca/osc ompi/mca/osc/base ompi/mca/osc/portals4	ompi/mca/osc/rdma ompi/m...<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-28 17:38:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/03/14257.php">Ralph Castain: "[OMPI devel] v1.7.5rc1 posted"</a>
<li><strong>Previous message:</strong> <a href="14255.php">Dave Goodell (dgoodell): "[OMPI devel] Fwd: [OMPI svn] svn:open-mpi r30894 - in branches/v1.7: . ompi	ompi/attribute ompi/debuggers ompi/errhandler ompi/include	ompi/mca/btl ompi/mca/btl/openib/connect ompi/mca/op	ompi/mca/osc ompi/mca/osc/base ompi/mca/osc/portals4	ompi/mca/osc/rdma ompi/m..."</a>
<li><strong>In reply to:</strong> <a href="14255.php">Dave Goodell (dgoodell): "[OMPI devel] Fwd: [OMPI svn] svn:open-mpi r30894 - in branches/v1.7: . ompi	ompi/attribute ompi/debuggers ompi/errhandler ompi/include	ompi/mca/btl ompi/mca/btl/openib/connect ompi/mca/op	ompi/mca/osc ompi/mca/osc/base ompi/mca/osc/portals4	ompi/mca/osc/rdma ompi/m..."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
sorry - the  osc pt2pt directory in the 1.7 branch was supposed to be removed after that commit
<br>
<p>On Feb 28, 2014, at 2:14 PM, Dave Goodell (dgoodell) &lt;dgoodell_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Begin forwarded message:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; From: &lt;svn-commit-mailer_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [OMPI svn] svn:open-mpi r30894 - in branches/v1.7: . ompi ompi/attribute ompi/debuggers ompi/errhandler ompi/include ompi/mca/btl ompi/mca/btl/openib/connect ompi/mca/op ompi/mca/osc ompi/mca/osc/base ompi/mca/osc/portals4 ompi/mca/osc/rdma ompi/mca/osc/sm ompi/mca/pml/cm ompi/mpi/c ompi/mpi/c/profile ompi/mpi/man/man3 ompi/op ompi/win opal opal/util
</span><br>
<span class="quotelev2">&gt;&gt; Date: February 28, 2014 10:16:08 AM PST
</span><br>
<span class="quotelev2">&gt;&gt; To: &lt;svn_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Reply-To: &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Author: rhc (Ralph Castain)
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2014-02-28 13:16:08 EST (Fri, 28 Feb 2014)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 30894
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/30894">https://svn.open-mpi.org/trac/ompi/changeset/30894</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; Fixes #4304: Move r30816, 30820, 30821, r30853 to v1.7 branch (Fix a number of issues)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I get one-sided build errors in our Cisco jenkins as of this commit (well, actually r30895, but I suspect this commit is the culprit).  Maybe something's missing from the CMR?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----8&lt;----
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/jenkins/slave-roots/master/ompi_upstream_v1.7_build_debug/ompi/mca/osc/sm'
</span><br>
<span class="quotelev1">&gt; Making all in mca/osc/pt2pt
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/home/jenkins/slave-roots/master/ompi_upstream_v1.7_build_debug/ompi/mca/osc/pt2pt'
</span><br>
<span class="quotelev1">&gt;  CC       osc_pt2pt.lo
</span><br>
<span class="quotelev1">&gt;  CC       osc_pt2pt_buffer.lo
</span><br>
<span class="quotelev1">&gt;  CC       osc_pt2pt_comm.lo
</span><br>
<span class="quotelev1">&gt;  CC       osc_pt2pt_component.lo
</span><br>
<span class="quotelev1">&gt;  CC       osc_pt2pt_data_move.lo
</span><br>
<span class="quotelev1">&gt;  CC       osc_pt2pt_longreq.lo
</span><br>
<span class="quotelev1">&gt;  CC       osc_pt2pt_replyreq.lo
</span><br>
<span class="quotelev1">&gt;  CC       osc_pt2pt_sendreq.lo
</span><br>
<span class="quotelev1">&gt;  CC       osc_pt2pt_sync.lo
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_replyreq.c: In function 'ompi_osc_pt2pt_replyreq_alloc_init':
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_replyreq.c:35: error: 'ompi_win_t' has no member named 'w_baseptr'
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_replyreq.c:36: error: 'ompi_win_t' has no member named 'w_disp_unit'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [osc_pt2pt_replyreq.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: *** Waiting for unfinished jobs....
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_sync.c: In function 'ompi_osc_pt2pt_module_fence':
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_sync.c:153: error: implicit declaration of function 'ompi_win_set_mode'
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_sync.c:153: error: 'OMPI_WIN_FENCE' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_sync.c:153: error: (Each undeclared identifier is reported only once
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_sync.c:153: error: for each function it appears in.)
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_comm.c: In function 'ompi_osc_pt2pt_module_accumulate':
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_comm.c:60: error: 'OMPI_WIN_STARTED' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_comm.c:60: error: (Each undeclared identifier is reported only once
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_comm.c:60: error: for each function it appears in.)
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_comm.c:60: error: implicit declaration of function 'ompi_win_get_mode'
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_comm.c:65: error: 'OMPI_WIN_FENCE' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_comm.c:67: error: implicit declaration of function 'ompi_win_set_mode'
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_comm.c:67: error: 'OMPI_WIN_ACCESS_EPOCH' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_comm.c:68: error: 'OMPI_WIN_EXPOSE_EPOCH' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_comm.c: In function 'ompi_osc_pt2pt_module_get':
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_comm.c:115: error: 'OMPI_WIN_STARTED' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_comm.c:120: error: 'OMPI_WIN_FENCE' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_sync.c: In function 'ompi_osc_pt2pt_module_start':
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_sync.c:213: error: implicit declaration of function 'ompi_win_remove_mode'
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_comm.c:122: error: 'OMPI_WIN_ACCESS_EPOCH' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_sync.c:213: error: 'OMPI_WIN_FENCE' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_comm.c:123: error: 'OMPI_WIN_EXPOSE_EPOCH' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_sync.c:214: error: implicit declaration of function 'ompi_win_append_mode'
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_sync.c:214: error: 'OMPI_WIN_ACCESS_EPOCH' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_sync.c:214: error: 'OMPI_WIN_STARTED' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_comm.c: In function 'ompi_osc_pt2pt_module_put':
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_comm.c:165: error: 'OMPI_WIN_STARTED' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_comm.c:170: error: 'OMPI_WIN_FENCE' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_comm.c:172: error: 'OMPI_WIN_ACCESS_EPOCH' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_comm.c:173: error: 'OMPI_WIN_EXPOSE_EPOCH' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_sync.c: In function 'ompi_osc_pt2pt_module_complete':
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_sync.c:294: error: 'OMPI_WIN_ACCESS_EPOCH' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_sync.c:294: error: 'OMPI_WIN_STARTED' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_sync.c: In function 'ompi_osc_pt2pt_module_post':
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_sync.c:319: error: 'OMPI_WIN_FENCE' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_sync.c:320: error: 'OMPI_WIN_EXPOSE_EPOCH' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_sync.c:320: error: 'OMPI_WIN_POSTED' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_sync.c: In function 'ompi_osc_pt2pt_module_wait':
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_sync.c:354: error: 'OMPI_WIN_EXPOSE_EPOCH' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_sync.c:354: error: 'OMPI_WIN_POSTED' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_sync.c: In function 'ompi_osc_pt2pt_module_test':
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_sync.c:382: error: 'OMPI_WIN_EXPOSE_EPOCH' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_sync.c:382: error: 'OMPI_WIN_POSTED' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_data_move.c: In function 'ompi_osc_pt2pt_sendreq_recv_put':
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_data_move.c:555: error: 'ompi_win_t' has no member named 'w_baseptr'
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_data_move.c:556: error: 'ompi_win_t' has no member named 'w_disp_unit'
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_sync.c: In function 'ompi_osc_pt2pt_module_lock':
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_sync.c:418: error: 'OMPI_WIN_FENCE' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_sync.c:419: error: 'OMPI_WIN_ACCESS_EPOCH' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_sync.c:419: error: 'OMPI_WIN_LOCK_ACCESS' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_sync.c: In function 'ompi_osc_pt2pt_module_unlock':
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_data_move.c: In function 'ompi_osc_pt2pt_sendreq_recv_accum_long_cb':
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_sync.c:517: error: 'OMPI_WIN_ACCESS_EPOCH' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_data_move.c:643: error: 'ompi_win_t' has no member named 'w_baseptr'
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_sync.c:517: error: 'OMPI_WIN_LOCK_ACCESS' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_data_move.c:644: error: 'ompi_win_t' has no member named 'w_disp_unit'
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_sync.c: In function 'ompi_osc_pt2pt_passive_lock':
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_sync.c:539: error: 'OMPI_WIN_EXPOSE_EPOCH' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_component.c:49: error: 'OMPI_OSC_BASE_VERSION_2_0_0' undeclared here (not in a function)
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_component.c:50: warning: initialization makes integer from pointer without a cast
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_component.c:50: error: initializer element is not computable at load time
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_component.c:50: error: (near initialization for 'mca_osc_pt2pt_component.super.osc_version.mca_minor_version')
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_component.c:52: warning: missing braces around initializer
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_component.c:52: warning: (near initialization for 'mca_osc_pt2pt_component.super.osc_version.mca_type_name')
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_component.c:54: warning: initialization makes integer from pointer without a cast
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_component.c:55: warning: initialization makes integer from pointer without a cast
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_component.c:56: warning: initialization makes integer from pointer without a cast
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_component.c:58: warning: initialization makes integer from pointer without a cast
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_component.c:58: error: initializer element is not computable at load time
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_component.c:58: error: (near initialization for 'mca_osc_pt2pt_component.super.osc_version.mca_type_name[5]')
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_component.c:63: warning: initialization from incompatible pointer type
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_component.c:64: warning: initialization from incompatible pointer type
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_data_move.c: In function 'ompi_osc_pt2pt_sendreq_recv_accum':
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_data_move.c:730: error: 'ompi_win_t' has no member named 'w_baseptr'
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_component.c:72: warning: initialization from incompatible pointer type
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_data_move.c:731: error: 'ompi_win_t' has no member named 'w_disp_unit'osc_pt2pt_component.c:74: warning: initialization from incompatible pointer type
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_component.c:75: warning: initialization from incompatible pointer type
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_component.c:76: warning: initialization from incompatible pointer type
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_component.c:78: warning: initialization from incompatible pointer type
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_component.c:80: warning: initialization from incompatible pointer type
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_component.c:81: warning: initialization from incompatible pointer type
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_component.c:82: warning: initialization from incompatible pointer type
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_component.c:83: warning: initialization from incompatible pointer type
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_component.c:84: warning: initialization from incompatible pointer type
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_component.c:86: warning: initialization from incompatible pointer type
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_component.c:87: warning: initialization from incompatible pointer type
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_sync.c: In function 'ompi_osc_pt2pt_passive_unlock_complete':
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_sync.c:627: error: 'OMPI_WIN_EXPOSE_EPOCH' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; make[2]: *** [osc_pt2pt_comm.lo] Error 1
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_component.c: In function 'component_fragment_cb':
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_component.c:365: error: implicit declaration of function 'ompi_win_exposure_epoch'
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_component.c:366: error: 'OMPI_WIN_FENCE' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_component.c:366: error: (Each undeclared identifier is reported only once
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_component.c:366: error: for each function it appears in.)
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_component.c:366: error: implicit declaration of function 'ompi_win_get_mode'
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_component.c:367: error: implicit declaration of function 'ompi_win_set_mode'
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_component.c:369: error: 'OMPI_WIN_ACCESS_EPOCH' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_component.c:370: error: 'OMPI_WIN_EXPOSE_EPOCH' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; make[2]: *** [osc_pt2pt_sync.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: *** [osc_pt2pt_data_move.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: *** [osc_pt2pt_component.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/jenkins/slave-roots/master/ompi_upstream_v1.7_build_debug/ompi/mca/osc/pt2pt'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/jenkins/slave-roots/master/ompi_upstream_v1.7_build_debug/ompi'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; ----8&lt;----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Dave
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
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/03/14257.php">Ralph Castain: "[OMPI devel] v1.7.5rc1 posted"</a>
<li><strong>Previous message:</strong> <a href="14255.php">Dave Goodell (dgoodell): "[OMPI devel] Fwd: [OMPI svn] svn:open-mpi r30894 - in branches/v1.7: . ompi	ompi/attribute ompi/debuggers ompi/errhandler ompi/include	ompi/mca/btl ompi/mca/btl/openib/connect ompi/mca/op	ompi/mca/osc ompi/mca/osc/base ompi/mca/osc/portals4	ompi/mca/osc/rdma ompi/m..."</a>
<li><strong>In reply to:</strong> <a href="14255.php">Dave Goodell (dgoodell): "[OMPI devel] Fwd: [OMPI svn] svn:open-mpi r30894 - in branches/v1.7: . ompi	ompi/attribute ompi/debuggers ompi/errhandler ompi/include	ompi/mca/btl ompi/mca/btl/openib/connect ompi/mca/op	ompi/mca/osc ompi/mca/osc/base ompi/mca/osc/portals4	ompi/mca/osc/rdma ompi/m..."</a>
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
