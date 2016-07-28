<?
$subject_val = "Re: [OMPI users] Question about senting short MPI messages using RDMA";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  4 17:36:09 2010" -->
<!-- isoreceived="20100104223609" -->
<!-- sent="Mon, 4 Jan 2010 16:33:17 -0600" -->
<!-- isosent="20100104223317" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about senting short MPI messages using RDMA" -->
<!-- id="58D723FE08DC6A4398E6596E38F3FA1705666F_at_XMB-RCD-205.cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI users] Question about senting short MPI messages using RDMA" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question about senting short MPI messages using RDMA<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-04 17:33:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11687.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi 1.4 and pgi 10"</a>
<li><strong>Previous message:</strong> <a href="11685.php">Eugene Loh: "Re: [OMPI users] openib btl slows down application"</a>
<li><strong>Maybe in reply to:</strong> <a href="11682.php">Dong Li: "[OMPI users] Question about senting short MPI messages using RDMA"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It's complicated, but the short answer is that a &quot;short&quot; message is defined as one where the cost of a memory copy doesn't matter. 
<br>

<br>
You could always use mpi_alloc_mem to get registered memory. But I don't recall offhand if we check to see if the memory is already registered for short messages (because the cost of the memcpy is insignificant). 
<br>

<br>
Yes, the cost of mem reg is one of the main drivers for these kinds of optimizations. 
<br>

<br>
-jms
<br>
Sent from my PDA.  No type good.
<br>

<br>
----- Original Message -----
<br>
From: users-bounces_at_[hidden] &lt;users-bounces_at_[hidden]&gt;
<br>
To: users_at_[hidden] &lt;users_at_[hidden]&gt;
<br>
Sent: Mon Jan 04 11:09:10 2010
<br>
Subject: [OMPI users] Question about senting short MPI messages using RDMA
<br>

<br>
Hi, guys.
<br>
As I understand, to send short MPI messages, OpenMPI copies the
<br>
messages to preallocated buffer and then uses RDMA.
<br>

<br>
I was wondering if we can avoid the overhead of memory copy. If the
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

<br>
Besides the overhead of memory registration, is there any other reason
<br>
that prevent you to do RDMA directly from the user buffer for short
<br>
messages?
<br>

<br>
Thank you.
<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11686/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11687.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi 1.4 and pgi 10"</a>
<li><strong>Previous message:</strong> <a href="11685.php">Eugene Loh: "Re: [OMPI users] openib btl slows down application"</a>
<li><strong>Maybe in reply to:</strong> <a href="11682.php">Dong Li: "[OMPI users] Question about senting short MPI messages using RDMA"</a>
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
