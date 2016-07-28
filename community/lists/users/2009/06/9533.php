<?
$subject_val = "Re: [OMPI users] Receiving MPI messages of unknown size";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  4 01:54:44 2009" -->
<!-- isoreceived="20090604055444" -->
<!-- sent="Thu, 04 Jun 2009 07:54:36 +0200" -->
<!-- isosent="20090604055436" -->
<!-- name="&#197;ke Sandgren" -->
<!-- email="ake.sandgren_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Receiving MPI messages of unknown size" -->
<!-- id="1244094876.28197.89.camel_at_skalman.hpc2n.umu.se" -->
<!-- inreplyto="8acca4520906032154if57afc4j7f3bc78abbb9f745_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Receiving MPI messages of unknown size<br>
<strong>From:</strong> &#197;ke Sandgren (<em>ake.sandgren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-04 01:54:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9534.php">Tee Wen Kai: "Re: [OMPI users] Exit Program Without Calling MPI_Finalize For Special Case"</a>
<li><strong>Previous message:</strong> <a href="9532.php">Lars Andersson: "Re: [OMPI users] Receiving MPI messages of unknown size"</a>
<li><strong>In reply to:</strong> <a href="9531.php">Lars Andersson: "Re: [OMPI users] Receiving MPI messages of unknown size"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9532.php">Lars Andersson: "Re: [OMPI users] Receiving MPI messages of unknown size"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 2009-06-04 at 14:54 +1000, Lars Andersson wrote:
<br>
<span class="quotelev1">&gt; Hi Gus,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for the suggestion. I've been thinking along those lines, but
</span><br>
<span class="quotelev1">&gt; it seems to have drawbacks. Consider the following MPI conversation:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Time            NODE 1                      NODE 2
</span><br>
<span class="quotelev1">&gt; 0                local work                   local work
</span><br>
<span class="quotelev1">&gt; 1                post n-b recv              local work
</span><br>
<span class="quotelev1">&gt; 2                local work                   post n-b send
</span><br>
<span class="quotelev1">&gt; 3                complete recv in 1     local work
</span><br>
<p>Its been awhile since i did mpi programming but...
<br>
why not just post a n-b recv for the header too?
<br>
just tag it correctly.
<br>
<p><pre>
-- 
Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
Internet: ake_at_[hidden]   Phone: +46 90 7866134 Fax: +46 90 7866126
Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9534.php">Tee Wen Kai: "Re: [OMPI users] Exit Program Without Calling MPI_Finalize For Special Case"</a>
<li><strong>Previous message:</strong> <a href="9532.php">Lars Andersson: "Re: [OMPI users] Receiving MPI messages of unknown size"</a>
<li><strong>In reply to:</strong> <a href="9531.php">Lars Andersson: "Re: [OMPI users] Receiving MPI messages of unknown size"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9532.php">Lars Andersson: "Re: [OMPI users] Receiving MPI messages of unknown size"</a>
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
