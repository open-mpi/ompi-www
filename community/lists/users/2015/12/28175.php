<?
$subject_val = "Re: [OMPI users] Questions about non-blocking collective calls...";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 17 12:45:32 2015" -->
<!-- isoreceived="20151217174532" -->
<!-- sent="Thu, 17 Dec 2015 17:45:26 +0000" -->
<!-- isosent="20151217174526" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Questions about non-blocking collective calls..." -->
<!-- id="E781FEEF-0E77-44CD-BFA8-33CF8EB2D6EE_at_cisco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="5672BF52.5040306_at_giref.ulaval.ca" -->
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
<strong>Date:</strong> 2015-12-17 12:45:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28176.php">Eric Chamberland: "Re: [OMPI users] Questions about non-blocking collective calls..."</a>
<li><strong>Previous message:</strong> <a href="28174.php">Eric Chamberland: "Re: [OMPI users] Questions about non-blocking collective calls..."</a>
<li><strong>In reply to:</strong> <a href="28174.php">Eric Chamberland: "Re: [OMPI users] Questions about non-blocking collective calls..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28176.php">Eric Chamberland: "Re: [OMPI users] Questions about non-blocking collective calls..."</a>
<li><strong>Reply:</strong> <a href="28176.php">Eric Chamberland: "Re: [OMPI users] Questions about non-blocking collective calls..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 17, 2015, at 8:57 AM, Eric Chamberland &lt;Eric.Chamberland_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But I would like to know if the MPI I am using is able to do message progression or not: So how do an end-user like me can knows that? Does-it rely on hardware?  Is there a #define by OpenMPI that one can uses into his code?
</span><br>
<p>An MPI program *must* call MPI_Test or MPI_Wait to complete a non-blocking request -- it's not optional.
<br>
<p>For performance portability, it's likely a good idea to have some calls to MPI_Test*() periodically.
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
<li><strong>Next message:</strong> <a href="28176.php">Eric Chamberland: "Re: [OMPI users] Questions about non-blocking collective calls..."</a>
<li><strong>Previous message:</strong> <a href="28174.php">Eric Chamberland: "Re: [OMPI users] Questions about non-blocking collective calls..."</a>
<li><strong>In reply to:</strong> <a href="28174.php">Eric Chamberland: "Re: [OMPI users] Questions about non-blocking collective calls..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28176.php">Eric Chamberland: "Re: [OMPI users] Questions about non-blocking collective calls..."</a>
<li><strong>Reply:</strong> <a href="28176.php">Eric Chamberland: "Re: [OMPI users] Questions about non-blocking collective calls..."</a>
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
