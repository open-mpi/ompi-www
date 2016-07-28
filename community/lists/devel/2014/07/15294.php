<?
$subject_val = "Re: [OMPI devel] Trunk fails to build with --disable-dlopen";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 28 16:07:23 2014" -->
<!-- isoreceived="20140728200723" -->
<!-- sent="Mon, 28 Jul 2014 13:05:50 -0700" -->
<!-- isosent="20140728200550" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk fails to build with --disable-dlopen" -->
<!-- id="372BD3D0-B290-4F96-B0EE-3E7CF0C8854D_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140728200239.GA42150_at_pn1246003.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Trunk fails to build with --disable-dlopen<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-28 16:05:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15295.php">Nathan Hjelm: "Re: [OMPI devel] Trunk fails to build with --disable-dlopen"</a>
<li><strong>Previous message:</strong> <a href="15293.php">George Bosilca: "Re: [OMPI devel] Trunk fails to build with --disable-dlopen"</a>
<li><strong>In reply to:</strong> <a href="15292.php">Nathan Hjelm: "[OMPI devel] Trunk fails to build with --disable-dlopen"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15295.php">Nathan Hjelm: "Re: [OMPI devel] Trunk fails to build with --disable-dlopen"</a>
<li><strong>Reply:</strong> <a href="15295.php">Nathan Hjelm: "Re: [OMPI devel] Trunk fails to build with --disable-dlopen"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm not sure the sm actually relies on the RML any more - I thought we had removed that dependency, though the file may not have been deleted.
<br>
<p>On Jul 28, 2014, at 1:02 PM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The trunk is totally broken and it might not be easy to fix. I am seeing
</span><br>
<span class="quotelev1">&gt; this error when building with --disable-dlopen (the LANL default):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/projects/hpctools/hjelmn/ompi-trunk-git/opal/mca/common/sm/common_sm_rml.c: In function 'mca_common_sm_rml_info_bcast':
</span><br>
<span class="quotelev1">&gt; /usr/projects/hpctools/hjelmn/ompi-trunk-git/opal/mca/common/sm/common_sm_rml.c:110: warning: passing argument 1 of 'orte_rml.send_buffer_nb' from incompatible pointer type
</span><br>
<span class="quotelev1">&gt; /usr/projects/hpctools/hjelmn/ompi-trunk-git/opal/mca/common/sm/common_sm_rml.c:110: note: expected 'struct orte_process_name_t *' but argument is of type 'opal_process_name_t *'
</span><br>
<span class="quotelev1">&gt; /usr/projects/hpctools/hjelmn/ompi-trunk-git/opal/mca/common/sm/common_sm_rml.c:127: warning: passing argument 1 of 'orte_rml.recv_buffer_nb' from incompatible pointer type
</span><br>
<span class="quotelev1">&gt; /usr/projects/hpctools/hjelmn/ompi-trunk-git/opal/mca/common/sm/common_sm_rml.c:127: note: expected 'struct orte_process_name_t *' but argument is of type 'opal_process_name_t *'
</span><br>
<span class="quotelev1">&gt; /usr/projects/hpctools/hjelmn/ompi-trunk-git/opal/runtime/opal_init.c:69:2: warning: #ident is a GCC extension
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.so: undefined reference to `orte_rml'
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.so: undefined reference to `orte_proc_is_bound'
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.so: undefined reference to `orte_rml_send_callback'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; common/sm relies on the RML for some communication. This will have to be
</span><br>
<span class="quotelev1">&gt; rewritten to get it to work.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15292.php">http://www.open-mpi.org/community/lists/devel/2014/07/15292.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15295.php">Nathan Hjelm: "Re: [OMPI devel] Trunk fails to build with --disable-dlopen"</a>
<li><strong>Previous message:</strong> <a href="15293.php">George Bosilca: "Re: [OMPI devel] Trunk fails to build with --disable-dlopen"</a>
<li><strong>In reply to:</strong> <a href="15292.php">Nathan Hjelm: "[OMPI devel] Trunk fails to build with --disable-dlopen"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15295.php">Nathan Hjelm: "Re: [OMPI devel] Trunk fails to build with --disable-dlopen"</a>
<li><strong>Reply:</strong> <a href="15295.php">Nathan Hjelm: "Re: [OMPI devel] Trunk fails to build with --disable-dlopen"</a>
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
