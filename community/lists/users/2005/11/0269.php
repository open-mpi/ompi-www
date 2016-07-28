<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Nov  1 11:18:32 2005" -->
<!-- isoreceived="20051101161832" -->
<!-- sent="Tue, 01 Nov 2005 09:18:14 -0700" -->
<!-- isosent="20051101161814" -->
<!-- name="Troy Telford" -->
<!-- email="ttelford_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Tests and Bugs (RC4):" -->
<!-- id="op.szkkwommies9li_at_rygel.lnxi.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="ac7e976d1d6475a7282a792a86fe2661_at_open-mpi.org" -->
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
<strong>From:</strong> Troy Telford (<em>ttelford_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-01 11:18:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0270.php">Jeff Squyres: "Re: [O-MPI users] Tests and Bugs (RC4):"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2005/10/0268.php">Jeff Squyres: "Re: [O-MPI users] TCP problems with 1.0rc4"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2005/10/0267.php">Jeff Squyres: "Re: [O-MPI users] Tests and Bugs (RC4):"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0270.php">Jeff Squyres: "Re: [O-MPI users] Tests and Bugs (RC4):"</a>
<li><strong>Reply:</strong> <a href="0270.php">Jeff Squyres: "Re: [O-MPI users] Tests and Bugs (RC4):"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 31 Oct 2005 20:33:06 -0700, Jeff Squyres &lt;jsquyres_at_[hidden]&gt;  
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; On Oct 28, 2005, at 3:08 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. I'm concerned about the MPI_Reduce error -- that one shouldn't be
</span><br>
<span class="quotelev2">&gt;&gt; happening at all.  We have table lookups for the MPI_Op/MPI_Datatype
</span><br>
<span class="quotelev2">&gt;&gt; combinations that are supposed to work; the fact that you're getting
</span><br>
<span class="quotelev2">&gt;&gt; this error means that HPCC is using a combination that falls outside
</span><br>
<span class="quotelev2">&gt;&gt; the pairs that are defined in the MPI standard.  Sigh.  But it's HPCC,
</span><br>
<span class="quotelev2">&gt;&gt; so we should support it ;-).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll eat crow on this one -- double checking the HPCC code, it looks
</span><br>
<span class="quotelev1">&gt; like they are doing reductions on MPI_LONG_LONG_INT, which is perfectly
</span><br>
<span class="quotelev1">&gt; legal (MPI_LONG_LONG_INT is not specifically mentioned in the
</span><br>
<span class="quotelev1">&gt; collectives section in MPI-1, but it's one of the &quot;optional&quot; C
</span><br>
<span class="quotelev1">&gt; datatypes, and falls within the spirit of the definition of &quot;C integer&quot;
</span><br>
<span class="quotelev1">&gt; in the collectives section).  Despite having implementations for all
</span><br>
<span class="quotelev1">&gt; the relevant reductions in Open MPI, I forgot to add MPI_LONG_LONG_INT
</span><br>
<span class="quotelev1">&gt; into some MPI_Op cross-reference datatype tables, so MPI_Reduce didn't
</span><br>
<span class="quotelev1">&gt; think that those combinations were valid.  Doh!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I just committed the fix for this on the trunk; everyone's asleep right
</span><br>
<span class="quotelev1">&gt; now, but I'll get a review of this code and get it committed on the 1.0
</span><br>
<span class="quotelev1">&gt; branch tomorrow.  :-)
</span><br>
<p>My coworkers and I joke that we were hired for our knack at breaking  
<br>
software; OpenMPI will likely suffer a fair amount of our attention.  You  
<br>
have to do a lot of hammerin' to turn iron into steel, but the result is  
<br>
worth it.  If only I knew enough about implementing an MPI to be helpful  
<br>
in solving the problems, rather than just finding them...
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0270.php">Jeff Squyres: "Re: [O-MPI users] Tests and Bugs (RC4):"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2005/10/0268.php">Jeff Squyres: "Re: [O-MPI users] TCP problems with 1.0rc4"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2005/10/0267.php">Jeff Squyres: "Re: [O-MPI users] Tests and Bugs (RC4):"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0270.php">Jeff Squyres: "Re: [O-MPI users] Tests and Bugs (RC4):"</a>
<li><strong>Reply:</strong> <a href="0270.php">Jeff Squyres: "Re: [O-MPI users] Tests and Bugs (RC4):"</a>
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
