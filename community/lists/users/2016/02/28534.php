<?
$subject_val = "[OMPI users] readv failed How to debug?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 15 17:28:58 2016" -->
<!-- isoreceived="20160215222858" -->
<!-- sent="Mon, 15 Feb 2016 14:28:58 -0800" -->
<!-- isosent="20160215222858" -->
<!-- name="JR Cary" -->
<!-- email="cary_at_[hidden]" -->
<!-- subject="[OMPI users] readv failed How to debug?" -->
<!-- id="56C2512A.2050703_at_txcorp.com" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] readv failed How to debug?<br>
<strong>From:</strong> JR Cary (<em>cary_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-15 17:28:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28535.php">Gilles Gouaillardet: "Re: [OMPI users] readv failed How to debug?"</a>
<li><strong>Previous message:</strong> <a href="28533.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Open MPI backwards incompatibility issue in statically linked program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28535.php">Gilles Gouaillardet: "Re: [OMPI users] readv failed How to debug?"</a>
<li><strong>Reply:</strong> <a href="28535.php">Gilles Gouaillardet: "Re: [OMPI users] readv failed How to debug?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We have distributed a binary to a person with a Linux cluster. When
<br>
he runs our binary, he gets
<br>
<p>[server1:10978] *** An error occurred in MPI_Bcast
<br>
[server1:10978] *** on communicator MPI COMMUNICATOR 8 DUP FROM 7
<br>
[server1:10978] *** MPI_ERR_TRUNCATE: message truncated
<br>
[server1:10978] *** MPI_ERRORS_ARE_FATAL: your MPI job will now abort
<br>
[server2][[14125,1],2][/..../openmpi-1.6.5/ompi/mca/btl/tcp/btl_tcp_frag.c:215:mca_btl_tcp_frag_recv] 
<br>
mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)
<br>
<p>Anyone have any ideas on how to debug this?
<br>
<p>Thanks......John Cary
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28535.php">Gilles Gouaillardet: "Re: [OMPI users] readv failed How to debug?"</a>
<li><strong>Previous message:</strong> <a href="28533.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Open MPI backwards incompatibility issue in statically linked program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28535.php">Gilles Gouaillardet: "Re: [OMPI users] readv failed How to debug?"</a>
<li><strong>Reply:</strong> <a href="28535.php">Gilles Gouaillardet: "Re: [OMPI users] readv failed How to debug?"</a>
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
