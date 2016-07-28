<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Apr  3 19:14:32 2005" -->
<!-- isoreceived="20050404001432" -->
<!-- sent="Sun, 3 Apr 2005 20:14:04 -0400 (EDT)" -->
<!-- isosent="20050404001404" -->
<!-- name="Mark Hahn" -->
<!-- email="hahn_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Re: [Beowulf] Alternative to MPI ABI" -->
<!-- id="Pine.LNX.4.44.0504032004360.28816-100000_at_coffee.psychology.mcmaster.ca" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="42506B58.4070200_at_scalableinformatics.com" -->
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
<strong>From:</strong> Mark Hahn (<em>hahn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-04-03 19:14:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0050.php">Joe Landman: "Re: [O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<li><strong>Previous message:</strong> <a href="0048.php">Joe Landman: "Re: [O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<li><strong>In reply to:</strong> <a href="0048.php">Joe Landman: "Re: [O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0050.php">Joe Landman: "Re: [O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<li><strong>Reply:</strong> <a href="0050.php">Joe Landman: "Re: [O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; If there is an ABI then we have a fighting chance at focusing on the 
</span><br>
<span class="quotelev1">&gt; applications and not the ever-so-slightly-strange version of whichever 
</span><br>
<span class="quotelev1">&gt; flavor of MPI that they chose to use.
</span><br>
<p>wonderful!  yes: ABI standards are good and proprietary
<br>
implementations (which inherently provide only negative 
<br>
definitions of support) are bad.
<br>
<p>after all, the real appeal is that N MPI implementation only need to test
<br>
their own conformity to the standard, and M applications test their
<br>
conformity.  ie, N+M tests, rather than N*M without an ABI.  this 
<br>
assumes that the ABI/standard is broad enough, of course!
<br>
<p>first, it's worth asking whether there is something to be lost
<br>
by going to an ABI?  yes, dynamic linking imposes some overhead - 
<br>
I have to wonder whether some of the higher-performing interconnects
<br>
(SGI/Cray/Quadrics/Pathscale) are low-latency enough to worry about 
<br>
indirect library calls blowing the pipeline.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0050.php">Joe Landman: "Re: [O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<li><strong>Previous message:</strong> <a href="0048.php">Joe Landman: "Re: [O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<li><strong>In reply to:</strong> <a href="0048.php">Joe Landman: "Re: [O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0050.php">Joe Landman: "Re: [O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<li><strong>Reply:</strong> <a href="0050.php">Joe Landman: "Re: [O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
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
