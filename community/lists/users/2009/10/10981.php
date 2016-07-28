<?
$subject_val = "Re: [OMPI users] MPI-3 Fortran feedback";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 27 16:50:14 2009" -->
<!-- isoreceived="20091027205014" -->
<!-- sent="Tue, 27 Oct 2009 16:50:07 -0400" -->
<!-- isosent="20091027205007" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI-3 Fortran feedback" -->
<!-- id="8DC4CCAA-E953-4D67-8624-8E3FD5AA2351_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20091027204016.GA6955_at_hpegg.wr.niftyegg.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI-3 Fortran feedback<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-27 16:50:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10982.php">Sergio Díaz: "[OMPI users]  checkpoint opempi-1.3.3+sge62"</a>
<li><strong>Previous message:</strong> <a href="10980.php">Nifty Tom Mitchell: "Re: [OMPI users] MPI-3 Fortran feedback"</a>
<li><strong>In reply to:</strong> <a href="10980.php">Nifty Tom Mitchell: "Re: [OMPI users] MPI-3 Fortran feedback"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 27, 2009, at 4:40 PM, Nifty Tom Mitchell wrote:
<br>
<p><span class="quotelev1">&gt; If I recall correctly the OMPI build does not generate a full Fortran
</span><br>
<span class="quotelev1">&gt; &lt;--&gt; C mapping of all types for all functions.  Was the reason that  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; resulting library has too many permutations and symbols to test,  
</span><br>
<span class="quotelev1">&gt; build and
</span><br>
<span class="quotelev1">&gt; link to.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>The OMPI F90 module does not create prototypes for all possible MPI  
<br>
F90 bindings because there are (IIRC) over 5M possibilities.  There's  
<br>
currently no compiler that can handle that many in a single F90 module  
<br>
file.
<br>
<p><span class="quotelev1">&gt; While not a co-array related comment is there a way to generate
</span><br>
<span class="quotelev1">&gt; the necessary bindings on the fly and facilitate stronger type
</span><br>
<span class="quotelev1">&gt; checking and perhaps open the door for richer optimizations
</span><br>
<span class="quotelev1">&gt; from the compiler folk.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   <a href="http://www.open-mpi.org/papers/euro-pvmmpi-2005-fortran/euro-pvm-mpi-2005-fortran.pdf">http://www.open-mpi.org/papers/euro-pvmmpi-2005-fortran/euro-pvm-mpi-2005-fortran.pdf</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Yes, Craig and I were the authors of that paper.  :-)  We used that as  
<br>
the starting point for discussions in the MPI-3 working group to  
<br>
improve the MPI F90 bindings problem.  The final solution we ended up  
<br>
on ended up being a little different -- see the MPI-3 Fortran WG wiki  
<br>
page for a discussion about this issue:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.mpi-forum.org/trac/mpi-forum-web/wiki/FtnWikiPage">https://svn.mpi-forum.org/trac/mpi-forum-web/wiki/FtnWikiPage</a>
<br>
<p><span class="quotelev1">&gt; Will Fortran 2008 revisit some of these issues in a problematic way?
</span><br>
<span class="quotelev1">&gt; Or is this such old news that folk just live with it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>We think we have a good solution to completely solve this particular  
<br>
issue.  See the wiki page for details.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10982.php">Sergio Díaz: "[OMPI users]  checkpoint opempi-1.3.3+sge62"</a>
<li><strong>Previous message:</strong> <a href="10980.php">Nifty Tom Mitchell: "Re: [OMPI users] MPI-3 Fortran feedback"</a>
<li><strong>In reply to:</strong> <a href="10980.php">Nifty Tom Mitchell: "Re: [OMPI users] MPI-3 Fortran feedback"</a>
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
