<?
$subject_val = "Re: [OMPI users] bad XRC API";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug  5 19:43:26 2015" -->
<!-- isoreceived="20150805234326" -->
<!-- sent="Wed, 5 Aug 2015 16:43:24 -0700" -->
<!-- isosent="20150805234324" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] bad XRC API" -->
<!-- id="CAMD57ocW+6trbO_JPsLhFNKYLYnFnNF9GFH71u+EGo0Hp=EjbA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20150805213125.GQ25214_at_wettstein.rcc.uchicago.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] bad XRC API<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-05 19:43:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27405.php">Howard Pritchard: "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
<li><strong>Previous message:</strong> <a href="27403.php">Ralph Castain: "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
<li><strong>In reply to:</strong> <a href="27400.php">Andy Wettstein: "[OMPI users] bad XRC API"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27407.php">Gilles Gouaillardet: "Re: [OMPI users] bad XRC API"</a>
<li><strong>Reply:</strong> <a href="27407.php">Gilles Gouaillardet: "Re: [OMPI users] bad XRC API"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yeah, I recall your earlier email on the subject. Sadly, I need someone
<br>
from Mellanox to look at this as I don't have access to such equipment.
<br>
<p>Josh? Mike? Gilles? Can someone please look at this?
<br>
<p><p>On Wed, Aug 5, 2015 at 2:31 PM, Andy Wettstein &lt;wettstein_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I updated our OpenMPI install from 1.8.3 to 1.8.8 today and I'm getting
</span><br>
<span class="quotelev1">&gt; this error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; XRC error: bad XRC API (require XRC from OFED pre 3.12).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This happens even using the exact same node to compile and run an
</span><br>
<span class="quotelev1">&gt; example program. I saw a thread from a few weeks ago discussing this
</span><br>
<span class="quotelev1">&gt; issue as well. I changed the dlsym if statement in btl_openib_xrc.c to
</span><br>
<span class="quotelev1">&gt; this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if (NULL != dlsym(lib, &quot;ibv_create_xrc_recv_qp@@IBVERBS_1.1&quot;)) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This seems to make the error message go away, so there must be something
</span><br>
<span class="quotelev1">&gt; about that check that doesn't work right without the version in it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is on a Scientific Linux 6.6 machine with MLNX_OFED 1.5.3-4.0.42.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Andy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; andy wettstein
</span><br>
<span class="quotelev1">&gt; hpc system administrator
</span><br>
<span class="quotelev1">&gt; research computing center
</span><br>
<span class="quotelev1">&gt; university of chicago
</span><br>
<span class="quotelev1">&gt; 773.702.1104
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/08/27400.php">http://www.open-mpi.org/community/lists/users/2015/08/27400.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27404/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27405.php">Howard Pritchard: "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
<li><strong>Previous message:</strong> <a href="27403.php">Ralph Castain: "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
<li><strong>In reply to:</strong> <a href="27400.php">Andy Wettstein: "[OMPI users] bad XRC API"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27407.php">Gilles Gouaillardet: "Re: [OMPI users] bad XRC API"</a>
<li><strong>Reply:</strong> <a href="27407.php">Gilles Gouaillardet: "Re: [OMPI users] bad XRC API"</a>
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
