<?
$subject_val = "Re: [OMPI users] mpirun works locally but not through network";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 29 11:37:02 2010" -->
<!-- isoreceived="20100429153702" -->
<!-- sent="Thu, 29 Apr 2010 08:36:57 -0700 (PDT)" -->
<!-- isosent="20100429153657" -->
<!-- name="Nguyen Kim Son" -->
<!-- email="conmeomit_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun works locally but not through network" -->
<!-- id="845613.62143.qm_at_web24008.mail.ird.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="B7B522F9-837E-4015-902F-DC854FB034C6_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun works locally but not through network<br>
<strong>From:</strong> Nguyen Kim Son (<em>conmeomit_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-29 11:36:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12851.php">Srujan Enaganti: "[OMPI users] Calling MPI from a CGI script"</a>
<li><strong>Previous message:</strong> <a href="12849.php">Ralph Castain: "Re: [OMPI users] mpirun -np 4 hello_world; on a eight processor shared memory machine produces wrong output"</a>
<li><strong>In reply to:</strong> <a href="12848.php">Ralph Castain: "Re: [OMPI users] mpirun works locally but not through network"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think you mean:
<br>
mpirun -mca oob_tcp_if_exclude eth0
<br>
<p>Actually, it doesn't work.But if I turn down eth0 on the virtual machines ( sudo ifdown eth0), all work like a charm !
<br>
Finally, I can start to do something&#160; more complicated with openmpi.
<br>
Thank you all very much !
<br>
Son.
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12850/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12851.php">Srujan Enaganti: "[OMPI users] Calling MPI from a CGI script"</a>
<li><strong>Previous message:</strong> <a href="12849.php">Ralph Castain: "Re: [OMPI users] mpirun -np 4 hello_world; on a eight processor shared memory machine produces wrong output"</a>
<li><strong>In reply to:</strong> <a href="12848.php">Ralph Castain: "Re: [OMPI users] mpirun works locally but not through network"</a>
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
