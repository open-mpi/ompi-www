<?
$subject_val = "Re: [OMPI users] Programming with Big Data in R";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 26 14:44:12 2013" -->
<!-- isoreceived="20130226194412" -->
<!-- sent="Tue, 26 Feb 2013 19:43:36 +0000" -->
<!-- isosent="20130226194336" -->
<!-- name="Daniels, Marcus G" -->
<!-- email="mdaniels_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Programming with Big Data in R" -->
<!-- id="532C594B7920A549A2A91CB4312CC576140F4BC0_at_ECS-EXG-P-MB01.win.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="17005110-A7E4-4DE0-A08C-5AFE3C9A0027_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Programming with Big Data in R<br>
<strong>From:</strong> Daniels, Marcus G (<em>mdaniels_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-26 14:43:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21467.php">Daniels, Marcus G: "Re: [OMPI users] Programming with Big Data in R"</a>
<li><strong>Previous message:</strong> <a href="21465.php">Ralph Castain: "[OMPI users] Programming with Big Data in R"</a>
<li><strong>In reply to:</strong> <a href="21465.php">Ralph Castain: "[OMPI users] Programming with Big Data in R"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21467.php">Daniels, Marcus G: "Re: [OMPI users] Programming with Big Data in R"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 26, 2013, at 12:17 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; I have someone who is interested in knowing if anyone is currently working with pbdR:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>It looks to me like an evolution of the capabilities in the `snow' wrapper of `Rmpi', but the addition of the BLACS/PBLAS/ScaLAPACK interfaces data structure accessors.  I've used the former quite a bit, but not pbdR itself.
<br>
<p>Take a look at <a href="http://cran.r-project.org/web/views/HighPerformanceComputing.html">http://cran.r-project.org/web/views/HighPerformanceComputing.html</a> to get a sense of the kind of packages that are available; there's a lot of overlap, unfortunately.
<br>
<p>R itself is not a compiled language, but it incorporates routines, standard libraries, and third party packages that package-up C, C++, and Fortran behind the scenes.   To the extent one can find a `worker' that ends-up being a mostly native code implementation and runs for a long time, MPI or socket messaging can be useful.   Scalars are just length 1 vectors in R, so there's at least the possibility of getting performance by being highly vectorized.  pbdR and the others usually provide an `apply' routine that maps a function over a vector.   Performance-wise think Python or Perl speed.
<br>
<p>In contrast to the MPI or sockets, there's a standard package in the distribution called `parallel' that does `fork' of the R process on multicore machines.  This works surprisingly well, and if you have a fat node (e.g. 48 processors), it would be my first choice.  It's easier to use.
<br>
<p>Marcus
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21467.php">Daniels, Marcus G: "Re: [OMPI users] Programming with Big Data in R"</a>
<li><strong>Previous message:</strong> <a href="21465.php">Ralph Castain: "[OMPI users] Programming with Big Data in R"</a>
<li><strong>In reply to:</strong> <a href="21465.php">Ralph Castain: "[OMPI users] Programming with Big Data in R"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21467.php">Daniels, Marcus G: "Re: [OMPI users] Programming with Big Data in R"</a>
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
