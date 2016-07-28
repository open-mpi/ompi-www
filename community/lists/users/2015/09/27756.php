<?
$subject_val = "Re: [OMPI users] send_request error with allocate";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 30 17:08:38 2015" -->
<!-- isoreceived="20150930210838" -->
<!-- sent="Wed, 30 Sep 2015 23:08:37 +0200" -->
<!-- isosent="20150930210837" -->
<!-- name="Diego Avesani" -->
<!-- email="diego.avesani_at_[hidden]" -->
<!-- subject="Re: [OMPI users] send_request error with allocate" -->
<!-- id="CAG8o1y6iu2nG+Wh32J_DT-7H+iKxjcEgi1-SWVnHuywzjtJA1Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="8CC9B359-5740-46F6-B9B8-BD35EEAEFF33_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] send_request error with allocate<br>
<strong>From:</strong> Diego Avesani (<em>diego.avesani_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-30 17:08:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/10/27757.php">Julien Bodart: "Re: [OMPI users] Problem using mpifort(Intel)"</a>
<li><strong>Previous message:</strong> <a href="27755.php">Jeff Squyres (jsquyres): "Re: [OMPI users] libfabric/usnic does not compile in 2.x"</a>
<li><strong>In reply to:</strong> <a href="27753.php">Jeff Squyres (jsquyres): "Re: [OMPI users] send_request error with allocate"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27708.php">Jeff Squyres (jsquyres): "Re: [OMPI users] send_request error with allocate"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Jeff, Dear Gilles, Dear All,
<br>
now is all more clear.
<br>
<p>I use CALL MPI_ISEND and CALL MPI_IRECV. Each CPU send once and revive
<br>
once, this implies that I have REQUEST(2) for WAITALL. However, sometimes
<br>
dome CPU does not send or receive anything, so I have to set REQUEST
<br>
= MPI_REQUEST_NULL in order to avoid errors.
<br>
<p>Really, Really thanks
<br>
you are wonderful,
<br>
again thanks
<br>
<p><p>On 30 September 2015 at 22:56, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; MPI_REQUEST_NULL
</span><br>
<p><p><p><p>Diego
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27756/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/10/27757.php">Julien Bodart: "Re: [OMPI users] Problem using mpifort(Intel)"</a>
<li><strong>Previous message:</strong> <a href="27755.php">Jeff Squyres (jsquyres): "Re: [OMPI users] libfabric/usnic does not compile in 2.x"</a>
<li><strong>In reply to:</strong> <a href="27753.php">Jeff Squyres (jsquyres): "Re: [OMPI users] send_request error with allocate"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27708.php">Jeff Squyres (jsquyres): "Re: [OMPI users] send_request error with allocate"</a>
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
