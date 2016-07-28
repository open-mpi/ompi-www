<?
$subject_val = "Re: [OMPI devel] Trunk fails to build with --disable-dlopen";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 28 16:07:02 2014" -->
<!-- isoreceived="20140728200702" -->
<!-- sent="Mon, 28 Jul 2014 16:06:58 -0400" -->
<!-- isosent="20140728200658" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk fails to build with --disable-dlopen" -->
<!-- id="CAMJJpkVU=MjXVnGfvugS+1G-1LZBdmYPDfYj2GecW8uhdB5rMw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-28 16:06:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15294.php">Ralph Castain: "Re: [OMPI devel] Trunk fails to build with --disable-dlopen"</a>
<li><strong>Previous message:</strong> <a href="15292.php">Nathan Hjelm: "[OMPI devel] Trunk fails to build with --disable-dlopen"</a>
<li><strong>In reply to:</strong> <a href="15292.php">Nathan Hjelm: "[OMPI devel] Trunk fails to build with --disable-dlopen"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15294.php">Ralph Castain: "Re: [OMPI devel] Trunk fails to build with --disable-dlopen"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This has been clear from day one: everything based on RML to setup will
<br>
need to be rewritten. This is not only SM, it also related to IB.
<br>
Meanwhile, one must build with dlopen enabled in order to get access to
<br>
these calls.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p><p>On Mon, Jul 28, 2014 at 4:02 PM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The trunk is totally broken and it might not be easy to fix. I am seeing
</span><br>
<span class="quotelev1">&gt; this error when building with --disable-dlopen (the LANL default):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /usr/projects/hpctools/hjelmn/ompi-trunk-git/opal/mca/common/sm/common_sm_rml.c:
</span><br>
<span class="quotelev1">&gt; In function 'mca_common_sm_rml_info_bcast':
</span><br>
<span class="quotelev1">&gt; /usr/projects/hpctools/hjelmn/ompi-trunk-git/opal/mca/common/sm/common_sm_rml.c:110:
</span><br>
<span class="quotelev1">&gt; warning: passing argument 1 of 'orte_rml.send_buffer_nb' from incompatible
</span><br>
<span class="quotelev1">&gt; pointer type
</span><br>
<span class="quotelev1">&gt; /usr/projects/hpctools/hjelmn/ompi-trunk-git/opal/mca/common/sm/common_sm_rml.c:110:
</span><br>
<span class="quotelev1">&gt; note: expected 'struct orte_process_name_t *' but argument is of type
</span><br>
<span class="quotelev1">&gt; 'opal_process_name_t *'
</span><br>
<span class="quotelev1">&gt; /usr/projects/hpctools/hjelmn/ompi-trunk-git/opal/mca/common/sm/common_sm_rml.c:127:
</span><br>
<span class="quotelev1">&gt; warning: passing argument 1 of 'orte_rml.recv_buffer_nb' from incompatible
</span><br>
<span class="quotelev1">&gt; pointer type
</span><br>
<span class="quotelev1">&gt; /usr/projects/hpctools/hjelmn/ompi-trunk-git/opal/mca/common/sm/common_sm_rml.c:127:
</span><br>
<span class="quotelev1">&gt; note: expected 'struct orte_process_name_t *' but argument is of type
</span><br>
<span class="quotelev1">&gt; 'opal_process_name_t *'
</span><br>
<span class="quotelev1">&gt; /usr/projects/hpctools/hjelmn/ompi-trunk-git/opal/runtime/opal_init.c:69:2:
</span><br>
<span class="quotelev1">&gt; warning: #ident is a GCC extension
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.so: undefined reference to `orte_rml'
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.so: undefined reference to
</span><br>
<span class="quotelev1">&gt; `orte_proc_is_bound'
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.so: undefined reference to
</span><br>
<span class="quotelev1">&gt; `orte_rml_send_callback'
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15292.php">http://www.open-mpi.org/community/lists/devel/2014/07/15292.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15293/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15294.php">Ralph Castain: "Re: [OMPI devel] Trunk fails to build with --disable-dlopen"</a>
<li><strong>Previous message:</strong> <a href="15292.php">Nathan Hjelm: "[OMPI devel] Trunk fails to build with --disable-dlopen"</a>
<li><strong>In reply to:</strong> <a href="15292.php">Nathan Hjelm: "[OMPI devel] Trunk fails to build with --disable-dlopen"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15294.php">Ralph Castain: "Re: [OMPI devel] Trunk fails to build with --disable-dlopen"</a>
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
