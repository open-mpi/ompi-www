<?
$subject_val = "Re: [OMPI devel] OpenIB BTL - removing btl_openib_ib_pkey_ix parameter";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Oct 12 03:26:09 2008" -->
<!-- isoreceived="20081012072609" -->
<!-- sent="Sun, 12 Oct 2008 09:26:05 +0200" -->
<!-- isosent="20081012072605" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenIB BTL - removing btl_openib_ib_pkey_ix parameter" -->
<!-- id="453d39990810120026r181af8b8y2ffb4d340d707ef3_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="48EB9018.6030509_at_dev.mellanox.co.il" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OpenIB BTL - removing btl_openib_ib_pkey_ix parameter<br>
<strong>From:</strong> Lenny Verkhovsky (<em>lenny.verkhovsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-12 03:26:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4758.php">Jeff Squyres: "[OMPI devel] 1.2.8 testing"</a>
<li><strong>Previous message:</strong> <a href="4756.php">George Bosilca: "Re: [OMPI devel] sendi sm BTL function"</a>
<li><strong>In reply to:</strong> <a href="4745.php">Pavel Shamis (Pasha): "[OMPI devel] OpenIB BTL - removing btl_openib_ib_pkey_ix parameter"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
go ahead :)
<br>
<p>On 10/7/08, Pavel Shamis (Pasha) &lt;pasha_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would like to remove the btl_openib_ib_pkey_ix (btl_openib_ib_pkey_ix)
</span><br>
<span class="quotelev1">&gt; parameter.
</span><br>
<span class="quotelev1">&gt; The partition key index (btl_openib_ib_pkey_ix) is defined locally by each
</span><br>
<span class="quotelev1">&gt; HCA, so in most cases each host will have different pkey index and
</span><br>
<span class="quotelev1">&gt; user have no control over this value. So direct pkey_ix specification is
</span><br>
<span class="quotelev1">&gt; not possible because each HCA will have different value.
</span><br>
<span class="quotelev1">&gt; If user want to use specific partition he should specify only the
</span><br>
<span class="quotelev1">&gt; btl_openib_ibib_pkey_val parameter, and Open-mpi translate it to
</span><br>
<span class="quotelev1">&gt; corresponding pkey_ix.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think the btl_openib_ib_pkey_ix is useless and I would like to remove it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Comments ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Pavel Shamis (Pasha)
</span><br>
<span class="quotelev1">&gt; Mellanox Technologies LTD.
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4757/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4758.php">Jeff Squyres: "[OMPI devel] 1.2.8 testing"</a>
<li><strong>Previous message:</strong> <a href="4756.php">George Bosilca: "Re: [OMPI devel] sendi sm BTL function"</a>
<li><strong>In reply to:</strong> <a href="4745.php">Pavel Shamis (Pasha): "[OMPI devel] OpenIB BTL - removing btl_openib_ib_pkey_ix parameter"</a>
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
