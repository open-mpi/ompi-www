<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Oct 29 01:01:14 2005" -->
<!-- isoreceived="20051029060114" -->
<!-- sent="Sat, 29 Oct 2005 01:01:08 -0500" -->
<!-- isosent="20051029060108" -->
<!-- name="Troy Benjegerdes" -->
<!-- email="hozer_at_[hidden]" -->
<!-- subject="Re:  ppc64 linux bustage?" -->
<!-- id="20051029060107.GR3275_at_kalmia.hozed.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20051025065728.GA26025_at_iam.uni-bonn.de" -->
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
<strong>From:</strong> Troy Benjegerdes (<em>hozer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-29 01:01:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0506.php">Ralf Wildenhues: "Re:  ppc64 linux bustage?"</a>
<li><strong>Previous message:</strong> <a href="0504.php">Jeff Squyres: "Re:  FreeBSD port committed"</a>
<li><strong>In reply to:</strong> <a href="0492.php">Ralf Wildenhues: "Re:  ppc64 linux bustage?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0506.php">Ralf Wildenhues: "Re:  ppc64 linux bustage?"</a>
<li><strong>Reply:</strong> <a href="0506.php">Ralf Wildenhues: "Re:  ppc64 linux bustage?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev2">&gt; &gt; succeeded.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you don't have the exact output any more: could you please rerun
</span><br>
<span class="quotelev1">&gt; autogen.sh and post it?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Do you have a debian system you can remove the libltdl3 and libltdl3-dev
</span><br>
<span class="quotelev2">&gt; &gt; packages?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, I could try that tonight (my timezone), but..
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; It seems like there's some strange depenency on this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't either think this is the cause of the error.  What is the
</span><br>
<span class="quotelev1">&gt; libtoolize version autogen.sh picks up?
</span><br>
<p>see 
<br>
<p><a href="http://scl.ameslab.gov/~troy/ompi_debug/genlog-nolibltdl3">http://scl.ameslab.gov/~troy/ompi_debug/genlog-nolibltdl3</a>
<br>
<a href="http://scl.ameslab.gov/~troy/ompi_debug/genlog-with-libltdl3">http://scl.ameslab.gov/~troy/ompi_debug/genlog-with-libltdl3</a>
<br>
<p>(Or maybe just this diff)
<br>
<p>diff -u genlog-nolibltdl3 genlog-with-libltdl3
<br>
--- genlog-nolibltdl3   2005-10-29 00:42:53.000000000 -0500
<br>
+++ genlog-with-libltdl3        2005-10-29 00:49:55.000000000 -0500
<br>
@@ -771,10 +771,8 @@
<br>
&nbsp;[Running] autoheader
<br>
&nbsp;[Running] autoconf
<br>
&nbsp;[Running] libtoolize --automake --copy --ltdl
<br>
-ls: libltdl/*: No such file or directory
<br>
&nbsp;Adjusting libltdl for OMPI :-(
<br>
&nbsp;&nbsp;&nbsp;-- patching for argz bugfix in libtool 1.5
<br>
-grep: ltdl.c: No such file or directory
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;==&gt; your libtool doesn't need this! yay!
<br>
&nbsp;&nbsp;&nbsp;-- patching configure for broken -c/-o compiler test
<br>
&nbsp;[Running] automake --foreign -a --copy --include-deps
<br>
<p><p>p5l2:/usr/src/ompi-trunk-debug# dpkg -l libtool
<br>
libtool        1.5.20-2       Generic library support script
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0506.php">Ralf Wildenhues: "Re:  ppc64 linux bustage?"</a>
<li><strong>Previous message:</strong> <a href="0504.php">Jeff Squyres: "Re:  FreeBSD port committed"</a>
<li><strong>In reply to:</strong> <a href="0492.php">Ralf Wildenhues: "Re:  ppc64 linux bustage?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0506.php">Ralf Wildenhues: "Re:  ppc64 linux bustage?"</a>
<li><strong>Reply:</strong> <a href="0506.php">Ralf Wildenhues: "Re:  ppc64 linux bustage?"</a>
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
