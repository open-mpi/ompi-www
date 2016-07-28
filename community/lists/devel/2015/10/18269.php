<?
$subject_val = "[OMPI devel] master build fails";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 27 08:07:06 2015" -->
<!-- isoreceived="20151027120706" -->
<!-- sent="Tue, 27 Oct 2015 06:07:02 -0600" -->
<!-- isosent="20151027120702" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="[OMPI devel] master build fails" -->
<!-- id="CAF1Cqj5BvXpnoJD0bftr1vLYzOca8gOVxmLP-xAN8YeK=t47jA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] master build fails<br>
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-27 08:07:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18270.php">Federico Reghenzani: "[OMPI devel] Compile only one framework/component"</a>
<li><strong>Previous message:</strong> <a href="18268.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] Checkpoint/restart + migration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18272.php">Ralph Castain: "Re: [OMPI devel] master build fails"</a>
<li><strong>Reply:</strong> <a href="18272.php">Ralph Castain: "Re: [OMPI devel] master build fails"</a>
<li><strong>Reply:</strong> <a href="18273.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] master build fails"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Folks,
<br>
<p>Looks like master can't build any more, at least not on cray with
<br>
--enable-picky option:
<br>
<p>-- make all -j 8 result_stderr ---
<br>
keyval_lex.c: In function 'yy_get_next_buffer':
<br>
keyval_lex.c:751:18: warning: comparison between signed and unsigned
<br>
integer expressions
<br>
[-Wsign-compare]
<br>
&nbsp;&nbsp;&nbsp;for ( n = 0; n &lt; max_size &amp;&amp; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
keyval_lex.c:1284:3: note: in expansion of macro 'YY_INPUT'
<br>
&nbsp;&nbsp;&nbsp;YY_INPUT( (&amp;YY_CURRENT_BUFFER_LVALUE-&gt;yy_ch_buf[number_to_move]),
<br>
show_help_lex.c: In function 'yy_get_next_buffer':
<br>
show_help_lex.c:647:18: warning: comparison between signed and
<br>
unsigned integer expressions
<br>
[-Wsign-compare]
<br>
&nbsp;&nbsp;&nbsp;for ( n = 0; n &lt; max_size &amp;&amp; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
show_help_lex.c:1081:3: note: in expansion of macro 'YY_INPUT'
<br>
&nbsp;&nbsp;&nbsp;YY_INPUT( (&amp;YY_CURRENT_BUFFER_LVALUE-&gt;yy_ch_buf[number_to_move]),
<br>
common_verbs_usnic_fake.c: In function 'fake_driver_init':
<br>
common_verbs_usnic_fake.c:92:9: error: implicit declaration of function 'sscanf'
<br>
[-Werror=implicit-function-declaration]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (sscanf(value, &quot;%i&quot;, &amp;vendor) != 1) {
<br>
common_verbs_usnic_fake.c:92:9: warning: incompatible implicit
<br>
declaration of built-in function
<br>
'sscanf'
<br>
cc1: some warnings being treated as errors
<br>
make[2]: *** [libmca_common_verbs_usnic_la-common_verbs_usnic_fake.lo] Error 1
<br>
make[1]: *** [all-recursive] Error 1
<br>
make: *** [all-recursive] Error 1
<br>
<p><p>Howard
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18269/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18270.php">Federico Reghenzani: "[OMPI devel] Compile only one framework/component"</a>
<li><strong>Previous message:</strong> <a href="18268.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] Checkpoint/restart + migration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18272.php">Ralph Castain: "Re: [OMPI devel] master build fails"</a>
<li><strong>Reply:</strong> <a href="18272.php">Ralph Castain: "Re: [OMPI devel] master build fails"</a>
<li><strong>Reply:</strong> <a href="18273.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] master build fails"</a>
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
