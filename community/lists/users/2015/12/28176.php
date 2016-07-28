<?
$subject_val = "Re: [OMPI users] Questions about non-blocking collective calls...";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 17 13:39:52 2015" -->
<!-- isoreceived="20151217183952" -->
<!-- sent="Thu, 17 Dec 2015 13:39:35 -0500" -->
<!-- isosent="20151217183935" -->
<!-- name="Eric Chamberland" -->
<!-- email="Eric.Chamberland_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Questions about non-blocking collective calls..." -->
<!-- id="56730167.6000803_at_giref.ulaval.ca" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="E781FEEF-0E77-44CD-BFA8-33CF8EB2D6EE_at_cisco.com" -->
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
<strong>From:</strong> Eric Chamberland (<em>Eric.Chamberland_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-17 13:39:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28177.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Questions about non-blocking collective calls..."</a>
<li><strong>Previous message:</strong> <a href="28175.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Questions about non-blocking collective calls..."</a>
<li><strong>In reply to:</strong> <a href="28175.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Questions about non-blocking collective calls..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28177.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Questions about non-blocking collective calls..."</a>
<li><strong>Reply:</strong> <a href="28177.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Questions about non-blocking collective calls..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 2015-12-17 12:45, Jeff Squyres (jsquyres) a &#233;crit :
<br>
<span class="quotelev1">&gt; On Dec 17, 2015, at 8:57 AM, Eric Chamberland &lt;Eric.Chamberland_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But I would like to know if the MPI I am using is able to do message progression or not: So how do an end-user like me can knows that? Does-it rely on hardware?  Is there a #define by OpenMPI that one can uses into his code?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; An MPI program *must* call MPI_Test or MPI_Wait to complete a non-blocking request -- it's not optional.
</span><br>
<span class="quotelev1">&gt;
</span><br>
Just to be clear: we *always* call MPI_Wait.  Now the question was about 
<br>
*when* to do it.
<br>
<p>We did 2 different things:
<br>
<p>#1- ASAP after the MPI_Isend
<br>
#2- As late as possible, in a class destructor for example, which can 
<br>
occur a while after other MPI_Irecv and MPI_Isend pairs have been issued.
<br>
<p>Is it true to tell that if there were message progression, the receiving 
<br>
side can complete the MPI_Wait linked to the MPI_Irecv call, event if 
<br>
the sending side have *not yet* called the MPI_Wait linked to the 
<br>
MPI_Isend ?
<br>
<p><span class="quotelev1">&gt; For performance portability, it's likely a good idea to have some calls to MPI_Test*() periodically.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Interesting and easy to do for us...
<br>
<p>Thanks,
<br>
<p>Eric
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28177.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Questions about non-blocking collective calls..."</a>
<li><strong>Previous message:</strong> <a href="28175.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Questions about non-blocking collective calls..."</a>
<li><strong>In reply to:</strong> <a href="28175.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Questions about non-blocking collective calls..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28177.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Questions about non-blocking collective calls..."</a>
<li><strong>Reply:</strong> <a href="28177.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Questions about non-blocking collective calls..."</a>
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
