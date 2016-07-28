<?
$subject_val = "Re: [OMPI devel] Bug in openmpi-1.5/opal/config/opal_config_asm.m4";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 23 16:54:47 2011" -->
<!-- isoreceived="20110223215447" -->
<!-- sent="Wed, 23 Feb 2011 14:54:30 -0700" -->
<!-- isosent="20110223215430" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Bug in openmpi-1.5/opal/config/opal_config_asm.m4" -->
<!-- id="C98AD010.21A8%bwbarre_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20110223180443.GD31519_at_redhat.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Bug in openmpi-1.5/opal/config/opal_config_asm.m4<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-23 16:54:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9013.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24449"</a>
<li><strong>Previous message:</strong> <a href="9011.php">Jay Fenlason: "[OMPI devel] Bug in openmpi-1.5/opal/config/opal_config_asm.m4"</a>
<li><strong>In reply to:</strong> <a href="9011.php">Jay Fenlason: "[OMPI devel] Bug in openmpi-1.5/opal/config/opal_config_asm.m4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9014.php">George Bosilca: "Re: [OMPI devel] Bug in openmpi-1.5/opal/config/opal_config_asm.m4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks.  I've applied the patch and will start the process of pushing it
<br>
to the next 1.5 release.
<br>
<p>Brian
<br>
<p><p>On 2/23/11 11:04 AM, &quot;Jay Fenlason&quot; &lt;fenlason_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;I was recently handed
</span><br>
<span class="quotelev1">&gt;<a href="https://bugzilla.redhat.com/attachment.cgi?id=480307">https://bugzilla.redhat.com/attachment.cgi?id=480307</a>
</span><br>
<span class="quotelev1">&gt;for which a kindly GCC expert attached the enclosed patch.  Apparently
</span><br>
<span class="quotelev1">&gt;this only causes problems on 32-bit i686 machines, which could by why
</span><br>
<span class="quotelev1">&gt;it has gone undetected until now.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     -- JF
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;--- openmpi-1.5/opal/config/opal_config_asm.m4.jj    2010-09-28
</span><br>
<span class="quotelev1">&gt;23:33:51.000000000 +0200
</span><br>
<span class="quotelev1">&gt;+++ openmpi-1.5/opal/config/opal_config_asm.m4    2011-02-23
</span><br>
<span class="quotelev1">&gt;01:39:21.191433509 +0100
</span><br>
<span class="quotelev1">&gt;@@ -885,7 +885,7 @@ AC_DEFUN([OMPI_CONFIG_ASM],[
</span><br>
<span class="quotelev1">&gt;                 ompi_cv_asm_arch=&quot;AMD64&quot;
</span><br>
<span class="quotelev1">&gt;             fi
</span><br>
<span class="quotelev1">&gt;             OPAL_ASM_SUPPORT_64BIT=1
</span><br>
<span class="quotelev1">&gt;-            OMPI_GCC_INLINE_ASSIGN='&quot;xaddl %1,%0&quot; : &quot;=m&quot;(ret),
</span><br>
<span class="quotelev1">&gt;&quot;+r&quot;(negone)'
</span><br>
<span class="quotelev1">&gt;+            OMPI_GCC_INLINE_ASSIGN='&quot;xaddl %1,%0&quot; : &quot;=m&quot;(ret),
</span><br>
<span class="quotelev1">&gt;&quot;+r&quot;(negone) : &quot;m&quot;(ret)'
</span><br>
<span class="quotelev1">&gt;             ;;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         ia64-*)
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9013.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24449"</a>
<li><strong>Previous message:</strong> <a href="9011.php">Jay Fenlason: "[OMPI devel] Bug in openmpi-1.5/opal/config/opal_config_asm.m4"</a>
<li><strong>In reply to:</strong> <a href="9011.php">Jay Fenlason: "[OMPI devel] Bug in openmpi-1.5/opal/config/opal_config_asm.m4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9014.php">George Bosilca: "Re: [OMPI devel] Bug in openmpi-1.5/opal/config/opal_config_asm.m4"</a>
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
