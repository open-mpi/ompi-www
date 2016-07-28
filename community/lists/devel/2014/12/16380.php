<?
$subject_val = "[OMPI devel] RTLD_GLOBAL question";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  1 16:07:44 2014" -->
<!-- isoreceived="20141201210744" -->
<!-- sent="Mon, 1 Dec 2014 14:07:43 -0700" -->
<!-- isosent="20141201210743" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="[OMPI devel] RTLD_GLOBAL question" -->
<!-- id="CAF1Cqj6+0o0Znh_c=V22=3mUTRSHhRvHnuazTf=FJbttUJ8CEw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] RTLD_GLOBAL question<br>
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-01 16:07:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16381.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RTLD_GLOBAL question"</a>
<li><strong>Previous message:</strong> <a href="16379.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] OMPI devel] race condition in abort can cause mpirun v1.8 hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16381.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RTLD_GLOBAL question"</a>
<li><strong>Reply:</strong> <a href="16381.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RTLD_GLOBAL question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi ompi developers,
<br>
<p>If you always configure ompi with --disable-dlopen you can delete this
<br>
message now.
<br>
<p>There has been some discussion of end case situations with use of dlopen
<br>
in the ompi mca framework that can lead to unresolved symbols when
<br>
subsequent shared libraries are dlopen'd that might needs symbols from
<br>
a library that had been opened previously.  Yes these libraries should be
<br>
doing something like a second dlopen of the lib they are dependent on,
<br>
but that's a different story involving other software projects outside of
<br>
ompi.
<br>
<p>The default with the mca framework dlopen'ing of component libraries
<br>
is not to use RTLD_GLOBAL, and there does not currently appear to be a way
<br>
to change this behavior at runtime.
<br>
<p>Is there a reason for avoiding use of RTLD_GLOBAL in libltdl's use of
<br>
dlopen?
<br>
Would it be okay to add RTLD_GLOBAL to the default module_flags used
<br>
in the vm_open - modulo detection of the definition of RTLD_GLOBAL at
<br>
compile time.  Perhaps adding a way with an env. or config option to not
<br>
enable RTLD_GLOBAL by default?
<br>
<p>Thanks,
<br>
<p>Howard
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16380/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16381.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RTLD_GLOBAL question"</a>
<li><strong>Previous message:</strong> <a href="16379.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] OMPI devel] race condition in abort can cause mpirun v1.8 hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16381.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RTLD_GLOBAL question"</a>
<li><strong>Reply:</strong> <a href="16381.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RTLD_GLOBAL question"</a>
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
