<?
$subject_val = "Re: [OMPI users] SegFault with MPI_THREAD_MULTIPLE in 1.2.4";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 28 11:49:06 2007" -->
<!-- isoreceived="20071128164906" -->
<!-- sent="Wed, 28 Nov 2007 17:49:00 +0100" -->
<!-- isosent="20071128164900" -->
<!-- name="Emilio J. Padron" -->
<!-- email="emilioj_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SegFault with MPI_THREAD_MULTIPLE in 1.2.4" -->
<!-- id="20071128164900.GA4069_at_burgas.des.udc.es" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="A4A155BC-88E7-4D7F-A1E2-B165E5E9DE01_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] SegFault with MPI_THREAD_MULTIPLE in 1.2.4<br>
<strong>From:</strong> Emilio J. Padron (<em>emilioj_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-28 11:49:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4543.php">Jeff Squyres: "Re: [OMPI users] version 1.3"</a>
<li><strong>Previous message:</strong> <a href="4541.php">Andrew Friedley: "Re: [OMPI users] OpenIB problems"</a>
<li><strong>In reply to:</strong> <a href="4537.php">Jeff Squyres: "Re: [OMPI users] SegFault with MPI_THREAD_MULTIPLE in 1.2.4"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>thank you for your answer...
<br>
<p><span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [... regarding SegFault with MPI_THREAD_MULTIPLE in OMPI 1.2.4 ...]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
On Wed, Nov 28, 2007 at 11:27:51AM -0500, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; This is to be expected.  OMPI's support for THREAD_MULTIPLE is  
</span><br>
<span class="quotelev1">&gt; incomplete and most likely doesn't work.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Ok, I knew it was not *too* tested, but I was been using previous
<br>
verions with *more or less* success, with a relatively small number of 
<br>
communications in a multithread (posix) environment. This last 1.2.4 
<br>
version breaks even with no explicit comms in the program. It just 
<br>
seemed quite weird to me in a (supposedly) minor-changes revision :-?
<br>
<p>Anyway, thanks to the OMPI team for all the hard work. I hope complete
<br>
thread-safety support is available in future revisions :-)
<br>
<p>Cheers,
<br>
E.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4543.php">Jeff Squyres: "Re: [OMPI users] version 1.3"</a>
<li><strong>Previous message:</strong> <a href="4541.php">Andrew Friedley: "Re: [OMPI users] OpenIB problems"</a>
<li><strong>In reply to:</strong> <a href="4537.php">Jeff Squyres: "Re: [OMPI users] SegFault with MPI_THREAD_MULTIPLE in 1.2.4"</a>
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
