<?
$subject_val = "[OMPI devel] RFC : what is the best way to fix the memory leak in mca/pml/bfo";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 16 01:57:23 2014" -->
<!-- isoreceived="20140516055723" -->
<!-- sent="Fri, 16 May 2014 14:57:23 +0900" -->
<!-- isosent="20140516055723" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC : what is the best way to fix the memory leak in mca/pml/bfo" -->
<!-- id="CAAkFZ5soK+S3oDc9FGpExPEDXe9ETyynJtme4Z99bQWKxytEKQ_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] RFC : what is the best way to fix the memory leak in mca/pml/bfo<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-16 01:57:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14816.php">Ralph Castain: "Re: [OMPI devel] RFC : what is the best way to fix the memory leak in mca/pml/bfo"</a>
<li><strong>Previous message:</strong> <a href="14814.php">Gilles Gouaillardet: "[OMPI devel] yesterday commits caused a crash in helloworld with --mca btl tcp, self"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14816.php">Ralph Castain: "Re: [OMPI devel] RFC : what is the best way to fix the memory leak in mca/pml/bfo"</a>
<li><strong>Reply:</strong> <a href="14816.php">Ralph Castain: "Re: [OMPI devel] RFC : what is the best way to fix the memory leak in mca/pml/bfo"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Folks,
<br>
<p>there is a small memory leak in ompi/mca/pml/bfo/pml_bfo_component.c
<br>
<p>in my environment, this module is not used.
<br>
this means mca_pml_bfo_component_open() and mca_pml_bfo_component_close()
<br>
are invoked but
<br>
mca_pml_bfo_component_init() and mca_pml_bfo_component_fini() are *not*
<br>
invoked.
<br>
<p>mca_pml_bfo.allocator is currently allocated in
<br>
mca_pml_bfo_component_open() and released in mca_pml_bfo_component_fini()
<br>
this causes a leak (at least in my environment, since
<br>
mca_pml_bfo_component_fini() is not invoked)
<br>
<p>One option is to release the allocator in mca_pml_bfo_component_close()
<br>
An other option is to allocate the allocator in mca_pml_bfo_component_init()
<br>
<p>Which is the correct/best one ?
<br>
<p>i attached two patches, which one (if any) should be commited ?
<br>
<p>Thanks in advance for your insights
<br>
<p>Gilles
<br>
<p>

<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14815/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/x-diff attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14815/bfo.allocate_in_init.patch">bfo.allocate_in_init.patch</a>
</ul>
<!-- attachment="bfo.allocate_in_init.patch" -->
<hr>
<ul>
<li>text/x-diff attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14815/bfo.free_in_close.patch">bfo.free_in_close.patch</a>
</ul>
<!-- attachment="bfo.free_in_close.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14816.php">Ralph Castain: "Re: [OMPI devel] RFC : what is the best way to fix the memory leak in mca/pml/bfo"</a>
<li><strong>Previous message:</strong> <a href="14814.php">Gilles Gouaillardet: "[OMPI devel] yesterday commits caused a crash in helloworld with --mca btl tcp, self"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14816.php">Ralph Castain: "Re: [OMPI devel] RFC : what is the best way to fix the memory leak in mca/pml/bfo"</a>
<li><strong>Reply:</strong> <a href="14816.php">Ralph Castain: "Re: [OMPI devel] RFC : what is the best way to fix the memory leak in mca/pml/bfo"</a>
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
