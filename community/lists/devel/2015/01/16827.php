<?
$subject_val = "Re: [OMPI devel] Master warnings";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 27 14:17:07 2015" -->
<!-- isoreceived="20150127191707" -->
<!-- sent="Tue, 27 Jan 2015 19:16:52 +0000" -->
<!-- isosent="20150127191652" -->
<!-- name="Burette, Yohann" -->
<!-- email="yohann.burette_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Master warnings" -->
<!-- id="6777BD114B546D458A2696C0DEB863DF5F627F33_at_ORSMSX107.amr.corp.intel.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAMJJpkU4oFyynXDvphsn+OGjiQJNCOWBeQ376bSXN-SfUc6GtQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Master warnings<br>
<strong>From:</strong> Burette, Yohann (<em>yohann.burette_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-27 14:16:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16828.php">Jeff Squyres (jsquyres): "[OMPI devel] Next Tuesday call: review face-to-face meeting results"</a>
<li><strong>Previous message:</strong> <a href="16826.php">George Bosilca: "Re: [OMPI devel] Master warnings"</a>
<li><strong>In reply to:</strong> <a href="16826.php">George Bosilca: "Re: [OMPI devel] Master warnings"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I fixed the compiler warnings for the OFI MTL.
<br>

<br>
Yohann
<br>

<br>
From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of George Bosilca
<br>
Sent: Tuesday, January 27, 2015 10:26 AM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] Master warnings
<br>

<br>
I took care of the TCP warnings.
<br>

<br>
&nbsp;&nbsp;George.
<br>

<br>

<br>

<br>
On Tue, Jan 27, 2015 at 7:20 AM, Ralph Castain &lt;rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
<br>

<br>
btl_tcp_frag.c: In function 'mca_btl_tcp_frag_dump':
<br>

<br>
btl_tcp_frag.c:99: warning: comparison between signed and unsigned
<br>

<br>
btl_tcp_frag.c:104: warning: comparison between signed and unsigned
<br>

<br>

<br>

<br>
mtl_ofi.c: In function 'ompi_mtl_ofi_add_procs':
<br>

<br>
mtl_ofi.c:108: warning: comparison between signed and unsigned
<br>

<br>
mtl_ofi.c:111: warning: format '%s' expects type 'char *', but argument 6 has type 'int'
<br>

<br>

<br>

<br>
base/memheap_base_mkey.c: In function 'oshmem_mkey_recv_cb':
<br>

<br>
base/memheap_base_mkey.c:375: warning: comparison of distinct pointer types lacks a cast
<br>

<br>

<br>
_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16825.php">http://www.open-mpi.org/community/lists/devel/2015/01/16825.php</a>
<br>

<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16827/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16828.php">Jeff Squyres (jsquyres): "[OMPI devel] Next Tuesday call: review face-to-face meeting results"</a>
<li><strong>Previous message:</strong> <a href="16826.php">George Bosilca: "Re: [OMPI devel] Master warnings"</a>
<li><strong>In reply to:</strong> <a href="16826.php">George Bosilca: "Re: [OMPI devel] Master warnings"</a>
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
