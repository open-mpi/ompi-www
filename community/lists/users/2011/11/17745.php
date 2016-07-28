<?
$subject_val = "Re: [OMPI users] Process Migration";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 10 08:19:53 2011" -->
<!-- isoreceived="20111110131953" -->
<!-- sent="Thu, 10 Nov 2011 08:19:38 -0500" -->
<!-- isosent="20111110131938" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Process Migration" -->
<!-- id="89F44D9C-0814-428A-AD29-9E861DC13102_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1320930709.7857.YahooMailNeo_at_web121704.mail.ne1.yahoo.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-10 08:19:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17746.php">Jeff Squyres: "Re: [OMPI users] wiki and &quot;man mpirun&quot; odds, and a question"</a>
<li><strong>Previous message:</strong> <a href="17744.php">Mudassar Majeed: "Re: [OMPI users] Process Migration"</a>
<li><strong>In reply to:</strong> <a href="17744.php">Mudassar Majeed: "Re: [OMPI users] Process Migration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17747.php">Josh Hursey: "Re: [OMPI users] Process Migration"</a>
<li><strong>Reply:</strong> <a href="17747.php">Josh Hursey: "Re: [OMPI users] Process Migration"</a>
<li><strong>Reply:</strong> <a href="17749.php">Mudassar Majeed: "Re: [OMPI users] Process Migration"</a>
<li><strong>Reply:</strong> <a href="17750.php">Eugene Loh: "Re: [OMPI users] Process Migration"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 10, 2011, at 8:11 AM, Mudassar Majeed wrote:
<br>
<p><span class="quotelev1">&gt; Thank you for your reply. I am implementing a load balancing function for MPI, that will balance the computation load and the communication both at a time. So my algorithm assumes that all the cores may at the end get different number of processes to run.
</span><br>
<p>Are you talking about over-subscribing cores?  I.e., putting more than 1 MPI process on each core?
<br>
<p>In general, that's not a good idea.
<br>
<p><span class="quotelev1">&gt; In the beginning (before that function will be called), each core will have equal number of processes. So I am thinking either to start more processes on each core (than needed) and run my function for load balancing and then block the remaining processes (on each core). In this way I will be able to achieve different number of processes per core.
</span><br>
<p>Open MPI spins aggressively looking for network progress.  For example, if you block in an MPI_RECV waiting for a message, Open MPI is actively banging on the CPU looking for network progress.  Because of this (and other reasons), you probably do not want to over-subscribe your processors (meaning: you probably don't want to put more than 1 process per core).
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17746.php">Jeff Squyres: "Re: [OMPI users] wiki and &quot;man mpirun&quot; odds, and a question"</a>
<li><strong>Previous message:</strong> <a href="17744.php">Mudassar Majeed: "Re: [OMPI users] Process Migration"</a>
<li><strong>In reply to:</strong> <a href="17744.php">Mudassar Majeed: "Re: [OMPI users] Process Migration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17747.php">Josh Hursey: "Re: [OMPI users] Process Migration"</a>
<li><strong>Reply:</strong> <a href="17747.php">Josh Hursey: "Re: [OMPI users] Process Migration"</a>
<li><strong>Reply:</strong> <a href="17749.php">Mudassar Majeed: "Re: [OMPI users] Process Migration"</a>
<li><strong>Reply:</strong> <a href="17750.php">Eugene Loh: "Re: [OMPI users] Process Migration"</a>
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
