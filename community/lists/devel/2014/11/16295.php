<?
$subject_val = "Re: [OMPI devel] 1.8.3 and PSM errors";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 11 17:23:28 2014" -->
<!-- isoreceived="20141111222328" -->
<!-- sent="Tue, 11 Nov 2014 14:23:24 -0800" -->
<!-- isosent="20141111222324" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.8.3 and PSM errors" -->
<!-- id="09FD3369-0A4D-4662-93B3-71AC69C43CE0_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="C442ED7D-D09F-4134-B852-DF6425B6207C_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.8.3 and PSM errors<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-11 17:23:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16296.php">Friedley, Andrew: "Re: [OMPI devel] 1.8.3 and PSM errors"</a>
<li><strong>Previous message:</strong> <a href="16294.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.8.3 and PSM errors"</a>
<li><strong>In reply to:</strong> <a href="16294.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.8.3 and PSM errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16296.php">Friedley, Andrew: "Re: [OMPI devel] 1.8.3 and PSM errors"</a>
<li><strong>Reply:</strong> <a href="16296.php">Friedley, Andrew: "Re: [OMPI devel] 1.8.3 and PSM errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I thought PSM didn&#226;&#128;&#153;t support dynamic operations such as Intercomm_create - yes? The PSM security key wouldn&#226;&#128;&#153;t match between the two jobs, and so there is no way for them to communicate.
<br>
<p>Which is why I thought PSM can&#226;&#128;&#153;t be used for dynamic operations at all, including comm_spawn and connect/accept
<br>
<p><p><span class="quotelev1">&gt; On Nov 11, 2014, at 2:13 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 11, 2014, at 4:56 PM, Friedley, Andrew &lt;andrew.friedley_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; OK, I'm able to reproduce this now, not sure why I couldn't before.  I took a look at the diff of the PSM MTL from 1.6.5 to 1.8.1, and nothing is standing out to me.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Question more for the general group:  Did anything related to the behavior/usage of MTL add_procs() change in this time window?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The time between the 1.6.x series and the 1.8.x series is measure in terms of a year or two, so, ya, something might have changed...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; More particularly, it looks like add_procs is being called a second time during MPI_Intercomm_create and being passed a process that is already connected (passed into the first add_procs call).  Is that right?  Should the MTL handle multiple add_procs calls with the same proc provided?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm afraid I don't know much about the MTL interface.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; George / Nathan?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16294.php">http://www.open-mpi.org/community/lists/devel/2014/11/16294.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16296.php">Friedley, Andrew: "Re: [OMPI devel] 1.8.3 and PSM errors"</a>
<li><strong>Previous message:</strong> <a href="16294.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.8.3 and PSM errors"</a>
<li><strong>In reply to:</strong> <a href="16294.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.8.3 and PSM errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16296.php">Friedley, Andrew: "Re: [OMPI devel] 1.8.3 and PSM errors"</a>
<li><strong>Reply:</strong> <a href="16296.php">Friedley, Andrew: "Re: [OMPI devel] 1.8.3 and PSM errors"</a>
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
