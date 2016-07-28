<?
$subject_val = "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 14 14:48:42 2014" -->
<!-- isoreceived="20140414184842" -->
<!-- sent="Mon, 14 Apr 2014 18:48:40 +0000" -->
<!-- isosent="20140414184840" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions" -->
<!-- id="3944DF6B-A1A2-4E22-8BD2-0F51F6CBBC6B_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAO1KyZzxnfWqSpTQxj9nRk7VMpQUQzY+8UCHmf4a7TvBTrCNA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-14 14:48:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14514.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<li><strong>Previous message:</strong> <a href="14512.php">Jeff Squyres (jsquyres): "[OMPI devel] New open-mpi.org SSL certificates"</a>
<li><strong>In reply to:</strong> <a href="14510.php">Mike Dubman: "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14514.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<li><strong>Reply:</strong> <a href="14514.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 14, 2014, at 10:59 AM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; There is no correlation between built_with and running_with versions of external libraries supported by OMPI.
</span><br>
<p>Ah, I see -- yes, that's the disconnect here.
<br>
<p>I think one use case that shows this is the following:
<br>
<p>1. Admin Bob builds Open MPI on the cluster head node with dependent library libfoo.so version A.B.C, which is a fully supported configuration.  Therefore, the appropriate configure.m4's are happy, and everything builds and installs.
<br>
<p>2. But when User Betty goes to run, the libfoo.so on the back-end compute nodes is accidentally version X.Y.Z, which is *not* supported.  And Bad Things happen.
<br>
<p>3. So you'd like to be able to run ompi_info on the head node and on the compute nodes and compare the output, and see an obvious difference of A.B.C vs. X.Y.Z in the dependent library of a given component, and use that to help figure out what is going wrong.
<br>
<p><span class="quotelev1">&gt; The next release of external library does not mean we should remove code in ompi for all previous supported releases for the same library.
</span><br>
<p>This is another use case: OMPI was built against dep library libfoo.so A.B.C (which is a supported config).  But then someone does an upgrade of libfoo *without rebuilding OMPI*, and now OMPI run-time links against libfoo.so X.Y.Z, which is no longer a supported configuration.
<br>
<p><span class="quotelev1">&gt; Why are you so against it? I don`t see any issue with printing ext lib version number in the MCA description, something that can improve sysadmin/user-experience.
</span><br>
<p>FWIW, we've done this before by putting them in read-only MCA parameters -- we've called them &quot;info&quot; MCA params.
<br>
<p>I don't see any in the code base today, but I know we've definitely had version kinds of MCA params before.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14514.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<li><strong>Previous message:</strong> <a href="14512.php">Jeff Squyres (jsquyres): "[OMPI devel] New open-mpi.org SSL certificates"</a>
<li><strong>In reply to:</strong> <a href="14510.php">Mike Dubman: "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14514.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<li><strong>Reply:</strong> <a href="14514.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
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
