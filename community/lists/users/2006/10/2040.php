<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 23 19:14:03 2006" -->
<!-- isoreceived="20061023231403" -->
<!-- sent="Mon, 23 Oct 2006 19:14:06 -0400" -->
<!-- isosent="20061023231406" -->
<!-- name="Joe Landman" -->
<!-- email="landman_at_[hidden]" -->
<!-- subject="[OMPI users] quick patch to buildrpm.sh to enable building on SuSE" -->
<!-- id="453D4CBE.8050404_at_scalableinformatics.com" -->
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
<strong>From:</strong> Joe Landman (<em>landman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-23 19:14:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2041.php">Jeff Squyres: "Re: [OMPI users] quick patch to buildrpm.sh to enable building on SuSE"</a>
<li><strong>Previous message:</strong> <a href="2039.php">Lisandro Dalcin: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2041.php">Jeff Squyres: "Re: [OMPI users] quick patch to buildrpm.sh to enable building on SuSE"</a>
<li><strong>Reply:</strong> <a href="2041.php">Jeff Squyres: "Re: [OMPI users] quick patch to buildrpm.sh to enable building on SuSE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
--- buildrpm.sh 2006-10-23 17:59:33.729764603 -0400
<br>
+++ buildrpm-fixed.sh   2006-10-23 17:58:33.145635240 -0400
<br>
@@ -11,6 +11,7 @@
<br>
&nbsp;#
<br>
<p>&nbsp;prefix=&quot;/opt/openmpi&quot;
<br>
+#/1.1.2/pgi&quot;
<br>
&nbsp;specfile=&quot;openmpi.spec&quot;
<br>
&nbsp;rpmbuild_options=&quot;--define 'mflags -j4'&quot;
<br>
&nbsp;configure_options=
<br>
@@ -22,10 +23,10 @@
<br>
&nbsp;# Some distro's will attempt to force using bizarre, custom compiler
<br>
&nbsp;# names (e.g., i386-redhat-linux-gnu-gcc).  So hardwire them to use
<br>
&nbsp;# &quot;normal&quot; names.
<br>
-#export CC=gcc
<br>
-#export CXX=g++
<br>
-#export F77=f77
<br>
-#export FC=
<br>
+#export CC=pgcc
<br>
+#export CXX=pgCC
<br>
+#export F77=pgf77
<br>
+#export FC=pgf90
<br>
<p>&nbsp;# Note that this script can build one or all of the following RPMs:
<br>
&nbsp;# SRPM, all-in-one, multiple.
<br>
@@ -35,7 +36,7 @@
<br>
&nbsp;# If you want to build the &quot;all in one RPM&quot;, put &quot;yes&quot; here
<br>
&nbsp;build_single=no
<br>
&nbsp;# If you want to build the &quot;multiple&quot; RPMs, put &quot;yes&quot; here
<br>
-build_multiple=no
<br>
+build_multiple=yes
<br>
<p>&nbsp;#########################################################################
<br>
&nbsp;# You should not need to change anything below this line
<br>
@@ -109,6 +110,9 @@
<br>
&nbsp;elif test -d /usr/src/RPM; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;need_root=1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rpmtopdir=&quot;/usr/src/RPM&quot;
<br>
+elif test -d /usr/src/packages; then
<br>
+    need_root=1
<br>
+    rpmtopdir=&quot;/usr/src/packages&quot;
<br>
&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;need_root=1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rpmtopdir=&quot;/usr/src/redhat&quot;
<br>
<p><p><p><pre>
-- 
Joe Landman
landman |at| scalableinformatics |dot| com
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2041.php">Jeff Squyres: "Re: [OMPI users] quick patch to buildrpm.sh to enable building on SuSE"</a>
<li><strong>Previous message:</strong> <a href="2039.php">Lisandro Dalcin: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2041.php">Jeff Squyres: "Re: [OMPI users] quick patch to buildrpm.sh to enable building on SuSE"</a>
<li><strong>Reply:</strong> <a href="2041.php">Jeff Squyres: "Re: [OMPI users] quick patch to buildrpm.sh to enable building on SuSE"</a>
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
