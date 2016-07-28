<?
$subject_val = "Re: [OMPI devel] hcoll destruction via MPI attribute";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 10 10:56:57 2014" -->
<!-- isoreceived="20140110155657" -->
<!-- sent="Fri, 10 Jan 2014 16:57:00 +0100" -->
<!-- isosent="20140110155700" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] hcoll destruction via MPI attribute" -->
<!-- id="261EB0E6-14E6-4195-9EEF-D01ABD8EFF10_at_icl.utk.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="59B94F24-915F-4D66-B316-8C0B3F4202DA_at_cisco.com" -->
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
<strong>Date:</strong> 2014-01-10 10:57:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13704.php">Adrian Reber: "[OMPI devel] callback debugging"</a>
<li><strong>Previous message:</strong> <a href="13702.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc2r30168 - PGI F08 failure"</a>
<li><strong>In reply to:</strong> <a href="13698.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] hcoll destruction via MPI attribute"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13705.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] hcoll destruction via MPI attribute"</a>
<li><strong>Reply:</strong> <a href="13705.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] hcoll destruction via MPI attribute"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 10, 2014, at 16:15 , Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Jan 10, 2014, at 10:04 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI Comm comm;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; // comm is setup as an hcoll-enabled communicator
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if (rank == x) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MPI_Send(..., y, tag, MPI_COMM_WORLD);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MPI_Comm_free(comm);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; } else if (rank == y) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MPI_Comm_free(comm);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MPI_Recv(..., x, tag, MPI_COMM_WORLD);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Based on today&#146;s MPI standard this code is incorrect as the MPI_Comm_free is collective, and you can&#146;t have matching blocking communications crossing a collective line.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't know exactly what you mean by &quot;crossing a collective line&quot;, but communicating in different communicators while a different collective is occurring is certainly valid.  I.e., this is valid (and won&#146;t deadlock):
</span><br>
<p>This is not the same example as before. This example is correct, it does not rely on the send being eagerly completed.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; MPI Comm comm;
</span><br>
<span class="quotelev1">&gt; // comm is setup as an hcoll-enabled communicator
</span><br>
<span class="quotelev1">&gt; MPI_Barrier(comm);
</span><br>
<span class="quotelev1">&gt; if (rank == x) {
</span><br>
<span class="quotelev1">&gt;  MPI_Send(..., y, tag, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_free(comm);
</span><br>
<span class="quotelev1">&gt; } else if (rank == y) {
</span><br>
<span class="quotelev1">&gt;  MPI_Recv(..., x, tag, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_free(comm);
</span><br>
<span class="quotelev1">&gt; } else {
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_free(comm);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My point (which I guess I didn't make well) is that COMM_FREE is collective, which we all know does not necessarily mean synchronizing.  If hcoll teardown is going to add synchronization, there could be situations that might be dangerous (if OMPI doesn't already synchronize during COMM_FREE, which is why I asked the question).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry if I just muddled the conversation&#133;  :-\
</span><br>
<p><p><p><p><span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="13704.php">Adrian Reber: "[OMPI devel] callback debugging"</a>
<li><strong>Previous message:</strong> <a href="13702.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc2r30168 - PGI F08 failure"</a>
<li><strong>In reply to:</strong> <a href="13698.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] hcoll destruction via MPI attribute"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13705.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] hcoll destruction via MPI attribute"</a>
<li><strong>Reply:</strong> <a href="13705.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] hcoll destruction via MPI attribute"</a>
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
