<?
$subject_val = "Re: [OMPI devel] Process placement";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 12 19:59:55 2016" -->
<!-- isoreceived="20160412235955" -->
<!-- sent="Wed, 13 Apr 2016 08:59:55 +0900" -->
<!-- isosent="20160412235955" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Process placement" -->
<!-- id="570D8BFB.30001_at_rist.or.jp" -->
<!-- charset="utf-8" -->
<!-- inreplyto="960A01EE-CFF0-499F-84D4-A4310E40668F_at_icl.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Process placement<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-12 19:59:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18759.php">George Bosilca: "Re: [OMPI devel] Process placement"</a>
<li><strong>Previous message:</strong> <a href="18757.php">George Bosilca: "[OMPI devel] Process placement"</a>
<li><strong>In reply to:</strong> <a href="18757.php">George Bosilca: "[OMPI devel] Process placement"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18759.php">George Bosilca: "Re: [OMPI devel] Process placement"</a>
<li><strong>Reply:</strong> <a href="18759.php">George Bosilca: "Re: [OMPI devel] Process placement"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George,
<br>
<p>about the process binding part
<br>
<p>On 4/13/2016 7:32 AM, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; Also my processes, despite the fact that I asked for 1 per node, are not bound to the first core. Shouldn&#226;&#128;&#153;t we release the process binding when we know there is a single process per node (as in the above case) ?
</span><br>
did you expect the tasks are bound to the first *core* on each node ?
<br>
<p>i would expect the tasks are bound to the first *socket* on each node.
<br>
<p>(since we do not know how many (OpenMP or other) threads will be used by 
<br>
the application,
<br>
--bind-to socket is a good policy imho. in this case (one task per 
<br>
node), no binding at all would mean
<br>
the task can migrate from one socket to the other, and/or OpenMP threads 
<br>
are bound accross sockets.
<br>
That would trigger some NUMA effects (better bandwidth if memory is 
<br>
locally accessed, but worst performance
<br>
is memory is allocated only on one socket).
<br>
so imho, --bind-to socket is still my preferred policy, even if there is 
<br>
only one MPI task per node.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18759.php">George Bosilca: "Re: [OMPI devel] Process placement"</a>
<li><strong>Previous message:</strong> <a href="18757.php">George Bosilca: "[OMPI devel] Process placement"</a>
<li><strong>In reply to:</strong> <a href="18757.php">George Bosilca: "[OMPI devel] Process placement"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18759.php">George Bosilca: "Re: [OMPI devel] Process placement"</a>
<li><strong>Reply:</strong> <a href="18759.php">George Bosilca: "Re: [OMPI devel] Process placement"</a>
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
