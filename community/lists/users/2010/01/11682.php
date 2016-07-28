<?
$subject_val = "[OMPI users] Question about senting short MPI messages using RDMA";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  4 11:09:14 2010" -->
<!-- isoreceived="20100104160914" -->
<!-- sent="Mon, 4 Jan 2010 11:09:10 -0500" -->
<!-- isosent="20100104160910" -->
<!-- name="Dong Li" -->
<!-- email="lid_at_[hidden]" -->
<!-- subject="[OMPI users] Question about senting short MPI messages using RDMA" -->
<!-- id="5f330bae1001040809x46808d52s5180639b93061b9b_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Question about senting short MPI messages using RDMA<br>
<strong>From:</strong> Dong Li (<em>lid_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-04 11:09:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11683.php">Eugene Loh: "Re: [OMPI users] openib btl slows down application"</a>
<li><strong>Previous message:</strong> <a href="11681.php">Ake Sandgren: "[OMPI users] openmpi 1.4 and pgi 10"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11686.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question about senting short MPI messages using RDMA"</a>
<li><strong>Maybe reply:</strong> <a href="11686.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question about senting short MPI messages using RDMA"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, guys.
<br>
As I understand, to send short MPI messages, OpenMPI copies the
<br>
messages to preallocated buffer and then uses RDMA.
<br>
<p>I was wondering if we can avoid the overhead of memory copy. If the
<br>
user buffers for short messages are reused a lot, we can just register
<br>
the user buffer instead of using preallocated buffer. Then we can do
<br>
RDMA directly from the user buffer instead of the preallocated buffer.
<br>
But if the user buffers are not reused, we will suffer from the
<br>
overhead of memory registration.
<br>
<p>Besides the overhead of memory registration, is there any other reason
<br>
that prevent you to do RDMA directly from the user buffer for short
<br>
messages?
<br>
<p>Thank you.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11683.php">Eugene Loh: "Re: [OMPI users] openib btl slows down application"</a>
<li><strong>Previous message:</strong> <a href="11681.php">Ake Sandgren: "[OMPI users] openmpi 1.4 and pgi 10"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11686.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question about senting short MPI messages using RDMA"</a>
<li><strong>Maybe reply:</strong> <a href="11686.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question about senting short MPI messages using RDMA"</a>
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
