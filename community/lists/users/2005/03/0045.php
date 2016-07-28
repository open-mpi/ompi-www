<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Mar 30 02:36:35 2005" -->
<!-- isoreceived="20050330073635" -->
<!-- sent="Wed, 30 Mar 2005 09:36:15 +0200" -->
<!-- isosent="20050330073615" -->
<!-- name="Joachim Worringen" -->
<!-- email="joachim_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Re: [Beowulf] Alternative to MPI ABI" -->
<!-- id="424A56EF.8040607_at_ccrl-nece.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20050327005045.GA3760_at_greglaptop.hsd1.ca.comcast.net" -->
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
<strong>From:</strong> Joachim Worringen (<em>joachim_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-03-30 02:36:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="../../2005/04/0046.php">Jeff Squyres: "Re: [O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<li><strong>Previous message:</strong> <a href="0044.php">Greg Lindahl: "Re: [O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<li><strong>In reply to:</strong> <a href="0044.php">Greg Lindahl: "Re: [O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="../../2005/04/0046.php">Jeff Squyres: "Re: [O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greg Lindahl wrote:
<br>
<span class="quotelev1">&gt; On Sat, Mar 26, 2005 at 06:47:41AM -0500, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;I guess I don't understand your reluctance to accept a MorphMPI-like 
</span><br>
<span class="quotelev2">&gt;&gt;solution:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You have repeated your original MorphMPI attributes. I responded to
</span><br>
<span class="quotelev1">&gt; them, and I don't see any sign that you've read my response. This is
</span><br>
<span class="quotelev1">&gt; not the way discussions are usually held.
</span><br>
<p>Jeff explained very well the problems he sees with your additional 
<br>
F77-like-C-API (which, BTW, is largely realized in MPICH as all opaque 
<br>
types there are integer handles): two interfaces means two mpi.h and two 
<br>
libraries to maintain. I doubt that any implementor is keen on this.
<br>
<p>Instead, a layer on top would be easier, and not unrealistic to 
<br>
maintain: a serious MPI implementation will rarely (never!?) change its 
<br>
mpi.h/mpif.h. We (for NEC's MPI implemenation across all platforms) 
<br>
didn't do so for 5 years when we completed the full MPI-2 functionality. 
<br>
And even before, we only added things, but didn't change existing 
<br>
definitions.
<br>
<p>&nbsp;&nbsp;Joachim
<br>
<p><pre>
-- 
Joachim Worringen - NEC C&amp;C research lab St.Augustin
fon +49-2241-9252.20 - fax .99 - <a href="http://www.ccrl-nece.de">http://www.ccrl-nece.de</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="../../2005/04/0046.php">Jeff Squyres: "Re: [O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<li><strong>Previous message:</strong> <a href="0044.php">Greg Lindahl: "Re: [O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<li><strong>In reply to:</strong> <a href="0044.php">Greg Lindahl: "Re: [O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="../../2005/04/0046.php">Jeff Squyres: "Re: [O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
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
