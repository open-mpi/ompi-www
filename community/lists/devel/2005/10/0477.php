<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 24 02:40:06 2005" -->
<!-- isoreceived="20051024074006" -->
<!-- sent="Mon, 24 Oct 2005 09:39:55 +0200" -->
<!-- isosent="20051024073955" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re:  Dumb SVN question (was RE: Segfaults on startup?)" -->
<!-- id="20051024073955.GA4763_at_iam.uni-bonn.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20051023190704.GI30127_at_kalmia.hozed.org" -->
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
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-24 02:39:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0478.php">Brian Barrett: "Re:  Dumb SVN question (was RE: Segfaults on startup?)"</a>
<li><strong>Previous message:</strong> <a href="0476.php">Troy Benjegerdes: "Re:  ppc64 linux bustage?"</a>
<li><strong>In reply to:</strong> <a href="0474.php">Troy Benjegerdes: "Dumb SVN question (was RE: Segfaults on startup?)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0478.php">Brian Barrett: "Re:  Dumb SVN question (was RE: Segfaults on startup?)"</a>
<li><strong>Reply:</strong> <a href="0478.php">Brian Barrett: "Re:  Dumb SVN question (was RE: Segfaults on startup?)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Troy,
<br>
<p>* Troy Benjegerdes wrote on Sun, Oct 23, 2005 at 09:07:05PM CEST:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So.. I have a checkout of ompi/branches/v1.0 .. is there any easy way for 
</span><br>
<span class="quotelev1">&gt; me do something like:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 'svn up [UNKOWN FLAG] <a href="http://svn.open-mpi.org/svn/ompi/trunk">http://svn.open-mpi.org/svn/ompi/trunk</a>'
</span><br>
<p>Yes: svn switch <a href="http://svn.open-mpi.org/svn/ompi/trunk">http://svn.open-mpi.org/svn/ompi/trunk</a>
<br>
Untested, make sure to look at the documentation first.
<br>
<p><span class="quotelev1">&gt; Or do I just have to check the whole thing out again?
</span><br>
<p>Nope, above should be magnitudes faster (i.e., it only needs to send the
<br>
differences over the network).
<br>
<p>Cheers,
<br>
Ralf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0478.php">Brian Barrett: "Re:  Dumb SVN question (was RE: Segfaults on startup?)"</a>
<li><strong>Previous message:</strong> <a href="0476.php">Troy Benjegerdes: "Re:  ppc64 linux bustage?"</a>
<li><strong>In reply to:</strong> <a href="0474.php">Troy Benjegerdes: "Dumb SVN question (was RE: Segfaults on startup?)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0478.php">Brian Barrett: "Re:  Dumb SVN question (was RE: Segfaults on startup?)"</a>
<li><strong>Reply:</strong> <a href="0478.php">Brian Barrett: "Re:  Dumb SVN question (was RE: Segfaults on startup?)"</a>
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
