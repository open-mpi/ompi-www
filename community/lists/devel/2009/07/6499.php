<?
$subject_val = "Re: [OMPI devel] pb with --enable-mpi-threads --enable-progress-threads options";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 22 11:14:24 2009" -->
<!-- isoreceived="20090722151424" -->
<!-- sent="Wed, 22 Jul 2009 09:14:18 -0600" -->
<!-- isosent="20090722151418" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] pb with --enable-mpi-threads --enable-progress-threads options" -->
<!-- id="71d2d8cc0907220814h7bb060a2s93c1821cdba828ba_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI devel] pb with --enable-mpi-threads --enable-progress-threads options" -->
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
<strong>Subject:</strong> Re: [OMPI devel] pb with --enable-mpi-threads --enable-progress-threads options<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-22 11:14:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6500.php">Sylvain Jeaugey: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>Previous message:</strong> <a href="6498.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>Maybe in reply to:</strong> <a href="6493.php">Bernard Secher - SFME/LGLS: "[OMPI devel] pb with --enable-mpi-threads --enable-progress-threads options"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
***Progress thread support currently does not work, and may never be fully
<br>
implemented. If you remove that configure option, it should work.*
<br>
<p><p>**
<br>
<p>*I'm pretty sure we only left that option so developers could play at fixing
<br>
it, though I don't know of anyone actually making the attempt at the moment
<br>
(certainly, it would require significant changes to ORTE).
<br>
*
<br>
<p>*
<br>
*
<br>
<p>*From:* Bernard Secher - SFME/LGLS (*bernard.secher_at_[hidden]*)
<br>
*Date:* 2009-07-22 06:29:32
<br>
<p><p>&nbsp;Hi,
<br>
<p>I have added the two following options: --enable-mpi-threads
<br>
--enable-progress-threads in configure step of openmpi-1.3.3.
<br>
<p>After install, mpirun command doesn't work on a very simple mpi program.
<br>
There is a dead lock and program is not executed.
<br>
Bernard
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6499/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6500.php">Sylvain Jeaugey: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>Previous message:</strong> <a href="6498.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>Maybe in reply to:</strong> <a href="6493.php">Bernard Secher - SFME/LGLS: "[OMPI devel] pb with --enable-mpi-threads --enable-progress-threads options"</a>
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
