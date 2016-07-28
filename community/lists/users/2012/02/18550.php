<?
$subject_val = "Re: [OMPI users] ROMIO Podcast";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 22 10:21:27 2012" -->
<!-- isoreceived="20120222152127" -->
<!-- sent="Wed, 22 Feb 2012 09:21:21 -0600" -->
<!-- isosent="20120222152121" -->
<!-- name="Rob Latham" -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ROMIO Podcast" -->
<!-- id="20120222152121.GB17832_at_mcs.anl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAHwLALP95gdeV-X43YUs3_dEXzO=MeHWBcdhZgsoKMf3oWNEEg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] ROMIO Podcast<br>
<strong>From:</strong> Rob Latham (<em>robl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-22 10:21:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18551.php">Shamis, Pavel: "Re: [OMPI users] openMPI installation on front-end and worker nodes"</a>
<li><strong>Previous message:</strong> <a href="18549.php">Reuti: "Re: [OMPI users] openMPI installation on front-end and worker nodes"</a>
<li><strong>In reply to:</strong> <a href="18546.php">Rayson Ho: "Re: [OMPI users] ROMIO Podcast"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18544.php">Rob Latham: "Re: [OMPI users] ROMIO Podcast"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Feb 21, 2012 at 05:30:20PM -0500, Rayson Ho wrote:
<br>
<span class="quotelev1">&gt; On Tue, Feb 21, 2012 at 12:06 PM, Rob Latham &lt;robl_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; ROMIO's testing and performance regression framework is honestly a
</span><br>
<span class="quotelev2">&gt; &gt; shambles. &#160;Part of that is a challenge with the MPI-IO interface
</span><br>
<span class="quotelev2">&gt; &gt; itself. &#160;For MPI messaging you exercise the API and you have pretty
</span><br>
<span class="quotelev2">&gt; &gt; much covered everything. &#160;MPI-IO, though, introduces hints. &#160;These
</span><br>
<span class="quotelev2">&gt; &gt; hints are great for tuning but make the testing &quot;surface area&quot; a lot
</span><br>
<span class="quotelev2">&gt; &gt; larger. &#160;We are probably going to have a chance to improve things
</span><br>
<span class="quotelev2">&gt; &gt; greatly with some recently funded proposals.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for the replies Rob.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am interested in testing mainly because not a lot of projects have
</span><br>
<span class="quotelev1">&gt; spare clusters lying around for performance regression testing. But
</span><br>
<span class="quotelev1">&gt; then these days we can get machines from EC2 easily &amp; relatively
</span><br>
<span class="quotelev1">&gt; cheaply, so I was wondering if other projects are migrating their test
</span><br>
<span class="quotelev1">&gt; infrastructure to EC2.
</span><br>
<p>The good news is it is no longer 2001: folks can round up tens of
<br>
nodes, and with threading and oversubscribing start to exercise
<br>
hundreds of MPI processors.  EC2, division clusters, and even a
<br>
desk-side machine might suffice for these scales.
<br>
<p>The real challenge is how to do testing and research at O(100,000) mpi
<br>
processors.  I have the good fortune to have access to Intrepid at
<br>
Argonne.   I know access to these large machines can be somewhat hard
<br>
to come by.  
<br>
<p>==rob
<br>
<p><pre>
-- 
Rob Latham
Mathematics and Computer Science Division
Argonne National Lab, IL USA
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18551.php">Shamis, Pavel: "Re: [OMPI users] openMPI installation on front-end and worker nodes"</a>
<li><strong>Previous message:</strong> <a href="18549.php">Reuti: "Re: [OMPI users] openMPI installation on front-end and worker nodes"</a>
<li><strong>In reply to:</strong> <a href="18546.php">Rayson Ho: "Re: [OMPI users] ROMIO Podcast"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18544.php">Rob Latham: "Re: [OMPI users] ROMIO Podcast"</a>
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
