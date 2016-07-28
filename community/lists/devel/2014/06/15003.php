<?
$subject_val = "Re: [OMPI devel] iallgather failures with coll ml";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 11 16:39:26 2014" -->
<!-- isoreceived="20140611203926" -->
<!-- sent="Wed, 11 Jun 2014 13:39:24 -0700" -->
<!-- isosent="20140611203924" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] iallgather failures with coll ml" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F3604701DF8B_at_HQMAIL02.nvidia.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3AF945EBF4D3EC41AFE44EED9B0585F36046C6EA79_at_HQMAIL02.nvidia.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] iallgather failures with coll ml<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-11 16:39:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15004.php">Nathan Hjelm: "Re: [OMPI devel] iallgather failures with coll ml"</a>
<li><strong>Previous message:</strong> <a href="15002.php">Jeff Squyres (jsquyres): "[OMPI devel] Link to this post"</a>
<li><strong>In reply to:</strong> <a href="14989.php">Rolf vandeVaart: "[OMPI devel] iallgather failures with coll ml"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15004.php">Nathan Hjelm: "Re: [OMPI devel] iallgather failures with coll ml"</a>
<li><strong>Reply:</strong> <a href="15004.php">Nathan Hjelm: "Re: [OMPI devel] iallgather failures with coll ml"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hearing no response, I assume this is not a known issue so I submitted <a href="https://svn.open-mpi.org/trac/ompi/ticket/4709">https://svn.open-mpi.org/trac/ompi/ticket/4709</a>
<br>
Nathan, is this something that you can look at?
<br>
<p>Rolf
<br>
<p>From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Rolf vandeVaart
<br>
Sent: Friday, June 06, 2014 1:55 PM
<br>
To: devel_at_[hidden]
<br>
Subject: [OMPI devel] iallgather failures with coll ml
<br>
<p>On the trunk, I am seeing failures of the ibm tests iallgather and iallgather_in_place.  Is this a known issue?
<br>
<p>$ mpirun --mca btl self,sm,tcp --mca coll ml,basic,libnbc --host drossetti-ivy0,drossetti-ivy0,drossetti-ivy1,drossetti-ivy1 -np 4 iallgather
<br>
[**ERROR**]: MPI_COMM_WORLD rank 0, file iallgather.c:77:
<br>
bad answer (0) at index 1 of 4 (should be 1)
<br>
[**ERROR**]: MPI_COMM_WORLD rank 1, file iallgather.c:77:
<br>
bad answer (0) at index 1 of 4 (should be 1)
<br>
<p>Interestingly, there is an MCA param to disable it in coll ml which allows the test to pass.
<br>
<p>$ mpirun --mca coll_ml_disable_allgather 1 --mca btl self,sm,tcp --mca coll ml,basic,libnbc --host drossetti-ivy0,drossetti-ivy0,drossetti-ivy1,drossetti-ivy1 -np 4 iallgather
<br>
$ echo $?
<br>
0
<br>
<p><p><p>________________________________
<br>
This email message is for the sole use of the intended recipient(s) and may contain confidential information.  Any unauthorized review, use, disclosure or distribution is prohibited.  If you are not the intended recipient, please contact the sender by reply email and destroy all copies of the original message.
<br>
________________________________
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15003/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15004.php">Nathan Hjelm: "Re: [OMPI devel] iallgather failures with coll ml"</a>
<li><strong>Previous message:</strong> <a href="15002.php">Jeff Squyres (jsquyres): "[OMPI devel] Link to this post"</a>
<li><strong>In reply to:</strong> <a href="14989.php">Rolf vandeVaart: "[OMPI devel] iallgather failures with coll ml"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15004.php">Nathan Hjelm: "Re: [OMPI devel] iallgather failures with coll ml"</a>
<li><strong>Reply:</strong> <a href="15004.php">Nathan Hjelm: "Re: [OMPI devel] iallgather failures with coll ml"</a>
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
