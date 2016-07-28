<?
$subject_val = "[OMPI devel] Trunk fails to build with --disable-dlopen";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 28 16:02:40 2014" -->
<!-- isoreceived="20140728200240" -->
<!-- sent="Mon, 28 Jul 2014 14:02:39 -0600" -->
<!-- isosent="20140728200239" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="[OMPI devel] Trunk fails to build with --disable-dlopen" -->
<!-- id="20140728200239.GA42150_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] Trunk fails to build with --disable-dlopen<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-28 16:02:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15293.php">George Bosilca: "Re: [OMPI devel] Trunk fails to build with --disable-dlopen"</a>
<li><strong>Previous message:</strong> <a href="15291.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] opal_process_info.job_session_dir: &quot;not	yet	defined&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15293.php">George Bosilca: "Re: [OMPI devel] Trunk fails to build with --disable-dlopen"</a>
<li><strong>Reply:</strong> <a href="15293.php">George Bosilca: "Re: [OMPI devel] Trunk fails to build with --disable-dlopen"</a>
<li><strong>Reply:</strong> <a href="15294.php">Ralph Castain: "Re: [OMPI devel] Trunk fails to build with --disable-dlopen"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The trunk is totally broken and it might not be easy to fix. I am seeing
<br>
this error when building with --disable-dlopen (the LANL default):
<br>
<p>/usr/projects/hpctools/hjelmn/ompi-trunk-git/opal/mca/common/sm/common_sm_rml.c: In function 'mca_common_sm_rml_info_bcast':
<br>
/usr/projects/hpctools/hjelmn/ompi-trunk-git/opal/mca/common/sm/common_sm_rml.c:110: warning: passing argument 1 of 'orte_rml.send_buffer_nb' from incompatible pointer type
<br>
/usr/projects/hpctools/hjelmn/ompi-trunk-git/opal/mca/common/sm/common_sm_rml.c:110: note: expected 'struct orte_process_name_t *' but argument is of type 'opal_process_name_t *'
<br>
/usr/projects/hpctools/hjelmn/ompi-trunk-git/opal/mca/common/sm/common_sm_rml.c:127: warning: passing argument 1 of 'orte_rml.recv_buffer_nb' from incompatible pointer type
<br>
/usr/projects/hpctools/hjelmn/ompi-trunk-git/opal/mca/common/sm/common_sm_rml.c:127: note: expected 'struct orte_process_name_t *' but argument is of type 'opal_process_name_t *'
<br>
/usr/projects/hpctools/hjelmn/ompi-trunk-git/opal/runtime/opal_init.c:69:2: warning: #ident is a GCC extension
<br>
../../../opal/.libs/libopen-pal.so: undefined reference to `orte_rml'
<br>
../../../opal/.libs/libopen-pal.so: undefined reference to `orte_proc_is_bound'
<br>
../../../opal/.libs/libopen-pal.so: undefined reference to `orte_rml_send_callback'
<br>
<p><p>common/sm relies on the RML for some communication. This will have to be
<br>
rewritten to get it to work.
<br>
<p>-Nathan
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15292/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15293.php">George Bosilca: "Re: [OMPI devel] Trunk fails to build with --disable-dlopen"</a>
<li><strong>Previous message:</strong> <a href="15291.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] opal_process_info.job_session_dir: &quot;not	yet	defined&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15293.php">George Bosilca: "Re: [OMPI devel] Trunk fails to build with --disable-dlopen"</a>
<li><strong>Reply:</strong> <a href="15293.php">George Bosilca: "Re: [OMPI devel] Trunk fails to build with --disable-dlopen"</a>
<li><strong>Reply:</strong> <a href="15294.php">Ralph Castain: "Re: [OMPI devel] Trunk fails to build with --disable-dlopen"</a>
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
