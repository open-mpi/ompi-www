<?
$subject_val = "Re: [OMPI devel] mca_btl_&lt;name&gt;_prepare_dst";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 18 10:55:12 2016" -->
<!-- isoreceived="20160318145512" -->
<!-- sent="Fri, 18 Mar 2016 08:55:08 -0600" -->
<!-- isosent="20160318145508" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mca_btl_&amp;lt;name&amp;gt;_prepare_dst" -->
<!-- id="20160318145508.GA61968_at_mordor.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAHXxYDiTeqU6yvXEg=Aiyhmz3gJJ_1WC0LAUc69mu8dgBLxvfg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] mca_btl_&lt;name&gt;_prepare_dst<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-18 10:55:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18714.php">Monika Hemnani: "[OMPI devel] Scaling down open mpi for embedded application"</a>
<li><strong>Previous message:</strong> <a href="18712.php">dpchoudh .: "[OMPI devel] mca_btl_&lt;name&gt;_prepare_dst"</a>
<li><strong>In reply to:</strong> <a href="18712.php">dpchoudh .: "[OMPI devel] mca_btl_&lt;name&gt;_prepare_dst"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The prepare_dst function was a bottleneck to providing fast one-sided
<br>
support using network RDMA. As the function was only used in the RDMA
<br>
path it was removed in favor of btl_register_mem + a more complete
<br>
put/get interface. You can look at the way the various btls moved the
<br>
functionality. The simplest example is probably btl/ugni. I didn't do
<br>
any signifigant restructuring when rewriting that btl.
<br>
<p>On a Gemini network before the BTL change the best 1-byte MPI_Put
<br>
latency I could achieve was ~ 1.2 us. With the new interface it is
<br>
closer to ~1.0 us.
<br>
<p>-Nathan
<br>
<p>On Fri, Mar 18, 2016 at 02:19:09AM -0400, dpchoudh . wrote:
<br>
<span class="quotelev1">&gt;    Hello developers
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    It looks like in the trunk, the routine mca_btl_&lt;btl&gt;_prepare_dst is no
</span><br>
<span class="quotelev1">&gt;    longer being implemented, at least in TCP and openib BTLs. Up until
</span><br>
<span class="quotelev1">&gt;    1.10.2, it does exist.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Is it a new MPI-3 related thing? What is the reason behind this?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Thanks
</span><br>
<span class="quotelev1">&gt;    Durga
</span><br>
<span class="quotelev1">&gt;    Life is complex. It has real and imaginary parts.
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/03/18712.php">http://www.open-mpi.org/community/lists/devel/2016/03/18712.php</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18713/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18714.php">Monika Hemnani: "[OMPI devel] Scaling down open mpi for embedded application"</a>
<li><strong>Previous message:</strong> <a href="18712.php">dpchoudh .: "[OMPI devel] mca_btl_&lt;name&gt;_prepare_dst"</a>
<li><strong>In reply to:</strong> <a href="18712.php">dpchoudh .: "[OMPI devel] mca_btl_&lt;name&gt;_prepare_dst"</a>
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
