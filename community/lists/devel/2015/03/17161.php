<?
$subject_val = "Re: [OMPI devel] Opal atomics question";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 26 11:43:50 2015" -->
<!-- isoreceived="20150326154350" -->
<!-- sent="Thu, 26 Mar 2015 08:43:41 -0700" -->
<!-- isosent="20150326154341" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Opal atomics question" -->
<!-- id="CAAvDA178_ZO1DK0SX7qkjfEuhChtECFjNsKnkeVK74qkNfiEdA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20150326152239.GJ25043_at_pn1246003.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Opal atomics question<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-26 11:43:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17162.php">Nathan Hjelm: "Re: [OMPI devel] Opal atomics question"</a>
<li><strong>Previous message:</strong> <a href="17160.php">Nathan Hjelm: "[OMPI devel] Opal atomics question"</a>
<li><strong>In reply to:</strong> <a href="17160.php">Nathan Hjelm: "[OMPI devel] Opal atomics question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17162.php">Nathan Hjelm: "Re: [OMPI devel] Opal atomics question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In case anybody cares:
<br>
<p>In GASNet we have atomics for &quot;add&quot;, &quot;sub&quot;, &quot;incr&quot;, &quot;decr&quot;, and
<br>
&quot;dec-and-test&quot;.
<br>
<p>On some platforms all five are implemented in terms of a single
<br>
inline-atomic for &quot;add&quot;.
<br>
There are platforms on which one or more of  &quot;incr&quot;, &quot;decr&quot; and
<br>
&quot;decr-and-test&quot; have custom implementations.
<br>
However, we have found not even one platform where it is necessary (or even
<br>
useful) to implement &quot;sub&quot; by any other means than a macro that calls &quot;add&quot;.
<br>
<p>FWIW: we use &quot;sub&quot; in only a handfull of places (more than 1 but less than
<br>
10)
<br>
<p>-Paul
<br>
<p>On Thu, Mar 26, 2015 at 8:22 AM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am working on cleaning up the atomics in opal and I noticed something
</span><br>
<span class="quotelev1">&gt; odd. We define opal_atomic_sub_32 and opal_atomic_sub_64 yet only use
</span><br>
<span class="quotelev1">&gt; opal_atomic_sub_32 once:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./opal/runtime/opal_progress.c:    val =
</span><br>
<span class="quotelev1">&gt; opal_atomic_sub_32(&amp;num_event_users, 1);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This could easily be changed to:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; val = opal_atomic_add_32(&amp;num_event_users, -1);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And then we could remove all both opal_atomic_sub_32 and
</span><br>
<span class="quotelev1">&gt; opal_atomic_sub_64. Is there a reason to leave these functions in opal?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Nathan
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/03/17160.php">http://www.open-mpi.org/community/lists/devel/2015/03/17160.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17161/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17162.php">Nathan Hjelm: "Re: [OMPI devel] Opal atomics question"</a>
<li><strong>Previous message:</strong> <a href="17160.php">Nathan Hjelm: "[OMPI devel] Opal atomics question"</a>
<li><strong>In reply to:</strong> <a href="17160.php">Nathan Hjelm: "[OMPI devel] Opal atomics question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17162.php">Nathan Hjelm: "Re: [OMPI devel] Opal atomics question"</a>
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
