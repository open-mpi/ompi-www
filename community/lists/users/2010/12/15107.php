<?
$subject_val = "Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 13 11:32:01 2010" -->
<!-- isoreceived="20101213163201" -->
<!-- sent="Mon, 13 Dec 2010 11:31:55 -0500" -->
<!-- isosent="20101213163155" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu" -->
<!-- id="07F6F257-C616-4964-B354-E44C1282F070_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20101213110045.32228_at_web005.roc2.bluetie.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-13 11:31:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15108.php">Riccardo Murri: "Re: [OMPI users] Why? MPI_Scatter problem"</a>
<li><strong>Previous message:</strong> <a href="15106.php">Jeff Squyres: "Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu"</a>
<li><strong>In reply to:</strong> <a href="15104.php">Hicham Mouline: "Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 13, 2010, at 11:00 AM, Hicham Mouline wrote:
<br>
<p><span class="quotelev1">&gt; In various interfaces, like network sockets, or threads waiting for data from somewhere, there are various solutions based on _not_ checking the state of the socket or some sort of  queue continuously, but sort of getting _interrupted_ when there is data around, or like condition variables for threads.
</span><br>
<p>OMPI currently busy polls for all progress in the MPI layer, even for TCP sockets.  Our progression engine is (currently) based on the premise of not blocking, so we have to poll everything.
<br>
<p>This design decision was based on several things, including assumptions that others have already mentioned in this thread (e.g., MPI jobs typically have complete &quot;ownership&quot; of the resources that they're running on, shared memory and other transports require polling to check for progress, ...etc.).
<br>
<p>We developers have previously discussed how to make the MPI layer block (instead of busy poll), but there has never been a compelling need to do so.  Specifically, conversion to allow a blocking model is a fair amount of complex work that no one has allocated any time/resources to do.  :-\
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
<li><strong>Next message:</strong> <a href="15108.php">Riccardo Murri: "Re: [OMPI users] Why? MPI_Scatter problem"</a>
<li><strong>Previous message:</strong> <a href="15106.php">Jeff Squyres: "Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu"</a>
<li><strong>In reply to:</strong> <a href="15104.php">Hicham Mouline: "Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu"</a>
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
