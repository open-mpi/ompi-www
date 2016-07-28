<?
$subject_val = "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch asm_fix created. dev-1370-g26f96c0";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 25 17:43:59 2015" -->
<!-- isoreceived="20150325214359" -->
<!-- sent="Wed, 25 Mar 2015 17:43:58 -0400" -->
<!-- isosent="20150325214358" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch asm_fix created. dev-1370-g26f96c0" -->
<!-- id="CAMJJpkVdk-vpu6Rjnsu2DU0zaMvv2OC+tTDSfntMExTPPU7FnA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="B8D54596-2827-4156-8E8F-C1772931728A_at_cisco.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-25 17:43:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17155.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch asm_fix created. dev-1370-g26f96c0"</a>
<li><strong>Previous message:</strong> <a href="17153.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch asm_fix created.	dev-1370-g26f96c0"</a>
<li><strong>In reply to:</strong> <a href="17153.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch asm_fix created.	dev-1370-g26f96c0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17155.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch asm_fix created. dev-1370-g26f96c0"</a>
<li><strong>Reply:</strong> <a href="17155.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch asm_fix created. dev-1370-g26f96c0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I had the same impression but them I went and read the Intel documentation
<br>
and xchg is one of these exceptions where the lock is implicit.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Wed, Mar 25, 2015 at 4:59 PM, Dave Goodell (dgoodell) &lt;dgoodell_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; On Mar 25, 2015, at 3:02 PM, gitdub_at_[hidden] wrote:
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
<span class="quotelev1">&gt; This code *looks* buggy because it lacks the &quot;SMPLOCK&quot; prefix, but can be
</span><br>
<span class="quotelev1">&gt; safely omitted because &quot;xchg&quot; is always locked.  A comment to this effect
</span><br>
<span class="quotelev1">&gt; should be added.
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
<span class="quotelev1">&gt; Shouldn't the modifier on the second constraint above be &quot;+&quot; for the same
</span><br>
<span class="quotelev1">&gt; reasons as the rest of this commit?  In that case I also think you can omit
</span><br>
<span class="quotelev1">&gt; the second constraint below altogether, though I'm less sure about that.
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/03/17153.php">http://www.open-mpi.org/community/lists/devel/2015/03/17153.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17154/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17155.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch asm_fix created. dev-1370-g26f96c0"</a>
<li><strong>Previous message:</strong> <a href="17153.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch asm_fix created.	dev-1370-g26f96c0"</a>
<li><strong>In reply to:</strong> <a href="17153.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch asm_fix created.	dev-1370-g26f96c0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17155.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch asm_fix created. dev-1370-g26f96c0"</a>
<li><strong>Reply:</strong> <a href="17155.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch asm_fix created. dev-1370-g26f96c0"</a>
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
