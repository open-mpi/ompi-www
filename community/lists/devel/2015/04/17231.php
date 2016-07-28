<?
$subject_val = "Re: [OMPI devel] Common symbols warning";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 15 12:02:52 2015" -->
<!-- isoreceived="20150415160252" -->
<!-- sent="Wed, 15 Apr 2015 09:02:48 -0700" -->
<!-- isosent="20150415160248" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Common symbols warning" -->
<!-- id="CAE2D8A4-A5EF-44AE-A517-3929B00F6D47_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20150415155518.GG21644_at_pn1246003.lanl.gov" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-15 12:02:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17232.php">Nathan Hjelm: "Re: [OMPI devel] Common symbols warning"</a>
<li><strong>Previous message:</strong> <a href="17230.php">Nathan Hjelm: "Re: [OMPI devel] Common symbols warning"</a>
<li><strong>In reply to:</strong> <a href="17230.php">Nathan Hjelm: "Re: [OMPI devel] Common symbols warning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17232.php">Nathan Hjelm: "Re: [OMPI devel] Common symbols warning"</a>
<li><strong>Reply:</strong> <a href="17232.php">Nathan Hjelm: "Re: [OMPI devel] Common symbols warning"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW: Gilles has a pending PR that fixes all of these
<br>
<p>&nbsp;<a href="https://github.com/open-mpi/ompi/pull/530">https://github.com/open-mpi/ompi/pull/530</a> &lt;<a href="https://github.com/open-mpi/ompi/pull/530">https://github.com/open-mpi/ompi/pull/530</a>&gt;
<br>
<p><p><span class="quotelev1">&gt; On Apr 15, 2015, at 8:55 AM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Apr 14, 2015 at 08:14:09PM -0700, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;   Dave committed this earlier today, and here is the first error report:
</span><br>
<span class="quotelev2">&gt;&gt;   WARNING!  Common symbols found:
</span><br>
<span class="quotelev2">&gt;&gt;              comm_request.o: 0000000000000068 C ompi_comm_request_mutex
</span><br>
<span class="quotelev2">&gt;&gt;              comm_request.o: 0000000000000001 C
</span><br>
<span class="quotelev2">&gt;&gt;   ompi_comm_request_progress_active
</span><br>
<span class="quotelev2">&gt;&gt;              comm_request.o: 0000000000000210 C ompi_comm_requests
</span><br>
<span class="quotelev2">&gt;&gt;              comm_request.o: 0000000000000078 C ompi_comm_requests_active
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I will fix the above warnings. The variables in question can be made static.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;                 comm_init.o: 00000000000000b0 C ompi_comm_f_to_c_table
</span><br>
<span class="quotelev2">&gt;&gt;                 comm_init.o: 0000000000000600 C ompi_mpi_comm_null
</span><br>
<span class="quotelev2">&gt;&gt;                 comm_init.o: 0000000000000008 C ompi_mpi_comm_parent
</span><br>
<span class="quotelev2">&gt;&gt;                 comm_init.o: 0000000000000600 C ompi_mpi_comm_self
</span><br>
<span class="quotelev2">&gt;&gt;                 comm_init.o: 00000000000000b0 C ompi_mpi_communicators
</span><br>
<span class="quotelev2">&gt;&gt;                 comm_init.o: 0000000000000600 C ompi_mpi_comm_world
</span><br>
<span class="quotelev2">&gt;&gt;   Would someone like to fix these?
</span><br>
<span class="quotelev2">&gt;&gt;   Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17220.php">http://www.open-mpi.org/community/lists/devel/2015/04/17220.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17230.php">http://www.open-mpi.org/community/lists/devel/2015/04/17230.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17231/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17232.php">Nathan Hjelm: "Re: [OMPI devel] Common symbols warning"</a>
<li><strong>Previous message:</strong> <a href="17230.php">Nathan Hjelm: "Re: [OMPI devel] Common symbols warning"</a>
<li><strong>In reply to:</strong> <a href="17230.php">Nathan Hjelm: "Re: [OMPI devel] Common symbols warning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17232.php">Nathan Hjelm: "Re: [OMPI devel] Common symbols warning"</a>
<li><strong>Reply:</strong> <a href="17232.php">Nathan Hjelm: "Re: [OMPI devel] Common symbols warning"</a>
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
