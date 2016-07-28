<?
$subject_val = "Re: [OMPI devel] RFC: &quot;v1.9.0&quot; (vs. &quot;v1.9&quot;)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 22 20:13:36 2014" -->
<!-- isoreceived="20140923001336" -->
<!-- sent="Tue, 23 Sep 2014 00:13:34 +0000" -->
<!-- isosent="20140923001334" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: &amp;quot;v1.9.0&amp;quot; (vs. &amp;quot;v1.9&amp;quot;)" -->
<!-- id="34E38291-AABC-4459-8E01-9F2F8A634643_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAkFZ5sTZNZOW8UP6CXVXr-syxbM0H-fz0Qmm=ZrQJXfro73dw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: &quot;v1.9.0&quot; (vs. &quot;v1.9&quot;)<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-22 20:13:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15900.php">Ralph Castain: "Re: [OMPI devel] race condition in oob/tcp"</a>
<li><strong>Previous message:</strong> <a href="15898.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: &quot;v1.9.0&quot; (vs. &quot;v1.9&quot;)"</a>
<li><strong>In reply to:</strong> <a href="15898.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: &quot;v1.9.0&quot; (vs. &quot;v1.9&quot;)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 22, 2014, at 8:01 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; if i read between the lines, it looks like the next stable branch will be v2.0 and not v1.10
</span><br>
<span class="quotelev1">&gt; is there a strong reason for that (such as ABI compatibility will break, or a major but internal refactoring) ?
</span><br>
<span class="quotelev1">&gt; /* other than v1.10 is less than v1.8 when comparing strings :-) */
</span><br>
<p>The current stable series is v1.8.
<br>
The next feature series will be v1.9.
<br>
The next stable series will be v2.0 (i.e., you're correct).
<br>
<p>We already have an ABI scheme; I don't think we need to switch to semantic versioning.  The *only* API that we care about for ABI purposes is the MPI API (i.e., we don't care about all the internal APIs).  And it's quite difficult to say that performance/behavior is compatible between releases because there are so many differences between different HPC environments (i.e., running an MPI job across TCP sockets can behave differently than when you run the same MPI job across a high-speed network like usNIC or IB -- even if you use the same version of OMPI).  Hence, the MPI standard defines our semantic versioning; additional ABI guarantees are already provided by our versioning scheme.
<br>
<p>The reason for going to &quot;2.0&quot; is somewhat symbolic and subjective.  We're thinking:
<br>
<p>- 1.9 will be a &quot;big enough&quot; change to warrant a major number bump
<br>
- it symbolizes over 10 years of Open MPI
<br>
- it just feels right / because we wanted to :-)
<br>
<p>(BTW, no one has objected to &quot;1.9.0&quot; yet, so I'm guessing that I'll be committing that patch next Tuesday...)
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
<li><strong>Next message:</strong> <a href="15900.php">Ralph Castain: "Re: [OMPI devel] race condition in oob/tcp"</a>
<li><strong>Previous message:</strong> <a href="15898.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: &quot;v1.9.0&quot; (vs. &quot;v1.9&quot;)"</a>
<li><strong>In reply to:</strong> <a href="15898.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: &quot;v1.9.0&quot; (vs. &quot;v1.9&quot;)"</a>
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
