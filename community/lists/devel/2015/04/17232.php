<?
$subject_val = "Re: [OMPI devel] Common symbols warning";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 15 12:10:04 2015" -->
<!-- isoreceived="20150415161004" -->
<!-- sent="Wed, 15 Apr 2015 10:10:03 -0600" -->
<!-- isosent="20150415161003" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Common symbols warning" -->
<!-- id="20150415161003.GH21644_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAE2D8A4-A5EF-44AE-A517-3929B00F6D47_at_open-mpi.org" -->
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
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-15 12:10:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17233.php">Gilles Gouaillardet: "Re: [OMPI devel] Common symbols warning"</a>
<li><strong>Previous message:</strong> <a href="17231.php">Ralph Castain: "Re: [OMPI devel] Common symbols warning"</a>
<li><strong>In reply to:</strong> <a href="17231.php">Ralph Castain: "Re: [OMPI devel] Common symbols warning"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah, oh well. Its my code so I went ahead and committed that fix.
<br>
<p>-Nathan
<br>
<p>On Wed, Apr 15, 2015 at 09:02:48AM -0700, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt;    FWIW: Gilles has a pending PR that fixes all of these
</span><br>
<span class="quotelev1">&gt;     <a href="https://github.com/open-mpi/ompi/pull/530">https://github.com/open-mpi/ompi/pull/530</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      On Apr 15, 2015, at 8:55 AM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;      On Tue, Apr 14, 2015 at 08:14:09PM -0700, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;          Dave committed this earlier today, and here is the first error
</span><br>
<span class="quotelev1">&gt;        report:
</span><br>
<span class="quotelev1">&gt;          WARNING!  Common symbols found:
</span><br>
<span class="quotelev1">&gt;                     comm_request.o: 0000000000000068 C
</span><br>
<span class="quotelev1">&gt;        ompi_comm_request_mutex
</span><br>
<span class="quotelev1">&gt;                     comm_request.o: 0000000000000001 C
</span><br>
<span class="quotelev1">&gt;          ompi_comm_request_progress_active
</span><br>
<span class="quotelev1">&gt;                     comm_request.o: 0000000000000210 C ompi_comm_requests
</span><br>
<span class="quotelev1">&gt;                     comm_request.o: 0000000000000078 C
</span><br>
<span class="quotelev1">&gt;        ompi_comm_requests_active
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      I will fix the above warnings. The variables in question can be made
</span><br>
<span class="quotelev1">&gt;      static.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                        comm_init.o: 00000000000000b0 C ompi_comm_f_to_c_table
</span><br>
<span class="quotelev1">&gt;                        comm_init.o: 0000000000000600 C ompi_mpi_comm_null
</span><br>
<span class="quotelev1">&gt;                        comm_init.o: 0000000000000008 C ompi_mpi_comm_parent
</span><br>
<span class="quotelev1">&gt;                        comm_init.o: 0000000000000600 C ompi_mpi_comm_self
</span><br>
<span class="quotelev1">&gt;                        comm_init.o: 00000000000000b0 C ompi_mpi_communicators
</span><br>
<span class="quotelev1">&gt;                        comm_init.o: 0000000000000600 C ompi_mpi_comm_world
</span><br>
<span class="quotelev1">&gt;          Would someone like to fix these?
</span><br>
<span class="quotelev1">&gt;          Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        _______________________________________________
</span><br>
<span class="quotelev1">&gt;        devel mailing list
</span><br>
<span class="quotelev1">&gt;        devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;        Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;        Link to this post:
</span><br>
<span class="quotelev1">&gt;        <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17220.php">http://www.open-mpi.org/community/lists/devel/2015/04/17220.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      _______________________________________________
</span><br>
<span class="quotelev1">&gt;      devel mailing list
</span><br>
<span class="quotelev1">&gt;      devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;      Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;      Link to this post:
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17230.php">http://www.open-mpi.org/community/lists/devel/2015/04/17230.php</a>
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17231.php">http://www.open-mpi.org/community/lists/devel/2015/04/17231.php</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17232/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17233.php">Gilles Gouaillardet: "Re: [OMPI devel] Common symbols warning"</a>
<li><strong>Previous message:</strong> <a href="17231.php">Ralph Castain: "Re: [OMPI devel] Common symbols warning"</a>
<li><strong>In reply to:</strong> <a href="17231.php">Ralph Castain: "Re: [OMPI devel] Common symbols warning"</a>
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
