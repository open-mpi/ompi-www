<?
$subject_val = "Re: [OMPI users] Questions about MPI_Isend";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 11 13:57:21 2010" -->
<!-- isoreceived="20100511175721" -->
<!-- sent="Tue, 11 May 2010 13:57:15 -0400" -->
<!-- isosent="20100511175715" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Questions about MPI_Isend" -->
<!-- id="FFF858C0-82E8-4B66-85E3-B5C6D55D3AF0_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4BE9364D.9080504_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Questions about MPI_Isend<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-11 13:57:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13018.php">Jeff Squyres: "Re: [OMPI users] Questions about MPI_Isend"</a>
<li><strong>Previous message:</strong> <a href="13016.php">Prentice Bisbal: "Re: [OMPI users] PGI problems"</a>
<li><strong>In reply to:</strong> <a href="13012.php">Terry Dontje: "Re: [OMPI users] Questions about MPI_Isend"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13013.php">Gabriele Fatigati: "Re: [OMPI users] Questions about MPI_Isend"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 11, 2010, at 6:49 AM, Terry Dontje wrote:
<br>
<p><span class="quotelev1">&gt; Correct the completion of an MPI_Isend request only say's the message buffer is no longer needed.  You could use synchronous mode sends MPI_Issend which requests will complete when the message is being processed at the destination (that is matched with a received).
</span><br>
<p>To be totally clear -- the completion of a synchronous send means that the other side has matched the send.  It does not mean that the receiver has completely received the message yet.  It's a fine distinction, but it can be important sometimes...
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
<li><strong>Next message:</strong> <a href="13018.php">Jeff Squyres: "Re: [OMPI users] Questions about MPI_Isend"</a>
<li><strong>Previous message:</strong> <a href="13016.php">Prentice Bisbal: "Re: [OMPI users] PGI problems"</a>
<li><strong>In reply to:</strong> <a href="13012.php">Terry Dontje: "Re: [OMPI users] Questions about MPI_Isend"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13013.php">Gabriele Fatigati: "Re: [OMPI users] Questions about MPI_Isend"</a>
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
