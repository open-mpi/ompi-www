<?
$subject_val = "[MTT users] Another whatami patch";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Nov 22 08:48:30 2014" -->
<!-- isoreceived="20141122134830" -->
<!-- sent="Sat, 22 Nov 2014 14:48:29 +0100" -->
<!-- isosent="20141122134829" -->
<!-- name="Adrian Reber" -->
<!-- email="adrian_at_[hidden]" -->
<!-- subject="[MTT users] Another whatami patch" -->
<!-- id="20141122134829.GU8789_at_lisas.de" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [MTT users] Another whatami patch<br>
<strong>From:</strong> Adrian Reber (<em>adrian_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-22 08:48:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0826.php">Jeff Squyres (jsquyres): "Re: [MTT users] Another whatami patch"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2014/10/0824.php">Jeff Squyres (jsquyres): "Re: [MTT users] Reporting results from offline runs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0826.php">Jeff Squyres (jsquyres): "Re: [MTT users] Another whatami patch"</a>
<li><strong>Reply:</strong> <a href="0826.php">Jeff Squyres (jsquyres): "Re: [MTT users] Another whatami patch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Running on MTT on CentOS 6.x gives me:
<br>
<p>linux-unknown_linux_type_please_send_us_a_patch-x86_64
<br>
<p>Following patch fixes it:
<br>
<p>diff --git a/client/whatami/whatami b/client/whatami/whatami
<br>
index 7819490..bad088f 100755
<br>
--- a/client/whatami/whatami
<br>
+++ b/client/whatami/whatami
<br>
@@ -236,8 +236,9 @@ get_linux_type()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elif [ -n &quot;`egrep 'SGI ProPack 3' /etc/issue`&quot; ]; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;distro=rhel3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
-                elif [ -n &quot;`egrep 'CentOS release 4.[0-9]' /etc/issue`&quot; ]; then
<br>
-                        distro=rhel4
<br>
+                elif [ -n &quot;`egrep 'CentOS release [0-9].[0-9]' /etc/issue`&quot; ]; then
<br>
+                        distro_ver=&quot;`grep 'CentOS' /etc/issue | sed -e 's/.*release \([0-9]*\.[0-9]*\).*/\1/'`&quot;
<br>
+                        distro=rhel$distro_ver
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elif [ -n &quot;`egrep 'SuSE SLES 8' /etc/issue`&quot; ]; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;distro=sles8
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adrian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0826.php">Jeff Squyres (jsquyres): "Re: [MTT users] Another whatami patch"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2014/10/0824.php">Jeff Squyres (jsquyres): "Re: [MTT users] Reporting results from offline runs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0826.php">Jeff Squyres (jsquyres): "Re: [MTT users] Another whatami patch"</a>
<li><strong>Reply:</strong> <a href="0826.php">Jeff Squyres (jsquyres): "Re: [MTT users] Another whatami patch"</a>
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
