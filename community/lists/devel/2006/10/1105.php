<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 11 19:20:28 2006" -->
<!-- isoreceived="20061011232028" -->
<!-- sent="Wed, 11 Oct 2006 19:20:18 -0400" -->
<!-- isosent="20061011232018" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Shared memory file changes" -->
<!-- id="320ABE29-9FAB-41E8-964B-92E2F367292A_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.64.0610111706470.3276_at_milliways.osl.iu.edu" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-11 19:20:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1106.php">Adrian Knoth: "[OMPI devel] IPv6 in btl/tcp"</a>
<li><strong>Previous message:</strong> <a href="1104.php">Brian W. Barrett: "[OMPI devel] Shared memory file changes"</a>
<li><strong>In reply to:</strong> <a href="1104.php">Brian W. Barrett: "[OMPI devel] Shared memory file changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1108.php">Jeff Squyres: "Re: [OMPI devel] Shared memory file changes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian,
<br>
<p>The way the resize was done, led to unexpected behaviors. It was not  
<br>
possible to know what the result of the resize was ... might be  
<br>
smaller or bigger depending on the value on the stack at the call). I  
<br>
commit a fix this morning. Let's wait few days before moving the 2  
<br>
commits into the 1.2.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Oct 11, 2006, at 5:09 PM, Brian W. Barrett wrote:
<br>
<p><span class="quotelev1">&gt; Hi all -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A couple of weeks ago, I committed some changes to the trunk that  
</span><br>
<span class="quotelev1">&gt; greatly
</span><br>
<span class="quotelev1">&gt; reduced the size of the shared memory file for small numbers of  
</span><br>
<span class="quotelev1">&gt; processes.
</span><br>
<span class="quotelev1">&gt; I haven't heard any complaints (the non-blocking send/receive issue  
</span><br>
<span class="quotelev1">&gt; is at
</span><br>
<span class="quotelev1">&gt; proc counts greater than the size this patch affected).  Anyone  
</span><br>
<span class="quotelev1">&gt; object to
</span><br>
<span class="quotelev1">&gt; moving this to the v1.2 branch (with reviews, of course).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;    Brian Barrett
</span><br>
<span class="quotelev1">&gt;    Graduate Student, Open Systems Lab, Indiana University
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.osl.iu.edu/~brbarret/">http://www.osl.iu.edu/~brbarret/</a>
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
<li><strong>Next message:</strong> <a href="1106.php">Adrian Knoth: "[OMPI devel] IPv6 in btl/tcp"</a>
<li><strong>Previous message:</strong> <a href="1104.php">Brian W. Barrett: "[OMPI devel] Shared memory file changes"</a>
<li><strong>In reply to:</strong> <a href="1104.php">Brian W. Barrett: "[OMPI devel] Shared memory file changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1108.php">Jeff Squyres: "Re: [OMPI devel] Shared memory file changes"</a>
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
