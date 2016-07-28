<?
$subject_val = "[OMPI users] Urgent Question regarding, MPI_ANY_SOURCE.";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 14 19:55:29 2011" -->
<!-- isoreceived="20110714235529" -->
<!-- sent="Thu, 14 Jul 2011 16:55:19 -0700 (PDT)" -->
<!-- isosent="20110714235519" -->
<!-- name="Mudassar Majeed" -->
<!-- email="mudassarm30_at_[hidden]" -->
<!-- subject="[OMPI users] Urgent Question regarding, MPI_ANY_SOURCE." -->
<!-- id="1310687719.39122.YahooMailNeo_at_web121704.mail.ne1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE.<br>
<strong>From:</strong> Mudassar Majeed (<em>mudassarm30_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-14 19:55:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16923.php">Jeff Squyres: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<li><strong>Previous message:</strong> <a href="16921.php">Jeff Squyres: "Re: [OMPI users] MPI_Isend delay"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16923.php">Jeff Squyres: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<li><strong>Reply:</strong> <a href="16923.php">Jeff Squyres: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<li><strong>Maybe reply:</strong> <a href="16939.php">Mudassar Majeed: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello people, 
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; I am trapped in the following problem plz help me. Suppose a process A sends a message to process B. The process B will receive the message with MPI_Recv with MPI_ANY_SOURCE in the source argument. Let say process B does not know that A is the sender. But I want B to receive message from process A (the one who actually sends the message to process B). But if I use MPI_ANY_SOURCE, then any message from any source is captured by process B (let say there are other processes sending messages). Instead of MPI_ANY_SOURCE I cannot use A in the source argument as B does not know about the sender. What should I do in this situation ?

regards,
Mudassar Majeed

<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16922/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16923.php">Jeff Squyres: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<li><strong>Previous message:</strong> <a href="16921.php">Jeff Squyres: "Re: [OMPI users] MPI_Isend delay"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16923.php">Jeff Squyres: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<li><strong>Reply:</strong> <a href="16923.php">Jeff Squyres: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<li><strong>Maybe reply:</strong> <a href="16939.php">Mudassar Majeed: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
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
