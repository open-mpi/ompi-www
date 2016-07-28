<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24449";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 23 16:57:22 2011" -->
<!-- isoreceived="20110223215722" -->
<!-- sent="Wed, 23 Feb 2011 16:57:17 -0500" -->
<!-- isosent="20110223215717" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24449" -->
<!-- id="98C3100D-1035-4C0F-AF33-81BC95F54536_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201102232154.p1NLs7PR019080_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24449<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-23 16:57:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9014.php">George Bosilca: "Re: [OMPI devel] Bug in openmpi-1.5/opal/config/opal_config_asm.m4"</a>
<li><strong>Previous message:</strong> <a href="9012.php">Barrett, Brian W: "Re: [OMPI devel] Bug in openmpi-1.5/opal/config/opal_config_asm.m4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9016.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24449"</a>
<li><strong>Reply:</strong> <a href="9016.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24449"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If I understand correctly the assembly this change is not related to clobber, but to the input register. Moreover, I don't think the patch is correct. More to come...
<br>
<p>&nbsp;&nbsp;george.
<br>
<p><p>On Feb 23, 2011, at 16:54 , brbarret_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: brbarret
</span><br>
<span class="quotelev1">&gt; Date: 2011-02-23 16:54:07 EST (Wed, 23 Feb 2011)
</span><br>
<span class="quotelev1">&gt; New Revision: 24449
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/24449">https://svn.open-mpi.org/trac/ompi/changeset/24449</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Fix register clobber list for x86 assembly.  Thanks to Jay Fenlason for the
</span><br>
<span class="quotelev1">&gt; patch.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/opal/config/opal_config_asm.m4 |     2 +-                                      
</span><br>
<span class="quotelev1">&gt;   1 files changed, 1 insertions(+), 1 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/opal/config/opal_config_asm.m4
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/opal/config/opal_config_asm.m4	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/opal/config/opal_config_asm.m4	2011-02-23 16:54:07 EST (Wed, 23 Feb 2011)
</span><br>
<span class="quotelev1">&gt; @@ -867,7 +867,7 @@
</span><br>
<span class="quotelev1">&gt;                 ompi_cv_asm_arch=&quot;AMD64&quot;
</span><br>
<span class="quotelev1">&gt;             fi
</span><br>
<span class="quotelev1">&gt;             OPAL_ASM_SUPPORT_64BIT=1
</span><br>
<span class="quotelev1">&gt; -            OMPI_GCC_INLINE_ASSIGN='&quot;xaddl %1,%0&quot; : &quot;=m&quot;(ret), &quot;+r&quot;(negone)'
</span><br>
<span class="quotelev1">&gt; +            OMPI_GCC_INLINE_ASSIGN='&quot;xaddl %1,%0&quot; : &quot;=m&quot;(ret), &quot;+r&quot;(negone) : &quot;m&quot;(ret)'
</span><br>
<span class="quotelev1">&gt;             ;;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         ia64-*)
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn-full mailing list
</span><br>
<span class="quotelev1">&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<p>&quot;I disapprove of what you say, but I will defend to the death your right to say it&quot;
<br>
&nbsp;&nbsp;-- Evelyn Beatrice Hall
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9014.php">George Bosilca: "Re: [OMPI devel] Bug in openmpi-1.5/opal/config/opal_config_asm.m4"</a>
<li><strong>Previous message:</strong> <a href="9012.php">Barrett, Brian W: "Re: [OMPI devel] Bug in openmpi-1.5/opal/config/opal_config_asm.m4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9016.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24449"</a>
<li><strong>Reply:</strong> <a href="9016.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24449"</a>
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
