<?
$subject_val = "[OMPI users] send_request error with allocate";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 28 16:45:04 2015" -->
<!-- isoreceived="20150928204504" -->
<!-- sent="Mon, 28 Sep 2015 22:45:03 +0200" -->
<!-- isosent="20150928204503" -->
<!-- name="Diego Avesani" -->
<!-- email="diego.avesani_at_[hidden]" -->
<!-- subject="[OMPI users] send_request error with allocate" -->
<!-- id="CAG8o1y4fxMwLxQ-MGzQRdQz6B=26OrvQ3CVkeUFfVGDeKAMxtw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] send_request error with allocate<br>
<strong>From:</strong> Diego Avesani (<em>diego.avesani_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-28 16:45:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27704.php">Jeff Squyres (jsquyres): "Re: [OMPI users] send_request error with allocate"</a>
<li><strong>Previous message:</strong> <a href="27702.php">Dave Goodell (dgoodell): "Re: [OMPI users] Using POSIX shared memory as send buffer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27704.php">Jeff Squyres (jsquyres): "Re: [OMPI users] send_request error with allocate"</a>
<li><strong>Reply:</strong> <a href="27704.php">Jeff Squyres (jsquyres): "Re: [OMPI users] send_request error with allocate"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>I have to use a send_request in a MPI_WAITALL.
<br>
Here the strange things:
<br>
<p>If I use at the begging of the SUBROUTINE:
<br>
<p>INTEGER :: send_request(3), recv_request(3)
<br>
<p>I have no problem, but if I use
<br>
<p>USE COMONVARS,ONLY : nMsg
<br>
with nMsg=3
<br>
<p>and after that I declare
<br>
<p>INTEGER :: send_request(nMsg), recv_request(nMsg), I get the following
<br>
error:
<br>
<p>[Lap] *** An error occurred in MPI_Waitall
<br>
[Lap] *** reported by process [139726485585921,0]
<br>
[Lap] *** on communicator MPI_COMM_WORLD
<br>
[Lap] *** MPI_ERR_REQUEST: invalid request
<br>
[Lap] *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now
<br>
abort,
<br>
[Lap] ***    and potentially your MPI job)
<br>
forrtl: error (78): process killed (SIGTERM)
<br>
<p>Someone could please explain to me where I am wrong?
<br>
<p>Thanks
<br>
<p>Diego
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27703/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27704.php">Jeff Squyres (jsquyres): "Re: [OMPI users] send_request error with allocate"</a>
<li><strong>Previous message:</strong> <a href="27702.php">Dave Goodell (dgoodell): "Re: [OMPI users] Using POSIX shared memory as send buffer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27704.php">Jeff Squyres (jsquyres): "Re: [OMPI users] send_request error with allocate"</a>
<li><strong>Reply:</strong> <a href="27704.php">Jeff Squyres (jsquyres): "Re: [OMPI users] send_request error with allocate"</a>
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
