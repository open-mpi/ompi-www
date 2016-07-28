<?
$subject_val = "Re: [OMPI users] orterun returns zero when it fails to find an executeable";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 10 16:34:46 2008" -->
<!-- isoreceived="20081210213446" -->
<!-- sent="Wed, 10 Dec 2008 16:34:33 -0500" -->
<!-- isosent="20081210213433" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orterun returns zero when it fails to find an executeable" -->
<!-- id="0B4523BE-0C9B-4575-9B3F-6C7835A600EA_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="493D1B1A.4050702_at_ntlworld.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] orterun returns zero when it fails to find an executeable<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-10 16:34:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7500.php">Jeff Squyres: "Re: [OMPI users] pgi and gcc runtime compatability"</a>
<li><strong>Previous message:</strong> <a href="7498.php">Brock Palen: "Re: [OMPI users] Multicast?"</a>
<li><strong>In reply to:</strong> <a href="7451.php">Number Cruncher: "[OMPI users] orterun returns zero when it fails to find an executeable"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 8, 2008, at 8:03 AM, Number Cruncher wrote:
<br>
<p><span class="quotelev1">&gt; I notice that bug ticket #954 <a href="https://svn.open-mpi.org/trac/ompi/ticket/954">https://svn.open-mpi.org/trac/ompi/ticket/954</a> 
</span><br>
<span class="quotelev1">&gt;  has the very issue I'm encountering: I want to know when mpirun  
</span><br>
<span class="quotelev1">&gt; fails because of a missing executable during some automated tests.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At the moment, nearly 2 years after the bug was reported, orterun/ 
</span><br>
<span class="quotelev1">&gt; mpirun still returns a zero exit status even when it can't find the  
</span><br>
<span class="quotelev1">&gt; executable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I note that this was &quot;fixed&quot; 20 months ago in &quot;1.3&quot;. But there have  
</span><br>
<span class="quotelev1">&gt; been 1.2.1, 1.2.2, .... 1.2.8 since this and still no 1.3!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So here's my appeal for a 1.2 bugfix....
</span><br>
<p><p>Simon --
<br>
<p>We feel your pain.  Trust me, we do.  :-(
<br>
<p>We really wanted to get v1.3 out a long time ago, but we specifically  
<br>
decided that 1.3 would be a feature-driven release, not a schedule- 
<br>
driven release.  Unfortunately, it has taken a *lot* longer to  
<br>
implement the features that we wanted than we anticipated.  Doh.
<br>
<p>The good news is that we're darn close to releasing v1.3.  We actually  
<br>
would have released earlier this week but a blocker bug showed up  
<br>
literally at the last second that we *need* to fix before releasing  
<br>
v1.3 (George still hasn't filed a ticket about it, but the bug  
<br>
exists).  Per <a href="http://www.open-mpi.org/community/lists/devel/2008/12/5029.php">http://www.open-mpi.org/community/lists/devel/2008/12/5029.php</a> 
<br>
, Brad Benton (our release manager) announced that if we can get a fix  
<br>
in the next day or so, we'll still release v1.3 this year.
<br>
<p>If the fix is more complicated, because most of us will be at the MPI  
<br>
Forum meeting next week (meaning: we won't be able to be working on  
<br>
code and regression testing necessary for a release) and then 2 weeks  
<br>
of holidays following that, it's extremely unlikely that we'll release  
<br>
v1.3 before January.
<br>
<p>So cross your fingers and hope that we were all good enough that Santa  
<br>
will give us an early Christmas present this year...
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7500.php">Jeff Squyres: "Re: [OMPI users] pgi and gcc runtime compatability"</a>
<li><strong>Previous message:</strong> <a href="7498.php">Brock Palen: "Re: [OMPI users] Multicast?"</a>
<li><strong>In reply to:</strong> <a href="7451.php">Number Cruncher: "[OMPI users] orterun returns zero when it fails to find an executeable"</a>
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
