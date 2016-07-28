<?
$subject_val = "[OMPI devel] flex warning from flex-2.5.4";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb 19 22:47:43 2012" -->
<!-- isoreceived="20120220034743" -->
<!-- sent="Sun, 19 Feb 2012 19:47:25 -0800" -->
<!-- isosent="20120220034725" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] flex warning from flex-2.5.4" -->
<!-- id="4F41C24D.9030309_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] flex warning from flex-2.5.4<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-19 22:47:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10492.php">Ralph Castain: "Re: [OMPI devel] flex warning from flex-2.5.4"</a>
<li><strong>Previous message:</strong> <a href="10490.php">Paul Hargrove: "Re: [OMPI devel] Solaris/SOS build failure in trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10492.php">Ralph Castain: "Re: [OMPI devel] flex warning from flex-2.5.4"</a>
<li><strong>Reply:</strong> <a href="10492.php">Ralph Castain: "Re: [OMPI devel] flex warning from flex-2.5.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've not checked any other systems, but building the trunk on OpenBSD 
<br>
and FreeBSD (w/ flex-2.5.4) I see the following:
<br>
<span class="quotelev1">&gt;   LEX    show_help_lex.c
</span><br>
<span class="quotelev1">&gt; &quot;[srcdir]/opal/util/show_help_lex.l&quot;, line 65: warning, dangerous 
</span><br>
<span class="quotelev1">&gt; trailing context
</span><br>
<p>I found this message in the flex documentation, and it mentions that the 
<br>
POSIX draft for LEX leaves such cases undefined.
<br>
<a href="http://flex.sourceforge.net/manual/Limitations.html">http://flex.sourceforge.net/manual/Limitations.html</a>
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10492.php">Ralph Castain: "Re: [OMPI devel] flex warning from flex-2.5.4"</a>
<li><strong>Previous message:</strong> <a href="10490.php">Paul Hargrove: "Re: [OMPI devel] Solaris/SOS build failure in trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10492.php">Ralph Castain: "Re: [OMPI devel] flex warning from flex-2.5.4"</a>
<li><strong>Reply:</strong> <a href="10492.php">Ralph Castain: "Re: [OMPI devel] flex warning from flex-2.5.4"</a>
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
