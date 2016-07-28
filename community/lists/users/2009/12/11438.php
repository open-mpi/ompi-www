<?
$subject_val = "Re: [OMPI users] Mimicking timeout for MPI_Wait";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec  6 08:53:12 2009" -->
<!-- isoreceived="20091206135312" -->
<!-- sent="Sun, 6 Dec 2009 09:52:51 -0400" -->
<!-- isosent="20091206135251" -->
<!-- name="Douglas Guptill" -->
<!-- email="douglas.guptill_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mimicking timeout for MPI_Wait" -->
<!-- id="20091206135251.GA27795_at_scram" -->
<!-- charset="utf-8" -->
<!-- inreplyto="89F8C511E9BE1F41AE2F1BB0424037F201C8C98C01_at_hasmsx504.ger.corp.intel.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Mimicking timeout for MPI_Wait<br>
<strong>From:</strong> Douglas Guptill (<em>douglas.guptill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-06 08:52:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11439.php">Katz, Jacob: "[OMPI users] How to detect a failure to start-up and MPI_Init()?"</a>
<li><strong>Previous message:</strong> <a href="11437.php">Jeff Squyres: "Re: [OMPI users] Tons of warnings in running my first openmpi job"</a>
<li><strong>In reply to:</strong> <a href="11436.php">Katz, Jacob: "Re: [OMPI users] Mimicking timeout for MPI_Wait"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11440.php">Katz, Jacob: "Re: [OMPI users] Mimicking timeout for MPI_Wait"</a>
<li><strong>Reply:</strong> <a href="11440.php">Katz, Jacob: "Re: [OMPI users] Mimicking timeout for MPI_Wait"</a>
<li><strong>Reply:</strong> <a href="11446.php">Eugene Loh: "Re: [OMPI users] Mimicking timeout for MPI_Wait"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sun, Dec 06, 2009 at 02:29:01PM +0200, Katz, Jacob wrote:
<br>
<p><span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; Yes, I meant in the question that I was looking for something creative, both fast responding and not using 100% CPU all the time.
</span><br>
<span class="quotelev1">&gt; I guess I&#226;&#128;&#153;m not the first one to face this question. Have anyone done anything &#226;&#128;&#156;better&#226;&#128;&#157; than the simple solution?
</span><br>
<p>My MPI application is a two-process thing, in which data is thrown
<br>
back and forth.  For the most part, one process is calculating, and
<br>
the other is waiting.
<br>
<p>I got tired of seeing both cpus at 100% load, and based on suggestions
<br>
from Jeff Squyres and Eugene Loh, wrote MPI_Recv.c and MPI_Send.c.  I
<br>
load these with my application, and bingo!  Only one cpu busy at any
<br>
given time.
<br>
<p>They use a graduated sleep; the first sleep is short, the second is
<br>
twice as long, and so on, up to a maximum sleep time.
<br>
<p>I sent the code along with my last message on the subject (December
<br>
2008, or later) so it should be in the archives.  Failing that, I
<br>
could post it again, if anyone wants it.
<br>
<p>Douglas.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11439.php">Katz, Jacob: "[OMPI users] How to detect a failure to start-up and MPI_Init()?"</a>
<li><strong>Previous message:</strong> <a href="11437.php">Jeff Squyres: "Re: [OMPI users] Tons of warnings in running my first openmpi job"</a>
<li><strong>In reply to:</strong> <a href="11436.php">Katz, Jacob: "Re: [OMPI users] Mimicking timeout for MPI_Wait"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11440.php">Katz, Jacob: "Re: [OMPI users] Mimicking timeout for MPI_Wait"</a>
<li><strong>Reply:</strong> <a href="11440.php">Katz, Jacob: "Re: [OMPI users] Mimicking timeout for MPI_Wait"</a>
<li><strong>Reply:</strong> <a href="11446.php">Eugene Loh: "Re: [OMPI users] Mimicking timeout for MPI_Wait"</a>
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
