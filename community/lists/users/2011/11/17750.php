<?
$subject_val = "Re: [OMPI users] Process Migration";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 10 10:44:41 2011" -->
<!-- isoreceived="20111110154441" -->
<!-- sent="Thu, 10 Nov 2011 07:44:33 -0800" -->
<!-- isosent="20111110154433" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Process Migration" -->
<!-- id="4EBBF161.7090800_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="89F44D9C-0814-428A-AD29-9E861DC13102_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Process Migration<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-10 10:44:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17751.php">Ralph Castain: "Re: [OMPI users] Process Migration"</a>
<li><strong>Previous message:</strong> <a href="17749.php">Mudassar Majeed: "Re: [OMPI users] Process Migration"</a>
<li><strong>In reply to:</strong> <a href="17745.php">Jeff Squyres: "Re: [OMPI users] Process Migration"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11/10/2011 5:19 AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Nov 10, 2011, at 8:11 AM, Mudassar Majeed wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Thank you for your reply. I am implementing a load balancing function for MPI, that will balance the computation load and the communication both at a time. So my algorithm assumes that all the cores may at the end get different number of processes to run.
</span><br>
<span class="quotelev1">&gt; Are you talking about over-subscribing cores?  I.e., putting more than 1 MPI process on each core?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In general, that's not a good idea.
</span><br>
<span class="quotelev2">&gt;&gt; In the beginning (before that function will be called), each core will have equal number of processes. So I am thinking either to start more processes on each core (than needed) and run my function for load balancing and then block the remaining processes (on each core). In this way I will be able to achieve different number of processes per core.
</span><br>
<span class="quotelev1">&gt; Open MPI spins aggressively looking for network progress.  For example, if you block in an MPI_RECV waiting for a message, Open MPI is actively banging on the CPU looking for network progress.  Because of this (and other reasons), you probably do not want to over-subscribe your processors (meaning: you probably don't want to put more than 1 process per core).
</span><br>
Or, introduce your own MPI_Test/sleep loop if you really feel that you 
<br>
otherwise want to oversubscribe.  Watch out for pitfalls.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17751.php">Ralph Castain: "Re: [OMPI users] Process Migration"</a>
<li><strong>Previous message:</strong> <a href="17749.php">Mudassar Majeed: "Re: [OMPI users] Process Migration"</a>
<li><strong>In reply to:</strong> <a href="17745.php">Jeff Squyres: "Re: [OMPI users] Process Migration"</a>
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
