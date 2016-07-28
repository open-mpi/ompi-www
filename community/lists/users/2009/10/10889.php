<?
$subject_val = "[OMPI users] Yet another stdin problem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  7 10:42:07 2009" -->
<!-- isoreceived="20091007144207" -->
<!-- sent="Wed, 7 Oct 2009 14:42:01 +0000 (GMT)" -->
<!-- isosent="20091007144201" -->
<!-- name="Kilou Zelabia" -->
<!-- email="kilou_zellabia_at_[hidden]" -->
<!-- subject="[OMPI users] Yet another stdin problem" -->
<!-- id="441687.75126.qm_at_web26508.mail.ukl.yahoo.com" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] Yet another stdin problem<br>
<strong>From:</strong> Kilou Zelabia (<em>kilou_zellabia_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-07 10:42:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10890.php">Roman Cheplyaka: "Re: [OMPI users] Yet another stdin problem"</a>
<li><strong>Previous message:</strong> <a href="10888.php">Hui Jin: "[OMPI users] fault tolerance support via apt-get"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10890.php">Roman Cheplyaka: "Re: [OMPI users] Yet another stdin problem"</a>
<li><strong>Reply:</strong> <a href="10890.php">Roman Cheplyaka: "Re: [OMPI users] Yet another stdin problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,

I'm trying to lunch an MPI program using the command

mpirun -np 64 my_exe &lt; inputs.txt

inputs.txt actually contains the entries that  are read by all processes however it seems that openmpi redirect the stdin only to the processes with rank 0. with leads to a segmentation fault on the other processes.
The option &quot;-stdin rank&quot; doesn't help since i need all processes read the inputs.txt file.

I'v tested with openmpi 1.3 and 1.2 whitout success.

Thanks in advance for you help.

Zellabia. S


      
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10889/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10890.php">Roman Cheplyaka: "Re: [OMPI users] Yet another stdin problem"</a>
<li><strong>Previous message:</strong> <a href="10888.php">Hui Jin: "[OMPI users] fault tolerance support via apt-get"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10890.php">Roman Cheplyaka: "Re: [OMPI users] Yet another stdin problem"</a>
<li><strong>Reply:</strong> <a href="10890.php">Roman Cheplyaka: "Re: [OMPI users] Yet another stdin problem"</a>
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
