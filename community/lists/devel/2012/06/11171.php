<?
$subject_val = "Re: [OMPI devel] openib wasn't building";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 25 16:45:14 2012" -->
<!-- isoreceived="20120625204514" -->
<!-- sent="Mon, 25 Jun 2012 16:45:06 -0400" -->
<!-- isosent="20120625204506" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openib wasn't building" -->
<!-- id="4FE8CDD2.5030408_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F1952CD8-E42F-464B-88E4-8FF38AB5FB29_at_cisco.com" -->
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
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-25 16:45:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11172.php">Jeff Squyres: "Re: [OMPI devel] openib wasn't building"</a>
<li><strong>Previous message:</strong> <a href="11170.php">Jeff Squyres: "Re: [OMPI devel] openib wasn't building"</a>
<li><strong>In reply to:</strong> <a href="11170.php">Jeff Squyres: "Re: [OMPI devel] openib wasn't building"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11172.php">Jeff Squyres: "Re: [OMPI devel] openib wasn't building"</a>
<li><strong>Reply:</strong> <a href="11172.php">Jeff Squyres: "Re: [OMPI devel] openib wasn't building"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks.  That explains one mystery.
<br>
<p>I'm still unclear, though.  Or, maybe I'm hitting a different problem.  
<br>
I configure with &quot;--with-openib&quot; (along with other stuff).  I get:
<br>
<p>r26639:checking if MCA component btl:openib can compile... yes
<br>
r26640:checking if MCA component btl:openib can compile... no
<br>
<p>I'll poke at this more, but just wanted to see if I understood correctly 
<br>
what you were saying.
<br>
<p>On 06/25/12 16:28, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Er... I could have sworn that I committed the fix before I sent this mail, but it looks like I didn't.  I just committed r26654 which fixes the issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 25, 2012, at 2:47 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I noticed earlier today that the trunk openib btl was not building if you did not specify --with-openib[=DIR].
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have fixed the problem, but just wanted to give a heads up that this has happened; either re-configure --with-openib or svn up and re-autogen/configure/build.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11172.php">Jeff Squyres: "Re: [OMPI devel] openib wasn't building"</a>
<li><strong>Previous message:</strong> <a href="11170.php">Jeff Squyres: "Re: [OMPI devel] openib wasn't building"</a>
<li><strong>In reply to:</strong> <a href="11170.php">Jeff Squyres: "Re: [OMPI devel] openib wasn't building"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11172.php">Jeff Squyres: "Re: [OMPI devel] openib wasn't building"</a>
<li><strong>Reply:</strong> <a href="11172.php">Jeff Squyres: "Re: [OMPI devel] openib wasn't building"</a>
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
