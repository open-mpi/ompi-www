<?
$subject_val = "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 29 14:10:49 2010" -->
<!-- isoreceived="20101129191049" -->
<!-- sent="Mon, 29 Nov 2010 14:10:44 -0500" -->
<!-- isosent="20101129191044" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!" -->
<!-- id="A63AD842-4A6E-4C0E-BF46-97C9474654EE_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1E3BF6B8D1243842A175F7C7069EB0E717D75A_at_usa-mv-msg.wipro.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-29 14:10:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8731.php">N.M. Maclaren: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<li><strong>Previous message:</strong> <a href="8729.php">George Bosilca: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<li><strong>In reply to:</strong> <a href="8698.php">ananda.mudar_at_[hidden]: "[OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8732.php">ananda.mudar_at_[hidden]: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 23, 2010, at 3:23 PM, &lt;ananda.mudar_at_[hidden]&gt; &lt;ananda.mudar_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; However this error message goes away, if I initialize MPI with threads ie; MPI_Init_thread(). Can anyone explain this discrepancy?
</span><br>
<p>What thread level are you invoking MPI_INIT_THREAD with?
<br>
<p>One possible reason this could be happening is that the openib BTL is excluding itself if you use MPI_THREAD_MULTIPLE.  The openib BTL is the entity that is responsible for the fork warning -- if it's not being used, then no warning is issued because there is no problem with forking.
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
<li><strong>Next message:</strong> <a href="8731.php">N.M. Maclaren: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<li><strong>Previous message:</strong> <a href="8729.php">George Bosilca: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<li><strong>In reply to:</strong> <a href="8698.php">ananda.mudar_at_[hidden]: "[OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8732.php">ananda.mudar_at_[hidden]: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
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
