<?
$subject_val = "[OMPI devel] Launcher in trunk is broken?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 10 10:23:44 2011" -->
<!-- isoreceived="20111010142344" -->
<!-- sent="Mon, 10 Oct 2011 16:23:34 +0200" -->
<!-- isosent="20111010142334" -->
<!-- name="Yevgeny Kliteynik" -->
<!-- email="kliteyn_at_[hidden]" -->
<!-- subject="[OMPI devel] Launcher in trunk is broken?" -->
<!-- id="4E92FFE6.1020001_at_dev.mellanox.co.il" -->
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
<strong>Subject:</strong> [OMPI devel] Launcher in trunk is broken?<br>
<strong>From:</strong> Yevgeny Kliteynik (<em>kliteyn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-10 10:23:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9801.php">Shamis, Pavel: "Re: [OMPI devel] Launcher in trunk is broken?"</a>
<li><strong>Previous message:</strong> <a href="9799.php">Jeff Squyres: "Re: [OMPI devel] RFC: CRS Module for MTCP Checkpointing Package"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9801.php">Shamis, Pavel: "Re: [OMPI devel] Launcher in trunk is broken?"</a>
<li><strong>Reply:</strong> <a href="9801.php">Shamis, Pavel: "Re: [OMPI devel] Launcher in trunk is broken?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It looks like the process launcher is broken in the OMPI trunk:
<br>
If you run any simple test (not necessarily including MPI calls) on 4 or
<br>
more nodes, the MPI processes won't be killed after the test finishes.
<br>
<p>$ mpirun -host host_1,host_2,host_3,host_4 -np 4 --mca btl sm,tcp,self /bin/hostname
<br>
<p>Output:
<br>
host_1
<br>
host_2
<br>
host_3
<br>
host_4
<br>
<p>And test is hanging......
<br>
<p>I have an older trunk (r25228), and everything is OK there.
<br>
Not sure if it means that something was broken after that, or the problem
<br>
existed before, but kicked in only now due to some other change.
<br>
<p>-- YK
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9801.php">Shamis, Pavel: "Re: [OMPI devel] Launcher in trunk is broken?"</a>
<li><strong>Previous message:</strong> <a href="9799.php">Jeff Squyres: "Re: [OMPI devel] RFC: CRS Module for MTCP Checkpointing Package"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9801.php">Shamis, Pavel: "Re: [OMPI devel] Launcher in trunk is broken?"</a>
<li><strong>Reply:</strong> <a href="9801.php">Shamis, Pavel: "Re: [OMPI devel] Launcher in trunk is broken?"</a>
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
