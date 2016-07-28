<?
$subject_val = "Re: [OMPI devel] master build fails";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 27 08:18:02 2015" -->
<!-- isoreceived="20151027121802" -->
<!-- sent="Tue, 27 Oct 2015 12:17:26 +0000" -->
<!-- isosent="20151027121726" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] master build fails" -->
<!-- id="9A94CFCE-2CEC-4D75-9E3A-68C28781399B_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAF1Cqj5BvXpnoJD0bftr1vLYzOca8gOVxmLP-xAN8YeK=t47jA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] master build fails<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-27 08:17:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18274.php">Ralph Castain: "Re: [OMPI devel] Compile only one framework/component"</a>
<li><strong>Previous message:</strong> <a href="18272.php">Ralph Castain: "Re: [OMPI devel] master build fails"</a>
<li><strong>In reply to:</strong> <a href="18269.php">Howard Pritchard: "[OMPI devel] master build fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18295.php">Gilles Gouaillardet: "Re: [OMPI devel] master build fails"</a>
<li><strong>Reply:</strong> <a href="18295.php">Gilles Gouaillardet: "Re: [OMPI devel] master build fails"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Blah.  It passed Jenkins.  :-\
<br>
<p>Looks like a simple missing &lt;stdio.h&gt;.  I'll fix.
<br>
<p><p><span class="quotelev1">&gt; On Oct 27, 2015, at 5:07 AM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Folks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Looks like master can't build any more, at least not on cray with --enable-picky option:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- make all -j 8 result_stderr ---
</span><br>
<span class="quotelev1">&gt; keyval_lex.c: In function 'yy_get_next_buffer':
</span><br>
<span class="quotelev1">&gt; keyval_lex.c:751:18: warning: comparison between signed and unsigned integer expressions
</span><br>
<span class="quotelev1">&gt; [-Wsign-compare]
</span><br>
<span class="quotelev1">&gt;    for ( n = 0; n &lt; max_size &amp;&amp; \
</span><br>
<span class="quotelev1">&gt;                   ^
</span><br>
<span class="quotelev1">&gt; keyval_lex.c:1284:3: note: in expansion of macro 'YY_INPUT'
</span><br>
<span class="quotelev1">&gt;    YY_INPUT( (&amp;YY_CURRENT_BUFFER_LVALUE-&gt;yy_ch_buf[number_to_move]),
</span><br>
<span class="quotelev1">&gt; show_help_lex.c: In function 'yy_get_next_buffer':
</span><br>
<span class="quotelev1">&gt; show_help_lex.c:647:18: warning: comparison between signed and unsigned integer expressions
</span><br>
<span class="quotelev1">&gt; [-Wsign-compare]
</span><br>
<span class="quotelev1">&gt;    for ( n = 0; n &lt; max_size &amp;&amp; \
</span><br>
<span class="quotelev1">&gt;                   ^
</span><br>
<span class="quotelev1">&gt; show_help_lex.c:1081:3: note: in expansion of macro 'YY_INPUT'
</span><br>
<span class="quotelev1">&gt;    YY_INPUT( (&amp;YY_CURRENT_BUFFER_LVALUE-&gt;yy_ch_buf[number_to_move]),
</span><br>
<span class="quotelev1">&gt; common_verbs_usnic_fake.c: In function 'fake_driver_init':
</span><br>
<span class="quotelev1">&gt; common_verbs_usnic_fake.c:92:9: error: implicit declaration of function 'sscanf'
</span><br>
<span class="quotelev1">&gt; [-Werror=implicit-function-declaration]
</span><br>
<span class="quotelev1">&gt;      if (sscanf(value, &quot;%i&quot;, &amp;vendor) != 1) {
</span><br>
<span class="quotelev1">&gt; common_verbs_usnic_fake.c:92:9: warning: incompatible implicit declaration of built-in function
</span><br>
<span class="quotelev1">&gt; 'sscanf'
</span><br>
<span class="quotelev1">&gt; cc1: some warnings being treated as errors
</span><br>
<span class="quotelev1">&gt; make[2]: *** [libmca_common_verbs_usnic_la-common_verbs_usnic_fake.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Howard
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18269.php">http://www.open-mpi.org/community/lists/devel/2015/10/18269.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18274.php">Ralph Castain: "Re: [OMPI devel] Compile only one framework/component"</a>
<li><strong>Previous message:</strong> <a href="18272.php">Ralph Castain: "Re: [OMPI devel] master build fails"</a>
<li><strong>In reply to:</strong> <a href="18269.php">Howard Pritchard: "[OMPI devel] master build fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18295.php">Gilles Gouaillardet: "Re: [OMPI devel] master build fails"</a>
<li><strong>Reply:</strong> <a href="18295.php">Gilles Gouaillardet: "Re: [OMPI devel] master build fails"</a>
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
