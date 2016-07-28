<?
$subject_val = "Re: [OMPI users] memchecker overhead?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 26 15:41:40 2009" -->
<!-- isoreceived="20091026194140" -->
<!-- sent="Mon, 26 Oct 2009 20:41:51 +0100" -->
<!-- isosent="20091026194151" -->
<!-- name="Jed Brown" -->
<!-- email="jed_at_[hidden]" -->
<!-- subject="Re: [OMPI users] memchecker overhead?" -->
<!-- id="4AE5FB7F.1000603_at_59A2.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B4106EE1-E021-42A2-8675-0E2D316C12B7_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] memchecker overhead?<br>
<strong>From:</strong> Jed Brown (<em>jed_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-26 15:41:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10971.php">Samuel K. Gutierrez: "Re: [OMPI users] memchecker overhead?"</a>
<li><strong>Previous message:</strong> <a href="10969.php">Brock Palen: "Re: [OMPI users] memchecker overhead?"</a>
<li><strong>In reply to:</strong> <a href="10968.php">Jeff Squyres: "Re: [OMPI users] memchecker overhead?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10971.php">Samuel K. Gutierrez: "Re: [OMPI users] memchecker overhead?"</a>
<li><strong>Reply:</strong> <a href="10971.php">Samuel K. Gutierrez: "Re: [OMPI users] memchecker overhead?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Using --enable-debug adds in a whole pile of developer-level run-time
</span><br>
<span class="quotelev1">&gt; checking and whatnot.  You probably don't want that on production runs.
</span><br>
<p>I have found that --enable-debug --enable-memchecker actually produces
<br>
more valgrind noise than leaving them off.  Are there options to make
<br>
Open MPI strict about initializing and freeing memory?  At one point I
<br>
tried to write policy files, but even with judicious globbing, I kept
<br>
getting different warnings when run on a different program.  (All these
<br>
codes were squeaky-clean under MPICH2.)
<br>
<p>Jed
<br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10970/signature.asc">OpenPGP digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10971.php">Samuel K. Gutierrez: "Re: [OMPI users] memchecker overhead?"</a>
<li><strong>Previous message:</strong> <a href="10969.php">Brock Palen: "Re: [OMPI users] memchecker overhead?"</a>
<li><strong>In reply to:</strong> <a href="10968.php">Jeff Squyres: "Re: [OMPI users] memchecker overhead?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10971.php">Samuel K. Gutierrez: "Re: [OMPI users] memchecker overhead?"</a>
<li><strong>Reply:</strong> <a href="10971.php">Samuel K. Gutierrez: "Re: [OMPI users] memchecker overhead?"</a>
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
