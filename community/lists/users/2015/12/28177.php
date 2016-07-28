<?
$subject_val = "Re: [OMPI users] Questions about non-blocking collective calls...";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 17 14:16:54 2015" -->
<!-- isoreceived="20151217191654" -->
<!-- sent="Thu, 17 Dec 2015 19:16:49 +0000" -->
<!-- isosent="20151217191649" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Questions about non-blocking collective calls..." -->
<!-- id="1D84740D-E1B0-42A7-9D1C-00C69D7333D5_at_cisco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="56730167.6000803_at_giref.ulaval.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] Questions about non-blocking collective calls...<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-17 14:16:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28178.php">Bathke, Chuck: "[OMPI users] Need help resolving &quot;error obtaining device context for mlx4_0&quot;"</a>
<li><strong>Previous message:</strong> <a href="28176.php">Eric Chamberland: "Re: [OMPI users] Questions about non-blocking collective calls..."</a>
<li><strong>In reply to:</strong> <a href="28176.php">Eric Chamberland: "Re: [OMPI users] Questions about non-blocking collective calls..."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 17, 2015, at 1:39 PM, Eric Chamberland &lt;Eric.Chamberland_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just to be clear: we *always* call MPI_Wait.  Now the question was about *when* to do it.
</span><br>
<p>Ok.  Remember that the various flavors of MPI_Test are acceptable, too.  And it's ok to call MPI_Test*/MPI_Wait* with MPI_REQUEST_NULL (i.e., if an earlier Test/Wait completed a request and set it to MPI_REQUEST_NULL).
<br>
<p><span class="quotelev1">&gt; We did 2 different things:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #1- ASAP after the MPI_Isend
</span><br>
<span class="quotelev1">&gt; #2- As late as possible, in a class destructor for example, which can occur a while after other MPI_Irecv and MPI_Isend pairs have been issued.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is it true to tell that if there were message progression, the receiving side can complete the MPI_Wait linked to the MPI_Irecv call, event if the sending side have *not yet* called the MPI_Wait linked to the MPI_send ?
</span><br>
<p>That is certainly possible, yes.  It depends on a bunch of factors, such as the underlying networking hardware, the length of the message, etc.
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
<li><strong>Next message:</strong> <a href="28178.php">Bathke, Chuck: "[OMPI users] Need help resolving &quot;error obtaining device context for mlx4_0&quot;"</a>
<li><strong>Previous message:</strong> <a href="28176.php">Eric Chamberland: "Re: [OMPI users] Questions about non-blocking collective calls..."</a>
<li><strong>In reply to:</strong> <a href="28176.php">Eric Chamberland: "Re: [OMPI users] Questions about non-blocking collective calls..."</a>
<!-- nextthread="start" -->
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
