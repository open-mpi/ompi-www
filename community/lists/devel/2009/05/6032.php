<?
$subject_val = "Re: [OMPI devel] Build failures on trunk? r21235";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 14 14:23:03 2009" -->
<!-- isoreceived="20090514182303" -->
<!-- sent="Thu, 14 May 2009 14:22:58 -0400 (EDT)" -->
<!-- isosent="20090514182258" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Build failures on trunk? r21235" -->
<!-- id="alpine.DEB.1.10.0905141418270.14134_at_marvin.we-be-smart.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="972E4FE8-81E0-40EB-B113-608EA0AF690F_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Build failures on trunk? r21235<br>
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-14 14:22:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6033.php">Ralf Wildenhues: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<li><strong>Previous message:</strong> <a href="6031.php">Ralf Wildenhues: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<li><strong>In reply to:</strong> <a href="6030.php">Jeff Squyres: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6033.php">Ralf Wildenhues: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<li><strong>Reply:</strong> <a href="6033.php">Ralf Wildenhues: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<li><strong>Reply:</strong> <a href="6034.php">Jeff Squyres: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 14 May 2009, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On May 14, 2009, at 1:46 PM, Ralf Wildenhues wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A more permanent workaround could be in OpenMPI to list each library
</span><br>
<span class="quotelev2">&gt;&gt; that is used *directly* by some other library as a dependency.  Sigh.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We actually took pains to *not* do that; we *used* to do that and explicitly 
</span><br>
<span class="quotelev1">&gt; took it out.  :-\  IIRC, it had something to do with dlopen'ing libmpi.so...?
</span><br>
<p>Actually, I think that was something else.  Today, libopen-rte.la lists 
<br>
libopen-pal.la as a dependency and libmpi.la lists libopen-rte.la.  I had 
<br>
removed the dependency of libmpi.la on libopen-pal.la because it was 
<br>
causing libopen-pal.so to be listed twice by libtool, which was causing 
<br>
problems.
<br>
<p>It would be a trivial fix to change the Makefiles to make libmpi.la to 
<br>
depend on libopen-pal.la as well as libopen-rte.la.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6033.php">Ralf Wildenhues: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<li><strong>Previous message:</strong> <a href="6031.php">Ralf Wildenhues: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<li><strong>In reply to:</strong> <a href="6030.php">Jeff Squyres: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6033.php">Ralf Wildenhues: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<li><strong>Reply:</strong> <a href="6033.php">Ralf Wildenhues: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<li><strong>Reply:</strong> <a href="6034.php">Jeff Squyres: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
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
