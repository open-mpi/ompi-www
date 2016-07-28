<?
$subject_val = "Re: [OMPI devel] 'make re-install' : remove 'ortecc' symlink also";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 14 17:38:41 2013" -->
<!-- isoreceived="20130714213841" -->
<!-- sent="Sun, 14 Jul 2013 23:38:36 +0200" -->
<!-- isosent="20130714213836" -->
<!-- name="Vasiliy" -->
<!-- email="testtest_2005_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 'make re-install' : remove 'ortecc' symlink also" -->
<!-- id="CAHYyVz5c+NK6=3CAQ5WjN+yeeYVDJVRG3prrAhWo73FuB16VhA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Vasiliy (<em>testtest_2005_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-14 17:38:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12603.php">George Bosilca: "Re: [OMPI devel] [bug] One-sided communication with a duplicated datatype"</a>
<li><strong>Previous message:</strong> <a href="12601.php">Vasiliy: "[OMPI devel] 'make re-install' : remove 'ortecc' symlink also"</a>
<li><strong>In reply to:</strong> <a href="12601.php">Vasiliy: "[OMPI devel] 'make re-install' : remove 'ortecc' symlink also"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12678.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 'make re-install' : remove 'ortecc' symlink also"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
also 'opalcc', and others:
<br>
<p>make[4]: Entering directory
<br>
'/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/opal/tools/wrappers'
<br>
(cd /usr/bin; rm -f opalcc.exe; ln -s opal_wrapper opalcc)
<br>
ln: failed to create symbolic link `opalcc': File exists
<br>
Makefile:1972: recipe for target 'install-exec-hook' failed
<br>
...
<br>
<p>On Sun, Jul 14, 2013 at 11:35 PM, Vasiliy &lt;testtest_2005_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Makefile: please, remove/check for 'ortecc' symlink before proceeding
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12603.php">George Bosilca: "Re: [OMPI devel] [bug] One-sided communication with a duplicated datatype"</a>
<li><strong>Previous message:</strong> <a href="12601.php">Vasiliy: "[OMPI devel] 'make re-install' : remove 'ortecc' symlink also"</a>
<li><strong>In reply to:</strong> <a href="12601.php">Vasiliy: "[OMPI devel] 'make re-install' : remove 'ortecc' symlink also"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12678.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 'make re-install' : remove 'ortecc' symlink also"</a>
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
