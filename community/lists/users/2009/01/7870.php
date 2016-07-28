<?
$subject_val = "[OMPI users] Rmpi and LAM";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 29 05:57:45 2009" -->
<!-- isoreceived="20090129105745" -->
<!-- sent="Thu, 29 Jan 2009 10:57:41 +0000" -->
<!-- isosent="20090129105741" -->
<!-- name="Paul Wardman" -->
<!-- email="paul.wardman_at_[hidden]" -->
<!-- subject="[OMPI users] Rmpi and LAM" -->
<!-- id="f4adc5a90901290257y3a8cfecavfa681b7b7d45a58a_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Rmpi and LAM<br>
<strong>From:</strong> Paul Wardman (<em>paul.wardman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-29 05:57:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7871.php">Gabriele Fatigati: "[OMPI users] Pinned memory"</a>
<li><strong>Previous message:</strong> <a href="7869.php">Iannetti, Anthony C. (GRC-RTB0): "Re: [OMPI users] Cannot compile on Linux Itanium system"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7900.php">Brian W. Barrett: "Re: [OMPI users] Rmpi and LAM"</a>
<li><strong>Reply:</strong> <a href="7900.php">Brian W. Barrett: "Re: [OMPI users] Rmpi and LAM"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm using R on a Ubuntu 8.10 machine, and, in particular, quite a lot of
<br>
papply calls to analyse data. I'm currently using the LAM implementation, as
<br>
it's the only one I've got to work properly. However, while it works fine on
<br>
one PC, it fails with the error message
<br>
<p>Error in mpi.comm.spawn(slave = system.file(&quot;Rslaves.sh&quot;, package =
<br>
&quot;Rmpi&quot;),  :
<br>
&nbsp;&nbsp;MPI_Error_string: error spawning process
<br>
<p>when I try to run it over a network on two machines. However, I've got
<br>
passwordless ssh working fine, and the lamnodes command seems to suggest
<br>
I've got all the nodes up and running fine (the other computer is also
<br>
Ubuntu 8.10) and lamhosts() from within R shows all the nodes perfectly
<br>
well. I've even got mpirun to work on both machines.
<br>
<p>Can anyone help with (A) getting my current setup with R to work and / or
<br>
(B) suggestions for getting OpenMPI to work at all! (and preferably on
<br>
multiple machines).
<br>
<p>Many thanks,
<br>
Paul Wardman
<br>
University of York
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7870/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7871.php">Gabriele Fatigati: "[OMPI users] Pinned memory"</a>
<li><strong>Previous message:</strong> <a href="7869.php">Iannetti, Anthony C. (GRC-RTB0): "Re: [OMPI users] Cannot compile on Linux Itanium system"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7900.php">Brian W. Barrett: "Re: [OMPI users] Rmpi and LAM"</a>
<li><strong>Reply:</strong> <a href="7900.php">Brian W. Barrett: "Re: [OMPI users] Rmpi and LAM"</a>
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
