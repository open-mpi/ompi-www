<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jan 18 14:12:53 2006" -->
<!-- isoreceived="20060118191253" -->
<!-- sent="Wed, 18 Jan 2006 14:12:48 -0500" -->
<!-- isosent="20060118191248" -->
<!-- name="Luke Schierer" -->
<!-- email="luke-mpi_at_[hidden]" -->
<!-- subject="posix threads" -->
<!-- id="20060118191248.GC14007_at_lukespace.acceleratedservers.com" -->
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
<strong>From:</strong> Luke Schierer (<em>luke-mpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-18 14:12:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0689.php">Brian Barrett: "Re:  while-loop around opal_condition_wait"</a>
<li><strong>Previous message:</strong> <a href="0687.php">Ralf Wildenhues: "ompi_get_version"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0693.php">George Bosilca: "Re:  posix threads"</a>
<li><strong>Reply:</strong> <a href="0693.php">George Bosilca: "Re:  posix threads"</a>
<li><strong>Reply:</strong> <a href="0698.php">Brian Barrett: "Re:  posix threads"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If we compile openmpi with support for posix threads (./configure
<br>
--prefix=/usr/local --enable-mpi-threads --with-threads=posix), mpi
<br>
hangs even with simple commands like
<br>
<p>mpiexec --host localhost --np 1 hostname
<br>
<p>lock up, and have to be killed.  If we compile without the --with-threads=posix,
<br>
it works fine.  We've tried this with both 1.0.1 and 1.0.2a3 on a CentOS
<br>
release 4.2 install (CentOS is the same as Redhat, built from the same sources,
<br>
just without the trademarked name and the support), and on a Debian
<br>
unstable install.  Does anyone have any ideas on getting openmpi to
<br>
work with posix thread support?
<br>
<p>Luke
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0689.php">Brian Barrett: "Re:  while-loop around opal_condition_wait"</a>
<li><strong>Previous message:</strong> <a href="0687.php">Ralf Wildenhues: "ompi_get_version"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0693.php">George Bosilca: "Re:  posix threads"</a>
<li><strong>Reply:</strong> <a href="0693.php">George Bosilca: "Re:  posix threads"</a>
<li><strong>Reply:</strong> <a href="0698.php">Brian Barrett: "Re:  posix threads"</a>
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
