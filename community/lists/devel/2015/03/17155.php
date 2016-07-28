<?
$subject_val = "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch asm_fix created. dev-1370-g26f96c0";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 25 18:16:21 2015" -->
<!-- isoreceived="20150325221621" -->
<!-- sent="Wed, 25 Mar 2015 22:16:19 +0000" -->
<!-- isosent="20150325221619" -->
<!-- name="Dave Goodell (dgoodell)" -->
<!-- email="dgoodell_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch asm_fix created. dev-1370-g26f96c0" -->
<!-- id="82BAD63E-A288-42B4-A9EF-F84BA220EFF9_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMJJpkVdk-vpu6Rjnsu2DU0zaMvv2OC+tTDSfntMExTPPU7FnA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch asm_fix created. dev-1370-g26f96c0<br>
<strong>From:</strong> Dave Goodell (dgoodell) (<em>dgoodell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-25 18:16:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17156.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch asm_fix created.	dev-1370-g26f96c0"</a>
<li><strong>Previous message:</strong> <a href="17154.php">George Bosilca: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch asm_fix created. dev-1370-g26f96c0"</a>
<li><strong>In reply to:</strong> <a href="17154.php">George Bosilca: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch asm_fix created. dev-1370-g26f96c0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17156.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch asm_fix created.	dev-1370-g26f96c0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Right, that's why I'm recommending adding a comment so we don't have someone flag this a third time :)
<br>
<p>-Dave
<br>
<p>On Mar 25, 2015, at 4:43 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I had the same impression but them I went and read the Intel documentation and xchg is one of these exceptions where the lock is implicit.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Mar 25, 2015 at 4:59 PM, Dave Goodell (dgoodell) &lt;dgoodell_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; On Mar 25, 2015, at 3:02 PM, gitdub_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; +static inline int32_t opal_atomic_swap_32( volatile int32_t *addr,
</span><br>
<span class="quotelev2">&gt; &gt; +                                        int32_t newval)
</span><br>
<span class="quotelev2">&gt; &gt; +{
</span><br>
<span class="quotelev2">&gt; &gt; +    int32_t oldval;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    __asm__ __volatile__(&quot;xchg %1, %0&quot; :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This code *looks* buggy because it lacks the &quot;SMPLOCK&quot; prefix, but can be safely omitted because &quot;xchg&quot; is always locked.  A comment to this effect should be added.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also, this should probably be &quot;xchgl&quot; instead of &quot;xchg&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; +                      &quot;=r&quot; (oldval), &quot;=m&quot; (*addr) :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Shouldn't the modifier on the second constraint above be &quot;+&quot; for the same reasons as the rest of this commit?  In that case I also think you can omit the second constraint below altogether, though I'm less sure about that.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; +                      &quot;0&quot; (newval), &quot;m&quot; (*addr) :
</span><br>
<span class="quotelev2">&gt; &gt; +                      &quot;memory&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +    return oldval;
</span><br>
<span class="quotelev2">&gt; &gt; +}
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Dave
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/03/17153.php">http://www.open-mpi.org/community/lists/devel/2015/03/17153.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/03/17154.php">http://www.open-mpi.org/community/lists/devel/2015/03/17154.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17156.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch asm_fix created.	dev-1370-g26f96c0"</a>
<li><strong>Previous message:</strong> <a href="17154.php">George Bosilca: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch asm_fix created. dev-1370-g26f96c0"</a>
<li><strong>In reply to:</strong> <a href="17154.php">George Bosilca: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch asm_fix created. dev-1370-g26f96c0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17156.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch asm_fix created.	dev-1370-g26f96c0"</a>
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
