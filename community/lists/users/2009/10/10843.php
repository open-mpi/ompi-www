<?
$subject_val = "[OMPI users] job fails with &quot;Signal: Bus error (7)&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  1 06:01:51 2009" -->
<!-- isoreceived="20091001100151" -->
<!-- sent="Thu, 1 Oct 2009 15:31:46 +0530" -->
<!-- isosent="20091001100146" -->
<!-- name="Sangamesh B" -->
<!-- email="forum.san_at_[hidden]" -->
<!-- subject="[OMPI users] job fails with &amp;quot;Signal: Bus error (7)&amp;quot;" -->
<!-- id="cb60cbc40910010301i7ae39d2cv9f2e6241bbacea7d_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] job fails with &quot;Signal: Bus error (7)&quot;<br>
<strong>From:</strong> Sangamesh B (<em>forum.san_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-01 06:01:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10844.php">ankur pachauri: "Re: [OMPI users] how to SPMD on openmpi"</a>
<li><strong>Previous message:</strong> <a href="10842.php">vipin kumar: "Re: [OMPI users] how to SPMD on openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10880.php">Jeff Squyres: "Re: [OMPI users] job fails with &quot;Signal: Bus error (7)&quot;"</a>
<li><strong>Reply:</strong> <a href="10880.php">Jeff Squyres: "Re: [OMPI users] job fails with &quot;Signal: Bus error (7)&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A fortran application which is compiled with ifort-10.1 and open mpi
<br>
1.3.1 on Cent OS 5.2 fails after running 4 days with following error
<br>
message:
<br>
<p>[compute-0-7:25430] *** Process received signal ***
<br>
[compute-0-7:25433] *** Process received signal ***
<br>
[compute-0-7:25433] Signal: Bus error (7)
<br>
[compute-0-7:25433] Signal code:  (2)
<br>
[compute-0-7:25433] Failing at address: 0x4217b8
<br>
[compute-0-7:25431] *** Process received signal ***
<br>
[compute-0-7:25431] Signal: Bus error (7)
<br>
[compute-0-7:25431] Signal code:  (2)
<br>
[compute-0-7:25431] Failing at address: 0x4217b8
<br>
[compute-0-7:25432] *** Process received signal ***
<br>
[compute-0-7:25432] Signal: Bus error (7)
<br>
[compute-0-7:25432] Signal code:  (2)
<br>
[compute-0-7:25432] Failing at address: 0x4217b8
<br>
[compute-0-7:25430] Signal: Bus error (7)
<br>
[compute-0-7:25430] Signal code:  (2)
<br>
[compute-0-7:25430] Failing at address: 0x4217b8
<br>
[compute-0-7:25431] *** Process received signal ***
<br>
[compute-0-7:25431] Signal: Segmentation fault (11)
<br>
[compute-0-7:25431] Signal code:  (128)
<br>
[compute-0-7:25431] Failing at address: (nil)
<br>
[compute-0-7:25430] *** Process received signal ***
<br>
[compute-0-7:25433] *** Process received signal ***
<br>
[compute-0-7:25433] Signal: Segmentation fault (11)
<br>
[compute-0-7:25433] Signal code:  (128)
<br>
[compute-0-7:25433] Failing at address: (nil)
<br>
[compute-0-7:25432] *** Process received signal ***
<br>
[compute-0-7:25432] Signal: Segmentation fault (11)
<br>
[compute-0-7:25432] Signal code:  (128)
<br>
[compute-0-7:25432] Failing at address: (nil)
<br>
[compute-0-7:25430] Signal: Segmentation fault (11)
<br>
[compute-0-7:25430] Signal code:  (128)
<br>
[compute-0-7:25430] Failing at address: (nil)
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 3 with PID 25433 on node
<br>
compute-0-7.local exited on signal 11 (Segmentation fault).
<br>
<p><p>--------------------------------------------------------------------------
<br>
<p>This job is run with 4 open mpi processes, on the nodes which have
<br>
interconnected with Gigabit.
<br>
The same job runs well on the nodes with infiniband connectivity.
<br>
<p>What could be the reason for this? Is this due to loose physical
<br>
connectivities, as its giving a bus error?
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10843/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10844.php">ankur pachauri: "Re: [OMPI users] how to SPMD on openmpi"</a>
<li><strong>Previous message:</strong> <a href="10842.php">vipin kumar: "Re: [OMPI users] how to SPMD on openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10880.php">Jeff Squyres: "Re: [OMPI users] job fails with &quot;Signal: Bus error (7)&quot;"</a>
<li><strong>Reply:</strong> <a href="10880.php">Jeff Squyres: "Re: [OMPI users] job fails with &quot;Signal: Bus error (7)&quot;"</a>
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
