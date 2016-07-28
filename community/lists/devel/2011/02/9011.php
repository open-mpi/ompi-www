<?
$subject_val = "[OMPI devel] Bug in openmpi-1.5/opal/config/opal_config_asm.m4";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 23 13:04:52 2011" -->
<!-- isoreceived="20110223180452" -->
<!-- sent="Wed, 23 Feb 2011 13:04:44 -0500" -->
<!-- isosent="20110223180444" -->
<!-- name="Jay Fenlason" -->
<!-- email="fenlason_at_[hidden]" -->
<!-- subject="[OMPI devel] Bug in openmpi-1.5/opal/config/opal_config_asm.m4" -->
<!-- id="20110223180443.GD31519_at_redhat.com" -->
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
<strong>Subject:</strong> [OMPI devel] Bug in openmpi-1.5/opal/config/opal_config_asm.m4<br>
<strong>From:</strong> Jay Fenlason (<em>fenlason_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-23 13:04:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9012.php">Barrett, Brian W: "Re: [OMPI devel] Bug in openmpi-1.5/opal/config/opal_config_asm.m4"</a>
<li><strong>Previous message:</strong> <a href="9010.php">Jeff Squyres: "[OMPI devel] Open MPI HG mirror"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9012.php">Barrett, Brian W: "Re: [OMPI devel] Bug in openmpi-1.5/opal/config/opal_config_asm.m4"</a>
<li><strong>Reply:</strong> <a href="9012.php">Barrett, Brian W: "Re: [OMPI devel] Bug in openmpi-1.5/opal/config/opal_config_asm.m4"</a>
<li><strong>Reply:</strong> <a href="9014.php">George Bosilca: "Re: [OMPI devel] Bug in openmpi-1.5/opal/config/opal_config_asm.m4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I was recently handed
<br>
<a href="https://bugzilla.redhat.com/attachment.cgi?id=480307">https://bugzilla.redhat.com/attachment.cgi?id=480307</a>
<br>
for which a kindly GCC expert attached the enclosed patch.  Apparently
<br>
this only causes problems on 32-bit i686 machines, which could by why
<br>
it has gone undetected until now.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- JF
<br>
<p>--- openmpi-1.5/opal/config/opal_config_asm.m4.jj	2010-09-28 23:33:51.000000000 +0200
<br>
+++ openmpi-1.5/opal/config/opal_config_asm.m4	2011-02-23 01:39:21.191433509 +0100
<br>
@@ -885,7 +885,7 @@ AC_DEFUN([OMPI_CONFIG_ASM],[
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_cv_asm_arch=&quot;AMD64&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_ASM_SUPPORT_64BIT=1
<br>
-            OMPI_GCC_INLINE_ASSIGN='&quot;xaddl %1,%0&quot; : &quot;=m&quot;(ret), &quot;+r&quot;(negone)'
<br>
+            OMPI_GCC_INLINE_ASSIGN='&quot;xaddl %1,%0&quot; : &quot;=m&quot;(ret), &quot;+r&quot;(negone) : &quot;m&quot;(ret)'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;;;
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ia64-*)
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9012.php">Barrett, Brian W: "Re: [OMPI devel] Bug in openmpi-1.5/opal/config/opal_config_asm.m4"</a>
<li><strong>Previous message:</strong> <a href="9010.php">Jeff Squyres: "[OMPI devel] Open MPI HG mirror"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9012.php">Barrett, Brian W: "Re: [OMPI devel] Bug in openmpi-1.5/opal/config/opal_config_asm.m4"</a>
<li><strong>Reply:</strong> <a href="9012.php">Barrett, Brian W: "Re: [OMPI devel] Bug in openmpi-1.5/opal/config/opal_config_asm.m4"</a>
<li><strong>Reply:</strong> <a href="9014.php">George Bosilca: "Re: [OMPI devel] Bug in openmpi-1.5/opal/config/opal_config_asm.m4"</a>
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
