<?
$subject_val = "[OMPI users] thread support in OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  7 02:25:25 2011" -->
<!-- isoreceived="20111007062525" -->
<!-- sent="Fri, 7 Oct 2011 02:25:21 -0400" -->
<!-- isosent="20111007062521" -->
<!-- name="Devarshi Ghoshal" -->
<!-- email="dghoshal_at_[hidden]" -->
<!-- subject="[OMPI users] thread support in OpenMPI" -->
<!-- id="CAEUb3HrKpcdwDQqkat88KbpNVpzyRhqLVvVjg-drhN4k5h0gJg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] thread support in OpenMPI<br>
<strong>From:</strong> Devarshi Ghoshal (<em>dghoshal_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-07 02:25:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17519.php">Reuti: "Re: [OMPI users] Proper way to stop MPI process"</a>
<li><strong>Previous message:</strong> <a href="17517.php">Reuti: "Re: [OMPI users] Proper way to redirect GUI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I was just wondering what does &quot;progress: no&quot; signify when I check the level
<br>
of thread support using ompi_info for the OpenMPI installation I have.
<br>
<p>Also, I guess &quot;mpi: no&quot; for thread support signify that multiple threads in
<br>
my MPI program will not work as expected if they have MPI communication. So,
<br>
different threads of multiple processes using MPI_Send() and MPI_Recv()
<br>
would behave normally only if the installed MPI library provides
<br>
MPI_THREAD_MULTIPLE level thread support.
<br>
<p><pre>
-- 
Thanks &amp; regards,
Devarshi
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17518/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17519.php">Reuti: "Re: [OMPI users] Proper way to stop MPI process"</a>
<li><strong>Previous message:</strong> <a href="17517.php">Reuti: "Re: [OMPI users] Proper way to redirect GUI"</a>
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
