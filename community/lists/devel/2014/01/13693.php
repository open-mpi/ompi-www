<?
$subject_val = "Re: [OMPI devel] hcoll destruction via MPI attribute";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 10 09:55:45 2014" -->
<!-- isoreceived="20140110145545" -->
<!-- sent="Fri, 10 Jan 2014 14:55:44 +0000" -->
<!-- isosent="20140110145544" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] hcoll destruction via MPI attribute" -->
<!-- id="5D907682-5075-48CB-B0BC-4290CE23E2F5_at_cisco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="F2B6AF8B-AB53-46CE-806B-6573BFC46834_at_icl.utk.edu" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-10 09:55:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13694.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk - build failure on OpenBSD"</a>
<li><strong>Previous message:</strong> <a href="13692.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] shared lib version on trunk"</a>
<li><strong>In reply to:</strong> <a href="13691.php">George Bosilca: "Re: [OMPI devel] hcoll destruction via MPI attribute"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13695.php">George Bosilca: "Re: [OMPI devel] hcoll destruction via MPI attribute"</a>
<li><strong>Reply:</strong> <a href="13695.php">George Bosilca: "Re: [OMPI devel] hcoll destruction via MPI attribute"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 10, 2014, at 9:49 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; As I said, this is the case today. There are ongoing discussion in the MPI Forum to relax the wording of the MPI_Comm_free as most of the MPI implementations do not rely on the strict &#147;collective&#148; behavior of the MPI_Comm_free (in the sense that it has to be called by all processes but not necessarily in same time).
</span><br>
<p>That will be an interesting discussion.  I look forward to your proposal.  :-)
<br>
<p><span class="quotelev2">&gt;&gt; I still agree with this point, though &#151; even though COMM_FREE is collective, you could still get into ordering / deadlock issues if you're (effectively) doing communication inside it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As long as the call is collective and the same attributes exists on all communicators I don&#146;t see how the deadlock is possible. My wording was more a precaution for the future than a restriction for today.
</span><br>
<p><p>Here's an example:
<br>
<p>-----
<br>
MPI Comm comm;
<br>
// comm is setup as an hcoll-enabled communicator
<br>
if (rank == x) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(..., y, tag, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_free(comm);
<br>
} else if (rank == y) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_free(comm);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv(..., x, tag, MPI_COMM_WORLD);
<br>
}
<br>
------
<br>
<p>If the hcoll teardown in the COMM_FREE blocks waiting for all of its peer COMM_FREEs in other processes in the communicator (e.g., due to blocking communication), rank x may block in MPI_SEND waiting for rank y's MPI_RECV, and therefore never invoke its COMM_FREE.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13694.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk - build failure on OpenBSD"</a>
<li><strong>Previous message:</strong> <a href="13692.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] shared lib version on trunk"</a>
<li><strong>In reply to:</strong> <a href="13691.php">George Bosilca: "Re: [OMPI devel] hcoll destruction via MPI attribute"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13695.php">George Bosilca: "Re: [OMPI devel] hcoll destruction via MPI attribute"</a>
<li><strong>Reply:</strong> <a href="13695.php">George Bosilca: "Re: [OMPI devel] hcoll destruction via MPI attribute"</a>
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
