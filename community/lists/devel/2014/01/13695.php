<?
$subject_val = "Re: [OMPI devel] hcoll destruction via MPI attribute";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 10 10:04:01 2014" -->
<!-- isoreceived="20140110150401" -->
<!-- sent="Fri, 10 Jan 2014 16:04:03 +0100" -->
<!-- isosent="20140110150403" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] hcoll destruction via MPI attribute" -->
<!-- id="5B108FEB-4806-491D-AFF9-50F209F0AEFF_at_icl.utk.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="5D907682-5075-48CB-B0BC-4290CE23E2F5_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] hcoll destruction via MPI attribute<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-10 10:04:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13696.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30168 - odd run failure"</a>
<li><strong>Previous message:</strong> <a href="13694.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk - build failure on OpenBSD"</a>
<li><strong>In reply to:</strong> <a href="13693.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] hcoll destruction via MPI attribute"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13698.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] hcoll destruction via MPI attribute"</a>
<li><strong>Reply:</strong> <a href="13698.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] hcoll destruction via MPI attribute"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 10, 2014, at 15:55 , Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Jan 10, 2014, at 9:49 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; As I said, this is the case today. There are ongoing discussion in the MPI Forum to relax the wording of the MPI_Comm_free as most of the MPI implementations do not rely on the strict &#147;collective&#148; behavior of the MPI_Comm_free (in the sense that it has to be called by all processes but not necessarily in same time).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That will be an interesting discussion.  I look forward to your proposal.  :-)
</span><br>
<p>? We already had this discussion in the context of another proposal. Anyway that&#146;s an MPI Forum issue.
<br>
<p><span class="quotelev3">&gt;&gt;&gt; I still agree with this point, though &#151; even though COMM_FREE is collective, you could still get into ordering / deadlock issues if you're (effectively) doing communication inside it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; As long as the call is collective and the same attributes exists on all communicators I don&#146;t see how the deadlock is possible. My wording was more a precaution for the future than a restriction for today.
</span><br>
<span class="quotelev1">&gt; Here's an example:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; MPI Comm comm;
</span><br>
<span class="quotelev1">&gt; // comm is setup as an hcoll-enabled communicator
</span><br>
<span class="quotelev1">&gt; if (rank == x) {
</span><br>
<span class="quotelev1">&gt;    MPI_Send(..., y, tag, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_free(comm);
</span><br>
<span class="quotelev1">&gt; } else if (rank == y) {
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_free(comm);
</span><br>
<span class="quotelev1">&gt;    MPI_Recv(..., x, tag, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; ------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If the hcoll teardown in the COMM_FREE blocks waiting for all of its peer COMM_FREEs in other processes in the communicator (e.g., due to blocking communication), rank x may block in MPI_SEND waiting for rank y&#146;s MPI_RECV, and therefore never invoke its COMM_FREE.
</span><br>
<p>Based on today&#146;s MPI standard this code is incorrect as the MPI_Comm_free is collective, and you can&#146;t have matching blocking communications crossing a collective line.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13696.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30168 - odd run failure"</a>
<li><strong>Previous message:</strong> <a href="13694.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk - build failure on OpenBSD"</a>
<li><strong>In reply to:</strong> <a href="13693.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] hcoll destruction via MPI attribute"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13698.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] hcoll destruction via MPI attribute"</a>
<li><strong>Reply:</strong> <a href="13698.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] hcoll destruction via MPI attribute"</a>
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
