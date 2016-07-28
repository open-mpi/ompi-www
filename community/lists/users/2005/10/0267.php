<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 31 22:33:22 2005" -->
<!-- isoreceived="20051101033322" -->
<!-- sent="Mon, 31 Oct 2005 22:33:06 -0500" -->
<!-- isosent="20051101033306" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Tests and Bugs (RC4):" -->
<!-- id="ac7e976d1d6475a7282a792a86fe2661_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="2d4c74dbf950a112fff36a40955fde09_at_open-mpi.org" -->
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
<strong>Date:</strong> 2005-10-31 22:33:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0268.php">Jeff Squyres: "Re: [O-MPI users] TCP problems with 1.0rc4"</a>
<li><strong>Previous message:</strong> <a href="0266.php">Mike Houston: "Re: [O-MPI users] Infiniband performance problems (mvapi)"</a>
<li><strong>In reply to:</strong> <a href="0243.php">Jeff Squyres: "Re: [O-MPI users] Tests and Bugs (RC4):"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2005/11/0269.php">Troy Telford: "Re: [O-MPI users] Tests and Bugs (RC4):"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2005/11/0269.php">Troy Telford: "Re: [O-MPI users] Tests and Bugs (RC4):"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 28, 2005, at 3:08 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; 1. I'm concerned about the MPI_Reduce error -- that one shouldn't be
</span><br>
<span class="quotelev1">&gt; happening at all.  We have table lookups for the MPI_Op/MPI_Datatype
</span><br>
<span class="quotelev1">&gt; combinations that are supposed to work; the fact that you're getting
</span><br>
<span class="quotelev1">&gt; this error means that HPCC is using a combination that falls outside
</span><br>
<span class="quotelev1">&gt; the pairs that are defined in the MPI standard.  Sigh.  But it's HPCC,
</span><br>
<span class="quotelev1">&gt; so we should support it ;-).
</span><br>
<p>I'll eat crow on this one -- double checking the HPCC code, it looks 
<br>
like they are doing reductions on MPI_LONG_LONG_INT, which is perfectly 
<br>
legal (MPI_LONG_LONG_INT is not specifically mentioned in the 
<br>
collectives section in MPI-1, but it's one of the &quot;optional&quot; C 
<br>
datatypes, and falls within the spirit of the definition of &quot;C integer&quot; 
<br>
in the collectives section).  Despite having implementations for all 
<br>
the relevant reductions in Open MPI, I forgot to add MPI_LONG_LONG_INT 
<br>
into some MPI_Op cross-reference datatype tables, so MPI_Reduce didn't 
<br>
think that those combinations were valid.  Doh!
<br>
<p>I just committed the fix for this on the trunk; everyone's asleep right 
<br>
now, but I'll get a review of this code and get it committed on the 1.0 
<br>
branch tomorrow.  :-)
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
<li><strong>Next message:</strong> <a href="0268.php">Jeff Squyres: "Re: [O-MPI users] TCP problems with 1.0rc4"</a>
<li><strong>Previous message:</strong> <a href="0266.php">Mike Houston: "Re: [O-MPI users] Infiniband performance problems (mvapi)"</a>
<li><strong>In reply to:</strong> <a href="0243.php">Jeff Squyres: "Re: [O-MPI users] Tests and Bugs (RC4):"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2005/11/0269.php">Troy Telford: "Re: [O-MPI users] Tests and Bugs (RC4):"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2005/11/0269.php">Troy Telford: "Re: [O-MPI users] Tests and Bugs (RC4):"</a>
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
