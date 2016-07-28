<?
$subject_val = "[OMPI users] bad XRC API";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug  5 17:31:27 2015" -->
<!-- isoreceived="20150805213127" -->
<!-- sent="Wed, 5 Aug 2015 16:31:25 -0500" -->
<!-- isosent="20150805213125" -->
<!-- name="Andy Wettstein" -->
<!-- email="wettstein_at_[hidden]" -->
<!-- subject="[OMPI users] bad XRC API" -->
<!-- id="20150805213125.GQ25214_at_wettstein.rcc.uchicago.edu" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] bad XRC API<br>
<strong>From:</strong> Andy Wettstein (<em>wettstein_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-05 17:31:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27401.php">Howard Pritchard: "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
<li><strong>Previous message:</strong> <a href="27399.php">Nate Chambers: "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27404.php">Ralph Castain: "Re: [OMPI users] bad XRC API"</a>
<li><strong>Reply:</strong> <a href="27404.php">Ralph Castain: "Re: [OMPI users] bad XRC API"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I updated our OpenMPI install from 1.8.3 to 1.8.8 today and I'm getting
<br>
this error:
<br>
<p>XRC error: bad XRC API (require XRC from OFED pre 3.12).
<br>
<p>This happens even using the exact same node to compile and run an
<br>
example program. I saw a thread from a few weeks ago discussing this
<br>
issue as well. I changed the dlsym if statement in btl_openib_xrc.c to
<br>
this:
<br>
<p>if (NULL != dlsym(lib, &quot;ibv_create_xrc_recv_qp@@IBVERBS_1.1&quot;)) {
<br>
<p>This seems to make the error message go away, so there must be something
<br>
about that check that doesn't work right without the version in it.
<br>
<p>This is on a Scientific Linux 6.6 machine with MLNX_OFED 1.5.3-4.0.42. 
<br>
<p>Andy
<br>
<p><pre>
-- 
andy wettstein
hpc system administrator
research computing center
university of chicago
773.702.1104
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27401.php">Howard Pritchard: "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
<li><strong>Previous message:</strong> <a href="27399.php">Nate Chambers: "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27404.php">Ralph Castain: "Re: [OMPI users] bad XRC API"</a>
<li><strong>Reply:</strong> <a href="27404.php">Ralph Castain: "Re: [OMPI users] bad XRC API"</a>
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
