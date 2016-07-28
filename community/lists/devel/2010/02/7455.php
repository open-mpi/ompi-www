<?
$subject_val = "Re: [OMPI devel] PATCH: remove trailing colon at the end of	thegenerated	LD_LIBRARY_PATH";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 18 02:12:58 2010" -->
<!-- isoreceived="20100218071258" -->
<!-- sent="Thu, 18 Feb 2010 08:02:45 +0100" -->
<!-- isosent="20100218070245" -->
<!-- name="Nadia Derbey" -->
<!-- email="Nadia.Derbey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] PATCH: remove trailing colon at the end of	thegenerated	LD_LIBRARY_PATH" -->
<!-- id="1266476565.2639.195.camel_at_frecb000730" -->
<!-- inreplyto="D75C99D1-F08F-42B5-AA6D-FFA57E4D278B_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] PATCH: remove trailing colon at the end of	thegenerated	LD_LIBRARY_PATH<br>
<strong>From:</strong> Nadia Derbey (<em>Nadia.Derbey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-18 02:02:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7456.php">Jeff Squyres: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<li><strong>Previous message:</strong> <a href="7454.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<li><strong>In reply to:</strong> <a href="7451.php">Jeff Squyres: "Re: [OMPI devel] PATCH: remove trailing colon at the end of thegenerated	LD_LIBRARY_PATH"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 2010-02-17 at 17:14 -0500, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Looks good to me!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please commit and file CMRs for v1.4 and v1.5 (assuming this patch applies cleanly to both branches).
</span><br>
<p>Not sure I have the rights to do these things?
<br>
<p>Regards,
<br>
Nadia
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 16, 2010, at 6:46 AM, Nadia Derbey wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The mpivars.sh genereted in openmpi.spec might in some cases lead to a
</span><br>
<span class="quotelev2">&gt; &gt; LD_LIBRARY_PATH that contains a trailing &quot;:&quot;. This happens if the
</span><br>
<span class="quotelev2">&gt; &gt; LD_LIBRARY_PATH is originally unset.
</span><br>
<span class="quotelev2">&gt; &gt; This means that current directory is included in the search path for the
</span><br>
<span class="quotelev2">&gt; &gt; loader, which might not be the desired result.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The following patch proposal fixes this potential issue by adding the
</span><br>
<span class="quotelev2">&gt; &gt; &quot;:&quot; only if LD_LIBRARY_PATH is already set.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt; Nadia
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; diff -r 6609b6ba7637 contrib/dist/linux/openmpi.spec
</span><br>
<span class="quotelev2">&gt; &gt; --- a/contrib/dist/linux/openmpi.spec   Mon Feb 15 22:14:59 2010 +0000
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/contrib/dist/linux/openmpi.spec   Tue Feb 16 12:44:41 2010 +0100
</span><br>
<span class="quotelev2">&gt; &gt; @@ -505,7 +505,7 @@ fi
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;  # LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt; &gt;  if test -z &quot;\`echo \$LD_LIBRARY_PATH | grep %{_libdir}\`&quot;; then
</span><br>
<span class="quotelev2">&gt; &gt; -    LD_LIBRARY_PATH=%{_libdir}:\${LD_LIBRARY_PATH}
</span><br>
<span class="quotelev2">&gt; &gt; +    LD_LIBRARY_PATH=%{_libdir}\${LD_LIBRARY_PATH:+:}\${LD_LIBRARY_PATH}
</span><br>
<span class="quotelev2">&gt; &gt;      export LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt; &gt;  fi
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<pre>
-- 
Nadia Derbey &lt;Nadia.Derbey_at_[hidden]&gt;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7456.php">Jeff Squyres: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<li><strong>Previous message:</strong> <a href="7454.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<li><strong>In reply to:</strong> <a href="7451.php">Jeff Squyres: "Re: [OMPI devel] PATCH: remove trailing colon at the end of thegenerated	LD_LIBRARY_PATH"</a>
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
