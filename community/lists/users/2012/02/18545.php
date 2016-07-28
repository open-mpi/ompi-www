<?
$subject_val = "Re: [OMPI users] ROMIO Podcast";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 21 12:06:40 2012" -->
<!-- isoreceived="20120221170640" -->
<!-- sent="Tue, 21 Feb 2012 11:06:34 -0600" -->
<!-- isosent="20120221170634" -->
<!-- name="Rob Latham" -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ROMIO Podcast" -->
<!-- id="20120221170634.GH8432_at_mcs.anl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAHwLALNjcjdMRmiQ=du_G2jnCFPyNxc1fDm=r3vFRuYqLidmPQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2012-02-21 12:06:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18546.php">Rayson Ho: "Re: [OMPI users] ROMIO Podcast"</a>
<li><strong>Previous message:</strong> <a href="18544.php">Rob Latham: "Re: [OMPI users] ROMIO Podcast"</a>
<li><strong>In reply to:</strong> <a href="18542.php">Rayson Ho: "Re: [OMPI users] ROMIO Podcast"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18546.php">Rayson Ho: "Re: [OMPI users] ROMIO Podcast"</a>
<li><strong>Reply:</strong> <a href="18546.php">Rayson Ho: "Re: [OMPI users] ROMIO Podcast"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Feb 20, 2012 at 06:11:53PM -0500, Rayson Ho wrote:
<br>
<span class="quotelev1">&gt; BTW, since most of the interviewees are opensource project
</span><br>
<span class="quotelev1">&gt; maintainers, next time can you ask them how much external contribution
</span><br>
<span class="quotelev1">&gt; they get (%), and who are the main external contributors (students?
</span><br>
<span class="quotelev1">&gt; HPC labs? Industry?), and how do they handle external contributions
</span><br>
<span class="quotelev1">&gt; (need copyright assignment?). And how do they handle testing, and
</span><br>
<span class="quotelev1">&gt; performance regression...
</span><br>
<p>external contributions: I wish I had more quantitative numbers for
<br>
you.  I don't develop on a Lustre system, so we were grateful to the
<br>
community for contributing and testing an improved Lustre driver for
<br>
ROMIO.   Weikuan Yu started work on a Lustre driver while he worked at
<br>
Oak Ridge, then Sun/CFS contributed some more improvements.  Pascal
<br>
Deveze from Bull and  Martin Pokorny from NRAO helped carry it over
<br>
the finish line, contributing some important bug fixes and nice little
<br>
performance improvement tweaks.
<br>
<p>IBM has been a great industry partner, contributing improvements to
<br>
all of MPICH2.  For BlueGene, IBM contributed a block-aligned
<br>
collective I/O implementation and an I/O aggregation strategy that
<br>
works better for the BlueGene topology.   They also contributed what
<br>
we are calling &quot;64 bit MPI_Aint&quot; which works around a problem with MPI
<br>
file views and platforms with a 32 bit integer. 
<br>
<p>Our best academic partner -- and really at this point we should
<br>
consider them co-maintainers -- is Northwestern University.  I've
<br>
worked with Wei-Keng for a decade and am always happy to see a
<br>
question, suggestion, or patch from him in my mailbox.  Northwestern
<br>
provided us some great students over the years as well.  Avery Ching
<br>
and Keenin Coloma did a lot of good work on MPI-IO before the bay area
<br>
lured them to industry. 
<br>
<p>ROMIO's testing and performance regression framework is honestly a
<br>
shambles.  Part of that is a challenge with the MPI-IO interface
<br>
itself.  For MPI messaging you exercise the API and you have pretty
<br>
much covered everything.  MPI-IO, though, introduces hints.  These
<br>
hints are great for tuning but make the testing &quot;surface area&quot; a lot
<br>
larger.  We are probably going to have a chance to improve things
<br>
greatly with some recently funded proposals.
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
<li><strong>Next message:</strong> <a href="18546.php">Rayson Ho: "Re: [OMPI users] ROMIO Podcast"</a>
<li><strong>Previous message:</strong> <a href="18544.php">Rob Latham: "Re: [OMPI users] ROMIO Podcast"</a>
<li><strong>In reply to:</strong> <a href="18542.php">Rayson Ho: "Re: [OMPI users] ROMIO Podcast"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18546.php">Rayson Ho: "Re: [OMPI users] ROMIO Podcast"</a>
<li><strong>Reply:</strong> <a href="18546.php">Rayson Ho: "Re: [OMPI users] ROMIO Podcast"</a>
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
