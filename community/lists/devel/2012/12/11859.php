<?
$subject_val = "Re: [OMPI devel] openmpi-1.7rc5 on cygwin ; results and patches";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 20 08:23:13 2012" -->
<!-- isoreceived="20121220132313" -->
<!-- sent="Thu, 20 Dec 2012 08:23:05 -0500" -->
<!-- isosent="20121220132305" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openmpi-1.7rc5 on cygwin ; results and patches" -->
<!-- id="7E1B8D4A-36E8-40F2-8FEC-97BF03DCFC46_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="50D31029.30707_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] openmpi-1.7rc5 on cygwin ; results and patches<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-20 08:23:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11860.php">Victor Kocheganov: "[OMPI devel] Duplicated modex issue."</a>
<li><strong>Previous message:</strong> <a href="11858.php">Jeff Squyres: "Re: [OMPI devel] [Open MPI] #3351: JAVA scatter error"</a>
<li><strong>In reply to:</strong> <a href="11857.php">marco atzeri: "Re: [OMPI devel] openmpi-1.7rc5 on cygwin ; results and patches"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Many thanks, Macro!
<br>
<p>I'll examine these in January when I return from vacation.  There certainly won't be an OMPI 1.6.x release before then, anyway. 
<br>
<p><p><p>On Dec 20, 2012, at 8:18 AM, marco atzeri wrote:
<br>
<p><span class="quotelev1">&gt; On 12/20/2012 1:59 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Thank you!  I've filed <a href="https://svn.open-mpi.org/trac/ompi/ticket/3437">https://svn.open-mpi.org/trac/ompi/ticket/3437</a> about this.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Do you have any Open MPI v1.6-specific patches that would be useful to merge upstream?  I've looked through my email and don't see any, but I could be missing them.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt; these 3 are the one used on 1.6.x
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  path_null.patch     : <a href="https://svn.open-mpi.org/trac/ompi/ticket/3371">https://svn.open-mpi.org/trac/ompi/ticket/3371</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  SHM.patch           : posix alternative at  &quot;SHM_R | SHM_W&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  cygwin-dlname.patch : cygwin specific for .dll instead of .so suffix
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; path_null.patch is already in
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; SHM.patch    is generic enough that should work on any platform.
</span><br>
<span class="quotelev1">&gt;  Please check
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; cygwin-dlname.patch   as written is windows only.
</span><br>
<span class="quotelev1">&gt;   It needs a configuration check for choosing the
</span><br>
<span class="quotelev1">&gt;   right shared library suffix for the platform
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Marco
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11860.php">Victor Kocheganov: "[OMPI devel] Duplicated modex issue."</a>
<li><strong>Previous message:</strong> <a href="11858.php">Jeff Squyres: "Re: [OMPI devel] [Open MPI] #3351: JAVA scatter error"</a>
<li><strong>In reply to:</strong> <a href="11857.php">marco atzeri: "Re: [OMPI devel] openmpi-1.7rc5 on cygwin ; results and patches"</a>
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
