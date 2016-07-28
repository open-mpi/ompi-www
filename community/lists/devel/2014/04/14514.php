<?
$subject_val = "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 14 14:52:58 2014" -->
<!-- isoreceived="20140414185258" -->
<!-- sent="Mon, 14 Apr 2014 18:52:56 +0000" -->
<!-- isosent="20140414185256" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions" -->
<!-- id="61071FC8-9FE9-42E1-B94E-D210F0EEC442_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3944DF6B-A1A2-4E22-8BD2-0F51F6CBBC6B_at_cisco.com" -->
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
<strong>Date:</strong> 2014-04-14 14:52:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14515.php">Mike Dubman: "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<li><strong>Previous message:</strong> <a href="14513.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<li><strong>In reply to:</strong> <a href="14513.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14518.php">Mike Dubman: "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<li><strong>Reply:</strong> <a href="14518.php">Mike Dubman: "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<li><strong>Reply:</strong> <a href="14519.php">Mike Dubman: "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<li><strong>Reply:</strong> <a href="14521.php">Mike Dubman: "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
BTW, I should point out that this really is only relevant if libfoo A.B.C and X.Y.Z are *ABI compatible*, but not *behavior compatible*.
<br>
<p>If A.B.C and X.Y.Z are not ABI compatible, then ompi_info will fail just like the MPI processes fail (i.e., it may not be able to dlopen the component using libfoo X.Y.Z).
<br>
<p>A useful case to determine behavior compatibility is if libfoo exports a capability vector; A.B.C supports capability 13 and 27, but X.Y.Z supports only 13.  If the OMPI component is smart enough to detect these run-time behavior differences, it'll only use capability 13 with X.Y.Z but will use both 13 and 27 with A.B.C.
<br>
<p><p><p><p>On Apr 14, 2014, at 2:48 PM, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Apr 14, 2014, at 10:59 AM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; There is no correlation between built_with and running_with versions of external libraries supported by OMPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ah, I see -- yes, that's the disconnect here.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think one use case that shows this is the following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. Admin Bob builds Open MPI on the cluster head node with dependent library libfoo.so version A.B.C, which is a fully supported configuration.  Therefore, the appropriate configure.m4's are happy, and everything builds and installs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. But when User Betty goes to run, the libfoo.so on the back-end compute nodes is accidentally version X.Y.Z, which is *not* supported.  And Bad Things happen.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3. So you'd like to be able to run ompi_info on the head node and on the compute nodes and compare the output, and see an obvious difference of A.B.C vs. X.Y.Z in the dependent library of a given component, and use that to help figure out what is going wrong.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The next release of external library does not mean we should remove code in ompi for all previous supported releases for the same library.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is another use case: OMPI was built against dep library libfoo.so A.B.C (which is a supported config).  But then someone does an upgrade of libfoo *without rebuilding OMPI*, and now OMPI run-time links against libfoo.so X.Y.Z, which is no longer a supported configuration.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Why are you so against it? I don`t see any issue with printing ext lib version number in the MCA description, something that can improve sysadmin/user-experience.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FWIW, we've done this before by putting them in read-only MCA parameters -- we've called them &quot;info&quot; MCA params.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't see any in the code base today, but I know we've definitely had version kinds of MCA params before.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14513.php">http://www.open-mpi.org/community/lists/devel/2014/04/14513.php</a>
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
<li><strong>Next message:</strong> <a href="14515.php">Mike Dubman: "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<li><strong>Previous message:</strong> <a href="14513.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<li><strong>In reply to:</strong> <a href="14513.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14518.php">Mike Dubman: "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<li><strong>Reply:</strong> <a href="14518.php">Mike Dubman: "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<li><strong>Reply:</strong> <a href="14519.php">Mike Dubman: "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<li><strong>Reply:</strong> <a href="14521.php">Mike Dubman: "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
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
