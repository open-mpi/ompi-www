<?
$subject_val = "Re: [OMPI devel] Heads up on new feature to 1.3.4";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 17 11:12:28 2009" -->
<!-- isoreceived="20090817151228" -->
<!-- sent="17 Aug 2009 16:12:24 +0100" -->
<!-- isosent="20090817151224" -->
<!-- name="N.M. Maclaren" -->
<!-- email="nmm1_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Heads up on new feature to 1.3.4" -->
<!-- id="Prayer.1.3.1.0908171612240.19783_at_hermes-2.csi.cam.ac.uk" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="FEFD8CC7-85AD-4477-9B90-2AEAF0BFB29C_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Heads up on new feature to 1.3.4<br>
<strong>From:</strong> N.M. Maclaren (<em>nmm1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-17 11:12:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6652.php">Kenneth Lloyd: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Previous message:</strong> <a href="6650.php">Eugene Loh: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>In reply to:</strong> <a href="6643.php">Ralph Castain: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6653.php">Ralph Castain: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Reply:</strong> <a href="6653.php">Ralph Castain: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 17 2009, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt;The problem is that the two mpiruns don't know about each other, and  
</span><br>
<span class="quotelev1">&gt;therefore the second mpirun doesn't know that another mpirun has  
</span><br>
<span class="quotelev1">&gt;already used socket 0.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;We hope to change that at some point in the future.
</span><br>
<p>It won't help.  The problem is less likely to be that two jobs are running
<br>
OpenMPI programs (that have been recently linked!), but that the other tasks
<br>
are not OpenMPI at all.  I have mentioned daemons, kernel threads and so on,
<br>
but think of shared-memory parallel programs (OpenMP etc.) and so on; a LOT
<br>
of applications nowadays include some sort of threading.
<br>
<p>For the ordinary multi-user system, you don't want any form of binding. The 
<br>
scheduler is ricketty enough as it is, without confusing it further. That 
<br>
may change as the consequences of serious levels of multiple cores force 
<br>
that area to be improved, but don't hold your breath. And I haven't a clue 
<br>
which of the many directions scheduler design will go!
<br>
<p>I agree that having an option, and having it easy to experiment with, is the
<br>
right way to go.  What the default should be is very much less clear.
<br>
<p>Regards,
<br>
Nick Maclaren.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6652.php">Kenneth Lloyd: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Previous message:</strong> <a href="6650.php">Eugene Loh: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>In reply to:</strong> <a href="6643.php">Ralph Castain: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6653.php">Ralph Castain: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Reply:</strong> <a href="6653.php">Ralph Castain: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
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
