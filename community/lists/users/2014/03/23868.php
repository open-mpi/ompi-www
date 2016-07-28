<?
$subject_val = "[OMPI users] efficient strategy with temporary message copy";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar 16 22:24:11 2014" -->
<!-- isoreceived="20140317022411" -->
<!-- sent="Mon, 17 Mar 2014 03:24:10 +0100" -->
<!-- isosent="20140317022410" -->
<!-- name="christophe petit" -->
<!-- email="christophe.petit09_at_[hidden]" -->
<!-- subject="[OMPI users] efficient strategy with temporary message copy" -->
<!-- id="CAPW4YGKX7joVYhtprfgYqDbhJo8nA-RUm6reagjvL_VPf6jusQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] efficient strategy with temporary message copy<br>
<strong>From:</strong> christophe petit (<em>christophe.petit09_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-16 22:24:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23869.php">madhurima madhunapanthula: "[OMPI users] OpenMpi-java Examples"</a>
<li><strong>Previous message:</strong> <a href="23867.php">Gustavo Correa: "Re: [OMPI users] Open MPI 1.7.4 with --enable-mpi-thread-multiple gives MPI_Recv error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23872.php">Jeff Squyres (jsquyres): "Re: [OMPI users] efficient strategy with temporary message copy"</a>
<li><strong>Reply:</strong> <a href="23872.php">Jeff Squyres (jsquyres): "Re: [OMPI users] efficient strategy with temporary message copy"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I am studying the optimization strategy when the number of communication
<br>
functions in a code
<br>
is high.
<br>
<p>My courses on MPI say two things for optimization which are contradictory :
<br>
<p>1*) You have to use temporary message copy to allow non-blocking sending
<br>
and uncouple the sending and receiving
<br>
<p>2*) Avoid using temporary message copy because the copy will add extra cost
<br>
on execution time.
<br>
<p>And then, we are adviced to do :
<br>
<p>- replace MPI_SEND by MPI_SSEND (synchroneous blocking sending) : it is
<br>
said that execution is divided by a factor 2
<br>
<p>- use MPI_ISSEND and MPI_IRECV with MPI_WAIT function to synchronize
<br>
(synchroneous non-blocking sending) : it is said that execution is divided
<br>
by a factor 3
<br>
<p>So what's the best optimization ? Do we have to use temporary message copy
<br>
or not and if yes, what's the case for ?
<br>
<p>Thanks
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23868/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23869.php">madhurima madhunapanthula: "[OMPI users] OpenMpi-java Examples"</a>
<li><strong>Previous message:</strong> <a href="23867.php">Gustavo Correa: "Re: [OMPI users] Open MPI 1.7.4 with --enable-mpi-thread-multiple gives MPI_Recv error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23872.php">Jeff Squyres (jsquyres): "Re: [OMPI users] efficient strategy with temporary message copy"</a>
<li><strong>Reply:</strong> <a href="23872.php">Jeff Squyres (jsquyres): "Re: [OMPI users] efficient strategy with temporary message copy"</a>
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
