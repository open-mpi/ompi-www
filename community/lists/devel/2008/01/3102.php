<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 31 09:42:32 2008" -->
<!-- isoreceived="20080131144232" -->
<!-- sent="Thu, 31 Jan 2008 15:42:18 +0100" -->
<!-- isosent="20080131144218" -->
<!-- name="Adrian Knoth" -->
<!-- email="adi_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307" -->
<!-- id="20080131144218.GE11368_at_ltw.loris.tv" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20080130174854.GX11368_at_ltw.loris.tv" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307<br>
<strong>From:</strong> Adrian Knoth (<em>adi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-31 09:42:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3103.php">Leonardo Fialho: "[OMPI devel] SnapC"</a>
<li><strong>Previous message:</strong> <a href="3101.php">Gleb Natapov: "Re: [OMPI devel] 32 bit udapl warnings"</a>
<li><strong>In reply to:</strong> <a href="3093.php">Adrian Knoth: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/02/3118.php">Tim Prins: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/02/3118.php">Tim Prins: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Jan 30, 2008 at 06:48:54PM +0100, Adrian Knoth wrote:
<br>
<p><span class="quotelev2">&gt; &gt; What is the real issue behind this whole discussion?
</span><br>
<span class="quotelev1">&gt; Hanging connections.
</span><br>
<span class="quotelev1">&gt; I'll have a look at it tomorrow.
</span><br>
<p>To everybody who's interested in BTL-TCP, especially George and (to a
<br>
minor degree) rhc:
<br>
<p>I've integrated something what I call &quot;magic address selection code&quot;.
<br>
See the comments in r17348.
<br>
<p>Can you check
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/svn/ompi/tmp-public/btl-tcp">https://svn.open-mpi.org/svn/ompi/tmp-public/btl-tcp</a>
<br>
<p>if it's working for you? Read: multi-rail TCP, FNN, whatever is
<br>
important to you?
<br>
<p><p>The code is proof of concept and could use a little tuning (if it's
<br>
working at all. Over here, it satisfies all tests).
<br>
<p>I vaguely remember that at least Ralph doesn't like
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int a[perm_size * sizeof(int)];
<br>
<p>where perm_size is dynamically evaluated (read: array size is runtime
<br>
dependent)
<br>
<p>There are also some large arrays, search for MAX_KERNEL_INTERFACE_INDEX.
<br>
Perhaps it's better to replace them with an appropriate OMPI data
<br>
structure. I don't know what fits best, you guys know the details...
<br>
<p><p>So please give the code a try, and if it's working, feel free to cleanup
<br>
whatever is necessary to make it the OMPI style or give me some pointers
<br>
what to change.
<br>
<p><p>I'd like to point to Thomas' diploma thesis. The PDF explains the theory
<br>
behind the code, it's like an rationale. Unfortunately, the PDF has some
<br>
typos, but I guess you'll get the idea. It's a graph matching algorithm,
<br>
Chapter 3 covers everything in detail:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://cluster.inf-ra.uni-jena.de/~adi/peiselt-thesis.pdf">http://cluster.inf-ra.uni-jena.de/~adi/peiselt-thesis.pdf</a>
<br>
<p><p>HTH
<br>
<p><pre>
-- 
Cluster and Metacomputing Working Group
Friedrich-Schiller-Universit&#228;t Jena, Germany
private: <a href="http://adi.thur.de">http://adi.thur.de</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3103.php">Leonardo Fialho: "[OMPI devel] SnapC"</a>
<li><strong>Previous message:</strong> <a href="3101.php">Gleb Natapov: "Re: [OMPI devel] 32 bit udapl warnings"</a>
<li><strong>In reply to:</strong> <a href="3093.php">Adrian Knoth: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/02/3118.php">Tim Prins: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/02/3118.php">Tim Prins: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
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
