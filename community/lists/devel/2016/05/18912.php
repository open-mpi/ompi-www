<?
$subject_val = "[OMPI devel] opal/mca/dl/ opal_dl_open with NULL fname - assert?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  5 15:40:27 2016" -->
<!-- isoreceived="20160505194027" -->
<!-- sent="Thu, 5 May 2016 14:40:26 -0500" -->
<!-- isosent="20160505194026" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="[OMPI devel] opal/mca/dl/ opal_dl_open with NULL fname - assert?" -->
<!-- id="CAANzjEmpxsw32+WSF9-zV_-NuUBfC3ZLjXRgqT0t4UvSunQ0vA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] opal/mca/dl/ opal_dl_open with NULL fname - assert?<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-05 15:40:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18913.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] opal/mca/dl/ opal_dl_open with NULL fname - assert?"</a>
<li><strong>Previous message:</strong> <a href="18911.php">Abhishek Joshi: "[OMPI devel] Opal get cycles for ARM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18913.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] opal/mca/dl/ opal_dl_open with NULL fname - assert?"</a>
<li><strong>Reply:</strong> <a href="18913.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] opal/mca/dl/ opal_dl_open with NULL fname - assert?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We noticed that there is an assert(fname) in both of the dl components:
<br>
&nbsp;&nbsp;*
<br>
<a href="https://github.com/open-mpi/ompi/blob/master/opal/mca/dl/dlopen/dl_dlopen_module.c#L53">https://github.com/open-mpi/ompi/blob/master/opal/mca/dl/dlopen/dl_dlopen_module.c#L53</a>
<br>
&nbsp;&nbsp;*
<br>
<a href="https://github.com/open-mpi/ompi/blob/master/opal/mca/dl/libltdl/dl_libltdl_module.c#L21">https://github.com/open-mpi/ompi/blob/master/opal/mca/dl/libltdl/dl_libltdl_module.c#L21</a>
<br>
<p>But according to the dl.h, NULL should be an acceptable parameter for fname:
<br>
&nbsp;&nbsp;<a href="https://github.com/open-mpi/ompi/blob/master/opal/mca/dl/dl.h#L67">https://github.com/open-mpi/ompi/blob/master/opal/mca/dl/dl.h#L67</a>
<br>
<p>For dlopen() it returns a handle to the program space, which can be handy.
<br>
<p><p>I think it was just an oversight in the original code that has not been
<br>
encountered yet. But before I work on a patch, I wanted to check to see if
<br>
was a reason to put the assert in the code. git blame says that Jeff
<br>
Squyres put this code in there a while back, so I don't know if he
<br>
remembers.
<br>
<p>Thanks,
<br>
Josh
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18912/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18913.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] opal/mca/dl/ opal_dl_open with NULL fname - assert?"</a>
<li><strong>Previous message:</strong> <a href="18911.php">Abhishek Joshi: "[OMPI devel] Opal get cycles for ARM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18913.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] opal/mca/dl/ opal_dl_open with NULL fname - assert?"</a>
<li><strong>Reply:</strong> <a href="18913.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] opal/mca/dl/ opal_dl_open with NULL fname - assert?"</a>
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
