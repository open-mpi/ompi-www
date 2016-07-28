<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun 15 19:56:12 2005" -->
<!-- isoreceived="20050616005612" -->
<!-- sent="Wed, 15 Jun 2005 20:56:09 -0400" -->
<!-- isosent="20050616005609" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Questions on status" -->
<!-- id="9bfbb45dfd002e0a0d22a73bb78d3720_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20050615113217.A4630_at_ca.sandia.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-06-15 19:56:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0076.php">Jeff Squyres: "Re: [O-MPI users] Questions on status"</a>
<li><strong>Previous message:</strong> <a href="0074.php">Jeff Squyres: "Re: [O-MPI users] re build time"</a>
<li><strong>In reply to:</strong> <a href="0066.php">Benjamin Allan: "Re: [O-MPI users] Questions on status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0082.php">Ben Allan: "Re: [O-MPI users] Questions on status"</a>
<li><strong>Reply:</strong> <a href="0082.php">Ben Allan: "Re: [O-MPI users] Questions on status"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 15, 2005, at 2:32 PM, Benjamin Allan wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Although we have not made a final decision yet, given that community
</span><br>
<span class="quotelev2">&gt;&gt; involvement is a *strong* goal of this project, we've actively
</span><br>
<span class="quotelev2">&gt;&gt; discussed several models of how to bring the community into Open MPI.
</span><br>
<span class="quotelev2">&gt;&gt; One possibility is to have a minimal registration mechanism where
</span><br>
<span class="quotelev2">&gt;&gt; anyone who registers can get anonymous/read-only access.  This would
</span><br>
<span class="quotelev2">&gt;&gt; likely be a suitable deterrent for someone to take our work and claim
</span><br>
<span class="quotelev2">&gt;&gt; it as their own (because there would be a paper trail).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; a)
</span><br>
<span class="quotelev1">&gt; It has not been my experience that a paper trail makes the
</span><br>
<span class="quotelev1">&gt; class of people prone to theivery any less prone to theivery.
</span><br>
<span class="quotelev1">&gt; The sad reality of ineffective (totally absent?) quality control by
</span><br>
<span class="quotelev1">&gt; journals and conferences makes the deterrent effect unlikely.
</span><br>
<p>It's still a hope that we can cling to.  :-)
<br>
<p>But just to make clear: this is only one option; no final decision has 
<br>
been made yet.
<br>
<p><span class="quotelev1">&gt; b)
</span><br>
<span class="quotelev1">&gt; On the release issue, the '&quot;slow stable&quot; plus snapshots' release
</span><br>
<span class="quotelev1">&gt; cycle (after the initial stable point) seems very desirable to me.
</span><br>
<span class="quotelev1">&gt; I've lost countless months of time making my primary open-source
</span><br>
<span class="quotelev1">&gt; deliverable appear &quot;stable&quot; to the users in spite of deep instabilities
</span><br>
<span class="quotelev1">&gt; in external tools I am forced to incorporate for programmatic reasons.
</span><br>
<p>Excellent.
<br>
<p><span class="quotelev1">&gt; open-mpi, I can guarantee, will be added to this list of external
</span><br>
<span class="quotelev1">&gt; dependencies I have to cope with and I'm thrilled to see folks aiming
</span><br>
<span class="quotelev1">&gt; to keep the quality high in the first release.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What I would like to see, as the developer of another (non-competing)
</span><br>
<span class="quotelev1">&gt; infrastructure tool set, is some sort of little web form or at
</span><br>
<span class="quotelev1">&gt; least an email link where
</span><br>
<span class="quotelev1">&gt; I can put in a description of my project and say why it should be
</span><br>
<span class="quotelev1">&gt; given early access, rather than just being told &quot;sorry, closed&quot;.
</span><br>
<p>We realize that we excluded people from the alpha.  I apologize for 
<br>
this, but that decision was made mainly for expediency (to get this 
<br>
thing out out out, it was easier to handle a bunch of well-informed bug 
<br>
reports from a small number of people) and for the reasons that I cited 
<br>
in my prior mail.
<br>
<p>And honestly, it's probably a good thing that it was closed.  OMPI 
<br>
worked well enough on our development machines, but our test users 
<br>
found some really embarrassing, stupid bugs as soon as they tried to 
<br>
run on other machines (as well as a fair number of devious bugs that 
<br>
didn't show up in our standard regressions).  :-)
<br>
<p><span class="quotelev1">&gt; It takes time to incorporate a new mpi implementation (and yet
</span><br>
<span class="quotelev1">&gt; another set of awful build requirement peculiarities) into a
</span><br>
<span class="quotelev1">&gt; a package like mine that is expected to be portable and to cope
</span><br>
<span class="quotelev1">&gt; seamlessly with every mpi that comes along.
</span><br>
<p>What is your tool, BTW?
<br>
<p><span class="quotelev1">&gt; I can guarantee
</span><br>
<span class="quotelev1">&gt; that within days of the open-mpi download becoming public,
</span><br>
<span class="quotelev1">&gt; people will be dumping hatemail in *my* mailbox because the
</span><br>
<span class="quotelev1">&gt; toolset i support isn't 'open-mpi-ready'.
</span><br>
<span class="quotelev1">&gt; As it happens, I can get a bootleg (not necessarily current)
</span><br>
<span class="quotelev1">&gt; openmpi tarball from
</span><br>
<span class="quotelev1">&gt; someone nearby as I work at Sandia, but that shouldn't have
</span><br>
<span class="quotelev1">&gt; to be the case. Wouldn't it be better if (knowing that
</span><br>
<span class="quotelev1">&gt; testing comes with certain politeness requirements and testing
</span><br>
<span class="quotelev1">&gt; duties) those who have to support open-mpi users get to do
</span><br>
<span class="quotelev1">&gt; gamma-testing programming before the release (since beta is closed)?
</span><br>
<p>To clarify: only the alpha was closed.
<br>
<p>The beta will be public and has not occurred yet; we're hoping that 
<br>
it's Real Soon Now (as mentioned previously: we're adhering to the LAM 
<br>
policy of not promising specific release dates, as they inevitably turn 
<br>
out to be wrong).
<br>
<p><span class="quotelev1">&gt; On the question of 'benefit of more testers' from 'my' class
</span><br>
<span class="quotelev1">&gt; of user. You're right, i don't have the slightest interest
</span><br>
<span class="quotelev1">&gt; in examining or reporting bugs down in 95% of your code.
</span><br>
<span class="quotelev1">&gt; (unless valgrind tells me otherwise...)
</span><br>
<span class="quotelev1">&gt; But the 5% of code which the end user (and more importantly
</span><br>
<span class="quotelev1">&gt; down-stream build systems) have to see is likely to be
</span><br>
<span class="quotelev1">&gt; gone over with a fine-toothed comb.
</span><br>
<p>I agree 100%.  I hope my prior mail and the above clarification about 
<br>
the beta clarify some of the issues and our rationale.  I can tell you 
<br>
that the build system is remarkably similar to that of LAM/MPI's.  As 
<br>
other mails today have indicated, OMPI has fully functional wrapper 
<br>
compilers (mpicc, mpiCC, mpif77, mpif90) and an ompi_info command 
<br>
(analogous to, but greatly superseding LAM's laminfo command).
<br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0076.php">Jeff Squyres: "Re: [O-MPI users] Questions on status"</a>
<li><strong>Previous message:</strong> <a href="0074.php">Jeff Squyres: "Re: [O-MPI users] re build time"</a>
<li><strong>In reply to:</strong> <a href="0066.php">Benjamin Allan: "Re: [O-MPI users] Questions on status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0082.php">Ben Allan: "Re: [O-MPI users] Questions on status"</a>
<li><strong>Reply:</strong> <a href="0082.php">Ben Allan: "Re: [O-MPI users] Questions on status"</a>
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
