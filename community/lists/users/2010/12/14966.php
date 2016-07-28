<?
$subject_val = "[OMPI users] Open MPI vs IBM MPI performance help";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  1 13:30:12 2010" -->
<!-- isoreceived="20101201183012" -->
<!-- sent="Wed, 01 Dec 2010 11:29:12 -0700" -->
<!-- isosent="20101201182912" -->
<!-- name="Price, Brian M (N-KCI)" -->
<!-- email="brian.m.price_at_[hidden]" -->
<!-- subject="[OMPI users] Open MPI vs IBM MPI performance help" -->
<!-- id="07E77CF9C426584F8126A762FD1AFEA414BE50ABAD_at_HDXMSPA.us.lmco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Open MPI vs IBM MPI performance help<br>
<strong>From:</strong> Price, Brian M (N-KCI) (<em>brian.m.price_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-01 13:29:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14967.php">Jesse Ziser: "Re: [OMPI users] SIGPIPE handling?"</a>
<li><strong>Previous message:</strong> <a href="14965.php">James Overfelt: "Re: [OMPI users] How to avoid abort when calling MPI_Finalize without calling MPI_File_close?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14979.php">Price, Brian M (N-KCI): "Re: [OMPI users] Open MPI vs IBM MPI performance help"</a>
<li><strong>Reply:</strong> <a href="14979.php">Price, Brian M (N-KCI): "Re: [OMPI users] Open MPI vs IBM MPI performance help"</a>
<li><strong>Maybe reply:</strong> <a href="14981.php">David Singleton: "Re: [OMPI users] Open MPI vs IBM MPI performance help"</a>
<li><strong>Reply:</strong> <a href="14987.php">Nysal Jan: "Re: [OMPI users] Open MPI vs IBM MPI performance help"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OpenMPI version: 1.4.3
<br>
Platform: IBM P5, 32 processors, 256 GB memory, Symmetric Multi-Threading (SMT) enabled
<br>
Application: starts up 48 processes and does MPI using MPI_Barrier, MPI_Get, MPI_Put (lots of transfers, large amounts of data)
<br>
Issue:  When implemented using Open MPI vs. IBM's MPI ('poe' from HPC Toolkit), the application runs 3-5 times slower.
<br>
I suspect that IBM's MPI implementation must take advantage of some knowledge that it has about data transfers that Open MPI is not taking advantage of.
<br>
Any suggestions?
<br>
Thanks,
<br>
Brian Price
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14966/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14967.php">Jesse Ziser: "Re: [OMPI users] SIGPIPE handling?"</a>
<li><strong>Previous message:</strong> <a href="14965.php">James Overfelt: "Re: [OMPI users] How to avoid abort when calling MPI_Finalize without calling MPI_File_close?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14979.php">Price, Brian M (N-KCI): "Re: [OMPI users] Open MPI vs IBM MPI performance help"</a>
<li><strong>Reply:</strong> <a href="14979.php">Price, Brian M (N-KCI): "Re: [OMPI users] Open MPI vs IBM MPI performance help"</a>
<li><strong>Maybe reply:</strong> <a href="14981.php">David Singleton: "Re: [OMPI users] Open MPI vs IBM MPI performance help"</a>
<li><strong>Reply:</strong> <a href="14987.php">Nysal Jan: "Re: [OMPI users] Open MPI vs IBM MPI performance help"</a>
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
