<?
$subject_val = "[OMPI users] MPI_Gatherv and 0 size?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 23 02:55:30 2009" -->
<!-- isoreceived="20090223075530" -->
<!-- sent="Mon, 23 Feb 2009 08:55:22 +0100" -->
<!-- isosent="20090223075522" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Gatherv and 0 size?" -->
<!-- id="9b0da5ce0902222355t3adcd698q6bf85308aa6a093f_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Gatherv and 0 size?<br>
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-23 02:55:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8156.php">Raymond Wan: "Re: [OMPI users] round-robin scheduling question [hostfile]"</a>
<li><strong>Previous message:</strong> <a href="8154.php">Tee Wen Kai: "[OMPI users] How to quit asynchronous processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8164.php">George Bosilca: "Re: [OMPI users] MPI_Gatherv and 0 size?"</a>
<li><strong>Reply:</strong> <a href="8164.php">George Bosilca: "Re: [OMPI users] MPI_Gatherv and 0 size?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
I have an application in which various processes create different
<br>
amounts of data (including no data at all).
<br>
I have found that MPI_Scatterv and MPI_Gatherv do work with arrays
<br>
sendcounts or receivecounts containing zeros.
<br>
<p>Since i didn't find the case of 0 sizes in the descriptions
<br>
of these functions in the MPI reference, i wondered whether
<br>
the use of zeroes is legal or if i was simply lucky that it worked.
<br>
<p>An other point: currently i use 1-sized buffers in the
<br>
case of a 0-sized data transfer.
<br>
Now if 0-sized data transfer is legal, would it be ok to
<br>
pass NULL for the buffer?
<br>
<p>Thank You
<br>
&nbsp;&nbsp;Jody
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8156.php">Raymond Wan: "Re: [OMPI users] round-robin scheduling question [hostfile]"</a>
<li><strong>Previous message:</strong> <a href="8154.php">Tee Wen Kai: "[OMPI users] How to quit asynchronous processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8164.php">George Bosilca: "Re: [OMPI users] MPI_Gatherv and 0 size?"</a>
<li><strong>Reply:</strong> <a href="8164.php">George Bosilca: "Re: [OMPI users] MPI_Gatherv and 0 size?"</a>
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
