<?
$subject_val = "[OMPI users] mpirun: Symbol `orte_schizo' has different size in shared object, consider re-linking";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 19 16:04:59 2016" -->
<!-- isoreceived="20160719200459" -->
<!-- sent="Tue, 19 Jul 2016 14:04:52 -0600" -->
<!-- isosent="20160719200452" -->
<!-- name="Nathaniel Graham" -->
<!-- email="nrgraham23_at_[hidden]" -->
<!-- subject="[OMPI users] mpirun: Symbol `orte_schizo' has different size in shared object, consider re-linking" -->
<!-- id="CABfhiS3svEh4w21h24Ff3KMChB-=vQTGZ6FsWKZix=kQ08-URw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] mpirun: Symbol `orte_schizo' has different size in shared object, consider re-linking<br>
<strong>From:</strong> Nathaniel Graham (<em>nrgraham23_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-19 16:04:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29695.php">Ralph Castain: "Re: [OMPI users] mpirun: Symbol `orte_schizo' has different size in shared object, consider re-linking"</a>
<li><strong>Previous message:</strong> <a href="29693.php">Gilles Gouaillardet: "Re: [OMPI users] Help - Client / server - app hangs in connect/accept by the second or next client that wants to connect to server"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29695.php">Ralph Castain: "Re: [OMPI users] mpirun: Symbol `orte_schizo' has different size in shared object, consider re-linking"</a>
<li><strong>Reply:</strong> <a href="29695.php">Ralph Castain: "Re: [OMPI users] mpirun: Symbol `orte_schizo' has different size in shared object, consider re-linking"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I am trying to run the OSU tests for some results for a poster, but I am
<br>
getting the following error:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mpirun: Symbol `orte_schizo' has different size in shared object,
<br>
consider re-linking
<br>
<p>I am building off master with gcc on Red Hat Enterprise Linux Server
<br>
release 6.7.
<br>
<p>My config command is:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;./configure --prefix=/users/ngraham/ompi_install --enable-mpi-java
<br>
<p>Everything builds fine, but I get this issue with mpirun.  I am running a
<br>
Java program, but I do not believe this is Java related.  The mpirun
<br>
command I am using is:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mpirun -np 2 Java OSUBW
<br>
<p>-Nathan
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29694/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29695.php">Ralph Castain: "Re: [OMPI users] mpirun: Symbol `orte_schizo' has different size in shared object, consider re-linking"</a>
<li><strong>Previous message:</strong> <a href="29693.php">Gilles Gouaillardet: "Re: [OMPI users] Help - Client / server - app hangs in connect/accept by the second or next client that wants to connect to server"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29695.php">Ralph Castain: "Re: [OMPI users] mpirun: Symbol `orte_schizo' has different size in shared object, consider re-linking"</a>
<li><strong>Reply:</strong> <a href="29695.php">Ralph Castain: "Re: [OMPI users] mpirun: Symbol `orte_schizo' has different size in shared object, consider re-linking"</a>
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
