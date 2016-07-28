<?
$subject_val = "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a	single machine?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 14 17:22:48 2010" -->
<!-- isoreceived="20101214222248" -->
<!-- sent="Tue, 14 Dec 2010 17:22:43 -0500" -->
<!-- isosent="20101214222243" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Method for worker to determine its &amp;quot;rank&amp;quot; on a	single machine?" -->
<!-- id="4F5A9648-C954-4FF6-B9FA-393BE0B4261A_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D024E97.8060201_at_ias.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a	single machine?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-14 17:22:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15136.php">Jeff Squyres: "Re: [OMPI users] meaning of MPI_THREAD_*"</a>
<li><strong>Previous message:</strong> <a href="15134.php">Ralph Castain: "Re: [OMPI users] jobs with more that 2, 500 processes will not even start"</a>
<li><strong>In reply to:</strong> <a href="15067.php">Prentice Bisbal: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a	single machine?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 10, 2010, at 11:00 AM, Prentice Bisbal wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Would it make sense to implement this as an MPI extension, and then
</span><br>
<span class="quotelev2">&gt;&gt; perhaps propose something to the Forum for this purpose?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think that makes sense. As core and socket counts go up, I imagine the need for this information will become more common as programmers try to explicitly keep codes on a single socket or node.
</span><br>
<p>Something along these lines has come up as an MPI-3 proposal (from Oak Ridge and Sandia, IIRC).  It hasn't gotten a lot of discussion yet, but concerns like Dick's were already brought up.  
<br>
<p>There seems to be general desire for this kind of functionality both within the Forum and among users, so we'll see where it goes...
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
<li><strong>Next message:</strong> <a href="15136.php">Jeff Squyres: "Re: [OMPI users] meaning of MPI_THREAD_*"</a>
<li><strong>Previous message:</strong> <a href="15134.php">Ralph Castain: "Re: [OMPI users] jobs with more that 2, 500 processes will not even start"</a>
<li><strong>In reply to:</strong> <a href="15067.php">Prentice Bisbal: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a	single machine?"</a>
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
