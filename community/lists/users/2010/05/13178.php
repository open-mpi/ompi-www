<?
$subject_val = "[OMPI users] which eth interface does mpi use by default when torque supplies it with a hostfile?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 28 17:29:23 2010" -->
<!-- isoreceived="20100528212923" -->
<!-- sent="Fri, 28 May 2010 16:29:18 -0500" -->
<!-- isosent="20100528212918" -->
<!-- name="Rahul Nabar" -->
<!-- email="rpnabar_at_[hidden]" -->
<!-- subject="[OMPI users] which eth interface does mpi use by default when torque supplies it with a hostfile?" -->
<!-- id="AANLkTino0M3cbnGdlqmCQZkSnFTWKJYAhviNMnSaXvAn_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] which eth interface does mpi use by default when torque supplies it with a hostfile?<br>
<strong>From:</strong> Rahul Nabar (<em>rpnabar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-28 17:29:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13179.php">George Wm Turner: "Re: [OMPI users] [torqueusers] which eth interface does mpi use by default when torque supplies it with a hostfile?"</a>
<li><strong>Previous message:</strong> <a href="13177.php">Rahul Nabar: "Re: [OMPI users] MPI daemon error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13180.php">Ralph Castain: "Re: [OMPI users] which eth interface does mpi use by default when torque supplies it with a hostfile?"</a>
<li><strong>Reply:</strong> <a href="13180.php">Ralph Castain: "Re: [OMPI users] which eth interface does mpi use by default when torque supplies it with a hostfile?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Each of our servers has twin eth cards: 1GigE and 10GigE. How does
<br>
openmpi decide which card to use while sending messages on? One of the
<br>
cards is on a 10.0. IP address subnet whereas the other cards are on a
<br>
192.168 adress subnet. Can I select one or the other by specifying the
<br>
--host option with the correct IP addresses?
<br>
<p>How does it select the default though? Frequently I call mpirun from
<br>
within a PBS wrapper and then there is no explicit --host directive.
<br>
(I think PBS somehow communicates to mpirun what the assigned hostfile
<br>
is) In such a case though, which interface will mpirun use?
<br>
<p><pre>
-- 
Rahul
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13179.php">George Wm Turner: "Re: [OMPI users] [torqueusers] which eth interface does mpi use by default when torque supplies it with a hostfile?"</a>
<li><strong>Previous message:</strong> <a href="13177.php">Rahul Nabar: "Re: [OMPI users] MPI daemon error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13180.php">Ralph Castain: "Re: [OMPI users] which eth interface does mpi use by default when torque supplies it with a hostfile?"</a>
<li><strong>Reply:</strong> <a href="13180.php">Ralph Castain: "Re: [OMPI users] which eth interface does mpi use by default when torque supplies it with a hostfile?"</a>
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
