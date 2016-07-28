<?
$subject_val = "Re: [OMPI devel] Compile only one framework/component";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 27 08:18:56 2015" -->
<!-- isoreceived="20151027121856" -->
<!-- sent="Tue, 27 Oct 2015 21:18:52 +0900" -->
<!-- isosent="20151027121852" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Compile only one framework/component" -->
<!-- id="CAAkFZ5scY_fUb2Yo3kYvuK=pym7GzqRAxCueMiy0b36DrMFGVQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CADf4hJ+S2wfudL4yuF8hv9mUX84DZ-W+sL=GDj+W32DMM6dH4w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Compile only one framework/component<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-27 08:18:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18276.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Compile only one framework/component"</a>
<li><strong>Previous message:</strong> <a href="18274.php">Ralph Castain: "Re: [OMPI devel] Compile only one framework/component"</a>
<li><strong>In reply to:</strong> <a href="18270.php">Federico Reghenzani: "[OMPI devel] Compile only one framework/component"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18276.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Compile only one framework/component"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Federico,
<br>
<p>in order to build one component, just cd into the component directory (in
<br>
build directory if you are using VPATH) and run make (install)
<br>
<p>components and frameworks depend on other framework, so it is generally
<br>
safer to run make from the top build directory
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Tuesday, October 27, 2015, Federico Reghenzani &lt;
<br>
federico1.reghenzani_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Is there any option for `make` to start compilation only for one framework
</span><br>
<span class="quotelev1">&gt; or component? Even if there are no modifications a simple make takes on my
</span><br>
<span class="quotelev1">&gt; machine ~24sec to check all ompi directories (I know this is not a big
</span><br>
<span class="quotelev1">&gt; time, but it's a bit tedious during development)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Federico
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; __
</span><br>
<span class="quotelev1">&gt; Federico Reghenzani
</span><br>
<span class="quotelev1">&gt; M.Eng. Student @ Politecnico di Milano
</span><br>
<span class="quotelev1">&gt; Computer Science and Engineering
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18275/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18276.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Compile only one framework/component"</a>
<li><strong>Previous message:</strong> <a href="18274.php">Ralph Castain: "Re: [OMPI devel] Compile only one framework/component"</a>
<li><strong>In reply to:</strong> <a href="18270.php">Federico Reghenzani: "[OMPI devel] Compile only one framework/component"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18276.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Compile only one framework/component"</a>
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
