<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jan 23 05:05:57 2006" -->
<!-- isoreceived="20060123100557" -->
<!-- sent="Mon, 23 Jan 2006 11:05:49 +0100" -->
<!-- isosent="20060123100549" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re:  ompi_get_version" -->
<!-- id="20060123100549.GA5497_at_iam.uni-bonn.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F0C989BE-80B1-4B92-A193-B85E3E4BFF11_at_open-mpi.org" -->
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
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-23 05:05:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0709.php">Leslie Watter: "Re:  debugging methods"</a>
<li><strong>Previous message:</strong> <a href="0707.php">Brian Barrett: "Re:  ompi_get_version"</a>
<li><strong>In reply to:</strong> <a href="0707.php">Brian Barrett: "Re:  ompi_get_version"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0702.php">Brian Barrett: "Re:  ompi_get_version"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brian,
<br>
<p>* Brian Barrett wrote on Sun, Jan 22, 2006 at 06:53:12PM CET:
<br>
<span class="quotelev1">&gt; On Jan 22, 2006, at 2:34 AM, Ralf Wildenhues wrote:
</span><br>
<span class="quotelev2">&gt; &gt; * Brian Barrett wrote on Sat, Jan 21, 2006 at 11:53:41PM CET:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; It's the thread that never ends... :)
</span><br>
<p>Hehe.
<br>
<p><span class="quotelev2">&gt; &gt; Which systems' m4 is capable of translating the configury but does not
</span><br>
<span class="quotelev2">&gt; &gt; ignore unquoted [eval]?  (See comment in ompi_get_version.m4.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I was actually going to ask you about that -- that comment came from  
</span><br>
<span class="quotelev1">&gt; your original patch.
</span><br>
<p>Not really: it's been in config/ompi_get_version.m4 before, I just
<br>
conserved it.
<br>
<p><span class="quotelev1">&gt; I was under the impression that AC actually  
</span><br>
<span class="quotelev1">&gt; required GNU m4 these days.  At least, Autoconf's configure complains  
</span><br>
<span class="quotelev1">&gt; quite loudly when I build on Solaris or AIX and forget to have a GNU  
</span><br>
<span class="quotelev1">&gt; m4 build in my path.  I've always operated under the assumption  
</span><br>
<span class="quotelev1">&gt; developers had to have GNU m4, as I couldn't see how they built AC  
</span><br>
<span class="quotelev1">&gt; otherwise.
</span><br>
<p>I know that some BSD versions try to use their m4 for autotools.
<br>
At least OpenBSD has some patches in their ports to not disallow
<br>
it.  Since I have little experience as to how far this actually
<br>
works, I figured to rather not remove the comment.  I'd really
<br>
like to know about systems and hear about experience with non-GNU
<br>
m4 and autotools, though.  If it's easy to keep them compatible
<br>
with it, I believe we should not hinder it.
<br>
<p>Cheers,
<br>
Ralf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0709.php">Leslie Watter: "Re:  debugging methods"</a>
<li><strong>Previous message:</strong> <a href="0707.php">Brian Barrett: "Re:  ompi_get_version"</a>
<li><strong>In reply to:</strong> <a href="0707.php">Brian Barrett: "Re:  ompi_get_version"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0702.php">Brian Barrett: "Re:  ompi_get_version"</a>
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
