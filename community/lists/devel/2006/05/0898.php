<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri May 26 12:16:06 2006" -->
<!-- isoreceived="20060526161606" -->
<!-- sent="Fri, 26 May 2006 12:16:03 -0400 (EDT)" -->
<!-- isosent="20060526161603" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Oversubscription/Scheduling Bug" -->
<!-- id="Pine.LNX.4.64.0605261214330.2494_at_milliways.osl.iu.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C835B9C9CB0F1C4E9DA48913C9E8F8AF8FD743_at_xmb-rtp-215.amer.cisco.com" -->
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
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-26 12:16:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0899.php">Brian W. Barrett: "Re: [OMPI devel] Oversubscription/Scheduling Bug"</a>
<li><strong>Previous message:</strong> <a href="0897.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] Oversubscription/Scheduling Bug"</a>
<li><strong>In reply to:</strong> <a href="0897.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] Oversubscription/Scheduling Bug"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0899.php">Brian W. Barrett: "Re: [OMPI devel] Oversubscription/Scheduling Bug"</a>
<li><strong>Reply:</strong> <a href="0899.php">Brian W. Barrett: "Re: [OMPI devel] Oversubscription/Scheduling Bug"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, 26 May 2006, Jeff Squyres (jsquyres) wrote:
<br>
<p><span class="quotelev1">&gt; You can see this by slightly modifying your test command -- run &quot;env&quot;
</span><br>
<span class="quotelev1">&gt; instead of &quot;hostname&quot;.  You'll see that the environment variable
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_mpi_yield_when_idle is set to the value that you passed in on
</span><br>
<span class="quotelev1">&gt; the mpirun command line, regardless of a) whether you're oversubscribing
</span><br>
<span class="quotelev1">&gt; or not, and b) whatever is passed in through the orted.
</span><br>
<p>While Jeff is correct that the parameter informing the MPI process that it 
<br>
should idle when it's not busy is correctly set, it turns out that we are 
<br>
ignoring this parameter inside the MPI process.  I'm looking into this and 
<br>
hope to have a fix this afternoon.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0899.php">Brian W. Barrett: "Re: [OMPI devel] Oversubscription/Scheduling Bug"</a>
<li><strong>Previous message:</strong> <a href="0897.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] Oversubscription/Scheduling Bug"</a>
<li><strong>In reply to:</strong> <a href="0897.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] Oversubscription/Scheduling Bug"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0899.php">Brian W. Barrett: "Re: [OMPI devel] Oversubscription/Scheduling Bug"</a>
<li><strong>Reply:</strong> <a href="0899.php">Brian W. Barrett: "Re: [OMPI devel] Oversubscription/Scheduling Bug"</a>
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
