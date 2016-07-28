<?
$subject_val = "Re: [OMPI devel] Trunk (RDMA and VT) warnings";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 28 08:53:10 2014" -->
<!-- isoreceived="20140528125310" -->
<!-- sent="Wed, 28 May 2014 05:53:06 -0700" -->
<!-- isosent="20140528125306" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk (RDMA and VT) warnings" -->
<!-- id="F3A0FA4C-B322-4EE9-A829-476DD2DBCF05_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAkFZ5tJoPRvGCac2wcSsRhFgk8=K7m74uk664XU1caWC+LDnA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Trunk (RDMA and VT) warnings<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-28 08:53:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14890.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>Previous message:</strong> <a href="14888.php">Ralph Castain: "Re: [OMPI devel] some info is not pushed into the dstore"</a>
<li><strong>In reply to:</strong> <a href="14880.php">Gilles Gouaillardet: "Re: [OMPI devel] Trunk (RDMA and VT) warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14902.php">Gilles Gouaillardet: "Re: [OMPI devel] Trunk (RDMA and VT) warnings"</a>
<li><strong>Reply:</strong> <a href="14902.php">Gilles Gouaillardet: "Re: [OMPI devel] Trunk (RDMA and VT) warnings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
gcc (GCC) 4.4.7 20120313 (Red Hat 4.4.7-4)
<br>
&nbsp;./configure --prefix=/home/common/openmpi/build/svn-trunk --enable-mpi-java --enable-orterun-prefix-by-default
<br>
<p>More inline below
<br>
<p>On May 27, 2014, at 9:29 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; can you please describe your environment (at least compiler (and version) + configure command line)
</span><br>
<span class="quotelev1">&gt; i checked osc_rdma_data_move.c only :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; size_t incoming_length; is used to improve readability.
</span><br>
<span class="quotelev1">&gt; it is used only in an assert clause and in OPAL_OUTPUT_VERBOSE
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; one way to silence the warning is not to use this variable (and compromise readability).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; an other way would be to
</span><br>
<span class="quotelev1">&gt; #if OPAL_ENABLE_DEBUG
</span><br>
<span class="quotelev1">&gt; size_t incoming_length = request-&gt;req_status._ucount);
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; imho, a more elegant way would be to use a macro like
</span><br>
<span class="quotelev1">&gt; OPAL_IF_DEBUG(size_t incoming_length = request-&gt;req_status._ucount);)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /* i am not aware of such a macro, please point me if it already exists */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; any thoughts ?
</span><br>
<p>I'm unaware of such a macro, but could see the value in creating one - though I must admit, this problem hasn't come up very often. Your choice - either way (surround it with #if or create a macro) is fine with me.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; about the other warnings, xxx may be used uninitialized in this function, i was unable to reproduce it and i have to double check again.
</span><br>
<span class="quotelev1">&gt; so far, it seems this is a false positive/compiler bug that could be triggered by inlining
</span><br>
<span class="quotelev1">&gt; /* i could not find any path in which the variable is used unitialized */
</span><br>
<p>I just glanced at the first one (line 221 of osc_rdma_data_move.c), and I can see what the compiler is complaining about - have gotten this in other places as well. The problem is that you pass the address of ptr into a function without first initializing the value of ptr itself. There is no guarantee (so far as the compiler can see) that this function will in fact set the value of ptr - you are relying solely on the fact that (a) you checked that function at one point in time and saw that it always gets set to something if ret == OMPI_SUCCESS, and (b) nobody changed that function since you checked.
<br>
<p>Newer compilers seem to be getting more defensive about such things and starting to &quot;bark&quot; when they see it. I think you are correct that inlining also impacts that situation, though I've also been seeing it when the functions aren't inlined.
<br>
<p>Not sure what to suggest here - hate to add initialization steps in that sequence....
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, May 26, 2014 at 12:25 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Building optimized on an IB-based machine:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; osc_rdma_data_move.c: In function 'ompi_osc_rdma_callback':
</span><br>
<span class="quotelev1">&gt; osc_rdma_data_move.c:1633: warning: unused variable 'incoming_length'
</span><br>
<span class="quotelev1">&gt; osc_rdma_data_move.c: In function 'ompi_osc_rdma_control_send':
</span><br>
<span class="quotelev1">&gt; osc_rdma_data_move.c:221: warning: 'ptr' may be used uninitialized in this function
</span><br>
<span class="quotelev1">&gt; osc_rdma_data_move.c:220: warning: 'frag' may be used uninitialized in this function
</span><br>
<span class="quotelev1">&gt; osc_rdma_data_move.c: In function 'ompi_osc_gacc_long_start':
</span><br>
<span class="quotelev1">&gt; osc_rdma_data_move.c:961: warning: 'acc_data' may be used uninitialized in this function
</span><br>
<span class="quotelev1">&gt; osc_rdma_data_move.c: In function 'ompi_osc_rdma_gacc_start':
</span><br>
<span class="quotelev1">&gt; osc_rdma_data_move.c:912: warning: 'acc_data' may be used uninitialized in this function
</span><br>
<span class="quotelev1">&gt; osc_rdma_comm.c: In function 'ompi_osc_rdma_rget_accumulate_internal':
</span><br>
<span class="quotelev1">&gt; osc_rdma_comm.c:943: warning: 'ptr' may be used uninitialized in this function
</span><br>
<span class="quotelev1">&gt; osc_rdma_comm.c:940: warning: 'frag' may be used uninitialized in this function
</span><br>
<span class="quotelev1">&gt; osc_rdma_data_move.c: In function 'ompi_osc_rdma_acc_long_start':
</span><br>
<span class="quotelev1">&gt; osc_rdma_data_move.c:827: warning: 'acc_data' may be used uninitialized in this function
</span><br>
<span class="quotelev1">&gt; osc_rdma_comm.c: In function 'ompi_osc_rdma_rget':
</span><br>
<span class="quotelev1">&gt; osc_rdma_comm.c:736: warning: 'ptr' may be used uninitialized in this function
</span><br>
<span class="quotelev1">&gt; osc_rdma_comm.c:733: warning: 'frag' may be used uninitialized in this function
</span><br>
<span class="quotelev1">&gt; osc_rdma_comm.c: In function 'ompi_osc_rdma_accumulate_w_req':
</span><br>
<span class="quotelev1">&gt; osc_rdma_comm.c:420: warning: 'ptr' may be used uninitialized in this function
</span><br>
<span class="quotelev1">&gt; osc_rdma_comm.c:417: warning: 'frag' may be used uninitialized in this function
</span><br>
<span class="quotelev1">&gt; osc_rdma_comm.c: In function 'ompi_osc_rdma_put_w_req':
</span><br>
<span class="quotelev1">&gt; osc_rdma_comm.c:251: warning: 'ptr' may be used uninitialized in this function
</span><br>
<span class="quotelev1">&gt; osc_rdma_comm.c:244: warning: 'frag' may be used uninitialized in this function
</span><br>
<span class="quotelev1">&gt; osc_rdma_comm.c: In function 'ompi_osc_rdma_get':
</span><br>
<span class="quotelev1">&gt; osc_rdma_comm.c:736: warning: 'ptr' may be used uninitialized in this function
</span><br>
<span class="quotelev1">&gt; osc_rdma_comm.c:733: warning: 'frag' may be used uninitialized in this function
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; vt_plugin_cntr.c: In function 'vt_plugin_cntr_write_post_mortem':
</span><br>
<span class="quotelev1">&gt; vt_plugin_cntr.c:1139: warning: 'min_counter' may be used uninitialized in this function
</span><br>
<span class="quotelev1">&gt; vt_plugin_cntr.c: In function 'vt_plugin_cntr_write_post_mortem':
</span><br>
<span class="quotelev1">&gt; vt_plugin_cntr.c:1139: warning: 'min_counter' may be used uninitialized in this function
</span><br>
<span class="quotelev1">&gt; vt_plugin_cntr.c: In function 'vt_plugin_cntr_write_post_mortem':
</span><br>
<span class="quotelev1">&gt; vt_plugin_cntr.c:1139: warning: 'min_counter' may be used uninitialized in this function
</span><br>
<span class="quotelev1">&gt; vt_plugin_cntr.c: In function 'vt_plugin_cntr_write_post_mortem':
</span><br>
<span class="quotelev1">&gt; vt_plugin_cntr.c:1139: warning: 'min_counter' may be used uninitialized in this function
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14840.php">http://www.open-mpi.org/community/lists/devel/2014/05/14840.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14880.php">http://www.open-mpi.org/community/lists/devel/2014/05/14880.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14889/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14890.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>Previous message:</strong> <a href="14888.php">Ralph Castain: "Re: [OMPI devel] some info is not pushed into the dstore"</a>
<li><strong>In reply to:</strong> <a href="14880.php">Gilles Gouaillardet: "Re: [OMPI devel] Trunk (RDMA and VT) warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14902.php">Gilles Gouaillardet: "Re: [OMPI devel] Trunk (RDMA and VT) warnings"</a>
<li><strong>Reply:</strong> <a href="14902.php">Gilles Gouaillardet: "Re: [OMPI devel] Trunk (RDMA and VT) warnings"</a>
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
