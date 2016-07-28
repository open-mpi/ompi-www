<?
$subject_val = "Re: [OMPI devel] v1.7 is broken";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  5 05:50:12 2013" -->
<!-- isoreceived="20131105105012" -->
<!-- sent="Tue, 5 Nov 2013 02:50:10 -0800" -->
<!-- isosent="20131105105010" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.7 is broken" -->
<!-- id="CAMD57oeMgc3ZzxF6CwAGb7HS56jh2cc2KQOGLmEcX7WD3XswLw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAMD57odfJSNQpUTQ3Q4hFdNnoGF1rot++eDGcUr6cjvBJ+0TKA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] v1.7 is broken<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-05 05:50:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13186.php">George Bosilca: "Re: [OMPI devel] [OMPI bugs] [Open MPI] #3885: Move r29608 to v1.7 branch (Fix C++11 issue identified by)"</a>
<li><strong>Previous message:</strong> <a href="13184.php">Ralph Castain: "Re: [OMPI devel] v1.7 is broken"</a>
<li><strong>In reply to:</strong> <a href="13184.php">Ralph Castain: "Re: [OMPI devel] v1.7 is broken"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
One thing that might help these problems: could you please complete the
<br>
move from openib/connect to common/ofacm? It is a little frustrating to
<br>
have to maintain two duplicate codes that are literally copy/paste versions
<br>
of each other.
<br>
<p>I'd be happy to approve the CMR when available.
<br>
<p><p><p>On Tue, Nov 5, 2013 at 2:46 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I'll have to fix it when I return on Wed - trivial fix. Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Nov 4, 2013 at 10:27 PM, Mike Dubman &lt;miked_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; The latest merges from trunk to v1.7 broke v1.7  for openib:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *08:08:36* btl_openib_xrc.c:80: warning: 'ibv_close_xrc_domain' is deprecated (declared at /usr/include/infiniband/ofa_verbs.h:102)*08:08:36*   CC       btl_openib_fd.lo*08:08:36*   CC       btl_openib_ip.lo*08:08:36*   CC       connect/btl_openib_connect_base.lo*08:08:36*   CC       connect/btl_openib_connect_oob.lo*08:08:37*   CC       connect/btl_openib_connect_empty.lo*08:08:37*   CC       connect/btl_openib_connect_xoob.lo*08:08:37* connect/btl_openib_connect_xoob.c:359:35: error: macro &quot;ompi_rte_send_buffer_nb&quot; passed 6 arguments, but takes just 5*08:08:37* connect/btl_openib_connect_xoob.c: In function 'xoob_send_connect_data':*08:08:37* connect/btl_openib_connect_xoob.c:357: error: 'ompi_rte_send_buffer_nb' undeclared (first use in this function)*08:08:37* connect/btl_openib_connect_xoob.c:357: error: (Each undeclared identifier is reported only once*08:08:37* connect/btl_openib_connect_xoob.c:357: error: for each function it appears in.)*08:08:37* connect/btl_openib_connect_xoob.c: In function 'xoob_recv_qp_create':*08:08:37* connect/btl_openib_connect_xoob.c:560: warning: 'ibv_create_xrc_rcv_qp' is deprecated (declared at /usr/include/infiniband/ofa_verbs.h:126)*08:08:37* connect/btl_openib_connect_xoob.c:572: warning: 'ibv_modify_xrc_rcv_qp' is deprecated (declared at /usr/include/infiniband/ofa_verbs.h:152)*08:08:37* connect/btl_openib_connect_xoob.c:616: warning: 'ibv_modify_xrc_rcv_qp' is deprecated (declared at /usr/include/infiniband/ofa_verbs.h:152)*08:08:37* connect/btl_openib_connect_xoob.c: In function 'xoob_recv_qp_connect':*08:08:37* connect/btl_openib_connect_xoob.c:649: warning: 'ibv_reg_xrc_rcv_qp' is deprecated (declared at /usr/include/infiniband/ofa_verbs.h:185)*08:08:37* connect/btl_openib_connect_xoob.c: In function 'xoob_component_query':*08:08:37* connect/btl_openib_connect_xoob.c:1027: error: void value not ignored as it ought to be*08:08:37* make[2]: *** [connect/btl_openib_connect_xoob.lo] Error 1*08:08:37* make[2]: Leaving directory `/scrap/jenkins/scrap/workspace/hpc-ompi-shmem_at_3/label/hpc-test-node/ompi/mca/btl/openib'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; M
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13185/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13186.php">George Bosilca: "Re: [OMPI devel] [OMPI bugs] [Open MPI] #3885: Move r29608 to v1.7 branch (Fix C++11 issue identified by)"</a>
<li><strong>Previous message:</strong> <a href="13184.php">Ralph Castain: "Re: [OMPI devel] v1.7 is broken"</a>
<li><strong>In reply to:</strong> <a href="13184.php">Ralph Castain: "Re: [OMPI devel] v1.7 is broken"</a>
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
