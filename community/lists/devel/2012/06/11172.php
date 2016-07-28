<?
$subject_val = "Re: [OMPI devel] openib wasn't building";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 25 16:54:19 2012" -->
<!-- isoreceived="20120625205419" -->
<!-- sent="Mon, 25 Jun 2012 16:54:13 -0400" -->
<!-- isosent="20120625205413" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openib wasn't building" -->
<!-- id="EFB323CF-46F9-4758-903B-3B7A33CA54BF_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4FE8CDD2.5030408_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] openib wasn't building<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-25 16:54:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11173.php">Ludovic.Hablot_at_[hidden]: "Re: [OMPI devel] Problem in oob/tcp"</a>
<li><strong>Previous message:</strong> <a href="11171.php">Eugene Loh: "Re: [OMPI devel] openib wasn't building"</a>
<li><strong>In reply to:</strong> <a href="11171.php">Eugene Loh: "Re: [OMPI devel] openib wasn't building"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you send me your config.log and the stdout/stderr from configure?
<br>
<p>On Jun 25, 2012, at 4:45 PM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; Thanks.  That explains one mystery.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm still unclear, though.  Or, maybe I'm hitting a different problem.  I configure with &quot;--with-openib&quot; (along with other stuff).  I get:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; r26639:checking if MCA component btl:openib can compile... yes
</span><br>
<span class="quotelev1">&gt; r26640:checking if MCA component btl:openib can compile... no
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'll poke at this more, but just wanted to see if I understood correctly what you were saying.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 06/25/12 16:28, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Er... I could have sworn that I committed the fix before I sent this mail, but it looks like I didn't.  I just committed r26654 which fixes the issue.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 25, 2012, at 2:47 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I noticed earlier today that the trunk openib btl was not building if you did not specify --with-openib[=DIR].
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have fixed the problem, but just wanted to give a heads up that this has happened; either re-configure --with-openib or svn up and re-autogen/configure/build.
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
<li><strong>Next message:</strong> <a href="11173.php">Ludovic.Hablot_at_[hidden]: "Re: [OMPI devel] Problem in oob/tcp"</a>
<li><strong>Previous message:</strong> <a href="11171.php">Eugene Loh: "Re: [OMPI devel] openib wasn't building"</a>
<li><strong>In reply to:</strong> <a href="11171.php">Eugene Loh: "Re: [OMPI devel] openib wasn't building"</a>
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
