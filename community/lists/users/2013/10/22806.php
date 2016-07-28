<?
$subject_val = "[OMPI users] calculation progress status";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 21 10:07:47 2013" -->
<!-- isoreceived="20131021140747" -->
<!-- sent="Mon, 21 Oct 2013 15:07:45 +0100" -->
<!-- isosent="20131021140745" -->
<!-- name="MM" -->
<!-- email="finjulhich_at_[hidden]" -->
<!-- subject="[OMPI users] calculation progress status" -->
<!-- id="CADsB1iDQOnGNeb_GW5VZ6OrMXwpRdMKP-KBig5n+KTSRouF4yw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] calculation progress status<br>
<strong>From:</strong> MM (<em>finjulhich_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-21 10:07:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22807.php">Andreas Schäfer: "Re: [OMPI users] calculation progress status"</a>
<li><strong>Previous message:</strong> <a href="22805.php">Patrick Begou: "[OMPI users] Compiling OpenMPI 1.7.x with core afinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22807.php">Andreas Schäfer: "Re: [OMPI users] calculation progress status"</a>
<li><strong>Reply:</strong> <a href="22807.php">Andreas Schäfer: "Re: [OMPI users] calculation progress status"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I have a n-variable function optimization task that I programmed with a
<br>
scatter, each mpi process evaluates my function in part of the space, then
<br>
a reduce to get the maximum at the root process. Most wall time is spent in
<br>
the function evaluations done inside every mpi process.
<br>
<p>I would like to report to the root process some progress indicator, ie 40%
<br>
done so far and so on...
<br>
<p>What is the customary solution?
<br>
<p>Thanks
<br>
<p>MM
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22806/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22807.php">Andreas Schäfer: "Re: [OMPI users] calculation progress status"</a>
<li><strong>Previous message:</strong> <a href="22805.php">Patrick Begou: "[OMPI users] Compiling OpenMPI 1.7.x with core afinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22807.php">Andreas Schäfer: "Re: [OMPI users] calculation progress status"</a>
<li><strong>Reply:</strong> <a href="22807.php">Andreas Schäfer: "Re: [OMPI users] calculation progress status"</a>
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
