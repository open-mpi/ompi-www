<?
$subject_val = "[OMPI users] compiling OpenMPI 1.8.4 on system with multiarched SLURM libs (Ubuntu 15.04 prerelease)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 26 16:07:31 2015" -->
<!-- isoreceived="20150226210731" -->
<!-- sent="Thu, 26 Feb 2015 16:07:24 -0500" -->
<!-- isosent="20150226210724" -->
<!-- name="Lev Givon" -->
<!-- email="lev_at_[hidden]" -->
<!-- subject="[OMPI users] compiling OpenMPI 1.8.4 on system with multiarched SLURM libs (Ubuntu 15.04 prerelease)" -->
<!-- id="20150226210724.GA6101_at_avicenna.ee.columbia.edu" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] compiling OpenMPI 1.8.4 on system with multiarched SLURM libs (Ubuntu 15.04 prerelease)<br>
<strong>From:</strong> Lev Givon (<em>lev_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-26 16:07:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26406.php">Ralph Castain: "Re: [OMPI users] compiling OpenMPI 1.8.4 on system with multiarched SLURM libs (Ubuntu 15.04 prerelease)"</a>
<li><strong>Previous message:</strong> <a href="26404.php">Ralph Castain: "Re: [OMPI users] using MPI_Comm_spawn in OpenMPI 1.8.4 with SLURM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26406.php">Ralph Castain: "Re: [OMPI users] compiling OpenMPI 1.8.4 on system with multiarched SLURM libs (Ubuntu 15.04 prerelease)"</a>
<li><strong>Reply:</strong> <a href="26406.php">Ralph Castain: "Re: [OMPI users] compiling OpenMPI 1.8.4 on system with multiarched SLURM libs (Ubuntu 15.04 prerelease)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I recently tried to build OpenMPI 1.8.4 on a daily release of what will
<br>
eventually become Ubuntu 15.04 (64-bit) with the --with-slurm and --with-pmi
<br>
options on.  I noticed that the libpmi.so.0.0.0 library in Ubuntu 15.04 is now
<br>
in the multiarch location /usr/lib/x86_64-linux-gnu rather than /usr/lib; this
<br>
causes the configure script to complain that it can't find libpmi/libpmi2 in
<br>
/usr/lib or /usr/lib64. Setting LDFLAGS=-L/usr/lib/x86_64-linux-gnu and/or
<br>
LD_LIBRARY_PATH=/usr/lib/x86_64-linux-gnu doesn't seem to help. How can I get
<br>
configure find the pmi library when it is in a multiarch location?
<br>
<pre>
-- 
Lev Givon
Bionet Group | Neurokernel Project
<a href="http://www.columbia.edu/~lev/">http://www.columbia.edu/~lev/</a>
<a href="http://lebedov.github.io/">http://lebedov.github.io/</a>
<a href="http://neurokernel.github.io/">http://neurokernel.github.io/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26406.php">Ralph Castain: "Re: [OMPI users] compiling OpenMPI 1.8.4 on system with multiarched SLURM libs (Ubuntu 15.04 prerelease)"</a>
<li><strong>Previous message:</strong> <a href="26404.php">Ralph Castain: "Re: [OMPI users] using MPI_Comm_spawn in OpenMPI 1.8.4 with SLURM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26406.php">Ralph Castain: "Re: [OMPI users] compiling OpenMPI 1.8.4 on system with multiarched SLURM libs (Ubuntu 15.04 prerelease)"</a>
<li><strong>Reply:</strong> <a href="26406.php">Ralph Castain: "Re: [OMPI users] compiling OpenMPI 1.8.4 on system with multiarched SLURM libs (Ubuntu 15.04 prerelease)"</a>
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
