<?
$subject_val = "[OMPI devel] why mx_forget in mca_btl_mx_prepare_dst?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 21 04:35:05 2009" -->
<!-- isoreceived="20091021083505" -->
<!-- sent="Wed, 21 Oct 2009 10:33:30 +0200" -->
<!-- isosent="20091021083330" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[OMPI devel] why mx_forget in mca_btl_mx_prepare_dst?" -->
<!-- id="4ADEC75A.6030405_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] why mx_forget in mca_btl_mx_prepare_dst?<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-21 04:33:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6982.php">Pavel Shamis (Pasha): "[OMPI devel] Trunk is brokem ?"</a>
<li><strong>Previous message:</strong> <a href="6980.php">Ralph Castain: "[OMPI devel] OMPI 1.3.4rc1 available"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6984.php">George Bosilca: "Re: [OMPI devel] why mx_forget in mca_btl_mx_prepare_dst?"</a>
<li><strong>Reply:</strong> <a href="6984.php">George Bosilca: "Re: [OMPI devel] why mx_forget in mca_btl_mx_prepare_dst?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I am debugging a crash with OMPI 1.3.3 BTL over Open-MX. It's crashing
<br>
will trying to store incoming data in the OMPI receive buffer, but OMPI
<br>
seems to have already freed the buffer even if the MX request is not
<br>
complete yet. It looks like this is caused by mca_btl_mx_prepare_dst()
<br>
posting the receive and then calling mx_forget() immediately. The OMPI
<br>
r17452 by George introduced this. Commit log says &quot;Improve the
<br>
performance of the MX BTL. Correct the fake PUT protocol.&quot; I don't
<br>
understand how this works.
<br>
<p>mx_forget() is supposed to be used when you don't care anymore about a
<br>
message or a request, not really for performance purpose. It should not
<br>
help much in &quot;normal&quot; cases since you usually need to know when the
<br>
receive request is completed before you can actually use the received
<br>
data. And completion order is not guaranteed anyway, so it's hard to
<br>
guess when a request will complete if mx_forget() disabled the actual
<br>
completion notification.
<br>
<p>Are you calling mx_forget() because you have another way to know when
<br>
the message will be received? If so, how?
<br>
<p>When does OMPI free the fragment that is passed to mx_irecv in
<br>
mca_btl_mx_prepare_dst?
<br>
<p>thanks,
<br>
Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6982.php">Pavel Shamis (Pasha): "[OMPI devel] Trunk is brokem ?"</a>
<li><strong>Previous message:</strong> <a href="6980.php">Ralph Castain: "[OMPI devel] OMPI 1.3.4rc1 available"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6984.php">George Bosilca: "Re: [OMPI devel] why mx_forget in mca_btl_mx_prepare_dst?"</a>
<li><strong>Reply:</strong> <a href="6984.php">George Bosilca: "Re: [OMPI devel] why mx_forget in mca_btl_mx_prepare_dst?"</a>
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
