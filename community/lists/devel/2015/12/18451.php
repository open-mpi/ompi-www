<?
$subject_val = "Re: [OMPI devel] v1.10: mpirun --host xxx behaviour";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 22 09:26:22 2015" -->
<!-- isoreceived="20151222142622" -->
<!-- sent="Tue, 22 Dec 2015 06:26:18 -0800" -->
<!-- isosent="20151222142618" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.10: mpirun --host xxx behaviour" -->
<!-- id="1030AAB9-41C7-4626-A33A-617B1BB260D6_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="56790E98.8040407_at_rist.or.jp" -->
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
<strong>Subject:</strong> Re: [OMPI devel] v1.10: mpirun --host xxx behaviour<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-22 09:26:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18452.php">Gilles Gouaillardet: "Re: [OMPI devel] v1.10: mpirun --host xxx behaviour"</a>
<li><strong>Previous message:</strong> <a href="18450.php">Gilles Gouaillardet: "[OMPI devel] v1.10: mpirun --host xxx behaviour"</a>
<li><strong>In reply to:</strong> <a href="18450.php">Gilles Gouaillardet: "[OMPI devel] v1.10: mpirun --host xxx behaviour"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18452.php">Gilles Gouaillardet: "Re: [OMPI devel] v1.10: mpirun --host xxx behaviour"</a>
<li><strong>Reply:</strong> <a href="18452.php">Gilles Gouaillardet: "Re: [OMPI devel] v1.10: mpirun --host xxx behaviour"</a>
<li><strong>Reply:</strong> <a href="18455.php">Gilles Gouaillardet: "Re: [OMPI devel] v1.10: mpirun --host xxx behaviour"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That is the behavior folks asked for, yes. I personally don&#226;&#128;&#153;t care either way, but you&#226;&#128;&#153;ll find that the master and 2.x branch all work that way too.
<br>
<p><p><span class="quotelev1">&gt; On Dec 22, 2015, at 12:49 AM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i (re)discovered an old and odd behaviour in v1.10, which was discussed in <a href="https://github.com/open-mpi/ompi-release/pull/664">https://github.com/open-mpi/ompi-release/pull/664</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; when running
</span><br>
<span class="quotelev1">&gt; mpirun --host xxx ...
</span><br>
<span class="quotelev1">&gt; mpirun v1.10 assumes one slot per host.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; consequently, on my vm with 4 cores
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 ./helloworld_mpi
</span><br>
<span class="quotelev1">&gt; works fine
</span><br>
<span class="quotelev1">&gt; but
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 --host localhost ./helloworld_mpi
</span><br>
<span class="quotelev1">&gt; fails with the following error message
</span><br>
<span class="quotelev1">&gt; &quot;There are not enough slots available ...&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; if i understand correctly, and thought this is a different behaviour from v1.8, this is compliant with the definition of the --host option.
</span><br>
<span class="quotelev1">&gt; it seems you were open to some change.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; did you have time to think about it ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/12/18450.php">http://www.open-mpi.org/community/lists/devel/2015/12/18450.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18452.php">Gilles Gouaillardet: "Re: [OMPI devel] v1.10: mpirun --host xxx behaviour"</a>
<li><strong>Previous message:</strong> <a href="18450.php">Gilles Gouaillardet: "[OMPI devel] v1.10: mpirun --host xxx behaviour"</a>
<li><strong>In reply to:</strong> <a href="18450.php">Gilles Gouaillardet: "[OMPI devel] v1.10: mpirun --host xxx behaviour"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18452.php">Gilles Gouaillardet: "Re: [OMPI devel] v1.10: mpirun --host xxx behaviour"</a>
<li><strong>Reply:</strong> <a href="18452.php">Gilles Gouaillardet: "Re: [OMPI devel] v1.10: mpirun --host xxx behaviour"</a>
<li><strong>Reply:</strong> <a href="18455.php">Gilles Gouaillardet: "Re: [OMPI devel] v1.10: mpirun --host xxx behaviour"</a>
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
