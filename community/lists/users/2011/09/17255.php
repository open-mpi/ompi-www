<?
$subject_val = "Re: [OMPI users] Question on MPI_Ssend";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 13 10:13:31 2011" -->
<!-- isoreceived="20110913141331" -->
<!-- sent="Tue, 13 Sep 2011 10:13:22 -0400" -->
<!-- isosent="20110913141322" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question on MPI_Ssend" -->
<!-- id="68D89FEB-DDCD-4C4F-A469-332A4036DB47_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1315917665.27418.YahooMailNeo_at_web29603.mail.ird.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question on MPI_Ssend<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-13 10:13:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17256.php">Rob Latham: "Re: [OMPI users] IO issue with OpenMPI 1.4.1 and earlier versions"</a>
<li><strong>Previous message:</strong> <a href="17254.php">devendra rai: "Re: [OMPI users] Question on MPI_Ssend"</a>
<li><strong>In reply to:</strong> <a href="17254.php">devendra rai: "Re: [OMPI users] Question on MPI_Ssend"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17280.php">devendra rai: "Re: [OMPI users] Question on MPI_Ssend"</a>
<li><strong>Reply:</strong> <a href="17280.php">devendra rai: "Re: [OMPI users] Question on MPI_Ssend"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 13, 2011, at 8:41 AM, devendra rai wrote:
<br>
<p><span class="quotelev1">&gt; Also, I read the definition of MPI_Ssend(...) that you sent, but then it does not explain why both MPI_Ssend(...) and MPI_Recv(...) are blocked seemingly forever. 
</span><br>
<p>Oh, they're blocked *forever*!  Sorry; I didn't get that from your prior description -- I thought you just wanted non-blocking instead of blocking.
<br>
<p><span class="quotelev1">&gt; I notice that such a block happens when MPI_Recv(...) is posted before MPI_Ssend(...).
</span><br>
<p>It doesn't matter if the receive is posted before the send or the other way around.
<br>
<p>When blocking sends/receives block forever, it usually means that there's a mismatch in the communicator, tag, or src/dest arguments between the two.
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
<li><strong>Next message:</strong> <a href="17256.php">Rob Latham: "Re: [OMPI users] IO issue with OpenMPI 1.4.1 and earlier versions"</a>
<li><strong>Previous message:</strong> <a href="17254.php">devendra rai: "Re: [OMPI users] Question on MPI_Ssend"</a>
<li><strong>In reply to:</strong> <a href="17254.php">devendra rai: "Re: [OMPI users] Question on MPI_Ssend"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17280.php">devendra rai: "Re: [OMPI users] Question on MPI_Ssend"</a>
<li><strong>Reply:</strong> <a href="17280.php">devendra rai: "Re: [OMPI users] Question on MPI_Ssend"</a>
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
