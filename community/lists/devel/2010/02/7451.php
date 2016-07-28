<?
$subject_val = "Re: [OMPI devel] PATCH: remove trailing colon at the end of thegenerated	LD_LIBRARY_PATH";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 17 17:14:42 2010" -->
<!-- isoreceived="20100217221442" -->
<!-- sent="Wed, 17 Feb 2010 17:14:37 -0500" -->
<!-- isosent="20100217221437" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] PATCH: remove trailing colon at the end of thegenerated	LD_LIBRARY_PATH" -->
<!-- id="D75C99D1-F08F-42B5-AA6D-FFA57E4D278B_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1266320810.2639.191.camel_at_frecb000730" -->
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
<strong>Subject:</strong> Re: [OMPI devel] PATCH: remove trailing colon at the end of thegenerated	LD_LIBRARY_PATH<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-17 17:14:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7452.php">Jeff Squyres: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<li><strong>Previous message:</strong> <a href="7450.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<li><strong>In reply to:</strong> <a href="7438.php">Nadia Derbey: "[OMPI devel] PATCH: remove trailing colon at the end of the generated	LD_LIBRARY_PATH"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7455.php">Nadia Derbey: "Re: [OMPI devel] PATCH: remove trailing colon at the end of	thegenerated	LD_LIBRARY_PATH"</a>
<li><strong>Reply:</strong> <a href="7455.php">Nadia Derbey: "Re: [OMPI devel] PATCH: remove trailing colon at the end of	thegenerated	LD_LIBRARY_PATH"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looks good to me!
<br>
<p>Please commit and file CMRs for v1.4 and v1.5 (assuming this patch applies cleanly to both branches).
<br>
<p><p>On Feb 16, 2010, at 6:46 AM, Nadia Derbey wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The mpivars.sh genereted in openmpi.spec might in some cases lead to a
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH that contains a trailing &quot;:&quot;. This happens if the
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH is originally unset.
</span><br>
<span class="quotelev1">&gt; This means that current directory is included in the search path for the
</span><br>
<span class="quotelev1">&gt; loader, which might not be the desired result.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The following patch proposal fixes this potential issue by adding the
</span><br>
<span class="quotelev1">&gt; &quot;:&quot; only if LD_LIBRARY_PATH is already set.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Nadia
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; diff -r 6609b6ba7637 contrib/dist/linux/openmpi.spec
</span><br>
<span class="quotelev1">&gt; --- a/contrib/dist/linux/openmpi.spec   Mon Feb 15 22:14:59 2010 +0000
</span><br>
<span class="quotelev1">&gt; +++ b/contrib/dist/linux/openmpi.spec   Tue Feb 16 12:44:41 2010 +0100
</span><br>
<span class="quotelev1">&gt; @@ -505,7 +505,7 @@ fi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  # LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt;  if test -z &quot;\`echo \$LD_LIBRARY_PATH | grep %{_libdir}\`&quot;; then
</span><br>
<span class="quotelev1">&gt; -    LD_LIBRARY_PATH=%{_libdir}:\${LD_LIBRARY_PATH}
</span><br>
<span class="quotelev1">&gt; +    LD_LIBRARY_PATH=%{_libdir}\${LD_LIBRARY_PATH:+:}\${LD_LIBRARY_PATH}
</span><br>
<span class="quotelev1">&gt;      export LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt;  fi
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
<li><strong>Next message:</strong> <a href="7452.php">Jeff Squyres: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<li><strong>Previous message:</strong> <a href="7450.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<li><strong>In reply to:</strong> <a href="7438.php">Nadia Derbey: "[OMPI devel] PATCH: remove trailing colon at the end of the generated	LD_LIBRARY_PATH"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7455.php">Nadia Derbey: "Re: [OMPI devel] PATCH: remove trailing colon at the end of	thegenerated	LD_LIBRARY_PATH"</a>
<li><strong>Reply:</strong> <a href="7455.php">Nadia Derbey: "Re: [OMPI devel] PATCH: remove trailing colon at the end of	thegenerated	LD_LIBRARY_PATH"</a>
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
