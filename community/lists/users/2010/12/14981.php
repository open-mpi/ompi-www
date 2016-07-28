<?
$subject_val = "Re: [OMPI users] Open MPI vs IBM MPI performance help";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  2 15:21:21 2010" -->
<!-- isoreceived="20101202202121" -->
<!-- sent="Fri, 03 Dec 2010 07:21:14 +1100" -->
<!-- isosent="20101202202114" -->
<!-- name="David Singleton" -->
<!-- email="David.Singleton_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI vs IBM MPI performance help" -->
<!-- id="4CF7FFBA.7010809_at_anu.edu.au" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="26173_1291318439_4CF7F4A7_26173_293207_1_07E77CF9C426584F8126A762FD1AFEA414BE5A89AA_at_HDXMSPA.us.lmco.com" -->
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
<strong>From:</strong> David Singleton (<em>David.Singleton_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-02 15:21:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14982.php">Gus Correa: "Re: [OMPI users] Scalability issue"</a>
<li><strong>Previous message:</strong> <a href="14980.php">Jeff Squyres: "Re: [OMPI users] Scalability issue"</a>
<li><strong>Maybe in reply to:</strong> <a href="14966.php">Price, Brian M (N-KCI): "[OMPI users] Open MPI vs IBM MPI performance help"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15212.php">Eugene Loh: "Re: [OMPI users] Open MPI vs IBM MPI performance help"</a>
<li><strong>Reply:</strong> <a href="15212.php">Eugene Loh: "Re: [OMPI users] Open MPI vs IBM MPI performance help"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<a href="http://www.open-mpi.org/faq/?category=running#oversubscribing">http://www.open-mpi.org/faq/?category=running#oversubscribing</a>
<br>
<p>On 12/03/2010 06:25 AM, Price, Brian M (N-KCI) wrote:
<br>
<span class="quotelev1">&gt; Additional testing seems to show that the problem is related to barriers and how often they poll to determine whether or not it's time to leave.  Is there some MCA parameter or environment variable that allows me to control the frequency of polling while in barriers?
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Brian Price
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Price, Brian M (N-KCI)
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, December 01, 2010 11:29 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Cc: Stern, Craig J
</span><br>
<span class="quotelev1">&gt; Subject: EXTERNAL: [OMPI users] Open MPI vs IBM MPI performance help
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OpenMPI version: 1.4.3
</span><br>
<span class="quotelev1">&gt; Platform: IBM P5, 32 processors, 256 GB memory, Symmetric Multi-Threading (SMT) enabled
</span><br>
<span class="quotelev1">&gt; Application: starts up 48 processes and does MPI using MPI_Barrier, MPI_Get, MPI_Put (lots of transfers, large amounts of data)
</span><br>
<span class="quotelev1">&gt; Issue:  When implemented using Open MPI vs. IBM's MPI ('poe' from HPC Toolkit), the application runs 3-5 times slower.
</span><br>
<span class="quotelev1">&gt; I suspect that IBM's MPI implementation must take advantage of some knowledge that it has about data transfers that Open MPI is not taking advantage of.
</span><br>
<span class="quotelev1">&gt; Any suggestions?
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Brian Price
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14982.php">Gus Correa: "Re: [OMPI users] Scalability issue"</a>
<li><strong>Previous message:</strong> <a href="14980.php">Jeff Squyres: "Re: [OMPI users] Scalability issue"</a>
<li><strong>Maybe in reply to:</strong> <a href="14966.php">Price, Brian M (N-KCI): "[OMPI users] Open MPI vs IBM MPI performance help"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15212.php">Eugene Loh: "Re: [OMPI users] Open MPI vs IBM MPI performance help"</a>
<li><strong>Reply:</strong> <a href="15212.php">Eugene Loh: "Re: [OMPI users] Open MPI vs IBM MPI performance help"</a>
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
