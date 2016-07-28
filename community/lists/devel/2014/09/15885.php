<?
$subject_val = "Re: [OMPI devel] race condition in oob/tcp";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 21 01:26:28 2014" -->
<!-- isoreceived="20140921052628" -->
<!-- sent="Sun, 21 Sep 2014 14:26:25 +0900" -->
<!-- isosent="20140921052625" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] race condition in oob/tcp" -->
<!-- id="CAAkFZ5vO_2HKa8xQc-PRmy2Fc=dJFV0jXpdkj=sAfWS8j5h4bg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAMJJpkUxscAVoZbHXZdo__Y5eBQna2et6D_rbD0GQxiB9HWp-A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] race condition in oob/tcp<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-21 01:26:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15886.php">Ralph Castain: "Re: [OMPI devel] race condition in oob/tcp"</a>
<li><strong>Previous message:</strong> <a href="15884.php">George Bosilca: "Re: [OMPI devel] race condition in oob/tcp"</a>
<li><strong>In reply to:</strong> <a href="15884.php">George Bosilca: "Re: [OMPI devel] race condition in oob/tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15886.php">Ralph Castain: "Re: [OMPI devel] race condition in oob/tcp"</a>
<li><strong>Reply:</strong> <a href="15886.php">Ralph Castain: "Re: [OMPI devel] race condition in oob/tcp"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the pointer George !
<br>
<p>On Sat, Sep 20, 2014 at 5:46 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Or copy the handshake protocol design of the TCP BTL...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
the main difference between oob/tcp and btl/tcp is the way we resolve the
<br>
situation in which two processes send their first message to each other at
<br>
the same time.
<br>
<p>in oob/tcp, all (e.g. one or two) sockets are closed and the higher vpid is
<br>
directed to retry establishing a connection.
<br>
<p>in btl/tcp, the useless socket is closed (e.g. the one that was connect-ed
<br>
on the lower vpid and the one that was accept-ed on the higher vpid.
<br>
<p><p>my first impression is that oob/tcp is un-necessary complex and it should
<br>
use the simpler and most efficient protocol of btl/tcp.
<br>
that being said, this conclusion could be too naive and for some good
<br>
reasons i ignore, the btl/tcp handshake protocol might not be a good fit
<br>
for oob/tcp.
<br>
<p>any thoughts ?
<br>
<p>i will revamp oob/tcp in order to use the same btl/tcp handshake protocol
<br>
from tomorrow unless indicated otherwise
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15885/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15886.php">Ralph Castain: "Re: [OMPI devel] race condition in oob/tcp"</a>
<li><strong>Previous message:</strong> <a href="15884.php">George Bosilca: "Re: [OMPI devel] race condition in oob/tcp"</a>
<li><strong>In reply to:</strong> <a href="15884.php">George Bosilca: "Re: [OMPI devel] race condition in oob/tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15886.php">Ralph Castain: "Re: [OMPI devel] race condition in oob/tcp"</a>
<li><strong>Reply:</strong> <a href="15886.php">Ralph Castain: "Re: [OMPI devel] race condition in oob/tcp"</a>
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
