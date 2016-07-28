<?
$subject_val = "Re: [OMPI devel] Trunk fails to build with --disable-dlopen";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 28 16:14:37 2014" -->
<!-- isoreceived="20140728201437" -->
<!-- sent="Mon, 28 Jul 2014 14:14:36 -0600" -->
<!-- isosent="20140728201436" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk fails to build with --disable-dlopen" -->
<!-- id="20140728201436.GB42150_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="372BD3D0-B290-4F96-B0EE-3E7CF0C8854D_at_open-mpi.org" -->
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
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-28 16:14:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15296.php">Nathan Hjelm: "Re: [OMPI devel] Trunk fails to build with --disable-dlopen"</a>
<li><strong>Previous message:</strong> <a href="15294.php">Ralph Castain: "Re: [OMPI devel] Trunk fails to build with --disable-dlopen"</a>
<li><strong>In reply to:</strong> <a href="15294.php">Ralph Castain: "Re: [OMPI devel] Trunk fails to build with --disable-dlopen"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15296.php">Nathan Hjelm: "Re: [OMPI devel] Trunk fails to build with --disable-dlopen"</a>
<li><strong>Reply:</strong> <a href="15296.php">Nathan Hjelm: "Re: [OMPI devel] Trunk fails to build with --disable-dlopen"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looks like you are correct. The function that calls the rml code is
<br>
mca_common_sm_init which is no longer called by anything (other than
<br>
mca_common_sm_init_group.. which isn't called either). Let me see if I
<br>
can fix this. I need this build working again with --disable-dlopen.
<br>
<p>mu-fey:/usr/projects/hpctools/hjelmn/ompi-trunk-git hjelmn$ find opal -name \*.[ch] | xargs grep mca_common_sm_init
<br>
opal/mca/common/sm/common_sm.c:mca_common_sm_init(opal_proc_t **procs,
<br>
opal/mca/common/sm/common_sm.c:mca_common_sm_init_group(ompi_group_t *group,
<br>
opal/mca/common/sm/common_sm.c:    /* let mca_common_sm_init take care of the rest ... */
<br>
opal/mca/common/sm/common_sm.c:    ret = mca_common_sm_init(procs, group_size, size, file_name,
<br>
opal/mca/common/sm/common_sm.h:mca_common_sm_init(opal_proc_t **procs,
<br>
opal/mca/common/sm/common_sm.h:mca_common_sm_init_group(ompi_group_t *group,
<br>
<p><p>On Mon, Jul 28, 2014 at 01:05:50PM -0700, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; I'm not sure the sm actually relies on the RML any more - I thought we had removed that dependency, though the file may not have been deleted.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 28, 2014, at 1:02 PM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The trunk is totally broken and it might not be easy to fix. I am seeing
</span><br>
<span class="quotelev2">&gt; &gt; this error when building with --disable-dlopen (the LANL default):
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; /usr/projects/hpctools/hjelmn/ompi-trunk-git/opal/mca/common/sm/common_sm_rml.c: In function 'mca_common_sm_rml_info_bcast':
</span><br>
<span class="quotelev2">&gt; &gt; /usr/projects/hpctools/hjelmn/ompi-trunk-git/opal/mca/common/sm/common_sm_rml.c:110: warning: passing argument 1 of 'orte_rml.send_buffer_nb' from incompatible pointer type
</span><br>
<span class="quotelev2">&gt; &gt; /usr/projects/hpctools/hjelmn/ompi-trunk-git/opal/mca/common/sm/common_sm_rml.c:110: note: expected 'struct orte_process_name_t *' but argument is of type 'opal_process_name_t *'
</span><br>
<span class="quotelev2">&gt; &gt; /usr/projects/hpctools/hjelmn/ompi-trunk-git/opal/mca/common/sm/common_sm_rml.c:127: warning: passing argument 1 of 'orte_rml.recv_buffer_nb' from incompatible pointer type
</span><br>
<span class="quotelev2">&gt; &gt; /usr/projects/hpctools/hjelmn/ompi-trunk-git/opal/mca/common/sm/common_sm_rml.c:127: note: expected 'struct orte_process_name_t *' but argument is of type 'opal_process_name_t *'
</span><br>
<span class="quotelev2">&gt; &gt; /usr/projects/hpctools/hjelmn/ompi-trunk-git/opal/runtime/opal_init.c:69:2: warning: #ident is a GCC extension
</span><br>
<span class="quotelev2">&gt; &gt; ../../../opal/.libs/libopen-pal.so: undefined reference to `orte_rml'
</span><br>
<span class="quotelev2">&gt; &gt; ../../../opal/.libs/libopen-pal.so: undefined reference to `orte_proc_is_bound'
</span><br>
<span class="quotelev2">&gt; &gt; ../../../opal/.libs/libopen-pal.so: undefined reference to `orte_rml_send_callback'
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; common/sm relies on the RML for some communication. This will have to be
</span><br>
<span class="quotelev2">&gt; &gt; rewritten to get it to work.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -Nathan
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15292.php">http://www.open-mpi.org/community/lists/devel/2014/07/15292.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15294.php">http://www.open-mpi.org/community/lists/devel/2014/07/15294.php</a>
</span><br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15295/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15296.php">Nathan Hjelm: "Re: [OMPI devel] Trunk fails to build with --disable-dlopen"</a>
<li><strong>Previous message:</strong> <a href="15294.php">Ralph Castain: "Re: [OMPI devel] Trunk fails to build with --disable-dlopen"</a>
<li><strong>In reply to:</strong> <a href="15294.php">Ralph Castain: "Re: [OMPI devel] Trunk fails to build with --disable-dlopen"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15296.php">Nathan Hjelm: "Re: [OMPI devel] Trunk fails to build with --disable-dlopen"</a>
<li><strong>Reply:</strong> <a href="15296.php">Nathan Hjelm: "Re: [OMPI devel] Trunk fails to build with --disable-dlopen"</a>
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
