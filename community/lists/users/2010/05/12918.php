<?
$subject_val = "[OMPI users] opal_mutex_lock(): Resource deadlock avoided";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  6 07:03:40 2010" -->
<!-- isoreceived="20100506110340" -->
<!-- sent="Thu, 06 May 2010 13:03:33 +0200" -->
<!-- isosent="20100506110333" -->
<!-- name="Ake Sandgren" -->
<!-- email="ake.sandgren_at_[hidden]" -->
<!-- subject="[OMPI users] opal_mutex_lock(): Resource deadlock avoided" -->
<!-- id="1273143813.7804.270.camel_at_skalman.hpc2n.umu.se" -->
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
<strong>Subject:</strong> [OMPI users] opal_mutex_lock(): Resource deadlock avoided<br>
<strong>From:</strong> Ake Sandgren (<em>ake.sandgren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-06 07:03:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12919.php">Richard Treumann: "Re: [OMPI users] Fortran derived types"</a>
<li><strong>Previous message:</strong> <a href="12917.php">Paul Kapinos: "Re: [OMPI users] Fortran derived types"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12963.php">Jeff Squyres: "Re: [OMPI users] opal_mutex_lock(): Resource deadlock avoided"</a>
<li><strong>Reply:</strong> <a href="12963.php">Jeff Squyres: "Re: [OMPI users] opal_mutex_lock(): Resource deadlock avoided"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi!
<br>
<p>We have a code that trips on this fairly often. I've seen cases where it
<br>
works but mostly it gets stuck here.
<br>
<p>The actual mpi call is call mpi_file_open(...)
<br>
<p>I'm currently just wondering if there has been other reports on/anyone
<br>
have seen deadlock in mpi-io parts of the code or if this most likely
<br>
caused by our setup.
<br>
<p>openmpi version is 1.4.2 (fails with 1.3.3 too)
<br>
Filesystem used is GPFS
<br>
<p>openmpi built with mpi-threads but without progress-threads
<br>
<p><pre>
-- 
Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
Internet: ake_at_[hidden]   Phone: +46 90 7866134 Fax: +46 90 7866126
Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12919.php">Richard Treumann: "Re: [OMPI users] Fortran derived types"</a>
<li><strong>Previous message:</strong> <a href="12917.php">Paul Kapinos: "Re: [OMPI users] Fortran derived types"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12963.php">Jeff Squyres: "Re: [OMPI users] opal_mutex_lock(): Resource deadlock avoided"</a>
<li><strong>Reply:</strong> <a href="12963.php">Jeff Squyres: "Re: [OMPI users] opal_mutex_lock(): Resource deadlock avoided"</a>
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
