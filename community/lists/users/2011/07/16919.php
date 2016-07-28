<?
$subject_val = "[OMPI users] MPI_Isend delay";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 14 17:50:12 2011" -->
<!-- isoreceived="20110714215012" -->
<!-- sent="Thu, 14 Jul 2011 14:50:07 -0700" -->
<!-- isosent="20110714215007" -->
<!-- name="dave fournier" -->
<!-- email="davef_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Isend delay" -->
<!-- id="4E1F648F.20301_at_otter-rsch.com" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Isend delay<br>
<strong>From:</strong> dave fournier (<em>davef_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-14 17:50:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16920.php">Jeff Squyres: "Re: [OMPI users] Open MPI &amp; Grid Engine/Grid Scheduler thread binding (was: New loadcheck)"</a>
<li><strong>Previous message:</strong> <a href="16918.php">Steve Kargl: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16921.php">Jeff Squyres: "Re: [OMPI users] MPI_Isend delay"</a>
<li><strong>Reply:</strong> <a href="16921.php">Jeff Squyres: "Re: [OMPI users] MPI_Isend delay"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have a master-slave setup. I have noticed that when I send a message 
<br>
from the master to the slave
<br>
processes using MPI_Isend it never gets sent until I encounter an 
<br>
MPI_recv  in the master process.
<br>
As a result rhe slave processes are wasting time waiting for the 
<br>
message.  If I use MPI_Send
<br>
instead of MPI_Isend all works fine.  I don't understand what is going 
<br>
on here.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16920.php">Jeff Squyres: "Re: [OMPI users] Open MPI &amp; Grid Engine/Grid Scheduler thread binding (was: New loadcheck)"</a>
<li><strong>Previous message:</strong> <a href="16918.php">Steve Kargl: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16921.php">Jeff Squyres: "Re: [OMPI users] MPI_Isend delay"</a>
<li><strong>Reply:</strong> <a href="16921.php">Jeff Squyres: "Re: [OMPI users] MPI_Isend delay"</a>
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
