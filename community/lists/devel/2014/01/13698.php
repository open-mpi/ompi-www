<?
$subject_val = "Re: [OMPI devel] hcoll destruction via MPI attribute";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 10 10:15:46 2014" -->
<!-- isoreceived="20140110151546" -->
<!-- sent="Fri, 10 Jan 2014 15:15:43 +0000" -->
<!-- isosent="20140110151543" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] hcoll destruction via MPI attribute" -->
<!-- id="59B94F24-915F-4D66-B316-8C0B3F4202DA_at_cisco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="5B108FEB-4806-491D-AFF9-50F209F0AEFF_at_icl.utk.edu" -->
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
<strong>Date:</strong> 2014-01-10 10:15:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13699.php">marco atzeri: "Re: [OMPI devel] shared lib version on trunk"</a>
<li><strong>Previous message:</strong> <a href="13697.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30168 - configure failure on Mac OSX 10.5"</a>
<li><strong>In reply to:</strong> <a href="13695.php">George Bosilca: "Re: [OMPI devel] hcoll destruction via MPI attribute"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13703.php">George Bosilca: "Re: [OMPI devel] hcoll destruction via MPI attribute"</a>
<li><strong>Reply:</strong> <a href="13703.php">George Bosilca: "Re: [OMPI devel] hcoll destruction via MPI attribute"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 10, 2014, at 10:04 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev2">&gt;&gt; MPI Comm comm;
</span><br>
<span class="quotelev2">&gt;&gt; // comm is setup as an hcoll-enabled communicator
</span><br>
<span class="quotelev2">&gt;&gt; if (rank == x) {
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Send(..., y, tag, MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Comm_free(comm);
</span><br>
<span class="quotelev2">&gt;&gt; } else if (rank == y) {
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Comm_free(comm);
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Recv(..., x, tag, MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Based on today&#146;s MPI standard this code is incorrect as the MPI_Comm_free is collective, and you can&#146;t have matching blocking communications crossing a collective line.
</span><br>
<p><p>I don't know exactly what you mean by &quot;crossing a collective line&quot;, but communicating in different communicators while a different collective is occurring is certainly valid.  I.e., this is valid (and won't deadlock):
<br>
<p>-----
<br>
MPI Comm comm;
<br>
// comm is setup as an hcoll-enabled communicator
<br>
MPI_Barrier(comm);
<br>
if (rank == x) {
<br>
&nbsp;&nbsp;MPI_Send(..., y, tag, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;MPI_Comm_free(comm);
<br>
} else if (rank == y) {
<br>
&nbsp;&nbsp;MPI_Recv(..., x, tag, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;MPI_Comm_free(comm);
<br>
} else {
<br>
&nbsp;&nbsp;MPI_Comm_free(comm);
<br>
}
<br>
-----
<br>
<p>My point (which I guess I didn't make well) is that COMM_FREE is collective, which we all know does not necessarily mean synchronizing.  If hcoll teardown is going to add synchronization, there could be situations that might be dangerous (if OMPI doesn't already synchronize during COMM_FREE, which is why I asked the question).
<br>
<p>Sorry if I just muddled the conversation...  :-\
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
<li><strong>Next message:</strong> <a href="13699.php">marco atzeri: "Re: [OMPI devel] shared lib version on trunk"</a>
<li><strong>Previous message:</strong> <a href="13697.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30168 - configure failure on Mac OSX 10.5"</a>
<li><strong>In reply to:</strong> <a href="13695.php">George Bosilca: "Re: [OMPI devel] hcoll destruction via MPI attribute"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13703.php">George Bosilca: "Re: [OMPI devel] hcoll destruction via MPI attribute"</a>
<li><strong>Reply:</strong> <a href="13703.php">George Bosilca: "Re: [OMPI devel] hcoll destruction via MPI attribute"</a>
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
