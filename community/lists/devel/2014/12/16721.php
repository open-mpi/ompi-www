<?
$subject_val = "Re: [OMPI devel] mpirun hang (regression in bffb2b7a4bb49c9188d942201b8a8f04872ff63c)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 24 09:16:04 2014" -->
<!-- isoreceived="20141224141604" -->
<!-- sent="Wed, 24 Dec 2014 06:16:01 -0800" -->
<!-- isosent="20141224141601" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mpirun hang (regression in bffb2b7a4bb49c9188d942201b8a8f04872ff63c)" -->
<!-- id="0A1705FC-181D-4C60-9129-5D340B6D9F91_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="549A6A9C.1020908_at_iferc.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] mpirun hang (regression in bffb2b7a4bb49c9188d942201b8a8f04872ff63c)<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-24 09:16:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16722.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-612-g05af80b"</a>
<li><strong>Previous message:</strong> <a href="16720.php">Gilles Gouaillardet: "[OMPI devel] mpirun hang (regression in bffb2b7a4bb49c9188d942201b8a8f04872ff63c)"</a>
<li><strong>In reply to:</strong> <a href="16720.php">Gilles Gouaillardet: "[OMPI devel] mpirun hang (regression in bffb2b7a4bb49c9188d942201b8a8f04872ff63c)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looks like someone already took care of it this morning - thanks!
<br>
<p><span class="quotelev1">&gt; On Dec 23, 2014, at 11:26 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i tried to debug the issue reported by Siegmar at
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/12/26052.php">http://www.open-mpi.org/community/lists/users/2014/12/26052.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i have not been able to try this on an heterogeneous cluster yet, but i
</span><br>
<span class="quotelev1">&gt; could
</span><br>
<span class="quotelev1">&gt; reproduce a hang with 2 nodes and 3 tasks :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -host node0,node1 -np 3 --mca btl tcp,self --mca coll ^ml
</span><br>
<span class="quotelev1">&gt; ./helloworld
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; git bisect pointed to commit
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/hppritcha/ompi/commit/bffb2b7a4bb49c9188d942201b8a8f04872ff63c">https://github.com/hppritcha/ompi/commit/bffb2b7a4bb49c9188d942201b8a8f04872ff63c</a>,
</span><br>
<span class="quotelev1">&gt; and reverting a subpart of this commit &quot;fixes&quot; the hang
</span><br>
<span class="quotelev1">&gt; (see attached patch)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; your change correctly prevents the use of uninitialized data (worst case
</span><br>
<span class="quotelev1">&gt; scenario is a crash),
</span><br>
<span class="quotelev1">&gt; but has some undesired side effects that eventually causes a hang.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; could you please have a look at it ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; &lt;pmix_server.patch&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16720.php">http://www.open-mpi.org/community/lists/devel/2014/12/16720.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16722.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-612-g05af80b"</a>
<li><strong>Previous message:</strong> <a href="16720.php">Gilles Gouaillardet: "[OMPI devel] mpirun hang (regression in bffb2b7a4bb49c9188d942201b8a8f04872ff63c)"</a>
<li><strong>In reply to:</strong> <a href="16720.php">Gilles Gouaillardet: "[OMPI devel] mpirun hang (regression in bffb2b7a4bb49c9188d942201b8a8f04872ff63c)"</a>
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
