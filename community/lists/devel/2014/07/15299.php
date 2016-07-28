<?
$subject_val = "Re: [OMPI devel] Trunk fails to build with --disable-dlopen";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 28 18:00:50 2014" -->
<!-- isoreceived="20140728220050" -->
<!-- sent="Mon, 28 Jul 2014 16:00:47 -0600" -->
<!-- isosent="20140728220047" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk fails to build with --disable-dlopen" -->
<!-- id="20140728220047.GB43566_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140728204137.GD42150_at_pn1246003.lanl.gov" -->
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
<strong>Date:</strong> 2014-07-28 18:00:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15300.php">Pritchard Jr., Howard: "[OMPI devel] opal_config_bottom.h problem with trunk"</a>
<li><strong>Previous message:</strong> <a href="15298.php">Nathan Hjelm: "Re: [OMPI devel] Trunk fails to build with --disable-dlopen"</a>
<li><strong>In reply to:</strong> <a href="15298.php">Nathan Hjelm: "Re: [OMPI devel] Trunk fails to build with --disable-dlopen"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok, got --disable-dlopen working again. I removed the code in question
<br>
and changed how coll/sm shares the segment data.
<br>
<p>-Nathan
<br>
<p>On Mon, Jul 28, 2014 at 02:41:37PM -0600, Nathan Hjelm wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Or pull it into coll/sm. Though I think we can do better here since
</span><br>
<span class="quotelev1">&gt; point-to-point messaging can be used in coll/sm. We can use the
</span><br>
<span class="quotelev1">&gt; netpatterns code to share the segment information.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Jul 28, 2014 at 08:37:15PM +0000, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Perhaps that RML code can go back up in ompi/common/sm...?  (since only ompi/coll/sm uses it)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Jul 28, 2014, at 4:34 PM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Damn, spoke too soon. coll/sm uses it:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ./ompi/mca/coll/sm/coll_sm_module.c:        mca_common_sm_init_group(comm-&gt;c_local_group, size, fullpath,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ./ompi/mca/coll/sm/coll_sm_module.c:                            &quot;coll:sm:enable:bootstrap comm (%d/%s): mca_common_sm_init_group failed&quot;, 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Let me see if I can resolve that one.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -Nathan
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Mon, Jul 28, 2014 at 02:14:36PM -0600, Nathan Hjelm wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Looks like you are correct. The function that calls the rml code is
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; mca_common_sm_init which is no longer called by anything (other than
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; mca_common_sm_init_group.. which isn't called either). Let me see if I
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; can fix this. I need this build working again with --disable-dlopen.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; mu-fey:/usr/projects/hpctools/hjelmn/ompi-trunk-git hjelmn$ find opal -name \*.[ch] | xargs grep mca_common_sm_init
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; opal/mca/common/sm/common_sm.c:mca_common_sm_init(opal_proc_t **procs,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; opal/mca/common/sm/common_sm.c:mca_common_sm_init_group(ompi_group_t *group,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; opal/mca/common/sm/common_sm.c:    /* let mca_common_sm_init take care of the rest ... */
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; opal/mca/common/sm/common_sm.c:    ret = mca_common_sm_init(procs, group_size, size, file_name,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; opal/mca/common/sm/common_sm.h:mca_common_sm_init(opal_proc_t **procs,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; opal/mca/common/sm/common_sm.h:mca_common_sm_init_group(ompi_group_t *group,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; On Mon, Jul 28, 2014 at 01:05:50PM -0700, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; I'm not sure the sm actually relies on the RML any more - I thought we had removed that dependency, though the file may not have been deleted.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; On Jul 28, 2014, at 1:02 PM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; The trunk is totally broken and it might not be easy to fix. I am seeing
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; this error when building with --disable-dlopen (the LANL default):
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; /usr/projects/hpctools/hjelmn/ompi-trunk-git/opal/mca/common/sm/common_sm_rml.c: In function 'mca_common_sm_rml_info_bcast':
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; /usr/projects/hpctools/hjelmn/ompi-trunk-git/opal/mca/common/sm/common_sm_rml.c:110: warning: passing argument 1 of 'orte_rml.send_buffer_nb' from incompatible pointer type
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; /usr/projects/hpctools/hjelmn/ompi-trunk-git/opal/mca/common/sm/common_sm_rml.c:110: note: expected 'struct orte_process_name_t *' but argument is of type 'opal_process_name_t *'
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; /usr/projects/hpctools/hjelmn/ompi-trunk-git/opal/mca/common/sm/common_sm_rml.c:127: warning: passing argument 1 of 'orte_rml.recv_buffer_nb' from incompatible pointer type
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; /usr/projects/hpctools/hjelmn/ompi-trunk-git/opal/mca/common/sm/common_sm_rml.c:127: note: expected 'struct orte_process_name_t *' but argument is of type 'opal_process_name_t *'
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; /usr/projects/hpctools/hjelmn/ompi-trunk-git/opal/runtime/opal_init.c:69:2: warning: #ident is a GCC extension
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; ../../../opal/.libs/libopen-pal.so: undefined reference to `orte_rml'
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; ../../../opal/.libs/libopen-pal.so: undefined reference to `orte_proc_is_bound'
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; ../../../opal/.libs/libopen-pal.so: undefined reference to `orte_rml_send_callback'
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; common/sm relies on the RML for some communication. This will have to be
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; rewritten to get it to work.
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; -Nathan
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15292.php">http://www.open-mpi.org/community/lists/devel/2014/07/15292.php</a>
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15294.php">http://www.open-mpi.org/community/lists/devel/2014/07/15294.php</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15295.php">http://www.open-mpi.org/community/lists/devel/2014/07/15295.php</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15296.php">http://www.open-mpi.org/community/lists/devel/2014/07/15296.php</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -- 
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15297.php">http://www.open-mpi.org/community/lists/devel/2014/07/15297.php</a>
</span><br>
<p><p><p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15298.php">http://www.open-mpi.org/community/lists/devel/2014/07/15298.php</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15299/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15300.php">Pritchard Jr., Howard: "[OMPI devel] opal_config_bottom.h problem with trunk"</a>
<li><strong>Previous message:</strong> <a href="15298.php">Nathan Hjelm: "Re: [OMPI devel] Trunk fails to build with --disable-dlopen"</a>
<li><strong>In reply to:</strong> <a href="15298.php">Nathan Hjelm: "Re: [OMPI devel] Trunk fails to build with --disable-dlopen"</a>
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
