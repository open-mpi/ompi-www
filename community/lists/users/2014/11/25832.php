<?
$subject_val = "Re: [OMPI users] collective algorithms";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 17 23:06:16 2014" -->
<!-- isoreceived="20141118040616" -->
<!-- sent="Tue, 18 Nov 2014 13:06:32 +0900" -->
<!-- isosent="20141118040632" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] collective algorithms" -->
<!-- id="546AC5C8.3040809_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9119B351DC3E914DB262CE51CCDF87CA095ED915_at_CRSMSX102.amr.corp.intel.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] collective algorithms<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-17 23:06:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25833.php">Ralph Castain: "Re: [OMPI users] Fortran and OpenMPI 1.8.3 compiled with Intel-15 does nothing silently"</a>
<li><strong>Previous message:</strong> <a href="25831.php">Faraj, Daniel A: "[OMPI users] collective algorithms"</a>
<li><strong>In reply to:</strong> <a href="25831.php">Faraj, Daniel A: "[OMPI users] collective algorithms"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25847.php">Faraj, Daniel A: "Re: [OMPI users] collective algorithms"</a>
<li><strong>Reply:</strong> <a href="25847.php">Faraj, Daniel A: "Re: [OMPI users] collective algorithms"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Daniel,
<br>
<p>you can run
<br>
$ ompi_info --parseable --all | grep _algorithm: | grep enumerator
<br>
<p>that will give you the list of supported algo for the collectives,
<br>
here is a sample output :
<br>
<p>mca:coll:tuned:param:coll_tuned_allreduce_algorithm:enumerator:value:0:ignore
<br>
mca:coll:tuned:param:coll_tuned_allreduce_algorithm:enumerator:value:1:basic_linear
<br>
mca:coll:tuned:param:coll_tuned_allreduce_algorithm:enumerator:value:2:nonoverlapping
<br>
mca:coll:tuned:param:coll_tuned_allreduce_algorithm:enumerator:value:3:recursive_doubling
<br>
mca:coll:tuned:param:coll_tuned_allreduce_algorithm:enumerator:value:4:ring
<br>
mca:coll:tuned:param:coll_tuned_allreduce_algorithm:enumerator:value:5:segmented_ring
<br>
<p><p>the decision (which algo is used based on communicator size/message
<br>
size/...) is made in
<br>
ompi/mca/coll/tuned/coll_tuned_decision_fixed.c
<br>
and can be overriden via config file or environment variable
<br>
<p>i cannot point you to a paper, and hopefully someone else will
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p><p>On 2014/11/18 12:53, Faraj, Daniel A wrote:
<br>
<span class="quotelev1">&gt; I am trying to survey the collective algorithms in Open MPI.
</span><br>
<span class="quotelev1">&gt; I looked at the src code but could not make out the guts of the communication algorithms.
</span><br>
<span class="quotelev1">&gt; There are some open mpi papers but not detailed, where they talk about what algorithms are using in certain collectives.
</span><br>
<span class="quotelev1">&gt; Has anybody done this sort of work, or point me to a paper?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Basically, for a given collective operation, what are:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; a)      Communication algorithm being used for a given criteria (i.e. message size or np)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; b)      What is theoretical algorithm cost
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanx
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---------------
</span><br>
<span class="quotelev1">&gt; Daniel Faraj
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25831.php">http://www.open-mpi.org/community/lists/users/2014/11/25831.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25832/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25833.php">Ralph Castain: "Re: [OMPI users] Fortran and OpenMPI 1.8.3 compiled with Intel-15 does nothing silently"</a>
<li><strong>Previous message:</strong> <a href="25831.php">Faraj, Daniel A: "[OMPI users] collective algorithms"</a>
<li><strong>In reply to:</strong> <a href="25831.php">Faraj, Daniel A: "[OMPI users] collective algorithms"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25847.php">Faraj, Daniel A: "Re: [OMPI users] collective algorithms"</a>
<li><strong>Reply:</strong> <a href="25847.php">Faraj, Daniel A: "Re: [OMPI users] collective algorithms"</a>
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
