<?
$subject_val = "Re: [OMPI users] Open MPI vs IBM MPI performance help";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  2 14:25:41 2010" -->
<!-- isoreceived="20101202192541" -->
<!-- sent="Thu, 02 Dec 2010 12:25:02 -0700" -->
<!-- isosent="20101202192502" -->
<!-- name="Price, Brian M (N-KCI)" -->
<!-- email="brian.m.price_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI vs IBM MPI performance help" -->
<!-- id="07E77CF9C426584F8126A762FD1AFEA414BE5A89AA_at_HDXMSPA.us.lmco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="07E77CF9C426584F8126A762FD1AFEA414BE50ABAD_at_HDXMSPA.us.lmco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI vs IBM MPI performance help<br>
<strong>From:</strong> Price, Brian M (N-KCI) (<em>brian.m.price_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-02 14:25:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14980.php">Jeff Squyres: "Re: [OMPI users] Scalability issue"</a>
<li><strong>Previous message:</strong> <a href="14978.php">Gus Correa: "Re: [OMPI users] can't understand the mean of &quot;ofud&quot; in openmpi"</a>
<li><strong>In reply to:</strong> <a href="14966.php">Price, Brian M (N-KCI): "[OMPI users] Open MPI vs IBM MPI performance help"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14981.php">David Singleton: "Re: [OMPI users] Open MPI vs IBM MPI performance help"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Additional testing seems to show that the problem is related to barriers and how often they poll to determine whether or not it's time to leave.  Is there some MCA parameter or environment variable that allows me to control the frequency of polling while in barriers?
<br>
Thanks,
<br>
Brian Price
<br>
<p>From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Price, Brian M (N-KCI)
<br>
Sent: Wednesday, December 01, 2010 11:29 AM
<br>
To: Open MPI Users
<br>
Cc: Stern, Craig J
<br>
Subject: EXTERNAL: [OMPI users] Open MPI vs IBM MPI performance help
<br>
<p>OpenMPI version: 1.4.3
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14979/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14980.php">Jeff Squyres: "Re: [OMPI users] Scalability issue"</a>
<li><strong>Previous message:</strong> <a href="14978.php">Gus Correa: "Re: [OMPI users] can't understand the mean of &quot;ofud&quot; in openmpi"</a>
<li><strong>In reply to:</strong> <a href="14966.php">Price, Brian M (N-KCI): "[OMPI users] Open MPI vs IBM MPI performance help"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14981.php">David Singleton: "Re: [OMPI users] Open MPI vs IBM MPI performance help"</a>
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
