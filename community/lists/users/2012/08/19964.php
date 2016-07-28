<?
$subject_val = "Re: [OMPI users] MPI_Irecv: Confusion with &lt;&lt;int count&gt;&gt; inputy parameter";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 20 10:32:35 2012" -->
<!-- isoreceived="20120820143235" -->
<!-- sent="Mon, 20 Aug 2012 10:32:30 -0400" -->
<!-- isosent="20120820143230" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Irecv: Confusion with &amp;lt;&amp;lt;int count&amp;gt;&amp;gt; inputy parameter" -->
<!-- id="DD8BA821-DE1C-47F8-8A73-DF3937968C9C_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1345456263.30925.YahooMailNeo_at_web29606.mail.ird.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Irecv: Confusion with &lt;&lt;int count&gt;&gt; inputy parameter<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-20 10:32:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19965.php">David Warren: "Re: [OMPI users] MPI/FORTRAN on a cluster system"</a>
<li><strong>Previous message:</strong> <a href="19963.php">Jeff Squyres: "Re: [OMPI users] MPI/FORTRAN on a cluster system"</a>
<li><strong>In reply to:</strong> <a href="19959.php">devendra rai: "[OMPI users] MPI_Irecv: Confusion with &lt;&lt;int count&gt;&gt; inputy parameter"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19969.php">Iliev, Hristo: "Re: [OMPI users] MPI_Irecv: Confusion with &lt;&lt;int count&gt;&gt; inputy	parameter"</a>
<li><strong>Reply:</strong> <a href="19969.php">Iliev, Hristo: "Re: [OMPI users] MPI_Irecv: Confusion with &lt;&lt;int count&gt;&gt; inputy	parameter"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 20, 2012, at 5:51 AM, devendra rai wrote:
<br>
<p><span class="quotelev1">&gt; Is it the number of elements that have been received *thus far* in the buffer?
</span><br>
<p>No.
<br>
<p><span class="quotelev1">&gt; Or is it the number of elements that are expected to be received, and hence MPI_Test will tell me that the receive is not complete untill &quot;count&quot; number of elements have not been received?
</span><br>
<p>Yes.
<br>
<p><span class="quotelev1">&gt; Here's the reason why I have a problem (and I think I may be completely stupid here, I'd appreciate your patience):
</span><br>
[snip]
<br>
<span class="quotelev1">&gt; Does anyone see what could be going wrong?
</span><br>
<p>Double check that the (sender_rank, tag, communicator) tuple that you issued in the MPI_Irecv matches the (rank, tag, communicator) tuple from the sender (tag and communicator are arguments on the sending side, and rank is the rank of the sender in that communicator).
<br>
<p>When receives block like this without completing like this, it usually means a mismatch between the tuples.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19965.php">David Warren: "Re: [OMPI users] MPI/FORTRAN on a cluster system"</a>
<li><strong>Previous message:</strong> <a href="19963.php">Jeff Squyres: "Re: [OMPI users] MPI/FORTRAN on a cluster system"</a>
<li><strong>In reply to:</strong> <a href="19959.php">devendra rai: "[OMPI users] MPI_Irecv: Confusion with &lt;&lt;int count&gt;&gt; inputy parameter"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19969.php">Iliev, Hristo: "Re: [OMPI users] MPI_Irecv: Confusion with &lt;&lt;int count&gt;&gt; inputy	parameter"</a>
<li><strong>Reply:</strong> <a href="19969.php">Iliev, Hristo: "Re: [OMPI users] MPI_Irecv: Confusion with &lt;&lt;int count&gt;&gt; inputy	parameter"</a>
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
