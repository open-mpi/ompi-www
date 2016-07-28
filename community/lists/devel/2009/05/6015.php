<?
$subject_val = "Re: [OMPI devel] Warnings in sctp BTL";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 14 01:15:06 2009" -->
<!-- isoreceived="20090514051506" -->
<!-- sent="Wed, 13 May 2009 22:14:57 -0700" -->
<!-- isosent="20090514051457" -->
<!-- name="Brad Penoff" -->
<!-- email="penoff_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Warnings in sctp BTL" -->
<!-- id="b89c3c270905132214s609cb7abn5aed1df4afcfba96_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="099178D4-8D44-4721-B2C1-ACBE0C06989D_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Warnings in sctp BTL<br>
<strong>From:</strong> Brad Penoff (<em>penoff_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-14 01:14:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6016.php">Jeff Squyres: "Re: [OMPI devel] Warnings in sctp BTL"</a>
<li><strong>Previous message:</strong> <a href="6014.php">Ralph Castain: "[OMPI devel] Warnings in sctp BTL"</a>
<li><strong>In reply to:</strong> <a href="6014.php">Ralph Castain: "[OMPI devel] Warnings in sctp BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6016.php">Jeff Squyres: "Re: [OMPI devel] Warnings in sctp BTL"</a>
<li><strong>Reply:</strong> <a href="6016.php">Jeff Squyres: "Re: [OMPI devel] Warnings in sctp BTL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
hey Ralph,
<br>
<p>At UBC, we are trying to find a new student who can maintain the SCTP
<br>
BTL.  Unfortunately, it is has not been maintained since the progress
<br>
engine overhaul a while ago.  At the moment, this is still on the TODO
<br>
list.  I hope to get to this myself, if no student is found.
<br>
<p>It was my impression that the SCTP BTL wasn't included in any release
<br>
by default.  I hope that this is still the case....
<br>
<p>brad
<br>
<p>On Wed, May 13, 2009 at 8:15 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi folks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not sure who is maintaining the SCTP BTL, but I found the following warnings
</span><br>
<span class="quotelev1">&gt; when building tonight:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; btl_sctp_frag.c: In function `mca_btl_sctp_frag_large_send':
</span><br>
<span class="quotelev1">&gt; btl_sctp_frag.c:179: warning: int format, different type arg (arg 3)
</span><br>
<span class="quotelev1">&gt; btl_sctp_frag.c:179: warning: int format, different type arg (arg 5)
</span><br>
<span class="quotelev1">&gt; btl_sctp_frag.c: In function `mca_btl_sctp_frag_send':
</span><br>
<span class="quotelev1">&gt; btl_sctp_frag.c:303: warning: int format, different type arg (arg 3)
</span><br>
<span class="quotelev1">&gt; btl_sctp_frag.c:303: warning: int format, different type arg (arg 5)
</span><br>
<span class="quotelev1">&gt; btl_sctp_endpoint.c: In function `mca_btl_sctp_endpoint_recv_connect_ack':
</span><br>
<span class="quotelev1">&gt; btl_sctp_endpoint.c:841: warning: too few arguments for format
</span><br>
<span class="quotelev1">&gt; btl_sctp_proc.c: In function `mca_btl_sctp_proc_create':
</span><br>
<span class="quotelev1">&gt; btl_sctp_proc.c:147: warning: int format, different type arg (arg 2)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could you please clean this up?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; Ralph
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6016.php">Jeff Squyres: "Re: [OMPI devel] Warnings in sctp BTL"</a>
<li><strong>Previous message:</strong> <a href="6014.php">Ralph Castain: "[OMPI devel] Warnings in sctp BTL"</a>
<li><strong>In reply to:</strong> <a href="6014.php">Ralph Castain: "[OMPI devel] Warnings in sctp BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6016.php">Jeff Squyres: "Re: [OMPI devel] Warnings in sctp BTL"</a>
<li><strong>Reply:</strong> <a href="6016.php">Jeff Squyres: "Re: [OMPI devel] Warnings in sctp BTL"</a>
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
