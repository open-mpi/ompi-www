<?
$subject_val = "[OMPI devel] OMPI 1.4.2rc1 warnings";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr 24 12:31:29 2010" -->
<!-- isoreceived="20100424163129" -->
<!-- sent="Sat, 24 Apr 2010 10:31:21 -0600" -->
<!-- isosent="20100424163121" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] OMPI 1.4.2rc1 warnings" -->
<!-- id="ED9B9655-E7E7-4FAF-9FBA-E3403DE3851A_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
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
<strong>Subject:</strong> [OMPI devel] OMPI 1.4.2rc1 warnings<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-24 12:31:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7803.php">Leo P.: "[OMPI devel] How is a MPI process launched ?"</a>
<li><strong>Previous message:</strong> <a href="7801.php">George Bosilca: "Re: [OMPI devel] RFC: Change PML error handler signature"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7823.php">Jeff Squyres: "Re: [OMPI devel] OMPI 1.4.2rc1 warnings"</a>
<li><strong>Reply:</strong> <a href="7823.php">Jeff Squyres: "Re: [OMPI devel] OMPI 1.4.2rc1 warnings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks
<br>
<p>I'm seeing some warnings when building 1.4.2rc1 that should probably be addressed before release:
<br>
<p>runtime/opal_params.c: In function &#145;opal_register_params&#146;:
<br>
runtime/opal_params.c:39: warning: unused variable &#145;ret&#146;
<br>
<p>coll_tuned_module.c: In function &#145;tuned_module_enable&#146;:
<br>
coll_tuned_module.c:194: warning: unused variable &#145;i&#146;
<br>
<p>rcache_vma.c: In function &#145;mca_rcache_vma_module_init&#146;:
<br>
rcache_vma.c:41: warning: assignment from incompatible pointer type
<br>
<p>The first two are trivial and I will simply fix them myself. The last one is less obvious to me - can someone with knowledge of that code give us a patch?
<br>
<p>Thanks
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7803.php">Leo P.: "[OMPI devel] How is a MPI process launched ?"</a>
<li><strong>Previous message:</strong> <a href="7801.php">George Bosilca: "Re: [OMPI devel] RFC: Change PML error handler signature"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7823.php">Jeff Squyres: "Re: [OMPI devel] OMPI 1.4.2rc1 warnings"</a>
<li><strong>Reply:</strong> <a href="7823.php">Jeff Squyres: "Re: [OMPI devel] OMPI 1.4.2rc1 warnings"</a>
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
