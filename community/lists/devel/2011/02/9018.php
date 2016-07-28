<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24449";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 23 22:17:38 2011" -->
<!-- isoreceived="20110224031738" -->
<!-- sent="Thu, 24 Feb 2011 08:47:34 +0530" -->
<!-- isosent="20110224031734" -->
<!-- name="Nysal Jan" -->
<!-- email="jnysal_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24449" -->
<!-- id="AANLkTimwm+HTCSWkbbRo=gMVNyk+N-2p0wykdd1+FVX1_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C98AD41B.21B7%bwbarre_at_sandia.gov" -->
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
<strong>From:</strong> Nysal Jan (<em>jnysal_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-23 22:17:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9019.php">George Bosilca: "Re: [OMPI devel] Bug in openmpi-1.5/opal/config/opal_config_asm.m4"</a>
<li><strong>Previous message:</strong> <a href="9017.php">Jeff Squyres: "Re: [OMPI devel] trunk hwloc &amp; static builds"</a>
<li><strong>In reply to:</strong> <a href="9016.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24449"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian, this is the bug report -
<br>
<a href="https://bugzilla.redhat.com/show_bug.cgi?id=679489">https://bugzilla.redhat.com/show_bug.cgi?id=679489</a>
<br>
<p>--Nysal
<br>
<p>On Thu, Feb 24, 2011 at 3:45 AM, Barrett, Brian W &lt;bwbarre_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; George -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You're right, I misread the patch.  I've run into the same issue with gcc
</span><br>
<span class="quotelev1">&gt; before, but not on x86.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jay, can you point us to the original bug report?  I couldn't figure out
</span><br>
<span class="quotelev1">&gt; how to get from the patch to the bug in your bugzilla.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2/23/11 2:57 PM, &quot;George Bosilca&quot; &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;If I understand correctly the assembly this change is not related to
</span><br>
<span class="quotelev2">&gt; &gt;clobber, but to the input register. Moreover, I don't think the patch is
</span><br>
<span class="quotelev2">&gt; &gt;correct. More to come...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  george.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;On Feb 23, 2011, at 16:54 , brbarret_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Author: brbarret
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Date: 2011-02-23 16:54:07 EST (Wed, 23 Feb 2011)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; New Revision: 24449
</span><br>
<span class="quotelev3">&gt; &gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/24449">https://svn.open-mpi.org/trac/ompi/changeset/24449</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Log:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Fix register clobber list for x86 assembly.  Thanks to Jay Fenlason for
</span><br>
<span class="quotelev3">&gt; &gt;&gt;the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; patch.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Text files modified:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   trunk/opal/config/opal_config_asm.m4 |     2 +-
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   1 files changed, 1 insertions(+), 1 deletions(-)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Modified: trunk/opal/config/opal_config_asm.m4
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;=========================================================================
</span><br>
<span class="quotelev3">&gt; &gt;&gt;=====
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --- trunk/opal/config/opal_config_asm.m4    (original)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +++ trunk/opal/config/opal_config_asm.m4    2011-02-23 16:54:07 EST
</span><br>
<span class="quotelev3">&gt; &gt;&gt;(Wed, 23 Feb 2011)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; @@ -867,7 +867,7 @@
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 ompi_cv_asm_arch=&quot;AMD64&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;             fi
</span><br>
<span class="quotelev3">&gt; &gt;&gt;             OPAL_ASM_SUPPORT_64BIT=1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -            OMPI_GCC_INLINE_ASSIGN='&quot;xaddl %1,%0&quot; : &quot;=m&quot;(ret),
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&quot;+r&quot;(negone)'
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +            OMPI_GCC_INLINE_ASSIGN='&quot;xaddl %1,%0&quot; : &quot;=m&quot;(ret),
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&quot;+r&quot;(negone) : &quot;m&quot;(ret)'
</span><br>
<span class="quotelev3">&gt; &gt;&gt;             ;;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         ia64-*)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; svn-full mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;&quot;I disapprove of what you say, but I will defend to the death your right
</span><br>
<span class="quotelev2">&gt; &gt;to say it&quot;
</span><br>
<span class="quotelev2">&gt; &gt;  -- Evelyn Beatrice Hall
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt;devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9018/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9019.php">George Bosilca: "Re: [OMPI devel] Bug in openmpi-1.5/opal/config/opal_config_asm.m4"</a>
<li><strong>Previous message:</strong> <a href="9017.php">Jeff Squyres: "Re: [OMPI devel] trunk hwloc &amp; static builds"</a>
<li><strong>In reply to:</strong> <a href="9016.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24449"</a>
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
