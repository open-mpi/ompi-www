<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 23 07:01:11 2007" -->
<!-- isoreceived="20071023110111" -->
<!-- sent="Tue, 23 Oct 2007 13:01:07 +0200" -->
<!-- isosent="20071023110107" -->
<!-- name="Murat Knecht" -->
<!-- email="murat.knecht_at_[hidden]" -->
<!-- subject="[OMPI users] 100% CPU load without sm-btl" -->
<!-- id="471DD473.2020700_at_student.hpi.uni-potsdam.de" -->
<!-- charset="ISO-8859-15" -->
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
<strong>From:</strong> Murat Knecht (<em>murat.knecht_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-23 07:01:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4278.php">Tim Mattox: "Re: [OMPI users] 100% CPU load without sm-btl"</a>
<li><strong>Previous message:</strong> <a href="4276.php">Marcin Skoczylas: "Re: [OMPI users] which alternative to OpenMPI should I choose?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4278.php">Tim Mattox: "Re: [OMPI users] 100% CPU load without sm-btl"</a>
<li><strong>Reply:</strong> <a href="4278.php">Tim Mattox: "Re: [OMPI users] 100% CPU load without sm-btl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
Testing a distributed system locally, I couldn't help but notice that a
<br>
blocking MPI_Recv causes 100% CPU load. I deactivated (at both compile-
<br>
and run-time) the shared memory bt-layer, and specified &quot;tcp, self&quot; to
<br>
be used. Still one core busy. Even on a distributed system I intend to
<br>
perform work, while waiting for incoming requests. For this purpose
<br>
having one core busy waiting for requests is uncomfortable to say the
<br>
least. Does OpenMPI not use some blocking system call to a tcp port
<br>
internally? Since i deactivated the understandably costly shared-memory
<br>
waits, this seems weird to me.
<br>
Someone has an explanation or even better a fix / workaround / solution ?
<br>
thanks,
<br>
Murat
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4278.php">Tim Mattox: "Re: [OMPI users] 100% CPU load without sm-btl"</a>
<li><strong>Previous message:</strong> <a href="4276.php">Marcin Skoczylas: "Re: [OMPI users] which alternative to OpenMPI should I choose?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4278.php">Tim Mattox: "Re: [OMPI users] 100% CPU load without sm-btl"</a>
<li><strong>Reply:</strong> <a href="4278.php">Tim Mattox: "Re: [OMPI users] 100% CPU load without sm-btl"</a>
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
