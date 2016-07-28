<?
$subject_val = "Re: [OMPI users] Receiving MPI messages of unknown size";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  4 03:24:50 2009" -->
<!-- isoreceived="20090604072450" -->
<!-- sent="Thu, 4 Jun 2009 17:24:46 +1000" -->
<!-- isosent="20090604072446" -->
<!-- name="Lars Andersson" -->
<!-- email="larsand_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Receiving MPI messages of unknown size" -->
<!-- id="8acca4520906040024l50e9639x14951b67b175973c_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="8acca4520906040015k19bbe6achce68bfe3b3bca49e_at_mail.gmail.com" -->
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
<strong>From:</strong> Lars Andersson (<em>larsand_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-04 03:24:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9536.php">shan axida: "Re: [OMPI users] How to use Multiple links withOpenMPI??????????????????"</a>
<li><strong>Previous message:</strong> <a href="9534.php">Tee Wen Kai: "Re: [OMPI users] Exit Program Without Calling MPI_Finalize For Special Case"</a>
<li><strong>Maybe in reply to:</strong> <a href="9529.php">Lars Andersson: "[OMPI users] Receiving MPI messages of unknown size"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9542.php">Neil Ludban: "Re: [OMPI users] Receiving MPI messages of unknown size"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; On Thu, 2009-06-04 at 14:54 +1000, Lars Andersson wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Gus,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for the suggestion. I've been thinking along those lines, but
</span><br>
<span class="quotelev2">&gt;&gt; it seems to have drawbacks. Consider the following MPI conversation:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Time NODE 1               NODE 2
</span><br>
<span class="quotelev2">&gt;&gt; 0 local work                 local work
</span><br>
<span class="quotelev2">&gt;&gt; 1 post n-b recv            local work
</span><br>
<span class="quotelev2">&gt;&gt; 2 local work                 post n-b send
</span><br>
<span class="quotelev2">&gt;&gt; 3 complete recv in 1   local work
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Its been awhile since i did mpi programming but...
</span><br>
<span class="quotelev1">&gt; why not just post a n-b recv for the header too?
</span><br>
<span class="quotelev1">&gt; just tag it correctly.
</span><br>
<p>I guess that would be a partial cure, but not optimal. The problem is
<br>
that I can't allocate a buffer of appropriate size and post the main
<br>
data transfer (MPI_Irecv) call until I have received the size from the
<br>
header message. So, after posting the recv for the header on NODE 1
<br>
and getting on with local work, I would have to call MPI_Test() at
<br>
regular intervals to check if the header has arrived, and then post a
<br>
recv for the main transfer.
<br>
<p>I guess that would work, but if there's a nicer solution, I'd like to find out.
<br>
<p>/Lars
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9536.php">shan axida: "Re: [OMPI users] How to use Multiple links withOpenMPI??????????????????"</a>
<li><strong>Previous message:</strong> <a href="9534.php">Tee Wen Kai: "Re: [OMPI users] Exit Program Without Calling MPI_Finalize For Special Case"</a>
<li><strong>Maybe in reply to:</strong> <a href="9529.php">Lars Andersson: "[OMPI users] Receiving MPI messages of unknown size"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9542.php">Neil Ludban: "Re: [OMPI users] Receiving MPI messages of unknown size"</a>
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
