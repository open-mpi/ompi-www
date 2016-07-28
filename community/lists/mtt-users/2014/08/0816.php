<?
$subject_val = "[MTT users] MTT on PPC64";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  7 10:49:44 2014" -->
<!-- isoreceived="20140807144944" -->
<!-- sent="Thu, 7 Aug 2014 16:49:39 +0200" -->
<!-- isosent="20140807144939" -->
<!-- name="Adrian Reber" -->
<!-- email="adrian_at_[hidden]" -->
<!-- subject="[MTT users] MTT on PPC64" -->
<!-- id="20140807144939.GJ6715_at_lisas.de" -->
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
<strong>Subject:</strong> [MTT users] MTT on PPC64<br>
<strong>From:</strong> Adrian Reber (<em>adrian_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-07 10:49:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2014/09/0817.php">Chrien, Natalie E: "[MTT users] MTT Account Request"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2014/06/0815.php">Jeff Squyres (jsquyres): "Re: [MTT users] To run MTT on our cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2014/09/0819.php">Jeff Squyres (jsquyres): "Re: [MTT users] MTT on PPC64"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2014/09/0819.php">Jeff Squyres (jsquyres): "Re: [MTT users] MTT on PPC64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I was trying to run MTT on ppc64 and it complained that I need to write
<br>
a patch. Since the name 'Fedora Core' does not exist anymore (since
<br>
Fedora 7) I have following patch for MTT:
<br>
<p>diff --git a/client/whatami/whatami b/client/whatami/whatami
<br>
index b4c50f5..aa275f0 100755
<br>
--- a/client/whatami/whatami
<br>
+++ b/client/whatami/whatami
<br>
@@ -295,9 +295,9 @@ get_linux_type()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elif [ -n &quot;`egrep 'Tao Linux release 1 ' /etc/issue`&quot; ]; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;distro=tao_1.0
<br>
&nbsp;
<br>
-                elif [ -n &quot;`egrep 'Fedora Core ' /etc/issue`&quot; ]; then
<br>
+                elif [ -n &quot;`egrep 'Fedora ' /etc/issue`&quot; ]; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;distro_brand=fc
<br>
-                        distro_version=`grep 'Fedora Core ' /etc/issue | sed -e 's/Fedora Core release \([0-9]*\).*/\1/' `
<br>
+                        distro_version=`grep 'Fedora ' /etc/issue | sed -e 's/Fedora release \([0-9]*\).*/\1/' `
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;distro=${distro_brand}${distro_version}
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elif [ -n &quot;`egrep 'White Box Enterprise Linux release 3.0' /etc/issue`&quot; ]; then
<br>
<p><p>Is there interest to get my ppc64 results submitted
<br>
into the mtt database? And which tests should I be running.
<br>
Based on the .ini I got from Christoph I am now running
<br>
<p><a href="http://svn.open-mpi.org/svn/ompi-tests/trunk/mpi_test_suite/">http://svn.open-mpi.org/svn/ompi-tests/trunk/mpi_test_suite/</a>
<br>
<p>and 
<br>
<p><a href="https://svn.open-mpi.org/svn/ompi-tests/trunk/intel_tests">https://svn.open-mpi.org/svn/ompi-tests/trunk/intel_tests</a>
<br>
<p>anything else?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adrian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2014/09/0817.php">Chrien, Natalie E: "[MTT users] MTT Account Request"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2014/06/0815.php">Jeff Squyres (jsquyres): "Re: [MTT users] To run MTT on our cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2014/09/0819.php">Jeff Squyres (jsquyres): "Re: [MTT users] MTT on PPC64"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2014/09/0819.php">Jeff Squyres (jsquyres): "Re: [MTT users] MTT on PPC64"</a>
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
