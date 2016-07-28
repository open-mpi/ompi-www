<?
$subject_val = "Re: [OMPI devel] [PATCH] openmpi: get it built with newer autoconf";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 18 12:33:58 2010" -->
<!-- isoreceived="20100818163358" -->
<!-- sent="Wed, 18 Aug 2010 09:35:22 -0700" -->
<!-- isosent="20100818163522" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH] openmpi: get it built with newer autoconf" -->
<!-- id="0D568C4C-BD9B-4AD2-8273-187984C8E93E_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20100818145932.GD14313_at_Chamillionaire.breakpoint.cc" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [PATCH] openmpi: get it built with newer autoconf<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-18 12:35:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8290.php">Eugene Loh: "[OMPI devel] knem_dma_min"</a>
<li><strong>Previous message:</strong> <a href="8288.php">Jeff Squyres: "[OMPI devel] Fwd: [all-osl-users] Outage of the OSL NFS server"</a>
<li><strong>In reply to:</strong> <a href="8287.php">Sebastian Andrzej Siewior: "[OMPI devel] [PATCH] openmpi: get it built with newer autoconf"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8292.php">Ralf Wildenhues: "Re: [OMPI devel] [PATCH] openmpi: get it built with newer autoconf"</a>
<li><strong>Reply:</strong> <a href="8292.php">Ralf Wildenhues: "Re: [OMPI devel] [PATCH] openmpi: get it built with newer autoconf"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the patch!
<br>
<p>With a quick grep, I actually see 16 uses of AS_VAR_GET.  Do the other 15 cases not cause problems?
<br>
<p><p><p>On Aug 18, 2010, at 7:59 AM, Sebastian Andrzej Siewior wrote:
<br>
<p><span class="quotelev1">&gt; From: Sebastian Andrzej Siewior &lt;bigeasy_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Reported as Debian bug #592892. AS_VAR_GET missbehaves in newer
</span><br>
<span class="quotelev1">&gt; autoconf. Since it is deprecated switch to AS_VAR_COPY which gets things
</span><br>
<span class="quotelev1">&gt; done right. Both are cursed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Signed-off-by: Sebastian Andrzej Siewior &lt;bigeasy_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; config/f77_get_alignment.m4 |    2 +-
</span><br>
<span class="quotelev1">&gt; 1 files changed, 1 insertions(+), 1 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; diff --git a/config/f77_get_alignment.m4 b/config/f77_get_alignment.m4
</span><br>
<span class="quotelev1">&gt; index aa3d318..ba1fb96 100644
</span><br>
<span class="quotelev1">&gt; --- a/config/f77_get_alignment.m4
</span><br>
<span class="quotelev1">&gt; +++ b/config/f77_get_alignment.m4
</span><br>
<span class="quotelev1">&gt; @@ -90,7 +90,7 @@ EOF
</span><br>
<span class="quotelev1">&gt;                  AC_MSG_ERROR([Could not determine alignment of $1])])])
</span><br>
<span class="quotelev1">&gt;         rm -rf conftest*])
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -    $2=AS_VAR_GET([type_var])
</span><br>
<span class="quotelev1">&gt; +    AS_VAR_COPY([$2], [type_var])
</span><br>
<span class="quotelev1">&gt;     AS_VAR_POPDEF([type_var])dnl
</span><br>
<span class="quotelev1">&gt;     OMPI_VAR_SCOPE_POP
</span><br>
<span class="quotelev1">&gt; ])
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; 1.5.6.5
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
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8290.php">Eugene Loh: "[OMPI devel] knem_dma_min"</a>
<li><strong>Previous message:</strong> <a href="8288.php">Jeff Squyres: "[OMPI devel] Fwd: [all-osl-users] Outage of the OSL NFS server"</a>
<li><strong>In reply to:</strong> <a href="8287.php">Sebastian Andrzej Siewior: "[OMPI devel] [PATCH] openmpi: get it built with newer autoconf"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8292.php">Ralf Wildenhues: "Re: [OMPI devel] [PATCH] openmpi: get it built with newer autoconf"</a>
<li><strong>Reply:</strong> <a href="8292.php">Ralf Wildenhues: "Re: [OMPI devel] [PATCH] openmpi: get it built with newer autoconf"</a>
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
