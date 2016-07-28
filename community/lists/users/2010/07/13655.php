<?
$subject_val = "Re: [OMPI users] Adding libraries to wrapper compiler at run-time";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 15 10:16:02 2010" -->
<!-- isoreceived="20100715141602" -->
<!-- sent="Thu, 15 Jul 2010 10:16:28 -0400" -->
<!-- isosent="20100715141628" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Adding libraries to wrapper compiler at run-time" -->
<!-- id="3F427EE5-FE2A-4935-9358-BA69BF79363D_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="alpine.LRH.2.00.1007071451270.1920_at_flowerpot.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Adding libraries to wrapper compiler at run-time<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-15 10:16:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13656.php">Edgar Gabriel: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Previous message:</strong> <a href="13654.php">Jeff Squyres: "Re: [OMPI users] Low Open MPI performance on InfiniBand and shared memory?"</a>
<li><strong>In reply to:</strong> <a href="13517.php">Jeremiah Willcock: "[OMPI users] Adding libraries to wrapper compiler at run-time"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 7, 2010, at 2:53 PM, Jeremiah Willcock wrote:
<br>
<p><span class="quotelev1">&gt; The Open MPI FAQ shows how to add libraries to the Open MPI wrapper
</span><br>
<span class="quotelev1">&gt; compilers when building them (using configure flags), but I would like to
</span><br>
<span class="quotelev1">&gt; add flags for a specific run of the wrapper compiler.  Setting OMPI_LIBS
</span><br>
<span class="quotelev1">&gt; overrides the necessary MPI libraries, and it does not appear that there
</span><br>
<span class="quotelev1">&gt; is an easy way to get just the flags that OMPI_LIBS contains by default
</span><br>
<span class="quotelev1">&gt; (either using -showme:link or ompi_info).  Is there a way to add to the
</span><br>
<span class="quotelev1">&gt; default set of OMPI_LIBS rather than overriding it entirely?  Thank you
</span><br>
<span class="quotelev1">&gt; for your help.
</span><br>
<p>Sorry for the high latency reply!
<br>
<p>There isn't currently a better way to do this other than editing or extracting the information from the wrapper data text files directly (it might not be too hard to parse the information from the wrapper text file -- a little grep/awk/sed might do ya...?).
<br>
<p>If you have a better suggestion, a patch would be welcome!  :-)
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
<li><strong>Next message:</strong> <a href="13656.php">Edgar Gabriel: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Previous message:</strong> <a href="13654.php">Jeff Squyres: "Re: [OMPI users] Low Open MPI performance on InfiniBand and shared memory?"</a>
<li><strong>In reply to:</strong> <a href="13517.php">Jeremiah Willcock: "[OMPI users] Adding libraries to wrapper compiler at run-time"</a>
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
