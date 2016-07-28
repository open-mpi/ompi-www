<?
$subject_val = "Re: [OMPI devel] opal/mca/dl/ opal_dl_open with NULL fname - assert?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  5 16:32:23 2016" -->
<!-- isoreceived="20160505203223" -->
<!-- sent="Thu, 5 May 2016 15:32:22 -0500" -->
<!-- isosent="20160505203222" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] opal/mca/dl/ opal_dl_open with NULL fname - assert?" -->
<!-- id="CAANzjEnf_tCwpd4v0Xng1TExG2vwAgCE=3Dg6bRYkWjoOKDEGg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CC96BA0B-9A59-4AB6-8B23-205E149D4C37_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] opal/mca/dl/ opal_dl_open with NULL fname - assert?<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-05 16:32:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18915.php">Aurélien Bouteiller: "Re: [OMPI devel] Process placement"</a>
<li><strong>Previous message:</strong> <a href="18913.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] opal/mca/dl/ opal_dl_open with NULL fname - assert?"</a>
<li><strong>In reply to:</strong> <a href="18913.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] opal/mca/dl/ opal_dl_open with NULL fname - assert?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok. I started a PR here:
<br>
&nbsp;&nbsp;<a href="https://github.com/open-mpi/ompi/pull/1639">https://github.com/open-mpi/ompi/pull/1639</a>
<br>
<p>I want to do a bit of testing (building now), but this should be an easy
<br>
fix.
<br>
<p>Thanks
<br>
<p><p>On Thu, May 5, 2016 at 3:07 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Agreed, this looks like an oversight.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In dl.h, I even said that you could pass NULL as fname:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="https://github.com/open-mpi/ompi/blob/master/opal/mca/dl/dl.h#L67">https://github.com/open-mpi/ompi/blob/master/opal/mca/dl/dl.h#L67</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; These asserts can safely be removed.  Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On May 5, 2016, at 3:40 PM, Josh Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; We noticed that there is an assert(fname) in both of the dl components:
</span><br>
<span class="quotelev2">&gt; &gt;   *
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi/blob/master/opal/mca/dl/dlopen/dl_dlopen_module.c#L53">https://github.com/open-mpi/ompi/blob/master/opal/mca/dl/dlopen/dl_dlopen_module.c#L53</a>
</span><br>
<span class="quotelev2">&gt; &gt;   *
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi/blob/master/opal/mca/dl/libltdl/dl_libltdl_module.c#L21">https://github.com/open-mpi/ompi/blob/master/opal/mca/dl/libltdl/dl_libltdl_module.c#L21</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; But according to the dl.h, NULL should be an acceptable parameter for
</span><br>
<span class="quotelev1">&gt; fname:
</span><br>
<span class="quotelev2">&gt; &gt;   <a href="https://github.com/open-mpi/ompi/blob/master/opal/mca/dl/dl.h#L67">https://github.com/open-mpi/ompi/blob/master/opal/mca/dl/dl.h#L67</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; For dlopen() it returns a handle to the program space, which can be
</span><br>
<span class="quotelev1">&gt; handy.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I think it was just an oversight in the original code that has not been
</span><br>
<span class="quotelev1">&gt; encountered yet. But before I work on a patch, I wanted to check to see if
</span><br>
<span class="quotelev1">&gt; was a reason to put the assert in the code. git blame says that Jeff
</span><br>
<span class="quotelev1">&gt; Squyres put this code in there a while back, so I don't know if he
</span><br>
<span class="quotelev1">&gt; remembers.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt; Josh
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18912.php">http://www.open-mpi.org/community/lists/devel/2016/05/18912.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18913.php">http://www.open-mpi.org/community/lists/devel/2016/05/18913.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18914/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18915.php">Aurélien Bouteiller: "Re: [OMPI devel] Process placement"</a>
<li><strong>Previous message:</strong> <a href="18913.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] opal/mca/dl/ opal_dl_open with NULL fname - assert?"</a>
<li><strong>In reply to:</strong> <a href="18913.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] opal/mca/dl/ opal_dl_open with NULL fname - assert?"</a>
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
