<?
$subject_val = "[OMPI devel] ibcast segfault on v1.7 [was: reduce_scatter_block failing on v1.7]";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul  7 12:38:02 2012" -->
<!-- isoreceived="20120707163802" -->
<!-- sent="Sat, 07 Jul 2012 12:37:54 -0400" -->
<!-- isosent="20120707163754" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="[OMPI devel] ibcast segfault on v1.7 [was: reduce_scatter_block failing on v1.7]" -->
<!-- id="4FF865E2.60001_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="69A29AB53D57F54D81061A9E4E45B8FD2392037F_at_EXMB01.srn.sandia.gov" -->
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
<strong>Subject:</strong> [OMPI devel] ibcast segfault on v1.7 [was: reduce_scatter_block failing on v1.7]<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-07 12:37:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11256.php">Jeff Squyres: "Re: [OMPI devel] ibm/collective/bcast_f08.f90"</a>
<li><strong>Previous message:</strong> <a href="11254.php">Eugene Loh: "[OMPI devel] ibm/collective/bcast_f08.f90"</a>
<li><strong>In reply to:</strong> <a href="11252.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  reduce_scatter_block failing on v1.7"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 07/06/12 14:35, Barrett, Brian W wrote:
<br>
<span class="quotelev1">&gt; On 7/6/12 2:31 PM, &quot;Eugene Loh&quot;&lt;eugene.loh_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The new reduce_scatter_block test is segfaulting with v1.7 but not with
</span><br>
<span class="quotelev2">&gt;&gt; the trunk.  When we drop down into MPI_Reduce_scatter_block and attempt
</span><br>
<span class="quotelev2">&gt;&gt; to call
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; comm-&gt;c_coll.coll_reduce_scatter_block()
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; it's NULL.  (So is comm-&gt;c_coll.coll_reduce_scatter_block_module.)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there some work on the trunk that should be CMRed to v1.7?
</span><br>
<span class="quotelev1">&gt; Yes.  All in good time :).
</span><br>
Does this also apply to ibcast?  These failures complicate wading 
<br>
through MTT results, so we each have our own idea what &quot;in good time&quot; 
<br>
means.  :^(  Anyhow, test ibm/collective/ibcast_f08 is segfaulting on 
<br>
v1.7.  If I look at nbc_ibcast.c:ompi_coll_libnbc_ibcast(), it looks 
<br>
like &quot;handle&quot; is used before it's initialized.  The trunk doesn't have 
<br>
this problem.  Anyway, here's one plea for cleaning up v1.7.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11256.php">Jeff Squyres: "Re: [OMPI devel] ibm/collective/bcast_f08.f90"</a>
<li><strong>Previous message:</strong> <a href="11254.php">Eugene Loh: "[OMPI devel] ibm/collective/bcast_f08.f90"</a>
<li><strong>In reply to:</strong> <a href="11252.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  reduce_scatter_block failing on v1.7"</a>
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
