<?
$subject_val = "Re: [OMPI users] bad XRC API";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  7 01:08:19 2015" -->
<!-- isoreceived="20150807050819" -->
<!-- sent="Fri, 7 Aug 2015 14:08:13 +0900" -->
<!-- isosent="20150807050813" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] bad XRC API" -->
<!-- id="55C43D3D.7080004_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAMD57ocW+6trbO_JPsLhFNKYLYnFnNF9GFH71u+EGo0Hp=EjbA_at_mail.gmail.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-07 01:08:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27408.php">James Spencer: "[OMPI users] OpenMPI Fortran with Intel 15 and OpenMP"</a>
<li><strong>Previous message:</strong> <a href="27406.php">Nate Chambers: "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
<li><strong>In reply to:</strong> <a href="27404.php">Ralph Castain: "Re: [OMPI users] bad XRC API"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>i made PR 782 for this
<br>
<a href="https://github.com/open-mpi/ompi/pull/782">https://github.com/open-mpi/ompi/pull/782</a>
<br>
and i am still double checking it.
<br>
<p>i am still wondering whether we should add an MCA parameter for the api 
<br>
check
<br>
(no test, test and fail, test and warn) ...
<br>
or i am even wondering whether we should simply remove this test, since 
<br>
i am not 100% convinced
<br>
the test is bulletproof :
<br>
if ofed version is different between compilation and runtime, let 
<br>
openmpi crash
<br>
since this is a user-side problem.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 8/6/2015 8:43 AM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Yeah, I recall your earlier email on the subject. Sadly, I need 
</span><br>
<span class="quotelev1">&gt; someone from Mellanox to look at this as I don't have access to such 
</span><br>
<span class="quotelev1">&gt; equipment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Josh? Mike? Gilles? Can someone please look at this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Aug 5, 2015 at 2:31 PM, Andy Wettstein &lt;wettstein_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:wettstein_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I updated our OpenMPI install from 1.8.3 to 1.8.8 today and I'm
</span><br>
<span class="quotelev1">&gt;     getting
</span><br>
<span class="quotelev1">&gt;     this error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     XRC error: bad XRC API (require XRC from OFED pre 3.12).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     This happens even using the exact same node to compile and run an
</span><br>
<span class="quotelev1">&gt;     example program. I saw a thread from a few weeks ago discussing this
</span><br>
<span class="quotelev1">&gt;     issue as well. I changed the dlsym if statement in btl_openib_xrc.c to
</span><br>
<span class="quotelev1">&gt;     this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     if (NULL != dlsym(lib, &quot;ibv_create_xrc_recv_qp@@IBVERBS_1.1&quot;)) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     This seems to make the error message go away, so there must be
</span><br>
<span class="quotelev1">&gt;     something
</span><br>
<span class="quotelev1">&gt;     about that check that doesn't work right without the version in it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     This is on a Scientific Linux 6.6 machine with MLNX_OFED 1.5.3-4.0.42.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Andy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     --
</span><br>
<span class="quotelev1">&gt;     andy wettstein
</span><br>
<span class="quotelev1">&gt;     hpc system administrator
</span><br>
<span class="quotelev1">&gt;     research computing center
</span><br>
<span class="quotelev1">&gt;     university of chicago
</span><br>
<span class="quotelev1">&gt;     773.702.1104 &lt;tel:773.702.1104&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;     Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/users/2015/08/27400.php">http://www.open-mpi.org/community/lists/users/2015/08/27400.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/08/27404.php">http://www.open-mpi.org/community/lists/users/2015/08/27404.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27407/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27408.php">James Spencer: "[OMPI users] OpenMPI Fortran with Intel 15 and OpenMP"</a>
<li><strong>Previous message:</strong> <a href="27406.php">Nate Chambers: "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
<li><strong>In reply to:</strong> <a href="27404.php">Ralph Castain: "Re: [OMPI users] bad XRC API"</a>
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
