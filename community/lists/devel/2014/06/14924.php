<?
$subject_val = "Re: [OMPI devel] OpenIB/usNIC errors";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jun  1 03:24:59 2014" -->
<!-- isoreceived="20140601072459" -->
<!-- sent="Sun, 1 Jun 2014 16:24:57 +0900" -->
<!-- isosent="20140601072457" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenIB/usNIC errors" -->
<!-- id="CAAkFZ5ujFeF3ST9peGFNnDf1MTKw29F2wGYH-HTOBadurzS9wQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAJ2Qj5rWAJZoqKR-e8MW04nnPKuyhxicoyF4k9XKciNrguLciA_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-06-01 03:24:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14925.php">Artem Polyakov: "Re: [OMPI devel] OpenIB/usNIC errors"</a>
<li><strong>Previous message:</strong> <a href="14923.php">Artem Polyakov: "Re: [OMPI devel] OpenIB/usNIC errors"</a>
<li><strong>In reply to:</strong> <a href="14922.php">Artem Polyakov: "[OMPI devel] OpenIB/usNIC errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14925.php">Artem Polyakov: "Re: [OMPI devel] OpenIB/usNIC errors"</a>
<li><strong>Reply:</strong> <a href="14925.php">Artem Polyakov: "Re: [OMPI devel] OpenIB/usNIC errors"</a>
<li><strong>Reply:</strong> <a href="14928.php">Artem Polyakov: "Re: [OMPI devel] OpenIB/usNIC errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Artem,
<br>
<p>this looks like the issue initially reported by Rolf
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2014/05/14836.php">http://www.open-mpi.org/community/lists/devel/2014/05/14836.php</a>
<br>
<p>in <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14839.php">http://www.open-mpi.org/community/lists/devel/2014/05/14839.php</a>
<br>
i posted a patch and a workaround :
<br>
export OMPI_MCA_btl_openib_use_eager_rdma=0
<br>
<p>i do not recall i commited the patch (Nathan is reviewing) to the trunk.
<br>
<p>if you have a chance to test it and if it works, i ll commit it tomorrow
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p><p><p>On Sun, Jun 1, 2014 at 3:57 PM, Artem Polyakov &lt;artpol84_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. With fixed OpenIB  support  (add export OMPI_MCA_btl=&quot;openib,self&quot; in
</span><br>
<span class="quotelev1">&gt; attached batch script) I get followint error:
</span><br>
<span class="quotelev1">&gt; hellompi:
</span><br>
<span class="quotelev1">&gt; /home/research/artpol/ompi_dev//ompi-trunk_r31907/ompi/mca/btl/openib/btl_openib.c:1151:
</span><br>
<span class="quotelev1">&gt; mca_btl_openib_del_procs: Assertion
</span><br>
<span class="quotelev1">&gt; `((opal_object_t*)endpoint)-&gt;obj_reference_count == 1' failed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14924/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14925.php">Artem Polyakov: "Re: [OMPI devel] OpenIB/usNIC errors"</a>
<li><strong>Previous message:</strong> <a href="14923.php">Artem Polyakov: "Re: [OMPI devel] OpenIB/usNIC errors"</a>
<li><strong>In reply to:</strong> <a href="14922.php">Artem Polyakov: "[OMPI devel] OpenIB/usNIC errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14925.php">Artem Polyakov: "Re: [OMPI devel] OpenIB/usNIC errors"</a>
<li><strong>Reply:</strong> <a href="14925.php">Artem Polyakov: "Re: [OMPI devel] OpenIB/usNIC errors"</a>
<li><strong>Reply:</strong> <a href="14928.php">Artem Polyakov: "Re: [OMPI devel] OpenIB/usNIC errors"</a>
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
