<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22313";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 15 21:06:29 2009" -->
<!-- isoreceived="20091216020629" -->
<!-- sent="Tue, 15 Dec 2009 21:06:23 -0500" -->
<!-- isosent="20091216020623" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22313" -->
<!-- id="B82EFDA0-928F-4C91-8926-E21C7189B894_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2899DAC4-0BB8-43B9-AF94-8A52E924F489_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22313<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-15 21:06:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7240.php">Ralph Castain: "Re: [OMPI devel] carto vs. hwloc"</a>
<li><strong>Previous message:</strong> <a href="7238.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22313"</a>
<li><strong>In reply to:</strong> <a href="7238.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22313"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7246.php">Vasily Philipov: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22313"</a>
<li><strong>Reply:</strong> <a href="7246.php">Vasily Philipov: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22313"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 15, 2009, at 8:56 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Hmm.  I'm a little disappointed that this was applied without answering my questions first...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/community/lists/devel/2009/12/7187.php">http://www.open-mpi.org/community/lists/devel/2009/12/7187.php</a>
</span><br>
<p>WRONG.  You *did* answer -- somehow my mail client ate it (I see the reply in the web archives, but not in my local mail client -- #$@!$@!#$!!!!).
<br>
<p>My bad...  :-(
<br>
<p>Could you add some of your explanations as comments in the code?  The rationale here is that if I had those questions while reading your patch, someone else (including me, months from now) will likely have the same questions while reading the code.
<br>
<p>Another minor quibble in a help message:
<br>
<p>+[SRQ doesn't found]
<br>
+The srq doesn't found.
<br>
+Below is some information about the host that raised the error:
<br>
+
<br>
+    Local host:   %s
<br>
+    Local device: %s
<br>
<p>It's not correct grammar and is fairly unhelpful to the user -- please change to:
<br>
<p>[SRQ not found]
<br>
Open MPI tried to access a shared receive queue (SRQ) that was not found.  This should not happen, and is a fatal error.  Your MPI job will now abort.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Local host:   %s
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Local device: %s
<br>
<p>Also:
<br>
<p>+  - When the number of not used receive buffers will decreased to 8
<br>
+    the IBV_EVENT_SRQ_LIMIT_REACHED event will be signaled and the number
<br>
+    of receive buffers that we can pre-post will be increased.
<br>
<p>I don't think users know what IBV_EVENT_... is.  Perhaps it should read:
<br>
<p>+  - When the number of unused shared receive buffers reaches 8, more
<br>
+    buffers will be posted.
<br>
<p>(how many more buffers will be posted, BTW?)
<br>
<p><p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7240.php">Ralph Castain: "Re: [OMPI devel] carto vs. hwloc"</a>
<li><strong>Previous message:</strong> <a href="7238.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22313"</a>
<li><strong>In reply to:</strong> <a href="7238.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22313"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7246.php">Vasily Philipov: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22313"</a>
<li><strong>Reply:</strong> <a href="7246.php">Vasily Philipov: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22313"</a>
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
