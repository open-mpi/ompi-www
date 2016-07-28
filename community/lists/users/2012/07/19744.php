<?
$subject_val = "[OMPI users] Difference between read and write performance";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul  8 22:03:51 2012" -->
<!-- isoreceived="20120709020351" -->
<!-- sent="Mon, 9 Jul 2012 11:03:47 +0900" -->
<!-- isosent="20120709020347" -->
<!-- name="Ammar Ahmad Awan" -->
<!-- email="ammar.ahmad.awan_at_[hidden]" -->
<!-- subject="[OMPI users] Difference between read and write performance" -->
<!-- id="CAGSPLMkn0fP+UjkSrigroDoZ0zhqj3SUu7wFXLb7z-krQdJFSA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Difference between read and write performance<br>
<strong>From:</strong> Ammar Ahmad Awan (<em>ammar.ahmad.awan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-08 22:03:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19745.php">Fotis Georgatos: "[OMPI users] Announcing recent package builds of qtop for multiple distros"</a>
<li><strong>Previous message:</strong> <a href="19743.php">Gus Correa: "Re: [OMPI users] scatterv displacement unit"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear All,
<br>
<p>I am working on a micro-bechmarking code based on MPI. My program
<br>
writes a 256 million integers array to a file using multiple
<br>
processes. It reads the file back into the program using multiple
<br>
processes too. The problem is that there is a huge difference between
<br>
read and write performances.
<br>
<p>Write Time: 182609 micro-seconds
<br>
Read Time : 20196 micro-seconds
<br>
<p>The test system is a cluster comprising on 32 nodes and each node is
<br>
based on intel xeon. The file system is Network File System(NFSv3).
<br>
Has anyone else experience the same problem or can any one explain why
<br>
there is this big gap b/w the read and write performance?
<br>
<p>Kind Regards
<br>
-- Ammar
<br>
----------------------------------------------------------------------
<br>
Masters Student
<br>
Dept. Of Computer Engineering,
<br>
Kyung Hee University
<br>
----------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19745.php">Fotis Georgatos: "[OMPI users] Announcing recent package builds of qtop for multiple distros"</a>
<li><strong>Previous message:</strong> <a href="19743.php">Gus Correa: "Re: [OMPI users] scatterv displacement unit"</a>
<!-- nextthread="start" -->
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
