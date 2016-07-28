<?
$subject_val = "Re: [OMPI devel] Common symbols warning";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 15 00:02:50 2015" -->
<!-- isoreceived="20150415040250" -->
<!-- sent="Wed, 15 Apr 2015 13:02:37 +0900" -->
<!-- isosent="20150415040237" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Common symbols warning" -->
<!-- id="552DE2DD.8090507_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="521B8753-76E8-4003-8D5B-F8F38BED5E6C_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Common symbols warning<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-15 00:02:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17223.php">Cyrille DIBAMOU MBEUYO: "Re: [OMPI devel] segmentation fault"</a>
<li><strong>Previous message:</strong> <a href="17221.php">Ralph Castain: "Re: [OMPI devel] segmentation fault"</a>
<li><strong>In reply to:</strong> <a href="17220.php">Ralph Castain: "[OMPI devel] Common symbols warning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17228.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Common symbols warning"</a>
<li><strong>Reply:</strong> <a href="17228.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Common symbols warning"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dave,
<br>
<p>my understanding is that the presence of common symbols should be 
<br>
treated as a warning
<br>
(and hence make install should not fail)
<br>
<p>makes sense ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 4/15/2015 12:14 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Dave committed this earlier today, and here is the first error report:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WARNING! Common symbols found:
</span><br>
<span class="quotelev1">&gt; comm_request.o: 0000000000000068 C ompi_comm_request_mutex
</span><br>
<span class="quotelev1">&gt; comm_request.o: 0000000000000001 C ompi_comm_request_progress_active
</span><br>
<span class="quotelev1">&gt; comm_request.o: 0000000000000210 C ompi_comm_requests
</span><br>
<span class="quotelev1">&gt; comm_request.o: 0000000000000078 C ompi_comm_requests_active
</span><br>
<span class="quotelev1">&gt; comm_init.o: 00000000000000b0 C ompi_comm_f_to_c_table
</span><br>
<span class="quotelev1">&gt; comm_init.o: 0000000000000600 C ompi_mpi_comm_null
</span><br>
<span class="quotelev1">&gt; comm_init.o: 0000000000000008 C ompi_mpi_comm_parent
</span><br>
<span class="quotelev1">&gt; comm_init.o: 0000000000000600 C ompi_mpi_comm_self
</span><br>
<span class="quotelev1">&gt; comm_init.o: 00000000000000b0 C ompi_mpi_communicators
</span><br>
<span class="quotelev1">&gt; comm_init.o: 0000000000000600 C ompi_mpi_comm_world
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Would someone like to fix these?
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17220.php">http://www.open-mpi.org/community/lists/devel/2015/04/17220.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17222/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17223.php">Cyrille DIBAMOU MBEUYO: "Re: [OMPI devel] segmentation fault"</a>
<li><strong>Previous message:</strong> <a href="17221.php">Ralph Castain: "Re: [OMPI devel] segmentation fault"</a>
<li><strong>In reply to:</strong> <a href="17220.php">Ralph Castain: "[OMPI devel] Common symbols warning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17228.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Common symbols warning"</a>
<li><strong>Reply:</strong> <a href="17228.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Common symbols warning"</a>
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
