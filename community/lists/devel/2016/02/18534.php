<?
$subject_val = "Re: [OMPI devel] malloc(0) warnings in post/wait and start/complete calls with GROUP_EMPTY";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  2 03:07:24 2016" -->
<!-- isoreceived="20160202080724" -->
<!-- sent="Tue, 2 Feb 2016 17:07:20 +0900" -->
<!-- isosent="20160202080720" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] malloc(0) warnings in post/wait and start/complete calls with GROUP_EMPTY" -->
<!-- id="56B063B8.4010108_at_rist.or.jp" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAEcYPwCXr-AbL9nZdpcH56W2Y5hYUAv70SDTdUufQ2tPmuMCxA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] malloc(0) warnings in post/wait and start/complete calls with GROUP_EMPTY<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-02 03:07:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18535.php">Gilles Gouaillardet: "[OMPI devel] Fwd: [OMPI users] shared memory under fortran, bug?"</a>
<li><strong>Previous message:</strong> <a href="18533.php">Gilles Gouaillardet: "[OMPI devel] Fwd: Re: [OMPI users] New libmpi.so dependency on libibverbs.so?"</a>
<li><strong>In reply to:</strong> <a href="18532.php">Lisandro Dalcin: "[OMPI devel] malloc(0) warnings in post/wait and start/complete calls with GROUP_EMPTY"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18571.php">Lisandro Dalcin: "Re: [OMPI devel] malloc(0) warnings in post/wait and start/complete calls with GROUP_EMPTY"</a>
<li><strong>Reply:</strong> <a href="18571.php">Lisandro Dalcin: "Re: [OMPI devel] malloc(0) warnings in post/wait and start/complete calls with GROUP_EMPTY"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Lisandro,
<br>
<p>here is attached a patch (master does things differently, so this has to 
<br>
be a one-off patch anyway)
<br>
could you please give it a try ?
<br>
<p>btw, how do you get these warnings automatically ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 2/2/2016 12:02 AM, Lisandro Dalcin wrote:
<br>
<span class="quotelev1">&gt; You might argue that the attached tests are naive, but still... (Open
</span><br>
<span class="quotelev1">&gt; MPI v1.10.2)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpicc win_post_wait.c
</span><br>
<span class="quotelev1">&gt; $ mpiexec -n 1 ./a.out
</span><br>
<span class="quotelev1">&gt; malloc debug: Request for 0 bytes (osc_pt2pt_active_target.c, 76)
</span><br>
<span class="quotelev1">&gt; malloc debug: Request for 0 bytes (osc_pt2pt_active_target.c, 78)
</span><br>
<span class="quotelev1">&gt; $ mpiexec -n 2 ./a.out
</span><br>
<span class="quotelev1">&gt; malloc debug: Request for 0 bytes (osc_pt2pt_active_target.c, 76)
</span><br>
<span class="quotelev1">&gt; malloc debug: Request for 0 bytes (osc_pt2pt_active_target.c, 78)
</span><br>
<span class="quotelev1">&gt; malloc debug: Request for 0 bytes (osc_pt2pt_active_target.c, 76)
</span><br>
<span class="quotelev1">&gt; malloc debug: Request for 0 bytes (osc_pt2pt_active_target.c, 78)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpicc win_start_complete.c
</span><br>
<span class="quotelev1">&gt; $ mpiexec -n 1 ./a.out
</span><br>
<span class="quotelev1">&gt; malloc debug: Request for 0 bytes (osc_pt2pt_active_target.c, 76)
</span><br>
<span class="quotelev1">&gt; malloc debug: Request for 0 bytes (osc_pt2pt_active_target.c, 78)
</span><br>
<span class="quotelev1">&gt; malloc debug: Request for 0 bytes (osc_pt2pt_active_target.c, 76)
</span><br>
<span class="quotelev1">&gt; malloc debug: Request for 0 bytes (osc_pt2pt_active_target.c, 78)
</span><br>
<span class="quotelev1">&gt; $ mpiexec -n 2 ./a.out
</span><br>
<span class="quotelev1">&gt; malloc debug: Request for 0 bytes (osc_pt2pt_active_target.c, 76)
</span><br>
<span class="quotelev1">&gt; malloc debug: Request for 0 bytes (osc_pt2pt_active_target.c, 78)
</span><br>
<span class="quotelev1">&gt; malloc debug: Request for 0 bytes (osc_pt2pt_active_target.c, 76)
</span><br>
<span class="quotelev1">&gt; malloc debug: Request for 0 bytes (osc_pt2pt_active_target.c, 78)
</span><br>
<span class="quotelev1">&gt; malloc debug: Request for 0 bytes (osc_pt2pt_active_target.c, 76)
</span><br>
<span class="quotelev1">&gt; malloc debug: Request for 0 bytes (osc_pt2pt_active_target.c, 78)
</span><br>
<span class="quotelev1">&gt; malloc debug: Request for 0 bytes (osc_pt2pt_active_target.c, 76)
</span><br>
<span class="quotelev1">&gt; malloc debug: Request for 0 bytes (osc_pt2pt_active_target.c, 78)
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
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Searchable archives: <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18533.php">http://www.open-mpi.org/community/lists/devel/2016/02/18533.php</a>
</span><br>
<p><p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18534/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18534/osc_group_empty.patch">osc_group_empty.patch</a>
</ul>
<!-- attachment="osc_group_empty.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18535.php">Gilles Gouaillardet: "[OMPI devel] Fwd: [OMPI users] shared memory under fortran, bug?"</a>
<li><strong>Previous message:</strong> <a href="18533.php">Gilles Gouaillardet: "[OMPI devel] Fwd: Re: [OMPI users] New libmpi.so dependency on libibverbs.so?"</a>
<li><strong>In reply to:</strong> <a href="18532.php">Lisandro Dalcin: "[OMPI devel] malloc(0) warnings in post/wait and start/complete calls with GROUP_EMPTY"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18571.php">Lisandro Dalcin: "Re: [OMPI devel] malloc(0) warnings in post/wait and start/complete calls with GROUP_EMPTY"</a>
<li><strong>Reply:</strong> <a href="18571.php">Lisandro Dalcin: "Re: [OMPI devel] malloc(0) warnings in post/wait and start/complete calls with GROUP_EMPTY"</a>
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
