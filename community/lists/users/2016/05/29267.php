<?
$subject_val = "[OMPI users] Possible (minor) bug?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May 21 16:17:33 2016" -->
<!-- isoreceived="20160521201733" -->
<!-- sent="Sat, 21 May 2016 16:17:32 -0400" -->
<!-- isosent="20160521201732" -->
<!-- name="dpchoudh ." -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="[OMPI users] Possible (minor) bug?" -->
<!-- id="CAHXxYDjAXT42oNrmNhJYCMhk2WM3_Q2XWBhi0iNMMrZgF=szWA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Possible (minor) bug?<br>
<strong>From:</strong> dpchoudh . (<em>dpchoudh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-21 16:17:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29268.php">Ralph Castain: "Re: [OMPI users] Possible (minor) bug?"</a>
<li><strong>Previous message:</strong> <a href="29266.php">George Bosilca: "Re: [OMPI users] MPI_Put/Get with many nested derived type"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29268.php">Ralph Castain: "Re: [OMPI users] Possible (minor) bug?"</a>
<li><strong>Reply:</strong> <a href="29268.php">Ralph Castain: "Re: [OMPI users] Possible (minor) bug?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all
<br>
<p>I have started noticing this message since yesterday on builds from the
<br>
master branch. Any simple mpirun command, such as:
<br>
<p>mpirun -np 2 -hostfile ~/hostfile -mca btl self,tcp hostname
<br>
<p>generates a warning/error like this:
<br>
<p>*Duplicate cmd line entry mca*
<br>
<p>The hostfile, in my case, is just this:
<br>
<p>10.10.10.10 slots=1
<br>
10.10.10.11 slots=1
<br>
<p>Thanks
<br>
Durga
<br>
<p>We learn from history that we never learn from history.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29267/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29268.php">Ralph Castain: "Re: [OMPI users] Possible (minor) bug?"</a>
<li><strong>Previous message:</strong> <a href="29266.php">George Bosilca: "Re: [OMPI users] MPI_Put/Get with many nested derived type"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29268.php">Ralph Castain: "Re: [OMPI users] Possible (minor) bug?"</a>
<li><strong>Reply:</strong> <a href="29268.php">Ralph Castain: "Re: [OMPI users] Possible (minor) bug?"</a>
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
