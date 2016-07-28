<?
$subject_val = "Re: [OMPI devel] OpenIB/usNIC errors";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jun  1 22:27:36 2014" -->
<!-- isoreceived="20140602022736" -->
<!-- sent="Mon, 2 Jun 2014 11:27:34 +0900" -->
<!-- isosent="20140602022734" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenIB/usNIC errors" -->
<!-- id="CAAkFZ5s35eY+DFcCbFASDMQU7ij5C8ftJenHng=ACZ5963+qOw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAJ2Qj5ohA0Xaycjzj8nN3rUCCaHT9q7Hn7CK4h02cbTX3NXzaw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OpenIB/usNIC errors<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-01 22:27:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14934.php">Mike Dubman: "[OMPI devel] trunk failure"</a>
<li><strong>Previous message:</strong> <a href="14932.php">Artem Polyakov: "Re: [OMPI devel] RFC: refactor PMI support"</a>
<li><strong>In reply to:</strong> <a href="14928.php">Artem Polyakov: "Re: [OMPI devel] OpenIB/usNIC errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14926.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OpenIB/usNIC errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Artem,
<br>
<p>thanks for the feedback.
<br>
<p>i commited the patch to the trunk (r31922)
<br>
<p>as i indicated in the commit log, this patch is likely suboptimal and has
<br>
room for improvement.
<br>
<p>Jeff commented about the usnic related issue, so i will wait for a fix from
<br>
the Cisco folks.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p><p><p>On Sun, Jun 1, 2014 at 10:12 PM, Artem Polyakov &lt;artpol84_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I test your approach. Both:
</span><br>
<span class="quotelev1">&gt; a) export OMPI_MCA_btl_openib_use_eager_rdma=0
</span><br>
<span class="quotelev1">&gt; b) applying your patch and run without &quot;export
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_btl_openib_use_eager_rdma=0&quot;
</span><br>
<span class="quotelev1">&gt; works well for me.
</span><br>
<span class="quotelev1">&gt; This fixes first part of the problem: when OMPI_MCA_btl=&quot;openib,self&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However once I comment out this statement thus giving OMPI the right to
</span><br>
<span class="quotelev1">&gt; deside which BTL to use program hangs again. Here is additional information
</span><br>
<span class="quotelev1">&gt; that can be useful:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. If I set 1 slot per node this problem doesn't rise.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. If I use at least 2 cores per node I can see this hang.
</span><br>
<span class="quotelev1">&gt; Here is the backtraces for all branches of hanged program:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14933/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14934.php">Mike Dubman: "[OMPI devel] trunk failure"</a>
<li><strong>Previous message:</strong> <a href="14932.php">Artem Polyakov: "Re: [OMPI devel] RFC: refactor PMI support"</a>
<li><strong>In reply to:</strong> <a href="14928.php">Artem Polyakov: "Re: [OMPI devel] OpenIB/usNIC errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14926.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OpenIB/usNIC errors"</a>
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
