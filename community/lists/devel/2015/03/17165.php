<?
$subject_val = "Re: [OMPI devel] Opal atomics question";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 26 15:06:04 2015" -->
<!-- isoreceived="20150326190604" -->
<!-- sent="Thu, 26 Mar 2015 15:06:02 -0400" -->
<!-- isosent="20150326190602" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Opal atomics question" -->
<!-- id="CAMJJpkXo3xA6tR7SbPENALL=UWejURnfY+4vMBRG6bAvQtWFKw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20150326190327.GL25043_at_pn1246003.lanl.gov" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-26 15:06:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17166.php">Paul Hargrove: "Re: [OMPI devel] Opal atomics question"</a>
<li><strong>Previous message:</strong> <a href="17164.php">Nathan Hjelm: "Re: [OMPI devel] Opal atomics question"</a>
<li><strong>In reply to:</strong> <a href="17164.php">Nathan Hjelm: "Re: [OMPI devel] Opal atomics question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17166.php">Paul Hargrove: "Re: [OMPI devel] Opal atomics question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
:+1: for getting rid of the atomic sub.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Thu, Mar 26, 2015 at 3:03 PM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Good to know. That leaves alpha as the only one that isn't being
</span><br>
<span class="quotelev1">&gt; tested.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BTW, do you know if you are testing the just the inline assembly or are
</span><br>
<span class="quotelev1">&gt; you also testing the stuff in opal/asm?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Mar 26, 2015 at 09:40:06AM -0700, Paul Hargrove wrote:
</span><br>
<span class="quotelev2">&gt; &gt;    Nathan,
</span><br>
<span class="quotelev2">&gt; &gt;    I test sparcv8+, sparcv9, ia64 and mips in release candidates.
</span><br>
<span class="quotelev2">&gt; &gt;    That isn't the same as *using* any of those platforms in production.
</span><br>
<span class="quotelev2">&gt; &gt;    I just mean to say that the implementations are known to pass &quot;make
</span><br>
<span class="quotelev2">&gt; &gt;    check&quot;.
</span><br>
<span class="quotelev2">&gt; &gt;    -Paul
</span><br>
<span class="quotelev2">&gt; &gt;    On Thu, Mar 26, 2015 at 8:48 AM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      As a follow-on. How many of our supported architectures should we
</span><br>
<span class="quotelev2">&gt; &gt;      continue to support. The current supported list is:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      alpha
</span><br>
<span class="quotelev2">&gt; &gt;      amd64*
</span><br>
<span class="quotelev2">&gt; &gt;      arm*
</span><br>
<span class="quotelev2">&gt; &gt;      ia32*
</span><br>
<span class="quotelev2">&gt; &gt;      ia64
</span><br>
<span class="quotelev2">&gt; &gt;      mips
</span><br>
<span class="quotelev2">&gt; &gt;      osx*
</span><br>
<span class="quotelev2">&gt; &gt;      powerpc*
</span><br>
<span class="quotelev2">&gt; &gt;      sparcv9
</span><br>
<span class="quotelev2">&gt; &gt;      sync_builtin*
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      * - known to be in-use.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      Additionally, should we continue to support the atomics in opal/asm?
</span><br>
<span class="quotelev2">&gt; &gt;      Some of those are known to be wrong and most compilers support
</span><br>
<span class="quotelev1">&gt; in-line
</span><br>
<span class="quotelev2">&gt; &gt;      assembly.
</span><br>
<span class="quotelev2">&gt; &gt;      -Nathan
</span><br>
<span class="quotelev2">&gt; &gt;      On Thu, Mar 26, 2015 at 09:22:39AM -0600, Nathan Hjelm wrote:
</span><br>
<span class="quotelev3">&gt; &gt;      &gt;
</span><br>
<span class="quotelev3">&gt; &gt;      &gt; I am working on cleaning up the atomics in opal and I noticed
</span><br>
<span class="quotelev2">&gt; &gt;      something
</span><br>
<span class="quotelev3">&gt; &gt;      &gt; odd. We define opal_atomic_sub_32 and opal_atomic_sub_64 yet only
</span><br>
<span class="quotelev1">&gt; use
</span><br>
<span class="quotelev3">&gt; &gt;      &gt; opal_atomic_sub_32 once:
</span><br>
<span class="quotelev3">&gt; &gt;      &gt;
</span><br>
<span class="quotelev3">&gt; &gt;      &gt; ./opal/runtime/opal_progress.c:    val =
</span><br>
<span class="quotelev2">&gt; &gt;      opal_atomic_sub_32(&amp;num_event_users, 1);
</span><br>
<span class="quotelev3">&gt; &gt;      &gt;
</span><br>
<span class="quotelev3">&gt; &gt;      &gt; This could easily be changed to:
</span><br>
<span class="quotelev3">&gt; &gt;      &gt;
</span><br>
<span class="quotelev3">&gt; &gt;      &gt; val = opal_atomic_add_32(&amp;num_event_users, -1);
</span><br>
<span class="quotelev3">&gt; &gt;      &gt;
</span><br>
<span class="quotelev3">&gt; &gt;      &gt; And then we could remove all both opal_atomic_sub_32 and
</span><br>
<span class="quotelev3">&gt; &gt;      &gt; opal_atomic_sub_64. Is there a reason to leave these functions in
</span><br>
<span class="quotelev2">&gt; &gt;      opal?
</span><br>
<span class="quotelev3">&gt; &gt;      &gt;
</span><br>
<span class="quotelev3">&gt; &gt;      &gt;
</span><br>
<span class="quotelev3">&gt; &gt;      &gt; -Nathan
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;      &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;      &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;      &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;      &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;      &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt; &gt;      <a href="http://www.open-mpi.org/community/lists/devel/2015/03/17160.php">http://www.open-mpi.org/community/lists/devel/2015/03/17160.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;      devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt;      devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;      Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;      Link to this post:
</span><br>
<span class="quotelev2">&gt; &gt;      <a href="http://www.open-mpi.org/community/lists/devel/2015/03/17162.php">http://www.open-mpi.org/community/lists/devel/2015/03/17162.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    --
</span><br>
<span class="quotelev2">&gt; &gt;    Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;    Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev2">&gt; &gt;    Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt; &gt;    Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/03/17163.php">http://www.open-mpi.org/community/lists/devel/2015/03/17163.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/03/17164.php">http://www.open-mpi.org/community/lists/devel/2015/03/17164.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17165/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17166.php">Paul Hargrove: "Re: [OMPI devel] Opal atomics question"</a>
<li><strong>Previous message:</strong> <a href="17164.php">Nathan Hjelm: "Re: [OMPI devel] Opal atomics question"</a>
<li><strong>In reply to:</strong> <a href="17164.php">Nathan Hjelm: "Re: [OMPI devel] Opal atomics question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17166.php">Paul Hargrove: "Re: [OMPI devel] Opal atomics question"</a>
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
