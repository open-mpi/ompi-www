<?
$subject_val = "Re: [OMPI devel] master build fails";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 27 20:03:20 2015" -->
<!-- isoreceived="20151028000320" -->
<!-- sent="Wed, 28 Oct 2015 09:03:15 +0900" -->
<!-- isosent="20151028000315" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] master build fails" -->
<!-- id="563010C3.1080500_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="9A94CFCE-2CEC-4D75-9E3A-68C28781399B_at_cisco.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-27 20:03:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18296.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Open MPI autogen.pl in tarball"</a>
<li><strong>Previous message:</strong> <a href="18294.php">Ralph Castain: "Re: [OMPI devel] PMIX deadlock"</a>
<li><strong>In reply to:</strong> <a href="18273.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] master build fails"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW
<br>
<p>before Jeff fixed that, build was successful on my RHEL7 box
<br>
(stdio.h is included from verbs_exp.h that is included from verbs.h)
<br>
but failed on my RHEL6 box
<br>
(verbs.h does *not* include stdio.h)
<br>
<p>so there was some room for Jenkins not to fail
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 10/27/2015 9:17 PM, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; Blah.  It passed Jenkins.  :-\
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Looks like a simple missing &lt;stdio.h&gt;.  I'll fix.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 27, 2015, at 5:07 AM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Folks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Looks like master can't build any more, at least not on cray with --enable-picky option:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- make all -j 8 result_stderr ---
</span><br>
<span class="quotelev2">&gt;&gt; keyval_lex.c: In function 'yy_get_next_buffer':
</span><br>
<span class="quotelev2">&gt;&gt; keyval_lex.c:751:18: warning: comparison between signed and unsigned integer expressions
</span><br>
<span class="quotelev2">&gt;&gt; [-Wsign-compare]
</span><br>
<span class="quotelev2">&gt;&gt;     for ( n = 0; n &lt; max_size &amp;&amp; \
</span><br>
<span class="quotelev2">&gt;&gt;                    ^
</span><br>
<span class="quotelev2">&gt;&gt; keyval_lex.c:1284:3: note: in expansion of macro 'YY_INPUT'
</span><br>
<span class="quotelev2">&gt;&gt;     YY_INPUT( (&amp;YY_CURRENT_BUFFER_LVALUE-&gt;yy_ch_buf[number_to_move]),
</span><br>
<span class="quotelev2">&gt;&gt; show_help_lex.c: In function 'yy_get_next_buffer':
</span><br>
<span class="quotelev2">&gt;&gt; show_help_lex.c:647:18: warning: comparison between signed and unsigned integer expressions
</span><br>
<span class="quotelev2">&gt;&gt; [-Wsign-compare]
</span><br>
<span class="quotelev2">&gt;&gt;     for ( n = 0; n &lt; max_size &amp;&amp; \
</span><br>
<span class="quotelev2">&gt;&gt;                    ^
</span><br>
<span class="quotelev2">&gt;&gt; show_help_lex.c:1081:3: note: in expansion of macro 'YY_INPUT'
</span><br>
<span class="quotelev2">&gt;&gt;     YY_INPUT( (&amp;YY_CURRENT_BUFFER_LVALUE-&gt;yy_ch_buf[number_to_move]),
</span><br>
<span class="quotelev2">&gt;&gt; common_verbs_usnic_fake.c: In function 'fake_driver_init':
</span><br>
<span class="quotelev2">&gt;&gt; common_verbs_usnic_fake.c:92:9: error: implicit declaration of function 'sscanf'
</span><br>
<span class="quotelev2">&gt;&gt; [-Werror=implicit-function-declaration]
</span><br>
<span class="quotelev2">&gt;&gt;       if (sscanf(value, &quot;%i&quot;, &amp;vendor) != 1) {
</span><br>
<span class="quotelev2">&gt;&gt; common_verbs_usnic_fake.c:92:9: warning: incompatible implicit declaration of built-in function
</span><br>
<span class="quotelev2">&gt;&gt; 'sscanf'
</span><br>
<span class="quotelev2">&gt;&gt; cc1: some warnings being treated as errors
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [libmca_common_verbs_usnic_la-common_verbs_usnic_fake.lo] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Howard
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18269.php">http://www.open-mpi.org/community/lists/devel/2015/10/18269.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18296.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Open MPI autogen.pl in tarball"</a>
<li><strong>Previous message:</strong> <a href="18294.php">Ralph Castain: "Re: [OMPI devel] PMIX deadlock"</a>
<li><strong>In reply to:</strong> <a href="18273.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] master build fails"</a>
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
