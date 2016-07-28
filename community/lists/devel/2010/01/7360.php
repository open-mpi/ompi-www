<?
$subject_val = "Re: [OMPI devel] PML csum: checksum for RDMA transfers?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 26 11:12:42 2010" -->
<!-- isoreceived="20100126161242" -->
<!-- sent="Tue, 26 Jan 2010 21:42:36 +0530" -->
<!-- isosent="20100126161236" -->
<!-- name="Nysal Jan" -->
<!-- email="jnysal_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] PML csum: checksum for RDMA transfers?" -->
<!-- id="5d5f7eba1001260812t267bd28bib188f46922c71f30_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="85452633-3378-4AB9-A8CE-C1D044F0BA7E_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] PML csum: checksum for RDMA transfers?<br>
<strong>From:</strong> Nysal Jan (<em>jnysal_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-26 11:12:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7361.php">Jeff Squyres: "[OMPI devel] 1.5 updates"</a>
<li><strong>Previous message:</strong> <a href="7359.php">Jeff Squyres: "[OMPI devel] CMR SVN commit messages"</a>
<li><strong>In reply to:</strong> <a href="7358.php">Jeff Squyres: "Re: [OMPI devel] PML csum: checksum for RDMA transfers?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If I remember correctly the RDMA write based data transfers are checksummed.
<br>
The checksums are sent to the receiver's side via the FIN fragment sent
<br>
after the RDMA.
<br>
<p>--Nysal
<br>
<p>On Tue, Jan 26, 2010 at 9:53 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Jan 19, 2010, at 9:59 AM, Sebastian Rinke wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm using csum PML to detect errors in data transfers.
</span><br>
<span class="quotelev2">&gt; &gt; Regarding RDMA transfers (in the pipline protocol for instance),
</span><br>
<span class="quotelev2">&gt; &gt; is there an error checking enabled as well?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I believe so.  IBM -- can you confirm?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7360/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7361.php">Jeff Squyres: "[OMPI devel] 1.5 updates"</a>
<li><strong>Previous message:</strong> <a href="7359.php">Jeff Squyres: "[OMPI devel] CMR SVN commit messages"</a>
<li><strong>In reply to:</strong> <a href="7358.php">Jeff Squyres: "Re: [OMPI devel] PML csum: checksum for RDMA transfers?"</a>
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
