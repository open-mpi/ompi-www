<?
$subject_val = "Re: [OMPI users] Question on MPI_Ssend";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 13 07:16:11 2011" -->
<!-- isoreceived="20110913111611" -->
<!-- sent="Tue, 13 Sep 2011 07:16:03 -0400" -->
<!-- isosent="20110913111603" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question on MPI_Ssend" -->
<!-- id="9A4BFC3F-4B92-40FA-BC9E-713D9A425EC1_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1315904531.86189.YahooMailNeo_at_web29602.mail.ird.yahoo.com" -->
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
<strong>Date:</strong> 2011-09-13 07:16:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17250.php">Brice Goglin: "Re: [OMPI users] #cpus/socket"</a>
<li><strong>Previous message:</strong> <a href="17248.php">Peter Kjellstr&#195;&#182;m: "Re: [OMPI users] #cpus/socket"</a>
<li><strong>In reply to:</strong> <a href="17247.php">devendra rai: "[OMPI users] Question on MPI_Ssend"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17254.php">devendra rai: "Re: [OMPI users] Question on MPI_Ssend"</a>
<li><strong>Reply:</strong> <a href="17254.php">devendra rai: "Re: [OMPI users] Question on MPI_Ssend"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 13, 2011, at 5:02 AM, devendra rai wrote:
<br>
<p><span class="quotelev1">&gt; I am using MPI_Ssend and a corresponding a MPI_Recv. I notice that whenever MPI_Recv starts waiting firs, and then MPI_Ssend is posted, the MPI calls just block. This, of course results in non-coherent application behavior. 
</span><br>
<p>I'm not sure what you mean by &quot;non-coherent application behavior.&quot;
<br>
<p>Note that MPI_SSEND is a synchronous send, which, by definition, means that it won't complete until the matching receive has been posted.  In practice, this usually means that the receiver has started to receive (and sent an ACK back to the sender).  
<br>
<p>If you want non-blocking behavior, you might want to investigate MPI_ISEND and MPI_IRECV.
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
<li><strong>Next message:</strong> <a href="17250.php">Brice Goglin: "Re: [OMPI users] #cpus/socket"</a>
<li><strong>Previous message:</strong> <a href="17248.php">Peter Kjellstr&#195;&#182;m: "Re: [OMPI users] #cpus/socket"</a>
<li><strong>In reply to:</strong> <a href="17247.php">devendra rai: "[OMPI users] Question on MPI_Ssend"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17254.php">devendra rai: "Re: [OMPI users] Question on MPI_Ssend"</a>
<li><strong>Reply:</strong> <a href="17254.php">devendra rai: "Re: [OMPI users] Question on MPI_Ssend"</a>
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
