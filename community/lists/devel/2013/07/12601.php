<?
$subject_val = "[OMPI devel] 'make re-install' : remove 'ortecc' symlink also";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 14 17:35:34 2013" -->
<!-- isoreceived="20130714213534" -->
<!-- sent="Sun, 14 Jul 2013 23:35:30 +0200" -->
<!-- isosent="20130714213530" -->
<!-- name="Vasiliy" -->
<!-- email="testtest_2005_at_[hidden]" -->
<!-- subject="[OMPI devel] 'make re-install' : remove 'ortecc' symlink also" -->
<!-- id="CAHYyVz68or3A1WEr-Qmnyp2KPLxUvfY4oWkK5ZhexZTmc9C8_g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] 'make re-install' : remove 'ortecc' symlink also<br>
<strong>From:</strong> Vasiliy (<em>testtest_2005_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-14 17:35:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12602.php">Vasiliy: "Re: [OMPI devel] 'make re-install' : remove 'ortecc' symlink also"</a>
<li><strong>Previous message:</strong> <a href="12600.php">Ralph Castain: "Re: [OMPI devel] RFC: remove opal_trace macro"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12602.php">Vasiliy: "Re: [OMPI devel] 'make re-install' : remove 'ortecc' symlink also"</a>
<li><strong>Reply:</strong> <a href="12602.php">Vasiliy: "Re: [OMPI devel] 'make re-install' : remove 'ortecc' symlink also"</a>
<li><strong>Reply:</strong> <a href="12678.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 'make re-install' : remove 'ortecc' symlink also"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Makefile: please, remove/check for 'ortecc' symlink before proceeding
<br>
with install
<br>
&lt;code&gt;
<br>
make[4]: Entering directory
<br>
'/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/orte/tools/wrappers'
<br>
test -z &quot;/usr/bin&quot; || /usr/bin/mkdir -p &quot;/usr/bin&quot;
<br>
make  install-data-hook
<br>
(cd /usr/bin; rm -f ortecc.exe; ln -s opal_wrapper ortecc)
<br>
ln: failed to create symbolic link `ortecc': File exists
<br>
make[4]: Entering directory
<br>
'/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/orte/tools/wrappers'
<br>
make[4]: Nothing to be done for 'install-data-hook'.
<br>
make[4]: Leaving directory
<br>
'/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/orte/tools/wrappers'
<br>
Makefile:1668: recipe for target 'install-exec-hook-always' failed
<br>
&lt;/code&gt;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12602.php">Vasiliy: "Re: [OMPI devel] 'make re-install' : remove 'ortecc' symlink also"</a>
<li><strong>Previous message:</strong> <a href="12600.php">Ralph Castain: "Re: [OMPI devel] RFC: remove opal_trace macro"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12602.php">Vasiliy: "Re: [OMPI devel] 'make re-install' : remove 'ortecc' symlink also"</a>
<li><strong>Reply:</strong> <a href="12602.php">Vasiliy: "Re: [OMPI devel] 'make re-install' : remove 'ortecc' symlink also"</a>
<li><strong>Reply:</strong> <a href="12678.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 'make re-install' : remove 'ortecc' symlink also"</a>
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
