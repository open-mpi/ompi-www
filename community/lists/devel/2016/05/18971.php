<?
$subject_val = "Re: [OMPI devel] [v2.x] printf format warnings w/ -m32";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 11 13:24:23 2016" -->
<!-- isoreceived="20160511172423" -->
<!-- sent="Wed, 11 May 2016 10:24:14 -0700" -->
<!-- isosent="20160511172414" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [v2.x] printf format warnings w/ -m32" -->
<!-- id="CAAvDA15vR5tEe=ozYk7tpzP1wE6_QsA8zdfdbyaBVSkjW1TNCw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="67E7E6C8-7EA2-4FF0-B277-70A09D11A4E8_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [v2.x] printf format warnings w/ -m32<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-11 13:24:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18972.php">Jeff Squyres (jsquyres): "[OMPI devel] Github pricing plan changes announced today"</a>
<li><strong>Previous message:</strong> <a href="18970.php">Ralph Castain: "Re: [OMPI devel] [v2.x] printf format warnings w/ -m32"</a>
<li><strong>In reply to:</strong> <a href="18970.php">Ralph Castain: "Re: [OMPI devel] [v2.x] printf format warnings w/ -m32"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If there is a size_t vs PRIsize_t mismatch then it is probably a result of
<br>
less-than-perfect integration in the Clang private headers (stddef.h in
<br>
particular).
<br>
I will make a point not to trust Clang for this class of warning in the
<br>
future.
<br>
<p>What about the sharedfp warnings such as the following:
<br>
<p>/scratch/phargrov/OMPI/openmpi-v2.x-dev-1410-g81e0924-linux-x86_64-clang-m32/openmpi-gitclone/ompi/mca/sharedfp/lockedfile/sharedfp_lockedfile_seek.c:68:113:
<br>
warning: format specifies type 'long long' but the argument has type 'long'
<br>
[-Wformat]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_output(0,&quot;sharedfp_lockedfile_seek - MPI_SEEK_SET,
<br>
offset must be &gt; 0, got offset=%lld.\n&quot;,offset);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;~~~~     ^~~~~~
<br>
<p>In that case the &quot;%lld&quot; is 64-bits (long long) but the argument is only
<br>
32-bits (long).
<br>
<p>-Paul
<br>
<p>On Wed, May 11, 2016 at 9:42 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I took a look at this, and the problem isn&#226;&#128;&#153;t in the print statements. The
</span><br>
<span class="quotelev1">&gt; problem is that PRIsize_t is being incorrectly set to &#226;&#128;&#156;unsigned long&#226;&#128;&#157;
</span><br>
<span class="quotelev1">&gt; instead of something correct for the -m32 directive in that environment
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 6, 2016, at 9:48 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The 96 printf format warnings in the attachment come from an Linux/x86-64
</span><br>
<span class="quotelev1">&gt; system w/ Clang and &quot;-m32&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Some of the warnings are &quot;size_t&quot; vs &quot;unigned long&quot;, which is harmless
</span><br>
<span class="quotelev1">&gt; since both are 32-bits.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, there are several cases in sharedfp/sm where a 64-bit (long long)
</span><br>
<span class="quotelev1">&gt; format has a 32-bit (long) argument.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; &lt;format_warn_m32.txt&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18932.php">http://www.open-mpi.org/community/lists/devel/2016/05/18932.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18970.php">http://www.open-mpi.org/community/lists/devel/2016/05/18970.php</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18971/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18972.php">Jeff Squyres (jsquyres): "[OMPI devel] Github pricing plan changes announced today"</a>
<li><strong>Previous message:</strong> <a href="18970.php">Ralph Castain: "Re: [OMPI devel] [v2.x] printf format warnings w/ -m32"</a>
<li><strong>In reply to:</strong> <a href="18970.php">Ralph Castain: "Re: [OMPI devel] [v2.x] printf format warnings w/ -m32"</a>
<!-- nextthread="start" -->
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
