<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 24 09:17:01 2005" -->
<!-- isoreceived="20051024141701" -->
<!-- sent="Mon, 24 Oct 2005 09:16:59 -0500" -->
<!-- isosent="20051024141659" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re:  Dumb SVN question (was RE: Segfaults on startup?)" -->
<!-- id="94872EC9-FD79-4A17-9C44-10DCCA62A012_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20051024073955.GA4763_at_iam.uni-bonn.de" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-24 09:16:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0479.php">Brian Barrett: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<li><strong>Previous message:</strong> <a href="0477.php">Ralf Wildenhues: "Re:  Dumb SVN question (was RE: Segfaults on startup?)"</a>
<li><strong>In reply to:</strong> <a href="0477.php">Ralf Wildenhues: "Re:  Dumb SVN question (was RE: Segfaults on startup?)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 24, 2005, at 2:39 AM, Ralf Wildenhues wrote:
<br>
<p><span class="quotelev1">&gt; Hi Troy,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * Troy Benjegerdes wrote on Sun, Oct 23, 2005 at 09:07:05PM CEST:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So.. I have a checkout of ompi/branches/v1.0 .. is there any easy  
</span><br>
<span class="quotelev2">&gt;&gt; way for
</span><br>
<span class="quotelev2">&gt;&gt; me do something like:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 'svn up [UNKOWN FLAG] <a href="http://svn.open-mpi.org/svn/ompi/trunk">http://svn.open-mpi.org/svn/ompi/trunk</a>'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes: svn switch <a href="http://svn.open-mpi.org/svn/ompi/trunk">http://svn.open-mpi.org/svn/ompi/trunk</a>
</span><br>
<span class="quotelev1">&gt; Untested, make sure to look at the documentation first.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Or do I just have to check the whole thing out again?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Nope, above should be magnitudes faster (i.e., it only needs to  
</span><br>
<span class="quotelev1">&gt; send the
</span><br>
<span class="quotelev1">&gt; differences over the network).
</span><br>
<p><p>Just so you know - you *do* have to run autogen.sh after switching  
<br>
from the 1.0 branch to the trunk (or the other way).  There have been  
<br>
some build system changes and things may get ugly otherwise.
<br>
<p>Brian
<br>
<p><p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0479.php">Brian Barrett: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<li><strong>Previous message:</strong> <a href="0477.php">Ralf Wildenhues: "Re:  Dumb SVN question (was RE: Segfaults on startup?)"</a>
<li><strong>In reply to:</strong> <a href="0477.php">Ralf Wildenhues: "Re:  Dumb SVN question (was RE: Segfaults on startup?)"</a>
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
