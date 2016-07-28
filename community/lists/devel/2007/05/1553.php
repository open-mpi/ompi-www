<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu May 17 14:40:11 2007" -->
<!-- isoreceived="20070517184011" -->
<!-- sent="Thu, 17 May 2007 12:40:06 -0600" -->
<!-- isosent="20070517184006" -->
<!-- name="gshipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto" -->
<!-- id="3761E39F-0A88-4BE8-AC75-F39A8A4E5B8B_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="464CA056.1000901_at_myri.com" -->
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
<strong>From:</strong> gshipman (<em>gshipman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-17 14:40:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1554.php">Patrick Geoffray: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
<li><strong>Previous message:</strong> <a href="1552.php">Patrick Geoffray: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
<li><strong>In reply to:</strong> <a href="1552.php">Patrick Geoffray: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1554.php">Patrick Geoffray: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
<li><strong>Reply:</strong> <a href="1554.php">Patrick Geoffray: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The fork() problem is due to memory registration aggravated by
</span><br>
<span class="quotelev1">&gt; registration cache. Memory registration in itself is a hack from  
</span><br>
<span class="quotelev1">&gt; the OS
</span><br>
<span class="quotelev1">&gt; point of view, and you already know a lot about the various problems
</span><br>
<span class="quotelev1">&gt; related to registration cache.
</span><br>
<span class="quotelev1">&gt;
</span><br>
So Gleb is indicating that this is a problem in the pipeline protocol  
<br>
which does not use a registration cache. I think the registration  
<br>
cache, while increasing the probability of badness after fork, is not  
<br>
the culprit.
<br>
<p><p><p><p><span class="quotelev1">&gt; The right way to fix the fork problem is to fix the memory  
</span><br>
<span class="quotelev1">&gt; registration
</span><br>
<span class="quotelev1">&gt; problem in the OS itself. It's not going to happen anytime soon, so it
</span><br>
<span class="quotelev1">&gt; requires another hack (forcing VM duplication of registered pages at
</span><br>
<span class="quotelev1">&gt; fork time).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Patrick
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Patrick Geoffray
</span><br>
<span class="quotelev1">&gt; Myricom, Inc.
</span><br>
<span class="quotelev1">&gt; <a href="http://www.myri.com">http://www.myri.com</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1554.php">Patrick Geoffray: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
<li><strong>Previous message:</strong> <a href="1552.php">Patrick Geoffray: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
<li><strong>In reply to:</strong> <a href="1552.php">Patrick Geoffray: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1554.php">Patrick Geoffray: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
<li><strong>Reply:</strong> <a href="1554.php">Patrick Geoffray: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
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
