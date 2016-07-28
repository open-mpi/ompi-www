<?
$subject_val = "Re: [OMPI users] Question about Asynchronous collectives";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 23 11:04:05 2010" -->
<!-- isoreceived="20100923150405" -->
<!-- sent="Thu, 23 Sep 2010 11:03:55 -0400" -->
<!-- isosent="20100923150355" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about Asynchronous collectives" -->
<!-- id="8F752D19-28B3-4AA5-A19A-713056C82823_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="OFE58838BB.88550785-ON852577A7.0050BAEA-852577A7.0051F0E2_at_us.ibm.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question about Asynchronous collectives<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-23 11:03:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14296.php">pooja varshneya: "Re: [OMPI users] &quot;self scheduled&quot; work &amp; mpi receive???"</a>
<li><strong>Previous message:</strong> <a href="14294.php">Richard Treumann: "Re: [OMPI users] Question about Asynchronous collectives"</a>
<li><strong>In reply to:</strong> <a href="14294.php">Richard Treumann: "Re: [OMPI users] Question about Asynchronous collectives"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14297.php">Gabriele Fatigati: "Re: [OMPI users] Question about Asynchronous collectives"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 23, 2010, at 10:54 AM, Richard Treumann wrote:
<br>
<p><span class="quotelev1">&gt; I do not agree with Jeff on this below.   The Proc 1 case where the MPI_Waits are reversed simply requires the MPI implementation to make progress on both MPI_Ibcast operations in the first MPI_Wait. The second MPI_Wait call will simply find that the first MPI_Ibcast is already done.  The second MPI_Wait call becomes, effectively, a query function. 
</span><br>
<p>Er -- yes, you're right.  I was incorrectly thinking about overtaking issues -- but they don't apply here.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14296.php">pooja varshneya: "Re: [OMPI users] &quot;self scheduled&quot; work &amp; mpi receive???"</a>
<li><strong>Previous message:</strong> <a href="14294.php">Richard Treumann: "Re: [OMPI users] Question about Asynchronous collectives"</a>
<li><strong>In reply to:</strong> <a href="14294.php">Richard Treumann: "Re: [OMPI users] Question about Asynchronous collectives"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14297.php">Gabriele Fatigati: "Re: [OMPI users] Question about Asynchronous collectives"</a>
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
