<?
$subject_val = "[OMPI devel] OMPI_XXX defines in opal_config.h.in question";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 29 15:58:44 2014" -->
<!-- isoreceived="20140729195844" -->
<!-- sent="Tue, 29 Jul 2014 19:58:42 +0000" -->
<!-- isosent="20140729195842" -->
<!-- name="Pritchard Jr., Howard" -->
<!-- email="howardp_at_[hidden]" -->
<!-- subject="[OMPI devel] OMPI_XXX defines in opal_config.h.in question" -->
<!-- id="5F6FB0CDAF4F98419A0D970E1F65ED05ACBB7B_at_ECS-EXG-P-MB05.win.lanl.gov" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] OMPI_XXX defines in opal_config.h.in question<br>
<strong>From:</strong> Pritchard Jr., Howard (<em>howardp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-29 15:58:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15324.php">George Bosilca: "Re: [OMPI devel] OMPI_XXX defines in opal_config.h.in question"</a>
<li><strong>Previous message:</strong> <a href="15322.php">Bert Wesarg: "Re: [OMPI devel] SHMEM symmetric objects in shared libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15324.php">George Bosilca: "Re: [OMPI devel] OMPI_XXX defines in opal_config.h.in question"</a>
<li><strong>Reply:</strong> <a href="15324.php">George Bosilca: "Re: [OMPI devel] OMPI_XXX defines in opal_config.h.in question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Folks,
<br>
<p>So I'm trying to get my pmix project back in order after making
<br>
the big mistake of pulling in the BTL move stuff.
<br>
<p>I get bizillions of warning messages from the compiler now
<br>
about undefined macros.
<br>
<p>A number of the culprits are in opal_config.h.in, and begin
<br>
with OMPI, like OMPI_WANT_MEMCHECKER.
<br>
<p>Throughout the ompi code though there is now a OPAL_WANT_MEMCHECKER.
<br>
Do we want to change all of the defines in opal_config.h.in to start with OPAL?
<br>
<p>Howard
<br>
<p><p>-------------------------------------------------
<br>
Howard Pritchard
<br>
HPC-5
<br>
Los Alamos National Laboratory
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15323/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15324.php">George Bosilca: "Re: [OMPI devel] OMPI_XXX defines in opal_config.h.in question"</a>
<li><strong>Previous message:</strong> <a href="15322.php">Bert Wesarg: "Re: [OMPI devel] SHMEM symmetric objects in shared libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15324.php">George Bosilca: "Re: [OMPI devel] OMPI_XXX defines in opal_config.h.in question"</a>
<li><strong>Reply:</strong> <a href="15324.php">George Bosilca: "Re: [OMPI devel] OMPI_XXX defines in opal_config.h.in question"</a>
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
