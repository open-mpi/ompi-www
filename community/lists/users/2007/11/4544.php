<?
$subject_val = "Re: [OMPI users] OpenIB problems";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 28 12:18:35 2007" -->
<!-- isoreceived="20071128171835" -->
<!-- sent="Wed, 28 Nov 2007 10:18:19 -0700" -->
<!-- isosent="20071128171819" -->
<!-- name="Ogden, Jeffry Brandon" -->
<!-- email="jbogden_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenIB problems" -->
<!-- id="754FC8FE0A97A94B906344259F447D4A062A2191_at_ES23SNLNT.srn.sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="474D98E6.1040409_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenIB problems<br>
<strong>From:</strong> Ogden, Jeffry Brandon (<em>jbogden_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-28 12:18:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4545.php">George Bosilca: "Re: [OMPI users] ./configure error on windows while installing openmpi-1.2.4(latest)"</a>
<li><strong>Previous message:</strong> <a href="4543.php">Jeff Squyres: "Re: [OMPI users] version 1.3"</a>
<li><strong>In reply to:</strong> <a href="4541.php">Andrew Friedley: "Re: [OMPI users] OpenIB problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4507.php">Brock Palen: "Re: [OMPI users] OpenIB problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
For what it's worth Andrew, the RETRY_EXCEEDED_ERRORS can be caused by
<br>
flaky hardware as well.  The timeout value is probably best tuned
<br>
relative to the size of your IB fabric.  But if reliability is the
<br>
biggest criteria, crank up the timemout value to 20.  That's the best
<br>
you can do.  If it continues to happen, it is more than likely you have
<br>
a flaky HCA, IB link, switch side sw, or node.  We actually have way too
<br>
much IB hardware for any sane person and my experience is that the
<br>
RETRY_EXCEEDED_ERRORS can sometimes be really tricky to track down.  One
<br>
of my favorites is the spontaneous rebooting node.  We see nodes under
<br>
heavy MPI application load sometimes randomly reboot.  This causes the
<br>
RETRY_EXCEEDED_ERROR as well.  I would second the recommendation to
<br>
watch the IB counters across the entire IB fabric from the subnet
<br>
manager.
<br>
<p>Good luck!
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Andrew Friedley
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, November 28, 2007 9:36 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] OpenIB problems
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What value do you suggest then?  I know I've seen the problem 
</span><br>
<span class="quotelev1">&gt; persist at 
</span><br>
<span class="quotelev1">&gt; values of 14 and 16, and would rather be certain that this 
</span><br>
<span class="quotelev1">&gt; isn't going 
</span><br>
<span class="quotelev1">&gt; to kill the job that just sat in the queue for a week.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Andrew
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Roland thought that the default value of 10 might be a bit 
</span><br>
<span class="quotelev1">&gt; too low and  
</span><br>
<span class="quotelev2">&gt; &gt; that tuning it to be higher, particularly in apps that pound on a  
</span><br>
<span class="quotelev2">&gt; &gt; single port, would probably be acceptable.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Tuning up to 20 is probably a bit overkill.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4545.php">George Bosilca: "Re: [OMPI users] ./configure error on windows while installing openmpi-1.2.4(latest)"</a>
<li><strong>Previous message:</strong> <a href="4543.php">Jeff Squyres: "Re: [OMPI users] version 1.3"</a>
<li><strong>In reply to:</strong> <a href="4541.php">Andrew Friedley: "Re: [OMPI users] OpenIB problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4507.php">Brock Palen: "Re: [OMPI users] OpenIB problems"</a>
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
