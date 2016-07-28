<?
$subject_val = "Re: [OMPI users] Open MPI vs IBM MPI performance help";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 22 13:17:34 2010" -->
<!-- isoreceived="20101222181734" -->
<!-- sent="Wed, 22 Dec 2010 10:16:45 -0800" -->
<!-- isosent="20101222181645" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI vs IBM MPI performance help" -->
<!-- id="4D12408D.8040007_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4CF7FFBA.7010809_at_anu.edu.au" -->
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
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-22 13:16:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15213.php">Gilbert Grosdidier: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores: very poor performance"</a>
<li><strong>Previous message:</strong> <a href="15211.php">Eugene Loh: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores: very poor performance"</a>
<li><strong>In reply to:</strong> <a href="14981.php">David Singleton: "Re: [OMPI users] Open MPI vs IBM MPI performance help"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14987.php">Nysal Jan: "Re: [OMPI users] Open MPI vs IBM MPI performance help"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm curious if that resolved the issue.
<br>
<p>David Singleton wrote:
<br>
<p><span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=running#oversubscribing">http://www.open-mpi.org/faq/?category=running#oversubscribing</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 12/03/2010 06:25 AM, Price, Brian M (N-KCI) wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Additional testing seems to show that the problem is related to 
</span><br>
<span class="quotelev2">&gt;&gt; barriers and how often they poll to determine whether or not it's 
</span><br>
<span class="quotelev2">&gt;&gt; time to leave.  Is there some MCA parameter or environment variable 
</span><br>
<span class="quotelev2">&gt;&gt; that allows me to control the frequency of polling while in barriers?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] 
</span><br>
<span class="quotelev2">&gt;&gt; On Behalf Of Price, Brian M (N-KCI)
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Wednesday, December 01, 2010 11:29 AM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Cc: Stern, Craig J
</span><br>
<span class="quotelev2">&gt;&gt; Subject: EXTERNAL: [OMPI users] Open MPI vs IBM MPI performance help
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI version: 1.4.3
</span><br>
<span class="quotelev2">&gt;&gt; Platform: IBM P5, 32 processors, 256 GB memory, Symmetric 
</span><br>
<span class="quotelev2">&gt;&gt; Multi-Threading (SMT) enabled
</span><br>
<span class="quotelev2">&gt;&gt; Application: starts up 48 processes and does MPI using MPI_Barrier, 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Get, MPI_Put (lots of transfers, large amounts of data)
</span><br>
<span class="quotelev2">&gt;&gt; Issue:  When implemented using Open MPI vs. IBM's MPI ('poe' from HPC 
</span><br>
<span class="quotelev2">&gt;&gt; Toolkit), the application runs 3-5 times slower.
</span><br>
<span class="quotelev2">&gt;&gt; I suspect that IBM's MPI implementation must take advantage of some 
</span><br>
<span class="quotelev2">&gt;&gt; knowledge that it has about data transfers that Open MPI is not 
</span><br>
<span class="quotelev2">&gt;&gt; taking advantage of.
</span><br>
<span class="quotelev2">&gt;&gt; Any suggestions?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15213.php">Gilbert Grosdidier: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores: very poor performance"</a>
<li><strong>Previous message:</strong> <a href="15211.php">Eugene Loh: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores: very poor performance"</a>
<li><strong>In reply to:</strong> <a href="14981.php">David Singleton: "Re: [OMPI users] Open MPI vs IBM MPI performance help"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14987.php">Nysal Jan: "Re: [OMPI users] Open MPI vs IBM MPI performance help"</a>
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
