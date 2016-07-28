<?
$subject_val = "Re: [OMPI devel] opal/mca/dl/ opal_dl_open with NULL fname - assert?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  5 16:07:44 2016" -->
<!-- isoreceived="20160505200744" -->
<!-- sent="Thu, 5 May 2016 20:07:42 +0000" -->
<!-- isosent="20160505200742" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] opal/mca/dl/ opal_dl_open with NULL fname - assert?" -->
<!-- id="CC96BA0B-9A59-4AB6-8B23-205E149D4C37_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAANzjEmpxsw32+WSF9-zV_-NuUBfC3ZLjXRgqT0t4UvSunQ0vA_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-05 16:07:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18914.php">Josh Hursey: "Re: [OMPI devel] opal/mca/dl/ opal_dl_open with NULL fname - assert?"</a>
<li><strong>Previous message:</strong> <a href="18912.php">Josh Hursey: "[OMPI devel] opal/mca/dl/ opal_dl_open with NULL fname - assert?"</a>
<li><strong>In reply to:</strong> <a href="18912.php">Josh Hursey: "[OMPI devel] opal/mca/dl/ opal_dl_open with NULL fname - assert?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18914.php">Josh Hursey: "Re: [OMPI devel] opal/mca/dl/ opal_dl_open with NULL fname - assert?"</a>
<li><strong>Reply:</strong> <a href="18914.php">Josh Hursey: "Re: [OMPI devel] opal/mca/dl/ opal_dl_open with NULL fname - assert?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Agreed, this looks like an oversight.
<br>
<p>In dl.h, I even said that you could pass NULL as fname:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://github.com/open-mpi/ompi/blob/master/opal/mca/dl/dl.h#L67">https://github.com/open-mpi/ompi/blob/master/opal/mca/dl/dl.h#L67</a>
<br>
<p>These asserts can safely be removed.  Thanks!
<br>
<p><p><span class="quotelev1">&gt; On May 5, 2016, at 3:40 PM, Josh Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We noticed that there is an assert(fname) in both of the dl components:
</span><br>
<span class="quotelev1">&gt;   * <a href="https://github.com/open-mpi/ompi/blob/master/opal/mca/dl/dlopen/dl_dlopen_module.c#L53">https://github.com/open-mpi/ompi/blob/master/opal/mca/dl/dlopen/dl_dlopen_module.c#L53</a>
</span><br>
<span class="quotelev1">&gt;   * <a href="https://github.com/open-mpi/ompi/blob/master/opal/mca/dl/libltdl/dl_libltdl_module.c#L21">https://github.com/open-mpi/ompi/blob/master/opal/mca/dl/libltdl/dl_libltdl_module.c#L21</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But according to the dl.h, NULL should be an acceptable parameter for fname:
</span><br>
<span class="quotelev1">&gt;   <a href="https://github.com/open-mpi/ompi/blob/master/opal/mca/dl/dl.h#L67">https://github.com/open-mpi/ompi/blob/master/opal/mca/dl/dl.h#L67</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For dlopen() it returns a handle to the program space, which can be handy.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think it was just an oversight in the original code that has not been encountered yet. But before I work on a patch, I wanted to check to see if was a reason to put the assert in the code. git blame says that Jeff Squyres put this code in there a while back, so I don't know if he remembers.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18912.php">http://www.open-mpi.org/community/lists/devel/2016/05/18912.php</a>
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
<li><strong>Next message:</strong> <a href="18914.php">Josh Hursey: "Re: [OMPI devel] opal/mca/dl/ opal_dl_open with NULL fname - assert?"</a>
<li><strong>Previous message:</strong> <a href="18912.php">Josh Hursey: "[OMPI devel] opal/mca/dl/ opal_dl_open with NULL fname - assert?"</a>
<li><strong>In reply to:</strong> <a href="18912.php">Josh Hursey: "[OMPI devel] opal/mca/dl/ opal_dl_open with NULL fname - assert?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18914.php">Josh Hursey: "Re: [OMPI devel] opal/mca/dl/ opal_dl_open with NULL fname - assert?"</a>
<li><strong>Reply:</strong> <a href="18914.php">Josh Hursey: "Re: [OMPI devel] opal/mca/dl/ opal_dl_open with NULL fname - assert?"</a>
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
