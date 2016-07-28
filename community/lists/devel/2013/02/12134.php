<?
$subject_val = "Re: [OMPI devel] mpi/java question";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 20 14:34:22 2013" -->
<!-- isoreceived="20130220193422" -->
<!-- sent="Wed, 20 Feb 2013 19:34:18 +0000" -->
<!-- isosent="20130220193418" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mpi/java question" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC43F4DA49_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5B1FBF29-B9DE-49BC-A66D-937E040206F8_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] mpi/java question<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-20 14:34:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12135.php">Dmitri Gribenko: "Re: [OMPI devel] mpi/java question"</a>
<li><strong>Previous message:</strong> <a href="12133.php">Eugene Loh: "Re: [OMPI devel] 1.6.4rc5: final rc"</a>
<li><strong>In reply to:</strong> <a href="12132.php">Ralph Castain: "Re: [OMPI devel] mpi/java question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12135.php">Dmitri Gribenko: "Re: [OMPI devel] mpi/java question"</a>
<li><strong>Reply:</strong> <a href="12135.php">Dmitri Gribenko: "Re: [OMPI devel] mpi/java question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 20, 2013, at 12:37 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev2">&gt;&gt; In Java, a long is always 64 bits. In C and Objective-C, a long might be 64 bits, or it might be 32 bits, or (in less common cases) it might be something else entirely; the C standard doesn't specify an exact bit width.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So we may need a configure test to map the Java &quot;long&quot; data type to the right thing to get int64_t?
</span><br>
<p>I think we might have to end up doing what we did for fortran: a bunch of configure tests to map Java types to their corresponding C types.
<br>
<p>I have no idea how to write such configure tests, though, because it involves writing java code. The way it works in the Fortran tests is that we write a simple program (that's usually a combination of Fortran and C) to figure out the size of a given fortran datatype.  Then we have shell/m4 code to match that with a corresponding C type.
<br>
<p>If someone could write some generic java code to figure out the size of a java type (and either printf it out, or write it to a file, or otherwise be able to give that value to a shell script), that would be a good start.
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
<li><strong>Next message:</strong> <a href="12135.php">Dmitri Gribenko: "Re: [OMPI devel] mpi/java question"</a>
<li><strong>Previous message:</strong> <a href="12133.php">Eugene Loh: "Re: [OMPI devel] 1.6.4rc5: final rc"</a>
<li><strong>In reply to:</strong> <a href="12132.php">Ralph Castain: "Re: [OMPI devel] mpi/java question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12135.php">Dmitri Gribenko: "Re: [OMPI devel] mpi/java question"</a>
<li><strong>Reply:</strong> <a href="12135.php">Dmitri Gribenko: "Re: [OMPI devel] mpi/java question"</a>
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
