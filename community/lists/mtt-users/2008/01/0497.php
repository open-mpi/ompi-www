<?
$subject_val = "[MTT users] 'whatami' patch";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 29 12:56:57 2008" -->
<!-- isoreceived="20080129175657" -->
<!-- sent="Tue, 29 Jan 2008 12:56:56 -0500" -->
<!-- isosent="20080129175656" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="[MTT users] 'whatami' patch" -->
<!-- id="479F68E8.4040600_at_cs.indiana.edu" -->
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
<strong>Subject:</strong> [MTT users] 'whatami' patch<br>
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-29 12:56:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0498.php">Jeff Squyres: "Re: [MTT users] 'whatami' patch"</a>
<li><strong>Previous message:</strong> <a href="0496.php">Josh Hursey: "Re: [MTT users] Reporter problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0498.php">Jeff Squyres: "Re: [MTT users] 'whatami' patch"</a>
<li><strong>Reply:</strong> <a href="0498.php">Jeff Squyres: "Re: [MTT users] 'whatami' patch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>The 'whatami' script does not recognize our new cluster. Attached is a 
<br>
patch to make it work.
<br>
<p>For reference, the relevant line in /etc/issue is:
<br>
Red Hat Enterprise Linux Server release 5 (Tikanga)
<br>
<p><p>Thanks,
<br>
<p>Tim
<br>
<p>
<p>
Index: client/whatami/whatami
<br>
===================================================================
<br>
--- client/whatami/whatami	(revision 1142)
<br>
+++ client/whatami/whatami	(working copy)
<br>
@@ -189,6 +189,10 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#distro=${distro_brand}${distro_version}_${sub_distro}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;distro=${distro_brand}${distro_version}
<br>
&nbsp;
<br>
+                elif [ -n &quot;`egrep 'Red Hat Enterprise Linux Server release [0-9]*' /etc/issue`&quot; ]; then
<br>
+                        distro_brand=rhel_server
<br>
+                        distro_version=`grep 'Red Hat' /etc/issue | sed -e 's/Red Hat Enterprise Linux Server release \([0-9]*\).*/\1/' `
<br>
+                        distro=${distro_brand}${distro_version} 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elif [ -n &quot;`egrep 'Cray Rocks Linux release 1.3' /etc/issue`&quot; ]; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;distro=rh73
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0498.php">Jeff Squyres: "Re: [MTT users] 'whatami' patch"</a>
<li><strong>Previous message:</strong> <a href="0496.php">Josh Hursey: "Re: [MTT users] Reporter problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0498.php">Jeff Squyres: "Re: [MTT users] 'whatami' patch"</a>
<li><strong>Reply:</strong> <a href="0498.php">Jeff Squyres: "Re: [MTT users] 'whatami' patch"</a>
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
