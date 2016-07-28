<?
$subject_val = "[OMPI users] openmpi 1.4 and barrier";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  1 13:24:22 2009" -->
<!-- isoreceived="20091001172422" -->
<!-- sent="Thu, 1 Oct 2009 13:24:17 -0400" -->
<!-- isosent="20091001172417" -->
<!-- name="Michael Di Domenico" -->
<!-- email="mdidomenico4_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi 1.4 and barrier" -->
<!-- id="e75d22a90910011024j548244d8n1c6b67a4c0ca7f21_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] openmpi 1.4 and barrier<br>
<strong>From:</strong> Michael Di Domenico (<em>mdidomenico4_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-01 13:24:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10850.php">Peter Thompson: "[OMPI users] memalign usage in OpenMPI and it's consequences for TotalVIew"</a>
<li><strong>Previous message:</strong> <a href="10848.php">Jeff Squyres: "Re: [OMPI users] How to force the configure, and make to build a 32 bit opmi on a 64 bit linux ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10851.php">Jeff Squyres: "Re: [OMPI users] openmpi 1.4 and barrier"</a>
<li><strong>Reply:</strong> <a href="10851.php">Jeff Squyres: "Re: [OMPI users] openmpi 1.4 and barrier"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just upgraded to the devel snapshot of 1.4a1r22031
<br>
<p>when i run a simple hello world with a barrier i get
<br>
<p>btl_tcp_endpoint.c:484:mca_btl_tcp_endpoint_recv_connect_ack] received
<br>
unexpected process identifier
<br>
<p>if i pull the barrier out the hello world runs fine
<br>
<p>interestingly enough, i can run IMB which also uses barrier and it
<br>
runs just fine
<br>
<p>Any thoughts?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10850.php">Peter Thompson: "[OMPI users] memalign usage in OpenMPI and it's consequences for TotalVIew"</a>
<li><strong>Previous message:</strong> <a href="10848.php">Jeff Squyres: "Re: [OMPI users] How to force the configure, and make to build a 32 bit opmi on a 64 bit linux ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10851.php">Jeff Squyres: "Re: [OMPI users] openmpi 1.4 and barrier"</a>
<li><strong>Reply:</strong> <a href="10851.php">Jeff Squyres: "Re: [OMPI users] openmpi 1.4 and barrier"</a>
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
