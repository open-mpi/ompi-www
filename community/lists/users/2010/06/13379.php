<?
$subject_val = "Re: [OMPI users] Cannot start (WAS: Segmentation fault / Address not mapped (1) with 2-node job on Rocks 5.2)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 22 15:56:38 2010" -->
<!-- isoreceived="20100622195638" -->
<!-- sent="Tue, 22 Jun 2010 21:56:33 +0200" -->
<!-- isosent="20100622195633" -->
<!-- name="Riccardo Murri" -->
<!-- email="riccardo.murri_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Cannot start (WAS: Segmentation fault / Address not mapped (1) with 2-node job on Rocks 5.2)" -->
<!-- id="AANLkTil5qyVBUeFiaQnOEnvTS_rkjO2Z3FfpVh80Q2DK_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="AANLkTin9d1MwXaMjG84jnB9AAJyihqXcEiu58RRDwDEl_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Cannot start (WAS: Segmentation fault / Address not mapped (1) with 2-node job on Rocks 5.2)<br>
<strong>From:</strong> Riccardo Murri (<em>riccardo.murri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-22 15:56:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13380.php">Rahul Nabar: "[OMPI users] subnet specification for MPI when multiple networks are present"</a>
<li><strong>Previous message:</strong> <a href="13378.php">Riccardo Murri: "Re: [OMPI users] Cannot start (WAS: Segmentation fault / Address not mapped (1) with 2-node job on Rocks 5.2)"</a>
<li><strong>In reply to:</strong> <a href="13378.php">Riccardo Murri: "Re: [OMPI users] Cannot start (WAS: Segmentation fault / Address not mapped (1) with 2-node job on Rocks 5.2)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry, just found out about the &quot;--debug-daemons&quot; option, which
<br>
allowed me to google a meaningful error message and find the solution
<br>
in the archives of this list.
<br>
<p>For the record, the problem was that the &quot;orted&quot; being launched on the
<br>
remote node is the one from the system-wide MPI install, not the one
<br>
in my home dir.
<br>
<p>It seems that &quot;-x PATH&quot; does not affect the search for &quot;orted&quot;; would
<br>
it make sense that &quot;-x FOO&quot; adds also a &quot; -o SendEnv=FOO&quot; in the &quot;ssh
<br>
remote-node orted&quot; invocation?
<br>
<p>Best regards,
<br>
Riccardo
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13380.php">Rahul Nabar: "[OMPI users] subnet specification for MPI when multiple networks are present"</a>
<li><strong>Previous message:</strong> <a href="13378.php">Riccardo Murri: "Re: [OMPI users] Cannot start (WAS: Segmentation fault / Address not mapped (1) with 2-node job on Rocks 5.2)"</a>
<li><strong>In reply to:</strong> <a href="13378.php">Riccardo Murri: "Re: [OMPI users] Cannot start (WAS: Segmentation fault / Address not mapped (1) with 2-node job on Rocks 5.2)"</a>
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
