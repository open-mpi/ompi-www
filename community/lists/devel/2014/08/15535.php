<?
$subject_val = "Re: [OMPI devel] v1.8.2 still held up...";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  7 14:51:30 2014" -->
<!-- isoreceived="20140807185130" -->
<!-- sent="Thu, 7 Aug 2014 11:51:28 -0700" -->
<!-- isosent="20140807185128" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.8.2 still held up..." -->
<!-- id="CAAvDA17O4_dEXOxkWTymURN=_ZgYFaK0xPVbGxf=CGhsLMHU+Q_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="48268221-4E38-4000-B6CB-8F8C37D47261_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] v1.8.2 still held up...<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-07 14:51:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15536.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.8.2 still held up..."</a>
<li><strong>Previous message:</strong> <a href="15534.php">Pritchard Jr., Howard: "Re: [OMPI devel] v1.8.2 still held up..."</a>
<li><strong>In reply to:</strong> <a href="15533.php">Ralph Castain: "[OMPI devel] v1.8.2 still held up..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15536.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.8.2 still held up..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>I will hopefully be able to test Gilles's patch for 4834 on applicable
<br>
systems today or tomorrow.
<br>
<p>So, I can soon answer whether the patch fixes all the problems I reported.
<br>
However, I cannot speak at all to the desirability of the approach relative
<br>
to the build infrastructure.
<br>
I think Jeff may be best qualified to make that judgement.
<br>
<p>-Paul
<br>
<p><p>On Thu, Aug 7, 2014 at 10:55 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hey folks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I *really* need your help to get this release out the door. It remains
</span><br>
<span class="quotelev1">&gt; stuck on two things:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * static linking failure - Gilles has posted a proposed fix, but somebody
</span><br>
<span class="quotelev1">&gt; needs to approve and CMR it. Please see:
</span><br>
<span class="quotelev1">&gt;         <a href="https://svn.open-mpi.org/trac/ompi/ticket/4834">https://svn.open-mpi.org/trac/ompi/ticket/4834</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * fixes to coll/ml that expanded to fixing page alignment in general -
</span><br>
<span class="quotelev1">&gt; someone needs to review/approve it:
</span><br>
<span class="quotelev1">&gt;         <a href="https://svn.open-mpi.org/trac/ompi/ticket/4826">https://svn.open-mpi.org/trac/ompi/ticket/4826</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We also have three outstanding issues that may not make 1.8.2:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * MPI-I/O issues - looks like ROMIO needs some patches, and OMPIO may have
</span><br>
<span class="quotelev1">&gt; an issue:
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/community/lists/users/2014/08/24934.php">http://www.open-mpi.org/community/lists/users/2014/08/24934.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * Siegmar reports another alignment issue on Sparc
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/community/lists/users/2014/07/24869.php">http://www.open-mpi.org/community/lists/users/2014/07/24869.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * Siegmar reports an issue that looks like it relates to handling of
</span><br>
<span class="quotelev1">&gt; boolean MCA params:
</span><br>
<span class="quotelev1">&gt;          <a href="http://www.open-mpi.org/community/lists/users/2014/08/24944.php">http://www.open-mpi.org/community/lists/users/2014/08/24944.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can someone *please* help out with these?
</span><br>
<span class="quotelev1">&gt; Ralph
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15533.php">http://www.open-mpi.org/community/lists/devel/2014/08/15533.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15535/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15536.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.8.2 still held up..."</a>
<li><strong>Previous message:</strong> <a href="15534.php">Pritchard Jr., Howard: "Re: [OMPI devel] v1.8.2 still held up..."</a>
<li><strong>In reply to:</strong> <a href="15533.php">Ralph Castain: "[OMPI devel] v1.8.2 still held up..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15536.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.8.2 still held up..."</a>
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
