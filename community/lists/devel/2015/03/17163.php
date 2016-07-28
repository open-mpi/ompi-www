<?
$subject_val = "Re: [OMPI devel] Opal atomics question";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 26 12:40:10 2015" -->
<!-- isoreceived="20150326164010" -->
<!-- sent="Thu, 26 Mar 2015 09:40:06 -0700" -->
<!-- isosent="20150326164006" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Opal atomics question" -->
<!-- id="CAAvDA14NPG=Rs2EZThbdXqvyDaUYEMykxLfsKgAUqj7v7dQtZg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20150326154811.GK25043_at_pn1246003.lanl.gov" -->
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
<strong>Date:</strong> 2015-03-26 12:40:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17164.php">Nathan Hjelm: "Re: [OMPI devel] Opal atomics question"</a>
<li><strong>Previous message:</strong> <a href="17162.php">Nathan Hjelm: "Re: [OMPI devel] Opal atomics question"</a>
<li><strong>In reply to:</strong> <a href="17162.php">Nathan Hjelm: "Re: [OMPI devel] Opal atomics question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17164.php">Nathan Hjelm: "Re: [OMPI devel] Opal atomics question"</a>
<li><strong>Reply:</strong> <a href="17164.php">Nathan Hjelm: "Re: [OMPI devel] Opal atomics question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nathan,
<br>
<p>I test sparcv8+, sparcv9, ia64 and mips in release candidates.
<br>
That isn't the same as *using* any of those platforms in production.
<br>
I just mean to say that the implementations are known to pass &quot;make check&quot;.
<br>
<p>-Paul
<br>
<p>On Thu, Mar 26, 2015 at 8:48 AM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As a follow-on. How many of our supported architectures should we
</span><br>
<span class="quotelev1">&gt; continue to support. The current supported list is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; alpha
</span><br>
<span class="quotelev1">&gt; amd64*
</span><br>
<span class="quotelev1">&gt; arm*
</span><br>
<span class="quotelev1">&gt; ia32*
</span><br>
<span class="quotelev1">&gt; ia64
</span><br>
<span class="quotelev1">&gt; mips
</span><br>
<span class="quotelev1">&gt; osx*
</span><br>
<span class="quotelev1">&gt; powerpc*
</span><br>
<span class="quotelev1">&gt; sparcv9
</span><br>
<span class="quotelev1">&gt; sync_builtin*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * - known to be in-use.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Additionally, should we continue to support the atomics in opal/asm?
</span><br>
<span class="quotelev1">&gt; Some of those are known to be wrong and most compilers support in-line
</span><br>
<span class="quotelev1">&gt; assembly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Mar 26, 2015 at 09:22:39AM -0600, Nathan Hjelm wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am working on cleaning up the atomics in opal and I noticed something
</span><br>
<span class="quotelev2">&gt; &gt; odd. We define opal_atomic_sub_32 and opal_atomic_sub_64 yet only use
</span><br>
<span class="quotelev2">&gt; &gt; opal_atomic_sub_32 once:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ./opal/runtime/opal_progress.c:    val =
</span><br>
<span class="quotelev1">&gt; opal_atomic_sub_32(&amp;num_event_users, 1);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This could easily be changed to:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; val = opal_atomic_add_32(&amp;num_event_users, -1);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; And then we could remove all both opal_atomic_sub_32 and
</span><br>
<span class="quotelev2">&gt; &gt; opal_atomic_sub_64. Is there a reason to leave these functions in opal?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Nathan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/03/17160.php">http://www.open-mpi.org/community/lists/devel/2015/03/17160.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/03/17162.php">http://www.open-mpi.org/community/lists/devel/2015/03/17162.php</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17163/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17164.php">Nathan Hjelm: "Re: [OMPI devel] Opal atomics question"</a>
<li><strong>Previous message:</strong> <a href="17162.php">Nathan Hjelm: "Re: [OMPI devel] Opal atomics question"</a>
<li><strong>In reply to:</strong> <a href="17162.php">Nathan Hjelm: "Re: [OMPI devel] Opal atomics question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17164.php">Nathan Hjelm: "Re: [OMPI devel] Opal atomics question"</a>
<li><strong>Reply:</strong> <a href="17164.php">Nathan Hjelm: "Re: [OMPI devel] Opal atomics question"</a>
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
