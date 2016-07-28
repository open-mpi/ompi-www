<?
$subject_val = "[OMPI users] Ok, I've got OpenMPI set up, now what?!";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 17 19:17:03 2010" -->
<!-- isoreceived="20100717231703" -->
<!-- sent="Sun, 18 Jul 2010 01:16:57 +0200" -->
<!-- isosent="20100717231657" -->
<!-- name="Daniel Janzon" -->
<!-- email="janzon_at_[hidden]" -->
<!-- subject="[OMPI users] Ok, I've got OpenMPI set up, now what?!" -->
<!-- id="AANLkTin_jq98Y0SuS3XWzsOQoFgB9usaKb1SjcPR36vr_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Ok, I've got OpenMPI set up, now what?!<br>
<strong>From:</strong> Daniel Janzon (<em>janzon_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-17 19:16:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13689.php">Ralph Castain: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<li><strong>Previous message:</strong> <a href="13687.php">Ralph Castain: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13690.php">Damien: "Re: [OMPI users] Ok, I've got OpenMPI set up, now what?!"</a>
<li><strong>Reply:</strong> <a href="13690.php">Damien: "Re: [OMPI users] Ok, I've got OpenMPI set up, now what?!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear OpenMPI Users,
<br>
<p>I successfully installed OpenMPI on some FreeBSD machines and I can
<br>
run MPI programs on the cluster. Yippie!
<br>
<p>But I'm not patient enough to write my own MPI-based routines. So I
<br>
thought maybe I could ask here for suggestions. I am primarily
<br>
interested in general linear algebra routines. The best would be to
<br>
for instance start Octave and just use it as normal, only that all
<br>
matrix operations would run on the cluster. Has anyone done that? The
<br>
octave-parallel package seems to be something different.
<br>
<p>I installed scalapack and the test files ran successfully with mpirun
<br>
(except a few of them). But the source code examples of scalapack
<br>
looks terrible. Is there no higher-level library that provides an API
<br>
with matrix operations, which have all MPI parallelism stuff handled
<br>
for you in the background? Certainly a smart piece of software can
<br>
decide better than me how to chunk up a matrix and pass it out to the
<br>
available processes.
<br>
<p>All the best,
<br>
Daniel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13689.php">Ralph Castain: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<li><strong>Previous message:</strong> <a href="13687.php">Ralph Castain: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13690.php">Damien: "Re: [OMPI users] Ok, I've got OpenMPI set up, now what?!"</a>
<li><strong>Reply:</strong> <a href="13690.php">Damien: "Re: [OMPI users] Ok, I've got OpenMPI set up, now what?!"</a>
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
