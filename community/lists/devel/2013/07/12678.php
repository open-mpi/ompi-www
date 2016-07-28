<?
$subject_val = "Re: [OMPI devel] 'make re-install' : remove 'ortecc' symlink also";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 23 08:13:51 2013" -->
<!-- isoreceived="20130723121351" -->
<!-- sent="Tue, 23 Jul 2013 12:13:45 +0000" -->
<!-- isosent="20130723121345" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 'make re-install' : remove 'ortecc' symlink also" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F746750_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAHYyVz68or3A1WEr-Qmnyp2KPLxUvfY4oWkK5ZhexZTmc9C8_g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 'make re-install' : remove 'ortecc' symlink also<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-23 08:13:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12679.php">Joshua Ladd: "[OMPI devel] OpenSHMEM up on bitbucket"</a>
<li><strong>Previous message:</strong> <a href="12677.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] basename: a faulty warning 'extra operand --test-name' in tests causes test-driver to fail"</a>
<li><strong>In reply to:</strong> <a href="12601.php">Vasiliy: "[OMPI devel] 'make re-install' : remove 'ortecc' symlink also"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmm, I think we do, but it looks like we might have done it wrong for OSs that have an $(EXEEXT), namely Windows.  Can you test this trunk patch and see if it fixes the issue?
<br>
<p><p><p>On Jul 14, 2013, at 5:35 PM, Vasiliy &lt;testtest_2005_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Makefile: please, remove/check for 'ortecc' symlink before proceeding
</span><br>
<span class="quotelev1">&gt; with install
</span><br>
<span class="quotelev1">&gt; &lt;code&gt;
</span><br>
<span class="quotelev1">&gt; make[4]: Entering directory
</span><br>
<span class="quotelev1">&gt; '/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/orte/tools/wrappers'
</span><br>
<span class="quotelev1">&gt; test -z &quot;/usr/bin&quot; || /usr/bin/mkdir -p &quot;/usr/bin&quot;
</span><br>
<span class="quotelev1">&gt; make  install-data-hook
</span><br>
<span class="quotelev1">&gt; (cd /usr/bin; rm -f ortecc.exe; ln -s opal_wrapper ortecc)
</span><br>
<span class="quotelev1">&gt; ln: failed to create symbolic link `ortecc': File exists
</span><br>
<span class="quotelev1">&gt; make[4]: Entering directory
</span><br>
<span class="quotelev1">&gt; '/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/orte/tools/wrappers'
</span><br>
<span class="quotelev1">&gt; make[4]: Nothing to be done for 'install-data-hook'.
</span><br>
<span class="quotelev1">&gt; make[4]: Leaving directory
</span><br>
<span class="quotelev1">&gt; '/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/orte/tools/wrappers'
</span><br>
<span class="quotelev1">&gt; Makefile:1668: recipe for target 'install-exec-hook-always' failed
</span><br>
<span class="quotelev1">&gt; &lt;/code&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>

</pre>
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12678/wrappers.diff">wrappers.diff</a>
</ul>
<!-- attachment="wrappers.diff" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12679.php">Joshua Ladd: "[OMPI devel] OpenSHMEM up on bitbucket"</a>
<li><strong>Previous message:</strong> <a href="12677.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] basename: a faulty warning 'extra operand --test-name' in tests causes test-driver to fail"</a>
<li><strong>In reply to:</strong> <a href="12601.php">Vasiliy: "[OMPI devel] 'make re-install' : remove 'ortecc' symlink also"</a>
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
