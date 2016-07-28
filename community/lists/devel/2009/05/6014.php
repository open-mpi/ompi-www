<?
$subject_val = "[OMPI devel] Warnings in sctp BTL";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 13 23:16:08 2009" -->
<!-- isoreceived="20090514031608" -->
<!-- sent="Wed, 13 May 2009 21:15:54 -0600" -->
<!-- isosent="20090514031554" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Warnings in sctp BTL" -->
<!-- id="099178D4-8D44-4721-B2C1-ACBE0C06989D_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] Warnings in sctp BTL<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-13 23:15:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6015.php">Brad Penoff: "Re: [OMPI devel] Warnings in sctp BTL"</a>
<li><strong>Previous message:</strong> <a href="6013.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21234"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6015.php">Brad Penoff: "Re: [OMPI devel] Warnings in sctp BTL"</a>
<li><strong>Reply:</strong> <a href="6015.php">Brad Penoff: "Re: [OMPI devel] Warnings in sctp BTL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks
<br>
<p>Not sure who is maintaining the SCTP BTL, but I found the following  
<br>
warnings when building tonight:
<br>
<p>btl_sctp_frag.c: In function `mca_btl_sctp_frag_large_send':
<br>
btl_sctp_frag.c:179: warning: int format, different type arg (arg 3)
<br>
btl_sctp_frag.c:179: warning: int format, different type arg (arg 5)
<br>
btl_sctp_frag.c: In function `mca_btl_sctp_frag_send':
<br>
btl_sctp_frag.c:303: warning: int format, different type arg (arg 3)
<br>
btl_sctp_frag.c:303: warning: int format, different type arg (arg 5)
<br>
btl_sctp_endpoint.c: In function  
<br>
`mca_btl_sctp_endpoint_recv_connect_ack':
<br>
btl_sctp_endpoint.c:841: warning: too few arguments for format
<br>
btl_sctp_proc.c: In function `mca_btl_sctp_proc_create':
<br>
btl_sctp_proc.c:147: warning: int format, different type arg (arg 2)
<br>
<p>Could you please clean this up?
<br>
<p>Thanks!
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6015.php">Brad Penoff: "Re: [OMPI devel] Warnings in sctp BTL"</a>
<li><strong>Previous message:</strong> <a href="6013.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21234"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6015.php">Brad Penoff: "Re: [OMPI devel] Warnings in sctp BTL"</a>
<li><strong>Reply:</strong> <a href="6015.php">Brad Penoff: "Re: [OMPI devel] Warnings in sctp BTL"</a>
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
