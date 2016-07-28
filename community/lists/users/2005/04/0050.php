<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Apr  3 20:06:36 2005" -->
<!-- isoreceived="20050404010636" -->
<!-- sent="Sun, 03 Apr 2005 21:06:42 -0400" -->
<!-- isosent="20050404010642" -->
<!-- name="Joe Landman" -->
<!-- email="landman_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Re: [Beowulf] Alternative to MPI ABI" -->
<!-- id="42509322.3010005_at_scalableinformatics.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="Pine.LNX.4.44.0504032004360.28816-100000_at_coffee.psychology.mcmaster.ca" -->
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
<strong>From:</strong> Joe Landman (<em>landman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-04-03 20:06:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="../../2005/05/0051.php">atarpley: "[O-MPI users] Questions about Open MPI"</a>
<li><strong>Previous message:</strong> <a href="0049.php">Mark Hahn: "Re: [O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<li><strong>In reply to:</strong> <a href="0049.php">Mark Hahn: "Re: [O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="../../2005/03/0038.php">Patrick Geoffray: "[O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mark Hahn wrote:
<br>
<span class="quotelev2">&gt;&gt;If there is an ABI then we have a fighting chance at focusing on the 
</span><br>
<span class="quotelev2">&gt;&gt;applications and not the ever-so-slightly-strange version of whichever 
</span><br>
<span class="quotelev2">&gt;&gt;flavor of MPI that they chose to use.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; wonderful!  yes: ABI standards are good and proprietary
</span><br>
<span class="quotelev1">&gt; implementations (which inherently provide only negative 
</span><br>
<span class="quotelev1">&gt; definitions of support) are bad.
</span><br>
<p>Er... standards are good.  Proprietary implementations ... hmmm... don't 
<br>
know where you were pulling that one from.
<br>
<p>I am complaining about being forced to have (no offence meant Jeff, 
<br>
William, et al, good work BTW) LAM 7.0.3, 7.0.6, 7.1.1; MPICH 1.2.5.2, 
<br>
1.2.5.1, 1.2.6.x) on one machine, with the associated problems with 
<br>
maintenance and configuration that this brings (environment variables, 
<br>
paths, etc).
<br>
<p>Last I checked, MPICH and LAM are not proprietary.  They do however have 
<br>
different ABIs, though they expose nearly the same API.  Moreover, a 
<br>
code compiled with LAM 7.0.3 does not seem to like being run using the 
<br>
LAM 7.1.1 tools (and if there is a way to do this, please, someone, let 
<br>
me know offline!!!).  If this is supposed to work, I'd be happy to file 
<br>
a bug report.
<br>
<p><span class="quotelev1">&gt; after all, the real appeal is that N MPI implementation only need to test
</span><br>
<span class="quotelev1">&gt; their own conformity to the standard, and M applications test their
</span><br>
<span class="quotelev1">&gt; conformity.  ie, N+M tests, rather than N*M without an ABI.  this 
</span><br>
<span class="quotelev1">&gt; assumes that the ABI/standard is broad enough, of course!
</span><br>
<p>If they interoperate ... (sigh)
<br>
<p><span class="quotelev1">&gt; first, it's worth asking whether there is something to be lost
</span><br>
<span class="quotelev1">&gt; by going to an ABI?  yes, dynamic linking imposes some overhead - 
</span><br>
<span class="quotelev1">&gt; I have to wonder whether some of the higher-performing interconnects
</span><br>
<span class="quotelev1">&gt; (SGI/Cray/Quadrics/Pathscale) are low-latency enough to worry about 
</span><br>
<span class="quotelev1">&gt; indirect library calls blowing the pipeline.
</span><br>
<p>The indirection should not cost a great deal (well under single byte one 
<br>
way transfer latency time) or the platform vendor has other issues they 
<br>
have to deal with.   It could though.
<br>
<p>Imagine, to do messaging on future fabrics, we might need an RTOS :(
<br>
<p><p><pre>
-- 
Joseph Landman, Ph.D
Founder and CEO
Scalable Informatics LLC,
email: landman_at_[hidden]
web  : <a href="http://www.scalableinformatics.com">http://www.scalableinformatics.com</a>
phone: +1 734 786 8423
fax  : +1 734 786 8452
cell : +1 734 612 4615
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="../../2005/05/0051.php">atarpley: "[O-MPI users] Questions about Open MPI"</a>
<li><strong>Previous message:</strong> <a href="0049.php">Mark Hahn: "Re: [O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<li><strong>In reply to:</strong> <a href="0049.php">Mark Hahn: "Re: [O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="../../2005/03/0038.php">Patrick Geoffray: "[O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
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
