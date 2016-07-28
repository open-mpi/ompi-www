<?
$subject_val = "[OMPI users] Several Bcast calls in a loop causing the code to hang";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 18 03:43:19 2015" -->
<!-- isoreceived="20150218084319" -->
<!-- sent="Wed, 18 Feb 2015 14:13:19 +0530" -->
<!-- isosent="20150218084319" -->
<!-- name="Sachin Krishnan" -->
<!-- email="sachkris_at_[hidden]" -->
<!-- subject="[OMPI users] Several Bcast calls in a loop causing the code to hang" -->
<!-- id="CAC_-9jy_+3XOX1Yp7XGxj2cZeB4ZWViVDBA0m=2xPOcURDnvBg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Several Bcast calls in a loop causing the code to hang<br>
<strong>From:</strong> Sachin Krishnan (<em>sachkris_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-18 03:43:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26339.php">Eric Chamberland: "[OMPI users] Help on getting CMA works"</a>
<li><strong>Previous message:</strong> <a href="26337.php">Burns, Andrew J CTR (US): "Re: [OMPI users] prob in running two mpi merged program	(UNCLASSIFIED)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26341.php">Joshua Ladd: "Re: [OMPI users] Several Bcast calls in a loop causing the code to hang"</a>
<li><strong>Reply:</strong> <a href="26341.php">Joshua Ladd: "Re: [OMPI users] Several Bcast calls in a loop causing the code to hang"</a>
<li><strong>Maybe reply:</strong> <a href="26363.php">Sachin Krishnan: "Re: [OMPI users] Several Bcast calls in a loop causing the code to hang"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I am new to MPI and also this list.
<br>
I wrote an MPI code with several MPI_Bcast calls in a loop. My code was
<br>
getting stuck at random points, ie it was not systematic. After a few hours
<br>
of debugging and googling, I found that the issue may be with the several
<br>
MPI_Bcast calls in a loop.
<br>
<p>I stumbled on this test code which can reproduce the issue:
<br>
<a href="https://github.com/fintler/ompi/blob/master/orte/test/mpi/bcast_loop.c">https://github.com/fintler/ompi/blob/master/orte/test/mpi/bcast_loop.c</a>
<br>
<p>Im using OpenMPI v1.8.4 installed from official Arch Linux repo.
<br>
<p>Is it a known issue with OpenMPI?
<br>
Is it some problem with the way openmpi is configured in my system?
<br>
<p>Thanks in advance.
<br>
<p>Sachin
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26338/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26339.php">Eric Chamberland: "[OMPI users] Help on getting CMA works"</a>
<li><strong>Previous message:</strong> <a href="26337.php">Burns, Andrew J CTR (US): "Re: [OMPI users] prob in running two mpi merged program	(UNCLASSIFIED)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26341.php">Joshua Ladd: "Re: [OMPI users] Several Bcast calls in a loop causing the code to hang"</a>
<li><strong>Reply:</strong> <a href="26341.php">Joshua Ladd: "Re: [OMPI users] Several Bcast calls in a loop causing the code to hang"</a>
<li><strong>Maybe reply:</strong> <a href="26363.php">Sachin Krishnan: "Re: [OMPI users] Several Bcast calls in a loop causing the code to hang"</a>
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
