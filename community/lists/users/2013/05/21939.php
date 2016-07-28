<?
$subject_val = "[OMPI users] MPIIO max record size";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 21 15:19:10 2013" -->
<!-- isoreceived="20130521191910" -->
<!-- sent="Tue, 21 May 2013 12:18:58 -0700" -->
<!-- isosent="20130521191858" -->
<!-- name="Tom Rosmond" -->
<!-- email="rosmond_at_[hidden]" -->
<!-- subject="[OMPI users] MPIIO max record size" -->
<!-- id="1369163938.4936.13.camel_at_cedar.reachone.com" -->
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
<strong>Subject:</strong> [OMPI users] MPIIO max record size<br>
<strong>From:</strong> Tom Rosmond (<em>rosmond_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-21 15:18:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21940.php">Orion Poplawski: "[OMPI users] dmtcp status"</a>
<li><strong>Previous message:</strong> <a href="21938.php">Jeff Squyres (jsquyres): "Re: [OMPI users] minor change request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21946.php">Eric Chamberland: "Re: [OMPI users] MPIIO max record size"</a>
<li><strong>Reply:</strong> <a href="21946.php">Eric Chamberland: "Re: [OMPI users] MPIIO max record size"</a>
<li><strong>Maybe reply:</strong> <a href="21949.php">Eric Chamberland: "Re: [OMPI users] MPIIO max record size"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello:
<br>
<p>A colleague and I are running an atmospheric ensemble data assimilation
<br>
system using MPIIO.  We find that if for an individual
<br>
MPI_FILE_READ_AT_ALL the block of data read exceeds 2**31 elements, the
<br>
program fails.  Our application is 32 bit fortran (Intel), so we
<br>
certainly can see why this might be expected.  Is this the case?  We
<br>
have a workaround by doing multiple reads from the file while moving the
<br>
file view, so it isn't a serious problem.
<br>
<p>Thanks for any advice or suggestions
<br>
<p>T. Rosmond
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21940.php">Orion Poplawski: "[OMPI users] dmtcp status"</a>
<li><strong>Previous message:</strong> <a href="21938.php">Jeff Squyres (jsquyres): "Re: [OMPI users] minor change request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21946.php">Eric Chamberland: "Re: [OMPI users] MPIIO max record size"</a>
<li><strong>Reply:</strong> <a href="21946.php">Eric Chamberland: "Re: [OMPI users] MPIIO max record size"</a>
<li><strong>Maybe reply:</strong> <a href="21949.php">Eric Chamberland: "Re: [OMPI users] MPIIO max record size"</a>
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
