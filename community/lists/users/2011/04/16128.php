<?
$subject_val = "[OMPI users] alltoall messages &gt; 2^26";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  4 17:17:00 2011" -->
<!-- isoreceived="20110404211700" -->
<!-- sent="Mon, 4 Apr 2011 21:16:55 +0000" -->
<!-- isosent="20110404211655" -->
<!-- name="Michael Di Domenico" -->
<!-- email="mdidomenico4_at_[hidden]" -->
<!-- subject="[OMPI users] alltoall messages &amp;gt; 2^26" -->
<!-- id="BANLkTinYPVbdkgvXjfUiXkjdDePRhvi_GA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] alltoall messages &gt; 2^26<br>
<strong>From:</strong> Michael Di Domenico (<em>mdidomenico4_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-04 17:16:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16129.php">Terry Dontje: "Re: [OMPI users] mpi problems,"</a>
<li><strong>Previous message:</strong> <a href="16127.php">Samuel K. Gutierrez: "Re: [OMPI users] mpi problems,"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16130.php">David Zhang: "Re: [OMPI users] alltoall messages &gt; 2^26"</a>
<li><strong>Reply:</strong> <a href="16130.php">David Zhang: "Re: [OMPI users] alltoall messages &gt; 2^26"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Has anyone seen an issue where OpenMPI/Infiniband hangs when sending
<br>
messages over 2^26 in size?
<br>
<p>For a reason i have not determined just yet machines on my cluster
<br>
(OpenMPI v1.5 and Qlogic Stack/QDR IB Adapters) is failing to send
<br>
array's over 2^26 in size via the AllToAll collective. (user code)
<br>
<p>Further testing seems to indicate that an MPI message over 2^26 fails
<br>
(tested with IMB-MPI)
<br>
<p>Running the same test on a different older IB connected cluster seems
<br>
to work, which would seem to indicate a problem with the infiniband
<br>
drivers of some sort rather then openmpi (but i'm not sure).
<br>
<p>Any thoughts, directions, or tests?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16129.php">Terry Dontje: "Re: [OMPI users] mpi problems,"</a>
<li><strong>Previous message:</strong> <a href="16127.php">Samuel K. Gutierrez: "Re: [OMPI users] mpi problems,"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16130.php">David Zhang: "Re: [OMPI users] alltoall messages &gt; 2^26"</a>
<li><strong>Reply:</strong> <a href="16130.php">David Zhang: "Re: [OMPI users] alltoall messages &gt; 2^26"</a>
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
