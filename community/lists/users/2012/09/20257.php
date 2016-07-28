<?
$subject_val = "[OMPI users] A question on MPI_Probe";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 21 18:33:05 2012" -->
<!-- isoreceived="20120921223305" -->
<!-- sent="Fri, 21 Sep 2012 23:32:59 +0100 (BST)" -->
<!-- isosent="20120921223259" -->
<!-- name="devendra rai" -->
<!-- email="rai.devendra_at_[hidden]" -->
<!-- subject="[OMPI users] A question on MPI_Probe" -->
<!-- id="1348266779.3060.YahooMailNeo_at_web133206.mail.ir2.yahoo.com" -->
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
<strong>Subject:</strong> [OMPI users] A question on MPI_Probe<br>
<strong>From:</strong> devendra rai (<em>rai.devendra_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-21 18:32:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20258.php">Siegmar Gross: "[OMPI users] problem with mpijavac in openmpi-1.9a1r27359"</a>
<li><strong>Previous message:</strong> <a href="20256.php">Iliev, Hristo: "Re: [OMPI users] Algorithms used in MPI_BCast"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20308.php">Jeff Squyres: "Re: [OMPI users] A question on MPI_Probe"</a>
<li><strong>Reply:</strong> <a href="20308.php">Jeff Squyres: "Re: [OMPI users] A question on MPI_Probe"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/10/20360.php">Iliev, Hristo: "Re: [OMPI users] A question on MPI_Probe"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,

I believe my understanding of MPI_Probe is not correct. Here's what I have as a setup:

Two MPI processes, A and B. Process A sends a large message, M1 using tag T1, and a small message, M2 using tag T2. The recepient of both messages is B.

The order of sending the messages is M1 and then M2.

The process B however executes MPI_Probe to test if the message with tag T2 is available. B will accept M1 after it has received M2 first.

I am under the impression that using information gained from MPI_Probe, I can choose not to receive message M1, and instead look for M2.

However, I see that M2 is never received by B (although A confirms that both M1 and M2 have been sent).

I am little confused. Can someone explain why B cannot receive M2? At least, does MPI allow receiving messages in the order that I have just described?

Thanks a lot.

Devendra Rai.
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20257/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20258.php">Siegmar Gross: "[OMPI users] problem with mpijavac in openmpi-1.9a1r27359"</a>
<li><strong>Previous message:</strong> <a href="20256.php">Iliev, Hristo: "Re: [OMPI users] Algorithms used in MPI_BCast"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20308.php">Jeff Squyres: "Re: [OMPI users] A question on MPI_Probe"</a>
<li><strong>Reply:</strong> <a href="20308.php">Jeff Squyres: "Re: [OMPI users] A question on MPI_Probe"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/10/20360.php">Iliev, Hristo: "Re: [OMPI users] A question on MPI_Probe"</a>
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
