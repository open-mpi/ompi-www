<?
$subject_val = "[OMPI devel] new IU jenkins project";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 29 17:33:33 2015" -->
<!-- isoreceived="20150729213333" -->
<!-- sent="Wed, 29 Jul 2015 15:33:22 -0600" -->
<!-- isosent="20150729213322" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="[OMPI devel] new IU jenkins project" -->
<!-- id="CAF1Cqj6Dq5QsgnHX1CjK8cYj_8AD1ovkrPASH=ZnXyRyfhEgWg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] new IU jenkins project<br>
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-29 17:33:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17716.php">Christoph Niethammer: "[OMPI devel] C standard compatibility"</a>
<li><strong>Previous message:</strong> <a href="17714.php">Gilles Gouaillardet: "Re: [OMPI devel] stdout, stderr reporting different values for isatty"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17720.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] new IU jenkins project"</a>
<li><strong>Reply:</strong> <a href="17720.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] new IU jenkins project"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Folks,
<br>
<p>Per a request from Jeff, I've created a new project on the IU jenkins
<br>
server to
<br>
verify that PRs on master can successfully build/install with the
<br>
--disable-dlopen option.
<br>
<p>Right now we only have gcc 4.4.7 on the vm box (with 2 cpus now!) but I
<br>
plan to install 4.8.5 and the super new 5.2 versions and run the build
<br>
project using both of those compilers.
<br>
<p>If anyone is interested in having other compilers used as part of the
<br>
test, and they have the license etc. for said compiler in the event that
<br>
is necessary, please let me know I can work with you on adding the compiler
<br>
to the test script.
<br>
<p>The jenkin VM is a x86_64 (Intel E5-2690 cpus) VM running rhel 6.7.
<br>
<p>Thanks,
<br>
<p>Howard
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17715/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17716.php">Christoph Niethammer: "[OMPI devel] C standard compatibility"</a>
<li><strong>Previous message:</strong> <a href="17714.php">Gilles Gouaillardet: "Re: [OMPI devel] stdout, stderr reporting different values for isatty"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17720.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] new IU jenkins project"</a>
<li><strong>Reply:</strong> <a href="17720.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] new IU jenkins project"</a>
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
