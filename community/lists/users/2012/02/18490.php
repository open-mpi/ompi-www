<?
$subject_val = "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 15 13:13:45 2012" -->
<!-- isoreceived="20120215181345" -->
<!-- sent="Wed, 15 Feb 2012 13:13:40 -0500" -->
<!-- isosent="20120215181340" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list" -->
<!-- id="D96CCE6E-0BE0-4B94-A88A-C5E3C8F24904_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F3B9CF2.10938.6783515A_at_localhost" -->
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
<strong>Subject:</strong> Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-15 13:13:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18491.php">Tohiko Looka: "Re: [OMPI users] Different Prefix for different nodes"</a>
<li><strong>Previous message:</strong> <a href="18489.php">Jeff Squyres: "Re: [OMPI users] Strange OpenMPI messages"</a>
<li><strong>In reply to:</strong> <a href="18484.php">yanyg_at_[hidden]: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18493.php">yanyg_at_[hidden]: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 15, 2012, at 11:54 AM, yanyg_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; When I use sm btl layer, my program just hang at the MPI_Init() at 
</span><br>
<span class="quotelev1">&gt; the very beginning. 
</span><br>
<p>Ok, I think I was thrown off by the other things in this conversation.
<br>
<p>So the real issue is: the sm BTL is not working for you.  
<br>
<p>What version of Open MPI are you using?
<br>
<p>Can you rm -rf any Open MPI directories that may be left over in /tmp?
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
<li><strong>Next message:</strong> <a href="18491.php">Tohiko Looka: "Re: [OMPI users] Different Prefix for different nodes"</a>
<li><strong>Previous message:</strong> <a href="18489.php">Jeff Squyres: "Re: [OMPI users] Strange OpenMPI messages"</a>
<li><strong>In reply to:</strong> <a href="18484.php">yanyg_at_[hidden]: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18493.php">yanyg_at_[hidden]: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
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
